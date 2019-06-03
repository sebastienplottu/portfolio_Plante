-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 03 juin 2019 à 11:10
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `plante`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `humidite` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `luminosite` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id`, `humidite`, `temp`, `luminosite`, `date`) VALUES
(1, 25, 25, 100, 20190603);

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

DROP TABLE IF EXISTS `plante`;
CREATE TABLE IF NOT EXISTS `plante` (
  `id_plante` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `humidite` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `luminosite` varchar(100) NOT NULL,
  `floraison` varchar(100) NOT NULL,
  `lien` varchar(100) NOT NULL,
  PRIMARY KEY (`id_plante`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`id_plante`, `name`, `categorie`, `description`, `photo`, `humidite`, `temp`, `luminosite`, `floraison`, `lien`) VALUES
(1, 'pommier', 'arbre', 'arbre à pomme', '', 85, 25, '65', 'juin', 'https://fr.wikipedia.org/wiki/Pommier');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mail`, `password`) VALUES
(1, 'Pom', 'pom.pom@gmail.com', 'pom');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
