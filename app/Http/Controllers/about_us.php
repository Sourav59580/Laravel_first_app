<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about_us extends Controller
{
    public function route($user_id){
        $data = array('userId'=>$user_id);
        return view('about',$data);
    }
}
