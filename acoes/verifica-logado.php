<?php
// verifica de a variavel idusuario ou a variavel email está setada.
    if(!isset($_SESSION['idusuario']) || !isset($_SESSION['email'])) {
        header('Location: ../index.php');

        // tenho que colocar este arquivo em todas as paginas que eu não quero que o usuario tenha acesso caso ele não esteja logado.EXEMPLO: require_once 'acoes/verifica-logado.php';
    }
