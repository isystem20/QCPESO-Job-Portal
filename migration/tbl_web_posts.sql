-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 09:22 AM
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
  `WebImage` varchar(100) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web_posts`
--

INSERT INTO `tbl_web_posts` (`Id`, `PostTitle`, `PostDescription`, `PostContent`, `PostTypeId`, `Tags`, `WebImage`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNo`, `IsActive`) VALUES
(23, 'test1', 'test1', 'teaeaef', 3, 'test1,test2', '', 'ADMIN', '2018-11-30 13:35:35', 'ADMIN', '2018-11-30 13:35:35', 1, 2),
(24, '1', '2', '4', 1, '3', '', 'ADMIN', '2018-11-30 16:14:50', 'ADMIN', '2018-11-30 16:14:50', 1, 1),
(25, '3', '4', '6', 1, '5', 'uploads/Logo.png', 'ADMIN', '2018-11-30 16:16:18', 'ADMIN', '2018-11-30 16:16:18', 1, 1),
(26, 'q', 'w', 'r', 1, 'e', 'uploads/Logo1.png', 'ADMIN', '2018-11-30 16:18:23', 'ADMIN', '2018-11-30 16:18:23', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
3, 'Earum minus aut velit commodi iste ipsum.', 'Dolores provident non aliquam natus omnis fuga nobis. Eius fugit voluptas est aut voluptas. Iusto quasi sapiente reiciendis aut ex aut molestiae corrupti. Eligendi sunt est sed.', 'Sed aliquam quis velit dolore. Quia quae iste enim illum.', 0, '', '', '2001-12-21 06:45:33', '', '1979-06-19 07:09:43', 1, 1),
(4, 'Saepe neque officiis neque molestiae aut.', 'Accusantium et sint id velit. Consequatur nesciunt sit assumenda quia. Qui possimus sed officia occaecati ullam velit. Asperiores voluptatem assumenda quasi.', 'Animi et fugiat nisi voluptatum id dolore. Totam sapiente voluptatem quisquam vitae commodi fuga.', 0, '', '', '1998-09-11 00:23:33', '', '1982-05-02 20:21:17', 1, 1),
(5, 'Animi quae pariatur vero nisi alias eos id non.', 'Rerum accusamus qui cumque est. Et quaerat officia commodi quisquam blanditiis ut voluptas. Tempora id recusandae excepturi est consectetur voluptatem hic. Et fugiat sapiente sequi delectus nemo.', 'Corrupti fugiat numquam veniam et. Impedit blanditiis ut molestiae ut dolor aspernatur. Veniam delectus nihil optio dolore alias adipisci.', 0, '', '', '2004-05-24 20:07:13', '', '2005-11-08 02:23:42', 1, 0),
(6, 'Atque animi dolorum minus sit sunt vel velit.', 'In numquam aut et maxime nesciunt. Fuga doloribus distinctio impedit. Optio rerum qui assumenda et consequatur voluptatibus.', 'Amet magni voluptatem molestiae iste. Ad saepe quo adipisci quia sed. Veritatis aperiam at temporibus deleniti.', 0, '', '', '1971-07-25 14:00:06', '', '1987-03-21 22:25:15', 1, 0),
(7, 'Dolor officiis aut architecto eveniet sapiente.', 'Eligendi et eius iste dolor quibusdam. In asperiores sit nostrum ab distinctio dolor. Fuga expedita molestias laudantium ipsam. Ducimus molestiae voluptas ullam aut.', 'Perspiciatis nemo quod eum. Consequatur sint tempora est labore illum soluta tempora. Earum eum est inventore harum aperiam qui voluptatem enim.', 0, '', '', '2007-12-03 15:42:24', '', '1979-08-15 04:40:23', 1, 1),
(8, 'Sunt nesciunt aut reprehenderit velit qui modi sit et.', 'Maiores ut enim impedit voluptas praesentium. Autem praesentium voluptate vitae debitis. Nam perferendis perspiciatis id qui optio quos officiis. Quaerat placeat voluptatem soluta non.', 'Rerum molestiae magnam autem corporis omnis. Quia fugit quia aut voluptas et. Occaecati illo temporibus commodi autem. Quidem doloremque quaerat aut rem suscipit tenetur.', 0, '', '', '1972-10-30 21:08:30', '', '1993-12-17 01:35:59', 1, 1),
(9, 'Possimus eveniet nemo aperiam temporibus expedita.', 'Accusantium excepturi repellendus aliquam omnis a quae. Consequatur ea et cumque tempore recusandae voluptates quas.', 'Et veniam molestiae voluptas eos. Modi recusandae eos ullam. Amet facere quas provident minus.', 0, '', '', '2004-02-20 14:57:55', '', '2013-12-05 18:29:24', 1, 0),
(10, 'Qui ad temporibus velit suscipit est ad.', 'Vitae aut et consequatur voluptas tenetur. Molestiae ducimus officiis commodi dolore in eos. Adipisci dolor fuga molestias quis et quae quos.', 'Eaque exercitationem rerum quia consequatur neque laborum praesentium. Qui dicta explicabo nostrum natus et ut quae.', 0, '', '', '1996-04-27 08:36:23', '', '1986-10-08 00:12:10', 1, 1),
(11, 'Sapiente nihil deserunt corporis dolorum quia consequatur.', 'Culpa et aliquid nam sed est quis doloremque. Et suscipit sint doloribus magni ipsam molestiae. Itaque non quia qui quis nam sit. Eos minus voluptatem dolore qui necessitatibus id.', 'Alias et sed nihil aut. Id nostrum eum non in ea fugit sed. Ratione labore voluptatem illo deleniti doloremque non aperiam iure.', 0, '', '', '2008-07-17 20:03:33', '', '2012-08-12 02:54:35', 1, 1),
(12, 'Nihil non commodi qui aut qui sed earum.', 'Enim mollitia velit nemo. Laborum est aperiam autem fuga ipsam impedit facere. Nisi ducimus harum eos voluptas sit dolore. Enim magni nisi accusantium fugiat nihil inventore.', 'Aperiam aut velit voluptate. Molestiae consequatur et nesciunt. Impedit laboriosam alias nihil dolorem inventore enim.', 0, '', '', '1989-08-13 10:51:28', '', '2007-11-10 11:46:56', 1, 0),
(13, 'Similique autem qui itaque illum dolorem.', 'Aperiam qui similique odio omnis suscipit porro. Voluptas nostrum quam quo dignissimos animi qui. Quis assumenda voluptatem inventore. Et aut laudantium suscipit quas.', 'Corporis aliquam et eveniet labore sapiente eum. Non fugit dolor est earum facilis nihil delectus. Corporis enim id et adipisci. Maiores rem eaque omnis pariatur quia ut similique.', 0, '', '', '2006-07-10 16:10:07', '', '1999-12-22 20:59:42', 1, 0),
(14, 'Totam illum id debitis neque nihil magnam optio.', 'Animi hic sunt nemo quia autem. Odit harum velit quidem id dolore suscipit sed.', 'Enim quis et quae sint rerum est. Et magnam ut dolorem non illum mollitia modi. Necessitatibus tempore nihil esse. Dicta quibusdam quia repudiandae aliquam.', 0, '', '', '1984-05-06 08:45:15', '', '1985-08-28 05:21:15', 1, 1),
(15, 'Inventore quasi praesentium quos.', 'Non et ratione voluptatem ut autem. Magnam ut soluta esse dicta quibusdam dolore. Tenetur recusandae voluptatem labore voluptatem.', 'Qui sed excepturi odit ut. Voluptatem eum similique sed deserunt. Quis molestiae ut praesentium praesentium recusandae totam reiciendis. Magnam quia vero aliquid esse dolor.', 0, '', '', '2002-05-04 02:32:18', '', '2012-07-04 19:46:06', 1, 1),
(16, 'Consequatur nostrum et maxime vel repellendus.', 'Fuga quod ratione dolores neque animi. Eaque illum et at ex reprehenderit magni in. Sequi sed amet eligendi maiores qui reprehenderit. Consequatur odit labore sequi.', 'Ea porro quam quo cumque aut. Autem consequatur ut nihil illum corrupti. Est expedita iste nobis accusamus aspernatur eveniet nihil.', 0, '', '', '2012-11-22 01:24:05', '', '2011-02-06 05:48:24', 1, 0),
(17, 'Eligendi sint iure aut ipsam deserunt eum.', 'Ad cumque maxime inventore tempore sit in. Similique natus magnam recusandae quia eum ea. Deserunt exercitationem sequi iste earum voluptatem soluta.', 'Ut dignissimos quod est at eligendi. Porro nulla asperiores et suscipit ex architecto labore. Blanditiis eius omnis qui amet et cupiditate.', 0, '', '', '1989-12-03 08:42:46', '', '2005-08-17 21:44:07', 1, 1),
(18, 'Cum reprehenderit magnam ut nostrum deserunt dolorem.', 'Et et voluptas et eos ratione. Ut error at accusantium adipisci. Autem omnis cupiditate fugiat quas aut fuga est.', 'Quod nam iure dignissimos voluptatem maiores similique. Ipsam voluptatem sint voluptatem sit rerum esse nemo. Ullam voluptates ut magnam tenetur.', 0, '', '', '1977-10-15 16:45:24', '', '2012-03-20 04:02:58', 1, 0),
(19, 'Nostrum quidem a cum suscipit accusantium.', 'Laudantium maxime perspiciatis mollitia. Quo quia aut ab quam. Temporibus ut quos autem id soluta ducimus minus.', 'Minima deserunt amet magnam expedita. Voluptatum delectus occaecati et aliquid a voluptate ut. Harum tenetur repellat quo quis. Possimus error aliquid dolorum omnis debitis.', 0, '', '', '1982-10-07 19:03:44', '', '2013-07-12 06:20:01', 1, 1),
(20, 'Non et at laboriosam illo voluptas nihil.', 'Dolores tenetur quos in voluptas. Similique saepe recusandae dolores aut modi nobis repudiandae. Quibusdam velit ut repellat saepe nostrum. Et fugit ea temporibus sit earum voluptatem.', 'Quasi eos magni ipsum accusamus. Sunt itaque occaecati autem porro possimus. Asperiores libero et fugit maxime quam et. Dolor eos quae iure provident alias consequuntur vero.', 0, '', '', '1997-03-22 09:19:03', '', '1998-10-13 19:21:10', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_web_posts`
--
ALTER TABLE `tbl_web_posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
