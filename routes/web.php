<?php

use App\Http\Controllers\registrationController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('home');
});

//Registration routes
Route::get('registration',[registrationController::class,'index']);
Route::post('store-form', [registrationController::class, 'store']);
//Registration routes

Route::get('/home', function () {
    return view('home');
});

Route::get('/well_youth', function () {
    return view('well_youth');
});

Route::get('/ins_tra_course', function () {
    return view('ins_tra_course');
});

Route::get('/to_do_list', function () {
    return view('to_do_list');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('course');
});

Route::get('/youth', function () {
    return view('youth');
});

Route::get('/event2', function () {
    return view('youth_event2');
});

Route::get('/gallery', function () {
    return view('gallery');
});
