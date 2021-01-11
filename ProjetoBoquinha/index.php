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
    <link rel="stylesheet" href="stylesIndex.css">
    <script src="script.js"></script>

    <title>Boquinha — Página inicial</title>
</head>

<body>
    <!-- Barra de navegação -->
    <?php require("php/header.php")?>
    <main>
        <section class="section-1">
            <div class="card">
                <div class="card-titulo">Assim como os primeiros passos, as primeiras colheradas são decisivas para o
                futuro da criança.</div>
            </div>
        </section>


           

        <section class="section-2">
            <div class="container">
                <div class="section-2-title"> Entenda como a obesidade e sobrepeso infantil <br> podem influenciar na vida dos pequenos.</div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="section-2-green">
                            <div class="section-text">São 2,4 milhões de crianças com sobrepeso, 1,2 milhão com obesidade e outras 755 mil com obesidade grave.¹</div>  
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-4"></div>
                    <div class="col-12 col-md-8">
                        <div class="section-2-orange"> <div class="section-text"> Uma má alimentação na fase infantil influencia diretamente na sua saúde
                            podendo ocasionar: Obesidade na vida adulta, desenvolvimento precoce de
                            hipertensão, diabetes tipo 2, doença hepática gordurosa não alcóolica, asma
                            dentre outras.² </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="section-2-blue"> <div class="section-text"> Além disso, existem os riscos de cunho social e emocional, já que a obesidade pode
                            desencadear quadros de doenças mentais ou problemas de relacionamento,
                            incluindo: bullying, baixa autoestima,interferência na frequência escolar,
                            empregabilidade e salários na vida adulta.²</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-fontes container ml-0 mr-0 mt-0 mb-5">
            <div class="ml-4">
            <p class="my-0">¹ <a href="https://www.gov.br/pt-br/noticias/saude-e-vigilancia-sanitaria/2019/11/ministerio-da-saude-orienta-alimentacao-saudavel-e-atividade-fisica-para-combater-a-obesidade-infantil" target="_blank">Ministério da Saúde orienta alimentação saudável e atividade física para combater a obesidade infantil</a> </p>
            <p class="my-0">² <a href="https://desiderata.org.br/wp/wp-content/uploads/2019/11/DESIDERATA_PANORAMA-OBESIDADE_WEB_depoimentos.pdf" target="_blank">Panorama da obesidade em crianças e adolescentes</a> </p>
            </div>
        </section>

        <section class="section-3">
            <div class="section-objetivo"><div class="section-text-objetivo"> <div class="objetivo-title"> Objetivo </div> <br><br> Acreditamos que a prática de uma boa alimentação desde o nascimento é determinante para
            uma vida mais saudável. O objetivo do projeto é ser um facilitador para os responsáveis das
            crianças, fornecendo um leque de receitas nutritivas e de baixo custo que ajudam no combate
            a obesidade infantil.</div>
            <br><br><br><br><br><br><br>
            </div>
        </section>
        
    </main>
    <?php 
        require('./php/footer.php')
    ?>

</body>

</html>