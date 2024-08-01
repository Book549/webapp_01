-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 11:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `prob_id` int(6) NOT NULL,
  `prob_date` date NOT NULL DEFAULT current_timestamp(),
  `prob_time` time(6) NOT NULL DEFAULT current_timestamp(),
  `prob_period` varchar(10) NOT NULL,
  `prob_id_user` int(6) NOT NULL,
  `prob_event` varchar(32) NOT NULL,
  `prob_discription` varchar(2048) NOT NULL,
  `prob_pic` varchar(32) NOT NULL,
  `prob_result` varchar(32) NOT NULL,
  `prob_id_checker` int(6) NOT NULL,
  `prob_date_check` date NOT NULL,
  `prob_suggest` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`prob_id`, `prob_date`, `prob_time`, `prob_period`, `prob_id_user`, `prob_event`, `prob_discription`, `prob_pic`, `prob_result`, `prob_id_checker`, `prob_date_check`, `prob_suggest`) VALUES
(6, '2024-08-01', '16:08:08.000000', 'day', 1, 'normal', 'ทดสอบ', '0', '', 0, '0000-00-00', ''),
(7, '2024-07-01', '16:08:08.052430', 'night', 2, 'normal', 'ทดสอบ test', '0', '', 0, '0000-00-00', ''),
(8, '2024-08-02', '26:08:04.000000', '1', 1, '1', '1', '00', '', 0, '0000-00-00', ''),
(9, '2024-08-01', '00:00:00.000000', '', 0, '', '', '', '', 0, '0000-00-00', ''),
(10, '0000-00-00', '00:00:00.000000', '', 1, '', '', '', '', 0, '0000-00-00', ''),
(11, '2024-08-06', '16:28:00.000000', 'awe', 1, 'awe', 'awe', '', '', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `user_username` varchar(32) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `user_group` varchar(32) NOT NULL,
  `user_tel` varchar(16) NOT NULL,
  `user_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_name`, `user_group`, `user_tel`, `user_type`) VALUES
(1, '1', '1', 'a', '', '', 1),
(2, '2', '2', 'b', '', '', 2),
(3, '3', '3', 'c', '', '', 3),
(4, '3', '3', 'c', '', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`prob_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `prob_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
