<?php

use App\Http\Controllers\accountController;
use App\Http\Controllers\authController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\teacherController;
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
        Route::get('/app', [dashboardController::class, 'index']);
        Route::get('/account/profile', [accountController::class, 'profile']);

        Route::resource('/users/admin', adminController::class);  
        Route::resource('/users/teacher', teacherController::class);
         
        Route::get('/users/admin/view/deleted', [adminController::class, 'deleted']);
        Route::post('/users/admin/view/{id}', [adminController::class, 'restore']);
        
        Route::get('/users/teacher/view/deleted', [teacherController::class, 'deleted']);
        Route::post('/users/teacher/view/{id}', [teacherController::class, 'restore']);

        Route::get('/users/admin/paginate/{page}', [adminController::class, 'paginate']);
        Route::get('/users/daerah', [teacherController::class, 'daerah']);
    });

    Route::middleware(['teacher'])->group(function () {
        
    });

    Route::middleware(['student'])->group(function () {
        
    });

});


Route::get('/auth', [authController::class, 'index'])->name('login');
Route::get('/', function () { return view('auth.login'); });
Route::post('/login', [authController::class, 'login']);
