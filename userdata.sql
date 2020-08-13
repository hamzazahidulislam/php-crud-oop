-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 12:34 AM
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
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `skill`) VALUES
(1, 'Hamza Zahidul Islam', 'hamza@gmailcom', 'desinger'),
(2, 'hasan', 'khalid@gmail.com', 'java'),
(3, 'Yousuf Shaker', 'yousufshaker@gmail.com', 'Alem'),
(7, 'hamza', 'hamza', 'hamza'),
(8, 'hamza', 'hamza', 'hamza'),
(9, 'asem', 'asem', 'asem'),
(10, 'hamza', 'hamza', 'hamza'),
(11, 'hamza', 'hamza', 'hamza'),
(12, 'tgvftgv', 'tget', 'tegtge'),
(13, 'tgvftgv', 'tget', 'tegtge'),
(14, 'Apurbo', 'apurbo@gmail.com', 'PHP Developer'),
(16, 'hamza', 'hamza', 'hamza'),
(17, 'SRIGU', '6EU@YRYR.RYYR', '6UEU64'),
(18, 'aralfinarif', 'aralfinarif@gamil.com', 'aralfinarif'),
(19, 'walid', 'hamza@gmailcom', 'desinger'),
(20, 'Asem', 'asem@gmail.vom', 'madrasa'),
(21, 'hamza', 'hamza@gmail.com', 'python programmer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
