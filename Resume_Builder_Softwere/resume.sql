-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 04:05 PM
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
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `age`, `email`, `country`) VALUES
(1, 'abc', 2, 'abc@gmail.com', ''),
(5, 'adhw@#<>?&*', 7, '', ''),
(6, 'sahil', 21, 'sahil@gmail.com', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_td` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_td` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(250) NOT NULL,
  `headline` varchar(250) NOT NULL,
  `contact` text NOT NULL,
  `objective` text NOT NULL,
  `skills` text NOT NULL,
  `experience` text NOT NULL,
  `education` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `image` longblob NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `created_td`, `updated_td`, `name`, `headline`, `contact`, `objective`, `skills`, `experience`, `education`, `url`, `image`, `status`) VALUES
(3, 3, '2023-01-25 12:49:46', '2023-01-25 12:49:46', 'xyz', 'web developer', '{\\\"email\\\":\\\"xyz@gmail.com\\\",\\\"mobile\\\":\\\"9876543211\\\",\\\"address\\\":\\\"Bhavnagar, Gujarat\\\"}', 'Microsoft and Google certified Solution Developer and AWS certified Solutions Architect. Built infrastructure to hendle milions of client files in proprietary system.', '[\\\"css\\\",\\\"js\\\"]', '[{\\\"company\\\":\\\"google\\\",\\\"jobrole\\\":\\\"web developer\\\",\\\"w_duration\\\":\\\"2022-2023\\\",\\\"work_desc\\\":\\\"Microsoft and Google certified Solution Developer and AWS certified Solutions Architect. Built infrastructure to hendle milions of client files in proprietary system.\\\\r\\\\n    \\\\r\\\\n\\\"}]', '[]', 'xc70y618b69a4p5zqr6', '', ''),
(4, 3, '2023-01-29 12:01:01', '2023-01-29 12:01:01', 'sahil kasawala', 'web developer', '{\"email\":\"xyz@gmail.com\",\"mobile\":\"9876543321\",\"address\":\"Bhavnagar, Gujarat\"}', 'Microsoft and Google certified Solution Developer and AWS certified Solutions Architect.Software engineer with over 5 years of experience in the technology industry.\\r\\n', '[\"html\",\"css\",\"java\",\"javascript\",\"vb.net\",\"php\",\"c\",\"c++\"]', '[{\"company\":\"Google\",\"jobrole\":\"Fullstack Developer\",\"w_duration\":\"2020-06-01 - 2022-06-01\",\"work_desc\":\"Built infrastructure to hendle milions of client files in proprietary system\\\\r\\\\n\"},{\"company\":\"faceebook\",\"jobrole\":\"web developer\",\"w_duration\":\"2020-06-01 - 2023-06-01\",\"work_desc\":\"Headed team that received 2023 BOSSIE award for cloud computing. Also handle backend servers\\\\r\\\\n\"}]', '[{\"college\":\"Gyanmanjari Diploma Engineering College\",\"course\":\"Diploma Engineering\",\"e_duration\":\"2020-06-01 - 2023-06-01\"},{\"college\":\"iit\",\"course\":\"b.tech\",\"e_duration\":\"2022-2023\"}]', '7q6969za134cpby6xr1', '', ''),
(25, 2, '2023-10-16 13:16:59', '2023-10-16 13:16:59', 'abc', 'h developer', '{\"email\":\"abc@gmail.com\",\"mobile\":\"din.com\",\"address\":\"abcd\"}', 'ewnfdkjqe', '[\"No Skills\",\"html\"]', '[]', '[{\"college\":\"xyz\",\"course\":\"swjq\",\"e_duration\":\"2022\"}]', '2a97zxq6p629ycb1r41', 0x2231363937343632323139373448433132352d7472692d73746174652d6275666665722e706e6722, '{\"status\":\"2\"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `created_td` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_td` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `About_Me` varchar(100) DEFAULT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `user_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_id`, `password`, `account_status`, `created_td`, `updated_td`, `first_name`, `last_name`, `About_Me`, `profession`, `user_image`) VALUES
(2, 'abc', 'abc@gmail.com', '123', 0, '2023-01-17 12:16:23', '2023-01-17 12:16:23', NULL, NULL, NULL, NULL, NULL),
(3, 'xyz', 'xyz@gmail.com', '12345', 0, '2023-01-17 15:39:34', '2023-01-17 15:39:34', NULL, NULL, NULL, NULL, NULL),
(4, 'sahil', 'sahil@gmail.com', '0', 0, '2023-01-17 16:42:13', '2023-01-17 16:42:13', NULL, NULL, NULL, NULL, NULL),
(6, 'm', 'm@j.k', '12', 0, '2023-01-17 18:03:58', '2023-01-17 18:03:58', NULL, NULL, NULL, NULL, NULL),
(7, 'yash', 'yash@gmail.com', '123', 0, '2023-01-19 04:47:34', '2023-01-19 04:47:34', NULL, NULL, NULL, NULL, NULL),
(8, 'Chaitanya ', 'chaitanya@gmail.com', 'chaitanya', 0, '2023-01-19 06:10:42', '2023-01-19 17:12:28', NULL, NULL, NULL, NULL, NULL),
(9, '', '', '', 0, '2023-01-20 16:52:29', '2023-01-20 16:52:29', NULL, NULL, NULL, NULL, NULL),
(10, 'c', 'c@g.c', '123c', 0, '2023-01-23 15:44:26', '2023-01-23 15:44:26', NULL, NULL, NULL, NULL, NULL),
(11, 'b', 'b@gmail.com', 'b', 0, '2023-01-30 03:08:45', '2023-01-30 03:08:45', NULL, NULL, NULL, NULL, NULL),
(12, 'Hello', 'h@gmail.com', 'h', 0, '2023-02-01 04:44:06', '2023-02-01 04:44:06', NULL, NULL, NULL, NULL, NULL),
(14, 'op', 'op@gmail.com', 'op123', 0, '2023-02-02 05:08:13', '2023-02-02 05:08:13', NULL, NULL, NULL, NULL, NULL),
(15, 'dfg', 'dfg@gmail.com', '246', 0, '2023-02-03 04:56:40', '2023-02-03 04:56:40', NULL, NULL, NULL, NULL, NULL),
(16, 'z', 'z@gmail.com', 'z@gmail.com', 0, '2023-10-16 13:15:06', '2023-10-16 13:15:06', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
