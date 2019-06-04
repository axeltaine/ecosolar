-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 04 Juin 2019 à 11:34
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `deviseco` (
  `id_conso` int(11) NOT NULL,
  `montant_facture` varchar(100) DEFAULT NULL,
  `fournisseur` varchar(50) DEFAULT NULL,
  `chauffage` varchar(50) DEFAULT NULL,
  `chauffage_eau` varchar(50) DEFAULT NULL,
  `orientation` varchar(50) DEFAULT NULL,
  `inclinaison` varchar(11) DEFAULT NULL,
  `carte` varchar(50) DEFAULT NULL,
  `surface` varchar(50) DEFAULT NULL,
  `hauteur` varchar(11) DEFAULT NULL,
  `age` varchar(11) DEFAULT NULL,
  `couverture` varchar(50) DEFAULT NULL,
  `frigo` varchar(11) DEFAULT NULL,
  `piscine` varchar(11) DEFAULT NULL,
  `lave_linge` varchar(11) DEFAULT NULL,
  `lave_vaisselle` varchar(11) DEFAULT NULL,
  `congelateur` varchar(11) DEFAULT NULL,
  `cave_a_vin` varchar(11) DEFAULT NULL,
  `voiture` varchar(11) DEFAULT NULL,
  `pompe_a_chaleur` varchar(11) DEFAULT NULL,
  `seche_linge` varchar(11) DEFAULT NULL,
  `nombre_personne_foyer` varchar(11) DEFAULT NULL,
  `photo_batiment` varchar(500) DEFAULT NULL,
  `civilite` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `code_postal` varchar(50) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `info_complementaire` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `deviseco`
--

INSERT INTO `deviseco` (`id_conso`, `montant_facture`, `fournisseur`, `chauffage`, `chauffage_eau`, `orientation`, `inclinaison`, `carte`, `surface`, `hauteur`, `age`, `couverture`, `frigo`, `piscine`, `lave_linge`, `lave_vaisselle`, `congelateur`, `cave_a_vin`, `voiture`, `pompe_a_chaleur`, `seche_linge`, `nombre_personne_foyer`, `photo_batiment`, `civilite`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `code_postal`, `ville`, `info_complementaire`) VALUES
(12, '100', NULL, 'Chauffage électrique', 'Résistance électrique', NULL, NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', ''),
(13, '0', NULL, 'Chauffage électrique', 'Résistance électrique', NULL, NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', ''),
(14, 'pas de facture', NULL, 'Chauffage électrique', 'Résistance électrique', NULL, NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `deviseco`
--
ALTER TABLE `deviseco`
  ADD PRIMARY KEY (`id_conso`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `deviseco`
--
ALTER TABLE `deviseco`
  MODIFY `id_conso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
