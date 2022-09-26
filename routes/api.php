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
Route::post('user-login', [LoginController::class, 'login']);
Route::get('user-get/{id}', [UserController::class, 'getById']);
Route::post('user-register', [RegisterController::class, 'store']);
Route::delete('user-delete/{id}', [UserController::class, 'delete']);
Route::post('update-donator-request', [UserController::class, 'update']);

Route::get('hospital', [HospitalController::class, 'show']);
Route::post('hospital-login', [LoginController::class, 'hospitalLogin']);
Route::delete('delete-hospital/{id}', [HospitalController::class, 'delete']);
Route::post('hospital-register', [RegisterController::class, 'registerHospital']);

Route::post('donation-register', [RegisterToDonateController::class, 'store']);

Route::post('blood-request', [BloodRequestController::class, 'submit']);
Route::get('get-request-history', [BloodRequestController::class, 'show']);
Route::get('blood-request/{id}', [BloodRequestController::class, 'showById']);
Route::post('update-blood-request', [BloodRequestController::class, 'update']);
Route::delete('delete-blood-request/{id}', [BloodRequestController::class, 'delete']);

