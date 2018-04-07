-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2018 a las 05:39:52
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ntmillion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_commentary`
--

CREATE TABLE `tbl_commentary` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `friend` int(11) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_friend`
--

CREATE TABLE `tbl_friend` (
  `id` int(11) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_like`
--

CREATE TABLE `tbl_like` (
  `id` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `multimedia` varchar(250) NOT NULL,
  `multimediaFormat` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `date`, `multimedia`, `multimediaFormat`, `description`, `author`) VALUES
(32, '2018-04-01 03:25:31', 'pp', 'jpg', 'prueba 1', 1),
(38, '2018-04-01 03:34:35', 'bg_principal', 'jpg', '', 1),
(39, '2018-04-01 03:35:02', '', '', 'Solo Texto ', 1),
(40, '2018-04-01 03:36:43', 'mov_bbb', 'mp4', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `iDuser` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `biography` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `profilePic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`iDuser`, `email`, `name`, `lastName`, `password`, `gender`, `birth`, `biography`, `country`, `userName`, `status`, `profilePic`) VALUES
(1, '1997@gmail.com', 'Daniel', 'Paredes', '123456', 'on', '1994-10-18', '', '', 'veraparedesjd', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_commentary`
--
ALTER TABLE `tbl_commentary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friend` (`friend`),
  ADD KEY `post` (`post`);

--
-- Indices de la tabla `tbl_friend`
--
ALTER TABLE `tbl_friend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `friend` (`friend`);

--
-- Indices de la tabla `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post` (`post`),
  ADD KEY `friend` (`friend`);

--
-- Indices de la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`iDuser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_commentary`
--
ALTER TABLE `tbl_commentary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_friend`
--
ALTER TABLE `tbl_friend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_like`
--
ALTER TABLE `tbl_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `iDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_commentary`
--
ALTER TABLE `tbl_commentary`
  ADD CONSTRAINT `tbl_commentary_ibfk_1` FOREIGN KEY (`friend`) REFERENCES `tbl_friend` (`friend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_commentary_ibfk_2` FOREIGN KEY (`post`) REFERENCES `tbl_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD CONSTRAINT `tbl_like_ibfk_1` FOREIGN KEY (`friend`) REFERENCES `tbl_friend` (`friend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_ibfk_2` FOREIGN KEY (`post`) REFERENCES `tbl_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
