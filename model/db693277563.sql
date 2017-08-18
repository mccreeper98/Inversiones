-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Servidor: db693277563.db.1and1.com
-- Tiempo de generación: 15-08-2017 a las 19:58:21
-- Versión del servidor: 5.5.57-0+deb7u1-log
-- Versión de PHP: 5.4.45-0+deb7u9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db693277563`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `idProy` int(4) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=193 ;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `idProy`, `img`) VALUES
(1, 1, 'img/example1.jpg'),
(2, 2, 'img/example2.jpg'),
(3, 5, 'img/example3.jpg'),
(190, 27, 'bg.png'),
(191, 28, 'kazam.png'),
(192, 29, 'bg.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idPer` int(4) NOT NULL AUTO_INCREMENT,
  `idUsr` int(4) NOT NULL,
  `Tel` int(10) DEFAULT NULL,
  `Clave` int(18) DEFAULT NULL,
  `Rfc` varchar(15) DEFAULT NULL,
  `Calle` varchar(30) DEFAULT NULL,
  `Ext` int(4) DEFAULT NULL,
  `Inte` int(4) DEFAULT NULL,
  `Col` varchar(20) DEFAULT NULL,
  `Cp` int(5) DEFAULT NULL,
  `Pais` varchar(20) DEFAULT NULL,
  `IneF` longblob,
  `IneB` longblob NOT NULL,
  `Comp` longblob,
  `Est` longblob,
  PRIMARY KEY (`idPer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPer`, `idUsr`, `Tel`, `Clave`, `Rfc`, `Calle`, `Ext`, `Inte`, `Col`, `Cp`, `Pais`, `IneF`, `IneB`, `Comp`, `Est`) VALUES
INSERT INTO `perfil` (`idPer`, `idUsr`, `Tel`, `Clave`, `Rfc`, `Calle`, `Ext`, `Inte`, `Col`, `Cp`, `Pais`, `IneF`, `IneB`, `Comp`, `Est`) VALUES

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `idProy` int(4) NOT NULL AUTO_INCREMENT,
  `Por` varchar(4) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Req` varchar(10) DEFAULT NULL,
  `Inv` varchar(5) DEFAULT NULL,
  `Fina` varchar(20) DEFAULT NULL,
  `Tip` varchar(20) DEFAULT NULL,
  `Sector` varchar(20) DEFAULT NULL,
  `Plazo` varchar(20) DEFAULT NULL,
  `Taza` varchar(5) DEFAULT NULL,
  `Estatus` varchar(9) NOT NULL DEFAULT 'Activo',
  `Des` text,
  `lat` varchar(20) DEFAULT NULL,
  `lon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idProy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsr` int(4) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) DEFAULT 'Usuario',
  `Nombre` varchar(30) DEFAULT NULL,
  `App` varchar(20) DEFAULT NULL,
  `Apm` varchar(20) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Psw` varchar(20) NOT NULL,
  `Tipo` int(1) DEFAULT NULL,
  `Estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`idUsr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsr`, `Usuario`, `Nombre`, `App`, `Apm`, `Email`, `Psw`, `Tipo`, `Estado`) VALUES
(16, 'McCreeper', 'Luis', 'Toentino', 'Romero', 'prueba@prueba.com', '12345', 0, 1),
(18, 'Admin', 'Admin', 'Admin', 'Admin', 'admin', 'admin', 1, 1),
(55, 'Usuario', 'Raul', 'Arias', 'Jimenez', 'raul.arias@kootsolutions.com', 'Koot1920', 0, 1),
(56, 'Usuario', 'Carlos Alberto', 'Hershberger', NULL, 'carlos.hersh@hotmail.com', 'Carlos AlbertoHershb', 0, 1),
(57, 'Usuario', 'Raul', 'Arias', NULL, 'brasco_4@hotmail.com', 'RaulArias', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;