<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "boquinha";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);
if (!$conexao) {
    die("Erro ao se conectar com banco de dados. <br>Erro: " . mysqli_connect_error());
}
?>