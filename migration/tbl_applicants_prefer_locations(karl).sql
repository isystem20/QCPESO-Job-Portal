-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 02:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcpesodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_prefer_locations`
--

CREATE TABLE `tbl_applicants_prefer_locations` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_applicants_prefer_locations`
--

INSERT INTO `tbl_applicants_prefer_locations` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(1, '[Del-1542591427]~qweqweqwesssqwqweqweqwdxxx', 'qqq', 'ADMIN', '2018-11-19 09:32:50', 'ADMIN', '2018-11-19 09:35:15', 2, 0),
(2, 'qwwssss', 'ssss', 'ADMIN', '2018-11-19 09:37:17', 'ADMIN', '2018-11-19 09:37:17', 1, 1),
(3, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'sddasda', 'ADMIN', '2018-11-19 09:37:26', 'ADMIN', '2018-11-19 09:40:24', 2, 1),
(4, '11', 'dddd', 'ADMIN', '2018-11-19 09:39:57', 'ADMIN', '2018-11-19 09:43:29', 3, 1),
(5, '[Del-1542591727]~asssssssssssssss', 'ssssssssssssss', 'ADMIN', '2018-11-19 09:40:15', 'ADMIN', '2018-11-19 09:40:15', 1, 0),
(6, 'qqqqqqqqqqssssssssssssssssssssss', 'sssssssssss', 'ADMIN', '2018-11-19 09:41:51', 'ADMIN', '2018-11-19 09:41:51', 1, 1),
(7, 'qweesssss', '', 'ADMIN', '2018-11-19 09:42:55', 'ADMIN', '2018-11-19 09:42:55', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_applicants_prefer_locations`
--
ALTER TABLE `tbl_applicants_prefer_locations`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_applicants_prefer_locations`
--
ALTER TABLE `tbl_applicants_prefer_locations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
