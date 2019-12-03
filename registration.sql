-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03.12.2019 klo 16:49
-- Palvelimen versio: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `chest`
--

CREATE TABLE `chest` (
  `chestid` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `bodyweight` varchar(32) NOT NULL,
  `exercise` varchar(64) DEFAULT NULL,
  `reps` int(11) NOT NULL,
  `weight` varchar(32) DEFAULT NULL,
  `rdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `chest`
--

INSERT INTO `chest` (`chestid`, `name`, `age`, `bodyweight`, `exercise`, `reps`, `weight`, `rdate`) VALUES
(18, 'Joku', 47, '75', 'Chest', 1, '100', '2019-11-27 11:53:25'),
(19, 'jooma', 20, '89', 'joo', 12, '203', '2019-12-03 14:02:10'),
(25, 'Mikko Mallikas', 15, '60', 'Squat', 1, '100', '2019-12-03 13:04:40'),
(26, 'Sepi', 26, '79', 'bench press', 10, '100', '2019-12-03 13:51:27'),
(27, 'Sepi', 26, '79', 'pull up', 1, '50', '2019-12-03 13:53:25'),
(28, 'Sepi', 26, '79', 'bench press', 5, '70', '2019-12-03 13:54:44'),
(30, 'Mikko Mallikas', 60, '70', 'chest', 10, '50', '2019-12-03 14:19:00'),
(31, 'Sepi', 19, '60', 'chest', 1, '100', '2019-12-03 14:40:48'),
(32, '34423243', 423243243, '243243', '243243', 243243, '243243', '2019-12-03 15:37:36');

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`) VALUES
(1, 'testi', 'testi@testi.fi', '00a7f9ed8447aa1771e2ffb8925eee78'),
(2, 'joku', 'joku@gmail.com', '4ba28cbafc1c02fca9faec83f7a1edc0'),
(3, 'sepi', 'sepi@gmail.com', 'ff834fa94f9b0e2984abb066571d9d0d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chest`
--
ALTER TABLE `chest`
  ADD PRIMARY KEY (`chestid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chest`
--
ALTER TABLE `chest`
  MODIFY `chestid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
