-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2020 a las 18:27:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gestion_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_administrador`
--

CREATE TABLE `tbl_administrador` (
  `id_administrador` int(11) NOT NULL,
  `email_administrador` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwd_administrador` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_administrador`
--

INSERT INTO `tbl_administrador` (`id_administrador`, `email_administrador`, `passwd_administrador`) VALUES
(1, 'admin@admin.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidop_alumno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidom_alumno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grupo_alumno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_alumno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwd_alumno` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`id_alumno`, `nombre_alumno`, `apellidop_alumno`, `apellidom_alumno`, `grupo_alumno`, `email_alumno`, `passwd_alumno`) VALUES
(35, 'Alex', 'Rodriguez', 'Padilla', 'DAW2', 'alex-rodri@hotmail.es', '1234'),
(36, 'Antonio', 'Rodriguez', 'Romero', 'ASIX2', 'tonirodri28@hotmail.com', '1234'),
(37, 'Carlos', 'Rodriguez', 'Padilla', 'SMX1', 'carlos@gmail.com', '1234'),
(39, 'Pablo', 'Soriano', 'Anton', 'ASIX2', 'pablo@hotmail.es', '1234'),
(42, 'Xavier', 'Barrios', 'Rodriguez', 'DAW2', 'xavier@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_nota`
--

CREATE TABLE `tbl_nota` (
  `id_nota` int(11) NOT NULL,
  `nom_asignatura_nota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nota` int(2) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_nota`
--

INSERT INTO `tbl_nota` (`id_nota`, `nom_asignatura_nota`, `nota`, `id_alumno`) VALUES
(11, 'Matemáticas', 7, 35),
(12, 'Física', 7, 35),
(13, 'Programación', 7, 35),
(14, 'Matemáticas', 6, 36),
(15, 'Física', 8, 36),
(16, 'Programación', 6, 36),
(17, 'Matemáticas', 7, 37),
(18, 'Física', 9, 37),
(19, 'Programación', 6, 37),
(23, 'Matemáticas', 7, 39),
(24, 'Física', 6, 39),
(25, 'Programación', 9, 39),
(32, 'Matemáticas', 6, 42),
(33, 'Física', 5, 42),
(34, 'Programación', 7, 42);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD CONSTRAINT `tbl_nota_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `tbl_alumno` (`id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
