<?php

declare(strict_types=1);


namespace App;

class App
{
    public function __construct()
    {
        echo 'Hello, world!';
        dump($_SERVER);
    }
}
