-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 02:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username_admin` varchar(11) NOT NULL,
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username_admin`, `password_admin`) VALUES
('caca', 'cd799045c409249dcfce575f83e4102b'),
('may', 'e3a8589d2558d41d4fce6f6e33f51e26'),
('salsa', '16130029e46c2b7557bef0e039402814');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` text NOT NULL,
  `nama_umkm` varchar(100) NOT NULL,
  `alamat_umkm` text NOT NULL,
  `email_anggota` varchar(30) NOT NULL,
  `username_anggota` varchar(30) NOT NULL,
  `password_anggota` varchar(50) NOT NULL,
  `telepon_anggota` varchar(30) NOT NULL,
  `nip_anggota` varchar(30) NOT NULL,
  `no_izin_umkm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nama_anggota`, `nama_umkm`, `alamat_umkm`, `email_anggota`, `username_anggota`, `password_anggota`, `telepon_anggota`, `nip_anggota`, `no_izin_umkm`) VALUES
(2, 'Mawar', 'Batik Print', 'Kaliwungu - Jombang', 'ex@gmail.com', 'mawar', '981adfdfdb3d8b2824b64870a04e1094', '085678765436', '357534234324', '111223435666'),
(3, 'Melati', 'Kain Songket', 'Peterongan - Jombang', 'mel@gmail.com', 'melati', '35753b71221383a69f12fd1be2f6fa93', '085678644678', '357834425245', '112234356885');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_admin`
--

CREATE TABLE `tbl_artikel_admin` (
  `id_artikel_admin` int(11) NOT NULL,
  `username_admin` varchar(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `gambar_artikel` text NOT NULL,
  `caption_gambar_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal_artikel` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel_admin`
--

INSERT INTO `tbl_artikel_admin` (`id_artikel_admin`, `username_admin`, `judul_artikel`, `gambar_artikel`, `caption_gambar_artikel`, `isi_artikel`, `tanggal_artikel`) VALUES
(3, 'caca', 'Finibus Bonorum', 'Finibus.png', 'Written by Cicero in 45 BC', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', '2021-10-27 00:11:13'),
(4, 'caca', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium ', 'doloremque.png', 'Laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis', 'et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', '2021-10-27 00:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_anggota`
--

CREATE TABLE `tbl_artikel_anggota` (
  `id_artikel_anggota` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `gambar_artikel` text NOT NULL,
  `caption_gambar_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal_artikel` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel_anggota`
--

INSERT INTO `tbl_artikel_anggota` (`id_artikel_anggota`, `id_anggota`, `judul_artikel`, `gambar_artikel`, `caption_gambar_artikel`, `isi_artikel`, `tanggal_artikel`) VALUES
(2, 2, 'At accusamus', 'accusamus.png', 'At vero eos accusamus', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.', '2021-10-27 01:00:18'),
(3, 2, 'Pellentesque sodales', 'sodales.jpg', 'Pellentesque sodales ullamcorper facilisis.', 'Pellentesque sodales ullamcorper facilisis. Etiam tortor quam, mattis vestibulum mattis eu, faucibus vitae diam. Nam hendrerit ante quis magna egestas pellentesque. Vestibulum mattis nunc ut nisi fringilla, eget efficitur justo elementum. Pellentesque a interdum urna, eget venenatis nunc. Sed et velit neque. Mauris ligula lectus, hendrerit vel ullamcorper vel, tincidunt ut quam.', '2021-10-27 01:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `username_anggota` varchar(30) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `username_anggota` (`username_anggota`);

--
-- Indexes for table `tbl_artikel_admin`
--
ALTER TABLE `tbl_artikel_admin`
  ADD PRIMARY KEY (`id_artikel_admin`),
  ADD KEY `username_admin` (`username_admin`);

--
-- Indexes for table `tbl_artikel_anggota`
--
ALTER TABLE `tbl_artikel_anggota`
  ADD PRIMARY KEY (`id_artikel_anggota`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `tbl_komentar_ibfk_1` (`username_anggota`),
  ADD KEY `tbl_komentar_ibfk_2` (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_artikel_admin`
--
ALTER TABLE `tbl_artikel_admin`
  MODIFY `id_artikel_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_artikel_anggota`
--
ALTER TABLE `tbl_artikel_anggota`
  MODIFY `id_artikel_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_artikel_admin`
--
ALTER TABLE `tbl_artikel_admin`
  ADD CONSTRAINT `tbl_artikel_admin_ibfk_1` FOREIGN KEY (`username_admin`) REFERENCES `tbl_admin` (`username_admin`);

--
-- Constraints for table `tbl_artikel_anggota`
--
ALTER TABLE `tbl_artikel_anggota`
  ADD CONSTRAINT `tbl_artikel_anggota_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tbl_anggota` (`id_anggota`);

--
-- Constraints for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD CONSTRAINT `tbl_komentar_ibfk_1` FOREIGN KEY (`username_anggota`) REFERENCES `tbl_anggota` (`username_anggota`),
  ADD CONSTRAINT `tbl_komentar_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `tbl_artikel_admin` (`id_artikel_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
