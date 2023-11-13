-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 03:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobid` int(11) NOT NULL,
  `UploadFeaturedImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JobTitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JobRegion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JobType` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CompanyID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `education` text COLLATE utf8_unicode_ci NOT NULL,
  `other_benifits` text COLLATE utf8_unicode_ci NOT NULL,
  `publishedon` date NOT NULL,
  `employment_status` text COLLATE utf8_unicode_ci NOT NULL,
  `experience` text COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `application_deadline` date NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8_unicode_ci NOT NULL,
  `job_id_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `CompanyName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tagline` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CompanyDescription` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Website` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FacebookUsername` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TwitterUsername` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LinkedinUsername` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UploadLogo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobid`, `UploadFeaturedImage`, `JobTitle`, `JobRegion`, `JobType`, `CompanyID`, `education`, `other_benifits`, `publishedon`, `employment_status`, `experience`, `salary`, `application_deadline`, `email`, `location`, `job_description`, `job_id_detail`, `status`, `user_id`, `CompanyName`, `Tagline`, `CompanyDescription`, `Website`, `FacebookUsername`, `TwitterUsername`, `LinkedinUsername`, `UploadLogo`) VALUES
(1, 'recruitment_system (1).sql', 'DevOps', 'Anywhere', 'Part Time', '1', '', '', '0000-00-00', '', '', 0, '0000-00-00', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'egwgeg', '', 0, 0, 'TMA', 'Solution', 'gegewg', 'tma.com', 'face.tma', 'tw.tma', 'link.tma', 'recruitment_system.sql');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tell` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `Gender` bit(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `Email`, `Fullname`, `Tell`, `img`, `address`, `birthday`, `Gender`) VALUES
(1, 'admin@gmail.com', 'quan tri vien', '0123456789', '', '123 Tran Hung Dao', '2000-11-11', b'01'),
(2, 'hau@gmail.com', 'Truong Thi Anh Hau', '0123456789', '', '12 Tran Hung Dao', '2000-11-11', b'10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'admin', 0),
(2, 'hau@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
