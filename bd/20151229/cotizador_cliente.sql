CREATE DATABASE  IF NOT EXISTS `cotizador` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cotizador`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: cotizador
-- ------------------------------------------------------
-- Server version	5.6.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `direccion` text,
  `rut` varchar(45) DEFAULT NULL,
  `razonsocial` text,
  `localidad` varchar(45) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `cel` varchar(20) DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (2,'default','','','',NULL,NULL,NULL,NULL,NULL,NULL),(3,'Hugo Santiago','rfc','hugooluisss@gmail.com','mi direccion','rut','asdfasdf','localidad','9515705278','9515705278','mis observaciones'),(4,'juanito','','juanito@hotmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Diego','','info@ideactiva.com.uy','',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Claudia Castro','','ccastro.brunnen@gmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(8,'Jimena Torrano','','jimena.torrano@gmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(9,'Arnaldo','','arnaldomarquez00@gmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(10,'Estefania Leiva Ibarra','','fefa1308@gmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(11,'Diego','','dm.barcelo@gmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(12,'Marcia','','marcia3089@hotmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(13,'Ximena lopez','','xinlo@hotmail.es','',NULL,NULL,NULL,NULL,NULL,NULL),(14,'Fernanda Bouza','','ferbouza@hotmail.com','',NULL,NULL,NULL,NULL,NULL,NULL),(15,'Javier Mingroni','','mingroni@ilo.org','',NULL,NULL,NULL,NULL,NULL,NULL),(16,'Soy un nuevo cliente','','','','Hola','Soy un nuevo cliente','','','',''),(17,'fdgsdfggfsdg','','','','','','','','','');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-29 10:30:23
