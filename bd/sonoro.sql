-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-05-2013 a las 19:55:45
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sonoro` versión 0.0
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(4) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confirmacion`
--

CREATE TABLE IF NOT EXISTS `confirmacion` (
  `id_confirmacion` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_confirmacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_archivo`
--

CREATE TABLE IF NOT EXISTS `item_archivo` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(140) NOT NULL,
  `file_image` varchar(30) NOT NULL,
  `file_sound` varchar(30) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `revisado` tinyint(1) NOT NULL,
  `data_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `persona_id` int(5) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(5) NOT NULL,
  `nombre` varchar(16) NOT NULL,
  `apellido_1` varchar(16) NOT NULL,
  `apellido_2` varchar(16) DEFAULT NULL,
  `data_nacimiento` date NOT NULL,
  `mail` varchar(50) NOT NULL,
  `observacion` text NOT NULL,
  `confirmado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relato`
--

CREATE TABLE IF NOT EXISTS `relato` (
  `id_registro` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(5) NOT NULL AUTO_INCREMENT,
  `alias_usuario` varchar(30) NOT NULL,
  `cuenta_activa` tinyint(4) NOT NULL,
  `mailing` tinyint(4) NOT NULL,
  `key_word` varchar(50) NOT NULL,
  `avatar` varchar(30) DEFAULT NULL,
  `rol` tinyint(4) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `alias_usuario`, `cuenta_activa`, `mailing`, `key_word`, `avatar`, `rol`) VALUES
(1, 'admin', 1, 1, '', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `id_registro` int(11) NOT NULL,
  `video` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
