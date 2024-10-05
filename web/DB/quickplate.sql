-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user_name` varchar(50) NOT NULL,
  `admin_password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `restaurantID` int(11) DEFAULT NULL,
  `foodID` int(11) DEFAULT NULL,
  `riderID` int(11) DEFAULT NULL,
  `food_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `foodID` int(50) NOT NULL,
  `food_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(35, 'jayani adikari', '0741158604', 'jayaniadikari19@gmail.com', 'paypal', '385-A/4, new road', 'dtjcykjhlk', 'wennappuwa', 'srilanka', 'grzbd', 61170, 'Seafood Pizza (1) , Tandoori Chicken Pizza (1) , BBQ Pizza (1) , Devilled Chicken Pizza (1) , Club Sandwich (1) , Chicken Pasta (1) , Cappuccino (1) , Sparkling Mint Limeade (1) , Fish Tacos (1) , Shrimp Scampi (1) ', '111');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(27, 'Pizza', '45', 'https://cdn.tasteatlas.com/images/dishes/b05a0af72ad845f3a6abe16143d7853a.jpg?mw=2000'),
(28, 'Japanese Noodles', '36', 'https://www.healthygffamily.com/wp-content/uploads/2019/12/A516112C-3492-4BB4-852C-D51B22C49232-1536x1536.jpg'),
(29, 'Crispy Burger', '39', 'https://flaevor.com/wp-content/uploads/2020/09/BaconEggCheeseBurger-1.jpg'),
(30, 'French Fries', '20', 'https://goldenfingers.us/wp-content/uploads/2020/03/french_fry.jpg'),
(31, 'Chicken Nuggets', '39', 'https://thetoastedpinenut.com/wp-content/uploads/2017/08/IMG_5288.jpg'),
(32, 'BBQ', '45', 'https://feastio.com/wp-content/uploads/2023/01/Goldees-BBQ-tray.jpg'),
(33, 'Tandoori Chicken and Naan', '40', 'https://images.halaal.recipes/06-02-18/2018-02-06-10-54-10-86JQl.jpg'),
(34, 'Chicken Pasta with White Sauce', '35', 'https://www.pepperdelight.com/wp-content/uploads/2016/01/ChickenPasta1.jpg'),
(35, 'BBQ', '45', 'https://feastio.com/wp-content/uploads/2023/01/Goldees-BBQ-tray.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resturant`
--

CREATE TABLE `resturant` (
  `resturantID` int(50) NOT NULL,
  `resturant_name` varchar(50) NOT NULL,
  `food_type` varchar(50) NOT NULL,
  `food_ID` int(50) NOT NULL,
  `resturant_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `riderID` int(11) NOT NULL,
  `rider_name` varchar(50) NOT NULL,
  `vehicle_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `orders` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `address`, `email`, `orders`, `user_type`, `image`) VALUES
(20, 'adikari', '202cb962ac59075b964b07152d234b70', '385-A/4, new road', 'adikari@gmail.com', '', 'admin', 'girl-7630191_640.jpg'),
(22, 'jk', '202cb962ac59075b964b07152d234b70', '385-A/4, new road', 'jk@gmail.com', '', 'user', 'girl-7630191_640.jpg'),
(23, 'user', '202cb962ac59075b964b07152d234b70', '385-A/4, new road', 'user@gmail.com', '', 'user', 'girl-7630191_640.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`riderID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
