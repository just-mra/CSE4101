-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 04:28 PM
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
-- Database: `lab4-part_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(20) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `roll` int(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `flavour` varchar(250) NOT NULL,
  `address` varchar(480) NOT NULL,
  `district` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `first_name`, `last_name`, `department`, `roll`, `gender`, `email`, `mobile`, `flavour`, `address`, `district`) VALUES
(4, 'Sumon Kumar', 'Hazra', 'CSE', 224500, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Toffee', 'Manirampur', 'Jashore'),
(5, 'Sumon Kumar', 'Hazra', 'CSE', 170116, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Vanilla', 'Manirampur', 'Jashore'),
(9, 'Sumon', 'Hazra', 'CSE', 224499, 'female', 'sumon.just.cse@gmail.com', '01992329831', 'Blackberry', 'Manirampur', 'Thakurgaon'),
(10, 'Sumon', 'Hazra', 'PME', 224499, 'female', 'sumon.just.cse@gmail.com', '01992329831', 'Blackberry', 'Manirampur', 'Thakurgaon'),
(15, 'Sumon Kumar', 'Hazra', 'CSE', 224500, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Chocolate', 'Manirampur', 'Bagerhat'),
(16, 'Sumon Kumar', 'Hazra', 'CSE', 170116, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Orange', 'Manirampur', 'Jashore'),
(17, 'Sumon Kumar', 'Hazra', 'TE', 224499, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Chocolate', 'Manirampur', 'Bagerhat'),
(18, 'Sumon Kumar', 'Hazra', 'TE', 224499, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Chocolate', 'Manirampur', 'Jashore'),
(19, 'Sumon Kumar', 'Hazra', 'TE', 224499, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Chocolate', 'Manirampur', 'Jashore'),
(20, 'Sumon Kumar', 'Hazra', 'TE', 224499, 'male', 'sumon.just.cse@gmail.com', '01992329831', 'Chocolate', 'Manirampur', 'Jashore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
