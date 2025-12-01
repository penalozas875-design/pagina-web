-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2025 a las 03:54:52
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
-- Base de datos: `crud_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `id_tipo`) VALUES
(21, 'Mouse inalámbrico Logitech M170', 45000.00, 4),
(22, 'Teclado mecánico Redragon K552 Kumara', 180000.00, 4),
(23, 'Audífonos gamer HyperX Cloud Stinger', 150000.00, 2),
(24, 'Webcam Full HD Logitech C920', 230000.00, 4),
(25, 'Alfombrilla para mouse RGB XL', 30000.00, 1),
(26, 'Parlantes Logitech Z200 2.0', 95000.00, 2),
(27, 'Memoria USB Kingston 64GB', 40000.00, 3),
(28, 'Disco duro externo Seagate 1TB', 220000.00, 3),
(29, 'Soporte ajustable para laptop', 50000.00, 5),
(30, 'Hub USB 3.0 de 4 puertos', 35000.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`) VALUES
(1, 'Accesorios de computador'),
(2, 'Audio'),
(3, 'Almacenamiento'),
(4, 'Periféricos'),
(5, 'Soportes y bases');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
