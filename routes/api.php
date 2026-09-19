<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ApiController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);   // usuário logado
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/usuarios', [AuthController::class, 'usuarios']);
    Route::get('/cliente', [ApiController::class, 'dadosCliente']); //mostro os dados do usuario e cliente
    Route::get('/cliente/plano', [ApiController::class, 'planoAlimentar']);
});
