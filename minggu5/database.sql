-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 06:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `no_plat` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `tarif` int(11) NOT NULL,
  `status` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`no_plat`, `tahun`, `tarif`, `status`) VALUES
('H 2297 DN', '2017', 600000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_ktp`, `nama`, `alamat`, `telepon`) VALUES
('123456789', 'hajir', 'klipang H 283', '085712061712');

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `id_sopir` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `sim` char(1) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`id_sopir`, `nama`, `alamat`, `telepon`, `sim`, `tarif`) VALUES
('12345', 'budi', 'imam bonjol', '085123456712', 'A', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kendaraan`
--

CREATE TABLE `tipe_kendaraan` (
  `id_type` varchar(10) NOT NULL,
  `type` enum('Mini','Standar','SUV') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kendaraan`
--

INSERT INTO `tipe_kendaraan` (`id_type`, `type`) VALUES
('01', 'Mini');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(10) NOT NULL,
  `tanggal pesan` date NOT NULL,
  `tanggal pinjam` date NOT NULL,
  `tanggal kembali rencana` date NOT NULL,
  `jam kembali rencana` time NOT NULL,
  `tanggal kembali realisasi` date NOT NULL,
  `jam kembali realisasi` time NOT NULL,
  `denda` int(11) NOT NULL,
  `kilometer pinjam` varchar(10) NOT NULL,
  `kilometer kembali` varchar(10) NOT NULL,
  `bbm pinjam` varchar(10) NOT NULL,
  `bbm kembali` varchar(10) NOT NULL,
  `kondisi mobil pinjam` varchar(100) NOT NULL,
  `kondisi mobil kembali` varchar(100) NOT NULL,
  `kerusakan` varchar(100) NOT NULL,
  `biaya kerusakan` int(11) NOT NULL,
  `biaya bbm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `tanggal pesan`, `tanggal pinjam`, `tanggal kembali rencana`, `jam kembali rencana`, `tanggal kembali realisasi`, `jam kembali realisasi`, `denda`, `kilometer pinjam`, `kilometer kembali`, `bbm pinjam`, `bbm kembali`, `kondisi mobil pinjam`, `kondisi mobil kembali`, `kerusakan`, `biaya kerusakan`, `biaya bbm`) VALUES
('0122345', '2021-05-01', '2021-05-02', '2021-05-04', '13:00:00', '2021-05-04', '11:39:42', 0, '7551 km', '7651 km', '40', '15', 'kondisi bagus', 'kondisi bagus', 'tidak ada', 0, 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`no_plat`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indexes for table `tipe_kendaraan`
--
ALTER TABLE `tipe_kendaraan`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
