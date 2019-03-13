-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2016 at 05:55 PM
-- Server version: 5.5.50-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `user_created` int(10) NOT NULL,
  `user_modified` int(10) NOT NULL,
  `activation_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `first_name`, `last_name`, `phone`, `avatar`, `user_created`, `user_modified`, `activation_code`) VALUES
(39, 'fairy@aol.com', 'Fairy', 'Fairy', 'Berry', '4334442222', '', 1465261016, 0, 0),
(41, 'fairy@aol.com', 'Fairy', 'Fairy', 'Berry', '4334442222', '', 1465261017, 0, 0),
(43, 'fairy@aol.com', 'Fairy', 'Fairy', 'Berry', '4334442222', '', 1465261017, 0, 0),
(44, 'fairy@aol.com', 'Fairy', 'Fairy', 'Berry', '4334442222', '', 1465261018, 0, 0),
(47, 'gregd@aol.com', '', 'greg', 'hoehl', '4444444444', '', 1465261310, 1465261564, 0),
(48, 'mucho@pittpc.com', 'hh', 'Fart', 'Man', '4445555555', '', 1465261591, 0, 0),
(49, 'ff@aol.com', 'jfjf', 'penis', 'loops', '3366668888', '', 1465261652, 0, 0),
(50, 'magic@aol.com', '22', 'Magic', 'Jeans', '7778880002', '', 1465261785, 1465266454, 0),
(51, 'fatman@bigboys.com', 'password', 'Fat', 'Man', '4323452114', '', 1465533760, 0, 0),
(52, 'j@pittpc.com', 'password', 'John', 'Q', '4128776220', '', 1465746167, 0, 0),
(53, 'ohbilly@aol.com', 'password', 'Oh', 'Billy', '4443332222', '', 1466634146, 0, 0),
(54, 'farty@aol.com', 'marty', 'Farty', 'Marty', '4443332222', '', 1469392887, 1469396300, 0),
(55, 'johnny@pittpc.com', 'password', 'Johnny', 'Q', '4443332222', '', 1469413193, 0, 314);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
