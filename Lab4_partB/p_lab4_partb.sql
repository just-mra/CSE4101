-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 12:12 PM
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
-- Database: `p_lab4_partb`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Id` int(20) NOT NULL,
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

INSERT INTO `info` (`Id`, `firstname`, `lastname`, `department`, `roll`, `gender`, `email`, `mobilenumber`, `icecreamflavour`, `address`, `district`) VALUES
(2, 'Prothama', 'Sardar', 'CSE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Chocolate', 'Koira', 'Khulna'),
(3, 'Prothama', 'Sardar', 'EEE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Vanilla', 'Koira', 'Khulna'),
(4, 'Cinmoy', 'Sardar', 'EEE', 106, 'Male', 'ch@gmail.com', 1912345678, 'Banana', 'Koira', 'Khulna'),
(5, 'Cinmoy', 'Sardar', 'IPE', 106, 'Male', 'ch@gmail.com', 1912345678, 'Banana', 'Koira', 'Khulna'),
(6, 'Prothama', 'Sardar', 'CSE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Chocolate', 'Koyra', 'Khulna'),
(7, 'Prothama', 'Sardar', 'CSE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Chocolate', 'Power house', 'Jashore'),
(8, 'Prothama', 'Sardar', 'ChE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Chocolate', 'Power house', 'Jashore'),
(9, 'Prothama', 'Sardar', 'IPE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Chocolate', 'Power house', 'Jashore'),
(10, 'Prothama', 'Sardar', 'PME', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Strawberry', 'Power house', 'Jashore'),
(11, 'Prothama', 'Sardar', 'TE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Vanilla', 'Power house', 'Jashore'),
(12, 'Prothama', 'Sardar', 'CSE', 170134, 'Female', 'prothama.just.cse@gmail.com', 1969257550, 'Blackberry', 'Power house', 'Jashore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
