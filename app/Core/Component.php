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

    //url
    public static function url($path)
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
       
       //response_json
       public static function response_json($data = [])
       {
            header("content-type: application/json");
            //check if data is an array
            if(!is_array($data))
            {
                $data = array($data);
            }
            echo json_encode($data);
            die;
       }

       //clean phone
        public static function cleanPhone($phone_number)
        {
            //check if phone number is empty
            if (empty($phone_number)) {
                return $phone_number;
            }
            //check if phone number is string
            if (is_string($phone_number)) {
                //return phone number
                return preg_replace('/[^0-9]/', '', $phone_number);
            }
            //return phone number
            return $phone_number;
        }
}