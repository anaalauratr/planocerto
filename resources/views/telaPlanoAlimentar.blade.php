@extends('layout.navio')

@section('content')

<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

<div class="container" style="margin-top: 7%">

    <h2>Planos Alimentares</h2>
 <form class="mb-3" method="GET" action="{{ route('plano.search') }}">


    <div class="input-group">
    <input id="filtro" name="filtro" class="form-control" type="text" placeholder="Pesquisar..." value="{{ $filtro ?? '' }}" autofocus>
    <button class="btn" type="submit" style="background-color:#95b634; color:#fff;">
        <i class="bi bi-search"></i>
    </button>
    </form>
</div>
<br>
    <a class="btn btn-success" href="{{ route('plano.create') }}">
        NOVO <i class="bi bi-plus-circle"></i>
    </a>


    <div class="accordion mt-4" id="accordionPlanos">


        @foreach ($planos as $plano)

        <div class="accordion-item">

            <h2 class="accordion-header" id="heading{{ $plano->id }}">

                <button class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $plano->id }}">

                    {{ $plano->nome }}

                </button>

            </h2>


            <div id="collapse{{ $plano->id }}"
                 class="accordion-collapse collapse"
                 data-bs-parent="#accordionPlanos">


                <div class="accordion-body">


                    <p>
                        <strong>Descrição:</strong>
                        {{ $plano->descricao }}

                        <br>

                       <strong>Início:</strong>
{{ $plano->data_inicio->format('d/m/Y') }}

<br>

<strong>Fim:</strong>
{{ $plano->data_fim->format('d/m/Y') }}

                   
@foreach($plano->refeicoes as $refeicao)

<div class="refeicao">

    <div>

        <strong>{{ $refeicao->nome }}</strong>

        <p>
            Calorias:
            {{ $refeicao->calorias }}
        </p>

        <p>
            {{ $refeicao->descricao }}
        </p>

        <p>
            Horário:
            {{ $refeicao->horario }}
        </p>
        

          <span class="acoes">
                            <a href="{{ route('plano.refeicao.view', $refeicao->id) }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="{{ route('refeicao.destroy', encrypt($refeicao->id)) }}" class=" btn-excluir">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </span>
    </div>

</div>

@endforeach


                       



                   
                    <div class="mt-3">
                        <a class="btn btn-success" href="{{ route('plano.view', $plano->id) }}">
                            Editar <i class="bi bi-pencil-square"></i>
                        </a>

                        <a class="btn btn-success btn-excluir" href="{{ route('plano.destroy', encrypt($plano->id)) }}">
                            Excluir <i class="bi bi-trash3"></i>
                        </a>
                    </div>

                </div>

            </div>


        </div>


        @endforeach


    </div>


</div>


@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var botoesExcluir = document.querySelectorAll('.btn-excluir');

            botoesExcluir.forEach(function (botao) {
                botao.addEventListener('click', function (event) {
                    if (!confirm('Tem certeza que deseja excluir isto?')) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection

