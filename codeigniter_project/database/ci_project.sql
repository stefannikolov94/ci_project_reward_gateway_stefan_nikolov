-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_project`
--

-- --------------------------------------------------------

--
-- Структура на таблица `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(12, 'Qnko', 'stefan.borislavov.ni', 'адсасдасдадс'),
(13, 'sasdasd', 'asas@abv.bg', 'aas'),
(14, 'Stefan', 'stefannikolov123@abv', 'asdasdasd'),
(15, 'Stefan', 'stefannikolov123@abv', 'asdasd'),
(16, 'Stefan', 'stefannikolov123@abv', 'iihi'),
(17, 'Stefan', 'stefannikolov123@abv', 'asdasdasd'),
(18, 'Stefan', 'stefannikolov123@abv', 'asdasd'),
(19, 'Stefans', 'stefannikolov123@abv', 'dada'),
(20, 'dans', 'danailhr@abv.bg', 'asdasdasd'),
(21, 'Stefan', 'stefannikolov123@abv', 'asdasdasd'),
(22, 'Stefan', 'stefannikolov123@abv', 'asasdasd'),
(23, 'Stefan', 'stefannikolov123@abv', 'asdasasd'),
(24, 'dada', 'dada@abv.bg', 'asasdasd'),
(25, 'Stefan', 'stefannikolov123@abv', 'asdasasd'),
(26, 'Stefan', 'stefannikolov123@abv', 'asdasdasd'),
(27, 'stefan', 'stefannikolov123@abv', 'zdravei'),
(28, 'Joro', 'stefan.borislavov.ni', 'Hey Joro'),
(29, 'stefan', 'stefannikolov123@abv', 'dasadsasda');

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `body`, `date`, `pic`) VALUES
(1, 'the is a unique post', 'stefan', 'asdasdasd', '0000-00-00 00:00:00', '0'),
(3, 'asdasd43', 'asdad', 'asdasdasd', '2015-11-17 01:24:13', '0'),
(4, 'the is a unique postsdsda', 'stefan', 'asdasdasd', '2015-11-17 01:46:22', '0'),
(5, 'asdasdasd', 'dany', 'dasadasd', '2015-11-17 01:51:03', '0'),
(6, 'Econt noviin', 'Stefan', 'asdasdasdasdasdasdasd', '2015-11-18 13:01:57', '0'),
(7, 'Nova IT firma otvarq vrati', 'Petkan', 'Nova IT firma otvaq vrati ot dnes v Plovdiv', '2015-11-19 11:53:29', '0'),
(8, 'DAni e v ssgradata', 'asdasasasdadasd', 'adsasasdasdasdasdasdasda', '2015-11-19 12:19:40', '0'),
(9, '', '', '', '2015-11-23 08:13:10', '0'),
(10, '', '', '', '2015-11-23 08:16:31', '0'),
(11, '', '', '', '2015-11-23 08:21:40', 'success-kid3'),
(12, 'asdasd', 'asdasd', 'asdasdasddsaasd', '2015-11-23 08:36:11', 'success-kid4'),
(14, 'Novinini', 'Stefan', 'sadasasdasasd', '2015-11-23 08:44:37', 'success-kid6'),
(15, 'asdasdsada', 'dasdadasda', 'dasadasdasdasadasasdadaddasda', '2015-11-23 08:48:52', 'success-kid7'),
(16, 'Hello', 'DAnii', 'fafafaafaf', '2015-11-23 08:50:38', 'success-kid8'),
(17, 'sdasdasd', 'dasdaasda', 'asdasdasdasasdasd', '2015-11-23 09:46:25', 'success-kid.jpg'),
(18, 'adsadsads', 'dasasd', 'asdadsadsasdads', '2015-11-23 09:48:03', 'success-kid.jpg'),
(19, 'DAda', 'dada', 'dada', '2015-11-23 11:39:31', 'success-kid.jpg'),
(20, 'asdasdasd', 'asdasd', 'adsdasdasdasdas', '2015-11-23 12:08:23', 'success-kid.jpg'),
(23, 'asdasdas', 'asdasdas', 'asdasdasdasd', '2015-11-24 08:39:15', 'success-kid.jpg'),
(25, 'Yani in the bilding', 'Yani', 'asdadadasd', '2015-11-24 09:53:00', 'success-kid.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `registered` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `registered`) VALUES
(6, 'stefannikolo', 'stefannikolov123@abv.bg', '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448283114'),
(7, 'yaniboy', 'yaniboy@abv.bg', '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448358842'),
(8, 'redman007', 'sadasds@asdas.bg', '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448359668'),
(9, 'stefans', 'stefabs@abv.bg', '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448440151');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;