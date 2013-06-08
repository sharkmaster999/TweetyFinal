-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2013 at 10:58 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tweety`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactNum` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailaddress` (`emailaddress`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `lastName`, `firstName`, `address`, `contactNum`, `gender`, `age`, `username`, `emailaddress`, `password`, `status`) VALUES
(35, 'Lopez', 'Mark Anthony', 'Isabel', '09486145546', 'male', 17, 'lopezmark143', 'olympus_guardian13@yahoo.com', 'mark', 0),
(42, '', '', '', '', '', 0, '', 'e@yahoo.com', 'e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE IF NOT EXISTS `following` (
  `from` varchar(30) NOT NULL,
  `to` varchar(30) NOT NULL,
  KEY `from` (`from`),
  KEY `to` (`to`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `following`
--


-- --------------------------------------------------------

--
-- Table structure for table `microtweets`
--

CREATE TABLE IF NOT EXISTS `microtweets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contents` longtext NOT NULL,
  `emailadd` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emailadd` (`emailadd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `microtweets`
--

INSERT INTO `microtweets` (`id`, `contents`, `emailadd`) VALUES
(31, 'huhuh', 'olympus_guardian13@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `other_posted`
--

CREATE TABLE IF NOT EXISTS `other_posted` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `post_contents` mediumtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `email` (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `other_posted`
--

INSERT INTO `other_posted` (`p_id`, `id`, `post_contents`, `email`, `status`) VALUES
(20, 31, 'ahehehe', 'olympus_guardian13@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `images`, `email`) VALUES
(56, 'uploaded_images/ako.jpg', 'olympus_guardian13@yahoo.com'),
(62, 'uploaded_images/ako.jpg', 'e@yahoo.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `following`
--
ALTER TABLE `following`
  ADD CONSTRAINT `following_ibfk_1` FOREIGN KEY (`from`) REFERENCES `accounts` (`emailaddress`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `following_ibfk_2` FOREIGN KEY (`to`) REFERENCES `accounts` (`emailaddress`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `microtweets`
--
ALTER TABLE `microtweets`
  ADD CONSTRAINT `microtweets_ibfk_1` FOREIGN KEY (`emailadd`) REFERENCES `accounts` (`emailaddress`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_posted`
--
ALTER TABLE `other_posted`
  ADD CONSTRAINT `other_posted_ibfk_1` FOREIGN KEY (`email`) REFERENCES `accounts` (`emailaddress`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `other_posted_ibfk_2` FOREIGN KEY (`id`) REFERENCES `microtweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`email`) REFERENCES `accounts` (`emailaddress`) ON DELETE CASCADE ON UPDATE CASCADE;
