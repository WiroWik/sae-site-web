-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 jan. 2024 à 10:20
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
-- Base de données : `sddv_plongee`
--

-- --------------------------------------------------------

--
-- Structure de la table `competitions`
--

DROP TABLE IF EXISTS `competitions`;
CREATE TABLE IF NOT EXISTS `competitions` (
  `id_compet` int(255) NOT NULL,
  `id_lieu` int(255) NOT NULL,
  `nom_compet` varchar(2555) NOT NULL,
  `date_compet` date NOT NULL,
  `image_compet` varchar(2555) DEFAULT NULL,
  PRIMARY KEY (`id_compet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu` (
  `id_lieu` int(255) NOT NULL,
  `pays` varchar(2555) NOT NULL,
  `ville` varchar(2555) NOT NULL,
  `adresse` varchar(2555) NOT NULL,
  PRIMARY KEY (`id_lieu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id_participant` int(255) NOT NULL,
  `id_compet` int(255) NOT NULL,
  `score` int(255) NOT NULL,
  `position` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(2555) NOT NULL,
  `prenom` varchar(2555) NOT NULL,
  `mail` varchar(2555) NOT NULL,
  `mdp` varchar(2555) NOT NULL,
  `connexion_lvl` int(11) NOT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `nom`, `prenom`, `mail`, `mdp`, `connexion_lvl`, `registration_date`) VALUES
(1, 'Perlato', 'Luka', 'luka.perlato@gmail.com', 'x8792NXRçd#j', 2, '2024-01-10'),
(2, 'Le Berre', 'Léon', 'léon.leberre@gmail.com', 'G4yp0RMhh@', 2, '2024-01-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;