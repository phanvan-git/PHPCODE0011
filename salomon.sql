-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 12:46 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salomon`
--

-- --------------------------------------------------------

--
-- Table structure for table `chudegopy`
--

CREATE TABLE `chudegopy` (
  `cdgy_ma` int(11) NOT NULL,
  `cdgy_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `dh_ma` int(11) NOT NULL,
  `dh_ngaylap` datetime NOT NULL,
  `dh_ngaygiao` datetime DEFAULT NULL,
  `dh_noigiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_trangthaithanhtoan` int(11) NOT NULL,
  `httt_ma` int(11) NOT NULL,
  `kh_tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`dh_ma`, `dh_ngaylap`, `dh_ngaygiao`, `dh_noigiao`, `dh_trangthaithanhtoan`, `httt_ma`, `kh_tendangnhap`) VALUES
(1, '2013-02-21 16:45:44', '2013-02-01 00:00:00', 'Can Tho', 0, 1, 'vdduy'),
(2, '2013-02-21 16:46:33', '2013-02-07 00:00:00', 'Ã¡dsadsad', 0, 1, 'vdduy'),
(3, '2013-02-21 16:47:22', '2013-02-01 00:00:00', 'sdfsdf', 0, 1, 'vdduy'),
(4, '2013-02-21 16:48:10', '2013-02-08 00:00:00', 'Can Tho', 0, 1, 'vdduy'),
(5, '2013-02-21 16:48:59', '2013-02-09 00:00:00', 'Can Tho', 0, 1, 'vdduy');

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE `gopy` (
  `gy_ma` int(11) NOT NULL,
  `gy_hoten` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_dienthoai` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gy_noidung` text COLLATE utf8_unicode_ci,
  `gy_ngaygopy` datetime DEFAULT NULL,
  `cdgy_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhsanpham`
--

CREATE TABLE `hinhsanpham` (
  `hsp_ma` int(11) NOT NULL,
  `hsp_tentaptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhsanpham`
--

INSERT INTO `hinhsanpham` (`hsp_ma`, `hsp_tentaptin`, `sp_ma`) VALUES
(25, '7_iphone.jpg', 7),
(26, '7_iphone.jpg', 7),
(27, '7_samsung-s5830.jpg', 7),
(28, '6_samsung_galaxy_3.jpg', 6),
(29, '6_vaio_small.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `httt_ma` int(11) NOT NULL,
  `httt_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhthucthanhtoan`
--

INSERT INTO `hinhthucthanhtoan` (`httt_ma`, `httt_ten`) VALUES
(1, 'Tiá»n máº·t'),
(2, 'Chuyá»ƒn khoáº£n');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kh_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_gioitinh` int(11) NOT NULL,
  `kh_diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kh_dienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kh_ngaysinh` int(11) DEFAULT NULL,
  `kh_thangsinh` int(11) DEFAULT NULL,
  `kh_namsinh` int(11) NOT NULL,
  `kh_cmnd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_makichhoat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_trangthai` int(11) NOT NULL,
  `kh_quantri` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`kh_tendangnhap`, `kh_matkhau`, `kh_ten`, `kh_gioitinh`, `kh_diachi`, `kh_dienthoai`, `kh_email`, `kh_ngaysinh`, `kh_thangsinh`, `kh_namsinh`, `kh_cmnd`, `kh_makichhoat`, `kh_trangthai`, `kh_quantri`) VALUES
