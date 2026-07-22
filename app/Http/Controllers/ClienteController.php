<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
     public function index()
    { 
       
         
$clientes = Cliente::with('user')->get();
         

        return view('telaCliente', [
            'clientes' => $clientes,
            
            'filtro' => ''
        ]);
        
       
    }
     public function create()
    {
        return view('telaCadastroCliente');
    }
      public function view($id) 
    {
        return view('atualizarCliente');
    }
}
