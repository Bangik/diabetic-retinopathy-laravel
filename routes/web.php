<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisterPatientController;
use App\Http\Controllers\AuthController;
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
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/register-patient', [RegisterPatientController::class, 'index'])->name('admin.register.patient');
        Route::get('/register-patient/create', [RegisterPatientController::class, 'create'])->name('admin.register.patient.create');
    });
});

Auth::routes();

