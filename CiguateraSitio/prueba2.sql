-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-07-2019 a las 18:20:35
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `id_articulos` int(255) NOT NULL AUTO_INCREMENT,
  `img_autor` int(255) NOT NULL,
  `titulo` int(11) NOT NULL,
  `descripcion_art` text NOT NULL,
  `img_articulo` int(255) NOT NULL,
  PRIMARY KEY (`id_articulos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulos`, `img_autor`, `titulo`, `descripcion_art`, `img_articulo`) VALUES
(1, 1, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 11),
(2, 1, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peces`
--

CREATE TABLE IF NOT EXISTS `peces` (
  `id_peces` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `imagen` int(255) NOT NULL,
  `descripcion` text NOT NULL,
  `tamanio` varchar(255) NOT NULL,
  `color` text NOT NULL,
  PRIMARY KEY (`id_peces`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `peces`
--

INSERT INTO `peces` (`id_peces`, `nombre`, `imagen`, `descripcion`, `tamanio`, `color`) VALUES
(2, 'carpa', 1, 'aaaaaaa', '22cm', 'gris');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
