-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2017 at 10:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `User_detail`
--

CREATE TABLE `User_detail` (
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Email_Id` varchar(20) DEFAULT NULL,
  `Contact` int(11) DEFAULT NULL,
  `Work` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `PinCode` int(11) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_detail`
--

INSERT INTO `User_detail` (`Firstname`, `Lastname`, `Email_Id`, `Contact`, `Work`, `Address`, `City`, `PinCode`, `State`, `UserName`, `Password`) VALUES
('varun', 'rahul', 'varun@gmail.com', 2147483647, 'Student', 'Hall-3 NIT Durgapur', 'Durgapur', 713209, 'West Bengal', 'varun', '12345'),
('varun', 'rahul', 'varun@gmail.com', 2147483647, 'Student', 'Hall-3 NIT Durgapur', 'Durgapur', 713209, 'West Bengal', 'varunr', '12345'),
('varun', 'rahul', 'varun@gmail.com', 2147483647, 'Student', 'Hall-3 NIT Durgapur', 'Durgapur', 713209, 'West Bengal', 'varunrah', '12345'),
('varun', 'rahul', 'varun@gmail.com', 2147483647, 'Student', 'Hall-3 NIT Durgapur', 'Durgapur', 713209, 'West Bengal', 'varunrahu', '12345'),
('varun', 'rahul', 'varun@gmail.com', 2147483647, 'Student', 'Hall-3 NIT Durgapur', 'Durgapur', 713209, 'West Bengal', 'varunrahul', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User_detail`
--
ALTER TABLE `User_detail`
  ADD PRIMARY KEY (`UserName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
