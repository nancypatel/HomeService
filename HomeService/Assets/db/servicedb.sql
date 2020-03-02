-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 09:18 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(10) NOT NULL,
  `title` text DEFAULT NULL,
  `banner` varchar(50) DEFAULT NULL,
  `parent_cate` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `highlight_msg` text DEFAULT NULL,
  `why_msg` text DEFAULT NULL,
  `how_work` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `isfeature` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `title`, `banner`, `parent_cate`, `icon`, `image`, `highlight_msg`, `why_msg`, `how_work`, `about`, `isfeature`, `status`) VALUES
(1, 'AC Service & Repair', 'Assets\\services\\images\\155582490.png', 'Appliance Repair', 'Assets\\services\\images\\155582490.png', 'Assets\\services\\images\\cctv-installation.jpg', 'Services offered in AC Service and Repair', '\r\nLike any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don’t even need to clear your schedule as you can choose your desirable time slot. ’s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.\r\nHow it works?', '\r\nChoose the type of AC\r\n\r\nWe Service all types of ACs: Split, Window, Central\r\nChoose the service you need\r\n\r\nWe provide repairs, installations & servicing\r\nChoose your time-slot\r\n\r\nWe service from 9 AM - 9 PM\r\nHassle-free service\r\n\r\nOur professional will get in touch with you one hour before the service', 'Services offered in AC Service and Repair\r\n\r\n    Installing an AC: Choose this service for AC installation at your place. The professional will ensure that the AC is running properly as gas pressure and performance of the appliance will be checked post AC installation.\r\n    Uninstalling an existing AC: Select this option when you need professionals to dismount an AC. The appliance will be checked before the AC uninstallation.\r\n    Wet services: This service includes an end to end cleaning of your AC (which is not faulty). Cooling coils, condenser coils, outer panel, drain and filet pipes will be extensively cleaned and washed. However, high-pressure jet pumps will not be used for the cleaning purpose. Tick this service when you want your AC to be properly cleaned.\r\n    Repairs: Choose this option for diagnosis and repair of your AC. The professional will check the AC upon visitation and provide with quotation depending on the condition of the appliance.\r\n\r\nWhy AC Service and Repair?\r\n\r\n    Customer Protection: Unlike any other service provider, provides a customer protection of Rs. 10,000 against damages.\r\n    Verified Professionals: All the professionals on board with are taken through a screening process to check for their expertise.\r\n    Service Warranty: We at take full ownership of our services and hence, this is the reason that we provide a service warranty of 30 days.\r\n    Customer Centric: All our services are curated keeping our customers in mind and AC repair service is no exception.\r\n    Standardized pricing: To save our customers from unfair pricing, we have come up with the idea of standardized pricing with the rate card shared on both our website and App.\r\n    Online payment: Now pay hassle free post your service through our online portal. You will receive a link via SMS and/or email which will take you to the online payment portal.\r\n\r\nLike any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don’t even need to clear your schedule as you can choose your desirable time slot. ’s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.\r\nHow it works?\r\n\r\nTo find the best professionals near you in no time, you just need to go on the website or App and search for ‘AC Repair’ in the search tab. A pop up tab will open up wherein you will need to fill in the details according to your requirements. Questions such as what kind of service is required – split AC or window AC, location, time, etc. compromise the questionnaire. Once your request is uploaded on the portal, a professional will be at your doorstep at your requested time and location.', '\r\nLike any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don’t even need to clear your schedule as you can choose your desirable time slot. ’s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.\r\nHow it works?', 'Active'),
(2, 'Microwave Repair', 'Assets\\services\\images\\1555672197.png.png', 'Appliance Repair', 'Assets\\services\\images\\1555672197.png.png', 'Assets\\services\\images\\1555673043.jpeg', NULL, '\r\nLike any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don’t even need to clear your schedule as you can choose your desirable time slot. ’s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.\r\nHow it works?', 'Services offered in AC Service and Repair\r\n\r\n    Installing an AC: Choose this service for AC installation at your place. The professional will ensure that the AC is running properly as gas pressure and performance of the appliance will be checked post AC installation.\r\n    Uninstalling an existing AC: Select this option when you need professionals to dismount an AC. The appliance will be checked before the AC uninstallation.\r\n    Wet services: This service includes an end to end cleaning of your AC (which is not faulty). Cooling coils, condenser coils, outer panel, drain and filet pipes will be extensively cleaned and washed. However, high-pressure jet pumps will not be used for the cleaning purpose. Tick this service when you want your AC to be properly cleaned.\r\n    Repairs: Choose this option for diagnosis and repair of your AC. The professional will check the AC upon visitation and provide with quotation depending on the condition of the appliance.\r\n\r\nWhy AC Service and Repair?\r\n\r\n    Customer Protection: Unlike any other service provider, provides a customer protection of Rs. 10,000 against damages.\r\n    Verified Professionals: All the professionals on board with are taken through a screening process to check for their expertise.\r\n    Service Warranty: We at take full ownership of our services and hence, this is the reason that we provide a service warranty of 30 days.\r\n    Customer Centric: All our services are curated keeping our customers in mind and AC repair service is no exception.\r\n    Standardized pricing: To save our customers from unfair pricing, we have come up with the idea of standardized pricing with the rate card shared on both our website and App.\r\n    Online payment: Now pay hassle free post your service through our online portal. You will receive a link via SMS and/or email which will take you to the online payment portal.\r\n\r\nLike any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don’t even need to clear your schedule as you can choose your desirable time slot. ’s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.\r\nHow it works?\r\n\r\nTo find the best professionals near you in no time, you just need to go on the website or App and search for ‘AC Repair’ in the search tab. A pop up tab will open up wherein you will need to fill in the details according to your requirements. Questions such as what kind of service is required – split AC or window AC, location, time, etc. compromise the questionnaire. Once your request is uploaded on the portal, a professional will be at your doorstep at your requested time and location.', '\r\nLike any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don’t even need to clear your schedule as you can choose your desirable time slot. ’s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.\r\nHow it works?', '\r\nLike any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don’t even need to clear your schedule as you can choose your desirable time slot. ’s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.\r\nHow it works?', 'Active'),
(3, 'Refrigerator Repair', 'Assets\\services\\images\\Refrigerator.png', 'Appliance Repair', 'Assets\\services\\images\\Refrigerator1.png', 'Assets\\services\\images\\Refrigerator.png', NULL, 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Prices shown are for labour charges only.\r\n    check_circle\r\n    Consumables and parts (if used) will be charged extra\r\n    check_circle\r\n    Warranty on consumables and parts will be as per manufacturer only\r\n    check_circle\r\n    Housejoy provides a 30 day warranty on the service provided\r\n    check_circle\r\n    For any repair work, a quote will be given before proceeding\r\n    check_circle\r\n    Housejoy will not be liable for any pre-existing issues/potential risks reported by the technician but not handled due to customer refusal to repair the same\r\n\r\n    remove_circle\r\n    We do not repair or service built-in Microwaves\r\n\r\n', 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Servicing Includes: Outer body cleaning\r\n    check_circle\r\n    Inner body cleaning(Duct cleaning not included )\r\n    check_circle\r\n    Inner door Shelves and Trays cleaning\r\n    check_circle\r\n    Drain tray and gasket cleaning (stains removal upto 70%)\r\n    check_circle\r\n    Legs adjustment and compressor outer body cleaning', 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Prices shown are for labour charges only.\r\n    check_circle\r\n    Consumables and parts (if used) will be charged extra\r\n    check_circle\r\n    Warranty on consumables and parts will be as per manufacturer only\r\n    check_circle\r\n    Housejoy provides a 30 day warranty on the service provided\r\n    check_circle\r\n    For any repair work, a quote will be given before proceeding\r\n    check_circle\r\n    Housejoy will not be liable for any pre-existing issues/potential risks reported by the technician but not handled due to customer refusal to repair the same\r\n\r\n    remove_circle\r\n    We do not repair or service built-in Microwaves\r\n\r\n', 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Prices shown are for labour charges only.\r\n    check_circle\r\n    Consumables and parts (if used) will be charged extra\r\n    check_circle\r\n    Warranty on consumables and parts will be as per manufacturer only\r\n    check_circle\r\n    Housejoy provides a 30 day warranty on the service provided\r\n    check_circle\r\n    For any repair work, a quote will be given before proceeding\r\n    check_circle\r\n    Housejoy will not be liable for any pre-existing issues/potential risks reported by the technician but not handled due to customer refusal to repair the same\r\n\r\n    remove_circle\r\n    We do not repair or service built-in Microwaves\r\n\r\n', 'Active'),
(4, 'RO or Water Purifier Repair', 'Assets\\services\\images\\Ro Repair.png', 'Appliance Repair', 'Assets\\services\\images\\RO.png', 'Assets\\services\\images\\Ro Repair.png', NULL, NULL, 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Cleaning of the outer body\r\n    check_circle\r\n    Cleaning of drum and sediment tank\r\n    check_circle\r\n    Cleaning of all filters(before 2 years product only)\r\n    check_circle\r\n    Drain pipe cleaning\r\n    check_circle\r\n    Pre filter tank cleaning(pre filter charges are extra )', 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Prices shown are for labour charges only.\r\n    check_circle\r\n    Consumables and parts (if used) will be charged extra\r\n    check_circle\r\n    Warranty on consumables and parts will be as per manufacturer only\r\n    check_circle\r\n    Home servic provides a 30 day warranty on the service provided\r\n    check_circle\r\n    Home servic provides a 30 day warranty on Installation/Uninstallation services and 7 days for Servicing\r\n    check_circle\r\n    Home service will not be liable for any pre-existing issues/potential risks reported by the technician but not handled due to customer refusal to repair the same\r\n\r\n    remove_circle\r\n    We do not repair or service built-in Microwaves', 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Prices shown are for labour charges only.\r\n    check_circle\r\n    Consumables and parts (if used) will be charged extra\r\n    check_circle\r\n    Warranty on consumables and parts will be as per manufacturer only\r\n    check_circle\r\n    Home service provides a 30 day warranty on the service provided\r\n    check_circle\r\n    Homeservice provides a 30 day warranty on Installation/Uninstallation services and 7 days for Servicing\r\n    check_circle\r\n    Home service will not be liable for any pre-existing issues/potential risks reported by the technician but not handled due to customer refusal to repair the same\r\n\r\n    remove_circle\r\n    We do not repair or service built-in Microwaves', 'Active'),
(5, 'Washing Machine Repair', 'Assets\\services\\images\\Washing.png', 'Appliance Repair', 'Assets\\services\\images\\Washing1.png', 'Assets\\services\\images\\Washing.png', 'Service offered by Washing Machine Repair', NULL, 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Servicing Includes: Outer body,inlet pipe and drain pipe cleaning\r\n    check_circle\r\n    Pulsater cleaning(inner drum and chemical cleaning not included)\r\n    check_circle\r\n    Gasket cleaning(in Front load machines)\r\n    check_circle\r\n    Dump valve,Detergent dispenser tray,Inlet valve cleaning\r\n    check_circle\r\n    Belt ,Legs and inlet Tap adjustment\r\n    check_circle\r\n    Scale removal of the Drum is not included', 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Prices shown are for labour charges only.\r\n    check_circle\r\n    Consumables and parts (if used) will be charged extra\r\n    check_circle\r\n    Warranty on consumables and parts will be as per manufacturer only\r\n    check_circle\r\n    Home service provides a 30 day warranty on the service provided\r\n    check_circle\r\n    For any repair work, a quote will be given before proceeding\r\n    check_circle\r\n    Home service will not be liable for any pre-existing issues/potential risks reported by the technician but not handled due to customer refusal to repair the same\r\n\r\n    remove_circle\r\n    We do not repair or service built-in Microwaves\r\n\r\n', 'Inclusions & Exclusions\r\n\r\n    check_circle\r\n    Servicing Includes: Outer body,inlet pipe and drain pipe cleaning\r\n    check_circle\r\n    Pulsater cleaning(inner drum and chemical cleaning not included)\r\n    check_circle\r\n    Gasket cleaning(in Front load machines)\r\n    check_circle\r\n    Dump valve,Detergent dispenser tray,Inlet valve cleaning\r\n    check_circle\r\n    Belt ,Legs and inlet Tap adjustment\r\n    check_circle\r\n    Scale removal of the Drum is not included', 'Active'),
(6, 'Beauty & Spa', 'Assets\\services\\images\\Beauty.png', 'Beauty & SPA', 'Assets\\services\\images\\Beauty1.png', 'Assets\\services\\images\\Beauty.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(7, 'Makeup and Hairstyling', 'Assets\\services\\images\\hairstyle.png', 'Beauty & SPA', 'Assets\\services\\images\\hairstyle1.png', 'Assets\\services\\images\\hairstyle.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(8, 'Message for Women', 'Assets\\services\\images/Message.png', 'Beauty & SPA', 'Assets\\services\\images\\Message1.png', 'Assets\\services\\images\\Message.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(9, 'Salon at home for Women', 'Assets\\services\\images\\salon.png', 'Beauty & SPA', 'Assets\\services\\images\\salon1.png', 'Assets\\services\\images\\salon.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(10, 'Home Cleaning', 'Assets\\services\\images\\homeCleaning.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\cleaning.png', 'Assets\\services\\images\\homeCleaning.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(11, 'Bathroom Deep Cleaning', 'Assets\\services\\images\\bathroom.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\bathroom1.png', 'Assets\\services\\images\\bathroom.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(12, 'Car Cleaning', 'Assets\\services\\images\\carclean.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\carclean1.png', 'Assets\\services\\images\\carclean.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(13, 'Carpet Cleaning', 'Assets\\services\\images\\Carpet.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\Carpet1.png', 'Assets\\services\\images\\Carpet.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(14, 'Sofa Cleaning', 'Assets\\services\\images\\Sofa.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\Sofa1.png', 'Assets\\services\\images\\Sofa.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(15, 'Kitchen Deep Cleaning', 'Assets\\services\\images\\Kitchen.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\Kitchen1.png', 'Assets\\services\\images\\Kitchen.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(16, 'Carpenters', 'Assets\\services\\images\\Carpainter.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\Carpainter1.png', 'Assets\\services\\images\\Carpainter.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(17, 'Plumbers', 'Assets\\services\\images\\Plumber.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\Plumber1.png', 'Assets\\services\\images\\Plumber.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(18, 'Electricians', 'Assets\\services\\images\\Electricians.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\Electricians1.png', 'Assets\\services\\images\\Electricians.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(19, 'Pest Control', 'Assets\\services\\images\\Pest.png', 'Home Cleaning & Repai', 'Assets\\services\\images\\Pest1.png', 'Assets\\services\\images\\Pest.png', NULL, NULL, '', NULL, NULL, 'Active'),
(20, 'Baby Portfolio Photographer', 'Assets\\services\\images\\Babypic.png', 'Wedding & Events', 'Assets\\services\\images\\camera.png', 'Assets\\services\\images\\Babypic.png', NULL, NULL, NULL, NULL, NULL, 'Active\r\n'),
(21, 'Wedding Venues', 'Assets\\services\\images\\Venu.png', 'Wedding & Events', 'Assets\\services\\images\\camera1.png', 'Assets\\services\\images\\Venu.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(22, 'Wedding & Events', 'Assets\\services\\images\\weeding.png', 'Wedding & Events', 'Assets\\services\\images\\Wedding1.png', 'Assets\\services\\images\\weeding.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(23, 'Event Photograoher', 'Assets\\services\\images\\1576409871.png', 'Wedding & Events', 'Assets\\services\\images\\camera1.png', 'Assets\\services\\images\\1576409871.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(24, 'Party Decoration', 'Assets\\services\\images\\party.png', 'Wedding & Events', 'Assets\\services\\images\\camera.png', 'Assets\\services\\images\\party.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(25, 'Pre-Wedding Shoot', 'Assets\\services\\images\\Preweeding.png', 'Wedding & Events', 'Assets\\services\\images\\camera1.png', 'Assets\\services\\images\\Preweeding.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(26, 'Event Photograoher', 'Assets\\services\\images\\Event.png', 'Wedding & Events', 'Assets\\services\\images\\camera1.png', 'Assets\\services\\images\\Event.png', NULL, NULL, NULL, NULL, NULL, 'Active'),
(27, 'Painter', 'Assets\\services\\images\\Painter.png', 'Home Cleaning & Repair', 'Assets\\services\\images\\Painter1.png', 'Assets\\services\\images\\Painter.png', NULL, NULL, NULL, NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `category_sub`
--

CREATE TABLE `category_sub` (
  `catsub_id` int(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `catsub_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_sub`
--

INSERT INTO `category_sub` (`catsub_id`, `cat_id`, `catsub_name`) VALUES
(1, 1, 'AC Service'),
(2, 1, 'AC Repair'),
(3, 1, 'AC compressor Repair'),
(4, 1, 'Installation/Un-installation'),
(5, 2, 'Microwave Repair'),
(6, 2, 'Not heating');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `cid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`cid`, `name`, `email`, `subject`, `message`) VALUES
(1, 'aaa1', 'aaa@gmail.com', 'For painting', 'I want to hire a person');

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `id` int(10) NOT NULL,
  `banner` varchar(50) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`id`, `banner`, `title`) VALUES
(1, 'Assets\\services\\images\\1555827259_096-512.png', 'Appliance Repair'),
(2, 'Assets\\services\\images\\1555827697_lipstick.png', 'Beauty & SPA'),
(3, 'Assets\\services\\images\\business_symbolicon.png', 'Business & Text'),
(4, 'Assets\\services\\images\\roller.png', 'Home Cleaning & Repairs'),
(5, 'Assets\\services\\images\\manager_director_leader.png', 'Personal & More'),
(6, 'Assets\\services\\images\\1562481340_coin.png', 'Rent & Sell Property'),
(7, 'Assets\\services\\images\\1576341015_logo2.png', 'Transformation Service'),
(8, 'Assets\\services\\images\\1555826256.png', 'Wedding & Events');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'xyz', 'xyz@gmail.com', 'jhjhkhkh'),
(4, 'aaaa', 'aaa@gmail.com', 'aaa123'),
(7, 'pqr', 'pqr@gmail.com', 'pqr123'),
(8, 'pqr1', 'pqr@gmail.com', 'pqr1234'),
(10, 'aaa', '', ''),
(11, 'abc', 'abc@gmail.com', 'abc123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `category_sub`
--
ALTER TABLE `category_sub`
  ADD PRIMARY KEY (`catsub_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category_sub`
--
ALTER TABLE `category_sub`
  MODIFY `catsub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
