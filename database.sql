-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 02:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `staff_id` varchar(200) NOT NULL,
  `complaint` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`staff_id`, `complaint`) VALUES
('F222', 'saya suka makan nasi'),
('F211', 'bos goyang kaki je'),
('F223', 'bos makan karipap saya'),
('F110', 'boss tak bagi keluar awal'),
('001', 'tiada nama staf');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `staff_id` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Phone_no` varchar(200) NOT NULL,
  `date_joined` date NOT NULL,
  `salary` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`staff_id`, `FirstName`, `LastName`, `Phone_no`, `date_joined`, `salary`) VALUES
('F211', 'John', 'Lennon', '601134520995', '1991-10-12', '4900'),
('F214', 'Tim', 'Henson', '60132995731', '2001-01-25', '4000'),
('F215', 'Dave', 'Mustaine', '60139223856', '2002-01-01', '4100'),
('F212', 'James', 'Tim', '60835664268', '1990-06-12', '2000'),
('F213', 'Joel', 'Jon', '01674402945', '2023-09-09', '9000'),
('F221', 'Robb', 'Flynn', '01189330289', '1999-01-12', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `password`) VALUES
('kishan', '$2y$10$OXkSxknhx5.4.0y0ugpJ4eZCC5/d/A9uByf/Wq2NZGg2ea4qJeJMq'),
('negawatt', '$2y$10$OXkSxknhx5.4.0y0ugpJ4eZCC5/d/A9uByf/Wq2NZGg2ea4qJeJMq'),
('Minjun', '$2y$10$OXkSxknhx5.4.0y0ugpJ4eZCC5/d/A9uByf/Wq2NZGg2ea4qJeJMq'),
('January', '$2y$10$OXkSxknhx5.4.0y0ugpJ4eZCC5/d/A9uByf/Wq2NZGg2ea4qJeJMq'),
('February', '$2y$10$OXkSxknhx5.4.0y0ugpJ4eZCC5/d/A9uByf/Wq2NZGg2ea4qJeJMq'),
('azlin', '$2y$10$OXkSxknhx5.4.0y0ugpJ4eZCC5/d/A9uByf/Wq2NZGg2ea4qJeJMq'),
('azlinj', '$2y$10$OXkSxknhx5.4.0y0ugpJ4eZCC5/d/A9uByf/Wq2NZGg2ea4qJeJMq');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('NAZREINKONG', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('Nazrein321', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('Amira', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('ammar', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('obunga', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('amr', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('Joel', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('JoelBoh', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('minjun', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('kishan1', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('Nazrein', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('JoelBohJoVi', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('juji', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('Kishan', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('Cheng', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2'),
('azz', '$2y$10$bfw2TlDrTAoqT9oO3AjUjuomHgyHvdXXkiux73qN5b9QED.nYabk2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
