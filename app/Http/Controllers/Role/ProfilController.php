<?php

namespace App\Http\Controllers\Role;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    //Noverita
    public function profilPatient(){
        $akunpasien = DB::table('listakunpasien')->get();
    	// mengirim data psikolog ke view index
    	return view('patient.profile',['listakunpasien' => $akunpasien]);
    }
    public function profilPsikolog()
    {
    	// mengambil data dari table psikolog
    	$listakunpsikolog = DB::table('listakunpsikolog')->get();
    	// mengirim data psikolog ke view index
    	return view('psikolog.profile',['listakunpsikolog' => $listakunpsikolog]);
    }
}
