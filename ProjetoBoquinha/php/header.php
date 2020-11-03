<?php
session_start();
$id_usuario = null;
$cpf = null;
$senha = null;
$logado = false;
if (isset($_SESSION['dados']) && !empty($_SESSION['dados'])) {
    $id_usuario = $_SESSION['dados']['id_cadastro'];
    $cpf = $_SESSION['dados']['cpf'];
    $senha = $_SESSION['dados']['senha'];
    $logado = true;
}
$displayDeslogado = "";
$displayLogado = "d-none";
if ($logado) {
    $displayDeslogado = "d-none";
    $displayLogado = "";
}
?>
<nav class="navbar navbar-expand-sm">
    <a class="navbar-logo pl-4" href="index.php"> Boquinha</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="navbar-nav mx-auto">
            <a href="index.php" class="nav-link1 nav-item underline-orange ">Página Inicial</a>
            <a href="obesidadeinfantil.php" class="nav-link1 nav-item underline-red">Obesidade infantil</a>
            <a href="#" class="nav-link1 nav-item underline-blue ">Cardápio</a>
            <a href="#" class="nav-link1 nav-item underline-green ">Receitas</a>
        </div>

        <div class="navbar-actions">
            <!--  Deslogado/Não Cadastrado -->
            <button class="navbar-botao ml-5 mr-4 <?php echo $displayDeslogado ?>"> <a class="btn-cadastro-link" href="cadastro.php">Cadastre-se</a>/<a class="btn-entre-link" href="login.php">Entre</a></button>
            <!-- Logado -->
            <button class="navbar-botao ml-5 mr-4 <?php echo $displayLogado ?>" onclick="window.location.href='php/logout.php'">Sair</button>
        </div>
    </div>
</nav>