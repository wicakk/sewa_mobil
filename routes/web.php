<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function(){
    \Auth::logout();
    return redirect('/home');
});

Route::resource('/data_mobil', AdminController::class);
// Route::get('/customer', CustomersController::class,'customer');
Route::get('/deleteproduct/{id}',[AdminController::class,'delete']);
Route::get('/view_details/{id}',[AdminController::class,'detailsview']);
Route::post('/product/search',[AdminController::class,'search']);