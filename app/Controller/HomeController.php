<?php 

namespace App\Controller;

use App\Core\Request;

class HomeController
{

    //index method
    public static function index(Request $request)

    {
        echo "Homepage";
    }

    //about method
    public static function about(Request $request)
    {
        echo "about";
    }

    //contact method
    public static function contact(Request $request)
    {
        echo "contact";
    }

    public static function blog(Request $request, $args)
    {
        echo 'blog';
    }


}