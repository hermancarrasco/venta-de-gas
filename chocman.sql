-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2018 a las 03:03:10
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chocman`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE IF NOT EXISTS `creditos` (
  `id_credito` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `fecha_otorgado` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_pago` date DEFAULT NULL,
  `observacion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `creditos`
--

INSERT INTO `creditos` (`id_credito`, `id_producto`, `cantidad`, `nombre`, `direccion`, `precio`, `fecha_otorgado`, `hora`, `fecha_pago`, `observacion`) VALUES
(1, 3, 1, 'herman carrasco soto', 'el huapi no tengo idea del numero', NULL, '2016-07-07', '10:24:23', '2016-07-26', NULL),
(2, 3, 2, 'aaaa', 'direccion2', NULL, '2016-07-07', '10:29:22', '2016-07-25', NULL),
(3, 2, 1, 'zxc', 'direccion', NULL, '2016-07-07', '10:41:33', '2016-07-26', NULL),
(4, 3, 1, 'pablo', 'machuca', NULL, '2016-07-07', '08:19:19', '2016-07-25', NULL),
(5, 2, 1, 'aaa', 'bbbb', NULL, '2016-07-07', '15:23:14', '2016-07-26', NULL),
(6, 3, 2, 'herman carrascps soto', 'el huapio asdklma', 15000, '2016-07-23', '21:18:21', '2016-07-26', NULL),
(7, 3, 1, 'aaaeeee', 'eeeeaaaa', 15000, '2016-07-23', '21:28:17', '2016-07-26', NULL),
(8, 3, 1, 'wwwww', 'eeeee', 15000, '2016-07-23', '21:30:28', '2016-07-26', 'mklnnjlnkjnjnjkl pppppp'),
(9, 2, 1, 'herman carrasco', 'el huapi asdjkans', 12000, '2016-07-24', '22:04:34', '2016-07-26', ''),
(10, 3, 1, 'aaaeeee', 'fco diaz muños, Pje los altillos #805', 14500, '2016-07-26', '00:29:24', '2016-07-26', ''),
(11, 3, 1, 'herman carraso', 'el huapi', 14500, '2016-07-26', '00:30:43', '2016-07-27', 'ddd'),
(12, 2, 1, 'aaaaaa', 'sdasdasd', 2323, '2016-07-27', '20:02:05', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre_empresa`) VALUES
(1, 'Gasco'),
(2, 'Abastible'),
(3, 'Lipigas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE IF NOT EXISTS `gastos` (
  `id_gasto` int(11) NOT NULL,
  `tipo_gasto` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `oservacion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE IF NOT EXISTS `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_devuelto` date DEFAULT NULL,
  `observacion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `id_producto`, `cantidad`, `nombre`, `direccion`, `fecha_prestamo`, `hora`, `fecha_devuelto`, `observacion`) VALUES
(1, 3, 1, 'sfsdfsdf', 'sdnfsjdnfkj 234234', '2016-07-07', '13:55:14', '2016-07-25', 'llllllddf'),
(2, 2, 1, 'hhhhh', 'uuuu', '2016-07-07', '15:44:09', '2016-07-25', 'asd'),
(3, 3, 1, 'herman carrascp', 'fco diaz muños, Pje los altillos #805', '2016-07-26', '00:27:53', '2016-07-26', ''),
(4, 4, 1, 'aaaeeee', 'fco diaz muños, Pje los altillos #805', '2016-07-26', '00:28:53', '2016-07-26', ''),
(5, 2, 1, 'herman carraso s', 'el huapi ss', '2016-07-26', '00:31:26', '2016-07-26', ''),
(6, 3, 1, 'herman carraso s', 'el huapi ss', '2016-07-26', '00:31:47', '2016-07-26', ''),
(7, 3, 1, 'herman carraso', 'sdfsdfsdf', '2016-07-27', '20:03:35', '2016-07-27', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `carga_producto` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_critico` int(11) NOT NULL,
  `detalle producto` varchar(400) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_empresa`, `nombre_producto`, `carga_producto`, `precio_compra`, `precio_venta`, `stock`, `stock_critico`, `detalle producto`) VALUES
(1, 1, 'Gas 5KG', 5, 0, 7500, 0, 0, NULL),
(2, 1, 'Gas 11KG', 11, 0, 12000, 0, 0, NULL),
(3, 1, 'Gas 15KG', 15, 0, 14500, 0, 0, NULL),
(4, 1, 'Gas 45Kg', 45, 0, 42000, 0, 0, NULL),
(5, 2, 'Gas 15Kg', 15, 0, 15000, 0, 0, NULL),
(6, 3, 'Gas 15Kg', 15, 0, 14000, 0, 0, NULL),
(7, 1, 'Gas GH', 15, 0, 13000, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipogasto`
--

CREATE TABLE IF NOT EXISTS `tipogasto` (
  `id_tipo_gasto` int(11) NOT NULL,
  `gasto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipogasto`
--

INSERT INTO `tipogasto` (`id_tipo_gasto`, `gasto`) VALUES
(1, 'Combustible'),
(2, 'Descuentos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_producto`, `cantidad`, `precio_venta`, `fecha`) VALUES
(1, 1, 6, 2400, '2016-07-27'),
(2, 2, 4, 500, '2016-07-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`id_credito`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`),
  ADD KEY `pk_gastos` (`tipo_gasto`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
  ADD PRIMARY KEY (`id_tipo_gasto`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id_credito` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
  MODIFY `id_tipo_gasto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD CONSTRAINT `pkCreditosProd` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `pkgasto` FOREIGN KEY (`tipo_gasto`) REFERENCES `tipogasto` (`id_tipo_gasto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `pkPrestamoProd` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `pkEmpresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `pkProducto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