('admin', '123', 'Quản trị', 1, 'Số 01 - Lý Tự Trọng - Cần Thơ', '0912.123.567', 'admin@salomon.vn', 2, 2, 1985, NULL, NULL, 1, 1),
('dinhduyvo', 'fcea920f7412b5da7be0cf42b8c93759', 'Vo Dinh Duy', 0, 'Can Tho', '07103.273.34433', 'vdduy@ctu.edu.vn', 2, 2, 1985, '', '', 1, 0),
('nhdung', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyá»…n HÃ¹ng DÅ©ng', 0, 'Cáº§n ThÆ¡', '0903100550', 'hungdung@ctu.edu.vn', 18, 11, 1986, '', 'dfdae6bda1be436b13e8bc4240879355', 0, 1),
('nta', '|J	Ê7b¯aå• ”=Âd”ø”', 'Nguyen Thi A', 1, 'Cáº§n ThÆ¡', '0903100550', 'nta@gmail.com', 17, 5, 1987, '', '', 0, 0),
('usermoi', 'fcea920f7412b5da7be0cf42b8c93759', 'Nguoi dung moi', 0, 'Can Tho', '07103-273.344', 'vdduy@ctu.edu.vn', 2, 2, 1985, '', '44766fb4dd4e4977e75a9321cbc6413e', 0, 0),
('vdduy', 'fcea920f7412b5da7be0cf42b8c93759', 'Vo Dinh Duy', 0, 'Can Tho', '0975107705', 'vdduy@ctu.edu.vn', 2, 2, 1985, '', 'â€zcnl82qbuj', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `km_ma` int(11) NOT NULL,
  `km_ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_noidung` text COLLATE utf8_unicode_ci,
  `kh_tungay` date DEFAULT NULL,
  `km_denngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `lsp_ma` int(11) NOT NULL,
  `lsp_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lsp_mota` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`lsp_ma`, `lsp_ten`, `lsp_mota`) VALUES
(1, 'MÃ¡y tÃ­nh báº£ng', NULL),
(2, 'MÃ¡y tÃ­nh xÃ¡ch tay', NULL),
(3, 'Điện thoại', NULL),
(4, 'Linh phụ kiện', NULL),
(8, 'asada sdsad', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `nsx_ma` int(11) NOT NULL,
  `nsx_ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`nsx_ma`, `nsx_ten`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'HTC'),
(5, 'phan văn vạn');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_ma` int(11) NOT NULL,
  `sp_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sp_gia` decimal(12,2) DEFAULT NULL,
  `sp_giacu` decimal(12,2) DEFAULT NULL,
  `sp_mota_ngan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sp_mota_chitiet` text COLLATE utf8_unicode_ci,
  `sp_ngaycapnhat` datetime NOT NULL,
  `sp_soluong` int(11) DEFAULT NULL,
  `lsp_ma` int(11) NOT NULL,
  `nsx_ma` int(11) NOT NULL,
  `km_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_ma`, `sp_ten`, `sp_gia`, `sp_giacu`, `sp_mota_ngan`, `sp_mota_chitiet`, `sp_ngaycapnhat`, `sp_soluong`, `lsp_ma`, `nsx_ma`, `km_ma`) VALUES
(1, 'Samsung Galaxy S3', '12000000.00', '12600000.00', 'Sản phẩm của Samsung năm 2013', 'Cấu hình: CPU Dual Core – Ram 1 GB', '2012-12-22 11:20:30', 17, 3, 2, NULL),
(2, 'Apple Ipad 4 Wifi 16GB', '11800000.00', '12000000.00', 'CPU  Dual-core Cortex-A9 tốc độ 1GHz', 'Màn hình 9.7 inch, cảm ứng điện dung đa điểm', '2013-01-12 10:04:45', 100, 1, 1, NULL),
(3, 'Apple iPhone 5 16GB', '14890000.00', NULL, 'CPU: Dual-core 1 GHz', 'Chi tiết iPhone 5', '2013-01-16 17:13:45', 0, 3, 1, NULL),
(4, 'Apple iPhone 5 16GB White', '14990000.00', NULL, 'CPU: Dual-core 1 GHz - Màu trắng', 'Chi tiết iPhone 5', '2013-01-16 17:14:55', 10, 3, 1, NULL),
(5, 'Samsung Galaxy Tab 10.1 3G 16G', '10990000.00', '12000000.00', 'Màn hình 10.1 inch cảm ứng đa điểm', 'Vi xử lý Dual-core 1 Cortex-A9 tốc độ 1GHz', '2013-01-17 14:18:03', 6, 1, 2, NULL),
(6, 'Nokia Asha 311', '2699000.00', '3000000.00', 'Điện thoại di động Nokia Asha 311', 'Màn hình QVGA, 3.0 inches', '2013-01-17 14:19:10', 25, 3, 3, NULL),
(7, 'Samsung Galaxy Tab 2 7.0', '7500000.00', '7950000.00', 'MÃ¡y tÃ­nh báº£ng Samsung Galaxy Tab 2 7.0 ', 'Mï¿½n hï¿½nh 7 inch C?m ?ng ?i?n dung,?a ?i?m', '2013-01-28 10:42:08', 13, 1, 2, NULL),
(8, 'adasd', '2321321.00', NULL, 'Ã¡dsad', 'sadassad', '2013-01-28 10:37:52', 12, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_dondathang`
--

CREATE TABLE `sanpham_dondathang` (
  `sp_ma` int(11) NOT NULL,
  `dh_ma` int(11) NOT NULL,
  `sp_dh_soluong` int(11) NOT NULL,
  `sp_dh_dongia` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham_dondathang`
--

INSERT INTO `sanpham_dondathang` (`sp_ma`, `dh_ma`, `sp_dh_soluong`, `sp_dh_dongia`) VALUES
(1, 5, 3, '12000000.00'),
(5, 5, 2, '10990000.00'),
(7, 4, 1, '7500000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chudegopy`
--
ALTER TABLE `chudegopy`
  ADD PRIMARY KEY (`cdgy_ma`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`dh_ma`),
  ADD KEY `dondathang_khachhang_idx` (`kh_tendangnhap`),
  ADD KEY `dondathang_hinhthucthanhtoan_idx` (`httt_ma`);

--
-- Indexes for table `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`gy_ma`),
  ADD KEY `gopy_chudegopy_idx` (`cdgy_ma`);

--
-- Indexes for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD PRIMARY KEY (`hsp_ma`),
  ADD KEY `fk_hinhsanpham_sanpham1_idx` (`sp_ma`);

--
-- Indexes for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`httt_ma`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_tendangnhap`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`km_ma`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`lsp_ma`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`nsx_ma`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `sanpham_loaisanpham_idx` (`lsp_ma`),
  ADD KEY `sanpham_nhasanxuat_idx` (`nsx_ma`),
  ADD KEY `sanpham_khuyenmai_idx` (`km_ma`);

--
-- Indexes for table `sanpham_dondathang`
--
ALTER TABLE `sanpham_dondathang`
  ADD PRIMARY KEY (`sp_ma`,`dh_ma`),
  ADD KEY `sanpham_donhang_sanpham_idx` (`sp_ma`),
  ADD KEY `sanpham_donhang_dondathang_idx` (`dh_ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `dh_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  MODIFY `hsp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `httt_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `lsp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `nsx_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_hinhthucthanhtoan` FOREIGN KEY (`httt_ma`) REFERENCES `hinhthucthanhtoan` (`httt_ma`),
  ADD CONSTRAINT `dondathang_khachhang` FOREIGN KEY (`kh_tendangnhap`) REFERENCES `khachhang` (`kh_tendangnhap`);

--
-- Constraints for table `gopy`
--
ALTER TABLE `gopy`
  ADD CONSTRAINT `gopy_chudegopy` FOREIGN KEY (`cdgy_ma`) REFERENCES `chudegopy` (`cdgy_ma`) ON UPDATE CASCADE;

--
-- Constraints for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD CONSTRAINT `fk_hinhsanpham_sanpham1` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_khuyenmai` FOREIGN KEY (`km_ma`) REFERENCES `khuyenmai` (`km_ma`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `sanpham_loaisanpham` FOREIGN KEY (`lsp_ma`) REFERENCES `loaisanpham` (`lsp_ma`),
  ADD CONSTRAINT `sanpham_nhasanxuat` FOREIGN KEY (`nsx_ma`) REFERENCES `nhasanxuat` (`nsx_ma`);

--
-- Constraints for table `sanpham_dondathang`
--
ALTER TABLE `sanpham_dondathang`
  ADD CONSTRAINT `sanpham_donhang_dondathang` FOREIGN KEY (`dh_ma`) REFERENCES `dondathang` (`dh_ma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_donhang_sanpham` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
