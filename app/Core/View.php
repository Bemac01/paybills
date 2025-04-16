<?php

namespace App\Core;

class View
{
    public static function render($view, $args = [])
    {
        $file = 'resource/views/'.$view.'.php';
        if(is_readable($file))
        {
            echo self::getContent($file, $args);
        }
        else 
        {   
            echo self::notFound($file);
        }
    }

    public static function returnRender($view, $args = [])
    {
        $file = 'resource/views/'.$view.'.php';
        if(is_readable($file))
        {
            return self::getContent($file, $args);
        }
        else
        {
            return self::notFound($file);
        }
    }

    public static function getContent($file, $args = [])
    {
        //extract args
        extract($args, EXTR_SKIP);
        //start buffer 
        ob_start();
        //include file
        require $file;
        //get buffer content
        return  ob_get_clean();
    }

    public static function notFound($fileError = "")
    {
        http_response_code(404);
        return self::returnRender('error/404', ['fileError' => $fileError]); 
    }

    //include
    public static function include($view, $args = [])
    {
        return self::returnRender($view, $args); 
    }
}