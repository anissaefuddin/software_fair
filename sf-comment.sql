-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2016 at 07:58 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sf-comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `keterangan` varchar(60) NOT NULL,
  `komentar` text NOT NULL,
  `kode_peserta` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `pekerjaan`, `keterangan`, `komentar`, `kode_peserta`, `created_at`) VALUES
(28, 'a', 'anissaefuddin@gmail.com', '1', '', 'a\r\n', '', '2016-03-25 10:10:22'),
(29, 'anis saefuddin', 'anissaefuddin@gmail.com', '1', '', 'd', '', '2016-03-25 10:10:58'),
(30, 'ipung', 'anissaefuddin@gmail.com', '2', '', 'acara apik', '', '2016-03-25 10:11:48'),
(31, 'andi', 'andi@gmail.com', 'Dosen atau Karyawan', '', 'keren abis', '', '2016-03-25 10:22:14'),
(32, 'didik', 'didik@gmail.com', 'Mahasiswa', '', 'jos bro', '', '2016-03-25 10:23:16'),
(33, 'didik', 'didik@gmail.com', 'Dosen atau Karyawan', '0', 'keren amat acaranya', '', '2016-03-25 10:59:43'),
(34, 'anis saefuddin', 'anissaefuddin@gmail.com', 'Dosen atau Karyawan', '0', 'sa', '', '2016-03-25 11:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(10) NOT NULL,
  `kode_peserta` varchar(5) NOT NULL,
  `nama_apps` varchar(60) NOT NULL,
  `pembuat` varchar(60) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `kode_peserta`, `nama_apps`, `pembuat`, `keterangan`, `kategori`, `gambar`, `telp`, `email`, `created_at`) VALUES
(1, 'AS902', 'Tilang.in', 'faledo tim', 'aplikasi lapor polisi', 'Web apps', '', '', '', '2016-03-25 15:23:00'),
(2, 'hsg', 'asa', 'ipung', 'adaf', 'Web Apps', '0', '+6285641542123', 'anissaefuddin@gmail.com', '2016-03-25 13:58:40'),
(3, '9431', 'ipga', 'kahsf', 'sfbzdbs', 'Mobile Apps', '0', '+6285641542123', 'anissaefuddin@gmail.com', '2016-03-25 15:57:07'),
(4, 'as', 'sg', 'asg', 'ssfv', 'Desktop Apps', '0', '+6285641542123', 'asg@gmail.com', '2016-03-25 15:58:40'),
(5, 'sdaf', 'my act', 'anis saefuddin', 'asdfas', 'Desktop Apps', '0', '23r4r', 'anissaefuddin@gmail.com', '2016-03-25 16:01:29'),
(6, 'ip89', 'my act', 'anis saefuddin', ' r', 'Desktop Apps', '0', '+6285641542123', 'anissaefuddin@gmail.com', '2016-03-25 16:02:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_peserta` (`kode_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
