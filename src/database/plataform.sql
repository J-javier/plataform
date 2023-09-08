-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2023 a las 19:42:53
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
(1, 'Administrador 1', 'admin1@example.com', 'contraseña1', 1),
(2, 'Administrador 2', 'admin2@example.com', 'contraseña2', 1);

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
(1, 'Juan', 'Pérez', 'A12345', 'juan@example.com', 'contraseña1', 'Calle 123', '2000-01-15', 2),
(2, 'María', 'González', 'B56789', 'maria@example.com', 'contraseña2', 'Avenida 456', '1999-05-20', 2),
(3, 'Carlos', 'López', 'C98765', 'carlos@example.com', 'contraseña3', 'Calle 789', '2001-03-10', 2),
(4, 'Laura', 'Martínez', 'D54321', 'laura@example.com', 'contraseña4', 'Avenida 654', '2000-08-05', 2),
(5, 'Pedro', 'Ramírez', 'E98765', 'pedro@example.com', 'contraseña5', 'Calle 987', '1999-11-30', 2);

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
(2, 'Historia'),
(3, 'Ciencias'),
(4, 'Inglés'),
(5, 'Inglés'),
(6, 'Programación');

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
(1, 'José', 'Gómez', 'M12345', 'jose@example.com', 'contraseña1', 'Calle 123', '1980-06-25', 3),
(2, 'Ana', 'López', 'N56789', 'ana@example.com', 'contraseña2', 'Avenida 456', '1975-09-15', 3),
(3, 'Carlos', 'Martínez', 'O98765', 'carlos@example.com', 'contraseña3', 'Calle 789', '1982-02-10', 3),
(4, 'Sandra', 'Ramírez', 'P54321', 'sandra@example.com', 'contraseña4', 'Avenida 654', '1978-07-20', 3),
(5, 'Mario', 'Pérez', 'Q98765', 'mario@example.com', 'contraseña5', 'Calle 987', '1981-12-05', 3);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
