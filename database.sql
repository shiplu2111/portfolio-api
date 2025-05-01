-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2025 at 06:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filament_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `services` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `services`, `image`, `designation`, `designation_image`, `testimonial_image`, `testimonial_name`, `created_at`, `updated_at`) VALUES
(1, 'Professional Problem Solutions For Digital Products', 'At vero eos et accusamus etodio dignissimos ducimus praesentium voluptatum corrupti quos dolores quas molestias excepturi sint occaecati cupiditate provident qui officia deserunt mollitia animi, id est laborum et dolorum', '[{\"id\":\"348014b1-350a-4337-a520-8bb9753847b6\",\"service\":\"Branding & Design\"},{\"id\":\"18388230-28db-48d9-95c4-737708c402af\",\"service\":\"Digital Marketing\"},{\"id\":\"3a57fa00-0c0f-428c-82cd-0a4daf233576\",\"service\":\"Web Development\"},{\"id\":\"50abf026-5011-4526-a439-fa8c570fc9a1\",\"service\":\"Product Design\"}]', 'about/me-061c8d3d-1384-4cee-beea-017b5fd844a2.webp', 'Experience Designer', 'designation_image/btn-image1-7d69afc2-bee9-43f7-8246-41fc0cc2e3a5.webp', 'testimonial_image/btn-image2-961f7af6-e4dd-4948-967e-50c69cdc2f64.webp', 'Mark J. Collins', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Quinn William', 'hero/client-logo1-bd1167a6-fb4f-4ec6-854f-1516ea36dc7b.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, 'Cherokee Hendricks', 'hero/client-logo2-f8315b2f-76ff-40f5-9115-80a5ce9a4064.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, 'Ciaran Garcia', 'hero/client-logo3-effd3675-3f6a-4ecc-8287-b131a0f3945a.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(4, 'Zephania Gilbert', 'hero/client-logo4-1e5f7008-f835-43b2-8702-68f8ae9d3017.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(5, 'Ignacia Murphy', 'hero/client-logo5-43672643-851a-4ae0-aca0-a55f42ef66e5.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(6, 'Craig Marshall', 'hero/client-logo6-87a994ff-c1a1-464a-9c62-b86380529244.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(7, 'Jonah Wilkerson', 'hero/client-logo7-3c2c1cf2-b1c8-41db-a6e3-3ac80bc1a17a.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(8, 'Martha Booker', 'hero/client-logo8-7d3e26d1-18a8-4824-a89f-86fbb90a9465.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(9, 'Kibo Davis', 'hero/client-logo9-cef1fdf2-65d9-4e12-ac5c-7a0bb6cfc0a4.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(10, 'Jaden Hopkins', 'hero/client-logo10-b031a553-2ef2-4f71-bbdb-ddabe6ab98b9.webp', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_message_replies`
--

CREATE TABLE `contact_message_replies` (
  `id` bigint UNSIGNED NOT NULL,
  `contact_message_id` bigint UNSIGNED NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `text`, `value`, `value_type`, `created_at`, `updated_at`) VALUES
(1, 'Years Of Experience', '13', '+', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, 'Project Complete', '80', '+', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, 'Client Satisfactions', '99', '%+', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint UNSIGNED NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_setups`
--

CREATE TABLE `email_setups` (
  `id` bigint UNSIGNED NOT NULL,
  `mail_driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_encryption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_from_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_from_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiances`
--

CREATE TABLE `experiances` (
  `id` bigint UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `image_one`, `image_two`, `faqs`, `created_at`, `updated_at`) VALUES
(1, 'Professional Solutions For Your Digital Product Design and development', 'about/faq-one-edfa4b3e-0a34-4f75-a080-fc5f70a3e7fa.webp', 'about/faq-two-dedfc2cd-8ef6-48a8-97e0-c8659cb0e186.webp', '[{\"id\":\"cf39f235-669a-4f52-a7b7-c52917872969\",\"question\":\"What services do you offer as a frontend web developer?\",\"answer\":\"I specialize in building responsive and high-quality web applications using technologies like React.js, Next.js, and Tailwind CSS. I offer services such as converting Figma designs to HTML\\/JSX, creating custom user interfaces, and integrating backend APIs for seamless functionality.\"},{\"id\":\"782b6465-c4aa-4e9c-8bff-be025c42fc46\",\"question\":\"Do you offer custom designs or only Figma-to-HTML conversions?\",\"answer\":\"Yes, I offer both custom designs and Figma-to-HTML\\/JSX conversions. If you have a design in mind or a Figma file, I can convert it into fully responsive, pixel-perfect HTML\\/JSX code. Alternatively, if you need a custom web design, I can work with you to create a tailor-made solution that fits your needs.\"},{\"id\":\"54ee33da-346a-4e61-8ec8-7976b0f896b5\",\"question\":\"How long does it take to complete a project?\",\"answer\":\"The project timeline varies depending on the complexity and requirements. For a simple landing page or small feature, it may take a few days. Larger projects like complete websites or web apps typically take a few weeks. I always ensure clear communication and provide an estimated timeline before starting the project.\"},{\"id\":\"72dd0450-7d1b-4e3f-b698-50fc25d7fcb1\",\"question\":\"Can you help with both frontend and backend development?\",\"answer\":\"Yes! While I specialize in frontend development with React.js, Next.js, and Tailwind CSS, I also have experience working with backend technologies like Laravel. If your project requires a complete full-stack solution, I can handle both the frontend and backend seamlessly to ensure smooth integration.\"}]', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `fblog_categories`
--

CREATE TABLE `fblog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_category_fblog_post`
--

CREATE TABLE `fblog_category_fblog_post` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_comments`
--

CREATE TABLE `fblog_comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `approved_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_news_letters`
--

CREATE TABLE `fblog_news_letters` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscribed` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_posts`
--

CREATE TABLE `fblog_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','scheduled','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `published_at` datetime DEFAULT NULL,
  `scheduled_for` datetime DEFAULT NULL,
  `cover_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_alt_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_post_fblog_tag`
--

CREATE TABLE `fblog_post_fblog_tag` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_seo_details`
--

CREATE TABLE `fblog_seo_details` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` json DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_settings`
--

CREATE TABLE `fblog_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_console_code` tinytext COLLATE utf8mb4_unicode_ci,
  `google_analytic_code` text COLLATE utf8mb4_unicode_ci,
  `google_adsense_code` tinytext COLLATE utf8mb4_unicode_ci,
  `quick_links` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_share_snippets`
--

CREATE TABLE `fblog_share_snippets` (
  `id` bigint UNSIGNED NOT NULL,
  `script_code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `html_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fblog_tags`
--

CREATE TABLE `fblog_tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preloader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `social_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_name`, `logo`, `favicon`, `preloader`, `email`, `website_url`, `phone`, `address`, `city`, `district`, `country`, `postal_code`, `copyright`, `map`, `social_link`, `created_at`, `updated_at`) VALUES
(1, 'Shiplu JS', 'site/My LOGO-16018273-0be2-4e8a-abe3-cc12435652b2.png', 'site/My Fev ICon (1)-d1365f59-02a2-4085-9be9-768d6575ed4b.png', 'site/My Fev ICon (1)-de17cac9-6eff-4ae1-953c-34fc0e0498b9.png', 'me@shiplujs.com', 'https://shiplujs.com/', '01711002919', 'Babor road, Block B, Mohammadpur', 'Dhaka', 'Dhaka', 'Bangladesh', '1205', '@ Shiplujs 2025 Shiplu. All rights reserved.', NULL, NULL, '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `header_texts`
--

CREATE TABLE `header_texts` (
  `id` bigint UNSIGNED NOT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experiance_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_texts`
--

INSERT INTO `header_texts` (`id`, `about_title`, `about_sub_title`, `resume_title`, `resume_sub_title`, `service_title`, `service_sub_title`, `skill_title`, `skill_sub_title`, `project_title`, `project_sub_title`, `testimonial_title`, `testimonial_sub_title`, `price_title`, `price_sub_title`, `blog_title`, `blog_sub_title`, `contact_title`, `contact_sub_title`, `client_title`, `client_sub_title`, `faq_title`, `faq_sub_title`, `education_title`, `education_sub_title`, `experiance_title`, `experiance_sub_title`, `certificate_title`, `certificate_sub_title`, `training_title`, `training_sub_title`, `social_title`, `social_sub_title`, `created_at`, `updated_at`) VALUES
(1, 'Professional Problem Solutions For Digital Products', 'At vero eos et accusamus etodio dignissimos ducimus praesentium voluptatum corrupti quos dolores quas molestias excepturi sint occaecati cupiditate provident qui officia deserunt mollitia animi, id est laborum et dolorum', 'Real Problem Solutions Experience', NULL, 'My Special Service For your Business Development', NULL, 'Let’s Explore Popular Skills & Experience', NULL, 'Explore My Popular Projects', NULL, 'I’ve 1253+ Clients Feedback', 'Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis', 'Amazing Pricing For your Projects', NULL, 'Latest News & Blog', NULL, 'Let’s Talk For your Next Projects', 'Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis', 'I’ve 1253+ Global Clients & lot’s of Project Complete', NULL, 'Professional Solutions For Your Digital Product Design and development', NULL, 'Education', NULL, 'Experiance', NULL, 'Certificate', NULL, 'Training', NULL, 'Social Media', NULL, '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `title`, `name`, `designation`, `description`, `image`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'Hello, i’m', 'Shiplu JS', 'Frontend Engineer', 'We denounce with righteous indignation dislike demoralized by the charms of pleasure', 'hero/me-71b2d052-327e-4cf7-91a2-0930a70acea2.webp', '01JSVYBNM07QAW8HJGKHBWA37W.pdf', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_04_13_170342_create_heroes_table', 1),
(6, '2025_04_13_170420_create_counters_table', 1),
(7, '2025_04_13_170427_create_skills_table', 1),
(8, '2025_04_15_175501_add_custom_fields_to_users_table', 1),
(9, '2025_04_15_175502_add_avatar_url_to_users_table', 1),
(10, '2025_04_15_185353_create_abouts_table', 1),
(11, '2025_04_16_172624_create_resumes_table', 1),
(12, '2025_04_16_172917_create_services_table', 1),
(13, '2025_04_16_173342_create_project_categories_table', 1),
(14, '2025_04_17_145738_create_projects_table', 1),
(15, '2025_04_18_062829_create_testimonials_table', 1),
(16, '2025_04_18_080611_create_pricings_table', 1),
(17, '2025_04_18_154823_create_clients_table', 1),
(18, '2025_04_18_162637_create_blog_tables', 1),
(19, '2025_04_24_154904_create_faqs_table', 1),
(20, '2025_04_24_164941_create_settings_table', 1),
(21, '2025_04_24_170946_create_education_table', 1),
(22, '2025_04_24_170957_create_trainings_table', 1),
(23, '2025_04_24_171335_create_experiances_table', 1),
(24, '2025_04_24_173009_create_certificates_table', 1),
(25, '2025_04_25_150857_create_general_settings_table', 1),
(26, '2025_04_25_174707_create_header_texts_table', 1),
(27, '2025_04_26_105130_create_email_setups_table', 1),
(28, '2025_04_26_163426_create_contact_messages_table', 1),
(29, '2025_04_26_163606_create_contact_message_replies_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_include` text COLLATE utf8mb4_unicode_ci,
  `service_not_include` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `title`, `sub_title`, `price`, `currency_symbol`, `duration`, `description`, `service_include`, `service_not_include`, `created_at`, `updated_at`) VALUES
(1, 'Basic Plan', 'Try Out Basic Plan Save 20%', '20', '$', 'Per Hour', 'Sed perspiciatis unde natus totam see rem aperiam eaque inventore', '[\"Website Design\",\"Mobile Apps Design\",\"Product Design\"]', '[\"Digital Marketing\",\"Custom Support\"]', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, 'Standard Plan', 'Try Out Basic Plan Save 35%', '17', '&', 'Per Hour', 'Sed perspiciatis unde natus totam see rem aperiam eaque inventore', '[\"Website Design\",\"Mobile Apps Design\",\"Product Design\",\"Digital Marketing\",\"Custom Support\"]', '[]', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, 'Business Plan', 'Try Out Basic Plan Save 45%', '12', '&', 'Per Hour', 'Sed perspiciatis unde natus totam see rem aperiam eaque inventore', '[\"Website Design\",\"Mobile Apps Design\",\"Product Design\",\"Digital Marketing\",\"Custom Support\"]', '[]', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `related_service` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_summery` text COLLATE utf8mb4_unicode_ci,
  `tags` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `short_description`, `description`, `related_service`, `image`, `category_id`, `client`, `location`, `published_at`, `project_image_1`, `project_image_2`, `project_image_3`, `project_summery`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'Mobile Application Design', 'mobile-application-design', '<h3>We Create digital Product For Business</h3><p>sSed ut perspiciatis unde omnis...</p>', '<p>Beatae vitae dicta sunt explicabo...</p>', '[{\"id\":\"2fd2c110-cd0d-4119-af05-21c06844f14b\",\"service\":\"Branding & Design\"},{\"id\":\"3fd41468-edff-4843-82ae-eea5616f0878\",\"service\":\"Web Development\"},{\"id\":\"4c52e4f7-767f-4498-b0d9-7dee7296002a\",\"service\":\"Mobile Apps Design\"},{\"id\":\"6f530c96-ee56-44b1-bad3-49247f480fa0\",\"service\":\"Graphics Design\"},{\"id\":\"f9e532e8-f3a9-4b58-9d67-43535dfd544a\",\"service\":\"Digital Marketing\"},{\"id\":\"4287c2ba-ea54-4bd7-b849-f8fe1bf05b8d\",\"service\":\"Product Design\"}]', 'projects/cover/01JT68FTFRYNTJB9F5H9XF3V8P.jpg', 4, 'X_Design Studio', 'Melbourne, Australia', 'September 25, 2023', 'projects/images/01JT68FTFTKHPPR9RSZ8PQP1WZ.jpg', 'projects/images/01JT68FTFVZYQPBJ4T07RS1DAP.jpg', 'projects/images/01JT68FTFX1TEJR43R8XECP41Z.jpg', 'There are many variations of passages of Lorem Ipsum available...', '[\"Design\", \"Figma\", \"Apps\"]', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Next js', 'next-js', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, 'React js', 'react-js', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, 'Tailwind CSS', 'tailwind-css', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(4, 'WordPress', 'wordpress', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(5, 'Laravel', 'laravel', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint UNSIGNED NOT NULL,
  `start_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `start_year`, `end_year`, `title`, `designation`, `website`, `created_at`, `updated_at`) VALUES
(1, '2024', 'Present', 'Asultancy', 'Senior Software Engineer', NULL, '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, '2022', '2024', 'DBDT', 'Senior Web Developer', NULL, '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, '2019', '2022', 'Time Tech', 'Web Developer', NULL, '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(4, '2017', '2019', 'Manob Communications', 'Junior Web Developer', NULL, '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `sub_title`, `created_at`, `updated_at`) VALUES
(1, 'Figma to React Conversion', 'figma-to-react-conversion', 'Convert Figma or design files into responsive React.js components with clean code.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, 'Next.js Website Development', 'nextjs-website-development', 'Build fast, SEO-friendly websites and apps using Next.js with modern features.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, 'Tailwind CSS UI Design', 'tailwind-css-ui-design', 'Create beautiful, responsive UI designs using Tailwind CSS utility-first approach.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(4, 'React.js Web Application', 'reactjs-web-application', 'Develop interactive and scalable SPAs using React.js and modern JavaScript practices.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(5, 'TypeScript Integration', 'typescript-integration', 'Add strong typing and scalable code architecture to your React or Next.js projects.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(6, 'React Bootstrap UI Development', 'react-bootstrap-ui-development', 'Build consistent and responsive UIs quickly using React Bootstrap components.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(7, 'WordPress Frontend Customization', 'wordpress-frontend-customization', 'Customize or build WordPress themes with modern frontend technologies.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(8, 'Laravel Frontend Integration', 'laravel-frontend-integration', 'Integrate frontend (React/Tailwind) with Laravel backend for dynamic applications.', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fevicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `social_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `image`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Next Js', 'skills/01JT65Q4ZR2FDZ304N9ZAF49N5.png', '90', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, 'React JS', 'skills/01JT65TRPH95KX1EV3HDHEGQ50.png', '92', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, 'Tailwind CSS', 'skills/01JT65VFW7N0QG9HCAV9ETK3BQ.png', '95', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(4, 'Typescript', 'skills/01JT65W5BT5HM4KYS6BFW84V5W.png', '80', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(5, 'React Bootstrap', 'skills/01JT65XB32NA3V9HTJ1GH9PGRG.png', '75', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(6, 'Figma', 'skills/01JT65Y42NK1EAGYK4X93YRPH5.png', '90', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(7, 'Wordpress', 'skills/01JT65Z78RN93FT0GJ29SMG3VR.png', '85', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(8, 'Laravel', 'skills/01JT660Z1GTC74E82MS5X07EQE.png', '86', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `company`, `designation`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 'Alice Johnson', 'testimonials/author1-5475f9ea-fc1d-47fe-aaf0-b877be824e6f.webp', 'TechCorp', 'CEO', 'Working with this team has been an absolute pleasure. Their attention to detail and dedication to meeting our needs resulted in a product beyond our expectations. Highly recommend!', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(2, 'Bob Smith', 'testimonials/author2-3f77f04a-5e68-4e8e-9a3f-5402125bd9ab.webp', 'DevWorks', 'Lead Developer', 'The team is professional and knowledgeable, always delivering top-notch solutions. Their ability to quickly adapt to our needs and execute efficiently has been invaluable.', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(3, 'Carol Lee', 'testimonials/author1-5475f9ea-fc1d-47fe-aaf0-b877be824e6f.webp', 'StarTech', 'CEO', 'Working with this team has been an absolute pleasure. Their attention to detail and dedication to meeting our needs resulted in a product beyond our expectations. Highly recommend!', '2025-05-01 10:37:16', '2025-05-01 10:37:16'),
(4, 'Lee Smith', 'testimonials/author2-3f77f04a-5e68-4e8e-9a3f-5402125bd9ab.webp', 'Mysolusy', 'Lead Developer', 'The team is professional and knowledgeable, always delivering top-notch solutions. Their ability to quickly adapt to our needs and execute efficiently has been invaluable.', '2025-05-01 10:37:16', '2025-05-01 10:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_fields` json DEFAULT NULL,
  `avatar_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `custom_fields`, `avatar_url`, `profile_photo_path`) VALUES
(1, 'Shiplu', 'me@shiplujs.com', NULL, '$2y$12$OOsndZn0hHDA.xh9ODtWS.m/HXQNktGf3cwDwr8vELvug1nA6l/r2', NULL, '2025-05-01 10:37:16', '2025-05-01 10:37:16', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_message_replies`
--
ALTER TABLE `contact_message_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_message_replies_contact_message_id_foreign` (`contact_message_id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_setups`
--
ALTER TABLE `email_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiances`
--
ALTER TABLE `experiances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fblog_categories`
--
ALTER TABLE `fblog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fblog_categories_name_unique` (`name`),
  ADD UNIQUE KEY `fblog_categories_slug_unique` (`slug`);

--
-- Indexes for table `fblog_category_fblog_post`
--
ALTER TABLE `fblog_category_fblog_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fblog_category_fblog_post_post_id_foreign` (`post_id`),
  ADD KEY `fblog_category_fblog_post_category_id_foreign` (`category_id`);

--
-- Indexes for table `fblog_comments`
--
ALTER TABLE `fblog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fblog_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `fblog_news_letters`
--
ALTER TABLE `fblog_news_letters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fblog_news_letters_email_unique` (`email`);

--
-- Indexes for table `fblog_posts`
--
ALTER TABLE `fblog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fblog_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `fblog_post_fblog_tag`
--
ALTER TABLE `fblog_post_fblog_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fblog_post_fblog_tag_post_id_foreign` (`post_id`),
  ADD KEY `fblog_post_fblog_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `fblog_seo_details`
--
ALTER TABLE `fblog_seo_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fblog_seo_details_post_id_foreign` (`post_id`);

--
-- Indexes for table `fblog_settings`
--
ALTER TABLE `fblog_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fblog_share_snippets`
--
ALTER TABLE `fblog_share_snippets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fblog_tags`
--
ALTER TABLE `fblog_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fblog_tags_name_unique` (`name`),
  ADD UNIQUE KEY `fblog_tags_slug_unique` (`slug`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_texts`
--
ALTER TABLE `header_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`),
  ADD KEY `projects_category_id_foreign` (`category_id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_message_replies`
--
ALTER TABLE `contact_message_replies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_setups`
--
ALTER TABLE `email_setups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiances`
--
ALTER TABLE `experiances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fblog_categories`
--
ALTER TABLE `fblog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_category_fblog_post`
--
ALTER TABLE `fblog_category_fblog_post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_comments`
--
ALTER TABLE `fblog_comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_news_letters`
--
ALTER TABLE `fblog_news_letters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_posts`
--
ALTER TABLE `fblog_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_post_fblog_tag`
--
ALTER TABLE `fblog_post_fblog_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_seo_details`
--
ALTER TABLE `fblog_seo_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_settings`
--
ALTER TABLE `fblog_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_share_snippets`
--
ALTER TABLE `fblog_share_snippets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblog_tags`
--
ALTER TABLE `fblog_tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_texts`
--
ALTER TABLE `header_texts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_message_replies`
--
ALTER TABLE `contact_message_replies`
  ADD CONSTRAINT `contact_message_replies_contact_message_id_foreign` FOREIGN KEY (`contact_message_id`) REFERENCES `contact_messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fblog_category_fblog_post`
--
ALTER TABLE `fblog_category_fblog_post`
  ADD CONSTRAINT `fblog_category_fblog_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `fblog_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fblog_category_fblog_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `fblog_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fblog_comments`
--
ALTER TABLE `fblog_comments`
  ADD CONSTRAINT `fblog_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `fblog_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fblog_posts`
--
ALTER TABLE `fblog_posts`
  ADD CONSTRAINT `fblog_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fblog_post_fblog_tag`
--
ALTER TABLE `fblog_post_fblog_tag`
  ADD CONSTRAINT `fblog_post_fblog_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `fblog_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fblog_post_fblog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `fblog_tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fblog_seo_details`
--
ALTER TABLE `fblog_seo_details`
  ADD CONSTRAINT `fblog_seo_details_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `fblog_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `project_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
