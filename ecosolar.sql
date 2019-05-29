-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 29 mai 2019 à 09:12
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecosolar`
--

-- --------------------------------------------------------

--
-- Structure de la table `deviseco`
--

DROP TABLE IF EXISTS `deviseco`;
CREATE TABLE IF NOT EXISTS `deviseco` (
  `id_conso` int(11) NOT NULL AUTO_INCREMENT,
  `montant_facture` float NOT NULL,
  `fournisseur` varchar(50) DEFAULT NULL,
  `chauffage` varchar(50) DEFAULT NULL,
  `chauffage_eau` varchar(50) DEFAULT NULL,
  `orientation` varchar(50) NOT NULL,
  `inclinaison` int(11) NOT NULL,
  `carte` varchar(50) NOT NULL,
  `surface` varchar(50) NOT NULL,
  `hauteur` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `couverture` varchar(50) DEFAULT NULL,
  `frigo` int(11) DEFAULT NULL,
  `piscine` int(11) DEFAULT NULL,
  `lave_linge` int(11) DEFAULT NULL,
  `lave_vaisselle` int(11) DEFAULT NULL,
  `congelateur` int(11) DEFAULT NULL,
  `cave_a_vin` int(11) DEFAULT NULL,
  `voiture` int(11) DEFAULT NULL,
  `pompe_a_chaleur` int(11) DEFAULT NULL,
  `seche_linge` int(11) DEFAULT NULL,
  `nombre_personne_foyer` int(11) DEFAULT NULL,
  `photo_batiment` varchar(500) DEFAULT NULL,
  `civilite` varchar(50) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `adresse` varchar(250) NOT NULL,
  `code_postal` varchar(50) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `info_complementaire` longtext,
  PRIMARY KEY (`id_conso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(60) NOT NULL,
  `ulogin` varchar(20) NOT NULL,
  `motdepassec` text NOT NULL,
  PRIMARY KEY (`iduser`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `mail`, `ulogin`, `motdepassec`) VALUES
(4, 'az.raharijaona@gmail.com', 'visiteur', '$2y$10$Wex9UzwN8mfFSBTUr8Uuye/EZC9fbwUxN0jjjE1eqCJ0To2Xd2mqu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
