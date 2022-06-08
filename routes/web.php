<?php

//--> Aqmarina Nindya
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/patient/chats/penilaian','Konsultasi\PenilaianController@penilaianPasien');
Route::get('/psikolog/chats/catatan','Konsultasi\CatatanController@catatanPsikolog');
Route::post('/submitpenilaian','Konsultasi\PenilaianController@storePenilaian');
Route::post('/submitcatatan','Konsultasi\CatatanController@storeCatatan');

// route CRUD home
//--> Hosiana Arga P
Route::get('/','HomeController@home');
Route::get('/home','HomeController@home');
// Route::get('/','HomeController@home');
// Route::get('/home','app\Http\Controllers\HomeController@home');
// Route::get('/', [HomeController::class, 'index']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'LandingPageController@landingPage');
// Route::get('/role','RoleController@role');
// Route::get('/role/patient/login','RoleController@patientLogin');
// Route::get('/role/patient/register','RoleController@patientRegister');
// Route::get('/role/psikolog/login','RoleController@doctorLogin');
// Route::get('/role/doctor/login','RoleController@doctorLogin');
Route::prefix('patient')->middleware(['auth', 'isPatient'])->group(function (){
    Route::get('/patient/doctor', 'Konsultasi\KonsultasiController@listPsikolog');
});

//route Role --> Noverita Rizki
Route::get('/psikolog/profile','Role\ProfilController@profilPsikolog');
Route::get('/patient/profile','Role\ProfilController@profilPatient');
Route::get('/psikolog/profile/edit/{id}','Role\ProfilController@EditProfilPsikolog');
Route::post('/psikolog/profile/update','Role\ProfilController@UpdateProfilPsikolog');
Route::get('/patient/profile/edit/{id}','Role\ProfilController@EditProfilPatient');
Route::post('/patient/profile/update','Role\ProfilController@UpdateProfilPatient');
Route::get('/doctor/profile','RoleController@profilPsikolog');

//route CRUD psikolog
Route::get('/doctor/profile','RoleController@profilPsikolog');
Route::get('/list/psikolog', 'Konsultasi\KonsultasiController@listPsikolog');
Route::get('/list/psikolog/cari','Konsultasi\KonsultasiController@cari');

//route Konsultasi
Route::get('/patient/doctor-info','Konsultasi\PenjadwalanController@detailPsikolog');
Route::get('/patient/doctor-info/add','Konsultasi\PenjadwalanController@add');
Route::post('/patient/doctor-info/store','Konsultasi\PenjadwalanController@storeKonsultasi');
// Route::get('/patient/doctor-info/edit/{id}','Konsultasi\PenjadwalanController@editJadwal');
// Route::post('/patient/doctor-info/update','Konsultasi\PenjadwalanController@updateJadwal');
// Route::post('/patient/doctor-info','Konsultasi\PenjadwalanController@store');

//--> Nazriyah Deny Tsaniyah
Route::get('/patient/payment','Konsultasi\PembayaranController@infoPayment');
Route::post('/patient/payment/store','Konsultasi\PembayaranController@patientPaymentStore');
Route::get('/patient/schedule','Konsultasi\PenjadwalanController@patientSchedule');
Route::get('/patient/chats','Konsultasi\KonsultasiController@chatPatient');
Route::get('/psikolog/chats','Konsultasi\KonsultasiController@chatPsikolog');
Route::get('/psikolog/schedule','Konsultasi\PenjadwalanController@psikologSchedule');



//--> Desi
Route::get('/patient/doctor', 'Konsultasi\KonsultasiController@listPsikolog');
Route::get('/list/patient', 'Konsultasi\KonsultasiController@listPatient');
Route::get('/list/patient/search','Konsultasi\KonsultasiController@search');
Route::get('/psikolog/patient', 'Konsultasi\KonsultasiController@listPatient');
Route::get('/home', 'HomeController@index')->name('home');
//route CRUD list



