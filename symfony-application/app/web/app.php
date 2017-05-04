<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';

if ((bool)getenv('SYMFONY_DEBUG')) {
    Debug::enable();
} else {
    include_once __DIR__.'/../var/bootstrap.php.cache';
}

$kernel = new AppKernel(getenv('SYMFONY_ENV'), getenv('SYMFONY_DEBUG'));
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
