-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2019 a las 04:00:57
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bicicleteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(10) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descripcion`) VALUES
(1, 'bicicleta'),
(2, 'scooter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `consulta` varchar(500) NOT NULL,
  `eliminado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(10) NOT NULL,
  `descripcion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `precio_costo` double(10,2) NOT NULL,
  `precio_venta` double(10,2) NOT NULL,
  `stock` int(10) NOT NULL DEFAULT '0',
  `stock_min` int(10) NOT NULL DEFAULT '0',
  `imagen` varchar(500) DEFAULT NULL,
  `eliminado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `marca`, `modelo`, `descripcion`, `id_categoria`, `precio_costo`, `precio_venta`, `stock`, `stock_min`, `imagen`, `eliminado`) VALUES
(1, 'Freego', 'EFE Freego Scooter', 'Potencia: 200 - 250w, Velocidad máx.: 25km/h, Voltaje: 30V, Bateria: 4800 mAh litio 208Wh, Peso: 10,5 kg', 1, 1000.00, 45000.00, 9, 1, 'assets/img/productos/imagen1.jpg', 'NO'),
(2, 'OVER', 'B12', 'Potencia: 251 - 350w, Velocidad máx.: 35-38 km/h, Voltaje: 36V, Bateria: 36 V 13AH Samsung, Peso: 16 kg', 1, 1000.00, 45000.00, 9, 1, 'assets/img/productos/imagen2.jpg', 'NO'),
(3, 'RAZOR', 'RAZOR-132', 'Potencia: 200 - 250w, Velocidad máx.: 30 km/h, Voltaje: 36V, Bateria: LG batería 5.3Ah ~ 9.9Ah, Peso: 16 kg', 2, 1000.00, 21500.00, 8, 1, 'assets/img/productos/imagen3.png', 'NO'),
(4, 'ROBSTEP', 'X1', 'Potencia: 200 - 250w, Velocidad máx.: 20 km/h, Voltaje: 36V, Bateria: LG batería 4.8Ah, Peso: 17 kg', 1, 1000.00, 45500.00, 9, 1, 'assets/img/productos/imagen4.png', 'NO'),
(5, 'FITFIU', 'BIE0004G', 'Potencia: 250w, Velocidad máx.: 30 km/h, Voltaje: 36V, Bateria: ION LITIO 9.6Ah, Peso: 25,7 kg', 1, 1000.00, 46000.00, 10, 1, 'assets/img/productos/imagen5.jpg', 'NO'),
(6, 'XIAOMI', 'Mijia 365', 'Potencia: 200 - 250w, Velocidad máx.: 30 km/h, Voltaje: 36V, Bateria: LG batería 5.3Ah ~ 9.9Ah, Peso: 16 kg', 2, 1000.00, 22000.00, 8, 1, 'assets/img/productos/imagen6.png', 'NO'),
(7, 'XIAOMI', 'ELITE', 'Potencia: 200 - 250w, Velocidad máx.: 30 km/h, Voltaje: 36V, Bateria: LG batería 5.3Ah ~ 9.9Ah, Peso: 16 kg', 1, 41000.00, 40000.00, 9, 1, 'assets/img/productos/imagen7.jpg', 'NO'),
(8, 'Freego', 'B12', 'Potencia: 200 - 250w, Velocidad máx.: 30 km/h, Voltaje: 36V, Bateria: LG batería 5.3Ah ~ 9.9Ah, Peso: 16 kg', 2, 1000.00, 20000.00, 10, 1, 'assets/img/productos/imagen8.png', 'NO'),
(9, 'ROBSTEP', 'BIE0004G', 'Potencia: 200 - 250w, Velocidad máx.: 30 km/h, Voltaje: 36V, Bateria: LG batería 5.3Ah ~ 9.9Ah, Peso: 16 kg', 1, 1000.00, 31500.00, 9, 1, 'assets/img/productos/imagen21.jpg', 'NO'),
(10, 'Freego', 'EFE Freego', 'Potencia: 200 - 250w, Velocidad máx.: 25km/h, Voltaje: 30V, Bateria: 4800 mAh litio 208Wh, Peso: 10,5 kg', 1, 1000.00, 45000.00, 9, 1, 'assets/img/productos/imagen1.jpg', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_perfil` int(10) NOT NULL DEFAULT '2',
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `password`, `id_perfil`, `baja`) VALUES
(1, 'Cody', 'Cole', 'est.ac.mattis@magnaUt.ca', 'sem', 'elit', 2, 'NO'),
(2, 'Violet', 'Rivera', 'non.bibendum.sed@sem.edu', 'Etiam', 'fringilla', 2, 'NO'),
(3, 'Maryam', 'Ewing', 'sed@ametdiameu.co.uk', 'mi', 'sociis', 2, 'NO'),
(4, 'Rachel', 'Sloan', 'lorem.lorem@dolorsitamet.net', 'sem.', 'a,', 2, 'NO'),
(5, 'Lillian', 'Gamble', 'Donec@erosProin.ca', 'enim', 'eget', 2, 'NO'),
(6, 'Dominique', 'Miles', 'sem@ante.net', 'id,', 'nec,', 2, 'NO'),
(7, 'Fallon', 'Tyson', 'odio.vel@Morbivehicula.org', 'dictum.', 'et', 2, 'NO'),
(8, 'Evelyn', 'Herman', 'elementum.sem@maurisipsumporta.net', 'vitae,', 'urna.', 2, 'NO'),
(9, 'Abbot', 'Benjamin', 'Nam@faucibus.org', 'sit', 'placerat,', 2, 'NO'),
(10, 'Preston', 'Wells', 'luctus@egetmollis.com', 'ligula', 'rutrum', 2, 'NO'),
(11, 'dsa', 'dsa', 'dsa@dsa.com', 'dsa', 'dsa', 2, 'NO'),
(12, 'asd', 'asd', 'asd@asd.com', 'asd', 'asd', 1, 'NO'),
(13, 'admin', 'admin', 'admin@bc4all.com', 'admin', 'admin', 1, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id_venta` int(11) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total_venta` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id_venta`, `fecha`, `id_usuario`, `total_venta`) VALUES
(1, '2019-06-11', 1, 90500.00),
(2, '2019-06-11', 3, 88000.00),
(3, '2019-06-11', 5, 75500.00),
(4, '2019-06-11', 5, 40000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id_detalle` int(11) UNSIGNED NOT NULL,
  `id_venta` int(11) UNSIGNED NOT NULL,
  `id_producto` int(11) UNSIGNED NOT NULL,
  `cantidad` int(11) UNSIGNED NOT NULL,
  `precio` double(10,2) UNSIGNED NOT NULL,
  `total` double(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id_detalle`, `id_venta`, `id_producto`, `cantidad`, `precio`, `total`) VALUES
(1, 1, 4, 1, 45500.00, 45500.00),
(2, 1, 2, 1, 45000.00, 45000.00),
(3, 2, 1, 1, 45000.00, 45000.00),
(4, 2, 3, 2, 21500.00, 43000.00),
(5, 3, 9, 1, 31500.00, 31500.00),
(6, 3, 6, 2, 22000.00, 44000.00),
(7, 4, 7, 1, 40000.00, 40000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id_venta` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id_detalle` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id_perfil`);

--
-- Filtros para la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD CONSTRAINT `ventas_cabecera_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventas_detalle_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas_cabecera` (`id_venta`),
  ADD CONSTRAINT `ventas_detalle_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
