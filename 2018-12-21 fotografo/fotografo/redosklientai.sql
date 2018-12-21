-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018 m. Grd 21 d. 17:29
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redosklientai`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `redosklientai`
--

DROP TABLE IF EXISTS `redosklientai`;
CREATE TABLE IF NOT EXISTS `redosklientai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vardas` text NOT NULL,
  `email` varchar(320) NOT NULL,
  `message` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `redosklientai`
--

INSERT INTO `redosklientai` (`id`, `vardas`, `email`, `message`, `date_created`) VALUES
(1, 'Vaida', 'svetaine@gmail.com', 'testas', '2018-12-12 00:34:14'),
(2, 'Jonas', 'Jonas@gmail.com', 'Sveiki, reikalingas fotografas.', '2018-12-12 23:18:22'),
(3, 'Jonas', 'ghj@mail.com', 'labas', '2018-12-12 23:21:08'),
(42, 'Jonas', 'jonaitis@gmail.com', 'testas', '2018-12-21 17:27:53'),
(41, 'Jonas', 'jonaitis@gmail.com', 'testas', '2018-12-21 17:27:06'),
(7, 'as', 'as@mail.ru', 'sveiki', '2018-12-12 23:28:44'),
(8, 'Barbora', 'labas@takas.lt', 'Kada bus foto?', '2018-12-12 23:30:22'),
(40, 'Jonas', 'jonaitis@gmail.com', 'Testas KalÄ—dos', '2018-12-21 17:24:02'),
(43, 'Jonas', 'jonaitis@gmail.com', 'testas', '2018-12-21 17:28:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
