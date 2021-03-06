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


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/getUser/{id}','HomeController@getUser')->name('get-user');
Route::get('/home/getUserChatDetails', 'HomeController@getUserChatDetails')->name('home-user-chat-details');
Route::get('availableStaff','HomeController@availableStaff')->name('get-available-staff');
Route::get('availableStaffChange/{day}','HomeController@availableStaffChange')->name('get-available-staff-change');

Route::get('/results','ResultsController@index')->name("results");

Route::get('/prescriptions','PrescriptionController@index')->name("prescriptions");
Route::post('/prescriptions/extend/{id}', 'PrescriptionController@extend')->name('prescription-extend');

Route::get('/appointment/getAvailableStaff/{day}','AppointmentController@getAvailableStaff')->name('get-available-staff');
Route::get('/appointment', 'AppointmentController@index')->name('appointment');
Route::get('/appointment/edit/{id}', 'AppointmentController@edit')->name('appointment-edit');
Route::get('/appointment/create', 'AppointmentController@create')->name('appointment-create');
Route::get('/appointment/timeSlots/{id}/{date}','AppointmentController@timeSlots')->name('appointment-get-time-slot');
Route::post('/appointment/destroy/{id}', 'AppointmentController@destroy')->name("appointment-destroy");
Route::post('/appointment/store','AppointmentController@store')->name("appointment-store");

