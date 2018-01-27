-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2012 at 03:49 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crystalclear12`
--

-- --------------------------------------------------------

--
-- Table structure for table `use_reco`
--

CREATE TABLE IF NOT EXISTS `use_reco` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `college` varchar(255) NOT NULL,
  `nick` varchar(255) DEFAULT NULL,
  `uid` varchar(255) NOT NULL DEFAULT 'LoggedOut',
  `ip` varchar(16) NOT NULL DEFAULT '0',
  `lvl` int(3) NOT NULL DEFAULT '0',
  `ftime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl1` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl6` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl7` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl8` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl9` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl10` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl11` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl12` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl13` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl14` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl15` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl16` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl17` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl18` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl19` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl20` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl21` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl22` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl23` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl24` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl25` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl26` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastclear` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `emailhash` varchar(255) NOT NULL,
  `passhash` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `emailhash` (`emailhash`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `use_reco`
--

