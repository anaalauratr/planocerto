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



<style>

html, body {
    height: 100%;
    margin: 0;
  
}


/* SIDEBAR */
.menu-itens {
  margin-top: 40%;
}

/* Cada item do menu */
.item-menu {
  display: flex;
  align-items: center;
  gap: 10px;

  padding: 12px 10px;

  border-bottom: 1px solid #95b634; /* linha de ponta a ponta */
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
.menu-lateral {
  background-color: beige;
  position: fixed;
  top: 0;
  left: 0;
  width: 260px;
 height: auto; 
  max-height: 100vh; /* evita ultrapassar a tela */
  overflow-y: auto;
  color: #95b634; /* cor padrão do texto */
  padding: 1rem;
  transition: transform 0.3s ease;
  transform: translateX(-100%);
  z-index: 1000;
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

.menu-lateral.ativo {
  transform: translateX(0);
}

/* BOTÃO MENU NA NAVBAR */

#botao-menu {
 
  color: #95b634 ;
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
</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: beige;">
  <div class="container d-flex align-items-center">

    <button id="botao-menu" class="btn me-3">
      <i class="bi bi-list"></i>
    </button>

    <div class="ms-auto d-flex align-items-center">
      <span class="fa-stack fa-1x">
        <i class="fas fa-circle fa-stack-2x" style="color: #95b634;"></i>
        <i class="fas fa-apple-whole fa-stack-1x fa-inverse"></i>
      </span>

      <h2 class="ms-2 mb-0" style="color:#95b634">
        PlanoCerto
      </h2>
    </div>

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

botaoMenu.addEventListener('click', () => {

if (!menuAberto) {

menuLateral = document.createElement('nav');
menuLateral.className = 'menu-lateral ativo';

menuLateral.innerHTML = `

<div class="menu-itens">

 
  <div class="item-menu">
    <i class="bi bi-person"></i>
    <a href="{{ route('nutricionista.index') }}"> Perfil </a>
  </div>

  <div class="item-menu">
    <i class="bi bi-people-fill"></i>
    <a href="{{ route('cliente.index') }}"> Cliente </a>
  </div>

  <div class="item-menu">
    <i class="bi bi-clipboard2-check-fill"></i>
    <a   href="{{ route('Principal') }}"> Planos Alimentares </a>
  </div>
     
@if(Auth::id() == 71)
<div class="item-menu">
    <i class="bi bi-people-fill"></i>
    <a href="{{ route('usuario.index') }}"> Usuários </a>
</div>
@endif


 <div class="item-menu sair">

    <i class="bi bi-door-open"></i>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">
            Sair
        </button>

    </form>

</div>

</div>

`;

document.body.appendChild(menuLateral);
menuAberto = true;

} else {

menuLateral.classList.remove('ativo');

setTimeout(() => {
  menuLateral.remove();
  menuLateral = null;
}, 300);

menuAberto = false;

}

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@yield('script')
</body>
</html>


