-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 08:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab4`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab4`
--

CREATE TABLE `lab4` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Roll` int(6) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNumber` int(11) NOT NULL,
  `FavoriteIcecreamFlavor` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `HomeDistrict` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab4`
--

INSERT INTO `lab4` (`id`, `FirstName`, `LastName`, `Department`, `Roll`, `Gender`, `Email`, `MobileNumber`, `FavoriteIcecreamFlavor`, `Address`, `HomeDistrict`) VALUES
(1, 'Rahat', 'Ibna Hossain', 'CSE', 0, 'Male', 'r@gmail.com', 4535656, 'Strawberry', 'dsfhgdfhrw', 'dhaka'),
(2, 'Rahat', 'ibna', 'cse', 160132, 'male', 'gmail', 13245, 'strawbery', 'badda', 'dhaka'),
(3, 'Rahat', 'ibna', 'cse', 24545, 'male', 'etete', 3456, 'Vanilla', 'badda', 'dhaka'),
(4, 'Rahat', 'Ibna Hossain', 'cse', 160132, 'Male', 'rahatibnhossain@gmail.com', 1580661685, 'Mango', 'badda', 'dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab4`
--
ALTER TABLE `lab4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab4`
--
ALTER TABLE `lab4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
