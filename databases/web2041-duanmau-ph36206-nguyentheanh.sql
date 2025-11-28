-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2025 at 09:44 AM
-- Server version: 8.0.30
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2041-duanmau-ph36206-nguyentheanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `category_id`) VALUES
(1, 'MacBook Pro', 'MacBook Pro là dòng laptop của Apple, nổi bật với thiết kế mỏng nhẹ, hiệu năng ổn định, màn hình sắc nét, pin lâu, và hệ điều hành macOS tối ưu mượt mà.\nThường nặng nhưng rất mạnh', 1),
(2, 'Imac', 'Máy tính để bàn All-in-One của Apple, có màn hình lớn sắc nét, thiết kế gọn đẹp, hiệu năng mạnh và phù hợp làm việc lẫn sáng tạo.', 2),
(3, 'MacBook Air', 'MacBook Air là dòng laptop của Apple, nổi bật với thiết kế mỏng nhẹ, hiệu năng ổn định, màn hình sắc nét, pin lâu, và hệ điều hành macOS tối ưu mượt mà.\nDòng Air nhẹ nhàng', 3),
(4, 'Mac Mini', 'Máy tính để bàn cỡ nhỏ, tiết kiệm không gian, giá dễ tiếp cận, nhưng vẫn có hiệu năng cao; cần gắn màn hình, chuột, bàn phím riêng.', 4),
(5, 'Mac Studio', 'Máy tính để bàn hiệu năng cực mạnh dành cho dân chuyên nghiệp như dựng phim, 3D, âm thanh; thiết kế nhỏ gọn nhưng cấu hình rất cao.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `status`) VALUES
(3, 1, 1, 'Nước Coca Cola vị chanh rất ngon', 0),
(4, 2, 2, 'Siêu ngon luôn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `image`) VALUES
(1, 1, 'MacBook Pro 14\" M3', 'Hiệu năng mạnh, màn 14\", pin tốt', 42000000, 10, 'products/macbook-pr-m4-1.jpg'),
(2, 1, 'MacBook Pro 16\" M3 Max', 'Siêu mạnh cho đồ họa, màn lớnx', 72000000, 34, 'products/macbook-pro-16-m3-max.png'),
(3, 1, 'MacBook Pro 14\" M1 Pro', 'Ổn định, hiệu năng cao', 32000000, 123, 'products/MacBook-Pro-M1-14-inch-4.png'),
(4, 3, 'MacBook Air M1', 'Mỏng nhẹ, pin trâu', 19000000, 12, 'products/mac_air_m1.jpg'),
(5, 3, 'MacBook Air M4 15\"', 'Màn lớn, nhẹ, hiệu năng cao', 34000000, 23, 'products/macbook-air-15-m4.jpg'),
(6, 3, 'MacBook Air M4 15', 'Thiết kế mới, hiệu năng tốt', 27000000, 9, 'products/macbook-air-m4.jpg'),
(7, 2, 'iMac 24\" M1', 'All-in-one, màn đẹp|\r\nMàu Blue', 28000000, 10, 'products/imac-blue.jpg'),
(8, 2, 'iMac 24\" M3', 'Thiết kế mỏng, hiệu năng mạnh\r\nMàu Green', 35000000, 32, 'products/imac-green.jpg'),
(9, 2, 'iMac 27\" Intel', 'Màn lớn, ổn định\r\nMàu Silver', 38000000, 10, 'products/imac-silver.jpg'),
(10, 4, 'Mac mini M5', 'Nhỏ gọn, tiết kiệm điện', 12000000, 15, 'products/mac-mini-m5-1.jpg'),
(11, 5, 'Mac Studio M3 Max', 'Tăng hiệu năng, mát hơn', 55000000, 3, 'products/mac-stuidio-m3-max.jpg\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `is_main` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(1, 'Nguyễn T.Anh', 'anhhh13245@gmail.com', '123456', 0),
(2, 'Admin NTA', 'adminnta999@gmail.com', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categories_categories` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_users` (`user_id`),
  ADD KEY `fk_comments_products` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_category` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_images_products` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_categories_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_comments_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_product_images_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
