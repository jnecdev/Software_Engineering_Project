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
-- Database: `sbsn2_subjects`
--

-- --------------------------------------------------------

--
-- Table structure for table `1_1_chat`
--

CREATE TABLE IF NOT EXISTS `1_1_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  `post_by` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_1_files`
--

CREATE TABLE IF NOT EXISTS `1_1_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(70) NOT NULL,
  `file` blob,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_1_grades`
--

CREATE TABLE IF NOT EXISTS `1_1_grades` (
  `group_id` int(11) NOT NULL,
  `group` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `score` float NOT NULL,
  `overall` float NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_2_chat`
--

CREATE TABLE IF NOT EXISTS `1_2_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  `post_by` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_2_files`
--

CREATE TABLE IF NOT EXISTS `1_2_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(70) NOT NULL,
  `file` blob,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_2_grades`
--

CREATE TABLE IF NOT EXISTS `1_2_grades` (
  `group_id` int(11) NOT NULL,
  `group` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `score` float NOT NULL,
  `overall` float NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_announcement`
--

CREATE TABLE IF NOT EXISTS `1_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_compute`
--

CREATE TABLE IF NOT EXISTS `1_compute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(50) NOT NULL,
  `percent` double NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `desc` (`desc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_shared_files`
--

CREATE TABLE IF NOT EXISTS `1_shared_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  `content` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1_student_list`
--

CREATE TABLE IF NOT EXISTS `1_student_list` (
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_student_list`
--

INSERT INTO `1_student_list` (`fname`, `mname`, `lname`, `username`) VALUES
('f', 'f', 'f', '1'),
('b', 'B', 'Base', '2');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `main` text NOT NULL,
  `expire` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `post_date`, `main`, `expire`) VALUES
(5, '2013-08-28', 'Hi all!', '2013-11-26'),
(7, '2013-08-28', 'Hi :3', '2013-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `ics1_1_chat`
--

CREATE TABLE IF NOT EXISTS `ics1_1_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  `post_by` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_1_files`
--

CREATE TABLE IF NOT EXISTS `ics1_1_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(70) NOT NULL,
  `file` blob,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_1_grades`
--

CREATE TABLE IF NOT EXISTS `ics1_1_grades` (
  `group_id` int(11) NOT NULL,
  `group` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `score` float NOT NULL,
  `overall` float NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_1000_chat`
--

CREATE TABLE IF NOT EXISTS `ics1_1000_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  `post_by` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_1000_files`
--

CREATE TABLE IF NOT EXISTS `ics1_1000_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(70) NOT NULL,
  `file` blob,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_1000_grades`
--

CREATE TABLE IF NOT EXISTS `ics1_1000_grades` (
  `group` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `score` float NOT NULL,
  `overall` float NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_announcement`
--

CREATE TABLE IF NOT EXISTS `ics1_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_compute`
--

CREATE TABLE IF NOT EXISTS `ics1_compute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(50) NOT NULL,
  `percent` double NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `desc` (`desc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ics1_compute`
--

INSERT INTO `ics1_compute` (`id`, `desc`, `percent`, `group_id`) VALUES
(3, 'Quiz', 25, 1),
(4, 'Assignments', 25, 2),
(5, 'Big', 50, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ics1_shared_files`
--

CREATE TABLE IF NOT EXISTS `ics1_shared_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  `content` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics1_student_list`
--

CREATE TABLE IF NOT EXISTS `ics1_student_list` (
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ics1_student_list`
--

INSERT INTO `ics1_student_list` (`fname`, `mname`, `lname`, `username`) VALUES
('f', 'f', 'f', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ics2_2010020_chat`
--

CREATE TABLE IF NOT EXISTS `ics2_2010020_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  `post_by` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics2_2010020_files`
--

CREATE TABLE IF NOT EXISTS `ics2_2010020_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(70) NOT NULL,
  `file` blob,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics2_2010020_grades`
--

CREATE TABLE IF NOT EXISTS `ics2_2010020_grades` (
  `group_id` int(11) NOT NULL,
  `group` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `score` float NOT NULL,
  `overall` float NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics2_announcement`
--

CREATE TABLE IF NOT EXISTS `ics2_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics2_compute`
--

CREATE TABLE IF NOT EXISTS `ics2_compute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(50) NOT NULL,
  `percent` double NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `desc` (`desc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics2_shared_files`
--

CREATE TABLE IF NOT EXISTS `ics2_shared_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  `content` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ics2_student_list`
--

CREATE TABLE IF NOT EXISTS `ics2_student_list` (
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ics2_student_list`
--

INSERT INTO `ics2_student_list` (`fname`, `mname`, `lname`, `username`) VALUES
('First', 'Middle', 'Lasr', '2010020');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
