<?php 

namespace App\Controller;

use App\Core\Request;

class HomeController
{

    //index method
    public static function index(Request $request)
    {   
        $name = "John Doe";
        $age = 30;
        $arrays = [
            'Nwankwo Chidubem',
            'London Chinonso',
            'Babe More',
        ];
        return view("home/index", compact("name","age","arrays"));
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