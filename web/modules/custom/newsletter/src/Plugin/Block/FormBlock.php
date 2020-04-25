<?php

namespace Drupal\newsletter\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'form' block.
 *
 * @Block(
 *   id = "newsletter_SEPI_form_block",
 *   admin_label = @Translation("Newsletter SEPI form block"),
 *   category = @Translation("Custom form")
 * )
 */
class FormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
   public function build() {
     $form = \Drupal::formBuilder()->getForm('\Drupal\newsletter\Form\Newsletter_SEPI_Form');
     return $form;
  }
}
