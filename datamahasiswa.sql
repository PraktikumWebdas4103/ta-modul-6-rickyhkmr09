-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 06:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nama` varchar(35) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nama`, `nim`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`, `username`, `password`) VALUES
('rickyhakimronaldo', 2147483647, 'D3 MI 41-03', 'Pria', ', dancing', 'FIT', 'palembang', 'rickyhkmr_', 'taylorswif'),
('Taylor Swift', 2147483647, 'D3 MI 41-03', 'Pria', ', musik, dancing, ga', 'FIT', 'palembang', 'taylor', 'swift'),
('Selena Gomez', 2147483647, 'D3 MI 41-03', 'Wanita', ', musik', 'FIT', 'new york', 'selena', 'gomez');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
