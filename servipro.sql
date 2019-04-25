-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2019 a las 06:33:09
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `servipro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala_juntas`
--

CREATE TABLE IF NOT EXISTS `sala_juntas` (
`id_sala_juntas` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `sala_de_juntas` varchar(45) DEFAULT NULL,
  `tiempo_uso` varchar(45) NOT NULL,
  `total_personas` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala_juntas`
--

INSERT INTO `sala_juntas` (`id_sala_juntas`, `nombre_usuario`, `fecha`, `hora`, `sala_de_juntas`, `tiempo_uso`, `total_personas`) VALUES
(2, 'luis', '2019-03-12', '12:00', 'sala1', '1hr', '3'),
(3, 'arturo', '2019-02-12', '12:00', 'sala1', '2 hrs', '3'),
(4, 'luis', '2019-12-12', '12:00', 'sala1', '1hr', '6'),
(5, 'Arturo', '2019-05-04', '15:01', 'sala1', '2 hrs', '6'),
(6, 'jose', '2019-09-12', '12:00', 'sala1', '1hr', '10'),
(7, 'carina', '2019-09-12', '12:00', 'sala1', '2 hrs', '8'),
(8, 'Carina', '2019-02-12', '12:00', 'sala2', '1hr', '9'),
(9, 'daniel', '2019-09-23', '22:00', 'sala2', '1hr', '6'),
(11, 'Citlali', '2019-09-12', '12:00', 'sala2', '2 hrs', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `usuario`, `contrasena`) VALUES
(1, 'jose', 'jose-fbk@hotmail.com', '12345'),
(2, 'juan', 'juan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'luis', 'luis@gmail.com', '123456'),
(4, 'Arturo', 'arttuu@hotmail.com', '1234'),
(5, 'carina', 'carina@hotmail.com', ''),
(6, 'daniel', 'daniel@gmail.com', '123456'),
(7, 'Citlali', 'citlali@gmail.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sala_juntas`
--
ALTER TABLE `sala_juntas`
 ADD PRIMARY KEY (`id_sala_juntas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sala_juntas`
--
ALTER TABLE `sala_juntas`
MODIFY `id_sala_juntas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
