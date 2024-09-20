<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\carcontroller;
use App\Http\Controllers\subjectController;
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

Route::get('movie', [MovieController::class,'index']);
Route::get('car', [carcontroller::class,'index']);
Route::get('/subjects', [subjectController::class,'index']);
Route::get('/subjects/delete/{number_id}', [subjectController::class,'delete']);
Route::get('/subjects/update/{number_id}', [subjectController::class,'update']);
Route::post('/subjects/insert', [subjectController::class,'insert']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
