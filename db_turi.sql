-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 02:42 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mulai` date NOT NULL,
  `lulus` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat_org` varchar(255) NOT NULL,
  `telp_org` varchar(255) NOT NULL,
  `foto` text,
  `password` text NOT NULL,
  `remember_token` text,
  `namaPanggilanVis` tinyint(1) NOT NULL DEFAULT '1',
  `namaSekolahVis` tinyint(1) NOT NULL DEFAULT '1',
  `tempatLahirVis` tinyint(1) NOT NULL DEFAULT '1',
  `tanggalLahirVis` tinyint(1) NOT NULL DEFAULT '1',
  `nisVis` tinyint(1) NOT NULL DEFAULT '1',
  `angkatanVis` tinyint(1) NOT NULL DEFAULT '1',
  `alamatVis` tinyint(1) NOT NULL DEFAULT '1',
  `telpVis` tinyint(1) NOT NULL DEFAULT '1',
  `emailVis` tinyint(1) NOT NULL DEFAULT '1',
  `pekerjaanVis` tinyint(1) NOT NULL DEFAULT '1',
  `organisasiVis` tinyint(1) NOT NULL DEFAULT '1',
  `jabatanVis` tinyint(1) NOT NULL DEFAULT '1',
  `alamatOrgVis` tinyint(1) NOT NULL DEFAULT '1',
  `telpOrgVis` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nis`, `nama`, `nama_sekolah`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `mulai`, `lulus`, `alamat`, `telp`, `email`, `pekerjaan`, `organisasi`, `jabatan`, `alamat_org`, `telp_org`, `foto`, `password`, `remember_token`, `namaPanggilanVis`, `namaSekolahVis`, `tempatLahirVis`, `tanggalLahirVis`, `nisVis`, `angkatanVis`, `alamatVis`, `telpVis`, `emailVis`, `pekerjaanVis`, `organisasiVis`, `jabatanVis`, `alamatOrgVis`, `telpOrgVis`, `status`) VALUES
(5, '1534', 'deeper', 'rifardi', 'rifardi', 'sur', '2018-01-01', '2018-01-02', '2018-01-03', 'ban', '098', 'qq@gmail.com', 'fron', 'dd', 'cof', 'dipo', 'fax', 'qq.jpg', '$2y$10$yJVZiguJqnYVryPPmnU89OvNzPWRMcbnLTxh/72QiAurBqZPa.Mh2', 'SgBP2gxro5fQK3LXUrwkFRtmzykx5uDMfhAbVW8uREMV6Q8UyXVAZZZg2PkS', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(10, '1534010032', 'Muhammad Syafriansyah', 'Safri', 'Rian', 'Gresik', '1997-04-03', '2012-07-01', '2015-06-30', 'jl. h. abdul 1/18 gresik', '085730462830', 'safriansah@gmail.com', 'mahasiswa', 'pers', 'mantan calon pimum', 'sayap barat giri loka', '0999', '10.jpg', '$2y$10$MGD6mKQuEFLa4/axrhn9L.zR9uMMl.ykRfVMmlNvYcmpkyuSE4Q0W', 'x5Bv2mDvAPzCpgEhr7tQiPX0E7ICQODQCso6EIHHQ3ujxMGvRiJe7SJCJ6N0', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `featured_image` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `konten`, `featured_image`, `created_at`) VALUES
(2, 1, 'suara mahasiswa', '<p>fad<br />\r\nTessca pradipta desain komunikasi visual 2014<br />\r\nsudah banyak yang diperbaiki, dulu struktur bangunan belum dikelola dengan baik sekarang lebih banyak perbaikan sehingga antusias mahasiswa lebih semangat untuk kuliah, namun terdapat ketidaksiapan mahasiswa dan lembaga dalam menghadapi kurikulum yang baru, semoga dapat terbangun komunikasi yang lebih baik antara lembaga dengan mahasiswa.<br />\r\n&nbsp;<br />\r\nfh<br />\r\nMuhammad zaky ilmu hukum 2014<br />\r\nsemakin tambah tahun semenjak kenegerian semakin baik dari segi fasilitas yang ada di kampus, fasilitas di bidang akademik, fasilitas umum seperti parkiran, sarana dan prasarana untuk mahasiswa lebih diperbaiki, semoga program2 yang sudah baik bisa ditingkatkan jangan sampai turun.<br />\r\n&nbsp;<br />\r\nfik<br />\r\nHerwantoro arya teknik informatika 2014<br />\r\nmasih perlu ditekankan mulai dari fasilitas sampai dari ranah mahasiswa, kurikulum bertambah serta ditingkatkan jadi mau tidak mau angkatan swasta harus mengikuti kurikulum negeri, fakultas2 baru memerlukan sumbangsi fasilitas yang lebih tinggi daripada fakultas lain, juga terjadi perubahan birokrasi, serta sempat terjadi perubahan peraturan seperti tidak boleh bonceng3, lepas helm saat pengambilan karcis, dan uts yang harus menggunakan hitamputih, semoga dari lembaga mendengarkan suara mahasiswa untuk perkembangan upn kedepannya.<br />\r\n&nbsp;<br />\r\nfisip<br />\r\nIzzati baril haq ilmu komunikasi 2014<br />\r\nterjadi perubahan sistem yang dibuat di fisip sama fasilitas, mahasiswa yang angkatan lama kurang merasakan perubahan di segi fasilitas karena perbaikan lebih kepada media, fasilitas jalan mulai diperbaiki, parkir lebih terarah uda ada satpam dimana2, kemudian juga ada peraturan hitamputih saat ujian, serta ada isu yang katanya harus 4 tahun untuk lulus, hal tersebut harus disosialisasikan supaya informasinya tidak bimbang, semoga prestasinya dikenal lebih luas lagi.<br />\r\n&nbsp;<br />\r\nfp<br />\r\nLaras fitriani agribisnis 2014<br />\r\nperubahan fasilitas keliatan dengan adanya maskot jendral sudirman, gedung2 serta kamar mandi dari tiap fakultas lebih baik, akademik yang ditingkatkan, untuk dapat nilai a lebih sulit, lebih condong ke angkatan baru, penilaian dosen ke mahasiswa berbeda, tetep belum ada solusi untuk dosen yang tidak masuk kuliah, perubahan pjk, lebih susah untuk meminta dana ke lembaga, semoga lebih memfasilitasi mahasiswa yang ingin berprestasi dipermudah intinya, semoga upn memiliki sepemikiran untuk membangun bersama.<br />\r\n&nbsp;<br />\r\nft<br />\r\nKhoirul imam nasihin teknologi pangan 2014<br />\r\nadanya perbaikan sarana prasarana perbaikan cat, alhamdulillah sekarang ada wifi dan semua kebijakan sudah terstruktur dan terorganisir, kurikulum sudah diperbaiki, akreditasi dinaikkan, sudah disoroti sebagai kampus belanegara,&nbsp; kemudian penyeragaman yang membuat mahasiswa menjadi kaget, tidak adanya remidi dan semester pendek, semoga lebih perbaiki sistem secara birokrasi seperti tataletak gedung, semoga upn menjadi percontohan kampus lain sebagai kampus bela negara.<br />\r\n&nbsp;<br />\r\nfeb<br />\r\nDaflina octiara putri akuntansi 2014<br />\r\ndari segi fasilitas wifi yang dulu tidak ada sekarang sudah ada, beluma ada perubahan dari segi akademik seperti dosen yang jarang masuk, krs yang sangat susah untuk diurus, disarankan memakai pakaian hitamputih saat ujian, fasilitas yang kurang dengan bayar spp yang mahal, dosen dan staff2 yang kurang memperhatikan mahasiswa, perpustakaan fakultas yang jarang dibuka sehingga mahasiswa harus pergi ke perpustakaan pusat, semoga upn menjadi semakin baik tanpa ada yang ruwet2 lagi.</p>', '2.png', '2018-01-04 13:35:52'),
(3, 2, 'fad', '<p>Tessca pradipta desain komunikasi visual 2014<br />\r\nsudah banyak yang diperbaiki, dulu struktur bangunan belum dikelola dengan baik sekarang lebih banyak perbaikan sehingga antusias mahasiswa lebih semangat untuk kuliah, namun terdapat ketidaksiapan mahasiswa dan lembaga dalam menghadapi kurikulum yang baru, semoga dapat terbangun komunikasi yang lebih baik antara lembaga dengan mahasiswa.</p>', '3.jpg', '2018-01-04 14:44:59'),
(4, 2, 'fh', '<p>Muhammad zaky ilmu hukum 2014<br />\r\nsemakin tambah tahun semenjak kenegerian semakin baik dari segi fasilitas yang ada di kampus, fasilitas di bidang akademik, fasilitas umum seperti parkiran, sarana dan prasarana untuk mahasiswa lebih diperbaiki, semoga program2 yang sudah baik bisa ditingkatkan jangan sampai turun.</p>', '4.png', '2018-01-04 14:45:23'),
(5, 2, 'fik', '<p>Herwantoro arya teknik informatika 2014<br />\r\nmasih perlu ditekankan mulai dari fasilitas sampai dari ranah mahasiswa, kurikulum bertambah serta ditingkatkan jadi mau tidak mau angkatan swasta harus mengikuti kurikulum negeri, fakultas2 baru memerlukan sumbangsi fasilitas yang lebih tinggi daripada fakultas lain, juga terjadi perubahan birokrasi, serta sempat terjadi perubahan peraturan seperti tidak boleh bonceng3, lepas helm saat pengambilan karcis, dan uts yang harus menggunakan hitamputih, semoga dari lembaga mendengarkan suara mahasiswa untuk perkembangan upn kedepannya.</p>', '5.png', '2018-01-04 14:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id`, `nama`, `email`, `password`, `remember_token`) VALUES
(1, 'elche', 'el@gmail.com', '$2y$10$SPjzpLS69kJYZjQfzTeVxewgqEb7Qag3fUCUQ8tKXQg.B4Oqq/k96', ''),
(2, 'qwww', 'q@gmail.com', '$2y$10$ThD0fFdh.79UaSfWj.kiqus65Hs2K.Ve935tMxswGo7zzZo/Ott9O', 'PiTLbxw2eTw7X14ptb2gXnzAtRC3tJcln18Wau9945LdcjBGgcRhkGt1Ufhh'),
(3, 'w', 'w@gmail.com', '$2y$10$aBbYsTtQyYU4umUOKRWBuO0/Aky8EipTE/1.H5lVHJL2lGXMTvhxy', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `keterangan`) VALUES
(1, 'Berita Panas', 'Berita Yang Panas'),
(2, 'Berita Dingin', 'Berita Yang Dingin');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_adm`
--

CREATE TABLE `user_adm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `remember_token` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_adm`
--

INSERT INTO `user_adm` (`id`, `nama`, `email`, `password`, `foto`, `remember_token`) VALUES
(1, 'Elche', 'elche@gmail.com', '9694d250fe99d47fe08fc63f519623a7', '1.jpg', NULL),
(2, 'Muhammad Syafriansyah', 'safriansah@gmail.com', '$2y$10$cIRldctZhCkLxeQMKZoZW.rQHAKLp89IYekvG41P0rLQhkKRHqU5C', '2.jpg', '11HB5ycWJMbbRT7RvV7jDC6Skw4cgLt0G11bnxkSUcY8JKs0Kx4iN3S8VSp6');

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `user_adm`
--
ALTER TABLE `user_adm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_adm`
--
ALTER TABLE `user_adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
