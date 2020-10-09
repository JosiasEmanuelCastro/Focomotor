<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\ModelController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/locations/{query}', [DataController::class, 'getLocations']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category}/trademarks', [TrademarkController::class, 'index']);

Route::get('/trademarks/{trademark}/models', [ModelController::class, 'index']);

Route::post('/notifications/webhook', [DataController::class, 'notifications']);



