-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.28-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyecto001
DROP DATABASE IF EXISTS `proyecto001`;
CREATE DATABASE IF NOT EXISTS `proyecto001` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `proyecto001`;

-- Volcando estructura para tabla proyecto001.comentario
DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Contenido` text,
  `FechaDeComentario` date DEFAULT NULL,
  `TipoDeComentario` tinytext NOT NULL,
  `IdUsuario` int(10) NOT NULL,
  `IdPost` int(10) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK__usuario` (`IdUsuario`),
  KEY `FK__post` (`IdPost`),
  CONSTRAINT `FK__post` FOREIGN KEY (`IdPost`) REFERENCES `post` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla proyecto001.comentario: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` (`Id`, `Contenido`, `FechaDeComentario`, `TipoDeComentario`, `IdUsuario`, `IdPost`) VALUES
	(1, 'No estoy de acuerdo porque', '2021-10-22', 'PUBLICO', 1, 1),
	(2, 'Estoy muy de acuerdo, esto debe ser algo', '2021-10-22', 'PUBLICO', 2, 1),
	(3, 'Cuentos cortos de distinto caracter', '2021-10-22', 'PUBLICO', 4, 5),
	(4, 'Todo organizado detalladamente ', '2021-10-22', 'PUBLICO', 4, 6),
	(5, 'Redaccion de caracter politico', '2021-10-22', 'PUBLICO', 4, 14),
	(6, 'Libro llevado a produccion cinematografica', '2021-10-22', 'PUBLICO', 10, 20),
	(7, 'Lucubraciones de pensamiento abstracto', '2021-10-22', 'PUBLICO', 7, 10),
	(8, 'Aseveraciones de punto inicial a proyecto', '2021-10-22', 'PUBLICO', 12, 8),
	(9, 'Falta de fundamentos literarios a la epoca', '2021-10-22', 'RECHAZO', 5, 17),
	(10, 'Extracciones varias de formulacion de tesis', '2021-10-22', 'PUBLICO', 9, 4),
	(11, 'Argumentos no relevantes', '2021-10-22', 'RECHAZO', 7, 17),
	(12, 'Diagramacion no formal a estandares', '2021-10-22', 'RECHAZO', 5, 7),
	(13, 'No conforme a redaccion APA', '2021-10-22', 'RECHAZO', 9, 7),
	(14, 'Requiere mayor desarrollo del contexto central', '2021-10-24', 'RECHAZO', 5, 17);
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto001.post
DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Titulo` text,
  `Contenido` text,
  `FechaDePublicacion` date DEFAULT NULL,
  `Estado` tinytext,
  `IdAutor` int(10) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_post_usuario` (`IdAutor`),
  CONSTRAINT `FK_post_usuario` FOREIGN KEY (`IdAutor`) REFERENCES `usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla proyecto001.post: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`Id`, `Titulo`, `Contenido`, `FechaDePublicacion`, `Estado`, `IdAutor`) VALUES
	(1, 'Las Arias de America', 'NULL', '2021-10-22', 'PUBLICADO', 1),
	(2, 'Las Voces de Europa', 'NULL', '2021-07-22', 'PUBLICADO', 2),
	(3, 'Luces de Bolivia', NULL, '2021-10-22', 'BORRADOR', 1),
	(4, 'Arte de Potosi', NULL, '2021-10-22', 'BORRADOR', 2),
	(5, 'Fiametta', NULL, '2021-10-22', 'PUBLICADO', 4),
	(6, 'Vida de Dante', NULL, '2021-10-22', 'PUBLICADO', 4),
	(7, 'Decameron', NULL, '2021-10-22', 'BORRADOR', 4),
	(8, 'Aforismos de Hipocrates', NULL, '2021-10-22', 'PUBLICADO', 5),
	(9, 'La Galatea ', NULL, '2021-10-22', 'BORRADOR', 6),
	(10, 'La fuerza de la sangre', NULL, '2021-10-22', 'PUBLICADO', 6),
	(11, 'El verdadero ingles', NULL, '2020-10-22', 'BORRADOR', 7),
	(12, 'Robinson Crusoe', NULL, '2021-10-22', 'BORRADOR', 7),
	(13, 'El talisman', NULL, '2022-10-22', 'ENVIADO', 8),
	(14, 'El oficial aventurero', NULL, '2021-10-22', 'ENVIADO', 8),
	(15, 'La dama del lago', NULL, '2021-10-22', 'ENVIADO', 8),
	(16, 'Retrato de Napoleon', NULL, '2021-10-22', 'PUBLICADO', 8),
	(17, 'El centenario', NULL, NULL, 'ENVIADO', 9),
	(18, 'La ultima hada', NULL, NULL, 'ENVIADO', 9),
	(19, 'El vicario de las ardennas', NULL, NULL, 'ENVIADO', 9),
	(20, 'El conde de Montecristo', NULL, NULL, 'ENVIADO', 10);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto001.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` text NOT NULL,
  `Password` tinytext NOT NULL,
  `Rol` tinytext NOT NULL,
  `FechaRegistro` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla proyecto001.usuario: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`Id`, `Nombre`, `Password`, `Rol`, `FechaRegistro`) VALUES
	(1, 'Luces de Bolivia', 'NULL', 'NULL', '2021-10-21'),
	(2, 'Arte de Potosi', 'NULL', 'NULL', '2021-10-22'),
	(4, 'Juan Boccacio', 'NULL', 'NULL', '2020-10-22'),
	(5, 'Francisco Rabelais', 'NULL', 'NULL', '2020-10-22'),
	(6, 'Miguel de Cervantes', 'NULL', 'NULL', '2021-10-22'),
	(7, 'Daniel Defoe', 'NULL', 'NULL', '2021-10-22'),
	(8, 'Walter Scott', 'NULL', 'NULL', '2021-10-22'),
	(9, 'Honorato de Balzac', 'NULL', 'NULL', '2021-10-22'),
	(10, 'Alejandro Dumas', 'NULL', 'NULL', '2021-10-22'),
	(11, 'Victor Hugo', 'NULL', 'NULL', '2020-10-22'),
	(12, 'Gustavo Flaubert', 'NULL', 'NULL', '2021-10-22');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
