-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2019 at 12:21 AM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mule7148_naivebayes`
--

-- --------------------------------------------------------

--
-- Table structure for table `01_quisioner`
--

CREATE TABLE `01_quisioner` (
  `id_quisioner` int(11) NOT NULL,
  `nama_quisioner` varchar(200) NOT NULL,
  `quisioner[0]` varchar(10) NOT NULL,
  `quisioner[1]` varchar(10) NOT NULL,
  `quisioner[2]` varchar(10) NOT NULL,
  `quisioner[3]` varchar(10) NOT NULL,
  `quisioner[4]` varchar(10) NOT NULL,
  `quisioner[5]` varchar(10) NOT NULL,
  `quisioner[6]` varchar(10) NOT NULL,
  `quisioner[7]` varchar(10) NOT NULL,
  `quisioner[8]` varchar(10) NOT NULL,
  `quisioner[9]` varchar(10) NOT NULL,
  `quisioner[10]` varchar(10) NOT NULL,
  `quisioner[11]` varchar(10) NOT NULL,
  `quisioner[12]` varchar(10) NOT NULL,
  `quisioner[13]` varchar(10) NOT NULL,
  `lulus_quisioner` varchar(10) NOT NULL,
  `updated` varchar(20) NOT NULL,
  `updater` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `01_quisioner`
--

INSERT INTO `01_quisioner` (`id_quisioner`, `nama_quisioner`, `quisioner[0]`, `quisioner[1]`, `quisioner[2]`, `quisioner[3]`, `quisioner[4]`, `quisioner[5]`, `quisioner[6]`, `quisioner[7]`, `quisioner[8]`, `quisioner[9]`, `quisioner[10]`, `quisioner[11]`, `quisioner[12]`, `quisioner[13]`, `lulus_quisioner`, `updated`, `updater`) VALUES
(1, 'Adi', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'YA', 'TEPAT', '', ''),
(2, 'Aji', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'TEPAT', '', ''),
(3, 'Ali', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(4, 'Ani', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TEPAT', '', ''),
(5, 'Ari', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TEPAT', '', ''),
(6, 'Aziz', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(7, 'Badri', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TEPAT', '', ''),
(8, 'Beni', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TEPAT', '', ''),
(9, 'Budi', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TEPAT', '', ''),
(10, 'Caca', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TERLAMBAT', '', ''),
(11, 'Ceri', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(12, 'Cika', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TEPAT', '', ''),
(13, 'Dani', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TEPAT', '', ''),
(14, 'Dedi', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TEPAT', '', ''),
(15, 'Diki', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TEPAT', '', ''),
(16, 'Dodi', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TERLAMBAT', '', ''),
(17, 'Dori', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'YA', 'TEPAT', '', ''),
(18, 'Eka', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TEPAT', '', ''),
(19, 'Eko', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(20, 'Ela', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TEPAT', '', ''),
(21, 'Emi', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'YA', 'TEPAT', '', ''),
(22, 'Eni', 'YA', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TEPAT', '', ''),
(23, 'Eri', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TERLAMBAT', '', ''),
(24, 'Fajar', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TERLAMBAT', '', ''),
(25, 'Fani', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TERLAMBAT', '', ''),
(26, 'Farah', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TEPAT', '', ''),
(27, 'Firman', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TERLAMBAT', '', ''),
(28, 'Gani', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'YA', 'TEPAT', '', ''),
(29, 'Geri', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(30, 'Gia', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TEPAT', '', ''),
(31, 'Hadi', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TEPAT', '', ''),
(32, 'Hani', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TERLAMBAT', '', ''),
(33, 'Heri', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'YA', 'TEPAT', '', ''),
(34, 'Iis', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(35, 'Ilham', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TERLAMBAT', '', ''),
(36, 'Indra', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TEPAT', '', ''),
(37, 'Indri', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'TEPAT', '', ''),
(38, 'Jaka', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TEPAT', '', ''),
(39, 'Jeki', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TEPAT', '', ''),
(40, 'Jeri', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TEPAT', '', ''),
(41, 'Lala', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'TERLAMBAT', '', ''),
(42, 'Leni', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TERLAMBAT', '', ''),
(43, 'Mia', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TEPAT', '', ''),
(44, 'Nia', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'TEPAT', '', ''),
(45, 'Oka', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TEPAT', '', ''),
(46, 'Ovi', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(47, 'Pia', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'TEPAT', '', ''),
(48, 'Riska', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'TERLAMBAT', '', ''),
(49, 'Riski', 'TIDAK', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TERLAMBAT', '', ''),
(50, 'Santi', 'YA', 'YA', 'TIDAK', 'YA', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'TEPAT', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_solusi`
--

