@extends('layout.navio')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

<div class="container" style="margin-top: 7%">

    <h2>Planos Alimentares</h2>

    <!-- Campo de pesquisa -->
    <input type="text" class="pesquisa" placeholder="Pesquise">

    <a class="btn btn-success" onclick="window.location.href='{{ route('CadastroPlano') }}'">
        NOVO <i class="bi bi-plus-circle"></i>
    </a>

    <div class="accordion mt-4" id="accordionPlanos">

        <!-- Plano 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne">

                    Nome do plano alimentar
                </button>
            </h2>

            <div id="collapseOne"
                 class="accordion-collapse collapse show"
                 aria-labelledby="headingOne"
                 data-bs-parent="#accordionPlanos">

                <div class="accordion-body">

                    <p>
                        <strong>Descrição:</strong> Intuito de emagrecimento...
                        <br>
                        <strong>Data de início:</strong> 06/04/2025
                        <strong>- Fim:</strong> 06/04/2025
                    </p>

                    <!-- Refeições -->
                    <div class="refeicao">
                        <div>
                            <strong>Café da Manhã</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>07:00</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="refeicao">
                        <div>
                            <strong>Almoço</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>12:00</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="refeicao">
                        <div>
                            <strong>Café da Tarde</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>15:30</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="refeicao">
                        <div>
                            <strong>Jantar</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>19:00</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="mt-3">
                        <a class="btn btn-success" href="{{ route('AtualizarPlano') }}">
                            Editar <i class="bi bi-pencil-square"></i>
                        </a>

                        <a class="btn btn-success" href="">
                            Excluir <i class="bi bi-trash3"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Plano 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo">

                    Nome do plano alimentar
                </button>
            </h2>

            <div id="collapseTwo"
                 class="accordion-collapse collapse"
                 aria-labelledby="headingTwo"
                 data-bs-parent="#accordionPlanos">

                <div class="accordion-body">

                    <p>
                        <strong>Descrição:</strong> Intuito de emagrecimento...
                        <br>
                        <strong>Data de início:</strong> 06/04/2025
                        <strong>- Fim:</strong> 06/04/2025
                    </p>

                    <div class="refeicao">
                        <div>
                            <strong>Café da Manhã</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>07:00</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="refeicao">
                        <div>
                            <strong>Almoço</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>12:00</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="refeicao">
                        <div>
                            <strong>Café da Tarde</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>15:30</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="refeicao">
                        <div>
                            <strong>Jantar</strong>
                            <p>Calorias</p>
                            <p>Descrição</p>
                            <p>19:00</p>
                        </div>

                        <span class="acoes">
                            <a href="{{ route('AtualizarRefeicao') }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
                    </div>

                    <div class="mt-3">
                        <a class="btn btn-success" href="{{ route('AtualizarPlano') }}">
                            Editar <i class="bi bi-pencil-square"></i>
                        </a>

                        <a class="btn btn-success" href="">
                            Excluir <i class="bi bi-trash3"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection