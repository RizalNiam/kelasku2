<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'auth.jwt',
    'prefix' => 'auth'

], function () {
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('getprofile', [AuthController::class,'getprofile']);
    Route::post('getfriend', [AuthController::class,'getfriend']);
});

Route::post('auth/login', [AuthController::class,'login']);
Route::post('auth/register', [AuthController::class,'register']);