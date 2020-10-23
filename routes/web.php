<?php

use App\Services\ImageService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Api\DataController;
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

/listado
/publicar
/planes
/ingresar
/registro
/ayuda
/preguntas-frecuentes
/política-de-privacidad
/términos-y-condiciones
/contacto
/{category}/{article-title}

/usuario
/usuario/configuraciones

*/

Route::get('/install', [DataController::class, 'saveData'])->name('install');
Route::get('/install/trademarks', [DataController::class, 'saveMarks']);
Route::get('/install/models', [DataController::class, 'saveModels']);

Route::get('/usuario', [UsersController::class, 'dashboard'])->name('user.dashboard')->middleware('auth');
Route::get('/configuracion', [UsersController::class, 'edit'])->name('user.config')->middleware('auth');
//Route::post('/users/update', [UsersController::class, 'update'])->name('users.update')->middleware('auth');

Route::get('/',  [PagesController::class, 'index'])->name('home');

Route::get('/planes', [PagesController::class, 'plans'])->name('plans');

Route::get('/publicar',  [ArticlesController::class, 'create'])->name('articles.create')->middleware(['auth']);

Route::post('/articles',  [ArticlesController::class, 'store'])->name('articles.store')->middleware(['auth']);

Route::get('/listado/{search?}', [ArticlesController::class, 'index'])->name('articles.list');

//Route::get('/listado/{query?}', [ArticlesController::class, 'find'])->name('articles.find');

Route::get('/{category}/{slug}', [ArticlesController::class, 'show'])->name('articles.show');

Route::get('/subscribe/{plan}',  [PlanController::class, 'subscribe'])->name('subscribe');


Route::get('/upload', function(){

    return view('upload');
});

Route::post('/upload', function(){

    $image = request()->file('photo');

    $path = ImageService::saveImage($image, "images");

    return view('upload', compact('path'));
});

Route::view('ayuda', 'info.help')->name('info.help');

Route::view('politica-de-privacidad', 'info.policy')->name('info.policy');
Route::view('preguntas-frecuentes', 'info.faq')->name('info.faq');
Route::view('terminos-y-condiciones', 'info.terms')->name('info.terms');

Route::view('contacto', 'info.contact')->name('contact');

Route::view('bienvenido', 'welcome')->name('welcome');


Route::view('guest', 'publish-guest')->name('publish.guest');
Route::view('restablecer', 'newViews.restore')->name('newViews.restore');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

/* ESTAS RUTAS SON DE PRUEBA PARA VER LOS DISEÑOS SIN REGISTRO */
