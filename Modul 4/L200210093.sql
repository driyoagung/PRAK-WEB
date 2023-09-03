-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2023 pada 16.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informatika`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `khs`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `khs` (
`NIM` varchar(10)
,`Nama_MK` char(50)
,`Nilai_Angka` varchar(5)
,`Nilai_Huruf` char(5)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `Nama` char(20) DEFAULT NULL,
  `Kelas` char(5) DEFAULT NULL,
  `Alamat` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Kelas`, `Alamat`) VALUES
('L200080001', 'Ari Wibowo', 'A', 'Solo'),
('l200080080', 'Agustina Anggraini', 'B', 'Sragen'),
('L200210093', 'Driyo Agung Leksono', 'G', 'Blora');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `NIM` varchar(10) NOT NULL,
  `Nama_MK` char(50) DEFAULT NULL,
  `Nilai_Angka` varchar(5) DEFAULT NULL,
  `Nilai_Huruf` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`NIM`, `Nama_MK`, `Nilai_Angka`, `Nilai_Huruf`) VALUES
('L200080002', 'Kapita Selekta', '60', 'BC'),
('L200080010', 'Pemrograman Web', '87', 'A'),
('L200080080', 'Pemrograman Web', '90', 'A');

-- --------------------------------------------------------

--
-- Struktur untuk view `khs`
--
DROP TABLE IF EXISTS `khs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `khs`  AS SELECT `mahasiswa`.`NIM` AS `NIM`, `nilai`.`Nama_MK` AS `Nama_MK`, `nilai`.`Nilai_Angka` AS `Nilai_Angka`, `nilai`.`Nilai_Huruf` AS `Nilai_Huruf` FROM (`mahasiswa` join `nilai` on(`mahasiswa`.`NIM` = `nilai`.`NIM`))  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
