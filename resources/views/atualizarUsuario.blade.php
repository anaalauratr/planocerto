@extends('layout.formulario')

@section('content')

<form action="{{ route('usuario.update', $usuario->id) }}"
      method="POST" class="needs-validation" novalidate enctype="multipart/form-data">

    @csrf
    

    <h4 class="mb-4">Atualizar dados de usuarios</h4>

    <!-- nome -->
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
            value="{{ old('name', $usuario->name) }}"
            required
        >

        <div class="invalid-feedback">
            @error('name') {{ $message }} @enderror
        </div>
    </div>

    <!-- email -->
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
            value="{{ old('email', $usuario->email) }}"
            required
        >

        <div class="invalid-feedback">
            @error('email') {{ $message }} @enderror
        </div>
    </div>
  <!-- senha -->
<div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="fa fa-lock"></i>
    </span>

    <input
        type="password"
        class="form-control @error('password') is-invalid @enderror"
        id="password"
        name="password"
        placeholder="Digite a nova senha, caso nao queira mudar deixe em branco"
    >

    <div class="invalid-feedback">
        @error('password') {{ $message }} @enderror
    </div>
</div>
      
    <!-- Botao salvar -->
    <div class="text-end">
        <button type="submit" class="btn btn-login px-4">
            Salvar
        </button>
        <a class="btn btn-login px-4" href="{{ route('usuario.index') }}">Cancelar</a>
    </div>

</form>

@endsection