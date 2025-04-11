<?php

namespace App\Core;

class Request
{
    public static function base(){
        return $_SERVER['SCRIPT_NAME'];
    }
}