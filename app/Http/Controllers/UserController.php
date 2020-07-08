<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class UserController extends Controller
{
    public function index(Request $req)
    {
        $req->validate([
            "name"=>"required",
            "address"=>"required"            
        ]);
        return $req;
    }
    function save(Request $req)
    {
        $user = new UserModel;
        $user->name = $req->name;
        $user->address = $req->address;
        echo $user->save();
    }
}
