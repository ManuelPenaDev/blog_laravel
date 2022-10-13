<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/


//Route::get('/categorias','CategoriesController@index');
//Route::get('/artefacto',[App\http\Controller\ArtefactoController::class,'index'])->name('artefacto');
Route::get('/artefacto',[App\Http\Controllers\ArtefactoController::class,'index'])->name('artefacto');

Route::get('/crear',[App\Http\Controllers\ArtefactoController::class,'create'])->name('artefacto.create');



Route::post('/crear',[App\Http\Controllers\ArtefactoController::class,'store'])->name('artefacto.store');
