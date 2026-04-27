<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
     public function index()
    {
        return view('telaCliente');
    }
     public function create()
    {
        return view('telaCadastroCliente');
    }
     public function edit()
    {
        return view('atualizarCliente');
    }
}
