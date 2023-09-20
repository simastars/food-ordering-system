-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2023 at 05:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hotelname` varchar(20) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123456'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hotelname` varchar(20) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`id`, `name`, `country`, `contact`, `email`, `hotelname`, `roomtype`, `price`, `bank`) VALUES
(16, 'idris garba', 'Nigeria', '07011922884', 'idrisg@gmail.com', 'Fried Rice', 'universal', '150', '3114204687'),
(17, 'idris garba', 'Nigeria', '07011922884', 'idrisg@gmail.com', 'Miyan Kuka', 'african', '200', '3114204687'),
(18, 'Muhammed Garba', 'Nigeria', '08169895827', 'Muhdmuhd158@gmail.com', 'Miyan Kuka', 'african', '200', '3114204687'),
(19, 'Muhammed Garba', 'Nigeria', '08169895827', 'Muhdmuhd158@gmail.com', 'rice', 'western', '10', '3114204687');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `hotelname` varchar(30) DEFAULT NULL,
  `roomtype` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `bank` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `dishname` varchar(50) NOT NULL,
  `available` varchar(4) NOT NULL,
  `category` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `dishname`, `available`, `category`, `price`, `path`) VALUES
(6, 'rice', 'yes', 'western', 10, '../dishes/fried rice.png'),
(7, 'Fried Rice', 'yes', 'universal', 150, '../dishes/fried rice.png'),
(8, 'salad', 'yes', 'asian', 100, '../dishes/vegetables salad.png'),
(9, 'Miyan Kuka', 'yes', 'african', 200, '../dishes/black-solid-icon-boy-patient-boy-patient-logo-pills-medical-black-solid-icon-boy-patient-pills-medical-147675883.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `con_pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `con_pass`, `email`, `phone`) VALUES
('ahmad abubakar', 'ahmad', '123456', '123456', 'ahmad@gmail.com', ''),
('idris garba', 'idi', '123456', '123456', 'idrisg@gmail.com', '07011922884'),
('Muhammed Garba', 'star', '123456', '123456', 'Muhdmuhd158@gmail.com', '08169895827'),
('sujan', 'sujan', '12345', '12345', 'sujan@gmail.com', ''),
('tarek', 'tarek', '12345', '12345', 'tarek@yahoo.com', ''),
('Taufiqur Rahman', 'taufiqur', '12345', '12345', 'taufiq@yahoo.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept`
--
ALTER TABLE `accept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept`
--
ALTER TABLE `accept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
