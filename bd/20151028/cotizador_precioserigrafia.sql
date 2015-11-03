CREATE DATABASE  IF NOT EXISTS `cotizador` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cotizador`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: localhost    Database: cotizador
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `precioserigrafia`
--

DROP TABLE IF EXISTS `precioserigrafia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `precioserigrafia` (
  `idItem` bigint(20) unsigned NOT NULL,
  `idTamano` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `idLimite` int(10) unsigned NOT NULL DEFAULT '0',
  `colores` smallint(5) unsigned NOT NULL DEFAULT '0',
  `precio` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`idItem`,`idTamano`,`idLimite`,`colores`),
  KEY `tamanio` (`idTamano`),
  KEY `colors` (`colores`),
  KEY `limite` (`idLimite`),
  CONSTRAINT `fk_limite` FOREIGN KEY (`idLimite`) REFERENCES `limite` (`idLimite`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_serig` FOREIGN KEY (`idItem`) REFERENCES `serigrafia` (`idItem`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tamanio` FOREIGN KEY (`idTamano`) REFERENCES `tamano` (`idTamano`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `precioserigrafia`
--

LOCK TABLES `precioserigrafia` WRITE;
/*!40000 ALTER TABLE `precioserigrafia` DISABLE KEYS */;
INSERT INTO `precioserigrafia` VALUES (27,1,1,1,22.51),(27,1,1,2,20.00),(27,1,2,1,12.00),(27,1,2,2,111.00),(27,1,4,1,27.50),(27,1,8,1,70.00),(27,2,1,1,26.00),(27,2,1,2,18.20),(27,2,1,4,20.00),(27,2,2,1,13.00),(27,2,2,2,126.89),(27,2,8,1,75.00);
/*!40000 ALTER TABLE `precioserigrafia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-28 13:03:59