CREATE TABLE `daftar_solusi` (
  `id_daftarsolusi` int(10) NOT NULL,
  `id_solusi` varchar(10) DEFAULT NULL,
  `solusi` varchar(300) DEFAULT NULL,
  `waktu_kelulusan` varchar(10) DEFAULT NULL,
  `updated` varchar(20) DEFAULT NULL,
  `updater` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_solusi`
--

INSERT INTO `daftar_solusi` (`id_daftarsolusi`, `id_solusi`, `solusi`, `waktu_kelulusan`, `updated`, `updater`) VALUES
(1, 's1', 'Pertahankan Prestasi Anda', 'TEPAT', '2018-06-04 01:32:57', 'admin'),
(2, 's2', 'Pertahankan Nilai IP Anda', 'TEPAT', '2018-06-04 01:32:57', 'admin'),
(3, 's3', 'Jangan cepat puas dan ditingkatkan lagi', 'TEPAT', '2018-06-04 01:32:57', 'admin'),
(4, 's4', 'Lebih Giat Lagi Mendapatkan IP', 'TERLAMBAT', '2018-06-04 01:32:57', 'admin'),
(5, 's5', 'Lebih Banyak Mengambil SKS', 'TERLAMBAT', '2018-06-04 01:32:57', 'admin'),
(6, 's6', 'Jangan Malas untuk Belajar', 'TERLAMBAT', '2018-06-04 01:32:57', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_user`
--

CREATE TABLE `daftar_user` (
  `id_user` int(15) NOT NULL,
  `nama_lengkap` varchar(35) DEFAULT NULL,
  `nama_perti` varchar(35) DEFAULT NULL,
  `nama_jurusan` varchar(35) DEFAULT NULL,
  `tahun_masuk` varchar(35) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tgl_diagnosa` date DEFAULT NULL,
  `keterangan` varchar(35) DEFAULT NULL,
  `updated` varchar(20) DEFAULT NULL,
  `updater` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_user`
--

INSERT INTO `daftar_user` (`id_user`, `nama_lengkap`, `nama_perti`, `nama_jurusan`, `tahun_masuk`, `nama`, `password`, `jenis_kelamin`, `tgl_lahir`, `tgl_diagnosa`, `keterangan`, `updated`, `updater`) VALUES
(1, 'Mashum Abdul Jabbar', 'Politeknik Kampar', 'Teknik Informatika', '2012', 'jabbar', 'jabbar2016', 'pria', '1994-04-24', '2018-07-22', 'TEPAT', NULL, NULL),
(4, 'Jabbar', 'Polkam', 'TIF', '2018', 'lia', 'lia', 'pria', '2018-07-10', '2018-07-21', '-', NULL, NULL),
(5, 'Jabbar', 'POLKAM', 'TIF', '2015', 'jabbar444', 'jabbar2016', 'pria', '0000-00-00', '2019-02-14', 'TEPAT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_basis` int(10) NOT NULL,
  `id_gejala` varchar(10) DEFAULT NULL,
  `pertanyaan` varchar(300) DEFAULT NULL,
  `fakta_ya` varchar(150) DEFAULT NULL,
  `fakta_tidak` varchar(150) DEFAULT NULL,
  `updated` varchar(20) NOT NULL,
  `updater` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_basis`, `id_gejala`, `pertanyaan`, `fakta_ya`, `fakta_tidak`, `updated`, `updater`) VALUES
(1, 'g1', 'Apakah Anda Masuk Perguruan Tinggi dengan Lulus pada Seleksi Jalur Prestasi?', 'Jalur Prestasi', 'Jalur Non Prestasi', '2018-06-03 16:21:31', 'admin'),
(2, 'g2', 'Apakah Pendidikan Terakhir dari Ibu Anda minimal SMA Sederajat?', 'Pendidikan Ibu Minimal SMA', 'Pendidikan Ibu di bawah SMA', '2018-06-03 16:21:31', 'admin'),
(3, 'g3', 'Apakah IP Semester 1  lebih dari 3.28?', 'IP Semester 1 lebih dari 3.28', 'IP Semester 1 kurang dari 3.28', '2018-06-03 16:21:31', 'admin'),
(4, 'g4', 'Apakah IP Semester 2  lebih dari 3.30?', 'IP Semester 2 lebih dari 3.30', 'IP Semester 2 kurang dari 3.30', '2018-06-03 16:21:31', 'admin'),
(5, 'g5', 'Apakah IP Semester 3  lebih dari 3.32?', 'IP Semester 3 lebih dari 3.32', 'IP Semester 3 kurang dari 3.32', '2018-06-03 16:21:31', 'admin'),
(6, 'g6', 'Apakah IP Semester 4  lebih dari 3.34?', 'IP Semester 4 lebih dari 3.34', 'IP Semester 4 kurang dari 3.34', '2018-06-03 16:21:31', 'admin'),
(7, 'g7', 'Apakah IP Semester 4  lebih dari 3.36?', 'IP Semester 4 lebih dari 3.36', 'IP Semester 4 kurang dari 3.36', '2018-06-03 16:21:31', 'admin'),
(8, 'g8', 'Apakah IP Semester 4  lebih dari 3.38?', 'IP Semester 4 lebih dari 3.38', 'IP Semester 4 kurang dari 3.38', '2018-06-03 16:21:31', 'admin'),
(9, 'g9', 'Apakah Jumlah SKS Semester 1 lebih dari 21?', 'Jumlah SKS Semester 1 lebih dari 21', 'Jumlah SKS Semester 1 kurang dari 21', '2018-06-03 16:21:31', 'admin'),
(10, 'g10', 'Apakah Jumlah SKS Semester 2 lebih dari 21?', 'Jumlah SKS Semester 2 lebih dari 21', 'Jumlah SKS Semester 2 kurang dari 21', '2018-06-03 16:21:31', 'admin'),
(11, 'g11', 'Apakah Jumlah SKS Semester 3 lebih dari 21?', 'Jumlah SKS Semester 3 lebih dari 21', 'Jumlah SKS Semester 3 kurang dari 21', '2018-06-03 16:21:31', 'admin'),
(12, 'g12', 'Apakah Jumlah SKS Semester 4 lebih dari 21?', 'Jumlah SKS Semester 4 lebih dari 21', 'Jumlah SKS Semester 4 kurang dari 21', '2018-06-03 16:21:31', 'admin'),
(13, 'g13', 'Apakah Jumlah SKS Semester 5 lebih dari 21?', 'Jumlah SKS Semester 5 lebih dari 21', 'Jumlah SKS Semester 5 kurang dari 21', '2018-06-03 16:21:31', 'admin'),
(14, 'g14', 'Apakah Jumlah SKS Semester 6 lebih dari 21?', 'Jumlah SKS Semester 6 lebih dari 21', 'Jumlah SKS Semester 6 kurang dari 21', '2018-07-21 23:58:42', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `updated` varchar(20) DEFAULT NULL,
  `updater` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `status`, `updated`, `updater`) VALUES
(1, 'Abdul Jabbar', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2018-06-04 02:12:33', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `01_quisioner`
--
ALTER TABLE `01_quisioner`
  ADD PRIMARY KEY (`id_quisioner`);

--
-- Indexes for table `daftar_solusi`
--
ALTER TABLE `daftar_solusi`
  ADD PRIMARY KEY (`id_daftarsolusi`);

--
-- Indexes for table `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_basis`),
  ADD UNIQUE KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `01_quisioner`
--
ALTER TABLE `01_quisioner`
  MODIFY `id_quisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `daftar_solusi`
--
ALTER TABLE `daftar_solusi`
  MODIFY `id_daftarsolusi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_basis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
