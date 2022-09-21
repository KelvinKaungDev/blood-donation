<?php

use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterToDonateController;
use App\Http\Controllers\UserController;
use App\Http\Requests\BloodRequest;
use Illuminate\Support\Facades\Route;

Route::get('user', [UserController::class, 'showAll']);
Route::delete('user-delete', [UserController::class, 'delete']);
Route::post('user-login', [LoginController::class, 'login']);
Route::post('user-register', [RegisterController::class, 'store']);

Route::get('hospital', [HospitalController::class, 'show']);
Route::post('hospital-login', [LoginController::class, 'hospitalLogin']);
Route::post('hospital-register', [RegisterController::class, 'registerHospital']);

Route::post('donation-register', [RegisterToDonateController::class, 'store']);

Route::post('blood-request', [BloodRequestController::class, 'submit']);

Route::get('get-request-history', [BloodRequestController::class, 'show']);

