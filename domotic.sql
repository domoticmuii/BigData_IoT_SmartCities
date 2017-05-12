-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2017 a las 10:36:33
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `domotic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idcliente`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `email`, `password`, `nombre`, `apellidos`, `direccion`) VALUES
(1, 'ruben@gmail.com', '1234', 'Rubén', 'Miguélez ', 'En la politécnica'),
(2, 'juanma@gmail.com', '0000', 'Juan Manuel', 'Castelo', 'Carlos Belmonte'),
(3, 'domotic@domotic.com', 'datos_outdoor', 'Domotic', 'Sociedad Limitada', 'Master');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `localizacionSensor` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipoSensor` varchar(50) COLLATE utf8_bin NOT NULL,
  `valorDato` double NOT NULL,
  `fecha` varchar(400) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `idcliente`, `localizacionSensor`, `tipoSensor`, `valorDato`, `fecha`) VALUES
(1, 1, 'a', '1', 22, '45w'),
(2, 1, 'a', '1', 24, '43'),
(3, 1, 'a', '1', 24, '333'),
(4, 1, 'a', '1', 32, 'asw'),
(5, 1, 'a', '1', 35, '23423'),
(6, 1, 'a', '1', 37, '2323'),
(7, 1, 'a', '1', 42, '23445'),
(8, 1, 'a', '1', 31, '32435'),
(9, 1, 'a', '1', 25, '43545'),
(10, 1, 'a', '1', 21, '2332'),
(11, 1, 'a', '1', 16, '23443'),
(12, 1, 'a', '1', 14, '234345');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos`
--
ALTER TABLE `datos`
  ADD CONSTRAINT `datos_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
