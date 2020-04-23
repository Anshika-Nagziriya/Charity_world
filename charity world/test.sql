-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 03:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `firstName`, `lastName`, `email`, `password`, `number`) VALUES
(1, 'john', 'smith', 'abc@gmail.com', 'abc123', 345678765),
(2, 'ivana', 'evans', 'bcd@gmail.com', 'bcd123', 6789876783),
(3, 'harry', 'evans', 'efg@gmail.com', 'efg123', 9876545656),
(4, 'marco', 'ronan', 'ghi@gmail.com', 'ghi123', 4567876545),
(5, 'devin', 'pierre', 'klm@gmail.com', 'klm123', 4567898765),
(6, 'nancy', 'evans', 'abd@gmail.com', 'abd123', 9876545676),
(7, 'richard', 'johnson', 'stu@gmail.com', 'stu123', 2345654344),
(8, 'mary', 'christopher', 'joh@gmail.com', 'joh123', 9878837654),
(9, 'mariya', 'potter', 'pot@gmail.com', 'pot123', 6789876783),
(10, 'thomas', 'wei', 'bcd@gmail.com', 'bcd123', 6789876783);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
