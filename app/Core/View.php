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
    //section
    public static function section($section)
    {
        //save bufffer
        $GLOBALS['buffer'] = $section;
        
        //start buffer
        ob_start();
    }

    //endsection
    public static function endsection()
    {
        //get buffer content
        $content = ob_get_clean();
        //save buffer content
        $GLOBALS[$GLOBALS['buffer']] = $content;
    }

    //extend
    public static function extend($view, $section = null, $args = [])
    {
        //check if GLOBAL 
        if(isset($GLOBALS[$section]))
        {
            //get content 
            $content = $GLOBALS[$section];
            //unset $GLOBALS
            unset($GLOBALS[$section]);
        }
        else
        {
            //get content
            $content = "";
        }
        //get view
        $view = self::returnRender($view, $args);

        //check if {{exists}}
        if(strpos($view, "{{") !== false)
        {
            //replace {{ with content
            $view = str_replace('{{'. $section .'}}',$content, $view);

            //return view
            return $view;
        }
    }
}