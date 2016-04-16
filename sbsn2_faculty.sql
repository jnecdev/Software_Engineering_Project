-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2013 at 05:29 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sbsn2_faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell_number` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `fname`, `lname`, `mname`, `email`, `cell_number`, `phone_number`) VALUES
('admin', 'admin', 'First', 'Last', 'Administrator', 'student@irasenco.com', '12', '09081234564'),
('admin3', 'admin3', 'Admin', 'Three', 'Middle', '', '1123', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_advisory`
--

CREATE TABLE IF NOT EXISTS `class_advisory` (
  `section` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_advisory`
--

INSERT INTO `class_advisory` (`section`, `fname`, `mname`, `lname`, `subject`, `year`) VALUES
('1-St.Gerald', 'First', 'Middle', 'Last', 'ICS1', '2013-2014'),
('1-St.Giles', 'First', 'Middle', 'Last', 'ICS2', '2013-2014');

-- --------------------------------------------------------

--
-- Table structure for table `cortez_sbsn`
--

CREATE TABLE IF NOT EXISTS `cortez_sbsn` (
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `subject_desc` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cortez_sbsn`
--

INSERT INTO `cortez_sbsn` (`section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `subject`, `subject_desc`) VALUES
('1-St.Giles', '', 0, 9111111, 0, 'First', 'Middle', 'Last', '', 'ICS2', 'Information Technology 2');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(70) NOT NULL,
  `lname` varchar(70) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `subjectdesc` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`username`, `password`, `fname`, `mname`, `lname`, `subject`, `subjectdesc`) VALUES
('garcia', '111111', 'First', 'Middle', 'Last', 'ICS1', 'Information Technology 1'),
('cortez', '123456', 'First', 'Middle', 'Last', 'ICS2', 'Information Technology 2');

-- --------------------------------------------------------

--
-- Table structure for table `garcia_sbsn`
--

CREATE TABLE IF NOT EXISTS `garcia_sbsn` (
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `subject_desc` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garcia_sbsn`
--

INSERT INTO `garcia_sbsn` (`section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `subject`, `subject_desc`) VALUES
('1-St.Gerald', '', 1700, 9111111, 0, 'First', 'Middle', 'Last', '', 'ICS1', 'Information Technology 1');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE IF NOT EXISTS `subject_list` (
  `code` varchar(50) NOT NULL,
  `desc` varchar(70) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `sy` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`code`, `desc`, `teacher`, `year`, `sy`) VALUES
('ICS1', 'Information Technology 1', 'First Middle Last', 1, '2013-2014'),
('ICS2', 'Information Technology 2', 'First Middle Last', 2, '2013-2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
