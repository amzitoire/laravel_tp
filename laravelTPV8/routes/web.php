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


Route::prefix('users')->name('users.')->group(function(){
    Route::get('/',[UserController::class,'create'])->name('create');
    Route::post('/',[UserController::class,'store'])->name('store');
    Route::post('/{id}/update',[UserController::class,'update'])->name('update');
    Route::get('/{id}',[UserController::class,'show'])->name('show');
    Route::post('/{id}/delete',[UserController::class,'delete'])->name('delete');
    Route::get('/{id}/edit',[UserController::class,'edit'])->name('edit');
});


