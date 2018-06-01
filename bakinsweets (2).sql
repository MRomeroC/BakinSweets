-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2018 a las 13:31:30
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
  `stock` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `idSubcat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `nombreArticulo`, `descripcion`, `precio`, `stock`, `foto`, `idSubcat`) VALUES
(1, 'Lemonburst', 'ExplosiÃ³n cÃ­trica en forma de cupcake de limÃ³n.', '2.50', 15, '../imagenes/Cupcakes/1_131649.jpg', 1),
(2, 'Chococup', 'Cupcake de chocolate con cobertura de chocolate blanco y almendra caramelizada.', '3.00', 12, '../imagenes/Cupcakes/2_132008.jpg', 2),
(3, 'Selva Negra', 'El mejor sabor de Alemania en cupcake.', '2.50', 30, '../imagenes/Cupcakes/3_132455.jpg', 3),
(4, 'Carrotcup', 'Cupcake de zanahoria con toque de nuestras especias mÃ¡s exÃ³ticas.', '2.50', 30, '../imagenes/Cupcakes/4_132655.jpg', 3),
(5, 'Valentine', 'Cupcake de vainilla con trocitos de fresa y cobertura de queso crema.', '2.50', 28, '../imagenes/Cupcakes/5_132813.jpg', 3),
(6, 'Vegan Cookie', 'Galletas con margarina, panela y cacao nibs. ', '2.00', 99, '../imagenes/Galletas/6_135700.jpg', 4),
(7, 'Cuadradita', 'Galleta con mezcla de harinas de arroz y avena.', '1.80', 100, '../imagenes/Galletas/7_140116.jpg', 5),
(8, 'Brownie', 'La mezcla perfecta, galleta y brownie. Te llegarÃ¡ al corazÃ³n. ', '2.30', 97, '../imagenes/Galletas/8_140225.jpg', 6),
(9, 'Crocanti', 'Galleta de avena con trocitos de almendra crocanti.', '2.50', 100, '../imagenes/Galletas/9_140413.jpg', 6),
(10, '3 chocolates', 'Galleta con trocitos de chocolate puro, con leche y blanco.', '2.40', 100, '../imagenes/Galletas/10_140551.jpg', 6),
(11, 'Macaron', 'Macarons de varios sabores y distintos rellenos.', '1.50', 120, '../imagenes/Galletas/11_141030.jpg', 6),
(12, 'Chocochip', 'Galleta tipo americana con chips de chocolate.', '1.80', 200, '../imagenes/Galletas/12_141204.jpg', 6),
(13, 'Matcha', 'Tarta con bizcocho baÃ±ado en tÃ© matcha y crema de espirulina. ', '25.00', 4, '../imagenes/Tartas/13_141658.jpg', 7),
(14, 'Tartaleta', 'Tartaleta de harina de garbanzo con cobertura de nata y frutas del bosque. ', '20.00', 3, '../imagenes/Tartas/14_141836.jpg', 8),
(15, 'Brownie', 'Brownie fudge chocolate al mÃ¡s puro estilo americano.', '15.00', 10, '../imagenes/Tartas/15_141927.jpg', 9),
(16, 'Carrot Cake', 'Tarta de zanahoria con cobertura de queso crema y trocitos de chocolate y zanahoria escarchada', '28.00', 3, '../imagenes/Tartas/16_142059.jpg', 9),
(17, 'Cheesecake', 'Tarta de queso con coulis de frutos rojos.', '26.00', 3, '../imagenes/Tartas/17_142204.jpg', 9),
(18, 'Physalis', 'Tarta de limÃ³n con physalis, cerezas Ã¡cidas de la China.', '17.00', 2, '../imagenes/Tartas/18_142619.jpg', 9),
(19, 'Mango', 'Tarta de mango del Amazonas. ', '18.00', 2, '../imagenes/Tartas/19_142727.jpg', 9),
(20, 'Peppermint', 'Tarta de menta y chocolate blanco. ', '21.00', 4, '../imagenes/Tartas/20_142837.jpg', 9),
(21, 'Nutella', 'Tarta de Nutella, nunca decepciona.', '18.00', 8, '../imagenes/Tartas/21_143116.jpg', 9),
(22, 'Pavlova', 'Tarta de merengue y nata', '20.00', 4, '../imagenes/Tartas/22_143301.jpg', 9),
(23, 'Plum Pie', 'Pastel de ciruela.', '19.00', 6, '../imagenes/Tartas/23_143351.jpg', 9),
(24, 'Selva Negra', 'Bizcocho de chocolate con nata y mermelada de cereza.', '30.00', 2, '../imagenes/Tartas/24_143543.jpg', 9),
(25, 'TiramisÃº', 'TiramisÃº con el autÃ©ntico mascarpone.', '24.00', 1, '../imagenes/Tartas/25_143637.jpg', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(20) NOT NULL,
  `descripcionCat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`, `descripcionCat`) VALUES
(1, 'Cupcakes', 'Tartas en miniatura.'),
(2, 'Galletas', 'Galletas de muchos sabores.'),
(3, 'Tartas', 'Tartas de muchos sabores.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedidos`
--

