<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    //
    public function infoPayment()
    {
    	// mengambil data dari table psikolog
    	$listakunpsikolog = DB::table('listakunpsikolog')
        ->leftjoin('konsultasi', 'listakunpsikolog.sipp', '=', 'konsultasi.sipp')
        ->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('patient.payment', ['listakunpsikolog' => $listakunpsikolog]);
    	// mengirim data psikolog ke view index
    }
    public function patientPaymentStore(Request $request)
    {
        // menyimpan data psikolog berdasarkan id yang dipilih
            DB::table('pembayaran')->insert([
                'norek' => $request->norek
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/patient/schedule');
    }
}
