-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 03:04 AM
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
-- Table structure for table `tbl_establishment_industries`
--

CREATE TABLE `tbl_establishment_industries` (
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
-- Dumping data for table `tbl_establishment_industries`
--

INSERT INTO `tbl_establishment_industries` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(55, '1', '1', 'ADMIN', '2018-11-10 14:02:42', 'ADMIN', '2018-11-10 14:02:42', 0, 0),
(56, '2', '2', 'ADMIN', '2018-11-10 14:04:05', 'ADMIN', '2018-11-10 14:04:05', 0, 0),
(57, '3', '3', 'ADMIN', '2018-11-10 14:05:25', 'ADMIN', '2018-11-10 14:05:25', 0, 0),
(58, '4', '4', 'ADMIN', '2018-11-10 14:05:56', 'ADMIN', '2018-11-10 14:05:56', 0, 0),
(59, '5', '5', 'ADMIN', '2018-11-10 14:07:27', 'ADMIN', '2018-11-10 14:07:27', 0, 0),
(60, '[Del-]+name', '6', 'ADMIN', '2018-11-10 14:07:47', 'ADMIN', '2018-11-10 14:07:47', 0, 0),
(61, '[Del-]+name', '7', 'ADMIN', '2018-11-10 14:12:31', 'ADMIN', '2018-11-10 14:12:31', 0, 0),
(62, '[Del-]+name', '8', 'ADMIN', '2018-11-10 14:13:03', 'ADMIN', '2018-11-10 14:13:03', 0, 0),
(63, '9', '9', 'ADMIN', '2018-11-10 14:15:17', 'ADMIN', '2018-11-10 14:15:17', 0, 0),
(64, '99', '9', 'ADMIN', '2018-11-10 14:16:31', 'ADMIN', '2018-11-10 14:16:31', 0, 0),
(65, '10', '10', 'ADMIN', '2018-11-10 14:17:02', 'ADMIN', '2018-11-10 14:17:02', 0, 0),
(66, '[Del-1541832405]+name', '11', 'ADMIN', '2018-11-10 14:22:42', 'ADMIN', '2018-11-10 14:22:42', 0, 0),
(67, '[Del-1541832852]~13', '13', 'ADMIN', '2018-11-10 14:51:08', 'ADMIN', '2018-11-10 14:51:08', 0, 0),
(68, '[Del-1541832894]~14', '14', 'ADMIN', '2018-11-10 14:54:42', 'ADMIN', '2018-11-10 14:54:42', 0, 0),
(69, '[Del-1541832924]~15', '15', 'ADMIN', '2018-11-10 14:55:17', 'ADMIN', '2018-11-10 14:55:17', 0, 0),
(70, '[Del-1541832958]~16', '16', 'ADMIN', '2018-11-10 14:55:53', 'ADMIN', '2018-11-10 14:55:53', 0, 0),
(71, '[Del-1541832985]~16', '16', 'ADMIN', '2018-11-10 14:56:18', 'ADMIN', '2018-11-10 14:56:18', 0, 0),
(72, 'OFW', 'Overseas Filipino Workers', 'ADMIN', '2018-11-10 14:56:31', 'ADMIN', '2018-11-10 15:56:17', 4, 1),
(73, 'Avlon Construction', 'company', 'ADMIN', '2018-11-10 15:09:34', 'ADMIN', '2018-11-11 14:41:58', 7, 1),
(74, '[Del-1541924910]~18', '18', 'ADMIN', '2018-11-10 15:33:27', 'ADMIN', '2018-11-10 15:33:27', 0, 0),
(75, '[Del-1541924990]~19', '19', 'ADMIN', '2018-11-10 16:32:18', 'ADMIN', '2018-11-10 16:32:18', 1, 0),
(76, '55', '55', 'ADMIN', '2018-11-10 17:32:04', 'ADMIN', '2018-11-10 17:32:12', 2, 1),
(77, 'Yuenthai Philippines Inc. ', 'company', '', '2018-11-11 13:49:21', 'ADMIN', '2018-11-11 14:42:02', 2, 1),
(78, '33', '333', 'ADMIN', '2018-11-11 14:32:30', 'ADMIN', '2018-11-11 16:29:56', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_establishment_industries`
--
ALTER TABLE `tbl_establishment_industries`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_establishment_industries`
--
ALTER TABLE `tbl_establishment_industries`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
