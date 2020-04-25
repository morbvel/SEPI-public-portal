<?php
/**
 * @file
 * Contains \Drupal\newsletter\Form\newsletterForm.
 */
namespace Drupal\newsletter\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;

class Newsletter_SEPI_Form extends FormBase{

  /**
  * {@inheritdoc}
  */
  public function getFormId() {
    return 'newsletter_SEPI_form';
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
      '#attributes' => array('name' => 'name', 'id' => 'name'),
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

    $form['#method'] = 'post';
    $form['#action'] = 'http://sepi.ip-zone.com/ccm/subscribe/index/form/';

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Suscribirse'),
      '#button_type' => 'primary',
      '#attributes' => array('name' => 'submit', 'class' => array('col-xs-12'))
    );

    $form['submit_button'] = $form['actions']['submit'];

    $form['#theme'] = 'newsletter_sepi';

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
