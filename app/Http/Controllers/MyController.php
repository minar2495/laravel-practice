<?php

namespace App\Http\Controllers;
use App\product;
use App\MyModel;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index()
    {
        return MyModel::all();
    }
}
