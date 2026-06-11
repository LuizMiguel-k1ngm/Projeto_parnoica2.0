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

    Route::get('/login', [AuthController::class, 'login']) -> name('login');
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

});

Route::middleware(CheckIsLogged::class)->group(function(){
    
    Route::get('/painel',[PainelController::class, 'painel_colaborador'])->name('painel_colaborador');
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    //CONSULTAS
Route::get('/consulta/frigobar', [PainelController::class, 'frigobar'])->name('consulta.frigobar');
Route::get('/consulta/cliente', [PainelController::class, 'cliente'])->name('consulta.cliente');
Route::get('/consulta/acomodacao', [PainelController::class, 'acomodacao'])->name('consulta.acomodacao');
Route::get('/consulta/colaborador', [PainelController::class, 'colaborador'])->name('consulta.colaborador');



    // CADASTRO


    //RECEPÇÃO


    //RELATÓRIO E DASHBORD




});

