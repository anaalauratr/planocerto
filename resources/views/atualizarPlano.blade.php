@extends('layout.formulario')

@section('content')

<form action="{{ route('plano.update', $plano->id) }}"
      method="POST" class="needs-validation" novalidate enctype="multipart/form-data">

    @csrf

    <h4 class="mb-4">Atualizar Plano Alimentar</h4>

    <!-- Nome do plano -->
    <div class="input-group mb-3">

        <span class="input-group-text icon-box">
            <i class="fa fa-utensils"></i>
        </span>

        <input
            type="text"
            class="form-control @error('nome') is-invalid @enderror"
            id="nome"
            placeholder="Nome do plano alimentar"
            name="nome"
            value="{{ old('nome', $plano->nome) }}"
            required
        >

        <div class="invalid-feedback">
            @error('nome') {{ $message }} @enderror
        </div>

    </div>

    <!-- descricao -->
    <div class="input-group mb-3">

        <span class="input-group-text icon-box">
            <i class="fa fa-align-left"></i>
        </span>

        <input
            type="text"
            class="form-control @error('descricao') is-invalid @enderror"
            id="descricao"
            placeholder="Descrição"
            name="descricao"
            value="{{ old('descricao', $plano->descricao) }}"
            required
        >

        <div class="invalid-feedback">
            @error('descricao') {{ $message }} @enderror
        </div>

    </div>

    <!-- Datas -->
    <div class="row">

        <div class="col-md-6 mb-3">
            <label class="form-label" for="data_inicio">
                Data de início
            </label>
            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-calendar"></i>
                </span>

                <input
                    type="date"
                    class="form-control @error('data_inicio') is-invalid @enderror"
                    id="data_inicio"
                    name="data_inicio"
                    value="{{ old('data_inicio', optional($plano->data_inicio)->format('Y-m-d') ?? $plano->data_inicio) }}"
                    required
                >

                <div class="invalid-feedback">
                    @error('data_inicio') {{ $message }} @enderror
                </div>

            </div>

        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label" for="data_fim">
                Data de fim
            </label>
            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-calendar"></i>
                </span>

                <input
                    type="date"
                    class="form-control @error('data_fim') is-invalid @enderror"
                    id="data_fim"
                    name="data_fim"
                    value="{{ old('data_fim', optional($plano->data_fim)->format('Y-m-d') ?? $plano->data_fim) }}"
                    required
                >

                <div class="invalid-feedback">
                    @error('data_fim') {{ $message }} @enderror
                </div>

            </div>

        </div>

    </div>

    <!-- ------------------------------------  -->

    <!-- Botao salvar -->
    <div class="text-end">
        <button type="submit" class="btn btn-login px-4">
            Salvar Plano
        </button>
        <a class="btn btn-login px-4" href="{{ route('Principal') }}">Cancelar</a>
    </div>

</form>

@endsection