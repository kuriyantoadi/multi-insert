-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28 Agu 2020 pada 17.59
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi-insert`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `tgl` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `nama_siswa`, `kondisi`, `tgl`) VALUES
(115, 'diki', 'hadir', '28-08-2020'),
(116, 'santo', 'hadir', '28-08-2020'),
(117, 'santi', 'Tidak Hadir', '28-08-2020'),
(118, 'susan', 'hadir', '28-08-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `absen` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama_siswa`, `kelas`, `absen`) VALUES
(6, 'diki', 'XII TKJ 1', ''),
(7, 'santo', 'XII TKJ 1', ''),
(8, 'santi', 'XII TKJ 1', ''),
(9, 'susan', 'XII TKJ 1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
