<?php

//--> Aqmarina Nindya
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/patient/konsultasi/penilaian','Konsultasi\PenilaianController@penilaianPasien');
Route::get('/doctor/konsultasi/catatan','Konsultasi\CatatanController@catatanPsikolog');

// route CRUD home
//--> Hosiana Arga P
Route::get('/','HomeController@home');
Route::get('/home','HomeController@home');
// Route::get('/','HomeController@home');
// Route::get('/home','app\Http\Controllers\HomeController@home');
// Route::get('/', [HomeController::class, 'index']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'LandingPageController@landingPage');
Route::get('/role','RoleController@role');
Route::get('/role/patient/login','RoleController@patientLogin');
Route::get('/role/patient/register','RoleController@patientRegister');
Route::get('/role/psikolog/login','RoleController@doctorLogin');
Route::get('/role/doctor/login','RoleController@doctorLogin');
Route::prefix('patient')->middleware(['auth', 'isPatient'])->group(function (){
    Route::get('/patient/doctor', 'Konsultasi\KonsultasiController@listPsikolog');
});

//route Role --> Noverita Rizki
Route::get('/psikolog/profile','Role\ProfilController@profilPsikolog');
Route::get('/patient/profile','Role\ProfilController@profilPatient');
Route::get('/myprofile','Role\ProfilController@profilPatient');
Route::get('/psikolog/profile/edit/{id}','Role\ProfilController@EditProfilPsikolog');
Route::post('/psikolog/profile/update','Role\ProfilController@UpdateProfilPsikolog');
Route::get('/patient/profile/edit/{id}','Role\ProfilController@EditProfilPatient');
Route::post('/patient/profile/update','Role\ProfilController@UpdateProfilPatient');
Route::get('/doctor/profile','RoleController@profilPsikolog');


//route Konsultasi
Route::get('/patient/doctor-info','Konsultasi\PenjadwalanController@detailPsikolog');
// Route::get('/patient/doctor-info','Konsultasi\PenjadwalanController@jadwalKonsultasi');
Route::get('/patient/doctor-info/schedule{id}','Konsultasi\PenjadwalanController@EditInfoKonsultasi');
Route::post('/patient/doctor-info/update','Konsultasi\PenjadwalanController@UpdateInfoKonsultasi');

//--> Nazriyah Deny Tsaniyah
Route::get('/patient/payment','Konsultasi\PembayaranController@infoPayment');
Route::get('/patient/schedule','Konsultasi\PenjadwalanController@patientSchedule');
Route::get('/patient/chats','Konsultasi\KonsultasiController@chatPatient');
Route::get('/psikolog/chats','Konsultasi\KonsultasiController@chatPsikolog');
Route::get('/psikolog/schedule','Konsultasi\PenjadwalanController@psikologSchedule');



//--> Desi
Route::get('/patient/doctor', 'Konsultasi\KonsultasiController@listPsikolog');
Route::get('/psikolog/patient', 'Konsultasi\KonsultasiController@listPasien');


