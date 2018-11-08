-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 10:43 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `isActive` tinyint(1) NOT NULL
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
-- Table structure for table `tbl_applicants_kasambahay_desc`
--

CREATE TABLE `tbl_applicants_kasambahay_desc` (
  `id` int(11) NOT NULL,
  `jobDesc` varchar(100) NOT NULL,
  `employerName` varchar(200) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_kasambahay_history`
--

CREATE TABLE `tbl_applicants_kasambahay_history` (
  `id` int(11) NOT NULL,
  `employerName` varchar(100) NOT NULL,
  `employerAddress` varchar(200) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicants_lang_read`
--

CREATE TABLE `tbl_applicants_lang_read` (
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
-- Table structure for table `tbl_applicants_lang_spoken`
--

CREATE TABLE `tbl_applicants_lang_spoken` (
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
-- Table structure for table `tbl_applicants_lang_written`
--

CREATE TABLE `tbl_applicants_lang_written` (
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
-- Table structure for table `tbl_applicants_licenses`
--

CREATE TABLE `tbl_applicants_licenses` (
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
-- Table structure for table `tbl_applicants_ofw`
--

CREATE TABLE `tbl_applicants_ofw` (
  `id` int(11) NOT NULL,
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
-- Table structure for table `tbl_applicants_ofw_work_history`
--

CREATE TABLE `tbl_applicants_ofw_work_history` (
  `id` int(11) NOT NULL,
  `countryName` varchar(100) NOT NULL,
  `agencyName` varchar(200) NOT NULL,
  `jobTitle` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_certificate_list`
--

CREATE TABLE `tbl_certificate_list` (
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
-- Table structure for table `tbl_establishments`
--

CREATE TABLE `tbl_establishments` (
  `Id` varchar(50) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyNameAcronym` varchar(10) NOT NULL,
  `TIN` varchar(50) NOT NULL,
  `permitIssuedDate` date NOT NULL,
  `establismentType` varchar(50) NOT NULL,
  `industryType` int(8) NOT NULL,
  `companyAddress` text NOT NULL,
  `landlineNum` varchar(50) NOT NULL,
  `faxNum` varchar(50) NOT NULL,
  `companyEmail` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `ownerName` varchar(200) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `contactPerson` varchar(200) NOT NULL,
  `contactPersonDesignation` varchar(50) NOT NULL,
  `contactPersonLandline` varchar(50) NOT NULL,
  `contactPersonMobile` varchar(50) NOT NULL,
  `doleRegistration` varchar(50) NOT NULL,
  `doleRegistrationDateIssued` date NOT NULL,
  `doleRegistrationExpiration` date NOT NULL,
  `poeaLicenseDateIssued` date NOT NULL,
  `poeaLicenseExpiration` date NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` date NOT NULL,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` date NOT NULL,
  `remarks` text NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishments_rep`
--

CREATE TABLE `tbl_establishments_rep` (
  `id` int(8) NOT NULL,
  `establishmentId` varchar(50) NOT NULL,
  `repFirstName` varchar(100) NOT NULL,
  `repLastName` varchar(100) NOT NULL,
  `repDesignation` varchar(100) NOT NULL,
  `createdById` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedById` varchar(50) NOT NULL,
  `modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
-- Table structure for table `tbl_jobs_list`
--

CREATE TABLE `tbl_jobs_list` (
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
-- Dumping data for table `tbl_jobs_list`
--

INSERT INTO `tbl_jobs_list` (`id`, `name`, `description`, `createdById`, `createdAt`, `modifiedById`, `modifiedAt`, `isActive`) VALUES
(1, 'Software Engineer', '', 'ADMIN', '2018-10-22 17:21:21', 'ADMIN', '2018-10-22 17:21:21', 1),
(2, 'Network Engineer', 'Sample Desc', 'ADMIN', '2018-10-22 17:21:21', 'ADMIN', '2018-10-22 17:21:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_license_list`
--

CREATE TABLE `tbl_license_list` (
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
('8a79df19-e698-4f3f-9121-ba657e190fc2', 'isystem20@gmail.com', 'c8fcb5fff5b493581ad15cef3d9a9c171e02d92d8d5a3adec233f54f03bfd8847445417fcbe156ce2b930df46a71bb1ee679daefcd2da59858bd7d42b597ffef', 1, '', 0, 0, 0, 0, '0000-00-00', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', '2018-11-03 05:13:23', '2018-11-03 05:13:23', 1, 'APPLICANT', '95a1b048-c8b2-4425-9dd5-e0fab21942cd', 'isystem20@gmail.com', '730509', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_applicants_kasambahay`
--
ALTER TABLE `tbl_applicants_kasambahay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_kasambahay_desc`
--
ALTER TABLE `tbl_applicants_kasambahay_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_kasambahay_history`
--
ALTER TABLE `tbl_applicants_kasambahay_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_lang_read`
--
ALTER TABLE `tbl_applicants_lang_read`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_lang_spoken`
--
ALTER TABLE `tbl_applicants_lang_spoken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_applicants_lang_written`
--
ALTER TABLE `tbl_applicants_lang_written`
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
-- Indexes for table `tbl_applicants_ofw_work_history`
--
ALTER TABLE `tbl_applicants_ofw_work_history`
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
-- Indexes for table `tbl_certificate_list`
--
ALTER TABLE `tbl_certificate_list`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_jobs_list`
--
ALTER TABLE `tbl_jobs_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_license_list`
--
ALTER TABLE `tbl_license_list`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_applicants_disabilities`
--
ALTER TABLE `tbl_applicants_disabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applicants_employment_status`
--
ALTER TABLE `tbl_applicants_employment_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applicants_kasambahay`
--
ALTER TABLE `tbl_applicants_kasambahay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applicants_kasambahay_desc`
--
ALTER TABLE `tbl_applicants_kasambahay_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applicants_kasambahay_history`
--
ALTER TABLE `tbl_applicants_kasambahay_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applicants_lang_read`
--
ALTER TABLE `tbl_applicants_lang_read`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applicants_lang_spoken`
--
ALTER TABLE `tbl_applicants_lang_spoken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applicants_lang_written`
--
ALTER TABLE `tbl_applicants_lang_written`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl_applicants_ofw_work_history`
--
ALTER TABLE `tbl_applicants_ofw_work_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl_certificate_list`
--
ALTER TABLE `tbl_certificate_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl_jobs_list`
--
ALTER TABLE `tbl_jobs_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_license_list`
--
ALTER TABLE `tbl_license_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_school_course_list`
--
ALTER TABLE `tbl_school_course_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
