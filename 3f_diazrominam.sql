-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2024 a las 01:52:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `3f_diazrominam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(110) DEFAULT NULL,
  `apellido` varchar(110) DEFAULT NULL,
  `email` varchar(260) NOT NULL,
  `usuario` varchar(60) DEFAULT NULL,
  `clave` varchar(100) NOT NULL,
  `perfil` int(11) NOT NULL,
  `fechaalta` date DEFAULT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `clave`, `perfil`, `fechaalta`, `activo`) VALUES
(2, 'Romi', 'Diaz', 'mariarominadiaz@gmail.com', 'Mona', '54321', 0, NULL, 0),
(3, 'Janno', 'Paquiri Diaz', 'jannopd@test.com', 'Jannin', '2019', 0, NULL, 0),
(9, 'Max', 'pagon', 'nombre@mail.com', 'mapagon', '$2y$10$.twjbW6.4TMfKB3zfdDMLOb2DmG3n7NHt9m4pPwosV0.KtHfCF77W', 0, NULL, 0),
(11, 'Test', 'Diaz', 'estrellabruta@gmail.com', 'Maroja', '$2y$10$w5T8kUTymzIhQmoz7/8nkeCZL3OUvd/Y6QWvgpdsdyQ3czJpizi0O', 0, NULL, 0),
(13, 'Romina', 'Diaz', 'estrellabruta@gmail.com', 'Prueba2', '$2y$10$j3mOVCHDIBid2YBpFRl4nurUnz9wLfyk71rH9me8epNOxRjV8D4nO', 0, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
