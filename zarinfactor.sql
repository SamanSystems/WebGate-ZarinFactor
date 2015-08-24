-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2015 at 01:40 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zarinfactor`
--

-- --------------------------------------------------------

--
-- Table structure for table `zf_admin`
--

CREATE TABLE IF NOT EXISTS `zf_admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `zf_admin`
--

INSERT INTO `zf_admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `zf_prices`
--

CREATE TABLE IF NOT EXISTS `zf_prices` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` mediumtext CHARACTER SET utf8 NOT NULL,
  `email` mediumtext CHARACTER SET utf8 NOT NULL,
  `price` mediumtext CHARACTER SET utf8 NOT NULL,
  `desc` mediumtext CHARACTER SET utf8 NOT NULL,
  `session` mediumtext CHARACTER SET utf8 NOT NULL,
  `type` mediumtext CHARACTER SET utf8 NOT NULL,
  `trcode` mediumtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
