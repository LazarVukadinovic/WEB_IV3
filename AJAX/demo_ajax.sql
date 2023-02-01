-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 08:15 AM
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
-- Database: `demo_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `ljudi`
--

CREATE TABLE `ljudi` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `godine` int(11) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `pozicija` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ljudi`
--

INSERT INTO `ljudi` (`id`, `ime`, `godine`, `telefon`, `pozicija`) VALUES
(1, 'Jelica Krunic', 58, '0642356777', 'redovan profesor'),
(2, 'Petar Saric', 25, '0632233444', 'asistent'),
(3, 'Jovan Protic', 44, '0667878555', 'vanredni profesor'),
(4, 'Isidora Arsic', 30, '0631235432', 'asistent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ljudi`
--
ALTER TABLE `ljudi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ljudi`
--
ALTER TABLE `ljudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
