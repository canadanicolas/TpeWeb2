-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 04:01 AM
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
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `texto` varchar(225) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `id_rueda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `texto`, `valoracion`, `id_rueda`) VALUES
(56, 'muy buenas', 5, 1),
(57, 'geniales', 5, 1),
(58, 'funcionan de 10', 5, 1),
(59, 'me gustaron', 4, 1),
(60, 'duran mucho', 4, 1),
(62, 'malas', 2, 2),
(63, 'buenas', 4, 2),
(64, 'me gustan', 4, 2),
(65, 'mas o menos', 3, 2),
(66, 'test', 3, 1);

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
(4, 'santa cruz', 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `rueda`
--

CREATE TABLE `rueda` (
  `id_rueda` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `medida` varchar(25) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `dureza` varchar(25) NOT NULL,
  `precio` double NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rueda`
--

INSERT INTO `rueda` (`id_rueda`, `imagen`, `medida`, `modelo`, `dureza`, `precio`, `id_marca`) VALUES
(1, 'rueda1.jpg', '54', 'bighead', '101A', 34.99, 1),
(2, 'rueda2.jpg', 'sfwhff060', '58', '99A', 36.99, 1),
(3, 'rueda3.jpg', 'v5', '53', '100A', 39.99, 2),
(4, 'rueda4.jpg', 'woodoo', '55', '100A', 35.99, 4),
(5, 'rueda5.jpg', 'naturals', '53', '101A', 34.99, 3),
(6, 'rueda6.jpg', 'v4', '52', '103A', 36.99, 2),
(7, 'rueda7.jpg', 'cloud', '57', '79A', 33.99, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `admin`, `usuario`, `password`) VALUES
(1, 1, 'admin', '$2y$10$9E5N34WvrcQ0Irru49aNxeWgPbufBYATLimv7dKbziF0L64RSdydq'),
(9, 0, 'test', '$2y$10$XGIKR8pPhaJxnd9FfvxZzeB0PSIWtKLJkbXbhHnc2Y3YumFY7m/3u'),
(12, 0, 'user', '$2y$10$3KMANezHehYb5Bb4fTeIIO70cQc7p7g04jSNqm0yWGGG5pcWypPgm'),
(13, 0, 'nico', '$2y$10$Yw7FPWfpAeXlMc9Fdnd4PuPacwJbw5DC7jyqnFHEhMIIG9.b2FkKy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_rueda` (`id_rueda`);

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
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rueda`
--
ALTER TABLE `rueda`
  MODIFY `id_rueda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_rueda`) REFERENCES `rueda` (`id_rueda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rueda`
--
ALTER TABLE `rueda`
  ADD CONSTRAINT `rueda_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
