-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Feb 2023 pada 07.16
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk3_team_5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `IdBarang` int(11) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Satuan` int(11) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `IdPengguna`) VALUES
(4, 'indomie22', 'indomie', 2, NULL),
(5, 'indomie', 'indomie', 20, NULL),
(6, 'makasar', 'makasar', 20, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakakses`
--

CREATE TABLE `hakakses` (
  `IdAkses` int(11) NOT NULL,
  `NamaAkses` varchar(255) NOT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hakakses`
--

INSERT INTO `hakakses` (`IdAkses`, `NamaAkses`, `Keterangan`) VALUES
(1, 'Admin_Master', 'Admin Master'),
(2, 'Admin_Normal', 'Admin Normal'),
(3, 'Admin_Basic', 'Admin Basic'),
(4, 'Penjual_Master', 'Penjual Master'),
(5, 'Penjual_Normal', 'Penjual Normal'),
(6, 'Penjual_Basic', 'Penjual Basic'),
(7, 'Pembeli_Master', 'Pembeli Master'),
(8, 'Pembeli_Normal', 'Pembeli Normal'),
(9, 'Pembeli_Basic', 'Pembeli Basic'),
(10, 'Admin_Barang', 'Admin Barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IdPelanggan` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `NoTelp` varchar(255) NOT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`IdPelanggan`, `NamaPelanggan`, `NoTelp`, `IdPengguna`) VALUES
(1, 'Mulzahrian', '555', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `IdPembelian` int(11) NOT NULL,
  `JumlahPembelian` int(11) DEFAULT NULL,
  `HargaBeli` int(11) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`IdPembelian`, `JumlahPembelian`, `HargaBeli`, `IdPengguna`) VALUES
(1, 1, 200, 4),
(2, 2, 300, 4),
(3, 3, 300, 4),
(4, 4, 400, 4),
(5, 5, 500, 4),
(6, 6, 600, 4),
(7, 7, 700, 4),
(8, 8, 800, 4),
(9, 9, 900, 4),
(10, 10, 1000, 4),
(11, 11, 110, 5),
(12, 12, 120, 5),
(13, 13, 130, 5),
(14, 14, 140, 5),
(15, 15, 150, 5),
(16, 16, 160, 5),
(17, 17, 170, 5),
(18, 18, 180, 5),
(19, 19, 190, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `IdPengguna` int(11) NOT NULL,
  `NamaPengguna` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `NamaDepan` varchar(255) NOT NULL,
  `NamaBelakang` varchar(255) NOT NULL,
  `NoHp` int(11) DEFAULT NULL,
  `Alamat` text,
  `IdAkses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`IdPengguna`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHp`, `Alamat`, `IdAkses`) VALUES
(1, 'Mulzahrian', 'test123', 'Mulzahrian', 'One', 85265711, 'Jakarta Pusat', 1),
(2, 'Molina Azlova', 'test123', 'Molina', 'Azlova', 85265712, 'Jakarta Pusat', 2),
(3, 'Lisa Triana', 'test123', 'Lisa', 'Triana', 85265713, 'Jakarta Pusat', 3),
(4, 'Khoirunisa', 'test123', 'Khoirunisa', 'Nisa', 85265714, 'Jakarta Pusat', 4),
(5, 'Godingo', 'test123', 'Godingo', 'Gryswera', 85265715, 'Jakarta Pusat', 5),
(6, 'Lenggo', 'test123', 'Lenggo', 'aja', 85265716, 'Jakarta Pusat', 6),
(7, 'Marza Riandi', 'test123', 'Marza', 'Riandi', 85265717, 'Jakarta Pusat', 7),
(8, 'Fauza Berlan Deza', 'test123', 'Fauza', 'Berlandeza', 85265718, 'Jakarta Pusat', 8),
(9, 'Rofif Syahputra', 'test123', 'Rofif', 'Syahputra', 85265719, 'Jakarta Pusat', 9),
(10, 'Rohid Syahputra', 'test123', 'Rohif', 'Syahputra', 85265710, 'Jakarta Pusat', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `IdPenjualan` int(11) NOT NULL,
  `JumlahPenjualan` int(11) DEFAULT NULL,
  `HargaJual` int(11) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`IdPenjualan`, `JumlahPenjualan`, `HargaJual`, `IdPengguna`) VALUES
(1, 1, 2000, 4),
(2, 2, 3000, 4),
(3, 3, 4000, 4),
(4, 4, 5000, 4),
(5, 5, 6000, 4),
(6, 6, 7000, 4),
(7, 7, 9000, 4),
(8, 8, 10000, 4),
(9, 9, 11000, 4),
(10, 10, 11000, 4),
(11, 11, 1200, 5),
(12, 12, 1300, 5),
(13, 13, 1400, 5),
(14, 14, 1500, 5),
(15, 15, 1600, 5),
(16, 16, 1700, 5),
(17, 17, 1800, 5),
(18, 18, 1900, 5),
(19, 19, 2000, 5),
(20, 20, 2100, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `IdSuplier` int(11) NOT NULL,
  `NamaSuplier` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `IdPengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`IdSuplier`, `NamaSuplier`, `Alamat`, `IdPengguna`) VALUES
(1, 'test', 'test', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `hakakses`
--
ALTER TABLE `hakakses`
  ADD PRIMARY KEY (`IdAkses`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IdPelanggan`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`IdPembelian`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`),
  ADD KEY `IdAkses` (`IdAkses`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`IdPenjualan`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`IdSuplier`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `IdBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `IdPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `IdPembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `IdPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `IdSuplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IdAkses`) REFERENCES `hakakses` (`IdAkses`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Ketidakleluasaan untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD CONSTRAINT `suplier_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
