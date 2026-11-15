-- =====================================================================
-- SOLAR ENERGY MANAGEMENT SYSTEM - DATABASE SCHEMA & SEED DATA
-- Project: Solar Energy Web Portal & Admin Management Dashboard
-- Platform: PHP / Yii2 Framework / MySQL (phpMyAdmin Compatible)
-- Generated on: 10 October 2026
-- =====================================================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:30";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar_energy`
--
CREATE DATABASE IF NOT EXISTS `solar_energy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `solar_energy`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
-- Confidential administrative credentials for portal authority
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_key` varchar(64) DEFAULT NULL,
  `access_token` varchar(64) DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'admin',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_username` (`username`),
  UNIQUE KEY `idx_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
-- Note: Passwords are encrypted using bcrypt hashing for security
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password_hash`, `auth_key`, `access_token`, `role`, `status`, `created_at`) VALUES
(100, 'admin', 'admin@solarenergy.com', '$2y$13$gYAywKSkhfZDq9FLNdm7buKnvlRxDexf5xipSMAxQPDUxpaptmZJu', 'solaradmin100key', '100-token', 'SuperAdmin', 'active', '2026-10-09 10:00:00'),
(101, 'solarenergy.admin@gmail.com', 'solarenergy.admin@gmail.com', '$2y$13$gYAywKSkhfZDq9FLNdm7buKnvlRxDexf5xipSMAxQPDUxpaptmZJu', 'test101key', '101-token', 'Administrator', 'active', '2026-10-10 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
-- Stores direct customer consultation inquiries received from website
--

DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE `inquiries` (
  `id` varchar(32) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `topic` varchar(150) NOT NULL DEFAULT 'General Consultation',
  `message` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` varchar(50) NOT NULL,
  `reviewed_at` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT '127.0.0.1',
  PRIMARY KEY (`id`),
  KEY `idx_status` (`status`),
  KEY `idx_phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `phone`, `email`, `topic`, `message`, `status`, `created_at`, `reviewed_at`, `ip_address`) VALUES
('INQ-1001', 'Rajesh Sharma', '9876543210', 'rajesh.sharma@example.com', 'PM Surya Ghar Rooftop Solar', 'Looking for 3kW rooftop solar setup under PM Surya Ghar Yojana. Need subsidy calculation.', 'pending', '10 Oct 2026, 06:38 AM', NULL, '127.0.0.1'),
('INQ-1002', 'Samrit Kumar', '8260212181', 'samritkumarbhutia793@gmail.com', 'Rooftop Solar (PM Surya Ghar)', 'Suggestion required regarding budget and subsidy assistance for home solar.', 'approved', '10 Oct 2026, 08:43 AM', '10 Oct 2026, 09:00 AM', '::1'),
('INQ-1004', 'Vikramaditya Roy', '9876543211', 'vikram.roy@example.com', 'Solar Water Pump', 'Need quotation for 5HP agricultural solar pump setup under PM-KUSUM scheme.', 'rejected', '10 Oct 2026, 08:48 AM', '10 Oct 2026, 08:50 AM', '::1'),
('INQ-1005', 'Rahul Sharma', '9823417852', 'rahul.sharma@example.com', 'Solar Street Lighting', 'Enquiry for 20 units all-in-one solar streetlights for village community road.', 'pending', '10 Oct 2026, 08:55 AM', NULL, '::1'),
('INQ-1007', 'Samrit', '8638515671', 'sam@gmail.com', 'Rooftop Solar (PM Surya Ghar)', 'Looking for commercial rooftop solar consultation.', 'rejected', '10 Oct 2026, 09:19 AM', '10 Oct 2026, 10:27 AM', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `solutions_catalog`
-- Catalog of renewable energy solutions offered on the platform
--

DROP TABLE IF EXISTS `solutions_catalog`;
CREATE TABLE `solutions_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subsidy_scheme` varchar(150) DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions_catalog`
--

INSERT INTO `solutions_catalog` (`id`, `title`, `category`, `subsidy_scheme`, `description`, `status`) VALUES
(1, 'Residential Rooftop Solar', 'Rooftop', 'PM Surya Ghar Muft Bijli Yojana', 'Grid-tied rooftop solar systems for independent homes and housing societies with up to 78,000 subsidy.', 'active'),
(2, 'Commercial & Industrial Solar', 'C&I', 'Accelerated Depreciation', 'High-efficiency monocrystalline solar power plants for factories, hospitals, and educational institutions.', 'active'),
(3, 'Solar Water Pumping Systems', 'Agriculture', 'PM-KUSUM Component-B', 'High-discharge solar submersible pumps for off-grid farm irrigation and borewells.', 'active'),
(4, 'Solar Water Heating', 'Thermal', 'MNRE Subsidy Eligible', 'Evacuated Tube Collector (ETC) and Flat Plate Collector (FPC) solar geysers for domestic and hotel use.', 'active'),
(5, 'Solar Street Lighting', 'Public Infrastructure', 'Gram Panchayat / Smart City', 'Integrated and semi-integrated automatic dusk-to-dawn LED solar street lighting.', 'active');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
