<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\AdminApiController;
use App\Http\Controllers\InstructorApiController;

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

Route::group(['middleware' => 'api', 'prefix' => 'secure'], function () {
    Route::post('/login', [UserApiController::class, 'login']);
    Route::post('/register', [UserApiController::class, 'register']);
    Route::post('/logout', [UserApiController::class, 'logout']);
    Route::post('/refresh', [UserApiController::class, 'refresh']);
    Route::get('/profile', [UserApiController::class, 'profile']);
});

Route::group(['middleware' => 'api', 'prefix' => 'admin'], function () {
    Route::post('/login', [AdminApiController::class, 'login']);
    Route::post('/register', [AdminApiController::class, 'register']);
    Route::post('/logout', [AdminApiController::class, 'logout']);
    Route::post('/refresh', [AdminApiController::class, 'refresh']);
    Route::get('/profile', [AdminApiController::class, 'profile']);
});

Route::group(['middleware' => 'api', 'prefix' => 'instructor'], function () {
    Route::post('/login', [InstructorApiController::class, 'login']);
    Route::post('/register', [InstructorApiController::class, 'register']);
    Route::post('/logout', [InstructorApiController::class, 'logout']);
    Route::post('/refresh', [InstructorApiController::class, 'refresh']);
    Route::get('/profile', [InstructorApiController::class, 'profile']);
});