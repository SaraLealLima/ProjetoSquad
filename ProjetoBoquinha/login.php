
<!DOCTYPE html>
<html lang="pt-br">
<?php
    require("php/conexao.php");
    
    $post_iniciado = (isset($_POST['CPFinput']) && isset($_POST['senhainput'])) ? true : false;
    $post_preenchido = (!empty($_POST['CPFinput']) && !empty($_POST['senhainput'])) ? true : false;
    if ($post_iniciado && $post_preenchido) {
    
        $sql = "SELECT * FROM cadastro";
        $inquerir = mysqli_query($conexao, $sql);
    
        while ($linha = mysqli_fetch_assoc($inquerir)) {
            if ($linha['cpf'] == $_POST['CPFinput']) {
                if ($linha['senha'] == $_POST['senhainput']) {
                    /* Login feito com sucesso */
                    echo "SUCESSO! #gugu";
                    session_start();
                    $_SESSION['dados'] = $linha;
                    /* Para chamar os dados em outra pagina agora é só fazer: $_SESSION['dados']['nome_da_coluna'] */
                    /* Colunas da tabela cadastro: id_cadastro, email, senha, nome e telefone*/
                    header("Location: index.php");
                } 
                else 
                {
                    /* Exibir mensagem de senha invalida */
                    echo "  <script defer>
                                setTimeout(function(){
                                    alert('Errou a senha')
                                }, 1000);
                            </script>";
                }
            } 
            else 
            {
                /* Exibir mensagem de email invalido */
                echo "  <script defer>
                            setTimeout(function(){
                                alert('Errou o cpf')
                            }, 1000);
                        </script>";
            }
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
            <div class="card-login">
                <p class="card-login-titulo">Entrar</p>
                <p class="card-login-texto">Entre para acessar a sua conta <br>
                    Ainda não possui uma? <a class="card-cadastre" href="cadastro.php"> Cadastre-se </a> </p>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="CPFinput">CPF</label>
                        <input type="number" class="form-control" id="CPFinput" name="CPFinput" placeholder="Digite o seu CPF">
                    </div>

                    <div class="form-group">
                        <label for="senhainput">Senha</label>
                        <input type="password" class="form-control" id="senhainput" name="senhainput" placeholder="Digite a sua senha">
                        <small id="loginHelp" class="form-text text-muted">Esqueceu sua senha? <a class="recuperar-senha" href="#">Clique aqui</a> </small>
                    </div> <br>

                    <button type="submit" class="btn-cadastrar" onclick="aoEntrar()">Login</button>
                </form>

            </div>

        </div>
    </main>

    <footer>
        <p> Projeto do tema Saúde, desenvolvido pelo Squad 6, turma São Paulo - Manhã para o programa Recode Pro.  <br>
            Boquinha - cuidando da alimentação de crianças carentes, aproveitando todo o potêncial alimentício e nutritivo que a comida saudável pode oferecer.
        </p>
        <br>
        <p>Todos os direitos reservados Squad 6 SP-M &copy;</p>
    </footer>

</body>

</html>