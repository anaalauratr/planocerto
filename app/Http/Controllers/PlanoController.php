<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanoController extends Controller
{
    public function index()
    {
        return view('telaPlanoAlimentar');
    }
    public function create()
    {
        return view('cadastroPlano');
    }
     public function edit()
    {
        return view('atualizarPlano');
    }
    public function editRefeicao()
    {
        return view('atualizarRefeicao');
    }
    
}
