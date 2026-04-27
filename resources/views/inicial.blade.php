<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PlanoCerto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body id="page-top" style=" background-color: beige;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar fixed-top" style="background-color: beige;"id="mainNav">
            <div class="container">
                <span class="fa-stack fa-1x">
                            <i class="fas fa-circle fa-stack-2x" style="color: #95b634;"></i>
                            <i class="fas fa-apple-whole fa-stack-1x fa-inverse"></i>
                        </span>
                <h2 class="text" style="color:#95b634">PlanoCerto</h2>
                 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" style="color:  #95b634">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services" >Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                    
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container" style="color: #95b634">
                <div class="masthead-subheading">Acompanhamento nutricional de forma mais simples.</div>
                <div class="masthead-heading text-uppercase">Controle de dietas para nutricionistas</div>
                <a class="btn btn-success btn-xl text-uppercase" href="{{url('Login')}}">ENTRAR</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Serviços</h2>
                    <h3 class="section-subheading text-muted">Tenha melhor controle durante seu trabalho</h3>
                </div>
             <div class="row text-center">
                    <div class="col-md-2">
                        
                        </div>
                
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x" style="color: #95b634;"></i>
                            <i class="fas fa-user-doctor fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cadastro de Pacientes</h4>
                        <p class="text-muted">Armazene informações e acompanhe a evolução nutricional dos pacientes.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x" style="color: #95b634;"></i>
                            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Controle de Dietas</h4>
                        <p class="text-muted">Crie e gerencie planos alimentares personalizados com facilidade.</p>
                    </div>
                </div>
            </div>
        </section>
     
        <!-- Sobre-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre</h2>
                    <h3 class="section-subheading text-muted">Saiba mais informações sobre o site</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/teste.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">Gerenciamento de pacientes</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">O sistema permite que o nutricionista realize o 
                                cadastro completo dos pacientes, armazenando informações importantes. Esses dados
                                 facilitam o acompanhamento individual e ajudam na elaboração de planos alimentares personalizados.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/dieta.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">Elaboração de planos nutricionais</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">O nutricionista pode criar planos alimentares espe
                                cíficos para cada paciente, de acordo com suas necessidades nutricionais e objetivos de saúde. O sistema organiza as refeições, horários e orientações alimentares, tornando o acompanhamento mais prático e eficiente.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/tempo.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">Otimização do tempo</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">O uso do sistema torna o atendimento mais rápido e organizado, permitindo que o nutricionista encontre informações dos pacientes com facilidade e
                                 realize suas atividades de forma mais eficiente. .</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/seguranca.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">Armazenamento de dados</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">O sistema PlanoCerto é um site seguro que garante a proteção das informações cadastradas pelos nutricionistas e pacientes.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Venha
                                <br />
                                fazer parte
                                <br />
                                também!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
       
           
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
