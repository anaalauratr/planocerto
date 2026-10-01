@extends('layout.formulario')

@section('content')

<h4 class="mb-4">Alterar senha</h4>

@if (session('status') === 'password-updated')
<div class="alert alert-success">✓ Senha atualizada com sucesso</div>
@endif

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <div class="input-group mb-3">
        <span class="input-group-text icon-box"><i class="fa fa-lock"></i></span>
        <input type="password" name="current_password"
            class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
            placeholder="Digite sua senha atual" autocomplete="current-password">
        <div class="invalid-feedback">
            @error('current_password', 'updatePassword') {{ $message }} @enderror
        </div>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text icon-box"><i class="fa fa-lock"></i></span>
        <input type="password" name="password"
            class="form-control @error('password', 'updatePassword') is-invalid @enderror"
            placeholder="Digite a nova senha" autocomplete="new-password">
        <div class="invalid-feedback">
            @error('password', 'updatePassword') {{ $message }} @enderror
        </div>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text icon-box"><i class="fa fa-lock"></i></span>
        <input type="password" name="password_confirmation"
            class="form-control" placeholder="Confirme a nova senha"
            autocomplete="new-password">
    </div>

    <div class="text-end">
        <button type="submit" class="btn btn-login px-4">Salvar</button>
    </div>
</form>

@endsection