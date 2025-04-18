<?php
namespace App\Core;

use App\Core\Session;

class Middleware
{
    //entry point
    public static function action($action = "")
    {
        if(method_exists(self::class, $action))
        {
            return self::$action();
        }
        else
        {
            return ['error' => 'Middleware {'.$action.'} action not found','code' => 404];
        }
    }

    //MiddleWares

    //user middleware 
    public static function user()
    {
        $session = new Session;
        if(!$session->has('user'))
        {
            return ['error'=> 'You are already logged in','code'=> 401, 'redirect' => '/signin'];
        }
        //return true 
        return true;
    }
}