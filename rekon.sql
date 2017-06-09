-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2016 at 05:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rekon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
`id_contact` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finance`
--

CREATE TABLE IF NOT EXISTS `tbl_finance` (
`id_finance` int(50) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nilai_kontrak` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL,
  `tgl_tagih` date NOT NULL,
  `jumlah_tagih` varchar(255) NOT NULL,
  `tglbayar` date NOT NULL,
  `nilai_byr` varchar(255) NOT NULL,
  `kurang_tgh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ipl`
--

CREATE TABLE IF NOT EXISTS `tbl_ipl` (
`id_ipl` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nama_subkon` varchar(255) NOT NULL,
  `nama_pemborong` varchar(255) NOT NULL,
  `jenis_pekerjaan` varchar(255) NOT NULL,
  `gmbpr` varchar(255) NOT NULL,
  `gmbpp` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kavling`
--

CREATE TABLE IF NOT EXISTS `tbl_kavling` (
`id_kavling` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nama_kavling` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kwitansi`
--

CREATE TABLE IF NOT EXISTS `tbl_kwitansi` (
`id_kwitansi` int(50) NOT NULL,
  `nama_owner` varchar(255) NOT NULL,
  `jumlah_tagih` varchar(255) NOT NULL,
  `rupiah` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `spk` varchar(255) NOT NULL,
  `jenis_pekerjaan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_memo`
--

CREATE TABLE IF NOT EXISTS `tbl_memo` (
`id_kategory` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `nama_kavling` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progres`
--

CREATE TABLE IF NOT EXISTS `tbl_progres` (
`id` int(50) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `kavling` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyek`
--

CREATE TABLE IF NOT EXISTS `tbl_proyek` (
`id_proyek` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `nama_owner` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_proyek`
--

INSERT INTO `tbl_proyek` (`id_proyek`, `nama_proyek`, `nama_owner`, `alamat`, `telp`, `hp`, `email`, `pic`, `create_date`) VALUES
(1, 'Membangun Otong', 'HUda', '', '', '', '', '', '2016-03-25 11:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE IF NOT EXISTS `tbl_register` (
`id_register` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `nilai_kontrak` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekapitulasi`
--

CREATE TABLE IF NOT EXISTS `tbl_rekapitulasi` (
`id_kategory` int(50) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nilai_kontrak` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL,
  `tgl_tagih` date NOT NULL,
  `nilai_tagih` varchar(255) NOT NULL,
  `tglbayar` date NOT NULL,
  `nilai_pembayaran` varchar(255) NOT NULL,
  `jumlah_tagih` varchar(255) NOT NULL,
  `jumlah_pembayaran` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resume`
--

CREATE TABLE IF NOT EXISTS `tbl_resume` (
`id` int(50) NOT NULL,
  `nama_pemborong` varchar(255) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nama_kavling` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `jumborong` varchar(255) NOT NULL,
  `minggulalu` varchar(255) NOT NULL,
  `mingguini` varchar(255) NOT NULL,
  `sdmingguini` varchar(255) NOT NULL,
  `sisa` varchar(255) NOT NULL,
  `tagihanlalu` varchar(255) NOT NULL,
  `tagihanini` varchar(255) NOT NULL,
  `tagihansisa` varchar(255) NOT NULL,
  `retensi` varchar(255) NOT NULL,
  `create_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sp`
--

CREATE TABLE IF NOT EXISTS `tbl_sp` (
`id_sp` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `nama_owner` varchar(255) NOT NULL,
  `jenis_pekerjaan` varchar(255) NOT NULL,
  `tanggalspk` date NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nilai_kontrak` varchar(255) NOT NULL,
  `tgl_tagih1` date NOT NULL,
  `dp` varchar(255) NOT NULL,
  `tgl_tagih2` date NOT NULL,
  `progres1` varchar(255) NOT NULL,
  `tgl_tagih3` date NOT NULL,
  `progres2` varchar(255) NOT NULL,
  `tgl_tagih4` date NOT NULL,
  `progres3` varchar(255) NOT NULL,
  `tgl_tagih5` date NOT NULL,
  `progres4` varchar(255) NOT NULL,
  `tgl_tagih6` date NOT NULL,
  `progres5` varchar(255) NOT NULL,
  `tgl_tagih7` date NOT NULL,
  `retensi` varchar(255) NOT NULL,
  `jumlah_tagih` varchar(255) NOT NULL,
  `sisa_tagih` varchar(255) NOT NULL,
  `presentase` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spk`
--

CREATE TABLE IF NOT EXISTS `tbl_spk` (
`id_spk` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `tgl_spk` date NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nilai_kontrak` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subkon`
--

CREATE TABLE IF NOT EXISTS `tbl_subkon` (
`id_proyek` int(50) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `nama_subkon` varchar(255) NOT NULL,
  `nama_pemborong` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `uraian_pekerjaan` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploadimage`
--

CREATE TABLE IF NOT EXISTS `tbl_uploadimage` (
`id` int(11) NOT NULL,
  `nm_gmbr` varchar(255) NOT NULL,
  `namaproyek` varchar(255) NOT NULL,
  `suratpk` varchar(255) NOT NULL,
  `kavling` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `hak_akses` enum('Administrator','User') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `userid`, `userpass`, `hak_akses`, `status`, `foto`, `create_date`) VALUES
(1, 'admin', 'admin', 'admin', 'Administrator', 'Aktif', '', '2016-01-28 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_finance`
--
ALTER TABLE `tbl_finance`
 ADD PRIMARY KEY (`id_finance`), ADD KEY `spk` (`spk`), ADD KEY `spk_2` (`spk`);

--
-- Indexes for table `tbl_ipl`
--
ALTER TABLE `tbl_ipl`
 ADD PRIMARY KEY (`id_ipl`), ADD KEY `spk` (`spk`), ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `tbl_kavling`
--
ALTER TABLE `tbl_kavling`
 ADD PRIMARY KEY (`id_kavling`), ADD UNIQUE KEY `nama_kavling` (`nama_kavling`), ADD KEY `spk` (`spk`), ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `tbl_kwitansi`
--
ALTER TABLE `tbl_kwitansi`
 ADD PRIMARY KEY (`id_kwitansi`), ADD KEY `spk` (`spk`);

--
-- Indexes for table `tbl_memo`
--
ALTER TABLE `tbl_memo`
 ADD PRIMARY KEY (`id_kategory`), ADD KEY `spk` (`spk`), ADD KEY `nama_proyek` (`nama_proyek`), ADD KEY `nama_kavling` (`nama_kavling`);

--
-- Indexes for table `tbl_progres`
--
ALTER TABLE `tbl_progres`
 ADD PRIMARY KEY (`id`), ADD KEY `spk` (`spk`), ADD KEY `spk_2` (`spk`), ADD KEY `progres` (`progres`), ADD KEY `kavling` (`kavling`);

--
-- Indexes for table `tbl_proyek`
--
ALTER TABLE `tbl_proyek`
 ADD PRIMARY KEY (`id_proyek`), ADD UNIQUE KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
 ADD PRIMARY KEY (`id_register`), ADD KEY `spk` (`spk`), ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `tbl_rekapitulasi`
--
ALTER TABLE `tbl_rekapitulasi`
 ADD PRIMARY KEY (`id_kategory`), ADD KEY `spk` (`spk`);

--
-- Indexes for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `sdmingguini` (`sdmingguini`), ADD KEY `spk` (`spk`), ADD KEY `nama_kavling` (`nama_kavling`);

--
-- Indexes for table `tbl_sp`
--
ALTER TABLE `tbl_sp`
 ADD PRIMARY KEY (`id_sp`), ADD KEY `spk` (`spk`), ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `tbl_spk`
--
ALTER TABLE `tbl_spk`
 ADD PRIMARY KEY (`id_spk`), ADD UNIQUE KEY `spk` (`spk`), ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `tbl_subkon`
--
ALTER TABLE `tbl_subkon`
 ADD PRIMARY KEY (`id_proyek`), ADD KEY `spk` (`spk`), ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `tbl_uploadimage`
--
ALTER TABLE `tbl_uploadimage`
 ADD PRIMARY KEY (`id`), ADD KEY `suratpk` (`suratpk`), ADD KEY `namaproyek` (`namaproyek`), ADD KEY `kavling` (`kavling`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `id_contact` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_finance`
--
ALTER TABLE `tbl_finance`
MODIFY `id_finance` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ipl`
--
ALTER TABLE `tbl_ipl`
MODIFY `id_ipl` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kavling`
--
ALTER TABLE `tbl_kavling`
MODIFY `id_kavling` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kwitansi`
--
ALTER TABLE `tbl_kwitansi`
MODIFY `id_kwitansi` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_memo`
--
ALTER TABLE `tbl_memo`
MODIFY `id_kategory` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_progres`
--
ALTER TABLE `tbl_progres`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_proyek`
--
ALTER TABLE `tbl_proyek`
MODIFY `id_proyek` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
MODIFY `id_register` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_rekapitulasi`
--
ALTER TABLE `tbl_rekapitulasi`
MODIFY `id_kategory` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sp`
--
ALTER TABLE `tbl_sp`
MODIFY `id_sp` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_spk`
--
ALTER TABLE `tbl_spk`
MODIFY `id_spk` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subkon`
--
ALTER TABLE `tbl_subkon`
MODIFY `id_proyek` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_uploadimage`
--
ALTER TABLE `tbl_uploadimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_finance`
--
ALTER TABLE `tbl_finance`
ADD CONSTRAINT `tbl_finance_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_ipl`
--
ALTER TABLE `tbl_ipl`
ADD CONSTRAINT `tbl_ipl_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_ipl_ibfk_2` FOREIGN KEY (`nama_proyek`) REFERENCES `tbl_spk` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kavling`
--
ALTER TABLE `tbl_kavling`
ADD CONSTRAINT `tbl_kavling_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_kavling_ibfk_2` FOREIGN KEY (`nama_proyek`) REFERENCES `tbl_spk` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kwitansi`
--
ALTER TABLE `tbl_kwitansi`
ADD CONSTRAINT `tbl_kwitansi_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_memo`
--
ALTER TABLE `tbl_memo`
ADD CONSTRAINT `tbl_memo_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_memo_ibfk_2` FOREIGN KEY (`nama_proyek`) REFERENCES `tbl_spk` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_progres`
--
ALTER TABLE `tbl_progres`
ADD CONSTRAINT `tbl_progres_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_progres_ibfk_2` FOREIGN KEY (`progres`) REFERENCES `tbl_resume` (`sdmingguini`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_progres_ibfk_3` FOREIGN KEY (`kavling`) REFERENCES `tbl_kavling` (`nama_kavling`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_register`
--
ALTER TABLE `tbl_register`
ADD CONSTRAINT `tbl_register_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_register_ibfk_2` FOREIGN KEY (`nama_proyek`) REFERENCES `tbl_spk` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rekapitulasi`
--
ALTER TABLE `tbl_rekapitulasi`
ADD CONSTRAINT `tbl_rekapitulasi_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
ADD CONSTRAINT `tbl_resume_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_resume_ibfk_2` FOREIGN KEY (`nama_kavling`) REFERENCES `tbl_kavling` (`nama_kavling`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sp`
--
ALTER TABLE `tbl_sp`
ADD CONSTRAINT `tbl_sp_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_sp_ibfk_2` FOREIGN KEY (`nama_proyek`) REFERENCES `tbl_spk` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_spk`
--
ALTER TABLE `tbl_spk`
ADD CONSTRAINT `tbl_spk_ibfk_1` FOREIGN KEY (`nama_proyek`) REFERENCES `tbl_proyek` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_subkon`
--
ALTER TABLE `tbl_subkon`
ADD CONSTRAINT `tbl_subkon_ibfk_1` FOREIGN KEY (`spk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_subkon_ibfk_2` FOREIGN KEY (`nama_proyek`) REFERENCES `tbl_spk` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_uploadimage`
--
ALTER TABLE `tbl_uploadimage`
ADD CONSTRAINT `tbl_uploadimage_ibfk_1` FOREIGN KEY (`suratpk`) REFERENCES `tbl_spk` (`spk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_uploadimage_ibfk_2` FOREIGN KEY (`namaproyek`) REFERENCES `tbl_spk` (`nama_proyek`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_uploadimage_ibfk_3` FOREIGN KEY (`kavling`) REFERENCES `tbl_kavling` (`nama_kavling`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
