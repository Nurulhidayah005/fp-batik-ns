-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2024 pada 02.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp_batik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_produk`, `harga`, `jumlah_beli`) VALUES
(1, 1, 18, 350000, 3),
(2, 2, 18, 350000, 1),
(3, 3, 17, 290000, 2),
(4, 4, 19, 670000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `id_user`, `jumlah_beli`) VALUES
(12, 19, 5, 2),
(13, 18, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(15) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_produk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `stok`, `harga`, `deskripsi`, `foto_produk`) VALUES
(1, 'M001', 'Batik Custom', 50, 170000, 'Baju Batik custom laki laki dewasa ', 'm1.jpeg'),
(2, 'M002', 'Outer Batik', 50, 150000, 'Outer wanita dewasa', 'm2.jpeg'),
(3, 'M003', 'Dress Batik', 50, 200000, 'Dress wanita dewasa', 'm3.jpeg'),
(4, 'M004', 'Batik Dress Green', 50, 190000, 'Dress batik wanita dewasa warna hijau', 'm4.jpeg'),
(5, 'M005', 'Nismara Outer Abu', 50, 165000, 'Outer Abu wanita dewasa', 'm5.jpeg'),
(6, 'M006', 'Batik Motif Jacquard Coklat', 50, 300000, 'Atasan batik laki laki dewasa', 'm6.jpeg'),
(7, 'M007', 'Batik motif couple', 50, 440000, 'Couple Baju Batik', 'm7.jpeg'),
(8, 'B008', 'Batik biru LP', 50, 240000, 'Batik Laki laki dewasa lengan panjang', 'b8.jpeg'),
(9, 'B009', 'Batik wanita motif sidomukti', 50, 120000, 'Baju batik wanita dewasa motif sidomukti', 'b9.jpeg'),
(10, 'B010', 'Ganendra Dress Batik', 50, 120000, 'Ganendra batik', 'b10.jpeg'),
(11, 'B011', 'Tunik Batik cendrawasih', 50, 260000, 'Tunik Batik motif cendrawasih', 'b11.jpeg'),
(12, 'K012', 'Kain tunik batik modern', 50, 190000, 'Kain tunik batik modern', 'k12.jpeg'),
(13, 'K013', 'Kain Batik Margaria', 50, 197000, 'Kain Batik Margaria', 'k13.jpeg'),
(14, 'K014', 'Kain Batik Silky Abstrak', 50, 160000, 'Kain Batik Silky Abstrak', 'k14.jpeg'),
(15, 'K015', 'Kain Batik coklat', 50, 900000, 'Kain Batik coklat', 'k15.jpeg'),
(16, 'K016', 'Kain Batik Keris Gold', 50, 200000, 'Kain Batik Keris Gold', 'k16.jpeg'),
(17, 'K017', 'Kain Batik motif daun', 50, 290000, 'Kain Batik motif daun', 'k17.jpeg'),
(18, 'K018', 'Kain Batik farah fajri', 50, 350000, 'Kain Batik farah fajri', 'k18.jpeg'),
(19, 'K019', 'Kain Batik Printing Jolomanuk', 50, 670000, 'Kain Batik Printing Jolomanuk', 'k19.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat_jalan` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tgl_transaksi`, `total_bayar`, `nama`, `alamat_jalan`, `kecamatan`, `kota`, `provinsi`) VALUES
(1, 2, '2024-07-01 00:00:00', 1050000, 'Nurul Hidayah', 'Ngentak sumberadi mlati sleman', 'mlati', 'diy', 'Yogyakarta'),
(2, 4, '2024-07-02 00:00:00', 350000, 'asd', 'sadmak', 'sakdn', 'ndka', 'kasd'),
(3, 2, '2024-07-03 00:00:00', 580000, 'Nurul Hidayah', 'sucen', 'sleman', 'yogyakarta', 'Yogyakarta'),
(4, 3, '2024-07-03 00:00:00', 1340000, 'jgjg', 'vjvh', 'sleman', 'jhvj', 'gu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `last_login`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin WP2', '2024-07-01 10:21:00'),
(2, 'ambarambur', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Ambar Setyawati', '2024-07-03 00:46:13'),
(3, 'Nrl', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Nurul Hidayah', '2024-07-03 00:49:18'),
(4, 'aziz', 'e65ac9372a656094f1fd6f409f28183624883fc5', 'aziz', '2024-07-02 15:57:14'),
(5, 'zis', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Azis Fatkhu', '2024-07-03 00:38:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_transaksi`),
  ADD KEY `transaksi_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
