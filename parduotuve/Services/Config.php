<?php declare(strict_types=1);

namespace Shop\Services;

class Config
{
    public function get(string $configString)
    {
        return [
            'host' => 'localhost',
            'db' => 'KCS23V',
            'pass' => '',
            'user' => 'root',
        ];
    }
}