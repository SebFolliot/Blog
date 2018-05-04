-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db736629356.db.1and1.com
-- Généré le :  Ven 04 Mai 2018 à 13:50
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db736629356`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `chapters` smallint(6) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `report` tinyint(1) NOT NULL DEFAULT '0',
  `moderate` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `chapters`, `auteur`, `contenu`, `report`, `moderate`, `date`) VALUES
(24, 7, 'Rick', 'Cela donne envie de voir la suite.', 0, 0, '2018-04-27 16:17:17'),
(25, 7, 'Seb', 'Et la suite semble encore mieux...', 0, 0, '2018-04-27 16:21:20'),
(23, 7, 'Seb', 'Premier chapitre top.', 1, 1, '2018-04-27 16:14:11'),
(13, 7, 'ThÃ©o21', 'Le premier chapitre est passionnant !!!', 0, 1, '2018-04-25 10:38:21'),
(26, 9, 'Leo22', 'Le second chapitre est encore plus passionnant que le prÃ©cÃ©dent.', 0, 0, '2018-05-01 11:01:38'),
(27, 9, 'Rick23', 'c''est clair !!!', 0, 1, '2018-05-01 12:56:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
