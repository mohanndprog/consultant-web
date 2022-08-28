-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table consultant.consultant_information
CREATE TABLE IF NOT EXISTS `consultant_information` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consultant_id` bigint(20) unsigned NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_year` int(11) DEFAULT NULL,
  `end_year` int(11) DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.consultant_information: ~23 rows (approximately)
DELETE FROM `consultant_information`;
/*!40000 ALTER TABLE `consultant_information` DISABLE KEYS */;
INSERT INTO `consultant_information` (`id`, `consultant_id`, `phone`, `country`, `gender`, `image`, `bio`, `institution`, `start_year`, `end_year`, `degree`, `created_at`, `updated_at`) VALUES
	(1, 17, '21029', 'Pakistan', 'male', NULL, 'new teacher', 'COMSATS', 2017, 2021, 'Software Engineering', '2021-11-02 10:31:02', '2021-11-02 10:31:02'),
	(2, 18, '123456', 'Canada', 'male', NULL, 'new teacher', 'UOL', 2016, 2020, 'Electrical Engineering', '2021-11-02 10:34:35', '2021-11-04 09:26:02'),
	(3, 19, '21456', 'Pakistan', 'male', NULL, 'new teacher', 'COMSATS', 2017, 2021, 'Software Engineering', '2021-11-03 08:21:36', '2021-11-03 08:21:36'),
	(4, 20, '21456', 'Pakistan', 'male', NULL, 'new teacher', 'COMSATS', 2016, 2021, 'Software Engineering', '2021-11-03 08:26:38', '2021-11-03 08:26:38'),
	(5, 21, '21456', 'Pakistan', 'male', NULL, 'new teacher', 'UOL', 2016, 2021, 'MBBS', '2021-11-03 08:29:17', '2021-11-03 08:29:17'),
	(6, 22, '21456', 'Pakistan', 'male', NULL, 'new teacher', 'COMSATS', 2016, 2021, 'MBBS', '2021-11-03 08:30:48', '2021-11-03 08:30:48'),
	(7, 23, '21456', 'pak', 'male', NULL, 'new teacher', 'COMSATS', 2017, 2021, 'Software Engineering', '2021-11-03 08:32:14', '2021-11-03 08:32:14'),
	(8, 24, '21456', 'New', 'male', NULL, 'new teacher', 'COMSATS', 2017, 2021, 'BS - Software Engineering', '2021-11-03 08:33:53', '2021-11-03 08:33:53'),
	(9, 25, '21456', 'pak', 'male', NULL, 'new teacher', 'UET', 2017, 2022, 'Software Engineering', '2021-11-03 08:36:32', '2021-11-03 08:36:32'),
	(10, 26, '21456', 'newz', 'male', NULL, 'new teacher', 'UET', 2017, 2021, 'Finance', '2021-11-03 08:37:44', '2021-11-03 08:37:44'),
	(11, 27, '214555', 'New One', 'male', NULL, 'zain ki file update again', 'KIPS', 2019, 2021, 'Inter', '2021-11-03 08:47:14', '2021-11-03 11:34:32'),
	(12, 30, '+923227138100', 'Pakistan', 'male', '6047151483.jpeg', 'hello friends', 'CUI Lahore', 2016, 2020, 'BSSE', '2021-11-04 02:22:05', '2021-11-10 18:41:59'),
	(13, 32, '03060125464', 'Pakistan', 'male', NULL, 'as', 'COMSATS', 2017, 2021, 'MBBS', '2021-11-04 12:46:08', '2021-11-04 12:46:08'),
	(14, 35, '03001234567', 'Pakistan', 'male', 'C:\\xampp\\tmp\\phpF432.tmp', 'new', 'COMSATS', 2017, 2021, 'Electrical Engineering', '2021-11-04 12:58:10', '2021-11-04 12:58:10'),
	(15, 36, '03001234567', 'Pakistan', 'male', 'C:\\xampp\\tmp\\phpF0FD.tmp', 'new', 'COMSATS', 2017, 2021, 'MBBS', '2021-11-04 13:00:20', '2021-11-04 13:00:20'),
	(16, 38, '03001234567', 'newzland', 'male', 'C:\\xampp\\tmp\\phpDCA0.tmp', 'new', 'UOL', 2017, 2021, 'Finance', '2021-11-04 13:17:44', '2021-11-04 13:17:44'),
	(17, 39, '03001234561', 'pak', 'male', '1291432814.jpg', 'new', 'UOL', 2017, 2022, 'Electrical Engineering', '2021-11-04 13:18:50', '2021-11-04 13:18:50'),
	(18, 40, '03001234561', 'nas', 'male', '1291432814.jpg', 'new', 'COMSATS', 2016, 2020, 'MBBS', '2021-11-04 13:19:50', '2021-11-04 13:19:50'),
	(19, 41, '030121212', 'aaa', 'male', '1291432814.jpg', 'asn', 'COMSATS', 2017, 2021, 'Finance', '2021-11-04 13:23:04', '2021-11-04 13:23:04'),
	(20, 42, '033020201', 'hasas', 'male', '1291432814.jpg', 'okkkk', 'KIPS', 2017, 2020, 'Finance', '2021-11-04 13:27:43', '2021-11-04 13:27:43'),
	(21, 43, '0342233232', 'aksa', 'male', '1291432814.jpg', 'jsdhs', 'UOL', 2017, 2021, 'MBBS', '2021-11-04 13:28:59', '2021-11-04 14:09:24'),
	(22, 44, '03001234567', 'Pakistan', 'male', '1291432814.jpg', 'New User', 'COMSATS', 2017, 2021, 'Electrical Engineering', '2021-11-05 09:54:59', '2021-11-05 11:30:03'),
	(23, 45, '03001234567', 'Pak', 'male', '3276342996.jpg', 'dummy data updated again', 'COMSATS', 2017, 2020, 'Finance', '2021-11-08 10:20:37', '2021-11-08 16:36:57'),
	(24, 48, '+1 (695) 701-8019', 'NewYork', 'female', '8190423364.jpg', 'Chemistry Teacher', 'Error doloribus aliq', 1975, 2002, 'Quia assumenda volup', '2022-06-06 12:55:04', '2022-06-06 12:55:04');
