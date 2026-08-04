@extends('layout.formulario')

@section('content')

<h4 class="mb-4">Atualizar perfil</h4>

@if (session('status') === 'verification-link-sent')
    <div class="alert alert-success">
        Um novo link de verificação foi enviado para o seu email.
    </div>
@endif

@if (session('status') === 'profile-updated')
    <div class="alert alert-success">
        ✓ Perfil atualizado com sucesso
    </div>
@endif

<form id="send-verification" method="POST" action="{{ route('verification.send') }}">
    @csrf
</form>

<!-- Atualizar Nome e Email -->
<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

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
            placeholder="Digite o nome"
            value="{{ old('name', $nutricionista->name) }}"
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
            placeholder="Digite o email"
            value="{{ old('email', $nutricionista->email) }}"
            autocomplete="username"
            required
        >

        <div class="invalid-feedback">
            @error('email') {{ $message }} @enderror
        </div>
    </div>

    @if ($nutricionista instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $nutricionista->hasVerifiedEmail())
        <div class="alert alert-warning">
            Seu email ainda não foi verificado.
            <button type="submit" form="send-verification" class="btn btn-link p-0">
                Clique aqui para reenviar o link de verificação.
            </button>
        </div>
    @endif

    <button type="submit" class="btn btn-login px-4">Salvar</button>

</form>

<hr class="my-4">

<h4 class="mb-4">Alterar senha</h4>

@if (session('status') === 'password-updated')
    <div class="alert alert-success">
        ✓ Senha atualizada com sucesso
    </div>
@endif

<!-- Alterar Senha -->
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <!-- Senha atual -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-lock"></i>
        </span>

        <input
            type="password"
            class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
            id="current_password"
            name="current_password"
            placeholder="Digite sua senha atual"
            autocomplete="current-password"
        >

        <div class="invalid-feedback">
            @error('current_password', 'updatePassword') {{ $message }} @enderror
        </div>
    </div>

    <!-- Nova senha -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-lock"></i>
        </span>

        <input
            type="password"
            class="form-control @error('password', 'updatePassword') is-invalid @enderror"
            id="new_password"
            name="password"
            placeholder="Digite a nova senha"
            autocomplete="new-password"
        >

        <div class="invalid-feedback">
            @error('password', 'updatePassword') {{ $message }} @enderror
        </div>
    </div>

    <!-- Confirmar nova senha -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-lock"></i>
        </span>

        <input
            type="password"
            class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Confirme a nova senha"
            autocomplete="new-password"
        >

        <div class="invalid-feedback">
            @error('password_confirmation', 'updatePassword') {{ $message }} @enderror
        </div>
    </div>

   <div class="text-end">
        <button type="submit" class="btn btn-login px-4">
            Salvar
        </button>
        <a class="btn btn-login px-4" href="{{ route('nutricionista.index') }}">Voltar</a>
    </div>


</form>



@endsection