-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 04:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinitylogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `infinity`
--

CREATE TABLE `infinity` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `reset_expiration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infinity`
--

INSERT INTO `infinity` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `reset_token`, `reset_expiration`) VALUES
(1, 'eee', 'rr', 'rrruu', 'etheldorisamarachi@gmail.com', '456', '', ''),
(2, 'Ethel', 'Doris', 'Amara', 'etheldorisamarachi@gmail.com', '123456', '', ''),
(4, 'vee', 'dube', 'dera', 'goeasytravels0@gmail.com', '6789', '', ''),
(5, 'winny', 'Heathrow', 'Lugard', 'goeasytravels0@gmail.com', 'weeenbly', '', ''),
(6, 'Goodie', 'Madueke', 'Julietgudi', 'julietgudi@gmail.com', 'Godislove', '', ''),
(7, 'Onyeka', 'Madueke', 'Kester Kings', 'kester@gmail.com', 'JesusisLord', '', ''),
(8, 'Ethel-Doris', 'Madueke', 'Ethel', 'etheldorisamarachi@gmail.com', 'biochem042', '', ''),
(9, 'Ethel', 'Doris', 'sweetgirl', 'michelleclaire6991@gmail.com', '1235', '', ''),
(10, 'Ethel', 'Madueke', 'vilandra5n', 'etheldorisamarachi@gmail.com', 'qwerty', '', ''),
(11, 'Doris', 'Madueke', 'Dii', 'dii@gmail.com', '456t', '', ''),
(12, 'Stan', 'Dubem', 'BSA', 'bigstanauto0@gmail.com', 'stvn', '', ''),
(13, 'Ruth', 'Eze', 'Ruth001', 'rutheze@gmail.com', 'ruth123', '', ''),
(14, 'Anosike', 'Stella', 'Stella', 'stellaanosike@gmail.com', 'stella', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infinity`
--
ALTER TABLE `infinity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infinity`
--
ALTER TABLE `infinity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
