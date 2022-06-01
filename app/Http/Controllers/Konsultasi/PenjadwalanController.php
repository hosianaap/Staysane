<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SchedulingController extends Controller
{
    //
    public function patientSchedule(){
    	return view('patient.scheduling');
    }
    public function detailPsikolog()
    {
    	// mengambil data dari table psikolog
    	$psikolog = DB::table('listakunpsikolog')->get();
    	// mengirim data psikolog ke view index
    	return view('psikolog.information',['listakunpsikolog' => $psikolog]);
    }
}
