-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2020 pada 14.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `no` int(15) NOT NULL,
  `nama_brg` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`no`, `nama_brg`) VALUES
(1, 'Permen Milkitos'),
(3, 'Sari Roti Bantal Coklat'),
(4, 'Roti Bobo Kelapa'),
(5, 'Malkist Abon'),
(7, 'Kuaci Hatari'),
(8, 'Aika Aibon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_konsumen`
--

CREATE TABLE `data_konsumen` (
  `no` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_konsumen`
--

INSERT INTO `data_konsumen` (`no`, `nama`, `no_hp`) VALUES
(1, 'Maharaja Diraja', '082223242525'),
(2, 'Putri Maharatu', '081213141516'),
(3, 'Putri Diraja', '087877767574'),
(4, 'Putra Mahkota', '082122232425'),
(5, 'Agung Badrul', '081234567890'),
(8, 'Ahmad Zakey', '085657585960'),
(9, 'Hadi Cahyono', '089796959492');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `no` int(11) NOT NULL,
  `konsumen` varchar(50) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`no`, `konsumen`, `nama_brg`, `tgl_ambil`) VALUES
(1, '2', '1', '2019-12-20'),
(3, '3', '3', '2019-12-12'),
(4, '1', '3', '2019-12-19'),
(5, '1', '1', '1222-12-12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `data_konsumen`
--
ALTER TABLE `data_konsumen`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_konsumen`
--
ALTER TABLE `data_konsumen`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
