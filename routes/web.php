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

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('show');
Route::get('/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('edit');
Route::put('/edit', [\App\Http\Controllers\UserController::class, 'update'])->name('update');
