@extends('layout.formulario')

@section('content')

<form method="POST" action="">
    
    <h4 class="mb-4">Cadastro de Plano Alimentar</h4>

    <!-- Nome do plano -->
    <div class="input-group mb-3">

        <span class="input-group-text icon-box">
            <i class="fa fa-utensils"></i>
        </span>

        <input
            type="text"
            class="form-control"
            placeholder="Nome do plano alimentar"
            name="nome"
        >

    </div>

    <!-- descricao -->
    <div class="input-group mb-3">

        <span class="input-group-text icon-box">
            <i class="fa fa-align-left"></i>
        </span>
         
        <input
            type="text" class="form-control" placeholder="Descrição" name="descricao" >

    </div>

    <!-- Datas -->
    <div class="row">

        <div class="col-md-6 mb-3">
                <label class="form-label">
        Data de início
    </label>
            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-calendar"></i>
                </span>
 
                <input
                    type="date"
                    class="form-control"
                    name="data_inicio"
                >

            </div>

        </div>
<br>
        <div class="col-md-6 mb-3">
                <label class="form-label">
        Data de fim
    </label>
            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-calendar"></i>
                </span>
 
                <input
                    type="date"
                    class="form-control"
                    name="data_fim"
                >

            </div>

        </div>

    </div>

    <!-- ------------------------------------  -->
    
 <h5 class="mt-4">Refeições</h5>
    <div id="lista-refeicoes">


    <!-- Refeição  -->
    <div class="refeicao-item mb-4" style="border: 1px solid #95b634; border-radius: 8px; padding: 2%">

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

        <div class="col-md-4">

            <button
                type="button"
                class="btn btn-danger"
                onclick="removerRefeicao(this)"
            >
                <i class="bi bi-trash3"></i>
            </button>

        </div>
</div>
    </div>

</div>
    <!-- Botão adicionar -->
    <div class="text-center mb-3">

        <button
            type="button"
            class="btn btn-login"
            onclick="adicionarRefeicao()"
        >
            + Adicionar Refeição
        </button>

    </div>

    <!-- Botao salvar -->
    <div class="text-end">
            <!-- qnd clicar no botao vou para tela de planos alimentares-->
        <button
            type="button"
            class="btn btn-login px-4" 
            onclick="window.location.href='{{ route('Principal')}}'" 
        >
            Salvar Plano
        </button>

    </div>

</form>

@endsection


<script>

let contador = 1;

function adicionarRefeicao() {

    let container = document.getElementById("lista-refeicoes");
    let nova = document.createElement("div");
    nova.className = "refeicao-item mb-4";
    nova.innerHTML = `
       <div class="row mb-2">

        <!-- Nome -->
        <div class="col-md-4">

            <input
                type="text"
                class="form-control"
                placeholder="Nome"
                name="refeicoes[${contador}][nome]"
            >

        </div>

    </div>

    <!-- Linha 2 -->
    <div class="row mb-2">
            <div class="col-md-12">

            <textarea
                class="form-control"
                placeholder="Descrição da refeição"
                name="refeicoes[${contador}][descricao]"
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
                name="refeicoes[${contador}][calorias]"
            >

        </div>

        <div class="col-md-4">
               <input
                type="time"
                class="form-control"
                name="refeicoes[${contador}][horario]">

        </div>

        <div class="col-md-4">
           <button
                type="button"
                class="btn btn-danger"
                onclick="removerRefeicao(this)" >
                <i class="bi bi-trash3"></i>
            </button>

        </div>

    </div>

    `;
name="refeicoes[horario]"
    container.appendChild(nova);

    contador++;

}

function removerRefeicao(botao) {
    botao.closest(".refeicao-item").remove();
}

</script>