@extends('layout.formulario')

@section('content')

<form method="POST" action="">
    
    
    <!-- ------------------------------------  -->
    
 <h5 class="mt-4">Refeição</h5>
    <div id="lista-refeicoes">

       <br>
    <!-- Refeição  -->
    <div class="mb-4" >

    <!-- Linha 1 -->
    <div class="row mb-2">

        <!-- Nome -->
        <div class="col-md-4">

            <input
                type="text"
                class="form-control"
                placeholder="Nome"
                name="refeicoes[0][nome]"
            >

        </div>

    </div>

    <!-- Linha 2 (Descrição alinhada) -->
    <div class="row mb-2">

        <div class="col-md-12">

            <textarea
                class="form-control"
                placeholder="Descrição da refeição"
                name="refeicoes[0][descricao]"
                rows="3"
            ></textarea>

        </div>

    </div>

    <!-- Linha 3 -->
    <div class="row">

        <div class="col-md-4">

            <input
                type="number"
                class="form-control"
                placeholder="Calorias"
                name="refeicoes[0][calorias]"
            >

        </div>

        <div class="col-md-4">

            <input
                type="time"
                class="form-control"
                name="refeicoes[0][horario]">

        </div>

      
</div>
    </div>

</div>
   
    <!-- Botao salvar -->
    <div class="text-end">
            <!-- qnd clicar no botao vou para tela de planos alimentares-->
        <button
            type="button"
            class="btn btn-login px-4" 
            onclick="window.location.href='{{ route('Principal')}}'" 
        >
            Atualizar refeição
        </button>

    </div>

</form>

@endsection
