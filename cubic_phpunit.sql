-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 05 fév. 2026 à 14:20
-- Version du serveur : 8.4.7
-- Version de PHP : 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cubic_phpunit`
--

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux`
--

DROP TABLE IF EXISTS `vaisseaux`;
CREATE TABLE IF NOT EXISTS `vaisseaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reserve` float NOT NULL,
  `etat` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux_combat`
--

DROP TABLE IF EXISTS `vaisseaux_combat`;
CREATE TABLE IF NOT EXISTS `vaisseaux_combat` (
  `id_g` int NOT NULL AUTO_INCREMENT,
  `munitions` int NOT NULL,
  PRIMARY KEY (`id_g`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux_transport`
--

DROP TABLE IF EXISTS `vaisseaux_transport`;
CREATE TABLE IF NOT EXISTS `vaisseaux_transport` (
  `id_t` int NOT NULL AUTO_INCREMENT,
  `capacité_max` float NOT NULL,
  `charge_actuelle` float NOT NULL,
  PRIMARY KEY (`id_t`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
