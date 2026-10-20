<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PlanoCerto</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">

  <!-- Font Awesome -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">


  <style>
    html,
    body {
      height: 100%;
      margin: 0;

    }



    /* Cada item do menu */
    .item-menu {
      display: flex;
      align-items: center;
      gap: 10px;

      padding: 12px 10px;

      border-bottom: 1px solid #95b634;
      /* linha de ponta a ponta */
      width: 100%;
    }

    /* Remove a linha do último item */
    .item-menu:last-child {
      border-bottom: none;
    }

    /* Cores */
    .item-menu a,
    .item-menu i,
    .item-menu span {
      color: #95b634;
      text-decoration: none;
    }

    /* Efeito ao passar o mouse */
    .item-menu:hover {
      background-color: rgba(149, 182, 52, 0.1);
    }

    /* Sair em vermelho */
    .sair {
      border-bottom: none;
    }

    .sair span,
    .sair i {
      color: red;
    }
/* SIDEBAR */
/* SIDEBAR */
.menu-itens {
  margin-top: 0; /* antes era 40% */
}

.menu-lateral {
  background-color: beige;
  position: fixed;
  top: 0;          /* a posição real é calculada pelo JavaScript */
  left: 0;
  width: 260px;
  max-width: calc(100vw - 16px);
  max-height: calc(100vh - 110px);
  overflow-y: auto;
  color: #95b634;
  padding: 0.5rem 1rem;
  border-radius: 0 0 12px 12px;   /* só os cantos de baixo */

  z-index: 1040;

  /* começa escondido e aparece com um leve efeito */
  opacity: 0;
  transform: translateY(-10px);
  pointer-events: none;
  transition: opacity 0.2s ease, transform 0.2s ease;
}

.menu-lateral.ativo {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}



    /* Cor dos botões do menu */
    .menu-lateral .btn-link {
      color: #95b634;
      text-align: left;
      width: 100%;
      margin-bottom: 5px;
      text-decoration: none;
    }

    /* Cor dos links */
    .menu-lateral a {
      color: #95b634;
      text-decoration: none;
    }

    /* Cor dos ícones */
    .menu-lateral i {
      color: #95b634;
    }

    

    /* BOTÃO MENU NA NAVBAR */

    #botao-menu {

      color: #95b634;
      border: none;

      font-size: x-large;
    }


    .menu-lateral .btn-link {
      color: white;
      text-align: left;
      width: 100%;
      margin-bottom: 5px;
      text-decoration: none;
    }



    a {
      color: white;
    }

    .item-menu form {
      display: flex;
      align-items: center;
    }

    .item-menu button {
      background: none;
      border: none;
      padding: 0;
      font-size: inherit;
      font-family: inherit;
      cursor: pointer;
      color: inherit;
    }

    #navInterna {
      overflow: visible;
    }

    #navInterna img {
      height: 6rem;
      width: auto;
      margin-top: -1.5rem;
      margin-bottom: -1.5rem;
    }
  </style>

</head>

<body>

  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: beige;" id="navInterna">
    <div class="container d-flex align-items-center">

      <button id="botao-menu" class="btn me-3">
        <i class="bi bi-list"></i>
      </button>

      <img src="{{ asset('assets/image.png') }}" alt="Logo PlanoCerto">

    </div>
  </nav>

  <!-- CONTEÚDO DAS PÁGINAS -->
  <div class="container" style="margin-top: 100px;">
    @if(session()->has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session()->get('msg') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('erro'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session()->get('erro') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @yield('content')

  </div>



 

<!-- SCRIPT MENU -->
<script>
  const botaoMenu = document.getElementById('botao-menu');

  let menuLateral = null;
  let menuAberto = false;

function posicionarMenu() {
  if (!menuLateral) return;

  const navbar = document.getElementById('navInterna').getBoundingClientRect();
  const botao = botaoMenu.getBoundingClientRect();
  const larguraMenu = menuLateral.offsetWidth;

  // borda direita do menu fica um pouco depois do botão ☰
  const centro = botao.left + botao.width / 2;
  const left = Math.max(0, Math.min(centro + 30 - larguraMenu, window.innerWidth - larguraMenu));

  menuLateral.style.top = navbar.bottom + 'px'; // colado embaixo da navbar
  menuLateral.style.left = left + 'px';
}

  function abrirMenu() {
    menuLateral = document.createElement('nav');
    menuLateral.className = 'menu-lateral';

    menuLateral.innerHTML = `

<div class="menu-itens">

  <div class="item-menu">
    <i class="bi bi-person-fill"></i>
    <a href="{{ route('nutricionista.index') }}"> Perfil </a>
  </div>

  <div class="item-menu">
    <i class="bi bi-people-fill"></i>
    <a href="{{ route('cliente.index') }}"> Cliente </a>
  </div>

  <div class="item-menu">
    <i class="bi bi-clipboard2-check-fill"></i>
    <a href="{{ route('Principal') }}"> Planos Alimentares </a>
  </div>

@if(Auth::id() == 71)
  <div class="item-menu">
    <i class="bi bi-people-fill"></i>
    <a href="{{ route('usuario.index') }}"> Usuários </a>
  </div>
@endif

  <div class="item-menu sair">
    <i class="bi bi-door-open-fill"></i>

    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit">Sair</button>
    </form>
  </div>

</div>

`;

    document.body.appendChild(menuLateral);
    posicionarMenu();

    // ativa no próximo quadro para a animação funcionar
    requestAnimationFrame(() => menuLateral.classList.add('ativo'));
    menuAberto = true;
  }

  function fecharMenu() {
    if (!menuLateral) return;

    const menu = menuLateral;
    menu.classList.remove('ativo');
    setTimeout(() => menu.remove(), 200);

    menuLateral = null;
    menuAberto = false;
  }

  botaoMenu.addEventListener('click', (e) => {
    e.stopPropagation();
    menuAberto ? fecharMenu() : abrirMenu();
  });

  // clicar fora do menu fecha
  document.addEventListener('click', (e) => {
    if (menuAberto && menuLateral && !menuLateral.contains(e.target)) {
      fecharMenu();
    }
  });

  // mantém o menu embaixo do botão se a janela mudar de tamanho
  window.addEventListener('resize', posicionarMenu);
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  @yield('script')
</body>

</html>