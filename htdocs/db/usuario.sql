-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2021 a las 02:56:06
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_cafeteria_001`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) DEFAULT NULL,
  `pass_usuario` varchar(255) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Volcado de datos para la tabla `usuario`
--

INSERT IGNORE INTO `usuario` (`id_usuario`, `nombre_usuario`, `pass_usuario`, `correo`, `pregunta`, `respuesta`, `usuario`) VALUES
(1, 'Carlos', '$2y$10$4V5IgQbNa8hVG1zBdY9jRevLPvLEYdkKYlxBvD7MKCeFwI0oTVHKC', 'caleman97914@mail.com', 'Pregunta', 'REspuesta', 'caleman9791'),
(2, 'Carlos', '$2y$10$sUAP5iH4F6wfZ7yiAvfES.VdSvm5.ZMVlJqO0Td2LkEtGYnAi74uy', 'caleman9791@mail.com', 'Pregunta', 'REspuesta', 'caleman97911'),
(3, 'Carlos', '$2y$10$GbsXzIR.lY9iCk1dHoCkceoiq2fk9HmxttHaJbS7Un1zgg1EQtD.u', 'mail@mail.com', 'ggg', 'fff', 'hhhhh'),
(4, 'Carlos', '$2y$10$GgeT4uJmVyHoi4p1ePQu5uOfj7.yH1hVg/qg7rTeHlpWY9BuwIwk2', 'mailgg@mail.com', 'hgxxfg', 'fbzdfh', 'caleman9791gg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
