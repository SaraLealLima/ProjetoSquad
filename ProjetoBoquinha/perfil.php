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
                <h2>Crianças</h2>
                <h4><button>Adicionar Criança <div class="perfil-main-header-plus">+</div></button></h4>
            </div>
            <div class="perfil-main-body container-fluid">
            

            <div id="accordion">

                <div class="card">
                  <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapse<?php echo 'one'?>">
                      Nome da Criança
                    </a>
                    <div class="criança-ultimo-update">Ultima Atualização: <?php echo $data; ?></div>
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
    </main>

    <?php require('./php/footer.php') ?>
</body>
</html>