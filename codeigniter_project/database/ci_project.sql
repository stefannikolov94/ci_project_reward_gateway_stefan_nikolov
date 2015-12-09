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
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment`, `date_added`) VALUES
(1, 6, 3, 'asasdasd', '2015-12-07 08:28:38'),
(2, 6, 3, 'asdasdasd', '2015-12-07 08:29:34'),
(3, 6, 3, 'asdasda', '2015-12-07 08:30:58'),
(4, 6, 3, 'asdasdas', '2015-12-07 08:33:53'),
(5, 6, 3, 'dasasd', '2015-12-07 08:38:31'),
(6, 6, 1, 'test', '2015-12-07 08:50:14'),
(7, 6, 1, 'test2', '2015-12-07 08:50:22'),
(8, 6, 1, 'tes3', '2015-12-07 08:50:36'),
(9, 6, 4, 'test1', '2015-12-07 08:58:29'),
(10, 6, 4, 'test2', '2015-12-07 09:08:28'),
(11, 6, 4, 'test3', '2015-12-07 09:08:37');

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
(29, 'stefan', 'stefannikolov123@abv', 'dasadsasda'),
(30, 'test', 'stefan.borislavov.ni', 'test'),
(31, 'testsssda', 'stefannikolov123@abv', 'adsdasdasda'),
(32, 'hui', 'huio@abv.bg', '<p>hui</p>'),
(33, 'asdasdasd', 'stefannikolov123@abv', 'asdsdasd'),
(34, 'asdasdasd', 'stefannikolov123@abv', 'asdsdasdasdasd');

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `author`, `body`, `date`, `pic`) VALUES
(1, 'the is a unique post', 'stefan', 'asdasdasd', '0000-00-00 00:00:00', '0'),
(4, 'the is a unique postsdsda', 'stefan', 'asdasdasd', '2015-11-17 01:46:22', '0'),
(5, 'asdasdasd', 'dany', 'dasadasd', '2015-11-17 01:51:03', '0'),
(6, 'Econt noviin', 'Stefan', 'asdasdasdasdasdasdasd', '2015-11-18 13:01:57', '0'),
(7, 'Nova IT firma otvarq vrati', 'Petkan', 'Nova IT firma otvaq vrati ot dnes v Plovdiv', '2015-11-19 11:53:29', '0'),
(8, 'DAni e v ssgradata', 'asdasasasdadasd', 'adsasasdasdasdasdasdasda', '2015-11-19 12:19:40', '0'),
(10, '', '', '', '2015-11-23 08:16:31', '0'),
(12, 'asdasd', 'asdasd', 'asdasdasddsaasd', '2015-11-23 08:36:11', 'success-kid4'),
(14, 'Novinini', 'Stefan', 'sadasasdasasd', '2015-11-23 08:44:37', 'success-kid6'),
(15, 'asdasdsada', 'dasdadasda', 'dasadasdasdasadasasdadaddasda', '2015-11-23 08:48:52', 'success-kid7'),
(16, 'Hello', 'DAnii', 'fafafaafaf', '2015-11-23 08:50:38', 'success-kid8'),
(17, 'sdasdasd', 'dasdaasda', 'asdasdasdasasdasd', '2015-11-23 09:46:25', 'success-kid.jpg'),
(18, 'adsadsads', 'dasasd', 'asdadsadsasdads', '2015-11-23 09:48:03', 'success-kid.jpg'),
(19, 'DAda', 'dada', 'dada', '2015-11-23 11:39:31', 'success-kid.jpg'),
(25, 'Yani in the bilding', 'Yani', 'asdadadasd', '2015-11-24 09:53:00', 'success-kid.jpg'),
(26, 'Yani e novata igrachka na PLovdiv', 'Stefan', 'Yanito se namira v RIlon center, slusha, gleda i izpulnqva', '2015-11-26 08:35:22', 'success-kid.jpg'),
(28, 'Sexy kolejka', 'Stefan', 'Novata sexy kolejka Beti zapochna rabota ot dnes. Molq vsichki kolegi ot mujki pol da si otvarqt ochite na cheteri.', '2015-11-26 08:39:57', 'sexy_baby.jpg'),
(30, 'testetest', 'asdasda', '<p>asdasdasda</p>', '2015-11-29 10:02:31', 'success-kid.jpg'),
(31, 'asdasdasd', 'asdasdasd', '<p>sadasdadasdasdasdasdasda</p>', '2015-11-30 08:12:54', 'img-thing.jpg'),
(32, 'asdasdasd', 'asdasdasd', '<p>sexysss</p>', '2015-12-02 08:19:53', 'seygirl_i5id7aeq.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `email_verification_code` varchar(255) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `password` varchar(32) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `registered` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `email_verification_code`, `active_status`, `password`, `gender`, `registered`) VALUES
(6, 'stefannikolo', 'stefannikolov123@abv.bg', '', 0, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448283114'),
(7, 'yaniboy', 'yaniboy@abv.bg', '', 0, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448358842'),
(8, 'redman007', 'sadasds@asdas.bg', '', 0, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448359668'),
(11, 'yaniplayboy', 'playboy@abv.bg', '', 0, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448876212'),
(12, 'petqsss', 'petqqs@abv.bg', '', 0, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1448876279'),
(15, 'tests', 'test@abv.bg', '', 1, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1449044278'),
(16, 'yanikal', 'yanikalpazani@abv.bg', '', 1, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1449045280'),
(17, 'ewqeqweqweqw', 'qweqweqqweqwewei@abv.bg', '', 1, '93f6040a66ba4819e9ba19f1597d7fba', 'female', '1449045289'),
(18, 'asdadsasa', 'stef123@abv.bg', '', 1, '93f6040a66ba4819e9ba19f1597d7fba', 'male', '1449092185');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
