-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table ctra_lar.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.cache: ~0 rows (approximately)
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.drivers
CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(10) unsigned DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mid_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `marital_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `residential_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number_one` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number_two` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob_year` int(4) DEFAULT NULL,
  `dob_month` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob_day` int(2) DEFAULT NULL,
  `occupation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `village` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lga_origin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_origin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nok` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nok_phone` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `relationship` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `photograph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbprint` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_year` int(4) DEFAULT NULL,
  `reg_month` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_day` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.drivers: ~0 rows (approximately)
/*!40000 ALTER TABLE `drivers` DISABLE KEYS */;
/*!40000 ALTER TABLE `drivers` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.guarantors
CREATE TABLE IF NOT EXISTS `guarantors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(10) unsigned DEFAULT NULL,
  `first_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mid_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_address` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `residential_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number_one` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga_origin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_origin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehiclereg_id` int(10) DEFAULT NULL,
  `photograph` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `guarantor_id_photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.guarantors: ~0 rows (approximately)
/*!40000 ALTER TABLE `guarantors` DISABLE KEYS */;
/*!40000 ALTER TABLE `guarantors` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.ledgers
CREATE TABLE IF NOT EXISTS `ledgers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `recordable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recordable_id` bigint(20) unsigned NOT NULL,
  `context` tinyint(3) unsigned NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pivot` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ledgers_recordable_type_recordable_id_index` (`recordable_type`,`recordable_id`),
  KEY `ledgers_user_id_user_type_index` (`user_id`,`user_type`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.ledgers: ~14 rows (approximately)
/*!40000 ALTER TABLE `ledgers` DISABLE KEYS */;
INSERT INTO `ledgers` (`id`, `user_type`, `user_id`, `recordable_type`, `recordable_id`, `context`, `event`, `properties`, `modified`, `pivot`, `extra`, `url`, `ip_address`, `user_agent`, `signature`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\Auth\\User', 8, 'App\\Models\\Auth\\User', 8, 4, 'updated', '{"id":8,"uuid":"e88ec9f7-635e-4d0e-9eef-4e97443cef79","first_name":"Executive7","last_name":"Registerer7","email":"user7@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$OUaJlemT1cHB93Lzb\\/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG","password_changed_at":null,"active":1,"confirmation_code":"10f440d0ce546f87336310e602e537a4","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-20 23:05:06","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:41","updated_at":"2021-01-20 23:05:06","deleted_at":null}', '["timezone","last_login_at","last_login_ip","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'ebdb16e87623d038ca869d9d5f98b7448f676d3f2c20cf884a65e5c16e4c5a311a3dc852262bc55e5c0d0c5e380211653828f406958929441d04a51c7e9aba63', '2021-01-20 23:05:07', '2021-01-20 23:05:07'),
	(2, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{"id":1,"uuid":"90a92c8f-3bda-43e4-a0f3-2c88111c183f","first_name":"Super","last_name":"Admin","email":"admin@admin.com","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$Pixx7\\/uN1nPm15c\\/Jy04V.2gjLluUomIEYpFigWkJOgHE5l07Wirq","password_changed_at":null,"active":1,"confirmation_code":"e1a79d95d10440d166f0bde37586bcb0","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-21 06:18:03","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:39","updated_at":"2021-01-21 06:18:04","deleted_at":null}', '["timezone","last_login_at","last_login_ip","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', '7acb5b322343142da99adfa03b274e2ce717a9ac879b9fdd78a5ae99ff13ef3950bf1943e03d1aa26f191b5c0fabce14672dd733e31098e8f504a3b9e0524197', '2021-01-21 06:18:04', '2021-01-21 06:18:04'),
	(3, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{"id":1,"uuid":"90a92c8f-3bda-43e4-a0f3-2c88111c183f","first_name":"Super","last_name":"Admin","email":"admin@admin.com","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$Pixx7\\/uN1nPm15c\\/Jy04V.2gjLluUomIEYpFigWkJOgHE5l07Wirq","password_changed_at":null,"active":1,"confirmation_code":"e1a79d95d10440d166f0bde37586bcb0","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-21 17:31:06","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:39","updated_at":"2021-01-21 17:31:06","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'b466bc82fe5f8d034f8c20322bd874f2aa3bdde58517ba1d538a2c55c00162142a341211b9ccc1b708b6c61ee26c8ecd103ca047234cab8433bfb57ec06e39d4', '2021-01-21 17:31:06', '2021-01-21 17:31:06'),
	(4, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{"id":1,"uuid":"90a92c8f-3bda-43e4-a0f3-2c88111c183f","first_name":"Super","last_name":"Admin","email":"admin@admin.com","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$Pixx7\\/uN1nPm15c\\/Jy04V.2gjLluUomIEYpFigWkJOgHE5l07Wirq","password_changed_at":null,"active":1,"confirmation_code":"e1a79d95d10440d166f0bde37586bcb0","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-21 17:51:48","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:39","updated_at":"2021-01-21 17:51:48","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', '71e100e1c4e66cd390639985fa3b053ac8adafda18837eb54f5d8bcc8b322687d5256361fb9e4c0fbfcb9226205d9d8b2cbf3a9b1d60b4703f762011065e4679', '2021-01-21 17:51:48', '2021-01-21 17:51:48'),
	(5, 'App\\Models\\Auth\\User', 8, 'App\\Models\\Auth\\User', 8, 4, 'updated', '{"id":8,"uuid":"e88ec9f7-635e-4d0e-9eef-4e97443cef79","first_name":"Executive7","last_name":"Registerer7","email":"user7@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$OUaJlemT1cHB93Lzb\\/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG","password_changed_at":null,"active":1,"confirmation_code":"10f440d0ce546f87336310e602e537a4","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-21 17:52:17","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:41","updated_at":"2021-01-21 17:52:17","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'f11d6fbba82f9f1e4ca1c8f27b79aef7d0982fe6dda6be63b03f5c0cfd5c6c7c7911e03d722833e2aa0b7dbdd56c2dc813121d879726cdeae030da719464fdc1', '2021-01-21 17:52:17', '2021-01-21 17:52:17'),
	(6, 'App\\Models\\Auth\\User', 8, 'App\\Models\\Auth\\User', 8, 4, 'updated', '{"id":8,"uuid":"e88ec9f7-635e-4d0e-9eef-4e97443cef79","first_name":"Executive7","last_name":"Registerer7","email":"user7@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$OUaJlemT1cHB93Lzb\\/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG","password_changed_at":null,"active":1,"confirmation_code":"10f440d0ce546f87336310e602e537a4","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-21 21:21:43","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:41","updated_at":"2021-01-21 21:21:44","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'be3b079335959e474436d388119df9a7252c6b0b0a9659a69deafedbe49d18f8970bdbb2eedf3810825010982c609a7f8f8a557e90cbd8c951a42e6b9ae25f8e', '2021-01-21 21:21:45', '2021-01-21 21:21:45'),
	(7, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{"id":3,"uuid":"f71f4069-3a54-48d1-904a-652695cf765e","first_name":"Executive2","last_name":"Registerer2","email":"user2@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$HCOGSyhfCWiz5NMw4t6LL.7w8hYAzUNgItZXEgxhpqR2P52ngS28a","password_changed_at":null,"active":1,"confirmation_code":"32e296e98e2931e2ebcc887b0976df59","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-21 21:28:04","last_login_ip":"127.0.0.1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:40","updated_at":"2021-01-21 21:28:04","deleted_at":null}', '["timezone","last_login_at","last_login_ip","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', '4fa15cc2b9484dcdfd905af39932935d01f279c9a3c9d570edbe2992a65c5fc7e5c350f8bd62ce6f7d7a28b8295a0fbb6551550fbc0af1b276d824af1ac831a6', '2021-01-21 21:28:04', '2021-01-21 21:28:04'),
	(8, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{"id":3,"uuid":"f71f4069-3a54-48d1-904a-652695cf765e","first_name":"Executive2","last_name":"Registerer2","email":"user2@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$HCOGSyhfCWiz5NMw4t6LL.7w8hYAzUNgItZXEgxhpqR2P52ngS28a","password_changed_at":null,"active":1,"confirmation_code":"32e296e98e2931e2ebcc887b0976df59","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-21 23:29:31","last_login_ip":"127.0.0.1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:40","updated_at":"2021-01-21 23:29:31","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'a87f93a2377810f87b7570a2e75eaeeb79151462096da8b122be445197dd97ff6064aa47ba673ada18fd510c0cc724bb33001c8de830d562dd6a64a0d99a9afc', '2021-01-21 23:29:32', '2021-01-21 23:29:32'),
	(9, 'App\\Models\\Auth\\User', 4, 'App\\Models\\Auth\\User', 4, 4, 'updated', '{"id":4,"uuid":"aa68ebe5-02f5-437b-8938-a8e42b4883b9","first_name":"Executive3","last_name":"Registerer3","email":"user3@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$UR2igqZvyyhtlfEhtfn.HuPchTsJb1EpTl\\/PFL8\\/qVdZixkyqL7N6","password_changed_at":null,"active":1,"confirmation_code":"eb2a7ed062b3ea8dcf642a3ed550a8cd","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-22 04:47:19","last_login_ip":"127.0.0.1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:40","updated_at":"2021-01-22 04:47:19","deleted_at":null}', '["timezone","last_login_at","last_login_ip","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', '4f72c6a6894e2cc529bfbc6dddc479d93e5088da2e6b540c15f936b105c7f088c627f1a86f07636502c9ebc5026aa384ed12452ca7ff3f2e53f184368d8314ee', '2021-01-22 04:47:19', '2021-01-22 04:47:19'),
	(10, 'App\\Models\\Auth\\User', 6, 'App\\Models\\Auth\\User', 6, 4, 'updated', '{"id":6,"uuid":"2449748e-8b20-4513-88a3-7b442cd4a726","first_name":"Executive5","last_name":"Registerer5","email":"user5@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$kfNSqCmgT5uDypdMIikj3Ojclv0ukA7tQZ\\/Dz1H99faHnvTBUwEPW","password_changed_at":null,"active":1,"confirmation_code":"28da0b549b6a3847c2ed78357c94b9be","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-22 05:15:52","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:41","updated_at":"2021-01-22 05:15:53","deleted_at":null}', '["timezone","last_login_at","last_login_ip","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'fc1227754fea00f2d8afa1a3e6bbb35e240c2cf537c7fc3ddcd0e637e9e63c98d43c8008486b4c239aabab03c5137d9c1cd4a505a0d5e3ea7d03214036942ba3', '2021-01-22 05:15:53', '2021-01-22 05:15:53'),
	(11, 'App\\Models\\Auth\\User', 8, 'App\\Models\\Auth\\User', 8, 4, 'updated', '{"id":8,"uuid":"e88ec9f7-635e-4d0e-9eef-4e97443cef79","first_name":"Executive7","last_name":"Registerer7","email":"user7@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$OUaJlemT1cHB93Lzb\\/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG","password_changed_at":null,"active":1,"confirmation_code":"10f440d0ce546f87336310e602e537a4","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-22 11:23:13","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:41","updated_at":"2021-01-22 11:23:14","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', '06a6b080ae65328c8aac862e9f459cd6c32ca20d71600335ed8f0760fa8100efd8f63234d5a0e1079eabd98ed56a924ae3d460ad4c5682d7c3a3cd2bed7abdb5', '2021-01-22 11:23:16', '2021-01-22 11:23:16'),
	(12, 'App\\Models\\Auth\\User', 8, 'App\\Models\\Auth\\User', 8, 4, 'updated', '{"id":8,"uuid":"e88ec9f7-635e-4d0e-9eef-4e97443cef79","first_name":"Executive7","last_name":"Registerer7","email":"user7@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$OUaJlemT1cHB93Lzb\\/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG","password_changed_at":null,"active":1,"confirmation_code":"10f440d0ce546f87336310e602e537a4","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-22 15:39:56","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:41","updated_at":"2021-01-22 15:39:56","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36', '4f7d4160df106ee530aba895b6b05c8a6e1bc63f8f969b55e537b708d2e9e1d2fc79afb0e615abd88d72d6038092c27de2330cd83e327f9ef423a7d32b7e25d0', '2021-01-22 15:39:57', '2021-01-22 15:39:57'),
	(13, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{"id":3,"uuid":"f71f4069-3a54-48d1-904a-652695cf765e","first_name":"Executive2","last_name":"Registerer2","email":"user2@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$HCOGSyhfCWiz5NMw4t6LL.7w8hYAzUNgItZXEgxhpqR2P52ngS28a","password_changed_at":null,"active":1,"confirmation_code":"32e296e98e2931e2ebcc887b0976df59","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-22 17:01:26","last_login_ip":"127.0.0.1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:40","updated_at":"2021-01-22 17:01:26","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 'ab4cf2814882fa53fc603ac2b9e93dc5eeb91fc7b1d2a979c6343aa5558bf881fdbca3d7d6322328dc040c4a6dfcbc1acb5159016ebb7ef8b9e94e08f258d20b', '2021-01-22 17:01:26', '2021-01-22 17:01:26'),
	(14, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{"id":3,"uuid":"f71f4069-3a54-48d1-904a-652695cf765e","first_name":"Executive2","last_name":"Registerer2","email":"user2@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$HCOGSyhfCWiz5NMw4t6LL.7w8hYAzUNgItZXEgxhpqR2P52ngS28a","password_changed_at":null,"active":1,"confirmation_code":"32e296e98e2931e2ebcc887b0976df59","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-22 20:28:41","last_login_ip":"127.0.0.1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:40","updated_at":"2021-01-22 20:28:41","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 'bfb67861e2a97273c67468bfb99e2f022234d8aaec1f593ba403b5308e5a0e11fddd7e8b7da7601e239e9f681369d3cbc378725446c1cf8cb400127e913d8017', '2021-01-22 20:28:41', '2021-01-22 20:28:41'),
	(15, 'App\\Models\\Auth\\User', 8, 'App\\Models\\Auth\\User', 8, 4, 'updated', '{"id":8,"uuid":"e88ec9f7-635e-4d0e-9eef-4e97443cef79","first_name":"Executive7","last_name":"Registerer7","email":"user7@ctra.app","avatar_type":"gravatar","avatar_location":null,"password":"$2y$10$OUaJlemT1cHB93Lzb\\/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG","password_changed_at":null,"active":1,"confirmation_code":"10f440d0ce546f87336310e602e537a4","confirmed":1,"timezone":"America\\/New_York","last_login_at":"2021-01-23 02:46:46","last_login_ip":"::1","to_be_logged_out":0,"remember_token":null,"created_at":"2021-01-20 23:03:41","updated_at":"2021-01-23 02:46:46","deleted_at":null}', '["last_login_at","updated_at"]', '[]', '[]', 'http://localhost/ctra_lar/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36', 'c3be3ead35d348d8c237483625f00cc84c439f0693120c424c116822458e4075e7173d31966a27b822e6c31d899f1a87aba5a620a8bbd6cd1a1f105810436820', '2021-01-23 02:46:47', '2021-01-23 02:46:47');
/*!40000 ALTER TABLE `ledgers` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2017_09_03_144628_create_permission_tables', 1),
	(4, '2017_09_11_174816_create_social_accounts_table', 1),
	(5, '2017_09_26_140332_create_cache_table', 1),
	(6, '2017_09_26_140528_create_sessions_table', 1),
	(7, '2017_09_26_140609_create_jobs_table', 1),
	(8, '2018_04_08_033256_create_password_histories_table', 1),
	(9, '2018_11_21_000001_create_ledgers_table', 1),
	(10, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.model_has_roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\Auth\\User', 1),
	(2, 'App\\Models\\Auth\\User', 2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.owners
CREATE TABLE IF NOT EXISTS `owners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(10) unsigned DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mid_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob_year` int(4) DEFAULT NULL,
  `dob_month` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob_day` int(2) DEFAULT NULL,
  `marital_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `residential_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_num_one` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_num_two` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `village` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lga_origin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_origin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nok` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `relationship` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nok_phone` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.owners: ~0 rows (approximately)
/*!40000 ALTER TABLE `owners` DISABLE KEYS */;
/*!40000 ALTER TABLE `owners` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.password_histories
CREATE TABLE IF NOT EXISTS `password_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `password_histories_user_id_foreign` (`user_id`),
  CONSTRAINT `password_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.password_histories: ~9 rows (approximately)
/*!40000 ALTER TABLE `password_histories` DISABLE KEYS */;
INSERT INTO `password_histories` (`id`, `user_id`, `password`, `created_at`, `updated_at`) VALUES
	(1, 1, '$2y$10$Pixx7/uN1nPm15c/Jy04V.2gjLluUomIEYpFigWkJOgHE5l07Wirq', '2021-01-20 23:03:39', '2021-01-20 23:03:39'),
	(2, 2, '$2y$10$6NOA7oFsFrOS.xtjA6BliuiIEPH9/YtUoj1lU/GbwvqWsDWeFYabK', '2021-01-20 23:03:40', '2021-01-20 23:03:40'),
	(3, 3, '$2y$10$HCOGSyhfCWiz5NMw4t6LL.7w8hYAzUNgItZXEgxhpqR2P52ngS28a', '2021-01-20 23:03:40', '2021-01-20 23:03:40'),
	(4, 4, '$2y$10$UR2igqZvyyhtlfEhtfn.HuPchTsJb1EpTl/PFL8/qVdZixkyqL7N6', '2021-01-20 23:03:40', '2021-01-20 23:03:40'),
	(5, 5, '$2y$10$ykVXk5IkZQ33SYeXQlOTCOKKF4ERQNnWfTJoUqXYNRDIr4A2sYBAO', '2021-01-20 23:03:41', '2021-01-20 23:03:41'),
	(6, 6, '$2y$10$kfNSqCmgT5uDypdMIikj3Ojclv0ukA7tQZ/Dz1H99faHnvTBUwEPW', '2021-01-20 23:03:41', '2021-01-20 23:03:41'),
	(7, 7, '$2y$10$OoxNvt9Yhxg81q0s5BsUJekwaF5Wrrt.buYveKsD/FUAFUO3wjF1e', '2021-01-20 23:03:41', '2021-01-20 23:03:41'),
	(8, 8, '$2y$10$OUaJlemT1cHB93Lzb/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG', '2021-01-20 23:03:41', '2021-01-20 23:03:41'),
	(9, 9, '$2y$10$k9no1BnPhiF9.Iy9popU4uDLwmr8vXF/FhM1bRxN1FnCcfZA1RVDW', '2021-01-20 23:03:41', '2021-01-20 23:03:41');
/*!40000 ALTER TABLE `password_histories` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'view backend', 'web', '2021-01-20 23:03:42', '2021-01-20 23:03:42');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_name_index` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'administrator', 'web', '2021-01-20 23:03:42', '2021-01-20 23:03:42'),
	(2, 'user', 'web', '2021-01-20 23:03:42', '2021-01-20 23:03:42');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.role_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.social_accounts
CREATE TABLE IF NOT EXISTS `social_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `social_accounts_user_id_foreign` (`user_id`),
  CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.social_accounts: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gravatar',
  `avatar_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `confirmation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_be_logged_out` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.users: ~9 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `uuid`, `first_name`, `last_name`, `email`, `avatar_type`, `avatar_location`, `password`, `password_changed_at`, `active`, `confirmation_code`, `confirmed`, `timezone`, `last_login_at`, `last_login_ip`, `to_be_logged_out`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '90a92c8f-3bda-43e4-a0f3-2c88111c183f', 'Super', 'Admin', 'admin@admin.com', 'gravatar', NULL, '$2y$10$Pixx7/uN1nPm15c/Jy04V.2gjLluUomIEYpFigWkJOgHE5l07Wirq', NULL, 1, 'e1a79d95d10440d166f0bde37586bcb0', 1, 'America/New_York', '2021-01-21 17:51:48', '::1', 0, NULL, '2021-01-20 23:03:39', '2021-01-21 17:51:48', NULL),
	(2, 'dc26a02e-a85b-4bad-8b90-a4c97ddb7e6a', 'Executive1', 'Registerer1', 'user1@ctra.app', 'gravatar', NULL, '$2y$10$6NOA7oFsFrOS.xtjA6BliuiIEPH9/YtUoj1lU/GbwvqWsDWeFYabK', NULL, 1, '6c129a03b192a4194c99d77114244170', 1, NULL, NULL, NULL, 0, NULL, '2021-01-20 23:03:40', '2021-01-20 23:03:40', NULL),
	(3, 'f71f4069-3a54-48d1-904a-652695cf765e', 'Executive2', 'Registerer2', 'user2@ctra.app', 'gravatar', NULL, '$2y$10$HCOGSyhfCWiz5NMw4t6LL.7w8hYAzUNgItZXEgxhpqR2P52ngS28a', NULL, 1, '32e296e98e2931e2ebcc887b0976df59', 1, 'America/New_York', '2021-01-22 20:28:41', '127.0.0.1', 0, NULL, '2021-01-20 23:03:40', '2021-01-22 20:28:41', NULL),
	(4, 'aa68ebe5-02f5-437b-8938-a8e42b4883b9', 'Executive3', 'Registerer3', 'user3@ctra.app', 'gravatar', NULL, '$2y$10$UR2igqZvyyhtlfEhtfn.HuPchTsJb1EpTl/PFL8/qVdZixkyqL7N6', NULL, 1, 'eb2a7ed062b3ea8dcf642a3ed550a8cd', 1, 'America/New_York', '2021-01-22 04:47:19', '127.0.0.1', 0, NULL, '2021-01-20 23:03:40', '2021-01-22 04:47:19', NULL),
	(5, '2efc7fa8-9d87-4367-af89-71ad154d06c8', 'Executive4', 'Registerer4', 'user4@ctra.app', 'gravatar', NULL, '$2y$10$ykVXk5IkZQ33SYeXQlOTCOKKF4ERQNnWfTJoUqXYNRDIr4A2sYBAO', NULL, 1, '0cd7583e7787ae4bea54276c3550d75f', 1, NULL, NULL, NULL, 0, NULL, '2021-01-20 23:03:41', '2021-01-20 23:03:41', NULL),
	(6, '2449748e-8b20-4513-88a3-7b442cd4a726', 'Executive5', 'Registerer5', 'user5@ctra.app', 'gravatar', NULL, '$2y$10$kfNSqCmgT5uDypdMIikj3Ojclv0ukA7tQZ/Dz1H99faHnvTBUwEPW', NULL, 1, '28da0b549b6a3847c2ed78357c94b9be', 1, 'America/New_York', '2021-01-22 05:15:52', '::1', 0, NULL, '2021-01-20 23:03:41', '2021-01-22 05:15:53', NULL),
	(7, '0e909bce-f2f0-4e8b-a5c8-ca20415f4139', 'Executive6', 'Registerer6', 'user6@ctra.app', 'gravatar', NULL, '$2y$10$OoxNvt9Yhxg81q0s5BsUJekwaF5Wrrt.buYveKsD/FUAFUO3wjF1e', NULL, 1, 'fb35003026fe44bab633dc72da361654', 1, NULL, NULL, NULL, 0, NULL, '2021-01-20 23:03:41', '2021-01-20 23:03:41', NULL),
	(8, 'e88ec9f7-635e-4d0e-9eef-4e97443cef79', 'Executive7', 'Registerer7', 'user7@ctra.app', 'gravatar', NULL, '$2y$10$OUaJlemT1cHB93Lzb/egAeRaT9GD65kl6E7fLxgViFh5yoeIyfxUG', NULL, 1, '10f440d0ce546f87336310e602e537a4', 1, 'America/New_York', '2021-01-23 02:46:46', '::1', 0, NULL, '2021-01-20 23:03:41', '2021-01-23 02:46:46', NULL),
	(9, '85afa35d-b343-4410-a83f-726d9a74f981', 'Default', 'User', 'user@user.com', 'gravatar', NULL, '$2y$10$k9no1BnPhiF9.Iy9popU4uDLwmr8vXF/FhM1bRxN1FnCcfZA1RVDW', NULL, 1, '3eec58f72abf5d1773fd83be9d11fc62', 1, NULL, NULL, NULL, 0, NULL, '2021-01-20 23:03:41', '2021-01-20 23:03:41', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table ctra_lar.vehicles
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `form_num` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_num` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_manufactured` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colour` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sticker_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sticker_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chassis_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_year` int(4) DEFAULT 0,
  `reg_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_day` int(2) DEFAULT 0,
  `ren_year` int(4) DEFAULT 0,
  `ren_month` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ren_day` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ctra_lar.vehicles: ~0 rows (approximately)
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
