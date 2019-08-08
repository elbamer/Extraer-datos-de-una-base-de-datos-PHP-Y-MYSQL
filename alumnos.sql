-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2019 a las 20:08:59
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejerciciosdaw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `DNI` int(10) NOT NULL,
  `APENOM` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DIREC` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `POBLA` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TELEF` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`DNI`, `APENOM`, `DIREC`, `POBLA`, `TELEF`) VALUES
(12344345, 'Alcalde García, Elena', 'C/Las Matas, 24', 'Madrid', '917766545'),
(4448242, 'Cerrato Vela, Luis', 'C/Mina 28 - 3A', 'Madrid', '916566545'),
(56882942, 'Díaz Fernández, María', 'C/Luis Vives 25', 'Móstoles', '915577545'),
(12344345, 'Alcalde García, Elena', 'C/Las Matas, 24', 'Madrid', '917766545'),
(4448242, 'Cerrato Vela, Luis', 'C/Mina 28 - 3A', 'Madrid', '916566545'),
(56882942, 'Díaz Fernández, María', 'C/Luis Vives 25', 'Móstoles', '915577545');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
