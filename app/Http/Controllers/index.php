<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function route(){
        $data = array('name'=>'sourav');
        return view('index',$data);
    }
}