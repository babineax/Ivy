-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2023 at 10:12 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyneprint`
--

-- --------------------------------------------------------
drop database `fyneprint`;
CREATE DATABASE IF NOT EXISTS `fyneprint` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `fyneprint`;
--
-- Table structure for table `citizens`
--

DROP TABLE IF EXISTS `citizens`;
CREATE TABLE IF NOT EXISTS `citizens` (
  `Full_Name` text NOT NULL,
  `Id` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_number` int NOT NULL,
  `County` text NOT NULL,
  `Role` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`(8))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncate table before insert `citizens`
--

TRUNCATE TABLE `citizens`;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
