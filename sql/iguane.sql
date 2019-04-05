-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 05 avr. 2019 à 09:50
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `iguane`
--

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

CREATE TABLE `element` (
  `id` mediumint(11) NOT NULL,
  `type` smallint(11) NOT NULL,
  `layout` smallint(11) NOT NULL,
  `content` text NOT NULL,
  `page` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id`, `type`, `layout`, `content`, `page`) VALUES
(71, 4, 1, 'Gauthier Staehler', 0),
(77, 5, 1, 'Ceci est une zone de texte !', 0),
(80, 6, 1, 'https://i.pinimg.com/originals/4d/6a/67/4d6a672d734b5aecbff8dc6a9d80e441.jpg', 0),
(81, 3, 1, 'Title', 0),
(82, 5, 1, 'Praesent quis diam molestie nunc vehicula condimentum vel id augue. Nunc dapibus vestibulum mauris, placerat ullamcorper odio dictum in. Phasellus quis diam nec felis ultrices mattis id id quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam porttitor, lorem ac mattis consequat, magna ex auctor libero, sit amet sodales ante ipsum ut eros. Nulla aliquet, odio id dictum gravida, enim risus vulputate erat, a ultricies est dolor a orci. Quisque tempus quam eget nulla pellentesque ornare.', 0),
(83, 5, 2, 'Zone de texte dans le layout Aside !', 0),
(101, 5, 1, 'Hey (brrrr)\r\nOuh, on va t\'shooter dans la galerie\r\nChoppa vidé dans la galerie\r\nNah, nah, nah wasn\'t me\r\nNah, nah, nah wasn\'t me (no)\r\nGucci, Fendi dans ma galerie\r\nPolice m\'appelle, j\'réponds pas, je nie\r\nNah, nah, nah wasn\'t me\r\nNah, nah, nah wasn\'t me', 3),
(109, 7, 1, 'http://emi.ecpad.fr/wp-content/themes/invictus_3.3.1/images/dummy-image.jpg', 0),
(110, 7, 2, 'https://www.raprnb.com/wp-content/uploads/2019/02/Hamza-Paradise.png', 3),
(111, 5, 2, 'Nouveaux ennemis, nouvelles armes\r\nT\'aimes pas la paix c\'est qu\'t\'as pas fait la guerre guerre guerre\r\nL\'oseille et la mif, éclairent mon âme\r\nJ\'refais la peinture du frigo en bleu jaune vert\r\nOn veut notre coin d\'herbe on veut la planète Terre\r\nOn veut le monde Chico\r\nT\'inquiète, on rendra tout ce qu\'on acquiert\r\nOn veut le monde Chico', 0),
(112, 5, 3, 'Quisque tempus quam eget nulla pellentesque ornare. Vivamus a viverra est. Donec sit amet est non nulla sollicitudin dignissim eu accumsan dolor.', 0),
(113, 5, 3, 'Zone de texte dans le layout Bottom !', 0),
(115, 7, 3, 'https://www.wikihow.com/images/6/6d/Plant-a-Cut-Flower-Garden-Step-8.jpg', 3),
(116, 7, 2, 'http://emi.ecpad.fr/wp-content/themes/invictus_3.3.1/images/dummy-image.jpg', 0),
(117, 8, 2, 'https://www.youtube.com/watch?v=yTzyJ7kDLL4', 10),
(118, 8, 1, 'https://www.youtube.com/watch?v=YfUaiWpXKzU', 3),
(119, 5, 1, 'L\'aridité particulière du Sahara tient à la vigueur et surtout à la permanence des hautes pressions. Dans ces conditions, l\'air surchauffé au sol ne peut s\'élever ; il renforce l\'anticyclone en se comprimant. L\'affaissement de l\'air est le plus fort et le plus efficace au-dessus du Sahara oriental, où l\'absence de pluie est absolue, rivalisant avec le désert d\'Atacama situé au Chili. L\'inhibition pluviométrique et la dissolution des nuages sont par conséquent plus accentuées dans la partie orientale que dans l\'occidentale. L\'aridité plus grande du Sahara oriental vient du fait qu\'il se retrouve encore plus rarement sur la trajectoire des systèmes dépressionnaires chargés de pluie. On y trouve donc les pluies annuelles les plus faibles de la planète ; ainsi, la moyenne annuelle est-elle à peine de 5 mm dans la région de Taoudeni (Mali), elle descend à 2 mm à Tedjerhi au sud du Fezzan (Libye) et elle devient quasiment nulle (0,5 mm) à Louxor (Haute-Égypte). Ces moyennes sont d\'ailleurs peu significatives car la variabilité interannuelle des précipitations peut être énorme, plus la moyenne annuelle pluviométrique est faible, plus celle-ci est variable d\'une année à l\'autre. ', 11),
(120, 7, 1, 'https://upload.wikimedia.org/wikipedia/commons/8/8f/Libya_4983_Tadrart_Acacus_Luca_Galuzzi_2007.jpg', 11),
(121, 7, 2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Ecoregion_PA1327.svg/1280px-Ecoregion_PA1327.svg.png', 11),
(122, 5, 2, 'Les dayas (pluriel dayate ou daia (daiate), dhaia) sont des dépressions fermées d\'extension limitée (quelques mètres à 1 km de diamètre), au fond en général argileux ou argilo-sableux dans lesquelles l\'eau de ruissellement peut s\'accumuler. Une alternance d\'inondation et d\'exondation associée à une érosion éolienne participe à leur formation : parfois d\'origine karstique (dolines) sur certains plateaux par exemple, issues de la déflation éolienne ou mixtes. Elles constituent des zones de végétation pérennes.', 11),
(123, 8, 1, 'https://www.youtube.com/watch?v=54RS8kAHybg', 11),
(127, 2, 1, 'Fil Rouge', 0);

-- --------------------------------------------------------

--
-- Structure de la table `layout`
--

CREATE TABLE `layout` (
  `id` mediumint(11) NOT NULL,
  `name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `layout`
--

INSERT INTO `layout` (`id`, `name`) VALUES
(1, 'main'),
(2, 'aside'),
(3, 'bottom');

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` mediumint(11) NOT NULL,
  `name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `name`) VALUES
(3, 'page 2'),
(10, 'page 3'),
(11, 'Le Sahara');

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `id` tinyint(4) NOT NULL,
  `theme` tinyint(4) NOT NULL,
  `grid` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `theme`, `grid`) VALUES
(1, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id` tinyint(4) NOT NULL,
  `name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id`, `name`) VALUES
(1, 'Light'),
(2, 'Dark');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` mediumint(11) NOT NULL,
  `name` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'table'),
(2, 'navbar'),
(3, 'title'),
(4, 'footer'),
(5, 'textzone'),
(6, 'background'),
(7, 'image'),
(8, 'video');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `layout` (`layout`),
  ADD KEY `page` (`page`);

--
-- Index pour la table `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme` (`theme`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `element`
--
ALTER TABLE `element`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT pour la table `layout`
--
ALTER TABLE `layout`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `site`
--
ALTER TABLE `site`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
