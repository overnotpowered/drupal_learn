<?php

namespace Drupal\hola_mundo\Controller;

use Drupal\Core\Controller\ControllerBase;

class HolaMundoController extends ControllerBase {
  public function mensaje() {
    return [
      '#markup' => $this->t('¡Hola Mundo!'),
    ];
  }
}