CREATE TABLE `lineaspedidos` (
  `idPedido` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioPedido` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lineaspedidos`
--

INSERT INTO `lineaspedidos` (`idPedido`, `idArticulo`, `cantidad`, `precioPedido`) VALUES
(1, 7, 1, '1.80'),
(1, 14, 1, '20.00'),
(1, 17, 1, '26.00'),
(4, 4, 1, '2.50'),
(4, 15, 1, '15.00'),
(4, 16, 1, '28.00'),
(5, 4, 5, '2.50'),
(7, 2, 1, '3.00'),
(7, 8, 3, '2.30'),
(7, 14, 1, '20.00'),
(9, 1, 9, '2.50'),
(9, 6, 1, '2.00'),
(9, 13, 1, '25.00'),
(10, 2, 3, '3.00'),
(11, 19, 1, '18.00'),
(11, 22, 1, '20.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters`
--

CREATE TABLE `newsletters` (
  `idNewsletter` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `newsletters`
--

INSERT INTO `newsletters` (`idNewsletter`, `email`) VALUES
(1, 'pepito@gmail.com'),
(2, 'manolin@gmail.com'),
(3, 'lolita@gmail.com'),
(4, 'roberto@gmail.com'),
(8, 'manolin@gmail.com'),
(10, 'lolin@gmail.com'),
(17, 'ramon@ramonin.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `totalPedido` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idUsuario`, `fechaPedido`, `horaPedido`, `totalPedido`) VALUES
(1, 2, '2018-05-25', '13:51:21', '47.80'),
(2, 2, '2018-05-25', '13:51:59', '0.00'),
(3, 2, '2018-05-25', '13:58:49', '0.00'),
(4, 2, '2018-05-30', '10:38:08', '45.50'),
(5, 2, '2018-05-30', '10:44:06', '12.50'),
(6, 2, '2018-05-30', '10:48:25', '0.00'),
(7, 2, '2018-05-30', '10:53:52', '29.90'),
(8, 2, '2018-05-30', '10:55:53', '0.00'),
(9, 5, '2018-05-31', '14:32:23', '49.50'),
(10, 5, '2018-05-31', '14:38:02', '9.00'),
(11, 6, '2018-06-01', '12:49:09', '38.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `code` varchar(2) DEFAULT NULL,
  `idProvincia` int(2) NOT NULL,
  `nombreProvincia` varchar(21) DEFAULT NULL,
  `phone_code` int(3) DEFAULT NULL,
  `iso2` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`code`, `idProvincia`, `nombreProvincia`, `phone_code`, `iso2`) VALUES
('VI', 1, 'Ã¡lava', 945, 'ES'),
('AB', 2, 'Albacete', 967, 'ES'),
('A', 3, 'Alacant', 950, 'ES'),
('AL', 4, 'AlmerÃ­a', 920, 'ES'),
('AV', 5, 'Ã¡vila', 924, 'ES'),
('BA', 6, 'Badajoz', 924, 'ES'),
('PM', 7, 'Illes Balears', 971, 'ES'),
('B', 8, 'Barcelona', 93, 'ES'),
('BU', 9, 'Burgos', 947, 'ES'),
('CC', 10, 'CÃ¡ceres', 927, 'ES'),
('CA', 11, 'CÃ¡diz', 956, 'ES'),
('CS', 12, 'CastellÃ³', 964, 'ES'),
('CR', 13, 'Ciudad Real', 926, 'ES'),
('CO', 14, 'CÃ³rdoba', 957, 'ES'),
('C', 15, 'A CoruÃ±a', 981, 'ES'),
('CU', 16, 'Cuenca', 969, 'ES'),
('GI', 17, 'Girona', 972, 'ES'),
('GR', 18, 'Granada', 958, 'ES'),
('GU', 19, 'Guadalajara', 949, 'ES'),
('SS', 20, 'Gipuzkoa', 943, 'ES'),
('H', 21, 'Huelva', 959, 'ES'),
('HU', 22, 'Huesca', 974, 'ES'),
('J', 23, 'JaÃ©n', 953, 'ES'),
('LE', 24, 'LeÃ³n', 987, 'ES'),
('L', 25, 'Lleida', 973, 'ES'),
('LO', 26, 'La Rioja', 941, 'ES'),
('LU', 27, 'Lugo', 982, 'ES'),
('M', 28, 'Madrid', 91, 'ES'),
('MA', 29, 'MÃ¡laga', 95, 'ES'),
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
('V', 46, 'Valencia', 96, 'ES'),
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
  `descripcionSubcat` varchar(100) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idSubcat`, `nombreSubcat`, `descripcionSubcat`, `idCategoria`) VALUES
(1, 'Veganas', 'Cupcakes sin ingredientes de origen animal.', 1),
(2, 'Sin gluten', 'Cupcakes sin gluten', 1),
(3, 'Originales', 'Las Cupcakes originales, las de siempre.', 1),
(4, 'Veganas', 'Galletas sin ingredientes de origen animal.', 2),
(5, 'Sin gluten', 'Galletas sin gluten.', 2),
(6, 'Originales', 'Las Galletas orginales, como las de siempre.', 2),
(7, 'Veganas', 'Tartas sin ingredientes de origen animal.', 3),
(8, 'Sin gluten', 'Tartas sin gluten', 3),
(9, 'Originales', 'Tartas originales, como las de siempre.', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
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

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `nombre`, `apellidos`, `direccion`, `ciudad`, `cp`, `idProvincia`, `telefono`, `clave`, `admin`) VALUES
(1, 'administrador@bakinsweets.com', 'Administrador', '', '', '', '', 33, '', 'b7abe7600dd602ad51679e9939d3e7b67f69cfb2', 1),
(2, 'pepito@gmail.com', 'Pepito', 'PepÃ³n', 'Calle Dindurra, 21', 'GijÃ³n', '33202', 33, '666777888', 'd8913df37b24c97f28f840114d05bd110dbb2e44', 0),
(3, 'pepo@gmail.com', '', 'PepÃ³n', 'Calle Dindurra, 21', 'GijÃ³n', '33202', 33, '666777888', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35', 0),
(4, 'roberto@gmail.com', 'Roberto', 'Rodiles Blanco', 'Casimiro Velasco, 69', 'GijÃ³n', '33201', 33, '676351423', 'c4ed2ec0cd05d58c02118f385be74de002d708cf', 0),
(5, 'manolin@gmail.com', 'Manolo', 'Manolete', 'Casimiro Velasco, 69', 'GijÃ³n', '33201', 33, '676351423', 'f0969976d543722f1e04ac1af39a51ea26ae3194', 0),
(6, 'victor@hotmail.com', 'VÃ­ctor', 'Casas', 'Calle Bolivia, 16', 'Alhama de Murcia', '30840', 30, '666222000', 'a6b941fd708f557c1aeaaed00ae6044c1cb3f011', 0);

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
-- Indices de la tabla `lineaspedidos`
--
ALTER TABLE `lineaspedidos`
  ADD PRIMARY KEY (`idPedido`,`idArticulo`),
  ADD KEY `idArticulo` (`idArticulo`);

--
-- Indices de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`idNewsletter`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `fk_idUsuario` (`idUsuario`);

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
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `idProvincia` (`idProvincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `idNewsletter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `idSubcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`idSubcat`) REFERENCES `subcategorias` (`idSubcat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineaspedidos`
--
ALTER TABLE `lineaspedidos`
  ADD CONSTRAINT `lineaspedidos_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lineaspedidos_ibfk_2` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`idArticulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `subcategorias_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idProvincia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
