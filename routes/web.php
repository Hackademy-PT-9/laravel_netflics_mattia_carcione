<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RouteController::class, ('welcome')])->name('welcome');

Route::get('/catalogo/{tipologia}', [RouteController::class, ('catalogue')])->name('catalogue');

Route::get('/dettaglio-film/{uri}', [RouteController::class, ('detail')])->name('detail');