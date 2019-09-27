<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class register extends Controller
{
    public function register(request $request)
    {
        $name=$request->Name;
        $email=$request->Email;
        $pass=$request->Password;

        $query="insert into users(name,email,password) values ('$name','$email','$pass')";

        DB::insert($query);

        return view('welcome');
    }
}
