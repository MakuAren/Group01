-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 02:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(10) NOT NULL,
  `poster_ID` int(10) NOT NULL,
  `profession_ID` int(10) NOT NULL,
  `worker_count` int(10) NOT NULL DEFAULT 1,
  `requirements` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `min_pay` int(11) DEFAULT NULL,
  `max_pay` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `applicants` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `poster_ID`, `profession_ID`, `worker_count`, `requirements`, `location`, `status`, `min_pay`, `max_pay`, `timestamp`, `applicants`) VALUES
(1, 36, 1, 1, 'Hindi ko din alam eh.', 'Samin lang naman.', 1, NULL, 5, 1640257501, NULL),
(2, 5, 2, 1, 'Di ko lang sure.', 'Teka hanapin ko lang.', 1, 1, 1, 1640257255, NULL),
(3, 36, 1, 1, 'Kung ano sabihin ko yung ang susundin mo!', 'Dito dito lang.', 1, 5, 5, 1640256666, NULL),
(5, 1, 1, 1, '', '', 1, NULL, 1, 1640414463, NULL),
(6, 1, 1, 3, 'asd', 'imus', 1, NULL, 100, 1640414513, NULL),
(7, 1, 2, 3, 'jlkj', 'imus', 1, NULL, 100, 1640436902, NULL),
(8, 36, 3, 3, 'asddks;a', 'imus', 1, NULL, 100, 1640437813, NULL),
(12, 39, 0, 1, 'asd', 'imus', 1, NULL, 2000, 1641628001, NULL),
(13, 36, 0, 1, 'asd', 'cavite', 1, NULL, 2000, 1641965142, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE `profession` (
  `ID` int(11) NOT NULL,
  `profession_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`ID`, `profession_type`, `description`, `status`) VALUES
(0, 'none', 'none', 1),
(1, 'Carpenter', '', 1),
(2, 'Accountant', '', 1),
(3, 'Architect', '', 1),
(4, 'Cashier', '', 1),
(5, 'Web Developer', '', 1),
(6, 'Cleaner', '', 0),
(7, 'Data Encoder', '', 0),
(8, 'Electrician', '', 0),
(9, 'Engineer', '', 0),
(10, 'Teacher', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `profession_id` varchar(255) NOT NULL,
  `feature_list_id` varchar(255) DEFAULT NULL,
  `education_id` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `calendarlist_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `code` varchar(20) NOT NULL,
  `jobs` varchar(255) DEFAULT NULL,
  `posts` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `last_name`, `first_name`, `middle_name`, `password`, `contact`, `email`, `profession_id`, `feature_list_id`, `education_id`, `location`, `summary`, `calendarlist_id`, `status`, `code`, `jobs`, `posts`) VALUES
(1, 'user', 'Sisante', 'Ian', 'asd', 'asd', 2147483647, 'iansisante@gmail.com', '', NULL, NULL, '', NULL, NULL, '1', '0', NULL, NULL),
(2, 'user', 'Aren', 'Mark', '', 'asd', 2147483647, 'mark.aren@mail.me', '', NULL, NULL, '', NULL, NULL, '1', '0', NULL, NULL),
(3, 'admin', 'Minon', 'Alex', 'Benedict', 'qwe', 2147483647, 'me@me.me', '', NULL, NULL, '', NULL, NULL, '1', '0', NULL, NULL),
(4, 'user', 'Agapor', 'Rachelle', 'Ann', '321', 2147483647, 'rachelle@mail.ann', '', NULL, NULL, '', NULL, NULL, '1', '0', NULL, NULL),
(5, 'user', 'Guzman', 'Franco', 'De', 'qqq', 2147483647, 'franqq@q.q', '', NULL, NULL, '', NULL, NULL, '1', '0', NULL, NULL),
(6, 'user', 'dsa', 'asd', 'xxx', 'ddd', 1111111111, 'Anecitatempra@yahoo.com', '', NULL, NULL, '', NULL, NULL, '1', '0', NULL, NULL),
(9, 'moderator', '', '', NULL, '123', NULL, 'mark.aren@aren.me', '', NULL, NULL, '', NULL, NULL, '1', '0', NULL, NULL),
(10, 'moderator', '', '', NULL, 'xxx', NULL, 'alex@lex.x', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(11, 'moderator', '', '', NULL, '123', NULL, 'bbp@p.b', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(14, 'user', 'el', 'al', 'il', '123456', 2147483647, 'boy2pasaway0@gmail.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(16, 'user', 'el', 'al', 'il', '123456', 2147483647, 'yoru@gamil.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(17, 'user', 'sadaw', 'asdaw', 'sadaw', '123456', 2147483647, 'awaw@gaw.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(18, 'user', 'as', 'as', 'wad', '123456', 2147483647, 'yoru@gmail.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(19, 'user', 'el', 'al', 'il', '123456', 2147483647, 'jebronlam@gmail.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(20, 'user', 'el', 'al', 'il', '123456', 2147483647, 'ur@gmail.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(21, 'user', 'as', 'asdaw', 'qwewq', '123456', 2147483647, 'aawy@gmail.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(22, 'user', 'el', 'al', 'il', '123456', 2147483647, 'lomi@gmail.com', '', NULL, NULL, '', NULL, NULL, '0', '0', NULL, NULL),
(34, 'user', 'el', 'al', 'il', '123456', 2147483647, 'alexandreeminion@gmail.com', '', NULL, NULL, '', NULL, NULL, '1', 'GtQBS3TRmzf1', NULL, NULL),
(36, 'user', 'Sisante', 'Ian', '', '123', 2147483647, 'ian.sisante@tup.edu.ph', '', NULL, NULL, '', NULL, NULL, '1', 'j5QXhb1mFZNx', NULL, NULL),
(39, 'user', 'Cabutaje', 'Mark', 'Allen', 'qwe', 2147483647, 'markallencabutaje00@gmail.com', '', NULL, NULL, '', NULL, NULL, '1', 'b4RKhrzCp2uN', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `ID` int(11) NOT NULL,
  `verification_type` varchar(50) NOT NULL,
  `content_ID` int(11) NOT NULL,
  `viewer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`ID`, `verification_type`, `content_ID`, `viewer_id`) VALUES
(1, 'user', 1, 0),
(2, 'user', 2, 0),
(4, 'user', 4, 0),
(5, 'user', 5, 0),
(6, 'user', 6, 0),
(9, 'moderator', 9, 3),
(10, 'moderator', 10, 3),
(11, 'moderator', 11, 3),
(12, 'user', 32, 0),
(13, 'user', 33, 0),
(14, 'user', 34, 0),
(15, 'user', 35, 0),
(16, 'user', 36, 0),
(18, 'user', 38, 0),
(19, 'user', 39, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profession`
--
ALTER TABLE `profession`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
