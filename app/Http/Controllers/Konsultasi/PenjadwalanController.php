<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PenjadwalanController extends Controller
{
    //
    public function patientSchedule(){
    	return view('patient.scheduling');
    }
    public function detailPsikolog()
    {
    	$listakunpsikolog = DB::table('listakunpsikolog')->get();
    	return view('patient.information',['listakunpsikolog' => $listakunpsikolog]);
    }
}
