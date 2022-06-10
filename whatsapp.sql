-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 09:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whatsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_name`, `password`) VALUES
('rajan', '12#'),
('kirit', '123@'),
('om', 'abc1'),
('xyz', 'xyz'),
('abc', '123'),
('abc', '123'),
('gg', '12'),
('har', '123');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `sender_name` varchar(15) NOT NULL,
  `recever_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `message`, `sender_name`, `recever_name`) VALUES
(1, 'kirit patel', 'rajan', 'kirit'),
(2, ' hello', 'rajan', 'kirit'),
(3, 'my name is rajan', 'rajan', 'kirit'),
(4, ' hiii', 'rajan', 'kirit'),
(6, 'hello', 'rajan', 'rajan'),
(7, ' hiii', 'rajan', 'om'),
(8, 'tarang', 'kirit', 'rajan'),
(9, 'kem 6o', 'rajan', 'kirit'),
(11, 'hello', 'rajan', 'kirit'),
(13, 'hello', 'kirit', 'rajan'),
(20, ' hiii1', 'kirit', 'rajan'),
(21, ' hiii', 'kirit', 'rajan'),
(22, 'hello', 'rajan', 'om'),
(23, 'what ', 'rajan', 'om'),
(24, 'hey let do some', 'rajan', 'om'),
(25, 'hello', 'om', 'rajan'),
(26, ' okkk', 'om', 'rajan'),
(27, 'hdvhdd', 'rajan', 'om'),
(28, ' hiii', 'xyz', 'rajan'),
(29, 'hello what are you doing', 'xyz', 'rajan'),
(30, ' okkk', 'rajan', 'xyz'),
(31, ' rakslsxxxkxk', 'rajan', 'xyz'),
(32, 'rajanpatel', 'xyz', 'rajan'),
(33, 'rajanpatel', '', 'rajan'),
(34, ' hiii', 'abc', 'rajan'),
(35, 'what is your name', 'abc', 'rajan'),
(36, 'jgfhjbjhjhjhjh', 'abc', 'rajan'),
(37, 'hello sir', 'abc', 'rajan'),
(38, ' hi', 'rajan', 'abc'),
(39, ' okkk', 'rajan', 'abc'),
(40, 'rajanpatel', 'abc', 'rajan'),
(41, 'kem 6e?', 'rajan', 'abc'),
(42, 'hello', 'rajan', 'om'),
(43, 'hello sir', 'rajan', 'om'),
(44, ' j', 'rajan', 'om'),
(45, 's', 'rajan', 'om'),
(46, 'kem 6e?', 'om', 'rajan'),
(47, 'rajanpatel and har', 'rajan', 'om');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
