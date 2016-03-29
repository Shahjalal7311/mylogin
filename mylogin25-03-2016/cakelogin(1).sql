-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2016 at 02:47 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakelogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `bname` varchar(100) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `bname`, `year`, `subject_id`) VALUES
(1, 'JAN16', 2016, 1),
(2, 'JAN10', 2016, 2),
(3, 'JAN11', 2016, 4),
(5, 'JAN9', 2016, 2),
(6, 'JAN8', 2016, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `phone`, `father_name`, `mother_name`, `address`, `subject_id`, `batch_id`) VALUES
(4, 'Shah', 'jalal', 'mdjalal2012@gmail.com', 1680954856, 'Father Name', 'Mother Name', 'Address', 1, 2),
(6, 'Robel', 'Ahmad', 'mdjalal2012@gmail.com', 1680954856, 'Father Name', 'Mother Name', 'Address', 1, 1),
(7, 'Robel', 'Ahmad', 'amanda@gmail.com', 1680954856, 'Father Name', 'Mother Name', 'Address', 1, 3),
(8, 'Shahjalal', 'Shawon', 'shah.jalal.7311@facebook.com', 1680954856, 'Father Name', 'Mother Name', 'Address', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `batch` varchar(100) DEFAULT NULL,
  `student_session` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `student_name`, `batch`, `student_session`) VALUES
(1, 'Mathmatics', 'Shahjalal', 'Math_B', '2016'),
(2, 'General Science', 'Mumo Islam', 'EnglishB', 'jan2016'),
(4, 'Higher Mathmatics', NULL, 'HM11', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `parmanent_address` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `parmanent_address`, `present_address`, `comments`) VALUES
(1, 'shahjalal', 'mdjalal2012@gmail.com', '9/2/3, Northpierebag, Mirpur-2, Dhaka-1216', '9/2/3, Northpierebag, Mirpur-2, Dhaka-1216', 'test comments'),
(4, 'dfdfhd', 'cseinfo@gmail.com', '9/2/3, Northpierebag, Mirpur-2, Dhaka-1216', '9/2/3, Northpierebag, Mirpur-2, Dhaka-1216', '9/2/3, Northpierebag, Mirpur-2, Dhaka-12169/2/3, Northpierebag, Mirpur-2, Dhaka-12169/2/3, Northpierebag, Mirpur-2, Dhaka-12169/2/3, Northpierebag, Mirpur-2, Dhaka-1216');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
