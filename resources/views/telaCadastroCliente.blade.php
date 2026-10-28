
@extends('layout.formulario')

@section('content')

<form action="{{ route('cliente.store') }}" method="POST"
    class="needs-validation" novalidate>

    @csrf

    <h4 class="mb-4">Cadastro de clientes</h4>

    <!-- nome -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-user"></i>
        </span>

        <input
            type="text"
            class="form-control @error('name') is-invalid @enderror"
            name="name"
            placeholder="Digite o nome"
            value="{{ old('name') }}"
            required>

        <div class="invalid-feedback">
            @error('name')
                {{ $message }}
            @enderror
            @if (!$errors->has('name'))
                Por favor, digite o nome do cliente.
            @endif
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
            name="email"
            placeholder="Digite o email"
            value="{{ old('email') }}"
            required>

        <div class="invalid-feedback">
            @error('email')
                {{ $message }}
            @enderror
            @if (!$errors->has('email'))
                Por favor, digite um email válido.
            @endif
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
            name="password"
            placeholder="Digite sua senha"
            required>

        <div class="invalid-feedback">
            @error('password')
                {{ $message }}
            @enderror
            @if (!$errors->has('password'))
                Por favor, digite a senha.
            @endif
        </div>
    </div>

    <!-- objetivo -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-bullseye"></i>
        </span>

        <input
            type="text"
            class="form-control @error('objetivo') is-invalid @enderror"
            name="objetivo"
            placeholder="Digite o objetivo"
            value="{{ old('objetivo') }}"
            required>

        <div class="invalid-feedback">
            @error('objetivo')
                {{ $message }}
            @enderror
            @if (!$errors->has('objetivo'))
                Por favor, informe o objetivo do cliente.
            @endif
        </div>
    </div>

    <!-- peso -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-speedometer"></i>
        </span>

        <input
            type="number"
            step="0.01"
            min="0.01"
            class="form-control @error('peso') is-invalid @enderror"
            name="peso"
            placeholder="Digite o peso"
            value="{{ old('peso') }}"
            required>

        <div class="invalid-feedback">
            @error('peso')
                {{ $message }}
            @enderror
            @if (!$errors->has('peso'))
                Por favor, informe um peso válido.
            @endif
        </div>
    </div>

    <!-- altura -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-rulers"></i>
        </span>

        <input
            type="number"
            step="0.01"
            min="0.01"
            class="form-control @error('altura') is-invalid @enderror"
            name="altura"
            placeholder="Digite a altura"
            value="{{ old('altura') }}"
            required>

        <div class="invalid-feedback">
            @error('altura')
                {{ $message }}
            @enderror
            @if (!$errors->has('altura'))
                Por favor, informe uma altura válida.
            @endif
        </div>
    </div>

    <!-- data de nascimento -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Data de nascimento</label>

        <div class="input-group">
            <span class="input-group-text icon-box">
                <i class="fa fa-calendar"></i>
            </span>

            <input
                type="date"
                class="form-control @error('data_nascimento') is-invalid @enderror"
                name="data_nascimento"
                value="{{ old('data_nascimento') }}"
                required>

            <div class="invalid-feedback">
                @error('data_nascimento')
                    {{ $message }}
                @enderror
                @if (!$errors->has('data_nascimento'))
                    Por favor, informe a data de nascimento.
                @endif
            </div>
        </div>
    </div>

    <!-- sexo -->
    <div class="mb-3">
        <label class="form-label">Sexo</label>

        <div>
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input @error('sexo') is-invalid @enderror"
                    type="radio"
                    name="sexo"
                    value="Masculino"
                    @checked(old('sexo') == 'Masculino')
                    required>

                <label class="form-check-label">Masculino</label>
            </div>

            <div class="form-check form-check-inline">
                <input
                    class="form-check-input @error('sexo') is-invalid @enderror"
                    type="radio"
                    name="sexo"
                    value="Feminino"
                    @checked(old('sexo') == 'Feminino')
                    required>

                <label class="form-check-label">Feminino</label>
            </div>
        </div>

        @error('sexo')
            <div class="text-danger small mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- plano alimentar -->
    <div class="mb-3">
        <label class="form-label">Plano alimentar desse cliente</label>

        <select
            name="plano_id"
            class="form-select @error('plano_id') is-invalid @enderror"
            required>

            <option value="">Selecione um plano</option>

            @foreach($planos as $plano)
                <option
                    value="{{ $plano->id }}"
                    @selected(old('plano_id') == $plano->id)>
                    {{ $plano->nome }}
                </option>
            @endforeach
        </select>

        <div class="invalid-feedback">
            @error('plano_id')
                {{ $message }}
            @enderror
            @if (!$errors->has('plano_id'))
                Por favor, selecione um plano alimentar.
            @endif
        </div>
    </div>

    <br>

    <div class="text-end">
        <button type="submit" class="btn btn-login px-4">
            Cadastrar
        </button>

        <a class="btn btn-login px-4"
            href="{{ route('cliente.index') }}">
            Cancelar
        </a>
    </div>

</form>

@endsection

<script>
    (() => {
        'use strict';

        const forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
