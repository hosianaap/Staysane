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
Route::get('/role','RoleController@role');
Route::get('/role/patient/login','RoleController@patientLogin');
Route::get('/role/patient/register','RoleController@patientRegister');
Route::get('/role/doctor/login','RoleController@doctorLogin');

//route CRUD psikolog
Route::get('/role/doctor/profile','RoleController@profilPsikolog');


//route CRUD patient
Route::get('/role/patient/payment','RoleController@patientPayment');
Route::get('/role/patient/doctor','RoleController@infoPsikolog');
//route CRUD profile psikolog
Route::get('/profile','ProfileController@profilPsikolog');
Route::get('/patient/payment','RoleController@patientPayment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
