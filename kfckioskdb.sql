

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `kfckioskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categorieId` int(12) NOT NULL,
  `categorieName` varchar(255) NOT NULL,
  `categorieDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorieId`, `categorieName`, `categorieDesc`) VALUES
(1, 'BURGERS', 'choose your favourite Special Burgers from KFC.'),
(2, 'HOT & CRISPY CHICKEN', 'Indulge into mouth-watering taste of HOT & CRISPY CHICKEN mania range, perfect answer to all your food cravings'),
(3, 'HOT DRUMLETS', 'A delight for HOT DRUMLETS lovers! Choose from our wide range of delicious HOT DRUMLETS, it is softer and tastier'),
(4, 'WRAPS & SUBMARINE', 'it is cheesy and tastier'),
(5, 'RICE', 'Special Biriyani for Rice lovers!'),
(6, 'SNACKS', 'Choose your snacks from the KFC menu.'),
(7, 'COMBOS', 'special combos are available'),
(8, 'ADD ONS', 'Perfect Add ons for you!'),
(9, 'BEVERAGE', 'wide range of beverages available at KFC'),
(10, 'PROMOTION', 'special promotion offers are available');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodId` int(12) NOT NULL,
  `foodName` varchar(255) NOT NULL,
  `foodPrice` int(12) NOT NULL,
  `foodDesc` text NOT NULL,
  `custom1` varchar(500) DEFAULT NULL,
  `custom2` varchar(500) DEFAULT NULL,
  `foodCategorieId` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodId`, `foodName`, `foodPrice`, `foodDesc`, `custom1`, `custom2`, `foodCategorieId`) VALUES
(1, 'Double Decker Burger', 1590, 'A hugely popular Double Decker Burger, with a deliciously tangy single cheese.', 'Extra Cheese', 'Medium Cheese', 1),
(2, 'SNACKER + CHEESE', 510, 'The ever-popular SNACKER + CHEESE- loaded with extra cheese.', 'Extra Cheese', 'Medium Cheese', 1),
(3, 'SNACKER', 430, 'special snacker', 'Extra Cheese', 'Medium Cheese', 1),
(4, 'VEGIE BURGER + CHEESE', 860, 'Chunky vegie with crisp capsicum and cheese', 'Extra Cheese', 'Medium Spices', 1),
(5, 'VEGIE BURGER', 780, 'special for VEGIE BURGER lovers!', 'Extra vegie', 'Medium vegie', 1),
(6, 'Zinger Burger With Cheese', 1070, 'cheese loaded Zinger Burger With Cheese', 'Extra Cheese', 'Medium Cheese', 1),
(7, 'Zinger Burger', 990, 'mouth watering Zinger Burger', 'Extra Cheese', 'Medium Cheese', 1),
(8, 'GRAVY', 80, 'KFCspecial GRAVY', 'Extra Spicy', 'Medium Spicy', 8),
(9, 'ONION SAMBOL', 180, 'KFC SPECIAL ONION SAMBOL', 'Extra lime & spicy', 'Medium lime & spicy', 8),
(10, 'RICE PILLAF', 290, 'KFC SPECIAL RICE PILLAF', 'Extra Spicy', 'Medium Spicy', 8),
(11, '7 UP ', 200, '500ML', 'Extra Cool', 'Medium Cool', 9),
(12, 'PEPSI', 200, '500ML', 'Extra Cool', 'Medium Cool', 9),
(13, 'MINERAL WATER', 90, '500ML', 'Extra Cool', 'Medium Cool', 9),
(14, 'Double Decker Combo', 1900, 'SPECIAL Double Decker Combo', 'Extra Spicy', 'Medium Spicy', 7),
(15, 'Twister COMBO', 1630, 'Special Twister COMBO', 'Extra Spicy', 'Medium Spicy', 7),
(16, 'Zinger Burger COMBO', 1630, 'Special Zinger Burger COMBO', 'Extra Spicy', 'Medium Spicy', 7),
(17, '1PC Chicken - CHOICE', 680, 'SPECIAL 1PC Chicken - CHOICE', 'Extra Spicy', 'Medium Spicy', 2),
(18, '1PC Chicken', 580, 'SPECIAL 1PC Chicken', 'Extra Spicy', 'Medium Spicy', 2),
(19, '2PC Chicken', 1060, 'SPECIAL 2PC Chicken', 'Extra Spicy', 'Medium Spicy', 2),
(20, '4PC Chicken', 1990, 'SPECIAL 8PC Chicken', 'Extra Spicy', 'Medium Spicy', 2),
(21, '8PC Chicken Bucket', 3880, 'SPECIAL 8PC Chicken', 'Extra Spicy', 'Medium Spicy', 2),
(22, '12PC Chicken', 5650, 'SPECIAL 12PC Chicken', 'Extra Spicy', 'Medium Spicy', 2),
(23, 'HOT DRUMLETS 3PCS', 490, 'SPECIAL HOT DRUMLETS 3PCS', 'Extra Crispy', 'Medium Crispy', 3),
(24, 'HOT DRUMLETS 6PCS', 1090, 'SPECIAL HOT DRUMLETS 6PCS', 'Extra Crispy', 'Medium Crispy', 3),
(25, 'HOT DRUMLETS 20PCS', 3490, 'SPECIAL HOT DRUMLETS 6PCS', 'Extra Crispy', 'Medium Crispy', 3),
(26, 'KFC Double Down', 1490, 'Special KFC Double Down', 'Extra Spicy', 'Medium Spicy', 10),
(27, 'KFC VALUE FAMILY COMBO', 3900, 'SPECIAL VALUE FAMILY COMBO', 'Extra Spicy', 'Medium Spicy', 10),
(28, 'KFC BURIYANI - L', 700, 'SPECIAL KFC BURIYANI - L', 'Extra Spicy', 'Medium Spicy', 5),
(29, 'KFC BURIYANI - R', 470, 'SPECIAL KFC BURIYANI - R', 'Extra Spicy', 'Medium Spicy', 5),
(30, 'KFC SAWAN', 4690, 'KFC SPECIAL SAWAN', 'Extra Spicy', 'Medium Spicy', 5),
(31, 'KFC SPICE RICE', 990, 'SPECIAL KFC SPICE RICE', 'Extra Spicy', 'Medium Spicy', 5),
(32, 'CRISPY BITES 9PC', 940, 'KFC CRISPY BITES 9PC', 'Extra Spicy', 'Medium Spicy', 6),
(33, 'CRISPY BITES 20PC', 1930, 'SPECIAL CRISPY BITES 20PC', 'Extra Crispy', 'Medium Crispy', 6),
(34, 'CRISPY STRIPS 2PC', 630, 'SPECIAL CRISPY STRIPS 2PC', 'Extra Crispy', 'Medium Crispy', 6),
(35, 'SUBMARINE REG.+ CHEESE', 730, 'SPECIAL SUBMARIN', 'Extra Cheese', 'Medium Cheese', 4),
(36, 'SUBMARINE REGULAR', 650, 'SPECIAL SUBMARINE REGULAR', 'Extra Cheese', 'Medium Cheese', 4),
(37, 'TWISTER + CHEESE', 1160, 'SPECIAL TWISTER + CHEESE', 'Extra Cheese', 'Medium Cheese', 4),
(38, 'TWISTER', 1080, 'SPECIAL KFC TWISTER', 'Extra Cheese', 'Medium Cheese', 4);

