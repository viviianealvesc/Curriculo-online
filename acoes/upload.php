<?php
 // aqui ira fazer o upload da foto

    // UPLOAD
    if($_FILES['foto']['name'] != "" || $_FILES['foto']['name'] != null ) {

        $tipos_permitidos = ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        $extensao = mime_content_type($tipo);//verifica de fato o tipo de dado que esta sendo enviado. 
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        // ver array de tipos existe a extensao do arquivo
        if (in_array($extensao, $tipos_permitidos)) {

            $pasta = "../fotos/";                      // pasta onde vamos guardar
            $temporario = $_FILES['foto']['tmp_name']; // nome original do arquivo
            $novo_nome = uniqid().".$ext";             // novo nome do arquivo

            // fazer o upload do arquivo
            if(move_uploaded_file($temporario, $pasta.$novo_nome)) {
                $foto = $novo_nome;
                // echo "<p>Upload realizado! $foto</p>";
            } // fim fazer upload

        } else {
            // echo "<p>Tipo do arquivo não é permitido.</p>";
            $foto = $_SESSION['foto'];                 // manter a foto anterior
            $_SESSION['msg_upload'] = "Foto em formato $extensao inválido";
        } // fim if array
        // FIM UPLOAD DA FOTO

    } else {
        $foto = $_SESSION['foto']; // manter a foto anterior
        $_SESSION['msg_upload'] = "Foto não foi modificada";

    } // fim do if foto nao nula
