-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 09:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web4a`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `departments` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mnumber` int(50) NOT NULL,
  `flavor` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `departments`, `roll`, `gender`, `email`, `mnumber`, `flavor`, `address`, `district`) VALUES
(1, 'Tarek', 'Ahmed', 'CSE', 170143, 'male', '0', 1921110986, 'Cherry', '', 'Jessore'),
(2, 'Ahsan', 'Habib', 'CSE', 170111, 'male', '0', 1222212111, 'Beer', '', 'Chuadanga'),
(3, 'Tarek', 'Ahmed', 'CSE', 170143, 'male', 'tarekjustcse@gmail.com', 1921110198, 'Apple', '', 'Jessore'),
(4, 'Tarek', 'Ahmed', 'CSE', 170143, 'male', 'tarekjustcse@gmail.com', 1779541669, 'Grape', '', 'Jashore'),
(5, 'Tarek', 'Ahmed', 'CSE', 170143, 'male', 'tarekjustcse@gmail.com', 1779541669, 'Apple', '', 'Jashore'),
(6, 'Salma', 'Begum', 'PME', 170032, 'Female', 'salmabegum@gmail.com', 13335241, 'Chocolate', 'Holding:849, PS: Abhaynagar', 'Jashore'),
(7, 'Raed Hasan', 'Pranto', 'CSE', 170125, 'Male', 'pranto@gmail.com', 1555555555, 'Banana', 'Narayangong', 'Magura'),
(8, 'Ahsan', 'Habib', 'CSE', 170111, 'Male', 'ahsan.just.cse@gmail.com', 1777777777, 'Chocolate', 'alamdanga', 'Chuadanga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;