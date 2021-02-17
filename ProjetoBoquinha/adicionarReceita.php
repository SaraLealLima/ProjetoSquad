<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles.adicionarReceita.css">
    <title>Adicionar Receitas</title>
</head>
<?php
    include('php/conexao.php');

    if (!$conexao) {
        die("Erro ao conectar " . mysqli_connect_error());
    }
    if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['ingredientes']) && isset($_POST['preparo'])) {
        $nome           = $_POST['nome'];
        $idade          = $_POST['idade'];
        $ingredientes   = $_POST['ingredientes'];
        $preparo        = $_POST['preparo'];

        if (!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['ingredientes']) && !empty($_POST['preparo'])) {
            echo "BD Receitas Atualizado";
            $sql = "INSERT INTO receitas VALUES(NULL, '$idade', '$nome', '$ingredientes', '$preparo');";
            mysqli_query($conexao, $sql);
            mysqli_close($conexao);
        }
    }
?>

<body>

    <?php require("php/header.php")?>
    <?php include("php/logadoAdm.php") ?>
    <?php require("php/colaboradorform.php") ?>
    <?php require("php/footer.php")?>
</body>

</html>