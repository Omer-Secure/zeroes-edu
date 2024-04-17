<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home","HomeController@index")->name('home');
Route::get("/team","TeamController@index")->name('team');
Route::get("/dashboard","LoginController@index")->name('dashboard');
Route::post('/home', 'HomeController@sendContactEmail')->name('contact.send');

Route::get("/linux-course","Linux_CourseController@index")->name('linux-course');
Route::get("/python-course","Python_CourseController@index")->name('python-course');
