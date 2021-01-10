-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 08:38 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'aaa', 'a@gmail.com', '123', 1),
(2, 'Saurabh', 'sbh9935@gmai.com', '1234567890qwertyuiop', 1),
(3, 'ab', 'a@gmail.com', 'ab', 1),
(4, 'a', 'a@gmail.com', 'a', 1),
(5, 'mukul', 'mukultripathi0101@gmail.com', 'Mukul@010101', 1),
(6, 'Mukulp01s', 'mukul', 'Mukul@0101', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setreminder`
--

CREATE TABLE `setreminder` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `sms` text NOT NULL,
  `recur` text NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setreminder`
--

INSERT INTO `setreminder` (`id`, `username`, `date`, `subject`, `description`, `email`, `contact`, `sms`, `recur`, `status`) VALUES
(4, 'aaa', '2019-05-04', 'Anniversary', '							Hello																																						', 'gfghfg@gmail.com', '9658754536', '9658754536', '5', 0),
(5, 'a', '2019-07-05', 'Farewell', '							g						', 'vghvg@gmail.com', '9797914587', '5546789858', '3', 0),
(6, 'a', '2019-10-05', 'TaskDeadline', '																																			hgfhc																														', 'chgcghcf@outlook.com', '4856348515', 'cfgcfcfg', '7,3', 1),
(7, 'aaa', '2019-09-06', 'Anniversary', '														Good Decision																								', 'test@gmail.com', '6567787759', '1548968456', '3', 1),
(8, 'Mukulp01s', '2021-10-08', 'Birthday', '							asafa						', 'alexami388@gmail.com', '5468978534', '7857459682', '7,5', 1),
(9, 'aaa', '2019-09-07', 'Anniversary', '																																			My best frnd anniversary																														', 'uahmad000@gmail.com', '8875955478', '7398575647', '5', 1),
(11, 'Mukulp01s', '2019-09-06', 'Birthday', '						xfcghjdhjv						', 'eddfv@rocketmail.com', '8858558845', '8858558845', '3', 0),
(12, 'aaa', '2019-09-07', 'Birthday', 'Umair', 'u@gmail.com', '7894561223', '7894561223', '5', 1),
(13, 'aaa', '2019-09-07', 'Birthday', 'Abhi', 'a@gmail.com', '4567894521', '4567891234', '7', 0),
(14, 'aaa', '2019-09-07', 'Anniversary', 'Mukul', 'm@gmail.com', '7531596245', '7531596245', '5', 1),
(78, 'aaa', '0000-00-00', 'Farewell', 'Final Year', 'u@gmail.com', '8564789635', '8564789635', '3', 1),
(79, 'aaa', '0000-00-00', 'Birthday', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '7', 0),
(80, 'aaa', '0000-00-00', 'TaskDeadline', 'Senior ', 'alexami388@gmail.com', '9798945456', '9798945456', '5', 0),
(81, 'Mukulp01s', '0000-00-00', 'Farewell', 'Final Year', 'alexami388@gmail.com', '5478965439', '5478965439', '3', 1),
(82, 'a', '0000-00-00', 'TaskDeadline', 'Junior', 'u@gmail.com', '8564789635', '8564789635', '7', 0),
(83, 'Mukulp01s', '0000-00-00', 'Birthday', 'Junior', 'alexami388@gmail.com', '5789589658', '5789589658', '5', 0),
(84, 'a', '0000-00-00', 'Birthday', 'Senior ', 'test@gmail.com', '6578963254', '6578963254', '7', 1),
(85, 'aaa', '0000-00-00', 'TaskDeadline', 'Junior', 'u@gmail.com', '5478965439', '5478965439', '3', 1),
(86, 'Mukulp01s', '0000-00-00', 'Anniversary', 'Senior ', 'a@gmail.com', '8564789635', '8564789635', '5', 1),
(87, 'a', '0000-00-00', 'Farewell', 'Junior', 'u@gmail.com', '5569854578', '5569854578', '7', 0),
(88, 'aaa', '0000-00-00', 'Birthday', 'Senior ', 'alexami388@gmail.com', '5478965439', '5478965439', '3', 1),
(89, 'a', '0000-00-00', 'Anniversary', 'Final Year', 'test@gmail.com', '8564789635', '8564789635', '5', 1),
(90, 'Mukulp01s', '0000-00-00', 'Birthday', 'Senior ', 'u@gmail.com', '9798654235', '9798654235', '7', 1),
(91, 'aaa', '0000-00-00', 'TaskDeadline', 'Junior', 'test@gmail.com', '5478965439', '5478965439', '3', 1),
(92, 'a', '0000-00-00', 'Farewell', 'Junior', 'alexami388@gmail.com', '8564789635', '8564789635', '5', 1),
(93, 'a', '0000-00-00', 'Birthday', 'Final Year', 'u@gmail.com', '9798564152', '9798564152', '3', 1),
(94, 'Mukulp01s', '0000-00-00', 'Farewell', 'Junior', 'alexami388@gmail.com', '6698746985', '6698746985', '5', 0),
(95, 'a', '0000-00-00', 'Birthday', 'Senior ', 'test@gmail.com', '8564789635', '8564789635', '7', 1),
(96, 'aaa', '0000-00-00', 'Anniversary', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '5', 1),
(97, 'a', '0000-00-00', 'Farewell', 'Senior ', 'alexami388@gmail.com', '8755963554', '8755963554', '7', 1),
(98, 'aaa', '0000-00-00', 'Birthday', 'Final Year', 'a@gmail.com', '8564789635', '8564789635', '5', 1),
(99, 'Mukulp01s', '0000-00-00', 'TaskDeadline', 'Junior', 'u@gmail.com', '9658743515', '9658743515', '5', 1),
(100, 'a', '0000-00-00', 'Farewell', 'Senior ', 'test@gmail.com', '8564789635', '8564789635', '7', 1),
(101, 'aaa', '0000-00-00', 'Anniversary', 'Junior', 'alexami388@gmail.com', '7899665555', '7899665555', '5', 1),
(102, 'aaa', '0000-00-00', 'Birthday', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '2', 1),
(103, 'a', '0000-00-00', 'Farewell', 'Final Year', 'a@gmail.com', '6985655985', '6985655985', '5', 0),
(104, 'aaa', '0000-00-00', 'Birthday', 'Senior ', 'alexami388@gmail.com', '5478965439', '5478965439', '7', 0),
(105, 'Mukulp01s', '0000-00-00', 'Anniversary', 'Junior', 'a@gmail.com', '8564789635', '8564789635', '2', 0),
(106, 'a', '0000-00-00', 'Farewell', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '2', 1),
(107, 'aaa', '0000-00-00', 'Birthday', 'Final Year', 'alexami388@gmail.com', '9865789698', '9865789698', '5', 1),
(108, 'aaa', '0000-00-00', 'TaskDeadline', 'Senior ', 'test@gmail.com', '5478965439', '5478965439', '2', 1),
(109, 'a', '0000-00-00', 'Farewell', 'Junior', 'u@gmail.com', '8564789635', '8564789635', '7', 0),
(110, 'Mukulp01s', '0000-00-00', 'Birthday', 'Senior ', 'test@gmail.com', '6587996554', '6587996554', '5', 1),
(111, 'a', '0000-00-00', 'Anniversary', 'Junior', 'alexami388@gmail.com', '5478965439', '5478965439', '2', 0),
(112, 'a', '0000-00-00', 'Farewell', 'Final Year', 'test@gmail.com', '8564789635', '8564789635', '7', 1),
(113, 'a', '0000-00-00', 'Birthday', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '5', 0),
(114, 'aaa', '0000-00-00', 'TaskDeadline', 'Junior', 'alexami388@gmail.com', '5478965439', '5478965439', '2', 1),
(115, 'Mukulp01s', '0000-00-00', 'Anniversary', 'Junior', 'a@gmail.com', '8564789635', '8564789635', '2', 0),
(116, 'a', '0000-00-00', 'Birthday', 'Final Year', 'alexami388@gmail.com', '5478965439', '5478965439', '5', 1),
(117, 'aaa', '0000-00-00', 'TaskDeadline', 'Junior', 'alexami388@gmail.com', '5478965439', '5478965439', '2', 0),
(118, 'aaa', '0000-00-00', 'Farewell', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '7', 1),
(119, 'Mukulp01s', '0000-00-00', 'Birthday', 'Junior', 'test@gmail.com', '8564789635', '8564789635', '2', 1),
(120, 'a', '0000-00-00', 'Anniversary', 'Junior', 'alexami388@gmail.com', '5478965439', '5478965439', '5', 1),
(121, 'Mukulp01s', '0000-00-00', 'Farewell', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '2', 1),
(122, 'aaa', '0000-00-00', 'TaskDeadline', 'Final Year', 'alexami388@gmail.com', '8564789635', '8564789635', '7', 0),
(123, 'a', '0000-00-00', 'Birthday', 'Senior ', 'u@gmail.com', '5478965439', '5478965439', '5', 1),
(124, 'aaa', '0000-00-00', 'Farewell', 'Senior ', 'alexami388@gmail.com', '5478965439', '5478965439', '2', 0),
(125, 'a', '0000-00-00', 'Anniversary', 'Senior ', 'test@gmail.com', '8564789635', '8564789635', '5', 1),
(126, 'a', '0000-00-00', 'Anniversary', 'Senior ', 'alexami388@gmail.com', '5478965439', '5478965439', '7', 0),
(127, 'a', '0000-00-00', 'Farewell', 'Final Year', 'u@gmail.com', '8564789635', '8564789635', '7', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setreminder`
--
ALTER TABLE `setreminder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setreminder`
--
ALTER TABLE `setreminder`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
