@extends('layout.navio')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

        
<div class="container" style="margin-top: 7%">
    <h3 class="nome-plano" style="color: #95b634;">Listagem de clientes</h3>
    <br> 
<!-- Campo de pesquisa -->
    <input type="text" class="pesquisa" placeholder="Pesquise">

     <a class="btn btn-success btn" href="{{ route('CadastroCliente') }}">NOVO <i class="bi bi-plus-circle"></i></a>
    <!-- Div do plano alimentar -->
    <div class="plano">

   <div class="table-responsive">
    <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Objetivo</th>
                    <th>Sexo</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>Planos Alimentares</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                <tr>

                    <td>Maria</td>
                    <td>01/01/2000</td>
                    <td>email@email.com</td>
                    <td>Emagrecer</td>
                    <td>Feminino</td>
                    <td>65</td>
                    <td>1.65</td>
                     <td>Nome do plano</td>

                    <td class="acoes">

                        <a href="{{ route('AtualizarCliente') }}">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-trash"></i>
                        </a>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>
@endsection
