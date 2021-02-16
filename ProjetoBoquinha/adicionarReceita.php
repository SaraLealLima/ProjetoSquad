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
<div id="boximg">
    <img class ="img" src="" alt="some text">
 <div class="my-5 d-flex justify-content-center"> 
    <div class="bloco1">
            <div class="form">
                    <form method="post" enctype="multipart/form-data" action="">
                    <label for="nome">Nome da receita: </label><br>
                    <input type="text" name="nome" id="nome"><br>
                    <label for="idade">Faixa etaria: </label><br>
                    <select name="idade" id="idade">
                        <option value="meses_6_8" name="meses_6_8">6 a 8 meses</option>
                        <option value="meses_8_11" name="meses_8_11">8 a 11 meses</option>
                        <option value="anos_1_2" name="anos_1_2">1 a 2 anos</option>
                        <option value="anos_2_4" name="anos_2_4">2 a 4 anos</option>
                    </select><br>
                    <label for="ingredientes">Ingredientes:</label><br>
                    <textarea style="resize: none;" name="ingredientes" id="ingredientes"></textarea><br>
                    <p style="font-size: 10px; margin-top: 0;">A cada ingrediente pular uma linha</p>
                    <label for="preparo">Preparo:</label><br>
                    <textarea style="resize: none;" name="preparo" id="preparo"></textarea><br>
                    <label for="nome">Nome da Editor: </label><br>
                    <input type="text" name="nome" id="nome"><br><br>        
                    <input type="submit" value="Enviar" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>    
    

    <?php require("php/footer.php")?>
</body>

</html>