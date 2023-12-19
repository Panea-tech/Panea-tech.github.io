-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 déc. 2023 à 20:39
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `posilax`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_compte`
--

CREATE TABLE `admin_compte` (
  `Id` int(10) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `admin_compte`
--

INSERT INTO `admin_compte` (`Id`, `Nom`, `Password`, `Type`) VALUES
(1, 'Panea', '1234', 'Invité'),
(2, 'Obed', 'admin', 'Administrateur'),
(3, 'Mervedie', '12345678', 'Administrateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_compte`
--
ALTER TABLE `admin_compte`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_compte`
--
ALTER TABLE `admin_compte`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
