-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 09:24 AM
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
-- Database: `classdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `state_id_fk` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `city_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`state_id_fk`, `city_id`, `city_name`) VALUES
(1, 1, 'Ahmedabad'),
(1, 2, 'Surat'),
(1, 3, 'Devbhumi Dwarka'),
(1, 4, 'Rajkot'),
(5, 5, 'Homer'),
(5, 6, 'Sitka'),
(5, 7, 'Juneau'),
(5, 8, 'Kenai'),
(9, 9, 'Saint John'),
(9, 10, 'Moncton'),
(9, 11, 'Bathurst'),
(9, 12, 'Dieppe'),
(13, 13, 'Melbourne'),
(13, 14, 'Bendigo'),
(13, 15, 'Camperdown'),
(13, 16, 'Nyora'),
(2, 17, 'Mumbai'),
(2, 18, 'Pune'),
(2, 19, 'Nagpur'),
(2, 20, 'Nasik'),
(3, 21, 'Jaipur'),
(3, 22, 'Ajmer'),
(3, 23, 'Pali'),
(3, 24, 'Kota'),
(4, 25, 'Ujjain'),
(4, 26, 'Indore'),
(4, 27, 'Bhopal'),
(4, 28, 'Jabalpur'),
(6, 29, 'Los Angeles'),
(6, 30, 'San Diego'),
(6, 31, 'San Francisco'),
(6, 32, 'Oakland'),
(7, 33, 'Phoenix'),
(7, 34, 'Tucson'),
(7, 35, 'Mesa'),
(7, 36, 'Chandler'),
(8, 37, 'Atlanta'),
(8, 38, 'Roswell'),
(8, 39, 'Savannah'),
(8, 40, 'Athens'),
(10, 41, 'Toronto'),
(10, 42, 'Ottawa'),
(10, 43, 'Hamilton'),
(10, 44, 'Oshawa'),
(11, 45, 'Berwick'),
(11, 46, 'Amherst'),
(11, 47, 'Lunenburg'),
(11, 48, 'New Glasgow'),
(12, 49, 'Eastman'),
(12, 50, 'Parkland'),
(12, 51, 'Northern Manitoba'),
(12, 52, 'Westman'),
(14, 58, 'Brisbane'),
(14, 59, 'Townsville'),
(14, 60, 'Cairns'),
(14, 61, 'Mackay'),
(15, 62, 'Longford'),
(15, 63, 'Hobart'),
(15, 64, 'Brighton'),
(15, 65, 'Sorell'),
(16, 66, 'Sydney'),
(16, 67, 'Newcastle'),
(16, 68, 'Goulburn'),
(16, 69, 'Ballina');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Canada'),
(4, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `country_id_fk` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `state_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`country_id_fk`, `state_id`, `state_name`) VALUES
(1, 1, 'Gujarat'),
(1, 2, 'Maharashtra'),
(1, 3, 'Rajasthan'),
(1, 4, 'Madhya Pradesh'),
(2, 5, 'Alaska'),
(2, 6, 'California'),
(2, 7, 'Arizona'),
(2, 8, 'Georgia'),
(3, 9, 'New Brunswick'),
(3, 10, 'Ontario'),
(3, 11, 'Nova Scotia'),
(3, 12, 'Manitoba'),
(4, 13, 'Victoria'),
(4, 14, 'Queensland'),
(4, 15, 'Tasmania'),
(4, 16, 'New South Wales');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_mobile`) VALUES
(1, 'chintan', 'c@gmail.com', '4569871258'),
(2, 'chintan', 'c@gmail.com', '4569871258'),
(3, 'chintan', 'c@gmail.com', '4569871258'),
(4, 'chintan', 'c@gmail.com', '4569871258'),
(5, 'prashant', 'p@gamil.com', '45679321'),
(6, 'prashant', 'p@gamil.com', '45679321'),
(7, 'prashant', 'p@gamil.com', '45679321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id_fk` (`state_id_fk`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id_fk` (`country_id_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id_fk`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id_fk`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
