<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class DbController extends Controller
{
    function index(){        
        return DB::table('users')
        // ->insert(
        //     [
        //         "name"=>"priti",
        //         "email"=>"priti@email.com",
        //         "password"=>"1234"
        //     ]
        //     );
        // ->where('id',5)
        // ->update([
        //     "name"=>"priti",
        //     "email"=>"priti123@email.com",
        //     "password"=>"1234"
        // ]);       
        // ->count();
        
        // ->delete();
        ->get();
    }
}
