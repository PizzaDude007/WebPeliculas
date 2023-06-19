-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: Eq8Peliculas
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `sinopsis` text,
  `genero` varchar(50) DEFAULT NULL,
  `duracion_minutos` int(11) DEFAULT NULL,
  `lanzamiento` date DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `imagen_nombre` varchar(100) DEFAULT NULL,
  `directorio_pelicula` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` (`id`, `nombre`, `sinopsis`, `genero`, `duracion_minutos`, `lanzamiento`, `director`, `imagen_nombre`, `directorio_pelicula`) VALUES
(1, 'Avengers', 'Avengers es una película de superhéroes que reúne a un grupo de individuos extraordinarios para luchar contra una amenaza global. Cuando Loki, el hermano de Thor, intenta conquistar la Tierra con la ayuda de un ejército alienígena, el director de S.H.I.E.L.D., Nick Fury, recluta a Iron Man, Hulk, Thor, el Capitán América, Viuda Negra y Ojo de Halcón para formar un equipo y detenerlo. A medida que se enfrentan a desafíos personales y se ven obligados a trabajar juntos, los Vengadores deben superar sus diferencias y unir sus habilidades únicas para salvar al mundo de la destrucción total.\r\n\r\nEn esta emocionante película de acción y aventura, los Vengadores se enfrentan a una serie de batallas épicas mientras luchan contra las fuerzas del mal. A medida que la trama se desarrolla, los héroes descubren la importancia de la cooperación y la confianza, aprendiendo a dejar de lado sus egos individuales para convertirse en una fuerza imparable. Con efectos visuales impresionantes, diálogos ingeniosos y un elenco estelar, \"Avengers\" combina la emoción de la lucha contra el crimen con una historia convincente sobre el poder de la amistad y el sacrificio.', 'accion', 143, '2012-05-04', 'Joss Whedon', 'avengers.jpg', '//www.youtube.com/embed/eOrNdBpGMv8'),
(2, 'Star Wars Episodio IV', 'La película \"Star Wars Episodio IV\" nos sumerge en una galaxia muy, muy lejana, donde un joven granjero llamado Luke Skywalker se embarca en una emocionante aventura. Junto a un grupo diverso de aliados, incluyendo al valiente Jedi Obi-Wan Kenobi y al carismático piloto Han Solo, Luke se enfrenta al malvado Imperio Galáctico y su líder, el temible Darth Vader. Con la ayuda de la Fuerza y el apoyo de la princesa Leia, Luke debe aprender a confiar en sí mismo y descubrir su verdadero destino como un héroe destinado a salvar a la galaxia.', 'ciencia ficcion', 121, '1977-05-25', 'George Lucas', 'swiv.jpg', '//www.youtube.com/embed/vZ734NWnAHA'),
(3, 'Inception', 'En \"Inception\", somos llevados a un mundo donde la tecnología permite a las personas entrar en los sueños de otros. Dom Cobb, un talentoso ladrón de ideas, se embarca en su misión más peligrosa: implantar una idea en la mente de alguien en lugar de robarla. Con un equipo de especialistas en su lado, Cobb debe enfrentarse a su propio pasado turbulento mientras se adentra en un mundo de sueños dentro de sueños. A medida que los límites de la realidad se desvanecen, la línea entre lo real y lo imaginario se difumina, y Cobb se enfrenta a peligros inimaginables en su búsqueda por redimirse y volver a su antigua vida.', 'ciencia ficcion', 148, '2010-07-16', 'Christopher Nolan', 'inception.jpg', '//www.youtube.com/embed/YoHD9XEInc0'),
(4, 'X-Men: Apocalypse', 'En \"X-Men: Apocalypse\", la película nos transporta a la década de 1980, donde el mutante más antiguo y poderoso, conocido como Apocalipsis, despierta de su largo letargo. Decidido a llevar a cabo una purga masiva y destruir a la humanidad para establecer un nuevo orden mundial, recluta a un grupo de mutantes poderosos, incluyendo a Magneto, para unirse a su causa. Ante esta amenaza, el Profesor Xavier y un grupo de jóvenes X-Men se unen para detener a Apocalipsis y salvar a la humanidad de la aniquilación total. Con batallas épicas y decisiones difíciles, los X-Men deberán enfrentarse a sus propios demonios internos mientras luchan por proteger el futuro de la especie mutante y la coexistencia pacífica entre mutantes y humanos.', 'accion', 144, '2016-05-27', 'Bryan Singer', 'xmen.jpg', '//www.youtube.com/embed/TBZjPqYty8E'),
(5, 'Los Increibles', 'En \"Los Increíbles\", nos encontramos con una familia de superhéroes retirados que lleva una vida aparentemente normal. Sin embargo, cuando una oportunidad para volver a la acción se presenta, Bob Parr (también conocido como Mr. Increíble) y su esposa Helen (también conocida como Elastigirl) deben unirse nuevamente junto a sus hijos Dash, Violeta y Jack-Jack para enfrentarse a un villano maquiavélico. Con habilidades especiales y una dinámica familiar única, Los Increíbles deben aprender a trabajar en equipo y utilizar sus poderes individuales para salvar el día y proteger a aquellos que aman.', 'animacion', 115, '2004-11-05', 'Brad Bird', 'increibles.jpg', '//www.youtube.com/embed/-UaGUdNJdRQ'),
(6, 'Lucy', 'En \"Lucy\", una joven llamada Lucy se ve atrapada en un oscuro y peligroso mundo cuando se convierte en involuntaria portadora de una nueva droga experimental. A medida que la droga se desencadena en su sistema, Lucy comienza a desarrollar habilidades sobrehumanas y un conocimiento increíblemente avanzado. Con su capacidad cerebral ampliada, se convierte en una fuerza imparable que busca venganza y conocimiento. Mientras lucha por mantener el control de su mente y cuerpo, Lucy se embarca en una misión para desentrañar los secretos del universo y descubrir su verdadero potencial antes de que sea demasiado tarde.', 'thriller', 89, '2014-07-25', 'Luc Besson', 'lucy.jpg', '//www.youtube.com/embed/MVt32qoyhi0');

/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `session_id` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('',1,0);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `session_id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_ibfk_1` (`session_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`session_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'usuario@gmail.com','12345','Pieter y Osvaldo','Equipo 8','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

ALTER TABLE sessions
ADD CONSTRAINT sessions_ibfk_1
FOREIGN KEY (user_id) REFERENCES users(id)
ON DELETE CASCADE ON UPDATE CASCADE;

DELETE FROM sessions;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-17 23:22:38
