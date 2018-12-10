-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 08:22 AM
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
-- Table structure for table `tbl_group_masterlist`
--

CREATE TABLE `tbl_group_masterlist` (
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
-- Dumping data for table `tbl_group_masterlist`
--

INSERT INTO `tbl_group_masterlist` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(69, '[Del-1541832924]~15', '15', 'ADMIN', '2018-11-10 14:55:17', 'ADMIN', '2018-11-10 14:55:17', 0, 0),
(70, '[Del-1541832958]~16', '16', 'ADMIN', '2018-11-10 14:55:53', 'ADMIN', '2018-11-10 14:55:53', 0, 0),
(71, '[Del-1541832985]~16', '16', 'ADMIN', '2018-11-10 14:56:18', 'ADMIN', '2018-11-10 14:56:18', 0, 0),
(72, 'OFW', 'Overseas Filipino Workers', 'ADMIN', '2018-11-10 14:56:31', 'ADMIN', '2018-11-10 15:56:17', 4, 1),
(73, '[Del-1541844225]~177', '17', 'ADMIN', '2018-11-10 15:09:34', '', '2018-11-10 17:54:51', 5, 0),
(74, '[Del-1541844235]~18', '18', 'ADMIN', '2018-11-10 15:33:27', 'ADMIN', '2018-11-10 15:33:27', 0, 0),
(75, '[Del-1541844258]~19', '19', 'ADMIN', '2018-11-10 16:32:18', 'ADMIN', '2018-11-10 16:32:18', 1, 0),
(76, '[Del-1541844554]~20', '20', '', '2018-11-10 17:54:36', '', '2018-11-10 17:54:36', 1, 0),
(77, '[Del-1541845269]~KASAMBAHAY 101', 'Kasambahay', '', '2018-11-10 18:18:27', '', '2018-11-10 18:18:48', 2, 0),
(78, '[Del-1541845291]~KASAMBAHAY', 'Kasambahay', '', '2018-11-10 18:21:25', '', '2018-11-10 18:21:25', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_group_masterlist`
--
ALTER TABLE `tbl_group_masterlist`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_group_masterlist`
--
ALTER TABLE `tbl_group_masterlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
