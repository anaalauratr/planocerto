@extends('layout.formulario')

@section('content')

   <form action="{{ route('register') }}"
              method="POST"  class="needs-validation" novalidate>

            @csrf
    <h4 class="mb-4">Cadastro de nutricionista</h4>
<!-- Nome -->
<div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="fa fa-user"></i>
    </span>

    <input
        type="text"
        class="form-control @error('name') is-invalid @enderror"
        id="name"
        name="name"
        placeholder="Nome"
        value="{{ old('name') }}"
        autocomplete="name"
        autofocus
        required
    >

    <div class="invalid-feedback">
        @error('name') {{ $message }} @enderror
    </div>
</div>

<!-- Email -->
<div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="fa fa-envelope"></i>
    </span>

    <input
        type="email"
        class="form-control @error('email') is-invalid @enderror"
        id="email"
        name="email"
        placeholder="Email"
        value="{{ old('email') }}"
        autocomplete="username"
        required
    >

    <div class="invalid-feedback">
        @error('email') {{ $message }} @enderror
    </div>
</div>

<!-- Senha -->
<div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="fa fa-lock"></i>
    </span>

    <input
        type="password"
        class="form-control @error('password') is-invalid @enderror"
        id="password"
        name="password"
        placeholder="Senha"
        autocomplete="new-password"
        required
    >

    <div class="invalid-feedback">
        @error('password') {{ $message }} @enderror
    </div>
</div>

<!-- Confirmar Senha -->
<div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="fa fa-lock"></i>
    </span>

    <input
        type="password"
        class="form-control @error('password_confirmation') is-invalid @enderror"
        id="password_confirmation"
        name="password_confirmation"
        placeholder="Confirme a Senha"
        autocomplete="new-password"
        required
    >

    <div class="invalid-feedback">
        @error('password_confirmation') {{ $message }} @enderror
    </div>
</div>

            <button type="submit" class="btn btn-login px-4">
                CADASTRAR
            </button>
        <a class="btn btn-login px-4" href="{{ route('login') }}">VOLTAR</a>

    </div>

</form>

@endsection