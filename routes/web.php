<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoneController;

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



//Route::get('/stones',[StoneController::class,'index']);

Auth::routes();

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/stones',[MainController::class,'indexStones'])->name('stones');
Route::get('/stones/{slug}',[MainController::class,'show'])->name('stone');

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/admin/stones',[StoneController::class,'index'])->middleware('admin');
