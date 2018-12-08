-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 07:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `tbl_establishments`
--

CREATE TABLE `tbl_establishments` (
  `Id` int(50) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `CompanyNameAcronym` varchar(10) NOT NULL,
  `TIN` varchar(50) NOT NULL,
  `PermitIssuedDate` date NOT NULL,
  `EstablismentType` varchar(50) NOT NULL,
  `IndustryType` int(8) NOT NULL,
  `CompanyAddress` text NOT NULL,
  `LandlineNum` varchar(50) NOT NULL,
  `FaxNum` varchar(50) NOT NULL,
  `CompanyEmail` varchar(50) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `OwnerName` varchar(200) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `ContactPerson` varchar(200) NOT NULL,
  `ContactPersonDesignation` varchar(50) NOT NULL,
  `ContactPersonLandline` varchar(50) NOT NULL,
  `ContactPersonMobile` varchar(50) NOT NULL,
  `DoleRegistration` varchar(50) NOT NULL,
  `DoleRegistrationDateIssued` date NOT NULL,
  `DoleRegistrationExpiration` date NOT NULL,
  `PoeaLicenseDateIssued` date NOT NULL,
  `PoeaLicenseExpiration` date NOT NULL,
  `WorkingHours` varchar(200) NOT NULL,
  `Benefits` varchar(200) NOT NULL,
  `DressCode` int(11) NOT NULL,
  `SpokenLanguage` int(11) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` date NOT NULL,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` date NOT NULL,
  `Remarks` text NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_establishments`
--

INSERT INTO `tbl_establishments` (`Id`, `CompanyName`, `CompanyNameAcronym`, `TIN`, `PermitIssuedDate`, `EstablismentType`, `IndustryType`, `CompanyAddress`, `LandlineNum`, `FaxNum`, `CompanyEmail`, `Website`, `OwnerName`, `Designation`, `ContactPerson`, `ContactPersonDesignation`, `ContactPersonLandline`, `ContactPersonMobile`, `DoleRegistration`, `DoleRegistrationDateIssued`, `DoleRegistrationExpiration`, `PoeaLicenseDateIssued`, `PoeaLicenseExpiration`, `WorkingHours`, `Benefits`, `DressCode`, `SpokenLanguage`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `Remarks`, `IsActive`) VALUES
(1, '[Del-1543987308]~ChowKing', 'CK', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, 0, 'JonathanRamos', '0000-00-00', 'JonathanRamos', '0000-00-00', '', 0),
(2, 'Kentucky Fried Chicken', 'KFC', '', '0000-00-00', '', 72, 'Tandang Sora', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, 0, 'JonathanRamos', '0000-00-00', 'JonathanRamos', '0000-00-00', '', 1),
(3, '[Del-1543990527]~Chowking', 'CK', '', '0000-00-00', '', 72, 'Tandang Sora', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, 0, 'JonathanRamos', '0000-00-00', 'JonathanRamos', '0000-00-00', '', 0),
(4, '[Del-1543991539]~Inactive', 'INC', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, 0, '', '0000-00-00', '', '0000-00-00', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_establishments`
--
ALTER TABLE `tbl_establishments`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_establishments`
--
ALTER TABLE `tbl_establishments`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
