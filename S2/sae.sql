-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 09 mai 2023 à 15:18
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae`
--

-- --------------------------------------------------------

--
-- Structure de la table `ac`
--

CREATE TABLE `ac` (
  `Id_AC` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `TitreAC` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Competence` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Annee` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mobiliser`
--

CREATE TABLE `mobiliser` (
  `Id_Res` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Id_SAE` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `Id_Res` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `TitreRes` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sae`
--

CREATE TABLE `sae` (
  `Id_SAE` int(3) NOT NULL,
  `Titre_SAE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DescriptionSAE` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `Semestre` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `valider`
--

CREATE TABLE `valider` (
  `Id_AC` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Id_SAE` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`Id_AC`);

--
-- Index pour la table `mobiliser`
--
ALTER TABLE `mobiliser`
  ADD PRIMARY KEY (`Id_Res`,`Id_SAE`),
  ADD KEY `Id_SAE` (`Id_SAE`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`Id_Res`);

--
-- Index pour la table `sae`
--
ALTER TABLE `sae`
  ADD PRIMARY KEY (`Id_SAE`);

--
-- Index pour la table `valider`
--
ALTER TABLE `valider`
  ADD PRIMARY KEY (`Id_AC`,`Id_SAE`),
  ADD KEY `Id_SAE` (`Id_SAE`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mobiliser`
--
ALTER TABLE `mobiliser`
  ADD CONSTRAINT `mobiliser_ibfk_1` FOREIGN KEY (`Id_Res`) REFERENCES `ressources` (`Id_Res`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mobiliser_ibfk_2` FOREIGN KEY (`Id_SAE`) REFERENCES `sae` (`Id_SAE`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `valider`
--
ALTER TABLE `valider`
  ADD CONSTRAINT `valider_ibfk_1` FOREIGN KEY (`Id_AC`) REFERENCES `ac` (`Id_AC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `valider_ibfk_2` FOREIGN KEY (`Id_SAE`) REFERENCES `sae` (`Id_SAE`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
