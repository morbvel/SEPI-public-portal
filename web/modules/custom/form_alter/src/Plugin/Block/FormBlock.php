<?php

namespace Drupal\form_alter\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'form' block.
 *
 * @Block(
 *   id = "form_block",
 *   admin_label = @Translation("Privacities form block"),
 *   category = @Translation("Custom form")
 * )
 */
class FormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
   public function build() {
     $form = \Drupal::formBuilder()->getForm('\Drupal\form_alter\Form\Privacities_Form');
     return $form;
  }
}
