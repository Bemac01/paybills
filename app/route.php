<?php

use App\Controller\HomeController;
use App\Core\Request;
use App\Core\Route;

$route = new Route();
$route->get("/", [HomeController::class,"index"]);

$route->get("/blog/{id}/{title}", [HomeController::class,"blog"]);
$route->get("/blog/{id}/{title}/{slug}/{amount}", [HomeController::class,"blog"]);

$route->get("/about", [HomeController::class,"about"]);

$route->get("/contact-us", [HomeController::class,"contact"]);

//inline function
$route->get("/area/{id}/{title}", function (Request $request, $args){
    echo "<pre>";
    var_dump($args);
    echo"</pre>";
});

$route->run();