/*!40000 ALTER TABLE `consultant_information` ENABLE KEYS */;

-- Dumping structure for table consultant.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.courses: ~8 rows (approximately)
DELETE FROM `courses`;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` (`id`, `course_name`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Web', 'NULL', NULL, NULL),
	(3, 'IT', 'NULL', NULL, NULL),
	(4, 'Finance', 'NULL', NULL, NULL),
	(5, 'Technology', 'NULL', NULL, NULL),
	(6, 'Sports', 'NULL', NULL, NULL),
	(7, 'Medical', 'NULL', NULL, NULL),
	(9, 'Physics', 'NULL', '2021-11-04 11:02:55', '2021-11-04 11:02:55'),
	(10, 'Math', 'NULL', '2021-11-04 11:18:53', '2021-11-04 11:18:53');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping structure for table consultant.course_user
CREATE TABLE IF NOT EXISTS `course_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_user_course_id_foreign` (`course_id`),
  KEY `course_user_user_id_foreign` (`user_id`),
  CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.course_user: ~24 rows (approximately)
DELETE FROM `course_user`;
/*!40000 ALTER TABLE `course_user` DISABLE KEYS */;
INSERT INTO `course_user` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 6, 17, NULL, NULL),
	(6, 1, 32, NULL, NULL),
	(7, 3, 32, NULL, NULL),
	(8, 5, 35, NULL, NULL),
	(9, 6, 35, NULL, NULL),
	(12, 7, 38, NULL, NULL),
	(13, 9, 38, NULL, NULL),
	(14, 4, 39, NULL, NULL),
	(15, 5, 39, NULL, NULL),
	(16, 4, 40, NULL, NULL),
	(17, 5, 40, NULL, NULL),
	(18, 1, 41, NULL, NULL),
	(19, 3, 41, NULL, NULL),
	(20, 1, 42, NULL, NULL),
	(21, 3, 42, NULL, NULL),
	(22, 4, 43, NULL, NULL),
	(23, 5, 43, NULL, NULL),
	(24, 1, 44, NULL, NULL),
	(25, 5, 44, NULL, NULL),
	(26, 1, 45, NULL, NULL),
	(47, 1, 30, NULL, NULL),
	(48, 3, 30, NULL, NULL),
	(49, 5, 30, NULL, NULL),
	(50, 10, 30, NULL, NULL),
	(51, 1, 48, NULL, NULL),
	(52, 3, 48, NULL, NULL);
/*!40000 ALTER TABLE `course_user` ENABLE KEYS */;

-- Dumping structure for table consultant.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table consultant.group_classes
CREATE TABLE IF NOT EXISTS `group_classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consultant_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_seats` int(11) NOT NULL,
  `booked_seats` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.group_classes: ~5 rows (approximately)
DELETE FROM `group_classes`;
/*!40000 ALTER TABLE `group_classes` DISABLE KEYS */;
INSERT INTO `group_classes` (`id`, `consultant_id`, `title`, `description`, `subject`, `total_seats`, `booked_seats`, `price`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
	(3, 45, 'First Group Class Updated', 'something here', 'Finance', 10, NULL, '50', '2022-06-06 20:19:00', '2022-06-09 20:19:00', 'Alive', '2022-06-06 15:19:30', '2022-06-06 15:33:47'),
	(4, 44, 'First Group Class Updated', 'something here', 'English', 10, NULL, '50', '2022-06-06 20:19:00', '2022-06-09 20:19:00', 'Alive', '2022-06-06 15:19:30', '2022-06-06 15:33:47'),
	(5, 43, 'First Group Class Updated', 'something here', 'Urdu', 10, NULL, '50', '2022-06-06 20:19:00', '2022-06-09 20:19:00', 'Alive', '2022-06-06 15:19:30', '2022-06-06 15:33:47'),
	(6, 42, 'First Group Class Updated', 'something here', 'Finance', 10, NULL, '50', '2022-06-06 20:19:00', '2022-06-09 20:19:00', 'Alive', '2022-06-06 15:19:30', '2022-06-06 15:33:47'),
	(7, 41, 'First Group Class Updated', 'something here', 'Finance', 10, NULL, '50', '2022-06-06 20:19:00', '2022-06-09 20:19:00', 'Alive', '2022-06-06 15:19:30', '2022-06-06 15:33:47');
/*!40000 ALTER TABLE `group_classes` ENABLE KEYS */;

-- Dumping structure for table consultant.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.migrations: ~10 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(8, '2021_11_02_134852_create_consultant_information_table', 2),
	(10, '2021_11_03_123233_create_course_user_table', 4),
	(11, '2021_11_03_123120_create_courses_table', 5),
	(14, '2021_11_04_145933_create_order_prices_table', 6),
	(20, '2021_11_08_130006_create_student_orders_table', 7),
	(30, '2022_01_19_122613_create_reviews_table', 8),
	(32, '2022_06_06_130742_create_group_classes_table', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table consultant.order_prices
CREATE TABLE IF NOT EXISTS `order_prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `consultant_id` bigint(20) unsigned NOT NULL,
  `order_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_time` bigint(20) NOT NULL,
  `order_charges` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.order_prices: ~3 rows (approximately)
