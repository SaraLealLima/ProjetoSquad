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

                <form action="" method="">
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="nome" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Digite seu nome">
                  </div>
                  <div class="form-group">
                    <label for="genero" class="d-block">Gênero</label>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="radio" value="masculino">
                        <label class="form-check-label" for="radio">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="radio2" value="feminino" checked>
                        <label class="form-check-label" for="radio2">
                            Feminino
                        </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idade">Idade</label>
                    <input type="number" class="form-control" id="idade" placeholder="Idade">
                  </div>
                  <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" class="form-control" id="peso" placeholder="Peso">
                  </div>
                  <div class="form-group">
                    <label for="altura">Altura (Ex: 110)</label>
                    <input type="number" class="form-control" id="altura" placeholder="Altura">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Adicionar</button>
                </form>



            </div>



            <div id="defaultOpen" class="pagina">
                <div id="accordion">
                    <div class="card border-top-0">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapse<?php echo 'one'?>">
                          Nome da Criança
                        </a>
                        <div class="criança-ultimo-update d-lg-inline d-none">Ultima Atualização: <?php echo $data; ?></div>
                      </div>
                      <div id="collapse<?php echo 'one'?>" class="collapse show" data-parent="#accordion">
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
                                    <tr>
                                        <td>
                                            24
                                        </td>
                                        <td>
                                            97
                                        </td>
                                        <td>
                                            186
                                        </td>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            19/01/2021
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            24
                                        </td>
                                        <td>
                                            97
                                        </td>
                                        <td>
                                            186
                                        </td>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            19/01/2021
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            24
                                        </td>
                                        <td>
                                            97
                                        </td>
                                        <td>
                                            186
                                        </td>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            19/01/2021
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>


            </div>

        </div>
        
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