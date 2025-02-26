<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     function myprivate(){
        return 1;
    }
    function myFunction(Request $req, $var1=""){
        $data['myinput'] = $req->input('myinput');
        $data['myvalue'] = $var1;
        return view('myview', $data);
    }
}
