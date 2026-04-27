<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     public function edit()
    {
        return view('atualizarNutricionista');
    }
}
