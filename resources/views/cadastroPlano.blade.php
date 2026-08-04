@extends('layout.formulario')

@section('content')

<form action="{{ route('plano.store') }}"
      method="POST" class="needs-validation" novalidate enctype="multipart/form-data">

    @csrf

    <h4 class="mb-4">Cadastro de Plano Alimentar</h4>

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
            value="{{ old('nome') }}"
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
            value="{{ old('descricao') }}"
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
                    value="{{ old('data_inicio') }}"
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
                    value="{{ old('data_fim') }}"
                    required
                >

                <div class="invalid-feedback">
                    @error('data_fim') {{ $message }} @enderror
                </div>

            </div>

        </div>

    </div>

    <!-- ------------------------------------  -->

    <h5 class="mt-4">Refeições</h5>
    <div id="lista-refeicoes">

        <!-- Refeição  -->
        <div class="refeicao-item mb-4" style="border: 1px solid #95b634; border-radius: 8px; padding: 2%">

            <!-- Linha 1 -->
            <div class="row mb-2">

                <!-- Nome -->
                <div class="col-md-4">

                    <input
                        type="text"
                        class="form-control @error('refeicoes.0.nome') is-invalid @enderror"
                        placeholder="Nome"
                        name="refeicoes[0][nome]"
                        value="{{ old('refeicoes.0.nome') }}"
                        required
                    >

                    <div class="invalid-feedback">
                        @error('refeicoes.0.nome') {{ $message }} @enderror
                    </div>

                </div>

            </div>

            <!-- Linha 2 (Descrição alinhada) -->
            <div class="row mb-2">

                <div class="col-md-12">

                    <textarea
                        class="form-control @error('refeicoes.0.descricao') is-invalid @enderror"
                        placeholder="Descrição da refeição"
                        name="refeicoes[0][descricao]"
                        rows="3"
                        required
                    >{{ old('refeicoes.0.descricao') }}</textarea>

                    <div class="invalid-feedback">
                        @error('refeicoes.0.descricao') {{ $message }} @enderror
                    </div>

                </div>

            </div>

            <!-- Linha 3 -->
            <div class="row">

                <div class="col-md-4">

                    <input
                        type="number"
                        class="form-control @error('refeicoes.0.calorias') is-invalid @enderror"
                        placeholder="Calorias"
                        name="refeicoes[0][calorias]"
                        value="{{ old('refeicoes.0.calorias') }}"
                        required
                    >

                    <div class="invalid-feedback">
                        @error('refeicoes.0.calorias') {{ $message }} @enderror
                    </div>

                </div>

                <div class="col-md-4">

                    <input
                        type="time"
                        class="form-control @error('refeicoes.0.horario') is-invalid @enderror"
                        name="refeicoes[0][horario]"
                        value="{{ old('refeicoes.0.horario') }}"
                        required
                    >

                    <div class="invalid-feedback">
                        @error('refeicoes.0.horario') {{ $message }} @enderror
                    </div>

                </div>

                <div class="col-md-4">

                    <button
                        type="button"
                        class="btn btn-danger"
                        onclick="removerRefeicao(this)"
                    >
                        <i class="bi bi-trash3"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- Botão adicionar -->
    <div class="text-center mb-3">

        <button
            type="button"
            class="btn btn-login"
            onclick="adicionarRefeicao()">
            + Adicionar Refeição
        </button>

    </div>

    <!-- Botao salvar -->
    <div class="text-end">
        <button type="submit" class="btn btn-login px-4">
            CADASTRAR
        </button>
        <a class="btn btn-login px-4" href="{{ route('Principal') }}">VOLTAR</a>
    </div>

</form>

@endsection

<script>

let contador = 1;

function adicionarRefeicao() {

    let container = document.getElementById("lista-refeicoes");
    let nova = document.createElement("div");
    nova.className = "refeicao-item mb-4";
    nova.style = "border: 1px solid #95b634; border-radius: 8px; padding: 2%";
    nova.innerHTML = `
        <div class="row mb-2">

            <!-- Nome -->
            <div class="col-md-4">

                <input
                    type="text"
                    class="form-control"
                    placeholder="Nome"
                    name="refeicoes[${contador}][nome]"
                    required
                >

            </div>

        </div>

        <!-- Linha 2 -->
        <div class="row mb-2">
            <div class="col-md-12">

                <textarea
                    class="form-control"
                    placeholder="Descrição da refeição"
                    name="refeicoes[${contador}][descricao]"
                    rows="3"
                    required
                ></textarea>

            </div>

        </div>

        <!-- Linha 3 -->
        <div class="row">

            <div class="col-md-4">
                <input
                    type="number"
                    class="form-control"
                    placeholder="Calorias"
                    name="refeicoes[${contador}][calorias]"
                    required
                >

            </div>

            <div class="col-md-4">
                <input
                    type="time"
                    class="form-control"
                    name="refeicoes[${contador}][horario]"
                    required
                >

            </div>

            <div class="col-md-4">
                <button
                    type="button"
                    class="btn btn-danger"
                    onclick="removerRefeicao(this)"
                >
                    <i class="bi bi-trash3"></i>
                </button>

            </div>

        </div>

    `;

    container.appendChild(nova);

    contador++;

}

function removerRefeicao(botao) {
    botao.closest(".refeicao-item").remove();
}

// Validação Bootstrap (needs-validation)
(() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()

</script>