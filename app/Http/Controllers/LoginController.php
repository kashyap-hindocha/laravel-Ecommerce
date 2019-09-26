<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Register;
use App\User;
use Auth;
use Hash;
use Session;
use Validator;



class logincontroller extends Controller
{
    
     
    
    public function logout()    
    {
        Auth::logout();
        Session::flush();
        return view('welcome');
    }
    
    public function add_janu(Request $request)
    {
        $users = User::all();
        return view('register');
    }
    public function login(Request $request)
    {
            
        $users = User::all();
        return view('loginregister');
    }
    public function loginsuccess(Request $request)
    {
        if($request->login == "login")
        {
         $data = $request->all();
        $rules = [
            'email' => "required|email",
            'password' => "required",
        ];
        $messages = [
            'email.required' => 'please enter email id',
            'password.required' => 'please enter pasword',
        ];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            echo"hello";
            return back()->withInput()
                ->withErrors($validator);
        }
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) 
        {
            return redirect('welcome'); 
        }
        else
        {
             return redirect('login');
        }
    }
    else
    {
        return view('login1');
    }
    }
    
    public function success(Request $request)
    {
        $data = $request->all();
        $rules = [
            'first_name' => "required|alpha",
            'last_name' => "required|alpha",
            'user_name' => "required|alpha",
            'email' => "required|email",
            'password' => "required|confirmed",
            'password_confirmation' => "required",
            'mobile_no' => "required|digits:10",
            'course' => "required|alpha",
            'address' => "required|alpha_num",
            'city' => "required|alpha",
            'state' => "required|alpha",
            'country' => "required|alpha",
            'zip_code' => "required|numeric",
        ];
        $messages = [
            'first_name.required' => 'please enter first name',
            'last_name.required' => 'please enter Last name',
            'user_name.required' => 'please enter User name',
            'email.required' => 'please enter email',
            'email.email' => 'Enter email in proper format',
            'password.required' => 'please enter Password',
            'password_confirmation.required' => 'please enter Cofirmed password',
            'mobile_no.required' => 'please enter Mobile No.',
            'course.required' => 'please enter course',
            'address.required' => 'please enter address',
            'city.required' => 'please enter city',
            'state.required' => 'please enter state',
            'country.required' => 'please enter country',
            'zip_code.required' => 'please enter zip_code',
        ];

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()
                ->withErrors($validator);
        }

        User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile_no' => $request->mobile_no,
            'gender' => $request->gender,
            'course' => $request->course,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
        return redirect()->to('login');
    }
}
