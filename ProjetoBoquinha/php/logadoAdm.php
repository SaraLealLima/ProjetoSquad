<?php 
    $estaLogadoAdmin = false;

    if (isset($_SESSION['dados']) && !empty($_SESSION['dados'])) {
        if (($_SESSION['dados']['email'] == 'admin@boquinha.com') || ($_SESSION['dados']['email'] == 'CREN@boquinha.com')) {
            $estaLogadoAdmin = true;
        }   
    }

    if (!$estaLogadoAdmin) {
       header("Location: index.php");
    }
?>