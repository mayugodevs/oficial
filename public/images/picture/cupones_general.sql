-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-03-2022 a las 13:26:23
-- Versión del servidor: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mayugo_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones_general`
--

-- CREATE TABLE `cupones_general` (
--   `id` int(11) NOT NULL,
--   `cupon` varchar(30) DEFAULT NULL,
--   `descuento_de` double DEFAULT NULL,
--   `tipo_cupon` int(11) DEFAULT NULL,
--   `estado` int(11) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `cupones_general` (
  `id` int(11) NOT NULL,
  `cupon` varchar(30) NOT NULL,
  `descuento` double NOT NULL,
  `tipo_cupon` int(1) NOT NULL,
  `estado` int(1) NOT NULL,
  `max` int(5) NOT NULL,
  `fecha_inicio` DATETIME DEFAULT NULL,
  `fecha_fin` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Volcado de datos para la tabla `cupones_general`
--

INSERT INTO `cupones_general` (`id`, `cupon`, `descuento_de`, `tipo_cupon`, `estado`) VALUES
(1, 'SDISDIFSDR',  2, 1, 1),
(3, 'PROMOXDSC22', 2, 1, 1),
(4, 'ENER56DMOR',  5, 1, 1),
(5, 'MAYUPLANM22', 5, 3, 1),
(6, 'VIVOYRT22',   3, 2, 1),
(16, 'ENCUSTA22', 10, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cupones_general`
--
ALTER TABLE `cupones_general`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cupones_general`
--
ALTER TABLE `cupones_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
