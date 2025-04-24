<?php

namespace App\Controller;

use App\Core\Request;
use GuzzleHttp\Psr7\Response;

class AuthController
{
    public static function register(Request $request)
    {
        response_json($request::input('first_name'));
    }
    
}