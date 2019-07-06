-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2019 a las 17:45:01
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador_obstgarten`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `IDcategoria` int(15) NOT NULL,
  `descripcion_categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IDcliente` int(15) NOT NULL,
  `nombrecliente` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidocliente` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccioncliente` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudadcliente` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paiscliente` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechanacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IDcliente`, `nombrecliente`, `apellidocliente`, `direccioncliente`, `ciudadcliente`, `paiscliente`, `fechanacimiento`) VALUES
(1, 'Jessica', 'Dinger', 'Av. de la Paz 3', 'CABA', 'Argentina', '1994-07-16'),
(2, 'Jan', 'Dinger', 'Av. de la Paz 3', 'CABA', 'Argentina', '0000-00-00'),
(3, 'Juan Fernando', 'Reichel', 'Espania 234', 'Puiggari', 'Argentina', '1985-01-30'),
(4, 'Abril', 'Racino', 'Pellegrini 2367', 'Rosario', 'Argentina', '1996-06-16'),
(5, 'Yamila', 'Bara', 'Pje. Monroe 345', 'Victoria', 'Argentina', '1991-07-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Código` int(10) NOT NULL,
  `tipo_de_producto` int(50) NOT NULL,
  `Descripción` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio_unitario` float NOT NULL,
  `Moneda` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Código`, `tipo_de_producto`, `Descripción`, `Precio_unitario`, `Moneda`) VALUES
(1, 0, 'mermelada de arandanos', 356, 'ARS'),
(2, 0, 'palta argentina', 100, 'ARS'),
(3, 0, 'porotos envasados', 168, 'ARS'),
(4, 0, 'jugo exprimido envasado de mandarinas x litro', 215, 'ARS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_ventas` int(15) NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `id_producto` int(15) NOT NULL,
  `cantidad_producto` int(15) NOT NULL,
  `importe` float NOT NULL,
  `media_de_pago` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_ventas`, `id_cliente`, `id_producto`, `cantidad_producto`, `importe`, `media_de_pago`) VALUES
(1, 1, 2, 4, 358, 'Tarjeta de creidto'),
(2, 4, 3, 3, 780, 'Mercado Pago');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`IDcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IDcliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Código`),
  ADD KEY `tipo_de_producto` (`tipo_de_producto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_ventas`),
  ADD KEY `ventas_ibfk_1` (`id_producto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `IDcategoria` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IDcliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Código` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_ventas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`IDcategoria`) REFERENCES `productos` (`Código`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`Código`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`IDcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
