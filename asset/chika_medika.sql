-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 08:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chika_medika`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `tanggal` timestamp NULL DEFAULT NULL,
  `anamnese` varchar(100) DEFAULT NULL,
  `nomenklatur` varchar(10) DEFAULT NULL,
  `diagnosa` varchar(100) DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `resep` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `visit` int(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`tanggal`, `anamnese`, `nomenklatur`, `diagnosa`, `tindakan`, `resep`, `keterangan`, `visit`, `id_pasien`) VALUES
('2021-05-16 06:33:20', 'Gusi bengkak', '5', 'Infeksi gusi', 'Pemberian antibiotik', 'Antibiotik', '', 1, 1),
('2021-05-16 06:35:28', 'Ingin memasang gigi palsu', '2,3,5', 'tidak ada', 'Membuat gigi palsu dan memasangnya', 'tidak ada', '', 1, 2),
('2021-05-16 06:37:05', 'gigi patah', '5', 'Gigi patah', 'mencabut gigi', 'Antibiotik', 'Kembali minggu depan untuk check up', 1, 3),
('2021-05-16 06:39:07', 'Pembengkakan gusi bagian kanan', '1', 'bakteri yang menumpuk membuat pembengkakan pada gusi', 'membersihkan gigi dan memberikan antibiotik', 'antibiotik dan obat kumur', 'kembali 2 hari lagi untuk mengecek kembali', 1, 4),
('2021-05-16 06:40:32', 'Ingin mencabut gigi', '5', 'Gigi yang membusuk', 'mencabut gigi', 'antibiotik', 'kembali 5 hari lagi untuk mengecek kondisi gigi', 1, 5),
('2021-05-16 06:41:43', 'Bekas cabut gigi membengkak', '5', 'penumpukan sisa makanan pada gigi', 'membersihkan gigi ', 'antibiotik dan obat kumur', 'gunakan antibiotik dan obat kumur setelah makan', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tgl_lahir`, `jk`, `alamat`, `no_telp`) VALUES
(1, 'Susi Susanti', '2000-06-16', 'P', 'Sukarame', '082198562273'),
(2, 'Joko Susanto', '1997-06-16', 'L', 'Way Hui', '087823415567'),
(3, 'Doni Junaedi', '1999-09-01', 'L', 'Way Kandis', '083411273454'),
(4, 'Lusi Iskandar', '1996-10-04', 'P', 'Kedaton', '02183457756'),
(5, 'Dani', '2000-06-16', 'L', 'Way Halim', '087523231123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
