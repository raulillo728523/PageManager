<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionesController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegisterUserController;


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

Route::get('/', [PublicacionesController::class, 'cargar'])->name('dashboard');
Route::get('/home', [PublicacionesController::class, 'home'])->name('home');
Route::get('/template/{id?}', [PublicacionesController::class, 'template'])->name('template');
Route::get('/dash', [PublicacionesController::class, 'getMostrarUsers'])->name('dash');
Route::post('/regitrar', [RegisterController::class, 'create'])->name('create');
Route::post('/regitrarusuario', [RegisterUserController::class, 'agregarusuario'])->name('agregarusuario');
Route::post('/regitrarcliente', [RegisterUserController::class, 'agregarcliente'])->name('agregarcliente');
Route::post('/edit', [RegisterUserController::class, 'edit'])->name('edit');

Auth::routes();

Route::post('/print_chart', [PDFController::class, 'print'])->name('print_chart');