<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="stylesHigienizar.css">

    <title>Como higienizar e armazenar</title>
</head>
<body>
    <header>
        <?php require("php/header.php")?>
        <?php include("php/logado.php") ?>
    </header>

    <main>
        <section class="container-fluid higi-imagem">
        <div class="row align-items-center h-100">
                <div class="col-sm-4 col-xs-12 mt-5 p-sm-5 text-left texto-higi">
                    <h1 class="display-4">Como Higienizar e Armazenar</h1>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-8 m-sm-5 p-sm-5 m-3 text-center texto-higi">
                    <h2 class="titulo-laranja">Higienização</h2>
                    <p lead>A higienização é divida em duas etapas: limpeza e desinfecção.
                    A limpeza consiste na remoção de terra, resíduos de alimentos, sujidades e/ou outras substâncias indesejáveis.
                    A desinfecção é o ato de redução por método físico ou químico do número de microorganismos em um nível que não comprometa a segurança do alimento.
                    A higienização dos alimentos é uma ação simples e muito importante que previne intoxicação alimentar e até mesmo a Covid – 19. 
                    </p>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-xs-12 col-10 texto-higi">
                    <h3 class="titulo-azul">Limpeza</h3>
                    <p><strong><spam class="texto-verde">Embalagens rígidas:</spam></strong> podem ser lavadas com água e sabão ou limpas com pano umedecido com álcool 70% ou solução clorada.</p>
                    <p><strong><spam class="texto-verde">Embalagens flexíveis:</spam> </strong>podem ser limpas com pano umedecido com álcool 70% ou solução clorada.</p> <br>
                    <h3 class="titulo-azul">Desinfecção</h3>
                    <ul>
                        <li>Faça a higienização adequada das superfícies (bancadas e mesas) e utensílios, principalmente após manipular carnes cruas ou vegetais não lavados.</li>
                        <li>Para higienizar frutas, verduras e legumes, inicialmente é importante retirar as partes estragadas e machucadas se forem necessárias. </li>
                        <li>Lavar em água corrente: <br>
                            - Verduras: folha a folha; <br>
                            - Frutas e legumes: um(a) a um(a).
                        </li>
                        <li>Coloque os itens de molho por 10 minutos em solução clorada <br>
                        <i>Preparo da solução: <br>
                        Água sanitária comercial (2 a 2,5% de cloro ativo): <br>
                        1 colher (sopa) para 1 litro de água. <br>
                        Importante verificar as instruções no rótulo.</i>
                        </li>
                        <li>Enxágue os alimentos com água corrente.</li>
                        <li>Seque os alimentos naturalmente ou com utensílios específicos antes de guardar.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-8 m-sm-5 p-sm-5 m-3 text-center texto-higi">
                    <h2 class="titulo-laranja">Armazenamento</h2>
                    <p lead>O armazenamento é um conjunto de procedimentos e requisitos para se obter a adequada conservação dos alimentos e a preservação de sua qualidade até o momento de serem preparados.  Os cuidados vão depender do tipo de alimento que se deseja guardar, a fim de permitir o maior aproveitamento dos produtos. Os alimentos têm características particulares que devem ser observadas na hora de seu armazenamento, sendo classificados em não-perecíveis, perecíveis e semiperecíveis. 
                    </p>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-xs-12 col-10 texto-higi">
                    <h3 class="titulo-azul">Como conservar os alimentos</h3>
                    <p><strong><spam class="texto-verde">Alimentos não perecíveis</spam></strong>  (arroz, milho, feijão, farinhas em geral, óleos, açúcar, sal, leite em pó e alguns tipos de frutas, verduras e legumes) devem ser armazenados em local seco e arejados, em temperatura ambiente e longe de raios solares.</p>
                    <p><strong><spam class="texto-verde">Perecíveis </spam> </strong> (alimentos que estragam com maior facilidade) devem ser mantidos sob refrigeração (carnes, ovos, leite, queijos, manteiga e a maioria das frutas, verduras e legumes) ou congelamento (carnes cruas, preparações culinárias, como o feijão já cozido). Preparações culinárias guardadas para a próxima refeição devem ser armazenadas sob refrigeração.</p> <br>
                </div>
            </div>
        </section>

        
    </main>

    <footer>
        <?php require('./php/footer.php') ?>
    </footer>
    
</body>
</html>