DELETE FROM `order_prices`;
/*!40000 ALTER TABLE `order_prices` DISABLE KEYS */;
INSERT INTO `order_prices` (`id`, `consultant_id`, `order_title`, `order_time`, `order_charges`, `created_at`, `updated_at`) VALUES
	(16, 30, 'Double Updated', 50, 135, '2021-11-08 14:33:57', '2021-11-08 14:34:42'),
	(17, 17, 'Double', 25, 175, NULL, NULL),
	(18, 32, 'Double', 45, 200, NULL, NULL);
/*!40000 ALTER TABLE `order_prices` ENABLE KEYS */;

-- Dumping structure for table consultant.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table consultant.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table consultant.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `consultant_id` bigint(20) unsigned NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL,
  `rating` bigint(20) unsigned NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.reviews: ~2 rows (approximately)
DELETE FROM `reviews`;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`id`, `student_id`, `consultant_id`, `order_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 6, 30, 16, 4, 'okkkk', '2022-01-20 10:18:13', '2022-01-20 10:18:13'),
	(4, 7, 17, 17, 5, 'okkkkkkk', '2022-01-20 11:36:21', '2022-01-20 11:36:21');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Dumping structure for table consultant.student_orders
CREATE TABLE IF NOT EXISTS `student_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL,
  `meeting_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.student_orders: ~6 rows (approximately)
DELETE FROM `student_orders`;
/*!40000 ALTER TABLE `student_orders` DISABLE KEYS */;
INSERT INTO `student_orders` (`id`, `student_id`, `course_id`, `order_id`, `meeting_id`, `order_date`, `order_status`, `payment_method`, `payment_id`, `created_at`, `updated_at`) VALUES
	(1, 6, 6, 17, '4eaa-f1be-8d75', '2022-01-12 20:55:00', 'completed', 'mada', 'a5ec321d-cf06-433a-b3f9-b8ce61cad1d8', '2022-01-12 15:55:38', '2022-01-12 16:12:08'),
	(2, 6, 5, 16, 'dfe4-5633-c52d', '2022-01-12 20:56:00', 'completed', 'mada', 'e782e91c-0697-41a5-9074-81d881d1aaf6', '2022-01-12 15:56:46', '2022-01-12 15:58:37'),
	(3, 6, 1, 18, 'c187-0194-9158', '2022-01-12 21:14:00', 'paid', 'mada', '9f1ddc27-0203-4d60-8c98-75ef20811702', '2022-01-12 16:14:37', '2022-01-12 16:14:46'),
	(4, 6, 10, 16, '13d0-01d1-5fd2', '2022-01-13 14:50:00', 'paid', 'mada', '07fafbcd-bc9c-4ca6-9b9c-c6f1b4e9c0d1', '2022-01-13 09:50:16', '2022-01-13 09:50:38'),
	(5, 7, 6, 17, 'bc38-768c-be6f', '2022-01-13 17:37:00', 'completed', 'mada', '0218e7f2-e143-45ea-9f6e-3ad01659216d', '2022-01-13 10:18:11', '2022-01-13 11:19:35'),
	(6, 7, 1, 16, '9011-60a7-1798', '2022-01-19 14:59:00', 'paid', 'mada', 'e47bafb8-e915-454c-a299-8115090d710b', '2022-01-13 10:40:58', '2022-01-13 11:19:35');
/*!40000 ALTER TABLE `student_orders` ENABLE KEYS */;

-- Dumping structure for table consultant.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table consultant.users: ~29 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$27AwHbCIEQdXv5/PaBL6MOz3xSed.3czlM7vo7fE2jsw4vsoJ0IiK', NULL, '2021-11-02 08:00:41', '2021-11-02 08:00:41'),
	(6, 'Sheikh', 'sheikh@gmail.com', 'student', NULL, '$2y$10$y/oKpvp9rIXPan8LlMiOgOVtiJ1L5llD1wpnLqj10squgWxZDwxVa', NULL, '2021-11-02 08:05:54', '2021-11-02 08:05:54'),
	(7, 'Test', 'test@gmail.com', 'student', NULL, '$2y$10$h0DCYkk57Al/qZRDfNlEjeSKnsL6vT3hsT7aSdbHwt2jccKP/5Sga', NULL, '2021-11-02 08:06:17', '2021-11-02 08:06:17'),
	(8, 'dummy', 'dummy@mail.com', 'student', NULL, '$2y$10$JD0aRII4qPTqCsOVLG4mzuYM8Xc2K7qzpG5ahCqdEXKD7wfF0LBfS', NULL, '2021-11-02 08:07:02', '2021-11-02 08:07:02'),
	(9, 'test2', 'test2@gmail.com', 'student', NULL, '$2y$10$uIuRs4tFmpY8kpS9xyUlB.oaJzn8ogY8qrSqSL0HE9rVb8z9X.qSy', NULL, '2021-11-02 08:08:33', '2021-11-02 08:08:33'),
	(10, 'fine', 'fine@mail.com', 'student', NULL, '$2y$10$AZRh2HO51SA334md/ELWEO7W3aR6aAm0zrXULQ/FT8NdR2./EcLAe', NULL, '2021-11-02 08:10:21', '2021-11-02 08:10:21'),
	(11, 'New', 'new@email.com', 'student', NULL, '$2y$10$hlSQQ/75qrFQxDdwDdhgy.h163.uTWDWPuVHNB4.0.aqG/8NbOG.i', NULL, '2021-11-02 08:24:07', '2021-11-02 08:24:07'),
	(12, 'Final', 'final@gmail.com', 'student', NULL, '$2y$10$Zu8K5H7qko391ekNT33ysu0VkeWgCkbjT84A0tQBuf7RlnDUBpcRm', NULL, '2021-11-02 08:29:19', '2021-11-02 08:29:19'),
	(17, 'Teacher', 'teacher@gmail.com', 'consultant', NULL, '$2y$10$JECn0nXJGcMzhclO1bznd.hbuXym8CcwnVE2xaI1QUNHI0I8JRKX.', NULL, '2021-11-02 10:31:02', '2021-11-02 10:31:02'),
	(18, 'Ahmad', 'ahmad@gmail.com', 'consultant', NULL, '$2y$10$cNvoqPPUwp77Tlnj7IRL0.mjX3lIoufGVoVNuWlPAgUtYU3santfm', NULL, '2021-11-02 10:34:35', '2021-11-04 09:26:02'),
	(19, 'Technology', 'asif@gmail.com', 'consultant', NULL, '$2y$10$COHFnMcOUVlru06wOxobieFiut6f/t3/F3ry6pBAFBkma.6mLChPa', NULL, '2021-11-03 08:21:36', '2021-11-03 08:21:36'),
	(20, 'Technology', 'asif01@gmail.com', 'consultant', NULL, '$2y$10$GvgYfu7cxK.SevhjuggNt.s915h6bizCqhkLWHpCj1qmzm9CgVmIK', NULL, '2021-11-03 08:26:38', '2021-11-03 08:26:38'),
	(21, 'Ali', 'ali@gmail.com', 'consultant', NULL, '$2y$10$jPGNBPsw.Mjjb7tQ/rNV/eHtUJ70V3BOgTaUF.jr9EKc.W61e4W/O', NULL, '2021-11-03 08:29:17', '2021-11-03 08:29:17'),
	(24, 'Daiema Zaheer', 'dz@email.com', 'consultant', NULL, '$2y$10$L5jPFRfKZtj12YOXONnd6u2HIuRIMjFRBamDpFi6DbjqT5VKwFGFq', NULL, '2021-11-03 08:33:53', '2021-11-03 08:33:53'),
	(25, 'new', 'new@new.com', 'consultant', NULL, '$2y$10$Eb.0qonJiHz9eqBQIHbXXefWMkIla/dX./LktIaQU6WQpRiLWo9dC', NULL, '2021-11-03 08:36:32', '2021-11-03 08:36:32'),
	(26, 'new', 'newq@new.com', 'consultant', NULL, '$2y$10$Yi9QVI452ETFBIXueA8zA.qfCs2nPTTQ1OFnfU2qEA5aUSvNMfFau', NULL, '2021-11-03 08:37:44', '2021-11-03 08:37:44'),
	(27, 'Zain Nasir Updated', 'zain00@gmail.com', 'consultant', NULL, '$2y$10$ZXHpBHMh6dZSjZTNrWpRn.TvfRcRyFT4LvMjORukAVN6x8Xpl1qHW', NULL, '2021-11-03 08:47:14', '2021-11-03 11:34:32'),
	(30, 'Salman Ali', 'salmanaliawann@gmail.com', 'consultant', NULL, '$2y$10$GoQtnCEjDy.ZnBYUIY0kguqE6RZZ2pST1Xf/ifhry1WVu3Tmtdi/G', NULL, '2021-11-04 02:22:05', '2021-11-04 02:22:05'),
	(31, 'Asad', 'asad@gmail.com', 'student', NULL, '$2y$10$GoQtnCEjDy.ZnBYUIY0kguqE6RZZ2pST1Xf/ifhry1WVu3Tmtdi/G', NULL, '2021-11-04 12:06:55', '2021-11-04 12:06:55'),
	(32, 'hmm', 'hmm@gmail.com', 'consultant', NULL, '$2y$10$Kes1Vk7os2V8aGLb6v1.OuyAr/B8hoowBtSTL7/N0qEPkzFnN9Br6', NULL, '2021-11-04 12:46:08', '2021-11-04 12:46:08'),
	(35, 'saim', 'saim@gmail.com', 'consultant', NULL, '$2y$10$YaqQBb5pKxKHucz4znblreZpTFg15bvAwzUU5ZhnKfybk9Qr45FXu', NULL, '2021-11-04 12:58:10', '2021-11-04 12:58:10'),
	(38, 'yasir', 'yasir@gmail.com', 'consultant', NULL, '$2y$10$Rk3JXiFwkLJxSrwpJX2rleiPuJCgUXvoWEggtCMpqWecDV4SJ8tRe', NULL, '2021-11-04 13:17:44', '2021-11-04 13:17:44'),
	(39, 'fazal', 'fazal@gmail.com', 'consultant', NULL, '$2y$10$2cl425fe2xPs.Wf6EIq3tuNxnhjz1VUN/h38hUTXON6.xqJ/nfWWq', NULL, '2021-11-04 13:18:50', '2021-11-04 13:18:50'),
	(40, 'kuul', 'kuul@gmail.com', 'consultant', NULL, '$2y$10$9u7NEMTUvVHagZdHPTkzn.nMx/HM2TUJ6QhlV23Ayoon89VoZtk5i', NULL, '2021-11-04 13:19:50', '2021-11-04 13:19:50'),
	(41, 'aaa', 'aaa@gmail.com', 'consultant', NULL, '$2y$10$IGzSSOM9J6DbInNfP5BwtO23pYlP09yhkgYkxxzeIQQGOr0woSmK2', NULL, '2021-11-04 13:23:04', '2021-11-04 13:23:04'),
	(42, 'okkk', 'okkk@gmail.com', 'consultant', NULL, '$2y$10$iej9VGGqco6xxmBUnZTrwOh0SQgkGfpmJABU3xU8bebzLtCPJ30vK', NULL, '2021-11-04 13:27:43', '2021-11-04 13:27:43'),
	(43, 'koi ni', 'koi@gmail.com', 'consultant', NULL, 'H@ssan.00', NULL, '2021-11-04 13:28:59', '2021-11-04 14:09:24'),
	(44, 'User', 'user@gmail.com', 'consultant', NULL, '$2y$10$3zBtti.E6zzshm4LWgdf2.fZfX4bFLiB6HCFVycG4waPTjh9/FrKC', NULL, '2021-11-05 09:54:59', '2021-11-05 11:30:03'),
	(45, 'dumy', 'dummy1@gmail.com', 'consultant', NULL, '$2y$10$z5YsBRcqQ72uMFBqGu/ryuaEQRl9uKbwyyL5J7m3oDEkE1nYHjyEq', NULL, '2021-11-08 10:20:37', '2021-11-08 10:35:00'),
	(46, 'Nero Hood', 'kypov@mailinator.com', 'student', NULL, '$2y$10$oQftUIF94SxJoZvtKlsAu.WnWw0vgfS7EK7Od6F6rx/JDJSNbAnWO', NULL, '2022-06-06 12:51:23', '2022-06-06 12:51:23'),
	(47, 'Georgia Pitts', 'kigiga@mailinator.com', 'student', NULL, '$2y$10$mUbrldpRqht8xfqI3FGFw.zdzhlBY3zr/3yauSq.0qI5TTy4DD.Aa', NULL, '2022-06-06 12:54:16', '2022-06-06 12:54:16'),
	(48, 'Devin Cantu', 'jylupe@mailinator.com', 'consultant', NULL, '$2y$10$B58KREQj/Bb.AfGJ2JfVr.MYsBhc5AK.tAedoOQByHaPkY/RZ8JxG', NULL, '2022-06-06 12:55:04', '2022-06-06 12:55:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
