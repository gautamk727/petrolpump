-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 06:40 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petrolpump`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `mobile` varchar(22) NOT NULL,
  `money` varchar(40) NOT NULL,
  `attendance` varchar(15) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `mobile`, `money`, `attendance`, `date_time`) VALUES
(5, 'gautam kumar', '7781858516', '50', 'Present', '2018-05-06 03:Sunday:43 pm'),
(6, 'Gaurav', '887763230', '-50', 'Present', '2018-05-06 03:Sunday:04 pm'),
(7, 'Gaurav', '887763230', '30', 'absent', '2018-05-06 03:Sunday:19 pm'),
(8, 'gautam kumar', '7781858516', '-45', 'Present', '2018-05-06 08:Sunday:36 pm'),
(9, 'Gaurav', '887763230', '5', 'Present', '2018-05-06 09:Sunday:38 pm'),
(10, 'snno', '8956235623', '100', 'Present', '2018-05-08 12:Tuesday:47 pm');

-- --------------------------------------------------------

--
-- Table structure for table `diesel_petrol_rate`
--

CREATE TABLE `diesel_petrol_rate` (
  `id` int(10) NOT NULL,
  `name` varchar(22) NOT NULL,
  `price` varchar(22) NOT NULL,
  `machine_name` varchar(255) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diesel_petrol_rate`
--

INSERT INTO `diesel_petrol_rate` (`id`, `name`, `price`, `machine_name`, `quantity`, `date_time`) VALUES
(14, 'Petrol', '110', 'Machine Petrol 4', '2000', '2018-05-09'),
(15, 'Diesel', '45', 'Machine Diesel 1', '5000', '2018-05-09'),
(17, 'Powre Petrol', '95', 'Machine Power Petrol  3', '3000', '2018-05-09'),
(18, 'Diesel', '45', 'machine Diesel 2', '5000', '2018-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `diesel_petrol_sell`
--

CREATE TABLE `diesel_petrol_sell` (
  `id` int(100) NOT NULL,
  `machine_no` varchar(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `staff_name` varchar(25) NOT NULL,
  `staff_mobile_no` varchar(15) NOT NULL,
  `start_reading` mediumtext NOT NULL,
  `end_reading` mediumtext NOT NULL,
  `total_fuel_sale` mediumtext NOT NULL,
  `total_fuel_price` mediumtext NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diesel_petrol_sell`
--

INSERT INTO `diesel_petrol_sell` (`id`, `machine_no`, `payment_mode`, `staff_name`, `staff_mobile_no`, `start_reading`, `end_reading`, `total_fuel_sale`, `total_fuel_price`, `date_time`) VALUES
(19, '80', 'Cash', 'j', 'h', '30', '35', '5', '400', '2018-05-06 01:Sunday:38 am'),
(20, '75', 'Cash', 'gjh', '56465465', '30', '50', '20', '1500', '2018-05-06 02:Sunday:05 pm'),
(21, '75', 'Debit Card', 'lodu', '8541864242', '500', '800', '300', '22500', '2018-05-06 02:Sunday:18 pm'),
(22, '75', 'Debit Card', 'raju', '8920182538', '500', '700', '200', '15000', '2018-05-06 02:Sunday:03 pm'),
(23, '90', 'Debit Card', 'fudo', '7781858516', '1000', '2000', '1000', '90000', '2018-05-06 02:Sunday:02 pm'),
(24, '75', 'Cash', 'Gaurav', '8877763230', '2000', '6000', '4000', '300000', '2018-05-07 12:Monday:34 am'),
(25, '90', 'Debit Card', 'sneha', '8945562312', '2000', '5000', '3000', '270000', '2018-05-07'),
(26, '85', 'Debit Card', 'snno', '7589652313', '2000', '6000', '4000', '340000', '2018-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `expense_info`
--

CREATE TABLE `expense_info` (
  `id` int(11) NOT NULL,
  `fule_name` varchar(25) NOT NULL,
  `rate` varchar(25) NOT NULL,
  `qantity` varchar(25) NOT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_info`
--

INSERT INTO `expense_info` (`id`, `fule_name`, `rate`, `qantity`, `date`) VALUES
(1, 'Petrol', '50000000', '50000', '2018-05-08 '),
(2, 'Diesel', '250', '60', '2018-05-07 '),
(3, 'Powre Petrol', '500', '40', '2018-05-07 ');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `name`, `password`) VALUES
(1, 'gaurav', 'gaurav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diesel_petrol_rate`
--
ALTER TABLE `diesel_petrol_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diesel_petrol_sell`
--
ALTER TABLE `diesel_petrol_sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_info`
--
ALTER TABLE `expense_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `diesel_petrol_rate`
--
ALTER TABLE `diesel_petrol_rate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `diesel_petrol_sell`
--
ALTER TABLE `diesel_petrol_sell`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `expense_info`
--
ALTER TABLE `expense_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
