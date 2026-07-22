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

Route::get('/AtualizarRefeicao', [PlanoController::class, 'editRefeicao'])
    ->name('AtualizarRefeicao');    


//cliente



Route::get('/cliente',                [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create',         [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente',               [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/{id}/view',      [ClienteController::class, 'view'])->name('cliente.view');
Route::post('/cliente/{id}/update',   [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/{id}/destroy',   [ClienteController::class, 'destroy'])->name('cliente.destroy');
Route::get('/cliente/search',         [ClienteController::class, 'search'])->name('cliente.search');
Route::get('/Cliente', [ClienteController::class, 'index'])
    ->name('Cliente');

Route::get('/CadastroCliente', [ClienteController::class, 'create'])
    ->name('CadastroCliente');

Route::get('/AtualizarCliente', [ClienteController::class, 'edit'])
    ->name('AtualizarCliente');    


//nutricionista

Route::get('/nutricionista',                [NutricionistaController::class, 'index'])->name('nutricionista.index');
Route::get('/nutricionista/create',         [NutricionistaController::class, 'create'])->name('nutricionista.create');
Route::post('/nutricionista',               [NutricionistaController::class, 'store'])->name('nutricionista.store');
Route::get('/nutricionista/{id}/view',      [NutricionistaController::class, 'view'])->name('nutricionista.view');
Route::post('/nutricionista/{id}/update',   [NutricionistaController::class, 'update'])->name('nutricionista.update');
Route::get('/nutricionista/{id}/destroy',   [NutricionistaController::class, 'destroy'])->name('nutricionista.destroy');
Route::get('/nutricionista/search',         [NutricionistaController::class, 'search'])->name('nutricionista.search');