-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 05:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siliconphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmaster`
--

CREATE TABLE `adminmaster` (
  `adminId` varchar(10) NOT NULL,
  `adminFirstName` varchar(200) NOT NULL,
  `adminLastName` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminmaster`
--

INSERT INTO `adminmaster` (`adminId`, `adminFirstName`, `adminLastName`, `password`) VALUES
('admin', 'Admin', '', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `categorymaster`
--

CREATE TABLE `categorymaster` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorymaster`
--

INSERT INTO `categorymaster` (`categoryId`, `categoryName`) VALUES
(1, 'General'),
(2, 'SC'),
(3, 'ST'),
(5, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `facilitiesmaster`
--

CREATE TABLE `facilitiesmaster` (
  `facilitiesId` int(11) NOT NULL,
  `facilitiesName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilitiesmaster`
--

INSERT INTO `facilitiesmaster` (`facilitiesId`, `facilitiesName`) VALUES
(1, 'facility 01'),
(2, 'facility 02'),
(3, 'facility 03'),
(4, 'facility 04'),
(5, 'facility 05');

-- --------------------------------------------------------

--
-- Table structure for table `studentfacility`
--

CREATE TABLE `studentfacility` (
  `studentFacilitiesId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `facilitiesId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentfacility`
--

INSERT INTO `studentfacility` (`studentFacilitiesId`, `studentId`, `facilitiesId`) VALUES
(7, 1, 1),
(8, 1, 2),
(9, 1, 4),
(10, 3, 1),
(11, 3, 2),
(12, 3, 3),
(13, 4, 1),
(14, 4, 3),
(15, 4, 4),
(16, 5, 2),
(17, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE `studentmaster` (
  `studentId` int(11) NOT NULL,
  `studentFirstName` varchar(30) NOT NULL,
  `studentLastName` varchar(30) NOT NULL,
  `fatherName` varchar(60) NOT NULL,
  `motherName` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateOfBirth` varchar(8) NOT NULL,
  `categoryId` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phnNum` varchar(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `photoAddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`studentId`, `studentFirstName`, `studentLastName`, `fatherName`, `motherName`, `gender`, `dateOfBirth`, `categoryId`, `religion`, `email`, `phnNum`, `address`, `photoAddress`) VALUES
(1, 'Shreyas', 'Swain', 'Hemant Swain', 'Banaja Swain', 'Male', '2021-06-', '2', 'Hindu', 'sheyas909swain@gmail.com', '7381206484', 'Heera Apartment , Toshali Block , Satyanagar', '1673450069'),
(4, 'Dharmaraj', 'Jena', 'Pramod Kumar Jena', 'Janaki Jena', 'Male', '2003-11-', '1', 'Hindu', 'dharmarajjena694@gmail.com', '7321708675', 'Aiginia', '1677600481'),
(5, 'Deepak Kumar', 'Sahoo', 'xyz', 'Niranjanaa Sahoo', '', '2002-04-', '1', 'Hindu', 'deepakkumarsahoo@gmail.com', '98338262913', 'Janpath', '1677600668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminmaster`
--
ALTER TABLE `adminmaster`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `categorymaster`
--
ALTER TABLE `categorymaster`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `facilitiesmaster`
--
ALTER TABLE `facilitiesmaster`
  ADD PRIMARY KEY (`facilitiesId`);

--
-- Indexes for table `studentfacility`
--
ALTER TABLE `studentfacility`
  ADD PRIMARY KEY (`studentFacilitiesId`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorymaster`
--
ALTER TABLE `categorymaster`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facilitiesmaster`
--
ALTER TABLE `facilitiesmaster`
  MODIFY `facilitiesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentfacility`
--
ALTER TABLE `studentfacility`
  MODIFY `studentFacilitiesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `studentmaster`
--
ALTER TABLE `studentmaster`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
