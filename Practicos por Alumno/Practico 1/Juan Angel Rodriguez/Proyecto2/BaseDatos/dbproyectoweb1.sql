-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2017 a las 05:41:05
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyectoweb1`
--
CREATE DATABASE IF NOT EXISTS `dbproyectoweb1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbproyectoweb1`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_juego_insert`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_juego_insert` (IN `nombre` VARCHAR(200), IN `precio` DECIMAL(9,2), IN `descripcion` VARCHAR(500), IN `imagen` VARCHAR(200))  NO SQL
INSERT INTO Juego(nombre,precio,descripcion,imagen) 
            VALUES (p_nombre, p_precio, p_descripcion, p_imagen)$$

DROP PROCEDURE IF EXISTS `sp_juego_selectall`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_juego_selectall` ()  NO SQL
SELECT idJuego, nombre, precio, descripcion, imagen
                FROM juego$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `idCategoriaPadre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `idCategoriaPadre`) VALUES
(1, 'PS4', NULL),
(2, 'PS3', NULL),
(3, 'PS Vita/PSP', NULL),
(4, 'otros', NULL),
(5, 'Full Games', 1),
(6, 'Digitales', 1),
(7, 'Exclusividades', 1),
(8, 'Free-to-Play', 1),
(9, 'Juegos Indie', 1),
(10, 'Cross-Platform', 1),
(11, 'Full Games', 2),
(12, 'Digitales', 2),
(13, 'Exclusividades', 2),
(14, 'Free-to-Play', 2),
(15, 'Juegos Indie', 2),
(16, 'Cross-Platform', 2),
(17, 'Juegos de PS Vita', 3),
(18, 'Juegos de PSP', 3),
(19, 'Juegos otros', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_juego`
--

DROP TABLE IF EXISTS `categoria_juego`;
CREATE TABLE `categoria_juego` (
  `idCategoriaJuego` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_juego`
--

INSERT INTO `categoria_juego` (`idCategoriaJuego`, `idCategoria`, `idJuego`) VALUES
(1, 1, 4),
(2, 1, 4),
(3, 2, 6),
(4, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

DROP TABLE IF EXISTS `juego`;
CREATE TABLE `juego` (
  `idJuego` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`idJuego`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(4, 'Days Gone', '71.00', 'El software está sujeto a licencia y garantía limitada (us.playstation.com/softwarelicense/sp). Las funciones en línea requieren una cuenta y están sujetas a los términos de servicio y a la.', 'img/frantics.png'),
(5, 'Detroid: Become Human', '69.20', 'DETROIT PRE-ORDER DYNAMIC THEME', 'img/frantics.png'),
(6, 'Pro Evolution Soccer 2018', '35.90', 'Donde se forjan las leyendas\': PES vuelve con nuevas funciones, modos y una gran experiencia de juego.', 'img/frantics.png'),
(7, 'Still Time', '22.99', 'Still Time es un juego de rompecabezas y plataformas en 2D sobre los viajes en el tiempo y la física temporal.', 'img/frantics.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `FKidCategoriaPadre_idx` (`idCategoriaPadre`);

--
-- Indices de la tabla `categoria_juego`
--
ALTER TABLE `categoria_juego`
  ADD PRIMARY KEY (`idCategoriaJuego`),
  ADD KEY `idCategoria_idx` (`idCategoria`),
  ADD KEY `idJuego_idx` (`idJuego`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`idJuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `categoria_juego`
--
ALTER TABLE `categoria_juego`
  MODIFY `idCategoriaJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `FKidCategoriaPadre` FOREIGN KEY (`idCategoriaPadre`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `categoria_juego`
--
ALTER TABLE `categoria_juego`
  ADD CONSTRAINT `idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idJuego` FOREIGN KEY (`idJuego`) REFERENCES `juego` (`idJuego`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
