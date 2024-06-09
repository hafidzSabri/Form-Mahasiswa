-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 10:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmhs`
--

CREATE TABLE `tblmhs` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kdProdi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmhs`
--

INSERT INTO `tblmhs` (`nim`, `nama`, `kdProdi`) VALUES
('2021081001', 'RAJASA RUSMANA', 'SIF'),
('2021081002', 'YESSY', 'SIF'),
('2021081005', 'HAFID ROIHAN', 'SIF'),
('2021081024', 'LOLA ADRIANI PUTRI', 'SIF'),
('2021081025', 'GLORYS', 'SIF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
