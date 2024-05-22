-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2024 a las 22:42:56
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservas`
--

CREATE DATABASE IF NOT EXISTS reservas;
USE reservas;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `air_europa`
--

CREATE TABLE `air_europa` (
  `ID` int(11) NOT NULL,
  `Ida` date NOT NULL,
  `Vuelta` date DEFAULT NULL,
  `Origen` varchar(10) NOT NULL,
  `Destino` varchar(10) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `DNI` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iberia`
--

CREATE TABLE `iberia` (
  `ID` int(11) NOT NULL,
  `Ida` date NOT NULL,
  `Vuelta` date DEFAULT NULL,
  `Origen` varchar(10) NOT NULL,
  `Destino` varchar(10) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `DNI` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `iberia`
--

INSERT INTO `iberia` (`ID`, `Ida`, `Vuelta`, `Origen`, `Destino`, `Nombre`, `Apellidos`, `DNI`) VALUES
(1, '2024-05-22', '2024-05-30', 'Alicante', 'Madrid', 'Cristian', 'Lucas Rodríguez', '23232323D'),
(2, '2024-05-16', '2024-05-31', 'Alicante', 'Barcelona', 'Cristian', 'Lucas Rodríguez', '23232323D'),
(3, '2024-05-16', NULL, 'Alicante', 'Barcelona', 'Cristian', 'Lucas Rodríguez', '23232323D'),
(4, '2024-05-16', NULL, 'Alicante', 'Barcelona', 'Cristian', 'Lucas Rodríguez', '23232323D'),
(5, '2024-05-16', NULL, 'Alicante', 'Barcelona', 'Cristian', 'Lucas Rodríguez', '23232323D'),
(6, '2024-05-16', NULL, 'Alicante', 'Barcelona', 'Cristian', 'Lucas Rodríguez', '23232323D'),
(7, '2024-05-22', NULL, 'Alicante', 'Alicante', 'FDSFGSDSDGSDF', 'FDSFASDFASDF', '48374827D'),
(8, '2024-05-20', '2024-05-23', 'Barcelona', 'Madrid', 'Curisjndf', 'FWJEF wefwefwe', '99999999D'),
(9, '2024-05-20', '2024-05-23', 'Barcelona', 'Madrid', 'Curisjndf', 'FWJEF wefwefwe', '99999999D'),
(10, '2024-05-22', '2024-05-31', 'Alicante', 'Valencia', 'a', 'a', '99999999D'),
(11, '2024-05-22', '2024-05-31', 'Alicante', 'Valencia', 'sssssssssssssssssssssssss', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '99999999D'),
(12, '2024-05-08', '2024-05-24', 'Valencia', 'Madrid', 'cristian', 'Lucas Rodríguez', '99999999D'),
(13, '2024-05-16', '2024-05-26', 'Valencia', 'Bilbao', 'PATATICAS', 'BRAVAS CON BACON', '11111111D'),
(14, '2024-05-16', '2024-05-26', 'Valencia', 'Bilbao', 'PATATICAS', 'BRAVAS CON BACON', '11111111D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ryanair`
--

CREATE TABLE `ryanair` (
  `ID` int(11) NOT NULL,
  `Ida` date NOT NULL,
  `Vuelta` date DEFAULT NULL,
  `Origen` varchar(10) NOT NULL,
  `Destino` varchar(10) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `DNI` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ryanair`
--

INSERT INTO `ryanair` (`ID`, `Ida`, `Vuelta`, `Origen`, `Destino`, `Nombre`, `Apellidos`, `DNI`) VALUES
(4, '2024-05-16', '2024-06-01', 'Valencia', 'Alicante', 'Miguélonsio', 'Mortadelako Lucas', '53453121B'),
(5, '2024-05-16', '2024-06-01', 'Valencia', 'Alicante', 'Miguélonsio', 'Mortadelako Lucas', '53453121B'),
(6, '2024-05-16', '2024-06-01', 'Valencia', 'Alicante', 'Miguélonsio', 'Mortadelako Lucas', '53453121B'),
(7, '2024-05-16', '2024-06-01', 'Valencia', 'Alicante', 'Miguélonsio', 'Mortadelako Lucas', '53453121B'),
(44, '2024-05-17', '2024-05-31', 'Alicante', 'Bilbao', 'Cristian', 'Paquito Loquete', '24323433D'),
(45, '2024-05-17', '2024-05-31', 'Alicante', 'Bilbao', 'Cristian', 'Paquito Loquete', '24323433D'),
(46, '2024-05-17', '2024-05-31', 'Alicante', 'Bilbao', 'Cristian', 'Paquito Loquete', '24323433D'),
(47, '2024-05-22', '2024-05-24', 'Valencia', 'Madrid', 'DSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIF', 'DSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDFDSIFHSDF', '11111111D'),
(48, '2024-05-15', '2024-05-31', 'Alicante', 'Bilbao', 'Cristian Lucas', 'Rodríguez Berna Casacales Tomás', '23482374H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vueling`
--

CREATE TABLE `vueling` (
  `ID` int(11) NOT NULL,
  `Ida` date NOT NULL,
  `Vuelta` date DEFAULT NULL,
  `Origen` varchar(10) NOT NULL,
  `Destino` varchar(10) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `DNI` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vueling`
--

INSERT INTO `vueling` (`ID`, `Ida`, `Vuelta`, `Origen`, `Destino`, `Nombre`, `Apellidos`, `DNI`) VALUES
(1, '2024-05-16', '2024-05-18', 'Bilbao', 'Valencia', 'KAKAKAKA', 'PELELELELELEL', '65475676D');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `air_europa`
--
ALTER TABLE `air_europa`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `iberia`
--
ALTER TABLE `iberia`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ryanair`
--
ALTER TABLE `ryanair`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `vueling`
--
ALTER TABLE `vueling`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `air_europa`
--
ALTER TABLE `air_europa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `iberia`
--
ALTER TABLE `iberia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ryanair`
--
ALTER TABLE `ryanair`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `vueling`
--
ALTER TABLE `vueling`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
