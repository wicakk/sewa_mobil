<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $datamaster = berita::all();
                return view('user.home', compact('datamaster'));
            }
            else{
                return view('admin.home');
            }
        }
    }
}
