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
-- Table structure for table `otros`
--

DROP TABLE IF EXISTS `otros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otros` (
  `idItem` bigint(20) unsigned NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otros`
--

LOCK TABLES `otros` WRITE;
/*!40000 ALTER TABLE `otros` DISABLE KEYS */;
INSERT INTO `otros` VALUES (36,'Envío en 24 horas',150.00),(37,'Montevideo',80.00),(40,'Es un servicio express en 3 dias',130.00),(52,'Montevideo',125.00),(53,'Costa de Oro',180.00),(54,'Montevideo, zona 1',60.00),(55,'Envío al interior por Encomienda',80.00),(56,'Diseño Grafico',100.00),(57,'Diseño Grafico',250.00),(1523,'Montevideo, zona 2',100.00),(1524,'Montevideo, zona 3',150.00),(1525,'Envío al interior por Encomienda',80.00),(1526,'Bolsa de Papel con Moña',35.00),(1527,'Sensillo',100.00),(1528,'Tiempo de Diseño',250.00),(1529,'Solo para serigrafia',250.00),(1541,'Planchado, doblado y envolsado',5.00);
/*!40000 ALTER TABLE `otros` ENABLE KEYS */;
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
