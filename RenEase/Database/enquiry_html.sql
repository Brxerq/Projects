-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 05:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry.html`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `TimedOn` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `TimedOn`) VALUES
(1, 'BACE', '1234', 'badribace@gmail.com', '2021-12-09 16:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `PhonerNumber` int(10) NOT NULL,
  `StreetAddress` varchar(50) NOT NULL,
  `CityTown` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `Postcode` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `DoneON` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `FirstName`, `LastName`, `Email`, `DOB`, `PhonerNumber`, `StreetAddress`, `CityTown`, `state`, `Postcode`, `subject`, `product`, `comments`, `Status`, `DoneON`) VALUES
(2, 'Badri', 'Shabani', 'badribace@gmail.com', '1999-11-24', 746215235, 'Iringa town', 'Iringa', 'Sabah', '714', 'RE: Enquiry on Hyundai Elantra', 'Hyundai Elantra', 'Good', 'Approved', '2021-12-09 07:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `RegON` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `PhoneNumber`, `RegON`) VALUES
(3, 'Badri Bace', 'BSB', 'badribace1@gmail.com', '12345', 746215234, '2021-12-09 14:53:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
