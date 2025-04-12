<?php

namespace App\Core; 

class Route
{
    public static $routes =  [];

    //Handlers method
    public static function routeHandler($uri, $controlargs, $method)
    {
        //save route
        self::$routes[] = [
            "uri"=> $uri,
            "controlargs"=> $controlargs,
            "method"=> $method
        ];
    }

    //get route
    public static function get($uri, $controlargs,)
    {
        self::routeHandler($uri, $controlargs, "GET");
    }

    //post route
    public static function post($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs,"POST");
    }

    //put route 
    public static function put($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs,"PUT");
    }

    //delete route
    public static function delete($uri, $controlargs)  {
        self::routeHandler($uri, $controlargs,"DELETE");
    }

    //any route 
    public static function any($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs,"ANY");
    }

    //404 
    public static function notFound()
    {
        echo "404";
    }

    //404 header 
    public static function notFoundHeader()
    {
        echo "No route found for this request";
    }

    //class not found
    public static function classNotFound($class)
    {
        echo "$class not Found";
    }

    //run
    public static function run()
    {
        echo "Runni"
    }
}