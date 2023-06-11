-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 12.13
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mst_blog`
--
ALTER TABLE `mst_blog`
  ADD PRIMARY KEY (`idblog`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mst_blog`
--
ALTER TABLE `mst_blog`
  MODIFY `idblog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
