<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RegistroPontoController;
/*Rotas*/

Route::get('/',[RegistroPontoController::class,'index']);
Route::get('/events/cadastrar',[RegistroPontoController::class,'CreateUsuario']);
Route::post('/events',[RegistroPontoController::class,'store']);
Route::get('/dashboard',[RegistroPontoController::class,'dashboard'])->middleware('auth');

