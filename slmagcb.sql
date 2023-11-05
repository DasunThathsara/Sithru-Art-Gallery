-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 12:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slmagcb`
--

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `p1` text DEFAULT NULL,
  `p2` text DEFAULT NULL,
  `p3` text DEFAULT NULL,
  `p4` text DEFAULT NULL,
  `p5` text DEFAULT NULL,
  `p6` text DEFAULT NULL,
  `p7` text DEFAULT NULL,
  `p8` text DEFAULT NULL,
  `p9` text DEFAULT NULL,
  `p10` text DEFAULT NULL,
  `p11` text DEFAULT NULL,
  `p12` text DEFAULT NULL,
  `p13` text DEFAULT NULL,
  `p14` text DEFAULT NULL,
  `p15` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`id`, `title`, `description`, `photo`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`) VALUES
(31, 'June', 'June magazine', 'IMG-646d35270a4660.81515027.jpg', 'IMG-646fc85b0fc9e6.40346177.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `insta` varchar(200) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `rolle` varchar(20) NOT NULL,
  `t` int(20) NOT NULL,
  `statust` int(1) NOT NULL,
  `q1` varchar(1000) NOT NULL,
  `q2` varchar(1000) NOT NULL,
  `q3` varchar(1000) NOT NULL,
  `q4` varchar(1000) NOT NULL,
  `q5` varchar(1000) NOT NULL,
  `q6` varchar(1000) NOT NULL,
  `q7` varchar(1000) NOT NULL,
  `q8` varchar(1000) NOT NULL,
  `other` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `contact`, `insta`, `fb`, `rolle`, `t`, `statust`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `other`) VALUES
(39, 'Buddhika', 'adf', '', '', 'photo', 1685133557, 0, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', ''),
(40, 'asd', 'sdf', '', '', 'photo', 1685133578, 0, 's', 's', 's', 's', 's', 's', 's', 's', ''),
(41, 'df', 'c', '', '', 'model', 1685133598, 0, 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', ''),
(42, 'x', 'x', '', '', 'model', 1685133618, 0, 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', ''),
(43, 'Buddhika Senanayake', '0', '', '', 'Photographer', 1685134846, 0, 'q', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
