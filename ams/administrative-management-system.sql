-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 03:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrative-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `compliance_regulatory`
--

CREATE TABLE `compliance_regulatory` (
  `cl_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `modulename` varchar(255) NOT NULL,
  `xdatetime` datetime NOT NULL DEFAULT current_timestamp(),
  `xstat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `compliance_regulatory`
--

INSERT INTO `compliance_regulatory` (`cl_id`, `fullname`, `modulename`, `xdatetime`, `xstat`) VALUES
(1, 'JohnDoe', 'sample system', '2024-03-15 14:00:00', 'Complied'),
(2, 'john smith', 'inventory system', '2024-03-15 14:05:00', 'Complied'),
(6, 'coco martin', 'student information', '2024-03-15 14:21:00', 'Complied'),
(8, 'tanggol', 'BIR', '2024-03-15 14:37:00', 'Complied'),
(10, 'boni', 'engineering', '2024-03-15 18:38:59', 'Complied'),
(11, 'antionio diku', 'Government', '2024-03-15 20:25:25', 'Complied'),
(12, 'abdul', 'computer science', '2024-03-15 21:49:53', 'Complied'),
(13, 'asdsadas', 'asdasddsa', '2024-03-16 13:36:06', 'Complied'),
(14, 'coco martin', 'inventory system', '2024-03-16 13:42:23', 'Complied'),
(15, 'sample', 'sample', '2024-03-16 18:13:34', 'Complied'),
(16, 'anton', 'highskul educ', '2024-03-16 18:25:33', 'Complied'),
(17, 'jmal', 'saufi', '2024-03-16 18:42:05', 'Complied'),
(18, 'abdul', 'Government', '2024-03-16 18:47:11', 'Complied'),
(19, 'abdul', 'highskul educ', '2024-03-16 18:51:12', 'Complied'),
(20, 'juan dela cruz', 'juan module', '2024-03-21 15:43:39', 'Complied');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(1, 'integration', '2024-03-22 00:00:00', '2024-03-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `tbl_user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`tbl_user_id`, `first_name`, `last_name`, `contact_number`, `email`, `username`, `password`, `verification_code`) VALUES
(1, 'john', 'w.', '9984561235', 'gerald.ison02@gmail.com', 'admin', 'dcddb75469b4b4875094e14561e573d8', 508874);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compliance_regulatory`
--
ALTER TABLE `compliance_regulatory`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`tbl_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compliance_regulatory`
--
ALTER TABLE `compliance_regulatory`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `tbl_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
