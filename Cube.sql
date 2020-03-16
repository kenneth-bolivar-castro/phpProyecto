-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: database
-- Tiempo de generación: 16-03-2020 a las 17:32:45
-- Versión del servidor: 5.7.29
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Cube`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contra` varchar(20) NOT NULL,
  `Telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `Nombre`, `Apellidos`, `Correo`, `Usuario`, `Contra`, `Telefono`) VALUES
(1, 'Andres', 'Hernandez', 'chiri25@gmail.com', 'Andres23', '1234', '71021989'),
(2, 'jose', 'Hernandez', 'andress23961@gmail.com', 'chiri', '123456', ''),
(3, 'jose', 'Hernandez', 'andress23961@gmail.com', 'chiri2', '555', ''),
(4, 'jose', 'Hernandez', 'andress23961@gmail.com', 'chiri23', '44', ''),
(5, 'jose', 'Hernandez', 'andress231@gmail.com', 'chiri25', '4', ''),
(6, 'jose', 'Hernandez', 'andress@gmail.com', 'andres', '44', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
