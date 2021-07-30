-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 06:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `ID` int(15) NOT NULL,
  `AirLine_Name` varchar(20) DEFAULT NULL,
  `Departure_City` varchar(20) DEFAULT NULL,
  `Destination_City` varchar(20) DEFAULT NULL,
  `FLIGHT_DATE` date DEFAULT NULL,
  `Ticket_Price` int(11) NOT NULL,
  `Payment_Status` varchar(15) NOT NULL,
  `Ticket_No` int(15) NOT NULL,
  `Passenger_Name` varchar(25) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `AGE` int(15) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`ID`, `AirLine_Name`, `Departure_City`, `Destination_City`, `FLIGHT_DATE`, `Ticket_Price`, `Payment_Status`, `Ticket_No`, `Passenger_Name`, `Gender`, `AGE`, `Email`) VALUES
(98701, 'TUK', 'ISL', 'NYC', '2021-05-10', 45000, 'Paid', 10001, 'Hamza-Momin', 'M', 22, 'hamzamomin5@gmail.com'),
(98702, 'PIA', 'LAH', 'LON', '2021-06-08', 95000, 'Paid', 10002, 'Younas-Shami', 'M', 25, 'YounasShami1@gmail.com'),
(98703, 'EMR', 'KAR', 'SYD', '2021-07-04', 145000, 'UnPaid', 10003, 'Talha-Ahmed', 'M', 35, 'TalhaN@gmail.com'),
(98704, 'OS', 'MUL', 'TUL', '2021-08-12', 55000, 'Paid', 10004, 'Sara-Ali', 'F', 20, 'Sara45@hotmail.com'),
(98705, 'SNG', 'PES', 'JED', '2021-09-11', 250000, 'UnPaid', 10005, 'Sidra-Raja', 'F', 45, 'Sidra@gmail.com'),
(98706, 'UK', 'ISL', 'PAR', '2021-10-05', 415000, 'Paid', 10006, 'Saleem-Ch', 'M', 48, 'Ch78@gmail.com'),
(98707, 'NOR', 'KAR', 'ROM', '2021-11-11', 85000, 'UnPaid', 10007, 'Saad-Baber', 'M', 60, 'Baber1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `departure`
--

CREATE TABLE `departure` (
  `TICKET_NO` int(15) NOT NULL,
  `PASSENGER_ID` int(20) NOT NULL,
  `SEAT_NO` int(20) DEFAULT NULL,
  `FLIGHT_DATE` date DEFAULT NULL,
  `Departure_City` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departure`
--

INSERT INTO `departure` (`TICKET_NO`, `PASSENGER_ID`, `SEAT_NO`, `FLIGHT_DATE`, `Departure_City`) VALUES
(10001, 11, 1, '2021-05-10', 'ISL'),
(10002, 12, 11, '2021-06-08', 'LAH'),
(10003, 13, 21, '2021-07-04', 'KAR'),
(10004, 14, 14, '2021-08-12', 'MUL'),
(10005, 15, 15, '2021-09-11', 'PES'),
(10006, 16, 17, '2021-10-05', 'ISL'),
(10007, 17, 10, '2021-11-11', 'KAR');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `Destination_City` varchar(15) NOT NULL,
  `Passenger_ID` int(20) NOT NULL,
  `Seat_NO` int(20) DEFAULT NULL,
  `Flight_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`Destination_City`, `Passenger_ID`, `Seat_NO`, `Flight_Date`) VALUES
('NYC', 11, 1, '2021-05-11'),
('LON', 12, 11, '2021-06-09'),
('SYD', 13, 21, '2021-07-05'),
('TUL', 14, 14, '2021-08-13'),
('JED', 15, 15, '2021-09-12'),
('PAR', 16, 17, '2021-10-06'),
('ROM', 17, 10, '2021-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `AirLine_ID` int(15) NOT NULL,
  `Departure_City` varchar(20) DEFAULT NULL,
  `Destination_City` varchar(20) DEFAULT NULL,
  `FLIGHT_DATE` date DEFAULT NULL,
  `FLIGHT_Time` time DEFAULT NULL,
  `Flight_Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`AirLine_ID`, `Departure_City`, `Destination_City`, `FLIGHT_DATE`, `FLIGHT_Time`, `Flight_Name`) VALUES
(98701, 'ISL', 'NYC', '2021-05-10', '19:30:10', 'TUK'),
(98702, 'LAH', 'LON', '2021-06-08', '20:25:00', 'PIA'),
(98703, 'KAR', 'SYD', '2021-07-04', '21:00:00', 'EMR'),
(98704, 'MUL', 'TUL', '2021-08-12', '08:30:00', 'OS'),
(98705, 'PES', 'JED', '2021-09-11', '03:40:50', 'SNG'),
(98706, 'ISL', 'PAR', '2021-10-05', '01:14:20', 'UK'),
(98707, 'KAR', 'ROM', '2021-11-11', '12:03:00', 'NOR');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `NAME` varchar(45) DEFAULT NULL,
  `EMAIL` mediumtext DEFAULT NULL,
  `AGE` int(15) DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `SEAT_NO` int(45) NOT NULL,
  `PASSENGER_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`NAME`, `EMAIL`, `AGE`, `GENDER`, `SEAT_NO`, `PASSENGER_ID`) VALUES
('Hamza-Momin', 'hamzamomin5@gmail.com', 22, 'M', 1, 11),
('Younas-Shami', 'YounasShami1@gmail.com', 25, 'M', 11, 12),
('Talha-Ahmed', 'TalhaN@gmail.com', 35, 'M', 21, 13),
('Sara-Ali', 'Sara45@hotmail.com', 20, 'F', 14, 14),
('Sidra-Raja', 'Sidra@gmail.com', 45, 'F', 15, 15),
('Saleem-Ch', 'Ch78@gmail.com', 48, 'M', 17, 16),
('Saad-Baber', 'Baber1@gmail.com', 60, 'M', 10, 17);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TICKET_NO` int(15) NOT NULL,
  `PASSENGER_ID` int(20) NOT NULL,
  `SEAT_NO` int(20) DEFAULT NULL,
  `FLIGHT_DATE` date NOT NULL,
  `PRICE` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TICKET_NO`, `PASSENGER_ID`, `SEAT_NO`, `FLIGHT_DATE`, `PRICE`) VALUES
