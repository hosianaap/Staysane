<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function profilPsikolog()
    {
    	// // mengambil data dari table psikolog
    	$akunpsikolog = DB::table('listakunpsikolog')->get();

    	// mengirim data psikolog ke view index
    	return view('profile.index',['listakunpsikolog' => $akunpsikolog]);
    }

}
