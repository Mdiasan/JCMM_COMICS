-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: jcmm-comics
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `comic`
--
CREATE DATABASE IF NOT EXISTS `jcmm-comics` DEFAULT SET CHARACTER utf8mb4 COLLATE utf8mb4_general_cli;
USE `jcmm-comics`;


DROP TABLE IF EXISTS `comic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comic` (
  `id` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `precio` int DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `editorial_id` int NOT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comic_editorial1_idx` (`editorial_id`),
  CONSTRAINT `fk_comic_editorial1` FOREIGN KEY (`editorial_id`) REFERENCES `editorial` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comic`
--

LOCK TABLES `comic` WRITE;
/*!40000 ALTER TABLE `comic` DISABLE KEYS */;
INSERT INTO `comic` VALUES (1,'Archivo De Las Tormentas','Hace seis años, un asesino mató al rey Alethi, y ahora está asesinando a los gobernantes de todo Roshar; entre sus principales objetivos es Dalinar. ...',25,'archivo-de-las-tormentas.png',3,10),(2,'Boku No Hero 1º volumen','Se sitúa en un mundo en el cual el 80% de la población mundial ha desarrollado superpoderes. ... Nuestro protagonista, Izuku Midoriya, pertenece a ese 20% de la población que no cuenta con superpodere',20,'bnh.jpg',5,5),(3,'Broly SSJ4','Broly en una mitica transformacion dentro del no canon',40,'broly_ssj4.jpg',6,5),(4,'Cell','Se trata de un bioandroide creado por el Dr. Gero con la intención de vengarse de Goku por haber acabado con el Ejército Red Ribbon.',30,'cell.png',6,5),(5,'La Era Marvel De Los Comics','Fue una época de héroes poderosos, monstruos incomprendidos y complejos villanos. Con la publicación, en noviembre de 1961, del primer número de Los Cuatro Fantásticos, el gigante de los cómics Marvel',20,'era_marvel_comics.png',1,5),(6,'Deku','Protagonista de la serie de heroes my hero academia en una mitica pose',30,'deku.jpg',6,5),(7,'El Caballero Blanco','Cuando El Joker fue un héroe. Es difícil no caer rendido ante una premisa tan sugerente como un Joker convertido en héroe, un Batman venido a medio villano y un guion elaborado por el hombre que está ',35,'el_caballero_blanco.png',2,15),(8,'Goku vs Nappa','Protagonista de la serie de dragon ball en una legendaria pose derrotando a Nappa',50,'goku_vs_nappa.jpg',6,5),(9,'Goku Ultra Instinto Dominado','Figura del anime de dragon ball super en la que estan son goku con su tecnica mas poderosa y una pose legendaria',40,'figura_goku_ultra.jpg',6,5),(10,'Catan','Catan es un juego de mesa para toda la familia que se ha convertido en un fenómeno mundial. ... Se trata de un juego que aúna la estrategia, la astucia y la capacidad para negociar y en el que los jug',20,'catan.png',7,5),(11,'Una Muerte En La Familia','Publicado originalmente en diciembre de 1983. La primera aparición de Jason Todd como Robin. El nuevo compañero de Batman acudirá en su rescate en plena batalla contra el Joker en Guatemala.',33,'muerte_de_la_familia.png',2,1),(12,'Principe payaso del crimen','Conmemora los 80 años transcurridos desde la presentación del Joker, uno de los villanos más célebres de la historia de la cultura pop... ¡El Príncipe del Crimen!',10,'principe_payaso.png',2,0),(13,'La broma asesina','La broma asesina es una historia centrada en el Joker, la antítesis de Batman por definición, y en la relación que éste y Batman han llegado a desarrollar a lo largo de los años.',30,'la_broma_asesina.png',2,10),(14,'Superior Spider-man','El mayor acontecimiento arácnido del año continúa, de la mano de J.J. Abrams (Star Trek, Perdidos), Henry Abrams y Sara Pichelli (Spider-Man, Los 4 Fantásticos). El primer choque con Cadavérico no sale bien',14,'superior_spiderman.png',1,3),(15,'El Guantelete del Infinito','Para Thanos, el Guantelete del Infinito es el Santo Grial, el premio definitivo por su adoración hacia la muerte. Con él, lo controla todo. Liderados por Adam Warlock, los superhéroes de la Tierra representan la última esperanza del Universo.',10,'guantelete_del_infinito.png',1,40),(16,'Ultimate Spider-man','Ultimate Spider-man: Origen es el tomo con el que arranca la reedición de la colección Ultimate Spider-man que Panini está publicado actualmente. Así fue el origen y actualización de Spider-man, si hubiera nacido en el siglo XXI.',15,'spiderman_ultimate.png',1,12),(17,'Goku SSJ3','Es la forma más fuerte de la línea de estados tradicionales del Supersaiyan en el manga original y el anime de Dragon Ball Z',35,'goku_ssj3.jpg',6,5),(18,'Cancion de hielo y fuego','Canción de hielo y fuego es una multipremiada serie de novelas de fantasía heroica escritas por e…/*!40000 ALTER TABLE `comic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `idcompras` int NOT NULL,
  `comic_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`idcompras`),
  KEY `fk_compras_comic1_idx` (`comic_id`),
  KEY `fk_compras_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_compras_comic1` FOREIGN KEY (`comic_id`) REFERENCES `comic` (`id`),
  CONSTRAINT `fk_compras_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (1,1,1),(2,1,2),(3,3,1),(4,5,1);
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editorial`
--

DROP TABLE IF EXISTS `editorial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `editorial` (
  `id` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editorial`
--

LOCK TABLES `editorial` WRITE;
/*!40000 ALTER TABLE `editorial` DISABLE KEYS */;
INSERT INTO `editorial` VALUES (1,'Marvel','Comic'),(2,'DC','Comic'),(3,'Nova','Libro'),(4,'Kōdansha','Manga'),(5,'Shūeisha','Manga'),(6,'Banpresto','Figura'),(7,'Devir','Juego');
/*!40000 ALTER TABLE `editorial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `mail` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','81dc9bdb52d04dc20036dbd8313ed055','miguel','ramirez','admin',NULL,NULL),(2,'admin2','81dc9bdb52d04dc20036dbd8313ed055','miguel','diaz','admin',NULL,NULL),(3,'admin3','81dc9bdb52d04dc20036dbd8313ed055','juan carlos','cubero','admin',NULL,NULL),(4,'miguel','81dc9bdb52d04dc20036dbd8313ed055','miguel angel','ramirez','cliente',NULL,'m@miguel.com'),(5,'cubero','81dc9bdb52d04dc20036dbd8313ed055','juan carlos ','cuberazo','cliente',NULL,'cuberazo@cubeiro.com'),(6,'migue','81dc9bdb52d04dc20036dbd8313ed055','miguel angel','diaz','cliente',NULL,'diaz@miguel.com'),(7,'usuario','f8032d5cae3de20fcec887f395ec9a6a','usuario','usuario','cliente',NULL,'usuario@usuario.com');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valoracion`
--

DROP TABLE IF EXISTS `valoracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `valoracion` (
  `id` int NOT NULL,
  `valoracion` int DEFAULT NULL,
  `comentario` varchar(1000) DEFAULT NULL,
  `usuario_id` int NOT NULL,
  `comics_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_valoraciones_usuario_idx` (`usuario_id`),
  KEY `fk_valoraciones_comics1_idx` (`comics_id`),
  CONSTRAINT `fk_valoraciones_comics1` FOREIGN KEY (`comics_id`) REFERENCES `comic` (`id`),
  CONSTRAINT `fk_valoraciones_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valoracion`
--

LOCK TABLES `valoracion` WRITE;
/*!40000 ALTER TABLE `valoracion` DISABLE KEYS */;
INSERT INTO `valoracion` VALUES (1,4,'muy bueno',1,1),(2,2,'malisimo',2,1),(3,1,'malo',2,1);
/*!40000 ALTER TABLE `valoracion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-09 11:21:42
