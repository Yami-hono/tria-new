-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 12:03 AM
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
-- Database: `quizdbase`
--
CREATE DATABASE IF NOT EXISTS `quizdbase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `quizdbase`;

-- --------------------------------------------------------

--
-- Table structure for table `abraanswers`
--

DROP TABLE IF EXISTS `abraanswers`;
CREATE TABLE `abraanswers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abraanswers`
--

INSERT INTO `abraanswers` (`aid`, `answer`, `ans_id`) VALUES
(3, 'game', 1),
(4, 'Shopping  window', 1),
(5, 'quiz', 1),
(6, 'meeting', 1),
(7, 'For learning', 2),
(8, 'For a project', 2),
(9, 'for a gameshow', 2),
(10, 'for money', 2),
(11, '', 0),
(12, '', 0),
(13, '', 0),
(14, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `abraquestions`
--

DROP TABLE IF EXISTS `abraquestions`;
CREATE TABLE `abraquestions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abraquestions`
--

INSERT INTO `abraquestions` (`qid`, `question`, `ans_id`) VALUES
(1, 'what is this?', 3),
(2, 'Why am I doing this?', 6),
(3, '', -4);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'System calls', 1),
(2, 'API', 1),
(3, 'Library', 1),
(4, 'Assembly instructions', 1),
(5, 'collection of programs that manages hardware resources', 2),
(6, 'system service provider to the application programs', 2),
(7, 'interface between the hardware and application programs', 2),
(8, 'all of the mentioned', 2),
(9, 'kernel is the program that constitutes the central core of the operating system', 3),
(10, 'kernel is the first part of operating system to load into memory during booting', 3),
(11, 'kernel is made of various modules which can not be loaded in running operating system', 3),
(12, 'kernel remains in the memory during the entire computer session', 3),
(13, 'power failure', 4),
(14, 'lack of paper in printer', 4),
(15, 'connection failure in the network', 4),
(16, 'all of the mentioned', 4);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Name`) VALUES
('abra');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'To access the services of operating system, the interface is provided by the ___________ ', 1),
(2, ' What is an operating system? ', 8),
(3, ' Which one of the following is not true?', 11),
(4, ' Which one of the following error will be handle by the operating system ', 16),
(5, '', 0),
(6, '', 0),
(7, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tria`
--

DROP TABLE IF EXISTS `tria`;
CREATE TABLE `tria` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answerscorrect` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(1, 'Bakugo', 2, 0),
(2, 'Bakugo', 2, 0),
(3, 'Bakugo', 2, 0),
(4, 'Bakugo', 2, 0),
(5, 'Bakugo', 2, 0),
(6, 'Bakugo', 2, 0),
(7, 'Bakugo', 2, 0),
(8, 'Bakugo', 2, 0),
(9, 'Bakugo', 2, 0),
(10, 'Bakugo', 2, 0),
(11, 'Bakugo', 2, 0),
(12, 'Bakugo', 2, 0),
(13, 'Bakugo', 2, 0),
(14, 'Bakugo', 2, 0),
(15, 'Bakugo', 2, 0),
(16, 'Bakugo', 2, 0),
(17, 'Bakugo', 2, 0),
(18, 'Bakugo', 2, 0),
(19, 'Bakugo', 2, 0),
(20, 'Bakugo', 2, 0),
(21, 'Bakugo', 2, 0),
(22, 'Bakugo', 2, 0),
(23, 'Bakugo', 2, 0),
(24, 'Bakugo', 2, 0),
(25, 'Bakugo', 2, 0),
(26, 'Bakugo', 2, 0),
(27, 'Bakugo', 2, 0),
(28, 'Bakugo', 2, 0),
(29, 'Bakugo', 2, 0),
(30, 'Bakugo', 2, 0),
(31, 'Bakugo', 2, 0),
(32, 'Bakugo', 2, 0),
(33, 'Bakugo', 2, 0),
(34, 'Bakugo', 2, 0),
(35, 'Bakugo', 2, 0),
(36, 'Bakugo', 2, 0),
(37, 'Bakugo', 2, 0),
(38, 'Bakugo', 2, 0),
(39, 'Bakugo', 2, 0),
(40, 'Bakugo', 2, 0),
(41, 'Bakugo', 2, 0),
(42, 'Bakugo', 2, 0),
(43, 'Bakugo', 2, 0),
(44, 'Bakugo', 2, 0),
(45, 'Bakugo', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abraanswers`
--
ALTER TABLE `abraanswers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `abraquestions`
--
ALTER TABLE `abraquestions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tria`
--
ALTER TABLE `tria`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abraanswers`
--
ALTER TABLE `abraanswers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `abraquestions`
--
ALTER TABLE `abraquestions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tria`
--
ALTER TABLE `tria`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Database: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE `userdata` (
  `Name` varchar(250) NOT NULL,
  `Age` int(15) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`Name`, `Age`, `Role`, `email`, `Password`) VALUES
('Aizawa Shota', 31, 'Teacher', 'eraserhead@noneforall.com', 'non'),
('Bakugo', 16, 'Student', 'lordexplosionmurder@tophero.com', 'shineDeku'),
('Yashendra', 20, 'A', 'yashendrashukla.2069@gmail.com', 'Apex');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
