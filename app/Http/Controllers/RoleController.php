<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RoleController extends Controller
{
    //
    public function role(){
    	return view('role.role');
    }
    // role patient
    public function patientLogin(){
    	return view('role.patient-login');
    }

    public function patientPayment(){
    	return view('patient.payment');
    }
    public function infoPsikolog()
    {
    	// mengambil data dari table psikolog
    	$psikolog = DB::table('listakunpsikolog')->get();
    	// mengirim data psikolog ke view index
    	return view('psikolog.information',['listakunpsikolog' => $psikolog]);
    }

    //role Doctor
    public function doctorLogin(){
    	return view('role.doctor-login');
    }
    public function profilPsikolog()
    {
    	// mengambil data dari table psikolog
    	$akunpsikolog = DB::table('listakunpsikolog')->get();
    	// mengirim data psikolog ke view index
    	return view('psikolog.profile',['listakunpsikolog' => $akunpsikolog]);
    }

    public function listPsikolog(){
    	return view('psikolog.list-psikolog');
    }

}
