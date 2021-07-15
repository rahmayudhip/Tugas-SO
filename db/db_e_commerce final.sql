-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 05:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_jenis_barang` varchar(15) NOT NULL,
  `harga` double(12,2) NOT NULL,
  `rating` double(5,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `stok` int(5) NOT NULL,
  `terjual` int(5) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `kode_jenis_barang`, `harga`, `rating`, `foto`, `stok`, `terjual`, `keterangan`) VALUES
(1, 'Drawing Pen', 'AG1', 7000.00, 5.00, 'images/Gambar/drawingpen.jpg', 46, 28, 'Drawing pen terbaik dari snowman, terdiri ukuran ketebalan pulpen mulai dari 0.1 - 0.9'),
(3, 'Kertas Sidu A4', 'KE2', 40000.00, 0.00, 'images/Gambar/sidua4.jpg', 0, 8, 'Jenis Barang : Kertas HVS <br>\r\nMerk : Sinar Dunia<br>\r\nUkuran : A4<br>\r\nGramatur : 70 Gram<br>\r\n1 pak isi 500 lembar<br>\r\n<br>'),
(5, 'Kertas Sidu F4', 'KE2', 45000.00, 0.00, 'images/gambar/siduf4.jpg', 85, 15, 'Jenis Barang : Kertas HVS <br>\r\nMerk : Sinar Dunia<br>\r\nUkuran : F4<br>\r\nGramatur : 70 Gram<br>\r\n1 pak isi 500 lembar<br>\r\n<br>'),
(6, 'Kertas Paper One A4', 'KE2', 42000.00, 0.00, 'images/gambar/paperonea4.png', 16, 6, 'Jenis Barang : Kertas HVS <br>\r\nMerk : Paper One<br>\r\nUkuran : A4<br>\r\nGramatur : 70 Gram<br>\r\n1 pak isi 500 lembar<br>\r\n<br>'),
(7, 'Folio Bergaris', 'KE2', 22000.00, 0.00, 'images/gambar/foliobergaris.jpg', 4, 8, '1 Pack isi 100 Lembar<br>\r\nMerk: Sinar Dunia<br>\r\nGramatur: 70 gram<br>\r\nUkuran Kertas: 32 x 42 cm.<br>\r\n<br><br>'),
(49, 'Gunting Kertas', 'AP3', 15000.00, 0.00, 'images/gambar/gunting.jpg', 49, 1, 'Jenis Barang : Gunting<br />\r\nMerk : Joyko<br />\r\nUkuran : 210 x 80 mm<br />\r\n Gramatur : 100 Gram<br />\r\n 1 buah'),
(50, 'Gunting Zigzag/Gerigi', 'AP3', 10000.00, 0.00, 'images/gambar/zigzag.jpg', 44, 6, 'Jenis Barang : Gunting<br />\r\nMerk : Joyko<br />\r\nUkuran : 155 x 62 mm<br />\r\n Gramatur : 100 Gram<br />\r\n 1 buah'),
(51, 'Cutter Kecil CU-503', 'AP3', 4900.00, 0.00, 'images/gambar/cutter1.jpeg', 50, 0, 'Jenis Barang : Cutter<br />\r\n Merk : Joyko<br />\r\n Ukuran : 175 x 12 mm<br />\r\n Gramatur : 28 Gram<br />\r\n 1 buah<br />'),
(52, 'Isi Cutter Kecil', 'AP3', 5000.00, 0.00, 'images/gambar/isiCutter.jpeg', 44, 6, 'Merk: Deli<br />\r\n Gramatur: 30 gram<br />\r\n Ukuran Kertas: 13 x 1 cm<br />\r\n 1 Pack isi 5 buah'),
(53, 'Pencil 9000B', 'AG1', 90000.00, 0.00, 'images/gambar/pencil9000.jpg', 48, 2, 'Jenis Barang : Pensil<br />\r\nMerk : Faber-Castell<br />\r\nUkuran : 9000<br />\r\nSize HB - 8B<br />\r\n1 pak isi 8 buah'),
(54, 'Drawing Pen UniPin', 'AG1', 6600.00, 0.00, 'images/gambar/drawingpen.jpg', 49, 1, 'Jenis Barang : Drawing Pen<br />\r\nMerk : UniPin<br />\r\n Ukuran : 0.1mm - 0.5mm'),
(55, 'Charcoal Pencil', 'AG1', 40000.00, 0.00, 'images/gambar/cpencil.jpg', 49, 1, 'Jenis Barang : Pensil<br />\r\n Merk : Drewnet<br />\r\n Ukuran : Medium<br />\r\n1 pak isi 5 buah'),
(56, 'Mechanical Pencil', 'AG1', 42500.00, 0.00, 'images/gambar/mcpencil.jpg', 50, 0, 'Jenis Barang : Pensil Mekanik<br />\r\n Merk : BIC<br />\r\nUkuran : 0.7mm<br />\r\n1 pak isi 6 buah'),
(57, 'Cat acrylic', 'AG1', 12500.00, 0.00, 'images/gambar/acrylic.jpg', 49, 1, 'Jenis Barang : Cat<br />\r\nMerk : Maries<br />\r\nUkuran : 50ml<br />\r\nWarna : Mix'),
(58, 'Cat Poster', 'AG1', 79000.00, 0.00, 'images/gambar/catposter.jpg', 50, 0, 'Jenis Barang : Cat<br />\r\nMerk : Koi<br />\r\nUkuran : 30ml<br />\r\nWarna : Mix<br />\r\njumlah : 12 buah/pak'),
(59, 'Cat Minyak', 'AG1', 124000.00, 0.00, 'images/gambar/minyak.jpg', 50, 0, 'Jenis Barang : Cat<br />\r\nMerk : Maries<br />\r\nUkuran : 10ml<br />\r\nWarna : Mix<br />\r\njumlah : 12 buah/pak'),
(60, 'Palet cat', 'AG1', 66000.00, 0.00, 'images/gambar/wpalette.jpg', 50, 0, 'Jenis Barang : Palet<br />\r\nMerk : Kiky<br />\r\nUkuran : 20cm<br />\r\n Warna : Coklat<br />\r\nBahan : OakWood'),
(61, 'Kuas Besar', 'AG1', 4500.00, 0.00, 'images/gambar/kuascat.jpg', 50, 0, 'Jenis Barang : Kuas<br />\r\nMerk : SKT<br />\r\nUkuran : 1 Inch-7Inch<br />\r\nTipe : Flat'),
(62, 'Kuas Lukis', 'AG1', 14500.00, 0.00, 'images/gambar/kuaslukis.jpg', 49, 1, 'Jenis Barang : Kuas<br />\r\nMerk : Joyko<br />\r\nUkuran : 2-12<br />\r\nTipe : Rounded Brush'),
(63, 'Penggaris Besi', 'AG1', 14000.00, 0.00, 'images/gambar/penggarisbesi.jpg', 50, 0, 'Jenis Barang : Penggaris<br />\r\nMerk : Joyko<br />\r\nUkuran : 25 Inch<br />\r\nWarna : Silver'),
(64, 'Penggaris Segitiga', 'AG1', 31000.00, 0.00, 'images/gambar/penggarissegitiga.jpg', 50, 0, 'Jenis Barang : Penggaris<br />\r\n Merk : Kenko<br />\r\nUkuran : 7 Inch<br />\r\nWarna : Hitam<br />\r\nBahan : Pelastik'),
(65, 'Color Pencil', 'AG1', 224500.00, 0.00, 'images/gambar/pensilwarna.jpg', 50, 0, 'Jenis Barang : Pensil<br />\r\nMerk : Faber-Castell<br />\r\nUkuran : 1 set<br />\r\nTipe : Pollychromos 120'),
(66, 'Pen Brush', 'AG1', 54000.00, 0.00, 'images/gambar/brushp.jpg', 50, 0, 'Jenis Barang : Kuas Pulpen<br />\r\nMerk : TiTi<br />\r\nUkuran : 2<br />\r\nTipe : Rounded Brush'),
(67, 'WaterColor', 'AG1', 74000.00, 0.00, 'images/gambar/koi.jpg', 50, 0, 'Jenis Barang : Cat Air<br />\r\nMerk : Koi<br />\r\nUkuran : 9gr<br />\r\nWarna : Mix'),
(68, 'Crayon', 'AG1', 71000.00, 0.00, 'images/gambar/crayon.jpg', 50, 0, 'Jenis Barang : kerayon<br />\r\nMerk : TiTi<br />\r\nUkuran : 12 x 2<br />\r\nWarna : Mix');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `cart_id_barang` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_detail_transaksi` varchar(225) NOT NULL,
  `id_detail_barang` int(11) NOT NULL,
  `qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_detail_transaksi`, `id_detail_barang`, `qty`) VALUES
