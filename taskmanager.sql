-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 10:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `title` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `title`) VALUES
(3, 'personall'),
(4, 'social media');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `priorityID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`priorityID`, `name`, `level`) VALUES
(1, 'hight priority', 10),
(2, 'medium priority', 5),
(3, 'low priority', 1),
(10, 'sfdds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `priorityID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `taskname` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `creationdate` date NOT NULL DEFAULT current_timestamp(),
  `deadline` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskID`, `userID`, `priorityID`, `categoryID`, `taskname`, `description`, `creationdate`, `deadline`, `status`) VALUES
(1, 1, 1, 1, 'financial statement', 'you have to finish the financial statement before the deadline. ', '2023-11-12', '2023-11-14', 'In progress'),
(101, 1, 2, 2, 'whateved', 'sjfslkfjsfj', '2023-11-07', '2023-11-02', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `email`, `role`) VALUES
(1, 'ibrahim', '123', 'someone@gmail.com', 'admin'),
(18, 'shadi', 'space', 'shadi@gmail.com', 'user'),
(19, 'nadim', 'password', 'nadim@gmail.com', 'user'),
(20, 'rami', '5434', 'rami@gmail.com', 'user'),
(21, 'billGates', 'dK38*3?/', 'bill@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`priorityID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `level` (`level`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskID`),
  ADD KEY `priorityID` (`priorityID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `priorityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
