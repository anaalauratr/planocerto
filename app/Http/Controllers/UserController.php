<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function index()
{
    

    $usuarios = User::where('id', '!=', 71)->get();

    return view('telaUsuarios', [
        'usuarios' => $usuarios,
        'filtro' => ''
    ]);
}

  
  public function view($id)
{
    try {
        $usuario = User::find($id);
        return view('atualizarUsuario', ['usuario' => $usuario]);
    } catch (\Exception $e) {
        session()->flash('erro', 'Erro ao carregar: ' . $e->getMessage());
        return redirect()->route('usuario.index');
    }
}

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|min:8',
    ]);

    try {
        $usuario = User::find($id);

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');

        if ($request->filled('password')) {
            $usuario->password = Hash::make($request->input('password'));
        }

        $usuario->save();

        session()->flash('msg', 'Usuário atualizado com sucesso!');
        return redirect()->route('usuario.index');

    } catch (\Exception $e) {
        session()->flash('erro', 'Erro ao atualizar: ' . $e->getMessage());
        return redirect()->route('usuario.view', ['id' => $id]);
    }
}
     



//duvida, nao sei oq fazer para excluir qm é cliente, pois qnd tento excluit o user da erro, ja q a tabela usuario nao é soft delets, ent nao sei oq fazer com ela
// devo colocar cascade ou usuario com softdelets


   public function destroy($id)
{
    try {

        $id = decrypt($id);

        if ($id == 71) {
            session()->flash('erro', 'Não é possível excluir o administrador principal.');
            return redirect()->route('usuario.index');
        }

        $usuario = User::find($id);

        if (!$usuario) {
            session()->flash('erro', 'Usuário não encontrado.');
            return redirect()->route('usuario.index');
        }

        $usuario->delete();

        session()->flash('msg', 'Usuário excluído com sucesso!');
        return redirect()->route('usuario.index');

    } catch (\Exception $e) {
        session()->flash('erro', 'Erro ao excluir: ' . $e->getMessage());
        return redirect()->route('usuario.index');
    }
}

    public function search(Request $request)
    {
        $filtro = trim((string) $request->input('filtro', ''));
        $usuarios = User::where('id', '!=', 1)
                       ->where('name', 'like', "%{$filtro}%")
                       ->orWhere('email', 'like', "%{$filtro}%")
                       ->orWhere('tipo_usuario', 'like', "%{$filtro}%")
                       ->orderBy('id')
                       ->get();
        return view('telaUsuarios', ['usuarios' => $usuarios, 'filtro' => $filtro]);
    }
}