-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2015 at 01:15 PM
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

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `target_id`, `suitor_id`, `mutual`, `rejecter_id`, `timestamp`, `reject_timestamp`) VALUES
(1, 105, 101, 1, 0, '2015-07-01 00:00:00', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `recordings`
--

INSERT INTO `recordings` (`recording_id`, `speaker_id`, `position`, `length`, `assest_url`, `timestamp`) VALUES
(1, 101, 1, 6, '', '2015-07-01 00:00:00'),
(2, 101, 2, 6, '', '2015-07-28 00:00:00'),
(3, 105, 1, 5, '', '2015-07-16 00:00:00'),
(4, 105, 2, 6, '', '2015-07-29 00:00:00'),
(6, 105, 3, 6, '', '2015-07-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `dob`, `gender`, `interest`, `postcode`, `photo_url`, `range`, `min_age`, `max_age`) VALUES
(1, 'Vanja Sudar', '1990-07-01', 'm', 'm', 'LL9 9LL', '', 10, 16, 24),
(2, 'Elliot Hughes', '1988-07-01', 'm', 'f', 'lL9 9LL', '', 16, 24, 30),
(3, 'Patrick Naish', '1990-07-14', 'm', 'b', 'LL9 9LL', '', 12, 24, 30),
(4, 'Stefano Bellucci', '2015-07-20', 'm', 'm', 'll9 9ll', '', 90, 1, 20),
(5, 'Solveiga', '1995-05-21', 'f', 'm', 'll9 9ll', '', 50, 21, 30),
(6, 'Kevin Lewis', '1994-04-09', 'm', 'f', 'll9 9ll', '', 900, 1, 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
