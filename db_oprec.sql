-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 05:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_oprec`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` int(2) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `token` varchar(8) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `npm` varchar(8) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `semester` int(2) NOT NULL,
  `ipk` varchar(4) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_jk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `token` varchar(8) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `token` varchar(8) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `nama_file` varchar(100) DEFAULT NULL,
  `ukuran_file` double DEFAULT NULL,
  `tipe_file` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_kelamin`
--

CREATE TABLE `tbl_jenis_kelamin` (
  `id_jk` int(11) NOT NULL,
  `jk` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_kelamin`
--

INSERT INTO `tbl_jenis_kelamin` (`id_jk`, `jk`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `token` varchar(8) NOT NULL,
  `umum_ti` int(3) DEFAULT 0,
  `teori_java` int(3) DEFAULT 0,
  `java` int(3) DEFAULT 0,
  `teori_delphi` int(3) DEFAULT 0,
  `delphi` int(3) DEFAULT 0,
  `teori_vb` int(3) DEFAULT 0,
  `vb` int(3) DEFAULT 0,
  `teori_python` int(3) DEFAULT 0,
  `python` int(3) DEFAULT 0,
  `teori_c` int(3) DEFAULT 0,
  `c` int(3) DEFAULT 0,
  `teori_networking` int(3) DEFAULT 0,
  `networking` int(3) DEFAULT 0,
  `teori_blender` int(3) DEFAULT 0,
  `blender` int(3) DEFAULT 0,
  `teori_sbd_mysql` int(3) DEFAULT 0,
  `sbd_mysql` int(3) DEFAULT 0,
  `teori_php_ci` int(3) DEFAULT 0,
  `php_ci` int(3) DEFAULT 0,
  `rata_teori` int(4) DEFAULT 0,
  `rata_praktik` int(4) DEFAULT 0,
  `rata_total` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE `tbl_region` (
  `id_region` int(11) NOT NULL,
  `region` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_region`
--

INSERT INTO `tbl_region` (`id_region`, `region`) VALUES
(1, 'Depok'),
(2, 'Kalimalang'),
(3, 'Cengkareng'),
(4, 'Karawaci');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`token`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_jk` (`id_jk`),
  ADD KEY `npm` (`npm`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`token`),
  ADD KEY `npm` (`npm`) USING BTREE;

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`token`);

--
-- Indexes for table `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`token`);

--
-- Indexes for table `tbl_region`
--
ALTER TABLE `tbl_region`
  ADD PRIMARY KEY (`id_region`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_akun` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_region`
--
ALTER TABLE `tbl_region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD CONSTRAINT `tbl_biodata_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `tbl_region` (`id_region`),
  ADD CONSTRAINT `tbl_biodata_ibfk_2` FOREIGN KEY (`id_jk`) REFERENCES `tbl_jenis_kelamin` (`id_jk`);

--
-- Constraints for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD CONSTRAINT `tbl_dokumen_ibfk_1` FOREIGN KEY (`token`) REFERENCES `tbl_biodata` (`token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD CONSTRAINT `tbl_foto_ibfk_1` FOREIGN KEY (`token`) REFERENCES `tbl_biodata` (`token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`token`) REFERENCES `tbl_biodata` (`token`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
