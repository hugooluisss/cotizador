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
-- Table structure for table `formasPago`
--

DROP TABLE IF EXISTS `formasPago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formasPago` (
  `idPedido` bigint(20) unsigned NOT NULL,
  `campo` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  KEY `fk_pedidoFormaPago` (`idPedido`),
  CONSTRAINT `fk_formaPagoPedido` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formasPago`
--

LOCK TABLES `formasPago` WRITE;
/*!40000 ALTER TABLE `formasPago` DISABLE KEYS */;
INSERT INTO `formasPago` VALUES (21,'Efectivo','on'),(21,'Debito','on'),(21,'Giro','asdf'),(21,'Cheque','asdf'),(21,'Credito','on'),(22,'Efectivo','on'),(22,'Debito',''),(22,'Giro',''),(22,'Cheque',''),(22,'Credito',''),(10,'Efectivo','on'),(10,'Debito','on'),(10,'Giro',''),(10,'Cheque',''),(10,'Credito','on'),(24,'Efectivo',''),(24,'Debito','on'),(24,'Giro',''),(24,'Cheque',''),(24,'Credito',''),(23,'Efectivo','on'),(23,'Debito',''),(23,'Giro',''),(23,'Cheque',''),(23,'Credito','');
/*!40000 ALTER TABLE `formasPago` ENABLE KEYS */;
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
