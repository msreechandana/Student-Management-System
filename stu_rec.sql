-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 03:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu_rec`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Name` varchar(30) DEFAULT NULL,
  `Regno` varchar(10) DEFAULT NULL,
  `Course` varchar(20) DEFAULT NULL,
  `Ccode` varchar(10) DEFAULT NULL,
  `cat1` float DEFAULT NULL,
  `cat2` float DEFAULT NULL,
  `da1` float DEFAULT NULL,
  `da2` float DEFAULT NULL,
  `quiz` float DEFAULT NULL,
  `int_marks` float DEFAULT NULL,
  `note` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Name`, `Regno`, `Course`, `Ccode`, `cat1`, `cat2`, `da1`, `da2`, `quiz`, `int_marks`, `note`) VALUES
('Sree', '20BCE0001', 'Web Programming', 'CSE3002', 45, 40, 8, 9, 7, 49.5, NULL),
('Vara', '20BCE0002', 'Web Programming', 'CSE3002', 23, 38, 5, 8, 3, 34.3, 'Slow learner'),
('Chandana', '20BCE0003', 'Software Engineering', 'CSE3001', 24, 30, 9, 8, 4, 37.2, 'Slow learner'),
('Sreeja', '20BCE0004', 'Web Programming', 'CSE3002', 10, 15, 3, 5, 6, 21.5, 'Slow learner'),
('Vijaya', '20BCE0006', 'Software Engineering', 'CSE3001', 30, 28, 8, 7, 5, 37.4, NULL),
('Sree', '20BCE0001', 'Software Engineering', 'CSE3001', 45, 40, 10, 9, 8, 52.5, NULL),
('Venu', '20BCE0005', 'Web Programming', 'CSE3002', 15, 18, 5, 3, 6, 23.9, 'Slow learner'),
('Vara', '20BCE0002', 'Java', 'CSE3004', 20, 18, 6, 8, 5, 30.4, 'Slow learner'),
('Vijaya', '20BCE0006', 'Java', 'CSE3004', 48, 45, 10, 8, 9, 54.9, NULL),
('Venu', '20BCE0005', 'Software Engineering', 'CSE3001', 32, 12, 4, 6, 3, 26.2, 'Slow learner'),
('Vara', '20BCE0002', 'Software Engineering', 'CSE3001', 5, 5, 3, 4, 3, 13, 'Slow learner'),
('Sree', '20BCE0001', 'Data Structures', 'CSE3005', 28, 24, 6, 4, 2, 27.6, 'Slow learner'),
('Venu', 'CSE0005', 'Operating System', 'CSE3003', 32, 43, 8, 7, 6, 43.5, NULL),
('Sreeja', '20BCE0004', 'Operating System', 'CSE3003', 12, 5, 3, 4, 3, 15.1, 'Slow learner'),
('Vijaya', '20BCE0006', 'Data Structures', 'CSE3005', 40, 35, 7, 8, 8, 45.5, NULL),
('Chandana', '20BCE0003', 'Operating System', 'CSE3003', 28, 18, 9, 8, 7, 37.8, NULL),
('Vara', '20BCE0002', 'Data Structures', 'CSE3005', 35, 32, 5, 6, 8, 39.1, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
