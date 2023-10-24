-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 09:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('compadmin', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(100) NOT NULL,
  `imglink` varchar(100) NOT NULL,
  `About` varchar(400) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `Category`, `imglink`, `About`) VALUES
(1, 'Java ', 'java.png', 'Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.).\r\nIt is one of the most popular programming language in the world. It is easy to learn and simple to use'),
(2, 'C++ Programming', 'c++.jpg', 'C++ is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs.'),
(3, 'Python', 'python.jpg', 'Python was designed for readability, and has some similarities to the English language with influence from mathematics.'),
(4, 'HTML 5', 'html.jpg', 'web devlopment'),
(6, ' Java Script ', 'javascript.png', 'Java works on different platforms (Windows, Mac, Linux, Raspberry.\r\nIt is one of the most popular programming language in the world. It is easy to learn and simple to use'),
(7, 'C Programming', 'c.png', 'C Programming is one of the native programming.');

-- --------------------------------------------------------

--
-- Table structure for table `course details`
--

CREATE TABLE IF NOT EXISTS `course details` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `tutorial` int(11) NOT NULL,
  `website` varchar(400) NOT NULL,
  `price` int(10) NOT NULL,
  `time duration` time NOT NULL,
  `t_quali` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`subid`),
  KEY `Course_id` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `course details`
--

INSERT INTO `course details` (`subid`, `tutorial`, `website`, `price`, `time duration`, `t_quali`, `cid`) VALUES
(1, 1, 'http://abdcfefnjgnkjn.com', 467, '28:00:00', 'Schmedtmann -Web Developer', 6),
(4, 1, 'Udemy', 455, '29:00:00', 'Gunther-Backend developer', 1),
(5, 2, 'Cousrera', 565, '34:00:00', 'Ross G- Website designer, instructor', 1),
(6, 3, 'Codecademy', 503, '31:00:00', 'Richard- Graphic desginere, teacher', 1),
(7, 1, 'Udemy', 455, '27:00:00', 'Brad Schiff, Web Developer ,Instructor', 2),
(8, 2, 'Cousrera', 453, '37:00:00', 'Jason Fedin- Instructor / Software Developer', 2),
(9, 3, 'Codecademy', 567, '40:00:00', 'Arkadiusz- teacher, Expert in Programming', 2),
(10, 1, 'Udemy', 455, '36:00:00', 'Colt Steele Developer and  Instructor', 3),
(11, 2, 'Coursera', 600, '29:00:00', 'Jose Portilla Head of Data Science, Pierian Data I', 3),
(12, 3, 'Codecademy', 399, '51:00:00', 'Paul Roberts Computer programmer and teacher', 3),
(13, 1, 'udemy', 600, '12:00:00', 'Jonas - Web Developer and Teacher', 4),
(14, 2, 'Coursera', 500, '17:00:00', 'Brad Schiff Web Developer', 4),
(15, 3, 'Codecademy', 399, '26:00:00', 'Brad Schiff- Web Developer, instructor', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`tid`, `name`, `image`) VALUES
(1, 'Udemy', 'udemy.jpg'),
(2, 'coursera', 'coursera.jpg'),
(3, 'Codecademy', 'codecademy.jpg'),
(6, 'Tutorial Point', 'tutorialpoint.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `duration` date NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `mobile`, `duration`) VALUES
('qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Ram Das Gupta', 'ram@gmail.com', '9078671234', '2019-11-04');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course details`
--
ALTER TABLE `course details`
  ADD CONSTRAINT `course details_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
