-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 11:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

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
(1, 'admin@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(2, 'nebstartrizzle@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
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
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
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
(9, 'nebstartrizzle@gmail.com', '70be26f963b9306caa962a33977e8d28', '2020-03-20 16:16:08.854311'),
(10, 'nebstartrizzle@gmail.com', 'f2e0d1e140c0cb90c2b500766feff66c', '2020-03-24 09:49:04.533258'),
(11, 'nebstartrizzle@gmail.com', '997d5f93a250e79932e8c462342665a0', '2020-03-24 09:49:27.848232'),
(12, 'nebstartrizzle@gmail.com', 'a1a1e63c13b21665943c2596eb6b6293', '2020-03-24 09:52:10.203193'),
(13, 'nebstartrizzle@gmail.com', 'a59acd0d12c09a94738060b49a1fd517', '2020-03-24 09:53:11.722463'),
(14, 'nebstartrizzle@gmail.com', '95d1911b2c764f8c6eab33736b435632', '2020-03-24 09:56:52.388081'),
(15, 'nebstartrizzle@gmail.com', 'a43e5f6d9603fd6f71842fc72a0d2ff4', '2020-03-24 11:52:15.620748'),
(16, 'nebstartrizzle@gmail.com', 'f3f152885df910ee1916b0966d8dd8d1', '2020-03-24 19:57:11.005244');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `longitude` decimal(8,6) NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `sale_type` text NOT NULL,
  `bedrooms` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `area` int(45) NOT NULL,
  `garage` varchar(343) NOT NULL,
  `description` longtext NOT NULL,
  `image` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `category`, `location`, `longitude`, `latitude`, `sale_type`, `bedrooms`, `price`, `area`, `garage`, `description`, `image`, `added_on`) VALUES
(11, 'urithi', 'Industrial Land', 'Rose Ave, Nairobi, Kenya', '36.793319', '-1.289579', 'lure', 'On offer', '$560.00', 224242, '2', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', '0caf5e44516dc40ca0a7304e9b255a2f.jpg', '2020-03-26 11:49:46'),
(12, 'urithi', 'Industrial Land', 'Dennis Pritt Rd, Nairobi, Kenya', '36.797866', '-1.286308', 'rent', '3 bedrooms', '$560.00', 656565, '2', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', '754d8d03a90fe247024fb9a2b9e252fa.jpg', '2020-03-26 19:20:10');

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
  `subscribed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `subscribed_at`) VALUES
(1, 'nebstartrizzle@gmail.com', '2020-03-18 09:17:15'),
(2, 'nebsta@gmail.com', '2020-03-18 09:17:40'),
(3, 'augustinetreezy@gmail.com', '2020-03-19 12:46:25'),
(4, 'fuck@gmail.you', '2020-03-24 08:06:20'),
(5, 'fuckhim@gmail.com', '2020-03-25 07:39:40'),
(6, 'nebsdhdhta@gmail.com', '2020-03-25 07:43:14'),
(7, 'safaffafa@gmail.com', '2020-03-25 07:43:49'),
(8, 'ddadadadada@gmail.com', '2020-03-25 07:50:19'),
(9, 'fafafafa@gmail.com', '2020-03-25 07:54:47'),
(10, 'afsafafa@gmail.com', '2020-03-25 07:55:50'),
(11, 'hkhkhkhk@gmail.com', '2020-03-25 07:57:02'),
(12, 'kukukukukuk@gmail.com', '2020-03-25 07:58:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
