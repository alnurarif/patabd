-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patabd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `aboutus` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `aboutus`, `status`, `created_at`, `updated_at`) VALUES
(1, 'We are here to solve your short stay problems less the visit the location. We provide the best location, the lowest value for best comfort short time accommodation solution in Bangladesh.', 1, NULL, '2019-11-05 10:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `accomodations`
--

CREATE TABLE `accomodations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accomodations`
--

INSERT INTO `accomodations` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Entire place', 1, '2019-11-25 11:59:53', '2019-11-25 11:59:53'),
(2, 'Private bedroom', 1, '2019-11-25 12:00:24', '2019-11-25 12:00:24'),
(3, 'Shared bedroom', 1, '2019-11-25 12:00:48', '2019-11-25 12:00:48'),
(4, 'Hotel rooms', 1, '2019-11-25 12:01:07', '2019-11-25 12:01:07'),
(5, 'Apartments', 1, '2019-11-25 12:01:27', '2019-11-25 12:01:27'),
(6, 'Male Student residences', 1, '2019-11-25 12:01:55', '2019-11-25 12:01:55'),
(7, 'Female Student residences', 1, '2019-11-25 12:02:18', '2019-11-25 12:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaaaaaaaaaaaaa', 'Advertisement_11573397737.jpg', 1, NULL, '2019-11-10 08:55:38'),
(2, 'https://www.youtube.com/watch?v=daPtJsa2rvss', 'Advertisement_21573397720.jpeg', 1, NULL, '2019-11-10 08:55:20'),
(3, 'https://www.youtube.com/watch?v=daPtJsa2rvs', 'Advertisement_31573298264.jpg', 1, NULL, '2019-11-09 05:17:44'),
(4, 'https://www.youtube.com/watch?v=daPtJsa2rvs', 'Advertisement_31573287988.png', 1, NULL, NULL),
(5, 'sdfsd', 'Advertisement_51573298213.jpg', 1, NULL, '2019-11-09 05:16:54'),
(6, 'sdf', 'Advertisement_61573298232.jpg', 1, NULL, '2019-11-09 05:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `subtitle`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sfsdf;lk sad;lfksd;al fasldfk asdlfk;sldkfsdfsdfsdf', 'zxcxzczxczxczc', 'sdfsdf', NULL, 1, '2019-11-08 00:58:54', NULL),
(2, 'sfsdf;lk sad;lfksd;al fasldfk asdlfk;sldkfsdfsdfsdf', 'zxcxzczxczxczc', 'sdfsdf', NULL, 1, '2019-11-08 00:59:18', NULL),
(3, 'sfsdf;lk sad;lfksd;al fasldfk asdlfk;sldkfsdfsdfsdf', 'zxcxzczxczxczc', 'sdfsdf', 'blog_31573196386.jpg', 1, '2019-11-08 00:59:46', '2019-11-08 00:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `landloard_id` int(11) NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movein` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moveout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gast` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Luxury', 1, '2019-11-25 11:53:13', '2019-11-25 11:53:13'),
(2, 'Family', 1, '2019-11-25 11:54:06', '2019-11-25 11:54:06'),
(3, 'Beach', 1, '2019-11-25 11:54:30', '2019-11-25 11:54:30'),
(4, 'For Group Travellers', 1, '2019-11-25 11:54:57', '2019-11-25 11:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `landlord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `with` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtopic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landloards`
--

CREATE TABLE `landloards` (
  `id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landloards`
--

INSERT INTO `landloards` (`id`, `f_name`, `l_name`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Takbir', 'Hasan', 'takbir@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'default.jpg', 1, '2019-10-25 07:22:34', NULL),
(5, 'sayed', 'hasan', 'sayed@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'default.jpg', 1, '2019-11-17 02:03:12', NULL),
(6, 'Tommy', 'Mia', 'tommy_mia@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'default.jpg', 1, '2019-11-21 10:15:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listrooms`
--

CREATE TABLE `listrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `landloard_id` int(11) NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listrooms`
--

INSERT INTO `listrooms` (`id`, `landloard_id`, `room_type`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '4', 'dhaka', 1, '2019-10-25 09:52:55', NULL),
(2, 1, '4', 'dhaka', 1, '2019-10-25 09:55:25', NULL),
(3, 1, '2', 'dhaka', 1, '2019-10-26 02:21:41', NULL),
(4, 1, '1', 'dhaka', 1, '2019-10-26 14:46:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_25_112808_create_landloards_table', 2),
(4, '2019_10_25_140644_create_listrooms_table', 3),
(5, '2019_10_26_194623_create_rooms_table', 4),
(6, '2019_10_29_201342_create_roomphotos_table', 5),
(7, '2019_11_05_135557_create_abouts_table', 6),
(8, '2019_11_07_142944_create_terms_table', 7),
(9, '2019_11_07_183850_create_blogs_table', 8),
(10, '2019_11_08_081927_create_contacts_table', 9),
(11, '2019_11_09_073142_create_advertisements_table', 9),
(12, '2019_11_09_115301_create_privacies_table', 10),
(13, '2019_11_10_100925_create_visitors_table', 11),
(14, '2019_11_10_171843_create_news_table', 12),
(15, '2019_11_14_054732_create_bookings_table', 13),
(16, '2019_11_21_200441_add_lat_lng_to_rooms', 14),
(17, '2019_11_21_201411_add_google_location_to_rooms', 15),
(18, '2019_11_22_062634_edit_lat_lng_google_location_of_rooms', 16),
(19, '2019_11_22_062649_update_lat_lng_google_location_of_rooms', 17),
(20, '2019_11_25_101849_create_collections_table', 18),
(21, '2019_11_25_175704_create_accomodations_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sfsdf;lk sad;lfksd;al fasldfk asdlfk;sldkfsdfsdfsdf', 'zxcxzczxczxczc', 'sldfghjxcvbnm', 'blog_11573408378.png', 1, '2019-11-10 11:52:58', '2019-11-10 11:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `privacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Patabd is committed to keeping your privacy private.Our privacy notice assters details about all the information we get from you and about you, the nature of the use of this information and how are are committed to protect your privacy. Our rights are very important to us and we are always open to your discussing with us about how we may best use respective privacy related information.', 1, NULL, '2019-11-10 00:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `roomphotos`
--

CREATE TABLE `roomphotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `landloard_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomphotos`
--

INSERT INTO `roomphotos` (`id`, `landloard_id`, `room_id`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Screenshot_4.png|Screenshot_5.png|Screenshot_6.png|Screenshot_7.png|search_bg.jpeg|security-shield-icon-7.jpg|ss.png', 1, NULL, '2019-11-10 05:17:30'),
(2, 1, 1, 'Screenshot_4.png|Screenshot_5.png|Screenshot_6.png|Screenshot_7.png|search_bg.jpeg|security-shield-icon-7.jpg|ss.png', 1, NULL, '2019-11-10 05:18:19'),
(3, 1, 1, NULL, 1, NULL, NULL),
(4, 1, 1, NULL, 1, NULL, NULL),
(5, 1, 1, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `landloard_id` int(11) NOT NULL,
  `room_type` int(11) DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `kitchen` int(11) DEFAULT NULL,
  `living_room` int(11) DEFAULT NULL,
  `persons` int(11) DEFAULT NULL,
  `dining_room` int(11) DEFAULT NULL,
  `study_room` int(11) DEFAULT NULL,
  `single_bed` int(11) DEFAULT NULL,
  `double_bed` int(11) DEFAULT NULL,
  `wifii` int(11) DEFAULT NULL,
  `cable_tv` int(11) DEFAULT NULL,
  `central_heating` int(11) DEFAULT NULL,
  `washing_machine` int(11) DEFAULT NULL,
  `outdoor_area` int(11) DEFAULT NULL,
  `bed_linen` int(11) DEFAULT NULL,
  `accessibility` int(11) DEFAULT NULL,
  `elevator` int(11) DEFAULT NULL,
  `air_conditioning` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_number` int(11) DEFAULT NULL,
  `extra_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posta_code` int(11) DEFAULT NULL,
  `smoking_allowed` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pets_allowed` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guests` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenant` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` datetime DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `landloard_id`, `room_type`, `city`, `bedroom`, `bathroom`, `kitchen`, `living_room`, `persons`, `dining_room`, `study_room`, `single_bed`, `double_bed`, `wifii`, `cable_tv`, `central_heating`, `washing_machine`, `outdoor_area`, `bed_linen`, `accessibility`, `elevator`, `air_conditioning`, `address`, `house_number`, `extra_info`, `posta_code`, `smoking_allowed`, `pets_allowed`, `guests`, `tenant`, `price`, `available`, `title`, `lat`, `lng`, `google_location`, `photos`, `is_approve`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'dhaka', 1, 1, 1, NULL, NULL, NULL, 1, 6, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7000', NULL, NULL, '', '', '', 'room_11573911829.png|room_11573911829.png|room_11573911829.jpg|room_11573911829.jpg|room_11573911829.jpg|room_11573911829.jpg|room_11573911829.jpg', '0', 1, '2019-11-16 06:11:46', '2019-11-16 07:43:49'),
(2, 1, 4, 'dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27000', NULL, NULL, '', '', '', 'room_21573911645.png|room_21573911645.png|room_21573911645.png|room_21573911645.png|room_21573911645.jpeg|room_21573911645.jpg', '0', 1, '2019-11-16 07:40:30', '2019-11-16 07:40:45'),
(3, 1, 1, 'mirpur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13000', NULL, NULL, '', '', '', 'room_3294925808.png|room_32022589045.png|room_31025064524.jpg|room_3499053288.jpg|room_31686978016.jpg|room_3985469276.jpg|room_32062376915.jpg', '0', 1, '2019-11-16 07:44:28', '2019-11-16 07:47:01'),
(4, 1, 3, 'dhaka', 1, 1, 1, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'dhaka', 570, 'dfsdfsd', 1234, '2', '2', '1', 1, '60000', NULL, 'PataBD 9828 Dom Pedros Haven-4 Deluxe', '', '', '', NULL, '0', 1, '2019-11-17 02:33:28', '2019-11-17 02:33:41'),
(5, 1, 3, 'dhaka', 1, 1, 1, NULL, NULL, NULL, 1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdasd', 73333, 'dfsdfsd', 4543, '1', '1', '1', NULL, '90000', NULL, NULL, '', '', '', NULL, '0', 1, '2019-11-17 10:13:25', '2019-11-17 10:14:03'),
(6, 6, NULL, 'Chittagong', 1, 1, 1, NULL, NULL, NULL, 1, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'chittagong', 4839, '483838', 483389, 'no', 'no', 'no', 1, '100000', '2019-11-09 00:00:00', 'Title', '-33.3211239', '151.44500659999994', 'Chittaway Point NSW, Australia', 'room_6777513648.jpg', '0', 1, '2019-11-24 10:54:31', '2019-11-24 10:56:59'),
(7, 6, 2, 'Chittagong', 1, 1, 1, NULL, NULL, NULL, 1, 4, 3, 1, 1, 1, 1, 1, 1, 0, 1, 1, 'Chittagong Address', 4839, 'Optional Extra info', 3388, 'yes', 'yes', 'yes', 1, '35000', '2019-11-30 00:00:00', 'Room Title', '22.4600036', '91.971047', 'Chittagong University of Engineering and Technology (CUET), Raozan Pahartali Road, চট্টগ্রাম, Bangladesh', 'room_71910879245.jpg', '0', 1, '2019-11-22 00:45:00', '2019-11-22 00:48:48'),
(8, 6, 1, 'Chittagong', 1, 1, 1, NULL, NULL, NULL, 1, 2, 2, 1, 1, 0, 1, 0, 1, 1, 0, 0, 'Chawk Bazar Chittagong', 3939, '349', 4849, 'no', 'yes', 'yes', 4, '25000', '2019-12-05 00:00:00', 'Chittagong Room', '22.4015104', '91.83249690000002', 'Islami Bank Institute Of Technology , Chittagong, Chittagong, Bangladesh', 'room_81621536771.jpg', '0', 1, '2019-11-23 14:43:40', '2019-11-23 15:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookies` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partners` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms`, `refund`, `privacy`, `data`, `cookies`, `guest`, `partners`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sfsd', 'seef', 'sff', 'sdf', 'sdf', 'sdfsdg', 'sg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'takbir', 'takbir@gmail.com', NULL, '$2y$10$NsJ8epi272.GMHf5pJkCIuBRwQuWhj.Zz9dJ0tL11oDUYCYlwquwm', 'KNKP9iRcezBEg5KYjRdJPyv4xXyU9VBD69rkhUp9rDXFaZpsHitckOMDFdiQ', '2019-10-23 23:58:50', '2019-10-23 23:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `f_name`, `l_name`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'limon', 'Hasan', 'devs.takbir@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'default.jpg', 1, '2019-11-10 06:35:25', NULL),
(2, 'limon', 'hasan', 'limon@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'default.jpg', 1, '2019-11-10 08:47:42', NULL),
(5, 'aminul', 'islam', 'aminul@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'default.jpg', 1, '2019-11-10 09:00:27', NULL),
(7, 'afrin', 'drishty', 'afrin@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'default.jpg', 1, '2019-11-17 02:00:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accomodations`
--
ALTER TABLE `accomodations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landloards`
--
ALTER TABLE `landloards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `landloards_email_unique` (`email`);

--
-- Indexes for table `listrooms`
--
ALTER TABLE `listrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomphotos`
--
ALTER TABLE `roomphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visitors_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accomodations`
--
ALTER TABLE `accomodations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landloards`
--
ALTER TABLE `landloards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `listrooms`
--
ALTER TABLE `listrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roomphotos`
--
ALTER TABLE `roomphotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
