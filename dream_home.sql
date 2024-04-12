-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 04:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `dreamhome_datails`
--

CREATE TABLE `dreamhome_datails` (
  `id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `property_list` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `last_edited` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dreamhome_datails`
--

INSERT INTO `dreamhome_datails` (`id`, `first_name`, `last_name`, `mobile_no`, `email`, `property_list`,  `message`, `created`, `last_edited`) VALUES
('5c93bdaa8b788', 'shridhar', 'sarate', 9854561240, 'shridhar2901@gmail.com.com',  'Residential',  'hello','2024-02-20 22:06:58', '2024-02-20 22:06:58');

-- --------------------------------------------------------

--
--
-- Indexes for table `dreamhome_datails`
--
ALTER TABLE `dreamhome_datails`
  ADD PRIMARY KEY (`id`);

--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
