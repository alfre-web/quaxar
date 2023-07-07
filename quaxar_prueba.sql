-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-07-2023 a las 02:07:23
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quaxar_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `pasatiempo` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `edad`, `genero`, `pasatiempo`, `password`) VALUES
(3, 'Michelle', 'michelle@gmail.com', 20, 'Femenino', 'videojuegos', ''),
(4, 'Alfredo', 'alfredo@correo.com', 28, 'Masculino', 'videojuegos', ''),
(16, 'Nancy Ruiz', 'nancy@uv.com', 29, 'Femenino', 'Ut sagittis vestibulum odio non euismod. Praesent vehicula, nibh eu fermentum efficitur, ligula magna luctus purus, congue tempus diam nunc sit amet sapien. Pellentesque vel est sit amet dui tincidunt finibus id at lorem. Praesent nec tempus magna. Fusce nec risus eget neque venenatis euismod. Sed tristique enim non eros facilisis, non ornare dui sollicitudin. Proin ultrices lorem odio.', ''),
(19, 'Angelica Cruz', 'angy@uv.com', 28, 'Femenino', 'Ut sagittis vestibulum odio non euismod. Praesent vehicula, nibh eu fermentum efficitur, ligula magna luctus purus, congue tempus diam nunc sit amet sapien. ', ''),
(20, 'Raul', 'raul@correo.com', 30, 'Masculino', 'Videojuego y mÃºsica.', ''),
(21, 'Luis Alfredo', 'luis_alfredo279@hotmail.com', 26, 'Masculino', 'hola', '$2y$12$p1pJEeZeu/PQ6bCjxcMnF.CttflqzF/11BVpmFfyO34WmZ7VIPHFa'),
(22, 'Jose Ivan', 'jose@correo.com', 30, 'Masculino', 'prueba', '$2y$12$4RWNiO/ZakIUCaEuvDX/I.GtE5IH1WiJm.1jt2e.pGElsE2q1WzF6'),
(23, 'Cesar', 'cesar@hotmail.com', 30, 'Masculino', 'Pellentesque ut finibus nulla. Ut dapibus eu ante quis facilisis. Pellentesque pharetra nunc sit amet sagittis mattis. Proin quis purus at lorem rhoncus auctor.', '$2y$12$BcDk5S7NUPjNBxa1uJvxXOk5L1/4Dkt7QDsuZsoJyvaz3CvMxBrvC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
