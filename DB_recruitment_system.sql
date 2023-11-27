-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2023 lúc 11:53 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `recruitment_system`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `jobid` int(11) NOT NULL,
  `UploadFeaturedImage` varchar(200) DEFAULT NULL,
  `JobTitle` varchar(100) DEFAULT NULL,
  `JobRegion` varchar(100) DEFAULT NULL,
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
  `job_id_detail` text NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `CompanyName` varchar(200) DEFAULT NULL,
  `UploadLogo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`jobid`, `UploadFeaturedImage`, `JobTitle`, `JobRegion`, `JobType`, `education`, `other_benifits`, `publishedon`, `Responsibilities`, `experience`, `salary`, `application_deadline`, `email`, `location`, `job_description`, `job_id_detail`, `status`, `user_id`, `CompanyName`, `UploadLogo`) VALUES
(1, 'images/sq_img_1.jpg', 'DevOps', 'Anywhere', 'Part Time', '', '', '0000-00-00', '', '', 0, '0000-00-00', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'egwgeg', '', 0, 0, 'TMA', 'images/job_logo_1.jpg'),
(2, 'images/sq_img_2.jpg', 'DevOps', 'Anywhere', 'Part Time', '', '', '0000-00-00', '', '', 0, '0000-00-00', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'egwgeg', '', 0, 0, 'FPT', 'images/job_logo_2.jpg'),
(3, 'images/sq_img_3.jpg', 'DevOps', 'Anywhere', 'Part Time', '', '', '0000-00-00', '', '', 0, '0000-00-00', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'egwgeg', '', 0, 0, 'AMD', 'images/job_logo_3.jpg'),
(4, 'images/sq_img_4.jpg', 'DevOps', 'Hồ Chí Minh', 'Full Time', 'Necessitatibus quibusdam facilis\r\nVelit unde aliquam et voluptas reiciendis non sapiente labore\r\nCommodi quae ipsum quas est itaque\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit\r\nDeleniti asperiores blanditiis nihil quia officiis dolor', 'Necessitatibus quibusdam facilis\r\nVelit unde aliquam et voluptas reiciendis non sapiente labore\r\nCommodi quae ipsum quas est itaque\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit\r\nDeleniti asperiores blanditiis nihil quia officiis dolor', '2023-11-25', 'Necessitatibus quibusdam facilis\r\nVelit unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore\r\nCommodi quae ipsum quas est itaque\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit\r\nDeleniti asperiores blanditiis nihil quia officiis dolor', '2 to 3 year(s)', 1000000, '2023-11-30', 'ttsp24020gtrgr3452@gmail.com', 'Quy Nhon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.\r\nVelit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!', '', 0, 1, 'AZ', 'images/job_logo_4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
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
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`id`, `Email`, `Fullname`, `Tell`, `img`, `address`, `birthday`, `Gender`) VALUES
(1, 'admin@gmail.com', 'quan tri vien', '0123456789', 'images/person_1.jpg', '123 Tran Hung Dao', '2000-11-11', b'01'),
(2, 'hau@gmail.com', 'Truong Thi Anh Hau', '0123456789', '', '12 Tran Hung Dao', '2000-11-11', b'10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(2) NOT NULL,
  `job-save` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `job-save`) VALUES
(1, 'admin@gmail.com', 'admin', 0, ''),
(2, 'hau@gmail.com', '123', 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobid`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
