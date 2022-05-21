<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class participantcontroller extends Controller
{
   public function index (){
        return view('participant');
    }
}
