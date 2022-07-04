-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2020 pada 13.30
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencarian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jabatan`, `username`, `password`) VALUES
(0, 'Belum Validasi', '-', '-', '-'),
(1, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Ongky 2', 'Humas', 'humas', 'b182ff84acb590050e63c5c4b528c284');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_hilang`
--

CREATE TABLE `orang_hilang` (
  `id_orang_hilang` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `badan` varchar(20) NOT NULL,
  `warna_rambut` varchar(30) NOT NULL,
  `jenis_rambut` varchar(30) NOT NULL,
  `gigi` varchar(30) NOT NULL,
  `khusus` text NOT NULL,
  `kronologi` text NOT NULL,
  `status` int(1) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orang_hilang`
--

INSERT INTO `orang_hilang` (`id_orang_hilang`, `no_surat`, `tanggal`, `id_admin`, `id_user`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `pekerjaan`, `agama`, `alamat`, `telp`, `tinggi`, `badan`, `warna_rambut`, `jenis_rambut`, `gigi`, `khusus`, `kronologi`, `status`, `foto`, `kk`) VALUES
(1, '001/Tra/Polri/XV/2020', '2020-10-02', 1, 1, 'tes', 'tes', '1996-10-02', 'Laki-Laki', 'tes', 'Islam', 'tes', '0812345', 170, 'Kurus', 'Hitam', 'Lurus, Pendek', 'Putih, Rapi', 'Ada tato di leher warna merah', 'hilang pada hari minggu', 2, 'user.png', 'user.png'),
(2, '002/LP-OH/III/2020/SPKT', '2020-10-04', 1, 2, 'Herdiansyah', 'Balikpapan', '1996-10-04', 'Laki-Laki', 'Mahasiswa', 'Islam', 'Jl. Padat Karya Gg H. Padoma, Kutai Barat', '0812457684', 174, 'Gemuk', 'Hitam', 'Kriting', 'Tidak Rata', 'Memiliki tato kupu-kupu di kaki', 'hilang pada saat berangkat ke sawah pada hari minggu pukul 10.00', 2, '04102020132531circle-cropped (42).png', '04102020132531Big-data-profesionales.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jk`, `alamat`, `no_telp`, `email`, `username`, `password`, `status`) VALUES
(1, '64713289401012', 'ardi', '1996-09-29', 'Kutai Barat', 'Laki-Laki', 'Jl. Mana ajaa', '08123456789', 'aardi.haryanto@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1),
(2, '6472032005960004', 'Dana Rahadi', '1996-10-04', 'Kutai Barat', 'Laki-Laki', 'Jl. Padat Karya Gg H. Padoma, Kutai Barat', '08123456789', 'danarahadi@gmail.com', 'dana', '6aef614bdd15d4e876c6f118418bf525', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `orang_hilang`
--
ALTER TABLE `orang_hilang`
  ADD PRIMARY KEY (`id_orang_hilang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `orang_hilang`
--
ALTER TABLE `orang_hilang`
  MODIFY `id_orang_hilang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
