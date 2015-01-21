-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2015 at 05:28 AM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE IF NOT EXISTS `users_db` (
`id` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `hobby` text NOT NULL,
  `cities` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `dob`, `gender`, `hobby`, `cities`, `created`, `modified`) VALUES
(1, 'Mohammad Shajedul', 'Hoque', 'ctgboy2010@gmail.com', 'ctgboy2010', '123456', '2012-03-01', 'Male', 'Reading Book,Travelling,Programming', 'Dhaka,Chittagong,Khulna', '2015-01-18 18:19:10', '2015-01-18 23:31:00'),
(2, 'Mohammad Arshadul', 'Hoque', 'arshad@gmail.com', 'arshad', '123456', '2013-02-02', 'Male', 'Reading Book,Travelling', 'Dhaka,Chittagong', '2015-01-18 18:21:02', '0000-00-00 00:00:00'),
(7, 'Mohammad Arshadul', 'Hoque', 'arshad@gmail.com', 'arshad', '123456', '2013-02-02', 'Male', 'Reading Book,Travelling,Games', 'Dhaka,Chittagong', '2015-01-18 18:21:02', '2015-01-18 22:15:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_db`
--
ALTER TABLE `users_db`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_db`
--
ALTER TABLE `users_db`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
