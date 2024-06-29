-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-06-2024 a las 06:05:03
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `corte` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`corte`, `correo`, `fecha`, `hora`) VALUES
('Buzz Cut o Rapado', 'miguel@gmail.com', '2024-06-09', '00:50'),
('Pompadour', 'juanito@gmail.com', '2024-06-02', '13:09'),
('Corte Taper', 'barriguin123@gmail.com', '2024-06-13', '15:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `correo` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `name`, `password`, `telefono`) VALUES
('barriguin123@gmail.com', 'barriguin', '7237837gf', 2147483647),
('carlitos@gmail.com', 'Carlos', 'carloscontraseña', 777566556),
('juandiegopaezlazarin@gmail.com', 'Juan Diego', '321', 2147483647),
('juanito@gmail.com', 'Juan', 'juanconrtraseña', 777484997),
('kolomuani@gmail.com', 'Kolo ', '4343', 2147483647),
('miguel@gmail.com', 'Miguel', 'miguelcontraseña', 777124768),
('sami@gmail.com', 'Sami', 'samicontraseña', 777364528);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `correo` varchar(80) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`correo`, `total`) VALUES
('carlitos@gmail.com', 1065),
('carlitos@gmail.com', 0),
('barriguin123@gmail.com', 900),
('barriguin123@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD KEY `correo` (`correo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
