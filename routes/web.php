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

Route::get('/', [\App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('/create', [\App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::get('/show/{id}', [\App\Http\Controllers\PostController::class,'show'])->name('post.show');
Route::post('/store', [\App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::delete('/destroy/{id}', [\App\Http\Controllers\PostController::class,'destroy'])->name('post.destroy');
Route::get('/edit/{id}', [\App\Http\Controllers\PostController::class,'edit'])->name('post.edit');
Route::put('/update/{id}', [\App\Http\Controllers\PostController::class,'update'])->name('post.update');
