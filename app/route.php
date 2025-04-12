<?php

use App\Controller\HomeController;
use App\Core\Route;

$route = new Route();
$route->get("/", [HomeController::class,"index"]);
$route->get("/about", [HomeController::class,"about"]);
$route->get("/blog/{id}/{title}", [HomeController::class,"blog"]);

$route->run();