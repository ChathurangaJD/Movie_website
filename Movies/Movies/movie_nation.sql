-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 07:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie nation`
--

-- --------------------------------------------------------

--
-- Table structure for table `featured_movies`
--

CREATE TABLE `featured_movies` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `featured_movies`
--

INSERT INTO `featured_movies` (`id`, `name`, `rdate`, `poster`) VALUES
(0, 'Vikram', '2022', 'wp11157463-vikram-movie-kamal-haasan-wallpapers.jpg'),
(1, 'Sihinayaki Adare', '2024-03-31', 'sihinayaki.jpg'),
(2, 'Kung Fu Panda', '2024-04-01', 'kung fu.jpg'),
(3, 'Dune', '2024-04-04', 'Dune.jpg'),
(4, 'Hate Story 1', '2012', 'HateStory_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `img`, `price`) VALUES
(2, 'hotspot.jpeg', 565),
(1, 'Godzilla_x_kong_the_new_empire_poster.jpg', 52);

-- --------------------------------------------------------

--
-- Table structure for table `giftcard`
--

CREATE TABLE `giftcard` (
  `gid` int(11) NOT NULL,
  `gto` varchar(255) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `gfrom` varchar(20) NOT NULL,
  `flag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_top_movie`
--

CREATE TABLE `home_page_top_movie` (
  `name` varchar(255) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `home_page_top_movie`
--

INSERT INTO `home_page_top_movie` (`name`, `id`) VALUES
('Salaar: Part 1 – Ceasefire\r\n', 1),
('Damsel', 2),
('Road House', 3),
('Anweshippin Kandethum', 4),
('lift', 5),
('players', 6);

-- --------------------------------------------------------

--
-- Table structure for table `now_available`
--

CREATE TABLE `now_available` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `rate` int(2) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `duration` varchar(5) NOT NULL,
  `language` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL,
  `category2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `now_available`
--

INSERT INTO `now_available` (`id`, `name`, `poster`, `rate`, `rdate`, `duration`, `language`, `category`, `category2`) VALUES
(1, 'Sihinayaki Adare', 'sihinayaki.jpg', 80, '01/04/2024', '02:30', 'Sinhala', 'romance', 'drama'),
(2, 'Kung Fu Panda 4', 'kung fu.jpg', 75, '08/03/2024', '1:34', 'English', 'kids ', 'cartoon '),
(3, 'Aadujeevitham', 'adujivitham.jpg', 78, '01/04/2024', '02:41', 'Tamil', 'drama', 'adventure '),
(4, 'Hot Spot', 'hotspot.jpeg', 65, '28/03/2024', '2:02', 'Tamil', 'comedy', 'drama   ');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(3) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `poster`) VALUES
(1, 'images.jpg'),
(3, 'images 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(3) NOT NULL,
  `cid` int(3) NOT NULL,
  `mid` int(3) NOT NULL,
  `ticket` int(3) NOT NULL,
  `tid` int(3) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cid`, `mid`, `ticket`, `tid`, `total`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 2, 2, 2, 2, 400),
(3, 2, 3, 3, 4, 900),
(4, 2, 1, 2, 1, 300),
(5, 2, 1, 2, 1, 300),
(6, 3, 1, 2, 1, 300),
(7, 7, 4, 5, 1, 750),
(8, 7, 4, 5, 1, 750),
(9, 7, 1, 2, 2, 400),
(10, 7, 1, 2, 2, 400),
(11, 7, 1, 2, 2, 400),
(12, 7, 2, 4, 2, 800),
(13, 7, 2, 4, 2, 800),
(14, 7, 1, 4, 1, 600),
(15, 7, 1, 4, 1, 600),
(16, 7, 2, 2, 2, 400);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `cid` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cid`, `name`, `email`, `password`, `contact`) VALUES
(1, 'demo', 'demo@gmail.com', 'demo', '9012345678'),
(2, 'TARAK', 'TARAK@GMAIL.COM', '1234', '8128630863'),
(3, 'harsh', 'harsh@gmail.com', '12345', '8160359415'),
(5, 'axe', 'sCSW@gmail.com', '12345', '21658426'),
(6, 'text', 'text@gmail.com', '12123', '0701348787'),
(7, 'text', 'text@gmail.com', '1234', '0745823632'),
(8, 'text11', 'textsdcdnvkd@gmail.com', '12123', '0701348787'),
(9, 'text5555', 'textsdcss@gmail.com', '12123', '0701348787');

-- --------------------------------------------------------

--
-- Table structure for table `temp_payment`
--

CREATE TABLE `temp_payment` (
  `cid` int(3) NOT NULL,
  `mid` int(3) NOT NULL,
  `tid` int(3) NOT NULL,
  `seat` int(3) NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `temp_payment`
--

INSERT INTO `temp_payment` (`cid`, `mid`, `tid`, `seat`, `price`) VALUES
(7, 2, 2, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(3) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `duration`, `price`) VALUES
(1, '09:00 am - 11:00 am', '150'),
(2, '12-00 pm - 03-00pm', '200'),
(3, '04:00 pm - 7:00 pm', '250'),
(4, '8:00 pm - 11:00 pm', '300'),
(5, '10:00 pm - 01:00 am ', '350');

-- --------------------------------------------------------

--
-- Table structure for table `top_movies`
--

CREATE TABLE `top_movies` (
  `mid` int(3) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `rate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `top_movies`
--

INSERT INTO `top_movies` (`mid`, `movie_name`, `rate`) VALUES
(1, 'Sihinayaki Adare', 80),
(2, 'Dune: Part Two', 90),
(3, 'Kung Fu Panda 4', 75),
(4, 'Godzilla x Kong: The New Empire', 80),
(5, 'Hot Spot', 65),
(6, 'Shaitaan', 85),
(8, 'Aadujeevitham', 78),
(9, 'Ridee Seenu', 88);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(3) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `poster`, `video`) VALUES
(2, 'sihinayaki.jpg', 'Sihinayaki.mp4'),
(1, 'Dune.jpg', 'Dune Part Two .mp4'),
(3, 'Godzilla_x_kong_the_new_empire_poster.jpg', 'Godzilla x Kong  ThOfficial Trailer.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giftcard`
--
ALTER TABLE `giftcard`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `now_available`
--
ALTER TABLE `now_available`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_movies`
--
ALTER TABLE `top_movies`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `now_available`
--
ALTER TABLE `now_available`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `top_movies`
--
ALTER TABLE `top_movies`
  MODIFY `mid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
