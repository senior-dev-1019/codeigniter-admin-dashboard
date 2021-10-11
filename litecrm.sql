-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 11, 2021 at 12:29 AM
-- Server version: 5.7.32
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litecrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(191) NOT NULL,
  `appointment_type` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `appointment_date` varchar(191) NOT NULL,
  `appointment_time` time(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_type`, `description`, `appointment_date`, `appointment_time`, `user_id`, `client_id`, `created_at`) VALUES
(5, 'Avondtarief', 'Dit is een test', '04-30-2021', '11:00:00.000000', 0, 20, '2021-04-30 12:44:54'),
(6, 'Dagtarief', '', '05-01-2021', '15:30:00.000000', 0, 22, '2021-08-18 13:56:49'),
(7, 'Avondtarief', 'Test test', '06-30-2021', '12:00:00.000000', 0, 20, '2021-06-30 10:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `user` int(50) NOT NULL,
  `client` int(50) NOT NULL,
  `task_id` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`title`, `ID`, `start`, `end`, `user`, `client`, `task_id`, `created_at`) VALUES
('Stroom storing', 37, '2021-08-24 09:00:00', '2021-08-24 10:00:00', 0, 0, 0, '2021-09-29 12:49:44'),
('Stroom storing', 38, '2021-08-25 01:30:00', '2021-08-25 02:30:00', 0, 0, 0, '2021-09-29 12:49:44'),
('Stroom storing', 39, '2021-08-24 01:30:00', '2021-08-24 02:30:00', 0, 21, 16, '2021-09-29 15:33:28'),
('Vervolgafspraak', 40, '2021-09-14 07:00:00', '2021-09-14 08:00:00', 1, 22, 0, '2021-09-29 12:49:44'),
('Stroom storing', 41, '2021-09-15 03:30:00', '2021-09-15 04:30:00', 0, 22, 0, '2021-09-29 12:49:44'),
('Stroom storing', 42, '2021-09-15 02:30:00', '2021-09-15 03:30:00', 0, 22, 0, '2021-09-29 12:49:44'),
('Stroom storing', 43, '2021-09-17 03:30:00', '2021-09-17 04:30:00', 0, 22, 0, '2021-09-29 12:49:44'),
('Stroom storing', 44, '2021-09-17 00:30:00', '2021-09-17 01:30:00', 1, 0, 0, '2021-09-29 12:49:44'),
('Stroom storing', 45, '2021-09-17 02:00:00', '2021-09-17 03:00:00', 1, 22, 0, '2021-09-29 12:49:44'),
('Stroom storing', 46, '2021-09-16 05:00:00', '2021-09-16 06:00:00', 1, 23, 0, '2021-09-29 12:49:44'),
('Stroom storing', 47, '2021-09-22 08:00:00', '2021-09-22 09:00:00', 0, 24, 0, '2021-09-29 12:49:44'),
('Stroom storing', 48, '2021-09-30 04:00:00', '2021-09-30 05:00:00', 0, 25, 16, '2021-09-29 15:33:03'),
('Stroom storing', 49, '2021-09-28 02:30:00', '2021-09-28 03:30:00', 0, 25, 0, '2021-09-30 05:51:22'),
('Stroom storing', 50, '2021-09-28 01:00:00', '2021-09-28 02:00:00', 0, 25, 0, '2021-09-30 05:56:27'),
('Stroom storing', 51, '2021-09-28 05:00:00', '2021-09-28 06:00:00', 0, 25, 0, '2021-09-30 06:01:39'),
('Stroom storing', 52, '2021-09-29 01:00:00', '2021-09-29 02:00:00', 1, 25, 0, '2021-09-30 06:07:07'),
('Stroom storing', 53, '2021-09-30 05:30:00', '2021-10-10 06:30:00', 1, 48, 0, '2021-09-30 06:10:14'),
('Vervolgafspraak', 54, '2021-09-29 03:30:00', '2021-09-29 04:30:00', 1, 48, 0, '2021-09-30 06:10:45'),
('Vervolgafspraak', 55, '2021-10-01 02:00:00', '2021-10-01 03:00:00', 1, 0, 0, '2021-09-30 06:12:50'),
('Vervolgafspraak', 56, '2021-09-28 08:30:00', '2021-09-28 09:30:00', 1, 48, 0, '2021-09-30 06:16:05'),
('Stroom storing', 57, '2021-10-01 05:00:00', '2021-10-01 06:00:00', 0, 26, 0, '2021-09-30 06:23:34'),
('Stroom storing', 58, '2021-10-01 10:30:00', '2022-10-01 11:30:00', 1, 26, 0, '2021-09-30 06:25:40'),
('Stroom storing', 59, '2021-09-29 08:00:00', '2021-09-29 09:00:00', 0, 26, 0, '2021-09-30 06:25:56'),
('Stroom storing', 60, '2021-10-02 05:00:00', '2021-10-02 06:00:00', 1, 26, 0, '2021-09-30 06:26:05'),
('Stroom storing', 61, '2021-09-27 08:30:00', '2021-09-27 09:30:00', 0, 26, 0, '2021-09-30 06:26:14'),
('Stroom storing', 62, '2021-10-01 12:00:00', '2021-10-01 13:00:00', 1, 27, 0, '2021-10-01 08:21:44'),
('Stroom storing', 63, '2021-10-06 06:30:00', '2021-10-06 07:30:00', 0, 0, 0, '2021-10-04 10:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(191) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `house_number` int(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `first_name`, `last_name`, `email`, `phonenumber`, `street_name`, `house_number`, `zipcode`, `city`, `province`, `created_at`, `last_modified`) VALUES
(19, 'Athbi', 'Mohammed', 'info@webcarepacks.nl', '+31627348455', 'Anthoni van Leeuwenhoekkade', 36, '2251JS', 'Voorschoten', '5744', '2021-07-22 21:53:38', '2021-07-22 21:53:38'),
(20, 'Mike', 'Breggeman', 'facturen@stroom-storing.nl', '+31627348455', 'Rooseveltstraat 55', 34, '2231DL', 'Leiden', '12', '2021-07-26 07:08:12', '2021-07-26 07:08:12'),
(21, 'Athbi 555555', 'Mohammed', 'tyty33tyty33@gmail.com', '0627348455', 'Anthoni van Leeuwenhoekkade', 21, '2251JS', 'Voorschoten', '12', '2021-08-22 23:16:02', '2021-08-22 23:16:02'),
(22, 'Athbi', 'Mohammed', 'info@webcarepackks.nl', '+31627348455', 'Rooseveltstraat', 55, '2231DL', 'Leiden', '12', '2021-09-16 10:20:53', '2021-09-16 10:20:53'),
(23, 'Mike', 'Breggeman', 'facturen@stroom-storing.nll', '+31627348455', 'Rooseveltstraat', 55, '2231DL', 'Leiden', '12', '2021-09-16 12:34:32', '2021-09-16 12:34:32'),
(24, 'Athbi', 'test', 'info@athbi.nl', '05555554455', 'teststraat', 45, '2145js', 'Leiden', '12', '2021-09-24 12:50:13', '2021-09-24 12:50:13'),
(25, 'Cola', 'Redbull', 'info@cola.nl', '0627348455', 'Corsair', 0, 'Corsair', 'Corsair', '12', '2021-09-29 08:49:17', '2021-09-29 08:49:17'),
(26, 'Jozephus', 'van Krieken', 'JozephusvanKrieken@dayrep.com', ' 06-73471818', 'Prinses Irenestraat', 150, '2741 DP', 'Waddinxveen', '12', '2021-09-30 06:23:29', '2021-09-30 06:23:29'),
(27, 'Remond', 'Molter', 'remond@mkbia.nl', '0612345678', 'Rooseveltstraat', 55, '2321 BL', 'Leiden', '12', '2021-10-01 08:21:15', '2021-10-01 08:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `clients_leads`
--

CREATE TABLE `clients_leads` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `lead_source` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients_leads`
--

INSERT INTO `clients_leads` (`id`, `client_id`, `lead_source`, `created_at`) VALUES
(1, 23, '0800', '2021-09-16 12:34:32'),
(2, 24, '071', '2021-09-24 12:50:13'),
(3, 25, '0800', '2021-09-29 08:49:17'),
(4, 26, 'Allfree mail', '2021-09-30 06:23:29'),
(5, 27, '0800', '2021-10-01 08:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `clients_notes`
--

CREATE TABLE `clients_notes` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients_notes`
--

INSERT INTO `clients_notes` (`id`, `client_id`, `note`, `created_at`) VALUES
(43, 19, 'Dit is een test', '2021-07-22 21:53:38'),
(44, 20, 'yujyujyutjuyjyujuy', '2021-07-24 10:12:33'),
(45, 21, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non hendrerit quam. Fusce fermentum mollis lacus eu rhoncus. Ut mattis est sapien, ac mattis massa dictum viverra. Phasellus vel tempus augue. Praesent sollicitudin fermentum tellus id gravida. Phasellus sed metus quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum ultricies dolor, ac vestibulum sem volutpat a. Nulla ultricies lorem nec turpis consequat, in feugiat diam lacinia. Proin tempor sed sapien eget sollicitudin.', '2021-07-24 14:45:02'),
(46, 20, 'gregjeriopghjeorihgoerhgoierhogierhgoehrgoierhgoierhiogiierhgoirehgopergherigoherophgoehgoirehgoerihgoerghioehrgoer', '2021-07-24 15:41:54'),
(47, 22, 'Dit is een test', '2021-07-24 17:40:56'),
(48, 20, 'wdeqwdfewf', '2021-07-26 07:08:12'),
(49, 21, 'Dit is een dashboard test', '2021-08-22 23:16:03'),
(50, 22, 'Dit is een test', '2021-09-16 10:20:53'),
(51, 23, 'Dit is een test.', '2021-09-16 12:34:32'),
(52, 24, 'Dit is een test', '2021-09-24 12:50:13'),
(53, 25, 'Dit is een test', '2021-09-29 08:49:17'),
(54, 26, '2014 BMW 3 Series Gran Turismo', '2021-09-30 06:23:29'),
(55, 27, 'Geen stroom', '2021-10-01 08:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '2018-09-12 18:03:05'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `url`, `class`, `start_date`, `end_date`) VALUES
(1, 'Example', 'http://www.example.com', 'event-sucess', '2018-09-10 18:00:00', '2018-09-10 18:01:02'),
(2, 'Jee Tutorials', 'https://roytuts.com', 'event-important', '2018-09-11 17:00:00', '2018-09-12 17:42:45'),
(3, 'Roy Tutorial', 'https://roytuts.com', 'event-info', '2018-09-12 18:03:05', '2018-09-13 06:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'Meeting with Mike', '2021-09-08 12:00:00', '2021-09-08 14:00:00'),
(4, 'Meeting with Mike', '2021-08-11 15:30:00', '2021-08-11 16:30:00'),
(5, 'test', '2021-08-18 08:30:00', '2021-08-18 09:00:00'),
(6, 'test', '2021-08-12 00:00:00', '2021-08-13 00:00:00'),
(7, 'Event nummer 3', '2021-08-25 07:00:00', '2021-08-25 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `finance_id` int(11) NOT NULL,
  `appointment_type` int(101) NOT NULL,
  `parkeergeld` int(101) NOT NULL,
  `bus_material` int(101) NOT NULL,
  `pin_cash` int(101) NOT NULL,
  `amount` int(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_city`
--

CREATE TABLE `form_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(250) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_city`
--

INSERT INTO `form_city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Alblasserdam', 12),
(2, 'Alphen aan den Rijn', 12),
(3, 'Barendrecht', 12),
(4, 'Brielle', 12),
(5, 'Capelle aan den IJssel', 12),
(6, 'Delft', 12),
(7, 'Dordrecht', 12),
(8, 'Gorinchem', 12),
(9, 'Gouda', 12),
(10, '\'s-Gravenhage', 12),
(11, 'Hardinxveld-Giessendam', 12),
(12, 'Hellevoetsluis', 12),
(13, 'Hendrik-Ido-Ambacht', 12),
(14, 'Hillegom', 12),
(15, 'Katwijk', 12),
(16, 'Krimpen aan den IJssel', 12),
(17, 'Leiden', 12),
(18, 'Leiderdorp', 12),
(19, 'Lisse', 12),
(20, 'Maassluis', 12),
(21, 'Nieuwkoop', 12),
(22, 'Noordwijk', 12),
(23, 'Oegstgeest', 12),
(24, 'Papendrecht', 12),
(25, 'Ridderkerk', 12),
(26, 'Rotterdam', 12),
(27, 'Rijswijk', 12),
(28, 'Schiedam', 12),
(29, 'Sliedrecht', 12),
(30, 'Albrandswaard', 12),
(31, 'Westvoorne', 12),
(32, 'Vlaardingen', 12),
(33, 'Voorschoten', 12),
(34, 'Waddinxveen', 12),
(35, 'Wassenaar', 12),
(36, 'Zoetermeer', 12),
(37, 'Zoeterwoude', 12),
(38, 'Zwijndrecht', 12),
(39, 'Teylingen', 12),
(40, 'Lansingerland', 12),
(41, 'Westland', 12),
(42, 'Midden-Delfland', 12),
(43, 'Kaag en Braassem', 12),
(44, 'Zuidplas', 12),
(45, 'Bodegraven-Reeuwijk', 12),
(46, 'Leidschendam-Voorburg', 12),
(47, 'Goeree-Overflakkee', 12),
(48, 'Pijnacker-Nootdorp', 12),
(49, 'Nissewaard', 12),
(50, 'Krimpenerwaard', 12),
(51, 'Hoeksche Waard', 12),
(52, 'Molenlanden', 12),
(65, 'Assen', 1),
(66, 'Coevorden', 1),
(67, 'Emmen', 1),
(68, 'Hoogeveen', 1),
(69, 'Meppel', 1),
(70, 'Aa en Hunze', 1),
(71, 'Borger-Odoorn', 1),
(72, 'De Wolden', 1),
(73, 'Noordenveld', 1),
(74, 'Westerveld', 1),
(75, 'Tynaarlo', 1),
(76, 'Midden-Drenthe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_short_zipcode`
--

CREATE TABLE `form_short_zipcode` (
  `short_zipcode_id` int(11) NOT NULL,
  `short_zipcode_name` varchar(255) NOT NULL,
  `short_zipcode` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_short_zipcode`
--

INSERT INTO `form_short_zipcode` (`short_zipcode_id`, `short_zipcode_name`, `short_zipcode`) VALUES
(1, 'Amsterdam', 10),
(2, 'Edam / Amstelveen', 11),
(3, 'Hilversum', 12),
(4, 'Abcoude / Almere', 13),
(5, 'Bussum / Uithoorn / Purmerend', 14),
(6, 'Zaandam', 15),
(7, 'Hoorn', 16),
(8, 'Schagen / Texel', 17),
(9, 'Alkmaar', 18),
(10, 'IJmuiden - Egmond', 19),
(11, 'Haarlem', 20),
(12, 'Hoofddorp', 21),
(13, 'Noordwijk / Leidschendam', 22),
(14, 'Leiden', 23),
(15, 'Alphen aan den Rijn', 24),
(16, 'Den Haag', 25),
(17, 'Delft', 26),
(18, 'Zoetermeer', 27),
(19, 'Gouda', 28),
(20, 'Capelle aan den IJssel', 29),
(21, 'Rotterdam', 30),
(22, 'Schiedam / Vlaardingen', 31),
(23, 'Spijkenisse', 32),
(24, 'Dordrecht', 33),
(25, 'Woerden', 34),
(26, 'Utrecht', 35),
(27, 'Maarssen / Mijdrecht', 36),
(28, 'Soest / Barneveld', 37),
(29, 'Amersfoort', 38),
(30, 'Veenendaal / Houten', 39),
(31, 'Tiel', 40),
(32, 'Culemborg', 41),
(33, 'Gorinchem', 42),
(34, 'Zierikzee', 43),
(35, 'Goes', 44),
(36, 'Breskens', 45),
(37, 'Bergen op Zoom', 46),
(38, 'Roosendaal', 47),
(39, 'Breda', 48),
(40, 'Oosterhout', 49),
(41, 'Tilburg', 50),
(42, 'Kaatsheuvel', 51),
(43, 'Den Bosch', 52),
(44, 'Oss', 53),
(45, 'Uden', 54),
(46, 'Valkenswaard', 55),
(47, 'Eindhoven', 56),
(48, 'Helmond', 57),
(49, 'Venray', 58),
(50, 'Venlo', 59),
(51, 'Weert', 60),
(52, 'Geleen', 61),
(53, 'Maastricht', 62),
(54, 'Valkenburg', 63),
(55, 'Heerlen', 64),
(56, 'Nijmegen', 65),
(57, 'Wijchen', 66),
(58, 'Ede', 67),
(59, 'Arnhem', 68),
(60, 'Dieren', 69),
(61, 'Doetinchem', 70),
(62, 'Winterswijk', 71),
(63, 'Zutphen', 72),
(64, 'Apeldoorn', 73),
(65, 'Deventer', 74),
(66, 'Enschede', 75),
(67, 'Almelo', 76),
(68, 'Hardenberg', 77),
(69, 'Emmen', 78),
(70, 'Hoogeveen', 79),
(71, 'Zwolle', 80),
(72, 'Epe', 81),
(73, 'Lelystad', 82),
(74, 'Emmeloord', 83),
(75, 'Heereveen', 84),
(76, 'Joure', 85),
(77, 'Sneek', 86),
(78, 'Bolsward', 87),
(79, 'Harlingen / Vlieland	 / Terschelling', 88),
(80, 'Leeuwarden', 89),
(81, 'Grouw', 90),
(82, 'Dokkum / Ameland /  Schiermonnikoog', 91),
(83, 'Drachten', 92),
(84, 'Roden', 93),
(85, 'Assen', 94),
(86, 'Stadskanaal', 95),
(87, 'Veendam', 96),
(88, 'Groningen', 97),
(89, 'Zuidhorn', 98),
(90, 'Delftzijl', 99);

-- --------------------------------------------------------

--
-- Table structure for table `form_state`
--

CREATE TABLE `form_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_state`
--

INSERT INTO `form_state` (`state_id`, `state_name`) VALUES
(1, 'Drenthe'),
(2, 'Flevoland'),
(3, 'Friesland'),
(4, 'Gelderland'),
(5, 'Groningen'),
(6, 'Limburg'),
(7, 'Noord-Brabant'),
(8, 'Noord-Holland'),
(9, 'Overijssel'),
(10, 'Utrecht'),
(11, 'Zeeland'),
(12, 'Zuid-Holland');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoices_id` int(11) NOT NULL,
  `appointment_type` int(55) NOT NULL,
  `parking` int(191) NOT NULL,
  `bus_material` int(101) NOT NULL,
  `amount` int(191) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoices_id`, `appointment_type`, `parking`, `bus_material`, `amount`, `created_at`) VALUES
(1, 150, 22, 5, 177, '2021-04-30 13:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_categorie_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(12, 1, 'Pets', 'pets', 'Social media', '', '2021-04-05 18:53:29'),
(15, 1, 'Contact', 'contact', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada lorem dolor, porta tempus odio cursus id. Nulla lobortis mauris quis erat gravida pellentesque. Curabitur ultricies vestibulum leo eget gravida. Maecenas tellus nisi, vestibulum et accumsan eget, aliquet at tellus. Nullam placerat, ligula sit amet molestie scelerisque, ante arcu tincidunt lectus, nec efficitur enim mauris ut leo. Suspendisse id tellus imperdiet, ullamcorper massa at, maximus metus. Mauris varius, metus nec ornare congue, arcu velit mollis ligula, sed porttitor enim eros bibendum ex. Donec sed velit in metus vehicula semper nec vel tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec vel eros egestas, egestas neque ac, cursus purus. Cras et porttitor mi. Vestibulum quam lectus, malesuada eu turpis at, vulputate ornare lacus. Mauris id ultricies turpis. Ut metus arcu, congue commodo tellus at, pretium lobortis nunc. Donec euismod auctor elementum. Vivamus egestas auctor augue, ut laoreet augue congue sit amet.\r\n\r\nEtiam sollicitudin elit vitae scelerisque elementum. Curabitur in leo pulvinar, viverra enim non, semper risus. Maecenas sit amet sapien aliquet, mollis eros id, venenatis eros. Nulla facilisi. Curabitur interdum, ante id placerat volutpat, est neque accumsan mi, sit amet auctor mauris erat at velit. Cras consectetur nulla ut pretium convallis. Suspendisse potenti. Pellentesque porttitor vulputate dapibus. Sed a nibh in lorem condimentum convallis. Maecenas sit amet sapien quis erat aliquam porta. Morbi lobortis egestas ligula eget feugiat. Fusce sed risus vel elit commodo viverra in in leo. Nunc lacinia ullamcorper felis et pulvinar.', '', '2021-04-09 08:09:27'),
(16, 1, 'Social Media', 'social-Media', 'Dit is een test', '', '2021-04-20 09:51:35'),
(22, 5, 'Default page', 'default-page', 'rgergerg', 'noimage.jpg', '2021-04-20 10:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `created_at`) VALUES
(1, 'Business', '2021-04-20 09:23:14'),
(2, 'Tech', '2021-04-20 09:23:14'),
(5, 'News', '2021-04-20 09:42:34'),
(6, 'Sport', '2021-04-20 09:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `title`, `status`, `description`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `client_id`, `user_id`, `event_id`, `created_at`) VALUES
(82, '34563453', 0, '', '', '', '', '', 0, 0, '', '2021-10-08 03:04:44'),
(83, 'rretert', 0, '', '746e089e38d93a74b7a3d84124614dc4.png', '746e089e38d93a74b7a3d84124614dc4.png', '746e089e38d93a74b7a3d84124614dc4.png', '746e089e38d93a74b7a3d84124614dc4.png', 0, 0, '', '2021-10-08 03:05:17'),
(84, 'Welkom', 0, '', '', '', '', '', 0, 0, '', '2021-10-08 03:06:55'),
(85, '6468785', 0, '', '49f32e13b50a91f14ea49cb2e7caac07.png', 'e0e52c40b911ff9e562863443adb00dd.png', '34c37b6cf94281fe9b4513322482be09.png', NULL, 0, 0, '', '2021-10-08 03:10:11'),
(86, 'Welkom01', 0, '', '9f22f67888f58433bf53de1aa636376d.png', '059b7dc4be18c95709a9ecd011a5bc91.png', 'b241c8810d3b535f4ea392ba8de3a1b4.png', NULL, 0, 0, '', '2021-10-08 03:11:44'),
(87, 'Welkom01', 0, '', 'ea8b3131ba55061af21bf45afccfaeb8.png', 'ff013b5bd36c8016d9fadeb10eb414a6.png', '35e0bf1df99ab6ecb17af2e695b0ed8e.png', '0043d9952b5b2da45f86d6f4427dc790.png', 25, 1, '', '2021-10-08 03:12:23'),
(88, 'Zondag', 0, '', '', '', '', '', 0, 0, '', '2021-10-10 18:54:52'),
(89, 'Maandaggg', 0, '', '', NULL, NULL, NULL, 25, 0, '', '2021-10-10 18:55:43'),
(91, 'Solo', 0, '', '', NULL, NULL, NULL, 25, 0, '', '2021-10-10 23:43:58'),
(92, 'Gooiu', 0, '', '', NULL, NULL, '0f2b6337beb7f3a6770f9d064481e207.png', 25, 0, '', '2021-10-10 23:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `house_number` varchar(25) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_type` int(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `street_name`, `house_number`, `zipcode`, `city`, `province`, `email`, `phonenumber`, `username`, `user_type`, `password`, `register_date`) VALUES
(1, 'Athbi', 'Mohammed', 'Jacob', '36', '2391 VD', 'Leiden', '', 'info@webcarepacks.nl', '0627348455', 'Athbi', 2, '098f6bcd4621d373cade4e832627b4f6', '2021-07-20 19:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `users_work_area`
--

CREATE TABLE `users_work_area` (
  `id` int(11) NOT NULL,
  `user_id` int(25) NOT NULL,
  `short_zipcode_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_work_area`
--

INSERT INTO `users_work_area` (`id`, `user_id`, `short_zipcode_id`) VALUES
(1, 1, 1),
(2, 1, 14),
(3, 1, 15),
(6, 1, 85),
(7, 1, 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`) USING BTREE;

--
-- Indexes for table `clients_leads`
--
ALTER TABLE `clients_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_notes`
--
ALTER TABLE `clients_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`finance_id`);

--
-- Indexes for table `form_city`
--
ALTER TABLE `form_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `form_short_zipcode`
--
ALTER TABLE `form_short_zipcode`
  ADD PRIMARY KEY (`short_zipcode_id`);

--
-- Indexes for table `form_state`
--
ALTER TABLE `form_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoices_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_work_area`
--
ALTER TABLE `users_work_area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users work area` (`short_zipcode_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `clients_leads`
--
ALTER TABLE `clients_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients_notes`
--
ALTER TABLE `clients_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `finance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_city`
--
ALTER TABLE `form_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `form_short_zipcode`
--
ALTER TABLE `form_short_zipcode`
  MODIFY `short_zipcode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `form_state`
--
ALTER TABLE `form_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_work_area`
--
ALTER TABLE `users_work_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_work_area`
--
ALTER TABLE `users_work_area`
  ADD CONSTRAINT `users work area` FOREIGN KEY (`short_zipcode_id`) REFERENCES `form_short_zipcode` (`short_zipcode_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
