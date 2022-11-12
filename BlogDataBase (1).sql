-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Nov 12, 2022 at 08:35 AM
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
  `img` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `authorID`, `title`, `post`, `date`, `likes`, `img`, `category`) VALUES
(1, 123, 'test', 'pop', '2022-11-01', 12345, 'rewwre.jpg', 'qwesq'),
(2, 3, 'asd', 'asdas', 'Hello', 0, 'C:fakepathTheme Shop.png', 'Food'),
(3, 3, 'asd', 'asdas', 'Hello', 0, 'C:fakepathTheme Shop.png', 'Food'),
(4, 3, 'blog1', 'asdvgasdvsdfvasdvadsvadsvasdvasdva', '11/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Food'),
(5, 3, '123', '123456678', '11/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Health'),
(6, 3, '123', 'asdgv1254asdgv134', '11/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Health'),
(7, 3, '123', 'adfbhqwfdeb2542141234', '11/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Lifestyle'),
(8, 3, 'trip', 'manali', '11/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Travel'),
(9, 3, 'title 1', 'trip to manali', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Travel'),
(10, 3, 'adfsg', 'adfbh', '12/11/2022', 0, '', 'Food'),
(11, 3, 'adfsg', 'adfbh', '12/11/2022', 0, '', 'Food'),
(12, 3, '', '', '12/11/2022', 0, '', 'Food'),
(13, 3, 't1', 'b1', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Travel'),
(14, 3, 'asdvg', 'asdgfvasdf', '12/11/2022', 0, '', 'Food'),
(15, 3, '', '', '12/11/2022', 0, '', 'Food'),
(16, 3, 'adsfga', 'sdfgadfshgasdfg', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Health'),
(17, 3, '', '', '12/11/2022', 0, '', 'Food'),
(18, 3, 'axzscvga', 'SDEVGFASDGVASDFBGADSFBHABDHFH', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Lifestyle'),
(19, 3, 'asdgvas', 'gvaZSDFHBADSFBHNADFHADFBADFBNDAFBNADF', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Food'),
(20, 3, 'SDGFVASDFASD', 'ASDFASDFASDFASDFDASFASD', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Food'),
(21, 3, '123', 'ZDAFBHADFBH', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Food'),
(22, 3, '123', 'JVASDBDFBDS', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Food'),
(23, 3, '123214', 'dgasdfgadfbggbdcfkjadnsvkldmSVGOIDNESGfyhu dfs', '12/11/2022', 0, 'C:fakepathBlog-experts-opt-750x498.jpg', 'Food');

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
(4, 'Brijesh Verma', 'bv@cedcoss.com', '123', 'reader', 1),
(6, 'Aditya Shrama', 'as@cedcoss.com', '123', 'reader', 1),
(7, 'test', 'test@test.com', '123', 'reader', 0),
(9, 't1', 'abc@site.com', '123', 'reader', 0),
(18, 'Jayant Pathak', 'jp@cedcoss.com', '123', 'reader', 0);

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
  MODIFY `postID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
