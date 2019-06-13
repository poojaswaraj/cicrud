-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 11:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cicrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`) VALUES
(3, 'Anuj', 'kumar', 'phpgurukul@gmail.com', '0123456789', 'Test Addresss', '2018-12-02 09:11:01'),
(4, 'Test', 'test', 'test@gmail.com', '0987654321', 'New Delhi India', '2018-12-02 09:14:54'),
(7, 'Demo', 'User', 'demouser@domain.com', '0123456785', 'New Delhi India', '2018-12-02 18:27:29'),
(8, 'fhb', 'bvb', 'abc@gmail.com', '7698976876', 'gf', '2019-05-04 07:05:51'),
(9, 'pooja', 'khambe', 'pooja.ebc2018@gmail.com', '8767878988', 'pune', '2019-05-20 05:16:04'),
(10, 'rohan', 'kadam', 'pooja.ebc2018@gmail.com', '8767878992', 'pune', '2019-05-20 05:17:45'),
(11, 'sad', 'dasd', 'pooja@e-bc.in', '8686655676', 'pune', '2019-05-20 05:19:24'),
(12, 'fgdf', 'gfhh', 'pooja@e-bc.in', '9876545676', 'pune', '2019-05-20 05:20:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
