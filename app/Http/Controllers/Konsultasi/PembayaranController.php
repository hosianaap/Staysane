<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    //
    public function infoPayment($id)
    {
    	// mengambil data dari table psikolog
    	$listakunpsikolog = DB::table('listakunpsikolog')
        ->leftjoin('konsultasi', 'listakunpsikolog.sipp', '=', 'konsultasi.sipp')
        ->where('sipp', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('patient.payment', ['listakunpsikolog' => $listakunpsikolog]);
    	// mengirim data psikolog ke view index
    }
    public function patientPayment()
    {
        // mengambil data psikolog berdasarkan id yang dipilih

    }
}
