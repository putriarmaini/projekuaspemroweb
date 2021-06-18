-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 06:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cws`
--

-- --------------------------------------------------------

--
-- Table structure for table `pencemaran`
--

CREATE TABLE `pencemaran` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `datadulu` int(11) NOT NULL,
  `datakini` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencemaran`
--

INSERT INTO `pencemaran` (`id`, `provinsi`, `datadulu`, `datakini`) VALUES
(1, 'ACEH', 350, 729),
(8, 'SUMATERA UTARA', 449, 1205),
(9, 'SUMATERA BARAT', 144, 319),
(10, 'RIAU', 318, 454),
(11, 'JAMBI', 384, 614),
(12, 'SUMATERA SELATAN ', 279, 673),
(13, 'BENGKULU', 189, 286),
(14, 'LAMPUNG', 222, 673),
(15, 'KEP. BANGKA BELITUNG', 152, 159),
(16, 'KEP. RIAU', 28, 55),
(17, 'DKI JAKARTA', 54, 126),
(18, 'JAWA BARAT', 1131, 1890),
(19, 'JAWA TENGAH', 932, 1900),
(20, 'DI YOGYAKARTA', 44, 99),
(21, 'JAWA TIMUR', 759, 1643),
(22, 'BANTEN', 251, 513),
(23, 'BALI', 82, 130),
(24, 'NUSA TENGGARA BARAT', 122, 282),
(25, 'NUSA TENGGARA TIMUR', 53, 122),
(26, 'KALIMANTAN BARAT', 717, 915),
(27, 'KALIMANTAN TENGAH', 523, 782),
(28, 'KALIMANTAN SELATAN', 445, 714),
(29, 'KALIMANTAN TIMUR', 249, 318),
(30, 'KALIMANTAN UTARA', 59, 139),
(31, 'SULAWESI UTARA', 140, 327),
(32, 'SULAWESI TENGAH', 125, 303),
(33, 'SULAWESI SELATAN', 176, 400),
(34, 'SULAWESI TENGGARA', 73, 227),
(35, 'GORONTALO', 72, 111),
(36, 'SULAWESI BARAT', 22, 115),
(37, 'MALUKU', 57, 105),
(38, 'MALUKU UTARA', 46, 216),
(39, 'PAPUA BARAT', 31, 155),
(40, 'PAPUA', 108, 249);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`) VALUES
(1, '', 'putri', 'putri123'),
(2, '', '@shyfanaya', 'cantik'),
(3, '', 'shyfanayaaulia5@gmai', 'sss25'),
(4, '', 'shyfa25@gmail.com', 'sss22'),
(5, '', 'putri@gmail.com', 'putri87'),
(6, 'putri', 'putri29', '$2y$10$M6s3OPyHp5/pH'),
(7, 'putri', 'putri87', '$2y$10$6kzJRCzdZZCaH'),
(8, 'user', 'user', '$2y$10$MyCCZsh9S8ldx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pencemaran`
--
ALTER TABLE `pencemaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pencemaran`
--
ALTER TABLE `pencemaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
