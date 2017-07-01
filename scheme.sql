-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: quantico.cqy15e6qhnlo.us-east-1.rds.amazonaws.com:3306
-- Tiempo de generación: 29-06-2017 a las 03:02:14
-- Versión del servidor: 5.7.11-log
-- Versión de PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorials`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `artist` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `music`
--

INSERT INTO `music` (`id`, `title`, `artist`) VALUES
(1, 'BRIDGE OVER TROUBLED WATER', 'ARTISTS FOR GRENFELL'),
(2, 'DESPACITO (REMIX)', 'LUIS FONSI/DADDY YANKEE'),
(3, 'WILD THOUGHTS', 'DJ KHALED FT RIHANNA/TILLER'),
(4, 'ONE LAST TIME', 'ARIANA GRANDE'),
(5, 'STRIP THAT DOWN', 'LIAM PAYNE FT QUAVO'),
(6, 'POWER', 'LITTLE MIX'),
(7, 'YOUR SONG', 'RITA ORA'),
(8, 'SLOW HANDS', 'NIALL HORAN'),
(9, 'MAMA', 'JONAS BLUE FT WILLIAM SINGE'),
(10, '2U', 'DAVID GUETTA FT JUSTIN BIEBER'),
(11, 'UNFORGETTABLE', 'FRENCH MONTANA FT SWAE LEE'),
(12, 'FEELS', 'HARRIS/PHARRELL/PERRY/BIG SEAN'),
(13, 'ATTENTION', 'CHARLIE PUTH'),
(14, 'MALIBU', 'MILEY CYRUS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
