-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2022 at 07:37 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `tender_id` int(25) NOT NULL,
  `off_id` int(255) DEFAULT NULL,
  `pro_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `off_id` int(255) NOT NULL,
  `off_username` varchar(255) NOT NULL,
  `off_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`off_id`, `off_username`, `off_name`) VALUES
(123, 'ismail_mail', 'ismail'),
(124, 'along_long', 'along');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `pro_id` int(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `pro_date` date NOT NULL,
  `veh_colour` varchar(255) NOT NULL,
  `veh_engine` varchar(255) NOT NULL,
  `pro_brand` varchar(255) NOT NULL,
  `veh_condition` varchar(255) NOT NULL,
  `supp_name` varchar(255) NOT NULL,
  `supp_num` text NOT NULL,
  `supp_email` text NOT NULL,
  `subject` text NOT NULL,
  `supp_state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`pro_id`, `pro_price`, `pro_date`, `veh_colour`, `veh_engine`, `pro_brand`, `veh_condition`, `supp_name`, `supp_num`, `supp_email`, `subject`, `supp_state`) VALUES
(1, 'gvg', '2022-06-02', 'vgvg', 'gvv', 'vgvg', 'vgv', 'gvg', 'gvg', 'vgvg', 'vgv', 'klwp'),
(2, 'ggg', '2022-06-29', 'ggg', 'gggg', 'ggg', 'ggg', 'ygbh', 'hbhbgggg', 'ggg', 'ggg', 'perak'),
(3, 'FWAFWAFW', '2022-06-29', 'FWFWAFW', 'FWFWFWA', 'FWFWFWA', 'FWAFW', 'fwafawfaw', 'feFWAFAWF', 'FWFFWA', 'FAWAWAFWFAEW', 'klwp');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` int(255) NOT NULL,
  `supp_name` varchar(255) NOT NULL,
  `off_username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `tender_id` int(25) NOT NULL,
  `veh_type` varchar(25) DEFAULT NULL,
  `veh_segment` varchar(25) DEFAULT NULL,
  `veh_date` date DEFAULT NULL,
  `off_id` int(255) DEFAULT NULL,
  `as_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tender_id`, `veh_type`, `veh_segment`, `veh_date`, `off_id`, `as_status`) VALUES
(26, 'Bus', 'Single-decker bus', '2022-06-08', 123, NULL),
(27, 'Van', 'Large van', '2022-06-09', NULL, NULL),
(28, 'Car', 'CUV', '2022-06-16', NULL, NULL),
(29, 'Car', 'MPV', '2022-06-08', NULL, NULL),
(30, 'Car', 'Sedan', '2022-06-17', NULL, NULL),
(31, 'Van', 'Large van', '2022-06-22', NULL, NULL),
(32, 'Bus', 'Mini bus', '2022-07-09', NULL, NULL),
(33, 'Car', 'CUV', '2022-07-08', NULL, NULL),
(37, 'Van', 'Medium van', '2022-06-02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `created`) VALUES
(1, 'Karim', 'karim123', '21232f297a57a5a743894a0e4a801fc3', 'supplier', '2022-06-23 01:51:05'),
(2, 'Asyraf', 'asyraf123', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2022-06-23 21:41:25'),
(3, 'Siti', 'siti123', '21232f297a57a5a743894a0e4a801fc3', 'officer', '2022-06-23 01:57:54'),
(4, 'Syafiq', 'syafiq123', 'e548904344bec0e8d2c3cb31641593ca', 'officer', '2022-06-16 09:17:07'),
(5, 'Izzul', 'izzul123', '4f0b36a34946153c358f8b243428a1eb', 'officer', '2022-06-16 09:27:38'),
(6, 'Afiq', 'afiq', '1d3517c757fa59a67e1d3608682b4097', 'admin', '2022-06-16 09:35:50'),
(7, 'Asyraf Akif', 'raaf', 'c5d5410e7f14ba184b44f51bf3aaa691', 'admin', '2022-06-17 12:44:29'),
(8, 'Megat', 'megatcute', '99a3b25e1126f8d165991bb2876a1823', 'officer', '2022-06-17 13:06:24'),
(9, 'Rahman Latif', 'rahman123', '2b16bb30c7254655630681d1d342ff48', 'officer', '2022-06-17 14:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(255) NOT NULL,
  `veh_engine` varchar(255) NOT NULL,
  `veh_colour` varchar(255) NOT NULL,
  `veh_segment` varchar(255) NOT NULL,
  `veh_condition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD KEY `off_id` (`off_id`),
  ADD KEY `tender_id` (`tender_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`tender_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `off_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `tender_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `veh_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `off_id` FOREIGN KEY (`off_id`) REFERENCES `officer` (`off_id`),
  ADD CONSTRAINT `pro_id` FOREIGN KEY (`pro_id`) REFERENCES `proposal` (`pro_id`),
  ADD CONSTRAINT `tender_id` FOREIGN KEY (`tender_id`) REFERENCES `tender` (`tender_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
