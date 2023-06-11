-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 03:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil_airlangga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(0, 'diki', 'diki@gmail.com', 'diki');

-- --------------------------------------------------------

--
-- Table structure for table `akun_user`
--

CREATE TABLE `akun_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_user`
--

INSERT INTO `akun_user` (`id`, `username`, `email`, `alamat`, `password`) VALUES
(1, 'diki', 'diki@gmail.com', 'sepande', '43b93443937ea642a9a43e77fd5d8f77');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('Tersedia','Disewakan') NOT NULL DEFAULT 'Tersedia',
  `id_admin` int(11) DEFAULT NULL,
  `jenis_bahan_bakar` varchar(20) DEFAULT NULL,
  `foto_mobil` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `merk`, `no_plat`, `stok`, `kapasitas`, `tahun`, `harga`, `status`, `id_admin`, `jenis_bahan_bakar`, `foto_mobil`) VALUES
(2, 'nwq', '12hj', 2, 4, 2019, 200000, 'Tersedia', NULL, 'olinol', 0x2e2e2f666f746f5f6d6f62696c2f322e6a7067),
(3, 'yanto', '12hj', 2, 4, 2019, 200000, 'Tersedia', NULL, 'olinol', 0x2e2e2f666f746f5f6d6f62696c2f332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `total_harga` int(11) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `pengantaran` enum('Ya','Tidak') NOT NULL,
  `waktu_pengantaran` time DEFAULT NULL,
  `alamat_pengantaran` varchar(255) DEFAULT NULL,
  `biaya_tambahan` int(11) DEFAULT 0,
  `metode_pembayaran` enum('Transfer','Cash') NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_mobil`, `id_admin`, `tgl_pesan`, `tgl_selesai`, `pengantaran`, `waktu_pengantaran`, `alamat_pengantaran`, `biaya_tambahan`, `metode_pembayaran`, `harga_total`) VALUES
(22, NULL, 1, NULL, '2023-05-27', '2023-05-29', 'Ya', NULL, NULL, 0, 'Transfer', 0),
(25, NULL, 1, NULL, '2023-05-27', '2023-05-31', 'Ya', NULL, NULL, 0, 'Transfer', 0),
(26, NULL, 1, NULL, '2023-06-02', '2023-06-09', 'Ya', NULL, NULL, 0, 'Transfer', 0),
(29, NULL, 1, NULL, '0000-00-00', '0000-00-00', 'Ya', NULL, NULL, 0, 'Transfer', 0),
(30, NULL, 1, NULL, '2023-06-02', '2023-06-07', 'Ya', NULL, NULL, 0, 'Transfer', 0),
(31, NULL, 1, NULL, '2023-06-02', '2023-06-22', 'Ya', NULL, NULL, 0, 'Transfer', 400000),
(32, NULL, 1, NULL, '2023-06-02', '2023-06-23', 'Ya', NULL, NULL, 0, 'Transfer', 420000),
(33, NULL, 1, NULL, '2023-06-02', '2023-06-30', 'Ya', NULL, NULL, 0, 'Transfer', 560000),
(34, NULL, 1, NULL, '2023-06-02', '2023-06-15', 'Ya', NULL, NULL, 0, 'Transfer', 260000),
(38, NULL, 1, NULL, '2023-06-02', '2023-06-04', 'Ya', NULL, NULL, 0, 'Transfer', 40000),
(39, NULL, 1, NULL, '2023-06-02', '2023-06-04', 'Ya', NULL, NULL, 0, 'Transfer', 40000),
(40, NULL, 1, NULL, '2023-06-02', '2023-06-09', 'Ya', NULL, NULL, 0, 'Transfer', 140000),
(41, NULL, 1, NULL, '2023-06-03', '2023-06-11', 'Ya', NULL, NULL, 0, 'Transfer', 160000),
(42, NULL, 1, NULL, '2023-06-07', '2023-06-11', 'Ya', NULL, NULL, 0, 'Transfer', 80000),
(43, NULL, 1, NULL, '2023-06-07', '2023-06-14', 'Ya', NULL, NULL, 0, 'Transfer', 140000),
(45, NULL, 1, NULL, '2023-06-07', '2023-06-14', 'Ya', NULL, NULL, 0, 'Transfer', 140000),
(51, NULL, 1, NULL, '2023-06-07', '2023-06-20', 'Ya', NULL, NULL, 0, 'Transfer', 260000),
(53, NULL, 2, NULL, '2023-06-07', '2023-06-20', 'Ya', NULL, NULL, 0, 'Transfer', 2600000),
(54, NULL, 2, NULL, '2023-06-09', '2023-06-11', 'Ya', NULL, NULL, 0, 'Transfer', 400000),
(55, NULL, 3, NULL, '2023-06-09', '2023-06-21', 'Ya', NULL, NULL, 0, 'Transfer', 2400000),
(56, NULL, 2, NULL, '2023-06-09', '2023-06-19', 'Ya', NULL, NULL, 0, 'Transfer', 2000000),
(57, NULL, 2, NULL, '2023-06-09', '2023-06-11', 'Ya', NULL, NULL, 0, 'Transfer', 400000),
(58, NULL, 2, NULL, '2023-06-10', '2023-06-12', 'Ya', NULL, NULL, 0, 'Transfer', 400000),
(59, NULL, 3, NULL, '2023-06-11', '2023-06-18', 'Ya', NULL, NULL, 0, 'Transfer', 1400000),
(60, NULL, 2, NULL, '2023-06-11', '2023-06-27', 'Ya', NULL, NULL, 0, 'Transfer', 3200000),
(61, NULL, 3, NULL, '2023-06-11', '2023-06-12', 'Ya', NULL, NULL, 0, 'Transfer', 200000),
(62, NULL, 3, NULL, '2023-06-11', '2023-06-28', 'Ya', NULL, NULL, 0, 'Transfer', 3400000);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_pemesanan` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tgl_kembali` date NOT NULL,
  `kondisi_mobil` varchar(255) DEFAULT NULL,
  `denda` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_pemesanan`, `id_admin`, `tgl_kembali`, `kondisi_mobil`, `denda`) VALUES
(1, 22, 0, '2023-06-09', 'rusak', 5000),
(2, 34, 0, '2023-05-30', 'wdsd', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akun_user`
--
ALTER TABLE `akun_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_user`
--
ALTER TABLE `akun_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`),
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
