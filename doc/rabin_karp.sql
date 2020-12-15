-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2020 pada 09.28
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rabin_karp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ascii`
--

CREATE TABLE `ascii` (
  `id_ascii` int(11) NOT NULL,
  `huruf` varchar(225) NOT NULL,
  `nilai` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ascii`
--

INSERT INTO `ascii` (`id_ascii`, `huruf`, `nilai`) VALUES
(1, 'a', 97),
(2, 'b', 98),
(3, 'c', 99),
(4, 'd', 100),
(5, 'e', 101),
(6, 'f', 102),
(7, 'g', 103),
(8, 'h', 104),
(9, 'i', 105),
(10, 'j', 106),
(11, 'k', 107),
(12, 'l', 108),
(13, 'm', 109),
(14, 'n', 110),
(15, 'o', 111),
(16, 'p', 112),
(17, 'q', 113),
(18, 'r', 114),
(19, 's', 115),
(20, 't', 116),
(21, 'u', 117),
(22, 'v', 118),
(23, 'w', 119),
(24, 'x', 120),
(25, 'y', 121),
(26, 'z', 122);

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul`
--

CREATE TABLE `judul` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul`
--

INSERT INTO `judul` (`id`, `judul`) VALUES
(1, 'Sistem Informasi Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stopword`
--

CREATE TABLE `stopword` (
  `id` int(11) NOT NULL,
  `kata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stopword`
--

INSERT INTO `stopword` (`id`, `kata`) VALUES
(1, 'adalah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ascii`
--
ALTER TABLE `ascii`
  ADD PRIMARY KEY (`id_ascii`);

--
-- Indeks untuk tabel `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stopword`
--
ALTER TABLE `stopword`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ascii`
--
ALTER TABLE `ascii`
  MODIFY `id_ascii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stopword`
--
ALTER TABLE `stopword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
