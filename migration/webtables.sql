-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 10:14 AM
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
-- Table structure for table `tbl_web_posts`
--

CREATE TABLE `tbl_web_posts` (
  `Id` int(11) NOT NULL,
  `PostTitle` varchar(200) NOT NULL,
  `PostDescription` text NOT NULL,
  `PostContent` text NOT NULL,
  `PostTypeId` int(11) NOT NULL,
  `Tags` varchar(200) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web_posts`
--

INSERT INTO `tbl_web_posts` (`Id`, `PostTitle`, `PostDescription`, `PostContent`, `PostTypeId`, `Tags`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(50, 'zzz', 'zzz', '', 1, 'zzz', 'ADMIN', '2018-11-17 17:09:04', 'ADMIN', '2018-11-17 17:09:04', 1, 1),
(51, 'karl', 'karl', '', 1, 'qqqqq', 'ADMIN', '2018-11-17 17:12:40', 'ADMIN', '2018-11-17 17:12:40', 1, 1),
(52, '1', '1', '', 1, '1', 'ADMIN', '2018-11-17 17:13:04', 'ADMIN', '2018-11-17 17:13:04', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_post_tags`
--

CREATE TABLE `tbl_web_post_tags` (
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_post_types`
--

CREATE TABLE `tbl_web_post_types` (
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
-- Dumping data for table `tbl_web_post_types`
--

INSERT INTO `tbl_web_post_types` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(1, 'News', 'News', 'ADMIN', '2018-11-17 12:17:42', 'ADMIN', '2018-11-17 12:17:42', 1, 1),
(2, 'Announcement', 'Announcement', 'ADMIN', '2018-11-17 12:17:42', 'ADMIN', '2018-11-17 12:17:42', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_services`
--

CREATE TABLE `tbl_web_services` (
  `Id` int(11) NOT NULL,
  `Slug` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Content` text NOT NULL,
  `Image` varchar(200) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_settings`
--

CREATE TABLE `tbl_web_settings` (
  `Id` int(11) NOT NULL,
  `SiteTitle` varchar(100) NOT NULL,
  `UnderConstruction` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_web_post_tags`
--
ALTER TABLE `tbl_web_post_tags`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_web_post_types`
--
ALTER TABLE `tbl_web_post_types`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_web_services`
--
ALTER TABLE `tbl_web_services`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_web_settings`
--
ALTER TABLE `tbl_web_settings`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_web_post_tags`
--
ALTER TABLE `tbl_web_post_tags`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_web_post_types`
--
ALTER TABLE `tbl_web_post_types`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_web_services`
--
ALTER TABLE `tbl_web_services`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_web_settings`
--
ALTER TABLE `tbl_web_settings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
