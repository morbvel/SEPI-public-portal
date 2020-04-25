<?php
/**
 * @file
 * Contains \Drupal\form_alter\Form\Privacities_Form.
 */
namespace Drupal\form_alter\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class Privacities_Form extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'busqueda_privatizaciones';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $nids = \Drupal::entityQuery('node')->condition('type','privatizaciones')->execute();
    $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);

    $dropdown_empresa['All'] = t("Cualquiera");
    foreach ($nodes as $node) {
      $dropdown_empresa[$node->getTitle()] = $node->getTitle();
    }

    asort($dropdown_empresa);

    $dropdown_procesos['All'] = t("Cualquiera");
    $dropdown_procesos['Procesos+en+Curso'] = t("Procesos en Curso");
    $dropdown_procesos['Procesos+Realizados'] = t("Procesos Realizados");

    $form['title'] = array(
      '#type' => 'select',
      '#default_value' => 'All',
      '#validated' => TRUE,
      '#options' => $dropdown_empresa
    );

    $form['field_fecha_de_privatizacion_value'] = array(
      '#type' => 'date',
      '#validated' => TRUE
    );

    $form['field_fecha_de_privatizacion_value_1'] = array(
      '#type' => 'date',
      '#validated' => TRUE
    );

    $form['field_procesos_en_curso_value'] = array(
      '#type' => 'select',
      '#default_value' => '',
      '#validated' => TRUE,
      '#options' => $dropdown_procesos
    );


    $form['#method'] = 'get';
    $form['#action'] = '/sectores/procesos-de-privatizacion/privatizaciones';

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Search'),
      '#button_type' => 'primary',
    );


    $form['#theme'] = 'privatizaciones';

    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }
}
