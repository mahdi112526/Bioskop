-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 09 Agu 2022 pada 19.30
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bioskop_ls`
--

CREATE TABLE `bioskop_ls` (
  `kd_bioskop` varchar(25) NOT NULL,
  `nama_bioskop` varchar(255) DEFAULT NULL,
  `alamat_bioskop` varchar(255) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bioskop_ls`
--

INSERT INTO `bioskop_ls` (`kd_bioskop`, `nama_bioskop`, `alamat_bioskop`, `kota`) VALUES
('CT', 'City Of Tomorrow', 'Jl. Ahmad Yani No.288, Dukuh Menanggal, Kec. Gayungan, Kota SBY, Jawa Timur 60234', 'Surabaya'),
('CTO', 'City Of Tomorrow 2', 'Jl. Ahmad Yani No.288, Dukuh Menanggal, Kec. Gayungan, Kota SBY, Jawa Timur 60234', 'Surabaya'),
('MOG', 'Mall Olimpic Garden', 'Jl. Kawi No.24, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65116', 'malang'),
('MTS', 'Malang Town Square', 'l. Veteran No.2, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65111', 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Film`
--

CREATE TABLE `Film` (
  `kd_film` varchar(100) NOT NULL,
  `judul_film` varchar(255) DEFAULT NULL,
  `tgl_launch` date NOT NULL DEFAULT current_timestamp(),
  `synopsis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Film`
--

INSERT INTO `Film` (`kd_film`, `judul_film`, `tgl_launch`, `synopsis`) VALUES
('BJ6', 'Bukan ini juga', '2022-08-08', 'tidak ada sinopsis'),
('CB', 'Cinta Ini Buka', '2022-08-17', 'Bukan Sih ini'),
('CS009', 'Cinta Segi Lima Sama Sisi', '2022-08-31', ''),
('DN', 'ada Cinta Diantara Kucing dan Anjing', '2022-08-10', 'Apa ini'),
('HA', 'Hai', '2022-08-09', 'Film Ga jelas sih'),
('MP001', 'Maling Pagi', '2022-05-01', 'Maling'),
('MP002', 'Nama', '2022-08-10', 'eshdsb'),
('MP003', 'Nama3', '2022-08-12', 'Ada cinta 3'),
('TL008', 'Terus coba lagi', '2022-08-08', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tayang`
--

CREATE TABLE `tayang` (
  `kd_tayang` varchar(50) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `kd_film` varchar(255) NOT NULL,
  `tanggal_waktu_tayang` datetime NOT NULL,
  `jumlah_kursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bioskop_ls`
--
ALTER TABLE `bioskop_ls`
  ADD PRIMARY KEY (`kd_bioskop`);

--
-- Indeks untuk tabel `Film`
--
ALTER TABLE `Film`
  ADD PRIMARY KEY (`kd_film`);

--
-- Indeks untuk tabel `tayang`
--
ALTER TABLE `tayang`
  ADD PRIMARY KEY (`kd_tayang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
