-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 00:59:21
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
-- Base de datos: `db_movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `id_gender` int(11) NOT NULL,
  `name_gender` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id_gender`, `name_gender`, `amount`) VALUES
(1, 'Drama', 0),
(2, 'Terror', 0),
(3, 'Accion', 0),
(4, 'Ciencia Ficcion', 0),
(5, 'Comedia', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id_movie` int(11) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `synopsis` text NOT NULL,
  `id_gender` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id_movie`, `movie_name`, `image`, `synopsis`, `id_gender`, `date`) VALUES
(1, 'La ballena', 'http://gnula.nu/wp-content/uploads/2023/02/The_Whale_poster_usa.jpg', 'Un solitario profesor de inglés con obesidad severa intenta reconectar con su hija adolescente en una última oportunidad de redención.', 1, 2022),
(2, 'Super Mario Bros', 'http://gnula.nu/wp-content/uploads/2023/04/The_Super_Mario_Bros_Movie_poster_usa.jpg', 'Mientras trabajan en una avería subterránea, los fontaneros de Brooklyn, Mario y su hermano Luigi, viajan por una misteriosa tubería hasta un nuevo mundo mágico. Pero, cuando los hermanos se separan, Mario deberá emprender una épica misión para encontrar a Luigi. Con la ayuda del champiñón local Toad y unas cuantas nociones de combate de la guerrera líder del Reino Champiñón, la princesa Peach, Mario descubre todo el poder que alberga en su interior.', 3, 2023),
(3, 'Guardianes de la Galaxia', 'http://gnula.nu/wp-content/uploads/2014/08/guardianes_de_la_galaxia_poster_usa.jpg', 'Se trata de una aventura espacial de proporciones épicas y llena de acción que amplía el Universo Cinematográfico de Marvel dentro del cosmos. En esta ocasión, el temerario aventurero Peter Quill es objeto de un implacable cazarrecompensas después de robar una misteriosa esfera codiciada por Ronan, un poderoso villano cuya ambición amenaza todo el universo. Para poder escapar del incansable Ronan, Quill se ve obligado a pactar una complicada tregua con un cuarteto de inadaptados: Rocket, un mapache armado con un rifle, Groot, un humanoide con forma de árbol, la letal y enigmática Gamora y el vengativo Drax the Destroyer. Pero cuando Quill descubre el verdadero poder de la esfera, deberáhacer todo lo posible para derrotar a sus extravagantes rivales en un intento desesperado de salvar el destino de la galaxia.', 5, 2014),
(4, '102 Dalmatas', 'http://gnula.nu/wp-content/uploads/2018/12/102_Dalmatians_poster_usa.jpg', 'Cruella de Vil logra salir de la cárcel después de someterse a un tratamiento con el que parece haberse curado de su obsesión por las pieles y el abrigo hecho con los dálmatas. Pero el tiempo pasa y las auténticas aficiones y perversiones vuelven a manifestarse con todo su esplendor, sobre todo cuando aparece una hermosa perrita dálmata sin manchas, la número 102', 5, 2000),
(5, 'Stardust', 'http://gnula.nu/wp-content/uploads/2021/09/Stardust_poster_uk.jpg', 'Biopic sobre los orígenes del icónico David Bowie, centrado en la primera gira que el cantante hizo por los Estados Unidos en 1971.', 1, 2020),
(6, 'Wrong Turn', 'http://gnula.nu/wp-content/uploads/2021/02/Wrong-Turn_poster_alemania.jpg', 'Un grupo de amigos que hace senderismo por el Sendero de los Apalaches se ven cara a cara con los miembros de una comunidad de habitantes de las montañas llamados «The Foundation».', 2, 2021),
(7, 'Un LUugar Silencioso', 'http://gnula.nu/wp-content/uploads/2018/04/A_Quiet_Place_Un_lugar_en_silencio_poster_latino.jpg', 'Sigue la historia de una familia que vive en una casa en el bosque cuidándose de no emitir ningún sonido. Si no te escuchan, no pueden cazarte…', 2, 2018),
(8, 'Finch', 'http://gnula.nu/wp-content/uploads/2021/11/Finch_poster_usa.jpg', 'La historia sigue a un robot que vive en una tierra post-apocalíptica. Creado para proteger la vida del perro de su creador, enfermo y moribundo (Tom Hanks), el robot aprende sobre el amor, la amistad y el significado de la vida humana… El director Sapochnik es conocido por su trabajo de dirección en 4 episodios de «Game of Thrones», incluyendo «La batalla de los bastardos», que le valió un Emmy como mejor director. Produce el estudio de Robert Zemeckis, ImageMovers.', 4, 2021),
(9, 'Peligro', 'http://gnula.nu/wp-content/uploads/2021/10/Warning_poster_usa.jpg', 'Ambientada en un futuro no muy lejano, la obra reflexiona sobre el significado de la vida y la muerte y sobre el sentido de la soledad, intercalando las historias de distintos personajes.', 4, 2021),
(10, 'Batman Vs. Superman', 'http://gnula.nu/wp-content/uploads/2016/01/Batman_v_Superman_Dawn_of_Justice_nuevo_poster_usa.jpg', 'Ante el temor de las acciones que pueda llevar a cabo Superman, el vigilante de Gotham City aparece para poner a raya al superhéroe de Metrópolis, mientras que la opinión pública debate cuál es realmente el héroe que necesitan. El hombre de acero y Batman se sumergen en una contienda territorial, pero las cosas se complican cuando una nueva y peligrosa amenaza surge rápidamente, poniendo en jaque la existencia de la humanidad.', 3, 2016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `fk_gender` (`id_gender`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_gender` FOREIGN KEY (`id_gender`) REFERENCES `genders` (`id_gender`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
