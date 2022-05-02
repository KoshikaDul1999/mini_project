-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2022 at 11:33 AM
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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_product_price` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cart_id`,`product_id`),
  UNIQUE KEY `cart_id` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `p_name`, `unit_price`, `qty`, `total_product_price`, `time`) VALUES
(26, 174, 'Cotton T-Shirt', 2800, 1, NULL, '2022-04-28 21:44:42'),
(27, 129, 'Camera Backpack', 10000, 1, NULL, '2022-04-28 21:48:30'),
(28, 196, 'Nike Air Max Verona', 8000, 1, NULL, '2022-04-29 09:32:11');

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `c_description`) VALUES
(12, 'Electronics', 'Electronic items'),
(14, 'Beauty and cosmetics', 'Beauty & cosmetic items'),
(15, 'Watches', 'branded watches'),
(16, 'Shoes', 'Branded shoes'),
(24, 'Men clothing', 'Branded'),
(23, 'Women clothing', 'Branded '),
(26, 'cameras', 'All type of cameras');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `paymentmethod` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `name`, `email`, `phone`, `address`, `paymentmethod`) VALUES
(1, 'Gagana Chiranjitha', 'gaganachiranjithacoc2@gmail.com', 777123456, 'C3/4 Temple Road,colombo 10', 'creditcard');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_product_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`cart_id`,`product_id`),
  UNIQUE KEY `cart_id` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cart_id`, `product_id`, `p_name`, `unit_price`, `qty`, `total_product_price`) VALUES
(22, 191, 'Nike ZX', 5000, 1, NULL),
(23, 191, 'Nike ZX', 5000, 1, NULL),
(24, 176, 'Cotton T-Shirt', 1000, 1, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=207 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `p_brand`, `p_color`, `orginal_price`, `selling_price`, `p_description`, `p_image`, `p_qty`) VALUES
(197, 16, 'HOVR Phantomber', 'HOVR', 'white and gray', 6000, 7000, 'HOVR Phantom Shoes compression mesh Energy Web that contains and molds UA HOVRâ„¢ foam to give back the energy you put in.', 's6.png', 100),
(196, 16, 'Nike Air Max Verona', 'nike', 'blue', 7000, 8000, 'its leather, synthetic and textile upper features a plush collar, flashy colors and unique stitching patterns.', 's5.png', 100),
(193, 16, 'UA SpeedForm AMP', 'UA', 'black & white', 10000, 11000, 'The shoe is lightweight and UA technology gives the arch of your foot the freedom', 's2.png', 100),
(191, 16, 'Nike ZX', 'nike', 'gray', 4000, 5000, 'The road to athletic greatness is not marked by perfection, but the ability to constantly overcome adversity and failure.', 's01.png', 200),
(189, 12, 'Microphone', 'lavivar', 'black', 1000, 1200, 'Lavalier Microphone Digital Decoding for Youtubers, Voice Record Mic - N - P2 Mini 30Hz - 15000Hz 3.5mm Connecter Audio Recoder.', 'e11.png', 150),
(188, 12, 'Air conditioner', 'Haier', 'red & white', 15000, 18000, 'Haier 18000BTU R410A Fixed Speed Non Inverter Air Conditioner with 5 Year Abans warranty.', 'e10.png', 50),
(187, 12, 'Samsung Galaxy S7 edge', 'samsung', 'black', 35000, 40000, 'Samsung Galaxy S7 edge Android smartphone. Features 5.5â€³ Super AMOLED display, Snapdragon 820 chipset, 12 MP primary camera', 'e9.png', 150),
(186, 12, 'Apple iPhone 6s', 'apple', 'white', 32000, 35000, 'Apple iPhone 6s Â· Display 4.70-inch (750x1334) , Processor Apple A9 , Front Camera 5MP , Rear Camera 12MP , RAM 2GB , Storage 64GB Â·', 'e8.png', 50),
(185, 12, 'Laser printer', 'intex', 'black', 10000, 12000, 'The Samsung ML-2166W printer makes instant mobile printing possible with ease and simplicity.', 'e7.png', 50),
(183, 12, 'Power bank', 'intex', 'black', 2500, 3000, 'INTEX 10000mAH Li-Polymer Power Bank Strong(White) with Fast Charging', 'e5.png', 150),
(184, 12, 'Arduino Uno', 'arduino', 'black', 800, 1000, 'Arduino Uno R3 Atmega328P Atmega16U2 for Arduino Compatible with usb cable', 'e6.png', 200),
(182, 12, 'Hp computer', 'hp', 'black', 28000, 32000, 'HP Full set System intel Core i5 2nd Gen 8GB DDR3 Ram 500GB HDD Widescreen Monito', 'e4.png', 50),
(181, 12, 'Sony headset', 'Sony', 'black', 7000, 8000, 'SONY Extra Bass Wireless Stereo Bluetooth Headset Over-Ear Headphones With Mic For SAMSUNG,I PHONE APPLE ANDROID,PC', 'e3.png', 150),
(180, 12, 'Bluetooth headset', 'ROG', 'gray', 2500, 3000, 'Original P47 Wireless headphone Bluetooth headset bluetooth earphones Hiqh quality sound wireless Headset.', 'e2.png', 150),
(179, 12, 'Gaming key board', 'ROG', 'black', 2000, 2500, 'ROG Strix Flare RGB mechanical gaming keyboard with Cherry MX switches, customizable illuminated badge ', 'e1.png', 150),
(178, 23, 'Cotton T-Shirt', 'dia', 'gray', 2500, 2800, 'Classic Cotton T SHIRT ', '12.png', 150),
(176, 24, 'Cotton T-Shirt', 'mp', 'red', 800, 1000, 'Steve McQueen T-SHIRT Cult Classic Mans Retro ALL SIZES', '10.png', 150),
(177, 24, 'Classic T-shirt', 'kian', 'red', 2500, 2800, 'AAA ALSTYLE Mens Plain Classic Short Sleeves T-shirt 1301', '11.png', 150),
(175, 24, 'Cotton Sports T-shirt', 'kian', 'yellow', 2500, 3000, 'New 100% Genuine Polo Scott Mens Lambswool Round-Neck', '09.png', 150),
(174, 24, 'Cotton T-Shirt', 'kian', 'yellow', 2500, 2800, 'Urban Yellow T-Shirt - 100% Cotton Beach Top All Sizes New', '08.png', 150),
(172, 24, 'Adidas T-shirt', 'adidas', 'gray', 1500, 2000, 'Nintendo Zelda Triforce Black Logo Mens Graphic T-Shirt New', '06.png', 100),
(173, 24, 'Sport T-shirts', 'kian', 'green', 2200, 2500, 'Sports Tie Fighter T Shirt Blueprint Schematic Official NEW S M L XL XXL', '07.png', 150),
(170, 24, 'Klein Men T-shirt', 'mp', 'gray', 1300, 1550, 'Calvin Klein Men T-Shirt Crew neck Micro Modal Liquid Slim', '04.png', 100),
(171, 24, 'Klein T-shirt', 'kian', 'blue', 1100, 1300, 'Liverpool FC Mens Drak This Is Anfield T-Shirt LFC ', '05.png', 150),
(169, 24, 'Slim fit T-shirt', 'mp', 'black', 600, 850, 'Mens Slim Fit O Neck Long Sleeve Pullover Muscle Tee Casual Basic T-shirt', '03.png', 200),
(168, 24, 'Classic T-shirt', 'mp', 'green', 600, 850, 'Mens Plain Crewneck Classic Short Sleeves T-shirt', '02.png', 200),
(166, 23, 'Sports Practice T-shirt', 'shela', 'gray', 3500, 3800, 'Sunset Curve Julie And The Phantoms Band Women Top T Shirt 2689 ', 'f12.png', 100),
(167, 24, 'Adidas Sports T-shirt', 'adidas', 'black', 1800, 2000, 'Made with moisture-wicking fabrics and soft cotton, our mens shirts are built to keep you comfortable all day.', '01.png', 200),
(165, 23, 'Sports Practice T-shirt', 'mona', 'red', 1300, 1600, 'Relief Records T Shirt - Chicago House Techno EDM ', 'f11.png', 200),
(164, 23, 'Sport T-shirts', 'shela', 'blue', 2300, 2600, 'Relief Records T Shirt - Chicago House Techno EDM ', 'f10.png', 100),
(163, 23, 'Floral Women cocktail', 'shela', 'pink and white', 2500, 2800, 'Floral Women cocktail plus size maxi evening short dress beach summer casual', 'f9.png', 200),
(162, 23, 'Stylish Party Dress', 'shela', 'blue', 3500, 3800, 'Women party evening short Stylish Party Dress casual', 'f8.png', 200),
(161, 23, 'Party Dress', 'shela', 'blue', 3200, 3500, 'She Series - Real Women Party Version 1 Short-Sleeve', 'f7.png', 200),
(160, 23, 'Floral Party Dress', 'mona', 'blue', 3000, 3500, 'Floral Summer Women Clothes Plus Size Casual Maxi Dr', 'f6.png', 200),
(159, 23, 'Party Dress', 'mona', 'white and gray', 2500, 3000, 'Summer Women Clothes Plus Size Casual Maxi Dr', 'f5.png', 200),
(158, 23, 'Summer Party Dress', 'mona', 'black', 2000, 2300, 'Floral Summer Evening Party Women Clothes Plus Size Casual Maxi Dr', 'f4.png', 200),
(157, 23, 'Casual summer dress', 'mona', 'black & white', 2500, 2800, 'Fashion Party Casual summer Dress V Neck beach Women Womens Maxi sundress', 'f3.png', 200),
(155, 23, 'Short Sleevet', 'mona', 'green', 1000, 1200, 'She Series - Real Women Version 1 Short-Sleeve', 'f1.png', 250),
(156, 23, 'Casual short-sleevet', 'mona', 'various', 1500, 1600, 'Midi beach long casual cocktail floral party summer plus size maxi Women evening', 'f2.png', 250),
(154, 15, 'Quartz watch', 'ROG', 'black', 7000, 8000, 'Hot Fashion Men Quartz Analog Leather Black Business Male Watch', 'w12.png', 100),
(153, 15, 'Fitness Bracelet', 'HAYLOU', 'white', 7000, 8000, 'HAYLOU LS02 Smart Watch 2 1.4inch LCD Screen BT 5.0 12 Sports Modes IP68 Waterproof ', 'w11.png', 100),
(152, 15, 'Rolex Submariner', 'Rolex', 'silver', 17000, 20000, 'Rolex Submariner Luxury Stainless Steel Wrist Watch For Men', 'w10.png', 100),
(151, 15, 'Ladies watch Rose gold', 'wd', 'pink', 750, 1000, 'Luxury Rose Gold Women Watches Fashion Diamond Ladies Starry Sky Magnet Watch Waterproof', 'w9.png', 150),
(150, 15, 'Shock watch', 'ROG', 'brown', 8000, 10000, 'SKMEI Sports Watches Men Waterproof Watch Alarm LED Back Light Shock Digital Wristwatches', 'w8.png', 100),
(149, 15, 'Watch 6 Series', 'ROG', 'white', 7000, 8000, 'Women Smart Watch Heart Rate Smart Wristband Sports Band Tracker Watches Smart Band Fitness Male and female', 'w7.png', 100),
(148, 15, 'Watch 5 Series', 'ROG', 'black', 5000, 6000, 'This smartwatch has all the next level features one could look for with long battery life and most importantly', 'w6.png', 100),
(147, 15, 'Bracelet Watch', 'wd', 'gray', 800, 1000, 'W2420 - Silver & Gold Mixed Contena Watch', 'w5.png', 150),
(146, 15, 'Gold Rolex', 'Rolex', 'gold', 12000, 15000, 'The defining feature of this particular family is the inclusion of a 10-minute countdown timer', 'w4.png', 100),
(145, 15, 'Yellow Rolesor watch', 'Rolesor', 'gold', 3000, 4000, 'This Oyster Perpetual Cosmograph Daytona in Yellow Rolesor, with a black dial and an Oyster bracelet,', 'w3.png', 100),
(143, 15, 'Apple watch', 'apple', 'gold', 4000, 5000, 'Apple Watch SE 44MM (GPS) - Aluminium Case with Sport Band', 'w1.png', 100),
(144, 15, 'ladies watch', 'SKMEI', 'silver', 1500, 2000, 'Aluminium Sport Band', 'w2.png', 100),
(142, 14, 'Large makeup set', 'diana', 'black', 7000, 8000, 'SUNKISSED GLOW Bronzer & Highlighting 7 Pc Set', 'b14.png', 100),
(141, 14, 'Makeup set', 'diana', 'black', 4500, 5000, 'Sephora Favorites SUNKISSED GLOW Bronzer & Highlighting 7 Pc Set', 'b12.png', 100),
(139, 14, 'Day face cream', 'facia', 'white', 2000, 2100, 'Regenerating anti-aging day cream with organic pomegranate seed oil.', 'b10.png', 200),
(140, 14, 'Vitalizing shampoo', 'facia', 'white', 2000, 2100, 'Gentle moisturizing sls free shampoo with organically grown aloevera, honey and shea butter. ', 'b11.png', 200),
(138, 14, 'Night face cream', 'diana', 'white', 2000, 2300, 'The application of this stimulating anti-aging organic intensive creme', 'b9.png', 200),
(137, 14, 'Beauty set', 'facia', 'white', 2200, 2600, 'This organic beauty set includes Green radiance face cream 50ml, energizing face peeling 75ml', 'b8.png', 200),
(135, 14, 'Face cream', 'diana', 'white', 1000, 1300, 'Regenerating anti-aging day cream with organic pomegranate seed oil.', 'b5.png', 200),
(136, 14, 'Green Tea Cream', 'facia', 'white', 1500, 1800, 'Anti-cellulite, firming, moisturising, nourish, protective, regeneration.', 'b6.png', 200),
(134, 14, 'Lipstick set', 'facia', 'black', 800, 1000, 'Travel Kit Long-Lasting Waterproof Lipstick Matte Lip Gloss Demo Set', 'b4.png', 200),
(132, 14, 'Face Care Pack', 'facia', 'black', 2000, 2500, 'Anti-cellulite, firming, moisturising, nourish, protective, regeneration.', 'b2.png', 100),
(133, 14, 'Makeup Brush set', 'facia', 'black', 500, 800, '12pcs Pear Makeup Brush set Foundation Powder Concealers cosmetic brush sets.', 'b3.png', 200),
(131, 14, 'Night face cream', 'facia', 'various', 2000, 2300, 'The JERGENSÂ® moisturizing collection offers a range of products that transform skin for a noticeably improved look and feel.', 'b1.png', 100),
(130, 13, 'Sony Battery Charger', 'Sony', 'black', 8000, 10000, 'V-mount V Lock Battery Charger DC Power Supply Dual Channel for Sony Camera', 'c12.png', 50),
(129, 13, 'Camera Backpack', 'Sony', 'black', 7000, 10000, 'LARGE DSLR SLR Camera Backpack Rucksack Bag Case+RainCover For Sony', 'c11.png', 500),
(128, 13, 'Axis Gimbal', 'Zhiyun', 'black', 55000, 60000, 'Zhiyun Weebill S 3-Axis Gimbal for Mirrorless & DSLR Cameras 300% Improved Motor', 'c10.png', 10),
(127, 13, 'Camera Tripod', 'iPad iPhone Samsung', 'black', 2500, 3000, 'Professional Camera Tripod Stand Holder Mount for iPhone Samsung Cell Phone', 'c9.png', 100),
(126, 13, 'IP Camera', 'PTZ', 'white', 18000, 20000, '1080P PTZ Security WIFI Camera Waterproof Outdoor Wireless IP CCTV Pan IR Cam', 'c8.png', 50),
(125, 13, 'Network Camera', 'cicso', 'white', 1500, 1900, 'Cisco CIVS-IPC-4300E 4300E Network Camera', 'c7.png', 100),
(124, 13, 'Mobile Lens', 'iPad iPhone Samsung', 'black & white', 600, 1000, 'Mobile Phone 180Â° Camera Lens Fish Eye Angle Clip for iPad iPhone Samsung', 'c6.png', 100),
(123, 13, 'Telephoto Lens', 'Vivitar ', 'black & white', 70000, 80000, 'Vivitar Auto Telephoto 300mm f/5.6 Prime Camera Lens Fits Minolta SR Mount', 'c5.png', 10),
(122, 13, 'Epic Camera', 'dragon', 'white', 60000, 68000, 'DRAGON W/ Ti PL MOUNT / SIDE SSD / 6k FULL CAMERA PACKAGE W/ LENS', 'c4.png', 10),
(121, 13, 'Nikon D90 ', 'nikon', 'black', 85000, 95000, 'Nikon D90 12.3 Megapixel DX DSLR Digital Camera + 18-55mm f3.5-5.6 VR lens', 'c3.png', 10),
(119, 13, 'canon digital SLR', 'canon', 'black', 70000, 80000, 'Digital SLR Camera 3 Inch TFT LCD Screen HD 16MP 1080P 16X Zoom Anti-shake', 'c1.png', 10),
(120, 13, 'Nikon Coolpix L340', 'nikon', 'black', 65000, 75000, 'Nikon Coolpix L340 20.2MP Digital Camera - Black', 'c2.png', 10),
(195, 16, 'UA Rock Delta', 'UA', 'black', 7000, 8000, 'The UA Rock Delta is an exclusive version of the UA Delta Highlight trainer â€” designed by Yurri Mial.', 's4.png', 100),
(194, 16, 'Nike metcon 5', 'nike', 'white', 12000, 15000, 'Train harder with more stability and durability in the NikeÂ® Metcon 5 training shoes.', 's3.png', 50),
(192, 16, 'Saucony Omni', 'saucony', 'orange', 4000, 5000, 'Saucony Omni ISO 2 has a wide toe box.According to several testers, the shoe is supportive.The running shoe is well-cushioned.', 's1.png', 100),
(190, 12, 'Mavic Air 2', 'marvic', 'white', 85000, 90000, 'Mavic Air 2 takes camera and flight performance to the next level with 48MP photos, 4K/60fps video, up to 34 minutes of flight time, and more.', 'e12.png', 20),
(198, 16, 'UA Curry Suit Shoes', 'UA', 'black', 14000, 15000, 'The Under Armour Curry Two Suit & Tie gives off that old Playoff vibe with the black and white upper', 's7.png', 100),
(199, 16, 'Nike Basketball Shoes', 'nike', 'black', 12000, 13000, 'Strategically placed Kurimmaterial that feels almost like a second skin white giving you lightweight flexibility and lasting support.', 's8.png', 100),
(200, 16, 'Nike Kyrie Shoes', 'nike', 'gray and green', 7000, 8000, 'A new Flex Groove delivers excellent flexibility and traction to help you find your groove.', 's9.png', 100),
(201, 16, 'AU Training Shoes', 'Au', 'black & white', 4000, 5000, 'These shoes were built for athletes who amp up their training with higher intensity bursts of activity and cardio. ', 's10.png', 100),
(202, 16, 'Brooks Ghost 12', 'brook', 'red, blue and white', 7000, 8000, 'More important thing is finding the right running shoe to avoid injury and up your fitness.', 's11.png', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `address`, `mail`, `pwd`, `telephone`, `country`) VALUES
('Charu', 'Himesh', 'Kalutara', 'charu@gmail.com', '4586', 789546185, 'Sri Lanka'),
('kasun', 'sadaru', 'matara', 'kasun@gmail.com', '123', 412298465, 'Sri Lanka'),
('nimesha', 'sewwandi', 'matara', 'nimesha@gmail.com', '1234', 715605010, 'Sri Lanka');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
