<?php

use App\Http\Controllers\Mailcontroller;
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

Route::get('/projects', function () {
    return view('projects');
});
//Route home
Route::get('/', function () {
    return view('home');
});
// Route contact
Route::get('/contact', function () {
    return view('contact');
});
Route::post('contact', [Mailcontroller::class, 'store']);

Route::get('/projects/easyink', function () {
    return view('easyink');
});
Route::get('/projects/dreamreal', function () {
    return view('dreamreal');
});
