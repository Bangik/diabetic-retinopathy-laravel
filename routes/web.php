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
        Route::get('/register-patient', [RegisterPatientController::class, 'index'])->name('admin.register-patient.index');
        Route::get('/register-patient/create', [RegisterPatientController::class, 'create'])->name('admin.register-patient.create');
        Route::post('/register-patient', [RegisterPatientController::class, 'store'])->name('admin.register-patient.store');
        Route::get('/register-patient/{id}/edit', [RegisterPatientController::class, 'edit'])->name('admin.register-patient.edit');
        Route::put('/register-patient/{id}', [RegisterPatientController::class, 'update'])->name('admin.register-patient.update');
        Route::delete('/register-patient/{id}', [RegisterPatientController::class, 'destroy'])->name('admin.register-patient.destroy');
    });
});

Auth::routes();

