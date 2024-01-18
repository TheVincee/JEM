-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 06:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_owners`
--

CREATE TABLE `admin_owners` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_owners`
--

INSERT INTO `admin_owners` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'asdfdsf', 'asdfdsf', 'admin123@gmail.com', '$2y$10$7vI5d7txd/4jrpO/nfSTJeiJRkIoSnvFW1p198zXcjrd4Pehkhjdi'),
(2, 'asdasd', 'asdsad', 'thevinceursal123@gmail.com', '$2y$10$VCg3l03UUCTcUCGkmafvOOslJ7jjL8PMNhMDHEdCUKO3TX6p2bEuq'),
(3, 'asdf', 'asdfd', 'vince1.harvard2023@gmail.com', '$2y$10$cnO2eMkAzHf5zJKj4oDau.A/mNsEjGY/CBnA4vjvRTadvJlvUymI2'),
(4, 'asdfdsf', 'asdfd', 'ruytru@gmail.com', '$2y$10$kTdIyG0CIRryFoGLXVF4ue/0oxnQd4Q4DTbMM/legQE6WazAYNfS6'),
(5, 'asdfds', 'asdfdsfdsa', 'thevinceursal123@gmail.com', '$2y$10$OnLrtnWKimq0XUJ//2DeHuSdN2w8pc8ZSeG6yXjmoFMjwa7ZvS56K'),
(6, 'afdsafasd', 'asdfdsafas', 'thevinceursal123@gmail.com', '$2y$10$tJ3vjv.bS9fvCa.H1FeTLuPvyKd3pHXa/4RgXKQ3ceW0mDFXIKjtC'),
(7, 'asdfsaf', 'lee', 'kingwildfirezero11@gmail.com', '$2y$10$9lSRhdUtLyJelPUMcEWCMeI2eqd7JTsSp8pfXxyOUHbelLTqNdD/6');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT NULL,
  `vehicle` varchar(255) DEFAULT NULL,
  `issues` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `address`, `datetime`, `vehicle`, `issues`, `status`) VALUES
(96, 'vincent', 'ursalvince7@gmail.com', '09100380217', 'Sitio Cabaw', '2024-01-17 12:10:00', 'motorcycle', 'Leaking Oil', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `vehicle` varchar(255) DEFAULT NULL,
  `issues` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `address`, `datetime`, `category`, `subcategory`) VALUES
