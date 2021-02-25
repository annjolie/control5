-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Xerado en: 20 de Feb de 2018 ás 01:10
-- Versión do servidor: 5.6.21
-- Versión do PHP: 5.6.3
CREATE DATABASE IF NOT EXISTS bisbarras;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bisbarras`
--

-- --------------------------------------------------------

--
-- Estrutura da táboa `bisbarras`
--

CREATE TABLE IF NOT EXISTS `bisbarras` (
`idBisbarra` tinyint(4) NOT NULL,
  `nome` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estrutura da táboa `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
`idLugar` tinyint(4) NOT NULL,
  `nome` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `bisbarra` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bisbarras`
--
ALTER TABLE `bisbarras`
 ADD PRIMARY KEY (`idBisbarra`);

--
-- Indexes for table `lugares`
--
ALTER TABLE `lugares`
 ADD UNIQUE KEY `idLugar_2` (`idLugar`), ADD KEY `idLugar` (`idLugar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bisbarras`
--
ALTER TABLE `bisbarras`
MODIFY `idBisbarra` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `lugares`
--
ALTER TABLE `lugares`
MODIFY `idLugar` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
