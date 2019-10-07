-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2019 at 10:06 AM
-- Server version: 5.7.19
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcmw`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `body`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Vision', '<p><span style=\"color: rgba(0, 0, 0, 0.87); font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 20px; font-style: italic; text-align: center;\">Provision of goods and services in the telecommunications sector in order to satisfy customer needs</span></p>', '2019-07-10 05:04:48', '2019-07-10 05:04:48', 'vision'),
(2, 'Mission', '<p><span style=\"color: rgba(0, 0, 0, 0.87); font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 20px; font-style: italic; text-align: center;\">Provision of goods and services in the telecommunications sector in order to satisfy customer needs</span></p>', '2019-07-10 05:13:06', '2019-07-10 05:13:06', 'mission'),
(3, 'About', '<h4><strong>PT. Tunas Cahaya Mandiri Widyatama</strong></h4>\r\n<p>Founded in February, 11&rsquo; 2008, as a company that have a specializing on the Supply Spare part, Service and Maintenance Equipment in telecommunication sector.</p>\r\n<p>Our Vision to be a reliable partner in all areas of telecommunications. In addition to support it we also have a reliable human resources team, an&nbsp; professionals engineer who can provide the best services in all area that we serve.</p>\r\n<p>World Telecom is a competitive world, where any delay would result in losses for the company. Therefore we always do a perfect job with the preparation and structural operating system so that it can be completed in a timely manner.</p>\r\n<p>&nbsp;</p>\r\n<h4>Team, Asset and Area Services</h4>\r\n<ul>\r\n<li>240 Amount Staff</li>\r\n<li>90 Car Operational</li>\r\n<li>45 Motorcycle Operasional</li>\r\n</ul>\r\n<h4>&nbsp;</h4>\r\n<h4>We currently focus on various areas including:</h4>\r\n<ul>\r\n<li>Southern Sumatera (Jambi, Lampung, Palembang, Bangka &amp; Belitung, Bengkulu)</li>\r\n<li>West Sumatera (Padang, Pekanbaru, Medan, Batam)</li>\r\n<li>Jabodetabek</li>\r\n</ul>\r\n<p>&nbsp;</p>', '2019-07-10 05:14:35', '2019-07-10 05:14:35', 'about');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(2, NULL, 1, 'Category 2', 'category-2', '2019-06-15 09:34:47', '2019-06-15 09:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Address', 'fa-map-marker', 'Jalan Ilir Tim. II No. 8, Palembang, Sumatra Selatan', '2019-06-25 02:17:00', '2019-07-07 21:55:52'),
(2, 'Phone', 'fa-phone', '(+6231) 5996007-9', '2019-06-25 02:17:00', '2019-06-25 02:17:59'),
(3, 'Email', 'fa-envelope', 'contact@tcmw.tetambastudio.com', '2019-06-25 02:17:00', '2019-07-07 21:52:27'),
(4, 'Maps', 'maps', 'https://maps.google.com/maps?q=universitas%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed', '2019-07-04 07:34:47', '2019-07-04 07:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `corporates`
--

CREATE TABLE `corporates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporates`
--

INSERT INTO `corporates` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Competitive', 'fa-trophy', 'Being able to competitive in regional or national scale', '2019-06-24 23:58:18', '2019-06-24 23:58:18'),
(3, 'Confident', 'fa-location-arrow', 'Role in economy development and build the pride of nation', '2019-06-24 23:59:00', '2019-06-24 23:59:00'),
(4, 'Clean', 'fa-leaf', 'Managed as professional to avoid the clash of benefit, there is no tolerance of bribe, respect the trust and integrity. Guidance to the base of good corporate governance', '2019-06-25 00:00:25', '2019-06-25 00:00:25'),
(5, 'Commercial', 'fa-briefcase', 'Created the value added with maximal orientation, to take a decision based on the healthy business principal', '2019-06-25 00:01:12', '2019-06-25 00:01:12'),
(6, 'Customer Focus', 'fa-user', 'Oriented in customer interest and commit to give the best services for the customer', '2019-06-25 00:01:34', '2019-06-25 00:01:34'),
(7, 'Capable', 'fa-check', 'Managed by the professional leader and employee that have talent and technic mastery', '2019-06-25 00:01:00', '2019-06-25 00:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 5, 'post_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"author_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":null}', 16),
(57, 10, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(58, 10, 'customer', 'text', 'Customer', 0, 1, 1, 1, 1, 1, '{}', 2),
(59, 10, 'project_name', 'text', 'Project Name', 0, 1, 1, 1, 1, 1, '{}', 3),
(60, 10, 'qty', 'text', 'Qty', 0, 1, 1, 1, 1, 1, '{}', 4),
(61, 10, 'area', 'text', 'Area', 0, 1, 1, 1, 1, 1, '{}', 5),
(62, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(63, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(70, 13, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(71, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(72, 13, 'icon', 'text', 'Icon', 0, 1, 1, 1, 1, 1, '{}', 3),
(73, 13, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(74, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(75, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(76, 14, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(77, 14, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(78, 14, 'image', 'multiple_images', 'Image', 0, 1, 1, 1, 1, 1, '{}', 3),
(79, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(80, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(81, 15, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(85, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(86, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(87, 15, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(88, 15, 'icon', 'text', 'Icon', 0, 1, 1, 1, 1, 1, '{}', 3),
(89, 15, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(90, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(91, 17, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(92, 17, 'mail', 'text', 'Mail', 0, 1, 1, 1, 1, 1, '{}', 3),
(93, 17, 'subject', 'text', 'Subject', 0, 1, 1, 1, 1, 1, '{}', 4),
(94, 17, 'message', 'text', 'Message', 0, 1, 1, 1, 1, 1, '{}', 5),
(95, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(96, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(97, 18, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(98, 18, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(99, 18, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 3),
(100, 18, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 4),
(101, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(102, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(103, 14, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(104, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(105, 20, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 2),
(106, 20, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(107, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(108, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(109, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(110, 21, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(111, 21, 'body', 'rich_text_box', 'Body', 0, 1, 1, 1, 1, 1, '{}', 4),
(112, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(113, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(114, 21, 'slug', 'text', 'Slug', 1, 1, 1, 0, 1, 0, '{}', 3),
(115, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(116, 22, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 2),
(117, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(118, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(10, 'projects', 'projects', 'Project', 'Projects', NULL, 'App\\Project', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-24 07:30:42', '2019-06-24 07:39:06'),
(13, 'corporates', 'corporates', 'Corporate', 'Corporates', 'voyager-paper-plane', 'App\\Corporate', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-06-24 23:57:25', '2019-06-24 23:57:25'),
(14, 'services', 'services', 'Service', 'Services', 'voyager-star-two', 'App\\Services', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-25 00:58:44', '2019-07-04 01:58:28'),
(15, 'contacts', 'contacts', 'Contact', 'Contacts', 'voyager-telephone', 'App\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-25 02:00:14', '2019-06-25 02:15:54'),
(17, 'inboxes', 'inboxes', 'Inbox', 'Inboxes', 'voyager-mail', 'App\\Inbox', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-25 03:09:09', '2019-06-25 03:09:35'),
(18, 'partners', 'partners', 'Partner', 'Partners', 'voyager-company', 'App\\Partner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-25 07:47:17', '2019-06-25 07:53:11'),
(20, 'sliders', 'sliders', 'Slider', 'Sliders', 'voyager-photos', 'App\\Slider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-07-10 03:54:01', '2019-07-10 03:54:01'),
(21, 'abouts', 'abouts', 'About', 'Abouts', 'voyager-star', 'App\\About', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-10 04:17:47', '2019-07-10 04:20:47'),
(22, 'structures', 'structures', 'Structure', 'Structures', NULL, 'App\\Structure', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-10 05:32:48', '2019-07-10 05:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `name`, `mail`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Abdul Karim', 'admin@admin.com', 'Test', '123456', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-06-15 09:34:46', '2019-06-15 09:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-06-15 09:34:46', '2019-06-15 09:34:46', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 3, '2019-06-15 09:34:46', '2019-07-10 03:28:26', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, 27, 1, '2019-06-15 09:34:46', '2019-07-10 03:28:26', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 27, 2, '2019-06-15 09:34:46', '2019-07-10 03:28:26', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 8, '2019-06-15 09:34:46', '2019-07-10 03:28:26', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-06-15 09:34:46', '2019-06-24 07:09:31', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-06-15 09:34:46', '2019-06-24 07:09:31', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-06-15 09:34:46', '2019-06-24 07:09:31', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-06-15 09:34:46', '2019-06-24 07:09:31', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 9, '2019-06-15 09:34:46', '2019-07-10 03:28:26', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 26, 2, '2019-06-15 09:34:47', '2019-07-10 03:27:17', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, 26, 1, '2019-06-15 09:34:47', '2019-07-10 03:27:14', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-archive', '#000000', NULL, 4, '2019-06-15 09:34:47', '2019-07-10 05:45:58', 'voyager.pages.index', 'null'),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-06-15 09:34:48', '2019-06-24 07:09:31', 'voyager.hooks', NULL),
(17, 1, 'Projects', '', '_self', 'voyager-rocket', '#000000', 25, 10, '2019-06-24 07:30:42', '2019-07-10 05:41:04', 'voyager.projects.index', 'null'),
(19, 1, 'Corporates', '', '_self', 'voyager-paper-plane', NULL, 25, 8, '2019-06-24 23:57:25', '2019-07-10 05:41:04', 'voyager.corporates.index', NULL),
(20, 1, 'Services', '', '_self', 'voyager-star-two', NULL, 25, 11, '2019-06-25 00:58:44', '2019-07-10 05:41:04', 'voyager.services.index', NULL),
(21, 1, 'Contacts', '', '_self', 'voyager-telephone', NULL, 25, 12, '2019-06-25 02:00:14', '2019-07-10 05:41:04', 'voyager.contacts.index', NULL),
(23, 1, 'Inbox', '', '_self', 'voyager-mail', '#000000', NULL, 7, '2019-06-25 03:09:09', '2019-07-10 03:28:26', 'voyager.inboxes.index', 'null'),
(24, 1, 'Partners', '', '_self', 'voyager-company', '#000000', 25, 9, '2019-06-25 07:47:17', '2019-07-10 05:41:04', 'voyager.partners.index', 'null'),
(25, 1, 'About', '', '_self', 'voyager-heart', '#000000', NULL, 6, '2019-07-10 03:18:51', '2019-07-10 03:28:26', NULL, ''),
(26, 1, 'News', '', '_self', 'voyager-documentation', '#000000', NULL, 5, '2019-07-10 03:25:31', '2019-07-10 05:45:58', NULL, ''),
(27, 1, 'Users Management', '', '_self', 'voyager-people', '#000000', NULL, 2, '2019-07-10 03:28:03', '2019-07-10 03:28:17', NULL, ''),
(28, 1, 'Sliders', '', '_self', 'voyager-photos', NULL, 25, 3, '2019-07-10 03:54:01', '2019-07-10 05:42:43', 'voyager.sliders.index', NULL),
(29, 1, 'Abouts', '', '_self', 'voyager-star', NULL, 25, 1, '2019-07-10 04:17:47', '2019-07-10 05:42:29', 'voyager.abouts.index', NULL),
(30, 1, 'Vision', 'admin/abouts/1/edit', '_self', 'voyager-star', '#000000', 25, 5, '2019-07-10 05:24:10', '2019-07-10 05:42:43', NULL, ''),
(31, 1, 'Mission', 'admin/abouts/2/edit', '_self', 'voyager-lightbulb', '#000000', 25, 6, '2019-07-10 05:25:11', '2019-07-10 05:42:43', NULL, ''),
(32, 1, 'About Us', 'admin/abouts/3/edit', '_self', 'voyager-info-circled', '#000000', 25, 4, '2019-07-10 05:25:53', '2019-07-10 05:42:43', NULL, ''),
(33, 1, 'Structures', '', '_self', 'voyager-window-list', '#000000', 25, 2, '2019-07-10 05:32:48', '2019-07-10 05:42:29', 'voyager.structures.index', 'null'),
(34, 1, 'Structure', 'http://tcmw.test/admin/structures/1/edit', '_self', 'voyager-window-list', '#000000', 25, 7, '2019-07-10 05:40:47', '2019-07-10 05:42:43', NULL, '');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'PT. XL Axiata Tbk', 'partners\\June2019\\HHRnXHvl4sPxtN72LtIv.png', 'https://www.xl.co.id/id', '2019-06-25 07:53:58', '2019-06-25 07:53:58'),
(2, 'PT. Huawei Services', 'partners\\June2019\\dk6IddWX83SbNA1U6IIb.png', 'https://www.huawei.com/en/', '2019-06-25 07:54:55', '2019-06-25 07:54:55'),
(3, 'PT. Hutchison 3 Indonesia', 'partners\\June2019\\7sZnK2RAhCltc0Mv1pWB.png', 'https://tri.co.id', '2019-06-25 07:55:23', '2019-06-25 07:55:23');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(2, 'browse_bread', NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(3, 'browse_database', NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(4, 'browse_media', NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(5, 'browse_compass', NULL, '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(6, 'browse_menus', 'menus', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(7, 'read_menus', 'menus', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(8, 'edit_menus', 'menus', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(9, 'add_menus', 'menus', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(10, 'delete_menus', 'menus', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(11, 'browse_roles', 'roles', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(12, 'read_roles', 'roles', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(13, 'edit_roles', 'roles', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(14, 'add_roles', 'roles', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(15, 'delete_roles', 'roles', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(16, 'browse_users', 'users', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(17, 'read_users', 'users', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(18, 'edit_users', 'users', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(19, 'add_users', 'users', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(20, 'delete_users', 'users', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(21, 'browse_settings', 'settings', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(22, 'read_settings', 'settings', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(23, 'edit_settings', 'settings', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(24, 'add_settings', 'settings', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(25, 'delete_settings', 'settings', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(26, 'browse_categories', 'categories', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(27, 'read_categories', 'categories', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(28, 'edit_categories', 'categories', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(29, 'add_categories', 'categories', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(30, 'delete_categories', 'categories', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(31, 'browse_posts', 'posts', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(32, 'read_posts', 'posts', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(33, 'edit_posts', 'posts', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(34, 'add_posts', 'posts', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(35, 'delete_posts', 'posts', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(36, 'browse_pages', 'pages', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(37, 'read_pages', 'pages', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(38, 'edit_pages', 'pages', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(39, 'add_pages', 'pages', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(40, 'delete_pages', 'pages', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(41, 'browse_hooks', NULL, '2019-06-15 09:34:48', '2019-06-15 09:34:48'),
(52, 'browse_projects', 'projects', '2019-06-24 07:30:42', '2019-06-24 07:30:42'),
(53, 'read_projects', 'projects', '2019-06-24 07:30:42', '2019-06-24 07:30:42'),
(54, 'edit_projects', 'projects', '2019-06-24 07:30:42', '2019-06-24 07:30:42'),
(55, 'add_projects', 'projects', '2019-06-24 07:30:42', '2019-06-24 07:30:42'),
(56, 'delete_projects', 'projects', '2019-06-24 07:30:42', '2019-06-24 07:30:42'),
(62, 'browse_corporates', 'corporates', '2019-06-24 23:57:25', '2019-06-24 23:57:25'),
(63, 'read_corporates', 'corporates', '2019-06-24 23:57:25', '2019-06-24 23:57:25'),
(64, 'edit_corporates', 'corporates', '2019-06-24 23:57:25', '2019-06-24 23:57:25'),
(65, 'add_corporates', 'corporates', '2019-06-24 23:57:25', '2019-06-24 23:57:25'),
(66, 'delete_corporates', 'corporates', '2019-06-24 23:57:25', '2019-06-24 23:57:25'),
(67, 'browse_services', 'services', '2019-06-25 00:58:44', '2019-06-25 00:58:44'),
(68, 'read_services', 'services', '2019-06-25 00:58:44', '2019-06-25 00:58:44'),
(69, 'edit_services', 'services', '2019-06-25 00:58:44', '2019-06-25 00:58:44'),
(70, 'add_services', 'services', '2019-06-25 00:58:44', '2019-06-25 00:58:44'),
(71, 'delete_services', 'services', '2019-06-25 00:58:44', '2019-06-25 00:58:44'),
(72, 'browse_contacts', 'contacts', '2019-06-25 02:00:14', '2019-06-25 02:00:14'),
(73, 'read_contacts', 'contacts', '2019-06-25 02:00:14', '2019-06-25 02:00:14'),
(74, 'edit_contacts', 'contacts', '2019-06-25 02:00:14', '2019-06-25 02:00:14'),
(75, 'add_contacts', 'contacts', '2019-06-25 02:00:14', '2019-06-25 02:00:14'),
(76, 'delete_contacts', 'contacts', '2019-06-25 02:00:14', '2019-06-25 02:00:14'),
(82, 'browse_inboxes', 'inboxes', '2019-06-25 03:09:09', '2019-06-25 03:09:09'),
(83, 'read_inboxes', 'inboxes', '2019-06-25 03:09:09', '2019-06-25 03:09:09'),
(84, 'edit_inboxes', 'inboxes', '2019-06-25 03:09:09', '2019-06-25 03:09:09'),
(85, 'add_inboxes', 'inboxes', '2019-06-25 03:09:09', '2019-06-25 03:09:09'),
(86, 'delete_inboxes', 'inboxes', '2019-06-25 03:09:09', '2019-06-25 03:09:09'),
(87, 'browse_partners', 'partners', '2019-06-25 07:47:17', '2019-06-25 07:47:17'),
(88, 'read_partners', 'partners', '2019-06-25 07:47:17', '2019-06-25 07:47:17'),
(89, 'edit_partners', 'partners', '2019-06-25 07:47:17', '2019-06-25 07:47:17'),
(90, 'add_partners', 'partners', '2019-06-25 07:47:17', '2019-06-25 07:47:17'),
(91, 'delete_partners', 'partners', '2019-06-25 07:47:17', '2019-06-25 07:47:17'),
(92, 'browse_sliders', 'sliders', '2019-07-10 03:54:01', '2019-07-10 03:54:01'),
(93, 'read_sliders', 'sliders', '2019-07-10 03:54:01', '2019-07-10 03:54:01'),
(94, 'edit_sliders', 'sliders', '2019-07-10 03:54:01', '2019-07-10 03:54:01'),
(95, 'add_sliders', 'sliders', '2019-07-10 03:54:01', '2019-07-10 03:54:01'),
(96, 'delete_sliders', 'sliders', '2019-07-10 03:54:01', '2019-07-10 03:54:01'),
(97, 'browse_abouts', 'abouts', '2019-07-10 04:17:47', '2019-07-10 04:17:47'),
(98, 'read_abouts', 'abouts', '2019-07-10 04:17:47', '2019-07-10 04:17:47'),
(99, 'edit_abouts', 'abouts', '2019-07-10 04:17:47', '2019-07-10 04:17:47'),
(100, 'add_abouts', 'abouts', '2019-07-10 04:17:47', '2019-07-10 04:17:47'),
(101, 'delete_abouts', 'abouts', '2019-07-10 04:17:47', '2019-07-10 04:17:47'),
(102, 'browse_structures', 'structures', '2019-07-10 05:32:48', '2019-07-10 05:32:48'),
(103, 'read_structures', 'structures', '2019-07-10 05:32:48', '2019-07-10 05:32:48'),
(104, 'edit_structures', 'structures', '2019-07-10 05:32:48', '2019-07-10 05:32:48'),
(105, 'add_structures', 'structures', '2019-07-10 05:32:48', '2019-07-10 05:32:48'),
(106, 'delete_structures', 'structures', '2019-07-10 05:32:48', '2019-07-10 05:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(4, 3),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(76, 1),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(85, 1),
(86, 1),
(86, 3),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 1),
(91, 3),
(92, 1),
(92, 3),
(93, 1),
(93, 3),
(94, 1),
(94, 3),
(95, 1),
(95, 3),
(96, 1),
(96, 3),
(98, 1),
(98, 3),
(99, 1),
(99, 3),
(103, 1),
(103, 3),
(104, 1),
(104, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(5, 1, 1, 'Lorem', NULL, NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'posts\\June2019\\1ERn0KoJWLmCTpUFnWHH.jpg', 'lorem', NULL, NULL, 'PUBLISHED', 0, '2019-06-17 01:00:02', '2019-06-25 05:57:24'),
(6, 2, 1, 'Lorem Ipsum 2', NULL, NULL, '<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>\r\n<blockquote>\r\n<p style=\"text-align: center;\">&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</p>\r\n</blockquote>\r\n<p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.</p>', 'posts\\June2019\\uPf4zfnmcDGfMqNPG5j6.jpg', 'lorem-ipsum-2', NULL, NULL, 'PUBLISHED', 0, '2019-06-17 23:25:08', '2019-06-25 05:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `customer`, `project_name`, `qty`, `area`, `created_at`, `updated_at`) VALUES
(1, 'PT. XL Axiata Tbk', 'Service & Replacement Air Conditioner', '800 Site', 'Babel, South Sumatra', '2019-06-24 07:31:59', '2019-06-24 07:31:59'),
(2, 'PT. XL Axiata Tbk', 'Overhoul Genset', '450 Unit', 'Central Sumatra, West and South Sumatra', '2019-06-24 07:40:55', '2019-06-24 07:40:55'),
(3, 'PT. XL Axiata Tbk', 'New Connection and Upgrade PLN', '180 Site', 'Babel, South Sumatra', '2019-06-24 07:41:27', '2019-06-24 07:41:27'),
(4, 'PT. XL Axiata Tbk', 'Services Trafo', '100 Unit', 'South Sumatra', '2019-06-24 07:41:45', '2019-06-24 07:41:45'),
(5, 'PT. XL Axiata Tbk', 'Repair Grounding', '90 Site', 'South Sumatra, West Sumatra', '2019-06-24 07:42:03', '2019-06-24 07:42:03'),
(6, 'PT. XL Axiata Tbk', 'Service Module Rectifier', '750 Unit', 'Babel, Central Sumatra, North Sumatra, West Sumatra', '2019-06-24 07:42:26', '2019-06-24 07:42:26'),
(7, 'PT. XL Axiata Tbk', 'Power Back Up Service (PBS)', '550 Site', 'South Sumatra East, South Sumatra West, Babel', '2019-06-24 07:42:43', '2019-06-24 07:42:43'),
(8, 'PT. Huawei Services', 'Service & Replacement Air Conditioner', '650 Site', 'South Sumatra East, South Sumatra West, Babel', '2019-06-24 07:43:02', '2019-06-24 07:43:02'),
(9, 'PT. Huawei Services', 'Supply Sparepart Genset & Electric', '6500 Pcs', 'National', '2019-06-24 07:43:22', '2019-06-24 07:43:22'),
(10, 'PT. Huawei Services', 'Back Up Services & Environment (TBG Group)', '700 Site', 'Babel, Central Sumatra, North Sumatra, West Sumatra', '2019-06-24 07:43:38', '2019-06-24 07:43:38'),
(11, 'PT. Huawei Services', 'Overhoul and Service Genset', '190 Unit', 'Southen Sumatra', '2019-06-24 07:44:23', '2019-06-24 07:44:23'),
(12, 'PT. Huawei Services', 'Repair Grounding', '50 Site', 'Southen Sumatra', '2019-06-24 07:44:39', '2019-06-24 07:44:39'),
(13, 'PT. Huawei Services', 'Services Trafo', '95 Unit', 'Southen Sumatra', '2019-06-24 07:46:01', '2019-06-24 07:46:01'),
(14, 'PT. Huawei Services', 'Service Module Rectifier', '600 Pcs', 'Babel, Central Sumatra, North Sumatra, West Sumatra', '2019-06-24 07:46:15', '2019-06-24 07:46:15'),
(15, 'PT. Huawei Services', 'Supply Refuel Solar', '35000 l/Month', 'Babel', '2019-06-24 07:46:34', '2019-06-24 07:46:34'),
(16, 'PT. Huawei Services', 'Services Maintenance Fiber Optic', '3 Site', 'South Sumatra East, South Sumatra West', '2019-06-24 07:46:49', '2019-06-24 07:46:49'),
(17, 'PT. Huawei Services', 'Manage Service Resources', '80 Team', 'South Sumatra East, South Sumatra West, Babel, Jabotabek', '2019-06-24 07:47:05', '2019-06-24 07:47:05'),
(18, 'PT. Hutchison 3 Indonesia', 'New Connection PLN, Relocation Genset, and Supply Material', '20 site', 'South Sumatra', '2019-06-24 07:47:20', '2019-06-24 07:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(2, 'user', 'Normal User', '2019-06-15 09:34:46', '2019-06-15 09:34:46'),
(3, 'editor', 'Editor', '2019-06-17 16:27:07', '2019-06-17 16:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `created_at`, `updated_at`, `description`) VALUES
(1, 'New connection and Upgrade PLN', '[\"services\\\\June2019\\\\FsYk6tk433vt0WnFNAmZ.png\",\"services\\\\July2019\\\\WJJicsU8NMONAWBdutiX.png\",\"services\\\\July2019\\\\qF2XcXFtAv1k8B3FVkUS.jpg\",\"services\\\\July2019\\\\otaC23tOFihBphAkhuis.jpg\",\"services\\\\July2019\\\\gxWc9mSJzbJRrZzNs0Xa.png\",\"services\\\\July2019\\\\0VkJ7HMHSxi2sjqq6m8W.jpg\",\"services\\\\July2019\\\\bEOjNs7rnKOhscGbgd27.png\"]', '2019-06-25 01:06:00', '2019-07-05 01:45:04', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(2, 'Supply, Repair and Improvement Grounding', '[\"services\\\\June2019\\\\6xNn5PfapHrVxxKfNoek.png\"]', '2019-06-25 01:32:00', '2019-07-04 04:44:33', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(3, 'Supply and Install OB Light', '[\"services\\\\June2019\\\\snicPbSibLFoESf2vXE4.png\"]', '2019-06-25 01:33:00', '2019-07-04 04:44:21', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(4, 'Service Maintenance and Overhaul Genset', '[\"services\\\\June2019\\\\2i1k02OzHKIokKORzzYw.png\"]', '2019-06-25 01:33:00', '2019-07-04 04:44:12', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(5, 'Service Maintenance and Install Air Conditioner', '[\"services\\\\June2019\\\\x3THctQJzVWqzVw8tzny.png\"]', '2019-06-25 01:33:00', '2019-07-04 04:43:59', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(6, 'Environment Service and Power Backup Service', '[\"services\\\\June2019\\\\XYKZ9kFQVIlfM73okhH7.png\"]', '2019-06-25 01:34:00', '2019-07-04 04:43:46', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(7, 'Service and Repair Module Rectifier', '[\"services\\\\June2019\\\\K0NgctTXITVK912CFd6S.png\"]', '2019-06-25 01:34:00', '2019-07-04 04:43:37', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(8, 'Maintenance and ServiceTrafo PLN', '[\"services\\\\June2019\\\\e8AqBRPnAWzeo3QFlq0A.png\"]', '2019-06-25 01:34:00', '2019-07-04 04:43:30', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(9, 'Supply Install Panel ATS, AMF, COS', '[\"services\\\\June2019\\\\K9HsepFgyEvFaAaO2Yzz.png\"]', '2019-06-25 01:35:00', '2019-07-04 04:43:22', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(10, 'Supply Sparepart Genset and Electrical', '[\"services\\\\June2019\\\\GUAA62YadbNegDHrsKYs.png\"]', '2019-06-25 01:37:00', '2019-07-04 04:43:15', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(11, 'Supply Refuel Solar', '[\"services\\\\June2019\\\\rZkI6huAuBjNFysg00Xv.png\"]', '2019-06-25 01:37:00', '2019-07-04 04:42:54', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(12, 'Manage Service Resources', '[\"services\\\\June2019\\\\WCxnSL6MveYdfjcIWTVa.png\"]', '2019-06-25 01:38:00', '2019-07-04 04:42:45', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(15, 'Service Maintenance Fiber Optic', '[\"services\\\\June2019\\\\rbEIkz26Hh3Al1uhEJAD.png\",\"services\\\\June2019\\\\IT1xvfJb475DN8k9B9m7.png\",\"services\\\\June2019\\\\Ohfj7ey0TV5RWFmBConx.png\",\"services\\\\June2019\\\\oRmLaKOzX2MkgJXA6TBg.png\",\"services\\\\June2019\\\\3vks36lNysFTz9Mrt4DT.png\"]', '2019-06-25 01:39:00', '2019-07-04 04:42:37', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(16, 'CME Colocation Outdoor', '[\"services\\\\June2019\\\\6qeNpiJXyh1a97I9s01n.png\",\"services\\\\June2019\\\\HxpTJdngBRRORkKD8orL.png\"]', '2019-06-25 01:40:00', '2019-07-04 04:42:27', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sliders\\July2019\\10X9ASj6bRwHtABJB5w9.JPG', NULL, '2019-07-10 04:01:46', '2019-07-10 04:01:46'),
(2, 'sliders\\July2019\\RC1wakZkeJKBJ4zk5mNn.JPG', NULL, '2019-07-10 05:52:48', '2019-07-10 05:52:48'),
(3, 'sliders\\July2019\\bl99nvChpuomhOsJLE6v.png', NULL, '2019-07-10 05:54:49', '2019-07-10 05:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `structures`
--

INSERT INTO `structures` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'structures\\July2019\\ASIByD5ulUqsEQdTjHQN.png', '2019-07-10 05:40:02', '2019-07-10 05:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-06-15 09:34:47', '2019-06-15 09:34:47'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-06-15 09:34:47', '2019-06-15 09:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\June2019\\efQK4xbnBXXVBIVH7XzD.png', NULL, '$2y$10$j7k8LkPuuNpQoaJmQXtjxO7ph8oWO5jFgx8wiKjCQsGJEtjHE9KQi', 'bxibbJrfmEngOPNWevBarjqQyfP5rnQwBL06EYUcoyK6r3jHIhPstap0lYfT', '{\"locale\":\"en\"}', '2019-06-15 09:34:47', '2019-06-25 04:57:06'),
(2, 3, 'Editor', 'editor@mail.com', 'users\\June2019\\v1G3fwAqoImgcpNFViaC.png', NULL, '$2y$10$blrvcRao3obL4HHaVpwCCeGrbF/ATwelus2dtT0VA4fR5lbzgm.P.', NULL, '{\"locale\":\"en\"}', '2019-06-16 07:33:00', '2019-06-25 04:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporates`
--
ALTER TABLE `corporates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `corporates`
--
ALTER TABLE `corporates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
