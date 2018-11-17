-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 06:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
CREATE DATABASE IF NOT EXISTS `qcpesodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `qcpesodb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants`
--

CREATE TABLE `tbl_applicants` (
  `Id` varchar(50) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `suffix` varchar(4) NOT NULL,
  `houseNum` varchar(10) NOT NULL,
  `streetName` varchar(100) NOT NULL,
  `subdivisionName` varchar(100) NOT NULL,
  `barangayId` int(8) NOT NULL,
  `cityId` int(8) NOT NULL,
  `provinceId` int(8) NOT NULL,
  `birthDate` date NOT NULL,
  `birthPlace` varchar(500) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilStatus` varchar(50) NOT NULL,
  `landlineNum` varchar(50) NOT NULL,
  `mobileNum` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `employmentStatus` varchar(50) NOT NULL,
  `preferredJobs` varchar(50) NOT NULL,
  `preferredWorkLocations` varchar(50) NOT NULL,
  `disability` varchar(50) NOT NULL,
  `disabilityOthers` varchar(100) NOT NULL,
  `languageSpoken` varchar(50) NOT NULL,
  `languageRead` varchar(50) NOT NULL,
  `languageWritten` varchar(50) NOT NULL,
  `dialect` text NOT NULL,
  `isCurrentlyStudying` tinyint(1) NOT NULL,
  `lastSchoolLevel` varchar(100) NOT NULL,
  `nonStudentReason` varchar(100) NOT NULL,
  `preferredTrainingCourse` varchar(100) NOT NULL,
  `isOFW` tinyint(1) NOT NULL,
  `isKasambahay` tinyint(1) NOT NULL,
  `versionNum` int(8) NOT NULL,
  `photoPath` varchar(500) NOT NULL,
  `tagline` varchar(500) NOT NULL,
  `TIN` varchar(50) NOT NULL,
  `SSS` varchar(50) NOT NULL,
  `PHILHEALTH` varchar(50) NOT NULL,
  `PAGIBIG` varchar(50) NOT NULL,
  `isMigrated` tinyint(1) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` text NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_applicants`
--

