<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PainelController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//AUTH ROUTES

Route::middleware([CheckIsNotLogged::class])->group(function(){

    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

});


Route::middleware(CheckIsLogged::class)->group(function(){
    
    Route::get('/painel',[PainelController::class, 'painel_colaborador']);
    Route::get('/', [MainController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

