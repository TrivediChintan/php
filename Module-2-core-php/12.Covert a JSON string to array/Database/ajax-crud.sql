-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 09:21 AM
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
-- Database: `ajax-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_gender` varchar(30) DEFAULT NULL,
  `c_lang` varchar(30) DEFAULT NULL,
  `c_age` varchar(30) NOT NULL,
  `c_city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `c_name`, `c_gender`, `c_lang`, `c_age`, `c_city`) VALUES
(1, 'chintan', 'Male', '', '25', 'vyara'),
(2, 'dad', 'Female', '', 'sdadad', 'sdadad'),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, 'dfsdf', 'Female', '', 'sdfsfsdsf', 'sdfsdf'),
(8, 'zxczxcxzcz', 'Male', '', 'zxczxc', 'zxczxc'),
(9, '', '', '', '', ''),
(10, 'sdasds', 'Male', '', 'sdad', 'asdadd'),
(11, 'dasd', 'Male', '', 'asdad', 'asdasd'),
(12, 'dsad', 'Male', '', 'asdad', 'asdasd'),
(13, '', '', '', '', ''),
(14, '', '', 'Gujarati', '', ''),
(15, 'sadsad', 'Male', 'English', 'sadasdasd', 'sadasdad'),
(16, 'sadsad', 'Female', 'Hindi', 'sadasdasd', 'sadasdad'),
(17, 'sadasd', 'Male', 'Hindi', 'asdasdasd', 'asdasdasd'),
(18, 'asdasd', 'Male', 'Hindi', 'sadasda', 'sdadasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
