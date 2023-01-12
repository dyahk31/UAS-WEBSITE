-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2016 pada 02.20
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekspedisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(32) NOT NULL,
  `jenis_barang` varchar(32) NOT NULL,
  `berat_barang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `berat_barang`) VALUES
(21, 'Iphone X Pro Max', 'Gadget', 1.5),
(23, 'Daster Wanita', 'Pakaian', 9),
(27, 'Samsung SMART TV', 'Elektronik', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(5) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `kota`, `alamat`) VALUES
(1, 'Amplapura', 'Jalan Merdeka , Jalan Majapahit'),
(2, 'Bangli', 'Jalan Raya Taman, Jalan Serma Natih'),
(3, 'Denpasar', 'Jalan Tukad Badung, Jalan Gunung Agungs'),
(4, 'Gianyar', 'Jalan Ratna No. 12, Jalan Erlangga'),
(5, 'Mangupura', 'Jalan Raya Kapal, Jalan I Gusti Ngurah Rai - Mengwi'),
(6, 'Negara', 'Jalan Pulau Jawa, Jalan Denpasar - Gilimanuk'),
(7, 'Semarapura', 'Jalan Kecubung, Jalan Puputan'),
(8, 'Singaraja', 'Jalan Ahmad Yani, jalan Gempol, Jalan Suditman'),
(9, 'Tabanan', 'Jalan Ratna No. 2, Jalan Gajah Mada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima`
--

CREATE TABLE `penerima` (
  `id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(32) NOT NULL,
  `telepon_penerima` varchar(16) NOT NULL,
  `alamat_penerima` varchar(128) NOT NULL,
  `kode_pos` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `nama_penerima`, `telepon_penerima`, `alamat_penerima`, `kode_pos`) VALUES
(21, 'Haikal', '082233004412', 'Jl. Gunung Batur No 2', '65300'),
(23, 'Aksa', '082335766893', 'Jl. Matahari Terbit No. 31', '65155'),
(27, 'Alana', '082335766890', 'Jl. Pandawa No. 5', '65772');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengirim`
--

CREATE TABLE `pengirim` (
  `id_pengirim` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_pengirim` varchar(32) NOT NULL,
  `telepon_pengirim` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengirim`
--

INSERT INTO `pengirim` (`id_pengirim`, `id_penerima`, `id_barang`, `nama_pengirim`, `telepon_pengirim`) VALUES
(17, 21, 21, 'Sam', '082334735000'),
(19, 23, 23, 'Eko', '082334735966'),
(23, 27, 27, 'Darwin', '082334735966');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_resi` varchar(16) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jenis_paket` varchar(16) NOT NULL,
  `asal_kota` varchar(32) NOT NULL,
  `tujuan_kota` varchar(32) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `status` varchar(16) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`no_resi`, `id_pengirim`, `id_penerima`, `id_barang`, `jenis_paket`, `asal_kota`, `tujuan_kota`, `tgl_kirim`, `tgl_terima`, `status`, `harga`) VALUES
('20160017', 17, 21, 21, 'Regular', 'Denpasar', 'Tabanan', '2023-01-01', '2023-01-02', 'otw', 15000),
('20160019', 19, 23, 23, 'Express', 'Singaraja', 'Amplampura', '2022-12-31', '2023-01-4', 'terkirim', 135000),
('20160023', 23, 27, 27, 'Regular', 'Mangupura', 'Gianyar', '2022-12-22', '2023-01-10', 'kurir tersesat', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `pengirim`
--
ALTER TABLE `pengirim`
  ADD PRIMARY KEY (`id_pengirim`),
  ADD UNIQUE KEY `id_penerima` (`id_penerima`),
  ADD UNIQUE KEY `id_barang` (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_resi`),
  ADD UNIQUE KEY `id_pengirim` (`id_pengirim`),
  ADD UNIQUE KEY `id_penerima` (`id_penerima`),
  ADD UNIQUE KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pengirim`
--
ALTER TABLE `pengirim`
  MODIFY `id_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengirim`
--
ALTER TABLE `pengirim`
  ADD CONSTRAINT `pengirim_ibfk_1` FOREIGN KEY (`id_penerima`) REFERENCES `penerima` (`id_penerima`) ON DELETE CASCADE,
  ADD CONSTRAINT `pengirim_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengirim`) REFERENCES `pengirim` (`id_pengirim`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_penerima`) REFERENCES `penerima` (`id_penerima`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
