-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db736629356.db.1and1.com
-- Généré le :  Ven 04 Mai 2018 à 13:51
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
-- Structure de la table `chapters`
--

CREATE TABLE IF NOT EXISTS `chapters` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `dateModif` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `chapters`
--

INSERT INTO `chapters` (`id`, `auteur`, `titre`, `contenu`, `dateAjout`, `dateModif`) VALUES
(7, 'Jean Forteroche', 'Chapitre 1 : Le grand voyage', '<p><img src="../images/animal_alaska.jpg" alt="Animal devant la montagne" width="250" height="163" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae nulla magna. Morbi leo tellus, malesuada id enim ut, aliquam ultrices massa. Praesent ultricies consequat lorem eu congue. Praesent feugiat sem odio, at posuere odio porta eu. Morbi vehicula sem eget mi placerat, in scelerisque tortor elementum. Proin malesuada lobortis lectus, ut gravida lorem condimentum sit amet. Pellentesque euismod augue id est pharetra aliquam. Nullam sollicitudin interdum augue quis luctus. Nunc mollis urna nec quam aliquam, eu mattis ex congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae nulla magna. Morbi leo tellus, malesuada id enim ut, aliquam ultrices massa. Praesent ultricies consequat lorem eu congue. Praesent feugiat sem odio, at posuere odio porta eu. Morbi vehicula sem eget mi placerat, in scelerisque tortor elementum. Proin malesuada lobortis lectus, ut gravida lorem condimentum sit amet. Pellentesque euismod augue id est pharetra aliquam. Nullam sollicitudin interdum augue quis luctus. Nunc mollis urna nec quam aliquam, eu mattis ex congue. To be continued...</p>', '2018-04-13 16:14:25', '2018-04-26 19:22:59'),
(9, 'Jean Forteroche', 'Chapitre 2 : Le ciel et les Ã©toiles', '<p><img src="../images/neige.jpg" alt="" width="250" height="187" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod metus quis ex convallis suscipit. Aenean viverra volutpat odio, vel pellentesque sem sodales quis. Aenean suscipit eget turpis sit amet volutpat. Mauris ornare ultrices tortor, sed vehicula tortor iaculis at. Ut eleifend diam non tincidunt vehicula. Integer gravida nibh a ullamcorper ultricies. In hac habitasse platea dictumst. Sed nulla nisi, eleifend a nibh eu, condimentum cursus nisi. Nulla fermentum mauris neque, quis blandit diam porttitor nec. Nullam viverra eros dictum fermentum vehicula. Pellentesque ipsum diam, sodales sit amet venenatis id, interdum eget leo. Phasellus vitae libero non felis tempor aliquam. Sed varius pulvinar ipsum. In iaculis neque eget lorem egestas varius. Praesent aliquam ligula dui, sagittis consectetur nisl ultricies ut. Cras eu urna sit amet mi accumsan congue. Phasellus odio libero, bibendum quis magna sit amet, lacinia tempor urna. Proin laoreet felis lacinia mi dignissim, faucibus lobortis leo rhoncus. Vestibulum eleifend mi sit amet neque consectetur, eget lobortis lectus ultricies. Fusce rutrum rhoncus ante, quis dignissim lorem convallis eu. Vivamus facilisis condimentum tempor. Suspendisse et justo lorem. Proin facilisis justo eu risus porttitor sollicitudin. Mauris non justo et sapien gravida lacinia at nec tellus. Nulla a nibh elit. Sed quis mollis erat. Quisque leo massa, ultricies eget justo in, ultrices laoreet urna. Duis ac sapien lorem. Curabitur quis risus mattis, pulvinar velit a, condimentum nibh. Fusce id commodo purus. Integer posuere vehicula diam, malesuada placerat diam rutrum nec. In hac habitasse platea dictumst. Aliquam erat volutpat. Nam suscipit blandit dui, eget tincidunt nisi ultricies vel. Vestibulum hendrerit eget risus ac dapibus. Proin id fermentum odio. Aliquam erat volutpat. In a ipsum id mauris tristique volutpat. Quisque commodo sem enim. Mauris efficitur efficitur eros, id ultricies felis efficitur non. Phasellus lacinia malesuada dolor, id rutrum justo sollicitudin at.</p>', '2018-04-20 09:46:25', '2018-04-26 19:37:49'),
(10, 'Jean Forteroche', 'Chapitre 3 : La randonnÃ©e', '<p><span style="color: #ff0000;"><span style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula cursus libero, id tristique diam tempor at. Etiam a neque auctor, faucibus lorem quis, efficitur elit. Vestibulum tempor elit magna, eget blandit dolor semper ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sit amet eros sagittis, eleifend diam at, faucibus lectus. Aliquam blandit lectus arcu, sed faucibus risus semper non. Mauris ac ipsum turpis.</span><br /></span></p>\r\n<p>Sed in augue imperdiet, dignissim justo vitae, posuere nibh. Phasellus eget nibh a tellus euismod euismod non eget risus. Nulla non eros id nisi fringilla maximus vitae quis sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam eu bibendum tortor, a elementum lorem. Nullam tempor at est eget viverra. Phasellus laoreet ultrices ornare. Etiam nunc massa, elementum ac nisl eleifend, posuere commodo nulla. Proin eleifend blandit neque, non convallis tellus rhoncus ut. Quisque id volutpat eros. Nullam sed mi in eros porta interdum non quis ligula. Donec posuere condimentum venenatis. Ut sodales, nunc nec fermentum tempor, diam magna suscipit ante, vel tincidunt nibh nisl at augue. Nunc non purus metus. Nulla luctus egestas orci, sed egestas justo. Suspendisse consequat, ipsum id auctor consequat, dolor ex feugiat ipsum, eget interdum metus libero vitae nunc.</p>\r\n<p>Praesent gravida sodales lacinia. Mauris sed erat non ante consequat blandit. Vestibulum risus justo, pellentesque at accumsan sit amet, malesuada ut metus. Curabitur eleifend, nunc non consectetur elementum, erat dui venenatis sapien, scelerisque porta velit magna nec lectus. Nam nec felis sit amet mi ullamcorper luctus nec ac libero. <strong>Nullam metus massa, faucibus eu fermentum vitae, vehicula et felis. Pellentesque sodales, nisi in condimentum vestibulum, sem turpis facilisis eros, ac placerat diam nulla vel tortor. Ut auctor, nisi id feugiat dignissim, metus quam tempor erat, in pulvinar arcu metus accumsan sapien.</strong></p>\r\n<p>Curabitur sit amet eros malesuada, sodales odio vitae, sodales lorem. Praesent ac semper enim. <em>Proin egestas vitae ex nec dictum</em>. In ut orci placerat, tristique metus eget, blandit sem. Maecenas facilisis sapien libero, id vehicula urna pulvinar nec. Maecenas vestibulum pulvinar diam quis gravida. Duis viverra, enim eget rhoncus euismod, metus urna pellentesque erat, eu luctus ex dui eget lacus. Sed nec imperdiet purus, eu suscipit dui. Fusce non tincidunt lacus. Suspendisse potenti. Suspendisse pellentesque nisi viverra lectus pulvinar ultricies. Etiam pulvinar metus vel arcu porttitor, et efficitur sapien ullamcorper. Nam sapien odio, eleifend ac dolor id, <span style="text-decoration: underline;">molestie fringilla magna</span>.</p>\r\n<p>Maecenas nec felis augue. Cras lacinia nulla sed augue rutrum porttitor. Nunc eu arcu id justo tincidunt fringilla commodo sit amet dolor. Duis dignissim lacus ac neque ultricies iaculis. In in velit massa. Sed eu condimentum velit. Vestibulum vel egestas orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend blandit nisl, a ultricies diam blandit sit amet.</p>', '2018-04-23 09:53:11', '2018-04-26 19:40:29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
