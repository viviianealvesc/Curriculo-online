<?php
    session_start();            // iniciar sessao
    require_once 'conexao.php'; // chamar conexao

if(isset($_POST['bt_entrar'])) {//vai ver se o usuario clicou no botão, se tiver clicado ele ira fazer o scape dos dados.

    // pegar os dados postados e fazer o escape
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

    // CONSULTAR NO BANCO DE DADOS
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha';";//irá verificar no banco de dados se o email e a senha colocados existe na base de dados.
    
    // EXECUTAR A INSTRUCAO SQL
    $resultado = mysqli_query($con, $sql);

    if(mysqli_affected_rows($con) > 0) {
        // CRIAR ARRAY ASSOCIATIVO COM O RESULTADO DA CONSULTA
        $dados     = mysqli_fetch_array($resultado);
        
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem']  = "Usuário logado com sucesso!";
        $_SESSION['status']    = "success";
        $_SESSION['idusuario'] = $dados['idusuario'];
        $_SESSION['email']     = $dados['email'];
        $_SESSION['foto']      = $dados['foto']; // para mostrar no painel
        header('Location: ../painel.php'); // REDIRECIONAR PARA O PAINEL
    } else {
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "Erro no login! E-mail ou senha incorretos";
        $_SESSION['status'] = "danger";
        header('Location: ../index.php'); // REDIRECIONAR PARA O INDEX
    }
    mysqli_close($con); // fechar conexao
}
