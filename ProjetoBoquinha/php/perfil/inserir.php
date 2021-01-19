<?php

    include_once("php/conexao.php");

    //Arquivo de conexão com o furmulario de cadastro

    if(!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['peso'])){
       
        $nome = $_POST['nome'];

        $idade = intval($_POST['idade']);

        $peso = intval($_POST['peso']);

        $altura = intval($_POST['altura']);

        $sexo = $_POST['sexo'];

        $imc = intval($_POST['imc']);

        $datas = $_POST['datas'];

        $id_cadastro = $_SESSION['id'];

        $resultado2 = "INSERT INTO crianca (id_cadastro, nome, sexo) VALUES ('$id_cadastro', '$nome', '$sexo');";
        mysqli_query($conexao, $resultado2);

        $resultado3 = "SELECT * FROM crianca WHERE id_cadastro = $id_cadastro;";
        $id = mysqli_query($conexao, $resultado3);
        $id_resultado = 0;
        while($dados= $id -> fetch_array()){
            $id_resultado = $dados['id_crianca'];
        }
        print_r ($id_resultado);

        $resultado = "INSERT INTO dados_crianca (id_dados_crianca, idade, peso, altura, imc, datas) VALUES('$id_resultado','$idade', '$peso', '$altura','$imc', now());"; 
        mysqli_query($conexao, $resultado);
    };

    //conexão com o formulario do cadastro do usuario

    if(isset($_POST['id_usuario'])){

        $id_usuario = $_POST['id_usuario'];

        $result = "INSERT INTO usuario VALUES(null,'$id_usuario');";
        mysqli_query($conexao, $result);
    };

    // conexão da tabela no qual está imprimindo os dados da criança

    $consultar = "SELECT * FROM dados_crianca";
    mysqli_query($conexao, $consultar);
?>