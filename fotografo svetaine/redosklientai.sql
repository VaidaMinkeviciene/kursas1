-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018 m. Grd 13 d. 19:55
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `redosklientai`
--

INSERT INTO `redosklientai` (`id`, `vardas`, `email`, `message`, `date_created`) VALUES
(1, 'Vaida', 'svetaine@gmail.com', 'testas', '2018-12-12 00:34:14'),
(2, 'Jonas', 'Jonas@gmail.com', 'Sveiki, reikalingas fotografas.', '2018-12-12 23:18:22'),
(3, 'Jonas', 'ghj@mail.com', 'labas', '2018-12-12 23:21:08'),
(4, 'Ona', 'asasda@gmail.com', 'fotografija geris', '2018-12-12 23:23:09'),
(5, 'Ona', 'asasda@gmail.com', 'fotografija geris', '2018-12-12 23:23:14'),
(6, 'Antanas', 'ghj@mail.com', 'asdfgghj', '2018-12-12 23:27:25'),
(7, 'as', 'as@mail.ru', 'sveiki', '2018-12-12 23:28:44'),
(8, 'Barbora', 'labas@takas.lt', 'Kada bus foto?', '2018-12-12 23:30:22'),
(9, 'Juozas', 'petrauskas@mail.ru', 'Laba, kiek sumoketi?', '2018-12-12 23:36:14'),
(10, 'Juozas', 'ghj@mail.com', 'cvcxv', '2018-12-12 23:38:23'),
(11, 'Antanas', 'ghj@mail.com', 'sdfdsf', '2018-12-12 23:44:36'),
(12, 'as', 'ghj@mail.com', 'asaSADSAD', '2018-12-12 23:45:33'),
(13, 'Antanas', 'ghj@mail.com', 'CFDD', '2018-12-12 23:45:53'),
(14, 'Antanas', 'ghj@mail.com', 'xczczc', '2018-12-12 23:48:44'),
(15, 'Antanas', 'ghj@mail.com', 'xczczc', '2018-12-12 23:49:36'),
(16, 'Milda', 'hfjfkjgfddl@gggg.lt', 'fdgfddd', '2018-12-12 23:50:02'),
(17, 'Milda', 'hfjfkjgfddl@gggg.lt', 'fdgfddd', '2018-12-12 23:51:53'),
(18, 'Antanas', 'ghj@mail.com', 'xczczc', '2018-12-12 23:52:06'),
(19, 'Antanas', 'ghj@mail.com', 'cxvzv', '2018-12-12 23:55:31'),
(20, 'Antanas', 'ghj@mail.com', 'cxvzv', '2018-12-12 23:59:21'),
(21, 'Antanas', 'ghj@mail.com', 'cxvzv', '2018-12-13 00:01:09'),
(22, 'Antanas', 'ghj@mail.com', 'cxvzv', '2018-12-13 00:01:19'),
(23, 'sdf', 'ghj@mail.com', 'vbggvb', '2018-12-13 00:01:33'),
(24, 'sdf', 'ghj@mail.com', 'vbggvb', '2018-12-13 00:03:16'),
(25, 'sdf', 'ghj@mail.com', 'vbggvb', '2018-12-13 00:03:22'),
(26, 'as', 'ghj@mail.com', 'asa', '2018-12-13 00:07:07'),
(27, 'Petras', 'petraitis@gmail.com', 'foto foto', '2018-12-13 10:32:58'),
(28, 'Ramune', 'as@gmail.com', 'foto penktadieniui', '2018-12-13 19:28:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
