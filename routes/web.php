<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\NutricionistaController;

Route::get('/', function () {
    return view('inicial');
});

Route::get('/Login', [LoginController::class, 'index'])
    ->name('Login');

//planos alimentares e refeicoes
Route::get('/Principal', [PlanoController::class, 'index'])
    ->name('Principal');

Route::get('/CadastroPlano', [PlanoController::class, 'create'])
    ->name('CadastroPlano');

Route::get('/AtualizarPlano', [PlanoController::class, 'edit'])
    ->name('AtualizarPlano');

Route::get('/AtualizarRefeicao', [PlanoController::class, 'edit'])
    ->name('AtualizarRefeicao');    


//cliente
Route::get('/Cliente', [ClienteController::class, 'index'])
    ->name('Cliente');

Route::get('/CadastroCliente', [ClienteController::class, 'create'])
    ->name('CadastroCliente');

Route::get('/AtualizarCliente', [ClienteController::class, 'edit'])
    ->name('AtualizarCliente');    


//nutricionista

Route::get('/Perfil', [NutricionistaController::class, 'index'])
    ->name('Perfil');

Route::get('/CadastroNutricionista', [NutricionistaController::class, 'create'])
    ->name('CadastroNutricionista');

Route::get('/AtualizarNutricionista', [NutricionistaController::class, 'edit'])
    ->name('AtualizarNutricionista');   
