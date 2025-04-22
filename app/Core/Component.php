<?php

namespace App\Core;

class Component
{
    //esc_url
    public static function esc_url($url)
    {
        //check if url is empty
        if(empty($url))
        {
            return $url;
        }
        //check if url is string
        if(is_string($url))
        {
            return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        }
        //return url
        return $url;
    }

    //assets
    public static function assets($path)
    {
        $baseurl = baseurl();
        return $baseurl . DIRECTORY_SEPARATOR . $path;
    }

    //esc_html
    public static function esc_html($html)
    {
        //check if html is empty
        if(empty($html))
        {
            return $html;
        }
        //check if html is string
        if(is_string($html))
        {
            return htmlentities($html, ENT_QUOTES, 'UTF-8');
        }
        //return html
        return $html;
    }

    //sanitize string
       //esc_url
       public static function sanitize_string($string)
       {
           //check if string is empty
           if(empty($string))
           {
               return $string;
           }
           //check if string is string
           if(is_string($string))
           {
               return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
           }
           //return string
           return $string;
       }
       
       //sanitize email
       public static function sanitize_email($email)
       {
           //check if email is empty
           if(empty($email))
           {
               return $email;
           }
           //check if email is string
           if(is_string($email))
           {
               return filter_var($email, FILTER_SANITIZE_EMAIL);
           }
           //return email
           return $email;
       }

       //sanitize url
       public static function sanitize_url($url)
       {
           //check if url is empty
           if(empty($url))
           {
               return $url;
           }
           //check if url is string
           if(is_string($url))
           {
               return filter_var($url, FILTER_SANITIZE_URL);
           }
           //return url
           return $url;
       }
}