
<!DOCTYPE html>
<html lang="pt-br">
<?php
    require("php/conexao.php");
    
    $post_iniciado = (isset($_POST['emailinput']) && isset($_POST['senhainput'])) ? true : false;
    $post_preenchido = (!empty($_POST['emailinput']) && !empty($_POST['senhainput'])) ? true : false;
    if ($post_iniciado && $post_preenchido) {
        $email = $_POST['emailinput'];
        $senha = $_POST['senhainput'];
        $sql = "SELECT * FROM cadastro WHERE email = '$email'";
        $inquerir = mysqli_query($conexao, $sql);
        $resultado = $inquerir -> fetch_assoc();
        if($resultado){
            if($resultado['senha'] == $senha){
                 session_start();
                 $_SESSION['dados'] = $resultado;
                 $_SESSION['id'] = $resultado['id_cadastro'];
                 header("Location: index.php");
            }
            else 
            {
                echo " <script defer>
                            setTimeout(function(){
                                alert('A senha está incorreta')
                            }, 1000);
                        </script>";
            }            
        }
        else 
        {
            echo " <script defer>
                        setTimeout(function(){
                            alert('O email está incorreto".$email."')
                        }, 1000);
                    </script>";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesLogin.css">
    <script src="script.js"></script>

    <title>Boquinha — Entrar </title>
</head>

<body>
    <!-- Barra de navegação -->
    <?php require("php/header.php") ?>

    <main>
        <div class="section-1">
            <div class="card-login container-fluid">
                <p class="card-login-titulo">Entrar</p>
                <p class="card-login-texto">Entre para acessar a sua conta <br>
                    Ainda não possui uma? <a class="card-cadastre" href="cadastro.php"> Cadastre-se </a> </p>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="emailinput">E-mail</label>
                        <input type="email" class="form-control" id="emailinput" name="emailinput" placeholder="Digite o seu E-mail">
                    </div>

                    <div class="form-group">
                        <label for="senhainput">Senha</label>
                        <input type="password" class="form-control" id="senhainput" name="senhainput" placeholder="Digite a sua senha">
                        <small id="loginHelp" class="form-text text-muted">Esqueceu sua senha? <a class="recuperar-senha" href="#">Clique aqui</a> </small>
                    </div> <br>

                    <button type="submit" class="btn btn-cadastrar" onclick="aoEntrar()">Login</button>
                </form>

            </div>

        </div>
    </main>

    <?php 
        require('./php/footer.php')
    ?>

</body>

</html>