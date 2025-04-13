<?php

namespace App\Core; 

class Route
{
    public static $routes =  [];

    //Handlers method
    public static function routeHandler($uri, $controlargs, $method)
    {
        //convert Uri to preg
        if(preg_match_all('/\{[a-zA-Z0-9]+\}/', $uri, $matches))
        {
            $uri2 = preg_replace('/\{[a-zA-Z0-9]+\}/','([a-zA-Z0-9]+)', $uri);

            //escape
            $uri2 = str_replace('/','\/', $uri2);

            //start and end
            $uri2 = '/^'. $uri2 . '/$';
        }
        else
        {
           $uri2 = $uri;
           $matches = false;

        }

        //save route
        self::$routes[] = [
            "uri"=> $uri,
            "preg" => $uri2,
            "matches" => $matches,
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
        //check if route is not empty
        if(empty(self::$routes))
        {
            self::notFound();
            return;
        }
        //get current route methods 
        $method = Request::method();
        $uri = Request::uri();  

        //page not found array
        $pageNotFound = [];

        //loop through routes 
        foreach(self::$routes as $route)
        {
            //check if route not found
            if($route['matches'] !== false)
            {
                //validation
                echo 'Match is not false';
            }
            else
            {
                echo 'Match is false';
                echo '<pre>';
                var_dump($route);
                echo '</pre>';
            }
        }
    }
}