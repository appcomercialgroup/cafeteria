-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-12-2021 a las 01:25:17
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
-- Estructura de tabla para la tabla `bebida`
--

DROP TABLE IF EXISTS `bebida`;
CREATE TABLE `bebida` (
  `id_bebida` int(11) DEFAULT NULL,
  `nombre_bebida` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `bebida`
--

TRUNCATE TABLE `bebida`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas_platillo`
--

DROP TABLE IF EXISTS `bebidas_platillo`;
CREATE TABLE `bebidas_platillo` (
  `id_bebidas_platillo` int(11) DEFAULT NULL,
  `id_bebida` int(11) DEFAULT NULL,
  `id_platillo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `bebidas_platillo`
--

TRUNCATE TABLE `bebidas_platillo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complemento`
--

DROP TABLE IF EXISTS `complemento`;
CREATE TABLE `complemento` (
  `id_complemento` int(11) DEFAULT NULL,
  `nombre_complemento` varchar(50) DEFAULT NULL,
  `descripcion_complemento` longtext DEFAULT NULL,
  `precio_complemento` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `complemento`
--

TRUNCATE TABLE `complemento`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_sesion`
--

DROP TABLE IF EXISTS `inicio_sesion`;
CREATE TABLE `inicio_sesion` (
  `id_inicio_sesion` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `token_inicio` varchar(255) NOT NULL,
  `navegador` varchar(50) NOT NULL,
  `fecha_inicio_sesion` date DEFAULT NULL,
  `hora_inicio_sesion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `inicio_sesion`
--

TRUNCATE TABLE `inicio_sesion`;
--
-- Volcado de datos para la tabla `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id_inicio_sesion`, `id_usuario`, `token_inicio`, `navegador`, `fecha_inicio_sesion`, `hora_inicio_sesion`) VALUES
(1, 2, '8392b4fb070bbd785becb372011e87db4f6d31f2', 'Opera', '2021-12-18', '02:45:12'),
(2, 1, '93ec2830b5e3b08bd7413e5b102ca0a303f878c0', 'Mozilla Firefox', '2021-12-18', '07:54:03'),
(3, 1, '87826a55f54f07ef3045ebf54cbd972f856d112c', 'Mozilla Firefox', '2021-12-20', '11:32:42'),
(4, 1, '4b25f185d28f1c3412a5f115e2a8730cb5e24c1e', 'Mozilla Firefox', '2021-12-20', '11:34:14'),
(5, 1, '8e1791212252e4deeb2b49ff032fffe7cde46587', 'Mozilla Firefox', '2021-12-20', '11:34:41'),
(6, 1, '2df9ccc8894bf5d9b38ef95c4ca1e9854af98e95', 'Mozilla Firefox', '2021-12-20', '11:37:52'),
(7, 1, 'f6d19c6faad560c13a262802fc3a50a524cbcdf1', 'Mozilla Firefox', '2021-12-20', '11:40:13'),
(8, 1, '02ac75e5746fb019605539bc8172535b03ebee5b', 'Mozilla Firefox', '2021-12-20', '11:49:15'),
(9, 1, '2d1a02232936ee69ffd618598e8022ba58658663', 'Mozilla Firefox', '2021-12-21', '01:23:42'),
(10, 1, '210b02e632d053af70812d2cced6d2c0d18eaede', 'Mozilla Firefox', '2021-12-21', '01:58:21'),
(11, 1, '42b16158f0a02486dbc3dfeb87d6422752713c8d', 'Mozilla Firefox', '2021-12-21', '01:59:47'),
(12, 1, '03c7b2bdab7adc271246cdd29b30fc19a64e12a0', 'Mozilla Firefox', '2021-12-21', '02:00:57'),
(13, 1, 'fc034d55763b21d7c55d9bce0166043bea508d3f', 'Mozilla Firefox', '2021-12-21', '02:01:56'),
(14, 1, '8b8137b640fb710eef3ea3e74bc6a80ef51d250f', 'Mozilla Firefox', '2021-12-21', '02:02:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(11) DEFAULT NULL,
  `nombre_menu` varchar(50) DEFAULT NULL,
  `id_platillo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `menu`
--

TRUNCATE TABLE `menu`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

DROP TABLE IF EXISTS `oferta`;
CREATE TABLE `oferta` (
  `id_oferta` int(11) DEFAULT NULL,
  `nombre_oferta` varchar(50) DEFAULT NULL,
  `id_platillo` int(11) DEFAULT NULL,
  `estado_oferta` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `oferta`
--

TRUNCATE TABLE `oferta`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

DROP TABLE IF EXISTS `orden`;
CREATE TABLE `orden` (
  `id_orden` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `orden`
--

TRUNCATE TABLE `orden`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `id_pedido` int(11) DEFAULT NULL,
  `id_platillo` int(11) DEFAULT NULL,
  `id_orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `pedidos`
--

TRUNCATE TABLE `pedidos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

DROP TABLE IF EXISTS `platillo`;
CREATE TABLE `platillo` (
  `id_platillo` int(11) DEFAULT NULL,
  `nombre_platillo` varchar(50) DEFAULT NULL,
  `id_complemento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `platillo`
--

TRUNCATE TABLE `platillo`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_seguridad`
--

DROP TABLE IF EXISTS `preguntas_seguridad`;
CREATE TABLE `preguntas_seguridad` (
  `id_pregunta` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `pregunta` varchar(20) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `preguntas_seguridad`
--

TRUNCATE TABLE `preguntas_seguridad`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
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

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `pass_usuario`, `correo`, `pregunta`, `respuesta`, `usuario`) VALUES
(1, 'Carlos', '$2y$10$4V5IgQbNa8hVG1zBdY9jRevLPvLEYdkKYlxBvD7MKCeFwI0oTVHKC', 'caleman97914@mail.com', 'Pregunta', 'REspuesta', 'caleman9791'),
(2, 'Carlos', '$2y$10$sUAP5iH4F6wfZ7yiAvfES.VdSvm5.ZMVlJqO0Td2LkEtGYnAi74uy', 'caleman9791@mail.com', 'Pregunta', 'REspuesta', 'caleman97911'),
(3, 'Carlos', '$2y$10$GbsXzIR.lY9iCk1dHoCkceoiq2fk9HmxttHaJbS7Un1zgg1EQtD.u', 'mail@mail.com', 'ggg', 'fff', 'hhhhh'),
(4, 'Carlos', '$2y$10$GgeT4uJmVyHoi4p1ePQu5uOfj7.yH1hVg/qg7rTeHlpWY9BuwIwk2', 'mailgg@mail.com', 'hgxxfg', 'fbzdfh', 'caleman9791gg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD PRIMARY KEY (`id_inicio_sesion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  MODIFY `id_inicio_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
