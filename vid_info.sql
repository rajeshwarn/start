-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2017 at 09:30 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mkbksh`
--

-- --------------------------------------------------------

--
-- Table structure for table `vid_info`
--

CREATE TABLE `vid_info` (
  `id` int(200) NOT NULL,
  `v_id` varchar(50) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vid_info`
--

INSERT INTO `vid_info` (`id`, `v_id`, `thumbnail`, `title`) VALUES
(1, '_YJHBY85blQ', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 1'),
(2, '8aRMePr-3eE', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 2'),
(3, 'FHPS5TvWBN4', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 3'),
(4, 'NI_RP5uS7hs', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 4'),
(5, 'l_vFx73SaD8', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 5'),
(6, 'I_XYKgqHXnM', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 6'),
(7, 'rDefvmMIgNM', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 7'),
(8, '9ZypuffbOMg', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 8'),
(9, '-CVFAPJuGT0', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 9'),
(10, '66jw-1cC6-k', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 10'),
(11, '3l3blI4k61g', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 11'),
(12, 'IYQLpBuwPzg', 'https://i.ytimg.com/vi/_YJHBY85blQ/hqdefault.jpg', 'Main Kuch Bhi Kar Sakti Hoon | Episode 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vid_info`
--
ALTER TABLE `vid_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `v_id` (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vid_info`
--
ALTER TABLE `vid_info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
