-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 02:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(14, 'Pengguna Sistem', 'user', 'fa fa-id-badge', 0),
(15, 'Menu', 'menu', 'fa fa-list', 0),
(24, 'Data  Karyawan', 'karyawan', 'fa fa-briefcase', 0),
(25, 'Data Penggajian', 'gaji', 'fa fa-money', 0),
(26, 'Data Jabatan', 'jabatan', 'fa fa-qrcode', 0),
(27, 'Data Bonus', 'bonus', 'fa fa-id-card ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `kd_agama` int(2) NOT NULL,
  `nama_agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`kd_agama`, `nama_agama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN/ PROTESTAN'),
(3, 'KATHOLIK'),
(4, 'HINDU'),
(5, 'BUDHA'),
(6, 'KHONG HU CHU'),
(99, 'LAIN LAIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aturan_gaji`
--

CREATE TABLE `tbl_aturan_gaji` (
  `id_aturan_gaji` smallint(5) UNSIGNED NOT NULL,
  `jabatan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `masa_kerja` varchar(15) CHARACTER SET utf8 NOT NULL,
  `insentif` varchar(25) CHARACTER SET utf8 NOT NULL,
  `bonus` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aturan_gaji`
--

INSERT INTO `tbl_aturan_gaji` (`id_aturan_gaji`, `jabatan`, `masa_kerja`, `insentif`, `bonus`) VALUES
(1, 'Marketing', '1 Tahun', 'Rp.100.000', 'Rp.150.000'),
(3, 'Programmer', '6 Bulan', 'Rp.50.000', 'Rp.150.000'),
(4, 'Marketing', '3 Tahun', 'Rp.300.000', 'Rp.450.000'),
(7, 'General Manager', '6 Bulan', 'Rp.140.000', 'Rp.150.000'),
(9, 'QA Automation', '1 Tahun', 'Rp.140.000', 'Rp.100.000'),
(11, 'Admin Sales', '6 Bulan', 'Rp.50.000', 'Rp.100.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `kode_penggajian` int(5) UNSIGNED NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `nominal` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`kode_penggajian`, `NIP`, `nama`, `tanggal_penerimaan`, `nominal`) VALUES
(3, '', '2', '2020-02-29', '3'),
(4, '', '1', '2020-02-08', '4'),
(5, '', '4', '2020-03-08', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` smallint(5) UNSIGNED NOT NULL,
  `kode` varchar(20) CHARACTER SET utf8 NOT NULL,
  `jabatan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `standar_gaji` varchar(25) CHARACTER SET utf8 NOT NULL,
  `keterangan` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `kode`, `jabatan`, `standar_gaji`, `keterangan`) VALUES
(1, '01', 'Marketing', 'Rp.5.000.000', 'Gaji Untuk Marketing'),
(2, '02', 'Programmer', 'Rp.8.000.000', 'Gaji Untuk Programmer'),
(3, '03', 'Quality Assurance', 'Rp.4.000.000', 'Gaji Untuk QA Automations'),
(4, '04', 'Admin Sales', 'Rp.3.500.000', 'Gaji Untuk Admin Sales'),
(5, '05', 'General Manager', 'Rp.23.700.000', 'Gaji Untuk General Manager');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` smallint(5) UNSIGNED NOT NULL,
  `NIP` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8 NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `alamat` varchar(75) CHARACTER SET utf8 NOT NULL,
  `masa_kerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `NIP`, `nama`, `jenis_kelamin`, `tgl_lahir`, `telp`, `email`, `alamat`, `masa_kerja`) VALUES
(1, '010101', 'Manzola Caniago', 'L', '1997-06-13', '08586565044', 'manzolaexample@mail.com', 'Tangerang', '2019-01-11'),
(2, '020304', 'Tia Pangestika', 'P', '2016-02-01', '08216565044', 'tiaxample@mail.com', 'Jogjakarta', '2018-02-20'),
(3, '123321', 'Nagita Slavine', 'L', '2012-03-07', '08216567654', 'nagita@mail.com', 'Bali', '2019-03-01'),
(4, '543345', 'Adhi Soekamti', 'L', '2013-08-12', '0821656894', 'example@mail.com', 'Surabaya', '2019-02-22'),
(5, '987567', 'Bambang Adja', 'L', '2016-03-23', '0821356040', 'example@example.com', 'Pekalongan', '2020-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE `tbl_level_user` (
  `id_level_user` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'Programmer'),
(2, 'Karyawan'),
(3, 'General Manager');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `username`, `password`, `id_level_user`, `foto`) VALUES
(4, 'Manzola Caniago', 'manzola13', 'c33367701511b4f6020ec61ded352059', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rule`
--

CREATE TABLE `tbl_user_rule` (
  `id_rule` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_rule`
--

INSERT INTO `tbl_user_rule` (`id_rule`, `id_menu`, `id_level_user`) VALUES
(1, 16, 4),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 7, 1),
(8, 8, 1),
(9, 11, 1),
(10, 6, 1),
(11, 14, 1),
(12, 15, 1),
(13, 13, 1),
(14, 12, 1),
(15, 10, 1),
(16, 9, 1),
(17, 11, 3),
(19, 17, 3),
(20, 18, 3),
(21, 12, 3),
(23, 2, 3),
(24, 19, 1),
(25, 20, 3),
(26, 20, 1),
(27, 21, 1),
(28, 22, 1),
(29, 23, 1),
(30, 24, 1),
(31, 25, 1),
(32, 26, 1),
(33, 27, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_user`
-- (See below for the actual view)
--
CREATE TABLE `view_user` (
`id_user` int(11)
,`nama_lengkap` varchar(40)
,`username` varchar(30)
,`password` varchar(40)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `view_user`
--
DROP TABLE IF EXISTS `view_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user`  AS  select `tu`.`id_user` AS `id_user`,`tu`.`nama_lengkap` AS `nama_lengkap`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`id_level_user` AS `id_level_user`,`tu`.`foto` AS `foto`,`tlu`.`nama_level` AS `nama_level` from (`tbl_user` `tu` join `tbl_level_user` `tlu`) where (`tu`.`id_level_user` = `tlu`.`id_level_user`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indexes for table `tbl_aturan_gaji`
--
ALTER TABLE `tbl_aturan_gaji`
  ADD PRIMARY KEY (`id_aturan_gaji`);

--
-- Indexes for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`kode_penggajian`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_aturan_gaji`
--
ALTER TABLE `tbl_aturan_gaji`
  MODIFY `id_aturan_gaji` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `kode_penggajian` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
