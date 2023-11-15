-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 15:32:24
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
-- Base de datos: `web2-spotify`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `IdAlbum` int(11) NOT NULL,
  `nombreAlbum` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `cantCanciones` int(11) NOT NULL,
  `anio` date NOT NULL,
  `IdArtista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`IdAlbum`, `nombreAlbum`, `genero`, `cantCanciones`, `anio`, `IdArtista`) VALUES
(1000, 'Desde el fin del mundo', 'Trap', 18, '2021-04-22', 13),
(2000, 'Un verano sin ti', 'Reggeton', 23, '2023-05-06', 1),
(3000, 'Tini Tini Tini', 'Pop', 14, '2020-12-03', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `IdArtista` int(11) NOT NULL,
  `nombreArtista` varchar(45) NOT NULL,
  `nacionalidad` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `IdAlbum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`IdArtista`, `nombreArtista`, `nacionalidad`, `edad`, `IdAlbum`) VALUES
(1, 'Bad Bunny', 'Puerto Rico', 29, NULL),
(2, 'Karol G', 'Colombia', 32, NULL),
(3, 'Shakira', 'Colombia', 46, NULL),
(4, 'María Becerra', 'Argentina', 23, NULL),
(5, 'Peso Pluma', 'Mexico', 24, NULL),
(6, 'Rosalia', 'España', 31, NULL),
(7, 'Young Miko', 'Puerto Rico', 24, NULL),
(8, 'Tini Stoessel', 'Argentina', 26, NULL),
(9, 'Lali Esposito', 'Argentina', 31, NULL),
(10, 'Nicki Nicole', 'Argentina', 23, NULL),
(11, 'Justin Bieber', 'Canada', 29, NULL),
(12, 'Selena Gomez ', 'Estados Unidos', 31, NULL),
(13, 'Duki', 'Argentina', 27, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `IdCancion` int(11) NOT NULL,
  `nombreCancion` varchar(45) NOT NULL,
  `duracion` double NOT NULL,
  `genero` varchar(45) NOT NULL,
  `anio` date NOT NULL,
  `IdAlbum` int(11) DEFAULT NULL,
  `IdArtista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`IdCancion`, `nombreCancion`, `duracion`, `genero`, `anio`, `IdAlbum`, `IdArtista`) VALUES
(400, 'Party', 3.48, 'Reggeton', '2022-05-06', 2000, 1),
(401, 'Callaita', 4.11, 'Reggeton', '2022-05-06', 2000, 1),
(402, 'Ojitos Lindos', 4.19, 'Reggeton', '2022-05-06', 2000, 1),
(403, 'Tarot', 3.56, 'Reggeton', '2022-05-06', 2000, 1),
(404, 'Me Porto Bonito', 2.59, 'Reggeton', '2022-05-06', 2000, 1),
(405, 'Neverita', 2.54, 'Reggeton', '2022-05-06', 2000, 1),
(406, 'Yo No Soy Celoso', 3.51, 'Reggeton', '2022-05-06', 2000, 1),
(407, 'Efecto', 3.34, 'Reggeton', '2022-05-06', 2000, 1),
(408, 'Aguacero', 3.31, 'Reggeton', '2022-05-06', 2000, 1),
(409, 'Suéltate El Pelo', 2.07, 'Pop', '2020-12-03', 3000, 8),
(410, 'Ella Dice', 2.41, 'Trap', '2020-12-03', 3000, 8),
(411, 'Oye', 2.53, 'Trap', '2020-12-03', 3000, 8),
(412, 'Si Tu Supieras', 2.32, 'Trap', '2020-12-03', 3000, 8),
(413, '22', 2.39, 'Cumbia', '2020-12-03', 3000, 8),
(414, 'Fresa', 2.46, 'Reggeton', '2020-12-03', 3000, 8),
(415, 'Un Beso en Madrid', 2.24, 'Pop', '2020-12-03', 3000, 8),
(416, 'Diciembre', 3.09, 'Pop', '2020-12-03', 3000, 8),
(417, 'Malbec', 2.56, 'Trap', '2021-04-22', 1000, 13),
(418, 'Fifty Fifty', 4.41, 'Trap', '2021-04-22', 1000, 13),
(419, 'Cuanto', 3.11, 'Trap', '2021-04-22', 1000, 13),
(420, 'Muero de Fiesta Este Finde', 3.14, 'Trap', '2021-04-22', 1000, 13),
(421, 'Valentino', 2.37, 'Trap', '2021-04-22', 1000, 13),
(422, 'Chico Estrella', 2.51, 'Trap', '2021-04-22', 1000, 13),
(423, 'I Dont Know', 3.39, 'Trap', '2021-04-22', 1000, 13),
(424, 'Volando Bajito', 2.15, 'Trap', '2021-04-22', 1000, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUser` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUser`, `user`, `password`) VALUES
(1, 'webadmin', '$2y$10$iqv8Uf8Rh/5dENgJ1aXzVuTPFXRIJBn6v77PGkB6bY602i4DthumK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`IdAlbum`),
  ADD KEY `Id_artista` (`IdArtista`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`IdArtista`),
  ADD KEY `idAlbum` (`IdAlbum`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`IdCancion`),
  ADD KEY `IdArtista` (`IdArtista`),
  ADD KEY `Id_album` (`IdAlbum`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `IdCancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `Id_artista` FOREIGN KEY (`IdArtista`) REFERENCES `artista` (`IdArtista`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `IdArtista` FOREIGN KEY (`IdArtista`) REFERENCES `artista` (`IdArtista`),
  ADD CONSTRAINT `Id_album` FOREIGN KEY (`IdAlbum`) REFERENCES `album` (`IdAlbum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
