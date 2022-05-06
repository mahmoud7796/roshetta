<?php

use App\Http\Controllers\Api\RoshettaController;
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

Route::post('/change-photo', [RoshettaController::class, 'updatePhoto']);
Route::post('/search', [RoshettaController::class, 'search']);
Route::post('/getPrescriptions', [RoshettaController::class, 'getPrescriptions']);



