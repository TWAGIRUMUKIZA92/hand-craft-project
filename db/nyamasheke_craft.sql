-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 12:36 AM
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
-- Database: `nyamasheke_craft`
--

-- --------------------------------------------------------

--
-- Table structure for table `coopaccount_tbl`
--

CREATE TABLE `coopaccount_tbl` (
  `coop_id` int(11) NOT NULL,
  `coop_name` varchar(25) NOT NULL,
  `coop_email` varchar(50) NOT NULL,
  `coop_pass` varchar(16) NOT NULL,
  `coop_tel` varchar(13) NOT NULL,
  `coop_licence` varchar(50) NOT NULL,
  `coop_status` int(1) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coopaccount_tbl`
--

INSERT INTO `coopaccount_tbl` (`coop_id`, `coop_name`, `coop_email`, `coop_pass`, `coop_tel`, `coop_licence`, `coop_status`, `created_date`) VALUES
(1, 'UBUHANZI RWANDA', 'ubuhanzi250@getrwa.com', 'test@250', '+250780406160', 'xxxxxxxxx', 1, '2022-06-16 10:44:53'),
(4, '', 'test@getrwa.com', 'test@250', '+250780406161', 'yyyyyy', 1, '2022-06-16 10:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `craft_tbl`
--

CREATE TABLE `craft_tbl` (
  `crft_id` int(11) NOT NULL,
  `crft_quantity` int(6) NOT NULL,
  `crft_price` int(6) NOT NULL,
  `subtotal` float NOT NULL,
  `crft_img` varchar(50) NOT NULL,
  `crft_desc` varchar(25) NOT NULL,
  `cooperative_id` int(11) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `craft_tbl`
--

INSERT INTO `craft_tbl` (`crft_id`, `crft_quantity`, `crft_price`, `subtotal`, `crft_img`, `crft_desc`, `cooperative_id`, `registered_date`) VALUES
(2, 20, 5000, 0, 'assets/uploads/craft/milk9.png', 'Graphic design art.', 1, '2022-06-16 10:32:02'),
(3, 1, 1000, 0, 'assets/uploads/craft/Nyamasheke_platfoem.PNG', 'test', 1, '2022-06-16 10:33:22'),
(4, 2, 100, 200, 'xxxxxxx', 'test3', 4, '2022-06-16 11:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `cust_id` int(11) NOT NULL,
  `craft_id` int(11) NOT NULL,
  `cust_fname` varchar(25) NOT NULL,
  `cust_lname` varchar(20) NOT NULL,
  `cust_state` varchar(15) NOT NULL,
  `cust_city` varchar(15) NOT NULL,
  `cust_address1` varchar(20) NOT NULL,
  `cust_address2` varchar(20) NOT NULL,
  `cust_tel` varchar(13) NOT NULL,
  `cust_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `craft_id` int(11) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price` int(6) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE `transaction_tbl` (
  `trans_id` int(11) NOT NULL,
  `customer_idd` int(11) NOT NULL,
  `quantity` int(6) NOT NULL,
  `total_amount` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coopaccount_tbl`
--
ALTER TABLE `coopaccount_tbl`
  ADD PRIMARY KEY (`coop_id`);

--
-- Indexes for table `craft_tbl`
--
ALTER TABLE `craft_tbl`
  ADD PRIMARY KEY (`crft_id`),
  ADD KEY `cooperative_id` (`cooperative_id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `craft_id` (`craft_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `craft_id` (`craft_id`),
  ADD KEY `order_tbl_ibfk_1` (`customer_id`);

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `customer_idd` (`customer_idd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coopaccount_tbl`
--
ALTER TABLE `coopaccount_tbl`
  MODIFY `coop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `craft_tbl`
--
ALTER TABLE `craft_tbl`
  MODIFY `crft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `craft_tbl`
--
ALTER TABLE `craft_tbl`
  ADD CONSTRAINT `craft_tbl_ibfk_1` FOREIGN KEY (`cooperative_id`) REFERENCES `coopaccount_tbl` (`coop_id`);

--
-- Constraints for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD CONSTRAINT `customer_tbl_ibfk_1` FOREIGN KEY (`craft_id`) REFERENCES `craft_tbl` (`crft_id`);

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_tbl` (`cust_id`),
  ADD CONSTRAINT `order_tbl_ibfk_2` FOREIGN KEY (`craft_id`) REFERENCES `craft_tbl` (`crft_id`);

--
-- Constraints for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD CONSTRAINT `transaction_tbl_ibfk_1` FOREIGN KEY (`customer_idd`) REFERENCES `customer_tbl` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
