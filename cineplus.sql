-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 10:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_nombre`, `categoria_descripcion`) VALUES
(12, 'accion', 'peliculas de accion'),
(13, 'terror', 'peliculas de terror'),
(14, 'drama', 'peliculas de drama'),
(15, 'romance', 'peliculas de romance'),
(16, 'thriller', 'peliculas de thriller'),
(17, 'aventura', 'peliculas de aventura'),
(18, 'crimen', 'peliculas de crimen'),
(19, 'guerra', 'peliculas de guerra'),
(20, 'animacion', 'peliculas de animacion'),
(21, 'ficcion', 'peliculas de ficcion'),
(22, 'fantasia', 'peliculas de fantasia');

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `pelicula_id` int(11) NOT NULL,
  `pelicula_titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pelicula_sinopsis` text COLLATE utf8_spanish_ci NOT NULL,
  `pelicula_caratula` text COLLATE utf8_spanish_ci NOT NULL,
  `pelicula_estreno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pelicula_puntuacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pelicula_director` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pelicula_duracion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pelicula_pais` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `pelicula_enlace` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`pelicula_id`, `pelicula_titulo`, `pelicula_sinopsis`, `pelicula_caratula`, `pelicula_estreno`, `pelicula_puntuacion`, `pelicula_director`, `pelicula_duracion`, `pelicula_pais`, `categoria_id`, `pelicula_enlace`) VALUES
