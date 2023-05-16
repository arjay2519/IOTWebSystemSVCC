-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 04:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svcc_air_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor_tb`
--

CREATE TABLE `instructor_tb` (
  `uid` int(11) NOT NULL,
  `instructor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_tb`
--

INSERT INTO `instructor_tb` (`uid`, `instructor_name`) VALUES
(7, 'Sir Fag'),
(8, 'Sir Robert');

-- --------------------------------------------------------

--
-- Table structure for table `room_switch_tb`
--

CREATE TABLE `room_switch_tb` (
  `id` int(11) NOT NULL,
  `room1` enum('0','1') NOT NULL,
  `room2` enum('0','1') NOT NULL,
  `room3` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_switch_tb`
--

INSERT INTO `room_switch_tb` (`id`, `room1`, `room2`, `room3`) VALUES
(1, '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room_tb`
--

CREATE TABLE `room_tb` (
  `id` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `date_of_purchase` date DEFAULT NULL,
  `electricity` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_tb`
--

INSERT INTO `room_tb` (`id`, `room`, `brand`, `date_of_purchase`, `electricity`) VALUES
(1, 'CB2-201', 'Carrier', '2012-03-25', '0'),
(2, 'CB2-202', 'Carrier', '2012-03-16', '0'),
(3, 'CB2-203', 'Carrier', '2012-03-21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sched_tb`
--

CREATE TABLE `sched_tb` (
  `id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `time_in_hrs` varchar(5) NOT NULL,
  `time_in_min` varchar(5) NOT NULL,
  `time_out_hrs` varchar(5) NOT NULL,
  `time_out_min` varchar(5) NOT NULL,
  `room` varchar(50) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `UID` varchar(50) NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sched_tb`
--

INSERT INTO `sched_tb` (`id`, `day`, `subject`, `time_in_hrs`, `time_in_min`, `time_out_hrs`, `time_out_min`, `room`, `instructor_name`, `UID`, `status`) VALUES
(108, 'monday', 'Multimedia', '10', '30', '12', '30', 'CB2-201', 'Sir Fag', '7', '1'),
(110, 'tuesday', 'User and Design Experience', '24', '00', '2', '00', 'CB2-202', 'Sir Fag', '7', '1'),
(111, 'monday', 'Art Appreciation', '7', '30', '10', '30', 'CB2-201', 'Sir Robert', '8', '1'),
(115, 'tuesday', 'World Literature', '16', '00', '18', '00', 'CB2-202', 'Sir Robert', '8', '1'),
(120, 'monday', 'Mobile Development and Technologies 2', '21', '30', '23', '30', 'CB2-202', 'Sir Fag', '7', '1'),
(122, 'tuesday', 'Web Development', '3', '30', '6', '30', 'CB2-201', 'Sir Fag', '5', '1'),
(124, 'monday', 'World Literature', '1', '30', '3', '30', 'CB2-203', 'Sir Robert', 'Sir Robert', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `role`, `name`, `username`, `password`) VALUES
(1, 'user', 'arjay', 'arjay', '032519'),
(2, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor_tb`
--
ALTER TABLE `instructor_tb`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `room_switch_tb`
--
ALTER TABLE `room_switch_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_tb`
--
ALTER TABLE `room_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sched_tb`
--
ALTER TABLE `sched_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructor_tb`
--
ALTER TABLE `instructor_tb`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_switch_tb`
--
ALTER TABLE `room_switch_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_tb`
--
ALTER TABLE `room_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sched_tb`
--
ALTER TABLE `sched_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
