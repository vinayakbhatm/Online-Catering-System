-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 08:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `sh_contact`
--

-- Table structure for table `sh_contact`
CREATE TABLE IF NOT EXISTS `sh_contact` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `sh_fullname` VARCHAR(50) NOT NULL,
  `sh_email` VARCHAR(50) NOT NULL,
  `sh_mobile` VARCHAR(16) NOT NULL,
  `sh_subject` VARCHAR(500) NOT NULL,
  `sh_datetime` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table `sh_contact`
INSERT INTO `sh_contact` (`sh_fullname`, `sh_email`, `sh_mobile`, `sh_subject`, `sh_datetime`) VALUES
('Sara Khan', 'sara.khan@gmail.in', '98765 12345', 'Good Afternoon Multicuisine, I would like to know if you provide services to accommodate over 2,000 people.', '1700490000'),
('Priya Sharma', 'priya.sharma@gmail.com', '98765 54321', 'Product Information Request', '1700738100'),
('Amit Patel', 'amit.patel@gmail.com', '98765 65432', 'Delivery Inquiry', '1700929800'),
('Sneha Gupta', 'sneha.gupta@gmail.in', '98765 76543', 'Wedding Catering Inquiry', '1701109800');

-- Table structure for table `sh_order`
CREATE TABLE IF NOT EXISTS `sh_order` (
   `id` INT AUTO_INCREMENT PRIMARY KEY,
  `sh_fullname` TEXT NOT NULL,
  `sh_email` VARCHAR(50) NOT NULL,
  `sh_mobile` VARCHAR(15) NOT NULL,
  `sh_companyname` VARCHAR(50) NOT NULL,
  `sh_budget` INT NOT NULL,
  `sh_people` INT NOT NULL,
  `sh_function` VARCHAR(50) NOT NULL,
  `sh_menu` VARCHAR(50) NOT NULL,
  `sh_service` VARCHAR(50) NOT NULL,
  `sh_menuitems` VARCHAR(50) NOT NULL,
  `sh_addressvenue` VARCHAR(50) NOT NULL,
  `sh_datetime` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table `sh_order`
INSERT INTO `sh_order` (`sh_fullname`, `sh_email`, `sh_mobile`, `sh_companyname`, `sh_budget`, `sh_people`, `sh_function`, `sh_menu`, `sh_service`, `sh_menuitems`, `sh_addressvenue`, `sh_datetime`) VALUES
('Rajesh Verma', 'rajesh.verma@gmail.com', '98750 43210', 'none', 20000, 100, 'Corporate event', 'Dinner', 'Staff Required', 'Biryani,Tikka,Nan,Curry ', 'Vijayanagar', 1700820000);

-- Table structure for table `sh_admin`
CREATE TABLE IF NOT EXISTS `sh_admin` (
  `sh_id` BIGINT AUTO_INCREMENT PRIMARY KEY,
  `sh_admin` VARCHAR(50) NOT NULL,
  `sh_pass` VARCHAR(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `sh_admin`
INSERT INTO `sh_admin` (`sh_admin`, `sh_pass`) VALUES
('Anoop', '81dc9bdb52d04dc20036dbd8313ed055'),
('Manjunatha', '81dc9bdb52d04dc20036dbd8313ed055'),
('Thathva', '81dc9bdb52d04dc20036dbd8313ed055'),
('Vinayak', '81dc9bdb52d04dc20036dbd8313ed055');

-- Table structure for table `sh_feedback`new
CREATE TABLE IF NOT EXISTS `sh_feedback` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT,
    `fullname` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255),
    `message` TEXT NOT NULL,
    `datetime` DATETIME,
    FOREIGN KEY (`order_id`) REFERENCES `sh_order`(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table `sh_feedback`
INSERT INTO `sh_feedback` (`order_id`, `fullname`, `email`, `message`, `datetime`)
VALUES (1, 'Rajesh Verma', 'rajesh.verma@gmail.com', 'It was a good experience', '2023-11-02 12:30:00');


-- Table structure for table `sh_menu_items`
CREATE TABLE IF NOT EXISTS `sh_menu_items` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `item_name` VARCHAR(50) NOT NULL,
  `description` TEXT,
  `price` DECIMAL(10, 2) NOT NULL,
  `category` VARCHAR(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table `sh_menu_items`
INSERT INTO `sh_menu_items` (`item_name`, `description`, `price`, `category`) VALUES
('Chicken Biryani', 'Delicious chicken biryani with aromatic spices.', 200, 'Main Course'),
('Vegetable Curry', 'A mix of fresh vegetables in a flavorful curry sauce.', 150, 'Main Course'),
('Paneer Tikka', 'Grilled paneer cubes marinated in a special blend of spices.', 135, 'Starters'),
('Garlic Naan', 'Soft and fluffy naan bread with a hint of garlic.', 60, 'Bread'),
('Tandoori Chicken', 'Spiced and grilled chicken with a smoky flavor.', 250, 'Main Course'),
('Palak Paneer', 'Paneer cubes in a creamy spinach curry.', 180, 'Main Course'),
('Samosa', 'Crispy pastry filled with spiced potatoes and peas.', 70, 'Starters'),
('Butter Chicken', 'Tender chicken in a rich and buttery tomato sauce.', 200, 'Main Course'),
('Aloo Paratha', 'Whole wheat bread stuffed with spiced potatoes.', 80, 'Bread'),
('Mutton Biryani', 'Flavorful biryani with succulent mutton pieces.', 300, 'Main Course'),
('Chana Masala', 'Chickpeas in a tangy and spicy tomato-based sauce.', 160, 'Main Course'),
('Pakora', 'Deep-fried fritters with a variety of vegetables.', 90, 'Starters'),
('Dal Makhani', 'Creamy black lentils slow-cooked with spices.', 200, 'Main Course'),
('Roti', 'Whole wheat flatbread, a staple in Indian cuisine.', 40, 'Bread'),
('Fish Curry', 'Fish cooked in a flavorful and tangy curry.', 220, 'Main Course'),
('Bhindi Masala', 'Okra cooked with onions, tomatoes, and spices.', 150, 'Main Course'),
('Vegetable Biryani', 'Fragrant basmati rice with mixed vegetables.', 180, 'Main Course'),
('Chicken Korma', 'Chicken in a rich and creamy cashew nut sauce.', 230, 'Main Course'),
('Papadum', 'Thin and crispy lentil wafers, a popular appetizer.', 25, 'Starters'),
('Egg Curry', 'Hard-boiled eggs in a spiced tomato-based curry.', 160, 'Main Course'),
('Gulab Jamun', 'Soft and spongy milk dumplings in sugar syrup.', 90, 'Dessert'),
('Raita', 'Yogurt with cucumber, mint, and spices.', 50, 'Side Dish');


-- AUTO_INCREMENT for table `sh_menu_items`
ALTER TABLE `sh_menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sh_contact`
--
ALTER TABLE `sh_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sh_order`
--
ALTER TABLE `sh_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sh_admin`
--
ALTER TABLE `sh_admin`
  MODIFY `sh_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;