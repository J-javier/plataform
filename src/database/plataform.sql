-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2023 a las 20:00:44
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataform`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(200) DEFAULT NULL,
  `correo_admin` varchar(200) DEFAULT NULL,
  `password_admin` varchar(250) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `name_admin`, `correo_admin`, `password_admin`, `rol_id`) VALUES
(3, 'admin', 'admin@admin.com', '$2y$10$S2NePxmvxNpg5W4j2w5d8eKKotYhmdw5JNFxfXlNP4xi8qmVeb6/m', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `name_alumno` varchar(150) DEFAULT NULL,
  `apellido_alumno` varchar(150) DEFAULT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `correo_alumno` varchar(200) DEFAULT NULL,
  `password_alumno` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `fechaNacimiento` varchar(80) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `name_alumno`, `apellido_alumno`, `matricula`, `correo_alumno`, `password_alumno`, `address`, `fechaNacimiento`, `rol_id`) VALUES
(8, 'Alumno ', 'Prueba', 'L287364', 'alumno@alumno.com', '$2y$10$HY0oRUO96J4.kMRyka0nMuHjQXT29DNjpQLj/1LCf5YRGgLMUUHxa', '5th Av lodecoy', '2000-11-02', 2),
(9, 'jorge', 'estrada', 'K0987', 'jorge@mail.com', '$2y$10$S2NePxmvxNpg5W4j2w5d8eKKotYhmdw5JNFxfXlNP4xi8qmVeb6/m', '98 main st', '1980-03-12', 2),
(11, 'Santiago', 'Palma', 'J83743', 'santiago@mail.com', '$2y$10$hRWwhmq5rVxCHPIJ.WTig.4dN85tQpx9nP4Sam20hQBGF2AJVtTyq', 'Marcos 098', '2000-11-23', 2),
(12, 'Marco', 'Arebalo', 'G23984', 'Marco@mail.com', '$2y$10$jHhAgnBJbOd8G9TtQE2bD.yB7QAet/sMulmCOWZCqIfUl6WQ9lD3S', '8 Av Calvario Norte', '1999-09-31', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `name_curso` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `name_curso`) VALUES
(1, 'Matemáticas'),
(3, 'Ciencias'),
(4, 'Inglés'),
(6, 'Programación'),
(7, 'Portugues'),
(8, 'Educacion Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(11) NOT NULL,
  `name_maestro` varchar(150) DEFAULT NULL,
  `apellido_maestro` varchar(150) DEFAULT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `correo_maestro` varchar(200) DEFAULT NULL,
  `password_maestro` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `fechaNacimiento` varchar(80) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `name_maestro`, `apellido_maestro`, `matricula`, `correo_maestro`, `password_maestro`, `address`, `fechaNacimiento`, `rol_id`) VALUES
(7, 'Pedro', 'Aquiles', 'J8d8765', 'PedroA@mail.com', '$2y$10$1OHw3ekyZDk3.JGiuUmyBOTb02JVYWVH05v0QN6bcojEVRkS99uj6', 'Fresno 98', '1990-11-24', 3),
(8, 'maestro', 'prueba', 'F232445', 'maestro@maestro.com', '$2y$10$WNzvyRzcbh7cDdCtyFIrse19yHL616LeqXn5iMCKb7iN.G3hUwnC6', '98 Calle ', '1989-02-23', 3),
(9, 'Eugenio', 'Zamora', 'B83743', 'eugenio@mail.com', '$2y$10$CcQyIEBVujaTM2SfFhh7yeTL8W3p65T1pD02toChI54bfIHq8YQcS', '8Av lomas de portugal', '1995-12-08', 3),
(10, 'Juan', 'Paz', 'G23244', 'juanpa@mail.com', '$2y$10$FkmVTrJww.j/xVfe8e4/F.ZGVyXiF6QJ96AVp0N9j0Cq0133.F4Ki', 'Av sur 908', '1996-09-16', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `curso_id` (`curso_id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `asignacion_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
