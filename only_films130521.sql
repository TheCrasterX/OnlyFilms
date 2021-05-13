-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2021 a las 21:48:01
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
-- Estructura de tabla para la tabla `only_films`
--

CREATE TABLE `only_films` (
  `id` int(5) NOT NULL,
  `Titulo` varchar(80) NOT NULL,
  `Foto` varchar(500) DEFAULT NULL,
  `Sinopsis` varchar(500) DEFAULT NULL,
  `Genero` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `only_films`
--

INSERT INTO `only_films` (`id`, `Titulo`, `Foto`, `Sinopsis`, `Genero`) VALUES
(1, 'Salvar al soldado Ryan', 'https://pics.filmaffinity.com/Salvar_al_soldado_Ryan-585301228-large.jpg', 'Tras el desembarco de Normandía durante la Segunda Guerra Mundial, donde murieron muchos combatientes aliados, un grupo de soldados americanos es elegido para llevar a cabo su última misión: salvar a un solo hombre que se encuentra al otro lado de las líneas enemigas.', 'Acción');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `only_films`
--
ALTER TABLE `only_films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `only_films`
--
ALTER TABLE `only_films`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
