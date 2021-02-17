<?php 
require __DIR__.'/../vendor/autoload.php';

use Routing\Route;
use Routing\Router;

//register routes
$router = new Router();
$router->register(new Route('/^\/srp-violant/', 'SrpController', 'singleResponsebilityViolet'));
$router->register(new Route('/^\/srp-refactor/', 'SrpController', 'singleResponsebility'));
$router->handleRequest($_SERVER['REQUEST_URI']);
