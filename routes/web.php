<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CalendarController;
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
Route::get('/AddSchedule', [TaskController::class, 'create']);
Route::resource('tasks', 'App\Http\Controllers\TaskController');
Route::get('/dashboard', [TaskController::class, 'index']);
Route::post('/dashboard/store', [TaskController::class, 'store']);
Route::get('/edit-{id}', [TaskController::class, 'edit']);
Route::put('/dashboard/{id}', [TaskController::class, 'update']);
Route::delete('/dashboard/{id}', [TaskController::class, 'delete']);
Route::get('/dashboard/{id}', [TaskController::class, 'show']);
Route::get('/calendar', [CalendarController::class, 'index']);
Route::get('/events', [CalendarController::class, 'events']);


