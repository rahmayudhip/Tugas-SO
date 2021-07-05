-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 03:37 AM
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
