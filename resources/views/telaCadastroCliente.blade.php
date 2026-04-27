@extends('layout.formulario')

@section('content')

<form>

    <h4 class="mb-4">Cadastro de clientes</h4>

      <!-- nome -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-user"></i>
        </span>

        <input
            type="text"
            class="form-control"
            placeholder="Digite o nome"
        >
    </div>

     

    <!-- email -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-envelope"></i>
        </span>

        <input
            type="text"
            class="form-control"
            placeholder="Digite o email"
        >
    </div>

    <!-- senha -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-lock"></i>
        </span>

        <input
            type="password"
            class="form-control"
            placeholder="Digite sua senha"
        >
    </div>
     
<!-- objetivo -->
 <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-bullseye"></i>
        </span>

        <input
            type="text"
            class="form-control"
            placeholder="Digite o objetivo"
        >
    </div>
     <!-- peso -->
  <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-speedometer"></i>
        </span>

        <input
            type="text"
            class="form-control"
            placeholder="Digite o peso"
        >
    </div>
<!-- altura-->
     <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-rulers"></i>
        </span>

        <input
            type="text"
            class="form-control"
            placeholder="Digite a altura"
        >
    </div>
<!-- data de nascimento -->
    <div class="col-md-6 mb-3">
                <label class="form-label">
        Data de nascimento
    </label>
            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-calendar"></i>
                </span>
 
                <input
                    type="date"
                    class="form-control"
                    name="data_nascimento"
                >

            </div>

        </div>
  <!-- genero -->
<div class="mb-3">
    <label class="form-label">Sexo</label>

    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" value="Masculino">
            <label class="form-check-label">Masculino</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" value="Feminino">
            <label class="form-check-label">Feminino</label>
        </div>
    </div>
</div>

  <select name="plano_id" class="form-select " required>
        <option value="">Selecione um plano</option>

        <option value="1">Plano Emagrecimento</option>
        <option value="2">Plano Hipertrofia</option>
        <option value="3">Plano Manutenção</option>
        <option value="4">Plano Ganho de Massa</option>
        <option value="5">Plano Reeducação Alimentar</option>

    </select>
    <br>

        <button
            type="button"
            class="btn btn-login px-4"
             onclick="window.location.href='{{ route('Cliente') }}'">Cadastrar</button>

    </div>

</form>


@endsection




</div>