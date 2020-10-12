-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 03:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rueda2`
--

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `pais_origen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `pais_origen`) VALUES
(1, 'spitfire', 'usa'),
(2, 'bones', 'usa'),
(3, 'ricta', 'usa'),
(4, 'santa cruz', 'usa'),
(5, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `rueda`
--

CREATE TABLE `rueda` (
  `id_rueda` int(11) NOT NULL,
  `medida` varchar(25) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `dureza` varchar(25) NOT NULL,
  `precio` double NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rueda`
--

INSERT INTO `rueda` (`id_rueda`, `medida`, `modelo`, `dureza`, `precio`, `id_marca`) VALUES
(1, '54', 'bighead', '101A', 34.99, 1),
(2, '58', 'sfwhff060', '99A', 36.99, 1),
(3, '53', 'v5', '100A', 39.99, 2),
(4, '55', 'woodoo', '100A', 35.99, 4),
(5, '53', 'naturals', '101A', 34.99, 3),
(6, '52', 'v4', '103A', 36.99, 2),
(7, '57', 'cloud', '79A', 33.99, 3),
(8, 'test', 'test', 'test', 99.99, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `rol`, `usuario`, `password`) VALUES
(1, 'admin', 'admin', '$2y$10$9E5N34WvrcQ0Irru49aNxeWgPbufBYATLimv7dKbziF0L64RSdydq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `rueda`
--
ALTER TABLE `rueda`
  ADD PRIMARY KEY (`id_rueda`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rueda`
--
ALTER TABLE `rueda`
  MODIFY `id_rueda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rueda`
--
ALTER TABLE `rueda`
  ADD CONSTRAINT `rueda_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
