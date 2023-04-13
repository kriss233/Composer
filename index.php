<?php

//composer config sort-packages true

use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . "/vendor/autoload.php";

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/test.env');

dump($_ENV);