-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 04:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasikeuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(16) NOT NULL,
  `namaDepan` varchar(30) DEFAULT NULL,
  `namaTengah` varchar(30) DEFAULT NULL,
  `namaBelakang` varchar(30) DEFAULT NULL,
  `tempatLahir` varchar(64) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `wargaNegara` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `noHP` varchar(16) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kodepos` int(5) DEFAULT NULL,
  `namaFileFoto` varchar(250) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodepos`, `namaFileFoto`, `username`, `password`) VALUES
('3453453453458888', 'Han', 'Seol', 'Hee', 'Busan', '1996-08-31', 'Seoul', 'smenterti@gmail.com', '085123467766', 'Daegu, H21', 23456, 'e0bbae55203f566fef5ac9f325ff9573.jpg', 'Beebe', 'hanseoh33'),
('6789123409873456', 'Cindy', 'Win', 'Jaya', 'Jakarta', '2004-05-03', 'Indonesia', 'cindwinj@gmail.com', '089634561278', 'BSD Tangerang', 15388, 'njm.jpg', 'cindy', 'ccciiinn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
