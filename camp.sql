-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 02:59 PM
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
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` tinyint(4) NOT NULL COMMENT '1 for superadmin',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_name`, `password`, `user_type`, `created`, `code`, `status`) VALUES
(1, 'sharma.amresh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2018-08-21 13:30:36', 'asqwww32t', 1);

-- --------------------------------------------------------

--
-- Table structure for table `camp_type`
--

CREATE TABLE `camp_type` (
  `id` int(11) NOT NULL,
  `ctype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_type`
--

INSERT INTO `camp_type` (`id`, `ctype`) VALUES
(1, 'Adventure'),
(2, 'Trekking'),
(3, 'Backpacking/Hiking Camping'),
(4, 'Tent Camping'),
(5, 'Survivalist Camping'),
(6, 'Rv and Van Camping'),
(7, 'Ultralight Backpacking'),
(8, 'Dry Camping'),
(9, 'Reenactment Camping'),
(10, 'Overlanding'),
(11, 'Winter Camping'),
(12, 'Work Camping'),
(13, 'Glamping'),
(14, 'Backcountry Camping'),
(15, 'Frontcountry Camping');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(11) NOT NULL,
  `countries_name` varchar(64) NOT NULL DEFAULT '',
  `countries_iso_code` varchar(2) NOT NULL,
  `countries_isd_code` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_name`, `countries_iso_code`, `countries_isd_code`) VALUES
(1, 'Afghanistan', 'AF', '93'),
(2, 'Albania', 'AL', '355'),
(3, 'Algeria', 'DZ', '213'),
(4, 'American Samoa', 'AS', '1-684'),
(5, 'Andorra', 'AD', '376'),
(6, 'Angola', 'AO', '244'),
(7, 'Anguilla', 'AI', '1-264'),
(8, 'Antarctica', 'AQ', '672'),
(9, 'Antigua and Barbuda', 'AG', '1-268'),
(10, 'Argentina', 'AR', '54'),
(11, 'Armenia', 'AM', '374'),
(12, 'Aruba', 'AW', '297'),
(13, 'Australia', 'AU', '61'),
(14, 'Austria', 'AT', '43'),
(15, 'Azerbaijan', 'AZ', '994'),
(16, 'Bahamas', 'BS', '1-242'),
(17, 'Bahrain', 'BH', '973'),
(18, 'Bangladesh', 'BD', '880'),
(19, 'Barbados', 'BB', '1-246'),
(20, 'Belarus', 'BY', '375'),
(21, 'Belgium', 'BE', '32'),
(22, 'Belize', 'BZ', '501'),
(23, 'Benin', 'BJ', '229'),
(24, 'Bermuda', 'BM', '1-441'),
(25, 'Bhutan', 'BT', '975'),
(26, 'Bolivia', 'BO', '591'),
(27, 'Bosnia and Herzegowina', 'BA', '387'),
(28, 'Botswana', 'BW', '267'),
(29, 'Bouvet Island', 'BV', '47'),
(30, 'Brazil', 'BR', '55'),
(31, 'British Indian Ocean Territory', 'IO', '246'),
(32, 'Brunei Darussalam', 'BN', '673'),
(33, 'Bulgaria', 'BG', '359'),
(34, 'Burkina Faso', 'BF', '226'),
(35, 'Burundi', 'BI', '257'),
(36, 'Cambodia', 'KH', '855'),
(37, 'Cameroon', 'CM', '237'),
(38, 'Canada', 'CA', '1'),
(39, 'Cape Verde', 'CV', '238'),
(40, 'Cayman Islands', 'KY', '1-345'),
(41, 'Central African Republic', 'CF', '236'),
(42, 'Chad', 'TD', '235'),
(43, 'Chile', 'CL', '56'),
(44, 'China', 'CN', '86'),
(45, 'Christmas Island', 'CX', '61'),
(46, 'Cocos (Keeling) Islands', 'CC', '61'),
(47, 'Colombia', 'CO', '57'),
(48, 'Comoros', 'KM', '269'),
(49, 'Congo Democratic Republic of', 'CG', '242'),
(50, 'Cook Islands', 'CK', '682'),
(51, 'Costa Rica', 'CR', '506'),
(52, 'Cote D\'Ivoire', 'CI', '225'),
(53, 'Croatia', 'HR', '385'),
(54, 'Cuba', 'CU', '53'),
(55, 'Cyprus', 'CY', '357'),
(56, 'Czech Republic', 'CZ', '420'),
(57, 'Denmark', 'DK', '45'),
(58, 'Djibouti', 'DJ', '253'),
(59, 'Dominica', 'DM', '1-767'),
(60, 'Dominican Republic', 'DO', '1-809'),
(61, 'Timor-Leste', 'TL', '670'),
(62, 'Ecuador', 'EC', '593'),
(63, 'Egypt', 'EG', '20'),
(64, 'El Salvador', 'SV', '503'),
(65, 'Equatorial Guinea', 'GQ', '240'),
(66, 'Eritrea', 'ER', '291'),
(67, 'Estonia', 'EE', '372'),
(68, 'Ethiopia', 'ET', '251'),
(69, 'Falkland Islands (Malvinas)', 'FK', '500'),
(70, 'Faroe Islands', 'FO', '298'),
(71, 'Fiji', 'FJ', '679'),
(72, 'Finland', 'FI', '358'),
(73, 'France', 'FR', '33'),
(75, 'French Guiana', 'GF', '594'),
(76, 'French Polynesia', 'PF', '689'),
(77, 'French Southern Territories', 'TF', NULL),
(78, 'Gabon', 'GA', '241'),
(79, 'Gambia', 'GM', '220'),
(80, 'Georgia', 'GE', '995'),
(81, 'Germany', 'DE', '49'),
(82, 'Ghana', 'GH', '233'),
(83, 'Gibraltar', 'GI', '350'),
(84, 'Greece', 'GR', '30'),
(85, 'Greenland', 'GL', '299'),
(86, 'Grenada', 'GD', '1-473'),
(87, 'Guadeloupe', 'GP', '590'),
(88, 'Guam', 'GU', '1-671'),
(89, 'Guatemala', 'GT', '502'),
(90, 'Guinea', 'GN', '224'),
(91, 'Guinea-bissau', 'GW', '245'),
(92, 'Guyana', 'GY', '592'),
(93, 'Haiti', 'HT', '509'),
(94, 'Heard Island and McDonald Islands', 'HM', '011'),
(95, 'Honduras', 'HN', '504'),
(96, 'Hong Kong', 'HK', '852'),
(97, 'Hungary', 'HU', '36'),
(98, 'Iceland', 'IS', '354'),
(99, 'India', 'IN', '91'),
(100, 'Indonesia', 'ID', '62'),
(101, 'Iran (Islamic Republic of)', 'IR', '98'),
(102, 'Iraq', 'IQ', '964'),
(103, 'Ireland', 'IE', '353'),
(104, 'Israel', 'IL', '972'),
(105, 'Italy', 'IT', '39'),
(106, 'Jamaica', 'JM', '1-876'),
(107, 'Japan', 'JP', '81'),
(108, 'Jordan', 'JO', '962'),
(109, 'Kazakhstan', 'KZ', '7'),
(110, 'Kenya', 'KE', '254'),
(111, 'Kiribati', 'KI', '686'),
(112, 'Korea, Democratic People\'s Republic of', 'KP', '850'),
(113, 'South Korea', 'KR', '82'),
(114, 'Kuwait', 'KW', '965'),
(115, 'Kyrgyzstan', 'KG', '996'),
(116, 'Lao People\'s Democratic Republic', 'LA', '856'),
(117, 'Latvia', 'LV', '371'),
(118, 'Lebanon', 'LB', '961'),
(119, 'Lesotho', 'LS', '266'),
(120, 'Liberia', 'LR', '231'),
(121, 'Libya', 'LY', '218'),
(122, 'Liechtenstein', 'LI', '423'),
(123, 'Lithuania', 'LT', '370'),
(124, 'Luxembourg', 'LU', '352'),
(125, 'Macao', 'MO', '853'),
(126, 'Macedonia, The Former Yugoslav Republic of', 'MK', '389'),
(127, 'Madagascar', 'MG', '261'),
(128, 'Malawi', 'MW', '265'),
(129, 'Malaysia', 'MY', '60'),
(130, 'Maldives', 'MV', '960'),
(131, 'Mali', 'ML', '223'),
(132, 'Malta', 'MT', '356'),
(133, 'Marshall Islands', 'MH', '692'),
(134, 'Martinique', 'MQ', '596'),
(135, 'Mauritania', 'MR', '222'),
(136, 'Mauritius', 'MU', '230'),
(137, 'Mayotte', 'YT', '262'),
(138, 'Mexico', 'MX', '52'),
(139, 'Micronesia, Federated States of', 'FM', '691'),
(140, 'Moldova', 'MD', '373'),
(141, 'Monaco', 'MC', '377'),
(142, 'Mongolia', 'MN', '976'),
(143, 'Montserrat', 'MS', '1-664'),
(144, 'Morocco', 'MA', '212'),
(145, 'Mozambique', 'MZ', '258'),
(146, 'Myanmar', 'MM', '95'),
(147, 'Namibia', 'NA', '264'),
(148, 'Nauru', 'NR', '674'),
(149, 'Nepal', 'NP', '977'),
(150, 'Netherlands', 'NL', '31'),
(151, 'Netherlands Antilles', 'AN', '599'),
(152, 'New Caledonia', 'NC', '687	'),
(153, 'New Zealand', 'NZ', '64'),
(154, 'Nicaragua', 'NI', '505'),
(155, 'Niger', 'NE', '227'),
(156, 'Nigeria', 'NG', '234'),
(157, 'Niue', 'NU', '683'),
(158, 'Norfolk Island', 'NF', '672'),
(159, 'Northern Mariana Islands', 'MP', '1-670'),
(160, 'Norway', 'NO', '47'),
(161, 'Oman', 'OM', '968'),
(162, 'Pakistan', 'PK', '92'),
(163, 'Palau', 'PW', '680'),
(164, 'Panama', 'PA', '507'),
(165, 'Papua New Guinea', 'PG', '675'),
(166, 'Paraguay', 'PY', '595'),
(167, 'Peru', 'PE', '51'),
(168, 'Philippines', 'PH', '63'),
(169, 'Pitcairn', 'PN', '64'),
(170, 'Poland', 'PL', '48'),
(171, 'Portugal', 'PT', '351'),
(172, 'Puerto Rico', 'PR', '1-787'),
(173, 'Qatar', 'QA', '974'),
(174, 'Reunion', 'RE', '262'),
(175, 'Romania', 'RO', '40'),
(176, 'Russian Federation', 'RU', '7'),
(177, 'Rwanda', 'RW', '250'),
(178, 'Saint Kitts and Nevis', 'KN', '1-869'),
(179, 'Saint Lucia', 'LC', '1-758'),
(180, 'Saint Vincent and the Grenadines', 'VC', '1-784'),
(181, 'Samoa', 'WS', '685'),
(182, 'San Marino', 'SM', '378'),
(183, 'Sao Tome and Principe', 'ST', '239'),
(184, 'Saudi Arabia', 'SA', '966'),
(185, 'Senegal', 'SN', '221'),
(186, 'Seychelles', 'SC', '248'),
(187, 'Sierra Leone', 'SL', '232'),
(188, 'Singapore', 'SG', '65'),
(189, 'Slovakia (Slovak Republic)', 'SK', '421'),
(190, 'Slovenia', 'SI', '386'),
(191, 'Solomon Islands', 'SB', '677'),
(192, 'Somalia', 'SO', '252'),
(193, 'South Africa', 'ZA', '27'),
(194, 'South Georgia and the South Sandwich Islands', 'GS', '500'),
(195, 'Spain', 'ES', '34'),
(196, 'Sri Lanka', 'LK', '94'),
(197, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', '290'),
(198, 'St. Pierre and Miquelon', 'PM', '508'),
(199, 'Sudan', 'SD', '249'),
(200, 'Suriname', 'SR', '597'),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', '47'),
(202, 'Swaziland', 'SZ', '268'),
(203, 'Sweden', 'SE', '46'),
(204, 'Switzerland', 'CH', '41'),
(205, 'Syrian Arab Republic', 'SY', '963'),
(206, 'Taiwan', 'TW', '886'),
(207, 'Tajikistan', 'TJ', '992'),
(208, 'Tanzania, United Republic of', 'TZ', '255'),
(209, 'Thailand', 'TH', '66'),
(210, 'Togo', 'TG', '228'),
(211, 'Tokelau', 'TK', '690'),
(212, 'Tonga', 'TO', '676'),
(213, 'Trinidad and Tobago', 'TT', '1-868'),
(214, 'Tunisia', 'TN', '216'),
(215, 'Turkey', 'TR', '90'),
(216, 'Turkmenistan', 'TM', '993'),
(217, 'Turks and Caicos Islands', 'TC', '1-649'),
(218, 'Tuvalu', 'TV', '688'),
(219, 'Uganda', 'UG', '256'),
(220, 'Ukraine', 'UA', '380'),
(221, 'United Arab Emirates', 'AE', '971'),
(222, 'United Kingdom', 'GB', '44'),
(223, 'United States', 'US', '1'),
(224, 'United States Minor Outlying Islands', 'UM', '246'),
(225, 'Uruguay', 'UY', '598'),
(226, 'Uzbekistan', 'UZ', '998'),
(227, 'Vanuatu', 'VU', '678'),
(228, 'Vatican City State (Holy See)', 'VA', '379'),
(229, 'Venezuela', 'VE', '58'),
(230, 'Vietnam', 'VN', '84'),
(231, 'Virgin Islands (British)', 'VG', '1-284'),
(232, 'Virgin Islands (U.S.)', 'VI', '1-340'),
(233, 'Wallis and Futuna Islands', 'WF', '681'),
(234, 'Western Sahara', 'EH', '212'),
(235, 'Yemen', 'YE', '967'),
(236, 'Serbia', 'RS', '381'),
(238, 'Zambia', 'ZM', '260'),
(239, 'Zimbabwe', 'ZW', '263'),
(240, 'Aaland Islands', 'AX', '358'),
(241, 'Palestine', 'PS', '970'),
(242, 'Montenegro', 'ME', '382'),
(243, 'Guernsey', 'GG', '44-1481'),
(244, 'Isle of Man', 'IM', '44-1624'),
(245, 'Jersey', 'JE', '44-1534'),
(247, 'Curaçao', 'CW', '599'),
(248, 'Ivory Coast', 'CI', '225'),
(249, 'Kosovo', 'XK', '383');

-- --------------------------------------------------------

--
-- Table structure for table `drink_type`
--

CREATE TABLE `drink_type` (
  `id` int(11) NOT NULL,
  `drink_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink_type`
--

INSERT INTO `drink_type` (`id`, `drink_type`) VALUES
(1, 'Alcoholic beverages'),
(2, 'Coffee'),
(3, 'Detox juices'),
(4, 'Soda'),
(5, 'Tea'),
(6, 'Water');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `facilityname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `facilityname`) VALUES
(1, '', 'spa'),
(2, '', 'swimming pool'),
(3, '', 'Bar'),
(4, '', 'barbeque'),
(5, '', 'garden'),
(6, '', 'shopping'),
(7, '', 'kitchen'),
(8, '', 'lounge'),
(9, '', 'free wifi'),
(10, '', 'Laundry'),
(11, '', 'Smoke-free property'),
(12, '', 'Special menu request'),
(13, '', 'Tour assistance'),
(14, '', 'Luggage room / storage');

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE `food_type` (
  `id` int(11) NOT NULL,
  `food_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`id`, `food_type`) VALUES
(1, 'Ayurvedic Food'),
(2, 'Fruitarian Food'),
(3, 'Gluten Free Food'),
(4, 'Hallal Food'),
(5, 'Lacto-Ovo Vegetarian Food'),
(6, 'Lactose-free Food'),
(7, 'Naturopathic Diet Food'),
(8, 'Organic Food'),
(9, 'Other Dietary Requirements'),
(10, 'Paleo Diet Food'),
(11, 'Pescatarian Food(You take fish but not meat)'),
(12, 'Raw Food'),
(13, 'Regular Food(Meat, Poultry, Fish)'),
(14, 'Seafood'),
(15, 'Vegan Food'),
(16, 'Vegetarian Food'),
(17, 'Whole Food'),
(18, 'Yogic Diet Food');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `meal_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `meal_type`) VALUES
(1, 'Breakfast'),
(2, 'Brunch'),
(3, 'Lunch'),
(4, 'Dinner'),
(5, 'Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `organisers`
--

CREATE TABLE `organisers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `add_street` varchar(200) NOT NULL COMMENT 'Basic Address',
  `add_city` varchar(100) NOT NULL COMMENT 'City',
  `add_postal` varchar(100) NOT NULL COMMENT 'postal code',
  `add_state` varchar(100) NOT NULL COMMENT 'state / province',
  `add_country` varchar(20) NOT NULL COMMENT 'country',
  `dob` date NOT NULL,
  `p_id` varchar(100) NOT NULL COMMENT 'passport id',
  `p_scan` varchar(100) NOT NULL COMMENT 'passport scan',
  `email_verify` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'if 1 then email is verified',
  `secret_code` varchar(20) NOT NULL COMMENT 'Will be used for forgotten passwords and email verification',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'If 1 then Account has been verified by Admin, else still awaiting approval',
  `acc_type` tinyint(1) DEFAULT '1' COMMENT '1 for individual or 2 for Business Accounts',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `b_name` varchar(100) NOT NULL COMMENT 'business name',
  `b_desc` varchar(500) NOT NULL COMMENT 'business Description',
  `b_photo` varchar(80) NOT NULL COMMENT 'Featured Photo',
  `b_website` varchar(100) NOT NULL COMMENT 'website address',
  `b_social` varchar(100) NOT NULL COMMENT 'social media page',
  `image` varchar(80) NOT NULL COMMENT 'Logo / Profile Image',
  `b_cert_id` varchar(100) NOT NULL COMMENT 'Business Certification id',
  `b_cert_body` varchar(100) NOT NULL COMMENT 'Certificate issuing body',
  `b_cert_scan` varchar(100) NOT NULL COMMENT 'Certificate scanned image',
  `is_owner` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'if 0 then ask for position, else organiser is the owner',
  `owner_name` varchar(150) NOT NULL COMMENT 'full name',
  `owner_email` varchar(150) NOT NULL COMMENT 'email',
  `owner_contact` varchar(50) NOT NULL COMMENT 'contact number with country code',
  `owner_card` varchar(150) NOT NULL COMMENT 'type of card and number',
  `owner_card_image` varchar(100) NOT NULL COMMENT 'image name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Basic Registeration details of Organisers';

--
-- Dumping data for table `organisers`
--

INSERT INTO `organisers` (`id`, `first_name`, `last_name`, `email`, `pass`, `contact`, `add_street`, `add_city`, `add_postal`, `add_state`, `add_country`, `dob`, `p_id`, `p_scan`, `email_verify`, `secret_code`, `status`, `acc_type`, `created`, `b_name`, `b_desc`, `b_photo`, `b_website`, `b_social`, `image`, `b_cert_id`, `b_cert_body`, `b_cert_scan`, `is_owner`, `owner_name`, `owner_email`, `owner_contact`, `owner_card`, `owner_card_image`) VALUES
(3, 'Rajnish', 'Kumar', 'raj@gm.com', '1537c1dea8479ff52bc68336e323385f', '+10987654321', '', '', '', '', '', '0000-00-00', '', '', 0, 'vCl1534768993', 0, 1, '2018-08-20 18:13:13', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', ''),
(4, 'Rajnish', 'Kumar', 'ravi@gmail.com', '1537c1dea8479ff52bc68336e323385f', '+919835819214', 'H-23', 'New Delhi', '110025', 'Delhi', '99', '2001-05-01', 'Passport (H20064841)', '300820181231271.jpg', 0, 'frF1534933059', 1, 1, '2018-08-22 15:47:39', 'Ramesh Inn', '<p><span style=\"color:#e74c3c\">We are the best in business.</span></p>\r\n\r\n<p><span style=\"color:#000000\"><strong>We love to cater and help all the travellers</strong></span></p>\r\n', '4_04092018130355.jpg', 'www.ramesh.com', 'facebook.com/rameshinn', '80_1536058199.gif', 'c01-22345-gh', 'Business association of Asia', '4_31082018083951.png', 0, '', '', '', '', ''),
(5, 'Amit', 'Kashyap', 'abc@gmail.com', '1537c1dea8479ff52bc68336e323385f', '+918287051797', 'Street - 4', 'cansas city', '876543', 'New Jersey', '223', '0000-00-00', '', '', 0, 'eJd1536063410', 1, 2, '2018-09-04 17:46:50', '', '', '', '', '', '', '', '', '', 0, 'Amitabh Kumar', 'amitabh@langjobs.com', '+908765432190', 'RN2144ZX54', '5_06092018090216.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `google_id` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `last_login` datetime NOT NULL,
  `first_login` datetime NOT NULL COMMENT 'date of first login',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'if 1 then approved, else pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `email`, `first_name`, `last_name`, `photo`, `last_login`, `first_login`, `status`) VALUES
(3, '104111753353108464108', 'moodi.rajnish@gmail.com', 'Rajnish', 'Kumar', 'https://lh3.googleusercontent.com/-0xYH6pRqYlY/AAAAAAAAAAI/AAAAAAAAAJ8/vwiHmhxiXPw/s96-c/photo.jpg', '2018-09-10 07:38:02', '2018-09-10 07:27:47', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camp_type`
--
ALTER TABLE `camp_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`);

--
-- Indexes for table `drink_type`
--
ALTER TABLE `drink_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisers`
--
ALTER TABLE `organisers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `camp_type`
--
ALTER TABLE `camp_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `countries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `drink_type`
--
ALTER TABLE `drink_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `organisers`
--
ALTER TABLE `organisers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
