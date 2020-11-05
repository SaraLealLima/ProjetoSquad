<?php
include("conexao.php");
$sql = "";
$titulo = "";
if($tipo == "meses68"){
    $sql = "SELECT * FROM receitas WHERE idade='meses_6_8';";
}
else if($tipo == "meses811"){
    $sql = "SELECT * FROM receitas WHERE idade='meses_8_11';";
    $titulo = "-4";
}
else if($tipo == "ano12"){
    $sql = "SELECT * FROM receitas WHERE idade='anos_1_2';";
    $titulo = "-5";
}
else if($tipo == "ano24"){
    $sql = "SELECT * FROM receitas WHERE idade='anos_2_4';";
    $titulo = "-6";
}
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado))
{
?>
<div class="box-receita">
    <p class="titulo-receita<?php echo $titulo ?>"><?php echo $linha['nome_receita'] ?></p>
    <strong> Ingredientes:</strong> <br>
    <?php
        $ingrediente = explode("\n", $linha['ingredientes']);
        for($i = 0; $i< count($ingrediente); $i++){
            echo $ingrediente[$i].'<br>';
        }
        echo "<br>";
    ?>
    <strong>Modo de preparo:</strong> <br>
    <?php echo $linha['preparo'] ?>
</div>
<?php 
}
?>