-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2022 a las 13:26:31
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actividad-php-crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `pswd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `correo`, `pswd`) VALUES
(1, 'asd', 'asd@perdoas.ss', 'asd'),
(2, 'lolo', 'iago.v.lamas@gmail.com', 'lolo'),
(3, 'juan', 'sanpedrotevisitaenladucha@gmail.com', 'pedro'),
(4, 'sdfsdf', 'dsftdf@kajhsd.com', 'sdfsdf'),
(5, 'asdasd', 'asdasd@pene.com', 'asdasd'),
(6, 'ASDASDA', 'iagoprietolamas@gmail.com', 'ASDASDASD'),
(7, 'asdasd', 'asdasd@pene.com', 'asd'),
(8, 'asd', 'asdasd@pene.com', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nombre_video` varchar(75) NOT NULL,
  `premium` int(11) NOT NULL,
  `enlace` text NOT NULL,
  `autor` varchar(25) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `nombre_video`, `premium`, `enlace`, `autor`, `descripcion`) VALUES
(1, 'nombre video', 0, 'holas hiolas holas', 'holasd', ''),
(2, 'hola que hace', 0, 'https://www.youtube.com/watch?v=-8nRYilZc28&ab_channel=MoldyBagel', 'sanpedro', ' ¿Qué es Lorem Ipsum?  Lorem Ipsum es simplemente un texto ficticio de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando un impresor desconocido tomó una galera de tipos y la codificó para hacer un libro de muestras tipográficas. Ha sobrevivido no solo cinco siglos, sino también el salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de hojas de Letraset que contenían pasajes de Lorem Ipsum y, más recientemente, con software de autoedición como Aldus PageMaker, que incluía versiones de Lorem Ipsum. ¿Por qué lo usamos?  Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\', lo que hace que parezca un inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su modelo de texto predeterminado, y una búsqueda de \'lorem ipsum\' descubrirá muchos sitios web que aún están en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).'),
(3, 'hola', 0, 'https://www.youtube.com/watch?v=-8nRYilZc28&ab_channel=MoldyBagel', 'asdasda', 'asdasda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
