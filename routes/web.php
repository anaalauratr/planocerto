<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\NutricionistaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\PasswordController;

/*
|--------------------------------------------------------------------------
| Página inicial
|--------------------------------------------------------------------------
*/
 
Route::get('/', function () {
    return view('inicial');
});



Route::get('/dashboard', function () {
    return redirect()->route('Principal');
})->middleware('auth')->name('dashboard');


/*
|--------------------------------------------------------------------------
| Cadastro público de nutricionista
|--------------------------------------------------------------------------
*/

Route::get('/nutricionista/create', 
    [NutricionistaController::class, 'create']
)->name('nutricionista.create');





/*
|--------------------------------------------------------------------------
| Rotas protegidas
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


    /*
    |------------------------------------------------------
    | Perfil
    |------------------------------------------------------
    */

    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |------------------------------------------------------
    | Planos Alimentares
    |------------------------------------------------------
    */

   Route::get('/Principal', [PlanoController::class, 'index'])
    ->name('Principal');

Route::get('/plano/create', [PlanoController::class, 'create'])
    ->name('plano.create');
     Route::post('/plano',               [PlanoController::class, 'store'])->name('plano.store');

Route::get('/plano/{id}/view', [PlanoController::class, 'view'])
    ->name('plano.view');
Route::post('/plano/{id}/update',   [PlanoController::class, 'update'])->name('plano.update');

Route::get('/plano/{id}/refeicao', [PlanoController::class, 'viewRefeicao'])
    ->name('plano.refeicao.view');
Route::post('/refeicao/{id}/update',   [PlanoController::class, 'updateRefeicao'])->name('refeicao.update');
    Route::get('/plano/{id}/destroy',   [PlanoController::class, 'destroy'])->name('plano.destroy');
     Route::get('/refeicao/{id}/destroy',   [PlanoController::class, 'destroyRefeicao'])->name('refeicao.destroy');
      Route::get('/plano/search',         [PlanoController::class, 'search'])->name('plano.search');

    /*

    
    |------------------------------------------------------
    | Clientes
    |------------------------------------------------------
    */

    Route::get('/cliente',                [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/cliente/create',         [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/cliente',               [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/cliente/{id}/view',      [ClienteController::class, 'view'])->name('cliente.view');
    Route::post('/cliente/{id}/update',   [ClienteController::class, 'update'])->name('cliente.update');
    Route::get('/cliente/{id}/destroy',   [ClienteController::class, 'destroy'])->name('cliente.destroy');
    Route::get('/cliente/search',         [ClienteController::class, 'search'])->name('cliente.search');

    /*

|------------------------------------------------------
    | Usuarios, para administrador acessar
    |------------------------------------------------------
    */

    Route::get('/usuario',                [UserController::class, 'index'])->name('usuario.index');
    Route::get('/usuario/{id}/view',      [UserController::class, 'view'])->name('usuario.view');
    Route::post('/usuario/{id}/update',   [UserController::class, 'update'])->name('usuario.update');
    Route::get('/usuario/{id}/destroy',   [UserController::class, 'destroy'])->name('usuario.destroy');
    Route::get('/usuario/search',         [UserController::class, 'search'])->name('usuario.search');

    /*



    |------------------------------------------------------
    | Nutricionistas
    |------------------------------------------------------
    */


Route::get('/nutricionista', 
    [NutricionistaController::class, 'index']
)->name('nutricionista.index');


Route::get('/nutricionista/{id}/view', 
    [NutricionistaController::class, 'view']
)->name('nutricionista.view');


});

/*
|--------------------------------------------------------------------------
| Rotas do Breeze
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';