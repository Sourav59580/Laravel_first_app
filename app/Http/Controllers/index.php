<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wap;

class index extends Controller
{
    public function result(){
        $p = Wap::all();
        
        foreach($p as $data)
        {
            echo $data->name."<br>";
            echo $data->roll."<br>";
            echo $data->class.'<br><br>';
        }
    }

}
