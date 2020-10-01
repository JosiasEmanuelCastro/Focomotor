<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/profile', [UsersController::class, 'dashboard'])->name('user.dashboard')->middleware('auth');

Route::get('/',  [PagesController::class, 'index'])->name('home');

/* 
* Para acceder a estas rutas, necesitaras crear un plan. Si no desea 
* hacerlo de momento, puedes eliminar
* el middleware 'plan.limit'
*/
Route::get('/publicar',  [ArticlesController::class, 'create'])->name('articles.create')->middleware(['auth', 'plan.limit']);

Route::post('/articles',  [ArticlesController::class, 'store'])->name('articles.store')->middleware(['auth', 'plan.limit']);

Route::view('listado', 'list')->name('list');
Route::view('planes', 'plans')->name('plans')->middleware('auth');
Route::view('ayuda', 'info.help')->name('info.help');

Route::view('politica-de-privacidad', 'info.policy')->name('info.policy');
Route::view('faqs', 'info.faq')->name('info.faq');
Route::view('terminos-y-condiciones', 'info.terms')->name('info.terms');

Route::view('contacto', 'info.contact')->name('contact');

Route::view('car/detalle', 'car-detail')->name('car.details');










Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
