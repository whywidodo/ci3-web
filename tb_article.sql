-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2022 pada 02.33
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_article`
--

CREATE TABLE `tb_article` (
  `id` varchar(32) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text DEFAULT NULL,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_article`
--

INSERT INTO `tb_article` (`id`, `title`, `slug`, `content`, `draft`, `created_at`) VALUES
('1', 'Aksi Senyap Fund Manager Asing Borong Saham GoTo Saat Jatuh', 'manger-asing-borong-saham-goto', 'Aksi Senyap Fund Manager Asing Borong Saham GoTo Saat Jatuh,Tren pelemahan harga saham PT GoTo Gojek Tokopedia Tbk (GoTo) tidak menyurutkan minat investor untuk melakukan akasi borong. Sejak periode lock-up dibuka per awal Desember 2022, harga saham GOTO sudah anjlok lebih dari 50%. Namun beberapa fund manager asing justru memanfaatkan momentum tersebut untuk \\\'tambah muatan\\\'. Mengacu pada data Refinitiv Datastream ada beberapa nama investor asing yang membeli saham GOTO sejak akhir Oktober 2022', 'false', '2022-12-23 08:11:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_article`
--
ALTER TABLE `tb_article`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
