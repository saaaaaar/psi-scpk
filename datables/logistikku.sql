-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jul 2018 pada 02.39
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistikku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id` int(10) NOT NULL,
  `nama_bantuan` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `id_donatur` int(10) NOT NULL,
  `kode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id`, `nama_bantuan`, `jumlah`, `id_donatur`, `kode`) VALUES
(1, 'Baju', 67, 1, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bencana`
--

CREATE TABLE `bencana` (
  `id_bencana` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis_bencana` varchar(11) NOT NULL,
  `tingkat_bencana` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` text NOT NULL,
  `batas_pengumpulan` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `laporan` varchar(100) DEFAULT NULL,
  `pembuat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `judul`, `jenis_bencana`, `tingkat_bencana`, `deskripsi`, `lokasi`, `batas_pengumpulan`, `gambar`, `laporan`, `pembuat`) VALUES
(1, 'Gempa Yogyakarta', 'Gempa Bumi', 'Berat', 'Gempa bumi berkekuatan 6,3 SR versi USGS atau 5,9 SR versi BMKG, terjadi tepat\r\npukul 5:05 WIB 10 tahun lalu. Ya, masih sangat lekat diingatan kita, khususnya\r\nmasyarakat Bantul, Yogya, dan sekitarnya yang terkena dampak gempa bumi tersebut.\r\nPascagempa kurang dari 24 jam, sudah tercatat kurang lebih 3.098 orang meninggal\r\ndunia. Sebanyak 2.971 jiwa adalah warga dari Kabupaten Bantul. Pada saat itu, tercatat\r\nada 3.824 bangunan yang rusak dan hancur, serta memutus semua jaringan komunikasi.', 'Yogyakarta', '2018-07-12', 'gempa1.png', 'Belum ada', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id`, `nama`, `no_hp`, `email`) VALUES
(1, 'Naning Dewi Lestari', '081227220xxx', 'sarikurnian403@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mendapatkan`
--

CREATE TABLE `mendapatkan` (
  `id_bencana` int(11) DEFAULT NULL,
  `id_bantuan` int(10) DEFAULT NULL,
  `status_pengiriman` tinyint(1) DEFAULT NULL,
  `status_penerimaan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mendapatkan`
--

INSERT INTO `mendapatkan` (`id_bencana`, `id_bantuan`, `status_pengiriman`, `status_penerimaan`) VALUES
(1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `no_identitas` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `kode_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `jabatan`, `no_identitas`, `password`, `status`, `kode_akses`) VALUES
(3, 'Sari Kurnia Ningrum', 'Kepala Tim Lapangan', '19690419-199404-2-002', '94a662b600cdb6f9d4ee92888a8555ad', 0, 0),
(7, 'Naila Nur Rachma', 'Petugas Lapangan', '20000419-202307-3-020', '3757a0648386c16059fcfdf5f43f9498', 0, 2),
(9, 'Sabika Amalina', 'Petugas Admininstrasi', '19971218-202107-3-013', '8e27f99c93d1370f3bd04575082696df', 0, 1),
(10, 'Fionna Saphira Farhani', 'Petugas Lapangan', '12345678-910111-2-131', '25d55ad283aa400af464c76d713c07ad', 0, 2),
(12, 'Puspita Dewi Cahyawardani', 'Petugas Lapangan', '19970527-202407-5-001', '0ad99fcbe4f17c578b0c8970958afb6a', 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posko`
--

CREATE TABLE `posko` (
  `kode` varchar(255) NOT NULL,
  `selamat` int(11) DEFAULT NULL,
  `luka` int(11) DEFAULT NULL,
  `meninggal` int(11) DEFAULT NULL,
  `cf` double DEFAULT NULL,
  `prioritas` varchar(255) DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_bencana` int(11) NOT NULL,
  `status_bantuan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donatur` (`id_donatur`);

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`),
  ADD KEY `id_pengguna` (`pembuat`),
  ADD KEY `jenis-bencana` (`jenis_bencana`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mendapatkan`
--
ALTER TABLE `mendapatkan`
  ADD KEY `id_informasi` (`id_bencana`),
  ADD KEY `id_bantuan` (`id_bantuan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posko`
--
ALTER TABLE `posko`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_bencana` (`id_bencana`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD CONSTRAINT `bantuan_ibfk_1` FOREIGN KEY (`id_donatur`) REFERENCES `donatur` (`id`);

--
-- Ketidakleluasaan untuk tabel `bencana`
--
ALTER TABLE `bencana`
  ADD CONSTRAINT `bencana_ibfk_1` FOREIGN KEY (`pembuat`) REFERENCES `pengguna` (`id`);

--
-- Ketidakleluasaan untuk tabel `mendapatkan`
--
ALTER TABLE `mendapatkan`
  ADD CONSTRAINT `mendapatkan_ibfk_2` FOREIGN KEY (`id_bencana`) REFERENCES `bencana` (`id_bencana`),
  ADD CONSTRAINT `mendapatkan_ibfk_3` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id`);

--
-- Ketidakleluasaan untuk tabel `posko`
--
ALTER TABLE `posko`
  ADD CONSTRAINT `posko_ibfk_1` FOREIGN KEY (`id_bencana`) REFERENCES `bencana` (`id_bencana`),
  ADD CONSTRAINT `posko_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `pengguna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
