-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Juin 2017 à 14:27
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `conciergin`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_Personne` int(200) NOT NULL,
  `Nom_Personne` varchar(150) DEFAULT NULL,
  `Prenom_Personne` varchar(150) DEFAULT NULL,
  `Addresse_Personne` varchar(150) DEFAULT NULL,
  `Num_Telephone` varchar(10) DEFAULT NULL,
  `Mail_Personne` varchar(150) DEFAULT NULL,
  `Password_Personne` varchar(50) DEFAULT NULL,
  `Role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_Personne`, `Nom_Personne`, `Prenom_Personne`, `Addresse_Personne`, `Num_Telephone`, `Mail_Personne`, `Password_Personne`, `Role`) VALUES
(1, 'Rizzon', 'Charles', 'addresse', '0600000000', 'cr91700@free.fr', '7b24afc8bc80e548d66c4e7ff72171c5', 0),
(2, ':nom', ':prenom', NULL, NULL, ':mail', ':mdp', 0),
(3, 'fgfg', 'dfdgfdfg', NULL, NULL, 'dfggfgdfdgf', 'fgfg', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_Personne`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_Personne` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
