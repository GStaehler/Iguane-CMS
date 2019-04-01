-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 01 avr. 2019 à 13:45
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
-- Base de données :  `filrougephp`
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
(71, 4, 3, 'Gauthier Staehler', 0),
(77, 5, 1, 'Ceci est une zone de texte !', 0),
(80, 6, 3, 'http://www.taklom360.com/images/placeholders/1920x1200-1.jpg', 0),
(81, 3, 1, 'Title', 0),
(82, 5, 1, 'Praesent quis diam molestie nunc vehicula condimentum vel id augue. Nunc dapibus vestibulum mauris, placerat ullamcorper odio dictum in. Phasellus quis diam nec felis ultrices mattis id id quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam porttitor, lorem ac mattis consequat, magna ex auctor libero, sit amet sodales ante ipsum ut eros. Nulla aliquet, odio id dictum gravida, enim risus vulputate erat, a ultricies est dolor a orci. Quisque tempus quam eget nulla pellentesque ornare. Vivamus a viverra est. Donec sit amet est non nulla sollicitudin dignissim eu accumsan dolor. Fusce nunc augue, ullamcorper sed augue at, rhoncus congue sem. Proin aliquet faucibus nisl nec vestibulum. Suspendisse aliquet sem eu congue pellentesque. ', 0),
(83, 5, 2, 'Zone de texte dans le layout aside !', 0),
(96, 2, 1, 'Fil Rouge', 0),
(101, 5, 1, 'Hey (brrrr)\r\nOuh, on va t\'shooter dans la galerie\r\nChoppa vidé dans la galerie\r\nNah, nah, nah wasn\'t me\r\nNah, nah, nah wasn\'t me (no)\r\nGucci, Fendi dans ma galerie\r\nPolice m\'appelle, j\'réponds pas, je nie\r\nNah, nah, nah wasn\'t me\r\nNah, nah, nah wasn\'t me', 3),
(103, 5, 2, 'Test', 10),
(109, 7, 1, 'http://emi.ecpad.fr/wp-content/themes/invictus_3.3.1/images/dummy-image.jpg', 0),
(110, 7, 2, 'https://www.raprnb.com/wp-content/uploads/2019/02/Hamza-Paradise.png', 3),
(111, 5, 2, 'Nouveaux ennemis, nouvelles armes\r\nT\'aimes pas la paix c\'est qu\'t\'as pas fait la guerre guerre guerre\r\nL\'oseille et la mif, éclairent mon âme\r\nJ\'refais la peinture du frigo en bleu jaune vert\r\nOn veut notre coin d\'herbe on veut la planète Terre\r\nOn veut le monde Chico\r\nT\'inquiète, on rendra tout ce qu\'on acquiert\r\nOn veut le monde Chico', 0);

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
(3, 'other');

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
(10, 'page 3');

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
(7, 'image');

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
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

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
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
