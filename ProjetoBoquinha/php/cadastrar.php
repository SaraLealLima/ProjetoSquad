<?php

    require_once ("conexao.php");

    $senhaIgual = false;
    $senhaPreenchida = !empty ($_POST['senhaInput']);
    $senhaIniciada = isset($_POST['senhaInput']);

    if($_POST["senhaInput"] == $_POST["senhaInput2"] && $senhaPreenchida && $senhaIniciada ){
        $senhaIgual = true;
    } 
    
    $email = $_POST['emailInput'];
    $sql = "SELECT * FROM cadastro";
    $resultado = mysqli_query($conexao, $sql);
    $emailValido = true;
    while ($linha = mysqli_fetch_assoc($resultado)){
        if($linha['email'] == $email){
            $emailValido = false;
        }
     }
    
    if($senhaIgual && $emailValido){

   {
        $senha= $_POST['senhaInput'];
        
        $sql = "INSERT INTO cadastro VALUES (NULL, '$email', '$senha');";
        mysqli_query($conexao, $sql);

        header("location: ../index.php");
    
    }

    }

    else
    {
        echo "<script>alert('senhas não identicas/preenchidas ou E-mail Já cadastrado');
        window.location.href = '../cadastro.php'
        </script>";
    }


    
?>