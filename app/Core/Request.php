<?php
namespace   App\Core;

class Request
{
    public static function base()
    {
        return trim(dirname($_SERVER['SCRIPT_NAME']), '/');
    }

    //base url 
    public static function baseUrl()
    {
        //check if ssl
        if(!self::secure())
        {
            return "http://". $_SERVER['HTTP_HOST'].'/'. self::base();
        }
        else
        {
            return "https://". $_SERVER['HTTP_HOST'].'/'. self::base();

        }
    }

    //Uri method and check if ssl is present
    public static function uri()
    {
        if(!self::secure())
        {
            $t = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
            
            $b = self::base();
            if(strrpos($t, $b) === 0)
            {
                $t= substr($t, strlen($b));
            }
            return $t ?: '/';
        }
        else
        {
            $t = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        }
       
    }

    //ssl
    public static function secure()
    {
        return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off";
    }

    //method
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    //check method type
    public static function isPost()
    {
        return self::method() == 'POST';
    }

    public static function isGet()
    {
        return self::method() == 'GET';
    }

    public static function isAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }


    //put method
    public static function isPut()
    {
        return self::method() == 'PUT';
    }

    //delete method
    public static function isDelete()
    {
        return self::method() == 'DELETE';
    }

    //patch method
    public static function isPatch()
    {
        return self::method() == 'PATCH';
    }

    //is any method 
    public static function isAny()
    {
        return self::isPost() || self::isGet() || self::isPut() || self::isDelete() || self::isPatch();
    }
}