(16, 'King Kozuki', 'king785zero@gmail.com', '09100380217', 'cebu city north bulevard', '2023-12-09 00:18:00', '', ''),
(17, 'John Carlo Macatimpag', 'Jamesnegansmith222@gmail.com', '09100380217', 'Barangay Wakwak Sitio Kawayanan', '2023-11-25 11:45:00', 'transmission', 'transmissionfluid leak');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`id`, `title`, `start_event`, `end_event`) VALUES
(14, 'kl', '2024-01-08 00:00:00', '2024-01-14 00:00:00'),
(15, 'KSdas', '2024-01-14 00:00:00', '2024-01-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `issue` varchar(200) DEFAULT NULL,
  `vehicle` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(16, 'vince ', 4, 'asda', 1705115820),
(17, 'VInce', 4, 'ok rah siya ', 1705133400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `admin` varchar(300) NOT NULL,
  `user_type` enum('regular','admin') NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `admin`, `user_type`) VALUES
(60, 'adfsf', 'asdfasdf', 'ink123@gmail.com', '$2y$10$U0ff8mQEGdNcbrIyBgXFHevAFV5CrLs.bV1UplosQ.b7zCQ/iIQSS', '', 'regular'),
(61, 'asd', 'asdas', 'ursalvince7@gmail.com', '$2y$10$ORVyNE2zcQpeWJifSHaiOuD0ggQi4oLWwG3aPT05SSvHnmBJruhyW', '', 'regular'),
(62, 'asd', 'asdas', 'ursalvince7@gmail.com', '$2y$10$gUQq4bU13ku.7cczKrA79.4IUczy09z/CPbRrTPQf84Z5dMHJQgvO', '', 'regular'),
(63, 'asd', 'asdas', 'ursalvince7@gmail.com', '$2y$10$9pncxddt6GLSxWraCr905OAPjEid/wL76IvToDqTql9oWAJ.85awi', '', 'regular'),
(64, 'asd', 'asdas', 'ursalvince7@gmail.com', '$2y$10$yig6qIg4H30OYxtpCdawP.O4K.B4FIKnQonXU5L3bcEpGHamAE6US', '', 'regular'),
(65, 'asd', 'asdfdsaf', 'ursalvince7@gmail.com', '$2y$10$KmkhhPYtqxqHnVW3q..kXOYPG1lkKdH2Ol.p1I3KcPROzswfm749G', '', 'regular'),
(66, 'asdsad', 'asdasd', 'king@gmail.com', '$2y$10$Z6CtNnnyDufvJiFkxJm2f.QQYI0zvhnLS0VnWtmBBuLVcm2L6s1FW', '', 'regular'),
(67, 'asdfsd', 'asdfdsfas', 'jam@gmail.com', '$2y$10$VaSuXgJlqEbJtGrVIyLL6e5MA7O0/4hXJK.zmQ9F2xXHT1Pe1gJ12', '', 'regular'),
(68, 'asdfa', 'asdf', 'jam@gmail.com', '$2y$10$K2NsWsg3rBzFOa7elj9Tbuxk0SvJvfq4oy7nA546VH6ZZ7DZgqRO2', '', 'regular'),
(69, 'asdf', 'asdf', 'jamm@gmail.com', '$2y$10$3huryNegHPfIrSaLBEAsPOdUz2ZPx1jVQSiERqWbiigJDm0EzESfa', '', 'regular'),
(70, 'asdsa', 'asdasd', 'king@gmail.com', '$2y$10$LfIK6GgfEtwv.Of/VaXffeqVnU8IEZtrBp4U5miEf05AOLaFrbM/a', '', 'regular'),
(71, 'asdsa', 'asdasd', 'king@gmail.com', '$2y$10$2wuKAzGMP46Ki8i0vl0TEOqakykMYB6mLZmnqRs9HXOj/3cUHwn6q', '', 'regular'),
(72, 'asdsad', 'asdsad', 'ursalvince7@gmail.com', '$2y$10$/jMCGs7kM5gmzdGp9fMErecc99yl5BtxNajmFQADJqnP13tVLQOwq', '', 'regular'),
(73, 'asda', 'asda', 'ursalvince7@gmail.com', '$2y$10$zXuZ5iSYRmy0ft6nGI.KeuYxOWiCUhaQH.Ve9h50XvSP4DficzMAm', '', 'regular'),
(74, 'asdas', 'asdsad', 'ink123@gmail.com', '$2y$10$YU27DEfTEXFdC3mxZt9xgeAK9lXeBIhvuOk8oEScaF9nBNNDVOEXe', '', 'regular'),
(75, 'asdas', 'asdasd', 'ink123@gmail.com', '$2y$10$QMRQj6A7gSFH6ZW1uDQAq.kE4YUs9nAiMIX9JsHA9.Y.ApYe.cfvS', '', 'regular'),
(76, 'asdas', 'asdasd', 'ink123@gmail.com', '$2y$10$2E3dpTnB5dGvK9S3xxPoLutHUJmnpdtwNZSlmkupZ8wn9qL6plkBi', '', 'regular'),
(77, 'asdf', 'asdasdasdas', 'ink123@gmail.com', '$2y$10$qmQu.c0REKljgypK6yrkm.h.3FglqIyfd4ixEmAh1cINePs.bhbwO', '', 'regular'),
(78, 'asd', 'asd', 'admin@yahoo.com', '$2y$10$A9UoZyq3EHTSTfo4bdgG.ONz6p2TsIkD2wTQ7IqJl.qS7NTh9QCU2', '', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `user_inbox`
--

CREATE TABLE `user_inbox` (
  `user_id` int(11) NOT NULL,
  `Name` varchar(450) NOT NULL,
  `Reasons` varchar(450) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_inbox`
--

INSERT INTO `user_inbox` (`user_id`, `Name`, `Reasons`, `Time`) VALUES
(10, 'vincent', '123', '2024-01-11 05:41:26.835806'),
(11, 'Sengkou lee', 'asdfdsf', '2024-01-17 08:20:57.753985'),
(12, 'Sengkou lee', 'asdfdsf', '2024-01-17 08:21:03.136485'),
(13, 'Sengkou lee', 'asdfdsf', '2024-01-17 08:21:07.508885'),
(14, 'Sengkou lee', 'asdfdsf', '2024-01-17 08:21:16.162260'),
(15, 'Sengkou lee', 'asdfdsf', '2024-01-17 08:21:24.063730');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_owners`
--
ALTER TABLE `admin_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_inbox`
--
ALTER TABLE `user_inbox`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_owners`
--
ALTER TABLE `admin_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user_inbox`
--
ALTER TABLE `user_inbox`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
