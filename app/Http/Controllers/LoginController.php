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



class LoginController extends Controller
{
    
     
    
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
    
    public function add_janu(Request $request)
    {
        $users = Register::all();
        return view('register');
    }
    public function login(Request $request)
    {
        $users = Register::all();
        return view('login1');
    }
    public function loginsuccess(Request $request)
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
            return back()->withInput()
                ->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) 
        {
            echo"hello";
            return view('welcome'); 
        }
        else
        {
            echo"byy";
            print_r($credentials);
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
            'password' => "required",
            //'password_confirmation' => "required",
            'mobile_no' => "required|digits:10",
            //'course' => "required|alpha",
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
            //'password_confirmation.required' => 'please enter Cofirmed password',
            'mobile_no.required' => 'please enter Mobile No.',
           // 'course.required' => 'please enter course',
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
       Register::insert([
            'fnm' => $request->first_name,
            'lnm' => $request->last_name,
            'email' => $request->email,
            'mno' => $request->mobile_no,
            'gender' => $request->gender,
            'address' => $request->address,
            'city' => $request->city,
            'pin_code' => $request->zip_code,
            'state' => $request->state,
            'country' => $request->country,
            'uname' => $request->user_name,
            'password' => Hash::make($request->password),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
        return redirect()->to('/');
    }
}
