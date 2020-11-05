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
    <link rel="stylesheet" href="stylesReceitas.css">
    <script src="script.js"></script>

    <title>Boquinha — Receitas</title>
</head>
<body>
    <!-- Barra de navegação -->
    <?php require("php/header.php") ?>
    <?php include("php/logado.php") ?>
    <main>
     <section class="section-1">
        <div class="bloco">
             <div class="texto">Receitas Maravilhosas</div>
             <div class="texto-2">Com ingredientes saudáveis e nutritivos para os pequenos, aproveitando todo seu potêncial alimentício.</div>
        </div>
        <img class="img-topo" src="images/img10.jpg" alt="imagem">          
    </section>

    <section class="section-2">
        <div class="section-2-titulo"> Vamos começar do começo </div>
        <div class="section-2-texto">“O aleitamento materno representa uma das experiências nutricionais mais
            precoces do recém-nascido, dando continuidade à nutrição iniciada na vida
            intrauterina, garantindo a melhor saúde possível, assim como o melhor
            resultado no desenvolvimento e estado psicológico da criança.”</div>
    </section>


        <div class="tab">
            <div class="tab-text" > 
                <h2>Receitas</h2>
                <p>Clique nos botões para acessar as receitas correspondentes a faixa etária desejada:</p>
            </div>

            <div class="tab-btns">
                <button class="tablinks tablinks-green" id="defaultOpen" onclick="openTab(event, '6-a-8-meses')">6 a 8 meses</button>
                <button class="tablinks tablinks-orange" onclick="openTab(event, '8-a-11-meses')">8 a 11 meses</button>
                <button class="tablinks tablinks-blue" onclick="openTab(event, '1-a-2-anos')">1 a 2 anos</button>
                <button class="tablinks tablinks-red" onclick="openTab(event, '2-a-4-anos')">2 a 4 anos</button>
            </div>
           
            
        </div>

        <div id="6-a-8-meses" id="defaultOpen" class="tabcontent">
            <section class="section-3">
                <div class="section-3-bloco">
                    <div class="section-3-titulo">Alimentação transitória 6 a 8 meses.</div>
                    <div class="section-3-subtitulo">Aqui começa a transição para as papinhas, a partir dos 6 meses o bebê já pode começar a ingeri-las. 
                    Separamos algumas receitas de papinhas deliciosas para seu pequeno já começar a se alimentar bem desde cedo! </div>
                    <div class="section-3-texto"></div>
                </div>
                <?php     
                $tipo = "meses68";
                include('php/carregar_receitas.php')
                ?>
        </section>
        </div>

        <div id="8-a-11-meses" class="tabcontent">
            <section class="section-4">
                <div class="section-4-bloco">
                    <div class="section-4-titulo">Alimentação transitória de 8 a 11 meses</div>
                    <div class="section-4-subtitulo">À medida que a criança cresce, desenvolve outras habilidades, como sentar
                    sem apoio, aceitar alimentos com consistência mais firme ou em pequenos
                    pedaços. Ela repara cada vez mais no prato e nos alimentos que está recebendo
                    e aceita maior variedade e quantidade de comida. </div>
                    <div class="section-4-texto"></div>
                </div>
                <?php     
                $tipo = "meses811";
                include('php/carregar_receitas.php')
                ?>
            </section>
        </div>

        <div id="1-a-2-anos" class="tabcontent">
            <section class="section-5">
                <div class="section-5-bloco">
                    <div class="section-5-titulo">Alimentação transitória de 1 a 2 anos</div>
                    <div class="section-5-subtitulo">No decorrer do segundo ano de vida, ela pode resistir a experimentar novos
                    alimentos ou recusar alimentos de que gostava anteriormente. Essa situação
                    não é permanente, e a aceitação pode melhorar com a oferta repetida ou com
                    a modificação das formas de preparo. </div>
                    <div class="section-5-texto"></div>
                </div>
                <?php     
                $tipo = "ano12";
                include('php/carregar_receitas.php')
                ?>
            </section>
        </div>

        <div id="2-a-4-anos" class="tabcontent">
            <section class="section-6">
                <div class="section-6-bloco">
                    <div class="section-6-titulo">Alimentação transitória de 1 a 2 anos</div>
                    <div class="section-6-subtitulo">No decorrer do segundo ano de vida, ela pode resistir a experimentar novos
                    alimentos ou recusar alimentos de que gostava anteriormente. Essa situação
                    não é permanente, e a aceitação pode melhorar com a oferta repetida ou com
                    a modificação das formas de preparo. </div>
                    <div class="section-6-texto"></div>
                </div>
                <?php     
                $tipo = "ano24";
                include('php/carregar_receitas.php')
                ?>

            </section>

        </div>

    

    <section class="section-suco">
        <div class="section-suco-bloco">
            <div class="section-suco-titulo">Sucos maravilhosos</div>
            <div class="section-suco-subtitulo"> Sucos são um otimo complemento para a alimentação da criança. São repletos de vitaminas importantes, além de serem delicioso! </div>
            <div class="section-suco-texto"></div>
        </div>
        
        <div class="box-receita-suco-verde">
            <p class="titulo-receita-suco">Suco de laranja pera</p>
            <strong>Modo de preparo:</strong>  <br>
            Corte duas laranjas ao meio e retire as sementes. Esprema as laranjas
            manualmente ou no espremedor. Só coe se seu bebê tiver menos que sete
            meses. Sirva na mamadeira ou no copinho.
        </div>
        <div class="box-receita-suco-azul">
        <p class="titulo-receita-suco">Suco de beterraba</p>
            <strong>Modo de preparo:</strong>  <br>
            Descasque e pique um pedaço (1/3) de uma beterraba. Bata bem no
            liquidificador com 1/3 de copo (30 ml) de água filtrada. Só coe se seu bebê
            tiver menos que sete meses. Sirva na mamadeira ou no copinho.
        </div>
        <div class="box-receita-suco-laranja">
        <p class="titulo-receita-suco">Suco de cenoura com laranja</p>
            <strong>Modo de preparo:</strong>  <br>
            Modo de fazer: Em uma panela, refogue o alho no óleo. Acrescente
            a margarina, os tomates picadinhos e a berinjela sem casca cortada em
            quadradinhos. Coloque o arroz e frite mais um pouco. Adicione o sal e os
            temperos, verifique a água e deixe no fogo até cozinhar.
        </div>
        <div class="box-receita-suco-vermelho">
        <p class="titulo-receita-suco">Suco de melancia e pêra</p>
            <strong>Modo de preparo:</strong>  <br>
            Uma combinação deliciosa e muito refrescante para oferecer ao bebê é a
            melancia com pêra. Para o preparo é necessário bater no liquidificador ½ fatia
            de melancia, ½ pêra e ½ copo de água. Se quiser dar um gostinho especial,
            adicione folhas de hortelã.
        </div>
        <div class="box-receita-suco-azul">
        <p class="titulo-receita-suco">Suco de frutas com aveias</p>
            <strong>Modo de preparo:</strong>  <br>
            Bater no liquidificador 50 ml de água filtrada, 50 ml de suco natural de acerola
            natural sem açúcar, 1 pera sem casca e 3 colheres de sopa rasas de aveia. Servir
            ao bebê natural, sem estar muito gelado.
        </div>
        <div class="box-receita-suco-verde">
        <p class="titulo-receita-suco">Suco de tomate com maçã</p>
            <strong>Modo de preparo:</strong>  <br>
            Escolha dois tomates médios maduros, tire as cascas e as sementes. Pique em
            pequenos pedaços e bata no liquidificador com 40 ml de água filtrada e fervida.
            Depois acrescente meia maçã, sem casca e sem caroço e bata mais um pouco.
        </div>
 
    </section>

    <footer>
        <p>Nosso projetinho lindo pra ajudar o CREN a ajudar os pais e mães de crianças em situação vulnerável a se
            alimentarem direitinho,
            aproveitando todo o potêncial alimentício e nutritivo que a comida saudável pode oferecer.
        </p>
        <br>
        <p>Todos os direitos reservados Squad 6 SP-M Recode Pro &copy;</p>
    </footer>

    <script>
        function openTab(evt, idade) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(idade).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>

</body>
</html>