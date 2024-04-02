-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 09:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `person_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookcase_id`
--

CREATE TABLE `bookcase_id` (
  `Caseid` varchar(20) NOT NULL,
  `dateviolation` date NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookcase_id`
--

INSERT INTO `bookcase_id` (`Caseid`, `dateviolation`, `reason`) VALUES
('CASE001', '2023-07-14', 'Wrong Turn'),
('CASE002', '2023-07-22', 'Violate Traffic Light'),
('case56', '2023-08-01', 'Accident'),
('CASE006', '2023-08-02', 'Wrong Turn'),
('', '0000-00-00', ''),
('Case21', '2023-08-04', 'Violate Traffic Light');

-- --------------------------------------------------------

--
-- Table structure for table `bookcase_id_police`
--

CREATE TABLE `bookcase_id_police` (
  `Caseid` varchar(20) NOT NULL,
  `dateviolation` date NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookcase_id_police`
--

INSERT INTO `bookcase_id_police` (`Caseid`, `dateviolation`, `reason`) VALUES
('CASE0091', '2023-07-08', 'Wrong Turn'),
('CASE0024', '2023-08-09', 'Car is not registerd'),
('CASE0026', '2023-08-10', 'Wrong Turn'),
('Case24', '2023-08-12', 'Car is not registerd'),
('Case34', '2023-08-14', 'Accident');

-- --------------------------------------------------------

--
-- Table structure for table `generate_fine`
--

CREATE TABLE `generate_fine` (
  `ID` varchar(10) NOT NULL,
  `dateviolation` date NOT NULL,
  `offence` text NOT NULL,
  `fine` int(10) NOT NULL,
  `carsnumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generate_fine`
--

INSERT INTO `generate_fine` (`ID`, `dateviolation`, `offence`, `fine`, `carsnumber`) VALUES
('CASE001', '2023-07-14', 'Wrong Turn', 100, 'WB11089'),
('CASE002', '2023-07-22', 'Violate Traffic Light', 100, 'MP89009'),
('case56', '2023-08-01', 'Accident', 2000, 'K6223'),
('CASE006', '2023-08-02', 'Wrong Turn', 100, 'WB11089'),
('Case21', '2023-08-04', 'Violate Traffic Light', 100, 'WB77056');

-- --------------------------------------------------------

--
-- Table structure for table `generate_fine_police`
--

CREATE TABLE `generate_fine_police` (
  `ID` varchar(10) NOT NULL,
  `dateviolation` date NOT NULL,
  `reason` text NOT NULL,
  `fine` int(10) NOT NULL,
  `carsnumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generate_fine_police`
--

INSERT INTO `generate_fine_police` (`ID`, `dateviolation`, `reason`, `fine`, `carsnumber`) VALUES
('CASE0091', '2023-07-08', 'Wrong Turn', 100, 'WB668333'),
('CASE0024', '2023-08-09', 'Car is not registerd', 2000, 'WB7777'),
('CASE0026', '2023-08-10', 'Wrong Turn', 100, 'WB668333'),
('Case24', '2023-08-12', 'Car is not registerd', 2000, 'WB668333'),
('Case34', '2023-08-14', 'Accident', 2000, 'WB77436');

-- --------------------------------------------------------

--
-- Table structure for table `report_history`
--

CREATE TABLE `report_history` (
  `dateviolation` date NOT NULL,
  `ID` text NOT NULL,
  `off.area` text NOT NULL,
  `off.time` time(6) NOT NULL,
  `offence` text NOT NULL,
  `fine` int(20) NOT NULL,
  `drivers lisence` varchar(20) NOT NULL,
  `gmail` varchar(20) NOT NULL,
  `carsnumber` varchar(20) NOT NULL,
  `offname` text NOT NULL,
  `off.id.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_history`
--

INSERT INTO `report_history` (`dateviolation`, `ID`, `off.area`, `off.time`, `offence`, `fine`, `drivers lisence`, `gmail`, `carsnumber`, `offname`, `off.id.`) VALUES
('2023-07-14', 'CASE001', 'Kalindi', '13:37:00.000000', 'Wrong Turn', 100, 'DG69870', 'naksh@gmail.com', 'WB11089', 'Narayan', 'AD100'),
('2023-07-22', 'CASE002', 'Kalighat', '13:40:00.000000', 'Violate Traffic Light', 100, 'DL0056', 'Sammy@gmail.com', 'MP89009', 'Puchu', 'AD101'),
('2023-08-01', 'case56', 'Kulu', '18:12:00.000000', 'Accident', 2000, 'DG69870', 'Priya@gmail.com', 'K6223', 'Puchu', 'AD698'),
('2023-08-02', 'CASE006', 'Dumdum', '15:25:00.000000', 'Wrong Turn', 100, 'DL887001', 'naksh@gmail.com', 'WB11089', 'Mookul', 'AD7124'),
('2023-08-04', 'Case21', 'Rabindra Sadan', '11:40:00.000000', 'Violate Traffic Light', 100, 'DL887764', 'arpan@gmail.com', 'WB77056', 'Probir', 'AD7233');

-- --------------------------------------------------------

--
-- Table structure for table `report_history_police`
--

CREATE TABLE `report_history_police` (
  `dateviolation` date NOT NULL,
  `ID` varchar(20) NOT NULL,
  `off.area` text NOT NULL,
  `off.time` time(5) NOT NULL,
  `offence` text NOT NULL,
  `fine` int(10) NOT NULL,
  `drivers lisence` varchar(20) NOT NULL,
  `gmail` varchar(20) NOT NULL,
  `carsnumber` varchar(20) NOT NULL,
  `offname` text NOT NULL,
  `off.id.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_history_police`
--

INSERT INTO `report_history_police` (`dateviolation`, `ID`, `off.area`, `off.time`, `offence`, `fine`, `drivers lisence`, `gmail`, `carsnumber`, `offname`, `off.id.`) VALUES
('2023-07-08', 'CASE0091', 'Dumdum', '15:05:00.00000', 'Wrong Turn', 100, 'DL9095', 'Rahul@gmail.com', 'WB668333', 'Mookul', 'PO121'),
('2023-08-09', 'CASE0024', 'Haldiram', '16:15:00.00000', 'Car is not registerd', 2000, 'DL887221', 'dhruv45@gmail.com', 'WB7777', 'Ankit', 'PO110'),
('2023-08-10', 'CASE0026', 'Kalighat', '19:58:00.00000', 'Wrong Turn', 100, 'DG69844', 'sukumar568@gmail.com', 'WB668333', 'Yash', 'PO129'),
('2023-08-12', 'Case24', 'Jatin Das Park', '11:49:00.00000', 'Car is not registerd', 2000, 'DL887042', 'esa23@gmail.com', 'WB668333', 'Niruddho', 'PO1245'),
('2023-08-14', 'Case34', 'Bangur', '14:07:00.00000', 'Accident', 2000, 'DL8873466', 'askash234@gmail.com', 'WB77436', 'Puchu', 'PO562');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
