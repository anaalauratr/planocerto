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
