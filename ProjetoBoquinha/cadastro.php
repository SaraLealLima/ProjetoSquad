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
    <link rel="stylesheet" href="stylesCadastro.css">
    <script src="script.js"></script>

    <title>Boquinha — Cadastrar</title>
</head>

<body>
    <!-- Barra de navegação -->

    <?php require_once("php/header.php")?>

    <main>
        <div class="section-1">
            <div class="card-cadastro">
                <p class="card-cadastro-titulo">Cadastre-se</p>
                <p class="card-cadastro-texto">Crie sua conta agora preenchendo os campos abaixo <br>
                    Já possui uma conta? <a class="card-entre" href="login.php"> Entre </a> </p>

                <form method= "POST" action="php/cadastrar.php">
                    <div class="form-group">
                        <label for="cpfInput">CPF</label>
                        <input type="number" class="form-control" id="cpfInput" name="cpfInput" placeholder="Digite o seu CPF">
                    </div>

                    <div class="form-group">
                        <label for="senhaInput">Senha</label>
                        <input type="password" class="form-control" id="senhaInput" name="senhaInput" placeholder="Digite a sua senha">
                    </div>

                    <div class="form-group">
                        <label for="senhaInput2">Confirme a senha</label>
                        <input type="password" class="form-control" id="senhaInput2" name= "senhaInput2" placeholder="Repita a senha">
                    </div> <br>

                    <button type="submit" class="btn-cadastrar" onclick="aocadastrar()" >Cadastrar</button>
                </form>

            </div>

        </div>
    </main>

    <?php 
        require('./php/footer.php')
    ?>

</body>

</html>