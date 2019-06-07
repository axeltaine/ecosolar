-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 07, 2019 at 01:25 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ecosolar`
--

-- --------------------------------------------------------

--
-- Table structure for table `deviseco`
--

CREATE TABLE `deviseco` (
  `id_conso` int(11) NOT NULL,
  `montant_facture` float DEFAULT NULL,
  `fournisseur` varchar(255) DEFAULT NULL,
  `chauffage` varchar(255) DEFAULT NULL,
  `chauffage_eau` varchar(255) DEFAULT NULL,
  `orientation` varchar(255) DEFAULT NULL,
  `inclinaison` varchar(255) DEFAULT NULL,
  `carte` varchar(255) DEFAULT NULL,
  `surface` varchar(255) DEFAULT NULL,
  `hauteur` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `couverture` varchar(255) DEFAULT NULL,
  `frigo` varchar(255) DEFAULT NULL,
  `piscine` varchar(255) DEFAULT NULL,
  `lave_linge` varchar(255) DEFAULT NULL,
  `lave_vaisselle` varchar(255) DEFAULT NULL,
  `congelateur` varchar(255) DEFAULT NULL,
  `cave_a_vin` varchar(255) DEFAULT NULL,
  `voiture` varchar(255) DEFAULT NULL,
  `pompe_a_chaleur` varchar(255) DEFAULT NULL,
  `seche_linge` varchar(255) DEFAULT NULL,
  `nombre_personne_foyer` varchar(255) DEFAULT NULL,
  `photo_batiment` varchar(255) DEFAULT NULL,
  `civilite` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `info_complementaire` varchar(255) DEFAULT NULL,
  `abonnement` varchar(255) DEFAULT NULL,
  `longueur` varchar(255) DEFAULT NULL,
  `largeur` varchar(255) DEFAULT NULL,
  `charpente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deviseco`
--

INSERT INTO `deviseco` (`id_conso`, `montant_facture`, `fournisseur`, `chauffage`, `chauffage_eau`, `orientation`, `inclinaison`, `carte`, `surface`, `hauteur`, `age`, `couverture`, `frigo`, `piscine`, `lave_linge`, `lave_vaisselle`, `congelateur`, `cave_a_vin`, `voiture`, `pompe_a_chaleur`, `seche_linge`, `nombre_personne_foyer`, `photo_batiment`, `civilite`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `code_postal`, `ville`, `info_complementaire`, `abonnement`, `longueur`, `largeur`, `charpente`) VALUES
(1, NULL, NULL, 'Pompe à chaleur Air/Eau', 'Pompe à chaleur', NULL, '20', 'zone1', NULL, '3', '3', 'ardoises', '1', '2', '0', '0', '0', '0', '0', '0', '0', '10', '', '', 'test', 'test', 'test@LIve.de', '08080777070', '78 rue jean', '08000', 'charle', 'chate', NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', NULL, NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(3, NULL, '', 'Chauffage électrique', 'Résistance électrique', NULL, NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', NULL, '20', 'zone2', NULL, '3', '', 'tuiles', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', NULL, '45', 'zone2', NULL, '3', '2', 'ardoises', '0', '0', '2', '0', '0', '0', '2', '1', '0', '3', 'carte_france_rendement_ensoleillement_photovoltaique.jpg', 'homme', 'TEST', 'TEST', 'TEST@liv.fr', '0808080808', '98 rue bobo', '09888', 'HJDKHS', 'TEST', NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', NULL, '20', NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(7, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', 'ouest', NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(8, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', 'ouest', NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', 'ouest', NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(10, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', 'ouest', NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(11, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', NULL, '45', 'zone4', NULL, '3', '2', 'ardoises', '0', '0', '2', '0', '3', '0', '1', '1', '0', '10', 'dims.jpeg', 'homme', 'test', 'test', 'test@live.fr', '0908080808', '09 rue jean', '09000', 'CHARle', 'charle', NULL, NULL, NULL, NULL),
(12, NULL, NULL, 'Chauffage gaz, fioul ou bois', 'Résistance électrique', NULL, '20', 'zone2', NULL, '3', 'dfg', 'ardoises', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', 'femme', 'dfg', 'dfg', 'dfgfdg@dfs.fr', 'dfg', 'dfgdf', 'fdgdf', 'fdgd', 'fdgd', NULL, NULL, NULL, NULL),
(13, NULL, NULL, 'Chauffage électrique', 'Résistance électrique', NULL, NULL, NULL, NULL, '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(14, 1213, NULL, 'Chauffage électrique', 'Résistance électrique', NULL, '5', 'zone4', NULL, '3', '', 'tuiles', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(15, 12133, 'edf', 'Chauffage électrique', 'Résistance électrique', 'ouest', '20', 'zone2', '35m<valeur<50m', '3', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(16, 120, 'on', 'Pompe à chaleur Air/Eau', 'Chaudière fuel', 'est', '20', 'zone1', '35m<valeur<50m', '3', '2', 'ardoises', '0', '1', '0', '2', '0', '1', '0', '0', '0', '2', 'dement_ensoleillement_photovoltaique2.png', '', 'alex', 'jean', 'alex@live.fr', '0909090909', '2 rue jean', '08000', 'CHarleville', 'test', NULL, NULL, NULL, NULL),
(17, 1234, '<35m', 'Chauffage gaz, fioul ou bois', 'Chaudière bois', 'sud_ouest', '20', 'zone3', NULL, '3', '3', 'ardoises', '0', '0', '0', '1', '0', '1', '0', '0', '0', '1', '', '', 'dsfds', 'sdfsdf', 'sdfdsf@lol.fr', 'qsdqsqsdsq', 'qsdsqdq', 'sdqsd', 'qsdsqd', 'qsdqsd', NULL, NULL, NULL, NULL),
(18, 1998970, 'edf', 'Pompe à chaleur Air/Eau', 'Chaudière bois', 'sud', '20', 'zone2', '<35m', '3', '3', 'ardoises', '0', '0', '0', '1', '0', '0', '0', '2', '0', '1', '', '', 'sgvgsdf', 'sdfdsf', 'dsfdsfs@dsf.fr', 'sqdqsd', 'qsdqsd', 'sqdsqd', 'sqdsqd', 'qsdsqdq', NULL, NULL, NULL, NULL),
(19, 12123, 'edf', 'Climatisation (PAC Air/Air)', 'Chaudière bois', 'est', '20', 'zone1', '<35m', '2', '2', 'toit_terrasse', '0', '0', '0', '2', '0', '0', '3', '0', '0', '1', '', 'Homme', 'sdff', 'sdfdsf', 'sdfsd@live.fr', 'sdfsdf', 'sdfsd', 'sdf', 'sdfsdf', 'dfsd', NULL, NULL, NULL, NULL),
(20, 1334, 'autre', 'Pompe à chaleur Air/Eau', 'Chaudière bois', 'est', '35', 'zone1', '35m<valeur<50m', '3', '3', 'ardoises', '0', '0', '0', '2', '0', '0', '3', '0', '0', '1', '', 'Homme', 'alain', 'jean', 'alian@live.fr', '09080707', '34 rue jean', '09000', 'charle', 'charle', NULL, NULL, NULL, NULL),
(21, 23, 'edf', 'Pompe à chaleur Air/Eau', 'Pompe à chaleur', 'sud', '35', 'zone3', '35m<valeur<50m', '', '', 'tuiles', '0', '0', '3', '0', '3', '0', '0', '0', '0', '1', '', 'Femme', 'resresr', 'rdgfdgdf', 'fdgfdgdfg@live.fr', 'dsfdsfsdf', 'sdfdsfs', 'sdfdsf', 'sdfsdf', 'sdfsd', NULL, NULL, NULL, NULL),
(22, 1221, 'edf', 'Pompe à chaleur Air/Eau', 'Pompe à chaleur', 'est', '20', 'zone3', '35m<valeur<50m', '1', '1', 'ardoises', '0', '0', '2', '0', '0', '0', '0', '0', '0', '1', '', 'Homme', 'alain', 'dfsfds', 'dsfdsf@live.de', 'dsfdf', 'sdfds', 'dsfsdf', 'dsfdsf', 'dsfdsfsd', NULL, NULL, NULL, NULL),
(23, 122, 'edf', 'Climatisation (PAC Air/Air)', 'Chaudière bois', 'sud_est', '20', 'zone2', '35m<valeur<50m', '1', '1', 'ardoises', '0', '2', '0', '0', '0', '0', '0', '0', '0', '1', '', 'Homme', 'ASZDZ', 'ASZZ', 'dsqds@live.fr', '09080808', 'sdqsd', 'qsdqsd', 'qsdqsd', 'sqdsqds', NULL, NULL, NULL, NULL),
(24, 1234, 'edf', 'Climatisation (PAC Air/Air)', 'Chaudière bois', 'est', '20', 'zone4', '35m<valeur<50m', '2', '2', 'toit_terrasse', '0', '3', '0', '0', '3', '0', '4+', '0', '0', '2', '', 'Homme', 'azaez', 'zaeza', 'azeae@live.fr', 'qsdsqdqsd', 'qsdqsd', 'qsdqsdq', 'qsdsqd', 'qsdqsdqs', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deviseco`
--
ALTER TABLE `deviseco`
  ADD PRIMARY KEY (`id_conso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deviseco`
--
ALTER TABLE `deviseco`
  MODIFY `id_conso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
