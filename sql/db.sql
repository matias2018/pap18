-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jan-2019 às 14:04
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_leo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(20, 'Goncalo', 'Duarte', 'gfrd2000@gmail.com', '$2y$10$.w7QLn6E91I4KOwfc3btH.BH.0YiB.eBo5ePwwGs6DR8SZB0OQn6e', 'a96b65a721e561e1e3de768ac819ffbb', 1),
(21, 'pedro', 'matias', 'pvmatias@gmail.com', '$2y$10$r7.KVoI9E/w2wKPvuyTUkuviircmqr8nPifHSCeSZZhNsbXo4f.eC', 'e7b24b112a44fdd9ee93bdf998c6ca0e', 1),
(22, 'gaga', 'gaga', 'gaga@gaga.gaga', '$2y$10$uQ5dSY8JaCwTmYVDWf/NMOpPjId394Gm8/mfAIzekl7x6GISil7Cu', '4e732ced3463d06de0ca9a15b6153677', 1),
(23, 'ze', 'ze', 'ze@ze.ze', '$2y$10$J4PqO9ZlCbYcZYIeekhGkeKVOIy0CP8mArPB7Q/gs3FCsbt5kSmOq', '13fe9d84310e77f13a6d184dbf1232f3', 1),
(24, 'leonardo', 'rafael', 'leonardo@gmail.com', '$2y$10$cCVgYDDLsL6y1op60lw.V./oU1qSPwCDFpQ.BlzXl9ONE1NYr5CNW', '99c5e07b4d5de9d18c350cdf64c5aa3d', 1),
(25, 'AKA', 'ASAP', 'akaasap77@gmail.com', '$2y$10$x3b9p7AJ6mTouLkc8O4HuOjAFK6YiUOV0wSOzx1BRLh4dnRVV6GKe', 'b056eb1587586b71e2da9acfe4fbd19e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
