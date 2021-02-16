-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: jcmm-comics
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
CREATE DATABASE IF NOT EXISTS `jcmm-comics` DEAFULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
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
INSERT INTO `comic` VALUES (1,'Archivo De Las Tormentas','Hace seis años, un asesino mató al rey Alethi, y ahora está asesinando a los gobernantes de todo Roshar; entre sus principales objetivos es Dalinar. ...',25,'archivo-de-las-tormentas.jpg',3,10),(2,'Boku No Hero 1 volumen','Se sitúa en un mundo en el cual el 80% de la población mundial ha desarrollado superpoderes. ... Nuestro protagonista, Izuku Midoriya, pertenece a ese 20% de la población que no cuenta con superpodere',20,'bnh.jpg',5,5),(3,'Broly SSJ4','Broly en una mitica transformacion dentro del no canon',40,'broly_ssj4.jpg',6,5),(4,'Cell','Se trata de un bioandroide creado por el Dr. Gero con la intención de vengarse de Goku por haber acabado con el Ejército Red Ribbon.',30,'cell.png',6,5),(5,'La Era Marvel De Los Comics','Fue una época de héroes poderosos, monstruos incomprendidos y complejos villanos. Con la publicación, en noviembre de 1961, del primer número de Los Cuatro Fantásticos, el gigante de los cómics Marvel',20,'era_marvel_comics.jpg',1,5),(6,'Deku','Protagonista de la serie de heroes my hero academia en una mitica pose',30,'deku.jpg',6,5),(7,'El Caballero Blanco','Cuando El Joker fue un héroe. Es difícil no caer rendido ante una premisa tan sugerente como un Joker convertido en héroe, un Batman venido a medio villano y un guion elaborado por el hombre que está ',35,'el_caballero_blanco.png',2,15),(8,'Goku vs Nappa','Protagonista de la serie de dragon ball en una legendaria pose derrotando a Nappa',50,'goku_vs_nappa.jpg',6,5),(9,'Goku Ultra Instinto Dominado','Figura del anime de dragon ball super en la que estan son goku con su tecnica mas poderosa y una pose legendaria',40,'figura_goku_ultra.jpg',6,5),(10,'Catan','Catan es un juego de mesa para toda la familia que se ha convertido en un fenómeno mundial. ... Se trata de un juego que aúna la estrategia, la astucia y la capacidad para negociar y en el que los jug',20,'catan.png',7,5),(11,'Una Muerte En La Familia','Publicado originalmente en diciembre de 1983. La primera aparición de Jason Todd como Robin. El nuevo compañero de Batman acudirá en su rescate en plena batalla contra el Joker en Guatemala.',33,'muerte_de_la_familia.png',2,1),(12,'Principe payaso del crimen','Conmemora los 80 años transcurridos desde la presentación del Joker, uno de los villanos más célebres de la historia de la cultura pop... ¡El Príncipe del Crimen!',10,'principe_payaso.png',2,0),(13,'La broma asesina','La broma asesina es una historia centrada en el Joker, la antítesis de Batman por definición, y en la relación que éste y Batman han llegado a desarrollar a lo largo de los años.',30,'la_broma_asesina.png',2,10),(14,'Superior Spider-man','El mayor acontecimiento arácnido del año continúa, de la mano de J.J. Abrams (Star Trek, Perdidos), Henry Abrams y Sara Pichelli (Spider-Man, Los 4 Fantásticos). El primer choque con Cadavérico no sale bien',14,'superior_spiderman.png',1,3),(15,'El Guantelete del Infinito','Para Thanos, el Guantelete del Infinito es el Santo Grial, el premio definitivo por su adoración hacia la muerte. Con él, lo controla todo. Liderados por Adam Warlock, los superhéroes de la Tierra representan la última esperanza del Universo.',10,'guantelete_del_infinito.png',1,40),(16,'Ultimate Spider-man','Ultimate Spider-man: Origen es el tomo con el que arranca la reedición de la colección Ultimate Spider-man que Panini está publicado actualmente. Así fue el origen y actualización de Spider-man, si hubiera nacido en el siglo XXI.',15,'spiderman_ultimate.png',1,12),(17,'Goku SSJ3','Es la forma más fuerte de la línea de estados tradicionales del Supersaiyan en el manga original y el anime de Dragon Ball Z',35,'goku_ssj3.jpg',6,5),(18,'Cancion de hielo y fuego','Canción de hielo y fuego es una multipremiada serie de novelas de fantasía heroica escritas por el novelista y guionista estadounidense George R. R. Martin. Martin comenzó a escribir la serie en 1993 y el primer tomo se publicó en 1996.',25,'Juego_de_tronos.jpg',3,16),(19,'Ataque a los titanes 3 volumen','La trama del manga gira en torno a Eren Jaeger y sus amigos de la infancia, Armin Arlert y Mikasa Ackerman, en un mundo donde la población humana vive concentrada dentro de tres grandes muros para protegerse de unos seres gigantescos llamados Titanes.',25,'manga_snk.jpg',4,22),(20,'Ataque a los titanes 1 volumen','La raza humana, antaño dueña del mundo, se enfrenta a la extinción a manos de los titanes, gigantescos monstruos de inteligencia limitada que cazan y devoran personas por diversión.',25,'titanes.png',4,19),(21,'Boku No Hero 26 volumen','Estamos en un mundo donde abundan los superhéroes (y los supervillanos). Los mejores humanos son entrenados en la Academia de Héroes para optimizar sus poderes. Entre la minoría normal, sin poder alguno, aparece Izuku Midoriya, dispuesto a ser una excepción y formarse en la Academia para convertirse en un héroe.',10,'volumen_26_bnh.jpg',5,12),(22,'Civil War','El conflicto entre libertad y seguridad es un tema subyacente en la línea de la historia, con eventos y discusiones de la vida real, como el aumento de la vigilancia de los ciudadanos por parte del gobierno de los Estados Unidos, que sirve como telón de fondo para los eventos en Civil War.',25,'civil-war.png',1,8),(23,'DC Eased','DCeased es el nombre del nuevo evento de DC Comics que funciona fuera de su continuidad oficial y que plantea un escenario apocalíptico que pone en peligro a toda la existencia.',30,'dc-eased.jpg',2,16),(24,'Dragon Ball Super 1 volumen','El Dios de la Destrucción Beerus ha despertado, y prende una búsqueda para encontrar el Super Saiyan Dios, encontrándose así a Goku y sus amigos. Este obtendrá el poder de los dioses, llegando a nuevas transformaciones, y junto a Vegeta se irán a entrenar con Whis, donde descubrirán que hay más de un universo, y que participarán en un torneo entre dos de ellos.',10,'dragon-ball-super-1.jpg',5,20),(25,'One Punch Man 19 volumen','Saitama, el protagonista, es un poderoso superhéroe que derrota fácilmente a los monstruos u otros villanos con un único golpe. Debido a esto Saitama ha encontrado aburrida su fuerza y siempre está tratando de encontrar rivales más poderosos que le puedan igualar.',15,'one-punch-man-19.jpg',5,12),(26,'Capitan America El Soldado De Invierno','Con esta historia los autores traen de regreso a uno de los personajes más emblemáticos de la mitología del Capitán América. Sin embargo, no regresará como esperamos, la trama se tornará oscura y cruel con consecuencias que afectaran la vida de Steve Rogers permanentemente.',25,'soldado-de-invierno.jpg',1,16),(27,'The Flash 1 volumen','posee una rapidez sobrehumana, la cual incluye la habilidad de correr a gran velocidad, reflejos sobrehumanos y la capacidad de violar algunas leyes de la física.',24,'The_Flash_Vol_4_1.jpg',2,12),(28,'Aquaman','Usualmente este personaje se caracteriza por ser un híbrido entre humano y atlante, dándole la capacidad de comunicarse con las criaturas marinas, respirar bajo el agua y nadar a velocidades asombrosas debido a su procedencia atlante.',30,'aquaman.jpg',2,13),(29,'Daredevil Back In Black','Nueva York ha caído en manos de Wilson Fisk, el cabecilla del crimen: ¡el adversario más grande y letal de Daredevil es ahora el alcalde recién elegido de la ciudad! Y el escenario está listo para su enfrentamiento más increíble hasta ahora. Matt Murdock tiene la ley y sus increíbles habilidades en su arsenal, pero Fisk tiene una ciudad entera de su lado. Mientras el alcalde declara que Daredevil Public Enemy No. 1, Matt Murdock recibe la oferta más increíble de su carrera legal.',27,'daredevil-600.jpg',1,15),(30,'Dragon Ball Super 5 volumen','¡La aventura de Goku del manga clásico superventas Dragon Ball continúa en esta nueva serie escrita por el mismo Akira Toriyama!',10,'dragon-ball-5.jpg',5,21),(31,'Hulk Last Call','¡La celebración a la que nunca pensaste que asistirías! La colección de Hulk cumple un centenar de entregas en nuestro país y lo celebramos con una historia especial, a cargo de Peter David y Dale Keown, uno de los mejores equipos creativos de la historia del Piel Verde.',25,'hulk-last-call.jpg',1,13),(32,'Linterna Verde Renacimiento','La historia cuenta el regreso de Hal Jordan del Mundo de los Muertos y el renacer de los Green Lantern Corps como el Cuerpo Espacial de vigilantes intergalácticos por excelencia de la editorial.',24,'linterna-verde-renacimiento.jpg',2,17),(33,'Los Jardines de la Luna','La novela detalla las diversas luchas por el poder en una región intercontinental dominada por el imperio de Malazan. Es notable por el uso de la magia y su estructura inusual en la trama. Los jardines de la Luna se centra en la campaña imperial para conquistar la ciudad de Darujhistan en el continente de Genabackis.',16,'los-jardines-de-la-luna.jpg',3,18),(34,'Marvel Avengers Iron Man','Iron Man es uno de los grandes superhéroes de Marvel Comics. Aquí te contamos todo lo que necesitas saber sobre el Vengador Dorado, Tony Stark: desde cómo fue creado y por quién hasta su evolución en los últimos 50 años.',19,'Marvel-Avengers-Iron-Man.jpg',1,14),(35,'Nacidos de la bruma','La trama del libro trata sobre una pequeña banda de ladrones que desarrolla un plan para robarle un valioso tesoro a un dictador inmortal que ha vivido por más de mil años usando una magia conocida como Alomancia.',21,'nacidos.png',3,12),(36,'Naruto 7 volumen','En lo profundo del Bosque de la Muerte, el sitio de la segunda etapa de los exámenes de selección para Ninja oficial, Naruto, Sasuke y Sakura todavía están tambaleándose por el ataque de Orochimaru y ahora deben luchar contra los esbirros de ese monstruo implacable, el misterioso Sound Ninja.',12,'naruto.jpg',5,13),(37,'One Piece 1 volumen','3 años antes de la era de los piratas, el futuro rey de los piratas Gol D Roger y Shiki pelearon en una batalla conocida como batalla de la guerra de ED, ganada por Gol D Roger y su tripulación ayudados por una misteriosa tormenta, causando que por culpa de un accidente Shiki no pudiera seguir peleando,2 años más tarde los piratas de Roger conquistan el Grand Line y Roger recibe el título de rey de los piratas.',18,'one-piece-1.jpg',5,15),(38,'Ritmo de la guerra','La esperada continuación de Juramentada. Brandon Sanderson, en la cima de su carrera. Tras forjar una coalición de resistencia humana contra la invasión enemiga, Dalinar Kholin y sus Caballeros Radiantes llevan un año librando una guerra brutal. Ningún bando tiene ventaja. Mientras los nuevos descubrimientos tecnológicos cambian la contienda, el enemigo prepara una operación peligrosa.',19,'Ritmo-de-la-guerra.jpg',3,17),(39,'Wonder Woman 7 volumen','Darkseid está hambriento de poder. El depuesto señor del terror y de Apokolips está impaciente por recuperar su trono de las fuerzas bélicas que ahora gobiernan su mundo… Pero después de todo lo que ha pasado recientemente, aún no posee el poder suficiente para doblegar una vez más a su planeta de origen.',27,'wonder-woman.jpg',2,32),(40,'Vientos de invierno','Vientos de Invierno (título original en inglés: The Winds of Winter) será la sexta de la serie de siete novelas previstas en la serie de fantasía épica Canción de Hielo y Fuego del autor estadounidense George R. R. Martin. El libro será la continuación temporal de Festín de Cuervos y Danza de Dragones y seguirá con el último libro de la serie, Sueño de Primavera.',28,'vientos-de-invierno.jpg',3,27),(41,'Arkham Horror','En Arkham Horror la ciudad está siendo invadida por fuerzas sobrenaturales y monstruos, los portales a otros mundos se abren y un temible primigenio trata de entrar en este mundo. Los jugadores son un grupo de investigadores que tratan de detener el fin del mundo en este gran juego de aventuras y terror.',25,'arkham-horror.jpg',7,14),(42,'Blokus','Blokus es un juego de mesa de estrategia abstracto, para dos o hasta cuatro jugadores, inventado por Bernard Tavitian, y publicado por primera vez en el 2002 por Sekkoïa, una compañía francesa. Ha recibido numerosos premios alrededor del mundo. Fue adquirido en el 2009 por Mattel.',16,'blokus.jpg',7,6);
/*!40000 ALTER TABLE `comic` ENABLE KEYS */;
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

-- Dump completed on 2021-02-16 12:57:09
