<?php

namespace App\Controller;

use App\Core\Request;
use App\Core\Model;


class UserController 
{
    //dashboard method
    public static function dashboard(Request $request)
    {
        return view("pages/dashboard");
    }

    //wallet method 
    public static function wallet(Request $request)
    {
        $title = "Deposit";

        $wallet = Model::getTable('wallet');
        return view("pages/wallet", compact('wallet','title'));
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
        $title = "Withdrawal";
        return view("pages/withdraw", compact('title'));
    }

}