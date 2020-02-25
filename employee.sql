-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2020 at 10:01 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `dob`, `contact`, `address`, `department`, `doj`) VALUES
(1, 'Arjun', '1998-09-04', 1234567890, 'abcd', 'Drupal', '2020-01-03'),
(2, 'Ayush', '1998-06-15', 9997074411, 'abcd', 'Drupal', '2020-01-15'),
(3, 'Akhil', '1997-06-15', 9997074412, 'abcd', 'FEEN', '2020-01-15'),
(4, 'Akash', '1988-06-15', 9997074412, 'abcd', 'DEVOPS', '2020-01-25'),
(5, 'Abhi', '1981-06-15', 9997074412, 'abcd', 'JVM', '2020-02-15'),
(6, 'Samyak', '1998-03-15', 1234567890, 'abcd', 'MEAN', '2020-02-01'),
(7, 'Samir', '1998-03-15', 1234567890, 'abcd', 'MERN', '2020-02-01'),
(8, 'Atisri', '1998-02-24', 1234567890, 'abcd', 'SDE', '2020-02-23'),
(9, 'Swati', '1997-02-24', 1234567890, 'abcd', 'SDE', '2020-02-23'),
(10, 'Nitin', '1996-02-24', 1234567890, 'abcd', 'SDE', '2020-02-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
