-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2022 at 10:28 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `c_description`) VALUES
(13, 'cameras', 'All kind of cameras'),
(12, 'Electronics', 'Electronic items'),
(14, 'Beauty and cosmetics', 'Beauty & cosmetic items'),
(15, 'Watches', 'branded watches'),
(16, 'Shoes', 'Branded shoes'),
(24, 'Men clothing', 'Branded'),
(23, 'Women clothing', 'Branded ');

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
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `p_brand`, `p_color`, `orginal_price`, `selling_price`, `p_description`, `p_image`, `p_qty`) VALUES
(11, 13, 'Nikon Coolpix L340', 'nikon', 'black', 65000, 75000, 'Digital SLR Camera 3 Inch TFT LCD Screen HD 16MP 1080P 16X Zoom Anti-shake', '02.png', 5),
(10, 13, 'canon digital SLR', 'canon', 'black', 70000, 80000, 'Nikon Coolpix L340 20.2MP Digital Camera - Black', '01.png', 5),
(12, 13, 'Nikon D90 ', 'nikon', 'black', 85000, 95000, 'Nikon D90 12.3 Megapixel DX DSLR Digital Camera + 18-55mm f3.5-5.6 VR lens', '03.png', 5),
(13, 13, 'Epic Camera', 'nikon', 'black', 60000, 68000, 'DRAGON W/ Ti PL MOUNT / SIDE SSD / 6k FULL CAMERA PACKAGE W/ LENS', '04.png', 5),
(14, 13, 'Telephoto Lens', 'Vivitar ', 'black & white', 75000, 80000, 'Vivitar Auto Telephoto 300mm f/5.6 Prime Camera Lens Fits Minolta SR Mount', '05.png', 6),
(15, 13, 'Mobile Lens', 'iPad iPhone Samsung', 'black', 650, 1000, 'Mobile Phone 180° Camera Lens Fish Eye Angle Clip for iPad iPhone Samsung', '06.png', 25),
(16, 13, 'Network Camera', 'CIVS-IPC-4300E 4300E ', 'white', 1200, 1900, 'Cisco CIVS-IPC-4300E 4300E Network Camera', '07.png', 20),
(17, 13, 'IP Camera', 'PTZ', 'white', 16000, 20000, '1080P PTZ Security WIFI Camera Waterproof Outdoor Wireless IP CCTV Pan IR Cam', '08.png', 15),
(18, 13, 'Camera Tripod', 'drid', 'black', 2200, 3000, 'Professional Camera Tripod Stand Holder Mount for iPhone Samsung Cell Phone', '09.png', 15),
(19, 13, 'Axis Gimbal', 'Zhiyun', 'black', 55000, 60000, 'Zhiyun Weebill S 3-Axis Gimbal for Mirrorless & DSLR Cameras 300% Improved Motor', '10.png', 5),
(20, 13, 'Camera Backpack', 'Rucksack', 'black', 8000, 10000, 'LARGE DSLR SLR Camera Backpack Rucksack Bag Case+RainCover For Sony', '11.png', 50),
(21, 13, 'Sony Battery Charger', 'Sony', 'black', 8500, 10000, 'V-mount V Lock Battery Charger DC Power Supply Dual Channel for Sony Camera', '12.png', 25),
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
(99, 23, 'Stylish Party Dress', 'she serious', 'black & white', 3500, 3800, 'Women party evening short Stylish Party Dress casual', '08.png', 100),
(98, 23, 'Party Dress', 'she serious', 'blue', 3300, 3500, 'She Series - Real Women Party Version 1 Short-Sleeve', '07.png', 100),
(97, 23, 'Floral Party Dress', 'maxi', 'black & white', 3200, 3500, 'Floral Summer Women Clothes Plus Size Casual Maxi Dr', '06.png', 100),
(96, 23, 'Party Dress', 'maxi', 'white and gray', 2800, 3000, 'Summer Women Clothes Plus Size Casual Maxi Dr', '05.png', 100),
(95, 23, 'Summer Party Dress', 'maxi', 'brown', 2000, 2300, 'Floral Summer Evening Party Women Clothes Plus Size Casual Maxi Dr', '04.png', 100),
(94, 23, 'Casual summer dress', 'maxi', 'black & white', 2500, 2800, 'Fashion Party Casual summer Dress V Neck beach Women Womens Maxi sundress', '03.png', 100),
(93, 23, 'Casual short-sleevet', 'maxi', 'mixed', 1300, 1600, 'Midi beach long casual cocktail floral party summer plus size maxi Women evening', '02.png', 100),
(92, 23, 'Short Sleevet', 'she serious', 'green', 1000, 1200, 'She Series - Real Women Version 1 Short-Sleeve', '01.png', 100),
(100, 23, 'Floral Women cocktail', 'maxi', 'white', 2500, 2800, 'Floral Women cocktail plus size maxi evening short dress beach summer casual', '09.png', 100),
(101, 23, 'Sport T-shirts', 'Tecno', 'blue and pink', 2400, 2600, 'Relief Records T Shirt - Chicago House Techno EDM', '10.png', 100),
(102, 23, 'Sports Practice T-shirt', 'Tecno', 'red', 1400, 1600, 'Relief Records T Shirt - Chicago House Techno EDM ', '11.png', 100),
(103, 23, 'Sports Practice T-shirt', 'maxi', 'gray', 3500, 3800, 'Sunset Curve Julie And The Phantoms Band Women Top T Shirt 2689 ', '12.png', 100),
(105, 24, 'Adidas Sports T-shirt', 'adidas', 'black', 1800, 2000, 'Made with moisture-wicking fabrics and soft cotton, our mens shirts are built to keep you comfortable all day.', '01.png', 100),
(106, 24, 'Classic T-shirt', 'crewneck', 'green', 700, 850, 'Mens Plain Crewneck Classic Short Sleeves T-shirt', '02.png', 100),
(107, 24, 'Slim fit T-shirt', 'maxi', 'black', 700, 850, 'Mens Slim Fit O Neck Long Sleeve Pullover Muscle Tee Casual Basic T-shirt', '03.png', 100),
(108, 24, 'Klein Men T-shirt', 'maxi', 'gray', 1300, 1550, 'Calvin Klein Men T-Shirt Crew neck Micro Modal Liquid Slim', '04.png', 100),
(109, 24, 'Klein T-shirt', 'maxi', 'dark green', 1100, 1300, 'Liverpool FC Mens Drak This Is Anfield T-Shirt LFC', '05.png', 100),
(110, 24, 'Adidas T-shirt', 'adidas', 'gray', 1800, 2000, 'Nintendo Zelda Triforce Black Logo Mens Graphic T-Shirt New', '06.png', 100),
(111, 24, 'Sports T-shirts', 'maxi', 'green', 2300, 2500, 'Sports Tie Fighter T Shirt Blueprint Schematic Official NEW S M L XL XXL', '07.png', 100),
(112, 24, 'Cotton T-Shirt', 'maxi', 'yellow', 2500, 2800, 'Urban Yellow T-Shirt  100% Cotton Beach Top All Sizes New', '08.png', 100),
(113, 24, 'Cotton Sports T-shirt', 'maxi', 'yellow', 2800, 3000, 'New 100% Genuine Polo Scott Mens Lambswool Round-Neck', '09.png', 100),
(114, 24, 'Cotton T-Shirt', 'Steve', 'red', 850, 1000, 'Steve McQueen T-SHIRT Cult Classic Mans Retro ALL SIZES', '10.png', 100),
(115, 24, 'Classic T-shirt', 'Steve', 'red', 2600, 2800, 'AAA ALSTYLE Mens Plain Classic Short Sleeves T-shirt 1301', '11.png', 100),
(116, 24, 'Cotton T-Shirt', 'arast', 'white', 2600, 2800, 'Classic Cotton T SHIRT ', '12.png', 100);

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
