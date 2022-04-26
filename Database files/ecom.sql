-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2022 at 08:59 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `admin_user_name`, `admin_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `c_description` varchar(300) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `c_description`) VALUES
(13, 'cameras', 'All kind of cameras'),
(12, 'Electronics', 'Electronic items'),
(14, 'Beauty and cosmetics', 'Beauty & cosmetic items'),
(15, 'Watches', 'branded watches'),
(16, 'Shoes', 'Branded shoes');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `p_brand` varchar(50) NOT NULL,
  `p_color` varchar(50) NOT NULL,
  `orginal_price` int(20) NOT NULL,
  `selling_price` int(20) NOT NULL,
  `p_description` varchar(300) NOT NULL,
  `p_image` varchar(250) NOT NULL,
  `p_qty` int(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `p_brand`, `p_color`, `orginal_price`, `selling_price`, `p_description`, `p_image`, `p_qty`) VALUES
(11, 13, 'Nikon Coolpix L340', 'nikon', 'black', 65000, 75000, '3 year warrenty', '02.png', 5),
(10, 13, 'canon digital SLR', 'canon', 'black', 70000, 80000, '5 year warrenty', '01.png', 5),
(12, 13, 'Nikon D90 ', 'nikon', 'black', 85000, 95000, '5 year warrenty', '03.png', 5),
(13, 13, 'Epic Camera', 'nikon', 'black', 60000, 68000, '3 year warrenty', '04.png', 5),
(14, 13, 'Telephoto Lens', 'Vivitar ', 'black & white', 75000, 80000, '5 year warrenty', '05.png', 6),
(15, 13, 'Mobile Lens', 'iPad iPhone Samsung', 'black', 650, 1000, '3 month warrenty', '06.png', 25),
(16, 13, 'Network Camera', 'CIVS-IPC-4300E 4300E ', 'white', 1200, 1900, '3 month warrenty', '07.png', 20),
(17, 13, 'IP Camera', 'PTZ', 'white', 16000, 20000, '10 month warrenty', '08.png', 15),
(18, 13, 'Camera Tripod', 'drid', 'black', 2200, 3000, '3 month warranty', '09.png', 15),
(19, 13, 'Axis Gimbal', 'Zhiyun', 'black', 55000, 60000, '2 year warranty', '10.png', 5),
(20, 13, 'Camera Backpack', 'Rucksack', 'black', 8000, 10000, 'branded', '11.png', 50),
(21, 13, 'Sony Battery Charger', 'Sony', 'black', 8500, 10000, '3 month warranty', '12.png', 25),
(22, 14, 'Night face cream', 'JERGENS', 'various', 2000, 2300, 'facewash & cream', '01.png', 20),
(23, 14, 'Face Care Pack', 'facia', 'black', 2000, 2500, 'Anti-cellulite, firming, moisturising, nourish, protective, regeneration.', '02.png', 25),
(24, 14, 'Makeup Brush set', 'facia', 'black', 500, 800, '12pcs Pear Makeup Brush set Foundation Powder Concealers cosmetic brush sets.', '03.png', 25),
(25, 14, 'Lipstick', 'fiona', 'various', 750, 1000, 'Travel Kit Long-Lasting Waterproof Lipstick Matte Lip Gloss Demo Set', '04.png', 30),
(26, 14, 'Face cream', 'certify', 'various', 1000, 1300, 'Regenerating anti-aging day cream with organic pomegranate seed oil. Supports cell renewal and helps the skin to retain moisture.', '05.png', 50),
(27, 14, 'Green Tea Cream', 'certify', 'white', 1500, 1800, 'Anti-cellulite, firming, moisturising, nourish, protective, regeneration.', '06.png', 50),
(28, 14, 'Beauty set', 'facia', 'various', 2300, 2600, 'This organic beauty set includes Green radiance face cream 50ml, energizing face peeling 75ml and regenerating night face cream 25ml.', '08.png', 30),
(29, 14, 'Night face cream', 'diodrty', 'white', 2000, 2300, 'The application of this stimulating anti-aging organic intensive creme for the night with organic royal jelly is an evening ritual which supports your natural beuty', '09.png', 50),
(30, 14, 'Day face cream', 'diodrty', 'white', 2000, 2100, 'Regenerating anti-aging day cream with organic pomegranate seed oil. Supports cell renewal and helps the skin to retain moisture.', '10.png', 50),
(31, 14, 'Vitalizing shampoo', 'diodrty', 'white', 1900, 2100, 'Gentle moisturizing sls free shampoo with organically grown aloevera, honey and shea butter. Protects the scalp and hair from drying out.', '11.png', 50),
(32, 14, 'Makeup set', 'diodrty', 'various', 4000, 5000, 'Sephora Favorites SUNKISSED GLOW Bronzer & Highlighting 7 Pc Set', '12.png', 100),
(33, 14, 'Large makeup set', 'fiona', 'various', 7000, 8000, 'SUNKISSED GLOW Bronzer & Highlighting 7 Pc Set', '14.png', 50),
(34, 15, 'Apple watch', 'apple', 'gold', 4000, 5000, 'Apple Watch SE 44MM (GPS) - Aluminium Case with Sport Band', '01.png', 20),
(35, 15, 'ladies watch', 'casio', 'silver', 1500, 2000, 'Aluminium Sport Band', '02.png', 50),
(36, 15, 'Yellow Rolesor watch', 'Rolesor', 'gold', 3000, 4000, 'This Oyster Perpetual Cosmograph Daytona in Yellow Rolesor, with a black dial and an Oyster bracelet, features an 18 ct yellow gold bezel with engraved tachymetric scale.\r\n', '03.png', 50),
(37, 15, 'Gold Rolex', 'Rolex', 'gold', 13500, 15000, 'The defining feature of this particular family is the inclusion of a 10-minute countdown timer, which is fitted with its own mechanical memory and has integrated bezel functionality. ', '04.png', 50),
(38, 15, 'Bracelet Watch', 'bracelet', 'gray', 800, 1000, 'W2420 - Silver & Gold Mixed Contena Watch', '05.png', 50),
(39, 15, 'Watch 5 Series', 'niar', 'black', 5000, 6000, 'This smartwatch has all the next level features one could look for with long battery life and most importantly t55 comes with dual straps one the holed nike edition straps and the other with hard solid look.', '06.png', 50),
(40, 15, 'Watch 6 Series', 'ios', 'white', 7000, 8000, 'Women Smart Watch Heart Rate Smart Wristband Sports Band Tracker Watches Smart Band Fitness Male and female unisex Waterproof Smartwatch for Android iOS Stylish Wrist watch', '07.png', 50),
(41, 15, 'Shock watch', 'SKMEI', 'brown', 8500, 10000, 'SKMEI Sports Watches Men Waterproof Watch Alarm LED Back Light Shock Digital Wristwatches', '08.png', 50),
(42, 15, 'Ladies watch Rose gold', 'sky', 'pink', 750, 1000, 'Luxury Rose Gold Women Watches Fashion Diamond Ladies Starry Sky Magnet Watch Waterproof', '09.png', 50),
(43, 15, 'Rolex Submariner', 'Rolex', 'silver', 18000, 20000, 'Rolex Submariner Luxury Stainless Steel Wrist Watch For Men', '10.png', 75),
(44, 15, 'Fitness Bracelet', 'HAYLOU', 'white', 7000, 8000, 'HAYLOU LS02 Smart Watch 2 1.4inch LCD Screen BT 5.0 12 Sports Modes IP68 Waterproof 20 Days Standby Wristwatch Heart Rate Fitness Bracelet', '11.png', 50),
(45, 15, 'Quartz watch', 'Quatz', 'black', 7000, 8000, 'Hot Fashion Men Quartz Analog Leather Black Business Male Watch', '12.png', 50),
(46, 12, 'Gaming key board', 'ROG', 'black', 2000, 2500, 'ROG Strix Flare RGB mechanical gaming keyboard with Cherry MX switches, customizable illuminated badge and dedicated media keys for gaming.', '01.png', 100),
(47, 12, 'Bluetooth headset', 'P47', 'white', 2000, 3000, 'Original P47 Wireless headphone Bluetooth headset bluetooth earphones Hiqh quality sound wireless Headset.\r\n', '02.png', 100),
(48, 12, 'Sony headset', 'Sony', 'black', 7500, 8000, 'SONY Extra Bass Wireless Stereo Bluetooth Headset Over-Ear Headphones With Mic For SAMSUNG,I PHONE APPLE ANDROID,PC', '03.png', 100),
(49, 12, 'Hp computer', 'hp', 'black', 30000, 32000, 'HP Full set System intel Core i5 2nd Gen 8GB DDR3 Ram 500GB HDD Widescreen Monito\r\n', '04.png', 40),
(50, 12, 'Power bank', 'intex', 'black', 2500, 3000, 'INTEX 10000mAH Li-Polymer Power Bank Strong(White) with Fast Charging', '05.png', 100),
(51, 12, 'Arduino Uno', 'arduino', 'black', 800, 1000, 'Arduino Uno R3 Atmega328P Atmega16U2 for Arduino Compatible with usb cable', '06.png', 100),
(52, 12, 'Laser printer', 'samsung', 'black', 10000, 12000, 'The Samsung ML-2166W printer makes instant mobile printing possible with ease and simplicity.', '07.png', 50),
(53, 12, 'Apple iPhone 6s', 'apple', 'white', 32000, 35000, 'Apple iPhone 6s Â· Display 4.70-inch (750x1334) , Processor Apple A9 , Front Camera 5MP , Rear Camera 12MP , RAM 2GB , Storage 64GB ', '08.png', 100),
(54, 12, 'Samsung Galaxy S7 edge', 'samsung', 'black', 37000, 40000, 'Samsung Galaxy S7 edge Android smartphone. Features 5.5â€³ Super AMOLED display, Snapdragon 820 chipset, 12 MP primary camera, 5 MP front camera, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 4.', '09.png', 100),
(55, 12, 'Air conditioner', 'Haier', 'red and silver', 15000, 18000, 'Haier 18000BTU R410A Fixed Speed Non Inverter Air Conditioner with 5 Year Abans warranty.', '10.png', 50),
(56, 12, 'Microphone', 'lavivar', 'black', 1000, 1200, 'Lavalier Microphone Digital Decoding for Youtubers, Voice Record Mic - N - P2 Mini 30Hz - 15000Hz 3.5mm Connecter Audio Recoder.', '11.png', 100),
(57, 12, 'Mavic Air 2', 'marvic', 'red and white', 85000, 90000, 'Mavic Air 2 takes camera and flight performance to the next level with 48MP photos, 4K/60fps video, up to 34 minutes of flight time, and more.', '12.png', 50),
(58, 16, 'Nike ZX', 'nike', 'black & orange', 4500, 5000, 'The road to athletic greatness is not marked by perfection, but the ability to constantly overcome adversity and failure.', '01.png', 100),
(59, 16, 'Saucony Omni', 'saucony', 'red & white', 4500, 5000, 'Saucony Omni ISO 2 has a wide toe box.According to several testers, the shoe is supportive.The running shoe is well-cushioned.', 's1.png', 100),
(60, 16, 'Nike metcon 5', 'nike', 'various', 14000, 15000, 'Train harder with more stability and durability in the NikeÂ® Metcon 5 training shoes.', 's3.png', 100),
(61, 16, 'UA SpeedForm AMP', 'UA', 'various', 10000, 11000, 'The shoe is lightweight and UA technology gives the arch of your foot the freedom', 's2.png', 100),
(62, 16, 'UA Rock Delta', 'UA', 'black ', 7000, 8000, 'The UA Rock Delta is an exclusive version of the UA Delta Highlight trainer â€” designed by Yurri Mial.', 's4.png', 100),
(63, 16, 'Nike Air Max Verona', 'nike', 'blue', 7000, 8000, 'its leather, synthetic and textile upper features a plush collar, flashy colors and unique stitching patterns.', 's5.png', 100),
(64, 16, 'HOVR Phantomber', 'HOVR', 'white', 6000, 7000, 'HOVR Phantom Shoes compression mesh Energy Web that contains and molds UA HOVRâ„¢ foam to give back the energy you put in.', 's6.png', 100),
(65, 16, 'Nike Basketball Shoes', 'nike', 'black & white', 12000, 13000, 'Strategically placed Kurimmaterial that feels almost like a second skin white giving you lightweight flexibility and lasting support.', 's8.png', 100),
(66, 16, 'Nike Kyrie Shoes', 'nike', 'gray', 7000, 8000, 'A new Flex Groove delivers excellent flexibility and traction to help you find your groove.', 's9.png', 100),
(67, 16, 'AU Training Shoes', 'Au', 'black & white', 4000, 5000, 'These shoes were built for athletes who amp up their training with higher intensity bursts of activity and cardio.', 's10.png', 100),
(68, 16, 'Brooks Ghost 12', 'brook', 'red & white', 7000, 8000, 'More important thing is finding the right running shoe to avoid injury and up your fitness', 's11.png', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_address` varchar(300) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_telno` int(11) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
