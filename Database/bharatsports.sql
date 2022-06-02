-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 07:47 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bharatsports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `dp` varchar(225) DEFAULT 'profile pic/default_dp.png',
  `name` varchar(225) NOT NULL,
  `admin_id` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `dp`, `name`, `admin_id`, `password`) VALUES
(11, 'profile pic/dvshri.png', 'Divyanshu Shrivastava', 'divyanshu@hero', '123456'),
(12, 'profile pic/ashok.jpg', 'Ashok Vermja', 'ashok@123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cartid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cartid`, `user_id`, `product_id`, `qty`, `date`) VALUES
(2, 18, 6, 1, '2020-06-12 05:54:11'),
(9, 18, 2, 1, '2020-06-25 15:45:09'),
(11, 18, 36, 1, '2020-06-25 16:09:22'),
(12, 18, 178, 1, '2020-06-25 16:16:10'),
(13, 18, 4, 1, '2020-06-25 16:18:12'),
(14, 18, 13, 1, '2020-06-25 16:31:58'),
(15, 18, 14, 1, '2020-06-25 16:34:23'),
(16, 18, 12, 1, '2020-06-25 16:38:04'),
(17, 18, 37, 1, '2020-06-25 16:44:12'),
(18, 18, 9, 1, '2020-06-25 16:46:38'),
(22, 19, 24, 1, '2020-09-09 07:45:19'),
(23, 19, 1, 1, '2020-09-09 08:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(4) NOT NULL,
  `userid` int(4) NOT NULL,
  `like_pro_id` int(4) NOT NULL,
  `like_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `userid`, `like_pro_id`, `like_status`) VALUES
(79, 19, 77, 'like-btn is-active'),
(80, 19, 3, 'like-btn is-active'),
(85, 19, 4, 'like-btn is-active'),
(86, 19, 1, 'like-btn is-active'),
(87, 19, 8, 'like-btn is-active'),
(88, 19, 11, 'like-btn is-active'),
(89, 19, 1, 'like-btn is-active'),
(90, 19, 1, 'like-btn is-active'),
(91, 19, 14, 'like-btn is-active');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderid` int(5) NOT NULL,
  `productid` int(5) NOT NULL,
  `order_qty` int(2) NOT NULL,
  `total_price` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `productid`, `order_qty`, `total_price`, `user_id`, `status`) VALUES
(8, 24, 1, 549, 19, 'Order Placed'),
(9, 24, 1, 549, 19, 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `img` varchar(500) NOT NULL,
  `price` int(6) NOT NULL,
  `stock` int(3) NOT NULL,
  `visible` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `img`, `price`, `stock`, `visible`) VALUES
(1, 'cdress', 'Redox White Cricket Dress White T-Shirt', 'product/cdress1.jpg', 725, 50, 0),
(2, 'cdress', 'Crazy Prints Dri fit Indian Cricket Jersey', 'product/cdress2.jpg', 600, 50, 0),
(3, 'cdress', 'PS Pilot  Full Sleeves Cricket Shirt + Lower', 'product/cdress3.jpg', 1300, 50, 0),
(4, 'cdress', 'SS Magnum Combo H/S - Small', 'product/cdress4.jpg', 1499, 50, 0),
(5, 'cdress', 'S-Mark Sweat-Control Comfort-Fit Combo of 4 ', 'product/cdress5.jpg', 2299, 50, 0),
(6, 'cdress', 'Nivia Polyester Cricket Jersey, Men\'s (White/Grey)', 'product/cdress6.jpg', 1200, 50, 0),
(7, 'cbag', 'Suntop Player Edition Cricket Backpack Bag ', 'product/cbag1.jpg', 2400, 50, 0),
(8, 'cbag', 'Thrax Super Pack Wheel Cricket Kit Bag Army Color', 'product/cbag2.jpg', 2200, 50, 0),
(9, 'cbag', 'APG Unisex Grace Cricket Kit Bag, Full Size ', 'product/cbag3.jpg', 1699, 50, 0),
(10, 'cbag', 'SS Cricket Kit Bag Camo Duffle', 'product/cbag4.jpg', 1499, 50, 0),
(11, 'cbag', 'SG SUPERPAK CRICKET KITBAG', 'product/cbag5.jpg', 1400, 50, 0),
(12, 'cbag', 'One O One - Lines Collection Single Compartment ', 'product/cbag6.jpg', 1249, 50, 0),
(13, 'cball', 'Gyronax Test Red Leather Ball Weight Approx 155g ', 'product/cball1.jpg', 250, 50, 0),
(14, 'cball', 'Raisco BW01 Leather Cricket Ball (White)', 'product/cball2.jpg', 250, 50, 0),
(15, 'cball', 'SS Cr.Balls0054 Poly Soft Ball', 'product/cball3.jpg', 180, 50, 0),
(16, 'cball', 'Cosco Tuff Heavy Weight Ball, Pack of 6 (Red)', 'product/cball4.jpg', 390, 50, 0),
(17, 'cball', 'Vicky Supreme Light Cricket , Pack of 6 (Yellow)', 'product/cball5.jpg', 414, 50, 0),
(18, 'cball', 'DSC 1500317 Synthetic Hunt Tennis Cricket Ball', 'product/cball6.jpg', 249, 50, 0),
(19, 'cbat', 'Lycan Popular Willow Cricket bat (Tennis bat)', 'product/cbat1.jpg', 850, 50, 0),
(20, 'cbat', 'Just rider Popular Willow 20-20 Cricket Bat ', 'product/cbat2.jpg', 749, 50, 0),
(21, 'cbat', 'DSC Catch Cricket Bat', 'product/cbat3.jpg', 1199, 50, 0),
(22, 'cbat', 'GLS. Scorpion 050 Tennis Ball Cricket Bat', 'product/cbat4.jpg', 650, 50, 0),
(23, 'cbat', 'IBAZAR Plain Kashmiri Willow  for Leather Ball', 'product/cbat5.jpg', 499, 50, 0),
(24, 'cbat', 'DUKE Series Kashmir Willow  Cricket Bat', 'product/cbat6.jpg', 549, 50, 0),
(25, 'cshoes', 'SG Shoe SG Shield WHT/R.Blue No.8 Cricket Shoes', 'product/cshoes1.jpg', 999, 50, 0),
(26, 'cshoes', 'Fashion7 PVC Cricket Shoes for Mens ', 'product/cshoes2.jpg', 1200, 50, 0),
(27, 'cshoes', 'NIVIA - Step Out & Play 479WB Synthetic,(White)', 'product/cshoes3.jpg', 1500, 50, 0),
(28, 'cshoes', 'Vector X Blast Cricket Shoes', 'product/cshoes4.jpg', 1999, 50, 0),
(29, 'cshoes', 'SS Acc0402 Josh Shoes, 10', 'product/cshoes5.jpg', 950, 50, 0),
(30, 'cshoes', 'Puma Men 19 FH Rubber White Black-', 'product/cshoes6.jpg', 1649, 50, 0),
(31, 'fdress', 'GOLDEN FASHION Liverpool Goal Keeper', 'product/fd1.jpg', 1599, 50, 0),
(32, 'fdress', 'Liverpool 2019-20 Home Jersey with Master Quality', 'product/fd2.jpg', 820, 50, 0),
(33, 'fdress', 'NIVIA Destroyer Football Jersey Set\r\n', 'product/fd3.jpg', 1440, 50, 0),
(34, 'fdress', 'Sportyway Kids Messi 10 FC Barcelona Jersey Set', 'product/fd4.jpg', 1300, 50, 0),
(35, 'fdress', 'GOLDEN FASHION Real Madrid Away KIT 2019-20 Jersey', 'product/fd5.jpg', 1200, 50, 0),
(36, 'fdress', 'uniq Ronaldo Jersey with Shorts (Mens& Kids)\r\n', 'product/fd6.jpg', 949, 50, 0),
(37, 'fball', 'NIVIA Tornado Moulded Football Size-5 Blue', 'product/fball1.jpg', 999, 50, 0),
(38, 'fball', 'NIVIA Tornado Moulded Football Size-5 Blue', 'product/fball2.jpg', 1199, 50, 0),
(39, 'fball', 'Nivia Spinner Machine Stitched Football', 'product/fball3.jpg', 1499, 50, 0),
(40, 'fball', 'Nivia Street Rubber Football, Size 5 (Black)', 'product/fball4.jpg', 1499, 50, 0),
(41, 'fball', 'Nivia Dominator Football, Size 5 (White/Blue)\r\n', 'product/fball5.jpg', 1699, 50, 0),
(42, 'fball', 'Nivia Trainer No. 5 Football\r\n', 'product/fball6.jpg', 1599, 50, 0),
(43, 'fshoes', 'TRADY Ultimate CR7 Ronaldo Ankle Football Shoe', 'product/fshoes1.jpg', 2300, 50, 0),
(44, 'fshoes', 'Vector X Men\'s Synthetic Leather Football Shoes', 'product/fshoes2.jpg', 2499, 50, 0),
(45, 'fshoes', 'Lotto Men\'s Lzg Ix 700 Fgt Football Boots\r\n', 'product/fshoes3.jpg', 2669, 50, 0),
(46, 'fshoes', 'Nivia Ashtang Football Stud\r\n', 'product/fshoes4.jpg', 2999, 50, 0),
(47, 'fshoes', 'GBG Mens Messi Synthetic Leather Football Shoes', 'product/fshoes5.jpg', 4999, 50, 0),
(48, 'fshoes', 'Vector X Champion Football Shoes (Navy-Sea Green)', 'product/fshoes6.jpg', 4500, 50, 0),
(49, 'fitem', 'Sahni Sports Football Training Kit\r\n', 'product/fitem1.jpg', 3200, 50, 0),
(50, 'fitem', 'IWIN Sports 9 Inch Agility Cone Marker ', 'product/fitem2.jpg', 1400, 50, 0),
(51, 'fitem', 'KITSAWS SPORTS Combo Set Agility Ladders 4 m', 'product/fitem3.jpg', 3999, 50, 0),
(52, 'fitem', 'MIDOFF Hurdles Agility Ladders Cone for Football', 'product/fitem4.jpg', 1600, 50, 0),
(53, 'fitem', 'Netco Power Badminton Nylon Net Standard Size', 'product/fitem5.jpg', 1299, 50, 0),
(54, 'fitem', 'Scubafitness G.I.I. Flat Regular Adjustable Speed ', 'product/fitem6.jpg', 3500, 50, 0),
(55, 'homegym', 'Wolblix Assistive Abdominal Chest and arm Muscles Exercise ', 'product/homegym1.jpg', 1200, 50, 0),
(56, 'homegym', 'Home Cube Foldable Revoflex Xtreme Rally Multifunction', 'product/homegym2.jpg', 1600, 50, 0),
(57, 'homegym', 'Aurion Set of 2 PVC Dumbbells Weights Fitness Home Gym Exercise', 'product/homegym3.jpg', 459, 50, 0),
(58, 'homegym', 'Shree krishna Exercise Heavy Duty Gym Ball (Home)', 'product/homegym4.jpg', 2500, 50, 0),
(59, 'homegym', 'Sidhmart Tummy Trimmer -Twister Combo Abs Exercise', 'product/homegym5.jpg', 1900, 50, 0),
(60, 'homegym', 'Skera K1515110 Adjustable Forearm Exerciser Hand Grip', 'product/homegym6.jpg', 399, 50, 0),
(61, 'hsup', 'Healthvit Fitness Testosterone Booster Supplement - 60Cap', 'product/hsup1.jpg', 1200, 50, 0),
(62, 'hsup', 'NUTRIMUSCLE MASSIVE WEIGHT GAINER - 2.5LBS', 'product/hsup2.jpg', 1300, 50, 0),
(63, 'hsup', 'Naturyz Men\'s Sport Multivitamin With 55 Vital Nutrients', 'product/hsup3.jpg', 1400, 50, 0),
(64, 'hsup', 'Generic Zee Body Grow Supplement - 300Gm', 'product/hsup4.jpg', 950, 50, 0),
(65, 'hsup', 'MuscleBlaze MB-VITE Multivitamin with 24 vitamins', 'product/hsup5.jpg', 1499, 50, 0),
(66, 'hsup', 'DEVELO MASS MEN\'S/BOYS\' WEIGHT/MASS GAINER 500 GM', 'product/hsup6.jpg', 1050, 50, 0),
(67, 'gdress', 'ZONOKA  Stylish Yoga Suit to Wear for Women', 'product/gymdress1.jpg', 1199, 50, 0),
(68, 'gdress', 'Istore Women Yoga Sets of Stretchable Bra+Pants ', 'product/gymdress2.jpg', 1400, 50, 0),
(69, 'gdress', 'Vepson Neoprene Slimming Belly Ultra Sweater', 'product/gymdress3.jpg', 1300, 50, 0),
(70, 'gdress', 'Apparels Nylon Top Full Sleeve Tights T-Shirt', 'product/gymdress4.jpg', 800, 50, 0),
(71, 'gdress', 'Jockey Women\'s Cotton Shorties\r\n', 'product/gymdress5.jpg', 650, 50, 0),
(72, 'gdress', 'Jockey Women\'s Cotton Top\r\n', 'product/gymdress6.jpg', 999, 50, 0),
(73, 'gdress', 'Shopo Women\'s Spandex and Fitness Workout Clothing', 'product/gymdress7.jpg', 1600, 50, 0),
(74, 'gitem', 'Fitpro Lifeline Treadmill Cycle, (Multicolor)\r\n', 'product/egymitem6.jpg', 9999, 50, 0),
(75, 'gitem', 'Kobo Air Bike Delux Exercise Cycle Dual Action', 'product/egymitem1.jpg', 14999, 50, 0),
(76, 'gitem', 'PowerMax Fitness TDA-230M 2HP (4HP Peak) Motorized Treadmill', 'product/egymitem2.jpg', 35000, 50, 0),
(77, 'gitem', 'SKE® Body Slimming Shaper Machine Fitness Accessories', 'product/egymitem3.jpg', 1699, 50, 0),
(78, 'gitem', 'Global Craft Waterproof Hand Fitness Gym Case Arm Band for Jogging', 'product/egymitem4.jpg', 1200, 50, 0),
(79, 'gitem', 'UMATE ABS Stimulator Hips Trainer, Electronic Backside Muscle Toner', 'product/egymitem5.jpg', 799, 50, 0),
(80, 'hdress', 'Blue Color Hockey Uniform With Indian Flag Design', 'product/hdress1.jpg', 690, 50, 0),
(81, 'hdress', 'White Color Hockey Uniform With Indian Flag Design', 'product/hdress2.jpg', 799, 50, 0),
(82, 'hdress', 'Dark Blue \"ODISHA\" Hockey Dress For Girls \r\n', 'product/hdress3.jpg', 600, 50, 0),
(83, 'hdress', 'Sahara India Hockey Dress White & Orange Combination', 'product/hdress4.jpg', 700, 50, 0),
(84, 'hdress', 'Sahara India Hockey Dress Yellow & Orange Combination', 'product/hdress5.jpg', 700, 50, 0),
(85, 'hdress', 'Light Blue \"ODISHA\" Hockey Dress For Boys\r\n', 'product/hdress6.jpg', 600, 50, 0),
(86, 'hstick', 'ALFA CYRANO Unisex Hockey Stick, L\r\n', 'product/hstick1.jpg', 1299, 50, 0),
(87, 'hstick', 'Arnav Hockey Stick with Fibre Glass Tube Full Size', 'product/hstick2.jpg', 1049, 50, 0),
(88, 'hstick', 'ALFA AX1 Hockey Stick 37\"\r\n', 'product/hstick3.jpg', 1300, 50, 0),
(89, 'hstick', 'FLASH,Composite Hockey Stick Star,Field Hockey Sticks', 'product/hstick4.jpg', 1200, 50, 0),
(90, 'hstick', 'BAS Vampire CE Brig Fiber Glass Hockey Stick', 'product/hstick5.jpg', 999, 50, 0),
(91, 'hstick', 'FLASH Ninja Hockey Stick (37\" L)\r\n', 'product/hstick6.jpg', 1499, 50, 0),
(92, 'hshoes', 'PRO ASE Men’s Professional Turf Hockey Shoe\r\n', 'product/hshoes1.jpg', 1200, 50, 0),
(93, 'hshoes', 'Stallion Sports Boy\'s Flash Hockey Stud Shoes\r\n', 'product/hshoes2.jpg', 1300, 50, 0),
(94, 'hshoes', 'ASICS Men\'s Field Hockey Shoes\r\n', 'product/hshoes3.jpg', 1299, 50, 0),
(95, 'hshoes', 'Galvin Sports SR Unisex Leather Hockey Shoe', 'product/hshoes4.jpg', 999, 50, 0),
(96, 'hshoes', 'Vijayanti Red Cricket/Hockey for Men\'s Shoes\r\n', 'product/hshoes5.jpg', 590, 50, 0),
(97, 'hshoes', 'Feroc Evospeed Hockey Shoes\r\n', 'product/hshoes6.jpg', 1499, 50, 0),
(98, 'hball', 'Port Match Field Hockey Ball (White, hockeyball1)', 'product/hball1.jpg', 299, 50, 0),
(99, 'hball', 'A KAY White Turf Hockey Ball Pack of 6\r\n', 'product/hball2.jpg', 1800, 50, 0),
(100, 'hball', 'Ankaro Flasho Color Pu Professional Hockey', 'product/hball3.jpg', 300, 50, 0),
(101, 'hball', 'Star Sports king Riyaan Hockey Ball (Pink)\r\n', 'product/hball4.jpg', 249, 50, 0),
(102, 'hball', 'Navik Orange Hockey Ball Match (Smooth Ball)', 'product/hball5.jpg', 450, 50, 0),
(103, 'hball', 'SNS SNS052-O Practice Smooth Hockey Balls (Orange)', 'product/hball6.jpg', 199, 50, 0),
(104, 'kdress', 'HANAH SPORTS Cotton Karate Dress (36, 38)\r\n', 'product/kdress1.jpg', 950, 50, 0),
(105, 'kdress', 'USI Bouncer Karate Dress\r\n', 'product/kdress2.jpg', 750, 50, 0),
(106, 'kdress', 'Kai Approved Goodwin Karate Netted Uniform\r\n', 'product/kdress3.jpg', 500, 50, 0),
(107, 'kdress', 'CW Firefly Karate/Martial Art Dress in White Color', 'product/kdress4.jpg', 650, 50, 0),
(108, 'kdress', 'V+ Karate Canvas Dress Korean Style Suitable for all', 'product/kdress5.jpg', 1100, 50, 0),
(109, 'kdress', 'USI 417KC Karate GI Comferto Dress\r\n', 'product/kdress6.jpg', 950, 50, 0),
(110, 'kgloves', 'Beast Fitness Karate Gloves Combo (Red & Blue)\r\n', 'product/gloves1.jpg', 650, 50, 0),
(111, 'kgloves', 'Kai Approved Goodwin Karate Hand Gloves Red or Blue-Size-Free-Good Quality Rexine\r\n', 'product/gloves2.jpg', 750, 50, 0),
(112, 'kgloves', 'HANAH SPORTS Cotton Karate Gloves (Red,Large)\r\n', 'product/gloves3.jpg', 650, 50, 0),
(113, 'kgloves', 'Kai Approved Goodwin Karate Hand Gloves Size-Medium', 'product/gloves4.jpg', 950, 50, 0),
(114, 'kgloves', 'Kai APPROVEL Good Win Hand Gloves\r\n', 'product/gloves5.jpg', 950, 50, 0),
(115, 'kgloves', 'Karate Glove Molded Kai Approved Blue Medium\r\n', 'product/gloves6.jpg', 750, 50, 0),
(116, 'kkickpad', 'FEGSY PU Leather Rectangl \\e Kicking Pad', 'product/kickpad1.jpg', 1299, 50, 0),
(117, 'kkickpad', 'SanR Red Black Boxing Focus Pad,Karate Focus Pad', 'product/kickpad2.jpg', 850, 50, 0),
(118, 'kkickpad', 'Letsplay Kicking Target Taekwondo Kick Pads', 'product/kickpad3.jpg', 500, 50, 0),
(119, 'kkickpad', 'Letsplay LP-JZK-05 Curved Kick Pad (Multi-Colour)', 'product/kickpad4.jpg', 1800, 50, 0),
(120, 'kkickpad', 'IWIN BLACKFOCUSPAD PU Boxing, Karate Curved Focus Pads', 'product/kickpad5.jpg', 1450, 50, 0),
(121, 'kkickpad', 'Generic Taekwondo Double Kick Pad Target Karate', 'product/kickpad6.jpg', 999, 50, 0),
(122, 'kpbag', 'Hard Bodies Classic Punching Bag Unfilled with Chain', 'product/punchingbag1.jpg', 1599, 50, 0),
(123, 'kpbag', 'Aurion Canvas Punching Bag-Unfilled Heavy Bag\r\n', 'product/punchingbag2.jpg', 800, 50, 0),
(124, 'kpbag', 'Facto Power Red and Black Color, UnFilled, Punching Bag Karate Bag & Hanging Straps\r\n', 'product/punchingbag3.jpg', 850, 50, 0),
(125, 'kpbag', 'Outgeek Fitness Punching Bag Inflatable Heavy Punching Bag ', 'product/punchingbag4.jpg', 4599, 50, 0),
(126, 'kpbag', 'Prospo Rough SRF Punching Bag (36inch) with Superstrong Chain\r\n', 'product/punchingbag5.jpg', 1200, 50, 0),
(127, 'kpbag', 'IWIN Unfilled Punching Bag Combo with Chain', 'product/punchingbag6.jpg', 1650, 50, 0),
(128, 'stshirt', 'Amazon Brand - Symactive Men\'s Solid Sports T-Shirt', 'product/tshirt1.jpg', 500, 50, 0),
(129, 'stshirt', 'Campus Sutra Men Full Sleeve Black Grey Tshirt\r\n', 'product/tshirt2.jpg', 450, 50, 0),
(130, 'stshirt', 'Amazon Brand - Symactive Men\'s Color Block', 'product/tshirt4.jpg', 399, 50, 0),
(131, 'stshirt', 'Campus Sutra Men\'s Polyester Sport Jersey T-Shirt', 'product/tshirt5.jpg', 549, 50, 0),
(132, 'stshirt', 'Amazon Brand - Symactive Women\'s Sports T-Shirt\r\n', 'product/tshirt6.jpg', 499, 50, 0),
(133, 'slower', 'Finz Men\'s Polyester Cotton Mix Lycra Lower', 'product/lower1.jpg', 600, 50, 0),
(134, 'slower', 'Fitinc Dobby for Men with Two Side Zipper Pockets ', 'product/lower2.jpg', 550, 50, 0),
(135, 'slower', 'HEADGEAR Men\'s Polyester Lycra Dry Fit Nike Trackpants', 'product/lower3.jpg', 499, 50, 0),
(136, 'slower', 'Zesteez Men Pants Trousers Men Jogger Pants Men', 'product/lower4.jpg', 899, 50, 0),
(137, 'slower', 'DISCOVER Combo Black Jogger Trackpant Lower for Men', 'product/lower5.jpg', 1100, 50, 0),
(138, 'slower', 'BuyBack Men\'s Cotton Track Pants, Joggers, Night Wear', 'product/lower6.jpg', 780, 50, 0),
(139, 'stshirt', 'Fruit of the Loom Men\'s T-Shirt\r\n', 'product/tshirt3.jpg', 499, 50, 0),
(140, 'tracksuit', 'Puma Men Graphic Tricot Suit Op Indigo Bunting\r\n', 'product/tracksuit1.jpg', 1900, 50, 0),
(141, 'tracksuit', 'SHIV NARESH Tracksuit -Navy Blue\r\n', 'product/tracksuit2.jpg', 1699, 50, 0),
(142, 'tracksuit', 'Puma Men Iconic Tricot Suit Cl Indigo Bunting\r\n', 'product/tracksuit3.jpg', 1400, 50, 0),
(143, 'tracksuit', 'Puma Men\'s Tracksuit (85155951 Black_Small)\r\n', 'product/tracksuit4.jpg', 1200, 50, 0),
(144, 'tracksuit', 'DIDA Black Polyester Athletic Sports Tracksuit for Men\r\n', 'product/tracksuit5.jpg', 1300, 50, 0),
(145, 'tracksuit', 'SHIV NARESH Unisex Tracksuit 40 Large Navy Blue\r\n', 'product/tracksuit6.jpg', 1899, 50, 0),
(146, 'sshoes', '\"Puma Men\'s Running Shoes\r\n\"\r\n', 'product/sshoes1.jpg', 1299, 50, 0),
(147, 'sshoes', 'Vector X Pro Speed 001 Cricket Shoes ', 'product/sshoes2.jpg', 1300, 50, 0),
(148, 'sshoes', 'Kraasa Men\'s Synthetic Sports Shoes\r\n', 'product/sshoes3.jpg', 999, 50, 0),
(149, 'sshoes', 'new balance Men\'s 411 Running Shoes\r\n', 'product/sshoes4.jpg', 1450, 50, 0),
(150, 'sshoes', 'layasa Men\'s Air Series Mesh Sports Running Shoes', 'product/sshoes5.jpg', 1600, 50, 0),
(151, 'sshoes', 'Puma Men\'s Sneaker\r\n', 'product/sshoes6.jpg', 1399, 50, 0),
(152, 'cbat', 'SG Phoenix Xtreme Kashmir Willow Cricket Bat, Size - SH', 'product/cb7.jpeg', 1200, 50, 0),
(153, 'cbat', 'Kookaburra Kahuna 350 English Willow Cricket Bat', 'product/cb8.jpeg', 1100, 50, 0),
(155, 'cbat', 'SS Master 1000 English Willow Cricket Bat - Size SH', 'product/cb9.jpeg', 1500, 50, 0),
(156, 'cbat', 'Reebok Tennis Ball Poplar Willow Cricket Bat', 'product/cb10.jpeg', 1300, 50, 0),
(157, 'cbat', 'KW100 Sizes 3, 4, Kashmir Willow Cricket Bat Light Blue', 'product/cb11.jpeg', 999, 50, 0),
(158, 'cbat', 'Thrax Proto 11 Kashmir Willow cricket bat Standard Size', 'product/cb12.jpeg', 1200, 50, 0),
(159, 'hstick', 'Teranga Punjab Tiger Hockey Stick', 'product/hs7.jpeg', 999, 50, 0),
(160, 'hstick', 'G-2 Goalie 36.5\" Baby blue/Orange', 'product/hs8.jpeg', 899, 50, 0),
(161, 'hstick', 'Flight 80 37.5\" Red', 'product/hs9.jpeg', 1100, 50, 0),
(162, 'hstick', 'Combat 2 x 36\" Black/Red', 'product/hs10.jpeg', 950, 50, 0),
(163, 'hstick', 'NanoCarb 7.0 36\" Black/yellow', 'product/hs11.jpeg', 1300, 50, 0),
(164, 'hstick', 'Flight 80 37.5\" Red', 'product/hs12.jpeg', 799, 50, 0),
(165, 'fshoes', 'Nike Mercurial Vapor XIII Club SG', 'product/fs7.jpeg', 2500, 50, 0),
(166, 'fshoes', 'Adidas Copa Mundial -Black', 'product/fs8.jpeg', 2300, 50, 0),
(167, 'fshoes', 'Umbro Speciali Eternal Pro HG', 'product/fs9.jpeg', 2100, 50, 0),
(168, 'fshoes', 'Puma Future 5.1 Netfit MG', 'product/fs10.jpeg', 2600, 50, 0),
(169, 'fshoes', 'Nike Phantom Vision 2 Academy Dynamic Fit FG/MG', 'product/fs11.jpeg', 2400, 50, 0),
(170, 'fshoes', 'Mizuno Morelia Neo II MD', 'product/fs12.jpeg', 2100, 50, 0),
(171, 'fball', 'Navex Rubber DOT Football size 5', 'product/fb7.jpeg', 1700, 50, 0),
(172, 'fball', 'Rubberized Football', 'product/fb8.jpeg', 2500, 50, 0),
(173, 'fball', 'Strauss Budding Star Football Size-5 (White/Red)', 'product/fb9.jpeg', 2400, 50, 0),
(174, 'fball', 'Puma Valencia CF Future Flare Mini', 'product/fb10.jpeg', 1999, 50, 0),
(177, 'fball', 'Puma Icon - WSG', 'product/fb11.jpeg', 2100, 50, 0),
(178, 'cball', 'Queen sports red leather ball pack of 3', 'product/cball7.jpg', 300, 50, 0),
(179, 'cball', 'Port Leather Practice Cricket Ball', 'product/cball8.jpg', 450, 50, 0),
(180, 'cball', 'Navex Red white Cricket Leather Ball HS Pcking 2 pcs', 'product/cball9.jpg', 460, 50, 0),
(181, 'cball', 'Port Leather Practice Cricket Ball', 'product/cball10.jpg', 205, 50, 0),
(182, 'cbat', 'Cricket Tennis Balls For Indoor And Outdoor Use ( Pack Of 6 Balls)', 'product/cball11.jpg', 360, 50, 0),
(183, 'cbat', 'Queen sports red leather ball pack of 3', 'product/cball12.jpg', 600, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(3) NOT NULL,
  `dp` varchar(225) DEFAULT 'user dp/default_dp.png',
  `name` varchar(225) NOT NULL,
  `address` varchar(350) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `dp`, `name`, `address`, `contact`, `email`, `password`) VALUES
(19, 'user dp/dvshri.png', 'Divyanshu Shrivastava', 'Anuppur  - 484224', '9111525164', 'divyanshu@bs.com', '123'),
(20, 'user dp/default_dp.png', 'Juhi Singh', 'Near K.V. School, Amlai- Distt-Anuppur', '1234567890', 'juhi@gpcnauppur.com', 'juhisingh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
