-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2023 a las 21:45:14
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
(6, 'Jira', '', 'H098s8', 'jirafales@mail.com', '$2y$10$X3YO5rro2ODvgqALHXHZ6OtpXvyA6YU0hzBuA9lE6BLWxyF.F9Mle', '', '', 3),
(7, 'Pedro', 'Aquiles', 'J8d8765', 'PedroA@mail.com', '$2y$10$1OHw3ekyZDk3.JGiuUmyBOTb02JVYWVH05v0QN6bcojEVRkS99uj6', 'Fresno 98', '1990-11-24', 3),
(8, 'maestro', 'prueba', 'F232445', 'maestro@maestro.com', '$2y$10$WNzvyRzcbh7cDdCtyFIrse19yHL616LeqXn5iMCKb7iN.G3hUwnC6', '98 Calle ', '1989-02-23', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
