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
    //role Doctor
    public function doctorLogin(){
    	return view('role.doctor-login');
    }


}
