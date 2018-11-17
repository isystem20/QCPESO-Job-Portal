-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 10:02 AM
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
-- Dumping data for table `tbl_applicants_categories`
--

INSERT INTO `tbl_applicants_categories` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
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
(74, '[Del-1542435757]~18', '18', 'ADMIN', '2018-11-10 15:33:27', 'ADMIN', '2018-11-10 15:33:27', 0, 0),
(75, '19', '19', 'ADMIN', '2018-11-10 16:32:18', '', '2018-11-17 14:22:52', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_disabilities`
--

CREATE TABLE `tbl_applicants_disabilities` (
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
-- Dumping data for table `tbl_applicants_disabilities`
--

INSERT INTO `tbl_applicants_disabilities` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(1, 'Blind', 'Blind', 'ADMIN', '2018-11-10 17:18:20', 'ADMIN', '2018-11-10 17:18:20', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_employment_status`
--

CREATE TABLE `tbl_applicants_employment_status` (
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
-- Table structure for table `tbl_applicants_kasambahay`
--

CREATE TABLE `tbl_applicants_kasambahay` (
  `Id` int(11) NOT NULL,
  `JobDesc` varchar(100) NOT NULL,
  `EmployerName` varchar(200) NOT NULL,
  `EmployerWork` varchar(100) NOT NULL,
  `EmployerAddress` varchar(500) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `StayInOut` varchar(100) NOT NULL,
  `YearOfService` decimal(8,2) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_kasambahay_desc`
--

CREATE TABLE `tbl_applicants_kasambahay_desc` (
  `Id` int(11) NOT NULL,
  `JobDesc` varchar(100) NOT NULL,
  `EmployerName` varchar(200) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_kasambahay_history`
--

CREATE TABLE `tbl_applicants_kasambahay_history` (
  `Id` int(11) NOT NULL,
  `EmployerName` varchar(100) NOT NULL,
  `EmployerAddress` varchar(200) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_languages`
--

CREATE TABLE `tbl_applicants_languages` (
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
-- Dumping data for table `tbl_applicants_languages`
--

INSERT INTO `tbl_applicants_languages` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(1, 'English', 'English', 'ADMIN', '2018-11-10 17:13:01', 'ADMIN', '2018-11-10 17:13:01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_lang_spoken`
--

CREATE TABLE `tbl_applicants_lang_spoken` (
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
-- Table structure for table `tbl_applicants_lang_written`
--

CREATE TABLE `tbl_applicants_lang_written` (
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
-- Table structure for table `tbl_applicants_licenses`
--

CREATE TABLE `tbl_applicants_licenses` (
  `Id` int(11) NOT NULL,
  `CertificateId` int(8) NOT NULL,
  `CertificateDateIssued` date NOT NULL,
  `CertificateNoExpiration` tinyint(1) NOT NULL,
  `CertificateExpiration` date NOT NULL,
  `SkillsAcquired` varchar(50) NOT NULL,
  `Rating` varchar(50) NOT NULL,
  `TrainingPeriod` varchar(50) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_ofw`
--

CREATE TABLE `tbl_applicants_ofw` (
  `Id` int(11) NOT NULL,
  `DependentsIds` varchar(100) NOT NULL,
  `LocationOF` varchar(100) NOT NULL,
  `StatusOF` varchar(100) NOT NULL,
  `RepatriationReason` varchar(300) NOT NULL,
  `IsOwwaMember` tinyint(1) NOT NULL,
  `IsImmigrant` tinyint(1) NOT NULL,
  `ImmigrationReason` varchar(200) NOT NULL,
  `ImmigrationType` int(11) NOT NULL,
  `YearsStayed` int(11) NOT NULL,
  `ServicesAvailed` text NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_ofw_conditions`
--

CREATE TABLE `tbl_applicants_ofw_conditions` (
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
-- Table structure for table `tbl_applicants_ofw_dependents`
--

CREATE TABLE `tbl_applicants_ofw_dependents` (
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
-- Table structure for table `tbl_applicants_ofw_locations`
--

CREATE TABLE `tbl_applicants_ofw_locations` (
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
-- Table structure for table `tbl_applicants_ofw_work_history`
--

CREATE TABLE `tbl_applicants_ofw_work_history` (
  `Id` int(11) NOT NULL,
  `CountryName` varchar(100) NOT NULL,
  `AgencyName` varchar(200) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_schools_attended`
--

CREATE TABLE `tbl_applicants_schools_attended` (
  `Id` int(11) NOT NULL,
  `SchoolName` varchar(100) NOT NULL,
  `ProgramCourse` int(8) NOT NULL,
  `HighestLevel` varchar(50) NOT NULL,
  `YearGraduated` date NOT NULL,
  `YearLastAttended` date NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_sydp`
--

CREATE TABLE `tbl_applicants_sydp` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `ScholarFrom` date NOT NULL,
  `ScholarTo` date NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_work_history`
--

CREATE TABLE `tbl_applicants_work_history` (
  `Id` int(11) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `HeldPosition` int(8) NOT NULL,
  `CompanyAddress` varchar(200) NOT NULL,
  `InclusiveDateFrom` date NOT NULL,
  `InclusiveDateTo` date NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate_list`
--

CREATE TABLE `tbl_certificate_list` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EligibilityTitle` varchar(10) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dresscodes`
--

CREATE TABLE `tbl_dresscodes` (
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
-- Dumping data for table `tbl_dresscodes`
--

INSERT INTO `tbl_dresscodes` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(1, '1', 'one', '', '2018-11-11 17:08:17', '', '2018-11-11 17:08:44', 2, 1),
(2, '2', '2', '', '2018-11-11 17:09:03', '', '2018-11-17 11:55:27', 2, 1),
(3, '[Del-1542426908]~3', '3', '', '2018-11-11 17:09:14', '', '2018-11-11 17:09:14', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `Id` varchar(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserId` varchar(50) NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`Id`, `FirstName`, `LastName`, `UserId`, `IsActive`) VALUES
('ADMIN', 'Administrator', '', 'ADMIN', 1);

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
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` date NOT NULL,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` date NOT NULL,
  `Remarks` text NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishments_rep`
--

CREATE TABLE `tbl_establishments_rep` (
  `Id` int(8) NOT NULL,
  `EstablishmentId` varchar(50) NOT NULL,
  `RepFirstName` varchar(100) NOT NULL,
  `RepLastName` varchar(100) NOT NULL,
  `RepDesignation` varchar(100) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establistments_categories`
--

CREATE TABLE `tbl_establistments_categories` (
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs_list`
--

CREATE TABLE `tbl_jobs_list` (
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
-- Dumping data for table `tbl_jobs_list`
--

INSERT INTO `tbl_jobs_list` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(1, 'Software Engineer', '', 'ADMIN', '2018-10-22 17:21:21', 'ADMIN', '2018-10-22 17:21:21', 1, 1),
(2, 'Network Engineer', 'Sample Desc', 'ADMIN', '2018-10-22 17:21:21', 'ADMIN', '2018-10-22 17:21:21', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_titles`
--

CREATE TABLE `tbl_job_titles` (
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
-- Dumping data for table `tbl_job_titles`
--

INSERT INTO `tbl_job_titles` (`Id`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(77, 'perry potter1', 'perry potter', 'ADMIN', '2018-11-16 17:03:44', 'ADMIN', '2018-11-16 17:04:01', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_license_list`
--

CREATE TABLE `tbl_license_list` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EligibilityTitle` varchar(10) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_course_list`
--

CREATE TABLE `tbl_school_course_list` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_security_users`
--

CREATE TABLE `tbl_security_users` (
  `Id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `Remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_security_users`
--

INSERT INTO `tbl_security_users` (`Id`, `LoginName`, `PasswordHash`, `Active`, `Remarks`, `SecurityUserLevelId`, `PasswordNeverExpires`, `UserCantChangePassword`, `UserChangePasswordNextLogon`, `PasswordDate`, `CreatedById`, `ModifiedById`, `CreatedAt`, `ModifiedAt`, `VersionNo`, `UserType`, `PeopleId`, `Email`, `ActivationCode`, `Remember_token`) VALUES
('', '', '', 1, '', 0, 0, 0, 0, '0000-00-00', '943', '', '2018-11-05 09:52:27', '2018-11-05 09:52:27', 1, '', '', '', '', NULL),
('8a79df19-e698-4f3f-9121-ba657e190fc2', 'isystem20@gmail.com', 'c8fcb5fff5b493581ad15cef3d9a9c171e02d92d8d5a3adec233f54f03bfd8847445417fcbe156ce2b930df46a71bb1ee679daefcd2da59858bd7d42b597ffef', 1, '', 0, 0, 0, 0, '0000-00-00', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '2018-11-03 05:13:23', '2018-11-03 05:13:23', 1, 'APPLICANT', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', 'isystem20@gmail.com', '730509', NULL),
('ADMIN', 'admin@peso.gov', 'c8fcb5fff5b493581ad15cef3d9a9c171e02d92d8d5a3adec233f54f03bfd8847445417fcbe156ce2b930df46a71bb1ee679daefcd2da59858bd7d42b597ffef', 1, '', 5, 1, 0, 0, '0000-00-00', 'ADMIN', 'ADMIN', '2018-11-05 09:52:27', '2018-11-05 09:52:27', 1, 'ADMIN', 'ADMIN', 'isystem20@gmail.com', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_applicants_categories`
--
ALTER TABLE `tbl_applicants_categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_disabilities`
--
ALTER TABLE `tbl_applicants_disabilities`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_employment_status`
--
ALTER TABLE `tbl_applicants_employment_status`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_kasambahay`
--
ALTER TABLE `tbl_applicants_kasambahay`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_kasambahay_desc`
--
ALTER TABLE `tbl_applicants_kasambahay_desc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_kasambahay_history`
--
ALTER TABLE `tbl_applicants_kasambahay_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_languages`
--
ALTER TABLE `tbl_applicants_languages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_lang_spoken`
--
ALTER TABLE `tbl_applicants_lang_spoken`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_lang_written`
--
ALTER TABLE `tbl_applicants_lang_written`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_licenses`
--
ALTER TABLE `tbl_applicants_licenses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_ofw`
--
ALTER TABLE `tbl_applicants_ofw`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_ofw_conditions`
--
ALTER TABLE `tbl_applicants_ofw_conditions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_ofw_dependents`
--
ALTER TABLE `tbl_applicants_ofw_dependents`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_ofw_locations`
--
ALTER TABLE `tbl_applicants_ofw_locations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_ofw_work_history`
--
ALTER TABLE `tbl_applicants_ofw_work_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_prefer_locations`
--
ALTER TABLE `tbl_applicants_prefer_locations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_schools_attended`
--
ALTER TABLE `tbl_applicants_schools_attended`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_sydp`
--
ALTER TABLE `tbl_applicants_sydp`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_applicants_work_history`
--
ALTER TABLE `tbl_applicants_work_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_certificate_list`
--
ALTER TABLE `tbl_certificate_list`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_dresscodes`
--
ALTER TABLE `tbl_dresscodes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_establishments_rep`
--
ALTER TABLE `tbl_establishments_rep`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_establistments_categories`
--
ALTER TABLE `tbl_establistments_categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_group_masterlist`
--
ALTER TABLE `tbl_group_masterlist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_jobs_list`
--
ALTER TABLE `tbl_jobs_list`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_job_titles`
--
ALTER TABLE `tbl_job_titles`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_license_list`
--
ALTER TABLE `tbl_license_list`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_school_course_list`
--
ALTER TABLE `tbl_school_course_list`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_security_users`
--
ALTER TABLE `tbl_security_users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `tbl_sys_securityusers_loginname_unique` (`LoginName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_applicants_categories`
--
ALTER TABLE `tbl_applicants_categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tbl_applicants_disabilities`
--
ALTER TABLE `tbl_applicants_disabilities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_applicants_employment_status`
--
ALTER TABLE `tbl_applicants_employment_status`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_kasambahay`
--
ALTER TABLE `tbl_applicants_kasambahay`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_kasambahay_desc`
--
ALTER TABLE `tbl_applicants_kasambahay_desc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_kasambahay_history`
--
ALTER TABLE `tbl_applicants_kasambahay_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_languages`
--
ALTER TABLE `tbl_applicants_languages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_applicants_lang_spoken`
--
ALTER TABLE `tbl_applicants_lang_spoken`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_lang_written`
--
ALTER TABLE `tbl_applicants_lang_written`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_licenses`
--
ALTER TABLE `tbl_applicants_licenses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw`
--
ALTER TABLE `tbl_applicants_ofw`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw_conditions`
--
ALTER TABLE `tbl_applicants_ofw_conditions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw_dependents`
--
ALTER TABLE `tbl_applicants_ofw_dependents`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw_locations`
--
ALTER TABLE `tbl_applicants_ofw_locations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_ofw_work_history`
--
ALTER TABLE `tbl_applicants_ofw_work_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_prefer_locations`
--
ALTER TABLE `tbl_applicants_prefer_locations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_schools_attended`
--
ALTER TABLE `tbl_applicants_schools_attended`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_sydp`
--
ALTER TABLE `tbl_applicants_sydp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicants_work_history`
--
ALTER TABLE `tbl_applicants_work_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_certificate_list`
--
ALTER TABLE `tbl_certificate_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_dresscodes`
--
ALTER TABLE `tbl_dresscodes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_establishments_rep`
--
ALTER TABLE `tbl_establishments_rep`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_establistments_categories`
--
ALTER TABLE `tbl_establistments_categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_group_masterlist`
--
ALTER TABLE `tbl_group_masterlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tbl_jobs_list`
--
ALTER TABLE `tbl_jobs_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_job_titles`
--
ALTER TABLE `tbl_job_titles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `tbl_license_list`
--
ALTER TABLE `tbl_license_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_school_course_list`
--
ALTER TABLE `tbl_school_course_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
