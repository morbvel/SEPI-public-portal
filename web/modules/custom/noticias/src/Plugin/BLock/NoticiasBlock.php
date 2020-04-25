<?php

namespace Drupal\noticias\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Noticias' Block.
 *
 * @Block(
 *   id = "noticias_block",
 *   admin_label = @Translation("Bloque Noticias"),
 *   category = @Translation("Bloque Noticias"),
 * )
 */

class NoticiasBlock extends BlockBase implements BlockPluginInterface{
  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();

    if (!empty($config['noticias_block_name'])) {
      $name = $config['noticias_block_name'];
    }
    else {
      $name = $this->t('to no one');
    }
    return array(
      '#markup' => $this->t('Hola @name!', array(
        '@name' => $name,
      )),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state){
    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

    $form['noticias_block_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Quién'),
      '#description' => $this->t('A quién quieres decir hola?'),
      '#default_value' => isset($config['noticias_block_name']) ? $config['noticias_block_name'] : '',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();
    $this->configuration['noticias_block_name'] = $values['noticias_block_name'];
  }

}
