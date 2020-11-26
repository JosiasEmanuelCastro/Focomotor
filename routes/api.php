<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\Api\ArticlesController;

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

Route::get('/states', [DataController::class, 'findArticlesByState']);

Route::get('/find/locations/{query}', [DataController::class, 'findArticlesByLocation']);

Route::get('/locations/{query}', [DataController::class, 'getLocations']);

Route::get('/categories/all', [CategoryController::class, 'index']);

Route::get('/articles/{article}/images', [ArticlesController::class, 'images']);

//Route::get('/categories/{category}/trademarks', [TrademarkController::class, 'index']);

Route::get('/categories/{category}', [CategoryController::class, 'show']);

//Route::get('/trademarks/{trademark}', [ModelController::class, 'index']);

Route::post('/notifications/webhook', [DataController::class, 'notifications']);

Route::post('/notifications/ipn', [DataController::class, 'notificationsIpn']);

Route::get('/admin/plan/create/{name}/{price}', [PlanController::class, 'store']);

Route::get('/admin/plan/subscribe/{plan}', [PlanController::class, 'subscribe']);



