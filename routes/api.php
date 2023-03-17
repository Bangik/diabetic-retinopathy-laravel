<?php

use App\Http\Controllers\Api\Admin\ExaminationController as AdminExaminationController;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users', [UserController::class, 'store']);
        Route::get('/users/{id}', [UserController::class, 'show']);
        Route::put('/users/{id}', [UserController::class, 'update']);
        Route::delete('/users/{id}', [UserController::class, 'destroy']);

        Route::get('/examinations', [AdminExaminationController::class, 'index']);
        Route::post('/examinations', [AdminExaminationController::class, 'store']);
        Route::get('/examinations/{id}', [AdminExaminationController::class, 'show']);
        Route::put('/examinations/{id}', [AdminExaminationController::class, 'update']);
        Route::delete('/examinations/{id}', [AdminExaminationController::class, 'destroy']);
    });

    Route::post('logout', [AuthController::class, 'logout']);
});

Route::post('login', [AuthController::class, 'login'])->name('login');
