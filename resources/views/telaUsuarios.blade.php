@extends('layout.navio')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

        
<div class="container" style="margin-top: 7%">
       <h2>Listagem de usuario</h2>
 <form class="mb-3" method="GET" action="{{ route('usuario.search') }}">


    <div class="input-group">
    <input id="filtro" name="filtro" class="form-control" type="text" placeholder="Pesquisar..." value="{{ $filtro ?? '' }}" autofocus>
    <button class="btn" type="submit" style="background-color:#95b634; color:#fff;">
        <i class="bi bi-search"></i>
    </button>
    </form>
</div>

    <!-- Div do plano alimentar -->
    <div class="plano">

   <div class="table-responsive">
    <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                     <th>Tipo usuario</th>
                
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                     @foreach ($usuarios as $usuario)
            <tr>
                
                
                <td>{{ $usuario->name }}</td>
                 <td>{{ $usuario->email}}</td>
                 <td>{{ $usuario->tipo_usuario}}</td>
                


                  <td class="acoes">

                        <a href="{{ route('usuario.view', $usuario->id) }}">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="{{ route('usuario.destroy', encrypt($usuario->id)) }}">
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
                    if (!confirm('Tem certeza que deseja excluir esse usuario?')) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection

