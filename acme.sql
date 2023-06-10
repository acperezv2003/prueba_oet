-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2023 a las 22:09:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--
-- Creación: 09-06-2023 a las 17:54:14
--

CREATE TABLE `conductor` (
  `num_cedula` int(20) NOT NULL,
  `primer_nombre` varchar(50) DEFAULT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`num_cedula`, `primer_nombre`, `segundo_nombre`, `apellidos`, `direccion`, `telefono`, `ciudad`) VALUES
(1654, 'Henry', 'Alexander', 'Perez Valderrama', '3503379894', 'diagonal 15b 104 45', 'Bogota'),
(184132165, 'Sofia', '', 'Perez', '3503379894', 'diagonal 15b 104 45', 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--
-- Creación: 09-06-2023 a las 18:32:45
--

CREATE TABLE `propietario` (
  `num_cedula` int(20) NOT NULL,
  `primer_nombre` varchar(50) DEFAULT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`num_cedula`, `primer_nombre`, `segundo_nombre`, `apellidos`, `direccion`, `telefono`, `ciudad`) VALUES
(5423, 'Andres', 'Camilo', 'Perez Valderrama', 'cll 19 # 43 - 04', '3053862483', 'Duitama'),
(9871, 'Andres', 'Camilo', 'Perez Valderrama', 'cll 19 # 43 - 04', '3053862483', 'Duitama'),
(10341534, 'Andres', 'Camilo', 'Perez Valderrama', 'cll 19 # 43 - 04', '3053862483', 'Duitama'),
(46553453, 'Andres', 'Camilo', 'Perez Valderrama', 'cll 19 # 43 - 04', '3053862483', 'Duitama'),
(651246575, 'Andres', 'Camilo', 'Perez Valderrama', 'cll 19 # 43 - 04', '3053862483', 'Duitama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--
-- Creación: 09-06-2023 a las 18:32:24
--

CREATE TABLE `vehiculo` (
  `placa` varchar(10) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `tipo_vehiculo` varchar(50) DEFAULT NULL,
  `id_conductor` int(20) DEFAULT NULL,
  `id_propietario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`placa`, `color`, `marca`, `tipo_vehiculo`, `id_conductor`, `id_propietario`) VALUES
('asd156', 'rojo', 'bmw', 'publico', 1654, 5423),
('qwe324', 'azul', 'mercedes', 'privado', 184132165, 9871);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`num_cedula`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`num_cedula`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `fk_vehiculo_conductor` (`id_conductor`),
  ADD KEY `fk_vehiculo_propietario` (`id_propietario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_vehiculo_conductor` FOREIGN KEY (`id_conductor`) REFERENCES `conductor` (`num_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vehiculo_propietario` FOREIGN KEY (`id_propietario`) REFERENCES `propietario` (`num_cedula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
