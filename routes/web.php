<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route CRUD home
Route::get('/','HomeController@home');
Route::get('/home','HomeController@home');
Route::get('/role','RoleController@role');
Route::get('/role/patient/login','RoleController@patientLogin');
Route::get('/role/patient/register','RoleController@patientRegister');
Route::get('/role/doctor/login','RoleController@doctorLogin');

//route CRUD psikolog
Route::get('/doctor/profile','RoleController@profilPsikolog');


//route CRUD patient
Route::get('/patient/payment','RoleController@patientPayment');

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
//route CRUD list
Route::get('/list/psikolog', 'RoleController@listPsikolog');
Route::get('/patient/doctor-info','RoleController@infoPsikolog');
>>>>>>> 158bc1fa61d8897647bc75bcf75662754ce8f0fa
