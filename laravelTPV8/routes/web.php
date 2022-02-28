<?php

use App\Http\Controllers\FormationController;
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
    Route::get('/{id}/delete',[UserController::class,'destroy'])->name('delete');
    Route::get('/{id}/edit',[UserController::class,'edit'])->name('edit');
});
Route::prefix('users/formations')->name('formations.')->group(function(){
    Route::get('/',[FormationController::class,'create'])->name('createFormation');
    Route::post('/',[FormationController::class,'store'])->name('storeFormation');
    Route::post('/{id}/update',[FormationController::class,'update'])->name('updateFormation');
    Route::get('/{id}',[FormationController::class,'show'])->name('showFormation');
    Route::get('/{id}/delete',[FormationController::class,'destroy'])->name('deleteFormation');
    Route::get('/{id}/edit',[FormationController::class,'edit'])->name('editFormation');
});


