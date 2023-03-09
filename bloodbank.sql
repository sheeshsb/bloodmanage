-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2023 at 05:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `auname` varchar(50) NOT NULL,
  `apassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auname`, `apassword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `did` int(10) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dage` varchar(50) NOT NULL,
  `dcontact` varchar(50) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `dbloodgroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`did`, `dname`, `dage`, `dcontact`, `daddress`, `dbloodgroup`) VALUES
(1, 'Hari Prasad', '34', '987654836', 'Pokhara', 'A+'),
(28, 'Dikshant Lamsal', '32', '986755555', 'Bhaktapur', 'B+'),
(29, 'Badal Adhikari', '54', '976521222', 'Budanilkantha', 'O-'),
(33, 'Pranish Karki', '33', '987654321', 'Tinkune', 'O+'),
(34, 'Anil Karki', '41', '987654321', 'Chabahil', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `ppassword` varchar(50) NOT NULL,
  `psage` varchar(50) NOT NULL,
  `pcontact` varchar(50) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `pbloodgroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `ppassword`, `psage`, `pcontact`, `paddress`, `pbloodgroup`) VALUES
(1, 'David Smith', 'david', '45', '987654323', 'Kathmandu', 'AB-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
