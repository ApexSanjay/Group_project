<?php

use App\Http\Controllers\gameController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\questionaireController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\memberController;
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

//Registration routes
Route::get('registration',[registrationController::class,'index']);
Route::post('store-form', [registrationController::class, 'store']);
//Registration routes

//Questionaire routes
Route::get('questionaire',[questionaireController::class,'index']);
Route::post('questionaire-form',[questionaireController::class, 'store']);
//Questionaire routes

//Game routes
Route::get('health_game',[gameController::class, 'index']);
Route::get('game-form',[gameController::class, 'mark']);
//Game routes

//Admin routes
Route::get('admin',[adminController::class, 'index']);
Route::get('logout',[adminController::class,'logout']);
Route::get('admin-form',[adminController::class, 'redirect']);
//Admin routes

//Member routes
Route::get('member',[memberController::class, 'index']);
Route::post('member-form',[memberController::class,'memberRegister']);
//Member routes


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('course');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/youth', function () {
    return view('youth');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/youth_event2', function () {
    return view('youth_event2');
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

Route::get('/elderly', function () {
    return view('elderly');
});

Route::get('/elderly_event1', function () {
    return view('elderly_event1');
});

Route::get('/elderly_event2', function () {
    return view('elderly_event2');
});

Route::get('/elderly_event3', function () {
    return view('elderly_event3');
});