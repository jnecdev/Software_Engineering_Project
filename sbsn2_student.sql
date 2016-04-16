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
-- Database: `sbsn2_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `2_admin`
--

CREATE TABLE IF NOT EXISTS `2_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `2_dis`
--

CREATE TABLE IF NOT EXISTS `2_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `2_notes`
--

CREATE TABLE IF NOT EXISTS `2_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `2_sbsn`
--

CREATE TABLE IF NOT EXISTS `2_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2_sbsn`
--

INSERT INTO `2_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('2', '1-St.Gerald', '', 0, 123, 0, 'b', 'B', 'Base', '', '2013-08-12', '', '', '', '', '1', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `2_subjects`
--

CREATE TABLE IF NOT EXISTS `2_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2_subjects`
--

INSERT INTO `2_subjects` (`subjects`, `teacher`, `subject_name`) VALUES
('1: 1', '1 1 1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `3_admin`
--

CREATE TABLE IF NOT EXISTS `3_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `3_dis`
--

CREATE TABLE IF NOT EXISTS `3_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `3_notes`
--

CREATE TABLE IF NOT EXISTS `3_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `3_sbsn`
--

CREATE TABLE IF NOT EXISTS `3_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3_sbsn`
--

INSERT INTO `3_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('3', '1-St.Gerald', '', 0, 1, 0, 'Three', 'Three', 'Three', '', '2013-08-04', '', '', '', '', '1', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `3_subjects`
--

CREATE TABLE IF NOT EXISTS `3_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4_admin`
--

CREATE TABLE IF NOT EXISTS `4_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `4_dis`
--

CREATE TABLE IF NOT EXISTS `4_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `4_notes`
--

CREATE TABLE IF NOT EXISTS `4_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `4_sbsn`
--

CREATE TABLE IF NOT EXISTS `4_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4_sbsn`
--

INSERT INTO `4_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('4', '1-St.Gerald', '', 0, 1, 0, 'Four', 'Four', 'Four', '', '2013-08-26', '', '', '', '', '1', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `4_subjects`
--

CREATE TABLE IF NOT EXISTS `4_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `5_admin`
--

CREATE TABLE IF NOT EXISTS `5_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `5_dis`
--

CREATE TABLE IF NOT EXISTS `5_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `5_notes`
--

