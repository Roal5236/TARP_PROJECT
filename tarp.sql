-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 09:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(5) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `back` varchar(100) NOT NULL,
  `button1` varchar(100) NOT NULL,
  `button2` varchar(100) NOT NULL,
  `Service_1` varchar(100) NOT NULL,
  `service_1_des` varchar(100) NOT NULL,
  `Service_2` varchar(100) NOT NULL,
  `service_2_des` varchar(100) NOT NULL,
  `Service_3` varchar(100) NOT NULL,
  `service_3_des` varchar(100) NOT NULL,
  `Product_1` varchar(50) NOT NULL,
  `product_1_price` varchar(4) NOT NULL,
  `product_1_img` varchar(100) NOT NULL,
  `Product_2` varchar(50) NOT NULL,
  `product_2_price` varchar(4) NOT NULL,
  `product_2_img` varchar(100) NOT NULL,
  `Product_3` varchar(50) NOT NULL,
  `product_3_price` varchar(4) NOT NULL,
  `product_3_img` varchar(100) NOT NULL,
  `Product_4` varchar(50) NOT NULL,
  `product_4_price` varchar(4) NOT NULL,
  `product_4_img` varchar(100) NOT NULL,
  `Product_5` varchar(50) NOT NULL,
  `product_5_img` varchar(100) NOT NULL,
  `product_5_price` varchar(4) NOT NULL,
  `Product_6` varchar(50) NOT NULL,
  `product_6_img` varchar(100) NOT NULL,
  `product_6_price` varchar(4) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `State` varchar(50) NOT NULL,
  `LatLang` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `Zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `company_name`, `Title`, `Description`, `back`, `button1`, `button2`, `Service_1`, `service_1_des`, `Service_2`, `service_2_des`, `Service_3`, `service_3_des`, `Product_1`, `product_1_price`, `product_1_img`, `Product_2`, `product_2_price`, `product_2_img`, `Product_3`, `product_3_price`, `product_3_img`, `Product_4`, `product_4_price`, `product_4_img`, `Product_5`, `product_5_img`, `product_5_price`, `Product_6`, `product_6_img`, `product_6_price`, `Address`, `State`, `LatLang`, `email`, `phno`, `fax`, `Zipcode`) VALUES
(1, 'Mahalakshmi Stores', 'We sell groceries, branded food products and stationery items', 'Grocery, fruits, vegetables, food items', 'back3.jpg', 'Explore', 'Overview', 'Fruits and Vegetables', 'Fresh Fruits and Vegetables delivered fresh from the local farms.', 'Online Delivery', 'Delivery in 20 min.', 'Offers', 'Buy 3 get 1 Free on Cereal', 'Apple', '10', 'a1.jpg', 'Banana', '10', 'a2.jpg', 'Cherry', '10', 'a3.jpg', 'Dates', '10', 'a4.jpg', 'Mango', 'a5.jpg', '10', 'Oranges', 'a6.jpg', '10', 'Shop 1034, Near VIT Chennai, Kelambakkam Road, Chennai', 'Tamil Nadu', '12, 80', 'xyz@gmail.com', '765901234', '7550267234', '600048'),
(2, 'Shri Balaji Apparels', 'We sell clothes, accessories, apparels', 'clothes, accessories, apparels, bags, shoes', 'back3.jpg', 'Explore', 'Overview', 'Repair', 'We also carry out repair work of apparels at our facility', 'Genuine Products', 'Our products are 100% original and durable', 'Order Online', 'Customers can order products online. We provide free delivery', 'Blue Denim Jeans', '700', 'p1.jpg', 'Black Jacket', '800', 'p2.jpg', 'Yellow Shorts', '450', 'p3.jpg', 'White Top', '500', 'p4.jpg', 'Black Shoes', 'p5.jpg', '800', 'Grey Handbag', 'p6.jpg', '1000', 'No-3A, 3rd Cross, Ramalinga Street, Near VIT Chennai, Kelambakkam Road, Chennai', 'Tamil Nadu', '13.05, 80.18', 'abc@gmail.com', '6776698320', '4566768945', '600127'),
(3, 'Shri Agarwal Bhavan', 'We sell authentic sweets, snacks, fast food', 'sweets, snacks, fast food', 'back3.jpg', 'Explore', 'Overview', 'Authentic Sweets', 'We have a collection of sweets from all over India', 'Fresh Items', 'Our food products are 100% fresh and are prepared daily', 'Online Delivery', 'We deliver to your place (it should be within 3 km radius)', 'Kaju Katli', '450', 'p1.jpg', 'Gulab Jamun', '500', 'p2.jpg', 'Rasmalai', '650', 'p3.jpg', 'Rasgulla', '350', 'p4.jpg', 'Peda', 'p5.jpg', '500', 'Ladoo', 'p6.jpg', '400', 'No. 34, Near VIT Chennai, Kelambakkam Road, Chennai', 'Tamil Nadu', '14, 80', 'cvb@gmail.com', '8899776677', '5566776677', '600048'),
(4, 'Tirya Organic World', 'We sell herbal beauty products, ayurvedic health supplements and more', 'ayurveda, beauty, health, organic', 'back3.jpg', 'Explore', 'Overview', 'Ayurvedic Products', 'We sell 100% herbal and ayurvedic products', 'Online Delivery', 'We offer online delivery of products', 'Doctor consultancy', 'We have an Ayurveda doctor at our place', 'Health Herbal Capsule', '300', 'p1.jpg', 'Palm Oil', '200', 'p2.jpg', 'Olive Oil', '350', 'p3.jpg', 'Aloe Vera Cream', '300', 'p4.jpg', 'Coconut Oil', 'p5.jpg', '200', 'Energy Bar', 'p6.jpg', '50', '25/1, Saligramam, Near VIT Chennai, Kelambakkam Road, Chennai', 'Tamil Nadu', '14, 81', 'ghf@gmail.com', '7766778835', '9898989898', '600048'),
(5, 'Lime Light', 'We sell clothes and bags', 'clothes, bags', 'back3.jpg', 'Explore', 'Overview', 'Tailoring', 'We offer tailoring services at our facility', 'Online Delivery', 'Just choose some products and we will be happy to deliver them to you at your place', 'Variety', 'We Offer a variety of clothing options and bags', 'School Bag', '850', 'p1.jpg', 'Pink Handbag', '400', 'p2.jpg', 'Pink Top', '700', 'p3.jpg', 'Blue Levi\'s Jeans', '800', 'p4.jpg', 'White Tank', 'p5.jpg', '400', 'Blue Checked Shirt', 'p6.jpg', '750', 'No. 13, Jains West Minster, Near VIT Chennai, Chennai', 'Tamil Nadu', '12, 81', 'tys@gmail.com', '7766775534', '7788534513', '600048');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `qty` int(4) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `company_name`, `product_name`, `date`, `qty`, `user_id`) VALUES
(1, 'xyz inc.', 'Shampoo', '24-03-2019', 2, 'rohaan'),
(2, 'abc', 'Soap', '12-12-2019', 1, 'rohaan'),
(3, 'abc', 'Soap', '12-12-2019', 1, 'rohaan'),
(4, 'xyzinc.', 'Shampoo', '24-11-2019', 2, 'Rohaan'),
(5, 'xyzinc.', 'Shampoo', '24-03-2019', 2, 'Rohaan'),
(6, 'xyzinc.', 'Shampoo', '24-03-2019', 2, 'Rohaan'),
(7, 'xyzinc.', 'Shampoo', '24-03-2019', 8, 'Rohaan'),
(8, 'xyzinc.', 'Shampoo', '24-03-2019', 1, 'Rohaan'),
(9, 'xyzinc.', 'Shampoo', '24-03-2019', 1, 'Rohaan'),
(10, 'xyzinc.', 'Soap', '24-03-2019', 1, 'Rohaan'),
(11, 'xyzinc.', 'Tooth Paste', '24-03-2019', 1, 'Rohaan'),
(12, 'xyzinc.', 'Conditioner', '24-03-2019', 1, 'Rohaan'),
(13, 'xyzinc.', 'Moisturizer', '24-03-2019', 1, 'Rohaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
