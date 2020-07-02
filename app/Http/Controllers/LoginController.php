<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $request){
        // return $request->input();
        $request->session()->put('data',$request->input());
        return view('userprofile');
    }
}
