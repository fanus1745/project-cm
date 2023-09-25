-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2023 at 10:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-room`
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
  `status` text NOT NULL DEFAULT 'รอชำระเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `id_room`, `unitwater`, `unitelec`, `price_w`, `price_e`, `priceroom`, `pricetotal`, `datebill`, `paybill`, `month_bill`, `year_bill`, `status`) VALUES
(11, 101, 200, 200, 1000, 1000, 1800, 3800, '2023-08-09 15:44:20', NULL, '8', '2023', 'รอชำระเงิน');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `id` int(10) NOT NULL,
  `floor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`id`, `floor`) VALUES
(1, 'ชั้นที่ 1'),
(2, 'ชั้นที่ 2'),
(3, 'ชั้นที่ 3');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `id_room`, `name`, `lastname`, `tel`, `username`, `password`, `status`) VALUES
(1, 1, 'เจ้าของ', 'CM', '0892120655', 'admin', 'admin', 'A'),
(28, 101, 'บัวตอง', 'สองดาว', '0897277777', 'user', '1234', 'U');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `name`, `price`) VALUES
(1, 'ค่าเช่า', 2000),
(2, 'ค่าน้ำ', 17),
(3, 'ค่าไฟ', 9),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `id_room`, `crash`, `detail`, `date_crash`, `status`) VALUES
(10, 102, 'ไฟกลางห้องไม่ติด', 'ไฟไม่ติดหลายวันแล้ว', '2023-08-01 15:33:03', 'แจ้งซ่อม'),
(11, 101, 'น้ำรั่ว', 'น้ำในอ่างล้างหน้าไหลตลอดเวลา', '2023-08-01 15:35:02', 'เรียบร้อยแล้ว'),
(18, 101, 'ทดสอบ', '-', '2023-08-08 23:13:02', 'แจ้งซ่อม');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `floor`, `water`, `elec`, `crash`, `status`, `water_no`, `electric_no`) VALUES
(101, 1, 10, 10, '1800', 1, 200, 200),
(102, 1, 10, 10, '2000', 0, 0, 0),
(103, 1, 10, 10, '2000', 0, 0, 0),
(104, 1, 10, 10, '2000', 0, 0, 0),
(105, 1, 10, 10, '2000', 0, 0, 0),
(106, 1, 10, 10, '2000', 0, 0, 0),
(107, 1, 10, 10, '2000', 0, 0, 0),
(108, 1, 10, 10, '2000', 0, 0, 0),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenent`
--

INSERT INTO `tenent` (`id`, `name`, `lastname`, `id_card`, `age`, `cunty`, `address`, `tel`, `pic_idcard`, `pic_rent`, `id_room`, `date_in`) VALUES
(6, 'บัวตอง', 'สองดาว', '1100501131313', 50, 'ไทย', 'ไทย', '0897277777', NULL, NULL, 101, '2023-08-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `out_room`
--
ALTER TABLE `out_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tenent`
--
ALTER TABLE `tenent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับผู้เช่า', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
