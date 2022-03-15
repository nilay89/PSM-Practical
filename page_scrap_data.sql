-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 04:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nilay_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_scrap_data`
--

CREATE TABLE `page_scrap_data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_scrap_data`
--

INSERT INTO `page_scrap_data` (`id`, `title`, `description`, `image`, `url`) VALUES
(1, 'Google My Business Logo: How To Add, Remove & Optimize? - RecurPost	A', 'Are you interested in learning about Google My Business Logo, or how to optimize your Google My Business Profile? If yes, give it a read', 'https://blogmedia.recurpost.com/wp-content/uploads/2021/12/Google-My-Business-Logo-feature.png', NULL),
(2, 'Google My Business Logo: How To Add, Remove & Optimize? - RecurPost	A', 'Are you interested in learning about Google My Business Logo, or how to optimize your Google My Business Profile? If yes, give it a read', 'https://blogmedia.recurpost.com/wp-content/uploads/2021/12/Google-My-Business-Logo-feature.png', NULL),
(5, 'Google My Business Logo: How To Add, Remove & Optimize? - RecurPost', 'Are you interested in learning about Google My Business Logo, or how to optimize your Google My Business Profile? If yes, give it a read.', 'https://blogmedia.recurpost.com/wp-content/uploads/2021/12/Google-My-Business-Logo-feature.png', 'https://recurpost.com/blog/google-my-business-logo-how-to-add-remove-optimizegoogle-my-business-logo/'),
(7, 'Google My Business Logo: How To Add, Remove & Optimize? - RecurPost', 'Are you interested in learning about Google My Business Logo, or how to optimize your Google My Business Profile? If yes, give it a read.', 'https://blogmedia.recurpost.com/wp-content/uploads/2021/12/Google-My-Business-Logo-feature.png', 'https://recurpost.com/blog/google-my-business-logo-how-to-add-remove-optimizegoogle-my-business-logo/'),
(8, 'Google My Business Logo: How To Add, Remove & Optimize? - RecurPost', 'Are you interested in learning about Google My Business Logo, or how to optimize your Google My Business Profile? If yes, give it a read.', 'https://blogmedia.recurpost.com/wp-content/uploads/2021/12/Google-My-Business-Logo-feature.png', 'https://recurpost.com/blog/google-my-business-logo-how-to-add-remove-optimizegoogle-my-business-logo/'),
(10, 'Google My Business Logo: How To Add, Remove & Optimize? - RecurPost', 'Are you interested in learning about Google My Business Logo, or how to optimize your Google My Business Profile? If yes, give it a read.', 'https://blogmedia.recurpost.com/wp-content/uploads/2021/12/Google-My-Business-Logo-feature.png', 'https://recurpost.com/blog/google-my-business-logo-how-to-add-remove-optimizegoogle-my-business-logo/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page_scrap_data`
--
ALTER TABLE `page_scrap_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page_scrap_data`
--
ALTER TABLE `page_scrap_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
