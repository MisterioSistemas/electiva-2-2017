-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2017 a las 15:53:49
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectovj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `idCategoriaPadre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id`, `nombre`, `idCategoriaPadre`) VALUES
(19, 'New on PSVR', 5),
(20, 'Popular on PSVR', 5),
(21, 'New on PSVR', 5),
(22, 'Popular on PSVR', 5),
(23, 'Free on PSVR', 5),
(24, 'Made for PSVR', 5),
(25, 'PSVR Mode Include', 5),
(26, 'PSVR experiences', 5),
(27, 'PSVR Add', 5),
(28, 'PSVR Catalog', 5),
(29, 'New on PS4 Games', 6),
(30, 'Popular on PS4 ', 6),
(31, 'Free on PS4', 6),
(32, 'Made for PS4', 6),
(33, 'PS4 Mode Include', 6),
(34, 'PS4 experiences', 6),
(35, 'PS4 Add', 6),
(36, 'PS4 Catalog', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoriajuego`
--

CREATE TABLE `tbl_categoriajuego` (
  `id` int(11) NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_categoriajuego`
--

INSERT INTO `tbl_categoriajuego` (`id`, `idJuego`, `idCategoria`) VALUES
(9, 10, 21),
(10, 14, 26),
(11, 22, 35),
(12, 20, 31),
(13, 26, 25),
(14, 22, 21),
(15, 27, 20),
(16, 14, 26),
(17, 22, 35),
(18, 20, 31),
(19, 26, 25),
(20, 22, 21),
(21, 27, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoriapadre`
--

CREATE TABLE `tbl_categoriapadre` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_categoriapadre`
--

INSERT INTO `tbl_categoriapadre` (`id`, `nombre`) VALUES
(5, 'PS VR'),
(6, 'PS4'),
(7, 'PS3'),
(8, 'PS Vita/PS TV/PSP'),
(9, 'Discover'),
(10, 'Play'),
(11, 'Expand'),
(12, '$ave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_juego`
--

CREATE TABLE `tbl_juego` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(800) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_juego`
--

INSERT INTO `tbl_juego` (`id`, `nombre`, `precio`, `descripcion`) VALUES
(10, 'DiRT 4', 10, 'The world’s leading off-road racing series is back! DiRT 4 puts you at the wheel of the most powerful machines ever made as you face the toughest roads and circuits on the planet in rally, rallycross & landrush.\r\n\r\nRevolutionary \'Your Stage\' technology gives you millions of rally routes at the touch of a button in Australia, Spain, Michigan, Sweden & Wales.\r\n\r\nDrive over 50 of the most iconic rally vehicles ever made from the history of the sport.\r\n\r\nThe official game of the FIA World Rallycross Championship with races in France, Portugal, UK, Sweden & Norway. Race in Supercars, RX2, Super 1600s and Group B rallycross.'),
(11, 'Elite Dangerous: Commander Deluxe Edition', 20, 'The Commander Deluxe Edition is the ultimate way for new Commanders to experience what Elite Dangerous has to offer. The bundle includes the base game Elite Dangerous, Elite Dangerous: Horizons Season Pass and the Commander Pack, which grants access to a collection of items with which to customize your ship.\r\n\r\nRemote Play requires PS Vita system and sufficiently robust Wi-Fi connection.\r\n\r\nOnline features require an account and are subject to terms of service and applicable privacy policy (playstationnetwork.com/terms-of-service & playstationnetwork.com/privacy-policy).'),
(14, 'GOD WARS Future Past', 25, 'GOD WARS Future Past is a tactical RPG that explores the untold history of Japan through folklore and tactical combat.\r\n\r\nRemote Play requires PS Vita system and sufficiently robust Wi-Fi connection.\r\n\r\n1 player\r\n4GB minimum save size\r\nRemote Play\r\n\r\nSoftware subject to license (us.playstation.com/softwarelicense). Online features require an account and are subject to terms of service and applicable privacy policy (playstationnetwork.com/terms-of-service & playstationnetwork.com/privacy-policy). One-time license fee for play on account’s designated primary PS4™ system and other PS4™ systems when signed in with that account.'),
(15, 'Call Of Dutty', 50, 'GOD WARS Future Past is a tactical RPG that explores the untold history of Japan through folklore and tactical combat.\r\n\r\nRemote Play requires PS Vita system and sufficiently robust Wi-Fi connection.\r\n\r\n1 player\r\n4GB minimum save size\r\nRemote Play\r\n\r\nSoftware subject to license (us.playstation.com/softwarelicense). Online features require an account and are subject to terms of service and applicable privacy policy (playstationnetwork.com/terms-of-service & playstationnetwork.com/privacy-policy). One-time license fee for play on account’s designated primary PS4™ system and other PS4™ systems when signed in with that account.'),
(16, 'Destiny 2 - Digital Deluxe Edition', 15, 'Pre-Order Destiny 2 and get:\r\n- Coldheart Exotic Rifle*\r\n- Kill-Tracker Ghost\r\n- Salute Emote\r\n\r\nDigital pre-orders also receive a PS4 dynamic system theme after checking out.\r\n\r\nGet the ultimate Destiny 2 experience with the Digital Deluxe Edition. Includes a copy of Destiny 2, premium digital content and the Expansion Pass to continue your Guardian’s legend.\r\n\r\nPremium digital content:\r\n- Legendary Sword\r\n- Legendary Player Emote\r\n- Cabal Empire Themed Emblem'),
(17, 'EA SPORTS™ NHL® 18 Young Stars Deluxe Edition', 15, 'Digital Pre-order Details:\r\n\r\nPre-order and receive a bonus after checking out:\r\n\r\n\r\nEA SPORTS™ NHL® 18 THEME\r\n\r\n\r\n\r\n\r\nPre-Order the NHL 18 Young Stars Deluxe Edition now which includes 3 days of early access to the full game plus:'),
(18, 'Destiny 2 - Game + Expansion Pass Bundle', 16, 'Pre-Order Destiny 2 and get:\r\n- Coldheart Exotic Rifle*\r\n- Kill-Tracker Ghost\r\n- Salute Emote\r\n\r\nDigital pre-orders also receive a PS4 dynamic system theme after checking out.\r\n\r\nUpgrade your Destiny 2 experience with the Expansion Pass bundle. Includes a copy of Destiny 2, and the Expansion Pass to continue your Guardian’s legend.'),
(19, 'The Elder Scrolls® Online: 21000 Crowns', 18, 'Purchase 21000 crowns to be used in The Crown Store. The Crown Store can be accessed in-game to browse and purchase unique pets, mounts, costumes for your character, and other virtual goods and services.\r\n\r\nRemote Play requires PS Vita system and sufficiently robust Wi-Fi connection.'),
(20, '12000 Madden NFL 18 Ultimate Team Points', 10, 'Build, play, and win with your ultimate team of todays’ NFL stars and legends in Madden Ultimate Team (MUT) is the complete NFL team-building mode. Play games, collect rewards, and upgrade your team with daily, fun and engaging content updates including legendary NFL players exclusively found in MUT. Start crafting your squad to elite status today with 12000 Ultimate Team Points on the road to building your Ultimate Team dynasty.\r\n\r\nRemote Play requires PS Vita system and sufficiently robust Wi-Fi connection.\r\n\r\nOnline features require an account and are subject to terms of service and applicable privacy policy (playstationnetwork.com/terms-of-service & playstationnetwork.com/privacy-policy)'),
(21, 'Money Pack 2330 BaitCoins', 25, 'Experienced and highly skilled anglers as well as persistent learners can succeed in fishing tournaments and get the highest ranks without any financial investment in the game. However, there’s a way to ease your progress - a special in-game currency called Baitcoins! You can use them to get faster access to the most advanced fishing tackle available in the Game Store.\r\n\r\nPACKAGE INCLUDES: 2000 Baitcoins\r\nBONUS: 330 Baitcoins\r\n\r\n'),
(22, 'The Elder Scrolls® Online: 14000 Crowns', 19, 'Purchase 14000 crowns to be used in The Crown Store. The Crown Store can be accessed in-game to browse and purchase unique pets, mounts, costumes for your character, and other virtual goods and services.\r\n\r\nRemote Play requires PS Vita system and sufficiently robust Wi-Fi connection.\r\n\r\nOnline features require an account and are subject to terms of service and applicable privacy policy (playstationnetwork.com/terms-of-service & playstationnetwork.com/privacy-policy).\r\n\r\n\r\nNetwork Players 2-99 - Full game requires PlayStation®Plus membership to access online multiplayer\r\nDUALSHOCK®4\r\nRemote Play\r\nOnline Play (Required)'),
(23, 'Danganronpa V3: Killing Harmony', 23, 'Digital Pre-order Details:\r\nPre-order and receive a bonus after checking out:\r\n\r\nDANGANRONPA V3 - PS4 THEME\r\n\r\n\r\n\r\n\r\n\r\nPlay on 09/26/2017 11am Eastern Time\r\n\r\nCANCELLATIONS AND REFUNDS ARE NOT AVAILABLE EXCEPT WHERE REQUIRED BY LAW.\r\nWelcome to a new world of Danganronpa, and prepare yourself for the biggest, most exhilarating episode yet. Set in a “psycho-cool” environment, a new cast of 16 characters find themselves kidnapped and imprisoned in a school. Inside, some will kill, some will die, and some will be punished. Reimagine what you thought high-stakes, fast-paced investigation was as you investigate twisted murder cases and condemn your new friends to death.'),
(24, 'Secret of Mana', 52, 'Digital Pre-order Details:\r\nPre-order and receive a bonus after checking out:\r\n\r\nSECRET OF MANA – RANDI AVATAR\r\n\r\nSECRET OF MANA – PRIMM AVATAR\r\n\r\nSECRET OF MANA – POPOI AVATAR'),
(25, 'Battle Chasers: Nightwar', 32, 'Digital Pre-order Details:\r\nPre-order and receive a bonus after checking out:\r\n\r\nBATTLE CHASERS THEME\r\n\r\n\r\n\r\nPre-order Battle Chasers Nightwar today for 10% off and receive a Free Theme!\r\n\r\nPlay on 10/03/2017 11am Eastern Time\r\n\r\nCANCELLATIONS AND REFUNDS ARE NOT AVAILABLE EXCEPT WHERE REQUIRED BY LAW.\r\nBattle Chasers: Nightwar is an RPG inspired by the console genre-greats, featuring deep dungeon diving, turn-based combat presented in classic JRPG format, and a rich story driven by exploration of the world.'),
(26, 'LEGO® NINJAGO® Movie Video Game', 24, 'Digital Pre-order Details:\r\nPre-order and receive a bonus after checking out:\r\n\r\nTHE LEGO NINJAGO MOVIE VIDEOGAME THEME\r\n\r\n\r\n\r\nDon\'t let this one sneak by you, pre-order now!\r\n\r\nPlay on 09/22/2017 12am Eastern Time\r\n\r\nCANCELLATIONS AND REFUNDS ARE NOT AVAILABLE EXCEPT WHERE REQUIRED BY LAW.\r\nFind your inner ninja with the all-new LEGO NINJAGO Movie Video Game! Play as your favorite ninjas, Lloyd, Jay, Kai, Cole, Zane, Nya and Master Wu to defend their home island of Ninjago from the evil Lord Garmadon and his Shark Army. Master the art of Ninjagility by wall-running, high-jumping and battling the foes of Ninjago to rank up and upgrade the ninja\'s combat skills. Only in the LEGO NINJAGO Movie Video Game will you experience the film across 8 action packed locations each with its own unique C'),
(27, 'LEGO® NINJAGO® Movie Video Game 2', 24, 'Digital Pre-order Details:\r\nPre-order and receive a bonus after checking out:\r\n\r\nTHE LEGO NINJAGO MOVIE VIDEOGAME THEME\r\n\r\n\r\n\r\nDon\'t let this one sneak by you, pre-order now!\r\n\r\nPlay on 09/22/2017 12am Eastern Time\r\n\r\nCANCELLATIONS AND REFUNDS ARE NOT AVAILABLE EXCEPT WHERE REQUIRED BY LAW.\r\nFind your inner ninja with the all-new LEGO NINJAGO Movie Video Game! Play as your favorite ninjas, Lloyd, Jay, Kai, Cole, Zane, Nya and Master Wu to defend their home island of Ninjago from the evil Lord Garmadon and his Shark Army. Master the art of Ninjagility by wall-running, high-jumping and battling the foes of Ninjago to rank up and upgrade the ninja\'s combat skills. Only in the LEGO NINJAGO Movie Video Game will you experience the film across 8 action packed locations each with its own unique C');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategoriaPadre` (`idCategoriaPadre`);

--
-- Indices de la tabla `tbl_categoriajuego`
--
ALTER TABLE `tbl_categoriajuego`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idJuego` (`idJuego`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `tbl_categoriapadre`
--
ALTER TABLE `tbl_categoriapadre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `tbl_categoriajuego`
--
ALTER TABLE `tbl_categoriajuego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `tbl_categoriapadre`
--
ALTER TABLE `tbl_categoriapadre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD CONSTRAINT `tbl_categoria_ibfk_1` FOREIGN KEY (`idCategoriaPadre`) REFERENCES `tbl_categoriapadre` (`id`);

--
-- Filtros para la tabla `tbl_categoriajuego`
--
ALTER TABLE `tbl_categoriajuego`
  ADD CONSTRAINT `tbl_categoriajuego_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbl_categoria` (`id`),
  ADD CONSTRAINT `tbl_categoriajuego_ibfk_2` FOREIGN KEY (`idJuego`) REFERENCES `tbl_juego` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
