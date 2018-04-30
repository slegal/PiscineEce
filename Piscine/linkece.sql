-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 avr. 2018 à 16:31
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `linkece`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `Num_administrateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mot_de_passe` varchar(255) NOT NULL,
  `Adresse_email` varchar(255) NOT NULL,
  PRIMARY KEY (`Num_administrateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `centre_d_interet`
--

DROP TABLE IF EXISTS `centre_d_interet`;
CREATE TABLE IF NOT EXISTS `centre_d_interet` (
  `Num_interet` int(11) NOT NULL AUTO_INCREMENT,
  `Num_utilisateur` int(11) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Num_interet`),
  KEY `Num_utilisateur` (`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `Num_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `Num_post` int(11) NOT NULL,
  `Num_utilisateur` int(11) NOT NULL,
  `Texte` text NOT NULL,
  PRIMARY KEY (`Num_commentaire`),
  KEY `Num_post` (`Num_post`),
  KEY `Num_utilisateur` (`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `Num_competence` int(11) NOT NULL AUTO_INCREMENT,
  `Num_utilisateur` int(11) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Num_competence`),
  KEY `Num_utilisateur` (`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Num_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Num_ami` int(11) NOT NULL,
  PRIMARY KEY (`Num_utilisateur`),
  KEY `Num_ami` (`Num_ami`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `Num_emploi` int(11) NOT NULL AUTO_INCREMENT,
  `Num_utilisateur` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Date_creation` date NOT NULL,
  `Titre` text NOT NULL,
  PRIMARY KEY (`Num_emploi`),
  KEY `Num_utilisateur` (`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `Num_experience` int(11) NOT NULL AUTO_INCREMENT,
  `Num_utilisateur` int(11) NOT NULL,
  `Entreprise` varchar(255) NOT NULL,
  `Date_debut` date NOT NULL,
  `Date_fin` date NOT NULL,
  `Poste` varchar(255) NOT NULL,
  PRIMARY KEY (`Num_experience`),
  KEY `Num_utilisateur` (`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `Num_formation` int(11) NOT NULL AUTO_INCREMENT,
  `Num_utilisateur` int(11) NOT NULL,
  `Ecole` varchar(255) NOT NULL,
  `Diplome` varchar(255) NOT NULL,
  `Date_diplome` int(11) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Num_formation`),
  KEY `Num_utilisateur` (`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `Num_post` int(11) NOT NULL,
  `Num_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `like`
--

INSERT INTO `like` (`Num_post`, `Num_utilisateur`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `Num_post` int(11) NOT NULL AUTO_INCREMENT,
  `Num_utilisateur` int(11) NOT NULL,
  `Nombre_de_like` int(11) NOT NULL,
  `Nombre_de_comment` int(11) NOT NULL,
  `Contenu` text NOT NULL,
  `Lieu` text NOT NULL,
  `Heure` time NOT NULL,
  `Date` date NOT NULL,
  `Emotion` varchar(255) NOT NULL,
  `Confidentialité` int(11) NOT NULL,
  `Type_contenu` text NOT NULL,
  PRIMARY KEY (`Num_post`),
  KEY `Num_utilisateur` (`Num_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`Num_post`, `Num_utilisateur`, `Nombre_de_like`, `Nombre_de_comment`, `Contenu`, `Lieu`, `Heure`, `Date`, `Emotion`, `Confidentialité`, `Type_contenu`) VALUES
(1, 1, 3, 0, 'Aujourd\'hui je code!', 'ECE Paris', '10:00:00', '2018-04-30', 'Triste', 0, 'texte');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Num_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Mot_de_passe` varchar(255) DEFAULT NULL,
  `Adresse_email` varchar(255) DEFAULT NULL,
  `Pseudo` varchar(255) DEFAULT NULL,
  `Lien_photo_profil` text,
  `Lien_photo_couverture` text,
  `Description` text,
  `Phrase_d_intro` text,
  PRIMARY KEY (`Num_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Num_utilisateur`, `Nom`, `Prenom`, `Mot_de_passe`, `Adresse_email`, `Pseudo`, `Lien_photo_profil`, `Lien_photo_couverture`, `Description`, `Phrase_d_intro`) VALUES
(1, 'Dujet', 'Virgile', 'chien', 'virgile@gmail.net', 'Vivi', 'ppvirgileDujet.jpg', 'pcVirgileDujet.jpg', 'Eleve sérieux et aimable.', 'J\'aime les animaux'),
(2, 'Legal', 'Solenn', 'Concarneau', 'solenn@gmail.fr', 'Furie', 'ppSolennLegall.jpg', 'pcSolennLegal.jpg', 'Eleve relativement charmante', 'Bonjour j\'aime la voile'),
(3, 'Angles', 'Mathilde', 'patate', 'mathilde_angles@gmail.fr', 'matmat', 'ppMathildeAngles.jpg', 'pcMathildeAngles.jpg', 'Eleve vraiment gentille', 'Cherche un emplois');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
