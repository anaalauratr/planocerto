<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\User;


class NutricionistaController extends Controller
{
      public function index()
    {
        return view('telaPerfil');
       
    }
    
     public function create()
{
    return view('telaCadastroNutricionista');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    try {

        $nutricionista = new User();

        $nutricionista->name = $request->name;
        $nutricionista->email = $request->email;
        $nutricionista->password = Hash::make($request->password);
        $nutricionista->tipo_usuario = 'Nutricionista';

        $nutricionista->save();

        session()->flash('msg', 'Nutricionista cadastrado com sucesso!');
        return redirect()->route('nutricionista.index');

    } catch (\Exception $e) {

        session()->flash('erro', 'Erro ao cadastrar: ' . $e->getMessage());
        return redirect()->back()->withInput();

    }
}

     public function view($id) {
    
        return view('atualizarNutricionista');
    }
}
