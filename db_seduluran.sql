-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2018 pada 05.32
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seduluran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `id_ctm` int(11) DEFAULT NULL,
  `acc_email` varchar(100) NOT NULL,
  `acc_password` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id`, `id_ctm`, `acc_email`, `acc_password`) VALUES
(1, 1, 'jeffrysuyanto@gmail.com', '2c8af6399b64f0a7ce85a84018823837880dafbbe6add5f2d8ca7bb3bc4b5580d3a48a2bae975b5d0e2327abd39333c98ed2a5c55d882c05941448ede604935885OHvjLViEGAMNP2hmPKNIEH3tgxLtCk9a0Azmemq4E=');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(1028) NOT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '2c8af6399b64f0a7ce85a84018823837880dafbbe6add5f2d8ca7bb3bc4b5580d3a48a2bae975b5d0e2327abd39333c98ed2a5c55d882c05941448ede604935885OHvjLViEGAMNP2hmPKNIEH3tgxLtCk9a0Azmemq4E=', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_ctm` int(11) NOT NULL,
  `item_code` varchar(30) NOT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `id_ctm`, `item_code`, `qty`) VALUES
(12, 1, 'KIDS-0002', 7),
(13, 1, 'MEN-0001', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_color`
--

CREATE TABLE `category_color` (
  `ctg_color_code` varchar(10) NOT NULL,
  `ctg_color_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category_color`
--

INSERT INTO `category_color` (`ctg_color_code`, `ctg_color_name`) VALUES
('ABU', 'Abu-Abu'),
('BLK', 'Hitam'),
('BLUE', 'Biru'),
('BRW', 'Coklat'),
('GREEN', 'Hijau'),
('PINK', 'Merah muda'),
('PRP', 'Ungu'),
('RED', 'Merah'),
('SKIN', 'Cream'),
('WHT', 'Putih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_type`
--

CREATE TABLE `category_type` (
  `ctg_type_code` varchar(10) NOT NULL,
  `ctg_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category_type`
--

INSERT INTO `category_type` (`ctg_type_code`, `ctg_type_name`) VALUES
('KIDS', 'ANAK-ANAK'),
('MEN', 'PRIA'),
('WMN', 'WANITA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_ctm` int(11) NOT NULL,
  `name_ctm` varchar(100) NOT NULL,
  `phone_ctm` varchar(20) DEFAULT NULL,
  `img_ctm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_ctm`, `name_ctm`, `phone_ctm`, `img_ctm`) VALUES
(1, 'Jeffry Suyanto', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `item_code` varchar(30) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `ctg_type_code` varchar(10) DEFAULT NULL,
  `sub_id` int(11) NOT NULL,
  `ctg_color_code` varchar(10) DEFAULT NULL,
  `item_status` enum('READY','EMPTY') DEFAULT NULL,
  `item_price` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`item_code`, `item_name`, `ctg_type_code`, `sub_id`, `ctg_color_code`, `item_status`, `item_price`) VALUES
('KIDS-0002', 'kaos kaki putih sekolah', 'KIDS', 10, 'WHT', 'READY', '7500'),
('MEN-0001', 'kaos kaki pria bermotif', 'MEN', 3, 'BRW', 'READY', '5000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_img`
--

CREATE TABLE `item_img` (
  `img_id` int(11) NOT NULL,
  `item_code` varchar(30) NOT NULL,
  `img_main` varchar(100) NOT NULL,
  `img_2` varchar(100) DEFAULT NULL,
  `img_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item_img`
--

INSERT INTO `item_img` (`img_id`, `item_code`, `img_main`, `img_2`, `img_3`) VALUES
(6, 'MEN-0001', 'MEN-0001_.jpg', NULL, NULL),
(7, 'KIDS-0002', 'KIDS-0002_1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `ctg_type_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`, `ctg_type_code`) VALUES
(1, 'Polos', 'MEN'),
(2, 'Motif', 'MEN'),
(3, 'Kantor', 'MEN'),
(4, 'Polos', 'WMN'),
(5, 'Motif', 'WMN'),
(6, 'Muslimah', 'WMN'),
(7, 'Baby', 'KIDS'),
(8, '4 - 8 Tahun', 'KIDS'),
(9, '9 - 13 Tahun', 'KIDS'),
(10, 'Sekolah', 'KIDS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ctm` (`id_ctm`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_ctm` (`id_ctm`),
  ADD KEY `item_code` (`item_code`);

--
-- Indeks untuk tabel `category_color`
--
ALTER TABLE `category_color`
  ADD PRIMARY KEY (`ctg_color_code`);

--
-- Indeks untuk tabel `category_type`
--
ALTER TABLE `category_type`
  ADD PRIMARY KEY (`ctg_type_code`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_ctm`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_code`),
  ADD KEY `ctg_color_code` (`ctg_color_code`),
  ADD KEY `ctg_type_code` (`ctg_type_code`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indeks untuk tabel `item_img`
--
ALTER TABLE `item_img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `item_img_ibfk_1` (`item_code`);

--
-- Indeks untuk tabel `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `ctg_type_code` (`ctg_type_code`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_ctm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `item_img`
--
ALTER TABLE `item_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`id_ctm`) REFERENCES `customer` (`id_ctm`);

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_ctm`) REFERENCES `customer` (`id_ctm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_code`) REFERENCES `item` (`item_code`);

--
-- Ketidakleluasaan untuk tabel `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`ctg_color_code`) REFERENCES `category_color` (`ctg_color_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`ctg_type_code`) REFERENCES `category_type` (`ctg_type_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_3` FOREIGN KEY (`sub_id`) REFERENCES `sub_category` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `item_img`
--
ALTER TABLE `item_img`
  ADD CONSTRAINT `item_img_ibfk_1` FOREIGN KEY (`item_code`) REFERENCES `item` (`item_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`ctg_type_code`) REFERENCES `category_type` (`ctg_type_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
