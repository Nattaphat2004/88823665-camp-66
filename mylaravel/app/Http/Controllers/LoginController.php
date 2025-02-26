<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    //
    function index (){
        return view('login');
    }
    function Login(Request $req){
        $user = User::where('email', $req->email)->first();
        if ($user != null && Hash::check($req->password, $user->password)) {
            $req->session()->put('user', $user);
            return redirect('/users');
        } else {
            // $req->session()->flash('error', 'Invalid email or password');
            return redirect('/login');

        }
    }
}
