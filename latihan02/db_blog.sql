-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 14.05
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
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_blog`
--

CREATE TABLE `mst_blog` (
  `judul` varchar(50) NOT NULL,
  `file_gmb` varchar(50) NOT NULL,
  `isi_blog` text NOT NULL,
  `tglblog` datetime NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `idblog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `is_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_blog`
--

INSERT INTO `mst_blog` (`judul`, `file_gmb`, `isi_blog`, `tglblog`, `penulis`, `idblog`, `id_kategori`, `is_aktif`) VALUES
('Legenda Zaki', 'gambar1.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores fugit quod cumque provident quasi! Ut minus veritatis sed atque, aut\r\n              modi fugit? Veniam quos voluptatum harum cumque vero, numquam dolore!', '2023-05-10 08:28:10', 'Misterius', 1, 1, 0),
('skuy', 'gambar1.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores fugit quod cumque provident quasi! Ut minus veritatis sed atque, aut\r\n              modi fugit? Veniam quos voluptatum harum cumque vero, numquam dolore!', '2222-02-22 00:00:00', 'anjay', 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_kategori`
--

CREATE TABLE `mst_kategori` (
  `idkategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_kategori`
--

INSERT INTO `mst_kategori` (`idkategori`, `nm_kategori`) VALUES
(1, 'matakulia'),
(2, 'anjay'),
(3, 'zaki indomaret');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_user`
--

CREATE TABLE `mst_user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(70) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_user`
--

INSERT INTO `mst_user` (`iduser`, `username`, `password`, `is_active`) VALUES
(1, 'anja', 'sku', 0),
(2, 'anjay', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mst_blog`
--
ALTER TABLE `mst_blog`
  ADD PRIMARY KEY (`idblog`);

--
-- Indeks untuk tabel `mst_kategori`
--
ALTER TABLE `mst_kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mst_blog`
--
ALTER TABLE `mst_blog`
  MODIFY `idblog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mst_kategori`
--
ALTER TABLE `mst_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
