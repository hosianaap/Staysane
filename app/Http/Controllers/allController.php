<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allController extends Controller
{
    public function all(){
    	return view('layout.all-layout');
    }
}
