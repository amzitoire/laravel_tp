<?php

use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/{id}',[UserController::class,'show'])->name('show');

Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
Route::get('/update/{id}',[UserController::class,'update'])->name('update');

