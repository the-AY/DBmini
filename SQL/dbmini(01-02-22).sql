-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 07:14 PM
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
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `LOG_NO` int(10) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ACTION` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`LOG_NO`, `C_ID`, `DATE`, `ACTION`) VALUES
(1, 'test', '2022-01-27 08:57:32', 'Account Created'),
(2, 'test', '2022-01-27 08:58:50', 'Account Created'),
(3, '$username', '2022-01-28 09:46:03', 'Account Deleted'),
(4, '$username', '2022-01-28 10:46:26', 'Account Deleted'),
(5, 'test', '2022-01-29 05:22:02', 'Account Created'),
(6, 'test', '2022-01-31 18:09:05', 'Account Created');

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
('rudh', 'Anirudh S', 20, 'Mangalore', 'MALE', '9353645659', 'rudh'),
('test', 'test', 12, 'padil', 'MALE', '79462166466', 'test');

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `condel` BEFORE DELETE ON `customer` FOR EACH ROW INSERT INTO `console` (`LOG_NO`, `C_ID`, `DATE`, `ACTION`) VALUES (NULL, '$username', current_timestamp(), 'Account Deleted')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `console` AFTER INSERT ON `customer` FOR EACH ROW INSERT INTO console (`LOG_NO`, `C_ID`, `DATE`, `ACTION`) VALUES (NULL, 'test', current_timestamp(), 'Account Created')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `C_ID` varchar(11) NOT NULL,
  `ITEMS` varchar(20) NOT NULL,
  `QUANTITY` int(5) NOT NULL,
  `PRICE` int(5) NOT NULL,
  `F_ID` varchar(20) DEFAULT NULL,
  `STATUS` varchar(20) NOT NULL,
  `DOD` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TOTAL_PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`C_ID`, `ITEMS`, `QUANTITY`, `PRICE`, `F_ID`, `STATUS`, `DOD`, `TOTAL_PRICE`) VALUES
('rudh', 'Gulab Jamun', 2, 30, 'F007', 'Delivered', '2022-02-01 16:28:20', 60);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `DOORDER` timestamp NULL DEFAULT current_timestamp(),
  `C_ID` varchar(10) NOT NULL,
  `F_ID` varchar(10) NOT NULL,
  `TOTAL PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TRAIN` varchar(25) NOT NULL,
  `TI_TYPE` varchar(10) NOT NULL,
  `PNR` int(10) NOT NULL,
  `SRC` varchar(10) NOT NULL,
  `DEST` varchar(10) NOT NULL,
  `C_NAME` varchar(20) NOT NULL,
  `COACH_NO` varchar(10) NOT NULL,
  `SEAT_NO` varchar(10) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `PNR_STATUS` varchar(10) NOT NULL,
  `DOJ` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TRAIN`, `TI_TYPE`, `PNR`, `SRC`, `DEST`, `C_NAME`, `COACH_NO`, `SEAT_NO`, `PRICE`, `C_ID`, `PNR_STATUS`, `DOJ`) VALUES
('', 'POSTAL', 3, 'Mangalore', 'Dehli', 'Anirudh S', '', '', 10000, 'rudh', '', NULL),
('', 'POSTAL', 4, 'Mangaluru', 'Bangaluru', 'Anirudh S', '', '', 100, 'rudh', '', NULL),
('', 'POSTAL', 5, 'Dehli', 'Mangalore', 'Anirudh S', '', '', 10000, 'rudh', '', NULL),
('', 'POSTAL', 7, 'Bangalore', 'Mangalore', 'Anirudh', '', '', 1500, 'rudh', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_holder`
--

CREATE TABLE `ticket_holder` (
  `TIH_NAME` varchar(20) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `AGE` int(11) DEFAULT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL
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
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`LOG_NO`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `C_ID` (`C_ID`);

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
  ADD KEY `C_ID` (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `LOG_NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `PNR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_holder`
--
ALTER TABLE `ticket_holder`
  ADD CONSTRAINT `ticket_holder_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
