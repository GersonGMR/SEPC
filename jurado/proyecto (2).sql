-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2018 a las 23:45:23
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SEPC`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm`
--

CREATE TABLE `adm` (
  `id_usuario` int(100) NOT NULL,
  `usr` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(100) NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueces`
--

CREATE TABLE `jueces` (
  `id_juez` int(100) NOT NULL,
  `nombre_juez` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_juez` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pwd_juez` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(100) NOT NULL,
  `n1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n5` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(100) NOT NULL,
  `nombre_proyecto` int(11) NOT NULL,
  `id_grupo` int(100) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_juez` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntaje`
--

CREATE TABLE `puntaje` (
  `id_proyecto` int(100) NOT NULL,
  `puntaje` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat2`
--

CREATE TABLE `rescat2` (
  `id_rescat2` int(11) NOT NULL,
  `id_juez` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rescat2`
--

INSERT INTO `rescat2` (`id_rescat2`, `id_juez`, `id_grupo`, `id_categoria`, `resultado`) VALUES
(2, 2, 3, 2, 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat3`
--

CREATE TABLE `rescat3` (
  `id_rescat3` int(11) NOT NULL,
  `id_juez` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rescat3`
--

INSERT INTO `rescat3` (`id_rescat3`, `id_juez`, `id_grupo`, `id_categoria`, `resultado`) VALUES
(1, 3, 2, 2, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat4`
--

CREATE TABLE `rescat4` (
  `id_rescat4` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_juez` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rescat4`
--

INSERT INTO `rescat4` (`id_rescat4`, `id_grupo`, `id_juez`, `id_categoria`, `resultado`) VALUES
(1, 0, 0, 0, 74),
(2, 3, 3, 4, 74);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `jueces`
--
ALTER TABLE `jueces`
  ADD PRIMARY KEY (`id_juez`);

--
-- Indices de la tabla `rescat1`
--
ALTER TABLE `rescat1`
  ADD PRIMARY KEY (`id_rescat`);

--
-- Indices de la tabla `rescat2`
--
ALTER TABLE `rescat2`
  ADD PRIMARY KEY (`id_rescat2`);

--
-- Indices de la tabla `rescat3`
--
ALTER TABLE `rescat3`
  ADD PRIMARY KEY (`id_rescat3`);

--
-- Indices de la tabla `rescat4`
--
ALTER TABLE `rescat4`
  ADD PRIMARY KEY (`id_rescat4`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jueces`
--
ALTER TABLE `jueces`
  MODIFY `id_juez` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rescat1`
--
ALTER TABLE `rescat1`
  MODIFY `id_rescat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rescat2`
--
ALTER TABLE `rescat2`
  MODIFY `id_rescat2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rescat3`
--
ALTER TABLE `rescat3`
  MODIFY `id_rescat3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rescat4`
--
ALTER TABLE `rescat4`
  MODIFY `id_rescat4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
