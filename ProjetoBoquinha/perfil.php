<?php 
    //DATA
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    $date = strftime('%A, %d de %B de %Y', strtotime('today'));
    $data = utf8_encode($date);
    //DATA
    require('php/perfil/calcularimc.php');
    require("php/conexao.php");
    
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

    <?php include("php/logado.php") ?>
    <main class="container-fluid mx-0 px-0">
    
        <div class="perfil-main-box">

            <div class="mt-2 mx-4">
                <h2>Paragrafo explicando oque vai acontecer nessa parada.</h2>
                <p>Texto introdutorio</p>
            </div>

            <div class="perfil-main-header">
                <h4><button class="perfil-main-dados tablinks pt-2" id='defaultOpenClick' onclick="openTab(event, 'defaultOpen')">Crianças</button></h4>
                <h4><button class='perfil-main-adicionar tablinks' onclick="openTab(event, 'adicionar-crianca')">Adicionar Criança</button></h4>
                <h4><button class='perfil-main-remover tablinks' onclick="openTab(event, 'remover-crianca')">Remover Criança</button></h4>
            </div>
            <div class="perfil-main-body container-fluid">
  
                <div id="defaultOpen" class="pagina">
                    <div id="accordion">
                        <?php 
                            $id_cadastro = $_SESSION['id'];
                            $sql = "SELECT * FROM crianca WHERE id_cadastro = $id_cadastro";
                            $resultado = mysqli_query($conexao, $sql);
                            $repeticao = 0;
                            $criancas[] = [];
                            $dados_criancas[] = [];
                            while($dados = $resultado -> fetch_array()){
                                $criancas[$repeticao] = $dados;
                          ?>
                        <div class="card border-top-0">
                          <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $dados['id_crianca']?>">
                              <?php echo $dados['nome'] ?>
                            </a>
                            <div class="criança-ultimo-update d-lg-inline d-none text-dark"></div>
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
                                            <th scope="col">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $id_dados_crianca = $dados['id_crianca'];
                                            $sql = "SELECT * FROM dados_crianca WHERE id_dados_crianca = $id_dados_crianca ORDER BY id DESC";
                                            $resultado2 = mysqli_query($conexao, $sql);
                                            $id= 0;
                                            $repeticao2 = 0;
                                            while($dados2 = $resultado2 -> fetch_array()){
                                                $dados_criancas[$repeticao2] = $dados2;
                                                $repeticao2++;
                                                $id = $dados2['id'];
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
                                                <?php echo MensagemIMC(IMC($dados2['peso'], $dados2['altura']), $dados['sexo']) ?>
                                            </td>
                                            <td>
                                                <?php echo $dados2['datas'] ?>
                                            </td>
                                            <td>
                                                <?php echo "<a class='btn border-dark text-dark' href='php/perfil/deletarDados.php?id=".$id."'> DEL </a>";  ?>
                                            </td>
                                        </tr>
                                       <?php } ?>
                                       <tr>
                                            <form method="POST" action="php/perfil/inserirAtualizacao.php">
                                            <td>
                                                <input type='hidden' name='id' value=<?php echo $id_dados_crianca ?> />
                                                <input class="rounded border-0" type='number' name='idade' value="" placeholder="Idade"/>
                                            </td>
                                            <td>
                                                <input class="rounded border-0" type='number' name='peso' value="" placeholder="Peso"/>
                                            </td>
                                            <td>
                                                <input class="rounded border-0" type='number' name='altura' value="" placeholder="Altura"/>
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                <input type='hidden' name='datas' value=<?php echo $data ?>/>
                                            </td>
                                            <td>
                                                    <button class='btn border-dark text-dark' type="submit">ADD</button>
                                            </form>
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

                <div class="jumbotron pagina" id="adicionar-crianca">

                    <h1 class="display-4">Por favor, preencha os campos abaixo.</h1>

                    <form action="php/perfil/inserir.php" method="POST">
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
                        <label for="altura">Altura em centimetros (Ex: 110)</label>
                        <input type="number" class="form-control" name="altura" placeholder="Altura">
                      </div>
                      <input type="hidden" name="datas" value=<?php echo $data ?>>
                      <button type="submit" class="btn btn-primary btn-lg">Adicionar</button>
                    </form>



                </div>

                <div class="jumbotron pagina" id="remover-crianca">   
                    <h1 class="display-4">Por favor, selecione o bacuri que deseja deletar.</h1>
                    <form action='php/perfil/deletarCrianca.php' method="POST">
                        <label for="crianca"></label>
                        <select class="custom-select " id="crianca" name="crianca">
                            <?php 
                                if($criancas[0] != []){
                                    for($i = 0; $i < count($criancas); $i++){
                            ?>
                                    <option value=<?php echo $criancas[$i]['id_crianca'] ?> ><?php echo $criancas[$i]['nome'] ?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                        <button class="btn btn-danger btn-lg float-right" type="submit">Remover</button>
                    </form>
                    <img src="https://images.squarespace-cdn.com/content/v1/551dfbb6e4b06a5b2a85e190/1521001725737-99LPGGD3TAPMUDWNVM8F/ke17ZwdGBToddI8pDm48kMPJ0RAaGoKXviYPlUVC6d4UqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKccCrAAx8C4s_9QjFuiDQ4aTImIVkQQ3rPUH2Cbph2ljdvZWMe_cUbu01c3FjJ1RBi/sadgirl.jpg" alt="" class="w-100 mt-4 rounded"/>
                </div>
                


            </div>

        </div>
        <button class="btn btn-danger btn-lg float-right navbar-botao ml-5 mr-4 <?php echo $displayLogado ?>" onclick="window.location.href='php/logout.php'">SAIR</button>
    </main>
    
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