-- --------------------------------------------------------

--
-- Table structure for table `k_user`
--

CREATE TABLE `k_user` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(21) NOT NULL,
  `orderId` int(21) NOT NULL,
  `foodId` int(21) NOT NULL,
  `customize` varchar(500) DEFAULT NULL,
  `itemQuantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(21) NOT NULL,
  `userId` int(21) NOT NULL,
  `amount` int(200) NOT NULL,
  `orderStatus` int(1) NOT NULL COMMENT '0= not ready\r\n1=ready\r\n2=collected',
  `orderDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(21) NOT NULL,
  `username` varchar(21) NOT NULL,
  `firstName` varchar(21) NOT NULL,
  `lastName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `userType` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=chef\r\n1=admin',
  `password` varchar(255) NOT NULL,
  `joinDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `phone`, `userType`, `password`, `joinDate`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 1111111111, '1', '$2y$10$AAfxRFOYbl7FdN17rN3fgeiPu/xQrx6MnvRGzqjVHlGqHAM4d9T1i', '2021-04-11 11:40:58'),
(2, 'chef', 'chef1', 'chef2', 'chef@gmail.com', 0, '0', '$2y$10$bVqNRN2F/aJcgaHNDadRXuoWUM/64Vp7C1E4zbNB8vVixpPq2YAg2', '2023-02-26 11:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `viewcart`
--

CREATE TABLE `viewcart` (
  `cartItemId` int(11) NOT NULL,
  `foodId` int(11) NOT NULL,
  `itemQuantity` int(100) NOT NULL,
  `customize` varchar(500) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `addedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorieId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`);

--
-- Indexes for table `k_user`
--
ALTER TABLE `k_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `viewcart`
--
ALTER TABLE `viewcart`
  ADD PRIMARY KEY (`cartItemId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorieId` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodId` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `viewcart`
--
ALTER TABLE `viewcart`
  MODIFY `cartItemId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

