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
             <div class="texto-2">Com ingredientes saudáveis, de baixo custo e nutritivos para os pequenos, aproveitando todo seu potêncial alimentício.</div>
        </div>
        <img class="img-topo" src="images/img10.jpg" alt="imagem">          
    </section>

    <section class="section-2">
        <div class="section-2-titulo"> Vamos começar do começo </div>
        <div class="section-2-texto">A recomendação atual é que a criança seja amamentada já na primeira hora de vida e por 2 anos ou mais. <br>
        Nos primeiros 6 meses, a recomendação é que ela receba somente leite materno. Quando isso ocorre, dizemos que a criança está em amamentação exclusiva. Nenhum outro alimento necessita ser dado
        ao bebê enquanto estiver em amamentação exclusiva: nem líquidos, como água, água de coco, chá, suco ou outros leites; nem qualquer outro alimento, como papinha e mingau. <br>
        Mesmo em regiões secas e quentes, não é necessário oferecer água às crianças alimentadas somente com leite materno, pois ele possui toda a água necessária para a hidratação nesse período. Em dias quentes, a criança poderá querer mamar com mais frequência para matar a sede. <br>
        A oferta de outros alimentos antes dos 6 meses, além de desnecessária, pode ser prejudicial, porque aumenta o risco de a criança ficar doente e pode prejudicar a absorção de nutrientes importantes existentes no leite materno, como o ferro e o zinco. Além disso, em geral a criança só está madura para receber outros alimentos em torno dos 6 meses. <br>
        Apesar da recomendação de amamentar até 2 anos ou mais, muitas pessoas se espantam ao ver crianças dessa idade no peito das mães por achar que são “grandes” demais para mamar. Entretanto, não há tempo máximo estabelecido
        para o fim da amamentação. Ela pode durar enquanto for desejada pela mulher e pela criança, desde que não haja nenhum prejuízo para ambas.
</div>
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
                    <div class="section-subtitulo">A partir dos 6 meses é possível introduzir outros alimentos, mantendo o 
                    leite materno até os dois anos ou mais de acordo com as recomendações médicas. Neste período o leite materno 
                    deixa de suprir todas as necessidades da criança, logo, a introdução adequada de alimentos complementares 
                    nesta fase da vida auxilia na prevenção de doenças como desnutrição, anemia, obesidade, pressão alta e diabetes, 
                    entre outras doenças, portanto, evite adicionar açúcar ou sal nos alimentos e os ofereça na sua condição mais natural 
                    possível.  </div>
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
                    <div class="section-subtitulo">Embora o leite de peito continue a ser muito importante para a criança, 
                    a comida começa a ter uma maior contribuição para atender as necessidades de nutrientes e energia que a
                     criança precisa para o seu crescimento. Então, neste momento, deve-se ter muita atenção aos sinais de 
                     fome e saciedade da criança e à quantidade de comida que ela está comendo.A criança já pode receber 
                     alimentos picados na mesma consistência dos alimentos da família. As carnes podem ser desfiadas. Encoraje a
                     criança a pegar os alimentos com a mão para estimular os movimentos com as pontas dos dedos. </div>
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
                    <div class="section-subtitulo">No decorrer do segundo ano de vida, ela pode resistir a experimentar novos
                    alimentos ou recusar alimentos de que gostava anteriormente. Alimentos ultraprocessados não são as melhores opções para contornar a falta de interesse, essa situação não é permanente, e a aceitação pode melhorar com a oferta repetida ou com a modificação das formas de preparo. É importante nesse período que a família estabeleça um local tranquilo para a criança se alimentar e evite distraí-la com equipamentos eletrônicos. 
                    Novos dentes surgem e a capacidade de triturar alimentos mais sólidos fica ainda mais desenvolvida. 
                    </div>
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
                    <div class="section-6-titulo">Alimentação 2 a 4 anos</div>
                    <div class="section-subtitulo">A partir dos 2 anos, a criança começa a se socializar mais, comunica com
                     mais facilidade suas preferências, aprofunda a relação afetiva com a alimentação e vivencia novas experiências.
                      Amplia sua autonomia em relação à alimentação, recusando ou aceitando os alimentos oferecidos a ela. Por isso, 
                      cuidadoras e cuidadores precisam definir o que vão ou não negociar com a criança e quais limites serão 
                      estabelecidos. A quantidade de alimentos que a criança consegue comer ainda é pequena. Como ela precisa de 
                      diferentes nutrientes para o desenvolvimento, é importante oferecer a maior variedade de alimentos possível. 
                      A criança precisa estar com fome para aceitar as refeições em quantidades adequadas. Mesmo crianças que comiam 
                      de tudo podem começar a recusar alguns alimentos ao completarem 2 anos de idade. Os legumes e as verduras devem 
                      ser colocados no prato da criança no almoço e no jantar, mesmo que ela rejeite e diga que não vai comer. 
                      Envolver a criança na escolha da refeição da família, no planejamento da alimentação e no seu preparo é uma 
                      excelente estratégia para que ela passe a apreciar mais os alimentos.
                    </div>

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
            Em uma panela, refogue o alho no óleo. Acrescente
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
        <div class="box-receita-suco-vermelho">
        <p class="titulo-receita-suco">Chá de frutas</p>
            <strong>Ingredientes</strong>  <br>
            • cascas de 1 abacaxi; • cascas de 1 maracujá;
            • cascas de 1 laranja; • cascas de 1 maçã;
            • 1 xícara (chá) de açúcar; • 2 litros de água;
            • 1 colher (sobremesa) flores de camomila; • 1 colher (sobremesa) de semente de erva doce;
            • canela a gosto; • cravo a gosto. <br> <br>
            <strong>Modo de preparo:</strong> Lave as cascas das frutas com uma escovinha. Corte-as e leve ao fogo com o açúcar, o cravo, a canela e 2 xícaras (chá) de água. Cozinhe até formar uma calda, continue acrescentando a água aos poucos. Por último coloque as ervas. Desligue o fogo e tampe a panela. Aguarde alguns minutos,
            coe e sirva quente ou frio.
        </div>
        <div class="box-receita-suco-laranja">
        <p class="titulo-receita-suco">Suco de abóbora com casca e sementes</p>
            <strong>Ingredientes:</strong>  <br>
            1 fatia de abóbora com casca e semente; <br>
            4 maracujás médios; <br>
            1 litro de água; <br>
            açúcar a gosto. <br>
            <strong>Modo de Preparo:</strong> Uma combinação deliciosa e muito refrescante para oferecer ao bebê é a
            melancia com pêra. Para o preparo é necessário bater no liquidificador ½ fatia
            de melancia, ½ pêra e ½ copo de água. Se quiser dar um gostinho especial,
            adicione folhas de hortelã.
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