-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2018 at 05:32 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `price` float(7,2) NOT NULL,
  `author` varchar(50) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `title`, `price`, `author`, `user`) VALUES
(62, 'Computer System Architecture', 584.00, 'M. Mano', 'du.dduc.ajay@gmail.com'),
(63, 'The Java Programming Language', 496.00, ' James Gosling', 'du.dduc.ajay@gmail.com'),
(64, ' Discrete mathematics', 395.00, 'C.L. Liu ', 'du.dduc.ajay@gmail.com'),
(65, 'Data Structures and algorithm in C++', 499.00, 'Adam Drozdek', 'du.dduc.ajay@gmail.com'),
(66, 'Operating Systems', 495.00, '. A Silberschatz', 'du.dduc.ajay@gmail.com'),
(67, 'Data Communications and Networking', 549.00, 'Tanenbaum', 'du.dduc.ajay@gmail.com'),
(68, ' Design and Analysis techniques of Algorithms', 536.00, 'Sarabasse', 'du.dduc.ajay@gmail.com'),
(69, 'Software Engineering: A Practitionerâ€™s Approach', 490.00, 'Pressman', 'du.dduc.ajay@gmail.com'),
(70, ' Fundamentals of Database Systems', 665.00, 'S.B. Navathe', 'du.dduc.ajay@gmail.com'),
(71, 'abc', 234.00, 'xtz', 'ddu123@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
