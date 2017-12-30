-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Des 2017 pada 15.35
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_turi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nama_sekolah` varchar(32) NOT NULL,
  `nama_panggilan` varchar(32) NOT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mulai` date NOT NULL,
  `lulus` date NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pekerjaan` varchar(32) NOT NULL,
  `organisasi` varchar(32) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `alamat_org` varchar(32) NOT NULL,
  `telp_org` varchar(16) NOT NULL,
  `foto` text,
  `password` text NOT NULL,
  `remember_token` text,
  `namaPanggilanVis` int(11) NOT NULL DEFAULT '1',
  `namaSekolahVis` int(11) NOT NULL DEFAULT '1',
  `tempatLahirVis` int(11) NOT NULL DEFAULT '1',
  `tanggalLahirVis` int(11) NOT NULL DEFAULT '1',
  `nisVis` int(11) NOT NULL DEFAULT '1',
  `angkatanVis` int(11) NOT NULL DEFAULT '1',
  `alamatVis` int(11) NOT NULL DEFAULT '1',
  `telpVis` int(11) NOT NULL DEFAULT '1',
  `emailVis` int(11) NOT NULL DEFAULT '1',
  `pekerjaanVis` int(11) NOT NULL DEFAULT '1',
  `organisasiVis` int(11) NOT NULL DEFAULT '1',
  `jabatanVis` int(11) NOT NULL DEFAULT '1',
  `alamatOrgVis` int(11) NOT NULL DEFAULT '1',
  `telpOrgVis` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `nis`, `nama`, `nama_sekolah`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `mulai`, `lulus`, `alamat`, `telp`, `email`, `pekerjaan`, `organisasi`, `jabatan`, `alamat_org`, `telp_org`, `foto`, `password`, `remember_token`, `namaPanggilanVis`, `namaSekolahVis`, `tempatLahirVis`, `tanggalLahirVis`, `nisVis`, `angkatanVis`, `alamatVis`, `telpVis`, `emailVis`, `pekerjaanVis`, `organisasiVis`, `jabatanVis`, `alamatOrgVis`, `telpOrgVis`, `status`) VALUES
(1, '15340100322', 'Muhammad Syafriansyah', 'Safri', 'Rian', 'Gresik', '2018-01-01', '2018-01-13', '2018-02-02', 'jl. h. abdul rochim 1/18 Gresik', '085730462830', 'safriansah@gmail.com', 'Mahasiswa', 'Pers', 'Mantan Calon Pimum', 'sayap barat giri loka', '09999992', '1534010032.png', '$2y$10$wEO5eYu2Wj1y8U8.eb/BXu03O1CZsH1vcMAJ0lgEH0oId/9s1Bp/m', 'F61yRpmnGEeny0xD6KvOzG376wrH8jolNbZm8fy2A8Smtla7Wi8vEYl9IvmL', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '1534010000', 'Robert Muhidin', 'Muhidin', 'Robert', 'Surabya', '2017-12-01', '2017-12-01', '2018-01-01', 'Jalan Raya Buntu no 0', '099998888888', 'rm@gmail.com', 'dosen', 'upn', 'wadek 4', 'jalan raya gunung anyar pokoke', '998777', '1534010000.jpg', '$2y$10$KKgOHoGYC2IHA86AVFxf4uoUBC.DFr99dtPsLRs12JggtsRH1JJI2', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(3, '12345678', 'deeper', 'deepre', 'deeper', 'sby', '2017-12-08', '2017-12-16', '2015-12-21', 'sdadasdas', '999999', 'x@gmail.com', 'popo', 'wwe', 'pegulat', 'london', '777', '12345678.png', '$2y$10$mVZvWrvrIj73r9xraOtXzuA9Mc32FG2F4Oi5T25lFshvj2pkCFrUC', 'u40i8ypVXiGByYRpMAh6eF5skfbIvBg5Q8uTUahgWU5uzVn6afkbM7BAuetr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(4, 'ff', 'ff', 'ff', 'ff', 'ff', '2017-11-29', '2017-11-30', '2017-12-04', 'ff', 'ff', 'ff@gmail.com', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff.png', '$2y$10$pLg5logyd/mtoG938RWI4uuDCB4F1TfCsjvpi8VO.SOOCGkvW3YVO', 'gu7t9Sb0k0vdLzDIxMC0VUmhGsfzs58i2cueMWRe9YSQkbqceAhZQylTc50Z', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(5, 'qq', 'qq', 'qq', 'qq', 'qq', '2017-12-12', '2017-12-14', '2017-12-19', 'qq', 'qq', 'qq@gmail.com', 'qq', 'qq', 'qq', 'qq', 'qq', 'qq.jpg', '$2y$10$yJVZiguJqnYVryPPmnU89OvNzPWRMcbnLTxh/72QiAurBqZPa.Mh2', 'SgBP2gxro5fQK3LXUrwkFRtmzykx5uDMfhAbVW8uREMV6Q8UyXVAZZZg2PkS', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(6, 'q', 'q', 'q', 'q', 'q', '2017-12-13', '2017-12-15', '2017-12-12', 'q', 'q', 'q@gmail.com', 'q', 'q', 'qq', 'q', 'q', '6.png', '$2y$10$lQkoqPKEochVSAMhkI3GseNhl2imSjSjFwiLZHYci8cRqbUtKw1y6', 'zAIMrCBenCiQQSBa75MYxd1sSh9aexD6I2v7OXOo3tFboUgSSugshCZDMF3j', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1),
(7, '1', 'q', 'q', 'q', 'q', '2017-12-08', '2017-12-08', '2017-12-13', '1', '1', '1@gmail.com', '1', '1', '1', '1', '1', '7.png', '$2y$10$HnWZXSIixVzI0bTNryjshuLSajNXZP1rcLFmmCY1Ygp04YVg8Hh2W', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `konten` text NOT NULL,
  `featured_image` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coba`
--

INSERT INTO `coba` (`id`, `nama`, `email`, `password`, `remember_token`) VALUES
(1, 'elche', 'el@gmail.com', '$2y$10$SPjzpLS69kJYZjQfzTeVxewgqEb7Qag3fUCUQ8tKXQg.B4Oqq/k96', ''),
(2, 'qwww', 'q@gmail.com', '$2y$10$ThD0fFdh.79UaSfWj.kiqus65Hs2K.Ve935tMxswGo7zzZo/Ott9O', 'PiTLbxw2eTw7X14ptb2gXnzAtRC3tJcln18Wau9945LdcjBGgcRhkGt1Ufhh'),
(3, 'w', 'w@gmail.com', '$2y$10$aBbYsTtQyYU4umUOKRWBuO0/Aky8EipTE/1.H5lVHJL2lGXMTvhxy', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
