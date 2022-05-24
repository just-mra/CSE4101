-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 07:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(10) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Roll` int(6) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNumber` int(15) NOT NULL,
  `FavoriteIcecreamflavor` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Homedistrict` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `Firstname`, `Lastname`, `Department`, `Roll`, `Gender`, `Email`, `MobileNumber`, `FavoriteIcecreamflavor`, `Address`, `Homedistrict`) VALUES
(1, 'taslim', 'shanto', 'CSE', 1677, 'Male', '755@5656', 345, 'Strawberry', 'bhib nn', 'Dhaka'),
(2, 'shanto', 'rrr', 'BME', 5435435, 'Female', '34dbdfd', 454367546, 'Vanila', 'hujilytgt', 'Dinajpur'),
(3, 'vfhtn', 'fn xfdn', 'CSE', 4234, 'Male', 'nxfy', 3432443, 'Vanila', 'cx dztgsd', 'Bagerhat'),
(4, 'thfdyr', 'myfmy', 'CSE', 4534, 'Male', 'vcnh', 534675, 'Vanila', 'bygdfjmy6r', 'Bagerhat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