(10001, 11, 1, '2021-05-10', 45000),
(10002, 12, 11, '2021-06-08', 95000),
(10003, 13, 21, '2021-07-04', 145000),
(10004, 14, 14, '2021-08-12', 55000),
(10005, 15, 15, '2021-09-11', 250000),
(10006, 16, 17, '2021-10-05', 415000),
(10007, 17, 10, '2021-11-11', 85000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Passenger_Name` (`Passenger_Name`);

--
-- Indexes for table `departure`
--
ALTER TABLE `departure`
  ADD PRIMARY KEY (`PASSENGER_ID`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Passenger_ID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`AirLine_ID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`PASSENGER_ID`),
  ADD UNIQUE KEY `NAME` (`NAME`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TICKET_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98708;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departure`
--
ALTER TABLE `departure`
  ADD CONSTRAINT `departure_ibfk_1` FOREIGN KEY (`PASSENGER_ID`) REFERENCES `passenger` (`PASSENGER_ID`);

--
-- Constraints for table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_ibfk_1` FOREIGN KEY (`Passenger_ID`) REFERENCES `ticket` (`PASSENGER_ID`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`AirLine_ID`) REFERENCES `airline` (`ID`),
  ADD CONSTRAINT `flight_ibfk_2` FOREIGN KEY (`FLIGHT_DATE`) REFERENCES `airline` (`FLIGHT_Date`);

--
-- Constraints for table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`NAME`) REFERENCES `airline` (`Passenger_Name`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`PASSENGER_ID`) REFERENCES `passenger` (`PASSENGER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
