-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 25, 2020 at 07:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `regdetails`
--

DROP TABLE IF EXISTS `regdetails`;
CREATE TABLE IF NOT EXISTS `regdetails` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdetails`
--

INSERT INTO `regdetails` (`name`, `password`) VALUES
('abc', '123'),
('q', '1'),
('kk', 'utfuf'),
('thilina', 's'),
('aaaaa', 'a'),
('a', '1'),
('aaaa', 'a'),
('t', '1');

-- --------------------------------------------------------

--
-- Table structure for table `regevents1`
--

DROP TABLE IF EXISTS `regevents1`;
CREATE TABLE IF NOT EXISTS `regevents1` (
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regevents1`
--

INSERT INTO `regevents1` (`name`, `date`, `time`, `venue`, `category`, `img`) VALUES
('Angluar Workshop', '2019-07-22', '09:00:00', 'SOC 002', 'Co-Curricular', 'uploads/1.png'),
('OWASP', '2019-07-10', '09:30:00', 'SOC 002', 'Co-Curricular', 'uploads/2.jpg'),
('C# Revision', '2019-08-24', '09:00:00', 'SOC 002', 'Kuppi', 'uploads/IMG-20190710-WA0031.jpg'),
('18.2 vs 19.1 Football Match', '2019-07-18', '15:00:00', 'NSBM Ground', 'Sports', 'uploads/IMG-20190618-WA0000.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
