-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2017 a las 06:17:27
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inversiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idProy` int(4) NOT NULL,
  `Por` varchar(4) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Req` varchar(10) DEFAULT NULL,
  `Inv` varchar(5) DEFAULT NULL,
  `Fina` varchar(20) DEFAULT NULL,
  `Tip` varchar(20) DEFAULT NULL,
  `Sector` varchar(20) DEFAULT NULL,
  `Plazo` varchar(20) DEFAULT NULL,
  `Taza` varchar(5) DEFAULT NULL,
  `Des` varchar(100) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProy`, `Por`, `Nombre`, `Req`, `Inv`, `Fina`, `Tip`, `Sector`, `Plazo`, `Taza`, `Des`, `lat`, `lon`) VALUES
(1, '33', 'Proyecto de muestra 1', '300000', '2000', 'prueba', 'prueba', 'prueba', '3 años', '13%', 'I am a very simple card. I am good at containing small bits of information.\r\n              ', NULL, NULL),
(2, '21', 'Proyecto de muestra 2', '1000000', '30000', 'prueba2', 'prueba2', 'prueba2', '18 meses', '33%', 'I am a very simple card. I am good at containing small bits of information.\r\n', NULL, NULL),
(3, '33', 'Proyecto de muestra 1', '300000', '2000', 'prueba', 'prueba', 'prueba', '3 años', '13%', 'I am a very simple card. I am good at containing small bits of information.\r\n              ', NULL, NULL),
(4, '21', 'Proyecto de muestra 2', '1000000', '30000', 'prueba2', 'prueba2', 'prueba2', '18 meses', '33%', 'I am a very simple card. I am good at containing small bits of information.\r\n', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProy`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProy` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
