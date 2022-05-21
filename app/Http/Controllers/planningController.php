<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class planningController extends Controller
{
    public function index(){
        return view('planning');
    }
    
}
