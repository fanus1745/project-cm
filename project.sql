-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 03:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `unitwater` double NOT NULL,
  `unitelec` double NOT NULL,
  `price_w` double NOT NULL,
  `price_e` double NOT NULL,
  `priceroom` double NOT NULL,
  `pricetotal` double NOT NULL,
  `datebill` datetime NOT NULL DEFAULT current_timestamp(),
  `paybill` date DEFAULT NULL,
  `month_bill` text DEFAULT NULL,
  `year_bill` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'รอชำระเงิน',
  `filename` varchar(255) DEFAULT 'noimg.jpeg',
  `dateStart` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `id_room`, `unitwater`, `unitelec`, `price_w`, `price_e`, `priceroom`, `pricetotal`, `datebill`, `paybill`, `month_bill`, `year_bill`, `status`, `filename`, `dateStart`) VALUES
(25, 101, 288, 288, 110, 110, 1200, 1570, '2023-09-12 12:07:06', '2023-09-13', '9', '2023', 'ชำระเงินแล้ว', 'Screenshot 2566-09-07 at 14.15.13.png', '2023-09-12'),
(27, 101, 300, 300, 10, 10, 2000, 2170, '2023-09-13 20:20:33', NULL, '10', '2023', 'รอชำระเงิน', 'noimg.jpeg', '2023-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(6) NOT NULL COMMENT 'รหัสสมาชิก',
  `id_room` int(6) NOT NULL,
  `name` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `tel` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `username` varchar(10) NOT NULL,
  `password` varchar(128) NOT NULL,
  `status` varchar(1) NOT NULL COMMENT 'U=user,A=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `id_room`, `name`, `lastname`, `tel`, `username`, `password`, `status`) VALUES
(1, 1, 'เจ้าของ', 'CM', '0892120655', 'admin', 'admin', 'A'),
(34, 102, 'kk', 'hh', '0869972758', 'user', '123', 'U'),
(35, 101, 'gg', 'hh', '0917947755', 'ggg', '123', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `out_room`
--

CREATE TABLE `out_room` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `date_out` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `detail` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `name`, `price`) VALUES
(1, 'ค่าเช่า', 2000),
(2, 'ค่าน้ำ', 10),
(3, 'ค่าไฟ', 10),
(4, 'ค่าส่วนกลาง(ค่าขยะ/ค่าทำความสะอาดทางเดิน)', 50),
(5, 'ค่ามัดจำ', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `crash` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `date_crash` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `id_room`, `crash`, `detail`, `date_crash`, `status`) VALUES
(10, 102, 'ไฟกลางห้องไม่ติด', 'ไฟไม่ติดหลายวันแล้ว', '2023-08-01 15:33:03', 'แจ้งซ่อม'),
(11, 101, 'น้ำรั่ว', 'น้ำในอ่างล้างหน้าไหลตลอดเวลา', '2023-08-01 15:35:02', 'เรียบร้อยแล้ว'),
(19, 101, '-', '-', '2023-09-07 16:42:07', 'แจ้งซ่อม'),
(20, 101, '-', '-', '2023-09-07 16:42:11', 'แจ้งซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `water` double NOT NULL,
  `elec` double NOT NULL,
  `crash` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `water_no` int(11) NOT NULL DEFAULT 0,
  `electric_no` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `floor`, `water`, `elec`, `crash`, `status`, `water_no`, `electric_no`) VALUES
(101, 1, 10, 10, '2000', 1, 300, 300),
(102, 1, 10, 10, '2000', 1, 100, 100),
(103, 1, 10, 10, '2000', 0, 0, 0),
(104, 1, 10, 10, '2000', 0, 0, 0),
(105, 1, 10, 10, '2000', 0, 0, 0),
(106, 1, 10, 10, '2000', 0, 0, 0),
(107, 1, 10, 10, '2000', 0, 0, 0),
(108, 1, 10, 10, '2000', 0, 51, 51),
(109, 1, 10, 10, '2000', 0, 0, 0),
(110, 1, 10, 10, '2000', 0, 0, 0),
(111, 1, 10, 10, '2000', 0, 0, 0),
(112, 1, 10, 10, '2000', 0, 0, 0),
(113, 1, 10, 10, '2000', 0, 0, 0),
(114, 1, 10, 10, '2000', 0, 0, 0),
(115, 1, 10, 10, '2000', 0, 0, 0),
(116, 1, 10, 10, '2000', 0, 0, 0),
(117, 1, 10, 10, '2000', 0, 0, 0),
(118, 1, 10, 10, '2000', 0, 0, 0),
(201, 2, 10, 10, '2000', 0, 0, 0),
(202, 2, 10, 10, '2000', 0, 0, 0),
(203, 2, 10, 10, '2000', 0, 0, 0),
(204, 2, 10, 10, '2000', 0, 0, 0),
(205, 2, 10, 10, '2000', 0, 0, 0),
(206, 2, 10, 10, '2000', 0, 0, 0),
(207, 2, 10, 10, '2000', 0, 0, 0),
(208, 2, 10, 10, '2000', 0, 0, 0),
(209, 2, 10, 10, '2000', 0, 0, 0),
(210, 2, 10, 10, '2000', 0, 0, 0),
(211, 2, 10, 10, '2000', 0, 0, 0),
(212, 2, 10, 10, '2000', 0, 0, 0),
(213, 2, 10, 10, '2000', 0, 0, 0),
(214, 2, 10, 10, '2000', 0, 0, 0),
(215, 2, 10, 10, '2000', 0, 0, 0),
(216, 2, 10, 10, '2000', 0, 0, 0),
(217, 2, 10, 10, '2000', 0, 0, 0),
(218, 2, 10, 10, '2000', 0, 0, 0),
(219, 2, 10, 10, '2000', 0, 0, 0),
(301, 3, 10, 10, '2000', 0, 0, 0),
(302, 3, 10, 10, '2000', 0, 0, 0),
(303, 3, 10, 10, '2000', 0, 0, 0),
(304, 3, 10, 10, '2000', 0, 0, 0),
(305, 3, 10, 10, '2000', 0, 0, 0),
(306, 3, 10, 10, '2000', 0, 0, 0),
(307, 3, 10, 10, '2000', 0, 0, 0),
(308, 3, 10, 10, '2000', 0, 0, 0),
(309, 3, 10, 10, '2000', 0, 0, 0),
(310, 3, 10, 10, '2000', 0, 0, 0),
(311, 3, 10, 10, '2000', 0, 0, 0),
(312, 3, 10, 10, '2000', 0, 0, 0),
(313, 3, 10, 10, '2000', 0, 0, 0),
(314, 3, 10, 10, '2000', 0, 0, 0),
(315, 3, 10, 10, '2000', 0, 0, 0),
(316, 3, 10, 10, '2000', 0, 0, 0),
(317, 3, 10, 10, '2000', 0, 0, 0),
(318, 3, 10, 10, '2000', 0, 0, 0),
(319, 3, 10, 10, '2000', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tenent`
--

CREATE TABLE `tenent` (
  `id` int(11) NOT NULL COMMENT 'ลำดับผู้เช่า',
  `name` text DEFAULT NULL COMMENT 'ชื่อ',
  `lastname` text DEFAULT NULL COMMENT 'นามสกุล',
  `id_card` varchar(500) DEFAULT NULL COMMENT 'เลขบัตรประชาชน',
  `age` int(10) DEFAULT NULL,
  `cunty` text DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `tel` varchar(500) DEFAULT NULL COMMENT 'เบอร์โทร',
  `pic_idcard` varchar(500) DEFAULT NULL COMMENT 'รูปบัตรปชช.',
  `pic_rent` varchar(500) DEFAULT NULL COMMENT 'รูปสัญญาเช่า',
  `id_room` int(11) DEFAULT NULL COMMENT 'หมายเลขห้อง',
  `date_in` date DEFAULT NULL COMMENT 'วันที่เข้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenent`
--

INSERT INTO `tenent` (`id`, `name`, `lastname`, `id_card`, `age`, `cunty`, `address`, `tel`, `pic_idcard`, `pic_rent`, `id_room`, `date_in`) VALUES
(6, 'บัวตอง', 'สองดาว', '1100501131313', 50, 'ไทย', 'ไทย', '0897277777', NULL, NULL, 101, '2023-08-09'),
(7, '123', '123', '1100501131313', 12, 'ไทย', '123', '0290090090', NULL, NULL, 102, '2023-09-07'),
(13, 'gg', 'hh', '1111111111111', 24, 'ไทย', '30', '0917947755', NULL, NULL, 101, '2023-09-12'),
(14, 'kk', 'hh', '3333333333333', 23, 'ไทย', '22', '0869972758', NULL, NULL, 102, '2023-09-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_room`
--
ALTER TABLE `out_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tenent`
--
ALTER TABLE `tenent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `out_room`
--
ALTER TABLE `out_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tenent`
--
ALTER TABLE `tenent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับผู้เช่า', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
