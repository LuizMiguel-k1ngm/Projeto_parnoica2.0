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
Route::get('/cadastro/acomodacao', [PainelController::class, 'cadastro_acomodacao'])->name('cadastro.acomodacao');
Route::get('/cadastro/acesso_colaborador', [PainelController::class, 'cadastro_acesso_colaborador'])->name('cadastro.acesso_colaborador');
Route::get('/cadastro/colaborador', [PainelController::class, 'cadastro_colaborador'])->name('cadastro.colaborador');
Route::get('/cadastro/consumo', [PainelController::class, 'cadastro_consumo'])->name('cadastro.consumo');
Route::get('/cadastro/frigobar', [PainelController::class, 'cadastro_frigobar'])->name('cadastro.frigobar');
Route::get('/cadastro/itens', [PainelController::class, 'cadastro_itens'])->name('cadastro.itens');





    //RECEPÇÃO

    Route::get('/recepcao/check_in', [PainelController::class, 'cadastro_check_in'])->name('cadastro.check_in');
    Route::get('/recepcao/check_out', [PainelController::class, 'cadastro_check_out'])->name('cadastro.check_out');
    Route::get('/recepcao/cliente', [PainelController::class, 'cadastro_cliente'])->name('cadastro.cliente');
    Route::get('/recepcao/reserva', [PainelController::class, 'cadastro_reserva'])->name('cadastro.reserva');


    //RELATÓRIO 

    Route::get('/relatorio/relatorio', [PainelController::class, 'relatorio_financeiro'])->name('relatorio.financeiro');

    //DASHBORD


    Route::get('/recepcao/dashbord', [PainelController::class, 'dashbord_financeiro'])->name('dashbord.dashbord');

    




});

