<?php

use App\Http\Controllers\authController;
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

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [authController::class, 'logout']);
    
    Route::middleware(['admin'])->group(function () {
        Route::view('/app', 'admin.index');
    });

    Route::middleware(['teacher'])->group(function () {
        
    });

    Route::middleware(['student'])->group(function () {
        
    });

});


Route::get('/auth', [authController::class, 'index'])->name('login');
Route::get('/', function () { return view('auth.login'); });
Route::post('/login', [authController::class, 'login']);