(33, 'Underworld', 'En esta nueva historia, Selene tendrá que luchar tanto con el clan de los Lycans como contra los vampiros que la traicionaron. Con David y su padre Thomas como sus únicos aliados, deberá detener la eterna guerra entre lycans y vampiros, aunque esto signifique que tenga que hacer el último sacrifcio.', 'nHXiMnWUAUba2LZ0dFkNDVdvJ1o.jpg', '2016', '4.4', 'Anna Foerster', '1h 56m', 'Usa', 13, ''),
(34, 'Suicide Squad', 'Mientras el gobierno de EE.UU no tiene claro cómo responder a una visita alienígena a la Tierra con intenciones malignas, Amanda ''El Muro'' Waller, la líder de la agencia secreta A.R.G.U.S., ofrece una curiosa solución: reclutar a los villanos más crueles, con habilidades letales e incluso mágicas, para que trabajen para ellos. Sin demasiadas opciones a dar una negativa, los ocho supervillanos más peligrosos del mundo acceden a colaborar con el Ejecutivo en peligrosas misiones secretas, casi suicidas, para así lograr limpiar su expediente.', 'pOFOSAacvK6otjHTepc1BjznHNv.jpg', '2016', '5.9', 'David Ayer', '2h 3m', 'Usa', 12, ''),
(35, 'Arrival', 'Cuando misteriosas naves espaciales aterrizan en todo el mundo, un equipo de élite (Jeremy Renner y Forest Whitaker) liderado por la lingüista Louise Banks (Amy Adams) intentan descifrar el motivo de su visita. A medida que la humanidad se tambalea al borde de una guerra, Louise y su equipo luchan contra el tiempo llegando a poner en peligro su vida y, muy posiblemente, la del resto de la humanidad.', 'AcilyyFwtFuZAkSD9oi2CBw4J9Q.jpg', '2016', '6.5', 'Denis Villeneuve', '116 min', 'Usa', 14, ''),
(36, ' Rogue One', 'Cuenta la historia de un grupo de rebeldes que tendrá que robar los planos de la primera Estrella de la Muerte que, como bien conocemos todos, Luke Skywalker destruye en ‘La Guerra de las Galaxias’ (1977).', 'udQxxPNXF3salzCbjLvZ4yUbrvg.jpg', '2016', '7.6', 'Gareth Edwards', '133 mins', 'Usa', 14, ''),
(37, 'Fantastic Beasts and Where to Find Them', 'Adaptación del libro "Animales fantásticos y donde encontrarlos" de J.K Rowling, ambientado en el mundo del famoso aprendiz de mago Harry Potter. La historia la protagonizará Newt Scamander, autor ficticio de la novela y se remontará 70 años antes de ''Harry Potter y la piedra filosofal''. Se trata del libro que los alumnos aprendices de mago de Hogwarts de tercer año utilizan para la asignatura de "Cuidado de criaturas mágicas" impartida por Rubeus Hagrid. Un extenso manual en el que están clasificados las diferentes bestias y criaturas mágicas que habitan en el mundo mágico. En él, quedan por tanto registradas y descritas 75 especies mágicas encontradas alrededor del mundo, una información que Scamander recogió a lo largo de muchos años durante sus viajes por los 5 continentes. - Una película que no predecerá ni continuará la historia de Harry Potter, pero que sí se ambientará en su mundo para contar esta vez, las aventuras de Newt Scamander.', '4VeQw0nM3yV6iKcWDgtbBCeWzKp.jpg', '2016', '7.0', 'David Yates', '2h 13m', 'Usa', 17, ''),
(38, 'Miss Peregrine''s Home for Peculiar Children', 'Una horrible tragedia familiar lleva a Jacob, de 16 años, a viajar por la costa de Gales, donde descubre las ruinas del hogar para niños especiales de Miss Peregrine. Mientras explora los destartalados cuartos y pasillos, se da cuenta que los niños que vivieron allí (uno de los cuales fue su abuelo) eran excepcionales. Quizá eran peligrosos, quizá había una buena razón para ponerlos en cuarentena en una isla desierta; incluso podría ocurrir que todavía estuvieran vivos.\r\n', 'riqd9U6zhmCiKCG2h5i3aGFINg5.jpg', '2016', '6.1', 'Jane Goldman', '2h 7m', 'Usa', 22, ''),
(39, 'The Magnificent Seven', 'Siete forajidos son contratados por los desesperados habitantes del pueblo de Rose Creek para que les defiendan de la amenaza de un despiadado extorsionador llamado Bartholomew Bogue. Mientras preparan el pueblo para la violenta confrontación que saben se avecina inevitablemente, estos siete mercenarios se encontrarán luchando por algo más que el simple dinero.\r\n', 'wjVzh6wbZn2yrSiJ4yv9eTcErqk.jpg', '2016', '4.6', 'Antoine Fuqua', 'null', 'Usa', 12, ''),
(40, 'Mad Max: Fury Road', 'Perseguido por su turbulento pasado, Mad Max cree que la mejor forma de sobrevivir es ir solo por el mundo. Sin embargo, se ve arrastrado a formar parte de un grupo que huye a través del desierto en un War Rig conducido por una Emperatriz de élite: Furiosa. Escapan de una Ciudadela tiranizada por Immortan Joe, a quien han arrebatado algo irreemplazable. Enfurecido, el Señor de la Guerra moviliza a todas sus bandas y persigue implacablemente a los rebeldes en una "guerra de la carretera" de altas revoluciones... Cuarta entrega de la saga post-apocalíptica que resucita la trilogía que a principios de los ochenta protagonizó Mel Gibson.\r\n', 'ylb23f8lJRPrLaAK7jdAXB7xpf.jpg', '2015', '7.1', 'George Miller', '1h 50m', 'Usa', 12, ''),
(41, 'Doctor Strange', '"Doctor Strange" se basa en el personaje de cómic creado por Stan Lee y Steve Ditko en 1963. La historia gira en torno al Dr. Stephen Strange, un mundialmente conocido neurocirujano cuya vida no volverá a ser la misma después de que un accidente de tráfico le prive del uso de sus manos. La medicina tradicional fracasa por lo que se ve obligado a buscar una curación y también una esperanza en un extraño lugar, un enclave conocido con el nombre de Kamar-Taj.', 'wIr0eD4YB0hu7bLY9m08AyUjCpw.jpg', '2016', '6.6', 'Scott Derrickson', '1h 55m', 'Usa', 22, ''),
(42, 'Interstellar', 'Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.\r\n', '7C0oiPn46OvaMxET9iq1f5BsyMS.jpg', '2014', '8.0', 'Christopher Nolan', '2h 49m', 'Usa', 21, ''),
(43, 'Jason Bourne', 'Jason Bourne ha recuperado su memoria, pero eso no significa que el más letal agente de los cuerpos de élite de la CIA lo sepa todo. Han pasado doce años desde la última vez que Bourne estuviera operando en las sombras. ¿Qué ha ocurrido desde entonces? Todavía le quedan muchas preguntas por responder. En medio de un mundo convulso, azotado por la crisis económica y el colapso financiero, la guerra cibernética, y en el que varias organizaciones secretas luchan por el poder, Jason Bourne vuelve a surgir, de forma inesperada, en un momento en que el mundo se enfrenta a una inestabilidad sin precedentes. Desde un lugar oscuro y torturado, Bourne reanudará la búsqueda de respuestas sobre su pasado.\r\n', 'ylUZYJQbPIajP95woBxH9YuRbs7.jpg', '2016', '5.6', 'Paul Greengrass', '2h 3m', 'Usa', 12, ''),
(44, 'Jurassic World', 'Veintidós años después de lo ocurrido en Jurassic Park, la isla Nublar ha sido transformada en un parque temático, Jurassic Wold, con versiones «domesticadas» de algunos de los dinosaurios más conocidos. Cuando todo parece ir a la perfección y ser el negocio del siglo, un nuevo dinosaurio de especie todavía desconocida y que es mucho más inteligente de lo que se pensaba, comienza a causar estragos entre los visitantes del Parque.\r\n', 'v9zzAbS5r6x0COu6giHmQXKIItA.jpg', '2015', '6.5', 'Colin Trevorrow', '2h 4m', 'Usa', 21, ''),
(45, 'Spectral', 'Cuando una fuerza de otro mundo siembra el caos en una ciudad europea devastada por la guerra, un ingeniero ayuda a los operativos especiales a intentar defenderla.\r\n', '8G6mxm3hBPWje9iNluVriNAHHPz.jpg', '2016', '6.4', 'Nic Mathieu', '1h 48m', 'Usa', 19, 'https://www.youtube.com/embed/rmC3ZhIHHi4');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_usuario` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_password` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_usuario`, `usuario_password`) VALUES
(1, 'Admin', 'admin123', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`pelicula_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `pelicula_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
