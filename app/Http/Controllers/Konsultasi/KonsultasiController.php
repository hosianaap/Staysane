<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    //Desi
    public function listPsikolog(){

    	return view('patient.list-psikolog');
    }

    public function listPasien(){

    	return view('psikolog.list-patient');
    }

    //Nazriyah deny T
    public function chatPatient() {
        return view('patient.chat');
    }
    public function chatPsikolog() {
        return view('psikolog.chat');
    }
}
