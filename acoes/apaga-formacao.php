<?php
  session_start();
  require_once 'verifica-logado.php';
  require_once 'conexao.php';
  
  if(isset($_POST['bt_apagar'])) {
    // DELETE Deletar, apagar
    $idformacao = mysqli_real_escape_string($con, $_POST['idformacao']);

    $sql = "DELETE FROM formacoes WHERE idformacao = '$idformacao'";
    
    if(mysqli_query($con, $sql)) {
      $_SESSION['mensagem'] = "Formação apagada com sucesso!";
      header('Location: ../formacoes.php');
    } else {
      $_SESSION['mensagem'] = "Não foi possível apagar a formação!";
      header('Location: ../formacoes.php');
    }
    // FECHAR CONEXAO
    mysqli_close($con);
  }
?>