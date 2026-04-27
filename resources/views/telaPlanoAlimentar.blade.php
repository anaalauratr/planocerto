@extends('layout.navio')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
<div class="container" style="margin-top: 7%">

    <h2>Planos Alimentares</h2>

    <!-- Campo de pesquisa -->
    <input type="text" class="pesquisa" placeholder="Pesquise">

     <a class="btn btn-success btn" onclick="window.location.href='{{ route('CadastroPlano') }}'">NOVO <i class="bi bi-plus-circle"></i> </a>
    <!-- Div do plano alimentar -->
    <div class="plano">

        <h3 class="nome-plano">Nome do plano alimentar</h3>

        <p class="descricao">
           Descricao: Intuito de emagrecimento ...
            <br>
            Data de início: 06/04/2025 - Fim: 06/04/2025
            
        </p>

        <!-- Listagem de refeicoes de do plano alimentar -->
        <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>

           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>
        </div>

        <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>
           
           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>

            
        </div>

       <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>
             
           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>
        </div>

      <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>
            
           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>

        </div>
               <a class="btn btn-success" href="{{ route('AtualizarPlano') }}">
           Editar
             <i class="bi bi-pencil-square"></i>
           </a>
             <a class="btn btn-success" href="">Excluir  <i class="bi bi-trash3"></i></a>
    </div>



    <div class="plano">

        <h3 class="nome-plano">Nome do plano alimentar</h3>

        <p class="descricao">
           Descricao: Intuito de emagrecimento ...
            <br>
            Data de início: 06/04/2025 - Fim: 06/04/2025
        </p>




        <!-- Listagem de refeicoes de do plano alimentar -->
        <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>
           
           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>
        </div>

        <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>
            
           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>
        </div>

        <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>
             
           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>
        </div>

      <div class="refeicao">
            <div>
                <strong>Café da Manhã</strong>
                 <p>Calorias<p>
               <p>Descricao<p>
                <p>07:00<p>
            </div>
            
           <span class="acoes">

    <a href="{{ route('AtualizarRefeicao') }}">
        <i class="bi bi-pencil-square"></i>
    </a>

    <a href="">
        <i class="bi bi-trash3"></i>
    </a>

        </span>
        </div>
      <a class="btn btn-success" href="{{ route('AtualizarPlano') }}">
           Editar
             <i class="bi bi-pencil-square"></i>
           </a>
             <a class="btn btn-success" href="">Excluir  <i class="bi bi-trash3"></i></a>
    </div>
</div>

@endsection