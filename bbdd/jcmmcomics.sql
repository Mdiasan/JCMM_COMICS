
create database jcmm-comics;
use jcmm-comics;
DROP TABLE IF EXISTS `comic`;

CREATE TABLE `comic` (
  `id` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` int DEFAULT NULL,
  `imagen` longblob,
  `editorial_id` int NOT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comic_editorial1_idx` (`editorial_id`),
  CONSTRAINT `fk_comic_editorial1` FOREIGN KEY (`editorial_id`) REFERENCES `editorial` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Dumping data for table `comic`
--

LOCK TABLES `comic` WRITE;

UNLOCK TABLES;

--
-- Table structure for table `editorial`
--

DROP TABLE IF EXISTS `editorial`;

CREATE TABLE `editorial` (
  `id` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Dumping data for table `editorial`
--

LOCK TABLES `editorial` WRITE;

UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;

UNLOCK TABLES;

--
-- Table structure for table `valoracion`
--

DROP TABLE IF EXISTS `valoracion`;

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


LOCK TABLES `valoracion` WRITE;

UNLOCK TABLES;

