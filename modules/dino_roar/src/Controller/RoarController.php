<?php

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class RoarController extends ControllerBase
{
    public function roar($count)
    {
        $generator = \Drupal::service('dino_roar.roar_generator');
        return new Response($generator->getRoar(13));
    }
}
