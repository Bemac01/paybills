<?php

namespace App\Core;

class Session
{
    public function __construct()
    {
        //check if seesion is start
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
    }

    //set session
    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
        return $_SESSION[$key];
    }

    //session get
    public function get(string $key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    //delete sessions
    public function delete(string $key)
    {
        if (isset($_SESSION[$key]))
        {
            unset($_SESSION[$key]);
        }
    }

     //destroy session
     public function destroy()
     {
        session_destroy();
     }

     //has
     public function has($key)
     {
        return isset($_SESSION[$key]);
     }

    //unset
    public function unset($key)
    {
        unset($_SESSION[$key]);
    }
}