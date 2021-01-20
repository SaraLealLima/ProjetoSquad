<?php
    require('../conexao.php');
    require('calcularimc.php');
    //Arquivo de conexão com o formulario de atualização (atualizar.php)
    if(!empty($_POST['idade']) && !empty($_POST['peso']) && !empty($_POST['altura'])){

        $id_dados   = intval($_POST['id']);

        $idade      = intval($_POST['idade']);

        $peso       = intval($_POST['peso']);

        $altura     = intval($_POST['altura']);

        $imc        = intval(IMC($peso, $altura));

        $datas      = $_POST['datas'];

        $resultado  = "INSERT INTO dados_crianca (id, id_dados_crianca, idade, peso, altura, imc, datas) VALUES (null, '$id_dados','$idade', '$peso', '$altura','$imc', NOW())";
        mysqli_query($conexao, $resultado);
        $_POST      = array();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    };
    
?>