-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 07:38 AM
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
-- Database: `4eit-b10`
--

-- --------------------------------------------------------

--
-- Table structure for table `reci`
--

CREATE TABLE `reci` (
  `id` int(11) NOT NULL,
  `srpska` varchar(255) NOT NULL,
  `engleska` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reci`
--

INSERT INTO `reci` (`id`, `srpska`, `engleska`, `opis`) VALUES
(1, 'macka', 'cat', 'cat-macka'),
(2, 'pas', 'dog', 'dog-pas'),
(3, 'kuca', 'house', 'house-kuca'),
(4, 'miš', 'mouse', 'mouse-miš'),
(5, 'cvet', ' flower', 'flower-cvet'),
(6, 'konj', 'horse', 'horse-konj'),
(7, 'dečak', 'boy', 'boy-dečak'),
(8, 'dvorište', 'garden', 'garden-dvorište'),
(9, 'prozor', 'window', 'window-prozor'),
(10, 'slon', 'elephant', 'elephant-slon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reci`
--
ALTER TABLE `reci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reci`
--
ALTER TABLE `reci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
