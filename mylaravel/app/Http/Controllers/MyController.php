<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myfunction(Request $request)
    {
        $number = $request->input('number');
        $table = [];


        if ($number) {
            for ($i = 1; $i <= 12; $i++) {
                $table[$i] = $number * $i;
            }
        }


    return view('multiplication', compact('number', 'table'));
    }
}
