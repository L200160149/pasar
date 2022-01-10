-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 10, 2022 at 06:06 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id` int(100) NOT NULL,
  `nama_pasar` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_pembangunan` date DEFAULT NULL,
  `longitude` varchar(15) DEFAULT NULL,
  `latitude` varchar(15) DEFAULT NULL,
  `kondisi_pasar` varchar(255) DEFAULT NULL,
  `luas_tanah` int(11) DEFAULT NULL,
  `luas_bangunan` int(11) DEFAULT NULL,
  `jumlah_pedagang` int(11) DEFAULT NULL,
  `los` int(11) DEFAULT NULL,
  `kios_toko` int(11) DEFAULT NULL,
  `lapak` int(11) DEFAULT NULL,
  `omzet_pertahun` int(11) DEFAULT NULL,
  `foto1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id`, `nama_pasar`, `alamat`, `tahun_pembangunan`, `longitude`, `latitude`, `kondisi_pasar`, `luas_tanah`, `luas_bangunan`, `jumlah_pedagang`, `los`, `kios_toko`, `lapak`, `omzet_pertahun`, `foto1`, `foto2`, `foto3`, `updated_at`, `created_at`) VALUES
(16, 'tes 1', 'tes 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/pasar/LzkAYB9kKuoi2gASAQWmmtSjl5dfp8Z1SqMkDx47.jpg', 'images/pasar/rC89c3z9zj5ElZO0FiUhZUKWR7y7AsPA7oeWHNVW.jpg', 'images/pasar/JZSwHXxngYOBk1QuXEHphoJ8gbiMbMayodFsax1K.jpg', '2022-01-08 09:06:01', '2022-01-08 09:06:01'),
(17, 'Pasar 2', 'tes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/pasar/QBVpfNC1L4m0uVFj2fM26wHbE8yc2iGV9jO261p3.jpg', 'images/pasar/Oyla3oTgAMsg18B4GJOXiiryZtClcv8YdfOwN3tD.jpg', 'images/pasar/PvVsRv6ZbOkJPsoKB6RRF9FwydVcgkh2ZrMvihpW.jpg', '2022-01-10 08:02:11', '2022-01-10 08:02:11'),
(18, 'Pasar 3', 'tes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/pasar/4mhPJxPo149dTeHZuIEKZ6y9yl5fOyWioYpjtm8v.jpg', 'images/pasar/xmUMwPGFz0KespIi7zkMyzY3vQL63nEhKsQWTYSz.jpg', 'images/pasar/zpro1QjYVQ047A64UAm1YY4paaZk7zuCYWo1WFyS.jpg', '2022-01-10 08:02:27', '2022-01-10 08:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `pembangunan`
--

CREATE TABLE `pembangunan` (
  `id` int(255) NOT NULL,
  `id_pasar` int(255) NOT NULL,
  `dak` int(11) DEFAULT NULL,
  `tp` int(11) DEFAULT NULL,
  `btt` int(11) DEFAULT NULL,
  `apbd` int(11) DEFAULT NULL,
  `toko_kios` int(11) DEFAULT NULL,
  `los_meja` int(11) DEFAULT NULL,
  `los_tempel` int(11) DEFAULT NULL,
  `los_tanpa_meja` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembangunan`
--

INSERT INTO `pembangunan` (`id`, `id_pasar`, `dak`, `tp`, `btt`, `apbd`, `toko_kios`, `los_meja`, `los_tempel`, `los_tanpa_meja`, `keterangan`, `updated_at`, `created_at`) VALUES
(1, 17, 1, 1, 1, 1, 1, 1, 1, 1, '1', '2022-01-10 08:54:06', '2022-01-10 08:54:06'),
(2, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-10 09:09:11', '2022-01-10 09:09:11'),
(4, 17, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-10 09:18:24', '2022-01-10 09:18:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pembangunan`
--
ALTER TABLE `pembangunan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
