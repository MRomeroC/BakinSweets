-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2018 a las 14:35:44
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bakinsweets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `nombreArticulo` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `idSubcat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `code` varchar(2) DEFAULT NULL,
  `idProvincia` int(2) NOT NULL,
  `name` varchar(21) DEFAULT NULL,
  `phone_code` int(3) DEFAULT NULL,
  `iso2` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`code`, `idProvincia`, `name`, `phone_code`, `iso2`) VALUES
('VI', 1, 'Álava', 945, 'ES'),
('AB', 2, 'Albacete', 967, 'ES'),
('A', 3, 'Alacant', 950, 'ES'),
('AL', 4, 'Almería', 920, 'ES'),
('AV', 5, 'Ávila', 924, 'ES'),
('BA', 6, 'Badajoz', 924, 'ES'),
('PM', 7, 'Illes Balears', 971, 'ES'),
('B', 8, 'Barcelona', 93, 'ES'),
('BU', 9, 'Burgos', 947, 'ES'),
('CC', 10, 'Cáceres', 927, 'ES'),
('CA', 11, 'Cádiz', 956, 'ES'),
('CS', 12, 'Castelló', 964, 'ES'),
('CR', 13, 'Ciudad Real', 926, 'ES'),
('CO', 14, 'Córdoba', 957, 'ES'),
('C', 15, 'A Coruña', 981, 'ES'),
('CU', 16, 'Cuenca', 969, 'ES'),
('GI', 17, 'Girona', 972, 'ES'),
('GR', 18, 'Granada', 958, 'ES'),
('GU', 19, 'Guadalajara', 949, 'ES'),
('SS', 20, 'Gipuzkoa', 943, 'ES'),
('H', 21, 'Huelva', 959, 'ES'),
('HU', 22, 'Huesca', 974, 'ES'),
('J', 23, 'Jaén', 953, 'ES'),
('LE', 24, 'León', 987, 'ES'),
('L', 25, 'Lleida', 973, 'ES'),
('LO', 26, 'La Rioja', 941, 'ES'),
('LU', 27, 'Lugo', 982, 'ES'),
('M', 28, 'Madrid', 91, 'ES'),
('MA', 29, 'Málaga', 95, 'ES'),
('MU', 30, 'Murcia', 968, 'ES'),
('NA', 31, 'Nafarroa', 948, 'ES'),
('OR', 32, 'Ourense', 988, 'ES'),
('O', 33, 'Asturias', 98, 'ES'),
('P', 34, 'Palencia', 979, 'ES'),
('GC', 35, 'Las Palmas', 928, 'ES'),
('PO', 36, 'Pontevedra', 986, 'ES'),
('SA', 37, 'Salamanca', 923, 'ES'),
('TF', 38, 'Sta. Cruz de Tenerife', 922, 'ES'),
('S', 39, 'Cantabria', 942, 'ES'),
('SG', 40, 'Segovia', 921, 'ES'),
('SE', 41, 'Sevilla', 95, 'ES'),
('SO', 42, 'Soria', 975, 'ES'),
('T', 43, 'Tarragona', 977, 'ES'),
('TE', 44, 'Teruel', 978, 'ES'),
('TO', 45, 'Toledo', 925, 'ES'),
('V', 46, 'Valéncia', 96, 'ES'),
('VA', 47, 'Valladolid', 983, 'ES'),
('BI', 48, 'Bizkaia', 94, 'ES'),
('ZA', 49, 'Zamora', 980, 'ES'),
('Z', 50, 'Zaragoza', 976, 'ES'),
('CE', 51, 'Ceuta', 956, 'ES'),
('ML', 52, 'Melilla', 95, 'ES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idSubcat` int(11) NOT NULL,
  `nombreSubcat` varchar(30) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `idProvincia` int(11) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `email`, `nombre`, `apellidos`, `direccion`, `ciudad`, `cp`, `idProvincia`, `telefono`, `clave`, `admin`) VALUES
(1, 'administrador@bakinsweets.com', 'Administrador', '', '', '', '', 33, '', 'b7abe7600dd602ad51679e9939d3e7b67f69cfb2', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `idSubcat` (`idSubcat`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idProvincia`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idSubcat`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idProvincia` (`idProvincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `idSubcat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
