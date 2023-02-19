-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 11:05 AM
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
-- Database: `wave`
--

-- --------------------------------------------------------

--
-- Table structure for table `challanissue`
--

CREATE TABLE `challanissue` (
  `ChallanNumber` int(15) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `LicenseNumber` int(15) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Place` varchar(255) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `NumberPlate` int(15) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Amount` int(15) DEFAULT NULL,
  `RuleBroken` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challanissue`
--

INSERT INTO `challanissue` (`ChallanNumber`, `Name`, `LicenseNumber`, `Category`, `Place`, `Time`, `NumberPlate`, `Date`, `Amount`, `RuleBroken`) VALUES
(123, 'kusal suwal', 1234, 'Two Wheeler', 'kathmandu', '05:09:00', 444, '2022-05-18', 500, 'Driving without license');

-- --------------------------------------------------------

--
-- Table structure for table `driverdata`
--

CREATE TABLE `driverdata` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `license_number` int(15) DEFAULT NULL,
  `password` char(40) NOT NULL,
  `PhoneNumber` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driverdata`
--

INSERT INTO `driverdata` (`id`, `Name`, `Address`, `Date_of_Birth`, `license_number`, `password`, `PhoneNumber`) VALUES
(3, 'Sakar gautam', 'koteshowr', '2025-05-09', 5556, 'wer', '9860846143'),
(4, 'Amol Adkhikari', 'Naxal', '2023-06-09', 1212, 'qwerty', '9898989898'),
(5, 'kusal', 'duwakot', '2022-05-12', 7887, '1234', '9860846143'),
(6, 'kusal', 'duwakot', '2022-05-24', 7899, '1234', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(80) DEFAULT NULL,
  `user_password` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driverdata`
--
ALTER TABLE `driverdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driverdata`
--
ALTER TABLE `driverdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
