-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2019 at 10:50 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Galleria`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE `autori` (
  `id` int(11) NOT NULL,
  `Nome` tinytext NOT NULL,
  `Cognome` tinytext NOT NULL,
  `Ritratto` tinytext NOT NULL,
  `DataN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`id`, `Nome`, `Cognome`, `Ritratto`, `DataN`) VALUES
(1, 'Pablo', 'Picasso', 'https://lacapannadelsilenzio.it/wp-content/uploads/2015/04/picasso-16.jpg', '1881-10-25'),
(2, 'Salvador ', 'Dali', 'https://ips.plug.it/cips/supereva/cms/2017/07/baffi-dali.jpg?w=850&a=r', '1904-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `quadri`
--

CREATE TABLE `quadri` (
  `id` int(11) NOT NULL,
  `Titolo` varchar(50) NOT NULL,
  `DataP` date NOT NULL,
  `Immagine` varchar(256) NOT NULL,
  `Autore` int(11) NOT NULL,
  `Tecnica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quadri`
--

INSERT INTO `quadri` (`id`, `Titolo`, `DataP`, `Immagine`, `Autore`, `Tecnica`) VALUES
(1, 'Guernica', '1937-06-01', 'https://www.analisidellopera.it/wp-content/uploads/2018/08/Picasso_Guernica.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tecniche`
--

CREATE TABLE `tecniche` (
  `id` int(11) NOT NULL,
  `NomeT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tecniche`
--

INSERT INTO `tecniche` (`id`, `NomeT`) VALUES
(1, 'olio su tela');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quadri`
--
ALTER TABLE `quadri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Autore` (`Autore`),
  ADD KEY `Tecnica` (`Tecnica`);

--
-- Indexes for table `tecniche`
--
ALTER TABLE `tecniche`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autori`
--
ALTER TABLE `autori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quadri`
--
ALTER TABLE `quadri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tecniche`
--
ALTER TABLE `tecniche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `quadri`
--
ALTER TABLE `quadri`
  ADD CONSTRAINT `quadri_ibfk_1` FOREIGN KEY (`Autore`) REFERENCES `autori` (`id`),
  ADD CONSTRAINT `quadri_ibfk_2` FOREIGN KEY (`Tecnica`) REFERENCES `tecniche` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