CREATE TABLE IF NOT EXISTS `5_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `5_sbsn`
--

CREATE TABLE IF NOT EXISTS `5_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5_sbsn`
--

INSERT INTO `5_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('5', '1-St.Gerald', '', 0, 1, 0, 'Five', 'Five', 'Five', '', '2013-08-26', '', '', '', '', '1', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `5_subjects`
--

CREATE TABLE IF NOT EXISTS `5_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6_admin`
--

CREATE TABLE IF NOT EXISTS `6_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `6_dis`
--

CREATE TABLE IF NOT EXISTS `6_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `6_notes`
--

CREATE TABLE IF NOT EXISTS `6_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `6_sbsn`
--

CREATE TABLE IF NOT EXISTS `6_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6_sbsn`
--

INSERT INTO `6_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('6', '1-St.Gerald', '', 0, 6, 0, '6', '6', '6', '', '2013-08-26', '', '', '', '', '6', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `6_subjects`
--

CREATE TABLE IF NOT EXISTS `6_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7_admin`
--

CREATE TABLE IF NOT EXISTS `7_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `7_dis`
--

CREATE TABLE IF NOT EXISTS `7_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `7_notes`
--

CREATE TABLE IF NOT EXISTS `7_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `7_sbsn`
--

CREATE TABLE IF NOT EXISTS `7_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7_sbsn`
--

INSERT INTO `7_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('7', '1-St.Gerald', '', 0, 7, 0, '7', '7', '7', '', '2013-08-12', '', '', '', '', '7', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `7_subjects`
--

CREATE TABLE IF NOT EXISTS `7_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `8_admin`
--

CREATE TABLE IF NOT EXISTS `8_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `8_dis`
--

CREATE TABLE IF NOT EXISTS `8_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `8_notes`
--

CREATE TABLE IF NOT EXISTS `8_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `8_sbsn`
--

CREATE TABLE IF NOT EXISTS `8_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8_sbsn`
--

INSERT INTO `8_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('8', '1-St.Gerald', '', 0, 8, 0, '8', '8', '8', '', '2013-08-26', '', '', '', '', '8', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `8_subjects`
--

CREATE TABLE IF NOT EXISTS `8_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `9_admin`
--

CREATE TABLE IF NOT EXISTS `9_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `9_dis`
--

CREATE TABLE IF NOT EXISTS `9_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `9_notes`
--

CREATE TABLE IF NOT EXISTS `9_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `9_sbsn`
--

CREATE TABLE IF NOT EXISTS `9_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9_sbsn`
--

INSERT INTO `9_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('9', '1-St.Gerald', '', 0, 9, 0, '9', '9', '9', '', '2013-08-05', '', '', '', '', '9', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `9_subjects`
--

CREATE TABLE IF NOT EXISTS `9_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `10_admin`
--

CREATE TABLE IF NOT EXISTS `10_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `10_dis`
--

CREATE TABLE IF NOT EXISTS `10_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `10_notes`
--

CREATE TABLE IF NOT EXISTS `10_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `10_sbsn`
--

CREATE TABLE IF NOT EXISTS `10_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `10_sbsn`
--

INSERT INTO `10_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('10', '1-St.Gerald', '', 0, 10, 0, '10', '10', '10', '', '2013-08-26', '', '', '', '', '10', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `10_subjects`
--

CREATE TABLE IF NOT EXISTS `10_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `11_admin`
--

CREATE TABLE IF NOT EXISTS `11_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `11_dis`
--

CREATE TABLE IF NOT EXISTS `11_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `11_notes`
--

CREATE TABLE IF NOT EXISTS `11_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `11_sbsn`
--

CREATE TABLE IF NOT EXISTS `11_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11_sbsn`
--

INSERT INTO `11_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('11', '1-St.Gerald', '', 0, 11, 0, '11', '11', '11', '', '2013-08-28', '', '', '', '', '11', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `11_subjects`
--

CREATE TABLE IF NOT EXISTS `11_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12_admin`
--

CREATE TABLE IF NOT EXISTS `12_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `12_dis`
--

CREATE TABLE IF NOT EXISTS `12_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `12_notes`
--

CREATE TABLE IF NOT EXISTS `12_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `12_sbsn`
--

CREATE TABLE IF NOT EXISTS `12_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12_sbsn`
--

INSERT INTO `12_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('12', '2-St.Hundfrid', '', 0, 1, 0, 'Twelve', 'Pesos', 'Only', '', '2013-08-26', '', '', '', '', '1', 'Jr.');

-- --------------------------------------------------------

--
-- Table structure for table `12_subjects`
--

CREATE TABLE IF NOT EXISTS `12_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `13_admin`
--

CREATE TABLE IF NOT EXISTS `13_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `13_dis`
--

CREATE TABLE IF NOT EXISTS `13_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `13_notes`
--

CREATE TABLE IF NOT EXISTS `13_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `13_sbsn`
--

CREATE TABLE IF NOT EXISTS `13_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `13_sbsn`
--

INSERT INTO `13_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('13', '3-St.James', '', 0, 1, 0, '13', '13', '13', '', '2013-08-27', '', '', '', '', '1', 'IV');

-- --------------------------------------------------------

--
-- Table structure for table `13_subjects`
--

CREATE TABLE IF NOT EXISTS `13_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `14_admin`
--

CREATE TABLE IF NOT EXISTS `14_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `14_dis`
--

CREATE TABLE IF NOT EXISTS `14_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `14_notes`
--

CREATE TABLE IF NOT EXISTS `14_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `14_sbsn`
--

CREATE TABLE IF NOT EXISTS `14_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `father` varchar(150) NOT NULL,
  `mother` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `14_sbsn`
--

INSERT INTO `14_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `father`, `mother`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('14', '4-St.Lawrence', '', 0, 1, 0, '14', '14', '14', '', '2013-08-26', '', '', '', '', '-1', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `14_subjects`
--

CREATE TABLE IF NOT EXISTS `14_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2010020_admin`
--

CREATE TABLE IF NOT EXISTS `2010020_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `2010020_dis`
--

CREATE TABLE IF NOT EXISTS `2010020_dis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `2010020_notes`
--

CREATE TABLE IF NOT EXISTS `2010020_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `2010020_sbsn`
--

CREATE TABLE IF NOT EXISTS `2010020_sbsn` (
  `username` varchar(20) DEFAULT NULL,
  `section` varchar(30) NOT NULL,
  `address` varchar(75) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `cell_number` int(25) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `enroll_date` date NOT NULL,
  `cperson` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `emergency` varchar(35) NOT NULL,
  `suffix` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2010020_sbsn`
--

INSERT INTO `2010020_sbsn` (`username`, `section`, `address`, `zip_code`, `phone_number`, `cell_number`, `fname`, `mname`, `lname`, `email`, `enroll_date`, `cperson`, `nationality`, `religion`, `emergency`, `suffix`) VALUES
('2010020', '', '123', 0, 911111, 901, 'First', 'Middle', 'Last', '', '2013-09-09', 'LOL', '', '', '09192010201', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `2010020_subjects`
--

CREATE TABLE IF NOT EXISTS `2010020_subjects` (
  `subjects` varchar(30) NOT NULL,
  `teacher` varchar(35) NOT NULL,
  `subject_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2010020_subjects`
--

INSERT INTO `2010020_subjects` (`subjects`, `teacher`, `subject_name`) VALUES
('ICS2: Information Technology 2', 'First Middle Last', 'ICS2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(70) NOT NULL,
  `lname` varchar(70) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `password`, `fname`, `mname`, `lname`, `section`) VALUES
('1', '123456', 'f', 'f', 'f', '1-St.Gerald'),
('2', '123456', 'b', 'B', 'Base', '1-St.Gerald'),
('3', '123456', 'Three', 'Three', 'Three', '1-St.Gerald'),
('4', '123456', 'Four', 'Four', 'Four', '1-St.Gerald'),
('5', '123456', 'Five', 'Five', 'Five', '1-St.Gerald'),
('6', '111111', '6', '6', '6', '1-St.Gerald'),
('7', '7777777', '7', '7', '7', '1-St.Gerald'),
('8', '888888', '8', '8', '8', '1-St.Gerald'),
('9', '999999', '9', '9', '9', '1-St.Gerald'),
('10', '101010', '10', '10', '10', '1-St.Gerald'),
('11', '111111', '11', '11', '11', '1-St.Gerald'),
('12', '121212', 'Twelve', 'Pesos', 'Only', '2-St.Hundfrid'),
('13', '131313', '13', '13', '13', '3-St.James'),
('14', '141414', '14', '14', '14', '4-St.Lawrence'),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('15', '', '', '', '', ''),
('16', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('90', '', '', '', '', ''),
('100', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('100', '', '', '', '', ''),
('200', '', '', '', '', ''),
('2010020', '111111', 'First', 'Middle', 'Lasr', '1-St.Giles');

-- --------------------------------------------------------

--
-- Table structure for table `student_sections`
--

CREATE TABLE IF NOT EXISTS `student_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(50) NOT NULL,
  `stud_num` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
