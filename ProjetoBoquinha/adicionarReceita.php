<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "boquinha";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar " . mysqli_connect_error());
}
if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['ingredientes']) && isset($_POST['preparo']) && isset($_FILES['imagem'])) {
    $nome           = $_POST['nome'];
    $idade          = $_POST['idade'];
    $ingredientes   = $_POST['ingredientes'];
    $preparo        = $_POST['preparo'];
    $imagem         = $_FILES['imagem']['name'];
    $destino        = 'images/receitas/' . $_FILES['imagem']['tmp_name'];

    if (!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['ingredientes']) && !empty($_POST['preparo'])) {
        echo $imagem;
        $sql = "INSERT INTO receitas VALUES(NULL, '$idade', '$nome', '$ingredientes', '$preparo', '$imagem');";
        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }
}
?>

<body>
    <form method="post" enctype="multipart/form-data" action="">
        <label for="nome">Nome da receita: </label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="idade">Faixa etaria: </label><br>
        <select name="idade" id="idade">
            <option value="meses_6_8" name="meses_6_8">6 a 8 meses</option>
            <option value="meses_8_11" name="meses_8_11">8 a 11 meses</option>
            <option value="anos_2_4" name="anos_2_4">2 a 4 anos</option>
        </select><br>
        <label for="ingredientes">Ingredientes:</label><br>
        <textarea style="resize: none;" name="ingredientes" id="ingredientes"></textarea><br>
        <p style="font-size: 10px; margin-top: 0;">A cada ingrediente pular uma linha</p>
        <label for="preparo">Preparo:</label><br>
        <textarea style="resize: none;" name="preparo" id="preparo"></textarea><br>
        <label for="imagem">Imagem:</label><br>
        <input type="file" name="imagem" id="imagem"><br>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>

</html>