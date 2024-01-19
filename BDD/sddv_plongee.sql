-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 jan. 2024 à 02:19
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competitions`
--

INSERT INTO `competitions` (`id_compet`, `nom_compet`, `date_compet`, `image_compet`, `pays`, `ville`, `adresse`) VALUES
(12, 'Non Lorem Vitae Foundation', '2023-12-15', 'medias/photo2.jpg', 'France', 'Béthune', '140-813 Neque. Rd.'),
(13, 'Donec Nibh Limited', '2023-06-04', 'medias/photo5.jpg', 'France', 'Bayonne', 'P.O. Box 104, 5327 Odio. Street'),
(14, 'Augue Malesuada LLP', '2024-06-21', 'medias/photo5.jpg', 'France', 'Nantes', 'P.O. Box 277, 3905 Vel, St.'),
(15, 'Et Foundation', '2023-11-18', 'medias/photo1.jpg', 'France', 'Nantes', '881-601 Justo Rd.'),
(16, 'Amet Risus Donec Incorporated', '2023-04-04', 'medias/photo3.jpg', 'France', 'Angers', 'P.O. Box 312, 449 Fringilla. St.'),
(17, 'Quisque Nonummy Inc.', '2023-08-05', 'medias/photo5.jpg', 'France', 'Calais', 'Ap #408-4362 Sapien, St.'),
(18, 'In Aliquet Inc.', '2023-05-19', 'medias/photo3.jpg', 'France', 'Mérignac', '765-8386 Magna Rd.'),
(19, 'Cursus Consulting', '2024-10-26', 'medias/photo3.jpg', 'France', 'Narbonne', '836-1295 Velit Road'),
(20, 'Dui Fusce PC', '2024-05-09', 'medias/photo1.jpg', 'France', 'Saint-Lô', '466-6630 Lorem Rd.'),
(21, 'Curabitur Incorporated', '2024-01-05', 'medias/photo3.jpg', 'France', 'Bourges', '174-1574 Vitae St.');

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
(6, 20, 353, 86),
(7, 15, 87, 97),
(11, 14, 436, 44),
(9, 16, 832, 99),
(7, 13, 669, 18),
(10, 17, 239, 25),
(9, 12, 55, 52),
(8, 12, 193, 23),
(6, 14, 548, 71),
(7, 14, 242, 65),
(9, 18, 387, 68),
(7, 18, 906, 12),
(6, 13, 191, 14),
(10, 13, 32, 18),
(10, 15, 748, 10),
(9, 17, 289, 93),
(10, 17, 702, 70),
(10, 20, 761, 31),
(8, 13, 68, 68),
(11, 13, 521, 64),
(12, 15, 595, 32),
(7, 21, 528, 63),
(8, 21, 773, 99),
(10, 16, 191, 63),
(10, 13, 56, 69),
(11, 12, 244, 32),
(7, 20, 801, 75),
(10, 14, 672, 85),
(11, 21, 579, 8),
(6, 20, 891, 81);

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `nom`, `prenom`, `mail`, `date_naissance`, `mdp`, `connexion_lvl`, `registration_date`) VALUES
(5, 'Perlato', 'Luka', 'luka.perlato@gmail.com', '0000-00-00', 'x8792NXRcd#j', 2, '2024-01-10'),
(6, 'Le Berre', 'Léon', 'admin', '0000-00-00', 'mdp', 2, '2024-01-10'),
(7, 'Tom', 'Bertrand', 'tom.bertrand@gmail.com', '0000-00-00', 'J0cn390kj', 0, '2024-01-15'),
(12, 'Jenkins', 'Rose', 'pulvinar.arcu@hotmail.com', '2014-08-31', 'dolor.', 0, '2022-04-28'),
(10, 'Rivers', 'Kieran', 'lorem@hotmail.com', '2004-07-30', 'tellus', 0, '2022-05-14'),
(11, 'Bradford', 'Yolanda', 'id@icloud.net', '2013-12-15', 'magnis', 0, '2022-08-19'),
(9, 'Allen', 'Griffin', 'laoreet.libero@outlook.net', '2011-12-23', 'diam', 0, '2022-04-19'),
(8, 'Stevenson', 'Elliott', 'urna.justo.faucibus@protonmail.couk', '2008-08-27', 'neque', 0, '2021-08-18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
