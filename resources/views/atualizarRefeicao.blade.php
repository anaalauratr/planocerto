@extends('layout.formulario')

@section('content')

<form action="{{ route('refeicao.update', $refeicao->id) }}"
      method="POST" class="needs-validation" novalidate>

    @csrf

    <h4 class="mb-4">Atualizar refeição</h4>

    <!-- Linha 1: Nome -->
    <div class="row mb-3">

        <div class="col-md-6">

            <label class="form-label" for="nome">
                Nome
            </label>

            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-utensils"></i>
                </span>

                <input
                    type="text"
                    class="form-control @error('nome') is-invalid @enderror"
                    id="nome"
                    placeholder="Nome"
                    name="nome"
                    value="{{ old('nome', $refeicao->nome) }}"
                    required
                >

                <div class="invalid-feedback">
                    @error('nome') {{ $message }} @enderror
                </div>

            </div>

        </div>

    </div>

    <!-- Linha 2 (Descrição alinhada) -->
    <div class="row mb-3">

        <div class="col-md-12">

            <label class="form-label" for="descricao">
                Descrição
            </label>

            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-align-left"></i>
                </span>

                <textarea
                    class="form-control @error('descricao') is-invalid @enderror"
                    id="descricao"
                    placeholder="Descrição da refeição"
                    name="descricao"
                    rows="3"
                    required
                >{{ old('descricao', $refeicao->descricao) }}</textarea>

                <div class="invalid-feedback">
                    @error('descricao') {{ $message }} @enderror
                </div>

            </div>

        </div>

    </div>

    <!-- Linha 3 -->
    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label" for="calorias">
                Calorias
            </label>

            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-fire"></i>
                </span>

                <input
                    type="number"
                    class="form-control @error('calorias') is-invalid @enderror"
                    id="calorias"
                    placeholder="Calorias"
                    name="calorias"
                    value="{{ old('calorias', $refeicao->calorias) }}"
                    required
                >

                <div class="invalid-feedback">
                    @error('calorias') {{ $message }} @enderror
                </div>

            </div>

        </div>

        <div class="col-md-6 mb-3">

            <label class="form-label" for="horario">
                Horário
            </label>

            <div class="input-group">

                <span class="input-group-text icon-box">
                    <i class="fa fa-clock"></i>
                </span>

                <input
                    type="time"
                    class="form-control @error('horario') is-invalid @enderror"
                    id="horario"
                    name="horario"
                    value="{{ old('horario', $refeicao->horario) }}"
                    required
                >

                <div class="invalid-feedback">
                    @error('horario') {{ $message }} @enderror
                </div>

            </div>

        </div>

    </div>

    <!-- Botao salvar -->
    <div class="text-end">
        <button type="submit" class="btn btn-login px-4">
            Atualizar refeição
        </button>
        <a class="btn btn-login px-4" href="{{ route('Principal') }}">Cancelar</a>
    </div>

</form>

@endsection
