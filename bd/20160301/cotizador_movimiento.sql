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
  PRIMARY KEY (`idCotizacion`,`mov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimiento`
--

LOCK TABLES `movimiento` WRITE;
/*!40000 ALTER TABLE `movimiento` DISABLE KEYS */;
INSERT INTO `movimiento` VALUES (11,1,'DP Posición 1 (Tamaño: Chico; No de colores: 1; P. U.: 2.00)',2,0,4.00,4.00),(11,2,'A3 claro (P. U.: 230.00)',3,0,690.00,690.00),(15,1,'Payera 2: Unitalla (3 - 85.20)',3,0,85.20,85.20),(15,2,'Estampado Letras (P. U.: 200.00)',2,0,400.00,400.00),(16,1,'Remera Blanca: Grande (10 - 1800.00)',10,0,1800.00,1800.00),(16,2,'A4 fondo claro (P. U.: 330.00)',10,0,3300.00,3300.00),(16,3,'Entrega a domicilio dentro de la ciudad ( P. U.: 50.00)',1,0,50.00,50.00),(17,1,'Remera Blanca Speedway: Talle L (1 - 120.00)',1,0,120.00,120.00),(17,2,'A3 Fondo claro (P. U.: 530.00)',1,0,530.00,530.00),(17,3,'Entrega a Domicilio / Promoción Miércoles o Viernes ( P. U.: 60.00)',1,0,60.00,60.00),(18,1,'B. Canguro Negro: Talle 2 (1 - 452.00)',1,0,452.00,452.00),(19,1,'#Polo Unisex A. Marino Speedway: Talle S (2 - 488.00), Talle M (2 - 488.00)',4,0,976.00,976.00),(19,2,'#Polo Unisex Blanca Speedway: Talle S (2 - 448.00), Talle M (2 - 448.00)',4,0,896.00,896.00),(19,3,'DP Posición 3 (Tamaño: Tamaño único; No de colores: 2; P. U.: 204.00)',8,0,1632.00,1632.00),(19,4,'DP Posición 1 (Tamaño: Tamaño único; No de colores: 1; P. U.: 82.50)',8,0,660.00,660.00),(20,1,'Rem. Niño Naranja A.Embroidery: Talle 8 (12 - 1416.00)',12,0,1416.00,1416.00),(20,2,'A5 Fondo Oscuro x Mayor (P. U.: 155.00)',12,0,1860.00,1860.00),(21,1,'DP Posición 1 (Tamaño: Tamaño único; No de colores: 1; P. U.: 60.75)',10,0,607.50,607.50),(21,2,'# Rem.Unisex Beige Speedway: Talle XS (40 - 5760.00)',40,0,5760.00,5760.00),(22,1,'undefined: Talle S (30 - 6720.00)',30,0,6720.00,6720.00),(22,2,'DP Posición 3 (Tamaño: Tamaño único; No de colores: 1; P. U.: 78.00)',30,0,2340.00,2340.00),(23,1,'undefined: Talle S (12 - 2688.00)',12,0,2688.00,2688.00),(23,2,'DP Posición 1 (Tamaño: Tamaño único; No de colores: 1; P. U.: 39.00)',25,0,975.00,975.00),(24,1,'undefined: Talle S (6 - 720.00)',6,0,720.00,720.00),(24,2,'DP Posición 1 (Tamaño: Tamaño único; No de colores: 1; P. U.: 82.50)',6,0,495.00,495.00);
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

-- Dump completed on 2016-03-01 22:02:06
