<?php 

namespace App\Controller;

use App\Core\Database;
use App\Core\Model;
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

    //register method
    public static function register(Request $request)
    {   
        $data = Model::getTable("users");
    //    var_dump($data);
        return view("auth/register");
    }

    
    //login method
    public static function login(Request $request)
    {
        return view("auth/login");
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

    //dashboard method
    public static function dashboard(Request $request)
    {
        return view("pages/dashboard");
    }

    //wallet method 
    public static function wallet(Request $request)
    {
        return view("pages/wallet");
        // echo "<h1>Wallet</h1>";
    }

    //profile method
    public static function profile(Request $request)
    {
        return view("pages/profile");
        // echo "<h1>Profile</h1>";
    }

    //transactions
    public static function transactions(Request $request)
    {
        return view("pages/transactions");
    }

    //plan
    public static function plan(Request $request)
    {
        return view("pages/plan");
    }

    //withdraw method
    public static function withdraw(Request $request)
    {
        return view("pages/withdraw");
    }

}