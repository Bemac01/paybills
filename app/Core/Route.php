<?php

namespace App\Core; 

use App\Core\MiddleWare;


class Route extends MiddleWare
{
    public static $routes =  [];

    //Handlers method
    public static function routeHandler($uri, $controlargs, $method, $middleware = null)
    {
        //convert Uri to preg
        if(preg_match_all('/\{[a-zA-Z0-9-_@]+\}/', $uri, $matches))
        {
            $uri2 = preg_replace('/\{[a-zA-Z0-9-_@]+\}/','([a-zA-Z0-9-_@]+)', $uri);

            //escape
            $uri2 = str_replace('/','\/', $uri2);

            //start and end
            $uri2 = '/^'. $uri2 . '$/';
        }
        else
        {
           $uri2 = $uri;
           $matches = false;

        }

        //save route
        self::$routes[] = [
            "uri" => $uri,
            "preg" => $uri2,
            "matches" => $matches,
            "controlargs" => $controlargs,
            "method" => $method,
            "middleware" => $middleware
        ];
    }

    //validate URL
    public static function validateURL($uri, $controlargs, $middleware)
    {
        //check preg pass
        if(preg_match_all('/\{[a-zA-Z0-9-_@]+\}/', $uri, $matches))
        {
            $uri2 = preg_replace('/\{[a-zA-Z0-9-_@]+\}/','([a-zA-Z0-9-_@]+)', $uri);

            //escape
            $uri2 = str_replace('/','\/', $uri2);

            //start and end
            $uri2 = '/^'. $uri2 . '$/';

            //get match data 
            $matches_data = [];

            //loop through matches
            foreach($matches[0] as $match)
            {
                $match = str_replace(['{', '}'], '', $match);
                $matches_data[$match] = null;
            }
            //check if the preg matches the uri
            if(preg_match($uri2, Request::uri(), $matches))
            {
                //process middleware
                self::processMiddleware($middleware);
                //check if $controlargs is callable
                if(is_callable($controlargs))
                {
                    //remove the frist match 
                    array_shift($matches);
                    $matches = array_combine(array_keys($matches_data),$matches);
                    //call method 
                    $controlargs(
                        new Request,
                        $matches
                    );
                    return true;
                }
                else
                {
                
                    //check if controller exist 
                    if(class_exists($controlargs[0]))
                    {
                        //check if method exist
                        if(method_exists($controlargs[0], $controlargs[1]))
                        { 
                            //remove first match
                            array_shift($matches);
                        $matches = array_combine(array_keys($matches_data), $matches);

                        //call method 
                        $controller = new $controlargs[0];
                        $controller->{$controlargs[1]}( new Request, $matches);
                        return true;
                        }
                        else
                        {
                            self::methodNotfound($controlargs[1]);
                            return false;
                        }
                    }
                    else
                    {
                        self::classNotFound($controlargs[0]);
                        return false;
                    }  
                 }
            }
            else
            {
             return false;
            }
        }
        else
        {
             //check if the preg matches the uri
             if($uri == Request::uri())
             {  

                //process middleware
                self::processMiddleware($middleware);
                //check if $controlargs is callable
                if(is_callable($controlargs))
                {
                    //call method 
                    $controlargs(
                        new Request,
                    );
                    return true;
                }
                else
                {
                    //check if controller exist 
                    if(class_exists($controlargs[0]))
                    {
                        //check if method exist
                        if(method_exists($controlargs[0], $controlargs[1]))
                        { 
                            //call method 
                            $controller = new $controlargs[0];
                            $controller->{$controlargs[1]}( new Request);
                            return true;
                        }
                        else
                        {
                            self::methodNotfound($controlargs[1]);
                            return false;
                        }
                    }
                    else
                    {
                        self::classNotFound($controlargs[0]);
                        return false;
                    }
                }
             }
             else
             {
                return false;
             }

        }
    }

    //middleware method 
    public function middleware($middleware, $function)
    {
        //process middleware 
        $function($middleware);
    }

   //redirect
   public static function redirect($simpleurl, $args = [])
   {
       //get base url
       $baseurl = Request::baseurl();
       //check if $simpleurl has /
       if (!strpos($simpleurl, '/')) {
           $simpleurl = '/' . $simpleurl;
       }
       //final url
       $url = $baseurl . $simpleurl;
       //check if args is not empty
       if (!empty($args)) {
           //add ? to url
           $url .= '?';
           //loop through args
           foreach ($args as $key => $value) {
               //add to url
               $url .= $key . '=' . $value . '&';
           }
           //remove last &
           $url = rtrim($url, '&');
       }
       //redirect
       header("Location: $url");
       exit;
   }
    //process middleware
    public static function processMiddleware($middleware)
    {
        //check if middleware is not null
        if(!is_null($middleware))
        {
            $response = self::action($middleware);
            //check if response is not 200
            if($response['code'] != 200)
            {
                //check if redirect is set
                if(isset($response['redirect']))
                {
                //redirect
                   redirect($response['redirect']);
                }
                else
                {
                    //show error
                    throw new \Exception($response['error'], $response['code']);
                              
                } 
            }    
        }
    }

    //get route
    public static function get($uri, $controlargs, $middleware = null)
    {
        self::routeHandler($uri, $controlargs, "GET", $middleware);
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
        exit;
    }

    //404 header 
    public static function notFoundHeader()
    {
        echo "No route found for this request";
        exit;
    }

    //class not found
    public static function classNotFound($class)
    {
        echo "$class not Found";
    }

    public static function methodNotFound($method)
    {
        echo "$method not Found";
    }

    //run
    public static function run()
    {
        //check if routes is empty
       if(empty(self::$routes))
       {
         self::notFound();
         return;
       }
       //get currrent route 
       $method = Request::method();
       $uri = Request::uri();

    //    echo $uri;

       //page not found 
       $pageNotFound = [];

       foreach(self::$routes as $route)
       {
            if($route["matches"] !== false)
            {
            //check if preg matches route
            if(preg_match( $route["preg"], $uri, $matches))
            {
                if($route['method'] == $method || $route['method'] == "ANY")
                {
                    //Uri with a preg validation
                    self::validateURL($route['uri'], $route['controlargs'], $route['middleware']);
                }
                else{
                    self::notFoundHeader();
                }
                //check page found
                    $pageNotFound[] = false;
            }
            else
            {
                    $pageNotFound[] = true;
                    continue;
            }
            }
            else
            {
                //check current uri
                if($route['uri'] == $uri)
                {
                    if($route['method'] == $method || $route['method'] == "ANY")
                    {
                        //Uri without preg validation
                        self::validateURL($route['uri'], $route['controlargs'], $route['middleware']);
        
                    }
                    else{
                        self::notFoundHeader();
                    }
                    //check page found
                    $pageNotFound[] = false;
                }
                else
                {
                    $pageNotFound[] = true;
                    continue;
                }
            }
        }
            //check if page is not found
            if(in_array(false, $pageNotFound))
            {
                return;
            }
            else
            {
                self::notFound();
            }    
    }
}