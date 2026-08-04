<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;


class NutricionistaController extends Controller
{
      public function index()
    { 
 
    $usuario = Auth::user();

    return view('telaPerfil', [
        'usuario' => $usuario
    ]);
}
    
     public function create()
{
    return view('telaCadastroNutricionista');
}

public function view($id)
{
    $nutricionista = User::find($id);

    return view('atualizarNutricionista', [
        'nutricionista' => $nutricionista
    ]);
}
}
