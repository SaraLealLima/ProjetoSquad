<?php 
    $estaLogado = isset($_SESSION);

    if(!$estaLogado)
    {
        header("Location: login.php");
    }

?>