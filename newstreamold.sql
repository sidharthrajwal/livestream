-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2025 at 11:28 AM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_07_120256_create_post_like_dislike', 2),
(5, '2025_07_07_123219_create_vedio_posts', 2),
(7, '2025_07_25_062945_post_like_dislikea', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_like_dislike`
--

CREATE TABLE `post_like_dislike` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `is_like` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_like_dislike`
--

INSERT INTO `post_like_dislike` (`id`, `user_id`, `post_id`, `is_like`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2025-07-25 02:06:16', '2025-07-25 02:06:16'),
(2, 1, 1, 1, '2025-07-25 02:07:12', '2025-07-25 02:07:12'),
(28, 4, 2, 1, '2025-07-25 05:36:04', '2025-07-25 05:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bhpupH9IZjFHGP2ltfLVRacwz7GwmlNWcrNw48bz', 4, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV3ZLRm9ya2hMaGpxM0JidUpETHBDRjJLZ3FYNU82b29OZG54VzBaSyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvd2F0Y2gvMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1753441564),
('bRWc1XvFcth9xTNvPnZ3DXVjvMcbiLhdydDIzjYL', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 15; RMX3998) AppleWebKit/537.36 (KHTML, like Gecko) JioSphere/5.0.5 Chrome/127.0.6533.101 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVFVRQUw1ZWJnOFZKbEsxVTEzdHk5MW1mNjVmUFppUm9wU3ZPb2o1ViI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3JueHBiLTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3NzoiaHR0cDovL3JueHBiLTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753441113),
('HZi264Vaj2XoKEz28s6bO7vDXTvL4elWJH9H8rVb', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 15; RMX3998) AppleWebKit/537.36 (KHTML, like Gecko) JioSphere/5.0.5 Chrome/127.0.6533.101 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZU5nZVR5Z3hXTElzdHNLckMySnN4M2loV1VJTVZoeG1KV2ZjTEtaTCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3NzoiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753440961),
('KdjJLL0sHsQ03VO0QRpUnBwLnmpIMm1xqybboPdl', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib3hyd2EzSVB4NHROdGJyejhDaE54VG14d205TDFUV2E4RkdmUDZCYiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3Juenp0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3NzoiaHR0cDovL3Juenp0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753441183),
('NBWFTelu44lgH72FG65SdYnKP2CLOlRrbpg5oKIt', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaThYRms5WVZCMUdSR2FqWENIVmhZTEpLWE9Jc3d5MGRIZWlsTXZjbSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3JuZWtyLTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3NzoiaHR0cDovL3JuZWtyLTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753441152),
('OjQbz1G0g8bvDvEWPHDk0Aam9G3Z5o4NNz45Vavd', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXU4SlI1QzlsbElSWWhYYjBYUFRFSnJqVDVOSU1ibjBucHROcHlzcSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3NzoiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753440485),
('oLrT7l3h1WHu5NJU3gusHog2UjsBcRAnVQo5422M', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQkN2MFd1NWlHZmJlMHhXREdZTmxBNG54cUZnNHVjN2pXOVpqbzFwUCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3NzoiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753440460),
('xmELlHfbul0KPtXsKydE61rh7sfBISkabvJeUs4r', NULL, '127.0.0.1', 'Ruby', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoianhNTEZUSlV4Mzg0UDg2YURPeDN0cUZJYjJJSE8zbnB5WURTZzRJQyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3MToiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753440606),
('y8EyH1VEUe9akr0BVc7vrnlsPSyi6pvl89fMFbp8', NULL, '127.0.0.1', 'Ruby', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNFF4RnkwR1REMDU3UUVGRFhyeEtRVERaaVZVbk9zSzByYVI0VmtkQSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo3MToiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo3MToiaHR0cDovL3JudHR0LTI0MDEtNDkwMC0xYzZhLWE1NWItNWFhMS1mOTQ0LWJhOTYtM2IzZC5hLmZyZWUucGluZ2d5LmxpbmsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753440469);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'test test', 'kiyanshweo@gmail.com', '2025-07-08 06:46:31', '$2y$12$CX0XTgzfsm2fLLlH57Dw/ekHYNc7cDCrmy.KP18TJOBJ/L8FJm/le', NULL, '2025-07-08 06:45:36', '2025-07-08 06:46:31'),
(4, 'rocky yadav', 'test@gmail.com', '2025-07-25 03:44:11', '$2y$12$s.UN/EIVl4o0zSxOyBba2utdHrAr5E3TSd3gbkPmr6ZrNI3ZJryYO', NULL, '2025-07-25 03:43:43', '2025-07-25 03:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `vedio_posts`
--

CREATE TABLE `vedio_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vedio_posts`
--

INSERT INTO `vedio_posts` (`id`, `created_at`, `updated_at`) VALUES
(1, '2025-05-30 05:02:45', '2025-05-30 05:02:45'),
(2, '2025-07-11 07:39:11', '2025-07-11 07:39:11'),
(3, '2025-07-11 10:02:23', '2025-07-18 10:02:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `post_like_dislike`
--
ALTER TABLE `post_like_dislike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_like_dislike_user_id_foreign` (`user_id`),
  ADD KEY `post_like_dislike_post_id_foreign` (`post_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vedio_posts`
--
ALTER TABLE `vedio_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_like_dislike`
--
ALTER TABLE `post_like_dislike`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vedio_posts`
--
ALTER TABLE `vedio_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_like_dislike`
--
ALTER TABLE `post_like_dislike`
  ADD CONSTRAINT `post_like_dislike_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `vedio_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_like_dislike_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
