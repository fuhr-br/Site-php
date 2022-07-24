-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2022 at 12:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `alimentacao` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ensinoF` varchar(20) DEFAULT NULL,
  `ensinoM` varchar(20) DEFAULT NULL,
  `ensinoS` varchar(20) DEFAULT NULL,
  `cursoProf` varchar(20) DEFAULT NULL,
  `cursoTec` varchar(20) DEFAULT NULL,
  `especializacoes` varchar(20) DEFAULT NULL,
  `ne` varchar(20) DEFAULT NULL,
  `opcao` varchar(20) DEFAULT NULL,
  `cachorro` varchar(20) DEFAULT NULL,
  `passarinho` varchar(20) DEFAULT NULL,
  `gato` varchar(20) DEFAULT NULL,
  `outros` varchar(20) DEFAULT NULL,
  `nenhum` varchar(20) DEFAULT NULL,
  `financeiro` varchar(255) DEFAULT NULL,
  `alime` varchar(20) DEFAULT NULL,
  `bemestar` varchar(20) DEFAULT NULL,
  `culinaria` varchar(20) DEFAULT NULL,
  `educacao` varchar(20) DEFAULT NULL,
  `fina` varchar(20) DEFAULT NULL,
  `our` varchar(20) DEFAULT NULL,
  `atividade` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formulario`
--

INSERT INTO `formulario` (`id`, `nome`, `alimentacao`, `status`, `ensinoF`, `ensinoM`, `ensinoS`, `cursoProf`, `cursoTec`, `especializacoes`, `ne`, `opcao`, `cachorro`, `passarinho`, `gato`, `outros`, `nenhum`, `financeiro`, `alime`, `bemestar`, `culinaria`, `educacao`, `fina`, `our`, `atividade`, `mensagem`) VALUES
(1, 'Anderson Fuhr Souza', 'boa', 'sim', '', '', 'ensinoS', 'cursoProf', '', '', '', 'sim', 'cachorro', 'passarinho', 'gato', 'outros', 'nenhum', 'sssssssss', 'alimentacao', 'bemestar', 'culinaria', 'educacao', 'financeiro', 'outros', 'ssssssss', 'sssssssss'),
(2, 'cloy', 'boa', 'sim', '', '', '', '', 'cursoTec', '', '', 'sim', '', 'passarinho', 'gato', '', '', 'nao', 'alimentacao', 'bemestar', 'culinaria', '', '', '', 'ddd', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `notificacoes`
--

CREATE TABLE `notificacoes` (
  `id_cli` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notificacoes`
--

INSERT INTO `notificacoes` (`id_cli`, `email`) VALUES
(1, 'andersonfuhr.afs@gmail.com'),
(2, 'bkatiele@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`id_cli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notificacoes`
--
ALTER TABLE `notificacoes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
