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

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');
Route::get('/about', 'PagesController@about')->name('about');

Route::get('/admin/login', 'Auth\LoginController@show_admin_login_page');
Route::post('/admin/login', 'Auth\LoginController@adminLogin');
// Route::get('/doctor/login', 'Auth\LoginController@show_doctor_login_page');
// Route::post('/doctor/login', 'Auth\LoginController@doctorLogin');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {


        Route::get('/doctor/dashboard', 'DoctorController@dashboard')->name('doctor.dashboard');
        Route::get('/prescription/{id}', 'PrescriptionController@show')->name('prescription.show');
        Route::PATCH('/prescription/{id}/update', 'PrescriptionController@update')->name('prescription.update');

        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::post('/profile/update', 'ProfileController@update')->name('profile.update');
        Route::get('/reservations', 'ReservationController@index')->name('reservations');
        Route::get('/reservations/create', 'ReservationController@create')->name('reservations.create');
        Route::post('/reservations/store', 'ReservationController@store')->name('reservations.store');
        Route::get('/reservations/edit/{id}', 'ReservationController@edit')->name('reservations.edit');
        Route::post('/reservations/update/{id}', 'ReservationController@update')->name('reservations.update');
        Route::post('/reservations/cancel/{id}', 'ReservationController@cancel')->name('reservations.cancel');


    Route::group(['prefix' => 'messages'], function () {
        Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
        Route::get('create/{id}', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
        Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
        Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
        Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
    });






});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/doctors', 'AdminController@doctors')->name('admin.doctors');
    Route::post('/admin/doctors', 'AdminController@storeDoctor')->name('admin.doctors.store');
    Route::get('/admin/clinics', 'AdminController@clinics')->name('admin.clinics');
    Route::post('/admin/clinics', 'AdminController@storeClinic')->name('admin.clinics.store');
});

// Route::group(['middleware' => ['auth:doctor']], function () {
//     Route::get('/doctor/dashboard', 'DoctorController@dashboard')->name('doctor.dashboard');
// });



//pages
Route::get('/doctors', 'PagesController@doctors')->name('doctors');

Route::get('/clinics/dentistry', 'PagesController@dentistryClinics')->name('dentistry');
Route::get('/clinics/Orthopedic', 'PagesController@OrthopedicClinics')->name('Orthopedic');
Route::get('/clinics/Children', 'PagesController@ChildrenClinics')->name('Children');
Route::get('/clinics/Heart', 'PagesController@HeartClinics')->name('Heart');
Route::get('/clinics/Internist', 'PagesController@InternistClinics')->name('Internist');
Route::get('/clinics/Gynecology', 'PagesController@GynecologyClinics')->name('Gynecology');
Route::get('/clinics/Ophthalmology', 'PagesController@OphthalmologyClinics')->name('Ophthalmology');
Route::get('/clinics/Throat', 'PagesController@ThroatClinics')->name('Throat');
