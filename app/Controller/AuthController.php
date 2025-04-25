<?php

namespace App\Controller;

use App\Core\Authentication;
use App\Core\Model;
use App\Core\Request;

class AuthController
{
    public static function register(Request $request)
    {
        try {
            
            $first_name = $request::input('first_name');
            $last_name = $request::input('last_name');
            $phone = cleanPhone($request::input('phone'));
            $email = $request::input('email');
            $password = $request::input('password');
            $user = Model::getSingle("users", 'email', $email);
            //check if user exists
            if($user)
            {
                response_json(['code' => 400, 'message' => 'User already exists']);
            }
        
            $password = password_hash($password, PASSWORD_DEFAULT);
            //arrange data to be inserted
            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'phone' => $phone,
                'email' => $email,
                'password' => $password
            ];
            $userNew = Model::create("users", $data);
            if($userNew)
            {
                response_json(['code' => 200, 'message' => 'User created successfully']);
            }
            else
            {
                response_json(['code' => 500, 'message' => 'Something went wrong']);
            }
        } catch (\Exception $e) {
            response_json(['code' => 500, 'message' => $e->getMessage()]);
        }
    }

       //login
       public static function login(Request $request)
       {
           try {
               $email = $request->input('email');
               $password = $request->input('password');
               //check if email exists
               $user = Model::getSingle('users', 'email', $email);
               if (!$user) {
                   response_json(['code' => 400, 'message' => 'User does not exist']);
               }
               //password verify
               if (!password_verify($password, $user->password)) {
                   response_json(['code' => 400, 'message' => 'Invalid password']);
               }
               //login user
               $auth = new Authentication;
               if ($auth->login($user)) {
                   //check if user role is admin
                //    if ($user->role == 'admin') {
                       response_json(['code' => 200, 'message' => 'Login successful', 'redirect' => url('dashboard')]);
                //    } else {
                //        response_json(['code' => 200, 'message' => 'Login successful', 'redirect' => url('user')]);
                //    }
               }
               //if something goes wrong
               response_json(['code' => 500, 'message' => 'Something went wrong']);
           } catch (\Exception $e) {
               response_json(['code' => 500, 'message' => $e->getMessage()]);
           }
       }
   
       //logout
       public static function logout(Request $request)
       {
           $auth = new Authentication;
           if ($auth->logout()) {
               redirect('login');
           }
       }
}