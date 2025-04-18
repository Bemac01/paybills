<?php 

namespace App\Controller;

use App\Core\Request;

class HomeController
{

    //index method
    public static function index(Request $request)
    {   
        $name = "John Doe";
        $age = 29;
        return view("home/home", compact('name','age'));
    }

    //contact method
    public static function contact(Request $request)
    {
        echo "contact";
    }

    //about us method
    public static function about(Request $request)
    {
        echo "<h1>About Us</h1>";
    }

    public static function blog(Request $request, $args)
    {
        echo 'blog';
    }


}