<?php
    session_start(); 
    include_once("../conexao.php");

    //Arquivo de conexão com o furmulario de cadastro

    if(!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['peso'])){
       
        $nome = $_POST['nome'];

        $idade = intval($_POST['idade']);

        $peso = intval($_POST['peso']);

        $altura = intval($_POST['altura']);

        $sexo = $_POST['sexo'];


        $datas = $_POST['datas'];

        $id_cadastro = $_SESSION['id'];

        $resultado2 = "INSERT INTO crianca (id_cadastro, nome, sexo) VALUES ('$id_cadastro', '$nome', '$sexo');";
        mysqli_query($conexao, $resultado2);
        $mysqli = mysqli_insert_id($conexao);

        $resultado = "INSERT INTO dados_crianca (id_dados_crianca, idade, peso, altura, datas) VALUES('$mysqli','$idade', '$peso', '$altura', now());"; 
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
    $_POST = array();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>