-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 10:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slay`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `CONTACT` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `LOGO` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `SPORT` varchar(50) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `APPLIED` varchar(50) NOT NULL,
  `TIME` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`LOGO`, `NAME`, `SPORT`, `POSITION`, `APPLIED`, `TIME`) VALUES
('https://tinyurl.com/bdhuz2hc', 'PURPLE DEATH CADETS', 'VALORANT', 'SENTINEL', '100', '3:12:56'),
('https://tinyurl.com/bdhuz2hc', 'PURPLE DEATH CADETS', 'VALORANT', 'SENTINEL', '100', '3:12:56'),
('https://tinyurl.com/2p8399fc', 'RAKKTA', 'LEAGUE OF LEGENDS', 'TOP LANER', '564', '1:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `NAME` varchar(50) NOT NULL,
  `AGE` int(11) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `NATIONALITY` varchar(50) NOT NULL,
  `HEADSHOT` varchar(50) NOT NULL,
  `GAME1` varchar(50) NOT NULL,
  `POSITION1` varchar(50) NOT NULL,
  `LINK1` varchar(50) NOT NULL,
  `GAME2` varchar(50) NOT NULL,
  `POSTION2` varchar(50) NOT NULL,
  `LINK2` varchar(50) NOT NULL,
  `CONTACT` varchar(50) NOT NULL,
  `DISCORD` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LANGUAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
