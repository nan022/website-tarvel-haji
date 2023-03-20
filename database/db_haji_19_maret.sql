-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 01:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_haji`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nm_wa` varchar(15) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `id_user`, `nama`, `email`, `tgl_lahir`, `nm_wa`, `created_at`) VALUES
(29, 52, 'admin', 'admin@gmail.com', '0000-00-00', '0822', NULL),
(34, 51, 'Fajri Muttaqien', 'fajri@gmail.com', '2023-02-15', '082283190726', NULL),
(38, 64, 'ronan', 'ronan@gmail.com', '2002-10-03', '0877', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_peserta`
--

CREATE TABLE `customer_peserta` (
  `id_customer_peserta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_peserta`
--

INSERT INTO `customer_peserta` (`id_customer_peserta`, `id_user`, `nama`, `nik`, `no_wa`, `created_at`) VALUES
(52, 52, 'asda', '', '', '2023-03-12 17:29:00'),
(53, 52, '', '', '', '2023-03-12 17:31:38'),
(54, 52, '13123', '123123', '', '2023-03-12 17:31:52'),
(55, 64, 'Ronan', '1722', '09822', '2023-03-16 15:29:49'),
(56, 64, 'Ayu', '1213', '0988', '2023-03-16 15:29:49'),
(57, 51, '', '', '', '2023-03-16 15:45:22'),
(58, 51, '', '', '', '2023-03-16 15:45:51'),
(59, 64, 'Ronanda Saputra', '1212121', '0822874353', '2023-03-17 09:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `paket_travel`
--

CREATE TABLE `paket_travel` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(200) NOT NULL,
  `jadwal` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `hotel` varchar(225) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `available_seat` int(11) NOT NULL,
  `berangkat` varchar(225) NOT NULL,
  `maskapai` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `poster` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_travel`
--

INSERT INTO `paket_travel` (`id_paket`, `nama_paket`, `jadwal`, `durasi`, `hotel`, `total_seat`, `available_seat`, `berangkat`, `maskapai`, `harga`, `poster`) VALUES
(21, '1231', '2023-02-26', 3123, '5', 30, 99994, '13', '123123', 1000, '8c82846b9df40da6868cfcac742af28d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `representatif`
--

CREATE TABLE `representatif` (
  `id_representatif` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nm_wa` varchar(15) NOT NULL,
  `kode_ref` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representatif`
--

INSERT INTO `representatif` (`id_representatif`, `id_user`, `nama`, `email`, `tgl_lahir`, `nm_wa`, `kode_ref`) VALUES
(13, 55, 'Nanda', 'nanda@mail.com', '2000-09-21', '0822', 'NANDA-1509'),
(18, 62, 'doni', 'doni@gmail.com', '2002-10-02', '0822', 'DONI-0210'),
(20, 65, 'Marketing', 'market@gmail.com', '2002-02-22', '0822', 'MARKETING-2202');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kode_ref` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  `created_at` date NOT NULL,
  `total_harga` int(50) NOT NULL DEFAULT 2000,
  `dp` int(50) NOT NULL,
  `angsuran_1` int(50) NOT NULL,
  `angsuran_2` int(50) NOT NULL,
  `angsuran_3` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_paket`, `jumlah`, `kode_ref`, `status`, `created_at`, `total_harga`, `dp`, `angsuran_1`, `angsuran_2`, `angsuran_3`) VALUES
(14, 52, 21, '1', 'asdas', 1, '2023-03-12', 2000, 500, 500, 500, 500),
(15, 52, 21, '1', '1212', 1, '2023-03-12', 2000, 500, 500, 500, 0),
(16, 52, 21, '1', 'NANDA-1509', 1, '2023-03-12', 2000, 500, 500, 0, 0),
(17, 64, 21, '2', 'NANDA-1509', 1, '2023-03-16', 2000, 500, 500, 0, 0),
(18, 51, 21, '1', 'ASDASD', 1, '2023-03-16', 2000, 0, 0, 0, 0),
(19, 51, 21, '1', 'ASDSA', 1, '2023-03-16', 2000, 0, 0, 0, 0),
(20, 64, 21, '1', 'NANDA-1509', 1, '2023-03-17', 2000, 500, 500, 500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tos` int(11) NOT NULL,
  `role` enum('admin','representatif','customer') NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `nama`, `tos`, `role`, `image`, `created_at`) VALUES
(51, 'fajri@gmail.com', 'fajrim', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'Fajri Muttaqien', 1, 'customer', '', NULL),
(52, '-', 'admin', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'Admin', 1, 'admin', '', NULL),
(55, 'nanda@mail.com', 'nanda', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'Nanda', 1, 'representatif', '', NULL),
(62, 'doni@gmail.com', 'doni', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'doni', 1, 'representatif', '', NULL),
(64, 'ronan@gmail.com', 'ronan', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'ronan', 1, 'customer', '', NULL),
(65, 'market@gmail.com', 'market', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'Marketing', 1, 'representatif', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `customer_peserta`
--
ALTER TABLE `customer_peserta`
  ADD PRIMARY KEY (`id_customer_peserta`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `paket_travel`
--
ALTER TABLE `paket_travel`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `representatif`
--
ALTER TABLE `representatif`
  ADD PRIMARY KEY (`id_representatif`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `user_id` (`id_user`),
  ADD KEY `paket_id` (`id_paket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customer_peserta`
--
ALTER TABLE `customer_peserta`
  MODIFY `id_customer_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `paket_travel`
--
ALTER TABLE `paket_travel`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `representatif`
--
ALTER TABLE `representatif`
  MODIFY `id_representatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
