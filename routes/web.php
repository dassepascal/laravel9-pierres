<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ImageController;
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
Route::get('/stones/{stone:slug}',[MainController::class,'show'])->name('stone');

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/admin/stones',[StoneController::class,'index'])->middleware('admin')->name('stones.index');
Route::get('/admin/stones/create',[StoneController::class,'create'])->middleware('admin')->name('stores.create');
Route::post('/admin/stones/store',[StoneController::class,'store'])->middleware('admin')->name('stones.store');

Route::delete('/admin/stones/{stone}/delete>',[StoneController::class,'delete'])->middleware('admin')->name('stones.delete');
Route::get('/admin/stones/{stone}/edit',[StoneController::class,'edit'])->middleware('admin')->name('stones.edit');
Route::put('/admin/stones/{stone}/update',[StoneController::class,'update'])->middleware('admin')->name('stones.update');

//upload image
Route::get('/image', [ImageController::class,'index'])->name('image.index');
Route::post('/image', [ImageController::class,'store'])->name('image.store');
