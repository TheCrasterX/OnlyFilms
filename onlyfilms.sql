-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2021 a las 21:59:33
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `onlyfilms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `only_post`
--

CREATE TABLE `only_post` (
  `id` int(5) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `comentario` varchar(140) NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `only_post`
--

INSERT INTO `only_post` (`id`, `usuario`, `comentario`, `fecha`) VALUES
(2, 'Mario', 'Buenos días a todo el mundo!', '2021-05-05 00:00:00'),
(13, 'Mario', 'Que pasa fieras!', '2021-05-06 00:00:00'),
(15, 'Mario', 'Humanes es una aldea', '2021-05-06 00:00:00'),
(19, 'Periquito', 'Buenas a todos gente de Fuenla', '2021-05-11 21:24:35'),
(20, 'Mario', 'Sin pijama como la Becky G', '2021-05-11 21:27:37'),
(26, 'Mario', 'Tamara la dieta!', '2021-05-11 21:33:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `only_users`
--

CREATE TABLE `only_users` (
  `id` int(5) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fechNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `only_users`
--

INSERT INTO `only_users` (`id`, `usuario`, `pass`, `email`, `fechNacimiento`) VALUES
(1, 'TheCrasterX', '123', 'mario_martin_garcia@hotmail.es', '1997-04-13'),
(2, 'Rayzor', 'elpepe', 'elraul@gmail.com', '1997-10-22'),
(6, 'Lottor24', 'pechofrio', 'pechofrio@gmail.es', '1996-06-23'),
(8, 'Mario', '123', 'mario_martin_garcia@hotmail.es', '1931-04-14'),
(9, 'Periquito', '123', 'periquito@lafuente.com', '1111-11-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `only_post`
--
ALTER TABLE `only_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `only_users`
--
ALTER TABLE `only_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `only_post`
--
ALTER TABLE `only_post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `only_users`
--
ALTER TABLE `only_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `only_post`
--
ALTER TABLE `only_post`
  ADD CONSTRAINT `only_post_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `only_users` (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
