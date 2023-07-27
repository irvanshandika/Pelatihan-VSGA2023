-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Jul 2023 pada 07.02
-- Versi server: 8.0.30
-- Versi PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simperpus_vsga2023`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_admin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin', 'password', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int NOT NULL,
  `idanggota` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jeniskelamin` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `idanggota`, `nama`, `jeniskelamin`, `alamat`, `foto`) VALUES
(1, 'AG0001', 'Thomas Shelby', 'L', 'Yogyakarta', 'THOMAS SHELBY PEAKY BLINDERS WALLPAPER.jpeg'),
(3, 'AG0002', 'Irvan', 'L', 'Yogyakarta', '277158933_1532454110518981_4849391986924895210_n.jpg'),
(4, 'AG0003', 'Rahma', 'P', 'Yogyakarta', 'd5db5bff2f7d4ea4a6e877046a239dd2.png'),
(5, 'AG0004', 'Taufik', 'L', 'Gunung Kidul', 'taufik.png'),
(6, 'AG0005', 'Aulia', 'P', 'Yogyakarta', '5f69de4196b5e.png'),
(7, 'AG0006', 'Nadiem', 'L', 'Jakarta', 'nadiem_makarim-removebg-preview.png'),
(8, 'AG0007', 'Annisa', 'P', 'Pontianak', 'd5db5bff2f7d4ea4a6e877046a239dd2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int NOT NULL,
  `judul_buku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengarang` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerbit` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` year DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `isbn`, `pengarang`, `penerbit`, `tahun`) VALUES
(1, 'Pengantar Logika Informatika. ALgoritma dan Pemrograman Komputer', '97976300408', 'Heri Sismoro', 'Andi OFFSET', '2005'),
(2, 'Cara Mudah Memahami PHP', '12345678909', 'Irvan', 'Irvan', '2023'),
(3, 'Belajar Bahasa PHP', '09667584901', 'Taufik', 'Taufik', '2019'),
(4, 'Belajar Dasar Bahasa PHP', '09882156879', 'Taufik', 'Taufik', '2020'),
(5, 'Belajar Dasar Pemrograman Python', '85673092156', 'Irvan', 'Irvan', '2017'),
(6, 'Belajar Membuat Website Dengan Wordpress', '94346788106', 'Albert Einstein', 'New York', '2023'),
(7, 'Cara Mudah Memahami JavaScript', '841327854022', 'Taufik Hidayat', 'Taufik Corp', '2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `anggota` int NOT NULL,
  `buku` int NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `status` enum('pinjam','kembali') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `anggota`, `buku`, `tanggal_pinjam`, `status`, `tanggal_kembali`) VALUES
(1, 3, 1, '2023-07-21', 'pinjam', '2023-07-22'),
(2, 3, 1, '2023-07-21', 'kembali', '2023-07-22'),
(3, 6, 2, '2023-07-27', 'pinjam', '2023-07-29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
