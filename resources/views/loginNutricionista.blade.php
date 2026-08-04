@extends('layout.formulario')

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <h4 class="mb-4">Faça seu login</h4>

    <!-- EMAIL -->
    <div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="fa fa-user"></i>
    </span>

    <input
        type="email"
        name="email"
        class="form-control @error('email') is-invalid @enderror"
        placeholder="Email"
        value="{{ old('email') }}"
        required
        autofocus
    >

    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

    <!-- PASSWORD -->
    <div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="fa fa-lock"></i>
    </span>

    <input
        type="password"
        name="password"
        class="form-control @error('password') is-invalid @enderror"
        placeholder="Senha"
        required
    >

    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div class="form-check">
           <input
    class="form-check-input"
    type="checkbox"
    id="remember"
    name="remember"
>

            <label
                class="form-check-label"
                for="remember"
            >
                Save Password
            </label>
        </div>

       <button
    type="submit"
    class="btn btn-login px-4">

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
        onclick="window.location.href='{{ route('nutricionista.create') }}'">

        CADASTRE-SE

    </button>
@endsection




</div>