<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('LoginPage');
});

Route::post('/RegisterPage',[Controller::class, "Create"])->name('createUser');


Route::get('/RegisterPage', function () {
    return view('RegisterPage');
});



Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/FormEmploy', function () {
    return view('FormEmploy');
});

Route::get('/widgets', function () {
    return view('widgets');
});

Route::get('/AjouterMission', function () {
    return view('AjouterMission');
});

Route::get('/HistoriqueMission', function () {
    return view('HistoriqueMission');
});

Route::get('/RegisterPage', function () {
    return view('RegisterPage');
});