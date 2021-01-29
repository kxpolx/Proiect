-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 10:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `iesiri`
--

CREATE TABLE `iesiri` (
  `ID` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Data_iesire` date NOT NULL,
  `Observatii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iesiri`
--

INSERT INTO `iesiri` (`ID`, `Nume`, `Data_iesire`, `Observatii`) VALUES
(2, 'Creioane', '0000-00-00', '2'),
(2, 'Pixuri', '0000-00-00', '24'),
(12, '5', '2021-01-30', 'Core');

-- --------------------------------------------------------

--
-- Table structure for table `intrari`
--

CREATE TABLE `intrari` (
  `ID` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Data_intrare` date NOT NULL,
  `Observatii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intrari`
--

INSERT INTO `intrari` (`ID`, `Nume`, `Data_intrare`, `Observatii`) VALUES
(2, 'Creioane', '2021-01-29', 'Corect');

-- --------------------------------------------------------

--
-- Table structure for table `stoc`
--

CREATE TABLE `stoc` (
  `ID` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Cantitate` int(11) NOT NULL,
  `Observatii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stoc`
--

INSERT INTO `stoc` (`ID`, `Nume`, `Cantitate`, `Observatii`) VALUES
(1, '6', 12, '24'),
(2, 'Pixuri', 5, 'Core');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
