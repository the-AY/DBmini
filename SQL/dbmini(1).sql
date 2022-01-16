-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 06:13 AM
-- Server version: 8.0.21
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` varchar(10) NOT NULL,
  `C_NAME` varchar(20) DEFAULT NULL,
  `AGE` int DEFAULT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL,
  `GENDER` varchar(6) DEFAULT NULL,
  `CONTACT` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` varchar(10) NOT NULL,
  `F_NAME` varchar(20) NOT NULL,
  `QUANTITY` int NOT NULL,
  `PRICE` int NOT NULL,
  `C_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `DOORDER` date DEFAULT NULL,
  `C_ID` varchar(10) NOT NULL,
  `F_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `T_NO` varchar(10) NOT NULL,
  `TI_TYPE` varchar(10) DEFAULT NULL,
  `PNR` varchar(10) NOT NULL,
  `PNR_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `T_NO` varchar(10) NOT NULL,
  `TI_TYPE` varchar(10) NOT NULL,
  `PNR` varchar(10) NOT NULL,
  `SRC` varchar(10) NOT NULL,
  `DEST` varchar(10) NOT NULL,
  `C_NAME` varchar(20) NOT NULL,
  `COACH_NO` varchar(10) NOT NULL,
  `SEAT_NO` varchar(10) NOT NULL,
  `PRICE` int NOT NULL,
  `C_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_holder`
--

CREATE TABLE `ticket_holder` (
  `TIH_NAME` varchar(20) NOT NULL,
  `AGE` int DEFAULT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL,
  `PNR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `F_ID` (`F_ID`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`T_NO`),
  ADD KEY `PNR` (`PNR`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`T_NO`);

--
-- Indexes for table `ticket_holder`
--
ALTER TABLE `ticket_holder`
  ADD PRIMARY KEY (`TIH_NAME`),
  ADD KEY `PNR` (`PNR`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`T_NO`) REFERENCES `ticket` (`T_NO`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
