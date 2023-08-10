-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 10:25 AM
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
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `sno` int(11) NOT NULL,
  `msg` text NOT NULL,
  `room` text NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`sno`, `msg`, `room`, `ip`, `stime`) VALUES
(1, 'this', 'room', '123', '2023-06-28 13:17:01'),
(2, '', 'kumar', '::1', '2023-06-28 13:22:48'),
(3, 'hiiii ji', 'kumar', '::1', '2023-06-28 13:24:15'),
(4, 'hiiii ', 'kumar', '::1', '2023-06-28 13:27:07'),
(5, 'hii', 'kumar', '::1', '2023-06-28 13:30:18'),
(6, 'this is me', 'kumar', '::1', '2023-06-28 13:32:26'),
(7, 'hello', 'kumar', '::1', '2023-06-28 13:36:31'),
(8, 'fine', 'kumar', '::1', '2023-06-28 13:37:57'),
(9, 'hii', 'arun', '::1', '2023-06-28 13:53:44'),
(10, 'what is youtr name', 'arun', '::1', '2023-06-28 13:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `sno` int(11) NOT NULL,
  `roomname` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`sno`, `roomname`, `stime`) VALUES
(1, 'room1', '2023-06-28 12:12:33'),
(2, 'aashiqui1', '2023-06-28 12:18:57'),
(3, 'aashiqui', '2023-06-28 12:27:09'),
(4, 'kumar', '2023-06-28 13:19:48'),
(5, 'arun', '2023-06-28 13:53:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
