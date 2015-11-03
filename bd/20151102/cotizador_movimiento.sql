CREATE DATABASE  IF NOT EXISTS `cotizador` /*!40100 DEFAULT CHARACTER SET utf8 */;
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
-- Table structure for table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimiento` (
  `idCotizacion` bigint(20) unsigned NOT NULL,
  `mov` int(11) NOT NULL,
  `concepto` text,
  `cantidad` int(10) unsigned DEFAULT NULL,
  `descuento` int(10) unsigned DEFAULT NULL,
  `neto` decimal(10,2) unsigned DEFAULT NULL,
  `total` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`idCotizacion`,`mov`),
  CONSTRAINT `fk_cotizacion` FOREIGN KEY (`idCotizacion`) REFERENCES `cotizacion` (`idCotizacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimiento`
--

LOCK TABLES `movimiento` WRITE;
/*!40000 ALTER TABLE `movimiento` DISABLE KEYS */;
INSERT INTO `movimiento` VALUES (11,1,'DP Posición 1 (Tamaño: Chico; No de colores: 1; P. U.: 2.00)',2,0,4.00,4.00),(11,2,'A3 claro (P. U.: 230.00)',3,0,690.00,690.00),(12,1,'DP Posición 1 (Tamaño: Chico; No de colores: 1; P. U.: 2.00)',2,10,4.00,3.60),(12,2,'Payera 2: Unitalla (2 - 56.80)',2,20,56.80,45.44),(13,1,'Estampado Letras (P. U.: 200.00)',2,2,400.00,392.00),(14,1,'Vinilo Corte normal (20.00 x 80.00 P. U.: 0.10)',1600,0,160.00,160.00),(14,2,'Servicios Express ( P. U.: 100.00)',1,0,100.00,100.00),(14,3,'Entrega a domicilio dentro de la ciudad ( P. U.: 50.00)',1,0,50.00,50.00),(14,4,'Playera 1: Grande (10 - 100.00), Mediana (2 - 20.00)',12,0,120.00,120.00),(14,5,'DP Posición 1 (Tamaño: Chico; No de colores: 2; P. U.: 20.00)',12,0,240.00,240.00);
/*!40000 ALTER TABLE `movimiento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-02  0:34:23
