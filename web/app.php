<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
ini_set('display_errors', '1');
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;


/**
 * @var Composer\Autoload\ClassLoader
 */
$loader = require ROOT . DS . 'app' . DS . 'autoload.php';
Debug::enable();

// Framework init
$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();

// Handle request
$response = $kernel->handle($request);

// send response
$response->send();
$kernel->terminate($request, $response);