-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 04:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `loainv`
--

CREATE TABLE `loainv` (
  `MaLoai` varchar(5) CHARACTER SET utf8 NOT NULL,
  `TenLoai` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loainv`
--

INSERT INTO `loainv` (`MaLoai`, `TenLoai`) VALUES
('ML001', 'Hành chính'),
('ML002', 'Kiểm toán'),
('ML003', 'Sản xuất'),
('ML004', 'Lãnh đạo'),
('ML006', 'Lãnh đạo');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(5) NOT NULL,
  `Ho` varchar(30) NOT NULL,
  `Ten` varchar(20) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `MaLoai` varchar(5) NOT NULL,
  `MaPhong` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `Ho`, `Ten`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Anh`, `MaLoai`, `MaPhong`) VALUES
('NV001', 'Nguyễn Thị', 'Diễn', '2000-08-08', 1, 'Khánh Nhơn 1,Nhơn Hải, Ninh Hải, Ninh Thuận', '1.jpg', 'ML001', 'P001'),
('NV002', 'Nguyễn Lê', 'Di', '1995-07-05', 0, 'nha trang', '3.jpg', 'ML003', 'P003'),
('NV003', 'Nguyễn Thị Thanh', 'Tuyền', '2000-05-02', 1, 'nha trang', '2.jpg', 'ML002', 'P002'),
('NV004', 'Lê', 'Dien', '2021-09-30', 0, 'Ninh Hải, Ninh Thuận', '1.jpg', 'ML004', 'P005'),
('NV005', 'Nguyễn Lê', 'Minh', '1996-07-27', 0, 'Ninh Hải, Ninh Thuận', '3.jpg', 'ML001', 'P001'),
('NV008', 'Hồ Nguyễn Hồng', 'Huệ', '2000-05-25', 0, 'nha trang', '3.jpg', 'ML001', 'P001'),
('NV009', 'Lê', 'Em', '2004-04-04', 0, 'Ninh Hải, Ninh Thuận', '3.jpg', 'ML002', 'P004');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MaPhong` varchar(5) CHARACTER SET utf8 NOT NULL,
  `TenPhong` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MaPhong`, `TenPhong`) VALUES
('P001', 'Ban hành chính'),
('P002', 'Ban ngân sách'),
('P003', 'Ban sản xuất'),
('P004', 'ngân sách'),
('P005', 'Ban nghiên cứu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`) VALUES
(1, 'Dien08', '08082000', 'dien08082k@gmail.com'),
(2, 'okxong', '12345678', 'dien08082000@gmail.com'),
(3, 'dien08082k@gmail.com', 'F38k99e2', 'dien08@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loainv`
--
ALTER TABLE `loainv`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaPhong` (`MaPhong`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPhong`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loainv` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
