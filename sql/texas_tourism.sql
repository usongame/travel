-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 12:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `texas_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`) VALUES
(1, 'Annapurna'),
(3, 'Bhaktapur'),
(4, 'Chitwan'),
(5, 'Kathmandu'),
(6, 'Lumbini');

-- --------------------------------------------------------

--
-- Table structure for table `packagebookings`
--

CREATE TABLE `packagebookings` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `participants` int(11) NOT NULL,
  `reservation_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packagebookings`
--

INSERT INTO `packagebookings` (`id`, `package_name`, `name`, `phone`, `address`, `email`, `participants`, `reservation_date`) VALUES
(3, 'Package 1', 'Rabi', '9865223', 'Mitraparl', 'rabi@gmail.com', 20, '2020-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `days` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `desc` longtext NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL,
  `img_4` varchar(255) NOT NULL,
  `img_5` varchar(255) NOT NULL,
  `img_6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `location`, `days`, `nights`, `image`, `price`, `desc`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`) VALUES
(1, 'Package 1', 'kathmandu', 5, 5, 'ktm1.jpg', 6000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.', 'ktm2.jpg', 'ktm3.jpg', 'ktm4.jpg', 'ktm5.jpg', 'ktm6.jpg', 'ktm7.jpg'),
(2, 'Package 2', 'Bhaktapur', 5, 4, 'bhaktapur.png', 10000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt magnam cumque quisquam voluptate? Labore numquam atque dolorem suscipit asperiores debitis accusantium quis ad, voluptatem consequatur voluptates, similique inventore dignissimos.', 'annapurna.jpg', 'banner1.jpg', 'bhaktapur.png', 'chitwan.jpg', 'cover.jpg', 'langtang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `gallery_id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `gallery_id`, `image`) VALUES
(1, 1, 'ktm1.jpg'),
(6, 3, 'ktm8.jpg'),
(7, 3, 'ktm3.jpg'),
(8, 4, 'chitwan.jpg'),
(9, 5, 'chitwan3.jpg'),
(10, 6, 'lumbini.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `querie` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `phone`, `email`, `querie`) VALUES
(1, 'Winnee', '87554555', 'winnee@gmai.copm', 'Curious which components explicitly require jQuery, our JS, and Popper.js? Click the show components link below. If you’re at all unsure about the general page structure, keep reading for an example page template.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Project', 'Nitesh');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclebookings`
--

CREATE TABLE `vehiclebookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reservation_from` varchar(255) NOT NULL,
  `reservation_to` varchar(255) NOT NULL,
  `note` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehiclebookings`
--

INSERT INTO `vehiclebookings` (`id`, `name`, `phone`, `address`, `email`, `reservation_from`, `reservation_to`, `note`) VALUES
(1, 'Rabi', '98656006556', 'Siphal', 'rabi@gmail.cm', '2020-02-04', '2020-02-20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packagebookings`
--
ALTER TABLE `packagebookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehiclebookings`
--
ALTER TABLE `vehiclebookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `packagebookings`
--
ALTER TABLE `packagebookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehiclebookings`
--
ALTER TABLE `vehiclebookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
