@extends('layout.formulario')

@section('content')

<form action="{{ route('cliente.update', $cliente->id) }}"
      method="POST" class="needs-validation" novalidate enctype="multipart/form-data">

    @csrf
    

    <h4 class="mb-4">Atualizar dados de clientes</h4>

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
            value="{{ old('name', $cliente->user->name) }}"
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
            value="{{ old('email', $cliente->user->email) }}"
            required
        >

        <div class="invalid-feedback">
            @error('email') {{ $message }} @enderror
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
            id="objetivo"
            name="objetivo"
            placeholder="Digite o objetivo"
            value="{{ old('objetivo', $cliente->objetivo) }}"
            required
        >

        <div class="invalid-feedback">
            @error('objetivo') {{ $message }} @enderror
        </div>
    </div>

    <!-- peso -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-speedometer"></i>
        </span>

        <input
            type="text"
            class="form-control @error('peso') is-invalid @enderror"
            id="peso"
            name="peso"
            placeholder="Digite o peso"
            value="{{ old('peso', $cliente->peso) }}"
            required
        >

        <div class="invalid-feedback">
            @error('peso') {{ $message }} @enderror
        </div>
    </div>

    <!-- altura -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-rulers"></i>
        </span>

        <input
            type="text"
            class="form-control @error('altura') is-invalid @enderror"
            id="altura"
            name="altura"
            placeholder="Digite a altura"
            value="{{ old('altura', $cliente->altura) }}"
            required
        >

        <div class="invalid-feedback">
            @error('altura') {{ $message }} @enderror
        </div>
    </div>

    <!-- data de nascimento -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="data_nascimento">
            Data de nascimento
        </label>
        <div class="input-group">

            <span class="input-group-text icon-box">
                <i class="fa fa-calendar"></i>
            </span>

            <input
                type="date"
                class="form-control @error('data_nascimento') is-invalid @enderror"
                id="data_nascimento"
                name="data_nascimento"
                value="{{ old('data_nascimento', optional($cliente->data_nascimento)->format('Y-m-d') ?? $cliente->data_nascimento) }}"
                required
            >

            <div class="invalid-feedback">
                @error('data_nascimento') {{ $message }} @enderror
            </div>

        </div>
    </div>

    <!-- genero -->
    <div class="mb-3">
        <label class="form-label">Sexo</label>

        <div>
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input @error('sexo') is-invalid @enderror"
                    type="radio"
                    name="sexo"
                    value="Masculino"
                    {{ old('sexo', $cliente->sexo) == 'Masculino' ? 'checked' : '' }}
                >
                <label class="form-check-label">Masculino</label>
            </div>

            <div class="form-check form-check-inline">
                <input
                    class="form-check-input @error('sexo') is-invalid @enderror"
                    type="radio"
                    name="sexo"
                    value="Feminino"
                    {{ old('sexo', $cliente->sexo) == 'Feminino' ? 'checked' : '' }}
                >
                <label class="form-check-label">Feminino</label>
            </div>
        </div>

        @error('sexo')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- plano alimentar -->
    <div class="mb-3">
         <label class="form-label">Plano alimentar desse cliente</label>
        <select name="plano_id" class="form-select @error('plano_id') is-invalid @enderror" required>
            <option value="">Selecione um plano</option>

            @foreach($planos as $plano)
                <option value="{{ $plano->id }}"
                    {{ old('plano_id', $cliente->plano_alimentar_id) == $plano->id ? 'selected' : '' }}>
                    {{ $plano->nome }}
                </option>
            @endforeach
        </select>

        <div class="invalid-feedback">
            @error('plano_id') {{ $message }} @enderror
        </div>
    </div>

    <!-- Botao salvar -->
    <div class="text-end">
        <button type="submit" class="btn btn-login px-4">
            Salvar
        </button>
        <a class="btn btn-login px-4" href="{{ route('cliente.index') }}">Cancelar</a>
    </div>

</form>

@endsection