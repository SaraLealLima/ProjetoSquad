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
    <link rel="stylesheet" href="stylesvitaminas.css">

    <title>Vitaminas e Minerais</title>
</head>

<body>
    <header>
        <?php require("php/header.php")?>
        <?php include("php/logado.php") ?>
    </header>

    <main>
        <section class="container-fluid vitamina-section vitamina-image image-responsive">
            <div class="row justify-content-end">
                <div class="section-intro col-sm-7 col-xs-12 mr-sm-5">
                    <h2 class="text-center display-4 mt-sm-3">
                        Vitaminas
                    </h2>
                    <p class="text-center lead px-sm-5 px-xs-2 mb-4">
                        As vitaminas e os minerais são elementos inorgânicos que não podem ser produzidos pelo próprio
                        corpo, mas são fundamentais para o bom funcionamento do organismo. Esses nutrientes podem ser
                        encontrados em diversos alimentos, na exposição solar ou em suplementos de reposição. — que deve
                        ser prescrita por um profissional da área da saúde.
                    </p>
                </div>
            </div>
            <div class="row justify-content-end mr-sm-5 pr-sm-5 mt-sm-5">
                <div class="col-sm-9 col-xs-12">
                    <div class="card p-3 p-sm-5 card-vitamina">
                        <div class="custom-scroll scroll-green p-3">
                            <article>
                                <h3>Vitamina C (ácido ascórbico)</h3>
                                <p>O ácido ascórbico é fundamental para o fortalecimento do nosso sistema imunológico, além
                                    de ter funções cicatrizantes e papel importante na prevenção de problemas cardíacos.
                                    Os sintomas da deficiência de ácido ascórbico são sangramentos gengivais, cicatrização
                                    lenta de machucados e feridas, dores de cabeça e fadiga.
                                    <strong>A vitamina C é normalmente encontrada em frutas ácidas, como tomate, laranja, limão e
                                    acerola.</strong>
                                </p>
                            </article>
    
                            <article>
                                <h3>Vitamina A (retinol)</h3>
                                <p>É muito conhecida como a ”vitamina da visão” — graças ao seu papel na regeneração dos
                                    olhos. Além disso, previne os sinais do envelhecimento, pois age como protetor solar
                                    natural, e possui capacidade antioxidante.
                                    Quem tem deficiência em vitamina A pode apresentar sinais como cegueira noturna,
                                    alterações na pele e ressecamento ocular. Para evitar esses problemas, dê preferência
                                    para alimentos ricos nessa substância, <strong>como cenoura, manga, fígado, espinafre e leite.</strong>
                                </p>
                            </article>
    
                            <article>
                                <h3>Vitaminas do complexo B</h3>
                                <p>O complexo B é composto pelas vitaminas B1, B2, B3, B6, B9 (conhecida como ácido fólico)
                                    e B12. Cada uma delas possui funções diferentes, que vão desde a formação do sistema
                                    nervoso nos fetos até a manutenção da produção de células sanguíneas.
                                    A deficiência dessas substâncias pode causar malformações fetais, anemia megaloblástica,
                                    convulsões, amenorreia e problemas na pele.
                                    <strong>As vitaminas do complexo B podem ser encontradas em carnes (principalmente fígado),
                                    ovos, leite e vegetais de coloração verde-escuro, como couve e espinafre.</strong>
                                </p>
                            </article>
    
                            <article>
                                <h3>Vitamina E (tocoferol)</h3>
                                <p>É uma grande aliada na luta contra as doenças cardíacas, combatendo os radicais livres
                                    (moléculas pouco estáveis e imprevisíveis que circulam no nosso corpo).
                                    A falta dessa vitamina pode ocasionar esterilidade, envelhecimento precoce e fadiga.
                                    <strong>
                                        O gérmen de trigo, as oleaginosas e os vegetais folhosos de coloração verde-escura são
                                        os alimentos em que podemos encontrar essa substância.
                                    </strong>
                                </p>
                            </article>
    
                            <article>
                                <h3>Vitamina K</h3>
                                <p>Além de ser excelente para a saúde musculoesquelética, a vitamina K é responsável pelo
                                    controle da coagulação sanguínea, prevenindo sangramentos e hemorragias — além de
                                    fortalecer a estrutura óssea, pois age como fixador do cálcio nos ossos.
                                    Por isso, a deficiência em vitamina K pode se apresentar com sangramentos que não
                                    estancam e enfraquecimento ósseo. <strong>
                                        Para evitar esses problemas, consuma verduras e dê
                                        preferência às folhas verde-escuras.
                                    </strong>
                                </p>
                            </article>
    
                            <article>
                                <h3>Vitamina D (calciferol)</h3>
                                <p>Essa substância é responsável pelo controle de diversos genes e pelo auxílio do depósito
                                    de minerais nos tecidos, como é o caso do cálcio.
                                    Os sintomas mais comuns da falta de vitamina D são o raquitismo e problemas ósseos.
                                    <strong>Os alimentos ricos em calciferol são:
                                    peixes (sardinha, atum e salmão), cogumelos, ovo e fígado bovino.</strong>
                                    Além disso, o corpo produz vitamina D quando exposto ao sol — dê preferência para os
                                    horários de 7 às 10 horas ou ao final do dia, após as 16 horas.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid mineral-image mineral-section image-responsive">
            <div class="row justify-content-start">
                <div class="col-sm-7 col-xs-12 mt-5 mr-sm-5 offset-sm-1">
                    <h2 class="text-center display-4 mt-3">
                        Minerais
                    </h2>
                    <p class="text-center lead px-sm-5 px-xs-2 mb-4 ">
                        Os minerais são fundamentais para a saúde desde o nascimento. As quantidades de cada nutriente
                        são específicas e podem variar de microgramas a gramas por dia, por isso, é primordial o
                        balanceamento dos valores ingeridos de cada um deles, afinal, o excesso de um pode atrapalhar na
                        absorção e utilização do outro.
                    </p>
                </div>
            </div>
            <div class="row justify-content-start ml-sm-5 pl-sm-5 mt-sm-5">
                <div class="col-sm-9 col-xs-12">
                    <div class="card p-3 p-sm-5 card-mineral">
                        <div class="custom-scroll scroll-blue p-3">
                            <article>
                                <h3>Magnésio</h3>
                                <p>É extremamente importante para saúde dos ossos, relaxante muscular e é indispensável para
                                    evitar doenças como a enxaqueca, destaca a Dra. As fontes de magnésio são:
                                    <strong>Folha de coentro seca, farelo de trigo, amendoim, amêndoas, granola, aveia, uva passa
                                    sem semente, arroz integral, quiabo cozido, couve refogada, beterraba cozida e espinafre
                                    cru.</strong>    
                                </p>
                            </article>

                            <article>
                                <h3>Zinco</h3>
                                <p>Atua na síntese de proteínas, potente antioxidante juntamente como cobre , participa do
                                    metabolismo celular, funções neurológicas. <strong>Pode ser encontrado em ostras (grelhada ou
                                    assada), levedura, semente de abóbora (inteiras e assadas), carne vermelha (acém cozido)
                                    e caranguejo (cozido), ovos, castanha de caju, iogurte natural desnatado e queijo minas
                                    (frescal).</strong></p>
                            </article>

                            <article>
                                <h3>Cálcio</h3>
                                <p>Importante para saúde dos ossos, cabelo e unhas. <strong>As melhores fontes de cálcio são os
                                    vegetais verdes escuros como couve, espinafre, mostarda e folhas de brócolis e o leite e
                                    seus derivados, como iogurte e queijos.</strong></p>
                            </article>

                            <article>
                                <h3>Selênio</h3>
                                <p>Possui ação antioxidante no organismo, atua na cura das doenças hepáticas e auxilia na
                                    saúde dos músculos. <strong>Pode ser encontrado na castanha do Pará, salmão, fígado bovino,
                                    tomate, milho, camarão, ostras e semente de girassol.</strong> </p>
                            </article>

                            <article>
                                <h3>Enxofre</h3>
                                <p>Assim como o magnésio, o enxofre atua no bem-estar dos nossos ossos, dentes e unhas,
                                    sendo fundamental em toda a nossa estrutura corporal. <strong>Suas principais fontes são:
                                    Cebola, repolho, ovos, feijão, brócolis, alho e carnes.</strong> </p>
                            </article>

                            <article>
                                <h3>Cromo</h3>
                                <p>Age em função da insulina, sendo responsável pela distribuição de açúcar pelo nosso
                                    corpo, também auxilia no controle do colesterol, alivia os sintomas da depressão e
                                    aumenta a capacidade de ganho de massa muscular.<strong>Podemos encontrá-lo no levedo de
                                    cerveja, frango, carne bovina, ovos, queijo, pimentão, banana e cogumelos.</strong> </p>
                            </article>

                            <article>
                                <h3>Cobre</h3>
                                <p>Aliado à saúde do cérebro, o cobre também ajuda na formação de células sanguíneas e
                                    trabalha na pigmentação da pele, impedindo o aparecimento de manchas. Contém ação
                                    antioxidante e age na prevenção das ações dos radicais livres. <strong>Suas melhores fontes são:
                                    Nozes, amendoim, ervilhas, fígado bovino e trigo integral.</strong></p>
                            </article>

                            <article>
                                <h3>Vanádio</h3>
                                <p> Dentre os benefícios do seu consumo podemos destacar o controle do colesterol,
                                    previne os ataques cardíacos e a isquemia cerebral. <strong>Suas principais fontes são os frutos do mar, alho, levedo de cerveja, fígado e arroz
                                    integral.</strong></p>
                            </article>

                            <article>
                                <h3>Boro</h3>
                                <p>Trabalha diretamente nas funções hormonais e auxilia no metabolismo ósseo e muscular.
                                    Ajuda na absorção da Vitamina D, previne a osteoporose e alivia as dores menstruais.
                                    <strong>Pode ser encontrado na banana, na couve manteiga, nozes, soja, feijão, lentilha,
                                    abacaxi, pera, uva e ameixas.</strong></p>
                            </article>

                            <article>
                                <h3>Iodo</h3>
                                <p>Responsável por ajudar a fornecer energia para o corpo, age na prevenção do câncer e
                                    beneficia a saúde reprodutiva. <strong>As principais fontes de iodo são os frutos do mar como:
                                    Salmão, ostras, mexilhão, atum, bacalhau, linguado e camarão. Também é possível
                                    encontrá-lo nos ovos, leite e cerveja.</strong></p>
                            </article>

                            <article>
                                <h3>Potássio</h3>
                                <p>Fundamental para o bom funcionamento do nosso corpo, o potássio é responsável por manter
                                    os níveis de água equilibrados no nosso organismo. Além disso, age na manutenção das
                                    contrações musculares e na frequência cardíaca. <strong>Podemos ingeri-lo através da banana,
                                    melão, tomate, ervilha, frutas secas e batata.</strong></p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <?php require('./php/footer.php') ?>
    </footer>


</body>

</html>