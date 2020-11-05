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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (1,'111','senha');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receitas`
--

LOCK TABLES `receitas` WRITE;
/*!40000 ALTER TABLE `receitas` DISABLE KEYS */;
INSERT INTO `receitas` VALUES (1,'meses_6_8','Papinha de batata','1 Batata do tipo Monalisa com casca.\r\n3 Colheres de sopa de leite materno ou fÃ³rmula. ','Lave bem a batata. Coloque-a para cozinhar atÃ© que o centro fique macio.\r\n                    Deixe escorrer e esfriar bem antes de amassar. Adicione o leite que a crianÃ§a jÃ¡ estÃ¡ \r\n                    acostumada a ingerir e sirva.'),(2,'meses_6_8','Papinha de ervilha e abobrinha','100g de ervilha fresca ou congelada\r\n1 abobrinha descascada cortada em cubos','Cozinhe a abobrinha e as ervilhas no vapor atÃ© que os legumes fiquem macios.\r\n                    Retire, acrescente a hortelÃ£ e bata tudo no liquidificador, atÃ© obter uma\r\n                    consistÃªncia homogÃªnea. Se a papinha estiver muito espessa, adicione um pouco\r\n                    de Ã¡gua do cozimento e bata novamente.'),(3,'meses_6_8','Papinha completa','1 fio de Ã³leo de canola\r\n1/4 de cebola picada em cubos\r\n150g de peito de frango, sem pele, em cubos\r\n1 xÃ­cara de espinafre lavado e picado\r\n1/2 xÃ­cara de mandioquinha lavada e descascada em cubos\r\n1/4 de xÃ­cara de ervilha (use a fresca, de preferÃªncia)\r\nSalsinha picada','Doure a cebola e o frango no Ã³leo de canola. Adicione os demais ingredientes e\r\n                    cubra com duas xÃ­caras de Ã¡gua. Deixe cozinhar em panela com tampa, em fogo\r\n                    baixo, atÃ© que todos os ingredientes estejam macios. Retire, desfie o frango e\r\n                    amasse os demais itens com um garfo. Depois, Ã© sÃ³ juntar tudo.'),(4,'meses_8_11','Papinha de arroz e frango','3 colheres de sopa de arroz bem cozido ou 2 de arroz cru\r\nÂ½ concha de caldo de feijÃ£o\r\n2 colheres de sopa de frango desfiado e picado\r\nÂ½ chuchu\r\nÂ½ tomate\r\n1 colher de chÃ¡ de Ã³leo vegetal','Cozinhar o frango, o arroz e o chuchu temperando com Ã³leo, cebola, alho e salsinha, e deixando cozinhar atÃ© que os alimentos fiquem bem macios. Picar bem o frango e amassar o arroz, o chuchu e o tomate, sem misturar os alimentos no prato do bebÃª. Adicionar o caldo de feijÃ£o e servir.'),(5,'meses_8_11','Papinha de frango com ervilha','3 colheres de sopa de arroz cozido\r\n25g filÃ© de frango desfiado\r\n1 tomate\r\n1 colher de sopa de ervilhas frescas\r\n1 colher de sopa de espinafre picado\r\n1 colher de chÃ¡ de azeite\r\nSalsinha, cebola, alho e sal para temperar','Cozinhar o frango em um pouco de Ã¡gua e desfiar. Em seguida, refogar a cebola e o alho no azeite, acrescentando o tomate picado, a ervilha e um pouco de Ã¡gua, se necessÃ¡rio. Acrescentar o frango, a salsinha e deixar em fogo baixo por cinco minutos. Depois, servir esse refogado com arroz e espinafres picados ao bebÃª.'),(7,'meses_8_11','Papinha de cenoura e carne moida','2 a 3 colheres de cenoura ralada;\r\nâ…“ de xÃ­cara de espinafre;\r\n3 colheres de sopa de arroz;\r\n2 colheres de sopa de caldo de feijÃ£o;\r\n2 colheres de sopa de carne moÃ­da;\r\n1 colher de chÃ¡ de azeite;\r\nCebola, salsinha e coentro para temperar.','Aquecer o azeite e refogar a cebola atÃ© murchar, acrescentando a carne em seguida e deixando cozinhar por 5 minutos. Adicionar a cenoura, a salsa, o coentro, o espinafre e 1 xÃ­cara de Ã¡gua filtrada, deixando a mistura cozinhar por cerca de 20 minutos. Deixar ficar morno e servir no pratinho do bebÃª, juntamente com o arroz e o caldo de feijÃ£o.'),(8,'anos_1_2','Omelete assado de arroz','Ingredientes: 1 colher (sopa) de cebola;\r\n1 dente de alho;\r\n2 colheres (sopa) de Ã³leo;\r\n1 xÃ­cara (chÃ¡) de pimentÃ£o picado;\r\n1 xÃ­cara (chÃ¡) de cenoura em\r\ncubos; 2 xÃ­caras (chÃ¡) de talos de couve;\r\n2 xÃ­caras (chÃ¡) de arroz cozido;\r\n1 colher (sopa) de margarina\r\nou Ã³leo para untar; 3 ovos;\r\n1 colher (sopa) de salsa\r\npicada; 1â„2 xÃ­cara (chÃ¡) de leite;\r\nsal e tempero a gosto.','Doure a cebola no Ã³leo acrescente o sal e os temperos. Junte o pimentÃ£o, a cenoura e os talos de couve picados. Acrescente o arroz cozido e despeje em um pirex untado. Bata os ovos, acrescente a salsa e o leite e despeje sobre o arroz. Leve ao forno preaquecido atÃ© que os ovos estejam cozidos.'),(9,'anos_1_2','Caldo Verde','Ingredientes 3 maÃ§os de couve;\r\n1 kg de batatas;\r\n3 colheres (sopa)de Ã³leo;\r\n3 dentes de alho;\r\nsal a gosto.','Modo de fazer: Cozinhe as batatas lavadas e descascadas em 2 litros de Ã¡gua, com um pouco de sal, atÃ© ficarem bem macias. Reserve a Ã¡gua. Amasse as batatas e reserve. Em uma panela aqueÃ§a o Ã³leo e refogue o alho, e a cebola. Misture a couve cortada bem fininha, as batatas e a Ã¡gua reservada. Deixe cozinhar por 30 minutos.'),(10,'anos_1_2','Risoto de berinjela','1 dente de alho; 1 colheres (sopa) de Ã³leo;\r\n1 colheres (sopa) de margarina;\r\n3â„4 xÃ­cara (chÃ¡) de tomate;\r\n6 xÃ­caras (chÃ¡) de berinjela;\r\nÃ¡gua o suficiente;\r\n1 1â„2 xÃ­cara (chÃ¡) de arroz;\r\nsal a gosto e temperos naturais.','Modo de fazer: Em uma panela, refogue o alho no Ã³leo. Acrescente a margarina, os tomates picadinhos e a berinjela sem casca cortada em quadradinhos. Coloque o arroz e frite mais um pouco. Adicione o sal e os temperos, verifique a Ã¡gua e deixe no fogo atÃ© cozinhar.');
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

-- Dump completed on 2020-11-05 19:03:56
