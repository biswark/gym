-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 11:12 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE `addmember` (
  `m_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `joindt` varchar(20) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `bloodgp` varchar(5) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`m_id`, `name`, `email`, `mobno`, `birth`, `joindt`, `shift`, `occupation`, `plan`, `sex`, `bloodgp`, `address`) VALUES
(8, 'bibuti', 's@gmail.com', 's@gmail.co', '2018-08-24', '2018-04-05', 'morning', 'e', '8months', 'male', 'o+', '<p>bbsr</p>'),
(9, 'biswa', 'b@gmail.com', '569794658', '1994-08-25', '2018-08-17', 'morning', 'designer', '8months', 'male', 'o+', '<p>bbsr</p>'),
(10, 'john', 'john@gmail.com', '987645033', '2018-08-13', '2018-08-13', 'morning', 'trainer', '8months', 'male', 'AB-', '<p>America</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(22) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `about_us` text NOT NULL,
  `images` varchar(225) NOT NULL DEFAULT '0',
  `permission` int(5) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `email`, `address`, `password`, `about_us`, `images`, `permission`, `status`) VALUES
(1, 'Biswajit Baral', 'admin@gmail.com', 'bbsr', '123', '', '0', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `ins_id` int(5) NOT NULL,
  `ins_name` varchar(20) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `total_quantity` int(5) NOT NULL,
  `p_quantity` int(5) NOT NULL,
  `purchasedt` varchar(20) NOT NULL,
  `m_period` varchar(20) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`ins_id`, `ins_name`, `brand_name`, `total_quantity`, `p_quantity`, `purchasedt`, `m_period`, `images`) VALUES
(23, 'dumbel', 'Rase Yaka', 9, 500, '2018-09-04', '8months', '5b5e04d607fe83.21561715.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(5) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `p_price` int(4) NOT NULL,
  `p_month1` int(5) NOT NULL DEFAULT '0',
  `p_month2` int(5) NOT NULL DEFAULT '0',
  `p_month3` int(5) NOT NULL DEFAULT '0',
  `p_month4` int(5) NOT NULL DEFAULT '0',
  `p_month5` int(5) NOT NULL DEFAULT '0',
  `p_month6` int(5) NOT NULL DEFAULT '0',
  `p_month7` int(5) NOT NULL DEFAULT '0',
  `p_month8` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `m_name`, `p_price`, `p_month1`, `p_month2`, `p_month3`, `p_month4`, `p_month5`, `p_month6`, `p_month7`, `p_month8`) VALUES
(6, 'bibuti', 1000, 200, 0, 0, 0, 0, 0, 0, 0),
(7, 'biswa', 1000, 300, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `v_id` int(5) NOT NULL,
  `v_name` varchar(20) NOT NULL,
  `v_email` varchar(30) NOT NULL,
  `v_mobno` int(5) NOT NULL,
  `enquirydt` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`v_id`, `v_name`, `v_email`, `v_mobno`, `enquirydt`, `reason`, `address`) VALUES
(1, 'mdnjl', 'f@gmail.com', 5569526, '2018-07-20', 'cheackk', '<p>sdsnj</p>'),
(2, 'dinesh', 'di@gmail.com', 987456321, '2018-08-13', 'joining', '<p>Odisha</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmember`
--
ALTER TABLE `addmember`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmember`
--
ALTER TABLE `addmember`
  MODIFY `m_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `ins_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `v_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
