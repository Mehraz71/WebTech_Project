-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2025 at 10:13 PM
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
-- Database: `brta`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctgbusfare`
--

CREATE TABLE `ctgbusfare` (
  `id` int(50) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `end_point` varchar(255) NOT NULL,
  `fare` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctgbusfare`
--

INSERT INTO `ctgbusfare` (`id`, `start_point`, `end_point`, `fare`) VALUES
(1000, 'GEC', 'Agrabad', 60),
(1003, '2noGate', 'Baddarhat', 20);

-- --------------------------------------------------------

--
-- Table structure for table `dhakacityfare`
--

CREATE TABLE `dhakacityfare` (
  `id` int(50) NOT NULL,
  `start_point` varchar(50) NOT NULL,
  `end_point` varchar(50) NOT NULL,
  `fare` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dhakacityfare`
--

INSERT INTO `dhakacityfare` (`id`, `start_point`, `end_point`, `fare`) VALUES
(2, 'BijoySarani', 'Karwanbajar', 40),
(3, 'Mirpur', 'Karwanbajar', 60),
(4, 'Mirpur 10', 'Mirpur 14', 10),
(6, 'Mirpur 10', 'Motijheel', 80);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `feedback`) VALUES
('sazid', 'mehrazalamofficial71@gmail.com', 'sdadfsdfgdsfg'),
('sazid', 'ggff59849@gmail.com', 'bangladesh is high'),
('sazid', 'ggff59849@gmail.com', 'bangladesh is high'),
('alpha', 'alpha@gmail.com', 'Website is nice'),
('raze', 'razekumar@gmail.com', 'Website is nice'),
('bird', 'bird@gmail.com', 'Hello bird'),
('bird', 'bird@gmail.com', 'asdasasdas'),
('BIRD', 'BIRD@GMAIL.COM', 'HELLO BIRD');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `license_number` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `area` varchar(255) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `officer_name` varchar(255) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`license_number`, `phone`, `area`, `violation`, `officer_name`, `amount`) VALUES
('DM009235', 4534345, 'gulshan', 'No Helmet', 'Karim', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `intercityfare`
--

CREATE TABLE `intercityfare` (
  `id` int(50) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `end_point` varchar(255) NOT NULL,
  `fare` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intercityfare`
--

INSERT INTO `intercityfare` (`id`, `start_point`, `end_point`, `fare`) VALUES
(10000, 'DHAKA', 'CHITTAGONG', 2000),
(10002, 'DHAKA', 'MYMENSINGH', 300),
(10003, 'DHAKA', 'SYLHET', 800),
(10004, 'DHAKA', 'KHULNA', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `ownership_transfer`
--

CREATE TABLE `ownership_transfer` (
  `id` int(11) NOT NULL,
  `first_owner_name` varchar(255) DEFAULT NULL,
  `first_owner_fname` varchar(255) DEFAULT NULL,
  `first_owner_dob` date DEFAULT NULL,
  `first_owner_address` text DEFAULT NULL,
  `first_owner_phone` varchar(15) DEFAULT NULL,
  `first_owner_nid` varchar(20) DEFAULT NULL,
  `first_owner_photo` varchar(255) DEFAULT NULL,
  `second_owner_name` varchar(255) DEFAULT NULL,
  `second_owner_fname` varchar(255) DEFAULT NULL,
  `second_owner_dob` date DEFAULT NULL,
  `second_owner_email` varchar(255) DEFAULT NULL,
  `second_owner_address` text DEFAULT NULL,
  `second_owner_phone` varchar(15) DEFAULT NULL,
  `second_owner_nid` varchar(20) DEFAULT NULL,
  `second_owner_photo` varchar(255) DEFAULT NULL,
  `vehicle_registration` varchar(50) DEFAULT NULL,
  `vehicle_tax_token` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ownership_transfer`
--

INSERT INTO `ownership_transfer` (`id`, `first_owner_name`, `first_owner_fname`, `first_owner_dob`, `first_owner_address`, `first_owner_phone`, `first_owner_nid`, `first_owner_photo`, `second_owner_name`, `second_owner_fname`, `second_owner_dob`, `second_owner_email`, `second_owner_address`, `second_owner_phone`, `second_owner_nid`, `second_owner_photo`, `vehicle_registration`, `vehicle_tax_token`, `status`) VALUES
(4, 'Alice Johnson', 'ABC', '2025-01-09', '123 Maple Lane', '0192837465', '1928374650912', '../ownerspic/1st_profile.png', 'Opu', 'Mr.Karim', '2019-01-02', 'opu@gmail.com', 'Gulshan 2', '0120122123', '90876545', '../ownerspic/2nd_profile (B).png', 'LMN9101', '3452175', 'pending'),
(5, 'Mehraz Alam', 'M.Alam', '2025-01-01', 'Road5', '0192021375', '1928374650912', '../ownerspic/profile.png', 'Kalam', 'Mr.Karim', '2025-01-07', 'kere@gmail.com', 'Road5', '0192021375', '345565756766', '../ownerspic/profile (B).png', 'ABC1234', '3452175', 'rejected'),
(6, 'jack', 'jackbap', '2025-01-12', 'full street address', '11111111111', '1928374650912', NULL, 'gorge', 'gorgebap', '2025-01-14', 'me@mydomain.com', 'full street address', '22222222222', '90876545', NULL, 'LMN9101', '123332', 'pending'),
(7, 'my first name', 'my first name', '2025-01-09', 'full street address', '11111111111', '1928374650912', NULL, 'karim', 'my first name', '2025-01-21', 'me@mydomain.com', 'full street address', '22222222222', '3455657', NULL, 'LMN9101', '3452175', 'pending'),
(8, 'my first name', 'my first name', '2025-01-09', 'full street address', '11111111111', '1928374650912', NULL, 'karim', 'my first name', '2025-01-21', 'me@mydomain.com', 'full street address', '22222222222', '3455657', NULL, 'LMN9101', '3452175', 'pending'),
(9, 'my first name', 'my first name', '2025-01-09', 'full street address', '11111111111', '1928374650912', NULL, 'karim', 'my first name', '2025-01-21', 'me@mydomain.com', 'full street address', '22222222222', '3455657', NULL, 'LMN9101', '3452175', 'pending'),
(10, 'Mehraz Alam', 'MAlam', '2025-01-16', 'Road5', '01920213750', '23444321', NULL, 'Mehraz Alam', 'Malam', '2025-01-09', 'opu@gmail.com', 'Road5', '01920213750', '345565756766', NULL, 'LMN9101', '123332', 'pending'),
(11, 'Mehraz Alam', 'MAlam', '2025-01-16', 'Road5', '01920213750', '23444321', 'phpE306.tmp', 'Mehraz Alam', 'Malam', '2025-01-09', 'opu@gmail.com', 'Road5', '01920213750', '345565756766', 'phpE307.tmp', 'LMN9101', '123332', 'pending'),
(12, 'Mehraz Alam', 'MAlam', '2025-01-16', 'Road5', '55555555555', '23444321', '../ownerspic/profile (B).png', 'Mehraz Alam', 'Malam', '2025-01-09', 'opu@gmail.com', 'Road5', '01920213750', '345565756766', '../ownerspic/profile.png', 'LMN9101', '123332', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` bigint(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `phone`, `address`, `usertype`) VALUES
(1000, 'admin', 'admin', 'root', 0, '##', 'admin'),
(1004, 'sazid', 'mehrazalamofficial71@gmail.com', '$2y$10$RQuaygJHlxOVeNrDF5IeseWoxhTgnMlMhO/MRdWUP1OzbnB59rRx2', 1920213750, 'Road5', 'user'),
(1008, 'Jack', 'nuka4424@gmail.com', '$2y$10$2cDrABXUcahGqe6g0P20Ae/fkhXeKXp4v5jitPsJyAvVyN5417SyS', 1920213750, 'Road5', 'admin'),
(1009, 'alamin', 'ggff59849@gmail.com', '$2y$10$a2fXHUVWEabUV9RjA3P7XOAd.UVvpG9YI/qnXiIxiZ9ygFYRRb9Ki', 1920213750, 'Road5', 'admin'),
(1010, 'sazid', 'mehrazofficial71@gmail.com', '$2y$10$F5pzvcCF9WNhhYOdgEQZouDKiA.ZR4xXW8CRALRERLBQ2kXDLmdqe', 1920213750, 'Road5', 'user'),
(1012, 'user', 'user@gmail.com', '$2y$10$H8RGhfQmSPcLIQY9h1UdDuAq1ZGXiOLo1PV0iro2lWwxVXmD8y1Vq', 1920213750, 'Road5', 'user'),
(1013, 'sazid', 'mrab4580@gmail.com', '$2y$10$B2kkEmWR1eP8hlzQDHRqXeV0dr4RG4IhSHfQGKazrPVkUcK/P7wdm', 1920213750, 'Road5', 'user'),
(1014, 'pepe', 'pepe@gmail.com', '$2y$10$PfIPn7W/zYGuy9rzyF1BbuLwY4fgbXMHH6cssxsw09LJSA221OdAm', 1920213750, 'Road5', 'user'),
(1015, 'alpha', 'alpha@gmail.com', '$2y$10$CZh/yhVBSh7t3eXGXEZJQeHAlyv7oZ6BU2JL/St5RpDncII5D60ya', 1920213750, 'Road5', 'user'),
(1016, 'opu', 'ashrafulislamopu20@gmail.com', '$2y$10$yPFMwdj4/0.ODzBxz5PlzuXmZCzB1k4zVZjzy9toLJiI/X8KPtI/O', 1956376356, 'Road5', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_registration`
--

CREATE TABLE `vehicle_registration` (
  `id` int(11) NOT NULL,
  `vehicle_registration_number` varchar(20) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_address` varchar(255) NOT NULL,
  `owner_phone` varchar(15) NOT NULL,
  `owner_nid` varchar(20) NOT NULL,
  `owner_image` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_registration`
--

INSERT INTO `vehicle_registration` (`id`, `vehicle_registration_number`, `owner_name`, `owner_address`, `owner_phone`, `owner_nid`, `owner_image`, `registration_date`) VALUES
(1, 'ABC1234', 'Mehraz Alam', 'Road5', '0192021375', '3455657', '../ownerspic/2nd_profile.png', '2025-01-04 08:36:33'),
(2, 'XYZ5678', 'Jane Doe', '789 Oak Avenue', '0987654321', '9876543210987', '/path/to/ownerspic/jane_doe.jpg', '2025-01-04 08:36:33'),
(3, 'LMN9101', 'Alice Johnson', '123 Maple Lane', '0192837465', '1928374650912', '/path/to/ownerspic/alice_johnson.jpg', '2025-01-04 08:36:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctgbusfare`
--
ALTER TABLE `ctgbusfare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhakacityfare`
--
ALTER TABLE `dhakacityfare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intercityfare`
--
ALTER TABLE `intercityfare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownership_transfer`
--
ALTER TABLE `ownership_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vehicle_registration`
--
ALTER TABLE `vehicle_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctgbusfare`
--
ALTER TABLE `ctgbusfare`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `dhakacityfare`
--
ALTER TABLE `dhakacityfare`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `intercityfare`
--
ALTER TABLE `intercityfare`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `ownership_transfer`
--
ALTER TABLE `ownership_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `vehicle_registration`
--
ALTER TABLE `vehicle_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
