<?php

namespace Drupal\dino_roar\Controller;

use Symfony\Component\HttpFoundation\Response;

class RoarController
{
    public function roar($count)
    {
        return new Response('Roar!' . $count);
    }
}
