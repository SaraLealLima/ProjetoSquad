<?php 
    //DATA
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    $date = strftime('%A, %d de %B de %Y', strtotime('today'));
    $data = utf8_encode($date);
    //DATA


    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boquinha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesPerfil.css">
    <script src="script.js"></script>

    <title>Boquinha — Perfil</title>

    
</head>

<body>
    <!-- Barra de navegação -->
    <?php require("php/header.php")?>
    <?php 
    //Cadastro Criança
    require('./php/perfil/inserir.php');
    //Cadastro Criança
    ?>
    <?php include("php/logado.php") ?>
    <main class="container-fluid mx-0 px-0">
    
        <div class="perfil-main-box">



            <div class="perfil-main-header">
                <h4><button class="perfil-main-dados tablinks pt-2" id='defaultOpenClick' onclick="openTab(event, 'defaultOpen')">Crianças</button></h4>
                <h4><button class='perfil-main-adicionar tablinks' onclick="openTab(event, 'adicionar-crianca')">Adicionar Criança</button></h4>
            </div>
            <div class="perfil-main-body container-fluid">
            
            <div class="jumbotron pagina" id="adicionar-crianca">

                <h1 class="display-4">Por favor, preencha os campos abaixo.</h1>

                <form action="" method="POST">
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="nome" class="form-control" name="nome" aria-describedby="nomeHelp" placeholder="Digite seu nome">
                  </div>
                  <div class="form-group">
                    <label for="genero" class="d-block">Gênero</label>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="radio" value="masculino">
                        <label class="form-check-label" for="radio">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="radio2" value="feminino" checked>
                        <label class="form-check-label" for="radio2">
                            Feminino
                        </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idade">Idade</label>
                    <input type="number" class="form-control" name="idade" placeholder="Idade">
                  </div>
                  <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" class="form-control" name="peso" placeholder="Peso">
                  </div>
                  <div class="form-group">
                    <label for="altura">Altura (Ex: 110)</label>
                    <input type="number" class="form-control" name="altura" placeholder="Altura">
                  </div>
                  <input type="hidden" name="datas" value=<?php echo $data ?>>
                  <input type="hidden" name='imc' value=<?php echo 15 ?>>
                  <button type="submit" class="btn btn-primary btn-lg">Adicionar</button>
                </form>



            </div>



            <div id="defaultOpen" class="pagina">
                <div id="accordion">
                    <?php 
                        $id_cadastro = $_SESSION['id'];
                        $sql = "SELECT * FROM crianca WHERE id_cadastro = $id_cadastro";
                        $resultado = mysqli_query($conexao, $sql);
                        $repeticao = 0;
                        while($dados = $resultado -> fetch_array()){
                      ?>
                    <div class="card border-top-0">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $dados['id_crianca']?>">
                          <?php echo $dados['nome'] ?>
                        </a>
                        <div class="criança-ultimo-update d-lg-inline d-none">Ultima Atualização: <?php echo $data; ?></div>
                      </div>
                      <div id="collapse<?php echo $dados['id_crianca']?>" class="collapse <?php echo $repeticao == 0 ? "show" : ""?>" data-parent="#accordion">
                      
                        <div class="card-body pt-0 px-0 custom-scroll">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Idade</th>
                                        <th scope="col">Peso</th>
                                        <th scope="col">Altura</th>
                                        <th scope="col">IMC</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $id_dados_crianca = $dados['id_crianca'];
                                        $sql = "SELECT * FROM dados_crianca WHERE id_dados_crianca = $id_dados_crianca";
                                        $resultado2 = mysqli_query($conexao, $sql);
                                        while($dados2 = $resultado2 -> fetch_array()){
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $dados2['idade'] ?>
                                        </td>
                                        <td>
                                            <?php echo $dados2['peso'] ?>
                                        </td>
                                        <td>
                                            <?php echo $dados2['altura'] ?>
                                        </td>
                                        <td>
                                            <?php echo $dados2['imc'] ?>
                                        </td>
                                        <td>
                                            <?php echo $dados2['datas'] ?>
                                        </td>
                                    </tr>
                                   <?php } ?>
                                   <tr>
                                        <td>
                                            <form method="POST" action="">
                                                <input type='hidden' name=<?php echo "atualizar".$dados2['id'] ?> value=<?php echo $dados2['id'] ?> />
                                                <input type='number' name='idade' value=""/>
                                        </td>
                                        <td>
                                            <input type='number' name='peso' value=""/>
                                        </td>
                                        <td>
                                            <input type='number' name='altura' value=""/>
                                        </td>
                                        <td>
                                            <input type='number' name='imc' value=""/>
                                        </td>
                                        <td>
                                            <input type='hidden' name='datas' value=<?php echo $dados2['datas'] ?>/>
                                        </td>
                                        <td>
                                                <button type="submit">ADD</button>
                                            </form>
                                        </td>
                                            
                                            <?php 
                                                $id = $dados2['id'];
                                                require('php/perfil/inserirAtualizacao.php') 
                                            ?>
                                        </td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <?php 
                        $repeticao++;
                        } 
                    ?>
                </div>
            </div>
           


            </div>

        </div>
        
    </main>
    <button class="navbar-botao ml-5 mr-4 <?php echo $displayLogado ?>" onclick="window.location.href='php/logout.php'">SAIR</button>
    
    <?php require('./php/footer.php') ?>
    <script>
        function openTab(evt, id) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("pagina");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(id).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpenClick").click();
    </script>
</body>
</html>