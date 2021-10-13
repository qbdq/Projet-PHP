-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 juin 2020 à 15:07
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `code_cat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`code_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`code_cat`, `nom_cat`, `description`) VALUES
(1, 'SOIN ET BEAUTE ', ''),
(2, 'COMPLEMENT ALIMENTAIRES', ''),
(3, 'medicament', ''),
(4, 'parapharmacie', '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `ref_produit` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `disponible` tinyint(4) NOT NULL,
  `selectionne` tinyint(4) NOT NULL,
  `promotion` tinyint(4) NOT NULL,
  `code_cat` int(11) NOT NULL,
  PRIMARY KEY (`ref_produit`),
  KEY `fk_foreign_cat_produit` (`code_cat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ref_produit`, `designation`, `quantite`, `prix`, `photo`, `disponible`, `selectionne`, `promotion`, `code_cat`) VALUES
('produit6', 'complement alimentaire a base de magnesium', 4, 15, 'magnessium', 1, 1, 0, 3),
('produit2', 'sirop  des toux seches ', 5, 10, 'sirop', 1, 1, 0, 3),
('produit3', 'filorga', 1, 12, 'filorga', 1, 1, 1, 1),
('produit', 'spasfon  douleurs de l intestin', 20, 6, 'spasfon', 1, 1, 0, 3),
('produit5', 'Efferalgan Vitamine C', 20, 3, 'eff', 1, 1, 0, 3),
('produit7', 'la roche posay creme', 3, 62, 'laroche', 1, 1, 1, 1),
('produit8', 'eye care creme hydratante equilibrante', 2, 36, 'eyecare', 1, 1, 1, 1),
('produit9', 'CRÈME NUTRI-JEUNESSE', 2, 120, 'filorga', 1, 1, 0, 1),
('produit10', 'Masques chirurgicaux ', 100, 2, 'masque', 1, 1, 0, 4),
('produit12', 'pouvoir traiter differentes affections', 40, 3, 'listing', 1, 1, 0, 3),
('produit13', 'thermometre', 50, 250, 'thermo', 1, 1, 1, 4),
('produit14', 'antibacterien', 20, 4, 'anti', 1, 1, 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `niveau` int(11) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`login`, `pass`, `niveau`) VALUES
('admin', 'admin', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
