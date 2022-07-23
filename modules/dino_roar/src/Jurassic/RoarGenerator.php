<?php

namespace Drupal\dino_roar\Jurassic;

use Drupal\Core\KeyValueStore\KeyValueFactory;

class RoarGenerator
{
    private KeyValueFactory $keyValueFactory;

    public function __construct(KeyValueFactory $keyValueFactory)
    {
        $this->keyValueFactory = $keyValueFactory;
    }

    public function getRoar($length)
    {
        $key = 'roar' . $length;
        $store = $this->keyValueFactory->get('dino');

        if($store->has($key)) {
            return $store->get($key);
        }

        sleep(2);

        $str = 'B'.str_repeat('u',$length).'rp!';
        $store->set($key, $str);

        return $str;
    }
}
