-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 04:51 PM
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
(3, 'aaa', '2019-05-04', '', '																																																	jgf																																										', 'fdxgf', 'fxfg', 'fcgf', '3', 1),
(4, 'aaa', '2019-09-05', 'Meeting', '							hgfhg						', 'gfghfg', 'gfhg', 'gfh', '7,3', 0),
(5, 'a', '2019-07-05', 'Farewell', '							g						', 'vghvg', 'ghgv', 'gv', '3', 1),
(6, 'a', '2019-10-05', 'TaskDeadline', '																																			hgfhc																														', 'chgcghcf', 'fchfcgh', 'cfgcfcfg', '7,3', 1),
(7, 'aaa', '2019-09-06', 'Anniversary', '														Good Decision																								', 'test@gmail.com', '6567787', 'redr', '3', 1),
(8, 'Mukulp01s', '2021-10-08', 'Birthday', '							asafa						', 'alexami388@gmail.com', 'hgvgv', 'gv', '7,5', 1),
(9, 'aaa', '2019-09-06', 'Birthday', '																					My best frnd anniversary																		', 'uahmad000@gmail.com', '8875955478', 'gftt gvfhgffh', '7,3', 1),
(11, 'Mukulp01s', '2019-09-06', 'A', 'gtedddfd', 'eddfv', 'fesfs', 'vfgdg', '5', 1),
(12, 'Mukulp01s', '2019-09-06', 'Farewell', 'ghdghdcf', 'gfgcgh', 'gfdfd', 'FDXF', '5', 1);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
