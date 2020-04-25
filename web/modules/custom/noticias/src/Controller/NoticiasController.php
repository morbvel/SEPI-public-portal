<?php

namespace Drupal\noticias\Controller;

use Drupal\Core\Controller\ControllerBase;

class NoticiasController extends ControllerBase{
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!')
    );
  }
}
