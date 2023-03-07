-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 07:50 AM
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
-- Database: `knjizara_ests`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `knjiga`
--

CREATE TABLE `knjiga` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pozajmica`
--

CREATE TABLE `pozajmica` (
  `datum_uzimanja` date NOT NULL,
  `datum_vracanja` date DEFAULT NULL,
  `primerak_inventarski_broj` int(11) NOT NULL,
  `ucenik_broj_clanske_karte` int(11) NOT NULL,
  `zaposlen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `primerak`
--

CREATE TABLE `primerak` (
  `inventarski_broj` int(11) NOT NULL,
  `dostupnost` int(11) NOT NULL,
  `knjiga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ucenik`
--

CREATE TABLE `ucenik` (
  `broj_clanske_karte` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zaposlen`
--

CREATE TABLE `zaposlen` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `lozinka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `knjiga_autor_fk` (`autor_id`),
  ADD KEY `knjiga_tip_fk` (`tip_id`);

--
-- Indexes for table `pozajmica`
--
ALTER TABLE `pozajmica`
  ADD KEY `pozajmica_primerak_fk` (`primerak_inventarski_broj`),
  ADD KEY `pozajmica_ucenik_fk` (`ucenik_broj_clanske_karte`),
  ADD KEY `pozajmica_zaposlen_fk` (`zaposlen_id`);

--
-- Indexes for table `primerak`
--
ALTER TABLE `primerak`
  ADD PRIMARY KEY (`inventarski_broj`),
  ADD KEY `primerak_knjiga_fk` (`knjiga_id`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucenik`
--
ALTER TABLE `ucenik`
  ADD PRIMARY KEY (`broj_clanske_karte`);

--
-- Indexes for table `zaposlen`
--
ALTER TABLE `zaposlen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knjiga`
--
ALTER TABLE `knjiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zaposlen`
--
ALTER TABLE `zaposlen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD CONSTRAINT `knjiga_autor_fk` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`id`),
  ADD CONSTRAINT `knjiga_tip_fk` FOREIGN KEY (`tip_id`) REFERENCES `tip` (`id`);

--
-- Constraints for table `pozajmica`
--
ALTER TABLE `pozajmica`
  ADD CONSTRAINT `pozajmica_primerak_fk` FOREIGN KEY (`primerak_inventarski_broj`) REFERENCES `primerak` (`inventarski_broj`),
  ADD CONSTRAINT `pozajmica_ucenik_fk` FOREIGN KEY (`ucenik_broj_clanske_karte`) REFERENCES `ucenik` (`broj_clanske_karte`),
  ADD CONSTRAINT `pozajmica_zaposlen_fk` FOREIGN KEY (`zaposlen_id`) REFERENCES `zaposlen` (`id`);

--
-- Constraints for table `primerak`
--
ALTER TABLE `primerak`
  ADD CONSTRAINT `primerak_knjiga_fk` FOREIGN KEY (`knjiga_id`) REFERENCES `knjiga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
