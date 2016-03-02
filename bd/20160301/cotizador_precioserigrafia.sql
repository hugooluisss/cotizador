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
  KEY `limite` (`idLimite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `precioserigrafia`
--

LOCK TABLES `precioserigrafia` WRITE;
/*!40000 ALTER TABLE `precioserigrafia` DISABLE KEYS */;
INSERT INTO `precioserigrafia` VALUES (27,1,1,1,10.00),(27,1,1,2,20.00),(27,1,1,3,30.00),(27,1,1,4,40.00),(27,1,1,5,50.00),(27,1,18,1,2.00),(27,1,26,1,300.00),(27,1,26,2,450.00),(27,1,26,3,650.00),(27,1,26,4,980.00),(27,1,26,5,1500.00),(27,1,27,1,150.00),(27,1,27,2,225.00),(27,1,27,3,325.00),(27,1,27,4,490.00),(27,1,27,5,750.00),(27,1,28,1,82.50),(27,1,28,2,102.00),(27,1,28,3,124.50),(27,1,28,4,150.37),(27,1,28,5,180.12),(27,1,29,1,60.75),(27,1,29,2,77.06),(27,1,29,3,95.81),(27,1,29,4,117.38),(27,1,29,5,142.19),(27,1,30,1,50.00),(27,1,30,2,64.50),(27,1,30,3,81.40),(27,1,30,4,100.00),(27,1,30,5,123.00),(27,1,31,1,39.00),(27,1,31,2,52.00),(27,1,31,3,67.00),(27,1,31,4,84.25),(27,1,31,5,104.08),(27,1,32,1,35.50),(27,1,32,2,47.80),(27,1,32,3,62.50),(27,1,32,4,78.80),(27,1,32,5,97.80),(27,1,33,1,31.75),(27,1,33,2,43.60),(27,1,33,3,57.50),(27,1,33,4,73.25),(27,1,33,5,91.50),(27,1,34,1,28.00),(27,1,34,2,39.50),(27,1,34,3,52.50),(27,1,34,4,67.80),(27,1,34,5,85.00),(27,1,35,1,24.50),(27,1,35,2,35.37),(27,1,35,3,48.00),(27,1,35,4,62.25),(27,1,35,5,79.00),(27,1,36,1,21.60),(27,1,36,2,32.00),(27,1,36,3,44.00),(27,1,36,4,58.00),(27,1,36,5,73.70),(27,1,37,1,18.66),(27,1,37,2,28.66),(27,1,37,3,40.00),(27,1,37,4,53.40),(27,1,37,5,68.60),(27,1,38,1,16.50),(27,1,38,2,33.00),(27,1,38,3,37.30),(27,1,38,4,50.00),(27,1,38,5,64.70),(27,1,39,1,14.50),(27,1,39,2,23.66),(27,1,39,3,34.50),(27,1,39,4,47.00),(27,1,39,5,61.00),(27,1,40,1,12.20),(27,1,40,2,21.20),(27,1,40,3,31.50),(27,1,40,4,43.50),(27,1,40,5,57.10),(27,1,41,1,10.00),(27,1,41,2,17.00),(27,1,41,3,28.60),(27,1,41,4,40.20),(27,1,41,5,53.50),(27,2,1,1,20.00),(27,2,1,2,30.00),(27,2,1,3,40.00),(27,2,1,4,50.00),(27,2,1,5,60.00),(58,1,26,1,450.00),(58,1,26,2,675.00),(58,1,26,3,975.00),(58,1,26,4,1470.00),(58,1,26,5,2250.00),(58,1,27,1,225.00),(58,1,27,2,338.00),(58,1,27,3,488.00),(58,1,27,4,735.00),(58,1,27,5,1125.00),(58,1,28,1,124.00),(58,1,28,2,153.00),(58,1,28,3,187.00),(58,1,28,4,225.00),(58,1,28,5,270.00),(58,1,29,1,91.00),(58,1,29,2,116.00),(58,1,29,3,144.00),(58,1,29,4,176.00),(58,1,29,5,214.00),(58,1,30,1,75.00),(58,1,30,2,97.00),(58,1,30,3,122.00),(58,1,30,4,150.00),(58,1,30,5,185.00),(58,1,31,1,58.50),(58,1,31,2,78.00),(58,1,31,3,100.00),(58,1,31,4,126.50),(58,1,31,5,156.00),(58,1,32,1,53.50),(58,1,32,2,72.00),(58,1,32,3,94.00),(58,1,32,4,118.00),(58,1,32,5,147.00),(58,1,33,1,48.00),(58,1,33,2,65.50),(58,1,33,3,86.00),(58,1,33,4,110.00),(58,1,33,5,137.50),(58,1,34,1,42.00),(58,1,34,2,59.50),(58,1,34,3,79.00),(58,1,34,4,102.00),(58,1,34,5,127.50),(58,1,35,1,37.00),(58,1,35,2,53.00),(58,1,35,3,72.00),(58,1,35,4,93.50),(58,1,35,5,118.00),(58,1,36,1,32.50),(58,1,36,2,48.00),(58,1,36,3,66.00),(58,1,36,4,87.00),(58,1,36,5,110.50),(58,1,37,1,28.00),(58,1,37,2,43.00),(58,1,37,3,60.50),(58,1,37,4,80.00),(58,1,37,5,103.00),(58,1,38,1,25.00),(58,1,38,2,49.50),(58,1,38,3,56.00),(58,1,38,4,75.00),(58,1,38,5,97.00),(58,1,39,1,21.50),(58,1,39,2,35.50),(58,1,39,3,52.00),(58,1,39,4,70.00),(58,1,39,5,91.00),(58,1,40,1,18.50),(58,1,40,2,32.00),(58,1,40,3,47.50),(58,1,40,4,62.50),(58,1,40,5,86.00),(58,1,41,1,15.00),(58,1,41,2,28.00),(58,1,41,3,43.00),(58,1,41,4,60.50),(58,1,41,5,80.00),(59,1,26,1,580.00),(59,1,26,2,870.00),(59,1,26,3,1305.00),(59,1,26,4,1957.00),(59,1,26,5,2500.00),(59,1,27,1,290.00),(59,1,27,2,435.00),(59,1,27,3,653.00),(59,1,27,4,979.00),(59,1,27,5,1250.00),(59,1,28,1,165.00),(59,1,28,2,204.00),(59,1,28,3,250.00),(59,1,28,4,300.00),(59,1,28,5,360.00),(59,1,29,1,122.00),(59,1,29,2,154.00),(59,1,29,3,192.00),(59,1,29,4,235.00),(59,1,29,5,285.00),(59,1,30,1,100.00),(59,1,30,2,129.00),(59,1,30,3,169.00),(59,1,30,4,202.00),(59,1,30,5,247.00),(59,1,31,1,78.00),(59,1,31,2,104.00),(59,1,31,3,134.00),(59,1,31,4,169.00),(59,1,31,5,208.00),(59,1,32,1,72.00),(59,1,32,2,96.00),(59,1,32,3,125.00),(59,1,32,4,158.00),(59,1,32,5,196.00),(59,1,33,1,66.00),(59,1,33,2,88.00),(59,1,33,3,115.00),(59,1,33,4,147.00),(59,1,33,5,183.00),(59,1,34,1,56.00),(59,1,34,2,79.00),(59,1,34,3,105.00),(59,1,34,4,136.00),(59,1,34,5,170.00),(59,1,35,1,50.00),(59,1,35,2,71.00),(59,1,35,3,96.00),(59,1,35,4,125.00),(59,1,35,5,158.00),(59,1,36,1,45.00),(59,1,36,2,65.00),(59,1,36,3,89.00),(59,1,36,4,116.00),(59,1,36,5,148.00),(59,1,37,1,38.00),(59,1,37,2,58.00),(59,1,37,3,80.00),(59,1,37,4,107.00),(59,1,37,5,138.00),(59,1,38,1,33.00),(59,1,38,2,66.00),(59,1,38,3,75.00),(59,1,38,4,100.00),(59,1,38,5,130.00),(59,1,39,1,30.00),(59,1,39,2,48.00),(59,1,39,3,69.00),(59,1,39,4,95.00),(59,1,39,5,122.00),(59,1,40,1,25.00),(59,1,40,2,45.00),(59,1,40,3,65.00),(59,1,40,4,87.00),(59,1,40,5,115.00),(59,1,41,1,20.00),(59,1,41,2,38.00),(59,1,41,3,58.00),(59,1,41,4,80.00),(59,1,41,5,107.00),(60,1,26,1,870.00),(60,1,26,2,1305.00),(60,1,26,3,1957.50),(60,1,26,4,2936.00),(60,1,26,5,4404.00),(60,1,27,1,435.00),(60,1,27,2,652.50),(60,1,27,3,979.00),(60,1,27,4,1468.00),(60,1,27,5,2202.00),(60,1,28,1,247.50),(60,1,28,2,306.00),(60,1,28,3,373.50),(60,1,28,4,451.00),(60,1,28,5,540.50),(60,1,29,1,182.50),(60,1,29,2,231.00),(60,1,29,3,287.50),(60,1,29,4,352.00),(60,1,29,5,426.50),(60,1,30,1,150.00),(60,1,30,2,193.50),(60,1,30,3,253.50),(60,1,30,4,303.00),(60,1,30,5,370.50),(60,1,31,1,117.00),(60,1,31,2,156.00),(60,1,31,3,201.00),(60,1,31,4,253.00),(60,1,31,5,312.50),(60,1,32,1,108.00),(60,1,32,2,145.00),(60,1,32,3,187.50),(60,1,32,4,237.00),(60,1,32,5,294.00),(60,1,33,1,98.50),(60,1,33,2,131.00),(60,1,33,3,173.00),(60,1,33,4,220.00),(60,1,33,5,274.50),(60,1,34,1,84.00),(60,1,34,2,118.50),(60,1,34,3,157.50),(60,1,34,4,204.00),(60,1,34,5,255.00),(60,1,35,1,73.50),(60,1,35,2,106.00),(60,1,35,3,143.50),(60,1,35,4,186.50),(60,1,35,5,236.50),(60,1,36,1,67.50),(60,1,36,2,97.50),(60,1,36,3,133.50),(60,1,36,4,174.00),(60,1,36,5,222.00),(60,1,37,1,56.00),(60,1,37,2,86.00),(60,1,37,3,120.50),(60,1,37,4,160.00),(60,1,37,5,205.50),(60,1,38,1,49.50),(60,1,38,2,99.00),(60,1,38,3,112.50),(60,1,38,4,150.00),(60,1,38,5,195.00),(60,1,39,1,43.00),(60,1,39,2,71.00),(60,1,39,3,103.50),(60,1,39,4,140.00),(60,1,39,5,182.50),(60,1,40,1,37.50),(60,1,40,2,67.50),(60,1,40,3,97.50),(60,1,40,4,130.50),(60,1,40,5,172.50),(60,1,41,1,30.00),(60,1,41,2,56.00),(60,1,41,3,86.00),(60,1,41,4,120.50),(60,1,41,5,160.00),(1508,1,26,1,986.00),(1508,1,26,2,1479.00),(1508,1,26,3,2218.00),(1508,1,26,4,3327.00),(1508,1,26,5,4250.00),(1508,1,27,1,493.00),(1508,1,27,2,739.50),(1508,1,27,3,1110.00),(1508,1,27,4,1665.00),(1508,1,27,5,2125.00),(1508,1,28,1,297.00),(1508,1,28,2,367.00),(1508,1,28,3,448.00),(1508,1,28,4,541.50),(1508,1,28,5,648.50),(1508,1,29,1,219.00),(1508,1,29,2,277.50),(1508,1,29,3,345.00),(1508,1,29,4,422.50),(1508,1,29,5,512.00),(1508,1,30,1,180.00),(1508,1,30,2,232.50),(1508,1,30,3,304.50),(1508,1,30,4,363.50),(1508,1,30,5,445.00),(1508,1,31,1,140.50),(1508,1,31,2,187.50),(1508,1,31,3,242.50),(1508,1,31,4,303.50),(1508,1,31,5,375.00),(1508,1,32,1,129.50),(1508,1,32,2,173.00),(1508,1,32,3,225.00),(1508,1,32,4,284.50),(1508,1,32,5,353.00),(1508,1,33,1,118.00),(1508,1,33,2,157.00),(1508,1,33,3,207.00),(1508,1,33,4,264.00),(1508,1,33,5,329.50),(1508,1,34,1,100.00),(1508,1,34,2,142.50),(1508,1,34,3,189.00),(1508,1,34,4,245.00),(1508,1,34,5,306.00),(1508,1,35,1,88.50),(1508,1,35,2,127.50),(1508,1,35,3,172.50),(1508,1,35,4,224.00),(1508,1,35,5,284.00),(1508,1,36,1,81.00),(1508,1,36,2,117.00),(1508,1,36,3,160.00),(1508,1,36,4,209.00),(1508,1,36,5,266.50),(1508,1,37,1,67.00),(1508,1,37,2,103.00),(1508,1,37,3,144.50),(1508,1,37,4,192.50),(1508,1,37,5,247.00),(1508,1,38,1,59.50),(1508,1,38,2,119.00),(1508,1,38,3,135.00),(1508,1,38,4,180.00),(1508,1,38,5,234.00),(1508,1,39,1,51.60),(1508,1,39,2,85.50),(1508,1,39,3,124.00),(1508,1,39,4,168.50),(1508,1,39,5,219.00),(1508,1,40,1,45.00),(1508,1,40,2,81.00),(1508,1,40,3,117.00),(1508,1,40,4,156.50),(1508,1,40,5,207.00),(1508,1,41,1,36.00),(1508,1,41,2,67.50),(1508,1,41,3,103.00),(1508,1,41,4,144.50),(1508,1,41,5,192.00),(1509,1,26,1,580.00),(1509,1,26,2,870.00),(1509,1,26,3,1305.00),(1509,1,26,4,1957.00),(1509,1,26,5,2500.00),(1509,1,27,1,290.00),(1509,1,27,2,435.00),(1509,1,27,3,653.00),(1509,1,27,4,979.00),(1509,1,27,5,1250.00),(1509,1,28,1,165.00),(1509,1,28,2,204.00),(1509,1,28,3,249.00),(1509,1,28,4,300.50),(1509,1,28,5,360.50),(1509,1,29,1,121.50),(1509,1,29,2,154.00),(1509,1,29,3,191.50),(1509,1,29,4,234.50),(1509,1,29,5,284.50),(1509,1,30,1,100.00),(1509,1,30,2,129.00),(1509,1,30,3,169.00),(1509,1,30,4,202.00),(1509,1,30,5,247.00),(1509,1,31,1,78.00),(1509,1,31,2,104.00),(1509,1,31,3,134.00),(1509,1,31,4,168.50),(1509,1,31,5,208.00),(1509,1,32,1,72.00),(1509,1,32,2,96.00),(1509,1,32,3,125.00),(1509,1,32,4,158.00),(1509,1,32,5,196.00),(1509,1,33,1,65.50),(1509,1,33,2,87.50),(1509,1,33,3,115.00),(1509,1,33,4,146.50),(1509,1,33,5,183.00),(1509,1,34,1,56.00),(1509,1,34,2,79.00),(1509,1,34,3,105.00),(1509,1,34,4,136.00),(1509,1,34,5,170.00),(1509,1,35,1,49.00),(1509,1,35,2,71.00),(1509,1,35,3,95.50),(1509,1,35,4,124.50),(1509,1,35,5,157.50),(1509,1,36,1,45.00),(1509,1,36,2,65.00),(1509,1,36,3,89.00),(1509,1,36,4,116.00),(1509,1,36,5,148.00),(1509,1,37,1,37.50),(1509,1,37,2,57.50),(1509,1,37,3,80.50),(1509,1,37,4,106.50),(1509,1,37,5,137.00),(1509,1,38,1,33.00),(1509,1,38,2,66.00),(1509,1,38,3,75.00),(1509,1,38,4,100.00),(1509,1,38,5,130.00),(1509,1,39,1,29.00),(1509,1,39,2,47.50),(1509,1,39,3,69.00),(1509,1,39,4,93.50),(1509,1,39,5,121.50),(1509,1,40,1,25.00),(1509,1,40,2,45.00),(1509,1,40,3,65.00),(1509,1,40,4,87.00),(1509,1,40,5,115.00),(1509,1,41,1,20.00),(1509,1,41,2,37.50),(1509,1,41,3,57.50),(1509,1,41,4,80.50),(1509,1,41,5,106.50),(1510,1,26,1,870.00),(1510,1,26,2,1305.00),(1510,1,26,3,1957.00),(1510,1,26,4,2936.00),(1510,1,26,5,4404.00),(1510,1,27,1,435.00),(1510,1,27,2,652.00),(1510,1,27,3,979.00),(1510,1,27,4,1468.00),(1510,1,27,5,2202.00),(1510,1,28,1,247.00),(1510,1,28,2,306.00),(1510,1,28,3,373.00),(1510,1,28,4,451.00),(1510,1,28,5,540.00),(1510,1,29,1,182.50),(1510,1,29,2,231.00),(1510,1,29,3,287.50),(1510,1,29,4,352.00),(1510,1,29,5,426.50),(1510,1,30,1,150.00),(1510,1,30,2,193.50),(1510,1,30,3,253.50),(1510,1,30,4,303.00),(1510,1,30,5,370.50),(1510,1,31,1,117.00),(1510,1,31,2,156.00),(1510,1,31,3,201.00),(1510,1,31,4,253.00),(1510,1,31,5,312.50),(1510,1,32,1,108.00),(1510,1,32,2,145.00),(1510,1,32,3,187.50),(1510,1,32,4,237.00),(1510,1,32,5,294.00),(1510,1,33,1,98.50),(1510,1,33,2,131.00),(1510,1,33,3,173.00),(1510,1,33,4,220.00),(1510,1,33,5,274.50),(1510,1,34,1,84.00),(1510,1,34,2,118.50),(1510,1,34,3,157.50),(1510,1,34,4,204.00),(1510,1,34,5,255.00),(1510,1,35,1,73.50),(1510,1,35,2,106.00),(1510,1,35,3,143.50),(1510,1,35,4,186.50),(1510,1,35,5,236.50),(1510,1,36,1,67.50),(1510,1,36,2,97.50),(1510,1,36,3,133.50),(1510,1,36,4,174.00),(1510,1,36,5,222.00),(1510,1,37,1,56.00),(1510,1,37,2,86.00),(1510,1,37,3,120.50),(1510,1,37,4,160.00),(1510,1,37,5,205.50),(1510,1,38,1,49.50),(1510,1,38,2,99.00),(1510,1,38,3,112.50),(1510,1,38,4,150.00),(1510,1,38,5,195.00),(1510,1,39,1,43.00),(1510,1,39,2,71.00),(1510,1,39,3,103.50),(1510,1,39,4,140.00),(1510,1,39,5,182.50),(1510,1,40,1,37.50),(1510,1,40,2,67.50),(1510,1,40,3,97.50),(1510,1,40,4,130.50),(1510,1,40,5,172.50),(1510,1,41,1,30.00),(1510,1,41,2,56.00),(1510,1,41,3,86.00),(1510,1,41,4,120.50),(1510,1,41,5,160.00),(1511,1,26,1,300.00),(1511,1,26,2,450.00),(1511,1,26,3,650.00),(1511,1,26,4,980.00),(1511,1,26,5,1500.00),(1511,1,27,1,150.00),(1511,1,27,2,225.00),(1511,1,27,3,325.00),(1511,1,27,4,490.00),(1511,1,27,5,750.00),(1511,1,28,1,82.50),(1511,1,28,2,102.00),(1511,1,28,3,124.50),(1511,1,28,4,150.50),(1511,1,28,5,180.50),(1511,1,29,1,61.00),(1511,1,29,2,77.50),(1511,1,29,3,96.00),(1511,1,29,4,117.50),(1511,1,29,5,142.00),(1511,1,30,1,50.00),(1511,1,30,2,64.50),(1511,1,30,3,81.50),(1511,1,30,4,100.00),(1511,1,30,5,123.00),(1511,1,31,1,39.00),(1511,1,31,2,52.00),(1511,1,31,3,67.00),(1511,1,31,4,84.50),(1511,1,31,5,104.50),(1511,1,32,1,35.50),(1511,1,32,2,48.00),(1511,1,32,3,62.50),(1511,1,32,4,79.00),(1511,1,32,5,98.00),(1511,1,33,1,32.00),(1511,1,33,2,43.50),(1511,1,33,3,57.50),(1511,1,33,4,73.50),(1511,1,33,5,91.50),(1511,1,34,1,28.00),(1511,1,34,2,39.50),(1511,1,34,3,52.50),(1511,1,34,4,68.00),(1511,1,34,5,85.00),(1511,1,35,1,24.50),(1511,1,35,2,35.70),(1511,1,35,3,48.00),(1511,1,35,4,62.50),(1511,1,35,5,79.00),(1511,1,36,1,21.50),(1511,1,36,2,32.00),(1511,1,36,3,44.00),(1511,1,36,4,58.00),(1511,1,36,5,74.00),(1511,1,37,1,18.50),(1511,1,37,2,28.50),(1511,1,37,3,40.00),(1511,1,37,4,53.50),(1511,1,37,5,68.50),(1511,1,38,1,16.50),(1511,1,38,2,33.00),(1511,1,38,3,37.50),(1511,1,38,4,50.00),(1511,1,38,5,65.00),(1511,1,39,1,14.50),(1511,1,39,2,23.50),(1511,1,39,3,34.50),(1511,1,39,4,46.50),(1511,1,39,5,61.00),(1511,1,40,1,12.50),(1511,1,40,2,21.50),(1511,1,40,3,31.50),(1511,1,40,4,43.50),(1511,1,40,5,57.00),(1511,1,41,1,10.00),(1511,1,41,2,19.00),(1511,1,41,3,28.50),(1511,1,41,4,40.00),(1511,1,41,5,53.50);
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

-- Dump completed on 2016-03-01 22:02:07
