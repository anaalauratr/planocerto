<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\PlanoAlimentar;
use App\Models\Refeicao;
use App\Models\User;

use Illuminate\Http\Request;

class PlanoController extends Controller
{
  public function index()
{
    $planos = PlanoAlimentar::where('users_id_nutricionista', Auth::id())
        ->with('refeicoes')
        ->get();

    return view('telaPlanoAlimentar', [
        'planos' => $planos
    ]);
}
    

    public function create()
    {
        return view('cadastroPlano');
    }

   

    

    public function store(Request $request)
    {
        // Confere se os dados estão corretos, faz a validacao
        $request->validate([
            'nome'                       => 'required|max:100',
            'descricao'                  => 'required',
            'data_inicio'                => 'required|date',
            'data_fim'                   => 'required|date|after_or_equal:data_inicio',
            'refeicoes'                  => 'required|array|min:1',
            'refeicoes.*.nome'           => 'required|max:100',
            'refeicoes.*.descricao'      => 'required',
            'refeicoes.*.calorias'       => 'required|numeric',
            'refeicoes.*.horario'        => 'required',
        ]);

        try {
            $plano = new PlanoAlimentar();

$plano->nome        = $request->nome;
$plano->descricao   = $request->descricao;
$plano->data_inicio = $request->data_inicio;
$plano->data_fim    = $request->data_fim;

// pega o nutricionista que está logado
$plano->users_id_nutricionista = Auth::id();   

$plano->save();

            // Percorre as refeicoes enviadas e grava cada uma vinculada ao plano
           foreach ($request->refeicoes as $refeicaoDados) {

    $refeicao = new Refeicao();

    $refeicao->plano_alimentar_id = $plano->id;
    $refeicao->nome = $refeicaoDados['nome'];
    $refeicao->descricao = $refeicaoDados['descricao'];
    $refeicao->calorias = $refeicaoDados['calorias'];
    $refeicao->horario = $refeicaoDados['horario'];

    $refeicao->save();
}

            // Mostra uma mensagem de sucesso e volta pra lista
           

       
       
       return redirect()->route('Principal')
        ->with('msg', 'Plano alimentar armazenado com sucesso!');

} catch (\Exception $e) {

    return redirect()->route('plano.create')
        ->with('erro', $e->getMessage());
}

    }
    
    public function view($id) {
         try {
            $plano = PlanoAlimentar::find($id);           
            return view('atualizarPlano', ['plano' => $plano]);   // Abre a tela com os dados dele

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao carregar: ' . $e->getMessage());
            return redirect()->route('Principal');
        }
    }


   

 public function update(Request $request, $id) {
        // Confere se os dados estão corretos
        $request->validate([
             'nome'                       => 'required|max:100',
            'descricao'                  => 'required',
            'data_inicio'                => 'required|date',
            'data_fim'                   => 'required|date|after_or_equal:data_inicio', //tem q ser dps da data de inicio
            
        ]);

        try {
            // Busca o plano que será alterado
            $plano = PlanoAlimentar::find($id);

            // Troca os dados antigos pelos novos
            $plano->nome= $request->nome;
            $plano->descricao   = $request->descricao;
$plano->data_inicio = $request->data_inicio;
$plano->data_fim    = $request->data_fim;

            $plano->save();     // Salva a alteração no banco


        return redirect()->route('Principal')
        ->with('msg', 'Plano alimentar atualizado com sucesso!');

} catch (\Exception $e) {

    return redirect()->route('plano.create')
        ->with('erro', $e->getMessage());
}
    }


 public function viewRefeicao($id)
    {
       try {
            $refeicao = Refeicao::find($id);           
            return view('atualizarRefeicao', ['refeicao' => $refeicao]);   // Abre a tela com os dados dele

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao carregar: ' . $e->getMessage());
            return redirect()->route('Principal');
        }
    }
  public function updateRefeicao(Request $request, $id) {
        // Confere se os dados estão corretos
        $request->validate([
            'nome'           => 'required|max:100',
            'descricao'      => 'required',
            'calorias'       => 'required|numeric',
            'horario'        => 'required',
            
        ]);

        try {
            
            $refeicao = Refeicao::find($id);

            // Troca os dados antigos pelos novos
            


    $refeicao->nome = $request->nome;
    $refeicao->descricao = $request->descricao;
    $refeicao->calorias =$request->calorias;
    $refeicao->horario =$request->horario;

            $refeicao->save();     // Salva a alteração no banco


        return redirect()->route('Principal')
        ->with('msg', 'Refeição atualizada com sucesso!');

} catch (\Exception $e) {

    return redirect()->route('plano.create')
        ->with('erro', $e->getMessage());
}
    }  



     public function destroy($id) {
        try {
            // Descobre qual plano deve ser apagado
            $plano = PlanoAlimentar::find(decrypt($id));

            // Remove o registro
           $plano->refeicoes()->delete();

          $plano->delete();


            // Mostra mensagem de sucesso e volta pra lista
            session()->flash('msg', 'Registro excluído com sucesso!');
            return redirect()->route('Principal');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao excluir: ' . $e->getMessage());
            return redirect()->route('Principal');
        }
    }

    public function destroyRefeicao($id) {
        try {
            // Descobre qual refeicai deve ser apagada
            $refeicao = Refeicao::find(decrypt($id));

            // Remove o registro
           

          $refeicao->delete();


            // Mostra mensagem de sucesso e volta pra lista
            session()->flash('msg', 'Registro excluído com sucesso!');
            return redirect()->route('Principal');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao excluir: ' . $e->getMessage());
            return redirect()->route('Principal');
        }
    }






    public function search(Request $request)
{
    // Pega o texto digitado na busca
    $filtro = trim((string) $request->input('filtro', ''));

    $planos = PlanoAlimentar::where('users_id_nutricionista', Auth::id())
        ->where(function ($query) use ($filtro) {
            $query->where('nome', 'like', "%{$filtro}%")
                  ->orWhere('descricao', 'like', "%{$filtro}%")
                  ->orWhereRaw('DATE_FORMAT(data_inicio, "%d/%m/%Y") like ?', ["%{$filtro}%"])
                  ->orWhereRaw('DATE_FORMAT(data_fim, "%d/%m/%Y") like ?', ["%{$filtro}%"])
                  ->orWhereHas('refeicoes', function ($sub) use ($filtro) {
                      $sub->where('nome', 'like', "%{$filtro}%")
                          ->orWhere('descricao', 'like', "%{$filtro}%")
                          ->orWhereRaw('CAST(calorias AS CHAR) like ?', ["%{$filtro}%"])
                          ->orWhereRaw('DATE_FORMAT(horario, "%H:%i") like ?', ["%{$filtro}%"]);
                  });
        })
        ->with('refeicoes')
        ->orderBy('id')
        ->get();

    return view('telaPlanoAlimentar', [
        'planos' => $planos,
        'filtro' => $filtro
    ]);
}

    };