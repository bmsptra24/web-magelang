-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2024 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_magelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `tagihan` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `no_hp`, `waktu_pelaksanaan`, `jumlah_hari`, `jumlah_peserta`, `paket`, `tagihan`, `created_at`) VALUES
(4, 'Bima Saputra', '085157255711', '2004-09-08', 1, 1, '1000000, 1200000, 500000', 2200000.00, '2024-09-05 13:36:46'),
(6, 'Bima Saputra', '085157255711', '2024-10-05', 6, 1, '1000000, 1200000', 13200000.00, '2024-09-05 14:01:07'),
(7, 'Bima Saputra', '085157255711', '2024-09-27', 3, 7, '1200000', 25200000.00, '2024-09-05 14:01:24'),
(8, 'Ubai', '0812345678', '2024-09-19', 1, 2, '1000000, 1200000', 4400000.00, '2024-09-05 14:17:26'),
(9, 'Ubai', '0812345678', '2024-09-07', 5, 2, '1000000', 10000000.00, '2024-09-05 14:17:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
