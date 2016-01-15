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
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `idItem` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idTipo` tinyint(3) unsigned DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idItem`),
  KEY `tipoItem` (`idTipo`),
  CONSTRAINT `idTipo-tipoItem` FOREIGN KEY (`idTipo`) REFERENCES `tipoItem` (`idTipo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1553 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (27,2,'Posición 1'),(29,3,'A4 Fondo claro'),(30,3,'A4 Fondo oscuro'),(31,4,'Termotransferible Blanco'),(34,5,'Servicios Express'),(36,5,'Envío Express 24hs'),(37,5,'Entrega a domicilio / Zona 1'),(38,3,'A3 Fondo claro'),(41,6,'Números Grandes por Mayor'),(42,6,'Nombres Grandes por Mayor'),(47,3,'A3 Fondo Oscuro'),(48,3,'A5 Fondo Claro'),(49,3,'A5 Fondo Oscuro'),(50,6,'Número Grande por Menor'),(51,6,'Nombre Grande por Menor'),(52,5,'Entrega a domicilio / Zona 2'),(53,5,'Entrega a domicilio / Zona 3'),(54,5,'Entrega a Domicilio / Promoción Martes o Jueves / Zona 1'),(58,2,'Posición 2'),(59,2,'Posición 3'),(60,2,'Posición 4'),(1298,1,'Remera Unisex Blanco'),(1299,1,'Remera Unisex Negro'),(1300,1,'Remera Unisex Gris Claro'),(1301,1,'Remera Unisex Gris Oscuro'),(1302,1,'Remera Unisex Beige'),(1303,1,'Remera Unisex Azul Francia'),(1304,1,'Remera Unisex Azul Marino'),(1305,1,'Remera Unisex Azul Piedra'),(1306,1,'Remera Unisex Celeste'),(1307,1,'Remera Unisex Bordo'),(1308,1,'Remera Unisex Rojo'),(1309,1,'Remera Unisex Naranja'),(1310,1,'Remera Unisex Amarillo'),(1311,1,'Remera Unisex Verde Ingles'),(1312,1,'Remera Unisex Verde Benetton'),(1313,1,'Remera Unisex Verde Manzana'),(1314,1,'Remera Unisex Verde Militar'),(1315,1,'Remera Unisex V Blanca'),(1316,1,'Remera  Unisex V Negra'),(1317,1,'Remera Unisex V Gris Claro'),(1318,1,'Remera Unisex V Uva'),(1319,1,'Remera Unisex V Azul Francia'),(1320,1,'Remera Unisex V Azul Marino'),(1321,1,'Remera Dama Blanco'),(1322,1,'Remera Dama Negra'),(1323,1,'Remera Dama Verde Manzana'),(1324,1,'Remera Dama V Blanca'),(1325,1,'Remera Dama V Negra'),(1326,1,'Remera Dama V Violeta'),(1327,1,'Remera Dama V Fucsia'),(1328,1,'Remera Dama V Turquesa'),(1329,1,'Polo Unisex Blanca'),(1330,1,'Polo Unisex Negra'),(1331,1,'Polo Unisex Gris Claro'),(1332,1,'Polo Unisex Azul Marino'),(1333,1,'Polo Unisex Rojo'),(1334,1,'Polo Dama Blanca'),(1335,1,'Polo Dama Negra'),(1336,1,'Polo Dama Roja'),(1337,1,'Polo Dama Violeta'),(1338,1,'Remera Dry Blanco'),(1339,1,'Remera Dry Negro'),(1340,1,'Remera Dry Azul Francia'),(1341,1,'Remera Dry Rojo'),(1342,1,'Remera Dry Naranja'),(1343,1,'Remera Dry Amarillo'),(1344,1,'Remera Dry Verde Manzana'),(1345,1,'Musculosa Unisex Blanco'),(1346,1,'Musculosa Unisex Negro'),(1347,1,'Musculosa Dama Blanco'),(1348,1,'Musculosa Dama Negro'),(1349,1,'Remera Niño Blanco'),(1350,1,'Remera Niño Negro'),(1351,1,'Remera Niño Azul Francia'),(1352,1,'Remera Niño Azul Marino'),(1353,1,'Remera Niño Rojo'),(1354,1,'Remera Niño Amarillo'),(1355,1,'Remera Niño Verde Ingles'),(1356,1,'Remera Niño Violeta'),(1357,1,'Remera Niño Naranja'),(1358,1,'Remera Dry Niño Blanco'),(1359,1,'Polo Niño Blanco'),(1360,1,'Polo Niño Negro'),(1361,1,'Polo Niño Azul Marino'),(1362,1,'Remera Unisex Blanco'),(1363,1,'Remera Unisex Negro'),(1364,1,'Remera Unisex Gris Claro'),(1365,1,'Remera Unisex Gris Oscuro'),(1366,1,'Remera Unisex Beige'),(1367,1,'Remera Unisex Arena'),(1368,1,'Remera Unisex Azul Francia'),(1369,1,'Remera Unisex Azul Marino'),(1370,1,'Remera Unisex Turquesa'),(1371,1,'Remera Unisex Celeste'),(1372,1,'Remera Unisex Rojo'),(1373,1,'Remera Unisex Naranja'),(1374,1,'Remera Unisex Amarillo'),(1375,1,'Remera Unisex Verde Italia'),(1376,1,'Remera Unisex Verde Manzana'),(1377,1,'Remera Unisex Violeta'),(1378,1,'Remera Dama Blanco'),(1379,1,'Remera Dama Negra'),(1380,1,'Remera Dama Roja'),(1381,1,'Remera Dama Turquesa'),(1382,1,'Remera Dama Fucsia'),(1383,1,'Remera Dama Violeta'),(1384,1,'Sudadera Unisex Negra'),(1385,1,'Sudadera Unisex Blanca'),(1386,1,'Sudadera Unisex Azul Marino'),(1387,1,'Sudadera Dama Negra'),(1388,1,'Sudadera Dama Blanca'),(1389,1,'Sudadera Dama Rojo'),(1390,1,'Polo Unisex Blanca'),(1391,1,'Polo Unisex Negra'),(1392,1,'Polo Unisex Gris Claro'),(1393,1,'Polo Unisex Azul Marino'),(1394,1,'Polo Unisex Azul Francia'),(1395,1,'Polo Unisex Rojo'),(1396,1,'Polo Unisex Verde Italia'),(1397,1,'Polo Unisex Naranja'),(1398,1,'Polo Unisex Beige'),(1399,1,'Polo Unisex Celeste'),(1400,1,'Polo Dama Blanco'),(1401,1,'Polo Dama Negro'),(1402,1,'Polo Dama Roja'),(1403,1,'Polo Dama Turquesa'),(1404,1,'Polo Dama Azul Marino'),(1405,1,'Remera Bebé Negra'),(1406,1,'Remera Bebé Blanca'),(1407,1,'Remera Bebé Celeste'),(1408,1,'Remera Bebé Roja'),(1409,1,'Remera Bebé Rosada'),(1410,1,'Remera Bebé Fucsia'),(1411,1,'Remera Bebé Amarilla'),(1412,1,'Remera Unisex Manga Larga Negra'),(1413,1,'Remera Unisex Manga Larga Blanca'),(1414,1,'Remera Unisex Manga Larga Roja'),(1415,1,'Remera Unisex Manga Larga Azul Marino'),(1416,1,'Buzo Felpa Azul Marino'),(1417,1,'Buzo Felpa Gris Claro'),(1418,1,'Buzo Canguro Negro'),(1419,1,'Buzo Canguro Azul Marino'),(1420,1,'Buzo Canguro Azul Francia'),(1421,1,'Buzo Canguro Rojo'),(1422,1,'Buzo Canguro Gris Claro'),(1423,1,'Campera Canguro Negro'),(1424,1,'Campera Canguro Azul Francia'),(1425,1,'Remera Dry Unisex Blanco'),(1426,1,'Remera Dry Unisex Negro'),(1427,1,'Remera Dry Unisex Azul Marino'),(1428,1,'Remera Dry Unisex A. Francia'),(1429,1,'Remera Dry Unisex Naranja'),(1430,1,'Remera Dry Unisex Verde Manzana'),(1431,1,'Remera Dry Dama Blanco'),(1432,1,'Remera Dry Dama Negro'),(1433,1,'Remera Dry Dama Azul Marino'),(1434,1,'Remera Dry Dama Violeta'),(1435,1,'Remera Dry Dama Fucsia'),(1436,1,'Remera Dry Dama Naranja fluo'),(1437,1,'Remera Dry Dama Verde Fluo'),(1438,1,'Remera Dry Niño Blanco'),(1439,1,'Remera Dry Niño Negro'),(1440,1,'Remera Dry Niño Verde Manzana'),(1441,1,'Remera Niño Negro'),(1442,1,'Remera Niño Blanco'),(1443,1,'Remera Niño A. Marino'),(1444,1,'Remera Niño A. Francia'),(1445,1,'Remera Niño V. Ingles'),(1446,1,'Remera Niño V. Manzana'),(1447,1,'Remera Niño Rojo'),(1448,1,'Remera Niño Naranja'),(1449,1,'Remera Niño Amarillo'),(1450,1,'Remera Niño Caleste'),(1451,1,'Remera Niño Gris Claro'),(1452,1,'Remera Dama Negra'),(1453,1,'Remera Dama Blanca'),(1454,1,'Rem. Dama Fucsia'),(1455,1,'Rem. Dama Gris Clara'),(1456,1,'Rem. Dama A. Piedra'),(1457,1,'Rem. Dama A. Marino'),(1458,1,'Remera Dama V Blanca'),(1459,1,'Remera Dama V Negra'),(1460,1,'Remera Dama V Gris Clara'),(1461,1,'Remera Dama V Fucsia'),(1462,1,'Remera Dama V Azul Piedra'),(1463,1,'Remera Unisex V Negra'),(1464,1,'Remera Unisex V Blanca'),(1465,1,'Remera Unisex V Verde'),(1466,1,'Remera Unisex V Azul Francia'),(1467,1,'Remera Unisex V Azul Marino'),(1468,1,'Remera Unisex V Marròn'),(1469,1,'Body Bebé Blanco'),(1470,1,'Delantal Negro'),(1471,1,'Delantal Blanco'),(1472,1,'Delantal Rojo'),(1473,1,'Delantal Azul Francia'),(1474,1,'Gorro trucker Negro y Blanco'),(1475,1,'Gorro Trucker Comb. Rojo y B.'),(1476,1,'Gorro Trucker Comb. Azul F.y B.'),(1477,1,'Gorro Trucker Comb. Azul M.y B.'),(1478,1,'Gorro Trucker Comb. Verde y B.'),(1479,1,'Gorro Trucker Comb. Azul y Rojo'),(1480,1,'Gorro Classic Negro'),(1481,1,'Gorro Classic Blanco'),(1482,1,'Gorro Classic Verde Ingles'),(1483,1,'Gorro Classic Azul Marino'),(1484,1,'Gorro Classic Azul Francia'),(1485,1,'Gorro Classic Amarillo'),(1486,1,'Gorro Classic Naranja'),(1487,1,'Gorro Classic Gris claro'),(1488,1,'Gorro Premiun Negro'),(1489,1,'Gorro Premiun Blanco'),(1490,1,'Gorro Premiun Gris Claro'),(1491,1,'Gorro Premiun Azul Marino'),(1492,1,'Gorro Premiun Verde Ingles'),(1493,1,'Cuadros A4 Vidrio'),(1494,1,'Cuadros A3 Vidrio'),(1495,1,'Cuadro A3 Tela'),(1496,1,'Tazas Blancas'),(1497,1,'Tazas Comb. Roja'),(1498,1,'Tazas Comb. Negra'),(1499,1,'Tazas Comb. Verde'),(1500,1,'Tazas Comb. Azul'),(1501,1,'Tazas Comb. Celeste'),(1502,1,'Tazas Comb. Amarilla'),(1503,1,'Tazas Comb. Naranja'),(1504,1,'Tazas Comb. Verde Manzana'),(1505,1,'Tazas Mágicas Negra'),(1506,1,'Taza Vidrio Transparente'),(1508,2,'Posición 5'),(1509,2,'Posición 6'),(1510,2,'Posición 7'),(1511,2,'Posición 8'),(1513,3,'A4 Fondo claro x Mayor'),(1514,3,'A4 Fondo oscuro x Mayor'),(1515,3,'A3 Fondo claro x Mayor'),(1516,3,'A3 Fondo oscuro x Mayor'),(1517,3,'A5 Fondo Claro x Mayor'),(1518,3,'A5 Fondo Oscuro x Mayor'),(1519,6,'Números Chicos por Mayor'),(1520,6,'Nombres Chicos por Mayor'),(1521,6,'Nombres Chicos por Menor'),(1522,6,'Números Chicos por Menor'),(1523,5,'Entrega a Domicilio / Promoción Martes o Jueves / Zona 2'),(1524,5,'Entrega a Domicilio / Promoción Martes o Jueves / Zona 3'),(1525,5,'Envío a 3 Cruses'),(1526,5,'Envoltorio para Regalo'),(1527,5,'Diseño de Logo / Standard'),(1528,5,'Diseño de Logo /  x Hora'),(1529,5,'Grabado y Postura / Serigrafia'),(1530,4,'Termotransferible Negro'),(1531,4,'Termotransferible Amarillo'),(1532,4,'Termotransferible Rojo'),(1533,4,'Termotransferible Azul Francia'),(1534,4,'Termotransferible Azul Marino'),(1535,4,'Termotransferible Naranja'),(1536,4,'Termotransferible Rosado'),(1537,4,'Termotransferible Fucsia fluo'),(1538,4,'Termotransferible Verde Fluo'),(1539,4,'Termotransferible Verde Ingles'),(1540,4,'Termotransferible Gris Claro'),(1541,5,'Empaquetado Standard'),(1542,7,'Transfer'),(1543,7,'Sublimacion'),(1544,1,'Remera Adulto por Mayor'),(1545,1,'Remera Adulto por Mayor'),(1546,1,'Remera Adulto por Mayor'),(1547,1,'Remera Adulto por Mayor'),(1548,1,'Remera Adulto por Mayor'),(1549,1,'Rem. Adulto por Mayor'),(1550,1,'Rem. Adulto por Mayor'),(1551,1,'ropa nueva'),(1552,1,'ropa nueva');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-29 10:30:24