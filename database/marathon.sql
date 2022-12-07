-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 03:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` char(50) NOT NULL,
  `surname` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` char(10) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `nationality` char(20) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `surname`, `email`, `password`, `gender`, `birthday`, `tel`, `nationality`, `picture`) VALUES
('Panda', 'Dang', 'panda@gmail.com', '1234', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `event_information`
--

CREATE TABLE `event_information` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lenght` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_information`
--

INSERT INTO `event_information` (`id`, `name`, `lenght`) VALUES
(1, 'test', 10),
(2, 'test002', 12);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `name` char(50) NOT NULL,
  `surname` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` char(10) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `nationality` char(20) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `user_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`name`, `surname`, `email`, `password`, `gender`, `birthday`, `tel`, `nationality`, `picture`, `user_level`) VALUES
('Raiden', 'DD', 'test@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `name` char(50) NOT NULL,
  `surname` char(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `gender` char(10) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `surname`, `user_password`, `gender`, `birthday`, `tel`, `nationality`, `picture`) VALUES
('patipan.tu@rmuti.ac.th', 'Pati', 'Pati', '1234', NULL, NULL, NULL, NULL, NULL),
('patmanok8@gmail.com', 'Patipan', 'Thummanok', '1234', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `event_information`
--
ALTER TABLE `event_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_information`
--
ALTER TABLE `event_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
