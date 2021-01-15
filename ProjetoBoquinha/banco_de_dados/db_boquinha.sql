CREATE DATABASE  IF NOT EXISTS `boquinha` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `boquinha`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: boquinha
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alimentos`
--

DROP TABLE IF EXISTS `alimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alimentos` (
  `id_alimento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_alimento` varchar(80) NOT NULL,
  `descricao` text NOT NULL,
  `porcao` decimal(3,1) DEFAULT NULL,
  `calorias` decimal(3,1) DEFAULT NULL,
  `carboidratos` decimal(3,1) DEFAULT NULL,
  `proteinas` decimal(3,1) DEFAULT NULL,
  PRIMARY KEY (`id_alimento`),
  UNIQUE KEY `nome_alimento` (`nome_alimento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alimentos`
--

LOCK TABLES `alimentos` WRITE;
/*!40000 ALTER TABLE `alimentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_cadastro`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (1,'111','senha'),(2,'123','123');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receitas`
--

DROP TABLE IF EXISTS `receitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receitas` (
  `id_receita` int(11) NOT NULL AUTO_INCREMENT,
  `idade` enum('meses_6_8','meses_8_11','anos_1_2','anos_2_4','anos_4_10') NOT NULL,
  `nome_receita` varchar(80) NOT NULL,
  `ingredientes` text NOT NULL,
  `preparo` text NOT NULL,
  PRIMARY KEY (`id_receita`),
  UNIQUE KEY `nome_receita` (`nome_receita`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receitas`
--

LOCK TABLES `receitas` WRITE;
/*!40000 ALTER TABLE `receitas` DISABLE KEYS */;
INSERT INTO `receitas` VALUES (1,'meses_6_8','Papinha de batata','1 Batata do tipo Monalisa com casca.\r\n3 Colheres de sopa de leite materno ou fórmula. ','Lave bem a batata. Coloque-a para cozinhar até que o centro fique macio.\r\n                    Deixe escorrer e esfriar bem antes de amassar. Adicione o leite que a criança já está \r\n                    acostumada a ingerir e sirva.'),(2,'meses_6_8','Papinha de ervilha e abobrinha','100g de ervilha fresca ou congelada\r\n1 abobrinha descascada cortada em cubos','Cozinhe a abobrinha e as ervilhas no vapor até que os legumes fiquem macios.\r\n                    Retire, acrescente a hortelã e bata tudo no liquidificador, até obter uma\r\n                    consistência homogênea. Se a papinha estiver muito espessa, adicione um pouco\r\n                    de água do cozimento e bata novamente.'),(3,'meses_6_8','Papinha completa','1 fio de óleo de canola\r\n1/4 de cebola picada em cubos\r\n150g de peito de frango, sem pele, em cubos\r\n1 xícara de espinafre lavado e picado\r\n1/2 xícara de mandioquinha lavada e descascada em cubos\r\n1/4 de xícara de ervilha (use a fresca, de preferência)\r\nSalsinha picada','Doure a cebola e o frango no óleo de canola. Adicione os demais ingredientes e\r\n                    cubra com duas xícaras de água. Deixe cozinhar em panela com tampa, em fogo\r\n                    baixo, até que todos os ingredientes estejam macios. Retire, desfie o frango e\r\n                    amasse os demais itens com um garfo. Depois, é só juntar tudo.'),(4,'meses_8_11','Papinha de arroz e frango','3 colheres de sopa de arroz bem cozido ou 2 de arroz cru\r\n½ concha de caldo de feijão\r\n2 colheres de sopa de frango desfiado e picado\r\n½ chuchu\r\n½ tomate\r\n1 colher de chá de óleo vegetal','Cozinhar o frango, o arroz e o chuchu temperando com óleo, cebola, alho e salsinha, e deixando cozinhar até que os alimentos fiquem bem macios. Picar bem o frango e amassar o arroz, o chuchu e o tomate, sem misturar os alimentos no prato do bebê. Adicionar o caldo de feijão e servir.'),(5,'meses_8_11','Papinha de frango com ervilha','3 colheres de sopa de arroz cozido\r\n25g filé de frango desfiado\r\n1 tomate\r\n1 colher de sopa de ervilhas frescas\r\n1 colher de sopa de espinafre picado\r\n1 colher de chá de azeite\r\nSalsinha, cebola, alho e sal para temperar','Cozinhar o frango em um pouco de água e desfiar. Em seguida, refogar a cebola e o alho no azeite, acrescentando o tomate picado, a ervilha e um pouco de água, se necessário. Acrescentar o frango, a salsinha e deixar em fogo baixo por cinco minutos. Depois, servir esse refogado com arroz e espinafres picados ao bebê.'),(7,'meses_8_11','Papinha de cenoura e carne moida','2 a 3 colheres de cenoura ralada;\r\n⅓ de xí­cara de espinafre;\r\n3 colheres de sopa de arroz;\r\n2 colheres de sopa de caldo de feijão;\r\n2 colheres de sopa de carne moída;\r\n1 colher de chá de azeite;\r\nCebola, salsinha e coentro para temperar.','Aquecer o azeite e refogar a cebola até murchar, acrescentando a carne em seguida e deixando cozinhar por 5 minutos. Adicionar a cenoura, a salsa, o coentro, o espinafre e 1 xícara de água filtrada, deixando a mistura cozinhar por cerca de 20 minutos. Deixar ficar morno e servir no pratinho do bebê, juntamente com o arroz e o caldo de feijão.'),(8,'anos_1_2','Omelete assado de arroz','Ingredientes: 1 colher (sopa) de cebola;\r\n1 dente de alho;\r\n2 colheres (sopa) de óleo;\r\n1 xícara (chá) de pimentão picado;\r\n1 xícara (chá) de cenoura em cubos;\r\n2 xícaras (chá) de talos de couve;\r\n2 xícaras (chá) de arroz cozido;\r\n1 colher (sopa) de margarina ou óleo para untar;\r\n3 ovos;\r\n1 colher (sopa) de salsa npicada;\r\n1⁄2 xícara (chá) de leite;\r\nsal e tempero a gosto.','Doure a cebola no óleo acrescente o sal e os temperos. Junte o pimentão, a cenoura e os talos de couve picados. Acrescente o arroz cozido e despeje em um pirex untado. Bata os ovos, acrescente a salsa e o leite e despeje sobre o arroz. Leve ao forno preaquecido até que os ovos estejam cozidos.'),(9,'anos_1_2','Caldo Verde','Ingredientes 3 maços de couve;\r\n1 kg de batatas;\r\n3 colheres (sopa)de óleo;\r\n3 dentes de alho;\r\nsal a gosto.','Modo de fazer: Cozinhe as batatas lavadas e descascadas em 2 litros de água, com um pouco de sal, até ficarem bem macias. Reserve a água. Amasse as batatas e reserve. Em uma panela aquecida o óleo e refogue o alho, e a cebola. Misture a couve cortada bem fininha, as batatas e a água reservada. Deixe cozinhar por 30 minutos.'),(10,'anos_1_2','Risoto de berinjela','1 dente de alho;\r\n1 colheres (sopa) de óleo;\r\n1 colheres (sopa) de margarina;\r\n1⁄2 xícara (chá) de tomate;\r\n6 xícaras (chá) de berinjela;\r\nágua o suficiente;\r\n1   xícara (chá) de arroz;\r\nsal a gosto e temperos naturais.','Modo de fazer: Em uma panela, refogue o alho no óleo. Acrescente a margarina, os tomates picadinhos e a berinjela sem casca cortada em quadradinhos. Coloque o arroz e frite mais um pouco. Adicione o sal e os temperos, verifique a água e deixe no fogo até cozinhar.'),(11,'anos_2_4','Pão de casca de banana','6 bananas com casca;\r\n1 xícara (chá) de água;\r\n1 xícara (chá) de leite;\r\n30g de fermento fresco;\r\n1⁄2 xícara de óleo;\r\n1 ovo;\r\n1 pitada de sal;\r\n½ kg de farinha de trigo.','Bata as cascas de bananas e a água no liquidificador. Junte o óleo, os ovos e o fermento e bata mais um pouco. Acrescente a farinha, o sal e o açúcar e misture. Por último, coloque na massa as bananas em rodelas. Coloque a massa em uma forma untada com margarina e farinha de trigo. Deixe crescer até dobrar de volume e leve para assar em forno preaquecido.'),(12,'anos_2_4','Salada de frutas','1 abacaxi;\r\n1 mamão\r\n3 laranjas;\r\n4 bananas;\r\n4 colheres de sopa de açúcar.\r\n','Lave bem as frutas, descasque e pique. Em uma tigela misture todas as frutas e o açúcar, mexa bem, leve para a geladeira e depois sirva.'),(13,'anos_2_4','Mandioqueijo','1⁄2 kg de mandioca;\r\n1 gema;\r\n4 colheres de sopa de farinha de trigo;\r\n2 colheres de sopa de margarina;\r\nsal.\r\nPara empanar:\r\n1 clara;\r\nqueijo ralado.\r\n','Cozinhe a mandioca e amasse. Acrescente os outros ingredientes. Amasse bem e faça bolinhas. Empane com a clara e depois no queijo. Leve para assar em forma untada por aproximadamente 20 minutos ou até dourarem.'),(14,'anos_2_4','Polvilho de cenoura','3 colheres de sopa de polvilho doce (ou azedo)\r\n1 colher de sopa de purê de cenoura\r\n1 colher de sobremesa de azeite\r\n','Cozinhe a cenoura e amasse com o garfo ou com o mixer. Refogue o purê com um fio de azeite. Coloque a mistura em um recipiente e acrescente polvilho aos poucos, até formar uma massa uniforme e moldável. Sove levemente. Unte uma forma, modele como preferir e asse em forno pré-aquecido a 200° por 15 minutos. '),(15,'meses_6_8','Caldo de abóbora e ovo','350g de caldo de legumes caseiro\r\n30g de macarrão\r\n100g de abóbora descascada e em cubos\r\n1 gema de ovo cozida\r\n1 colher (sopa) de azeite de oliva\r\n','Cozinhe a abóbora para cozinhar no caldo de legumes até que ela fique macia. Aproveite para cozinhar o macarrão no mesmo líquido. Escorra e amasse o macarrão e os demais ingredientes, mas use um pouco do caldo para unir todos os alimentos.'),(16,'meses_6_8','Purê de mamão, laranja e aveia','1/2 mamão papaia\r\n2 colheres de sopa de suco de laranja coado\r\n1 colher de sopa de aveia em flocos finos ou em pó','Tire as sementes do mamão e misture a polpa com o suco de laranja. Junte a aveia e amasse com um garfo.'),(17,'meses_6_8','Feijão com mandioquinha e frango desfiado','3 colheres (sopa) rasas de feijão cozido e amassado\r\n1 mandioquinha média\r\n2 colheres (sopa) cheias de frango desfiado\r\n2 e ½ xícaras (chá) de água','Cozinhar a mandioquinha com água e amassar. Servir a mandioquinha com o feijão e o frango.'),(18,'meses_8_11','Sopa De Creme De Abóbora','2 ½ xícara (chá) de abóbora madura;\r\n4 xícaras (chá) água;\r\n4 colheres (sopa) de arroz;\r\n2 ½ xícara (chá) de leite;\r\n¾ xícara (chá) de cebola;\r\n1 colher (sopa) de margarina;\r\n1 pitada de sal e temperos naturais.','Cozinhe a abóbora na água até ficar macia. Depois de cozida, acrescente o arroz e deixe cozinhar até amolecê-lo e secar a água. Bata no liquidificador a abóbora com o arroz o leite e a cebola, a margarina e os temperos. Leve ao fogo brando até engrossar'),(19,'meses_8_11','Mingau De Banana Verde','6 bananas verdes sem casca;\r\n1 xícara (chá) de açúcar;\r\n50 gramas de coco ralado;\r\n5 copos de água;\r\n4 copos de leite.','Descascar as bananas e cozinhar. Depois de cozidas, passar no liquidificador ou amassar com o garfo. Colocar numa panela juntamente com o leite, o açúcar e o coco ralado. Levar ao fogo até engrossar. Servir quente'),(20,'meses_8_11','Papinha de feijão com carne','25 gramas de carne de boi (músculo ou braço);\r\nmeia cenoura;\r\nmeia abobrinha;\r\nmeia xícara de chá de couve picada;\r\nmeia colher de sopa de salsa picada;\r\nmeia xícara de feijão cozido;\r\nmeia colher de chá de óleo;\r\numa pitadinha de sal.','Não é necessário descascar a cenoura e a abobrinha, apenas raspe a casca da cenoura com uma faca e lave bem a abobrinha. Pique miúdo. Em seguida, leve todos os ingredientes ao fogo, acrescentando o feijão já cozido. Pique bem a carne, os legumes, as verduras e a salsa. Rale a cebola e acrescente o sal. Numa panela com água, leve ao fogo brando todos os ingredientes, com exceção do óleo. Tampe a panela e deixe cozinhar até que todos os ingredientes fiquem bem macios e praticamente desmanchados. Desligue e junte o óleo. Passe a papinha pela peneira de malha fina.\r\nDica: O sal deve ser utilizado na menor quantidade possível, para que a criança aprenda a identificar o sabor dos alimentos.'),(21,'anos_1_2','Bolo De Mexerica','2 mexericas ou laranjas\r\n3/4 xícara (chá) de óleo\r\n3 ovos\r\n2 xícaras (chá) de açúcar\r\n1 colher (sopa) de essência de baunilha\r\n2 xícaras (chá) de farinha de trigo\r\n1 colher (sopa) de fermento em pó','Lave bem as mexericas e corte em quatro partes e retire somente as sementes. Bata no liquidificador as mexericas com a casca, o óleo, os ovos, o açúcar e a baunilha. Despeje esta mistura em uma vasilha e acrescente a farinha de trigo e o fermento em pó, mexendo bem. Asse em assadeira untada com margarina ou óleo e enfarinhada por mais ou menos 40 a 45 minutos, em forno pré-aquecido médio. Se preferir, depois de assado e ainda quente despeje sobre ele o suco de 2 mexericas.'),(22,'anos_1_2','Polenta com folhas','3 xícaras (chá) de folhas de beterraba,\r\ncouve flor e cenoura picadas\r\n1 dente de alho picado\r\n1 cebola picada\r\n2 colheres (sopa) de óleo\r\n1 colher (sopa) de sal\r\n3 xícaras (chá) de fubá','Lavar e picar as folhas. Fritar o alho e a cebola no óleo. Juntar as folhas. Acrescentar 1 litro de água fria, sal e ferver. Adicionar o fubá previamente umedecido. Cozinhar mexendo sempre.'),(23,'anos_1_2','Farofa de folhas, talos e legumes','2 colheres (sopa) de óleo;\r\n2 colheres (sopa) de cebola ralada;\r\n2 xícaras (chá) de farinha de mandioca torrada ou farinha de milho;\r\nsal a gosto;\r\nfolhas, talos ou legumes bem lavados, picados e refogados.','Esquente o óleo e refogue a cebola até\r\ndourar, Junte as folhas ou talos. Acrescente\r\naos poucos a farinha de mandioca ou de\r\nmilho e o sal. Mexa bem. Sirva em seguida.'),(24,'anos_2_4','Bolo nutritivo','2 ovos;\r\n1 xícara (chá) e meia de beterraba;\r\n1 xícara (chá) de cenoura;\r\n2 laranjas;\r\n¾ de xícara (chá) de óleo;\r\n3 xícaras (chá) de açúcar;\r\n3 xícaras (chá) de farinha de trigo; e\r\n1 colher (chá) de fermento em pó.','Bater no liquidificador os ovos, a beterraba, a cenoura, as laranjas sem casca e sem sementes e o óleo. Adicione a estes ingredientes líquidos o açúcar peneirado. Acrescente a farinha de trigo e o fermento em pó peneirados e misture bem. Despeje em uma assadeira untada e enfarinhada. Leve para assar em forno médio pré-aquecido.'),(25,'anos_2_4','Torta de casca de abóbora com recheio de talos','1 colher (sobremesa) de fermento em pó\r\n1 xícara (chá) de talo de couve e salsa\r\n3 xícaras (chá) de farinha de trigo\r\n1 xícara (chá) de casca de abóbora\r\n1 copo de leite (250 ml)\r\n1 cenoura ralada\r\n1/2 copo de óleo\r\n1 cebola pequena\r\n1 dente de alho\r\nSal a gosto\r\n2 ovos','Recheio: Refogar a cebola, o alho, os talos e a cenoura.\r\nMassa: Misture bem os ovos, a casca de abóbora, o óleo, o leite e o sal. Despeje a massa em uma vasilha e misture o trigo, o recheio e o fermento em pó. Leve ao forno por 30 minutos em forma previamente untada com margarina ou óleo e farinha de trigo.'),(26,'anos_2_4','Feijoada Verde','2 xícaras de chá de feijão\r\n5 dentes de alho\r\n1 cebola pequena\r\nóleo\r\nquiabo\r\nrepolho\r\ncouve\r\ncheiro verde','Lavar bem o feijão. Refogar o alho e a cebola na panela de pressão. Acrescentar o feijão, a água e deixar cozinhar. Picar o quiabo, a couve, o cheiro verde e o repolho. Depois que o feijão estiver cozido, acrescentar os vegetais e deixar no fogo por mais 10 minutos. Retirar a panela do fogo e acrescentar o cheiro verde. Servir quente.\r\nOBS: Podem ser utilizados outros vegetais como: espinafre, couve-flor, ramas de beterraba, de cenoura, folhas e talos.');
/*!40000 ALTER TABLE `receitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucos`
--

DROP TABLE IF EXISTS `sucos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucos` (
  `id_sucos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `preparo` text NOT NULL,
  PRIMARY KEY (`id_sucos`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucos`
--

LOCK TABLES `sucos` WRITE;
/*!40000 ALTER TABLE `sucos` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-15 17:57:59
