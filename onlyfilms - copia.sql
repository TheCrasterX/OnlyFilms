-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2021 a las 14:26:26
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
  `Sinopsis` varchar(1500) DEFAULT NULL,
  `Genero` varchar(30) NOT NULL,
  `Director` varchar(50) NOT NULL,
  `Actores` varchar(1500) NOT NULL,
  `año` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `only_films`
--

INSERT INTO `only_films` (`id`, `Titulo`, `Foto`, `Sinopsis`, `Genero`, `Director`, `Actores`, `año`) VALUES
(1, 'Salvar al soldado Ryan', 'https://static2.abc.es/media/historia/2018/02/15/salvar-soldado-ryan-principal-error-historico-kpAB--1240x698@abc.jpg', 'Tras el desembarco de Normandía durante la Segunda Guerra Mundial, donde murieron muchos combatientes aliados, un grupo de soldados americanos es elegido para llevar a cabo su última misión: salvar a un solo hombre que se encuentra al otro lado de las líneas enemigas.', 'Accion', 'Steven Spielberg', '	Tom Hanks, Tom Sizemore, Edward Burns, Matt Damon, Jeremy Davies, Adam Goldberg, Barry Pepper, Giovanni Ribisi, Vin Diesel', 1997),
(2, 'El resplandor', 'https://static2.elcorreo.com/www/multimedia/202005/25/media/cortadas/el-resplandor-kKKH-U1102973139567IB-624x385@RC.jpg', 'La película relata la historia de Jack Torrance, un exprofesor que acepta un puesto como vigilante de invierno en un solitario hotel de alta montaña para ocuparse del mantenimiento. Al poco tiempo de haberse instalado allí junto con su esposa y su hijo, empieza a sufrir inquietantes trastornos de personalidad.', 'Terror', '	\r\nStanley Kubrick', '	Jack Nicholson, Shelley Duvall, Danny Lloyd, Scatman Crothers', 1980),
(3, 'The Fast and the Furious', 'https://media.revistagq.com/photos/5ca6020df552a1574932f520/16:9/w_1920,c_limit/a_todo_gas_fast_furious_gq_3785.jpg', 'Una misteriosa banda de delincuentes se dedica a robar camiones en marcha desde vehículos deportivos. La policía decide infiltrar un hombre en el mundo de las carreras ilegales para descubrir posibles sospechosos. El joven y apuesto Brian entra en el mundo del tunning donde conoce a Dominic, rey indiscutible de este mundo y sospechoso número uno, pero todo se complicará cuando se enamore de su hermana', 'Accion', 'Rob Cohen', 'Vin Diesel, Paul Walker, Michelle Rodriguez, Jordana Brewster, Rick Yune', 2001),
(4, 'Alien: el octavo pasajero', 'https://www.bolsamania.com/cine/wp-content/uploads/2020/09/1-62-600x334.jpg', 'La nave Nostromo se dirige a la Tierra tras una misión convencional de extracción minera con sus tripulantes en estado de hibernación. Sin embargo, el ordenador principal decide despertarlos antes de tiempo ante la recepción de una señal desconocida.', 'Ciencia Ficción', 'Ridley Scott', 'Tom Skerritt, Sigourney Weaver, Veronica Cartwright, Harry Dean Stanton, John Hurt, Ian Holm, Yaphet Kotto, Bolaji Badejo', 1979),
(5, 'El diario de Noa', 'https://i.blogs.es/4c2684/the-notebook-netflix-cambia-el-final/840_560.jpg', 'El libro cuenta la vida de Noah Calhoun y Allie Nelson, dos jóvenes adolescentes de Carolina del Norte que, a pesar de vivir en dos ambientes sociales muy diferentes, pasan un verano idílico juntos y profundamente enamorados, antes de ser separados, primero por sus padres, y más tarde por la Segunda Guerra Mundial.', 'Romantica', 'Nick Cassavetes', '	Ryan Gosling, Rachel McAdams, James Garner, Gena Rowlands, Sam Shepard, James Marsden, Joan Allen', 2004),
(6, 'Regreso al futuro', 'https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2015/06/12/14341214930928.jpg', 'La cinta transcurre en el año 1985, una época en la que el joven Marty McFly lleva una existencia anónima con su novia Jennifer. Los únicos problemas son su familia en crisis y un director al que le encantaría expulsarle del instituto, por lo que deberá hacer todo lo que esté en su mano para revertir esa situación y aparentar total normalidad. Amigo del excéntrico profesor Emmett Brown, una noche le acompaña a probar su nuevo experimento: viajar en el tiempo usando un DeLorean modificado. Sin duda alguna, se trata de una investigación realmente arriesgada pero que puede aportarles un enorme éxito en el futuro. No obstante, la prueba sale aún peor de lo esperado: unos traficantes de armas llegan y asesinan al científico. Marty se refugia en el coche y aparece transportado hasta 1955. Allí impide, a su pesar, que sus padres se conozcan y se verá en la obligación de hacer lo necesario para que vuelvan juntos. De lo contrario, él jamás podrá regresar al momento actual debido a que nunca habrá existido.', 'Ciencia Ficcion', '	 Robert Zemeckis', '	 Michael J. Fox, Christopher Lloyd, Crispin Glover, Lea Thompson, Thomas F. Wilson', 1985),
(7, 'Psicosis', 'https://www.alohacriticon.com/wp-content/uploads/2019/04/psicosis-casa-dondeesta.jpg', 'Inspirada en la novela homónima de Robert Bloch, la historia está ambientada en un tétrico motel de carretera llamado cuyo dueño es Norman Bates (Anthony Perkins, \'Asesinato en el Orient Express\'). Junto al motel hay una casa, tan poco acogedora como el edificio, en la que reside el señor Bates con su madre.', 'Terror', 'Alfred Hitchcock', '	Anthony Perkins, Janet Leigh, Vera Miles, John Gavin, Martin Balsam, John McIntire', 1960),
(8, 'Leyendas de Pasión', 'https://1.bp.blogspot.com/-KxnBdTaXK_E/XeN5N98q-HI/AAAAAAAAAxE/PZ4JAlRjWR4k8JaWUV3Ws0JLHeTOCKYNwCLcBGAsYHQ/s1600/Leyendas%2Bbxe%2Bpasi%25C3%25B3n.jpg', 'William Ludlow (Anthony Hopkins), un coronel abandonado por su mujer, ha criado a sus tres hijos en su gran rancho de Montana, a los pies de las Montañas Rocosas. La Primera Guerra Mundial (1914-1918) y una bella mujer cambiarán el destino de todos ellos para siempre. Sus hijos son el indómito Tristan (Brad Pitt), el sensato Alfred (Aidan Quinn) y Samuel (Henry Thomas), el menor, que acaba de traer al rancho a su bella prometida Susannah (Julia Ormond).', 'Romantica', '	 Edward Zwick', 'Brad Pitt, Anthony Hopkins, Aidan Quinn, Julia Ormond, Henry Thomas', 1994),
(9, 'La La Land', 'https://img.eldefinido.cl/portadas/650/2017-01-20-6814YWF3752.jpg', 'La película cuenta la historia de Mia, una empleada de un bar que aspira a ser una gran actriz y Sebastian, un pianista de jazz desempleado con grandes ambiciones. A pesar de sus diferencias y sus distintas personalidades, gracias a una serie de acontecimientos harán que sus caminos acaben cruzándose.', 'Musical', 'Damien Chazelle', 'Ryan Gosling, Emma Stone, Terry Walters, J.K. Simmons', 2016),
(10, 'Grease', 'https://s.libertaddigital.com/2014/11/07/1920/1080/fit/grease.jpg', 'Al término de las vacaciones de verano, los novios Danny Zuko y Sandy Olsson, una joven australiana de buena familia, se ven obligados a separarse. A su regreso al instituto Rydell, el joven se reúne con su banda, los T-birds, de chaquetas de cuero y pelo engominado. Los padres de Sandy deciden mudarse a Estados Unidos y la chica ingresa en el mismo colegio. Pasada la sorpresa del reencuentro y con el objetivo de quedar bien delante de sus compañeros, Danny adopta una actitud arrogante que deja a la joven totalmente desamparada. Sandy se une entonces a las Pink Ladies, la contraparte femenina de los T-Birds. Entonces tiene lugar un juego del gato y el ratón entre los dos tortolitos, todo ello marcado por los acontecimientos de sus vidas estudiantiles: el comienzo de la temporada de fútbol, el baile de promoción, carreras de coches, noches de chicas, de chicos, salidas al \"fast-food\", al autocine...', 'Musical', 'Randal Kleiser', 'John Travolta, Olivia Newton-John, Stockard Channing, Jeff Conaway', 1978),
(11, 'Seven', 'https://i1.wp.com/cinefilosoficial.com/wp-content/uploads/2020/09/se7en.jpg?fit=1300%2C730&ssl=1', 'El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, está a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendrán que colaborar en la resolución de una serie de asesinatos cometidos por un psicópata que toma como base la relación de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las víctimas, sobre los que el asesino se ensaña de manera impúdica, se convertirán para los policías en un enigma que les obligará a viajar al horror y la barbarie más absoluta.', 'Misterio', 'David Fincher', 'Brad Pitt, Morgan Freeman, Gwyneth Paltrow, Kevin Spacey', 1995),
(12, 'Memento', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/memento-pelicula-polaroid-1532823991.jpg', 'La memoria de Leonard, un investigador de una agencia de seguros, está irreversiblemente dañada debido a un golpe sufrido en la cabeza cuando intentaba evitar el asesinato de su mujer: éste es el último hecho que recuerda del pasado. La memoria reciente la ha perdido: los hechos cotidianos desaparecen de su mente en unos minutos. Así pues, para investigar e intentar vengar el asesinato de su esposa tiene que recurrir a la ayuda de una cámara instantánea y a las notas tatuadas en su cuerpo.', 'Misterio', 'Chistopher Nolan', 'Guy Pearce, Carrie-Anne Moss, Joe Pantoliano', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `only_post`
--

CREATE TABLE `only_post` (
  `id` int(5) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_peli` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `only_post`
--

INSERT INTO `only_post` (`id`, `usuario`, `comentario`, `fecha`, `id_peli`) VALUES
(2, 'Mario', 'Buenos días a todo el mundo!', '2021-05-05 00:00:00', 0),
(13, 'Mario', 'Que pasa fieras!', '2021-05-06 00:00:00', 0),
(15, 'Mario', 'Humanes es una aldea', '2021-05-06 00:00:00', 0),
(19, 'Periquito', 'Buenas a todos gente de Fuenla', '2021-05-11 21:24:35', 0),
(20, 'Mario', 'Sin pijama como la Becky G', '2021-05-11 21:27:37', 0),
(66, 'Mario', 'No entraré en la casa de Odin con miedo!', '2021-05-11 23:23:37', 0),
(67, 'Mario', 'Tomo me male sal', '2021-05-11 23:36:29', 0),
(69, 'TheCrasterX', 'Ponganme un jagger con cocacolita', '2021-05-11 23:41:57', 0),
(70, 'TheCrasterX', 'Mae mia chico', '2021-05-11 23:43:10', 0),
(71, 'TheCrasterX', 'Que no panda el cunico', '2021-05-11 23:43:22', 0),
(72, 'TheCrasterX', 'A tomar por cleta la biciculo', '2021-05-11 23:43:31', 0),
(73, 'TheCrasterX', 'ESO PARA TI JUANITO PARA TUS COSAS', '2021-05-11 23:43:56', 0),
(74, 'TheCrasterX', 'Getafe sigue siendo una aldea', '2021-05-11 23:44:12', 0),
(75, 'tamaraAH4', 'hola hola', '2021-06-01 11:46:09', 0),
(76, 'tamaraAH4', 'hola hola hola', '2021-06-01 11:46:51', 0),
(77, 'tamaraAH4', 'Me gusta esta pelicula', '2021-06-01 13:06:34', 0),
(78, 'tamaraAH4', 'pepito', '2021-06-01 18:34:39', 0),
(79, 'tamaraAH4', 'ff', '2021-06-01 18:50:37', 0),
(111, 'tamaraAH4', 'No me gust la pelicula', '0000-00-00 00:00:00', 1),
(112, 'tamaraAH4', 'holi', '2021-06-01 19:26:43', 0),
(113, 'tamaraAH4', 'gigi', '2021-06-01 19:32:30', 0),
(114, 'tamaraAH4', 'jiji', '2021-06-01 19:33:51', 0),
(115, 'tamaraAH4', 'dd', '2021-06-01 19:35:48', 1),
(116, 'tamaraAH4', 'ff', '2021-06-01 19:41:45', 0),
(117, 'tamaraAH4', 'tamara', '2021-06-01 19:46:24', 0),
(118, 'Mario', 'dasdasdsadas', '2021-06-01 20:23:02', 0),
(119, 'Mario', 'dadad', '2021-06-01 20:24:14', 0),
(120, 'Mario', 'dadadadadadadada', '2021-06-01 20:24:52', 0),
(121, 'Mario', 'Tremendo peliculon bb <3', NULL, 1),
(122, 'Mario', 'tremeeeeeendo', '2021-06-01 21:07:07', 0),
(123, 'Mario', 'gdfggdfgdg', '0000-00-00 00:00:00', 0),
(124, 'Mario', 'gdgdfgdfgdg', NULL, 1),
(125, 'Mario', 'vaya peliculita bbs', NULL, 1),
(126, 'Mario', 'Tremendo peliculon maquinas', NULL, 3),
(127, 'Mario', 'Demasiado azúcar para mi cuerpo', NULL, 5),
(128, 'TheCrasterX', 'pff y que lo digas chaval', NULL, 1),
(129, 'Mario', 'Buenisima esa', '2021-06-11 11:52:05', 0),
(130, 'Mario', 'Guapisima', NULL, 3),
(131, 'Mario', 'Acabo de poner un comentario en la peli de Fast & Furious 1 para los que os interese :D', '2021-06-12 13:48:09', 0),
(132, 'Lottor24', 'Me voy a ver Scarface luego os cuento jajajja\r\n', '2021-06-12 14:16:41', 0),
(133, 'Lottor24', 'A ver que tal ', '2021-06-12 14:16:57', 0),
(134, 'Lottor24', 'A eso de las 12 os pongo que me ha parecido que acabo de parar para pillarme unas cocacolas\r\n', '2021-06-12 14:17:35', 0),
(135, 'Lottor24', 'Parecía que iba a ser un pastelón pero al final me ha gustado, un punto bueno de vista sobre como son las parejas realmente, sin tanta ideal', NULL, 9),
(136, 'Mario', 'Mira que a mi no me gustan los musicales demasiado pero he de decir que entiendo porque tuvo la fama que tuvo en su momento, las canciones son pegadizas y la trama sin ser nada del otro mundo se hace entretenida', NULL, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `only_users`
--

CREATE TABLE `only_users` (
  `id` int(5) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fechNacimiento` date NOT NULL,
  `fotoPerfil` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `only_users`
--

INSERT INTO `only_users` (`id`, `usuario`, `pass`, `email`, `fechNacimiento`, `fotoPerfil`) VALUES
(1, 'TheCrasterX', '123', 'mario_martin_garcia@hotmail.es', '1997-04-13', 'https://aux2.iconspalace.com/uploads/387811467132324889.png'),
(2, 'Rayzor', 'elpepe', 'elraul@gmail.com', '1997-10-22', 'https://i.pinimg.com/originals/21/94/67/219467090c77c96d26d86238cf1846dc.jpg'),
(6, 'Lottor24', 'pechofrio', 'pechofrio@gmail.es', '1996-06-23', 'https://i.pinimg.com/originals/21/94/67/219467090c77c96d26d86238cf1846dc.jpg'),
(8, 'Mario', '123', 'mario_martin_garcia@hotmail.es', '1931-04-14', 'https://aux2.iconspalace.com/uploads/387811467132324889.png'),
(9, 'Periquito', '123', 'periquito@lafuente.com', '1111-11-11', 'https://i.pinimg.com/originals/21/94/67/219467090c77c96d26d86238cf1846dc.jpg'),
(11, 'Paco', '123', '1_@iesjovellanos.org', '3232-02-23', 'https://i.pinimg.com/originals/21/94/67/219467090c77c96d26d86238cf1846dc.jpg'),
(12, 'Tamara', '123', 'tamichuli@lafortuna.com', '2222-02-22', 'https://i.pinimg.com/originals/21/94/67/219467090c77c96d26d86238cf1846dc.jpg'),
(13, 'Jorge', '123', 'jorgitolvp@gmail.es', '1999-03-21', 'https://i.pinimg.com/originals/21/94/67/219467090c77c96d26d86238cf1846dc.jpg'),
(15, 'tamaraAH4', 'tamara', 'tamaraaroca44@gmail.com', '1994-10-14', 'https://aux2.iconspalace.com/uploads/387811467132324889.png');

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
  ADD KEY `usuario` (`usuario`),
  ADD KEY `id_peli` (`id_peli`);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `only_post`
--
ALTER TABLE `only_post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de la tabla `only_users`
--
ALTER TABLE `only_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
