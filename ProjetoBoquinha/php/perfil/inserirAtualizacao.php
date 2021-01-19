<?php

    //Arquivo de conexão com o formulario de atualização (atualizar.php)
    $id_final = 'atualizar'.strval($id);
    if(!empty($_POST['idade']) && !empty($_POST['peso']) && !empty($_POST['altura']) && !empty($_POST[$id_final])){

        $id_dados = intval($_POST[$id_final]);

        $idade = intval($_POST['idade']);

        $peso = intval($_POST['peso']);

        $altura = intval($_POST['altura']);

        $imc = intval($_POST['imc']);

        $datas = $_POST['datas'];

        $resultado = "INSERT INTO dados_crianca (id, id_dados_crianca, idade, peso, altura, imc, datas) VALUES (null, '$id_dados','$idade', '$peso', '$altura','$imc', now())";
        mysqli_query($conectar, $resultado);
        $_POST = array();
    };
    
?>