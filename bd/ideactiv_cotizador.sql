-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-11-2015 a las 13:56:01
-- Versión del servidor: 5.6.27
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ideactiv_cotizador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `direccion` text,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `rfc`, `email`, `direccion`) VALUES
(2, 'default', '', '', ''),
(3, 'Hugo Santiago', '', 'hugooluisss@gmail.com', ''),
(4, 'juanito', '', 'juanito@hotmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `idCotizacion` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT NULL,
  `idCliente` int(10) unsigned DEFAULT NULL,
  `adicional` decimal(10,2) DEFAULT '0.00',
  `subtotal` decimal(10,2) DEFAULT '0.00',
  `total` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`idCotizacion`),
  KEY `fk_cliente` (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`idCotizacion`, `fecha`, `idCliente`, `adicional`, `subtotal`, `total`) VALUES
(11, '2015-11-01 17:09:51', 2, '0.00', '0.00', '0.00'),
(12, '2015-11-01 17:11:28', 2, '40.00', '49.04', '68.66'),
(13, '2015-11-01 17:25:11', 2, '0.00', '392.00', '392.00'),
(14, '2015-11-01 19:04:37', 4, '0.00', '670.00', '670.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estampado`
--

CREATE TABLE IF NOT EXISTS `estampado` (
  `idItem` bigint(20) unsigned NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estampado`
--

INSERT INTO `estampado` (`idItem`, `descripcion`, `precio`) VALUES
(41, 'Número', '160.00'),
(42, 'Impresión del nombre en una playera', '200.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `idItem` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idTipo` tinyint(3) unsigned DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idItem`),
  KEY `tipoItem` (`idTipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`idItem`, `idTipo`, `nombre`) VALUES
(24, 1, 'Playera 1'),
(25, 1, 'Payera 2'),
(27, 2, 'Posición 1'),
(29, 3, 'A4 fondo claro'),
(30, 3, 'A4 fondo oscuro'),
(31, 4, 'Corte normal'),
(34, 5, 'Servicios Express'),
(36, 5, 'Servicios Express'),
(37, 5, 'Entrega a domicilio dentro de la ciudad'),
(38, 3, 'A3 claro'),
(40, 5, 'Entrega en 3 dias'),
(41, 6, 'Número'),
(42, 6, 'Letras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `limite`
--

CREATE TABLE IF NOT EXISTS `limite` (
  `idLimite` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inferior` bigint(20) unsigned DEFAULT '0' COMMENT 'Limite superior',
  PRIMARY KEY (`idLimite`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `limite`
--

INSERT INTO `limite` (`idLimite`, `inferior`) VALUES
(1, 1),
(2, 5),
(3, 15),
(4, 50),
(5, 100),
(6, 150),
(7, 300),
(8, 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE IF NOT EXISTS `movimiento` (
  `idCotizacion` bigint(20) unsigned NOT NULL,
  `mov` int(11) NOT NULL,
  `concepto` text,
  `cantidad` int(10) unsigned DEFAULT NULL,
  `descuento` int(10) unsigned DEFAULT NULL,
  `neto` decimal(10,2) unsigned DEFAULT NULL,
  `total` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`idCotizacion`,`mov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros`
--

CREATE TABLE IF NOT EXISTS `otros` (
  `idItem` bigint(20) unsigned NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `otros`
--

INSERT INTO `otros` (`idItem`, `descripcion`, `precio`) VALUES
(36, 'Servicio express en 24 horas', '100.00'),
(37, 'Solo para entregas dentro de la ciudad', '50.00'),
(40, 'Es un servicio express en 3 dias', '130.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precioserigrafia`
--

CREATE TABLE IF NOT EXISTS `precioserigrafia` (
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

--
-- Volcado de datos para la tabla `precioserigrafia`
--

INSERT INTO `precioserigrafia` (`idItem`, `idTamano`, `idLimite`, `colores`, `precio`) VALUES
(27, 1, 1, 1, '2.00'),
(27, 1, 1, 2, '20.00'),
(27, 2, 1, 1, '1.00'),
(27, 2, 1, 2, '21.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ropa`
--

CREATE TABLE IF NOT EXISTS `ropa` (
  `idItem` bigint(20) unsigned NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ropa`
--

INSERT INTO `ropa` (`idItem`, `descripcion`, `precio`) VALUES
(24, 'Playera 1', '10.00'),
(25, 'Payera 2', '28.40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serigrafia`
--

CREATE TABLE IF NOT EXISTS `serigrafia` (
  `idItem` bigint(20) unsigned NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `serigrafia`
--

INSERT INTO `serigrafia` (`idItem`, `descripcion`) VALUES
(27, 'Posición 1...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serigrafiadigital`
--

CREATE TABLE IF NOT EXISTS `serigrafiadigital` (
  `idItem` bigint(20) unsigned NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `serigrafiadigital`
--

INSERT INTO `serigrafiadigital` (`idItem`, `descripcion`, `precio`) VALUES
(29, 'Tamaño A4', '330.00'),
(30, 'A4', '480.01'),
(38, 'Impresion sobre A3 color claro', '230.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE IF NOT EXISTS `talla` (
  `idTalla` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idItem` bigint(20) unsigned DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `adicional` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idTalla`),
  KEY `item` (`idItem`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`idTalla`, `idItem`, `nombre`, `adicional`) VALUES
(1, 24, 'Grande', '0.00'),
(2, 24, 'Mediana', '0.00'),
(3, 24, 'Chica', '1.00'),
(4, 25, 'Unitalla', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamano`
--

CREATE TABLE IF NOT EXISTS `tamano` (
  `idTamano` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTamano`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tamano`
--

INSERT INTO `tamano` (`idTamano`, `nombre`) VALUES
(1, 'Chico'),
(2, 'Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoItem`
--

CREATE TABLE IF NOT EXISTS `tipoItem` (
  `idTipo` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipoItem`
--

INSERT INTO `tipoItem` (`idTipo`, `descripcion`) VALUES
(1, 'Ropa'),
(2, 'Serigrafía'),
(3, 'Serigrafía digital'),
(4, 'Corte de vinilo'),
(5, 'Otros servicios'),
(6, 'Números y letras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoUsuario`
--

CREATE TABLE IF NOT EXISTS `tipoUsuario` (
  `idTipoUsuario` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipoUsuario`
--

INSERT INTO `tipoUsuario` (`idTipoUsuario`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Cotizador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idTipo` tinyint(3) unsigned DEFAULT NULL,
  `app` varchar(45) DEFAULT NULL,
  `apm` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `usuarioTipo` (`idTipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idTipo`, `app`, `apm`, `nombre`, `email`, `pass`) VALUES
(6, 1, 'admin', 'admin', 'admin2', 'hugooluisss@gmail.com', 'k0rgk0rg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinilo`
--

CREATE TABLE IF NOT EXISTS `vinilo` (
  `idItem` bigint(20) unsigned NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vinilo`
--

INSERT INTO `vinilo` (`idItem`, `descripcion`, `precio`) VALUES
(31, 'Es el corte comun', '0.10');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `estampado`
--
ALTER TABLE `estampado`
  ADD CONSTRAINT `fk-item_estampado` FOREIGN KEY (`idItem`) REFERENCES `item` (`idItem`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `idTipo-tipoItem` FOREIGN KEY (`idTipo`) REFERENCES `tipoItem` (`idTipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
