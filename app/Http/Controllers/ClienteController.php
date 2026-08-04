<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use App\Models\PlanoAlimentar;
use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
  public function index()
{ //listar os clientes do nutricionista que esta logado
    $clientes = Cliente::whereHas('planoAlimentar', function ($query) {
        $query->where('users_id_nutricionista', Auth::id());
    }) ->with('user')->get();

    return view('telaCliente', [
        'clientes' => $clientes
    ]);
}
   public function create()
{
    $planos = PlanoAlimentar::where('users_id_nutricionista', Auth::id())->get();

    return view('telaCadastroCliente', [
        'planos' => $planos
    ]);
}


    public function store(Request $request)
{
    // Confere se os dados estão corretos, faz a validacao
    $request->validate([
        'name'             => 'required',
        'email'            => 'required|email|unique:users,email',
        'password'         => 'required|min:8',
        'plano_id'         => 'required|exists:plano_alimentar,id',
        'objetivo'         => 'required',
        'data_nascimento'  => 'required|date',
        'peso'   => 'required|numeric|min:0',
         'altura' => 'required|numeric|min:0',
        'sexo'             => 'required',
    ]);

    try {
        // Cria o usuario (login) do cliente
        $user = new User();
        $user->name             = $request->name;
        $user->email            = $request->email;
        $user->password         = Hash::make($request->password);
        $user->tipo_usuario     = 'Cliente';
        $user->save();

        // Cria o cliente vinculado ao usuario e ao plano selecionado
        $cliente = new Cliente();
        $cliente->users_id            = $user->id;
        $cliente->plano_alimentar_id  = $request->plano_id;
        $cliente->objetivo            = $request->objetivo;
        $cliente->data_nascimento     = $request->data_nascimento;
       $cliente->peso   = str_replace(',', '.', $request->peso);
        $cliente->altura = str_replace(',', '.', $request->altura);
        $cliente->sexo                = $request->sexo;
        $cliente->save();

       
        return redirect()->route('cliente.index')
            ->with('msg', 'Cliente cadastrado com sucesso!');

    } catch (\Exception $e) {

        return redirect()->route('cliente.create')
            ->with('erro', $e->getMessage());
    }
}

public function view($id)
{
    try {
        $cliente = Cliente::with('user')->find($id);

        // Planos do nutricionista 
        $planos = PlanoAlimentar::where('users_id_nutricionista', Auth::id())->get();

        return view('atualizarCliente', [
            'cliente' => $cliente,
            'planos'  => $planos
        ]);

    } catch (\Exception $e) {
        session()->flash('erro', 'Erro ao carregar: ' . $e->getMessage());
        return redirect()->route('cliente.index');
    }
}

public function update(Request $request, $id)
{
    
    $request->validate([
        'name'             => 'required',
        'email'            => 'required|email',
        'plano_id'         => 'required|exists:plano_alimentar,id',
        'objetivo'         => 'required',
        'data_nascimento'  => 'required|date',
        'peso'             => 'required|numeric|min:0',
        'altura'           => 'required|numeric|min:0',
        'sexo'             => 'required',
    ]);

    try {
        // Busca o cliente que sera alterado
        $cliente = Cliente::find($id);

        // Atualiza os dados do usuario 
        $cliente->user->name  = $request->name;
        $cliente->user->email = $request->email;
        $cliente->user->save();

        // Atualiza dados cdo cliente
        $cliente->plano_alimentar_id = $request->plano_id;
        $cliente->objetivo           = $request->objetivo;
        $cliente->data_nascimento    = $request->data_nascimento;
        $cliente->peso                = str_replace(',', '.', $request->peso);
        $cliente->altura              = str_replace(',', '.', $request->altura);
        $cliente->sexo                = $request->sexo;

        $cliente->save();     // Salva no banco

        return redirect()->route('cliente.index')
            ->with('msg', 'Cliente atualizado com sucesso!');

    } catch (\Exception $e) {

        return redirect()->route('cliente.view', $id)
            ->with('erro', $e->getMessage());
    }
}

public function destroy($id)
{
    try {
        // Descobre qual cliente deve ser apagado
        $cliente = Cliente::find(decrypt($id));

        // Remove o registro do cliente (soft delete)
        $cliente->delete();

        // Mostra mensagem de sucesso e volta pra lista
        session()->flash('msg', 'Registro excluído com sucesso!');
        return redirect()->route('cliente.index');

    } catch (\Exception $e) {
        session()->flash('erro', 'Erro ao excluir: ' . $e->getMessage());
        return redirect()->route('cliente.index');
    }
}

public function search(Request $request)
{
    $filtro = $request->input('filtro');

    $clientes = Cliente::whereHas('planoAlimentar', function ($query) {
            $query->where('users_id_nutricionista', Auth::id());
        })
        ->where(function ($query) use ($filtro) {

            // Pesquisa pelo objetivo e data de nascimento do cliente
            $query->where('objetivo', 'like', "%{$filtro}%")
                  ->orWhere('data_nascimento', 'like', "%{$filtro}%")

                  // Pesquisa pelo nome do usuario
                  ->orWhereHas('user', function ($q) use ($filtro) {
                      $q->where('name', 'like', "%{$filtro}%");
                  });
        })->with('user')->get();

    return view('telaCliente', [
        'clientes' => $clientes,
        'filtro' => $filtro
    ]);
}
}
