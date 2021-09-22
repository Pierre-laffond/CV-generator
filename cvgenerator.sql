-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 09 déc. 2020 à 14:14
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cvgenerator`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `idCompetence` int(8) NOT NULL,
  `libCompetence` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`idCompetence`, `libCompetence`) VALUES
(1, 'php'),
(9, 'assidue'),
(16, 'java'),
(17, 'SQL'),
(20, 'assidue'),
(21, 'a'),
(22, 'b'),
(23, 'assidue'),
(24, 'teste1'),
(25, 'teste2');

-- --------------------------------------------------------

--
-- Structure de la table `etude`
--

CREATE TABLE `etude` (
  `idEtude` int(8) NOT NULL,
  `diplomeEtude` varchar(50) DEFAULT NULL,
  `anneeEtude` varchar(4) DEFAULT NULL,
  `ecoleEtude` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etude`
--

INSERT INTO `etude` (`idEtude`, `diplomeEtude`, `anneeEtude`, `ecoleEtude`) VALUES
(1, 'webmobile', '2020', 'Alt-rh'),
(2, 'PHP CERTIFICATION', '2019', 'ITSCHOOL'),
(12, 'CFA', '2003', 'chris'),
(13, 'bts SIO', '1950', 'ingetis');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `idExp` int(8) NOT NULL,
  `debutExperience` date DEFAULT NULL,
  `finExperience` date DEFAULT NULL,
  `entrepriseExperience` varchar(50) DEFAULT NULL,
  `descriptionExperience` varchar(200) DEFAULT NULL,
  `idUser` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`idExp`, `debutExperience`, `finExperience`, `entrepriseExperience`, `descriptionExperience`, `idUser`) VALUES
(1, '2020-01-01', '2020-08-26', 'Smartpoint', 'Developper : systemes distribué', 10),
(5, '0000-00-00', '0000-00-00', 'chris', 'testtesttest', 22),
(6, '2000-08-08', '2001-09-09', 'chris', 'testtest', 23);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(8) NOT NULL,
  `nomUser` varchar(50) DEFAULT NULL,
  `prenomUser` varchar(50) DEFAULT NULL,
  `naissanceUser` date NOT NULL,
  `emailUser` varchar(50) DEFAULT NULL,
  `passwordUser` varchar(50) DEFAULT NULL,
  `telUser` varchar(13) DEFAULT NULL,
  `numRueUser` int(3) DEFAULT NULL,
  `nomRueUser` varchar(50) DEFAULT NULL,
  `villeUser` varchar(50) DEFAULT NULL,
  `cpUser` varchar(10) DEFAULT NULL,
  `paysUser` varchar(50) DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nomUser`, `prenomUser`, `naissanceUser`, `emailUser`, `passwordUser`, `telUser`, `numRueUser`, `nomRueUser`, `villeUser`, `cpUser`, `paysUser`, `completed`) VALUES
(3, 'marley', 'bob', '2020-08-21', 'bob.marley@gmail.Com', 'azerty', '1212121212', 3, 'jamaica street', 'kingston', '10000', 'jamaica', 0),
(4, 'DUPONT', 'jean', '1986-06-10', 'j.dupont@gmail.com', 'dupont', '1231231234', 5, 'Jaures', 'Paris', '75014', 'France', 0),
(8, 'qsdf', 'marc', '2020-08-14', 'esdfgae@ggg.fr', 'lsefk', '2323232323', 5, 'jaures', 'paris', '75005', 'France', 0),
(9, 'test', 'test', '2020-08-14', 'test@test.com', 'test', '1111111111', 3, 'test', 'test', '11111', 'test', 0),
(10, 'tata', 'tata', '2018-02-07', 'tata@gmail.com', 'toto', '0987653598', 3, 'ggg', 'paris', '75020', 'France', 1),
(21, 'mami', 'mami', '2018-02-07', 'i@i.i', '1234', '1234567890', 6, 'rue', 'ville', '7898', 'pays', 0),
(22, 'colombo', 'colombo', '2020-12-31', 'c@c.c', '1234', '060606006', 4, 'rue', 'ville', '75011', 'pays', 0),
(23, 'FF', 'AA', '1212-12-12', 'a@a.a', '1234', '123456789', 7, 'rue', 'ville', '75020', 'Pays', 0);

-- --------------------------------------------------------

--
-- Structure de la table `usercompetence`
--

CREATE TABLE `usercompetence` (
  `idUC` int(8) NOT NULL,
  `idUser` int(8) DEFAULT NULL,
  `idCompetence` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `usercompetence`
--

INSERT INTO `usercompetence` (`idUC`, `idUser`, `idCompetence`) VALUES
(2, 10, 1),
(25, 21, 9),
(32, 10, 17),
(33, 10, 16),
(36, 22, 20),
(37, 22, 21),
(38, 22, 22),
(39, 23, 23),
(40, 23, 24),
(41, 23, 25);

-- --------------------------------------------------------

--
-- Structure de la table `useretude`
--

CREATE TABLE `useretude` (
  `idUE` int(8) NOT NULL,
  `idUser` int(8) DEFAULT NULL,
  `idEtude` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `useretude`
--

INSERT INTO `useretude` (`idUE`, `idUser`, `idEtude`) VALUES
(1, 8, 1),
(2, 10, 1),
(14, 22, 12),
(15, 23, 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`idCompetence`);

--
-- Index pour la table `etude`
--
ALTER TABLE `etude`
  ADD PRIMARY KEY (`idEtude`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`idExp`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `usercompetence`
--
ALTER TABLE `usercompetence`
  ADD PRIMARY KEY (`idUC`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idCompetence` (`idCompetence`);

--
-- Index pour la table `useretude`
--
ALTER TABLE `useretude`
  ADD PRIMARY KEY (`idUE`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idEtude` (`idEtude`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `idCompetence` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `etude`
--
ALTER TABLE `etude`
  MODIFY `idEtude` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `idExp` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `usercompetence`
--
ALTER TABLE `usercompetence`
  MODIFY `idUC` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `useretude`
--
ALTER TABLE `useretude`
  MODIFY `idUE` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `experience_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `usercompetence`
--
ALTER TABLE `usercompetence`
  ADD CONSTRAINT `usercompetence_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `usercompetence_ibfk_2` FOREIGN KEY (`idCompetence`) REFERENCES `competence` (`idCompetence`);

--
-- Contraintes pour la table `useretude`
--
ALTER TABLE `useretude`
  ADD CONSTRAINT `useretude_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `useretude_ibfk_2` FOREIGN KEY (`idEtude`) REFERENCES `etude` (`idEtude`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
