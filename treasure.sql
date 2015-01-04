-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2015 at 01:26 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `treasure`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qno` int(11) DEFAULT NULL,
  `qname` varchar(30) DEFAULT NULL,
  `ans` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qno`, `qname`, `ans`) VALUES
(1, 'sneha', 'mohan'),
(2, 'sreyas', 'mohan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `questionReached` int(11) DEFAULT '0',
  `timeofsubmission` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `phone`, `questionReached`, `timeofsubmission`) VALUES
(1, 'sreyas', 'coolsreyas@gmail.com', '123', 0, 1420353065),
(3, 'test', 'coolsreyas@gmail.com', '02', 0, 1420353474),
(4, 'test', 'coolsreyas@gmail.com', '123', 0, 1420353504),
(7, 'sreyas', 'coolsreyas@gmail.com', '9445', 2, 1420355528),
(8, 'PK', 'pk@gm.cc', '987456123', 2, 1420356126),
(9, 'chicha', 'harinathreddygurram@gmail.com', '9003298909', 2, 1420356266),
(10, 'nikhil', 'nid@gafsn', '9', 1, 1420356546),
(11, 'testnew', 'coolsreyas@gmail.com', '1', 2, 1420357892);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
