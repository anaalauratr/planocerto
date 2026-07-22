@extends('layout.formulario')

@section('content')

   <form action="{{ route('nutricionista.store') }}"
              method="POST"  class="needs-validation" novalidate enctype="multipart/form-data">

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
        required
    >

    <div class="invalid-feedback">
        @error('password') {{ $message }} @enderror
    </div>
</div>


       
             

            <button type="submit" class="btn btn-login px-4">
                CADASTRAR
            </button>
        <a class="btn btn-login px-4" href="{{ route('Login') }}">VOLTAR</a>
       
    </div>

</form>


@endsection




</div>