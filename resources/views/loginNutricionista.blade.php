@extends('layout.formulario')

@section('content')

<form>

    <h4 class="mb-4">Faça seu login</h4>

    <!-- EMAIL -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-user"></i>
        </span>

        <input
            type="text"
            class="form-control"
            placeholder="Email"
        >
    </div>

    <!-- PASSWORD -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-lock"></i>
        </span>

        <input
            type="password"
            class="form-control"
            placeholder="Senha"
        >
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                id="remember"
            >

            <label
                class="form-check-label"
                for="remember"
            >
                Save Password
            </label>
        </div>

        <button
            type="button"
            class="btn btn-login px-4"
            onclick="window.location.href='{{ route('Principal') }}'">

            ENTRAR

        </button>

    </div>

</form>

<div class="text-center" style="margin-top: 30px;">

    <p style="color:#95b634">

        Voce é nutricionista e ainda não possui uma conta no PlanoCerto?

    </p>

    <button
        type="button"
        class="btn btn-login px-4"
        onclick="window.location.href='{{ route('CadastroNutricionista') }}'">

        CADASTRE-SE

    </button>
@endsection




</div>