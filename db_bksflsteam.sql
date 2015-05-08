-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Maj 2015, 15:58
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bksflsteam`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `picture` blob,
  `season` int(11) DEFAULT NULL,
  `games` int(11) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL,
  `manofmatch` int(11) DEFAULT NULL,
  `yellowcards` int(11) DEFAULT NULL,
  `redcards` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `players`
--

INSERT INTO `players` (`id`, `name`, `surname`, `dob`, `picture`, `season`, `games`, `goals`, `assists`, `manofmatch`, `yellowcards`, `redcards`, `created`, `modified`) VALUES
(2, 'Tomasz', 'PiÄ™tka', '2015-05-08', NULL, 1, 2, 2, 2, 0, 0, 0, '2015-05-08 15:49:51', '2015-05-08 15:49:51'),
(3, 'Kamil', 'Gawlik', '2015-05-08', NULL, 1, 5, 3, 2, 0, 0, 0, '2015-05-08 15:51:09', '2015-05-08 15:51:09');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the article body.', '2015-05-08 11:39:13', NULL),
(2, 'A title once again', 'And the article body follows.', '2015-05-08 11:39:13', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team` varchar(50) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `season` int(11) DEFAULT NULL,
  `goalsfor` int(11) DEFAULT NULL,
  `goalsagainst` int(11) DEFAULT NULL,
  `won` int(11) DEFAULT NULL,
  `draw` int(11) DEFAULT NULL,
  `lost` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `results`
--

INSERT INTO `results` (`id`, `team`, `place`, `season`, `goalsfor`, `goalsagainst`, `won`, `draw`, `lost`, `points`, `created`, `modified`) VALUES
(3, 'BKS Team', 2, 1, 36, 26, 5, 1, 1, 16, '2015-05-08 12:13:31', '2015-05-08 12:13:31'),
(4, 'BKS Team', 3, 2, 45, 30, 5, 2, 2, 23, '2015-05-08 13:02:04', '2015-05-08 13:02:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
