-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 20, 2024 lúc 05:08 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `MaSV` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `PQuyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`MaSV`, `Pass`, `PQuyen`) VALUES
('2023DPT982', 'fcea920f7412b5da7be0cf42b8c93759', 'SV'),
('2024CNTT153', 'fcea920f7412b5da7be0cf42b8c93759', 'SV'),
('2024CNTT272', 'fcea920f7412b5da7be0cf42b8c93759', 'Admin'),
('2024YHCT167', 'fcea920f7412b5da7be0cf42b8c93759', 'SV'),
('2024YHCT833', 'fcea920f7412b5da7be0cf42b8c93759', 'SV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `file`
--

CREATE TABLE `file` (
  `MaSV` varchar(50) NOT NULL,
  `Ten` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `name`
--

CREATE TABLE `name` (
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `name`
--

INSERT INTO `name` (`name`) VALUES
('0_MMT.pdf'),
('chiaIP.pdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `MaSV` varchar(50) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `CCCD` int(12) NOT NULL,
  `NgayCap` date NOT NULL,
  `NoiCap` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `NoiSinh` varchar(50) NOT NULL,
  `GioiTinh` varchar(50) NOT NULL,
  `DanToc` varchar(50) NOT NULL,
  `TonGiao` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` int(10) NOT NULL,
  `HKTT` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `DTCha` int(11) NOT NULL,
  `DTMe` int(11) NOT NULL,
  `NamNH` varchar(50) NOT NULL,
  `Nganh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`MaSV`, `HoTen`, `CCCD`, `NgayCap`, `NoiCap`, `NgaySinh`, `NoiSinh`, `GioiTinh`, `DanToc`, `TonGiao`, `Email`, `SDT`, `HKTT`, `DiaChi`, `DTCha`, `DTMe`, `NamNH`, `Nganh`) VALUES
('2023DPT982', 'A', 261, '2024-04-10', 'A', '2024-04-02', 'A', 'Nam', 'A', 'A', 'A', 356181, 'A', 'A', 1561, 16516, '2023', 'DPT'),
('2024CNTT153', 'A', 261, '2024-04-03', 'A', '2024-04-02', 'A', 'Nam', 'A', 'A', 'A', 356181, 'A', 'A', 1561, 16516, '2024', 'CNTT'),
('2024CNTT272', 'A', 261, '2024-04-05', 'A', '2024-04-02', 'A', 'Nam', 'A', 'A', 'A', 356181, 'A', 'A', 1561, 16516, '2024', 'CNTT'),
('2024YHCT167', 'A', 261, '2024-04-10', 'A', '2024-04-10', 'A', 'Nữ', 'A', 'A', 'A', 356181, 'A', 'A', 1561, 16516, '2024', 'YHCT'),
('2024YHCT833', 'A', 261, '2024-04-03', 'A', '2024-04-04', 'A', 'Nam', 'A', 'A', 'A', 356181, 'A', 'A', 1561, 16516, '2024', 'YHCT');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD UNIQUE KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `file`
--
ALTER TABLE `file`
  ADD UNIQUE KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`MaSV`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD CONSTRAINT `dangnhap_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `thongtin` (`MaSV`);

--
-- Các ràng buộc cho bảng `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `thongtin` (`MaSV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
