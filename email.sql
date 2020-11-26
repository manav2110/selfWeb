-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 09:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`ID`, `email`) VALUES
(1, 'jm27504314@gmail.com'),
(2, 'jm27504314@gmail.com'),
(3, 'jm27504314@gmail.com'),
(4, 'jm27504314@gmail.com'),
(5, 'jm27504314@gmail.com'),
(6, 'jm27504314@gmail.com'),
(7, 'jm27504314@gmail.com'),
(8, 'jm27504314@gmail.com'),
(9, 'jww@jdd.com'),
(10, 'jm27504314@gmail.com'),
(11, ''),
(12, 'kkjkjkjk@fgff'),
(13, 'bhvtf@xfc'),
(14, 'jm27504314@gmail.com'),
(15, 'hggf@df'),
(16, 'kkjkjkjk@fgff'),
(17, 'jm27504314@gmail.com'),
(18, 'jm27504314@gmail.com'),
(19, ''),
(20, 'jm27504314@gmail.com'),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, 'dewdewmd@dcnjcn'),
(28, 'jm27504314@gmail.com'),
(29, 'jm27504314@gmail.com'),
(30, 'jm27504314@gmail.com'),
(31, 'jm27504314@gmail.com'),
(32, 'jm27504314@gmail.com'),
(33, 'kkjkjkjk@fgff'),
(34, 'jm27504314@gmail.com'),
(35, 'jm27504314@gmail.com'),
(36, 'kkjkjkjk@fgff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
