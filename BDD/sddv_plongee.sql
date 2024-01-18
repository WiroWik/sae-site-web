-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 18 jan. 2024 à 20:42
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

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
  `id_compet` int NOT NULL AUTO_INCREMENT,
  `nom_compet` varchar(2555) NOT NULL,
  `date_compet` date NOT NULL,
  `image_compet` varchar(2555) DEFAULT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`id_compet`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competitions`
--

INSERT INTO `competitions` (`id_compet`, `nom_compet`, `date_compet`, `image_compet`, `pays`, `ville`, `adresse`) VALUES
(10, 'Compétition test 2', '2024-02-29', 'https://france3-regions.francetvinfo.fr/image/0c7pDQyPwOcftuu_Wjw7UJAv3tI/1200x1200/regions/2020/06/09/5edf40f694a4c_mister_v-3383781.jpg', 'France', 'ProutCity', '18 rue du gwer'),
(9, 'Compétition test', '2024-01-20', 'https://external-preview.redd.it/lcG7vxsMorEnkx0OKTfokKdwRETMiKaQMJ5r1POqEzo.jpg?auto=webp&s=f0dbf94111bf437df8bb67190cee9f06df433dfb', 'France', 'TrinityVille', '3 rue des potiers'),
(11, 'Shironekiki', '2024-05-22', 'https://pbs.twimg.com/media/FFYzc8FXEAUcClx.jpg', 'France', 'LaylowTown', '3 Boulevard Pronote');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id_participant` int NOT NULL,
  `id_compet` int NOT NULL,
  `score` int NOT NULL,
  `position` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`id_participant`, `id_compet`, `score`, `position`) VALUES
(5, 9, 1000, 1),
(5, 11, 0, 2665);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(2555) NOT NULL,
  `prenom` varchar(2555) NOT NULL,
  `mail` varchar(2555) NOT NULL,
  `date_naissance` date NOT NULL,
  `mdp` varchar(2555) NOT NULL,
  `connexion_lvl` int NOT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `nom`, `prenom`, `mail`, `date_naissance`, `mdp`, `connexion_lvl`, `registration_date`) VALUES
(1, 'Perlato', 'Luka', 'luka.perlato@gmail.com', '0000-00-00', 'x8792NXRcd#j', 2, '2024-01-10'),
(2, 'Le Berre', 'Léon', 'leon.leberre@gmail.com', '0000-00-00', 'prout', 2, '2024-01-10'),
(3, 'Tom', 'Bertrand', 'tom.bertrand@gmail.com', '0000-00-00', 'J0cn390kj', 0, '2024-01-15'),
(4, 'Lol', 'Lol', 'Lol@gmail.com', '0000-00-00', 'Lol', 0, NULL),
(5, 'caca', 'caca', 'caca', '0000-00-00', 'caca', 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
