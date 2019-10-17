-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2019 a las 11:24:38
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iwork`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambios`
--

CREATE TABLE `cambios` (
  `id` int(11) NOT NULL,
  `puesto` varchar(250) NOT NULL,
  `puesto_old` varchar(250) NOT NULL,
  `puesto_new` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cambios`
--

INSERT INTO `cambios` (`id`, `puesto`, `puesto_old`, `puesto_new`) VALUES
(6, '', 'programadore', 'programador'),
(7, '', 'programador', 'tester');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL,
  `edit` int(134) NOT NULL,
  `ruta_imagen` varchar(250) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `ApellidoM` varchar(250) NOT NULL,
  `ApellidoP` varchar(250) NOT NULL,
  `edad` int(2) NOT NULL,
  `puesto` varchar(250) NOT NULL,
  `tiempo_empresa` datetime(6) NOT NULL,
  `salario` varchar(250) NOT NULL,
  `puesto_old` varchar(250) NOT NULL,
  `puesto_new` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`, `edit`, `ruta_imagen`, `Nombre`, `ApellidoM`, `ApellidoP`, `edad`, `puesto`, `tiempo_empresa`, `salario`, `puesto_old`, `puesto_new`) VALUES
(6, 'metalex', '123456', 'miguel.rl@live.com.mx', '', 1, 6, '', 'Miguel Alejandro', 'Velasco', 'Ruiz', 25, 'programador', '2019-10-15 08:12:10.000000', '2466', '', ''),
(7, 'Enrique', 'amarillo', 'miguel12.rl@live.com.mx', '', 2, 0, '', 'Enrique', 'Mondragon', 'Ruiz', 23, 'tester', '0000-00-00 00:00:00.000000', '2300', '', '');

--
-- Disparadores `login`
--
DELIMITER $$
CREATE TRIGGER `cambios` BEFORE UPDATE ON `login` FOR EACH ROW BEGIN
   REPLACE INTO cambios
     (id,puesto_old,puesto_new)
     VALUES (OLD.id,OLD.puesto,NEW.puesto);
	
     
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `puesto_issue`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `puesto_issue` (
`id` int(11)
,`puesto` varchar(250)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `puesto_issue`
--
DROP TABLE IF EXISTS `puesto_issue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `puesto_issue`  AS  select `login`.`id` AS `id`,`login`.`puesto` AS `puesto` from `login` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cambios`
--
ALTER TABLE `cambios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cambios`
--
ALTER TABLE `cambios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
