-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Grd 21 d. 19:58
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superduomenys`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `guobosklientai`
--

CREATE TABLE `guobosklientai` (
  `id` int(11) NOT NULL,
  `vardas` text NOT NULL,
  `email` varchar(320) NOT NULL,
  `message` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `guobosklientai`
--

INSERT INTO `guobosklientai` (`id`, `vardas`, `email`, `message`, `date_created`) VALUES
(38, 'as', 'as@gmail.com', 'svetaine', '2018-10-09 17:25:29'),
(57, 'antanas', 'antanaitis@gmail.com', 'a', '2018-10-09 21:15:56'),
(58, 'antanas', 'antanaitis@gmail.com', 'a', '2018-10-09 21:50:12'),
(61, 'antanas', 'antanaitis@gmail.com', 'aaaaa', '2018-10-09 21:54:43'),
(62, 'asdas', 'antanaitis@gmail.com', 'asa', '2018-10-09 21:54:59'),
(63, 'asdas', 'antanaitis@gmail.com', 'S', '2018-10-09 21:55:20'),
(64, 'asdas', 'antanaitis@gmail.com', 'S', '2018-10-09 21:55:57'),
(72, 'antanas', 'antanaitis@gmail.com', 'aaaa', '2018-10-09 22:01:56'),
(73, 'antanas', 'antanaitis@gmail.com', 'aaaa', '2018-10-09 22:02:36'),
(75, 'antanas', 'antanaitis@gmail.com', 'a', '2018-10-09 22:03:02'),
(76, 'asdas', 'sad@gmailcom', 'asdad', '2018-10-09 22:03:29'),
(77, 'asdas', 'sad@gmailcom', 'asdad', '2018-10-09 22:04:52'),
(81, 'janina', 'antanaitis@gmail.com', 'testas', '2018-12-21 18:58:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guobosklientai`
--
ALTER TABLE `guobosklientai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guobosklientai`
--
ALTER TABLE `guobosklientai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
