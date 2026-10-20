<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login #03</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">

    <!-- Font Awesome (ícones) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />

    <style>
        body {
            background-color: beige;
        }

        .login-title {
            margin-top: 0;
            text-align: center;
            font-size: 28px;
        }

        .login-card {
            max-width: 700px;
            margin: 20px auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
        }

        .icon-box {
            background: #95b634;
            color: white;
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-login {
            background-color: #95b634;
            color: white;
        }

        .btn-login:hover {
            background-color: #d6e4a9;
            color: #95b634;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        textarea {
            resize: vertical;
        }

        .refeicao-item {
            border: 1px solid #95b634;
            border-radius: 8px;
            padding: 2%;
            margin-top: 2%;
        }

        select {
            background-color: #95b634;
            color: white;
        }

        /* Botão do olhinho da senha */
        .btn-olho {
            background: #fff;
            color: #95b634;
            border: 1px solid #ced4da;
        }

        .btn-olho:hover {
            background: #f1f5e3;
            color: #95b634;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="text-center">
            <img
                src="{{ asset('assets/image.png') }}"
                alt="PlanoCerto"
                style="width: 100%; max-width: 230px;">
        </div>

        <!-- CARD -->
        <div class="login-card shadow-sm">
            @yield('content')
        </div>

    </div>

    <!-- Olhinho de mostrar/ocultar senha -->
    <script>
        document.querySelectorAll('input[type="password"]').forEach((input) => {
            const botao = document.createElement('button');
            botao.type = 'button';
            botao.className = 'btn btn-olho';
            botao.tabIndex = -1;
            botao.setAttribute('aria-label', 'Mostrar senha');
            botao.innerHTML = '<i class="fa fa-eye"></i>';

            botao.addEventListener('click', () => {
                const mostrando = input.type === 'text';
                input.type = mostrando ? 'password' : 'text';
                botao.firstElementChild.className = mostrando ? 'fa fa-eye' : 'fa fa-eye-slash';
                botao.setAttribute('aria-label', mostrando ? 'Mostrar senha' : 'Ocultar senha');
            });

            // coloca o botão logo depois do input, dentro do input-group
            input.after(botao);
        });
    </script>

</body>

</html>