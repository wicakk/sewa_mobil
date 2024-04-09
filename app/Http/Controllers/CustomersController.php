<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customer(){
        $datacustomer=User::all();
        return view('admin.customer',compact('datacustomer'));
    }
}
