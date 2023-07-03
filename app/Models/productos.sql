-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 22:53:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `nombre`, `precio`, `stock`, `descripcion`) VALUES
(1, '11223344', 'Acer Aspire 5 A515-4', 450, 35, 'Pantalla IPS Full HD de 15.6 pulgadas, procesador móvil AMD Ryzen 3 3350U Quad-Core, DDR4 de 4 GB, unidad de estado sólido SSD NVMe de 128 GB, WiFi 6, teclado retroiluminado, registro de punto flotante, Alexa de Amazon y Windows 11 Home en modo S.'),
(3, '22334455', 'GIGABYTE GeForce RTX', 200, 5, '2 ventiladores WINDFORCE, 12GB 192-bit GDDR6, GV-N3060EAGLE OC-12GD \r\n\r\n-Multiprocesadores de transmisión NVIDIA Ampere\r\n-Núcleos RT de segunda generación\r\n-Núcleos Tensor de 3ª generación\r\n-Alimentado por GeForce RTX 3060. Evita el uso de software no oficial\r\n-Integrado con interfaz de memoria GDDR6 de 192 bits de 12 GB');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
