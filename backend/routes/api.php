<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserUnitController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/user_units', [UserUnitController::class, 'index']);
Route::middleware('api')->post('/user_units', [UserUnitController::class, 'store']);
Route::middleware('api')->post('/user_units/{userUnit}/equip', [UserUnitController::class, 'equip']);

