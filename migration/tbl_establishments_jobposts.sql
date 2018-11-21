-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 01:57 AM
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

--
-- Dumping data for table `tbl_establishments_jobposts`
--

INSERT INTO `tbl_establishments_jobposts` (`Id`, `EstablishmentId`, `JobTitle`, `EmpTypeId`, `PositionLevelId`, `Specialization`, `JobDescription`, `Salary`, `JobImage`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `isActive`) VALUES
(1, 1, 'Magni eligendi sunt doloribus vero est.', 0, 0, 0, 'Veritatis suscipit ad tenetur veritatis. Quas expedita maxime numquam ut praesentium. Excepturi qui doloremque in.', '0.00', '/452c898cc8fa1ce9f9e754997ff66d6d.jpg', '', '1986-02-25 19:04:21', '', '1993-05-22 05:30:16', 0, 1),
(2, 2, 'Et voluptatem vero est adipisci.', 0, 0, 0, 'Voluptas quam eligendi dolor et omnis et voluptatem. Amet earum ut in. Ut fuga ut quia rerum.', '0.00', '/976e04ff94ed205115aa0790efc0578e.jpg', '', '1993-10-23 02:25:51', '', '2000-04-27 09:03:06', 0, 1),
(3, 3, 'Sint culpa dolores laborum ut alias.', 0, 0, 0, 'Incidunt eveniet unde odit est vel et placeat aspernatur. Nisi voluptas eligendi illum quas dolor. Ullam dolor voluptatibus velit quisquam repellat vel.', '0.00', '/16eb4a9d03917e54d1ecd16e0368a8b8.jpg', '', '1990-06-28 05:43:44', '', '1974-07-08 01:06:01', 0, 1),
(4, 4, 'Esse optio labore eligendi recusandae voluptatum nesciunt.', 0, 0, 0, 'Tempora veniam et perspiciatis qui. Eos eveniet est error saepe impedit odio voluptates quia. Quis voluptate ea vero soluta aut a vel. Nesciunt aliquam ut quisquam eius et pariatur repudiandae quaerat.', '0.00', '/60c882c4871827f11fedde91c8562209.jpg', '', '2015-03-15 14:47:13', '', '2017-02-16 20:05:47', 0, 1),
(5, 5, 'Veritatis labore qui dolor distinctio quam ut voluptatem.', 0, 0, 0, 'In sapiente veritatis est neque eaque et. Velit aperiam doloribus voluptas voluptas dolore. Nihil ducimus provident facere et in ut. Eaque voluptatum inventore nisi commodi minima.', '0.00', '/7d4c7fefac9269bb6fe5124a7add6166.jpg', '', '2004-03-27 22:13:46', '', '1970-08-26 22:17:54', 0, 0),
(6, 6, 'Numquam eaque earum dicta facere iste excepturi.', 0, 0, 0, 'Est est provident eius perspiciatis exercitationem qui ab. Est ex temporibus velit maiores ducimus et. Animi consectetur natus velit. Quas veniam libero dignissimos consectetur sit. Id et et id voluptatem consequatur tenetur error.', '0.00', '/37c5c57949f7a2102471c762673cf747.jpg', '', '1991-10-25 14:43:13', '', '2010-10-26 16:00:31', 0, 1),
(7, 7, 'Nihil necessitatibus non et corporis qui.', 0, 0, 0, 'Eum ut et aut. Est magnam inventore velit dolorem libero.', '0.00', '/a615ebde99e37dc32074172c8cf8cfa0.jpg', '', '1984-04-15 00:52:54', '', '1985-03-30 10:53:39', 0, 0),
(8, 8, 'Expedita voluptatum maxime corporis rerum explicabo ullam nisi dignissimos.', 0, 0, 0, 'Vel eius possimus officiis tempora. Velit voluptatem et perspiciatis sapiente autem provident blanditiis.', '0.00', '/645aa7d9c2520b52bae17b25f3f0fc07.jpg', '', '1985-08-22 08:24:18', '', '1980-07-31 19:01:31', 0, 0),
(9, 9, 'Itaque illo dicta ut animi quaerat molestiae error.', 0, 0, 0, 'Dicta cupiditate vel dolorem officiis tenetur molestiae debitis. Est culpa vero rerum eum dolorem. Amet voluptas sit rerum amet. Necessitatibus sed voluptatibus deserunt ullam animi.', '0.00', '/08f75eef1c40ab77ffd3fdd284dd0918.jpg', '', '1971-05-13 01:01:37', '', '1977-11-26 07:01:45', 0, 1),
(10, 10, 'Repellendus aut ut voluptatibus dicta explicabo.', 0, 0, 0, 'Et qui ex culpa voluptates quidem sint. Dolorem consectetur maxime omnis. Non esse molestias nam distinctio. Et alias tempore aliquam repellat quidem.', '0.00', '/8cce89ec635c6848f273060a43c8aca3.jpg', '', '2015-04-08 04:43:43', '', '1987-07-09 05:15:20', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_establishments_jobposts`
--
ALTER TABLE `tbl_establishments_jobposts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_establishments_jobposts`
--
ALTER TABLE `tbl_establishments_jobposts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
