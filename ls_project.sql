-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 12.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ls_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `brgid` int(11) UNSIGNED NOT NULL,
  `brgnama` varchar(100) NOT NULL,
  `brgkat` int(11) NOT NULL,
  `brgsubkat` int(11) NOT NULL,
  `brgharga` double(10,2) NOT NULL,
  `brgstok` int(11) NOT NULL,
  `brggambar` varchar(200) NOT NULL,
  `brgdeskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`brgid`, `brgnama`, `brgkat`, `brgsubkat`, `brgharga`, `brgstok`, `brggambar`, `brgdeskripsi`) VALUES
(1, 'Carmila 350', 1, 3, 1200.00, 100000, '1.jpg', 'Undangan pernikahan<br>\r\n<br>\r\nSpesifikasi<br>\r\nUkuran Terbuka : 20,5 x 24 (Cm)<br>\r\nUkuran Tertutup : 12 x 20,5 (Cm)<br>\r\nUkuran Plastik : 12,5 x 22 (Cm)<br>\r\nJenis Kertas : BC<br>\r\nJenis Blangko : Softcover<br>\r\n<br>\r\nInfo :<br>\r\ndesign sesuai dengan keinginan.<br>\r\nharga tercantum belum termasuk plastik<br>\r\nminimal order 300<br>\r\n'),
(2, 'Byar 63', 1, 2, 1200.00, 10000, '2.jpg', 'Undangan pernikahan<br>\r\n<br>\r\nSpesifikasi :<br>\r\nUkuran Terlipat : 12.8 x 205 (Cm)<br>\r\nUkuran Plastik : 13,5 x 22 (Cm)<br>\r\nJenis Kertas : BC<br>\r\nJenis Blangko : Softcover<br>\r\n<br>\r\nInfo :<br>\r\ndesign sesuai dengan keinginan.<br>\r\nharga tercantum belum termasuk plastik\r\nminimal order 300<br>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `tamuid` int(11) NOT NULL,
  `tamuuser` varchar(100) NOT NULL,
  `tamuhp` varchar(30) NOT NULL,
  `tamunama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`tamuid`, `tamuuser`, `tamuhp`, `tamunama`) VALUES
(3, 'lela', '+628120000', 'tino'),
(5, 'tino', '+6285810100913', 'Sutino');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `katid` int(5) UNSIGNED NOT NULL,
  `katnama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`katid`, `katnama`) VALUES
(1, 'Undangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `levelid` int(10) UNSIGNED NOT NULL,
  `levelnama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`levelid`, `levelnama`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mempelaiacara`
--

CREATE TABLE `mempelaiacara` (
  `acarauser` varchar(100) NOT NULL,
  `akadtanggal` date NOT NULL,
  `akadjamawal` time NOT NULL,
  `akadjamakhir` time NOT NULL,
  `resepsitanggal` date NOT NULL,
  `resepsijamawal` time NOT NULL,
  `resepsijamakhir` time NOT NULL,
  `alamatlengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mempelaidua`
--

CREATE TABLE `mempelaidua` (
  `nikahduauser` varchar(100) NOT NULL,
  `nikahduanamapenggilan` varchar(225) NOT NULL,
  `nikahduanamalengkap` varchar(100) NOT NULL,
  `nikahduajenis` varchar(15) NOT NULL,
  `nikahduakeluarga` text NOT NULL,
  `nikahduaalamat` text NOT NULL,
  `nikahduaalamatid` int(11) NOT NULL,
  `mempelaiduafoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mempelaigaleri`
--

CREATE TABLE `mempelaigaleri` (
  `galeriid` int(11) NOT NULL,
  `galeriuser` varchar(100) NOT NULL,
  `galerifoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mempelaisatu`
--

CREATE TABLE `mempelaisatu` (
  `nikahsatuuser` varchar(100) NOT NULL,
  `nikahsatunamapanggilan` varchar(225) NOT NULL,
  `nikahsatunamalengkap` varchar(100) NOT NULL,
  `nikahsatujenis` varchar(15) NOT NULL,
  `nikahsatukeluarga` text NOT NULL,
  `nikahsatualamat` text NOT NULL,
  `nikahsatualamatid` int(11) NOT NULL,
  `mempelaisatufoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(11, '2022-05-30-102343', 'App\\Database\\Migrations\\Kategori', 'default', 'App', 1653907705, 1),
(12, '2022-05-30-103429', 'App\\Database\\Migrations\\SubKategori', 'default', 'App', 1653907705, 1),
(13, '2022-05-30-103836', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1653907705, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori`
--

CREATE TABLE `subkategori` (
  `subkatid` int(5) UNSIGNED NOT NULL,
  `subkatnama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `subkategori`
--

INSERT INTO `subkategori` (`subkatid`, `subkatnama`) VALUES
(1, 'Cantik'),
(2, 'Byar'),
(3, 'Rayya'),
(4, 'Lintang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userid` char(50) NOT NULL,
  `usernama` varchar(100) NOT NULL,
  `userfoto` varchar(225) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `userlevelid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userid`, `usernama`, `userfoto`, `useremail`, `userpassword`, `userlevelid`) VALUES
('admin', 'Administrator', '1808051201920006', 'sutino1201@gmail.com', '$2y$10$sMF3UrdmlFt8RcDq5qO.ruMf3RG6kSiNNKcL4LQ47Lw0ZCMc8L0ZO', 1),
('lela', 'Lela Setiana', '', 'lelasetia10@gmail.com', '$2y$10$vPTgZozOC/w.GLz9K8nGEepJ/JGCHgWY3XpGbB9bTlcMNDncSde9G', 2),
('Tino', 'Sutino', '', 'tino@gmail.com', '$2y$10$QQ1xRtqLAkk2IqY1.gp1hOrLic7ohZpnaD90DEaZQPV4f/BAEmMve', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`brgid`) USING BTREE;

--
-- Indeks untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`tamuid`),
  ADD UNIQUE KEY `tamuhp` (`tamuhp`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`katid`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD KEY `levelid` (`levelid`);

--
-- Indeks untuk tabel `mempelaiacara`
--
ALTER TABLE `mempelaiacara`
  ADD PRIMARY KEY (`acarauser`);

--
-- Indeks untuk tabel `mempelaidua`
--
ALTER TABLE `mempelaidua`
  ADD PRIMARY KEY (`nikahduauser`);

--
-- Indeks untuk tabel `mempelaigaleri`
--
ALTER TABLE `mempelaigaleri`
  ADD PRIMARY KEY (`galeriid`);

--
-- Indeks untuk tabel `mempelaisatu`
--
ALTER TABLE `mempelaisatu`
  ADD PRIMARY KEY (`nikahsatuuser`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`subkatid`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `level` (`userlevelid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `brgid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `tamuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `katid` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mempelaigaleri`
--
ALTER TABLE `mempelaigaleri`
  MODIFY `galeriid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `subkatid` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
