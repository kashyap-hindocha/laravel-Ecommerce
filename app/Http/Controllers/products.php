<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    public function single()
    {
        return View('client.single');
    }

    public function products()
    {
    	return View('client.products');
    }
   public function products2()
   {
   		return View('client.products2');
   }
}
