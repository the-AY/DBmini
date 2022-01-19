-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 07:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

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
  `CONTACT` int(11) DEFAULT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_NAME`, `AGE`, `ADDRESS`, `GENDER`, `CONTACT`, `PASSWORD`) VALUES
('asda', 'sda', 12, 'AS', 'M', 2147483647, 'ASD');

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
  `PNR` varchar(10) NOT NULL,
  `SRC` varchar(10) NOT NULL,
  `DEST` varchar(10) NOT NULL,
  `C_NAME` varchar(20) NOT NULL,
  `COACH_NO` varchar(10) NOT NULL,
  `SEAT_NO` varchar(10) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `C_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_holder`
--

CREATE TABLE `ticket_holder` (
  `TIH_NAME` varchar(20) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL,
  `PNR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `PNR` (`PNR`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_holder`
--
ALTER TABLE `ticket_holder`
  ADD CONSTRAINT `ticket_holder_ibfk_1` FOREIGN KEY (`PNR`) REFERENCES `ticket` (`PNR`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
