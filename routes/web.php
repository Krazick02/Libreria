<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\HomeController;
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
Auth::routes();


Route::resource('libros',LibroController::class)->middleware('auth');
Route::resource('categorias',CategoriaController::class)->middleware('auth');


Route::get('/', [HomeController::class, 'index'])->name('home');
