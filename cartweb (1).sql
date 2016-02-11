-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2016 at 02:04 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(50) NOT NULL,
  `productID` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `products` varchar(500) NOT NULL,
  `total` int(11) NOT NULL,
  `address` varchar(222) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `username`, `products`, `total`, `address`, `status`, `date`) VALUES
(31, 'test', '1, 2, ', 0, 'sdas', 1, '2016-02-11 13:52:48'),
(32, 'test', '1, 2, ', 50, 'sdas', 1, '2016-02-11 13:53:24'),
(33, 'test', '1, ', 50, 'sdas', 1, '2016-02-11 13:57:50'),
(34, 'yes', '2, ', 50, 'aasddasads', 1, '2016-02-11 14:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(55) NOT NULL,
  `image` varchar(111) NOT NULL,
  `description` varchar(800) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `image`, `description`, `price`) VALUES
(1, 'Men''s Health', 'men1.jpg', 'Men''s Health (MH), published by Rodale Inc. in Emmaus, Pennsylvania, United States, is the world''s largest men''s magazine brand, with 40 editions in 47 countries. It is also the best-selling men''s magazine on U.S. newsstands.', 15),
(2, 'Men''s Journal', 'men2.jpg', 'Men''s Journal is a monthly men''s lifestyle magazine focused on outdoor recreation and comprising editorials on the outdoors, environmental issues, health and fitness, style and fashion, and gear. It was founded in 1992 by Jann Wenner, who sought to create a publication for "active, accomplished men to fuel an adventurous and discerning lifestyle".', 12),
(3, 'GQ', 'men3.jpg', 'GQ (formerly Gentlemen''s Quarterly) is an international monthly men''s magazine based in New York City. The publication focuses on fashion, style, and culture for men, though articles on food, movies, fitness, sex, music, travel, sports, technology, and books are also featured.', 13),
(4, 'ELLE', 'fashion1.jpg', 'Elle is a worldwide lifestyle magazine of French origin that focuses on fashion, beauty, health, and entertainment. Elle is also the world''s best-selling fashion magazine. It was founded by Pierre Lazareff and his wife Hélène Gordon in 1945. The title, in French, means "she" or "her".', 15),
(5, 'Glamour', 'fashion2.jpg', 'Glamour is a women''s magazine published by Condé Nast Publications. Founded in 1939 and first published in April 1939 in the United States, it was originally called Glamour of Hollywood.', 10),
(6, 'Fashion', 'fashion3.jpg', 'Fashion is a Canadian fashion magazine published by St. Joseph Media. Established in 1977, it is currently based in Toronto (with satellite offices in Vancouver, Calgary and Montreal), publishes 10 issues a year and has a total readership of 1.85 million (PMB Oct 2010).', 20),
(7, 'Time', 'news1.jpg', '', 0),
(8, 'Newsweek', 'news2.jpg', '', 0),
(9, 'CEO', 'news3.jpg', '', 0),
(10, 'Music', 'music1.jpg', '', 5),
(11, 'Rolling Stone', 'music2.jpg', '', 5),
(12, 'GM', 'music3.jpg', '', 5),
(13, 'Teen Vogue', 'teen1.jpg', '', 0),
(14, 'Seventeen', 'teen2.jpg', '', 0),
(15, 'Teen People', 'teen3.jpg', '', 0),
(16, 'Metropolitan Home', 'home1.jpg', '', 0),
(17, 'Style At Home', 'home2.jpg', '', 0),
(18, 'Good Housekeeping', 'home3.jpg', '', 0),
(19, 'Sports Forever', 'sports1.jpg', '', 0),
(20, 'Bekett Hockey', 'sports2.jpg', '', 0),
(21, 'Inside Sport', 'sports3.jpg', '', 0),
(22, 'Longevity', 'life1.jpg', '', 0),
(23, 'Women''s Fitness', 'life2.jpg', '', 0),
(24, 'Lifestyle', 'life3.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `phone`, `address`) VALUES
('test', '81dc9bdb52d04dc20036dbd8313ed055', 'asddas', 'asdasdads', 'asdads', 123123, 'sdas'),
('asd', 'e10adc3949ba59abbe56e057f20f883e', 'asd', 'asd', 'asd', 0, 'asd'),
('irexjr', 'e10adc3949ba59abbe56e057f20f883e', 'asdads@live.com', 'Test', 'asdasd', 123213, 'asdamosdaqskdsad'),
('asdasddas', '4e228deb27ce36b9684bb63609d2bc63', 'adsasdds', 'dasadsdas', 'sdaadsds', 213312132, 'asdasddasadsdas'),
('yes', 'e10adc3949ba59abbe56e057f20f883e', 'asdasdads', 'asdasdasd', 'adsasddas', 123312123, 'aasddasads');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
