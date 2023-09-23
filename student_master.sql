-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 10:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssa`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`id`, `name`, `email`, `image`) VALUES
(1, 'yash', 'yash12@yahoo.com', 'Actor 2023 09 22 01 18 45 PM.jpg'),
(2, 'Nikhil', 'nik123@gmail.com', 'D.jpg'),
(3, 'jatin', 'raval@gmail.com', 'Actor 2023 09 22 01 21 42 PM.jpg'),
(4, 'kenu', 'k@gmail.com', 'Actor 2023 09 22 01 22 23 PM.jpg'),
(5, 'harsh', 'hg@yahoo.com', 'Actor 2023 09 22 01 23 30 PM.jpg'),
(6, 'tejas', 'tjg@gmail.com', 'Actor 2023 09 22 01 24 08 PM.jpg'),
(7, 'isha', 'sh@gmail', 'Actor 2023 09 22 01 24 46 PM.jpg'),
(8, 'shruti', 'shru@utu.com', 'Actor 2023 09 22 01 25 30 PM.jpg'),
(10, 'jay', 'jayW@gasb', 'Actor 2023 09 22 01 27 42 PM.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
