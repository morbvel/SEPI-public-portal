<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 29/1/18
 * Time: 15:43
 */

namespace Drupal\newsletter\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class Newsletter_Form_Prensa_Form extends FormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'newsletter_PRENSA_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['field_email'] = array(
            '#type' => 'textfield',
            '#maxlength' => 255,
            '#required' => TRUE,
            '#attributes' => array('class' => array('form-control'), 'name' => 'email', 'id' => 'email')
        );

        $form['field_hidden'] = array(
            '#type' => 'hidden',
            '#value' => 'form_id',
            '#attributes' => array('name' => 'form_id')
        );

        $form['field_name'] = array(
            '#type' => 'hidden',
            '#value' => $form_state->getValue('field_email'),
            '#attributes' => array('name' => 'name', 'id' => 'name')
        );

        $form['field_grupos'] = array(
            '#type' => 'hidden',
            '#value' => '3',
            '#attributes' => array('name' => 'groups[]', 'id' => 'groups-3')
        );



        $current_path = \Drupal::service('path.current')->getPath();
        $alias_ruta = \Drupal::service('path.alias_manager')->getAliasByPath($current_path);
        $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
        $form['field_success'] = array(
            '#type' => 'hidden',
            '#value' => 'http://www.sepi.es/'.$language.'/confirmacion-suscripcion',
            '#attributes' => array('name' => 'successUrl', 'id' => 'successUrl')
        );
        $form['field_confirmation'] = array(
            '#type' => 'hidden',
            '#value' => 'http://www.sepi.es/'.$language.'/alta-suscripcion',
            '#attributes' => array('name' => 'confirmationUrl', 'id' => 'confirmationUrl')
        );
        $form['field_error'] = array(
            '#type' => 'hidden',
            '#value' => 'http://www.sepi.es/'.$language.'/suscripcion-incorrecta',
            '#attributes' => array('name' => 'errorUrl', 'id' => 'errorUrl')
        );
        $form['field_unsubscribe_url'] = array(
            '#type' => 'hidden',
            '#value' => 'http://www.sepi.es/'.$language.'/baja-suscripcion',
            '#attributes' => array('name' => 'unsubscribeUrl', 'id' => 'unsubscribeUrl')
        );

        $form['#method'] = 'post';
        $form['#action'] = 'http://sepi.ip-zone.com/ccm/subscribe/index/form/';

        $form['suscribe'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Suscribirse'),
            '#button_type' => 'primary',
            '#attributes' => array('class' => array('btn btn-alt'), 'id' => 'suscribe_sepi', 'name' => 'suscribe')
        );

        $form['unsuscribe'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Darse de Baja'),
            '#button_type' => 'primary',
            '#attributes' => array('class' => array('btn btn-alt'), 'id' => 'unsuscribe_sepi', 'name' => 'unsuscribe')
        );

        $form['#theme'] = 'newsletter_sepi_prensa';

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state){

        if ( !filter_var($form_state->getValue('field_email'), FILTER_VALIDATE_EMAIL) ){
            $form_state->setErrorByName('field_email', $this->t('Correo electrónico no válido'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {

    }

}