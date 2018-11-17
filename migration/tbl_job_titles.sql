-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 02:13 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

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
-- Table structure for table `tbl_job_titles`
--

CREATE TABLE `tbl_job_titles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_titles`
--

INSERT INTO `tbl_job_titles` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
(77, 'perry potter1', 'perry potter', 'ADMIN', '2018-11-16 17:03:44', 'ADMIN', '2018-11-16 17:04:01', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_job_titles`
--
ALTER TABLE `tbl_job_titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_job_titles`
--
ALTER TABLE `tbl_job_titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
