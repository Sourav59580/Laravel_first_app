<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = array(
        "Name" =>"Sourav Santra",
        "rollNo" => "7585069971"
    );
    return view('index',$data);
});

Route::get('/test',function(){
   return view('testing');
});

Route::get('/about',function(){
    return view('about');
});
