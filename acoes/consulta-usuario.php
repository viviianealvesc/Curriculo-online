<?php
//fazendo tudo isso que esta a baixo, eu consigo ter todos os dados do usuario. Agora eu posso fazer com que as informaçoes de cadastro possam ser exibidas no perfil do usuario. 
// EXEMPLO -> <?= $nome; ?(fecha chaves), basta colocar assim aonde voce quer que apareça a informacao do usuario.

    // iniciar sessao no arquivo que chama a consulta
    require_once 'verifica-logado.php'; //Verifica se estamos logado
    require_once "conexao.php"; //chama uma conexão
    $id_logado = $_SESSION['idusuario']; //armazena o id do usuario

    $sql = "SELECT * FROM usuarios WHERE idusuario = '$id_logado'";//tá verificando se usuario existe no nosso sistema ou não.
    // echo "$sql";

    $resultado = mysqli_query($con, $sql);
    $dados     = mysqli_fetch_assoc($resultado); // nao precisa do while pq e so um usuario

    // criar variaveis para cada dado do array associativo
    $idusuario     = $dados['idusuario'];
    $nome          = $dados['nome'];
    $nacionalidade = $dados['nacionalidade'];
    $estado_civil  = $dados['estado_civil'];
    $idade         = $dados['idade'];
    $endereco      = $dados['endereco'];
    $celular       = $dados['celular'];
    $email         = $dados['email'];
    $foto          = $dados['foto'];

    // CRIAR VARIAVEIS DE SESSAO
    $_SESSION['nome']          = $nome;
    $_SESSION['nacionalidade'] = $nacionalidade;
    $_SESSION['estado_civil']  = $estado_civil;
    $_SESSION['idade']         = $idade;
    $_SESSION['endereco']      = $endereco;
    $_SESSION['celular']       = $celular;
    $_SESSION['email']         = $email;
    $_SESSION['foto']          = $foto;
