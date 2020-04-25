<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 29/1/18
 * Time: 16:02
 */

namespace Drupal\newsletter\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'form' block.
 *
 * @Block(
 *   id = "newsletter_PRENSA_form_block",
 *   admin_label = @Translation("Newsletter SEPI form block in News"),
 *   category = @Translation("Custom form")
 * )
 */
class PrensaFormBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build() {
        $form = \Drupal::formBuilder()->getForm('\Drupal\newsletter\Form\Newsletter_Form_Prensa_Form');
        return $form;
    }
}