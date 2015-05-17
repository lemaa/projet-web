-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2015 at 11:19 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `mail` varchar(10) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` int(20) NOT NULL AUTO_INCREMENT,
  `id_produit` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `timestamp` date NOT NULL,
  `expired` int(1) NOT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_produit`, `id_user`, `quantity`, `timestamp`, `expired`) VALUES
(1, 1, 1, 2, '2015-05-14', 1),
(2, 3, 1, 1, '2015-05-14', 0),
(3, 1, 1, 1, '0000-00-00', 1),
(4, 1, 1, 1, '0000-00-00', 1),
(5, 2, 1, 1, '0000-00-00', 1),
(6, 3, 1, 1, '0000-00-00', 0),
(7, 3, 1, 1, '0000-00-00', 0),
(8, 3, 1, 1, '0000-00-00', 0),
(9, 1, 1, 1, '0000-00-00', 0),
(10, 3, 1, 1, '0000-00-00', 0),
(11, 1, 1, 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE IF NOT EXISTS `catalogue` (
  `refproduit` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`refproduit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`refproduit`, `libelle`, `image`, `description`) VALUES
(1, 'NIKE', 'demos/03_client.png', 'This is an example service page. It’s different fr'),
(2, 'ADIDAS', 'demos/03_client.png', 'This is an example service page. It’s different fr');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `tel` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `dateNaiss` date NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `sujet` varchar(30) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_msg`, `nom`, `organisme`, `tel`, `mail`, `sujet`, `msg`) VALUES
(1, '', '', '', 'ndm.khammeri@gmail.com', '', ''),
(2, '', '', '', 'azdjl@azdlkn.com', '', ''),
(3, 'NAdhem', 'ENICARTHAGE', '200017746165498', 'lkasjb@azpdibh.azckn', 'TEST Verification', 'az;\r\ndhamuzdjahdaKzj az4da\r\nzdjÃ®azdÃ¹kna!lkamh Ã®a \r\na bÃ¹k \r\nazodÃ¢zmdjaÃ¹k,daz\r\n\r\n'),
(4, 'rawjh', 'amejgaef', 'lhabezfazb ', 'amjba!ljfbvlazg', 'jblajbfaf', 'jzbefmkjekfbamzkefnazljbfmaznfmazf');

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `numfacture` int(8) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `TVA` int(20) NOT NULL,
  `mantant` int(20) NOT NULL,
  PRIMARY KEY (`numfacture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `refproduit` int(20) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prixachat` int(11) NOT NULL,
  `prixvente` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `sale` int(11) NOT NULL,
  PRIMARY KEY (`refproduit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`refproduit`, `libelle`, `quantite`, `prixachat`, `prixvente`, `image`, `sale`) VALUES
(1, 'Diamond Perfume', 5, 10, 21, 'demos/02_store.jpg', 12),
(2, 'Diamond Perfume', 5, 10, 21, 'demos/02_store.jpg', 0),
(3, 'Produit 3', 5, 10, 21, 'demos/02_store.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `tel`, `email`, `password`, `username`, `address`, `city`, `zipcode`, `country`) VALUES
(2, 'rawya', 'tounsi', '1584654321', 'rawya@ishop.tn', 'rawya', 'rawya', 'azdkjbazd', 'jafmjkabzfkmjazbf', '64654', 'Country #3'),
(3, 'nadhem', 'Nadhem', '2011748', 'nadhem@ishop.tn', 'nadhem', 'nadhem', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
