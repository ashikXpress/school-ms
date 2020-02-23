-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 03:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school-ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Play', NULL, '2019-12-20 04:39:59', '2019-12-20 04:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `classes_subjects`
--

CREATE TABLE `classes_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creative_question`
--

CREATE TABLE `creative_question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creative_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Head master', NULL, '2019-12-20 04:40:31', '2019-12-20 04:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `diaries`
--

CREATE TABLE `diaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees_attendances`
--

CREATE TABLE `employees_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `attend_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees_attendances`
--

INSERT INTO `employees_attendances` (`id`, `employee_id`, `attend_date`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '20-12-2019', 1, NULL, '2019-12-20 04:41:44', '2019-12-20 04:41:44'),
(2, 2, '20-12-2019', 1, NULL, '2019-12-20 04:41:44', '2019-12-20 04:41:44'),
(3, 3, '20-12-2019', 1, NULL, '2019-12-20 04:41:44', '2019-12-20 04:41:44'),
(4, 4, '20-12-2019', 1, NULL, '2019-12-20 04:41:45', '2019-12-20 04:41:45'),
(5, 5, '20-12-2019', 1, NULL, '2019-12-20 04:41:45', '2019-12-20 04:41:45'),
(6, 6, '20-12-2019', 1, NULL, '2019-12-20 04:41:45', '2019-12-20 04:41:45'),
(7, 7, '20-12-2019', 0, NULL, '2019-12-20 04:41:45', '2019-12-20 04:42:02'),
(8, 8, '20-12-2019', 1, NULL, '2019-12-20 04:41:45', '2019-12-20 04:41:45'),
(9, 9, '20-12-2019', 1, NULL, '2019-12-20 04:41:45', '2019-12-20 04:41:45'),
(10, 10, '20-12-2019', 1, NULL, '2019-12-20 04:41:45', '2019-12-20 04:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `employees_payments`
--

CREATE TABLE `employees_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `payment_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_salary` decimal(8,2) NOT NULL,
  `others_honorarium` decimal(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_start_date` date NOT NULL,
  `exam_end_date` date NOT NULL,
  `authorized_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examinations_guards`
--

CREATE TABLE `examinations_guards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examinations_routines`
--

CREATE TABLE `examinations_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_term_name_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examinations_guards_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examination_term`
--

CREATE TABLE `examination_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_term_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_05_144537_create_sections_table', 1),
(5, '2019_11_05_144617_create_subjects_table', 1),
(6, '2019_11_05_144707_create_designations_table', 1),
(7, '2019_11_06_062422_create_classes_table', 1),
(8, '2019_11_09_112151_create_employees_table', 1),
(9, '2019_11_09_112447_create_students_table', 1),
(10, '2019_11_09_122508_create_employees_attendances', 1),
(11, '2019_11_09_122607_create_students_attendances', 1),
(12, '2019_11_09_191255_create_examination_term_table', 1),
(13, '2019_11_09_191255_create_syllabus_table', 1),
(14, '2019_11_09_192223_create_employees_payments_table', 1),
(15, '2019_11_09_192953_create_students_payments_table', 1),
(16, '2019_11_09_194923_create_examinations_table', 1),
(17, '2019_11_09_195917_create_examinations_guards_table', 1),
(18, '2019_11_09_195917_create_examinations_routines_table', 1),
(19, '2019_11_16_225243_create_tests_table', 1),
(20, '2019_11_20_110104_create_classes_subjects_table', 1),
(21, '2019_11_20_110439_create_routines_table', 1),
(22, '2019_11_26_093222_create_diaries_table', 1),
(23, '2019_12_01_124140_create_notices_table', 1),
(24, '2019_12_02_102122_create_events_table', 1),
(25, '2019_12_02_113715_create_galleries_table', 1),
(26, '2019_12_04_141839_create_marks_table', 1),
(27, '2019_12_09_104955_create_creative_question_table', 1),
(28, '2019_12_10_094314_create_objective_questions_table', 1),
(29, '2019_12_10_104009_create_objective_question_options_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objective_questions`
--

CREATE TABLE `objective_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `objective_question_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objective_question_options`
--

CREATE TABLE `objective_question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective_question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_number` int(11) NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Day', NULL, '2019-12-20 04:40:16', '2019-12-20 04:40:16'),
(2, 'Morning', NULL, '2020-01-17 11:25:04', '2020-01-17 11:25:04'),
(3, 'C', NULL, '2020-01-17 11:25:40', '2020-01-17 11:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_name` smallint(6) NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_certificate_number` int(11) NOT NULL,
  `admission_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_fees` decimal(15,2) NOT NULL,
  `previous_institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport` smallint(6) DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `gender_name`, `date_of_birth`, `blood_group`, `present_address`, `permanent_address`, `contact_number`, `contact_number2`, `class`, `roll`, `reg`, `id_number`, `section`, `shift`, `group`, `birth_certificate_number`, `admission_date`, `admission_fees`, `previous_institute_name`, `transport`, `father_name`, `father_contact_number`, `father_occupation`, `mother_name`, `mother_contact_number`, `mother_occupation`, `local_guardian_name`, `email`, `password_token`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Dayne', 'Mitchell', 1, '03-02-97', 'O+', '57271 Marilou Vista Suite 119\nPort Kailynmouth, AK 48055-0506', '28248 Deondre Islands\nWest Heloise, OH 08663', '1-845-640-1024', '(458) 715-3617 x61298', 'Baby', '1916', '87470086', 'tgl-325', 'A', 'Morning', NULL, 773850, '24-02-16', '2.67', 'Ideal Model High School, Dhaka', 1, 'Prof. Milo Hettinger Sr.', '531-468-2041 x1620', 'English Language Teacher', 'Alexis Moen', '+1-937-866-8918', 'Sales Engineer', 'Corrine Halvorson', 'skulas@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(2, 'Alan', 'Glover', 0, '28-07-79', 'A+', '7179 Veum Mission\nCarrieshire, AL 88958-1784', '1096 Hartmann Ferry\nWest Ricardo, SC 10643', '782-884-1163 x44712', '1-948-639-2554 x861', 'Five', '2877', '3504', 'tgl-366', 'A', 'Morning', NULL, 6, '17-04-01', '4389.99', 'Ideal Model High School, Dhaka', 1, 'Janis Mills', '1-839-708-3856 x787', 'Aircraft Cargo Handling Supervisor', 'Edd Considine', '(507) 624-5466', 'Ophthalmic Laboratory Technician', 'Collin Wilkinson', 'kritchie@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(3, 'Crawford', 'Bailey', 0, '02-04-95', 'AB+', '973 Crooks Coves\nLake Beth, PA 52982-5249', '5908 Naomie Road Apt. 213\nNorth Adeliamouth, SD 96569-6282', '985-912-2659 x654', '+1 (943) 610-2284', 'Eight', '34200', '9306095', 'tgl-385', 'B', 'Morning', NULL, 34, '18-02-18', '63.93', 'Ideal Model High School, Dhaka', 1, 'Allie Skiles III', '(230) 867-8256', 'Electric Meter Installer', 'Darrick Bauch', '+19963073140', 'Refractory Materials Repairer', 'Kenny Beatty', 'devyn52@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(4, 'Jaycee', 'Keebler', 0, '03-11-78', 'A+', '2160 Dickens Highway\nCarlichester, NE 75504-7057', '520 Zoila Overpass Suite 792\nHectormouth, MI 22225', '360.728.1773', '(850) 761-0876', 'Two', '7755', '1014521', 'tgl-19', 'B', 'Morning', NULL, 94, '27-12-78', '405.08', 'Ideal Model High School, Dhaka', 1, 'Nya Fritsch', '341.523.4199', 'Medical Laboratory Technologist', 'Dr. Evalyn Homenick', '524.452.5670', 'Optometrist', 'Ilene Vandervort', 'missouri89@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(5, 'Kamron', 'Bogisich', 0, '06-10-95', 'O+', '657 Klein Ways\nSchmelermouth, DE 84930', '899 Champlin Keys Apt. 275\nSavanahfurt, OR 64328', '(715) 209-1929 x5267', '+1 (457) 765-7540', 'Eight', '52', '8310931', 'tgl-170', 'B', 'Morning', NULL, 9064, '08-09-07', '62.26', 'Ideal Model High School, Dhaka', 0, 'Mr. Hassan Schumm III', '845.824.9037 x84056', 'Motorcycle Mechanic', 'Prof. Blair Nienow DVM', '(426) 930-8433 x322', 'Mechanical Door Repairer', 'Trace Zieme', 'pcarter@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(6, 'Gina', 'Schaden', 0, '10-05-82', 'O+', '7609 Bahringer Spring Apt. 491\nGradystad, UT 36224-2595', '9716 Wisoky Ford Apt. 013\nJessikastad, OR 02526-1680', '947-470-6081', '1-547-943-4450 x503', 'Play', '3246824', '20', 'tgl-268', 'B', 'Morning', NULL, 95, '29-04-70', '12870.60', 'Ideal Model High School, Dhaka', 0, 'Isaiah Connelly', '441.630.4729 x76046', 'Petroleum Pump Operator', 'Carlie Dooley', '(821) 212-8141', 'Plastic Molding Machine Operator', 'Deborah Hyatt', 'joseph59@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(7, 'Kamron', 'Bergstrom', 0, '03-10-85', 'O+', '3208 Lacey Overpass\nSouth Kirk, SD 65428', '11617 Zulauf Valleys\nWest Alessandra, OR 81631', '980.884.1178 x98380', '507.476.8399 x896', 'Seven', '2182', '92', 'tgl-289', 'B', 'Morning', NULL, 752656, '05-01-82', '31471.75', 'Ideal Model High School, Dhaka', 1, 'Fritz Gulgowski', '(560) 796-9225', 'Telecommunications Facility Examiner', 'Ms. Eveline Schaefer', '306.277.2717 x3833', 'Instrument Sales Representative', 'Jessica Dooley', 'rachel44@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(8, 'Nicola', 'Moen', 1, '18-12-13', 'B+', '95874 Feil Estate Suite 570\nPort Joyce, CA 50604', '1339 Heller Views Apt. 678\nNew Martina, SC 58838-2214', '1-670-550-6337', '818.513.4452 x411', 'Seven', '279', '683', 'tgl-42', 'A', 'Day', NULL, 88840, '19-04-80', '22685.54', 'Ideal Model High School, Dhaka', 1, 'Duncan Kunde', '(884) 937-8594', 'Agricultural Crop Worker', 'Prof. Leta Collins', '308-597-9549', 'Instructional Coordinator', 'Coy Schulist', 'fgreen@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(9, 'Marilie', 'Carter', 0, '28-05-03', 'AB+', '1888 Janis Plains Apt. 485\nNorth Laylaborough, IA 29948-2615', '597 Emilio Square Apt. 528\nSouth Idaburgh, VT 18486', '(387) 853-5583 x99738', '+1-390-577-9498', 'Play', '8', '212840', 'tgl-186', 'A', 'Day', NULL, 594508, '16-01-09', '535541.35', 'Ideal Model High School, Dhaka', 1, 'Hermina Hickle', '1-770-656-7659 x89322', 'Title Examiner', 'Fredy Thiel', '+1 (680) 863-9219', 'Conveyor Operator', 'Marcella Gleichner II', 'xhaag@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(10, 'Angie', 'Champlin', 1, '31-07-12', 'A+', '25971 Wolf Camp\nGleichnerville, AK 01890', '5869 Douglas Rue\nEast Kristinaside, VA 23426', '885.730.9937 x5112', '280.339.5806 x69525', 'Five', '4234496', '5', 'tgl-326', 'A', 'Day', NULL, 1083799, '04-04-82', '2371856.91', 'Ideal Model High School, Dhaka', 0, 'Prof. Dee Prosacco PhD', '(840) 830-7851', 'Service Station Attendant', 'Jennifer Deckow', '1-965-556-3764 x51487', 'Earth Driller', 'Keon Bartell II', 'efriesen@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(11, 'Alice', 'Skiles', 1, '13-02-11', 'AB+', '5708 Marge Square\nEstellport, AR 84787', '89576 Alexzander Islands\nAmelieport, VT 86265', '+17796894940', '1-498-202-9598', 'Seven', '575145081', '406', 'tgl-195', 'B', 'Morning', NULL, 422262234, '28-01-18', '4531.44', 'Ideal Model High School, Dhaka', 0, 'Misty Runte Sr.', '+1-773-679-3046', 'Model Maker', 'Mr. Bryce Boyle PhD', '(365) 801-5123', 'Real Estate Sales Agent', 'Miss Christina Strosin', 'hfahey@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(12, 'Kaleb', 'Larson', 1, '05-03-78', 'AB+', '416 Daphne Mountains\nLake Helmershire, WA 81319', '86797 Kayden Curve\nWest Kellichester, GA 22612', '+1.935.762.5210', '409-469-8790', 'Baby', '88428', '315933555', 'tgl-350', 'A', 'Morning', NULL, 950743, '11-06-18', '57032.94', 'Ideal Model High School, Dhaka', 1, 'Kristin Pfeffer', '(224) 214-7947 x39946', 'Control Valve Installer', 'Elsie Wiegand', '(989) 382-7798', 'Butcher', 'Ryder Denesik', 'alisha.kihn@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(13, 'Modesta', 'Dietrich', 1, '26-03-79', 'B+', '19378 Tyrel Haven\nPort Waltonview, MD 68927-2792', '527 Tromp Fork\nLake Gracetown, ME 73801', '(452) 467-5431 x303', '586-489-9596 x320', 'Play', '7893185', '7', 'tgl-130', 'B', 'Morning', NULL, 0, '01-11-93', '4373.82', 'Ideal Model High School, Dhaka', 0, 'Bertram Howell Sr.', '+1 (952) 785-4444', 'Order Filler', 'Janis McLaughlin I', '(265) 465-9615 x204', 'Board Of Directors', 'Mr. Consuelo Veum IV', 'koelpin.lonie@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(14, 'Earl', 'Yundt', 0, '01-07-96', 'AB+', '905 Conroy Motorway\r\nPort Leta, SD 95209', '41400 Brannon Place\r\nNew Luellaside, IN 63257', '895-376-6036', '715-247-5745 x1809', 'Four', '180509', '342778', 'tgl-351', 'A', 'Day', 'Science', 663, '23-01-2020', '128575.65', 'Ideal Model High School, Dhaka', 1, 'Prof. Kaela Lubowitz MD', '620-586-0746 x8968', 'Clinical School Psychologist', 'Ms. Shannon Connelly III', '821-215-6306', 'Night Security Guard', 'Dr. Sadie Walsh', 'sbreitenberg@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2020-01-24 05:13:21'),
(15, 'Aileen', 'Wisoky', 1, '19-06-88', 'B+', '53348 Maritza Landing Suite 513\nNew Meghan, NY 50757-9545', '12786 Stephanie Union\nKohlerstad, AL 32942', '+1 (962) 278-1300', '660.265.4087', 'Five', '78181', '38576252', 'tgl-362', 'B', 'Morning', NULL, 65, '29-07-80', '349569971.15', 'Ideal Model High School, Dhaka', 1, 'Prof. Alena Bins', '976-866-7877', 'Metal Worker', 'Verona Reichert', '224.808.2023', 'Dishwasher', 'Marielle Sipes', 'mann.lewis@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(16, 'Emmett', 'Yundt', 1, '10-07-89', 'B+', '1775 Rudolph Knoll Apt. 974\nEast Bulahshire, LA 21100-9888', '6719 Bessie Inlet Suite 587\nTremblaymouth, LA 25851', '501.398.7575', '(428) 589-7367 x615', 'Six', '83478', '3', 'tgl-16', 'B', 'Morning', NULL, 5325, '09-12-13', '2.00', 'Ideal Model High School, Dhaka', 0, 'Vince Lubowitz', '+1 (229) 832-6953', 'Insurance Sales Agent', 'Maud Crona', '+1 (276) 550-8369', 'Preschool Education Administrators', 'Prof. Mariana Morissette PhD', 'turcotte.thelma@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(17, 'Kaylah', 'Rolfson', 0, '21-11-82', 'AB+', '4012 Rex Dale\nNorth Sanfordhaven, NV 40865', '69314 Welch Pike\nPort Edgar, NV 34928-5548', '(529) 868-4502', '1-638-983-5738', 'Six', '361820', '88861', 'tgl-103', 'A', 'Day', NULL, 758, '26-07-97', '2.19', 'Ideal Model High School, Dhaka', 1, 'Modesta Kiehn', '761-466-5556 x12273', 'Crane and Tower Operator', 'Marcella Beatty', '989-990-4210', 'Insurance Underwriter', 'Braxton Rau', 'dickinson.jackie@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(18, 'Brook', 'Legros', 1, '12-10-13', 'A+', '8593 Wolf Summit\nSouth Alfonzo, PA 96052', '11924 Kassulke Curve\nEast Chesterfort, MT 09159-6207', '220-520-4226 x590', '469-739-1781', 'Five', '91333', '321', 'tgl-147', 'B', 'Day', NULL, 55, '18-09-09', '5486.37', 'Ideal Model High School, Dhaka', 0, 'Jackeline Ebert II', '1-473-576-1313 x65743', 'Retail Sales person', 'Hyman Cronin', '524-499-1197 x134', 'Precision Etcher and Engraver', 'Prof. Bianka Muller PhD', 'chanel62@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(19, 'Jalon', 'Towne', 0, '12-05-74', 'AB+', '650 Adams Via Suite 238\nPort Otto, VT 58702', '6827 Jacklyn Park Apt. 626\nLake Yesseniamouth, MN 52365', '(567) 242-9678 x4353', '+1-235-777-4292', 'Four', '857890', '15', 'tgl-64', 'B', 'Day', NULL, 544034, '16-12-13', '60.14', 'Ideal Model High School, Dhaka', 1, 'Mr. Keith Treutel', '718.890.1323 x514', 'Tree Trimmer', 'Vallie Jones', '(251) 233-7403', 'Carpet Installer', 'Beulah Fadel', 'pdickens@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:21', '2019-12-20 04:37:21'),
(20, 'Kareem', 'Steuber', 1, '02-10-15', 'A+', '638 Crona Run Apt. 828\nFaustinomouth, WA 41461', '77833 Trevion Square\nRickychester, CA 68478-0451', '471-561-8333 x70531', '976.267.6055', 'Play', '6590', '74', 'tgl-48', 'B', 'Day', NULL, 54668, '18-01-71', '322.58', 'Ideal Model High School, Dhaka', 0, 'Dr. Nickolas Greenfelder', '(829) 394-8804', 'Avionics Technician', 'Mayra Cremin', '241-414-3583', 'Software Engineer', 'Paige Bayer DVM', 'fkohler@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(21, 'Hilton', 'Parker', 1, '17-02-92', 'O+', '9844 Chesley Union\nNew Misaelchester, VA 32718', '437 Wunsch Valley Suite 071\nNew Freeman, NJ 96791', '(698) 822-7756', '783-486-3087 x55663', 'Two', '445', '2', 'tgl-280', 'B', 'Day', NULL, 5, '21-10-87', '25386999.02', 'Ideal Model High School, Dhaka', 0, 'Theresia Little I', '+1-272-740-0223', 'Industrial-Organizational Psychologist', 'Calista Hirthe', '852.501.7472 x72086', 'Transportation Manager', 'Dr. D\'angelo Morar', 'katrina.morar@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(22, 'Urban', 'Lebsack', 0, '14-01-04', 'AB+', '56185 Dawn Fords Apt. 393\nLavadashire, IN 29803-8543', '948 Raynor Canyon\nFinnside, FL 20337', '(384) 345-2881 x1296', '548-989-0016 x80993', 'Play', '92933', '4459322', 'tgl-165', 'B', 'Day', NULL, 600, '15-07-95', '2.00', 'Ideal Model High School, Dhaka', 0, 'Cassie Upton', '1-427-868-5051 x85066', 'Radiation Therapist', 'Vergie Hayes', '762.991.2004 x12753', 'Audio-Visual Collections Specialist', 'Elda Gibson', 'pkirlin@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(23, 'Albina', 'Carroll', 1, '03-12-75', 'O+', '7622 Nikki Shoal Apt. 550\nWest Nola, MT 24460-1568', '19067 Brakus Mount Apt. 486\nLilianemouth, CA 31091-3766', '819.415.2911 x82142', '1-397-933-6184', 'Four', '20450781', '8661253', 'tgl-366', 'B', 'Morning', NULL, 526552992, '13-03-88', '28.31', 'Ideal Model High School, Dhaka', 1, 'Mrs. Laurie Jones II', '1-476-710-0092 x3964', 'Teacher', 'Mr. Niko Leffler MD', '942.648.0863 x89181', 'Supervisor of Police', 'Laron Monahan', 'gunnar26@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(24, 'Stevie', 'Schinner', 1, '13-09-86', 'O+', '718 Casper Avenue\nNew Shanon, MS 76497-2252', '5968 Gislason Row\nIsabellefort, OK 50529-6568', '(681) 602-1763 x90431', '(850) 881-1948 x4022', 'Baby', '4547', '82884', 'tgl-116', 'A', 'Morning', NULL, 3341, '14-03-11', '8.70', 'Ideal Model High School, Dhaka', 0, 'Mr. Faustino Langosh', '1-794-714-4534', 'Entertainer and Performer', 'Lavinia Murazik', '918-330-7800 x80671', 'Agricultural Equipment Operator', 'Miss Lacy Simonis IV', 'cullen18@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(25, 'Elena', 'Gerlach', 1, '04-08-77', 'O+', '16629 Collins Lodge\nWest Erneststad, DE 98998', '209 Kshlerin River Apt. 680\nCarriehaven, NC 97943', '+1-793-585-4419', '831.601.9382 x335', 'Play', '52280546', '5267', 'tgl-85', 'B', 'Day', NULL, 841291, '13-02-10', '8673600.81', 'Ideal Model High School, Dhaka', 0, 'Laurence Maggio', '1-910-713-2723', 'City Planning Aide', 'Norene Daniel', '326-274-9961 x02318', 'Ophthalmic Laboratory Technician', 'Garret Larson', 'awyman@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(26, 'Merlin', 'Stamm', 1, '01-03-73', 'O+', '86780 Parisian Causeway\nLake Cynthiaside, CA 34018-2657', '23423 Eino Dam Suite 781\nPort Nikoshire, NH 61384-6523', '1-317-247-4104', '+14164633528', 'Seven', '15349', '70612', 'tgl-56', 'A', 'Day', NULL, 1, '04-04-93', '133.76', 'Ideal Model High School, Dhaka', 0, 'Martin Effertz', '716.849.8869 x977', 'Pharmacy Aide', 'Marjolaine Rolfson MD', '289.695.0336 x419', 'Tire Changer', 'Celine Zieme MD', 'bethany.rutherford@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(27, 'Joannie', 'Wiza', 1, '06-06-98', 'AB+', '19912 Prosacco Forest Apt. 462\nBrownborough, VT 21195-0612', '1562 Dominic Lights\nLake Billyton, NJ 05529-4677', '307.440.2532 x0160', '215-304-5513', 'Seven', '44411', '50', 'tgl-257', 'B', 'Morning', NULL, 20360, '15-02-86', '3247588.71', 'Ideal Model High School, Dhaka', 0, 'Laurel Kilback Jr.', '(972) 580-7259', 'Bailiff', 'Prof. Herminia Keeling MD', '486.318.0118 x160', 'Architect', 'Blaise Swift', 'brutherford@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(28, 'Camron', 'Cummings', 0, '16-07-74', 'A+', '2652 Reba Point\nReichelberg, ID 88041-8798', '30769 Steuber Creek\nWest Caterinaport, AL 77409-9485', '+1 (267) 919-6441', '(563) 391-9522 x3346', 'Four', '6347469', '7766094', 'tgl-311', 'B', 'Morning', NULL, 38812281, '20-09-15', '305.88', 'Ideal Model High School, Dhaka', 1, 'Maximillian McClure', '(478) 896-2627 x2233', 'City', 'Orie Johnston', '306.210.1266 x0694', 'Court Clerk', 'Dewitt Swift IV', 'lavada30@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(29, 'Maude', 'Rutherford', 1, '27-10-18', 'B+', '58525 Abbey Pine\nSouth Luramouth, UT 88027', '204 Tromp Courts\nSouth Kristofer, ND 90717', '691-922-3491', '1-274-219-0307 x96850', 'Eight', '68623016', '14', 'tgl-323', 'A', 'Morning', NULL, 1179161, '31-01-17', '471828.36', 'Ideal Model High School, Dhaka', 0, 'Prof. Orlando Rolfson', '(815) 454-5207 x5815', 'Naval Architects', 'Adrianna Heathcote', '(217) 295-7641', 'Clerk', 'Dr. Anastasia Cartwright', 'hardy.watsica@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(30, 'Hannah', 'Zieme', 0, '19-07-03', 'B+', '304 Clifford Skyway\nMaggiefort, OR 42072-4050', '60028 Oswaldo Expressway Apt. 507\nLake Darrellland, FL 33906', '448-286-1154', '532-476-1166', 'Eight', '554957', '150', 'tgl-125', 'A', 'Morning', NULL, 64919, '27-04-02', '442.73', 'Ideal Model High School, Dhaka', 1, 'Dr. Henry Hills PhD', '626.259.8856', 'Occupational Therapist', 'Shane O\'Kon', '(280) 316-0995 x896', 'Personal Service Worker', 'Tatyana Johnston', 'stephan.schulist@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(31, 'Katrine', 'Padberg', 0, '11-03-75', 'AB+', '27839 Everett Flat\nVeumshire, LA 68370', '8246 Reilly Crossing Suite 546\nMayerton, MI 63497', '734-568-5628 x735', '974-784-1984', 'Five', '811', '842', 'tgl-47', 'B', 'Morning', NULL, 249099, '03-08-08', '182155.75', 'Ideal Model High School, Dhaka', 0, 'Jaiden Waters', '489.993.5422 x5664', 'Talent Acquisition Manager', 'Prof. Alisa Feest', '1-495-684-5049', 'Recreational Therapist', 'Cristobal Fay', 'grobel@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(32, 'Brain', 'Waters', 1, '07-03-17', 'O+', '575 America Flats\nLake Colby, SC 97977', '3800 Langworth Rapid Suite 768\nSouth Scot, IL 71657', '+1-959-369-9140', '594-933-7023', 'Two', '403278955', '11220', 'tgl-46', 'A', 'Day', NULL, 1669, '20-03-09', '150.59', 'Ideal Model High School, Dhaka', 0, 'Oceane Wintheiser', '+14012049154', 'Potter', 'Jacques Klein II', '(257) 266-6176', 'Occupational Therapist Assistant', 'Isac Fritsch', 'mariano.weissnat@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(33, 'Salma', 'Mohr', 1, '23-05-16', 'B+', '910 Loraine Route\nLake Mateotown, MD 09445-8731', '1370 Sandrine Roads Suite 383\nBreanastad, SC 84406', '660-885-0386', '710.722.5406', 'One', '920933', '8', 'tgl-244', 'B', 'Day', NULL, 950773, '02-01-70', '488611271.50', 'Ideal Model High School, Dhaka', 0, 'Deanna DuBuque', '+1.564.694.5366', 'Merchandise Displayer OR Window Trimmer', 'Matteo Tromp', '602-922-8436 x64817', 'Computer Science Teacher', 'Domenico Berge', 'herzog.lourdes@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:22', '2019-12-20 04:37:22'),
(34, 'Jeremie', 'McDermott', 0, '30-01-80', 'A+', '52430 Padberg Springs Apt. 662\nMarianetown, CO 87662-7409', '3002 Samantha Ways\nBrennanville, CA 22096-5079', '612.413.5652 x3451', '(667) 841-4517 x19779', 'Three', '1597928', '896633348', 'tgl-348', 'A', 'Morning', NULL, 669, '15-10-09', '655.11', 'Ideal Model High School, Dhaka', 0, 'Hyman Wintheiser IV', '972-239-6071 x2843', 'Statistician', 'Vinnie Lueilwitz', '738.737.6649 x726', 'Claims Adjuster', 'Jaclyn McLaughlin IV', 'nat.hahn@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(35, 'Ervin', 'Schaefer', 1, '04-12-03', 'AB+', '311 Trey Rapid Apt. 258\nWest Clarissaport, OH 72656', '881 Vicenta Dale Apt. 498\nJaskolskitown, AK 62103', '1-795-755-3469 x7809', '+1-275-347-5586', 'Three', '24', '17', 'tgl-340', 'A', 'Day', NULL, 7991, '14-01-92', '162675.13', 'Ideal Model High School, Dhaka', 1, 'Elouise Roob I', '1-569-868-9819', 'Teacher Assistant', 'Zachery Harber', '274.387.3436 x873', 'Ship Pilot', 'Prof. Alexandrine Wehner MD', 'kennedy23@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(36, 'Anissa', 'Kuhlman', 1, '06-10-99', 'A+', '963 Koelpin Lodge\nNorth Halville, PA 57437-8979', '9020 Wyatt Dam Suite 268\nRunolfsdottirfort, AK 30499', '907-264-1579', '+1.650.420.9376', 'Baby', '52096681', '7225960', 'tgl-226', 'A', 'Morning', NULL, 89, '13-12-77', '11.37', 'Ideal Model High School, Dhaka', 1, 'Toy Stoltenberg', '590-669-1076 x739', 'New Accounts Clerk', 'Jacquelyn Larkin', '1-587-904-0085', 'Shoe Machine Operators', 'Hildegard Nikolaus', 'tristin.rice@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(37, 'Dixie', 'Gulgowski', 0, '23-12-83', 'B+', '320 Joelle Stream\nAltenwerthburgh, NY 60369-4343', '3221 Schuppe Mount\nKrisbury, PA 44200-3870', '484.752.9288 x41127', '202-888-5635', 'Six', '769480', '1', 'tgl-363', 'A', 'Day', NULL, 2553, '28-03-14', '2.37', 'Ideal Model High School, Dhaka', 1, 'Dr. Addison Rempel III', '210-363-8058', 'Telecommunications Equipment Installer', 'Brandyn Gleason', '(798) 796-0949 x8624', 'Agricultural Technician', 'Ms. Lauren Abshire', 'vrodriguez@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(38, 'Nya', 'Kovacek', 0, '07-05-08', 'A+', '6020 Morar Court\nBruenmouth, ND 79125', '45391 Mossie Mall\nHailiefurt, IA 93828-5460', '+1 (983) 355-1141', '874-927-0927 x8536', 'One', '6794390', '22', 'tgl-36', 'B', 'Morning', NULL, 68058135, '28-07-13', '12.63', 'Ideal Model High School, Dhaka', 1, 'Baron Hoppe', '1-995-394-3864', 'University', 'Casimir Schroeder', '+1 (547) 378-7616', 'Heating and Air Conditioning Mechanic', 'Forest Wolff', 'pollich.kevon@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(39, 'Mary', 'Prosacco', 0, '08-12-87', 'O+', '204 Titus Meadows\nDickinsonshire, FL 78773-8515', '253 Murazik Curve\nReichertberg, NE 41322-0304', '974-260-5852', '1-247-401-7457', 'Eight', '826240540', '434633', 'tgl-279', 'B', 'Morning', NULL, 0, '22-07-83', '121455863.48', 'Ideal Model High School, Dhaka', 1, 'Mr. Porter Greenholt DDS', '858-936-8293 x52809', 'Milling Machine Operator', 'Wilhelmine Schmeler', '(728) 656-2393', 'Composer', 'Estelle Cole', 'gislason.oran@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(40, 'Josephine', 'Schiller', 1, '17-10-13', 'O+', '7966 Kiehn Rapids\nLake Brennamouth, CA 75917-2930', '12567 Stephany Circle Suite 985\nWalterburgh, MI 68704-5454', '276.695.9849', '+1 (708) 836-8851', 'Five', '516184', '38', 'tgl-262', 'A', 'Morning', NULL, 9801982, '12-03-13', '41330.63', 'Ideal Model High School, Dhaka', 1, 'Noble Simonis', '+1 (924) 586-5696', 'Medical Equipment Preparer', 'Jeffrey Langosh', '+1-575-240-2080', 'Poet OR Lyricist', 'Hardy Lehner', 'glakin@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(41, 'Cecil', 'Bergnaum', 1, '08-07-09', 'B+', '54829 Kunze Spurs Apt. 609\nWizaland, LA 29463', '875 Heaney Garden\nHahnburgh, CA 81289-9842', '876.458.0338', '917-661-4273 x313', 'Baby', '603635', '60', 'tgl-356', 'B', 'Morning', NULL, 8, '02-12-18', '17.95', 'Ideal Model High School, Dhaka', 1, 'Lucie Halvorson', '323-949-2399', 'Forest Fire Inspector', 'Harmon Mayer', '+1.364.718.5729', 'Budget Analyst', 'Deion Kunze', 'cleta.cummerata@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(42, 'Justine', 'Douglas', 1, '26-04-18', 'B+', '2678 Velda Terrace\nWolfburgh, IA 50664', '300 Darlene Square\nDakotaside, AK 93877', '1-858-709-3762 x8946', '737-895-1804 x071', 'Play', '86337593', '2', 'tgl-290', 'B', 'Morning', NULL, 87549288, '27-07-81', '44201486.27', 'Ideal Model High School, Dhaka', 1, 'Angelita Jaskolski', '317-771-5318', 'Able Seamen', 'Eloy Miller', '+1-910-692-4698', 'Armored Assault Vehicle Crew Member', 'Mrs. Pearlie Hettinger', 'alfred35@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(43, 'Cierra', 'Rippin', 0, '09-05-90', 'B+', '837 Jamey Radial\nEvelynmouth, SD 41013', '9952 Arnulfo Dam\nArleneshire, SD 04283-8614', '237-388-8732 x301', '+1.981.245.4855', 'Two', '71658602', '6518736', 'tgl-207', 'B', 'Morning', NULL, 688, '19-07-70', '37.50', 'Ideal Model High School, Dhaka', 0, 'Daryl West', '425-783-2064 x000', 'Postal Service Clerk', 'Aaron Homenick', '473-743-1301 x640', 'Textile Knitting Machine Operator', 'Stone Mosciski', 'yundt.ana@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(44, 'Ivah', 'Nolan', 1, '24-11-02', 'A+', '55780 Adaline Cape Suite 998\nNapoleonview, OK 75481-1766', '113 Barton Valley\nSouth Kyleehaven, ME 56323-4647', '(556) 510-7632', '1-423-619-8480 x90685', 'Four', '577', '42135', 'tgl-103', 'A', 'Morning', NULL, 2396422, '29-05-80', '1535376.13', 'Ideal Model High School, Dhaka', 0, 'Braulio Moen Sr.', '1-284-635-1817 x040', 'Home Health Aide', 'Elody Johnson', '362-586-0622 x0822', 'Law Enforcement Teacher', 'Melissa Kerluke', 'khills@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(45, 'Kenny', 'Dach', 0, '09-07-86', 'AB+', '21638 O\'Reilly Dam Suite 591\nBradtkehaven, CA 82635-9051', '359 Elda Center Suite 598\nErnsershire, MT 48519', '(247) 339-2553 x188', '1-990-682-5830', 'Two', '373416735', '197858', 'tgl-162', 'A', 'Day', NULL, 92138, '24-02-81', '1342137.79', 'Ideal Model High School, Dhaka', 1, 'Yasmin D\'Amore', '+1.302.448.9088', 'Agricultural Inspector', 'D\'angelo Hirthe', '551.499.6664 x14128', 'Construction Equipment Operator', 'Okey Terry', 'carley24@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(46, 'Clementina', 'Bechtelar', 1, '12-08-85', 'O+', '2136 Birdie Hill Suite 674\nEast Darby, AZ 04223-4250', '45513 Brandon Mountain\nDiegoburgh, MI 31610-3663', '863-664-0538', '1-616-993-1652 x009', 'Baby', '2', '1133340', 'tgl-345', 'A', 'Morning', NULL, 5735, '25-06-95', '12.30', 'Ideal Model High School, Dhaka', 1, 'Roy Howell', '(914) 483-8411 x280', 'Veterinarian', 'Prof. Javonte Fritsch Jr.', '935-272-1143', 'Professor', 'Jerry Mohr', 'adrienne60@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(47, 'Alexandrine', 'Heidenreich', 1, '02-03-93', 'A+', '3114 Assunta Road Suite 114\nPort Verniestad, NE 18308', '858 Terrell Junctions\nTrantowborough, MS 28749', '1-534-325-4013', '1-771-994-1412', 'Seven', '331', '168042', 'tgl-28', 'A', 'Day', NULL, 7, '19-04-97', '11945130.59', 'Ideal Model High School, Dhaka', 0, 'Prof. Hilbert Kemmer IV', '(673) 619-7566 x55696', 'Child Care', 'Mr. William Barton', '(223) 397-7923', 'Merchandise Displayer OR Window Trimmer', 'Prof. Esteban Gibson', 'uvonrueden@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(48, 'Valerie', 'Leannon', 0, '09-06-08', 'O+', '803 Walker Loop Suite 976\nAndersontown, AK 21352', '333 Devante Square\nBrodystad, AK 33800-0008', '983.204.3210', '693.665.2288', 'Eight', '523', '31148', 'tgl-354', 'B', 'Day', NULL, 429145, '22-02-95', '7.27', 'Ideal Model High School, Dhaka', 1, 'Mrs. Willie Strosin', '557-983-7018', 'Courier', 'Magali Goldner', '+1.874.354.0276', 'Dental Assistant', 'Miss Clementine Ledner', 'dangelo97@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:23', '2019-12-20 04:37:23'),
(49, 'Marlee', 'Robel', 1, '01-05-13', 'A+', '4281 Yundt Spring\nRobelville, IL 45906', '8543 Howe Roads\nLefflerview, AL 01146-8209', '520.438.7233 x0003', '+1 (893) 930-5249', 'Four', '926212', '749', 'tgl-39', 'B', 'Morning', NULL, 63098012, '23-12-84', '5033504.54', 'Ideal Model High School, Dhaka', 0, 'Oswald Koss', '986.880.8593 x7665', 'Forensic Science Technician', 'Dolores Christiansen Jr.', '(478) 306-5209', 'Title Abstractor', 'Kattie Gleichner V', 'gsatterfield@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(50, 'Raleigh', 'Will', 0, '25-01-17', 'A+', '765 Cary Center Apt. 176\nNorth Bridieside, NJ 38968-8902', '60638 Bria Unions\nPort Sven, VT 53044', '273.722.6555', '801-459-0159 x15276', 'Four', '5347', '542591245', 'tgl-245', 'A', 'Day', NULL, 7832540, '13-01-74', '11102.63', 'Ideal Model High School, Dhaka', 0, 'Matteo Deckow', '(420) 448-6625', 'Heating and Air Conditioning Mechanic', 'Omer Zemlak I', '(603) 899-7604 x77995', 'Protective Service Worker', 'Stacy Adams', 'kdickens@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(51, 'Emie', 'Stokes', 0, '12-09-86', 'B+', '93244 Lang Trafficway\nNew Rebecafort, NE 28275', '9115 O\'Connell Lodge Apt. 376\nSouth Eleanore, AK 70162', '1-885-275-6706 x487', '(681) 692-7762 x6432', 'Six', '39231343', '608588276', 'tgl-288', 'B', 'Morning', NULL, 448, '05-01-13', '5856.19', 'Ideal Model High School, Dhaka', 1, 'Lincoln Wintheiser', '789.609.9070 x696', 'Electric Meter Installer', 'Mrs. Beverly Tromp II', '650-410-5658 x6239', 'Dental Laboratory Technician', 'Dr. Michale Greenholt PhD', 'hoppe.carolyne@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(52, 'Delbert', 'Senger', 1, '21-12-13', 'A+', '70558 Ryan Forges Suite 918\nNorth Nyah, CO 67023', '2836 Huels Isle\nO\'Konberg, NJ 65773-6699', '1-468-466-5218', '(708) 239-4899', 'Five', '463192', '27', 'tgl-242', 'B', 'Morning', NULL, 80, '18-07-18', '16835.03', 'Ideal Model High School, Dhaka', 1, 'Juanita Steuber', '(348) 292-8765 x165', 'HVAC Mechanic', 'Dr. Irving Runolfsson I', '475-653-8376 x7415', 'Music Arranger and Orchestrator', 'Dr. Jacey Parisian Sr.', 'wayne56@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(53, 'Katarina', 'Runolfsdottir', 1, '23-10-71', 'O+', '32766 Ferry Wall\nHermanborough, DC 89810-2649', '361 Bechtelar Ville\nRahsaanville, VA 07616-5614', '+1.286.497.0287', '1-264-379-4418', 'Two', '64503471', '125', 'tgl-70', 'A', 'Morning', NULL, 36, '17-10-73', '3.41', 'Ideal Model High School, Dhaka', 0, 'Elnora Huels PhD', '(587) 544-2245 x0780', 'Pharmacy Aide', 'Richie Koch', '451-524-4254 x02589', 'Brokerage Clerk', 'Imogene Nikolaus', 'vstreich@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(54, 'Patsy', 'Hackett', 0, '18-06-97', 'A+', '276 Cruickshank Mountains Suite 301\nNorth Vesta, CO 82710-2573', '268 Izabella Radial Apt. 222\nLake Tamarahaven, CT 02258', '1-414-810-4231 x1494', '337-859-1949 x9412', 'Two', '32207', '55725', 'tgl-316', 'B', 'Day', NULL, 72, '03-04-06', '1344.22', 'Ideal Model High School, Dhaka', 1, 'Miss Stacy Cronin', '495.652.1784', 'Law Clerk', 'Kory Littel', '1-374-695-9875', 'Counselor', 'Dr. Alejandrin Bogan Jr.', 'tillman.viviane@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(55, 'Lennie', 'Spencer', 0, '14-11-16', 'O+', '4292 Mariah Lodge Apt. 621\nLake Danielatown, KS 58033', '25958 Wiza Mount\nMcKenzieborough, NH 87949-9274', '285-269-7018 x479', '809.245.6795', 'Three', '914208971', '303', 'tgl-308', 'A', 'Morning', NULL, 7823312, '06-08-13', '283518.13', 'Ideal Model High School, Dhaka', 1, 'Prof. Jacques Ryan', '1-876-429-5867', 'Extraction Worker', 'Dr. Lazaro Reichert IV', '609.746.7837 x996', 'Fashion Designer', 'Shannon Rice', 'laury96@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(56, 'Lura', 'Bogisich', 1, '29-08-09', 'AB+', '78923 Zita Dam\nKulastown, ND 85550', '28051 Hodkiewicz Locks\nElsestad, TN 43759', '1-612-625-1375 x138', '970-949-4246', 'Four', '34623', '81', 'tgl-246', 'B', 'Morning', NULL, 38741, '19-08-78', '176024642.25', 'Ideal Model High School, Dhaka', 1, 'Arlene Gorczany', '+1-704-566-7066', 'Diagnostic Medical Sonographer', 'Celine Dickinson', '(578) 687-2716', 'Sys Admin', 'Orrin Rodriguez', 'deanna.macejkovic@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(57, 'Domenica', 'Haag', 0, '28-03-73', 'B+', '5368 Mayer Parkways\nSydneeview, LA 25260-9504', '3683 Rempel Underpass Suite 109\nLehnerbury, AR 38789', '(354) 225-3573 x1799', '+1-624-239-9522', 'Eight', '2050', '0', 'tgl-335', 'A', 'Day', NULL, 70415, '15-09-90', '65435.06', 'Ideal Model High School, Dhaka', 0, 'Kian Rice III', '261-933-5559 x99711', 'Opticians', 'Lulu Howe', '924.456.0934', 'Clergy', 'Ms. Virgie Auer Jr.', 'meghan95@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(58, 'Dante', 'Block', 1, '08-09-94', 'B+', '87996 Kuhn Loop Apt. 441\nElnorahaven, LA 48764', '4339 Miller Common\nHillston, OR 95111', '589.793.4681 x8954', '907-546-6400 x78745', 'One', '31', '6773932', 'tgl-10', 'B', 'Day', NULL, 62, '08-09-79', '1612728.23', 'Ideal Model High School, Dhaka', 1, 'Dr. Marisol D\'Amore', '448.288.2700', 'Security Guard', 'Beau Toy', '+1.802.237.3777', 'Claims Taker', 'Burley Nader', 'roberbrunner@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(59, 'Virginie', 'Swaniawski', 0, '27-01-92', 'AB+', '7992 Mills Port\nNew Richmond, MN 91861', '17641 Cruickshank Turnpike Apt. 444\nDavisfort, NH 33072-9756', '225.973.5788 x042', '247.354.4300', 'Two', '997', '4657', 'tgl-361', 'A', 'Morning', NULL, 8448965, '10-04-87', '2.03', 'Ideal Model High School, Dhaka', 1, 'Nicola Friesen DDS', '968-874-7402 x997', 'Night Shift', 'Ahmed Dietrich Jr.', '1-387-310-6548', 'Radar Technician', 'Dr. Jessie Larkin', 'weber.jeramy@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(60, 'Carley', 'Robel', 0, '23-08-17', 'O+', '334 Skiles Key\nSimeonbury, RI 50439-4979', '11168 Krajcik Causeway\nReginaldborough, IL 50753', '830-914-8932 x373', '357.242.4135 x5088', 'Two', '311046146', '795228', 'tgl-159', 'B', 'Day', NULL, 651, '03-06-86', '4.03', 'Ideal Model High School, Dhaka', 1, 'Heloise Kunze', '1-705-769-7803 x8196', 'Parking Lot Attendant', 'Dr. Jose Schowalter', '898.889.3951', 'Housekeeper', 'Dashawn Thiel', 'cameron.armstrong@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(61, 'Alexander', 'Heller', 0, '15-07-02', 'A+', '2574 Kemmer Ridge Apt. 307\nLake Hubertmouth, HI 70438-3638', '620 Volkman Unions Apt. 301\nNew Aprilton, NY 32075-1627', '769-828-1486', '993-769-6850 x83879', 'Play', '377572', '2', 'tgl-372', 'A', 'Day', NULL, 2, '29-03-15', '6514.32', 'Ideal Model High School, Dhaka', 0, 'Norbert Boyer', '(427) 963-8375', 'Geographer', 'Mariah McCullough', '+1 (479) 451-8645', 'Fire Investigator', 'Rudy Keebler', 'mireya09@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(62, 'Kelton', 'Rutherford', 1, '26-02-87', 'O+', '189 Hoeger Valley\nSouth Obie, PA 62084-2546', '2251 Kunze Brook\nHarberburgh, ND 49640-1594', '+1-697-685-2777', '753.670.9438', 'Play', '317824368', '2172587', 'tgl-375', 'B', 'Day', NULL, 98892, '06-06-02', '3168926.74', 'Ideal Model High School, Dhaka', 1, 'Dr. Gail Romaguera DDS', '+1.557.441.7110', 'Directory Assistance Operator', 'Jerrold Harris', '765.568.2947 x6102', 'Continuous Mining Machine Operator', 'Jaclyn Tillman', 'cschneider@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(63, 'Telly', 'Brekke', 1, '28-03-92', 'O+', '1864 Hudson Way\nJohnathonville, KS 13266', '107 Bosco River Suite 557\nOtiliaberg, AR 60886', '1-990-679-8544 x8409', '+1-756-977-5085', 'Eight', '25433011', '345319958', 'tgl-175', 'B', 'Morning', NULL, 4089465, '06-12-83', '13.45', 'Ideal Model High School, Dhaka', 0, 'Mrs. Jacky Considine PhD', '890-390-7221', 'Costume Attendant', 'Earnestine Kshlerin', '+14342539109', 'Substance Abuse Counselor', 'Prof. Aaron Pouros V', 'toney49@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:24', '2019-12-20 04:37:24'),
(64, 'Griffin', 'Macejkovic', 1, '15-12-87', 'B+', '1718 Zora Creek\nWest Everardoland, CT 49148', '13432 Tyra Prairie Apt. 538\nGoldnerfort, MI 83780', '856-800-1509 x2816', '1-465-489-5188 x8919', 'Six', '1892', '11102', 'tgl-133', 'A', 'Morning', NULL, 763139, '15-01-06', '253607573.04', 'Ideal Model High School, Dhaka', 0, 'Elliott Keebler PhD', '(834) 956-4339 x5290', 'Dental Assistant', 'Kacey Goodwin', '590-227-5033 x0449', 'Photographic Developer', 'Prof. Sigrid Blick Jr.', 'drutherford@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(65, 'Maximilian', 'Fritsch', 0, '14-01-97', 'B+', '677 Heller Ports\nLake Ilamouth, TN 78367-4805', '9162 Larkin Bridge\nThompsonview, NH 90718', '+12298978902', '216-873-1115', 'Play', '50240062', '51', 'tgl-320', 'B', 'Morning', NULL, 620034, '09-03-03', '2.00', 'Ideal Model High School, Dhaka', 0, 'Dr. Donald Bashirian V', '+1-252-205-9824', 'Construction Driller', 'Dr. Thad Fisher', '(547) 830-2482 x583', 'Separating Machine Operators', 'Dr. Monserrat Yost', 'award@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(66, 'Sandra', 'Bartell', 0, '19-04-88', 'O+', '735 Dorthy Hill\nSheaside, IA 03762', '15108 Dario Grove\nNew Shawna, MD 55135-6951', '847.844.1389 x059', '626-699-8984 x62048', 'Three', '538658', '19', 'tgl-13', 'B', 'Morning', NULL, 568700, '29-01-19', '178264573.63', 'Ideal Model High School, Dhaka', 0, 'Matteo Mohr', '976-859-5490', 'Fiber Product Cutting Machine Operator', 'Dr. Nova Goyette', '286.903.4942 x562', 'Teacher Assistant', 'Rudy Johnston', 'thaley@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(67, 'Elwyn', 'Ullrich', 0, '20-10-08', 'O+', '555 Genesis Stream Apt. 858\nBoyletown, ND 10790-9045', '9622 Rollin Spur Apt. 295\nEast Gaetano, LA 37269-4140', '276.585.4946 x7182', '357-676-4296', 'Five', '316', '329', 'tgl-62', 'B', 'Day', NULL, 8414167, '05-01-95', '2.00', 'Ideal Model High School, Dhaka', 0, 'Renee Waelchi', '(885) 562-4252 x8699', 'Railroad Switch Operator', 'Elliot Hills', '1-379-816-6471 x54772', 'History Teacher', 'Clifford Ryan', 'ashlee.sporer@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(68, 'Kavon', 'Huel', 0, '28-03-00', 'B+', '2231 Forest Views\nPourosshire, IA 51589', '7935 Davis Flats Apt. 529\nNorth Darleneview, OR 45775', '(984) 853-8758 x312', '1-328-937-3308', 'Four', '86237012', '8', 'tgl-105', 'B', 'Day', NULL, 9, '29-05-84', '6.89', 'Ideal Model High School, Dhaka', 1, 'Emilie Kuphal II', '(576) 473-0689', 'Septic Tank Servicer', 'Maximilian Orn', '+16239455885', 'Immigration Inspector OR Customs Inspector', 'Lolita Koepp', 'carole.bayer@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(69, 'Eva', 'Bednar', 0, '16-04-74', 'B+', '31053 Hayes Corners\nDeclanburgh, AZ 30149', '30358 Mayert Grove\nWymanton, LA 43286', '265-548-6075', '(414) 672-7793 x89748', 'Three', '518', '57441582', 'tgl-66', 'A', 'Morning', NULL, 6335523, '29-12-16', '8430.38', 'Ideal Model High School, Dhaka', 1, 'Kolby Padberg', '385-521-8656 x4827', 'Geographer', 'Buck McDermott IV', '890.852.4910 x4914', 'Slot Key Person', 'Burdette Smith', 'deckow.earline@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(70, 'Fleta', 'Connelly', 1, '23-09-01', 'O+', '290 Linwood Islands\nLittelville, UT 42484-2151', '37466 Abernathy Springs\nNorth Remingtonland, NV 33422-2699', '878.434.1500', '554-340-0004', 'One', '84', '886077', 'tgl-375', 'A', 'Morning', NULL, 73746438, '16-04-74', '2369.10', 'Ideal Model High School, Dhaka', 0, 'Patience Ritchie', '(838) 268-2737', 'Transformer Repairer', 'Mr. Leonardo Gottlieb', '(345) 353-6400 x72420', 'Mechanical Equipment Sales Representative', 'Miss Dina Quigley MD', 'haskell40@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(71, 'Joy', 'O\'Reilly', 1, '12-04-99', 'AB+', '43968 Herminia Orchard\nLednerhaven, PA 37974', '63334 Rodrick Plains Suite 659\nCaitlynberg, WI 81108', '714.619.4948 x57317', '+1-230-985-3612', 'Eight', '22771', '1928738', 'tgl-318', 'B', 'Morning', NULL, 6526, '03-02-16', '4900.53', 'Ideal Model High School, Dhaka', 1, 'Gregg Kling', '357.656.5913', 'Mapping Technician', 'Miss Freeda Smitham', '892.444.7597 x441', 'Market Research Analyst', 'Nicolette Howe DDS', 'angie.krajcik@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(72, 'Paige', 'Feest', 1, '16-01-93', 'A+', '598 Chad Road Apt. 131\nAubreeville, IA 69828-3098', '6572 Pamela Common Apt. 495\nNew Tyrel, NJ 72205-6688', '668-616-1307 x43936', '279.866.0993 x2920', 'Five', '92808312', '1', 'tgl-63', 'A', 'Morning', NULL, 3423, '19-04-74', '267.23', 'Ideal Model High School, Dhaka', 1, 'Dr. Clifford Olson', '1-552-625-3998 x00494', 'Account Manager', 'Dr. Adrian Gulgowski Sr.', '+1-859-268-7855', 'Mining Machine Operator', 'Yesenia Kuvalis DDS', 'domenic.bode@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(73, 'Christa', 'Mann', 0, '08-10-78', 'AB+', '18856 Sabrina Stravenue\nKoeppstad, NH 39190', '344 Moore Ports Apt. 378\nEast Barbaraville, FL 29238-8963', '1-712-451-3423', '1-489-994-4989', 'Baby', '863271', '8874', 'tgl-379', 'B', 'Morning', NULL, 9696745, '10-05-91', '5625.96', 'Ideal Model High School, Dhaka', 0, 'Precious Cummings', '418-209-9546', 'Music Composer', 'Mr. Kraig Hane', '(663) 210-8829 x8239', 'Medical Laboratory Technologist', 'Dr. Paul Kutch', 'lizeth.harber@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(74, 'Katrine', 'Hartmann', 0, '15-10-94', 'B+', '102 Eduardo Station Apt. 795\nGretaton, AZ 43167', '12293 Shields Loop\nNew Tate, AK 53069', '657.709.5527', '1-423-264-8190 x89232', 'Play', '527088', '20', 'tgl-78', 'B', 'Day', NULL, 48, '22-09-91', '4.37', 'Ideal Model High School, Dhaka', 1, 'Abdiel Boyle', '1-717-713-3480', 'Agricultural Crop Farm Manager', 'Mr. Jordon Glover', '1-490-900-3020 x067', 'Electrical Sales Representative', 'Roosevelt Kulas', 'wrunte@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(75, 'Alvina', 'Homenick', 1, '15-07-10', 'B+', '9100 Peter Meadows\nWest Joanland, DE 86224', '64494 Lane Stravenue\nReubenfort, HI 47157-0637', '207-691-4881 x533', '(910) 807-2847', 'Baby', '2', '21516183', 'tgl-144', 'A', 'Day', NULL, 7155724, '02-02-84', '6749.46', 'Ideal Model High School, Dhaka', 0, 'Dr. Jeffery Kreiger Sr.', '(704) 301-2557', 'Special Force', 'Miracle Johns', '453.391.7930', 'Agricultural Science Technician', 'Ms. Kaelyn McGlynn I', 'ted.jones@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(76, 'Triston', 'Heathcote', 0, '04-08-78', 'O+', '981 Lemke Curve\nKristoferhaven, CO 72306-7299', '84504 Schamberger Mill Suite 326\nLake Maeveport, ND 90493-5557', '(689) 644-6768 x7455', '906-608-5853', 'Seven', '83', '570829', 'tgl-122', 'B', 'Day', NULL, 6, '29-12-86', '426877.48', 'Ideal Model High School, Dhaka', 1, 'Elisha King', '+1 (879) 908-8837', 'Epidemiologist', 'Terrance Kessler', '(209) 583-7018 x917', 'Paralegal', 'Vergie Rohan', 'pherzog@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25');
INSERT INTO `students` (`id`, `first_name`, `last_name`, `gender_name`, `date_of_birth`, `blood_group`, `present_address`, `permanent_address`, `contact_number`, `contact_number2`, `class`, `roll`, `reg`, `id_number`, `section`, `shift`, `group`, `birth_certificate_number`, `admission_date`, `admission_fees`, `previous_institute_name`, `transport`, `father_name`, `father_contact_number`, `father_occupation`, `mother_name`, `mother_contact_number`, `mother_occupation`, `local_guardian_name`, `email`, `password_token`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(77, 'Breanna', 'Legros', 0, '29-12-86', 'O+', '336 Hulda Mission\nNew Lexusville, MT 78406', '98365 Gino Dam\nMannberg, CA 63980', '(772) 692-7330', '+1.295.887.4061', 'One', '8', '711369', 'tgl-249', 'B', 'Day', NULL, 811, '03-07-06', '186.09', 'Ideal Model High School, Dhaka', 0, 'Amos O\'Reilly IV', '492-337-0244', 'Mapping Technician', 'Joana Predovic', '717.542.8400 x7364', 'Cost Estimator', 'Mrs. Brisa Grant IV', 'jensen63@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:25', '2019-12-20 04:37:25'),
(78, 'Antonietta', 'Boyer', 1, '21-06-90', 'AB+', '997 Kub Common\nWest Talia, RI 12328-3392', '185 Armand Via Suite 978\nPort Johnpaul, KS 17680-4136', '705-480-6919', '+1-389-764-1312', 'One', '86525', '4661', 'tgl-247', 'B', 'Morning', NULL, 96554, '22-03-05', '2783.49', 'Ideal Model High School, Dhaka', 0, 'Bell Dach DVM', '(723) 529-8329', 'Order Filler OR Stock Clerk', 'Abigail Gleason DDS', '581-439-1440 x858', 'Correctional Officer', 'Roger Hahn', 'stephan94@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(79, 'Clifford', 'Cassin', 0, '15-02-76', 'AB+', '812 Borer Valley Suite 074\nYasminehaven, KS 16880', '7442 Lillian Junctions Suite 752\nNorth Kiara, NM 82591', '+1-792-637-9298', '+1-546-915-6149', 'One', '6', '414527735', 'tgl-130', 'A', 'Day', NULL, 56718, '19-06-99', '473880373.93', 'Ideal Model High School, Dhaka', 1, 'Ms. America Beier V', '367-541-3962', 'Marketing Manager', 'Brian Hintz', '872.674.8791 x78435', 'Glass Cutting Machine Operator', 'Mrs. Alyce Nitzsche MD', 'leta.ward@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(80, 'Vince', 'Gleason', 1, '26-04-74', 'O+', '898 Labadie Bypass Apt. 227\nNew Gradyshire, SD 15784', '914 Wehner Unions Apt. 177\nSchadenburgh, IA 73705-1328', '201.375.3235', '+1-917-684-6836', 'Play', '2538553', '466110', 'tgl-18', 'A', 'Day', NULL, 8478, '20-04-14', '2.00', 'Ideal Model High School, Dhaka', 0, 'Queenie Lynch', '(998) 938-0335 x9113', 'Hand Trimmer', 'Ricardo Skiles', '(839) 504-8567 x7727', 'Crushing Grinding Machine Operator', 'Anderson Prohaska', 'shany.crooks@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(81, 'Ephraim', 'Sporer', 0, '02-04-91', 'A+', '8210 Pfannerstill Port\nAustynville, CA 21996-5979', '310 Johnpaul Falls\nLake Pierceton, VT 36298-0204', '1-293-828-1970', '357.870.7252', 'Seven', '95', '824027', 'tgl-320', 'A', 'Day', NULL, 83, '17-11-76', '3.62', 'Ideal Model High School, Dhaka', 1, 'Dallas Hilpert', '441-623-7347 x3291', 'Crushing Grinding Machine Operator', 'Laverna Lubowitz', '1-758-566-5293', 'Healthcare Practitioner', 'Mrs. Gladys Borer', 'ericka.marks@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(82, 'Joshua', 'Gleason', 0, '02-02-75', 'A+', '58973 Runolfsson Path Apt. 310\nNorth Kayleigh, RI 51572-7696', '564 Devan Trafficway Apt. 013\nBashirianborough, IL 66866', '465.294.1061 x6285', '1-837-673-9126 x53648', 'Play', '64536566', '770', 'tgl-297', 'A', 'Day', NULL, 56, '31-03-15', '37.37', 'Ideal Model High School, Dhaka', 0, 'Maegan Marquardt', '(241) 953-3057 x1583', 'Agricultural Manager', 'Romaine Lowe', '+1-305-509-9582', 'Fire-Prevention Engineer', 'Hollie O\'Conner DVM', 'mary07@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(83, 'Gretchen', 'Flatley', 0, '08-09-92', 'O+', '61815 Abshire Greens\nMrazfurt, NC 13169', '27950 Braulio Village Suite 725\nNew Leonor, NH 75263-5030', '1-765-922-6748 x3655', '+1.642.728.6375', 'Baby', '21053995', '678', 'tgl-219', 'A', 'Day', NULL, 85, '11-05-18', '18876.44', 'Ideal Model High School, Dhaka', 1, 'Hilbert Daugherty', '1-883-400-8318', 'Title Examiner', 'Polly Harber', '669.784.0764', 'Slot Key Person', 'Mrs. Angela Rutherford', 'mose.lakin@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(84, 'Callie', 'Herzog', 1, '19-05-83', 'O+', '2291 Murl Court Apt. 688\nKossville, IA 96683', '9208 Goldner Isle Suite 352\nWeissnatton, MD 90411-0730', '587-456-1851 x59362', '242-371-7241 x651', 'Play', '66', '617661826', 'tgl-328', 'A', 'Day', NULL, 599816, '06-11-87', '150812258.37', 'Ideal Model High School, Dhaka', 0, 'Madeline Gorczany', '(850) 699-3052 x402', 'Product Promoter', 'Carmelo Donnelly', '(376) 533-7094', 'Avionics Technician', 'Brenda Nitzsche', 'minnie.treutel@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(85, 'Blaise', 'Funk', 1, '23-03-86', 'AB+', '9035 Satterfield Key Suite 951\nSchaeferside, NM 12054-8742', '80452 Walter Courts Apt. 407\nWestton, WI 54634-2585', '552-815-8657 x754', '(876) 729-0116', 'Play', '604823', '36016200', 'tgl-69', 'B', 'Morning', NULL, 925, '04-12-96', '604.68', 'Ideal Model High School, Dhaka', 0, 'Mozelle Langworth', '(657) 527-8931', 'Nuclear Engineer', 'Jordan Corwin', '(590) 309-0832', 'Construction Manager', 'Amy Fisher', 'shanelle.fadel@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(86, 'Milo', 'Ebert', 0, '21-08-01', 'AB+', '123 Stracke Manors Suite 284\nLangoshstad, AZ 48421-3531', '94086 Jalon Port Suite 320\nWest Rahsaan, NV 74617', '231-358-4796 x9941', '+1-856-461-9642', 'Three', '9', '478', 'tgl-167', 'B', 'Day', NULL, 194496967, '20-10-80', '4771118.24', 'Ideal Model High School, Dhaka', 1, 'Claud Shields DDS', '667-318-6420 x827', 'HVAC Mechanic', 'Prof. Mathilde Wunsch', '+1-814-469-6403', 'Plasterer OR Stucco Mason', 'Mrs. Lolita Greenholt', 'dedrick61@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(87, 'Cordie', 'Walker', 1, '07-08-79', 'O+', '610 Jonas Gardens\nHamillton, OK 85522-7720', '489 Raynor Meadow Apt. 008\nLake Rosetta, LA 87242', '951-261-4012', '494-666-9208 x452', 'One', '3696980', '133', 'tgl-270', 'A', 'Morning', NULL, 349714890, '11-01-76', '8594.36', 'Ideal Model High School, Dhaka', 1, 'Mathew Jacobson Jr.', '356.923.8557 x8567', 'Costume Attendant', 'Joan Hammes', '925-614-2802', 'Freight Agent', 'Eloisa Collier', 'houston00@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:26', '2019-12-20 04:37:26'),
(88, 'Antoinette', 'Russel', 0, '05-04-01', 'A+', '567 Keenan Terrace\nRiceton, IN 58806', '616 Greenfelder Point\nNeilbury, NJ 72686', '658.455.2113 x0759', '+1-992-338-9584', 'Four', '957019497', '862156', 'tgl-127', 'B', 'Morning', NULL, 4, '31-12-93', '21.74', 'Ideal Model High School, Dhaka', 1, 'Candida Barton', '+1-239-968-9657', 'Zoologists OR Wildlife Biologist', 'Jeanne Torp', '+1-928-865-0060', 'Millwright', 'Dr. Garnet Romaguera', 'rosie.vandervort@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(89, 'Amie', 'Oberbrunner', 1, '31-08-84', 'A+', '4266 Wisozk Forks Suite 129\nHaleyberg, HI 19166-4427', '2804 Abe Land\nHayesside, TX 54779', '665.541.0666 x01344', '+15509434093', 'Two', '396', '3', 'tgl-195', 'B', 'Day', NULL, 72, '06-01-81', '2.90', 'Ideal Model High School, Dhaka', 0, 'Junior Volkman', '636.702.3389 x36872', 'Public Relations Specialist', 'Addie Kertzmann DDS', '370-510-6019 x224', 'Landscaping', 'Lowell Cummings', 'wlarkin@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(90, 'Kali', 'Fay', 1, '23-12-99', 'O+', '520 Violet Terrace\nCasimerland, DC 12464-2085', '96397 Sanford Shores\nEast Olefort, MA 49357-2665', '786.782.5056 x511', '(672) 530-8153 x84541', 'Four', '99', '51', 'tgl-257', 'B', 'Day', NULL, 5715, '06-10-12', '636.09', 'Ideal Model High School, Dhaka', 0, 'Antonetta Legros MD', '+1 (331) 647-6119', 'Proofreaders and Copy Marker', 'Brandt Zulauf', '(306) 734-3152 x90624', 'Social Worker', 'Ms. Valentina Block PhD', 'vklein@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(91, 'Kyle', 'Collier', 1, '22-05-92', 'B+', '6933 David Dam Apt. 840\nPort Eloymouth, NM 48145', '8745 Weissnat Street Suite 899\nNorth Andreanneborough, IL 40314', '1-363-595-2695', '209-915-4279 x7093', 'Four', '72743133', '77282', 'tgl-229', 'A', 'Morning', NULL, 6285473, '27-08-70', '156067.99', 'Ideal Model High School, Dhaka', 1, 'Nannie Tillman MD', '+1.559.831.4005', 'Transformer Repairer', 'Don Durgan', '1-443-892-6674', 'Order Filler', 'Austin Cartwright PhD', 'michele.bradtke@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(92, 'Loren', 'Spencer', 0, '19-03-81', 'B+', '3252 Larry Shoals Apt. 636\nWest Llewellyn, WI 68902', '7700 Aufderhar Plain Suite 696\nJastbury, NY 42753', '974-587-3931 x6468', '1-815-360-7593', 'Four', '703711688', '9294164', 'tgl-25', 'A', 'Morning', NULL, 3879903, '20-09-92', '103896.86', 'Ideal Model High School, Dhaka', 1, 'Dr. Morton Hackett MD', '1-946-352-7751', 'CTO', 'Mr. Helmer Stroman IV', '851.761.9530', 'Electric Motor Repairer', 'Sadye Paucek', 'delmer.bayer@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(93, 'Joshuah', 'Cassin', 1, '06-11-73', 'B+', '3110 Pamela Creek Suite 202\nPort Leonorburgh, NV 13891', '9575 Immanuel Shores Suite 954\nPort Marcside, ID 75644-3901', '1-684-553-4162 x8645', '+1 (504) 784-1753', 'Two', '4', '47388636', 'tgl-176', 'B', 'Day', NULL, 362576484, '15-04-79', '12281541.47', 'Ideal Model High School, Dhaka', 1, 'Merle Hayes', '(840) 603-1145 x9817', 'Mail Clerk', 'Frederique Kris', '+1.728.437.5630', 'Weapons Specialists', 'Dakota Lakin', 'champlin.meta@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(94, 'Nicolette', 'Turner', 1, '29-04-81', 'A+', '235 Alverta Hollow\nLake Josephport, NE 28419', '7374 Hamill Vista Suite 453\nLake Tristianport, WY 12233-4923', '580.747.1732 x10457', '570-937-2402 x696', 'Three', '4', '851795970', 'tgl-366', 'A', 'Day', NULL, 1, '08-01-89', '9.31', 'Ideal Model High School, Dhaka', 1, 'Trenton Abshire DDS', '+12642198683', 'Plasterer OR Stucco Mason', 'Price Hartmann', '(345) 874-2792', 'Diagnostic Medical Sonographer', 'Otto Rosenbaum', 'ritchie.lavonne@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(95, 'Samantha', 'Lang', 1, '22-05-97', 'B+', '350 McCullough Island Apt. 269\nVandervortfurt, AL 58662', '935 Trystan Cliff\nWest Claudine, CT 49886', '649-296-0112', '1-779-887-3944 x76268', 'Five', '26590', '6333900', 'tgl-387', 'A', 'Day', NULL, 102456, '03-04-14', '62.07', 'Ideal Model High School, Dhaka', 1, 'Kay Brekke', '(580) 307-2314', 'Physical Therapist', 'Katelynn Mayert', '(502) 952-2106 x616', 'Electrician', 'Ora Schroeder', 'aisha.wilkinson@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(96, 'Else', 'Ebert', 0, '15-02-03', 'O+', '333 Ward Field\nWest Zoeymouth, LA 44176-1443', '255 Moore Freeway\nEulaside, NV 28888', '685.241.8073 x08311', '+1-424-639-8252', 'Play', '870851', '6896', 'tgl-350', 'B', 'Morning', NULL, 95, '06-05-86', '857173310.62', 'Ideal Model High School, Dhaka', 1, 'Dr. Maverick Vandervort V', '984-885-7724', 'Real Estate Appraiser', 'Tanya Wunsch', '(694) 327-5774 x0584', 'Carpet Installer', 'Dr. Aliyah Jakubowski', 'justice.hayes@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(97, 'Lauryn', 'Rodriguez', 1, '26-04-14', 'AB+', '9407 Jack Mountain\nMitchellstad, NH 01482-5319', '1975 Thiel Islands Suite 273\nNorth Aryanna, NE 54103-2029', '(482) 742-9258', '421.972.7961 x1563', 'Three', '28', '8339', 'tgl-3', 'B', 'Day', NULL, 4, '03-01-77', '287789.97', 'Ideal Model High School, Dhaka', 1, 'Ms. Sienna Cummings', '+1-949-653-1493', 'Petroleum Pump Operator', 'Vivien Treutel', '953.400.6914', 'Fitness Trainer', 'Rickey Schowalter', 'lauryn34@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(98, 'Lonnie', 'Sauer', 0, '28-05-93', 'O+', '569 Hilpert Wells Apt. 905\nNorth Tatumchester, FL 34415-9563', '347 Langosh Spurs\nSimonismouth, MA 62426-6906', '903-345-3252 x646', '1-527-786-8111', 'Eight', '9', '198760164', 'tgl-92', 'B', 'Morning', NULL, 76763, '30-06-87', '706065.37', 'Ideal Model High School, Dhaka', 0, 'Prof. Kraig Vandervort', '1-241-618-2699 x3262', 'Social Scientists', 'Miss Nova Block DDS', '1-219-264-8399 x55874', 'Public Relations Specialist', 'Ms. Alisa Fay', 'chandler11@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(99, 'Mireya', 'Zieme', 1, '07-01-11', 'B+', '74982 Emery Ranch Suite 258\nWilmamouth, RI 94757', '155 Daniela Freeway\nKyraport, DE 04502', '+1.640.762.3435', '(540) 474-5265', 'Two', '8864443', '7912901', 'tgl-256', 'B', 'Day', NULL, 97, '25-08-07', '486.08', 'Ideal Model High School, Dhaka', 1, 'Prof. Kamille Skiles Jr.', '283-912-6999 x61898', 'Locomotive Firer', 'Prof. Baron Crooks IV', '(450) 566-4759 x589', 'Human Resources Assistant', 'Kristopher Dicki PhD', 'sierra.rempel@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27'),
(100, 'Cleo', 'McDermott', 0, '29-09-71', 'O+', '22822 Flatley Lodge Suite 595\nLake Luciostad, AL 72986-6860', '638 Ike River Apt. 269\nLouveniaborough, VA 83702', '1-949-499-6257 x964', '+1-320-288-9459', 'Three', '7060361', '3846', 'tgl-375', 'A', 'Day', NULL, 768, '20-01-82', '19247.66', 'Ideal Model High School, Dhaka', 1, 'Madaline Leuschke', '(406) 446-0148', 'Vice President Of Marketing', 'Keaton Kemmer', '729-235-8428 x85253', 'Shoe and Leather Repairer', 'Dr. Dayne Terry', 'riley.stoltenberg@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://source.unsplash.com/random', '2019-12-20 04:37:27', '2019-12-20 04:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `students_attendances`
--

CREATE TABLE `students_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attend_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students_attendances`
--

INSERT INTO `students_attendances` (`id`, `student_id`, `teacher_id`, `class`, `section`, `shift`, `attend_date`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Play', 'B', 'Morning', '20-12-2019', 0, NULL, '2019-12-20 04:42:47', '2020-01-24 05:15:04'),
(2, 9, 1, 'Play', 'A', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(3, 13, 1, 'Play', 'B', 'Morning', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(4, 20, 1, 'Play', 'B', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(5, 22, 1, 'Play', 'B', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(6, 25, 1, 'Play', 'B', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(7, 42, 1, 'Play', 'B', 'Morning', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(8, 61, 1, 'Play', 'A', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(9, 62, 1, 'Play', 'B', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(10, 65, 1, 'Play', 'B', 'Morning', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(11, 74, 1, 'Play', 'B', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(12, 80, 1, 'Play', 'A', 'Day', '20-12-2019', 0, NULL, '2019-12-20 04:42:47', '2020-01-24 05:14:54'),
(13, 82, 1, 'Play', 'A', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(14, 84, 1, 'Play', 'A', 'Day', '20-12-2019', 1, NULL, '2019-12-20 04:42:47', '2019-12-20 04:42:47'),
(15, 85, 1, 'Play', 'B', 'Morning', '20-12-2019', 1, NULL, '2019-12-20 04:42:48', '2019-12-20 04:42:48'),
(16, 96, 1, 'Play', 'B', 'Morning', '20-12-2019', 1, NULL, '2019-12-20 04:42:48', '2019-12-20 04:42:48'),
(17, 6, 2, 'Play', 'B', 'Morning', '24-01-2020', 0, NULL, '2020-01-24 05:13:54', '2020-01-24 05:15:04'),
(18, 9, 2, 'Play', 'A', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:54', '2020-01-24 05:13:54'),
(19, 13, 2, 'Play', 'B', 'Morning', '24-01-2020', 1, NULL, '2020-01-24 05:13:54', '2020-01-24 05:13:54'),
(20, 20, 2, 'Play', 'B', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:54', '2020-01-24 05:13:54'),
(21, 22, 2, 'Play', 'B', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:54', '2020-01-24 05:13:54'),
(22, 25, 2, 'Play', 'B', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:55', '2020-01-24 05:13:55'),
(23, 42, 2, 'Play', 'B', 'Morning', '24-01-2020', 1, NULL, '2020-01-24 05:13:55', '2020-01-24 05:13:55'),
(24, 61, 2, 'Play', 'A', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:55', '2020-01-24 05:13:55'),
(25, 62, 2, 'Play', 'B', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:55', '2020-01-24 05:13:55'),
(26, 65, 2, 'Play', 'B', 'Morning', '24-01-2020', 1, NULL, '2020-01-24 05:13:55', '2020-01-24 05:13:55'),
(27, 74, 2, 'Play', 'B', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:55', '2020-01-24 05:13:55'),
(28, 80, 2, 'Play', 'A', 'Day', '24-01-2020', 0, NULL, '2020-01-24 05:13:55', '2020-01-24 05:14:54'),
(29, 82, 2, 'Play', 'A', 'Day', '24-01-2020', 0, NULL, '2020-01-24 05:13:56', '2020-01-24 05:13:56'),
(30, 84, 2, 'Play', 'A', 'Day', '24-01-2020', 1, NULL, '2020-01-24 05:13:56', '2020-01-24 05:13:56'),
(31, 85, 2, 'Play', 'B', 'Morning', '24-01-2020', 0, NULL, '2020-01-24 05:13:56', '2020-01-24 05:13:56'),
(32, 96, 2, 'Play', 'B', 'Morning', '24-01-2020', 1, NULL, '2020-01-24 05:13:56', '2020-01-24 05:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `students_payments`
--

CREATE TABLE `students_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `status` smallint(6) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `payment_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_by` bigint(20) UNSIGNED DEFAULT NULL,
  `authorized_by` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examination_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_name` smallint(6) NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` smallint(6) DEFAULT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` int(11) NOT NULL,
  `education_qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_salary` decimal(15,2) NOT NULL,
  `subject_speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_honorarium` decimal(15,2) DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `role`, `photo`, `email_verified_at`, `password`, `password_token`, `gender_name`, `date_of_birth`, `blood_group`, `marital_status`, `present_address`, `permanent_address`, `contact_number`, `contact_number2`, `designation`, `nid`, `education_qualification`, `joining_date`, `basic_salary`, `subject_speciality`, `others_honorarium`, `father_name`, `mother_name`, `emergency_number`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Rhianna', 'Halvorson', 'admin@gmail.com', 'admin', 'gallery/a85e46d0eda78ae97cfd2c3825fd8dd1.jpg', '2019-12-20 04:36:53', '$2y$10$r9ce52j4c/sjshVfP71U0.vNz0r7zn2rcQ.Uw18fV/730.QGshx4i', '', 0, '16-07-77', 'B+', 0, '686 Gerlach Spring\nNew Jazmyn, TX 36514', '348 Gerhold Isle\nLake Anderson, AZ 18129', '(850) 216-0902', '378.902.9496 x51545', 'Peon', 23325, 'Ut quis perspiciatis dolor dolore aut dolores. Explicabo at voluptas facere eum. Eum maxime et ab consequatur modi explicabo. Aut sapiente porro nobis ut tempora autem qui.', '1989-06-18', '107013.67', 'English', '13.04', 'Ayden Beahan MD', 'Baron Bode', '(546) 461-9445 x2308', '2019-12-20 04:37:01', '2019-12-20 04:39:36', 'LUYnKxlbVy'),
(2, 'Maudie', 'Dibbert', 'melany19@example.com', 'super_admin', 'gallery/c59c75e88958760abedee8d2081c3d52.jpg', '2019-12-20 04:36:54', '$2y$10$umEx9LqeeBGlH4mwzXBp3ewyH7afta0klw8KKDXMBtDbwlAZYfdnu', '', 1, '08-07-73', 'AB+', 1, '8385 Micah Hollow Suite 510\nLake Derickmouth, ID 02754', '6042 Janiya Forges\nKingmouth, MS 34550', '(878) 775-6098', '902-465-7090 x392', 'Peon', 1, 'Optio cupiditate est dicta blanditiis porro praesentium eum. Voluptatem ab qui natus. Rerum dignissimos quia rerum deserunt nulla ut veritatis in. Veniam id nihil laborum cumque dicta temporibus.', '1993-07-11', '208.63', 'Bangla', '772.62', 'Mr. Adelbert Gusikowski', 'Shyann Ebert', '342.987.5236', '2019-12-20 04:37:01', '2020-01-09 16:27:57', 'YKJMQunaj0'),
(3, 'Madilyn', 'Stokes', 'grunolfsdottir@example.net', 'admin', 'gallery/7f3c9c7bdb01dea7e1292efd1a38471b.jpg', '2019-12-20 04:36:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, '09-01-13', 'O+', 1, '6212 Brian Union\nKrajcikside, RI 89376', '658 Terry Squares\nHellerport, SD 88763-2562', '212.418.7298 x2773', '465.326.3266 x753', 'Peon', 643478, 'Voluptas quia aliquid et et et ullam. Dolor animi et facilis tempora qui commodi eaque. Consectetur est reiciendis non error delectus totam aperiam.', '1984-11-30', '11026939.44', 'Bangla', '216628.73', 'Ms. Norma Funk V', 'Esteban Goodwin', '(759) 445-8977', '2019-12-20 04:37:01', '2019-12-20 04:37:01', 'TrLCKfXdkt'),
(4, 'Ewell', 'Schaefer', 'bailey.kameron@example.org', 'teacher', 'gallery/683985ded3c372dfdd68ef5ade876683.jpg', '2019-12-20 04:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, '12-12-82', 'AB+', 1, '31055 Koelpin Causeway\nPort Yesenia, TX 75996-4025', '126 Kiera Circles Suite 859\nEleanorafurt, IA 79235-2715', '525.538.2986', '(404) 618-5624', 'Teacher', 6020615, 'Qui labore voluptatem sit eveniet rem odio eum. Vitae magnam voluptas sed enim ut aliquid consequatur. Possimus consequatur eum occaecati.', '2005-07-09', '145232.80', 'English', '3159.17', 'Melisa Runolfsdottir', 'Brendon Brakus', '1-902-864-9996', '2019-12-20 04:37:01', '2019-12-20 04:37:01', '3qTMNCVSYR'),
(5, 'Wilmer', 'Altenwerth', 'andy.nitzsche@example.org', 'super_admin', 'gallery/6ab3ff20273c8f7ddf4b231102648c30.jpg', '2019-12-20 04:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, '10-09-95', 'AB+', 1, '972 McLaughlin Haven\nWehnerland, OK 41352', '6284 Gerlach Trafficway\nPort Miracleview, NC 64012-5437', '1-965-834-3866 x726', '+1-841-626-0651', 'Head master', 1, 'Odit quia deleniti odio voluptate qui. Unde repudiandae consequatur velit illo ut. Neque quaerat fuga et non corrupti aspernatur eius.', '2011-02-06', '26.70', 'Bangla', '3.04', 'Sydney Effertz', 'Carrie Schamberger', '1-316-717-9605', '2019-12-20 04:37:01', '2019-12-20 04:37:01', 'zuvI6t6mOS'),
(6, 'Stan', 'O\'Keefe', 'jhill@example.org', 'admin', 'gallery/242ca4630285ec416312044e6d6b7102.jpg', '2019-12-20 04:36:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, '04-09-85', 'O+', 1, '170 Greenholt Key Apt. 800\nMaddisonview, WA 41424', '25992 Amani Loop\nSouth Heavenview, IN 85371-8915', '+1 (768) 229-5457', '815.852.8215 x788', 'Peon', 5, 'Voluptatum magni itaque reprehenderit eius aut enim rerum. Maiores modi quos iste incidunt ipsam quisquam. Dignissimos eius voluptatem necessitatibus eum. Sed ad necessitatibus excepturi eum veniam.', '1980-11-10', '68.25', 'Maths', '2.00', 'Mya Kerluke MD', 'Mrs. Adelle Legros', '(962) 278-6869', '2019-12-20 04:37:01', '2019-12-20 04:37:01', 'xOpudqY86v'),
(7, 'Adrianna', 'Wolf', 'carter.hansen@example.com', 'staff', 'gallery/39d0ca01cf33b5dd7b6757b970fd9f21.jpg', '2019-12-20 04:36:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, '15-12-92', 'B+', 0, '9853 Howell Falls\nLake Elna, KS 03535', '7497 Jayne Fords Suite 272\nNorth Else, UT 91657', '1-441-922-2460 x934', '+1.764.257.0426', 'Peon', 572589736, 'Corrupti quos corrupti quia saepe nobis. Deleniti quo dignissimos nesciunt sit sapiente. Deserunt illum saepe mollitia ut eveniet sed. Omnis et accusamus vero rerum et.', '1971-02-22', '132.34', 'English', '3.08', 'Zachary Grimes', 'Mrs. Karelle Lakin II', '520.238.9194', '2019-12-20 04:37:01', '2019-12-20 04:37:01', 'E8cxtvT0rz'),
(8, 'Karelle', 'Bradtke', 'oking@example.com', 'super_admin', 'gallery/468190ebebae1a0ce3af8937c26c5502.jpg', '2019-12-20 04:37:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, '03-11-98', 'A+', 0, '5309 Sydni Curve\nSchulistport, IA 20229', '37658 Rita Park\nLake Dominic, MI 26037-7486', '1-921-416-8628 x22617', '434-885-8148 x36906', 'Head master', 722, 'Ad facere aperiam quis laudantium id et voluptatibus officiis. Dolor itaque rerum doloribus est. Optio nisi dolores saepe.', '1991-03-31', '560238.71', 'Bangla', '227366.38', 'Hassie Feest', 'Keeley Hessel MD', '1-475-520-8610 x3267', '2019-12-20 04:37:01', '2019-12-20 04:37:01', 'oyzoglIBBB'),
(9, 'Keira', 'Kertzmann', 'ernest.kunze@example.net', 'staff', 'gallery/ed88836401512fa1d78635025fd37a13.jpg', '2019-12-20 04:37:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, '25-07-11', 'B+', 0, '719 Keara Turnpike\nLake Tommie, VT 52907', '1079 Noble Corner\nMurazikstad, AL 80131-7497', '+14652614600', '(572) 692-6150', 'Head master', 2534, 'Adipisci rem ut ut sint sint. Sint temporibus rerum est autem sequi illo. Autem assumenda sunt accusamus non excepturi nostrum.', '1997-02-19', '49977.83', 'Bangla', '2567197.11', 'Prof. Madyson Koepp III', 'Florence Lind MD', '903.360.4646', '2019-12-20 04:37:01', '2019-12-20 04:37:01', 'IrG5Qoatf8'),
(10, 'Alisha', 'Dicki', 'rebekah96@example.com', 'super_admin', 'gallery/a2c9dd1bbc7157337a442f7adc657b96.jpg', '2019-12-20 04:37:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, '19-08-12', 'B+', 0, '22957 Dach Cliffs Apt. 063\nPort Alisa, RI 86029-8787', '561 Roman Locks Suite 561\nMaybellborough, MD 92879-4467', '336-470-2191', '1-693-917-6646 x46803', 'Head master', 2735, 'Voluptates voluptatibus tenetur aspernatur cupiditate qui nobis consequatur. Dolore dignissimos et error rerum itaque eos. Necessitatibus voluptas velit excepturi provident.', '1985-11-21', '7520152.42', 'Bangla', '235.79', 'Gwendolyn Mayert', 'Braden Erdman', '(617) 733-0910 x065', '2019-12-20 04:37:01', '2019-12-20 04:37:01', 'XXW9Kfo6dV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes_subjects`
--
ALTER TABLE `classes_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creative_question`
--
ALTER TABLE `creative_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diaries`
--
ALTER TABLE `diaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diaries_student_id_foreign` (`student_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_attendances`
--
ALTER TABLE `employees_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_attendances_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employees_payments`
--
ALTER TABLE `employees_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_payments_employee_id_foreign` (`employee_id`),
  ADD KEY `employees_payments_payment_by_foreign` (`payment_by`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examinations_authorized_id_foreign` (`authorized_id`);

--
-- Indexes for table `examinations_guards`
--
ALTER TABLE `examinations_guards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinations_routines`
--
ALTER TABLE `examinations_routines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examinations_routines_exam_term_name_id_foreign` (`exam_term_name_id`),
  ADD KEY `examinations_routines_examinations_guards_id_foreign` (`examinations_guards_id`);

--
-- Indexes for table `examination_term`
--
ALTER TABLE `examination_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_student_id_foreign` (`student_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objective_questions`
--
ALTER TABLE `objective_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objective_question_options`
--
ALTER TABLE `objective_question_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objective_question_options_objective_question_id_foreign` (`objective_question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_contact_number_unique` (`contact_number`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `students_attendances`
--
ALTER TABLE `students_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_attendances_student_id_foreign` (`student_id`),
  ADD KEY `students_attendances_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `students_payments`
--
ALTER TABLE `students_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_payments_student_id_foreign` (`student_id`),
  ADD KEY `students_payments_payment_by_foreign` (`payment_by`),
  ADD KEY `students_payments_authorized_by_foreign` (`authorized_by`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_number_unique` (`contact_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes_subjects`
--
ALTER TABLE `classes_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creative_question`
--
ALTER TABLE `creative_question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diaries`
--
ALTER TABLE `diaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees_attendances`
--
ALTER TABLE `employees_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees_payments`
--
ALTER TABLE `employees_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinations_guards`
--
ALTER TABLE `examinations_guards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinations_routines`
--
ALTER TABLE `examinations_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examination_term`
--
ALTER TABLE `examination_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objective_questions`
--
ALTER TABLE `objective_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objective_question_options`
--
ALTER TABLE `objective_question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `students_attendances`
--
ALTER TABLE `students_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `students_payments`
--
ALTER TABLE `students_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diaries`
--
ALTER TABLE `diaries`
  ADD CONSTRAINT `diaries_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees_attendances`
--
ALTER TABLE `employees_attendances`
  ADD CONSTRAINT `employees_attendances_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees_payments`
--
ALTER TABLE `employees_payments`
  ADD CONSTRAINT `employees_payments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employees_payments_payment_by_foreign` FOREIGN KEY (`payment_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `examinations`
--
ALTER TABLE `examinations`
  ADD CONSTRAINT `examinations_authorized_id_foreign` FOREIGN KEY (`authorized_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `examinations_routines`
--
ALTER TABLE `examinations_routines`
  ADD CONSTRAINT `examinations_routines_exam_term_name_id_foreign` FOREIGN KEY (`exam_term_name_id`) REFERENCES `examination_term` (`id`),
  ADD CONSTRAINT `examinations_routines_examinations_guards_id_foreign` FOREIGN KEY (`examinations_guards_id`) REFERENCES `examinations_guards` (`id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `objective_question_options`
--
ALTER TABLE `objective_question_options`
  ADD CONSTRAINT `objective_question_options_objective_question_id_foreign` FOREIGN KEY (`objective_question_id`) REFERENCES `objective_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students_attendances`
--
ALTER TABLE `students_attendances`
  ADD CONSTRAINT `students_attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_attendances_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `students_payments`
--
ALTER TABLE `students_payments`
  ADD CONSTRAINT `students_payments_authorized_by_foreign` FOREIGN KEY (`authorized_by`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `students_payments_payment_by_foreign` FOREIGN KEY (`payment_by`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `students_payments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