(6, 'tr-001', 6, 1),
(7, 'tr-002', 50, 1),
(8, 'tr-002', 55, 1),
(9, 'tr-003', 50, 2),
(10, 'tr-003', 52, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `kode_jenis_barang` varchar(15) NOT NULL,
  `nama_jenis_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`kode_jenis_barang`, `nama_jenis_barang`) VALUES
('AG1', 'Alat Gambar'),
('AP3', 'Alat Pemotong'),
('KE2', 'Kertas');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(225) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `total_harga` double(20,3) NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `lunas` tinyint(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `kode_unik` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `total_harga`, `tgl_bayar`, `lunas`, `user_id`, `kode_unik`) VALUES
('tr-001', '2021-07-15 10:03:41', 42474.000, NULL, NULL, 2, 474),
('tr-002', '2021-07-15 10:13:23', 50682.000, NULL, NULL, 2, 682),
('tr-003', '2021-07-15 10:13:57', 35486.000, NULL, NULL, 2, 486);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `name`, `number`, `address`, `gender`, `birth_date`, `id_role`) VALUES
(1, 'ssasongko', 'a9d2a0ae952744ebda4d2543e1e09398', 'kokonur1020@gmail.com', 'Nur Sasongko', '089678758351', 'Jl. Gatot Subroto No. 19G', 'L', '2001-07-16', 1),
(2, 'dean', '48767461cb09465362c687ae0c44753b', 'dean@gmail.com', 'Dean Ghiffari Faturrahman', '0812456798', 'Komplek GBA Kota Bandung', 'L', '2001-05-27', 2),
(3, 'iyudd', '2cbfc3d0d48699cdee0aa6cae8c406d8', 'iyudd@gmail.com', 'Rahmayudhi Prakoso', '08456798132', 'Jl. Sekeloa No. 20 Kota Bandung', 'L', '2000-12-07', 2),
(4, 'mangikiw', '52a1050ab7d8474a5dea270d979831df', 'rizkidwi@gmail.com', 'Rizki Dwi Nugraha', '0879456132', 'Lembang', 'L', '2001-06-12', 2),
(5, 'faisholl', 'ba1f68fe8982f09030f74312bf4fa63b', 'faishal@gmail.com', 'Muhammad Faishal', '0856789123', 'Cililin Jauh Kabupaten Bandung Barat', 'P', '2000-01-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `barang_ibfk_1` (`kode_jenis_barang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `cart_ibfk_2` (`cart_id_barang`),
  ADD KEY `cart_ibfk_3` (`cart_user_id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transaksi_ibfk_1` (`id_detail_transaksi`),
  ADD KEY `detail_transaksi_ibfk_2` (`id_detail_barang`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`kode_jenis_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cart_id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cart_id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`cart_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_detail_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_detail_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
