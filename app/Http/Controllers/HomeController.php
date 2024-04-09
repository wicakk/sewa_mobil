<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->email!='wicak@gmail.com'){
                $datamaster = berita::all();
                return view('user.home', compact('datamaster'));
            }
            else{
                return view('admin.home');
            }
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            if(Auth::user()->email!='wicak@gmail.com'){
                $datamaster=Admin::all();
                return view('admin.dashboard',compact('datamaster'));
            }
            else{
                return view('halo');
            }
       
    }
}
