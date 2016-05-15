-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 14 Mai 2016 à 18:25
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `amateur_vin_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_admin` varchar(255) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `firstname_admin` varchar(255) NOT NULL,
  `psswd_admin` varchar(255) NOT NULL,
  `mail_admin` varchar(255) NOT NULL,
  `ch_rdm_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `pseudo_admin`, `name_admin`, `firstname_admin`, `psswd_admin`, `mail_admin`, `ch_rdm_admin`) VALUES
(4, 'Philippe', 'Bruté de Rémur', 'Philippe', 'bbbdd9057189c4ee422bb93be7625c8769f590ab', 'philippe@gmail.com', '2PaYlRvwMf5jFmX');

-- --------------------------------------------------------

--
-- Structure de la table `aoc`
--

CREATE TABLE IF NOT EXISTS `aoc` (
  `id_aoc` int(11) NOT NULL AUTO_INCREMENT,
  `des_aoc` varchar(255) NOT NULL,
  PRIMARY KEY (`id_aoc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `aoc`
--

INSERT INTO `aoc` (`id_aoc`, `des_aoc`) VALUES
(1, 'faugeres'),
(2, 'Bipalles'),
(3, 'Chateau de la Loire');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `des_cat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id_cat`, `des_cat`) VALUES
(1, 'Blanc'),
(2, 'Rouge'),
(3, 'Rosé');

-- --------------------------------------------------------

--
-- Structure de la table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id_notice` int(11) NOT NULL AUTO_INCREMENT,
  `text_notice` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL,
  PRIMARY KEY (`id_notice`),
  KEY `notice_fk_user` (`id_user`),
  KEY `notice_fk_wine` (`id_wine`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Déclencheurs `notice`
--
DROP TRIGGER IF EXISTS `before_add_notice`;
DELIMITER //
CREATE TRIGGER `before_add_notice` BEFORE INSERT ON `notice`
 FOR EACH ROW BEGIN
    IF  ((SELECT COUNT(*) FROM notice WHERE NEW.id_user = notice.id_user AND NEW.id_wine = notice.id_wine) > 0) 
 
      THEN
        DELETE FROM notice WHERE notice.id_user = NEW.id_user;
    END IF;
    
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_user` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `firstname_user` varchar(255) NOT NULL,
  `psswd_user` varchar(255) NOT NULL,
  `mail_user` varchar(255) NOT NULL,
  `ch_rdm` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo_user`, `name_user`, `firstname_user`, `psswd_user`, `mail_user`, `ch_rdm`) VALUES
(30, 'Jean', 'Bruté de Rémur', 'Jean', '51f8b1fa9b424745378826727452997ee2a7c3d7', 'jean@gmail.com', '1FjAJtzYVIvawCo');

--
-- Déclencheurs `user`
--
DROP TRIGGER IF EXISTS `before_delete_user`;
DELIMITER //
CREATE TRIGGER `before_delete_user` BEFORE DELETE ON `user`
 FOR EACH ROW BEGIN
    IF  ((SELECT COUNT(*) FROM notice WHERE OLD.id_user = notice.id_user) > 0) 
 
      THEN
        DELETE FROM notice WHERE notice.id_user = OLD.id_user;
    END IF;
    
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `wine`
--

CREATE TABLE IF NOT EXISTS `wine` (
  `id_wine` int(11) NOT NULL AUTO_INCREMENT,
  `name_wine` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `text_wine` varchar(255) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '0',
  `id_aoc` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_wine`),
  KEY `wine_fk_aoc` (`id_aoc`),
  KEY `wine_fk_cat` (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `wine`
--

INSERT INTO `wine` (`id_wine`, `name_wine`, `price`, `text_wine`, `etat`, `id_aoc`, `id_cat`) VALUES
(1, 'Chateau neuf', 10, 'Tres bon vin', 1, 1, 1),
(2, 'Pompadour', 15, 'Vin de ouf', 1, 2, 3),
(3, 'hefueu', 12, 'vubfubvub', 1, 1, 1),
(5, 'Maman', 20, 'Vin de Maman', 1, 1, 1),
(6, 'Yassine', 20, 'Vin de yassine', 1, 1, 1),
(7, 'Baptiste', 15, 'vin de Baptiste', 1, 1, 1),
(8, 'Taru', 20, 'Usper Vin bon', 1, 1, 1),
(9, 'ninon', 20, 'beau vin', 1, 1, 1),
(10, 'Gallego', 10, 'Vin issu de Gallego.inc', 1, 1, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `notice_fk_wine` FOREIGN KEY (`id_wine`) REFERENCES `wine` (`id_wine`);

--
-- Contraintes pour la table `wine`
--
ALTER TABLE `wine`
  ADD CONSTRAINT `wine_fk_aoc` FOREIGN KEY (`id_aoc`) REFERENCES `aoc` (`id_aoc`),
  ADD CONSTRAINT `wine_fk_cat` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
