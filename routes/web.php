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
    return view('login');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/AddSchedule', function() {
    return view('AddSchedule');
});

Route::get('/calendar', function() {
    return view('calendar');
});