-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 12:18 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `city`, `password`) VALUES
('guneet kaur', '0', 'amritsar', '987654321'),
('admin', 'admin@gmail.com', 'local', '123'),
('HARJINDER', 'har@gmail.com', 'local', '123'),
('manjeet', 'man@gmail.com', 'local', '123');

-- --------------------------------------------------------

--
-- Table structure for table `catageory`
--

CREATE TABLE `catageory` (
  `cata_id` int(100) NOT NULL,
  `cata_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catageory`
--

INSERT INTO `catageory` (`cata_id`, `cata_name`) VALUES
(1, 'Rock'),
(2, 'DJ'),
(3, 'Classic'),
(5, 'POP'),
(6, 'BEAT'),
(7, 'SAD'),
(8, 'DUET');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `received_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `cata_id` int(100) NOT NULL,
  `image_upload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_brand`, `cata_id`, `image_upload`) VALUES
(1, 'Special', 0, 0, 'LG', 1, 'image/_Burraah_-_www.DjPunjab.Com.mp3'),
(2, 'Special', 333, 0, 'LG', 1, 'image/_Burraah_-_www.DjPunjab.Com.mp3'),
(3, 'Special', 333, 0, 'no', 1, 'image/_Burraah_-_www.DjPunjab.Com.mp3'),
(4, 'Rock', 333, 0, 'no', 1, 'image/_Burraah_-_www.DjPunjab.Com.mp3'),
(5, 'ss', 333, 0, 'no', 3, 'image/_Naam_Gabhru_Da_-_www.DjPunjab.Com.mp3'),
(6, 'rk', 333, 0, 'no', 2, 'image/01 Shoon Shaan (Mukhtiar Chadha)-(www.Rdx.Fm).mp3'),
(7, 'mm', 333, 0, 'no', 3, 'image/_Mera_Deewanapan_-_www.DjPunjab.Com.mp3'),
(8, 'mk', 333, 0, 'no', 1, 'image/01 Tutti Yaari-(www.Rdx.Fm).mp3'),
(9, 'RR', 333, 0, 'no', 3, 'image/03 Dil Todh Ke-(www.Rdx.Fm).mp3'),
(10, 'pk', 333, 0, 'no', 7, 'image/01 Sari Sari Raat-Inderjit Nikku.mp3'),
(11, 'rm', 333, 0, 'no', 0, 'image/05 Mere Kol-Prabh Gill.mp3'),
(12, 'rm', 333, 0, 'no', 7, 'image/05 Mere Kol-Prabh Gill.mp3'),
(13, 'rrrr', 333, 0, 'no', 7, 'image/04 Tere Bina ft Pav Dharia-(www.Rdx.Fm).mp3'),
(14, 'MMm', 333, 0, 'no', 4, 'image/02 22DA Ft Fateh Jay K-(www.Rdx.Fm).mp3'),
(15, 'rkkk', 333, 0, 'no', 3, 'image/03 Sardarni Album Promo-(www.Rdx.Fm).mp3'),
(16, 'rmmm', 333, 0, 'no', 5, 'image/07  Main Deewani Mukhtiar Chadha-(www.Rdx.Fm).mp3'),
(17, 'sea', 333, 0, 'no', 8, 'image/12_Thumke_-_www.DjPunjab.Com.mp3'),
(18, 'ssss', 333, 0, 'no', 8, 'image/00 End Ft Pardhan-(www.Rdx.Fm).mp3'),
(19, 'gggg', 333, 0, 'no', 6, 'image/05 Close To Heart-(www.Rdx.Fm).mp3'),
(20, 'rmn', 333, 0, 'no', 6, 'image/Aadat [iTunes Rip]-(www.Rdx.Fm).mp3'),
(21, 'mnju', 333, 0, 'no', 2, 'image/04 Time Table 2-(www.Rdx.Fm).mp3'),
(22, 'raman', 333, 0, 'no', 2, 'image/07 Aladdin Da Chirag-(Mr-Jatt.com).mp3'),
(23, 'manju', 333, 0, 'no', 5, 'image/03 Mirza-Khushboo Kaur.mp3'),
(24, 'suman', 333, 0, 'no', 5, 'image/05 Parshawan-(www.Rdx.Fm).mp3'),
(25, 'palvi', 333, 0, 'no', 6, 'image/13 Outfit-(www.Rdx.Fm).mp3'),
(26, 'anju', 333, 0, 'no', 8, 'image/3310 - Paul Raj & Rosey Thakur (DJJOhAL.Com).mp3');

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `return_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `upload_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_file`) VALUES
('');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_name` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_name`, `user_id`, `user_email`, `user_password`, `mob`, `address`, `image`) VALUES
('guneet', 1, 'guneetkaur026@gmail.com', '12345', '', '', ''),
('Shubham', 13, 'shubhamsodhi@gmail.com', '123', '9478355502', 'sfdsf', 'image/sdff.jpg'),
('Shuham', 20, 'sh@gmail', '123', '947', 'sad', 'image/sdff.jpg'),
('rahul', 21, 'r@g', '123', '66', 'df', 'image/sdff.jpg'),
('Shuham', 22, 's@a', '665', '123', 'ss', 'image/'),
('Shuham', 23, 'a@a', '123', '947835550', '54154', 'image/sdff.jpg'),
('Raman', 24, 'rmn@gmail.com', '12345', '9878516579', 'Amritsar city', 'image/240535.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `catageory`
--
ALTER TABLE `catageory`
  ADD PRIMARY KEY (`cata_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`,`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catageory`
--
ALTER TABLE `catageory`
  MODIFY `cata_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `return`
--
ALTER TABLE `return`
  MODIFY `return_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
