<?php

require '../venpure/autoload.php';

use App\Bootstrap;
use App\Controllers\AdminController;
use App\Controllers\ErrorController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Middlewares\AuthMiddleware;
use App\Middlewares\LoginMiddleware;
use SimpleMVC\App;
use SimpleMVC\Core\Router;

Bootstrap::setup();

$router = new Router();
$router->setErrorHandler(new ErrorController());

$router->get('/', [HomeController::class,'index'])
        ->addMiddleware(new LoginMiddleware());

$router->post('/sign-in', [LoginController::class,'sign_in']);
$router->get('/logout', [LoginController::class,'logout']);

$router->get('/admin-dashboard', [AdminController::class,'home'])
        ->addMiddleware(new AuthMiddleware());

$router->post('/get-title-deed-list', [AdminController::class,'get_title_deed_list'])
    ->addMiddleware(new AuthMiddleware());

$app = new App();
$app->addRouter($router);
$app->run();