INSERT INTO `tbl_applicants` (`Id`, `lastName`, `firstName`, `middleName`, `suffix`, `houseNum`, `streetName`, `subdivisionName`, `barangayId`, `cityId`, `provinceId`, `birthDate`, `birthPlace`, `age`, `gender`, `civilStatus`, `landlineNum`, `mobileNum`, `emailAddress`, `employmentStatus`, `preferredJobs`, `preferredWorkLocations`, `disability`, `disabilityOthers`, `languageSpoken`, `languageRead`, `languageWritten`, `dialect`, `isCurrentlyStudying`, `lastSchoolLevel`, `nonStudentReason`, `preferredTrainingCourse`, `isOFW`, `isKasambahay`, `versionNum`, `photoPath`, `tagline`, `TIN`, `SSS`, `PHILHEALTH`, `PAGIBIG`, `isMigrated`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `remarks`, `isActive`) VALUES
('95a1b048-c8b2-4425-9dd5-e0fab21942cd', 'CARPIO', 'JOHN', '', '', '', '', '', 0, 0, 0, '0000-00-00', '', 0, '', '', '', '', 'isystem20@gmail.com', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '2018-11-03 13:13:23', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '2018-11-03 13:13:23', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_categories`
--

CREATE TABLE `tbl_applicants_categories` (
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
-- Dumping data for table `tbl_applicants_categories`
--

INSERT INTO `tbl_applicants_categories` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
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
(73, '17', '17', 'ADMIN', '2018-11-10 15:09:34', 'ADMIN', '2018-11-10 16:43:46', 4, 2),
(74, '18', '18', 'ADMIN', '2018-11-10 15:33:27', 'ADMIN', '2018-11-10 15:33:27', 0, 1),
(75, '19', '19', 'ADMIN', '2018-11-10 16:32:18', 'ADMIN', '2018-11-10 16:32:18', 1, 1),
(76, '55', '55', 'ADMIN', '2018-11-10 17:32:04', 'ADMIN', '2018-11-10 17:32:12', 2, 1),
(77, '[Del-1542335111]~denz', 'dsa', '', '2018-11-16 09:35:07', '', '2018-11-16 09:35:07', 1, 0),
(78, '[Del-1542335105]~dsa', 'dsad', 'ADMIN', '2018-11-16 10:24:57', 'ADMIN', '2018-11-16 10:24:57', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_certificate_list`
--

CREATE TABLE `tbl_applicants_certificate_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `eligibilityTitle` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_certificates`
--

CREATE TABLE `tbl_applicants_certificates` (
  `id` int(11) NOT NULL,
  `certificateId` int(8) NOT NULL,
  `certificateDateIssued` date NOT NULL,
  `certificateNoExpiration` tinyint(1) NOT NULL,
  `certificateExpiration` date NOT NULL,
  `skillsAcquired` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `trainingPeriod` varchar(50) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_disabilities`
--

CREATE TABLE `tbl_applicants_disabilities` (
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
-- Dumping data for table `tbl_applicants_disabilities`
--

INSERT INTO `tbl_applicants_disabilities` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
(1, 'Blind', 'Blind', 'ADMIN', '2018-11-10 17:18:20', 'ADMIN', '2018-11-10 17:39:07', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_employment_status`
--

CREATE TABLE `tbl_applicants_employment_status` (
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
-- Dumping data for table `tbl_applicants_employment_status`
--

INSERT INTO `tbl_applicants_employment_status` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
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
(73, '[Del-1542336088]~17', '17', 'ADMIN', '2018-11-10 15:09:34', 'ADMIN', '2018-11-10 16:43:46', 4, 0),
(74, '[Del-1542349003]~18', '18', 'ADMIN', '2018-11-10 15:33:27', 'ADMIN', '2018-11-10 15:33:27', 0, 0),
(75, '[Del-1542348639]~19', 'ewqewqewq', 'ADMIN', '2018-11-10 16:32:18', 'ADMIN', '2018-11-16 10:41:51', 2, 0),
(76, '[Del-1542336116]~55', '55', 'ADMIN', '2018-11-10 17:32:04', 'ADMIN', '2018-11-10 17:32:12', 2, 0),
(77, '[Del-1542336849]~dsa', 'dsa', 'ADMIN', '2018-11-16 10:40:18', 'ADMIN', '2018-11-16 10:40:18', 1, 0),
(78, 'qwe', 'ewqdsadsa', 'ADMIN', '2018-11-16 10:41:40', 'ADMIN', '2018-11-16 10:42:26', 2, 1),
(79, '[Del-1542349145]~refdsfd', 'fdsfs', 'ADMIN', '2018-11-16 12:37:41', 'ADMIN', '2018-11-16 12:37:41', 1, 0),
(80, 'dsa', 'dsadsa', 'ADMIN', '2018-11-16 14:08:53', 'ADMIN', '2018-11-16 14:08:53', 1, 1),
(81, 'gfdgf', 'marvin', 'ADMIN', '2018-11-16 14:16:39', 'ADMIN', '2018-11-16 14:23:09', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_employment_types`
--

CREATE TABLE `tbl_applicants_employment_types` (
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
-- Dumping data for table `tbl_applicants_employment_types`
--

INSERT INTO `tbl_applicants_employment_types` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
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
(73, '17', '17', 'ADMIN', '2018-11-10 15:09:34', 'ADMIN', '2018-11-10 16:43:46', 4, 2),
(74, '18', '18', 'ADMIN', '2018-11-10 15:33:27', 'ADMIN', '2018-11-10 15:33:27', 0, 1),
(75, '19', '19', 'ADMIN', '2018-11-10 16:32:18', 'ADMIN', '2018-11-10 16:32:18', 1, 1),
(76, '55', '55', 'ADMIN', '2018-11-10 17:32:04', 'ADMIN', '2018-11-10 17:32:12', 2, 1),
(77, '[Del-1542335111]~denz', 'dsa', '', '2018-11-16 09:35:07', '', '2018-11-16 09:35:07', 1, 0),
(78, '[Del-1542335105]~dsa', 'dsad', 'ADMIN', '2018-11-16 10:24:57', 'ADMIN', '2018-11-16 10:24:57', 1, 0),
(79, 'dsadas', 'dsadsadsadsa', '', '2018-11-16 23:44:24', '', '2018-11-16 23:44:24', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_job_applications`
--

CREATE TABLE `tbl_applicants_job_applications` (
  `id` int(11) NOT NULL,
  `ApplicantId` varchar(50) NOT NULL,
  `JobPostId` int(11) NOT NULL,
  `ApplicationLetter` text NOT NULL,
  `ApplicationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_kasambahay`
--

CREATE TABLE `tbl_applicants_kasambahay` (
  `id` int(11) NOT NULL,
  `jobDesc` varchar(100) NOT NULL,
  `employerName` varchar(200) NOT NULL,
  `employerWork` varchar(100) NOT NULL,
  `employerAddress` varchar(500) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `stayInOut` varchar(100) NOT NULL,
  `yearOfService` decimal(8,2) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_languages`
--

CREATE TABLE `tbl_applicants_languages` (
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
-- Dumping data for table `tbl_applicants_languages`
--

INSERT INTO `tbl_applicants_languages` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
(1, '[Del-1541924182]~English', 'English', 'ADMIN', '2018-11-10 17:13:01', 'ADMIN', '2018-11-10 17:13:01', 1, 0),
(2, 'xcv', 'xcv', 'ADMIN', '2018-11-12 09:55:58', 'ADMIN', '2018-11-12 09:55:58', 1, 1),
(3, 'dsa', 'dsa', '', '2018-11-16 09:45:55', '', '2018-11-16 09:45:55', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_levels`
--

CREATE TABLE `tbl_applicants_levels` (
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
-- Dumping data for table `tbl_applicants_levels`
--

INSERT INTO `tbl_applicants_levels` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
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
(73, '[Del-1542336088]~17', '17', 'ADMIN', '2018-11-10 15:09:34', 'ADMIN', '2018-11-10 16:43:46', 4, 0),
(74, '18', '18', 'ADMIN', '2018-11-10 15:33:27', 'ADMIN', '2018-11-10 15:33:27', 0, 1),
(75, '19', 'ewqewqewq', 'ADMIN', '2018-11-10 16:32:18', 'ADMIN', '2018-11-16 10:41:51', 2, 1),
(76, '[Del-1542336116]~55', '55', 'ADMIN', '2018-11-10 17:32:04', 'ADMIN', '2018-11-10 17:32:12', 2, 0),
(77, '[Del-1542336849]~dsa', 'dsa', 'ADMIN', '2018-11-16 10:40:18', 'ADMIN', '2018-11-16 10:40:18', 1, 0),
(78, 'qwe', 'ewqdsadsa', 'ADMIN', '2018-11-16 10:41:40', 'ADMIN', '2018-11-16 10:42:26', 2, 1),
(79, 'refdsfd', 'fdsfs', 'ADMIN', '2018-11-16 12:37:41', 'ADMIN', '2018-11-16 12:37:41', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_licenses`
--

CREATE TABLE `tbl_applicants_licenses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `eligibilityTitle` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_ofw`
--

CREATE TABLE `tbl_applicants_ofw` (
  `id` int(11) NOT NULL,
  `ApplicantId` varchar(50) NOT NULL,
  `dependentsIds` varchar(100) NOT NULL,
  `locationOF` varchar(100) NOT NULL,
  `statusOF` varchar(100) NOT NULL,
  `repatriationReason` varchar(300) NOT NULL,
  `isOwwaMember` tinyint(1) NOT NULL,
  `isImmigrant` tinyint(1) NOT NULL,
  `immigrationReason` varchar(200) NOT NULL,
  `immigrationType` int(11) NOT NULL,
  `yearsStayed` int(11) NOT NULL,
  `servicesAvailed` text NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_ofw_conditions`
--

CREATE TABLE `tbl_applicants_ofw_conditions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_ofw_dependents`
--

CREATE TABLE `tbl_applicants_ofw_dependents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_ofw_locations`
--

CREATE TABLE `tbl_applicants_ofw_locations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_positions`
--

CREATE TABLE `tbl_applicants_positions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_applicants_positions`
--

INSERT INTO `tbl_applicants_positions` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `isActive`) VALUES
(1, 'Software Engineer', '', 'ADMIN', '2018-10-22 17:21:21', 'ADMIN', '2018-10-22 17:21:21', 1),
(2, 'Network Engineer', 'Sample Desc', 'ADMIN', '2018-10-22 17:21:21', 'ADMIN', '2018-10-22 17:21:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_prefer_locations`
--

CREATE TABLE `tbl_applicants_prefer_locations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_schools_attended`
--

CREATE TABLE `tbl_applicants_schools_attended` (
  `id` int(11) NOT NULL,
  `schoolName` varchar(100) NOT NULL,
  `programCourse` int(8) NOT NULL,
  `highestLevel` varchar(50) NOT NULL,
  `yearGraduated` date NOT NULL,
  `yearLastAttended` date NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_sydp`
--

CREATE TABLE `tbl_applicants_sydp` (
  `id` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `scholarFrom` date NOT NULL,
  `scholarTo` date NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_work_history`
--

CREATE TABLE `tbl_applicants_work_history` (
  `id` int(11) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `heldPosition` int(8) NOT NULL,
  `companyAddress` varchar(200) NOT NULL,
  `inclusiveDateFrom` date NOT NULL,
  `inclusiveDateTo` date NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `Id` varchar(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userId` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`Id`, `firstName`, `lastName`, `userId`, `isActive`) VALUES
('ADMIN', 'Administrator', '', 'ADMIN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishment_industries`
--

CREATE TABLE `tbl_establishment_industries` (
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
-- Dumping data for table `tbl_establishment_industries`
--

INSERT INTO `tbl_establishment_industries` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishments`
--

CREATE TABLE `tbl_establishments` (
  `Id` varchar(50) NOT NULL,
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
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishments_jobposts`
--

CREATE TABLE `tbl_establishments_jobposts` (
  `Id` int(11) NOT NULL,
  `EstablishmentId` int(11) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `EmpTypeId` int(11) NOT NULL,
  `PositionLevelId` int(11) NOT NULL,
  `Specialization` int(11) NOT NULL,
  `JobDescription` text NOT NULL,
  `Salary` decimal(8,2) NOT NULL,
  `JobImage` varchar(100) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishments_rep`
--

CREATE TABLE `tbl_establishments_rep` (
  `id` int(8) NOT NULL,
  `establishmentId` varchar(50) NOT NULL,
  `UserId` varchar(50) NOT NULL,
  `repFirstName` varchar(100) NOT NULL,
  `repLastName` varchar(100) NOT NULL,
  `repDesignation` varchar(100) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establistments_categories`
--

CREATE TABLE `tbl_establistments_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_course_list`
--

CREATE TABLE `tbl_school_course_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_security_users`
--

CREATE TABLE `tbl_security_users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoginName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PasswordHash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active` tinyint(1) DEFAULT '1',
  `Remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `SecurityUserLevelId` int(11) NOT NULL COMMENT '1- Applicant, 2- Employer, 3-OfficeStaff, 4-Manager, 5-admin',
  `PasswordNeverExpires` tinyint(1) NOT NULL,
  `UserCantChangePassword` tinyint(1) NOT NULL,
  `UserChangePasswordNextLogon` tinyint(1) NOT NULL,
  `PasswordDate` date NOT NULL,
  `CreatedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `UserType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PeopleId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ActivationCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_security_users`
--

INSERT INTO `tbl_security_users` (`id`, `LoginName`, `PasswordHash`, `Active`, `Remarks`, `SecurityUserLevelId`, `PasswordNeverExpires`, `UserCantChangePassword`, `UserChangePasswordNextLogon`, `PasswordDate`, `CreatedById`, `ModifiedById`, `CreatedAt`, `ModifiedAt`, `VersionNo`, `UserType`, `PeopleId`, `Email`, `ActivationCode`, `remember_token`) VALUES
('', '', '', 1, '', 0, 0, 0, 0, '0000-00-00', '943', '', '2018-11-05 09:52:27', '2018-11-05 09:52:27', 1, '', '', '', '', NULL),
('8a79df19-e698-4f3f-9121-ba657e190fc2', 'isystem20@gmail.com', 'c8fcb5fff5b493581ad15cef3d9a9c171e02d92d8d5a3adec233f54f03bfd8847445417fcbe156ce2b930df46a71bb1ee679daefcd2da59858bd7d42b597ffef', 1, '', 0, 0, 0, 0, '0000-00-00', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '2018-11-03 05:13:23', '2018-11-03 05:13:23', 1, 'APPLICANT', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', 'isystem20@gmail.com', '730509', NULL),
('ADMIN', 'admin@peso.gov', 'c8fcb5fff5b493581ad15cef3d9a9c171e02d92d8d5a3adec233f54f03bfd8847445417fcbe156ce2b930df46a71bb1ee679daefcd2da59858bd7d42b597ffef', 1, '', 5, 1, 0, 0, '0000-00-00', 'ADMIN', 'ADMIN', '2018-11-05 09:52:27', '2018-11-05 09:52:27', 1, 'ADMIN', 'ADMIN', 'isystem20@gmail.com', '', NULL);

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
-- Dumping data for table `tbl_web_post_types`
--

INSERT INTO `tbl_web_post_types` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `VersionNo`, `isActive`) VALUES
(1, '[Del-1542388013]~Blind', 'Blind', 'ADMIN', '2018-11-10 17:18:20', 'ADMIN', '2018-11-10 17:39:07', 3, 0),
(2, 'dsadafds', 'dsadsaf', '', '2018-11-17 01:06:48', '', '2018-11-17 01:06:48', 1, 1),
(3, 'kurt', 'khalifa', '', '2018-11-17 01:09:05', '', '2018-11-17 01:09:05', 1, 1),
(4, 'christian', 'burgos', '', '2018-11-17 01:10:43', '', '2018-11-17 01:10:43', 1, 1);

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
-- Indexes for table `tbl_applicants_categories`
--
ALTER TABLE `tbl_applicants_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_certificate_list`
--
ALTER TABLE `tbl_applicants_certificate_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_certificates`
--
ALTER TABLE `tbl_applicants_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_disabilities`
--
ALTER TABLE `tbl_applicants_disabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_employment_status`
--
ALTER TABLE `tbl_applicants_employment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_employment_types`
--
ALTER TABLE `tbl_applicants_employment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_job_applications`
--
ALTER TABLE `tbl_applicants_job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_kasambahay`
--
ALTER TABLE `tbl_applicants_kasambahay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_languages`
--
ALTER TABLE `tbl_applicants_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_levels`
--
ALTER TABLE `tbl_applicants_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_licenses`
--
ALTER TABLE `tbl_applicants_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_ofw`
--
ALTER TABLE `tbl_applicants_ofw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_ofw_conditions`
--
ALTER TABLE `tbl_applicants_ofw_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_ofw_dependents`
--
ALTER TABLE `tbl_applicants_ofw_dependents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_ofw_locations`
--
ALTER TABLE `tbl_applicants_ofw_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_positions`
--
ALTER TABLE `tbl_applicants_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_prefer_locations`
--
ALTER TABLE `tbl_applicants_prefer_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_schools_attended`
--
ALTER TABLE `tbl_applicants_schools_attended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_sydp`
--
ALTER TABLE `tbl_applicants_sydp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_work_history`
--
ALTER TABLE `tbl_applicants_work_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_establishment_industries`
--
ALTER TABLE `tbl_establishment_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_establishments_jobposts`
--
ALTER TABLE `tbl_establishments_jobposts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_establishments_rep`
--
ALTER TABLE `tbl_establishments_rep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_establistments_categories`
--
ALTER TABLE `tbl_establistments_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_school_course_list`
--
ALTER TABLE `tbl_school_course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_security_users`
--
ALTER TABLE `tbl_security_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_sys_securityusers_loginname_unique` (`LoginName`);

--
-- Indexes for table `tbl_web_post_tags`
--
ALTER TABLE `tbl_web_post_tags`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_web_post_types`
--
ALTER TABLE `tbl_web_post_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
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
-- AUTO_INCREMENT for table `tbl_applicants_categories`
--
ALTER TABLE `tbl_applicants_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tbl_applicants_certificate_list`
--
ALTER TABLE `tbl_applicants_certificate_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_certificates`
--
ALTER TABLE `tbl_applicants_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_disabilities`
--
ALTER TABLE `tbl_applicants_disabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_applicants_employment_status`
--
ALTER TABLE `tbl_applicants_employment_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `tbl_applicants_employment_types`
--
ALTER TABLE `tbl_applicants_employment_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `tbl_applicants_job_applications`
--
ALTER TABLE `tbl_applicants_job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_kasambahay`
--
ALTER TABLE `tbl_applicants_kasambahay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_languages`
--
ALTER TABLE `tbl_applicants_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_applicants_levels`
--
ALTER TABLE `tbl_applicants_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `tbl_applicants_licenses`
--
ALTER TABLE `tbl_applicants_licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw`
--
ALTER TABLE `tbl_applicants_ofw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw_conditions`
--
ALTER TABLE `tbl_applicants_ofw_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw_dependents`
--
ALTER TABLE `tbl_applicants_ofw_dependents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw_locations`
--
ALTER TABLE `tbl_applicants_ofw_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_positions`
--
ALTER TABLE `tbl_applicants_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_applicants_prefer_locations`
--
ALTER TABLE `tbl_applicants_prefer_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_schools_attended`
--
ALTER TABLE `tbl_applicants_schools_attended`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_sydp`
--
ALTER TABLE `tbl_applicants_sydp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_work_history`
--
ALTER TABLE `tbl_applicants_work_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_establishment_industries`
--
ALTER TABLE `tbl_establishment_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tbl_establishments_jobposts`
--
ALTER TABLE `tbl_establishments_jobposts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_establishments_rep`
--
ALTER TABLE `tbl_establishments_rep`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_establistments_categories`
--
ALTER TABLE `tbl_establistments_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_school_course_list`
--
ALTER TABLE `tbl_school_course_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_web_post_tags`
--
ALTER TABLE `tbl_web_post_tags`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_web_post_types`
--
ALTER TABLE `tbl_web_post_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_web_services`
--
ALTER TABLE `tbl_web_services`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_web_settings`
--
ALTER TABLE `tbl_web_settings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
