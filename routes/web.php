<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/about/{company?}/{address?}', [HomeController::class, 'about']);

//Route::get('/about', function () {
   // return view('about');
//});

Route::get('/contact', [HomeController::class, 'contact']);

//Route::get('/contact', function () {
    //return view('contact');
//});

Route::get('/portflio', [HomeController::class, 'portflio']);

