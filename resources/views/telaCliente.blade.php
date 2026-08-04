@extends('layout.navio')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

        
<div class="container" style="margin-top: 7%">
       <h2>Listagem de clientes</h2>
 <form class="mb-3" method="GET" action="{{ route('cliente.search') }}">


    <div class="input-group">
    <input id="filtro" name="filtro" class="form-control" type="text" placeholder="Pesquisar..." value="{{ $filtro ?? '' }}" autofocus>
    <button class="btn" type="submit" style="background-color:#95b634; color:#fff;">
        <i class="bi bi-search"></i>
    </button>
    </form>
</div>

     <a class="btn btn-success btn" href="{{ route('cliente.create') }}">NOVO <i class="bi bi-plus-circle"></i></a>
    <!-- Div do plano alimentar -->
    <div class="plano">

   <div class="table-responsive">
    <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Objetivo</th>
                
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                     @foreach ($clientes as $cliente)
            <tr>
                
                
                <td>{{ $cliente->user->name }}</td>
                 <td>{{ $cliente->data_nascimento->format('d/m/Y') }}</td>
                 <td>{{ $cliente->objetivo }}</td>


                  <td class="acoes">

                        <a href="{{ route('cliente.view', $cliente->id) }}">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="{{ route('cliente.destroy', encrypt($cliente->id)) }}">
                            <i class="bi bi-trash btn-excluir"></i>
                        </a>

                    </td>

        
                
            </tr>
        @endforeach

                    

                   
                

            </tbody>

        </table>

    </div>

</div>
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var botoesExcluir = document.querySelectorAll('.btn-excluir');

            botoesExcluir.forEach(function (botao) {
                botao.addEventListener('click', function (event) {
                    if (!confirm('Tem certeza que deseja excluir esse cliente?')) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection

