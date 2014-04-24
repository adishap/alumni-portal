-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2014 at 09:37 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumni portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `admin_Id` varchar(8) NOT NULL,
  `first_Name` varchar(15) NOT NULL,
  `last_Name` varchar(15) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `mail_Id` varchar(35) NOT NULL,
  `phone_No` varchar(15) NOT NULL,
  UNIQUE KEY `admin_Id` (`admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_Id`, `first_Name`, `last_Name`, `designation`, `mail_Id`, `phone_No`) VALUES
('admin-01', 'adisha', 'porwal', 'student', 'porwaladisha@gmail.com', '9406651140');

-- --------------------------------------------------------

--
-- Table structure for table `alum_coll_info`
--

CREATE TABLE IF NOT EXISTS `alum_coll_info` (
  `alum_Id` varchar(8) NOT NULL,
  `course` varchar(12) NOT NULL,
  `last_Qualified_Degree` varchar(8) NOT NULL,
  `year_Of_Passing` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alum_organisational_info`
--

CREATE TABLE IF NOT EXISTS `alum_organisational_info` (
  `alum_Id` varchar(8) NOT NULL,
  `organisation_Name` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alum_personal_info`
--

CREATE TABLE IF NOT EXISTS `alum_personal_info` (
  `alum_Id` varchar(8) NOT NULL,
  `first_Name` text NOT NULL,
  `last_Name` text NOT NULL,
  `gender` text NOT NULL,
  `date_Birth` date NOT NULL,
  `blood_Group` varchar(3) NOT NULL,
  `martial_Status` text NOT NULL,
  `road_Area` varchar(30) NOT NULL,
  `city` text NOT NULL,
  `pin_Code` varchar(10) NOT NULL,
  `country` text NOT NULL,
  `country_Code` varchar(9) NOT NULL,
  `email_Id` varchar(35) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  PRIMARY KEY (`alum_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='personal info of alums';

-- --------------------------------------------------------

--
-- Table structure for table `answer_info`
--

CREATE TABLE IF NOT EXISTS `answer_info` (
  `ans_Id` varchar(6) NOT NULL,
  `ques_Id` varchar(6) NOT NULL,
  `person_Id` varchar(8) NOT NULL,
  `description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `choice_of_alum`
--

CREATE TABLE IF NOT EXISTS `choice_of_alum` (
  `alum_Id` varchar(8) NOT NULL,
  `by_Whom` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doc_info`
--

CREATE TABLE IF NOT EXISTS `doc_info` (
  `alum_Id` varchar(8) NOT NULL,
  `doc_type` text NOT NULL,
  `admin_Ackn` text NOT NULL,
  `date_Requested` date NOT NULL,
  `date_Approved` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ext_acheive`
--

CREATE TABLE IF NOT EXISTS `ext_acheive` (
  `Alum_Id` varchar(8) NOT NULL,
  `achieve` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fac_Id` varchar(8) NOT NULL,
  `first_Name` text NOT NULL,
  `last_Name` text NOT NULL,
  `related_field` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_info`
--

CREATE TABLE IF NOT EXISTS `forum_info` (
  `ques_Id` varchar(6) NOT NULL,
  `person_Id` varchar(8) NOT NULL,
  `ques_Topic` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `last_job`
--

CREATE TABLE IF NOT EXISTS `last_job` (
  `alum_Id` varchar(8) NOT NULL,
  `name_Organisation` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lec_by_alum`
--

CREATE TABLE IF NOT EXISTS `lec_by_alum` (
  `alum_Id` varchar(8) NOT NULL,
  `organised_For` varchar(15) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `person_Id` varchar(8) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`person_Id`, `username`, `password`) VALUES
('admin-01', 'admin-01', 'pass123'),
('alumg12', 'mohitg', 'mohit12'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE IF NOT EXISTS `post_job` (
  `Alum_ID` varchar(8) NOT NULL,
  `organisation` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `contact_Details` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reunions`
--

CREATE TABLE IF NOT EXISTS `reunions` (
  `reunion_Id` varchar(4) NOT NULL,
  `date` date NOT NULL,
  `tine` time NOT NULL,
  `venue` varchar(20) NOT NULL,
  `organised_For` varchar(10) NOT NULL,
  UNIQUE KEY `reunion_Id` (`reunion_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reunion_organisation`
--

CREATE TABLE IF NOT EXISTS `reunion_organisation` (
  `reunion_Id` varchar(4) NOT NULL,
  `Organised_For` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `enroll_No` varchar(8) NOT NULL,
  `first_Name` text NOT NULL,
  `last_Name` text NOT NULL,
  `year_Of_Joining` year(4) NOT NULL,
  `course` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
