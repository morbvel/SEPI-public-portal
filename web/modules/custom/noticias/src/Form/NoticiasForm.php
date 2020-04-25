<?php

namespace Drupal\noticias\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\Loader\XMLFileLoader;
use Drupal\Core\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocatorInterface;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use \DateTime;

class NoticiasForm extends ConfigFormBase{
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'noticias_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'noticias.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state){
    $config = $this->config('noticias.settings');

    $form['noticias_fichero'] = array(
      '#type' => 'managed_file',
      '#title' => $this->t('Fichero'),
      '#upload_validators'    => [
        'file_validate_extensions'    => array('xml txt')
      ],
      '#default_value' => $config->get('fichero')
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state){

    $file_id = $form_state->getValue('noticias_fichero');
    $file = \Drupal\file\Entity\File::load($file_id[0]);

    $uri = $file->getFileUri();
    $stream_wrapper_manager = \Drupal::service('stream_wrapper_manager')->getViaUri($uri);
    $file_path = $stream_wrapper_manager->realpath();

    $data = file_get_contents($file->getFileUri());
    //drupal_set_message("El contenido del fichero ".$file->getFilename().' es: '.$data);

    $xml=simplexml_load_string($data);

    foreach ($xml as $elemento) {
      if ($elemento->ID_CONTENT_TYPE == 52 && $elemento->DESCRIPTION == 'Sala de Prensa' ){
        $noticia=simplexml_load_string($elemento->XML);

        $aux = "";
        $nombre_imagen = "";
        foreach (explode("/", $noticia->Imagenes->Imagen) as $valor) {
          $aux = $valor;
          $nombre_imagen = $valor;
        }


        $data = "";
        $file = "";
        if( file_exists('public://img/'.$nombre_imagen) ){
          if( strpos($nombre_imagen, 'jpg') !== false || strpos($nombre_imagen, 'jpeg') !== false || strpos($nombre_imagen, 'png') !== false || strpos($nombre_imagen, 'gif') !== false ){
            $data = file_get_contents('public://img/'.$nombre_imagen);
            $file = file_save_data($data, 'public://'.$nombre_imagen, FILE_EXISTS_REPLACE);
          }
        }

        $aux = $noticia->Texto;
        $string = "";

          foreach ($aux->p as $parrafo) {



            if(isset($parrafo->ul)){
              $string = $string."<p>".$parrafo."</p>";

              foreach($parrafo->ul as $ul){
                $string = $string."<ul>";
                foreach($ul->li as $li){
                  $string = $string."<li>".$li."</li>";
                }
                $string = $string."</ul>";

              }
            }elseif(isset($parrafo->b)){
              $string = $string."<p>".$parrafo;

              foreach($parrafo->b as $b){
                $string = $string."<b>".$b."</b>";
              }

              $string = $string."</p>";

            }else{
              $string = $string."<p>".$parrafo."</p>";
            }
          }


          if($noticia->Enlaces){
            foreach($noticia->Enlaces as $enlaces){
              foreach($enlaces as $enlace){
                if(strpos($enlace->Link, 'http') != false){
                  $a = "<a class='enlace_noticias_importacion' href=".$enlace->Link." target='_blank'>".$enlace->TextoEnlace."</a> ";
                  $string = str_replace($enlace->TextoEnlace, $a, $string);
                }
              }
            }
          }


        $salida_noticia = htmlspecialchars_decode($string);

        if( strlen($noticia->Antetitulo) >= 75 ){
          $noticia->Antetitulo = substr($noticia->Antetitulo, 0, 74);
        }


        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';

        $empresas_ids = \Drupal::entityQuery('node')->condition('type','empresa')->execute();
        $empresas_nodes =  \Drupal\node\Entity\Node::loadMultiple($empresas_ids);

        foreach ($empresas_nodes as $node) {
          $cadena = strtolower(trim($node->getTitle()));
          $cadena = utf8_decode($cadena);
          $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
          $cadena = strtolower($cadena);

          $empresas[] = $cadena;
        }

        $empresa_sepi = strtolower(trim($noticia->Empresa));
        $empresa_sepi = utf8_decode($empresa_sepi);
        $empresa_sepi = strtr($empresa_sepi, utf8_decode($originales), $modificadas);
        $empresa_sepi = strtolower($empresa_sepi);

        if( strcmp($empresa_sepi, "") !== 0  && in_array($empresa_sepi, $empresas) ){
          $values = array('title' => $empresa_sepi, 'type' => 'empresa');
          $nodes = \Drupal::entityTypeManager()
            ->getStorage('node')
            ->loadByProperties($values);

          foreach ($nodes as $node) {
            $node_id = $node->id();
          }

        }
        else{
          $node_id = "";
        }

        $nid = "";
        $date = new DateTime($noticia->FechaAlta);

        $mydate = new DateTime('01/01/2016');

        $noticias_ids = \Drupal::entityQuery('node')->condition('type','noticias')->execute();
        $noticias_nodes =  \Drupal\node\Entity\Node::loadMultiple($noticias_ids);
        //$noticias_nodes =  \Drupal\node\Entity\Node::load(17037);

        foreach($noticias_nodes as $noticia_existente){

          $id_noticia_existente = (int)$noticia_existente->get('field_id_importacion')->value + 1;
          if($id_noticia_existente == (int)$noticia->Id){

            $node_en = $noticia_existente->addTranslation('en');
            $node_en->title = $noticia->Titular;
            $node_en->changed  = strtotime($date->format('d-m-Y'));
            $node_en->created  = strtotime($date->format('d-m-Y'));
            $node_en->field_descripcion->value = $salida_noticia;
            $node_en->field_descripcion->format = 'full_html';
            $node_en->field_resumen_noticia = $noticia->Titular;
            $node_en->field_pie_de_foto = $noticia->Antetitulo;
            $node_en->save();
            //\Drupal::service('path.alias_storage')->save("/node/" . $node->id(), "/mi/ruta", "es");


            //$entity_array = $noticia_existente->toArray();

            /*$noticia_en =[];
            $noticia_en['title'] = $noticia->Titular;
            $noticia_en['changed']  = strtotime($date->format('d-m-Y'));
            $noticia_en['created']  = strtotime($date->format('d-m-Y'));
            $noticia_en['field_descripcion'] = $salida_noticia;
            $noticia_en['field_resumen_noticia'] = $noticia->Titular;
            $noticia_en['field_pie_de_foto'] = $noticia->Antetitulo;*/

            //$noticia_en = array_merge($entity_array, $noticia_en);



            //$noticia_existente->addTranslation('en', $noticia_en)->save();

          }
        }


        /*if( $date > $mydate ){
          \Drupal::logger('Id noticia')->notice("id noticia: ".$noticia->Id);
          if($file){
            $node = Node::create([
              'type'                => 'noticias',
              'title'               => $noticia->Titular,
              'changed'             => strtotime($date->format('d-m-Y')),
              'created'             => strtotime($date->format('d-m-Y')),
              'field_descripcion'   => $salida_noticia,
              'field_resumen_noticia' => $noticia->Titular,
              'field_pie_de_foto'   => $noticia->Antetitulo,
              'field_image' => [
                'target_id' => $file->id(),
                'alt' => $nombre_imagen,
                'title' => $nombre_imagen
              ],
              'field_imagen_distributiva' => [
                'target_id' => $file->id(),
                'alt' => $nombre_imagen,
                'title' => $nombre_imagen
              ],
              'field_direccion'     => $noticia->Lugar,
              'field_empresa' => [
                'target_id' => $node_id
              ],
              'field_id_importacion' => (int)$noticia->Id
            ]);
          }
          else if(!$file){
            $node = Node::create([
              'type'                => 'noticias',
              'title'               => $noticia->Titular,
              'changed'             => strtotime($date->format('d-m-Y')),
              'created'             => strtotime($date->format('d-m-Y')),
              'field_descripcion'   => $salida_noticia,
              'field_resumen_noticia' => $noticia->Titular,
              'field_pie_de_foto'   => $noticia->Antetitulo,
              'field_direccion'     => $noticia->Lugar,
              'field_empresa' => [
                'target_id' => $node_id
              ],
              'field_id_importacion' => (int)$noticia->Id
            ]);
          }
          $nid = $node->id();
          $node->save();

          $node_storage = Node::load($node->id());
          $node_storage->save();
        }*/

      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getOutput(){
    global $base_url;

    $fileid = $this->get('noticias_fichero');

    $output = '<p>'.$fieldid.'</p>';
    return array('#markup' => $output);
  }

}
