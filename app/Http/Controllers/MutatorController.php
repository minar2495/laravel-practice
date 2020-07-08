<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MutatorModel;

class MutatorController extends Controller
{
    public function index(){
        $product = new MutatorModel;
    }
}
