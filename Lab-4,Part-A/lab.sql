-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 06:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `roll` int(11) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `icecreamflavour` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`firstname`, `lastname`, `department`, `roll`, `gender`, `email`, `mobilenumber`, `icecreamflavour`, `address`, `district`) VALUES
('prothama', 'Sardar', 'CSE', 170134, 'female', 'prothama.just.cse@gmail.com', 1969257550, 'Chocolate', 'Khulna', ''),
('Husna', 'Ara', 'EEE', 191017, 'female', 'hasanamina737@gmail.com', 1969257550, 'Vanilla', 'Jashore', 'Jashore'),
('Tasnim Jahan', 'Oishi', 'CSE', 191013, 'female', 'oishi@gmail.com', 1969257550, 'Chocolate', 'Jashore', 'Jashore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
