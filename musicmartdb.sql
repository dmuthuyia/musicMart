-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 08:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicmartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `album_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislikes` int(11) DEFAULT NULL,
  `artist_id` int(11) NOT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `title`, `description`, `url`, `album_img`, `likes`, `dislikes`, `artist_id`, `distributor_id`, `created_at`, `updated_at`, `price`) VALUES
(1, 'poetic felony', NULL, 'poetic-felony', 'poetic-felony.jpg', 8787, 67, 1, 67, '2019-06-18 21:00:00', '2019-06-23 21:00:00', '500.00'),
(2, 'Killer queen', NULL, 'killer-queen', 'killer-queen.jpg', 6788, 45, 2, 76, '2019-06-23 21:00:00', '2019-06-23 21:00:00', '300.00');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `article_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `love` int(11) DEFAULT NULL,
  `hate` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SurName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Age` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Race` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accepted_terms` tinyint(1) NOT NULL DEFAULT '1',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `FirstName`, `SurName`, `UserName`, `gender`, `Age`, `Race`, `Country`, `origin`, `City`, `Location`, `Phone`, `Phone2`, `postal_address`, `Religion`, `accepted_terms`, `confirmed`, `confirmation_code`, `verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Michael', 'West', 'michael-west', '1', '23', NULL, 'KE', 'KE', 'NAIROBI', 'NAIROBI', '726666666', '726666666', NULL, NULL, 1, 1, NULL, 1, NULL, '2019-06-23 21:00:00', '2019-06-23 21:00:00'),
(2, 'Joan', 'Hekim', 'joan-hekim', '0', '30', NULL, 'TZ', 'TZ', 'ARUSHA', 'ARUSHA', '726666666', '726666666', NULL, NULL, 1, 1, NULL, 1, NULL, '2019-06-23 21:00:00', '2019-06-23 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `album_id`, `user_id`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(4, 1, 3, '1.00', '0.00', '2019-06-25 03:17:45', '2019-06-25 03:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `title`, `description`, `url`, `genre_img`, `created_at`, `updated_at`) VALUES
(1, 'Hip hop', NULL, 'hip-hop', 'hip-hop.jpg', '2019-06-23 21:00:00', '2019-06-23 21:00:00'),
(2, 'Dance hall', NULL, 'dance-hall', 'dance-hall.jpg', '2019-06-23 21:00:00', '2019-06-23 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `song_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislikes` int(11) DEFAULT NULL,
  `artist_id` int(11) NOT NULL,
  `producer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `title`, `description`, `url`, `song_img`, `album_id`, `genre_id`, `likes`, `dislikes`, `artist_id`, `producer_id`, `created_at`, `updated_at`) VALUES
(1, 'Kings', NULL, 'kings', 'kings.jpg', 1, 1, 6676, 23, 1, NULL, '2019-06-23 21:00:00', '2019-06-23 21:00:00'),
(2, 'Break your bone', NULL, 'break-your-bone', 'break-your-bone.jpg', 2, 2, 656, 56, 2, 76, '2019-06-23 21:00:00', '2019-06-23 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('Admin','buyer','artist','Guest') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'buyer',
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mypic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'missing.jpg',
  `date_of_birth` datetime DEFAULT NULL,
  `dobyear` int(11) DEFAULT NULL,
  `dobmonth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dobday` int(11) DEFAULT NULL,
  `is_female` tinyint(1) NOT NULL DEFAULT '0',
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Age` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Race` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` decimal(10,7) DEFAULT NULL,
  `lng` decimal(10,7) DEFAULT NULL,
  `LookingFor` text COLLATE utf8_unicode_ci,
  `ShortBio` text COLLATE utf8_unicode_ci,
  `LongBio` text COLLATE utf8_unicode_ci,
  `Religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accepted_terms` tinyint(1) NOT NULL DEFAULT '1',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `FirstName`, `LastName`, `UserName`, `url`, `mypic`, `date_of_birth`, `dobyear`, `dobmonth`, `dobday`, `is_female`, `gender`, `Age`, `Race`, `Country`, `origin`, `City`, `Location`, `Phone`, `Phone2`, `postal_address`, `lat`, `lng`, `LookingFor`, `ShortBio`, `LongBio`, `Religion`, `accepted_terms`, `confirmed`, `confirmation_code`, `verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'dmuthuyia@gmail.com', '12345678', 'buyer', NULL, NULL, 'denz', NULL, 'missing.jpg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 0, '2LtKJXZcTykzn2WwWZUowf9LLddWihCO0lnb37sVZV0Ug1gsa4URzy5st8Hs', NULL, '2019-06-24 19:18:05'),
(5, 'washeys88@gmail.com', 'konica', 'buyer', NULL, NULL, 'Kelvin', NULL, 'missing.jpg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 0, NULL, NULL, NULL),
(10, 'Sharoncherotich112@gmail.com', 'Melvin2000', 'buyer', NULL, NULL, 'Birgen', NULL, 'missing.jpg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 0, NULL, NULL, NULL),
(11, 'florence.birgen@gmail.com', 'slimshady', 'buyer', NULL, NULL, 'Flo', NULL, 'missing.jpg', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `song_ibfk_3` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
