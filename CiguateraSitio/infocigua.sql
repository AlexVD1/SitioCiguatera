-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2019 a las 01:04:32
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infocigua`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulos` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `resumen` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `link_descarga` varchar(255) NOT NULL,
  `id_autores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autores` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `grado` varchar(225) NOT NULL,
  `formacion` varchar(225) NOT NULL,
  `numero_de_tel` varchar(225) NOT NULL,
  `correo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id_color` int(20) UNSIGNED NOT NULL,
  `nombre` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muchaszonas`
--

CREATE TABLE `muchaszonas` (
  `id_mzonas` int(20) UNSIGNED NOT NULL,
  `id_peces` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muchoscolores`
--

CREATE TABLE `muchoscolores` (
  `id_mcolores` bigint(20) UNSIGNED NOT NULL,
  `id_peces` int(11) NOT NULL,
  `id_color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muchostamanios`
--

CREATE TABLE `muchostamanios` (
  `id_mtamanios` bigint(20) UNSIGNED NOT NULL,
  `id_peces` int(11) NOT NULL,
  `id_tamanio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peces`
--

CREATE TABLE `peces` (
  `id_peces` int(20) UNSIGNED NOT NULL,
  `nombre` varchar(225) NOT NULL,
  `descripcion` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `principal`
--

CREATE TABLE `principal` (
  `id_principal` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(225) NOT NULL,
  `titulo` varchar(225) NOT NULL,
  `subtitulo` varchar(225) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_subida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamanios`
--

CREATE TABLE `tamanios` (
  `id_tamanio` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(225) NOT NULL,
  `usuario` varchar(225) NOT NULL,
  `contrasenia` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `tipo`, `usuario`, `contrasenia`) VALUES
(3, '', 'Aranza', '$2y$10$CrnCaCgG.ZJl/PlwxsS66O8yL97s6ujS9S7oP.C.1MhBegfCJy9He'),
(4, '', 'Alex', '$2y$10$cFNktuE7nQe5no1/hxcoJetF0MOL9v2KsKSeZYePMaxuNuc673076'),
(6, '', 'Lalo', '$2y$10$YfpTFTYXwuRTV2wLNlqL5eflBhefub2df4aAtBWRo/zO7gV9GPTLO'),
(7, '', 'Admin', '$2y$10$1yUYsC5tCPhu9xlRo9GgEu4fpLe4KO886M6K49LP3RozzG.GUl1kC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_zona` bigint(20) UNSIGNED NOT NULL,
  `nombre_zona` varchar(225) NOT NULL,
  `descripcion` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulos`),
  ADD UNIQUE KEY `id_articulos` (`id_articulos`),
  ADD KEY `id_autores` (`id_autores`);

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autores`),
  ADD UNIQUE KEY `id_autores` (`id_autores`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`),
  ADD UNIQUE KEY `id_color` (`id_color`);

--
-- Indices de la tabla `muchaszonas`
--
ALTER TABLE `muchaszonas`
  ADD PRIMARY KEY (`id_mzonas`),
  ADD UNIQUE KEY `id_mzonas` (`id_mzonas`),
  ADD KEY `id_peces` (`id_peces`),
  ADD KEY `id_zona` (`id_zona`);

--
-- Indices de la tabla `muchoscolores`
--
ALTER TABLE `muchoscolores`
  ADD PRIMARY KEY (`id_mcolores`),
  ADD UNIQUE KEY `id_mcolores` (`id_mcolores`),
  ADD KEY `FK_id_color` (`id_color`),
  ADD KEY `FK_id_peces` (`id_peces`) USING BTREE,
  ADD KEY `id_peces` (`id_peces`),
  ADD KEY `id_color` (`id_color`);

--
-- Indices de la tabla `muchostamanios`
--
ALTER TABLE `muchostamanios`
  ADD PRIMARY KEY (`id_mtamanios`),
  ADD UNIQUE KEY `id_mtamanios` (`id_mtamanios`),
  ADD KEY `id_peces` (`id_peces`),
  ADD KEY `id_tamanio` (`id_tamanio`),
  ADD KEY `id_tamanio_2` (`id_tamanio`);

--
-- Indices de la tabla `peces`
--
ALTER TABLE `peces`
  ADD PRIMARY KEY (`id_peces`),
  ADD UNIQUE KEY `id_peces` (`id_peces`);

--
-- Indices de la tabla `principal`
--
ALTER TABLE `principal`
  ADD UNIQUE KEY `id_principal` (`id_principal`);

--
-- Indices de la tabla `tamanios`
--
ALTER TABLE `tamanios`
  ADD PRIMARY KEY (`id_tamanio`),
  ADD UNIQUE KEY `id_tamanio` (`id_tamanio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id_zona`),
  ADD UNIQUE KEY `id_zona` (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autores` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id_color` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `muchaszonas`
--
ALTER TABLE `muchaszonas`
  MODIFY `id_mzonas` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `muchoscolores`
--
ALTER TABLE `muchoscolores`
  MODIFY `id_mcolores` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `muchostamanios`
--
ALTER TABLE `muchostamanios`
  MODIFY `id_mtamanios` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peces`
--
ALTER TABLE `peces`
  MODIFY `id_peces` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `principal`
--
ALTER TABLE `principal`
  MODIFY `id_principal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tamanios`
--
ALTER TABLE `tamanios`
  MODIFY `id_tamanio` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id_zona` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
