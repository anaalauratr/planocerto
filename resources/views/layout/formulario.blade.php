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
    margin-top: 80px;
    text-align: center;
    font-size: 28px;
}

.login-card {
    max-width: 450px;
    margin: 50px auto;
    padding: 40px;
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

.btn-login{
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
.login-card {
    max-width: 700px;   /* pequeno */
}




textarea {
    resize: vertical;
}
.refeicao-item{
    border: 1px solid #95b634; 
    border-radius: 8px;
     padding: 2%;
     margin-top 2%;
}

select {
    background-color: #95b634;
    color: white;
}

</style>

</head>

<body>



<div class="container">

    <center>
        <h2 style="color:#95b634; margin-top: 5%;">PlanoCerto</h2>
    </center>

    <!-- CARD -->
    <div class="login-card shadow-sm">

        @yield('content')

    </div>

</div>

</body>
</html>