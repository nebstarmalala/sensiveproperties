-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 05:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensiveproperties`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`) VALUES
(1, 'bg', 'b', '0000-00-00 00:00:00.000000'),
(2, 'bg', 'b', '0000-00-00 00:00:00.000000'),
(3, 'fa', '<p>faafa</p>', '2020-03-19 13:09:34.000000');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `reset_token` mediumtext NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `reset_token`, `time`) VALUES
(1, 'nebstartrizzle@gmail.com', '', '2020-03-20 15:48:43.041705'),
(2, 'nebstartrizzle@gmail.com', '2b9b98a7bf094037d417889dedbf1d60', '2020-03-20 15:53:55.224151'),
(3, 'w@g.c', '4c8e1e88f369b378c6913b72d40b5a43', '2020-03-20 16:06:00.412983'),
(4, 'w@d', 'e0ae8b7645812c3dedd82b2314b5764b', '2020-03-20 16:06:23.626072'),
(5, 'w@d', 'e121b51c1d477975d4fc48e71ddb20a0', '2020-03-20 16:08:13.122803'),
(6, 'nebstartrizzle@gmail.com', '8c5e71b0dcf81d8237d70e6a00776564', '2020-03-20 16:12:54.389430'),
(7, 'nebstartrizzle@gmail.com', '1da569a51c49c056b0a9517698886208', '2020-03-20 16:15:21.131749'),
(8, 'nebstartrizzle@gmail.com', '817f6555dbae9bc7094cc4a11a3223d4', '2020-03-20 16:15:39.467489'),
(9, 'nebstartrizzle@gmail.com', '70be26f963b9306caa962a33977e8d28', '2020-03-20 16:16:08.854311');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `sale_type` text NOT NULL,
  `bedrooms` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `area` int(45) NOT NULL,
  `garage` varchar(343) NOT NULL,
  `description` longtext NOT NULL,
  `image` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `category`, `location`, `sale_type`, `bedrooms`, `price`, `area`, `garage`, `description`, `image`, `added_on`) VALUES
(7, 'urithi', 'Ambassadorial', 'State House CRE, Nairobi, Kenya', 'lure', 'On offer', '$242,525.00', 365688, '2', '<p>hxshhhhhhh</p>', 'e1c035f98e0d905c912d1bbceb500e56.jpg', '2020-03-20 05:34:56'),
(8, 'THE BAND', 'Bungalow', '539 Langata Rd, Nairobi, Kenya', 'rent', 'Available', '$5,252.00', 5353, '3', '<p>afghgjgjgj</p>', 'c63cc63b221608dc8a9525c658e035ee.jpg', '2020-03-20 05:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `subject` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `email`, `subject`, `body`) VALUES
(1, '1@gmail.com', 'hacking', 'ettete');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `subscribed_at`) VALUES
(1, 'nebstartrizzle@gmail.com', '2020-03-18 09:17:15'),
(2, 'nebsta@gmail.com', '2020-03-18 09:17:40'),
(3, 'augustinetreezy@gmail.com', '2020-03-19 12:46:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
