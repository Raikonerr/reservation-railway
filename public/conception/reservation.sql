-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 fév. 2022 à 15:12
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Id_A` int(10) NOT NULL,
  `Nom_utilisateur` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gare`
--

CREATE TABLE `gare` (
  `Id_g` int(11) NOT NULL,
  `Ville_g` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `Id_p` int(10) NOT NULL,
  `Nom_utilisateur` varchar(30) NOT NULL,
  `Mot_de_passe` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id_r` int(11) NOT NULL,
  `Id_p` int(11) NOT NULL,
  `Id_v` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `train`
--

CREATE TABLE `train` (
  `Id_t` int(11) NOT NULL,
  `Type_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vo`
--

CREATE TABLE `vo` (
  `Id_v` int(11) NOT NULL,
  `Heure_d` date NOT NULL,
  `Heure_a` date NOT NULL,
  `Jour` date NOT NULL,
  `Ville_d` varchar(30) NOT NULL,
  `Ville_a` varchar(30) NOT NULL,
  `Prix` int(10) NOT NULL,
  `Id_t` int(11) NOT NULL,
  `Id_g` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_A`);

--
-- Index pour la table `gare`
--
ALTER TABLE `gare`
  ADD PRIMARY KEY (`Id_g`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Id_p`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id_r`),
  ADD KEY `Id_p` (`Id_p`),
  ADD KEY `Id_v` (`Id_v`);

--
-- Index pour la table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`Id_t`);

--
-- Index pour la table `vo`
--
ALTER TABLE `vo`
  ADD PRIMARY KEY (`Id_v`),
  ADD KEY `Id_t` (`Id_t`),
  ADD KEY `Id_g` (`Id_g`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_A` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gare`
--
ALTER TABLE `gare`
  MODIFY `Id_g` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `Id_p` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_r` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `train`
--
ALTER TABLE `train`
  MODIFY `Id_t` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vo`
--
ALTER TABLE `vo`
  MODIFY `Id_v` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Id_p`) REFERENCES `person` (`Id_p`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Id_v`) REFERENCES `vo` (`Id_v`);

--
-- Contraintes pour la table `vo`
--
ALTER TABLE `vo`
  ADD CONSTRAINT `vo_ibfk_1` FOREIGN KEY (`Id_t`) REFERENCES `train` (`Id_t`),
  ADD CONSTRAINT `vo_ibfk_2` FOREIGN KEY (`Id_g`) REFERENCES `gare` (`Id_g`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
