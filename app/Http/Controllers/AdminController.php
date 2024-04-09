<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datamaster=Admin::all();
        return view('admin.dashboard',compact('datamaster'));
    }
    
    public function customer(){
        $datauser= User::all();
        return view('admin.customer',compact('datauser'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required|string',
            'model' => 'required|string',
            'no_plat' => 'required|string',    
            'tarif' => 'required|string',    
            
        ]);
    
        // Check if the file was uploaded successfully
            $datamaster = new admin();
    
            // Set the doctor's attributes
            $datamaster->merek = $request->input('merek');
            $datamaster->model = $request->input('model');
            $datamaster->no_plat = $request->input('no_plat');
            $datamaster->tarif = $request->input('tarif');
            $datamaster->save();

            return redirect()->back()->with('success', 'Doctor information saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datamaster=admin::find($id);
        return view('admin.updateproduct',compact('datamaster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin, $id)
    {
            $datamaster= admin::find($id);
            $datamaster->merek=$request->merek;
            $datamaster->model=$request->model;
            $datamaster->no_plat=$request->no_plat;
            $datamaster->tarif=$request->tarif;
    
            $datamaster->save();
        
            return redirect()->back()->with('message', 'data edit details succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data=admin::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Delete successfully');
    }

    public function detailsview($id){
        $data=admin::find($id);
      
        return view('admin.details_view',compact('data'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $datamaster = admin::where('merek', 'like', '%'.$searchTerm.'%')->get();

        return view('admin.dashboard', compact('datamaster'));
    }
}
