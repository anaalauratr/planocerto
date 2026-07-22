@extends('layout.navio')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

        
<div class="container" style="margin-top: 7%">
    <h3 class="nome-plano" style="color: #95b634;">Listagem de clientes</h3>
    <br> 
<!-- Campo de pesquisa -->
    <input type="text" class="pesquisa" placeholder="Pesquise">

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
                 <td>{{ $cliente->data_nascimento }}</td>
                 <td>{{ $cliente->objetivo }}</td>


                  <td class="acoes">

                        <a href="{{ route('cliente.view', $cliente->id) }}">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-trash"></i>
                        </a>

                    </td>

        
                
            </tr>
        @endforeach

                    

                   
                

            </tbody>

        </table>

    </div>

</div>
@endsection
