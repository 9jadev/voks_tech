-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 03:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vokstechnologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmail`
--

CREATE TABLE `contactmail` (
  `id` int(11) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `Cmail` varchar(255) NOT NULL,
  `Csubject` varchar(255) NOT NULL,
  `Cpost` varchar(30) NOT NULL,
  `Cmessage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactmail`
--

INSERT INTO `contactmail` (`id`, `Cname`, `Cmail`, `Csubject`, `Cpost`, `Cmessage`) VALUES
(1, 'Godwin', 'zaloadedofficial@gmail.com', 'Delight', '', 'I am so delighted to be part of this great company'),
(7, 'Paul Ikoro', 'paulo@gmail.com', 'Delight', 'CEO & Founder Softicu INC.', 'I never believe this. It really subsidize the use of Google Ads in Nigeria. Nice brain work there.');

-- --------------------------------------------------------

--
-- Table structure for table `newslettermail`
--

CREATE TABLE `newslettermail` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslettermail`
--

INSERT INTO `newslettermail` (`id`, `mail`) VALUES
(1, 'godwin@mail.com'),
(32, 'paulo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmail`
--
ALTER TABLE `contactmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslettermail`
--
ALTER TABLE `newslettermail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmail`
--
ALTER TABLE `contactmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newslettermail`
--
ALTER TABLE `newslettermail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
