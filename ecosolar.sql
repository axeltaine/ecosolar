-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 03, 2019 at 11:48 AM
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
  `info_complementaire` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id_conso` int(11) NOT NULL AUTO_INCREMENT;
