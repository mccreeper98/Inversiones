-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2017 a las 04:30:18
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
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `idProy` int(4) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPer` int(4) NOT NULL,
  `Tel` int(10) DEFAULT NULL,
  `Clave` varchar(20) DEFAULT NULL,
  `Rfc` varchar(20) DEFAULT NULL,
  `Ine` varchar(20) DEFAULT NULL,
  `Comp` varchar(20) DEFAULT NULL,
  `Est` varchar(20) DEFAULT NULL,
  `Calle` varchar(30) DEFAULT NULL,
  `Ext` int(4) DEFAULT NULL,
  `Inte` int(4) DEFAULT NULL,
  `Col` varchar(20) DEFAULT NULL,
  `Cp` int(5) DEFAULT NULL,
  `Pais` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Des` varchar(50) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsr` int(4) NOT NULL,
  `Usuario` varchar(20) DEFAULT 'Usuario',
  `Nombre` varchar(30) DEFAULT NULL,
  `App` varchar(20) DEFAULT NULL,
  `Apm` varchar(20) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Psw` varchar(20) NOT NULL,
  `Tipo` int(1) DEFAULT NULL,
  `idPer` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsr`, `Usuario`, `Nombre`, `App`, `Apm`, `Email`, `Psw`, `Tipo`, `idPer`) VALUES
(16, 'Usuario', 'Luis', 'Toentino', 'Romero', 'prueba@prueba.com', '5994471abb01112afcc1', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPer`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProy`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPer` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProy` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsr` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
