<?php
require("../conexao.php");
session_start();
if (!empty($_GET['id'])){
    $id = $_GET['id'];
    $result_usuario = "DELETE FROM dados_crianca WHERE id='$id'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    if(mysqli_affected_rows($conexao)) {
        $_SESSION['msg'] = "<p style = 'color:green;'> Dados deletados com sucesso!</p>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }else {

        $_SESSION['msg'] = "<p style = 'color:red;'> Erro! Os dados não foram deletados.</p>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}else {
    
        $_SESSION['msg'] = "<p style = 'color:red;'> Erro! É necessário selecionar os dados a serem deletados.</p>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);

}

?>