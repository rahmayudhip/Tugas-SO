-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 06:11 PM
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
(1, 'Drawing Pen', 'AG1', 0.00, 5.00, '', 50, 24, 'Drawing pen terbaik dari snowman, terdiri ukuran ketebalan pulpen mulai dari 0.1 - 0.9'),
(3, 'Kertas Sidu A4', 'KE2', 40000.00, 0.00, 'images/Gambar/sidua4.jpg', 5, 3, 'Jenis Barang : Kertas HVS <br>\r\nMerk : Sinar Dunia<br>\r\nUkuran : A4<br>\r\nGramatur : 70 Gram<br>\r\n1 pak isi 500 lembar<br>\r\n<br>'),
(5, 'Kertas Sidu F4', 'KE2', 45000.00, 0.00, 'images/gambar/siduf4.jpg', 100, 0, 'Jenis Barang : Kertas HVS <br>\r\nMerk : Sinar Dunia<br>\r\nUkuran : F4<br>\r\nGramatur : 70 Gram<br>\r\n1 pak isi 500 lembar<br>\r\n<br>'),
(6, 'Kertas Paper One A4', 'KE2', 41300.00, 0.00, 'images/gambar/paperonea4.png', 22, 0, 'Jenis Barang : Kertas HVS <br>\r\nMerk : Paper One<br>\r\nUkuran : A4<br>\r\nGramatur : 70 Gram<br>\r\n1 pak isi 500 lembar<br>\r\n<br>'),
(7, 'Folio Bergaris', 'KE2', 21300.00, 0.00, 'images/gambar/foliobergaris.jpg', 0, 0, '1 Pack isi 100 Lembar<br>\r\nMerk: Sinar Dunia<br>\r\nGramatur: 70 gram<br>\r\nUkuran Kertas: 32 x 42 cm.<br>\r\n<br><br>');

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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `cart_id_barang`, `cart_user_id`, `qty`) VALUES
(1, 3, 2, 4),
(3, 5, 2, 1),
(4, 6, 2, 1);

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
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`kode_jenis_barang`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kode_jenis_barang`) REFERENCES `jenis_barang` (`kode_jenis_barang`) ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cart_id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cart_id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`cart_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
