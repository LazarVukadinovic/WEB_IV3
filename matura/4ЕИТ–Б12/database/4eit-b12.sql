-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 08:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4eit-b12`
--

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `id` int(11) NOT NULL,
  `broj_sedista` int(11) NOT NULL,
  `rezervacija` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervacije`
--

INSERT INTO `rezervacije` (`id`, `broj_sedista`, `rezervacija`) VALUES
(1, 2, b'1'),
(2, 3, b'1'),
(3, 4, b'1'),
(4, 5, b'1'),
(5, 6, b'1'),
(6, 7, b'1'),
(7, 8, b'1'),
(8, 9, b'1'),
(9, 10, b'1'),
(10, 11, b'1'),
(11, 12, b'1'),
(12, 13, b'1'),
(13, 14, b'1'),
(14, 15, b'1'),
(15, 16, b'1'),
(16, 17, b'1'),
(17, 18, b'1'),
(18, 19, b'1'),
(19, 20, b'1'),
(20, 21, b'1'),
(21, 22, b'1'),
(22, 23, b'1'),
(23, 24, b'1'),
(24, 25, b'1'),
(25, 26, b'1'),
(26, 27, b'1'),
(27, 28, b'1'),
(28, 29, b'1'),
(29, 30, b'1'),
(30, 31, b'1'),
(31, 32, b'1'),
(32, 33, b'1'),
(33, 34, b'1'),
(34, 35, b'1'),
(35, 36, b'1'),
(36, 37, b'1'),
(37, 38, b'1'),
(38, 39, b'1'),
(39, 40, b'1'),
(40, 41, b'1'),
(41, 42, b'1'),
(42, 43, b'1'),
(43, 44, b'1'),
(44, 45, b'1'),
(45, 46, b'1'),
(46, 47, b'1'),
(47, 48, b'1'),
(48, 49, b'1'),
(49, 50, b'1'),
(50, 51, b'1'),
(51, 52, b'1'),
(52, 53, b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
