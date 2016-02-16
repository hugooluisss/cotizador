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
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `idPedido` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idEstado` smallint(5) unsigned DEFAULT NULL,
  `idCliente` int(10) unsigned DEFAULT NULL,
  `idUsuario` bigint(20) unsigned DEFAULT NULL,
  `registro` date DEFAULT NULL,
  `entrega` timestamp NULL DEFAULT NULL,
  `entregables` varchar(45) DEFAULT NULL,
  `colores` text,
  `observaciones` text,
  `precio` decimal(10,2) DEFAULT '0.00',
  `anticipo` decimal(10,2) DEFAULT '0.00',
  `formaEntrega` varchar(45) DEFAULT NULL,
  `direccionEnvio` text,
  `envoltorio` varchar(45) DEFAULT NULL,
  `posicion` varchar(45) DEFAULT NULL,
  `observacionPosicion` text,
  `fuente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `fk_estado` (`idEstado`),
  KEY `fk_cliente` (`idCliente`),
  KEY `fk_usuario` (`idUsuario`),
  CONSTRAINT `fk2_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_estado` FOREIGN KEY (`idEstado`) REFERENCES `estadopedido` (`idEstado`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (5,2,4,6,'2015-12-27','2015-12-27 06:00:00','entregable','[]','',0.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL),(6,1,3,6,'2015-12-27','2015-12-27 06:00:00','','[]','',0.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL),(7,1,3,6,'2015-12-27','2015-12-27 06:00:00','','{}','',0.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL),(10,1,3,6,'2016-01-07','2015-12-27 06:00:00','[{\"id\":\"10\"},{\"id\":\"13\"}]','{c1:,c2:,c3:,c4:}','',150.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL),(15,1,4,6,'2015-12-28','2015-12-28 06:00:00','[{\"id\":\"4\"},{\"id\":\"6\"},{\"id\":\"8\"}]','{\"c1\":\"\",\"c2\":\"\",\"c3\":\"\",\"c4\":\"\"}','',0.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL),(16,1,5,6,'2015-12-28','2015-12-28 06:00:00','[{\"id\":\"4\"},{\"id\":\"6\"},{\"id\":\"7\"}]','{\"c1\":\"color 1\",\"c2\":\"color 2\",\"c3\":\"color3\",\"c4\":\"color 4\"}','Mis observaciones',200.00,20.00,NULL,NULL,NULL,NULL,NULL,NULL),(17,1,4,6,'2015-12-28','2015-12-28 06:00:00','[{\"id\":\"11\"},{\"id\":\"12\"}]','{\"c1\":\"\",\"c2\":\"\",\"c3\":\"\",\"c4\":\"\"}','',22000.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL),(18,2,10,6,'2015-12-30','2015-12-28 17:30:00','[{\"id\":\"11\"}]','{\"c1\":\"\",\"c2\":\"\",\"c3\":\"\",\"c4\":\"\"}','',130.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL),(19,3,3,6,'2015-12-28','2015-12-28 21:30:00','[{\"id\":\"14\"}]','{\"c1\":\"color 1\",\"c2\":\"color 2\",\"c3\":\"color3\",\"c4\":\"color 4\"}','asdfasdfasdf',1566.60,20.00,NULL,NULL,NULL,NULL,NULL,NULL),(20,1,3,6,'2015-12-31','2015-12-29 06:00:00','[]','{\"c1\":\"\",\"c2\":\"\",\"c3\":\"\",\"c4\":\"\"}','',1500.00,200.00,NULL,NULL,NULL,NULL,NULL,NULL),(21,1,3,6,'2016-01-11','2016-01-08 06:00:00','[{\"id\":\"10\"},{\"id\":\"13\"}]','Colores','Observacion',2000.00,0.00,'Envio a dominicilio','<zxc','Regalo','Espalda','manga derecha','Email');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-12  0:20:00
