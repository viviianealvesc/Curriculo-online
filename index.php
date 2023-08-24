<?php
  // INICIAR SESSÃO
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="Viviane alves">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/geral.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">

  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="acoes/login.php" method="POST">

    <?php include_once 'acoes/escreve-mensagem.php' ?>
    
    <img src="images/favicon.png" alt="Logo" class="img-fluid" max-width="50px" />

    <h1 class="h3 mb-3 fw-normal">Currículo Online - Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="nome@example.com.br" autofocus>
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Senha">
      <label for="floatingPassword">Senha</label>
    </div>
    <div class='alert'> Não tem login? <a class='btn btn-lg btn-warning' href='cadastrar-usuario.php'> Cadastre-se </a> </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="bt_entrar">Entrar</button>
    <p class="mt-5 mb-3 text-muted"> Viviane Alves &copy; 2023</p>
  </form>
</main>
 
  </body>
  <!-- SCRIPT -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</html>