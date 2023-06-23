-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 07:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_16_111625_add_details_to_users_table', 2),
(7, '2023_05_17_065741_create_department_table', 3),
(8, '2023_05_17_070351_add_details_to_department_table', 4),
(9, '2023_05_17_082241_create_category_table', 5),
(10, '2023_05_17_102049_create_employee_table', 6),
(11, '2023_05_18_074501_create_posts_table', 7),
(12, '2023_05_18_074921_create_post_images_table', 7),
(13, '2023_05_18_102859_create_category_table', 8),
(14, '2023_05_18_112114_create_department_table', 9),
(15, '2023_05_19_131849_create_posts_table', 10),
(16, '2023_05_19_131931_create_posts_images_table', 10),
(17, '2023_05_19_131949_create_posts_demo_table', 10),
(18, '2023_05_19_132014_create_posts_document_table', 10),
(19, '2023_05_22_114244_add_details_to_posts_table', 11),
(20, '2023_05_22_122810_create_posts_images_table', 12),
(21, '2023_05_22_132442_create_posts_video_table', 13),
(22, '2023_05_23_054315_add_details_to_posts_table', 14),
(23, '2023_05_23_072619_create_posts_table', 15),
(24, '2023_05_23_074607_create_posts_table', 16),
(25, '2023_05_23_075608_create_post_images_table', 17),
(26, '2023_05_23_075634_create_post_video_table', 17),
(27, '2023_05_23_075721_create_post_documents_table', 17),
(28, '2023_05_23_081037_add_details_to_posts_table', 18),
(29, '2023_05_23_081527_create_post_images_table', 19),
(30, '2023_05_23_082129_create_posts_table', 20),
(31, '2023_05_23_082337_create_post_documents_table', 21),
(32, '2023_05_23_082354_create_post_images_table', 21),
(33, '2023_05_23_082400_create_post_video_table', 21),
(34, '2023_05_23_082534_create_posts_table', 22),
(35, '2023_05_23_082617_create_post_images_table', 23),
(36, '2023_05_23_082636_create_post_video_table', 23),
(37, '2023_05_23_082658_create_post_documents_table', 23),
(38, '2023_05_23_110628_add_details_to_posts_table', 24),
(39, '2023_05_23_114718_create_post_title_image_table', 25),
(40, '2023_05_23_124722_add_details_to_posts_table', 26),
(41, '2023_05_23_125151_add_details_to_posts_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `post_description` longtext NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=active,0=inactive',
  `pricing` int(11) NOT NULL,
  `conditions` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_summery` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `category`, `post_description`, `contact_number`, `contact_email`, `post_status`, `pricing`, `conditions`, `created_by`, `created_at`, `updated_at`, `post_summery`) VALUES
(14, 'adadasd', 'adsadasd', 'biology', 'asdsadasd', '12121313', 'asdasd@gmail.com', 0, 13123123, 1, '5', '2023-05-23 07:58:15', '2023-05-23 07:58:15', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `post_documents`
--

CREATE TABLE `post_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `document` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_documents`
--

INSERT INTO `post_documents` (`id`, `posts_id`, `document`, `created_at`, `updated_at`) VALUES
(8, 14, 'uploads/posts/document/16848430950.pdf', '2023-05-23 07:58:15', '2023-05-23 07:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `posts_id`, `image`, `created_at`, `updated_at`) VALUES
(20, 14, 'uploads/posts/images/16848430950.jpg', '2023-05-23 07:58:15', '2023-05-23 07:58:15'),
(21, 14, 'uploads/posts/images/16848430951.jpg', '2023-05-23 07:58:15', '2023-05-23 07:58:15'),
(22, 14, 'uploads/posts/images/16848430952.png', '2023-05-23 07:58:15', '2023-05-23 07:58:15'),
(23, 14, 'uploads/posts/images/16848430953.png', '2023-05-23 07:58:15', '2023-05-23 07:58:15'),
(24, 14, 'uploads/posts/images/16848430954.png', '2023-05-23 07:58:15', '2023-05-23 07:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `post_title_image`
--

CREATE TABLE `post_title_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `title_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_title_image`
--

INSERT INTO `post_title_image` (`id`, `posts_id`, `title_image`, `created_at`, `updated_at`) VALUES
(2, 14, 'uploads/posts/title_image/1684843095.png', '2023-05-23 07:58:15', '2023-05-23 07:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `post_video`
--

CREATE TABLE `post_video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_video`
--

INSERT INTO `post_video` (`id`, `posts_id`, `video`, `created_at`, `updated_at`) VALUES
(8, 14, 'uploads/posts/video/1684843095.mp4', '2023-05-23 07:58:15', '2023-05-23 07:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user, 1=admin',
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`, `username`) VALUES
(5, 'Vidusha Wijekoo', 'admin@admin.com', NULL, '$2y$10$.qsIf4LlEorEAX0s4oqF3eMB8I8xZLLlO6qVnC9CJOF12ob.dbl.O', NULL, '2023-05-23 03:34:46', '2023-05-23 03:34:46', 0, 'admin@admin.com'),
(6, 'Phone', 'vidusha.wijekoon11@gmail.com', NULL, '$2y$10$KGAI4FyGfWPCnXQE5IQ.de867TvEx8jLshHOYNAzLiYGvRyp6o1dm', NULL, '2023-05-23 03:37:07', '2023-05-23 03:37:07', 0, 'admin@admin.com'),
(7, 'Phone', 'asdsad@adsad.gmail.com', NULL, '$2y$10$xpWbUgIKDh04T4qJoCJkmuJhpaayDQ34DiIeqbNn0BNBMtnqDDNw2', NULL, '2023-05-23 03:40:28', '2023-05-23 03:40:28', 0, 'werdtfyuhnjim'),
(8, 'Laptop', 'asdsfdsf@gmail.com', NULL, '$2y$10$wfsUAVds5T.WqRR7ZEpqY.oQwbz3lYQEbI/UG5Sbca6Z/APjim9E.', NULL, '2023-05-23 03:42:13', '2023-05-23 03:42:13', 0, '1231312321313'),
(9, 'sadsadsada', 'dasdsadasd@gmail.com', NULL, '$2y$10$A8cwqc6drcc22xzs3nnAd.MESACqE5jjxBz5gXWJ5a7no.xGiaBAu', NULL, '2023-05-23 03:43:50', '2023-05-23 03:43:50', 0, 'adadadad'),
(10, 'afjhbfjfbj', 'badsad@gmail.com', NULL, '$2y$10$6JVESQA91CeMPIEkBkUSdu14.SUZHpJFcDpo6v3H7.aRaCN85RWD6', NULL, '2023-05-23 03:45:23', '2023-05-23 03:45:23', 0, 'sbhsdvfsfvskjfv'),
(11, 'Saman', 'sam@sam.lk', NULL, '$2y$10$0MPSVNoR3DMhXkj9qWIjj.qMXu6lzwP5CxYvFZPxLb9Y/W55miyGq', NULL, '2023-05-24 01:09:34', '2023-05-24 01:09:34', 0, 'samn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_documents`
--
ALTER TABLE `post_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_documents_posts_id_foreign` (`posts_id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_images_posts_id_foreign` (`posts_id`);

--
-- Indexes for table `post_title_image`
--
ALTER TABLE `post_title_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_title_image_posts_id_foreign` (`posts_id`);

--
-- Indexes for table `post_video`
--
ALTER TABLE `post_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_video_posts_id_foreign` (`posts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post_documents`
--
ALTER TABLE `post_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `post_title_image`
--
ALTER TABLE `post_title_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_video`
--
ALTER TABLE `post_video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_documents`
--
ALTER TABLE `post_documents`
  ADD CONSTRAINT `post_documents_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_title_image`
--
ALTER TABLE `post_title_image`
  ADD CONSTRAINT `post_title_image_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_video`
--
ALTER TABLE `post_video`
  ADD CONSTRAINT `post_video_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
