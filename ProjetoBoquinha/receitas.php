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
    <?php require("php/header.php")?>

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
                <button class="tablinks green" id="defaultOpen" onclick="openTab(event, '6-a-8-meses')">6 a 8 meses</button>
                <button class="tablinks orange" onclick="openTab(event, '8-a-11-meses')">8 a 11 meses</button>
                <button class="tablinks blue" onclick="openTab(event, '1-a-2-anos')">1 a 2 anos</button>
                <button class="tablinks red" onclick="openTab(event, '2-a-4-anos')">2 a 4 anos</button>
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
            
                <div class="box-receita">
                    <p class="titulo-receita">Papinha de batata</p>
                    <strong> Ingredientes:</strong> <br>
                    1 Batata do tipo Monalisa com casca. <br>
                    3 Colheres de sopa de leite materno ou fórmula. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Lave bem a batata. Coloque-a para cozinhar até que o centro fique macio.
                    Deixe escorrer e esfriar bem antes de amassar. Adicione o leite que a criança já está 
                    acostumada a ingerir e sirva.
                </div>
                <div class="box-receita">
                    <p class="titulo-receita">Papinha de ervilha e abobrinha</p>
                    <strong> Ingredientes:</strong> <br> 
                    100g de ervilha fresca ou congelada <br>
                    1 abobrinha descascada cortada em cubos <br>
                    Algumas folhas de hortelã <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Cozinhe a abobrinha e as ervilhas no vapor até que os legumes fiquem macios.
                    Retire, acrescente a hortelã e bata tudo no liquidificador, até obter uma
                    consistência homogênea. Se a papinha estiver muito espessa, adicione um pouco
                    de água do cozimento e bata novamente.
                </div>
                <div class="box-receita">
                    <p class="titulo-receita">Papinha completa</p>
                    <strong> Ingredientes:</strong> <br> 
                    1 fio de óleo de canola <br>
                    1/4 de cebola picada em cubos <br>
                    150g de peito de frango, sem pele, em cubos <br>
                    1 xícara de espinafre lavado e picado <br>
                    1/2 xícara de mandioquinha lavada e descascada em cubos <br>
                    1/4 de xícara de ervilha (use a fresca, de preferência) <br>
                    Salsinha picada <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Doure a cebola e o frango no óleo de canola. Adicione os demais ingredientes e
                    cubra com duas xícaras de água. Deixe cozinhar em panela com tampa, em fogo
                    baixo, até que todos os ingredientes estejam macios. Retire, desfie o frango e
                    amasse os demais itens com um garfo. Depois, é só juntar tudo.
                </div>
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
            
                <div class="box-receita">
                    <p class="titulo-receita-4">Papinha de arroz e frango</p>
                    <strong> Ingredientes:</strong> <br>
                    3 colheres de sopa de arroz bem cozido ou 2 de arroz cru <br>
                    ½ concha de caldo de feijão <br>
                    2 colheres de sopa de frango desfiado e picado <br>
                    ½ chuchu <br>
                    ½ tomate <br>
                    1 colher de chá de óleo vegetal <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Cozinhar o frango, o arroz e o chuchu temperando com óleo, cebola, alho e salsinha, e
                    deixando cozinhar até que os alimentos fiquem bem macios. Picar bem o frango e
                    amassar o arroz, o chuchu e o tomate, sem misturar os alimentos no prato do bebê.
                    Adicionar o caldo de feijão e servir.
                </div>
                <div class="box-receita">
                <p class="titulo-receita-4">Papinha de frango com ervilha</p>
                    <strong> Ingredientes:</strong> <br> 
                    3 colheres de sopa de arroz cozido <br>
                    25g filé de frango desfiado <br>
                    1 tomate <br>
                    1 colher de sopa de ervilhas frescas <br>
                    1 colher de sopa de espinafre picado <br>
                    1 colher de chá de azeite <br>
                    Salsinha, cebola, alho e sal para temperar <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Cozinhar o frango em um pouco de água e desfiar. Em seguida, refogar a cebola e o alho
                    no azeite, acrescentando o tomate picado, a ervilha e um pouco de água, se necessário.
                    Acrescentar o frango, a salsinha e deixar em fogo baixo por cinco minutos. Depois, servir
                    esse refogado com arroz e espinafres picados ao bebê.
                </div>
                <div class="box-receita">
                <p class="titulo-receita-4">Papinha de cenoura e carne moida</p>
                    <strong> Ingredientes:</strong> <br> 
                    2 a 3 colheres de cenoura ralada; <br>
                    ⅓ de xícara de espinafre; <br>
                    3 colheres de sopa de arroz; <br>
                    2 colheres de sopa de caldo de feijão; <br>
                    2 colheres de sopa de carne moída; <br>
                    1 colher de chá de azeite; <br>
                    Cebola, salsinha e coentro para temperar. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Aquecer o azeite e refogar a cebola até murchar, acrescentando a carne em seguida e
                    deixando cozinhar por 5 minutos. Adicionar a cenoura, a salsa, o coentro, o espinafre e 1
                    xícara de água filtrada, deixando a mistura cozinhar por cerca de 20 minutos. Deixar ficar
                    morno e servir no pratinho do bebê, juntamente com o arroz e o caldo de feijão.
                </div>
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
            
                <div class="box-receita">
                    <p class="titulo-receita-5">Omelete assado de arroz</p>
                    <strong> Ingredientes:</strong> <br>
                    Ingredientes:
                    1 colher (sopa) de cebola; <br>
                    1 dente de alho; <br>
                    2 colheres (sopa) de óleo; <br>
                    1 xícara (chá) de pimentão picado; <br>
                    1 xícara (chá) de cenoura em <br>
                    cubos;
                    2 xícaras (chá) de talos de couve; <br>
                    2 xícaras (chá) de arroz cozido; <br>
                    1 colher (sopa) de margarina <br>
                    ou óleo para untar;
                    3 ovos; <br>
                    1 colher (sopa) de salsa <br>
                    picada;
                    1⁄2 xícara (chá) de leite; <br>
                    sal e tempero a gosto. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Doure a cebola no óleo acrescente o sal e os temperos. Junte o pimentão, a cenoura e os
                    talos de couve picados. Acrescente o arroz cozido e despeje em um pirex untado. Bata
                    os ovos, acrescente a salsa e o leite e despeje sobre o arroz. Leve ao forno preaquecido até
                    que os ovos estejam cozidos.
                </div>
                <div class="box-receita">
                    <p class="titulo-receita-5">Caldo Verde</p>
                    <strong> Ingredientes:</strong> <br> 
                    Ingredientes
                    3 maços de couve; <br>
                    1 kg de batatas; <br>
                    3 colheres (sopa)de óleo; <br>
                    3 dentes de alho; <br>
                    sal a gosto. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Modo de fazer: Cozinhe as batatas lavadas e descascadas em 2 litros de água,
                    com um pouco de sal, até ficarem bem macias. Reserve a água. Amasse as
                    batatas e reserve. Em uma panela aqueça o óleo e refogue o alho, e a cebola.
                    Misture a couve cortada bem fininha, as batatas e a água
                    reservada. Deixe cozinhar por 30 minutos.
                </div>
                <div class="box-receita">
                <p class="titulo-receita-5">Risoto de berinjela</p>
                    <strong> Ingredientes:</strong> <br> 
                    1 dente de alho;
                    1 colheres (sopa) de óleo; <br>
                    1 colheres (sopa) de margarina; <br>
                    3⁄4 xícara (chá) de tomate; <br>
                    6 xícaras (chá) de berinjela; <br>
                    água o suficiente; <br>
                    1 1⁄2 xícara (chá) de arroz; <br>
                    sal a gosto e temperos naturais. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Modo de fazer: Em uma panela, refogue o alho no óleo. Acrescente
                    a margarina, os tomates picadinhos e a berinjela sem casca cortada em
                    quadradinhos. Coloque o arroz e frite mais um pouco. Adicione o sal e os
                    temperos, verifique a água e deixe no fogo até cozinhar.
                </div>
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
            
                <div class="box-receita">
                    <p class="titulo-receita-6">Omelete assado de arroz</p>
                    <strong> Ingredientes:</strong> <br>
                    Ingredientes:
                    1 colher (sopa) de cebola; <br>
                    1 dente de alho; <br>
                    2 colheres (sopa) de óleo; <br>
                    1 xícara (chá) de pimentão picado; <br>
                    1 xícara (chá) de cenoura em <br>
                    cubos;
                    2 xícaras (chá) de talos de couve; <br>
                    2 xícaras (chá) de arroz cozido; <br>
                    1 colher (sopa) de margarina <br>
                    ou óleo para untar;
                    3 ovos; <br>
                    1 colher (sopa) de salsa <br>
                    picada;
                    1⁄2 xícara (chá) de leite; <br>
                    sal e tempero a gosto. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Doure a cebola no óleo acrescente o sal e os temperos. Junte o pimentão, a cenoura e os
                    talos de couve picados. Acrescente o arroz cozido e despeje em um pirex untado. Bata
                    os ovos, acrescente a salsa e o leite e despeje sobre o arroz. Leve ao forno preaquecido até
                    que os ovos estejam cozidos.
                </div>
                <div class="box-receita">
                <p class="titulo-receita-6">Caldo Verde</p>
                    <strong> Ingredientes:</strong> <br> 
                    Ingredientes
                    3 maços de couve; <br>
                    1 kg de batatas; <br>
                    3 colheres (sopa)de óleo; <br>
                    3 dentes de alho; <br>
                    sal a gosto. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Modo de fazer: Cozinhe as batatas lavadas e descascadas em 2 litros de água,
                    com um pouco de sal, até ficarem bem macias. Reserve a água. Amasse as
                    batatas e reserve. Em uma panela aqueça o óleo e refogue o alho, e a cebola.
                    Misture a couve cortada bem fininha, as batatas e a água
                    reservada. Deixe cozinhar por 30 minutos.
                </div>
                <div class="box-receita">
                <p class="titulo-receita-6">Risoto de berinjela</p>
                    <strong> Ingredientes:</strong> <br> 
                    1 dente de alho;
                    1 colheres (sopa) de óleo; <br>
                    1 colheres (sopa) de margarina; <br>
                    3⁄4 xícara (chá) de tomate; <br>
                    6 xícaras (chá) de berinjela; <br>
                    água o suficiente; <br>
                    1 1⁄2 xícara (chá) de arroz; <br>
                    sal a gosto e temperos naturais. <br> <br>
                    <strong>Modo de preparo:</strong>  <br>
                    Modo de fazer: Em uma panela, refogue o alho no óleo. Acrescente
                    a margarina, os tomates picadinhos e a berinjela sem casca cortada em
                    quadradinhos. Coloque o arroz e frite mais um pouco. Adicione o sal e os
                    temperos, verifique a água e deixe no fogo até cozinhar.
                </div>
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