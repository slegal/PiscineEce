-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 03 mai 2018 à 14:53
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
-- Structure de la table `centre_d_interet`
--

DROP TABLE IF EXISTS `centre_d_interet`;
CREATE TABLE IF NOT EXISTS `centre_d_interet` (
  `Num_interet` int(11) NOT NULL AUTO_INCREMENT,
  `Description` text NOT NULL,
  PRIMARY KEY (`Num_interet`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centre_d_interet`
--

INSERT INTO `centre_d_interet` (`Num_interet`, `Description`) VALUES
(1, 'Football'),
(2, 'Equitation'),
(3, 'Voyages'),
(4, 'Lire'),
(5, 'Musique'),
(6, 'Animaux');

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
  `Description` text NOT NULL,
  PRIMARY KEY (`Num_competence`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`Num_competence`, `Description`) VALUES
(1, 'SQL'),
(2, 'Java'),
(3, 'Coudre'),
(4, 'Organisation');

-- --------------------------------------------------------

--
-- Structure de la table `competence_suivie`
--

DROP TABLE IF EXISTS `competence_suivie`;
CREATE TABLE IF NOT EXISTS `competence_suivie` (
  `Num_competence` int(11) NOT NULL,
  `Num_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`Num_competence`,`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence_suivie`
--

INSERT INTO `competence_suivie` (`Num_competence`, `Num_utilisateur`) VALUES
(1, 2),
(1, 3),
(2, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Num_utilisateur` int(11) NOT NULL,
  `Num_ami` int(11) NOT NULL,
  PRIMARY KEY (`Num_utilisateur`,`Num_ami`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`Num_utilisateur`, `Num_ami`) VALUES
(1, 2),
(2, 1),
(2, 3),
(2, 4),
(3, 2),
(4, 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`Num_emploi`, `Num_utilisateur`, `Description`, `Date_creation`, `Titre`) VALUES
(1, 1, 'Poste d ingenieur a la FNAC ', '2018-05-02', 'Ingenieur '),
(2, 2, 'Conseil de vente au magasin Jardiland', '2018-05-15', 'Vendeuse '),
(3, 3, 'Vente de boisson non alcoolisé dans le bar d\'une entreprise.', '2018-05-10', 'Barman');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`Num_experience`, `Num_utilisateur`, `Entreprise`, `Date_debut`, `Date_fin`, `Poste`) VALUES
(1, 1, 'RATP', '2017-06-02', '2017-07-06', 'Guichetier'),
(2, 2, 'MAAF', '2016-06-02', '2016-07-02', 'Technicienne de Surface'),
(3, 3, 'Canigou', '2018-01-23', '2018-02-28', 'Comptable'),
(4, 1, 'Renault', '2018-01-01', '2018-02-07', 'Stagiaire'),
(5, 2, 'McDonald', '2018-05-23', '2018-05-26', 'Serveuse');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `Num_formation` int(11) NOT NULL AUTO_INCREMENT,
  `Ecole` varchar(255) NOT NULL,
  `Diplome` varchar(255) NOT NULL,
  `Date_diplome` date NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Num_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`Num_formation`, `Ecole`, `Diplome`, `Date_diplome`, `Description`) VALUES
(1, 'ECE Paris', 'Ingenieur generaliste', '2020-05-29', 'Diplome d ingenieur generaliste');

-- --------------------------------------------------------

--
-- Structure de la table `formation_suivie`
--

DROP TABLE IF EXISTS `formation_suivie`;
CREATE TABLE IF NOT EXISTS `formation_suivie` (
  `Num_utilisateur` int(11) NOT NULL,
  `Num_formation` int(11) NOT NULL,
  PRIMARY KEY (`Num_utilisateur`,`Num_formation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation_suivie`
--

INSERT INTO `formation_suivie` (`Num_utilisateur`, `Num_formation`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `interet_suivi`
--

DROP TABLE IF EXISTS `interet_suivi`;
CREATE TABLE IF NOT EXISTS `interet_suivi` (
  `Num_interet` int(11) NOT NULL,
  `Num_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`Num_interet`,`Num_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `interet_suivi`
--

INSERT INTO `interet_suivi` (`Num_interet`, `Num_utilisateur`) VALUES
(2, 2),
(2, 3),
(4, 1),
(4, 3);

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
  `Type_user` int(11) NOT NULL,
  PRIMARY KEY (`Num_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Num_utilisateur`, `Nom`, `Prenom`, `Mot_de_passe`, `Adresse_email`, `Pseudo`, `Lien_photo_profil`, `Lien_photo_couverture`, `Description`, `Phrase_d_intro`, `Type_user`) VALUES
(1, 'Dujet', 'Virgile', 'chien', 'virgile@gmail.net', 'Vivi', 'ppVirgileDujet.jpg', 'pcVirgileDujet.jpg', 'Eleve sérieux et aimable.', 'J\'aime les animaux', 0),
(2, 'Legal', 'Solenn', 'Concarneau', 'solenn@gmail.fr', 'Furie', 'ppSolennLegall.jpg', 'pcSolennLegal.jpg', 'Eleve relativement charmante', 'Bonjour j\'aime la voile', 0),
(3, 'Angles', 'Mathilde', 'patate', 'mathilde_angles@gmail.fr', 'matmat', 'ppMathildeAngles.jpg', 'pcMathildeAngles.jpg', 'Eleve vraiment gentille', 'Cherche un emplois', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
