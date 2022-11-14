-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Nov 14, 2022 at 01:46 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BlogDataBase`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int NOT NULL,
  `authorID` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `post` longtext NOT NULL,
  `date` varchar(100) NOT NULL,
  `likes` int NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `authorID`, `title`, `post`, `date`, `likes`, `category`) VALUES
(1, 123, 'changed', 'changed', 'updated', 12345, 'not updated'),
(3, 3, 'asd', 'asdas', 'Hello', 17, 'Food'),
(7, 3, '123', 'adfbhqwfdeb2542141234', '11/11/2022', 3, 'Lifestyle'),
(9, 3, 'title 1', 'trip to manali', '12/11/2022', 10, 'Travel'),
(10, 3, 'adfsg', 'adfbh', '12/11/2022', 4, 'Food'),
(25, 3, 'Me Goa Gaya', 'Bhot Maza Aya', '13/11/2022', 11, 'Travel'),
(36, 21, 'asdgas', 'dfasdfasfasdfasfasdf', '1/1/2022', 12, 'sdgh'),
(37, 21, 'asdgas', 'dfasdfasfasdfasfasdf', '1/1/2022', 12, 'sdgh'),
(38, 21, 'asdgas', 'dfasdfasfasdfasfasdf', '1/1/2022', 12, 'sdgh'),
(39, 21, 'asdgas', 'dfasdfasfasdfasfasdf', '1/1/2022', 12, 'sdgh'),
(40, 21, 'asdgas', 'dfasdfasfasdfasfasdf', '1/1/2022', 12, 'sdgh'),
(41, 21, 'asdgas', 'dfasdfasfasdfasfasdf', '1/1/2022', 12, 'sdgh'),
(42, 28, 'adf', 'dfbhadfb adfb ', '14/11/2022', 0, 'Food'),
(43, 28, 'titl1', 'Hello There First Blog', '14/11/2022', 0, 'Food'),
(45, 23, 'Universe', '  Galaxyadfbhadfbhadfbadfbhadf', '14/11/2022', 0, 'Travel'),
(46, 23, 'Batman', ' Heath Ledger was a legend , Of course He Was !!!!', '14/11/2022', 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Request` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Pass`, `Role`, `Request`) VALUES
(1, 'Anant Vikram Shukla', 'avs@cedcoss.com', '1234', 'admin', 1),
(2, 'Saurabh Tripathi', 'st@cedcoss.com', '123', 'author', 1),
(3, 'Adtiya Narayan', 'an@cedcoss.com', '123', 'author', 1),
(21, 'Umesh', 'un@cedcoss.com', '123', 'author', 1),
(23, 'Jayant', 'jp@cedcoss.com', '123', 'author', 1),
(24, 'Vishal', 'vs@cedcoss.com', '123', 'reader', 1),
(25, 'Vikrabt', 'vm@cedcoss.com', '123', 'reader', 1),
(26, 'Vaibhav', 'vr@cedcoss.com', '123', 'reader', 0),
(27, 'Ranjeet', 'rc@cedcoss.com', '123', 'reader', 0),
(28, 'Kshitiz', 'ks@cedcoss.com', '11', 'author', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
