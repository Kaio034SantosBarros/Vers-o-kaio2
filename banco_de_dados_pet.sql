-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jan-2018 às 14:11
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet shop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco de dados pet`
--

CREATE TABLE `banco de dados pet` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `endereço` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefone` int(10) NOT NULL,
  `nome do pet` varchar(25) NOT NULL,
  `idade do pet` int(2) NOT NULL,
  `sexo do pet` varchar(10) NOT NULL,
  `peso do pet` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banco de dados pet`
--
ALTER TABLE `banco de dados pet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banco de dados pet`
--
ALTER TABLE `banco de dados pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
