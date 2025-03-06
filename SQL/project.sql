-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 12:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `texts` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `texts`) VALUES
(1, 'oppo', 'Height: about 164.0mm  Width: about 75.4mm  Thickness: about 7.9mm  Weight: about 175g  *Product size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.'),
(2, 'vivo', 'Vivo is best known for its design and features that make it incomparable and the best-featured phone in the market. This phone comes with a 6.50-inch touchscreen display that offers a resolution of 720 ×1600 pixels. It is powered by an Octa-core MediaTek Helio P35 processor that makes it a fast-performance phone. The Vivo Y21 is powered by a 5000mAh battery that supports proprietary fast charging.'),
(4, 'vivo', 'Height: about 164.0mm  Width: about 75.4mm  Thickness: about 7.9mm  Weight: about 175g  *Product size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.'),
(6, 'oppo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in'),
(7, 'ooo', 'gghjgfjfjgj'),
(8, 'ghfhfhfh', 'Height: about 164.0mm  Width: about 75.4mm  Thickness: about 7.9mm  Weight: about 175g  *Product size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.'),
(9, 'fghdhgsgs', 'Height: about 164.0mm  Width: about 75.4mm  Thickness: about 7.9mm  Weight: about 175g  *Product size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.'),
(11, 'oppo', 'This week, Oppo launched the Find N2 and N2 Flip. The Find N2 is an evolution of the Find N with a thinner and lighter body, new hinge, a better camera system, and a much better display among other things. The Find N2 has a Snapdragon 8+ Gen 1 chip, a faster-charging battery (67W), and a 120Hz cover screen. The Find N2 will be available in China for now with no word on global availability.'),
(12, 'oppo', 'This week, Oppo launched the Find N2 and N2 Flip. The Find N2 is an evolution of the Find N with a thinner and lighter body, new hinge, a better camera system, and a much better display among other things. The Find N2 has a Snapdragon 8+ Gen 1 chip, a faster-charging battery (67W), and a 120Hz cover screen. The Find N2 will be available in China for now with no word on global availability.'),
(14, 'vivo', 'The X80 series did not have a Pro+ variant, meaning the X80 Pro was the flagship this time around. It launched in April, and at the time, it was everything you would want from a flagship - the best chipset from Qualco'),
(15, 'iphone', 'Height: about 164.0mm  Width: about 75.4mm  Thickness: about 7.9mm  Weight: about 175g  *Product size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `freetime` varchar(50) DEFAULT NULL,
  `problem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `freetime`, `problem`) VALUES
(10, 'sany', 'aros@abs', '0199', 'morning', 'vivo'),
(11, 'sany', 'abc@gmail.com', '01990000', '10am - 12 pm', 'vivo'),
(12, 'shopon', 'abcd@gmail.com', '0188990000', '4pm-6pm', 'oppo'),
(13, 'taife', 'taif@gmail.com', '018877000', '8pm-10pm', 'redmi'),
(14, 'ibrahim', 'ibrahim@gmail.com', '017788000', '7pm-8pm', 'oppo'),
(15, 'aros', 'aros@gmail.com', '0177998800', '2pm-8pm', 'i phone'),
(16, 'sany', 'aros@abs', '0199', '5pm- 8 pm', 'oppo');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`id`, `name`, `contact`) VALUES
(31, 'Junaet Islam ', '0467'),
(34, 'ibrahim', '017000000'),
(35, 'tanjim', '0199000000'),
(36, 'shamim', '0166000000'),
(37, 'arif', '016699000'),
(38, 'Junaet Islam ', '0199000000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `join_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `phone`, `email`, `address`, `job`, `salary`, `join_date`) VALUES
(1, 'junaet', '01736224711', 'junaetsany@gmail.com', 'dhaka', 'CEO', '30000', '2022-12-25'),
(5, 'Shamim', '018000000', 'Shamim@gmail.com', 'kanchon', 'Account manager', '20000', '2022-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productname`, `quantity`, `name`, `address`, `number`, `order_date`) VALUES
(11, 'redmi 9 power', '1', 'sany', 'koril', '017000000', '2022-01-05 00:00:00'),
(12, 'oppo f7', '2', 'Tanjim', 'dhaka', '018800000', '2022-01-04 00:00:00'),
(13, 'i phone 14', '1', 'shamim', 'kanchon', '01600000', '2022-01-05 00:00:00'),
(14, 'one+ 10', '1', 'shopon', 'uttara', '01900000', '2022-01-03 00:00:00'),
(15, 'vivo', '1', 'shopon', 'jatrabari', '01700600', '2022-01-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `buying_price` varchar(50) DEFAULT NULL,
  `selling_price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `category`, `quantity`, `supplier_name`, `buying_price`, `selling_price`) VALUES
(9, 'oppo', 'electronics', '20', 'sany', '20000', '22000'),
(10, 'vivo', 'electronics', '30', 'shopon', '25000', '27000'),
(11, 'redmi', 'electronics', '10', 'emon sab', '15000', '18000'),
(12, 'i phone', 'electronics', '15', 'shamim', '70000', '75000'),
(13, 'one +', 'electronics', '1', 'ripon', '50000', '53000'),
(14, 'itel', 'electronics', '0', 'sany', '20000', '22000'),
(15, 'lava', 'electronics', '0', 'shopon', '15000', '10000'),
(16, 'lava 2', 'electronics', '1', 'sany', '20000', '18000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
