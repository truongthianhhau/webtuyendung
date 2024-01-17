-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 04:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_recruitment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobid` int(11) NOT NULL,
  `UploadFeaturedImage` varchar(200) DEFAULT NULL,
  `JobTitle` varchar(100) DEFAULT NULL,
  `JobRegion` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `JobType` varchar(100) DEFAULT NULL,
  `education` text NOT NULL,
  `other_benifits` text NOT NULL,
  `publishedon` date NOT NULL,
  `Responsibilities` text NOT NULL,
  `experience` text NOT NULL,
  `salary` int(11) NOT NULL,
  `application_deadline` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `job_description` text NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `CompanyName` varchar(200) DEFAULT NULL,
  `UploadLogo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobid`, `UploadFeaturedImage`, `JobTitle`, `JobRegion`, `Gender`, `JobType`, `education`, `other_benifits`, `publishedon`, `Responsibilities`, `experience`, `salary`, `application_deadline`, `email`, `location`, `job_description`, `status`, `user_id`, `CompanyName`, `UploadLogo`) VALUES
(1, 'images/sq_img_1.jpg', 'DevOps', 'Anywhere', '', 'Part Time', 'Graduated from College/university', '', '2024-01-09', '', '2 year(s)', 1000000, '2024-01-31', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.\nVelit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!', 1, 0, 'TMA', 'images/job_logo_1.jpg'),
(2, 'images/sq_img_2.jpg', 'BA', 'Anywhere', '', 'Part Time', '', '', '2024-01-08', '', '1 year(s)', 15000000, '2024-01-25', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.\nVelit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!', 1, 0, 'FPT', 'images/job_logo_2.jpg'),
(4, 'images/sq_img_4.jpg', 'DevOps', 'Hồ Chí Minh', '', 'Full Time', 'Necessitatibus quibusdam facilis\nVelit unde aliquam et voluptas reiciendis non sapiente labore\nCommodi quae ipsum quas est itaque\nLorem ipsum dolor sit amet, consectetur adipisicing elit\nDeleniti asperiores blanditiis nihil quia officiis dolor', 'Necessitatibus quibusdam facilis\r\nVelit unde aliquam et voluptas reiciendis non sapiente labore\r\nCommodi quae ipsum quas est itaque\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit\r\nDeleniti asperiores blanditiis nihil quia officiis dolor', '2024-01-01', 'Necessitatibus quibusdam facilis\r\nVelit unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore\r\nCommodi quae ipsum quas est itaque\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit\r\nDeleniti asperiores blanditiis nihil quia officiis dolor', '2 to 3 year(s)', 1000000, '2024-01-27', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.\nVelit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!', 1, 1, 'NCC', 'images/job_logo_4.jpg'),
(6, 'images/job_single_img_1.jpg', 'Test', '', 'Female', '', 'Graduated from College/university', '', '2024-01-03', '', 'No', 20000000, '2024-01-27', 'Truong@gmail.com', 'Quy Nhơn', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.\nVelit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!', 1, 0, 'FPT', 'images/job_logo_4.jpg'),
(7, 'images/job_single_img_1.jpg', 'webkfgkf', 'San Francisco', 'Female', 'Full Time', 'Graduated from College/university', '', '2024-01-01', '', '2 to 3 year(s)', 10000000, '2024-01-31', 'Truong@gmail.com', 'Sai Gon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.\nVelit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!', 0, 0, 'TMA', 'images/job_logo_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Fullname` varchar(100) DEFAULT NULL,
  `Tell` varchar(11) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `Gender` bit(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `Email`, `Fullname`, `Tell`, `img`, `address`, `birthday`, `Gender`) VALUES
(1, 'admin@gmail.com', 'quan tri vien', '0123456789', 'images/3845_Di_tich_quYc_gia_YYc_biYt_Ganh_Ya_YYa_Tuy_An_-_Phu_Yen-300x300.jpg', '123 Tran Hung Dao', '2000-11-11', b'01'),
(2, 'hau@gmail.com', 'Truong Thi Anh Hau', '0123456789', 'images/202005171129SA19-1024x588.jpeg', '12 Tran Hung Dao1', '2002-02-24', b'10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(2) NOT NULL,
  `job-save` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `job-save`) VALUES
(1, 'admin@gmail.com', '123', 1, ''),
(2, 'hau@gmail.com', '123', 0, '');

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
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
