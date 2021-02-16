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
    <link rel="stylesheet" href="stylesComoComprar.css">


    <title>Como Comprar</title>
</head>
<body>
    <!-- Barra de navegação -->
    <?php require("php/header.php") ?>
    <?php include("php/logado.php") ?>

    <main>
        <section class="container mt-xs-4 p-sm-5 mt-sm-5 text-center">
            <div class="row justify-content-center section-1">
                <div class="col-xs-10 col-sm-8">
                    <h2 class="title mt-5">Planejamento e Custo beneficio </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-10 col-sm-8">
                    <p class="lead p-3 p-sm-5">Uma boa alimentação começa a partir de um bom planejamento, saber quais são os alimentos de época e os principais fornecedores da sua região, permite elaborar refeições variadas e com um ótimo custo.  Alimentos devem ser adquiridos em mercados, feiras, sacolões, açougues e peixarias que se apresentem limpos e organizados e que ofereçam opções de boa qualidade e em bom estado de conservação. </p>
                </div>
            </div>
        </section>

        <section class="container alimentos">

            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-8 p-0">
                    <div class="card p-0 px-sm-1 py-5">
                        <h4 class="text-center p-3 mx-5">Instruções de como escolher adequadamente os alimentos no momento da compra:</h4>
                        <ul class="list-group">
                            <?php 
                                include("php/conexao.php");
                                $sql = "SELECT id_alimento, descricao, nome_alimento, imagem FROM alimentos";
                                $result = mysqli_query($conexao, $sql);
                                while($alimento = mysqli_fetch_assoc($result)) {
                            ?>
                                <li class="list-group-item border-0">
                                    <div class="row py-3 justify-content-center">
                                        <div class="col-xs-12 col-sm-3 align-self-center">
                                            <img class="w-100 p-2 p-ms-0" src="<?php echo "./images/" . $alimento["imagem"] ?>" alt="<?php echo $alimento["nome_alimento"] ?>">
                                        </div>
                                        <div class="p-3 p-sm-0 col-xs-12 col-sm-2 align-self-center text-center"><strong><?php echo $alimento["nome_alimento"] ?></strong></div>
                                        <div class="col-xs-12 col-sm-6 align-self-center">
                                            <ul>
                                                
                                                <?php
                                                    $caracteristicas = explode(";", $alimento["descricao"]);
                                                    for ($i=0; $i < count($caracteristicas); $i++) {
                                                        $c = trim($caracteristicas[$i]);
                                                        if ($c != "") {
                                                            echo "<li>$c</li>";
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php require('./php/footer.php') ?>

</body>
</html>