<?php

use App\Controllers\{HomeController, LoginController, ProductController};
use Core\Library\Router;

$router = new Router($app->container);
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/product/([a-z\-]+)', [ProductController::class, 'show']);
$router->add('GET', '/product/([a-z\-]+)/category/([a-z]+)', [ProductController::class, 'index']);
$router->add('GET', '/login', [LoginController::class, 'index']);
$router->add('POST', '/login', [LoginController::class, 'store']);
$router->execute();
