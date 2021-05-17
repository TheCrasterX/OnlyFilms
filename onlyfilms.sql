-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2021 a las 17:13:24
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'Salvar al soldado Ryan', 'https://es.web.img3.acsta.net/pictures/14/03/05/09/42/163621.jpg', 'Tras el desembarco de Normandía durante la Segunda Guerra Mundial, donde murieron muchos combatientes aliados, un grupo de soldados americanos es elegido para llevar a cabo su última misión: salvar a un solo hombre que se encuentra al otro lado de las líneas enemigas.', 'Accion'),
(2, 'El resplandor', 'https://static2.elcorreo.com/www/multimedia/202005/25/media/cortadas/el-resplandor-kKKH-U1102973139567IB-624x385@RC.jpg', 'La película relata la historia de Jack Torrance, un exprofesor que acepta un puesto como vigilante de invierno en un solitario hotel de alta montaña para ocuparse del mantenimiento. Al poco tiempo de haberse instalado allí junto con su esposa y su hijo, empieza a sufrir inquietantes trastornos de personalidad.', 'Terror'),
(3, 'The Fast and the Furious', 'https://images-na.ssl-images-amazon.com/images/I/71qtDoM-rcL._SY679_.jpg', 'La vida de Dominic Toretto (Vin Diesel) está marcada día y noche por la velocidad. Durante el día prepara y tunea coches de carreras de alta gama, mejora sus prestaciones y los embellece. ... Rápidamente se ganará la confianza de Toretto, pero todo se complicará cuando aparezca su hermana y se enamora de ella.', 'Accion'),
(4, 'Alien: el octavo pasajero', 'https://pics.filmaffinity.com/Alien_el_octavo_pasajero-172055367-large.jpg', 'La nave Nostromo se dirige a la Tierra tras una misión convencional de extracción minera con sus tripulantes en estado de hibernación. Sin embargo, el ordenador principal decide despertarlos antes de tiempo ante la recepción de una señal desconocida.', 'Ciencia Ficción'),
(5, 'El diario de Noa', 'https://i.blogs.es/4c2684/the-notebook-netflix-cambia-el-final/840_560.jpg', 'El libro cuenta la vida de Noah Calhoun y Allie Nelson, dos jóvenes adolescentes de Carolina del Norte que, a pesar de vivir en dos ambientes sociales muy diferentes, pasan un verano idílico juntos y profundamente enamorados, antes de ser separados, primero por sus padres, y más tarde por la Segunda Guerra Mundial.', 'Romantica'),
(6, 'Regreso al futuro', 'https://pics.filmaffinity.com/Regreso_al_futuro-139415628-large.jpg', 'La cinta transcurre en el año 1985, una época en la que el joven Marty McFly lleva una existencia anónima con su novia Jennifer. Los únicos problemas son su familia en crisis y un director al que le encantaría expulsarle del instituto, por lo que deberá hacer todo lo que esté en su mano para revertir esa situación y aparentar total normalidad. Amigo del excéntrico profesor Emmett Brown, una noche le acompaña a probar su nuevo experimento: viajar en el tiempo usando un DeLorean modificado. Sin du', 'Ciencia Ficcion'),
(7, 'Psicosis', 'https://lh3.googleusercontent.com/proxy/0QLf0WbhAPsg1l9cGQCbbDyRhpI372GCHaxscfpuL3Fnqq72UjTW8yEQVpMkH7c3VLj7XpX9fRpfNYP8vDJoQXlLHu8QXNCq7ji0h3xbIkP3o_xOr2b6CgVi1HJFy0bj', 'Inspirada en la novela homónima de Robert Bloch, la historia está ambientada en un tétrico motel de carretera llamado cuyo dueño es Norman Bates (Anthony Perkins, \'Asesinato en el Orient Express\'). Junto al motel hay una casa, tan poco acogedora como el edificio, en la que reside el señor Bates con su madre.', 'Terror'),
(8, 'Leyendas de Pasión', 'https://r4.abcimg.es/resizer/resizer.php?imagen=https%3A%2F%2Fstatic1.abc.es%2Fmedia%2Fpeliculas%2F000%2F000%2F006%2Fleyendas-de-pasion-1.jpg&nuevoancho=690&medio=abc', 'William Ludlow (Anthony Hopkins), un coronel abandonado por su mujer, ha criado a sus tres hijos en su gran rancho de Montana, a los pies de las Montañas Rocosas. La Primera Guerra Mundial (1914-1918) y una bella mujer cambiarán el destino de todos ellos para siempre. Sus hijos son el indómito Tristan (Brad Pitt), el sensato Alfred (Aidan Quinn) y Samuel (Henry Thomas), el menor, que acaba de traer al rancho a su bella prometida Susannah (Julia Ormond).', 'Romantica');

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
(66, 'Mario', 'No entraré en la casa de Odin con miedo!', '2021-05-11 23:23:37'),
(67, 'Mario', 'Tomo me male sal', '2021-05-11 23:36:29'),
(69, 'TheCrasterX', 'Ponganme un jagger con cocacolita', '2021-05-11 23:41:57'),
(70, 'TheCrasterX', 'Mae mia chico', '2021-05-11 23:43:10'),
(71, 'TheCrasterX', 'Que no panda el cunico', '2021-05-11 23:43:22'),
(72, 'TheCrasterX', 'A tomar por cleta la biciculo', '2021-05-11 23:43:31'),
(73, 'TheCrasterX', 'ESO PARA TI JUANITO PARA TUS COSAS', '2021-05-11 23:43:56'),
(74, 'TheCrasterX', 'Getafe sigue siendo una aldea', '2021-05-11 23:44:12');

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
-- Indices de la tabla `only_films`
--
ALTER TABLE `only_films`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `only_films`
--
ALTER TABLE `only_films`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `only_post`
--
ALTER TABLE `only_post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

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
