<?php 
    $estaLogado = false;
    if (isset($_SESSION['dados']) && !empty($_SESSION['dados'])) {
        $estaLogado = true;
    }
    if(!$estaLogado)
    {
        header("Location: login.php");
    }

?>