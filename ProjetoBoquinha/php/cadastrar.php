<?php

    require_once ("conexao.php");

    $senhaIgual = false;
    $senhaPreenchida = !empty ($_POST['senhaInput']);
    $senhaIniciada = isset($_POST['senhaInput']);

    if($_POST["senhaInput"] == $_POST["senhaInput2"] && $senhaPreenchida && $senhaIniciada ){
        $senhaIgual = true;
    } 
    
    $cpf = $_POST['cpfInput'];
    $sql = "SELECT * FROM cadastro";
    $resultado = mysqli_query($conexao, $sql);
    $cpfValido = true;
    while ($linha = mysqli_fetch_assoc($resultado)){
        if($linha ['cpf'] == $cpf){
            $cpfValido = false;
        }
     }
    
    if($senhaIgual && $cpfValido){

   {
        $senha= $_POST['senhaInput'];
        
        $sql = "INSERT INTO cadastro VALUES (NULL, '$cpf', '$senha');";
        mysqli_query($conexao, $sql);

        header("location: ../index.php");
    
    }

    }

    else
    {
        echo "<script>alert('senhas não identicas/preenchidas ou CPF Já cadastrado');
        window.location.href = '../cadastro.php'
        </script>";
    }


    
?>