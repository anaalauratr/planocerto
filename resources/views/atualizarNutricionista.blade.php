@extends('layout.formulario')

@section('content')

<form>

    <h4 class="mb-4">Atualizar perfil</h4>

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
     
        <button
            type="button"
            class="btn btn-login px-4"
             onclick="window.location.href='{{ route('Perfil') }}'">Atualizar</button>

    </div>

</form>


@endsection




</div>