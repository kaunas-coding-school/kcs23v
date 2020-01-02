<?php declare(strict_types=1);

namespace Shop\Services;

class Container
{
    public $services = [];

    public function get($key)
    {
        if (array_key_exists($key, $this->services)) {
            return $this->services[$key];
        }

        throw new \OutOfBoundsException($key);
    }

    public function set($key, $service)
    {
        $this->services[$key] = $service;
    }
}
