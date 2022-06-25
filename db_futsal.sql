-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 07:39 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `kd_booking` varchar(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nope` varchar(13) NOT NULL,
  `lapangan` varchar(35) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`kd_booking`, `nama`, `nope`, `lapangan`, `tanggal`, `waktu`, `keterangan`) VALUES
('B0001', 'Jajang Sukmara', '081231432112', 'Vinyl', '2020-08-04', '17:00:00', 2),
('B0002', 'Jono', '0872726713', 'Rumput Sintetis', '2022-06-25', '14:00:00', 2),
('B0003', 'Mamat Alkatir', '0872726713', 'Rumput Sintetis', '2022-06-29', '07:25:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` varchar(11) NOT NULL,
  `nama_tim` varchar(35) NOT NULL,
  `nama_pj` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `nope` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_tim`, `nama_pj`, `alamat`, `nope`, `email`, `tgl_daftar`) VALUES
('M0001', 'Kombatmer', 'Agus Darmaji', 'Waled', '082918273912', 'kombatmer@yahoo.com', '2020-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `role`) VALUES
(1, 'Jajang Mulyana', 'jajang', 'b56b57039c86f8626ece5a1a35f86175', 'user'),
(2, 'Taufik Iskandar', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'Mamat Alkatir', 'mamat', '24b65fcef95d94b6d41ecaa85a70e46f', 'user'),
(5, 'Siti Khodijah', 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`kd_booking`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
