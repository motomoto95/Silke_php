<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('csaldo', 'App\Http\Controllers\SaldoController');
Route::resource('cconfig', 'App\Http\Controllers\ConfigController');
Route::resource('ccategoria', 'App\Http\Controllers\CategoriaController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class,'User'])->name('user');
Route::get('/condition', [App\Http\Controllers\HomeController::class,'Condition'])->name('condition');
Route::get('/config', [App\Http\Controllers\HomeController::class,'Configuracion'])->name('configuracion');
Route::get('/tienda', [App\Http\Controllers\HomeController::class,'Tienda'])->name('tienda');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
