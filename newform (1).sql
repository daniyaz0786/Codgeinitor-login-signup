-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 08:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newform`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(15) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `mobilenumber` int(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `signup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fullname`, `bio`, `mobilenumber`, `address`, `image`, `created_at`, `signup_id`) VALUES
(1, 'daniyaz ali', 'web developer', 2147483647, '387 bahadurgunj Allahabad', '62d549ef4a811.jpg', '2022-07-14 00:00:00', 2),
(5, '', '', 0, '', '62d556687349d.jpeg', '0000-00-00 00:00:00', NULL),
(30, '', '', 0, '', '62d62982c9549.jpg', '0000-00-00 00:00:00', NULL),
(31, '', '', 0, '', '62d62b987fb4f.jpg', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sig_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `pro_pic` varchar(500) NOT NULL DEFAULT 'proimg.jpg',
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sig_id`, `email`, `password`, `cpassword`, `pro_pic`, `created_at`) VALUES
(2, 'anilkumar@gmail.com', '123456', 'sdfsdf', 'default-profile.jpg', '0000-00-00'),
(3, 'admin@demo.com1', 'xscscscsc', 'DAsfdasfsaf', 'proimg.jpg', '2022-07-05'),
(4, 'admin@demo1232.com', 'xscscscsc', ' $this->form_validation->set_message(\'is_unique\', \'The %s is already taken\');', 'proimg.jpg', '2022-07-05'),
(5, 'daniyaz0786@gmail.com', '123456', '123456', 'proimg.jpg', '2022-07-05'),
(6, 'daniyaz07869@gmail.com', '123456', '1234567', 'proimg.jpg', '2022-07-05'),
(7, 'daniyaz07866@gmail.com', '123456', 'wrqwrqwrqr', 'proimg.jpg', '2022-07-05'),
(8, 'admin@111111111demo.com', '123456', '123456', 'proimg.jpg', '2022-07-05'),
(9, 'daniyaz07860786@gmail.com', '123456', '123456', 'proimg.jpg', '2022-07-05'),
(10, 'deepak@gmail.com', '123456', '123456', 'proimg.jpg', '2022-07-05'),
(11, 'daniyaz078600000000@gmail.com', '585028aa0f794af812ee3be8804eb14a', '585028aa0f794af812ee3be8804eb14a', 'proimg.jpg', '2022-07-05'),
(12, 'daniyaz120786@gmail.com', '585028aa0f794af812ee3be8804eb14a', '585028aa0f794af812ee3be8804eb14a', 'proimg.jpg', '2022-07-05'),
(13, 'daniyaz88887880786@gmail.com', '860335e68ff70bec207b1073e6bd236e', '860335e68ff70bec207b1073e6bd236e', 'proimg.jpg', '2022-07-05'),
(14, 'daniyaz0000000786@gmail.com', 'bb78d0577982ad2653d7471b7800b0aa', 'bb78d0577982ad2653d7471b7800b0aa', 'proimg.jpg', '2022-07-05'),
(15, 'daniyazpppppp0786@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-05'),
(16, 'daniyaz@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(17, 'daniyaz000@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(18, 'admin@demo.com3', '9ff264ad146221f2a8609464c2cb81e1', '9ff264ad146221f2a8609464c2cb81e1', 'proimg.jpg', '2022-07-06'),
(19, 'daniyaz000@gmail.com99', '26a6d951a5dab85c1cfdd286f35aaebc', '26a6d951a5dab85c1cfdd286f35aaebc', 'proimg.jpg', '2022-07-06'),
(20, 'deepak123@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(21, 'jhjll@gmail.com.com', '9ba3bb0627744dcccedf7b85a9d32923', '9ba3bb0627744dcccedf7b85a9d32923', 'proimg.jpg', '2022-07-06'),
(22, 'admin098@demo.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(23, 'admin0987@demo.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(24, 'Sameerkhan@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(25, 'Sameerkhan098@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(26, 'sunil@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(27, 'anilkumar123@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(28, 'daniyaz078645678@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-06'),
(29, 'daniyaz00786@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-07'),
(30, 'riza@gmail.com', '16c78fe66ff54399b8f121c0cebc5940', '16c78fe66ff54399b8f121c0cebc5940', 'proimg.jpg', '2022-07-07'),
(31, 'daniyazali0786@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-07'),
(32, 'daniyaz000786@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-07'),
(33, 'anilkumar11111111@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-07'),
(34, 'anilkumaryy@gmail.com', '0eb6818a288473196fd5d74194c27fd3', '0eb6818a288473196fd5d74194c27fd3', 'proimg.jpg', '2022-07-07'),
(35, 'amit@gmail.com', '0eb6818a288473196fd5d74194c27fd3', '0eb6818a288473196fd5d74194c27fd3', 'proimg.jpg', '2022-07-07'),
(36, 'shivam@gmail.com', '85b196c3e39457d91cab9c905f9a11c0', '85b196c3e39457d91cab9c905f9a11c0', 'proimg.jpg', '2022-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `stform`
--

CREATE TABLE `stform` (
  `st_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stform`
--

INSERT INTO `stform` (`st_id`, `name`, `email`, `phone`, `address`, `image`, `created_at`) VALUES
(59, 'dfgfdfg', 'daniyaz0786@gmail.com', 2147483647, '387 bahadurgunj Allahabad', '', 22),
(61, 'daniyaz alijjjjjjj', 'daniyaz0786@gmail.com', 2147483647, '387 bahadurgunj Allahabad', '62ce52aaf2a14.jpg', 22),
(62, 'daniyaz ali', 'daniyaz0786@gmail.com', 2147483647, '387 bahadurgunj Allahabad', '62cfa733b4515.jpg', 22),
(63, 'Riza', 'daniyaz0786@gmail.com', 2147483647, '387 bahadurgunj Allahabad', '62cfb491682a9.jpg', 22),
(65, 'daniyaz ali', 'daniyaz0786@gmail.com', 2147483647, '387 bahadurgunj Allahabad', '62d14cfdbf5b4.jpg', 22),
(66, 'daniyaz ali', 'daniyaz0786@gmail.com', 2147483647, '387 bahadurgunj Allahabad', '62d14d2ad5dfb.webp', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sig_id`);

--
-- Indexes for table `stform`
--
ALTER TABLE `stform`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stform`
--
ALTER TABLE `stform`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
