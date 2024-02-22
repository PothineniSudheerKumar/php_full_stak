-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 01:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_api_logins`
--

CREATE TABLE `tbl_api_logins` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `api_token` varchar(20) NOT NULL,
  `mode` varchar(4) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_api_logins`
--

INSERT INTO `tbl_api_logins` (`id`, `user_name`, `password`, `api_token`, `mode`, `status`) VALUES
(1, 'sudheer', 'rest_api', 'REST12345TOKEN', 'TEST', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_token`
--

CREATE TABLE `tbl_token` (
  `id` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `time_duration` int(11) NOT NULL COMMENT 'time in seconds default time 2700',
  `created_date_time` datetime DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_pic` text DEFAULT 'user.png',
  `email_verification` int(11) NOT NULL DEFAULT 0,
  `email_send_status` int(11) NOT NULL DEFAULT 0,
  `user_role` int(11) NOT NULL DEFAULT 5 COMMENT '1-admin, 2-sub_admin, 3-staff, 4-accounts, 5-user',
  `status` int(11) NOT NULL DEFAULT 3 COMMENT '0-in_active, 1-active, 2-waiting for admin approval, -1-delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email_id`, `mobile_number`, `password`, `profile_pic`, `email_verification`, `email_send_status`, `user_role`, `status`) VALUES
(1, 'pothineni sudheer', 'kumar', 'sudheerchowdary543@gmail.com', 8746966744, 'rest_api', 'user.png', 0, 0, 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_api_logins`
--
ALTER TABLE `tbl_api_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_token`
--
ALTER TABLE `tbl_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_api_logins`
--
ALTER TABLE `tbl_api_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_token`
--
ALTER TABLE `tbl_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
