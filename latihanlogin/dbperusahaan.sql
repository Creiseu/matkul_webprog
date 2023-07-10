-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2023 pada 19.09
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
-- Database: `dbperusahaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_divisi`
--

CREATE TABLE `mst_divisi` (
  `iddivisi` int(11) NOT NULL,
  `nama_divisi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_divisi`
--

INSERT INTO `mst_divisi` (`iddivisi`, `nama_divisi`) VALUES
(1, 'IT'),
(2, 'Accounting'),
(3, 'HRD'),
(4, 'Direksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_pegawai`
--

CREATE TABLE `mst_pegawai` (
  `idpegawai` int(11) NOT NULL,
  `nama_peg` varchar(20) DEFAULT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `divisi` int(11) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_pegawai`
--

INSERT INTO `mst_pegawai` (`idpegawai`, `nama_peg`, `jk`, `divisi`, `jabatan`, `tgl_masuk`, `status`, `alamat`, `foto`) VALUES
(58, 'ASDSA', 'Pria', 1, 'asdsa', '2222-02-22', 'kontrak', 'sad', 'png-transparent-soviet-union-communist-symbolism-hammer-and-sickle-communism-soviet-union-angle-flag-text.png'),
(59, 'ASDAS', 'Pria', 3, 'asd', '0000-00-00', 'kontrak', 'asdas', 'png-transparent-soviet-union-communist-symbolism-hammer-and-sickle-communism-soviet-union-angle-flag-text.png'),
(60, 'SADA', 'Pria', 3, 'asda', '2222-02-22', 'kontrak', 'asdsa', 'Logo_of_the_Democratic_Party_(Indonesia).svg.png'),
(61, 'AAD', 'Pria', 1, 'asd', '0222-02-22', 'kontrak', 'sadas', 'Logo_of_the_Democratic_Party_(Indonesia).svg.png'),
(62, 'ASD', 'Pria', 2, '222', '7777-07-07', 'kontrak', 'asdsa', 'Logo_of_the_Democratic_Party_(Indonesia).svg.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_user`
--

CREATE TABLE `mst_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_user`
--

INSERT INTO `mst_user` (`username`, `password`, `is_active`, `nama`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e', 0, ''),
('Admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Daud'),
('ANJAY', 'de12f5798f86bdcc5c759a645e913e4c', 0, 'ANJAY'),
('TYY', '6a4aafc4071ebeb20cf48e9793bd1a08', 1, 'TYY'),
('YUYU', 'f34d07b202eaeadf913468e95d7fcb86', 0, 'YUYU');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mst_divisi`
--
ALTER TABLE `mst_divisi`
  ADD PRIMARY KEY (`iddivisi`),
  ADD KEY `iddivisi` (`iddivisi`);

--
-- Indeks untuk tabel `mst_pegawai`
--
ALTER TABLE `mst_pegawai`
  ADD PRIMARY KEY (`idpegawai`),
  ADD KEY `fk_divisi` (`divisi`);

--
-- Indeks untuk tabel `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mst_divisi`
--
ALTER TABLE `mst_divisi`
  MODIFY `iddivisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mst_pegawai`
--
ALTER TABLE `mst_pegawai`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mst_pegawai`
--
ALTER TABLE `mst_pegawai`
  ADD CONSTRAINT `fk_divisi` FOREIGN KEY (`divisi`) REFERENCES `mst_divisi` (`iddivisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
