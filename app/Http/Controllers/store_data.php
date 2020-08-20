<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class store_data extends Controller
{
    public function task(Request $data)
    {
       $name = $data->input('name');
       $s_class = $data->input('class');
       $s_roll = $data->input('roll');

       //$response = DB::insert('INSERT INTO wap(name,class,roll) VALUES(?,?,?)',[$name,$s_class,$s_roll]);

    //    if($response)
    //    echo "Success";
    //    else
    //    echo "Unable to store data into database";

    $response = DB::select('SELECT * FROM wap');

    print_r($response);
    }
}
