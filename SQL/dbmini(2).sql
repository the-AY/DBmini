-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 04:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmini`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`) VALUES
('ADMIN1', 'ADMIN1212'),
('ADMIN2', 'ADMIN1212');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` varchar(10) NOT NULL,
  `C_NAME` varchar(20) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL,
  `GENDER` varchar(6) DEFAULT NULL,
  `CONTACT` varchar(11) DEFAULT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_NAME`, `AGE`, `ADDRESS`, `GENDER`, `CONTACT`, `PASSWORD`) VALUES
('test', 'test', 12, 'mangalore', 'MALE', '79462166466', 'test'),
('test1', 'test1', 30, 'mangalore', 'MALE', '100', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `C_ID` varchar(11) NOT NULL,
  `ITEMS` varchar(20) NOT NULL,
  `QUANTITY` int(5) NOT NULL,
  `PRICE` int(5) NOT NULL,
  `F_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`C_ID`, `ITEMS`, `QUANTITY`, `PRICE`, `F_ID`) VALUES
('test', 'Samosa', 10, 20, 'F006'),
('test', 'North Indian', 7, 100, 'F004'),
('test', 'Samosa', 9, 20, 'F006'),
('test', 'Onion Pokoda', 1, 4, 'F005'),
('test', 'Gulab Jamun', 8, 30, 'F007'),
('test', 'Onion Pokoda', 10, 4, 'F005'),
('test', 'South Indian', 2, 100, 'F003');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `DOORDER` datetime DEFAULT current_timestamp(),
  `C_ID` varchar(10) NOT NULL,
  `F_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`DOORDER`, `C_ID`, `F_ID`) VALUES
('2022-01-18 00:00:00', '1000', 'F01'),
('2022-01-18 13:03:10', '1001', 'F01');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `TI_TYPE` varchar(10) DEFAULT NULL,
  `PNR` varchar(10) NOT NULL,
  `PNR_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TI_TYPE` varchar(10) NOT NULL,
  `PNR` int(10) NOT NULL,
  `SRC` varchar(10) NOT NULL,
  `DEST` varchar(10) NOT NULL,
  `C_NAME` varchar(20) NOT NULL,
  `COACH_NO` varchar(10) NOT NULL,
  `SEAT_NO` varchar(10) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `C_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TI_TYPE`, `PNR`, `SRC`, `DEST`, `C_NAME`, `COACH_NO`, `SEAT_NO`, `PRICE`, `C_ID`) VALUES
('POSTAL', 10000, 'MANGLORE', 'BANGALORE', 'Anirudh', '', '', 0, 'test'),
('POSTAL', 10001, 'dehli', 'mp', 'Ani', '', '', 0, 'test'),
('POSTAL', 10002, 'Bangalore', 'Mangalore', 'Adish', '', '', 0, 'test1'),
('TICKET', 10006, 'Bangalore', 'Mangalore', 'Anirudh', '2S101', '', 0, 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_holder`
--

CREATE TABLE `ticket_holder` (
  `TIH_NAME` varchar(20) NOT NULL,
  `AGE` int(11) DEFAULT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL,
  `PNR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_holder`
--

INSERT INTO `ticket_holder` (`TIH_NAME`, `AGE`, `ADDRESS`, `PNR`) VALUES
('', 0, '', NULL),
('Anirudh', 20, 'Mangalore', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`PNR`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `ticket_holder`
--
ALTER TABLE `ticket_holder`
  ADD PRIMARY KEY (`TIH_NAME`),
  ADD KEY `PNR` (`PNR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `PNR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10027;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
