<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Api\DataController;

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

Route::get('/install', [DataController::class, 'saveData'])->name('install');

Route::get('/profile', [UsersController::class, 'dashboard'])->name('user.dashboard')->middleware('auth');

Route::get('/',  [PagesController::class, 'index'])->name('home');

Route::get('/planes', [PagesController::class, 'plans'])->name('plans');

/* 
* Para acceder a estas rutas, necesitaras crear un plan. Si no desea 
* hacerlo de momento, puedes eliminar
* el middleware 'plan.limit'
*/
Route::get('/publicar',  [ArticlesController::class, 'create'])->name('articles.create')->middleware(['auth', 'plan.limit']);

Route::post('/articles',  [ArticlesController::class, 'store'])->name('articles.store')->middleware(['auth', 'plan.limit']);

// example view for MercadoPago
Route::view('checkout', 'checkout')->name('checkout');


Route::view('listado', 'list')->name('list');

Route::view('ayuda', 'info.help')->name('info.help');

Route::view('politica-de-privacidad', 'info.policy')->name('info.policy');
Route::view('faqs', 'info.faq')->name('info.faq');
Route::view('terminos-y-condiciones', 'info.terms')->name('info.terms');

Route::view('contacto', 'info.contact')->name('contact');

Route::view('car/detalle', 'car-detail')->name('car.details');

Route::view('bienvenido', 'welcome')->name('welcome');


/* ESTAS RUTAS SON DE PRUEBA PARA VER LOS DISEÑOS SIN REGISTRO */
Route::view('guest', 'publish-guest')->name('publish.guest');;








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
