<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    //
    public function penilaianPasien(){
    	return view('patient.penilaian');
    }

}
