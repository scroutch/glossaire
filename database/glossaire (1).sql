-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 août 2022 à 08:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `glossaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `definition`
--

DROP TABLE IF EXISTS `definition`;
CREATE TABLE IF NOT EXISTS `definition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL,
  `first_letter` varchar(10) NOT NULL,
  `definition` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `definition`
--

INSERT INTO `definition` (`id`, `word`, `first_letter`, `definition`, `created_at`, `id_user`) VALUES
(7, 'Php', 'P', 'Langage backend', '2022-08-18 10:30:16', NULL),
(8, 'ReactJs', 'R', 'Librairie Javascript', '2022-08-18 10:33:26', NULL),
(16, 'test maj', 'T', 'premiere lettre en maj', '2022-08-18 14:14:40', NULL),
(17, 'web', 'W', 'Ensemble des données reliées par des liens hypertextes, sur Internet.', '2022-08-18 14:40:45', NULL),
(18, 'wagon', 'W', 'Véhicule sur rails, tiré par une locomotive.', '2022-08-18 14:45:42', NULL),
(19, 'bonbon', 'B', 'Aliments sucrés', '2022-08-22 10:19:02', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
