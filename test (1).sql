-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2021 at 09:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

CREATE TABLE `chatbox` (
  `name` varchar(150) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbox`
--

INSERT INTO `chatbox` (`name`, `message`) VALUES
('aditya', 'khatri'),
('aditya', 'khatri'),
('try3', 'Aditya khatri');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `compID` bigint(20) NOT NULL,
  `custId` varchar(50) NOT NULL,
  `complain` varchar(200) NOT NULL,
  `topic` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`compID`, `custId`, `complain`, `topic`, `role`) VALUES
(1, '3', 'hi', 'Wash & Dry', 'User'),
(2, '3', 'hi', 'Dry Cleaning', 'User'),
(3, '4', 'hi', 'Dry Cleaning', 'Visitor'),
(5, '3', 'ji', 'Wash & Dry,Dry Cleaning,,', 'User'),
(6, '4', 'hi', 'Dry Cleaning, Iron & Fold', 'Visitor'),
(7, '4', 'visitor', 'Wash & Dry', 'Visitor'),
(9, '4', 'good', 'Wash & Dry', 'Visitor');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fullname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneNumber` varchar(13) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fullname`, `email`, `phoneNumber`, `message`) VALUES
('aditya', 'adkhatri22@gmail.com', '6824148292', 'Hello'),
('ad', 'ad@gmail.com', '6824148292', 'cloud'),
('ad', 'ad@gmail.com', '6824148292', 'cloud'),
('images', 'ad@gmail.com', '6824148292', 'cloud'),
('images', 'ad@gmail.com', '6824148292', 'cloud'),
('aditya', 'ad@gmail.com', 'ad', 'ad'),
('aditya', 'ad@gmail.com', '6824148292', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feebackID` bigint(20) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `rating` int(1) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feebackID`, `feedback`, `rating`, `userId`, `role`) VALUES
(1, 'Good', 5, 3, 'User'),
(2, 'Nice', 5, 4, 'Visitor'),
(6, 'improve\r\n', 3, 4, 'Visitor');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `custType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstName`, `lastName`, `dob`, `address`, `number`, `email`, `password`, `custType`) VALUES
(1, 'Aditya', 'Khatri', '1998-09-09', '513 Summit Avenue\r\nApt 279', '6824148292', 'admin@gmail.com', 'admin', 'Admin'),
(2, 'Aditya M', 'Khatri', '1998-09-09', '513 Summit Avenue\r\nApt 279', '6824148292', 'manager@gmail.com', 'manager', 'Manager'),
(3, 'Aditya U', 'Khatri', '1998-09-09', '513 Summit Avenue\r\nApt 279', '6824148292', 'user@gmail.com', 'user', 'User'),
(4, 'Aditya V', 'Khatri', '1997-09-09', '513 Summit Avenue\r\nApt 279', '6824148292', 'visitor@gmail.com', 'visitor', 'Visitor'),
(5, 'Aditya', 'Khatri', '2021-11-23', '513 Summit Avenue\r\nApt 279', '6824148292', 'ad@gmail.com', 'Ad123456789', 'Visitor'),
(6, 'Aditya', 'Khatri', '2021-11-23', '513 Summit Avenue\r\nApt 279', '6824148292', 'ad1@gmail.com', 'Ad123456789', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `machineinfo`
--

CREATE TABLE `machineinfo` (
  `machineId` varchar(50) NOT NULL,
  `machineType` varchar(50) NOT NULL,
  `workingCondition` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machineinfo`
--

INSERT INTO `machineinfo` (`machineId`, `machineType`, `workingCondition`) VALUES
('10', 'Dryer', 'Active'),
('110', 'Iron', 'Active'),
('150', 'Dryer', 'Active'),
('20', 'Dryer', 'Active'),
('25', 'Washer', 'Active'),
('27', 'Dryer', 'OUT OF ORDER'),
('50', 'Washer', 'Active'),
('520', 'Iron', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `placeorder`
--

CREATE TABLE `placeorder` (
  `orderID` int(11) NOT NULL,
  `custId` int(11) NOT NULL,
  `session` varchar(30) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL,
  `bill` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placeorder`
--

INSERT INTO `placeorder` (`orderID`, `custId`, `session`, `service`, `date`, `username`, `role`, `bill`) VALUES
(3, 2, 'Pickup', 'Washer and Dryer, Dry Cleaning, Leather, fur & suede', '2020-11-30', 'Aditya M Khatri', 'Manager', 22.5),
(7, 3, 'Pickup and Drop off', 'Washer and Dryer', '2021-11-30', 'Aditya U Khatri', 'User', 12.2),
(8, 4, ' Self-Service', 'Washer and Dryer', '2021-12-10', 'Aditya V Khatri', 'Visitor', 5.05),
(9, 3, 'Pickup', 'Washer and Dryer, Dry Cleaning, Iron and Fold, Leather, fur & suede', '2021-11-22', 'Aditya U Khatri', 'User', 40.32),
(10, 3, 'Pickup', 'Washer and Dryer, Dry Cleaning, Iron and Fold, Leather, fur & suede', '2021-11-22', 'Aditya U Khatri', 'User', 40.32),
(11, 3, 'Pickup', 'Washer and Dryer, Dry Cleaning, Iron and Fold, Leather, fur & suede', '2021-11-22', 'Aditya U Khatri', 'User', 40.32),
(16, 4, 'Self-Service', 'Washer and Dryer, Dry Cleaning', '2021-12-08', 'Aditya V Khatri', 'Visitor', 17.92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`compID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feebackID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machineinfo`
--
ALTER TABLE `machineinfo`
  ADD PRIMARY KEY (`machineId`);

--
-- Indexes for table `placeorder`
--
ALTER TABLE `placeorder`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `compID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feebackID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `placeorder`
--
ALTER TABLE `placeorder`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
