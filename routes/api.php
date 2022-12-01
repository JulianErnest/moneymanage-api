<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AccountController;
use App\Http\Controllers\AuthController;

// Route::resource('account', AccountController::class);

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Private routes
Route::group(['middleware' => ['auth:sanctum']], function () {
  Route::post('/logout', [AuthController::class, 'logout']);
  Route::post('/account/{id}', [AccountController::class, 'store']);
  Route::put('/account/{id}', [AccountController::class, 'update']);
  Route::get('/account', [AccountController::class, 'index']);
  Route::get('/account/get/{id}', [AccountController::class, 'showById']);
  Route::get('/account/{id}', [AccountController::class, 'show']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
