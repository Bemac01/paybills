<?php

use App\Controller\AuthController;
use App\Controller\HomeController;
use App\Controller\UserController;
use App\Core\Request;
use App\Core\Route;


$route = new Route();
$route::get("/", [HomeController::class,"index"]);

//register route
$route::get("/register", [HomeController::class,"register"]);
$route::post("/register-user", [AuthController::class,"register"]);

//login route
$route::get("/login", [HomeController::class,"login"]);
$route::post("/login-user", [AuthController::class,"login"]);

//logout route
$route::get("/logout", [AuthController::class,"logout"]);

//Middleware route
$route->middleware('user', function ($middleware) use ($route) {
    //user route
    $route::get("/user", [HomeController::class,"user"], $middleware);
    //dashboard route
    $route::get("/user/dashboard", [UserController::class,"dashboard"], $middleware);
    //wallet    
    $route::get("/user/wallet", [UserController::class,"wallet"], $middleware);
    //profile
    $route::get("/user/profile", [UserController::class,"profile"], $middleware);
    //transaction
    $route::get("/user/transactions", [UserController::class,"transactions"], $middleware);
    //plans
    $route::get("/user/plan", [UserController::class,"plan"], $middleware);
    //withrawal
    $route::get("/user/withdraw", [UserController::class,"withdraw"], $middleware);

});

$route::get("/blog/{id}/{title}", [HomeController::class,"blog"]);
$route::get("/blog/{id}/{title}/{slug}/{amount}", [HomeController::class,"blog"]);

$route::get("/about", [HomeController::class,"about"]);

$route::get("/contact-us", [HomeController::class,"contact"]);

//inline function
$route::get("/area/{id}/{title}", function (Request $request, $args)
{
    echo "<h1>Area</h1>";
    
});


$route::run();