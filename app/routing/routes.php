<?php

$router = new AltoRouter;

$router->map('GET','/','App\controllers\IndexController@show','home');

require_once __DIR__. '/admin_routes.php';