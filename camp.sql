-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 03:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `camp_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `main_lang` int(11) NOT NULL,
  `other_lang` varchar(50) NOT NULL COMMENT 'Comma seperated list of lang id',
  `address` varchar(300) NOT NULL,
  `lot_long` varchar(25) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `facilities` varchar(50) NOT NULL,
  `camp_type` varchar(50) NOT NULL,
  `camp_for` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `intro` mediumtext NOT NULL,
  `currency` varchar(4) NOT NULL,
  `near_airport` int(11) NOT NULL,
  `pickup_service` tinyint(1) NOT NULL COMMENT 'if 1 pick up is free of charge, 2 is pick up with cost, 3 is guest will have to arrive by their own',
  `pickup_cost` varchar(10) NOT NULL,
  `camp_direction` mediumtext NOT NULL,
  `inc_meal` tinyint(1) NOT NULL COMMENT 'if 0, no included meals, if 1 then see the list',
  `meal_list` varchar(20) NOT NULL COMMENT 'comma seperated list of meals',
  `food_type` varchar(20) NOT NULL COMMENT 'comma seperated list of foods available',
  `inc_drink` tinyint(1) NOT NULL COMMENT 'if 0, no included drinks, if 1 then see the list',
  `drink_list` varchar(20) NOT NULL COMMENT 'comma seperated drink ids',
  `itinerary` mediumtext NOT NULL,
  `included` mediumtext NOT NULL,
  `noincluded` mediumtext NOT NULL,
  `things_to_do` mediumtext NOT NULL,
  `video_link` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `organiser_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`camp_id`, `country_id`, `main_lang`, `other_lang`, `address`, `lot_long`, `duration`, `facilities`, `camp_type`, `camp_for`, `title`, `intro`, `currency`, `near_airport`, `pickup_service`, `pickup_cost`, `camp_direction`, `inc_meal`, `meal_list`, `food_type`, `inc_drink`, `drink_list`, `itinerary`, `included`, `noincluded`, `things_to_do`, `video_link`, `created`, `organiser_id`, `status`) VALUES
(1, 4, 5, '3,5', 'Surya Retreat, 100 Calle La Tabaiba, Villaverde, Fuerteventura 35640, Spain', '27.134845,36.8545321', '27', '', '1,4', '2,5', '8 Days Rejuvenating Pilates and Yoga Retreat in Fuerteventura, Spain', '<p>INTRODUCING</p>\r\n\r\n<h2>Pilates and Yoga Retreat in Spain</h2>\r\n\r\n<p>Expert tip: This is one of the most popular yoga retreats offered Spain.</p>\r\n\r\n<p>Relax and revitalise at Europe&#39;s leading Yoga and Pilates Retreat, Canary Islands, Spain. Join us at our stunning Surya Retreat. Stretch and strengthen your body and mind and bring yourself back into balance with a unique blend of yoga, pilates and meditation. Enjoy mouthwatering vegetarian meals, holistic massage and stunning sunsets over the volcanoes.</p>\r\n\r\n<h3>RETREAT HIGHLIGHTS</h3>\r\n\r\n<ul>\r\n	<li>Daily Pilates</li>\r\n	<li>Daily yoga and meditation</li>\r\n	<li>Brand new facilities, such as a hot tub and a large outdoor yoga deck</li>\r\n	<li>Delicious, nourishing vegetarian breakfasts/brunches</li>\r\n	<li>5 freshly prepared vegetarian evening meals</li>\r\n	<li>1 rejuvenating full body massage</li>\r\n	<li>7 nights deluxe accommodation</li>\r\n	<li>Free WiFi</li>\r\n</ul>\r\n\r\n<h3>SKILL LEVEL</h3>\r\n\r\n<ul>\r\n	<li>Beginner</li>\r\n	<li>Intermediate</li>\r\n	<li>Advanced</li>\r\n</ul>\r\n', 'BRL', 0, 2, '2457', '', 1, '', '13,16', 1, '4,6', '<p>At the heart of the retreat program, is exceptional yoga and pilates instruction by a team of dedicated and caring teachers who have a heartfelt and down-to-earth approach to wellbeing.</p>\r\n\r\n<p>Below is a sample schedule.</p>\r\n\r\n<h3>SATURDAY</h3>\r\n\r\n<ul>\r\n	<li>New arrivals</li>\r\n	<li>17.30 - 19.00: Gentle yoga</li>\r\n</ul>\r\n\r\n<h3>SUNDAY</h3>\r\n\r\n<ul>\r\n	<li>08.30 - 10.00: Yoga and pranayama class</li>\r\n	<li>Time for beach visit, relaxation or for one on one and private sessions.</li>\r\n	<li>17.00: Pilates session</li>\r\n	<li>18.00: Guided meditation</li>\r\n</ul>\r\n\r\n<h3>MONDAY</h3>\r\n\r\n<ul>\r\n	<li>08.30 - 10.00: Yoga</li>\r\n	<li>Time for beach visit, relaxation or for one on one and private sessions.</li>\r\n	<li>17.00: Pilates session</li>\r\n</ul>\r\n\r\n<h3>TUESDAY</h3>\r\n\r\n<ul>\r\n	<li>09.00 - 10.00: Pilates</li>\r\n	<li>11.00 - 12.00: Pilates Q and A</li>\r\n	<li>Time for inclusive massages, beach visit, relaxation or for one on one and private sessions.</li>\r\n	<li>16.30 - 17.00: Understanding yoga</li>\r\n	<li>17.00 - 18.15: Yoga and meditation</li>\r\n</ul>\r\n\r\n<h3>WEDNESDAY</h3>\r\n\r\n<ul>\r\n	<li>08.30 - 10.00: Yoga and meditation</li>\r\n	<li>Inclusive beach transfer to stunning beach, time to visit Natural Park, sand dunes</li>\r\n	<li>Evening is free to rest and explore</li>\r\n</ul>\r\n\r\n<h3>THURSDAY</h3>\r\n\r\n<ul>\r\n	<li>09.00 - 10.00: Pilates</li>\r\n	<li>Time for one on one and private sessions</li>\r\n	<li>17.00 - 18.30: Yin Yoga</li>\r\n</ul>\r\n\r\n<h3>FRIDAY</h3>\r\n\r\n<ul>\r\n	<li>09.00 - 10.00: Pilates</li>\r\n	<li>Time for one on one and private sessions.</li>\r\n	<li>17.00: Yoga and pranayama</li>\r\n	<li>18.30: Farewell meditation</li>\r\n</ul>\r\n\r\n<h3>SATURDAY</h3>\r\n\r\n<ul>\r\n	<li>Brunch</li>\r\n	<li>Departures</li>\r\n</ul>\r\n', '<ul>\r\n	<li>7 nights accommodation</li>\r\n	<li>2 daily yoga practice</li>\r\n	<li>Meditations</li>\r\n	<li>Pranayamas and conscious breath work</li>\r\n	<li>1 day trip to Es Vedra</li>\r\n	<li>3 meals per day</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Beauty treatments</li>\r\n	<li>Horse riding</li>\r\n	<li>Massages</li>\r\n</ul>\r\n', '', 'https://www.youtube.com/watch?v=XmnZ9HZTHjw', '2018-09-14 18:09:33', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
