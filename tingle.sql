-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2015 at 09:39 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tingle_dd`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(10) NOT NULL,
  `target_id` int(10) NOT NULL,
  `suitor_id` int(10) NOT NULL,
  `mutual` int(1) NOT NULL,
  `rejecter_id` int(10) NOT NULL,
  `timestamp` datetime NOT NULL,
  `reject_timestamp` datetime NOT NULL,
  PRIMARY KEY (`match_id`),
  UNIQUE KEY `match_id` (`match_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(10) NOT NULL,
  `from_id` int(10) NOT NULL,
  `to_id` int(10) NOT NULL,
  `timestamp` datetime NOT NULL,
  `recording_id` int(10) NOT NULL,
  `marked` int(1) NOT NULL,
  PRIMARY KEY (`message_id`),
  UNIQUE KEY `message_id` (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recordings`
--

CREATE TABLE IF NOT EXISTS `recordings` (
  `recording_id` int(10) NOT NULL,
  `speaker_id` int(10) NOT NULL,
  `position` int(1) NOT NULL,
  `length` int(10) NOT NULL,
  `assest_url` text NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`recording_id`),
  UNIQUE KEY `recording_id` (`recording_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `interest` varchar(10) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `photo_url` text NOT NULL,
  `range` int(5) NOT NULL,
  `min_age` int(5) NOT NULL,
  `max_age` int(5) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
