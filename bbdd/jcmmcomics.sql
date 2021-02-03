-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: jcmm-comics
-- ------------------------------------------------------
-- Server version	8.0.19

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
CREATE DATABASE IF NOT EXISTS `jcmm-comics` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jcmm-comics`;

DROP TABLE IF EXISTS `comic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comic` (
  `id` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
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
INSERT INTO `comic` VALUES (1,'Archivo De Las Tormentas','Hace seis años, un asesino mató al rey Alethi, y ahora está asesinando a los gobernantes de todo Roshar; entre sus principales objetivos es Dalinar. ...',25,'media/images/archivo-de-las-tormentas.png',3,10),(2,'Boku No Hero 1º volumen','Se sitúa en un mundo en el cual el 80% de la población mundial ha desarrollado superpoderes. ... Nuestro protagonista, Izuku Midoriya, pertenece a ese 20% de la población que no cuenta con superpodere',20,NULL,5,5),(3,'Broly SSJ4','Broly en una mitica transformacion dentro del no canon',40,NULL,6,5),(4,'Cell','Se trata de un bioandroide creado por el Dr. Gero con la intención de vengarse de Goku por haber acabado con el Ejército Red Ribbon.',30,NULL,6,5),(5,'La Era Marvel De Los Comics','Fue una época de héroes poderosos, monstruos incomprendidos y complejos villanos. Con la publicación, en noviembre de 1961, del primer número de Los Cuatro Fantásticos, el gigante de los cómics Marvel',20,NULL,1,5),(6,'Deku','Protagonista de la serie de heroes my hero academia en una mitica pose',30,NULL,6,5),(7,'El Caballero Blanco','Cuando El Joker fue un héroe. Es difícil no caer rendido ante una premisa tan sugerente como un Joker convertido en héroe, un Batman venido a medio villano y un guion elaborado por el hombre que está ',35,NULL,2,15),(8,'Goku vs Nappa','Protagonista de la serie de dragon ball en una legendaria pose derrotando a Nappa',50,NULL,6,5),(9,'Goku Ultra Instinto Dominado','Figura del anime de dragon ball super en la que estan son goku con su tecnica mas poderosa y una pose legendaria',40,NULL,6,5),(10,'Catan','Catan es un juego de mesa para toda la familia que se ha convertido en un fenómeno mundial. ... Se trata de un juego que aúna la estrategia, la astucia y la capacidad para negociar y en el que los jug',20,NULL,7,5);
/*!40000 ALTER TABLE `comic` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','1234','miguel','ramirez','admin',NULL),(2,'admin2','1234','miguel','diaz','admin',NULL),(3,'admin3','1234','juan carlos','cubero','admin',NULL);
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

-- Dump completed on 2021-02-03 10:31:55
