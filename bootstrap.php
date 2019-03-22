<?php

require_once __DIR__ .'/vendor/autoload.php';

define('APP_ROOT', __DIR__);

$dotenv = new \Dotenv\Dotenv(__DIR__);
try {
    $dotenv->load();
} catch (\Dotenv\Exception\InvalidPathException $ex) {
    //
}
