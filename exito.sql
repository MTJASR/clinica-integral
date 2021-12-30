-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2021 a las 02:55:35
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `exito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `estado`) VALUES
(1, 'Adminstrador', ''),
(2, 'Administrativo', ''),
(3, 'Asistencial', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `rol_id` int(50) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `usuario`, `rol_id`, `estado`, `email`, `contrasena`) VALUES
('Alejandro suarez', 'dayanabotello', 3, 'we', 'alejandrosuarezux@gmail.com', '3434343'),
('DAYANA BOTELLO', 'alejandro', 33, 'ewew', 'josealejandrosuarezrivera@gmail.com', '3434343'),
('DAYANA BOTELLO', 'alejandro', 33, 'ewew', 'josealejandrosuarezrivera@gmail.com', '3434343'),
('Entrevistas', 'usuario2', 3, 'activo', 'angelicamaria.riveraramirez@gmail.com', '6545654'),
('Entrevistas', 'usuario2', 3, 'activo', 'angelicamaria.riveraramirez@gmail.com', '6545654'),
('Entrevistas', 'usuario2', 3, 'activo', 'angelicamaria.riveraramirez@gmail.com', '6545654'),
('Entrevistas', 'usuario2', 3, 'activo', 'angelicamaria.riveraramirez@gmail.com', '6545654'),
('Entrevistas', 'usuario2', 3, 'activo', 'angelicamaria.riveraramirez@gmail.com', '6545654');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
