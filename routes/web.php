<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/add-user',[UserController::class,'index'])->name('user.add');
Route::get('/manage-user',[UserController::class,'manage'])->name('user.manage');
Route::post('/new-user',[UserController::class,'create'])->name('user.new');
Route::post('/update-user/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/edit-user/{id}',[UserController::class,'edit'])->name('user.edit');
Route::get('/delete-user/{id}',[UserController::class,'delete'])->name('user.delete');
