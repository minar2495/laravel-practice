<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile extends Controller
{
    function store(Request $request){        
        $path = $request->file('filename')->store('uploads');
        return ["path"=>$path , "upload"=>"success"];
    }
}
