@extends('layout.formulario')

@section('content')

<form action="{{ route('cliente.store') }}" method="POST">
    @csrf

    <h4 class="mb-4">Cadastro de clientes</h4>

    <!-- nome -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-user"></i>
        </span>

        <input
            type="text"
            class="form-control"
            name="name"
            placeholder="Digite o nome"
            required
        >
    </div>

    <!-- email -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="fa fa-envelope"></i>
        </span>

        <input
            type="email"
            class="form-control"
            name="email"
            placeholder="Digite o email"
            required
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
            name="password"
            placeholder="Digite sua senha"
            required
        >
    </div>

    <!-- objetivo -->
    <div class="input-group mb-3">
        <span class="input-group-text icon-box">
            <i class="bi bi-bullseye"></i>
        </span>

        <input
            type="text"
            class="form-control"
            name="objetivo"
            placeholder="Digite o objetivo"
            required
        >
    </div>

   <!-- peso -->
<div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="bi bi-speedometer"></i>
    </span>

    <input
        type="number"
        step="0.01"
        class="form-control"
        name="peso"
        placeholder="Digite o peso"
        required
    >
</div>

<!-- altura -->
<div class="input-group mb-3">
    <span class="input-group-text icon-box">
        <i class="bi bi-rulers"></i>
    </span>

    <input
        type="number"
        step="0.01"
        class="form-control"
        name="altura"
        placeholder="Digite a altura"
        required
    >
</div>

    <!-- data de nascimento -->
    <div class="col-md-6 mb-3">
        <label class="form-label">
            Data de nascimento
        </label>
        <div class="input-group">
            <span class="input-group-text icon-box">
                <i class="fa fa-calendar"></i>
            </span>

            <input
                type="date"
                class="form-control"
                name="data_nascimento"
                required
            >
        </div>
    </div>

    <!-- genero -->
    <div class="mb-3">
        <label class="form-label">Sexo</label>

        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="Masculino" required>
                <label class="form-check-label">Masculino</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" value="Feminino">
                <label class="form-check-label">Feminino</label>
            </div>
        </div>
    </div>

   
   <!-- plano alimentar -->
    <div class="mb-3">
         <label class="form-label">Plano alimentar desse cliente</label>
        <select name="plano_id" class="form-select" required>
            <option value="">Selecione um plano</option>

            @foreach($planos as $plano)
                <option value="{{ $plano->id }}">
                    {{ $plano->nome }}
                </option>
            @endforeach
        </select>
    </div>
    <br>

    <button type="submit" class="btn btn-login px-4">Cadastrar</button>

</form>

@endsection