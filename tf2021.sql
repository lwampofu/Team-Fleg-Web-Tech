-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3306
-- Generation Time: Nov 20, 2019 at 06:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tf2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_detailing`
--

CREATE TABLE `car_detailing` (
  `ServID` int(10) DEFAULT NULL,
  `Detailing_Type` enum('TOTALLY AWESOME DETAILING: GHS150.00','COMPLETE CAR DETAILING: GHS350.00','BOTH:GHS500.00') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_detailing`
--

INSERT INTO `car_detailing` (`ServID`, `Detailing_Type`) VALUES
(42, 'TOTALLY AWESOME DETAILING: GHS150.00'),
(47, 'TOTALLY AWESOME DETAILING: GHS150.00');

-- --------------------------------------------------------

--
-- Table structure for table `car_washing`
--

CREATE TABLE `car_washing` (
  `ServID` int(10) DEFAULT NULL,
  `Car_Wash_Type` enum('INTERIOR AND EXTERIOR CAR WASH: GHS20.00','WASH ADDONS: GHS60.00','BOTH: GHS80.00') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_washing`
--

INSERT INTO `car_washing` (`ServID`, `Car_Wash_Type`) VALUES
(36, 'WASH ADDONS: GHS60.00'),
(43, 'INTERIOR AND EXTERIOR CAR WASH: GHS20.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(10) NOT NULL,
  `PayID` int(10) DEFAULT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `Phone_Num` varchar(14) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Full_Address` varchar(100) DEFAULT NULL,
  `Payment_Type` enum('Card','Mobile','Cash') DEFAULT NULL,
  `Payment_Date` date DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustID`, `PayID`, `FName`, `LName`, `password`, `Phone_Num`, `Email`, `Full_Address`, `Payment_Type`, `Payment_Date`, `Amount`) VALUES
(11, NULL, 'Dimitri', 'Kalashnikov', '5e75befb40f4e2945bbf160cf162a337', '270194776', 'dimitri.kalashnilov@ashesi.edu.gh', 'Halels', NULL, NULL, NULL),
(12, NULL, 'Lwazi', 'Malaba', '43c16d460b053cdc0fea85dd5f25edf8', NULL, 'lmalaba@ashesi.edu.gh', NULL, NULL, NULL, NULL),
(13, NULL, 'Lwazi', 'Mpofu', '10352', NULL, 'lwampofu@gmail.com', NULL, NULL, NULL, NULL),
(14, NULL, 'Odonkor', 'Emmanuel', 'b5c0b187fe309af0f4d35982fd961d7e', NULL, 'teamfleg@gmail.com', NULL, NULL, NULL, NULL),
(15, NULL, 'emmanuel', 'odonkor', '4c9be8ab4cdca31f373f02e5bc9d815a', '550991307', 'emmanuel.odonkor@ashesi.edu.gh', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', NULL, NULL, NULL),
(16, NULL, 'emma', 'donks', '5e75befb40f4e2945bbf160cf162a337', NULL, 'emmadonks@ashesi.edu.gh', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_service`
--

CREATE TABLE `customer_service` (
  `ServID` int(10) NOT NULL,
  `InvoiceID` varchar(10) DEFAULT NULL,
  `CustID` int(10) NOT NULL,
  `Discount` varchar(4) DEFAULT '0%',
  `service_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_service`
--

INSERT INTO `customer_service` (`ServID`, `InvoiceID`, `CustID`, `Discount`, `service_date`) VALUES
(36, NULL, 11, '0%', '2019-11-15 20:59:32'),
(37, NULL, 11, '0%', '2019-11-15 20:59:32'),
(38, NULL, 11, '0%', '2019-11-15 20:59:32'),
(39, NULL, 11, '0%', '2019-11-15 20:59:32'),
(40, NULL, 11, '0%', '2019-11-15 20:59:32'),
(41, NULL, 11, '0%', '2019-11-15 20:59:32'),
(42, NULL, 11, '0%', '2019-11-15 20:59:32'),
(43, NULL, 11, '0%', '2019-11-15 21:00:12'),
(44, NULL, 11, '0%', '2019-11-15 21:01:34'),
(45, NULL, 15, '0%', '2019-11-20 02:24:50'),
(46, NULL, 15, '0%', '2019-11-20 02:30:12'),
(47, NULL, 15, '0%', '2019-11-20 16:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(10) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Date_Hired` date NOT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_cust_service`
--

CREATE TABLE `employee_cust_service` (
  `EmployeeID` int(10) DEFAULT NULL,
  `ServID` int(10) DEFAULT NULL,
  `Service_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedID` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedID`, `username`, `email`, `comments`, `date`) VALUES
(1, '0', '', 'Here is your comment', '2019-11-14 01:06:27'),
(2, '0', '', 'You are good', '2019-11-14 01:06:27'),
(3, 'lwax', 'lwaxmalax@gmail.com', 'Here is your comment', '2019-11-14 01:06:27'),
(4, 'samantha', 'keishamavunga@gmail.com', 'I love you guys', '2019-11-14 01:06:27'),
(5, 'samantha', 'keishamavunga@gmail.com', 'I love you guys', '2019-11-14 01:06:27'),
(6, 'Lwazi', 'b4617488@urhen.com', 'hello hello', '2019-11-14 01:06:27'),
(7, 'Lwanya', 'email@gmail.com', '&lt;b&gt;pass&lt;/&gt;', '2019-11-14 01:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(10) NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `expires`) VALUES
(3, 'teamfleg@gmail.com', '10665', '2019-11-19 02:48:50'),
(4, 'teamfleg@gmail.com', '10302', '2019-11-19 02:51:16'),
(5, 'teamfleg@gmail.com', '10116', '2019-11-19 02:55:05'),
(6, 'teamfleg@gmail.com', '10393', '2019-11-19 03:02:11'),
(7, 'teamfleg@gmail.com', '10531', '2019-11-19 03:21:50'),
(8, 'teamfleg@gmail.com', '10965', '2019-11-19 03:33:55'),
(18, 'lmalaba@ashesi.edu.gh', '1601b5', '2019-11-22 16:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ServID` int(10) DEFAULT NULL,
  `product_category` enum('Citrus Wash & Gloss: GHS146.56','Adams Car Shampoo: GHS207.64','Turtlle Wax Car Wash: GHS54.25') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ServID`, `product_category`) VALUES
(38, ''),
(39, ''),
(40, 'Adams Car Shampoo: GHS207.64'),
(41, 'Turtlle Wax Car Wash: GHS54.25'),
(44, 'Adams Car Shampoo: GHS207.64'),
(45, ''),
(46, 'Adams Car Shampoo: GHS207.64');

-- --------------------------------------------------------

--
-- Table structure for table `unregistered_customers`
--

CREATE TABLE `unregistered_customers` (
  `UID` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(14) NOT NULL,
  `address` varchar(150) NOT NULL,
  `car_wash` enum('INTERIOR AND EXTERIOR CAR WASH: GHS20.00','WASH ADDONS: GHS60.00','BOTH: GHS80.00') DEFAULT NULL,
  `car_detailing` enum('TOTALLY AWESOME DETAILING: GHS150.00','COMPLETE CAR DETAILING: GHS350.00','BOTH:GHS500.00') DEFAULT NULL,
  `products` enum('Citrus Wash & Gloss: GHS146.56','Adams Car Shampoo: GHS207.64','Turtlle Wax Car Wash: GHS54.25') DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unregistered_customers`
--

INSERT INTO `unregistered_customers` (`UID`, `fname`, `lname`, `email`, `phone_num`, `address`, `car_wash`, `car_detailing`, `products`, `date_time`) VALUES
(1, 'Mbizo', 'Boys', 'email@gmail.com', '0776457032', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', 'WASH ADDONS: GHS60.00', NULL, NULL, '2019-11-15 20:58:17'),
(2, 'Mbizo', 'Boys', 'email@gmail.com', '0776457032', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', NULL, 'COMPLETE CAR DETAILING: GHS350.00', NULL, '2019-11-15 20:58:17'),
(3, 'Mbizo', 'Boys', 'email@gmail.com', '0776457032', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', NULL, NULL, 'Citrus Wash & Gloss: GHS146.56', '2019-11-15 20:58:17'),
(4, 'Mbizo2', 'Boys', 'email@gmail.com', '0776457032', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', NULL, NULL, 'Citrus Wash & Gloss: GHS146.56', '2019-11-15 20:58:17'),
(5, 'Mbizo2', 'Boys', 'email@gmail.com', '0776457032', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', 'WASH ADDONS: GHS60.00', NULL, NULL, '2019-11-15 20:58:17'),
(6, 'Ashesi', 'University', 'emmanuel.odonkor@ashesi.edu.gh', '0776457032', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', NULL, 'TOTALLY AWESOME DETAILING: GHS150.00', NULL, '2019-11-15 20:58:17'),
(7, 'Mbizo2', 'Boys', 'email@gmail.com', '776457032', '1 University Avenue, Berekuso PMB CT 3, Cantonments, Accra, Greater Accra Region', NULL, 'TOTALLY AWESOME DETAILING: GHS150.00', NULL, '2019-11-15 20:58:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_detailing`
--
ALTER TABLE `car_detailing`
  ADD UNIQUE KEY `ServID` (`ServID`);

--
-- Indexes for table `car_washing`
--
ALTER TABLE `car_washing`
  ADD UNIQUE KEY `ServID` (`ServID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`),
  ADD UNIQUE KEY `PayID` (`PayID`);

--
-- Indexes for table `customer_service`
--
ALTER TABLE `customer_service`
  ADD PRIMARY KEY (`ServID`),
  ADD UNIQUE KEY `InvoiceID_2` (`InvoiceID`,`CustID`),
  ADD KEY `CustID` (`CustID`) USING BTREE,
  ADD KEY `InvoiceID` (`InvoiceID`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `employee_cust_service`
--
ALTER TABLE `employee_cust_service`
  ADD UNIQUE KEY `EmployeeID` (`EmployeeID`),
  ADD UNIQUE KEY `ServID` (`ServID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD KEY `Foreign_Key_SID` (`ServID`);

--
-- Indexes for table `unregistered_customers`
--
ALTER TABLE `unregistered_customers`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer_service`
--
ALTER TABLE `customer_service`
  MODIFY `ServID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `unregistered_customers`
--
ALTER TABLE `unregistered_customers`
  MODIFY `UID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_detailing`
--
ALTER TABLE `car_detailing`
  ADD CONSTRAINT `Serv_F_Key` FOREIGN KEY (`ServID`) REFERENCES `customer_service` (`ServID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_washing`
--
ALTER TABLE `car_washing`
  ADD CONSTRAINT `ServID_F_Key` FOREIGN KEY (`ServID`) REFERENCES `customer_service` (`ServID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_service`
--
ALTER TABLE `customer_service`
  ADD CONSTRAINT `Cust_F_Key` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_cust_service`
--
ALTER TABLE `employee_cust_service`
  ADD CONSTRAINT `EmployeeID_F_Key` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`),
  ADD CONSTRAINT `Serv_ID_F_Key` FOREIGN KEY (`ServID`) REFERENCES `customer_service` (`ServID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Foreign_Key_SID` FOREIGN KEY (`ServID`) REFERENCES `customer_service` (`ServID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
