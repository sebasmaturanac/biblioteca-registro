-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2016 at 12:51 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partidasdev`
--

--
-- Dumping data for table `temas`
--

INSERT INTO `temas` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(1, 'Baños', '2016-12-16 00:30:56', '2016-12-16 00:30:56', NULL, 1),
(2, 'Cooperativa', '2016-12-16 00:31:00', '2016-12-16 00:31:00', NULL, 1),
(3, 'Electricidad', '2016-12-16 00:31:05', '2016-12-16 00:31:05', NULL, 1),
(4, 'Ferreteria', '2016-12-16 00:31:10', '2016-12-16 00:31:10', NULL, 1),
(5, 'Informática', '2016-12-16 00:31:14', '2016-12-16 00:31:14', NULL, 1),
(6, 'Librería', '2016-12-16 00:31:18', '2016-12-16 00:31:18', NULL, 1),
(7, 'Limpieza', '2016-12-16 00:31:23', '2016-12-16 00:31:23', NULL, 1),
(8, 'Materiales Electricos', '2016-12-16 00:31:36', '2016-12-16 01:04:59', NULL, 1),
(9, 'Matafuegos', '2016-12-16 00:31:41', '2016-12-16 01:04:55', NULL, 1),
(10, 'Pintureria', '2016-12-16 00:31:45', '2016-12-16 22:32:30', NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
