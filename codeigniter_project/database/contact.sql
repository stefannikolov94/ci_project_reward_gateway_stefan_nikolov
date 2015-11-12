-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_project`
--

-- --------------------------------------------------------

--
-- Структура на таблица `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `full_name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `message`) VALUES
(1, 'Petur', '0', 'Petur Petrov'),
(2, 'Stefan', '0', 'dada'),
(3, 'Stefan', '0', 'dada'),
(4, 'stefan', '0', 'dadada'),
(5, 'stefan', '0', 'dadada'),
(6, 'Stefan', '0', 'asdasdasd'),
(7, 'Stefan', '0', 'asdasdasd'),
(8, 'Stefan', '0', 'asdasdasdasdads'),
(9, 'Qni', '0', 'qqqqqqqq'),
(10, 'Stefan', 'stefan.borislavov.ni', 'dassdaads'),
(11, 'Stefan', 'stefannikolov123@abv', 'asdasd'),
(12, 'Qnko', 'stefan.borislavov.ni', 'адсасдасдадс');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
