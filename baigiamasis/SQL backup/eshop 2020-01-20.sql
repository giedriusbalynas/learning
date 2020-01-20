-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2020 at 09:20 PM
-- Server version: 5.7.24
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
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL COMMENT 'cia yra prekes_id',
  `pav` varchar(30) NOT NULL,
  `alt` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `id`, `pav`, `alt`) VALUES
(3, 3, 'hoodie-women.jpg', 'Bliuzonas su kapisonu'),
(4, 4, 'pants-men.jpg', 'Vyriskos kelnes'),
(5, 5, 'pants-women.jpg', 'Moteriskos kelnes'),
(6, 6, 'polo.jpg', 'Polo maikute'),
(7, 7, 'shorts-men.jpg', 'Vyriski shortai'),
(8, 8, 'shorts-women.jpg', 'Moteriski shortai'),
(9, 9, 'tshirt-men.png', 'Vyriska maike'),
(10, 10, 'tshirt-women.jpg', 'Moteriska maike'),
(16, 12, 'accessories-cap.jpg', 'fullcap');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `adresas` varchar(50) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `miestas` varchar(30) NOT NULL,
  `salis` varchar(30) NOT NULL,
  `suma` decimal(9,2) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `vardas`, `pavarde`, `adresas`, `zip`, `miestas`, `salis`, `suma`, `data`) VALUES
(3, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:22:16'),
(6, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:23:14'),
(7, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:23:14'),
(8, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:23:16'),
(9, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:23:46'),
(10, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:25:22'),
(11, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:25:23'),
(12, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:25:24'),
(13, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:29:22'),
(14, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:29:22'),
(15, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:29:24'),
(16, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:29:24'),
(17, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:29:25'),
(18, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:30:45'),
(19, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:36:06'),
(20, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:36:59'),
(21, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:40:38'),
(22, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:41:44'),
(23, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:42:43'),
(24, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:44:34'),
(25, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:45:56'),
(26, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:46:04'),
(27, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:46:35'),
(28, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 12:47:29'),
(29, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '144.92', '2020-01-20 12:54:05'),
(30, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '144.92', '2020-01-20 12:55:00'),
(31, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '147.92', '2020-01-20 12:57:20'),
(32, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '147.92', '2020-01-20 12:57:23'),
(33, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '147.92', '2020-01-20 12:57:57'),
(34, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '54.98', '2020-01-20 12:58:28'),
(35, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '54.98', '2020-01-20 13:04:09'),
(36, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '0.00', '2020-01-20 13:10:59'),
(37, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '107.94', '2020-01-20 13:11:21'),
(38, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '144.92', '2020-01-20 13:19:28'),
(39, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '107.94', '2020-01-20 13:20:25'),
(40, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '19.99', '2020-01-20 13:21:09'),
(41, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '104.94', '2020-01-20 14:00:44'),
(42, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '104.94', '2020-01-20 14:03:32'),
(43, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '104.94', '2020-01-20 14:04:17'),
(44, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '254.91', '2020-01-20 14:56:25'),
(45, 'Giedrius', 'Balynas', 'Medvegalio 12-49', 'LT44447', 'Kaunas', 'Lietuva', '144.92', '2020-01-20 17:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `kiekis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `id`, `order_id`, `kiekis`) VALUES
(11, 5, 3, 24),
(12, 4, 26, 5),
(13, 5, 26, 3),
(14, 4, 27, 5),
(15, 5, 27, 3),
(16, 4, 28, 5),
(17, 5, 28, 3),
(18, 4, 29, 3),
(19, 5, 29, 3),
(20, 4, 30, 5),
(21, 5, 30, 7),
(22, 4, 31, 5),
(23, 8, 31, 3),
(24, 4, 32, 5),
(25, 8, 32, 3),
(26, 4, 33, 5),
(27, 8, 33, 3),
(28, 3, 34, 1),
(29, 4, 34, 1),
(30, 3, 35, 1),
(31, 4, 35, 1),
(32, 3, 36, 1),
(33, 4, 36, 1),
(34, 4, 37, 3),
(35, 8, 37, 3),
(36, 5, 38, 3),
(37, 4, 38, 5),
(38, 3, 39, 1),
(39, 4, 39, 1),
(40, 5, 39, 1),
(41, 6, 39, 1),
(42, 7, 39, 1),
(43, 12, 39, 1),
(44, 4, 40, 1),
(45, 4, 41, 3),
(46, 5, 41, 3),
(47, 4, 42, 3),
(48, 5, 42, 3),
(49, 4, 43, 3),
(50, 5, 43, 3),
(51, 3, 44, 5),
(52, 4, 44, 4),
(53, 4, 45, 5),
(54, 5, 45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(30) NOT NULL,
  `aprasymas` varchar(255) NOT NULL,
  `kaina` decimal(9,2) NOT NULL,
  `nuolaida` int(11) NOT NULL,
  `kiekis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `pavadinimas`, `aprasymas`, `kaina`, `nuolaida`, `kiekis`) VALUES
(3, 'Moteriskas bliuzonas', 'Labai gera moteriska bliuske su kapisonu.', '34.99', 10, 20),
(4, 'Vyriskos kelnes', 'Labai geros vyriskos kelnes.', '19.99', 5, 5),
(5, 'Moteriskos kelnes', 'Labai geros moteriskos kelnes.', '14.99', 5, 0),
(6, 'Polo maike', 'Labai gera vyriska polo maike.', '9.99', 10, 10),
(7, 'Vyriski shortai', 'Labai geri vyriski shortai.', '17.99', 15, 0),
(8, 'Moteriski shortai', 'Labai geri moteriski shortai.', '15.99', 15, 0),
(9, 'Vyriska maike', 'Labai gera vyriska maike.', '9.99', 10, 15),
(10, 'Moteriska maike', 'Labai gera moteriska maike.', '8.99', 10, 15),
(12, 'Kepure', 'Labai geras unisex full-capas.', '9.99', 10, 20),
(14, 'sdfasf', 'sdaf 5 35we1 wet w', '50.50', 20, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` varchar(9) NOT NULL,
  `country` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `password`, `address`, `city`, `zip`, `country`, `tel`) VALUES
(23, 'Testuole', 'Testuolyte', 'testas@email.com', '1fb3f4040fb9dc8ed248365ba17022b1', 'Ausros vartai', 'Vilnius', 'LT01138', 'Lietuva', '+37063033888'),
(24, 'Giedrius', 'Balynas', 'stogenzzo@gmail.com', '1f6e0ede265e7898848e471a30a4d816', 'Medvegalio 12-49', 'Kaunas', 'LT44447', 'Lietuva', '+37063597239');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `id` (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
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
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `img_ibfk_1` FOREIGN KEY (`id`) REFERENCES `prekes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `prekes` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
