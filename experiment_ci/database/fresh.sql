-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 05:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_info`
--

CREATE TABLE `access_info` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `login_period` datetime NOT NULL,
  `logout_period` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access_info`
--

INSERT INTO `access_info` (`user_id`, `login_period`, `logout_period`) VALUES
(1, '2017-08-26 11:43:06', '0000-00-00 00:00:00'),
(1, '2017-08-26 11:44:01', '2017-08-26 16:14:28'),
(1, '2017-08-26 11:52:01', '2017-08-26 14:15:18'),
(1, '2017-08-26 12:38:49', '0000-00-00 00:00:00'),
(1, '2017-08-26 14:17:47', '2017-08-26 14:20:33'),
(1, '2017-08-26 14:22:52', '2017-08-26 14:26:35'),
(1, '2017-08-26 14:26:37', '2017-08-26 14:54:06'),
(2, '2017-08-26 14:29:25', '2017-08-26 14:40:08'),
(7, '2017-08-26 14:40:18', '2017-08-26 17:33:09'),
(5, '2017-08-26 14:54:07', '2017-08-26 14:54:25'),
(5, '2017-08-26 14:54:27', '2017-08-26 14:55:11'),
(1, '2017-08-26 14:55:13', '2017-08-26 14:57:18'),
(1, '2017-08-26 14:57:19', '2017-08-26 14:58:05'),
(1, '2017-08-26 14:58:06', '0000-00-00 00:00:00'),
(1, '2017-08-26 14:58:12', '0000-00-00 00:00:00'),
(1, '2017-08-26 16:14:30', '2017-08-26 16:34:40'),
(7, '2017-08-26 16:34:53', '0000-00-00 00:00:00'),
(1, '2017-08-26 17:24:30', '0000-00-00 00:00:00'),
(7, '2017-08-26 17:33:11', '0000-00-00 00:00:00'),
(7, '2017-08-26 17:34:17', '0000-00-00 00:00:00'),
(7, '2017-08-26 17:34:53', '0000-00-00 00:00:00'),
(7, '2017-08-26 17:40:18', '0000-00-00 00:00:00'),
(7, '2017-08-26 17:52:17', '2017-08-26 18:07:37'),
(1, '2017-11-14 22:11:14', '2017-11-14 22:14:57'),
(1, '2017-11-14 22:15:09', '2017-11-14 22:27:22'),
(8, '2017-11-14 22:27:30', '2017-11-14 22:41:33'),
(1, '2017-11-14 22:41:35', '0000-00-00 00:00:00'),
(1, '2017-11-15 09:52:58', '0000-00-00 00:00:00'),
(1, '2017-11-15 09:53:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0bfcb5e352a7ad62b44e87ae113fe013', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1510717975, 'a:12:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:12:\"login_period\";s:22:\"2017-11-15 09:52:58 am\";s:4:\"name\";s:20:\"Progati Creative Ltd\";s:5:\"email\";s:24:\"freelanceitlab@gmail.com\";s:8:\"username\";s:10:\"superadmin\";s:6:\"mobile\";s:11:\"01762688999\";s:9:\"privilege\";s:5:\"super\";s:5:\"image\";s:30:\"public/profiles/superadmin.png\";s:6:\"branch\";s:6:\"godown\";s:6:\"holder\";s:5:\"super\";s:8:\"loggedin\";b:1;}'),
('0f3a0f87e25204318fbbfa08aa3079ee', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36', 1510719186, 'a:12:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:12:\"login_period\";s:22:\"2017-11-15 09:53:51 am\";s:4:\"name\";s:20:\"Progati Creative Ltd\";s:5:\"email\";s:24:\"freelanceitlab@gmail.com\";s:8:\"username\";s:10:\"superadmin\";s:6:\"mobile\";s:11:\"01762688999\";s:9:\"privilege\";s:5:\"super\";s:5:\"image\";s:30:\"public/profiles/superadmin.png\";s:6:\"branch\";s:6:\"godown\";s:6:\"holder\";s:5:\"super\";s:8:\"loggedin\";b:1;}'),
('3db6b9a63a71e3069f521e46293b77b5', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1510677693, 'a:12:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:12:\"login_period\";s:22:\"2017-11-14 22:41:35 pm\";s:4:\"name\";s:20:\"Progati Creative Ltd\";s:5:\"email\";s:24:\"freelanceitlab@gmail.com\";s:8:\"username\";s:10:\"superadmin\";s:6:\"mobile\";s:11:\"01762688999\";s:9:\"privilege\";s:5:\"super\";s:5:\"image\";s:30:\"public/profiles/superadmin.png\";s:6:\"branch\";s:6:\"godown\";s:6:\"holder\";s:5:\"super\";s:8:\"loggedin\";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `opening` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `maritial_status` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `facecbook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `privilege` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `opening`, `name`, `l_name`, `gender`, `birthday`, `maritial_status`, `position`, `about`, `website`, `facecbook`, `twitter`, `email`, `username`, `password`, `privilege`, `image`, `mobile`, `branch`) VALUES
(1, '2017-06-01 10:44:15', 'Progati Creative Ltd', '', '', '', '', '', '', '', '', '', 'freelanceitlab@gmail.com', 'superadmin', '262478f2a0b13b0532b5fddd18822a0f', 'super', 'public/profiles/superadmin.png', '01762688999', 'godown'),
(7, '2017-08-26 02:40:03', 'Progati Creative Ltd', '', '', '', '', '', '', '', '', '', 'fitdevteam@gmail.com', 'admin123', 'add216ec32d9f1b3374ae84a126fdd14', 'admin', 'public/profiles/admin123.jpg', '01762688999', '01'),
(8, '2017-11-14 10:27:16', 'sheam', '', '', '', '', '', '', '', '', '', 'nevertry9@gmail.com', 'sheam123', '39c90e26c25c01882e23d5f1e866cca2', 'admin', 'public/profiles/sheam123.jpg', '01722057518', 'godown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
