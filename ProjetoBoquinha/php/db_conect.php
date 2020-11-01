<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "boquinha";

    //Criando conexão
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

    //verificando conexão

    if (!$conexao) {
        die ("A conexão ao BD falhou" . mysqli_connect_error());
    }

    mysqli_set_charset($conexao, "utf8mb4");

?>