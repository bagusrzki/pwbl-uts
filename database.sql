-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 10:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pbadminton`
--

CREATE TABLE `tb_pbadminton` (
  `id_pbadminton` int(50) NOT NULL,
  `nama_pbadminton` varchar(100) NOT NULL,
  `hrg_pbadminton` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pbadminton`
--

INSERT INTO `tb_pbadminton` (`id_pbadminton`, `nama_pbadminton`, `hrg_pbadminton`) VALUES
(3, 'shuttlecock', '500000'),
(4, 'raket', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pbasket`
--

CREATE TABLE `tb_pbasket` (
  `id_pbasket` int(50) NOT NULL,
  `nama_pbasket` varchar(100) NOT NULL,
  `hrg_pbasket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pbasket`
--

INSERT INTO `tb_pbasket` (`id_pbasket`, `nama_pbasket`, `hrg_pbasket`) VALUES
(1, 'Bola Basket', '500000'),
(2, 'Ring Basket', '5000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pbola`
--

CREATE TABLE `tb_pbola` (
  `id_pbola` int(50) NOT NULL,
  `nama_pbola` varchar(100) NOT NULL,
  `hrg_pbola` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pbola`
--

INSERT INTO `tb_pbola` (`id_pbola`, `nama_pbola`, `hrg_pbola`) VALUES
(1, 'sepatu nike', '1000000'),
(2, 'jersey', '200000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pbadminton`
--
ALTER TABLE `tb_pbadminton`
  ADD PRIMARY KEY (`id_pbadminton`);

--
-- Indexes for table `tb_pbasket`
--
ALTER TABLE `tb_pbasket`
  ADD PRIMARY KEY (`id_pbasket`);

--
-- Indexes for table `tb_pbola`
--
ALTER TABLE `tb_pbola`
  ADD PRIMARY KEY (`id_pbola`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pbadminton`
--
ALTER TABLE `tb_pbadminton`
  MODIFY `id_pbadminton` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pbasket`
--
ALTER TABLE `tb_pbasket`
  MODIFY `id_pbasket` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pbola`
--
ALTER TABLE `tb_pbola`
  MODIFY `id_pbola` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
