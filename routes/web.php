<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ExaminationController;
use App\Http\Controllers\Doctor\ExaminationController as DoctorExaminationController;
use App\Http\Controllers\Admin\RegisterPatientController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\ProfileController;
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
    return view('frontend.index');
})->name('index');

Route::get('/dr-information', function () {
    return view('frontend.dr-information');
})->name('dr-information');

Route::get('/dr-detection', function () {
    return view('frontend.dr-detection');
})->name('dr-detection');

Route::get('/terms-and-conditions', function () {
    return view('frontend.terms-conditions');
})->name('terms-and-conditions');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
    Route::put('/profile/change-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');

    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/register-patient', [RegisterPatientController::class, 'index'])->name('admin.register-patient.index');
        Route::get('/register-patient/create', [RegisterPatientController::class, 'create'])->name('admin.register-patient.create');
        Route::post('/register-patient', [RegisterPatientController::class, 'store'])->name('admin.register-patient.store');
        Route::get('/register-patient/{id}/edit', [RegisterPatientController::class, 'edit'])->name('admin.register-patient.edit');
        Route::put('/register-patient/{id}', [RegisterPatientController::class, 'update'])->name('admin.register-patient.update');
        Route::delete('/register-patient/{id}', [RegisterPatientController::class, 'destroy'])->name('admin.register-patient.destroy');

        Route::get('/doctor', [DoctorController::class, 'index'])->name('admin.doctor.index');
        Route::get('/doctor/create', [DoctorController::class, 'create'])->name('admin.doctor.create');
        Route::post('/doctor', [DoctorController::class, 'store'])->name('admin.doctor.store');
        Route::get('/doctor/{id}/edit', [DoctorController::class, 'edit'])->name('admin.doctor.edit');
        Route::put('/doctor/{id}', [DoctorController::class, 'update'])->name('admin.doctor.update');
        Route::delete('/doctor/{id}', [DoctorController::class, 'destroy'])->name('admin.doctor.destroy');

        Route::get('/examination', [ExaminationController::class, 'index'])->name('admin.examination.index');
        Route::get('/examination-all', [ExaminationController::class, 'indexAll'])->name('admin.examination.indexAll');
        Route::get('/examination/create/{id?}', [ExaminationController::class, 'create'])->name('admin.examination.create');
        Route::post('/examination', [ExaminationController::class, 'store'])->name('admin.examination.store');
        Route::get('/examination/{id}/edit', [ExaminationController::class, 'edit'])->name('admin.examination.edit');
        Route::put('/examination/{id}', [ExaminationController::class, 'update'])->name('admin.examination.update');
        Route::delete('/examination/{id}', [ExaminationController::class, 'destroy'])->name('admin.examination.destroy');
        Route::get('/examination/{id}/show', [DoctorExaminationController::class, 'show'])->name('admin.examination.show');
    });

    Route::group(['middleware' => 'doctor', 'prefix' => 'doctor'], function () {
        Route::get('/examination', [DoctorExaminationController::class, 'index'])->name('doctor.examination.index');
        Route::get('/examination/create', [DoctorExaminationController::class, 'create'])->name('doctor.examination.create');
        Route::post('/examination', [DoctorExaminationController::class, 'store'])->name('doctor.examination.store');
        Route::get('/examination/{id}/edit', [DoctorExaminationController::class, 'edit'])->name('doctor.examination.edit');
        Route::get('/examination/{id}/show', [DoctorExaminationController::class, 'show'])->name('doctor.examination.show');
        Route::put('/examination/{id}/update', [DoctorExaminationController::class, 'update'])->name('doctor.examination.update');
        Route::put('/examination/{id}/updateImage', [DoctorExaminationController::class, 'updateImage'])->name('doctor.examination.updateImage');
        Route::delete('/examination/{id}', [DoctorExaminationController::class, 'destroy'])->name('doctor.examination.destroy');
    });
    
    Route::group(['middleware' => 'patient', 'prefix' => 'patient'], function () {
        Route::get('/examination', [PatientController::class, 'index'])->name('patient.examination.index');
        Route::get('/examination/{id}/show', [DoctorExaminationController::class, 'show'])->name('patient.examination.show');
    });

    Route::get('/examination/{id}/print', [DoctorExaminationController::class, 'print'])->name('doctor.examination.print');
    Route::get('/examination/{id}/export', [DoctorExaminationController::class, 'exportPDF'])->name('doctor.examination.export');
});

Auth::routes();

