-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 22 nov. 2022 à 17:52
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `narsadec`
--

-- --------------------------------------------------------

--
-- Structure de la table `declarant`
--

CREATE TABLE `declarant` (
  `id` int(10) NOT NULL,
  `Nom` char(50) NOT NULL,
  `Prenom` char(50) NOT NULL,
  `Fonction` char(50) NOT NULL,
  `GSM` char(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `RaisonSociale` char(50) NOT NULL,
  `Adresse` char(255) NOT NULL,
  `Ville` char(50) NOT NULL,
  `CodePostal` varchar(50) NOT NULL,
  `VilleAR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `declarant`
--

INSERT INTO `declarant` (`id`, `Nom`, `Prenom`, `Fonction`, `GSM`, `email`, `RaisonSociale`, `Adresse`, `Ville`, `CodePostal`, `VilleAR`) VALUES
(139, 'amouri', 'hichamee', '', '', '', 'amouri', '', 'taza', '', ''),
(142, 'amouri', 'hichame', 'gerant', '0644980863', 'hichameamouri@gmail.com', 'beljique', '30000', 'Fes', '30100', 'فاس'),
(155, 'amouri', 'hichame', '', '', '', 'lolidi', '', 'casa', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `declarant`
--
ALTER TABLE `declarant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `declarant`
--
ALTER TABLE `declarant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
