-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Février 2017 à 15:45
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `meme`
--

-- --------------------------------------------------------

--
-- Structure de la table `imagedefaut`
--

CREATE TABLE IF NOT EXISTS `imagedefaut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `imagedefaut`
--

INSERT INTO `imagedefaut` (`id`, `chemin`) VALUES
(1, 'defaut1.jpg'),
(3, 'defaut2.jpg'),
(7, 'defaut3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `memedefaut`
--

CREATE TABLE IF NOT EXISTS `memedefaut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `memedefaut`
--

INSERT INTO `memedefaut` (`id`, `nom`) VALUES
(1, 'meme1.jpg'),
(3, 'meme2.jpg'),
(5, 'meme3.jpg'),
(7, 'meme4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `memes`
--

CREATE TABLE IF NOT EXISTS `memes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
