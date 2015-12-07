-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 03:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `debontekoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmbestellingen`
--

CREATE TABLE IF NOT EXISTS `filmbestellingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filmmoment_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `prijs` decimal(10,2) NOT NULL,
  `aantalpersonen` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `filmbestellingen`
--

INSERT INTO `filmbestellingen` (`id`, `filmmoment_id`, `user_id`, `prijs`, `aantalpersonen`) VALUES
(1, 1, 1, '10.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `filmmomenten`
--

CREATE TABLE IF NOT EXISTS `filmmomenten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `zaal` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `filmmomenten`
--

INSERT INTO `filmmomenten` (`id`, `film_id`, `zaal`, `datum`, `tijd`) VALUES
(1, 1, 2, '0000-00-00', '20:30:00'),
(2, 3, 1, '0000-00-00', '23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `speelduur` int(11) NOT NULL,
  `regisseur` varchar(50) NOT NULL,
  `taalversie` varchar(50) NOT NULL,
  `dried` tinyint(2) NOT NULL,
  `omschrijving` text NOT NULL,
  `filmposter` varchar(255) NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `imdb` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `titel`, `genre`, `speelduur`, `regisseur`, `taalversie`, `dried`, `omschrijving`, `filmposter`, `trailer`, `imdb`) VALUES
(1, 'John Wick', 'Actie, Thriller', 101, 'Chad Stahelski, David Leitch', 'Engels', 0, 'An ex-hitman comes out of retirement to track down the gangsters that took everything from him.', 'http://static.skynetblogs.be/media/32278/john_wick_2014_poster.jpg', 'RllJtOw0USI', 'http://www.imdb.com/title/tt2911666/?ref_=fn_al_tt_1'),
(2, 'Enemy at the gates', 'Drama, History', 131, 'Jean-Jacquese Annaud', 'Engels', 0, 'A Russian sniper and a German sniper play a game of cat-and-mouse during the Battle of Stalingrad.', 'http://www.incine.fr/media/affiches_film/big/stalingrad-1373363066-57.jpg', 'DJbDEXQD0gE', 'http://www.imdb.com/title/tt0215750/?ref_=nv_sr_1'),
(3, 'Mai Wei', 'Action, Drama', 137, 'Je-kyu Kang', 'Koreaans', 0, 'Inspired by a true story. Jun Shik works for Tatsuo''s grandfather''s farm while Korea is colonized by Japan, but he has a dream to participate in Tokyo Olympics as a marathon runner.', 'http://www.filmtotaal.nl/images/newscontent/9d1c18f.jpg', '6lwYnStY2x0', 'http://www.imdb.com/title/tt1606384/?ref_=fn_al_tt_1'),
(4, 'Oldboy', 'Drama, Mystery', 120, 'Chan-wook Park', 'Koreaans', 0, 'After being kidnapped and imprisoned for 15 years, Oh Dae-Su is released, only to find that he must find his captor in 5 days.', 'http://www.beyondhollywood.com/uploads/2012/04/Oldboy-2003-Movie-Poster.jpg', 'AxPaKS-sD08', 'http://www.imdb.com/title/tt0364569/?ref_=fn_al_tt_1');

-- --------------------------------------------------------

--
-- Table structure for table `menukaart`
--

CREATE TABLE IF NOT EXISTS `menukaart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(60) NOT NULL,
  `omschrijving` text NOT NULL,
  `ingredienten` text NOT NULL,
  `positie` int(11) NOT NULL,
  `prijs` float NOT NULL,
  `image` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `menukaart`
--

INSERT INTO `menukaart` (`id`, `naam`, `omschrijving`, `ingredienten`, `positie`, `prijs`, `image`) VALUES
(1, 'Salade op z''n Frans', 'Salade.. ', 'Brie, walnoten, gemengde salade, prei, honingdressing en croutons', 1, 6.9, ''),
(3, 'Garnalencocktail', 'Garnalen', 'Cocktail van Noorse garnalen met pikante cocktailsaus', 1, 6.9, ''),
(4, 'Herdersalade', 'Herdersalade\r\n', 'Herdersalade met tomaten, feta, komkommer, uien en peper', 2, 4.5, ''),
(5, 'Rucola salade', 'Rucola salade\r\n', 'Rucola salade met parmazaanse kaas en tomaat in een balsamico dressing', 2, 6, ''),
(6, 'Dame Blanche', 'IJS!\r\n', '', 3, 5.5, ''),
(7, 'Crème brûlée', 'IJS!\r\n', '', 3, 5.5, ''),
(8, 'Frisdranken', 'Cola\r\n', '', 4, 2.5, ''),
(9, 'Fles water', 'Water\r\n\r\n', '', 4, 4.75, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `straatnaam` varchar(255) NOT NULL,
  `huisnummer` varchar(255) NOT NULL,
  `huisnummertoevoegsel` varchar(255) NOT NULL,
  `stad` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `voornaam`, `achternaam`, `postcode`, `straatnaam`, `huisnummer`, `huisnummertoevoegsel`, `stad`, `password`, `level`) VALUES
(1, 'joey@123.nl', 'joey', 'ihwiehwf', '2845pp', 'wodihiowjc', '154', '', 'wdbcoqeno', '$2y$10$E9Xu6NXc0qB5GGUqeaYtluP5HSOtMmebKnCF8UWbfZUpLFMGJQfxa', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
