-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 10:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `honours_application`
--

CREATE TABLE `honours_application` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_roll` varchar(255) NOT NULL,
  `year_date` varchar(255) NOT NULL,
  `year_th` varchar(255) NOT NULL,
  `semester_th` varchar(255) NOT NULL,
  `semester_month` varchar(255) NOT NULL,
  `courses` varchar(1020) NOT NULL,
  `date` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `improvement_application`
--

CREATE TABLE `improvement_application` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_roll` varchar(255) NOT NULL,
  `current_year_th` varchar(255) NOT NULL,
  `current_semester_th` varchar(255) NOT NULL,
  `courses` varchar(5119) NOT NULL,
  `date` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `private_notice`
--

CREATE TABLE `private_notice` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_roll` varchar(255) NOT NULL,
  `title` varchar(511) NOT NULL,
  `message` varchar(5119) NOT NULL,
  `date` int(10) NOT NULL,
  `is_read` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `public_notice`
--

CREATE TABLE `public_notice` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(511) NOT NULL,
  `message` varchar(5119) NOT NULL,
  `files` varchar(1023) NOT NULL,
  `date` int(10) NOT NULL,
  `is_published` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_roll` varchar(255) NOT NULL,
  `admission_year` int(4) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_f` varchar(255) NOT NULL,
  `name_m` varchar(255) NOT NULL,
  `name_g` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `birthdate` int(10) NOT NULL,
  `address_village` varchar(255) NOT NULL,
  `address_postoffice` varchar(255) NOT NULL,
  `address_upazilla` varchar(255) NOT NULL,
  `address_district` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `ssc_year` int(4) NOT NULL,
  `ssc_board` varchar(255) NOT NULL,
  `ssc_roll` varchar(255) NOT NULL,
  `ssc_grade` varchar(255) NOT NULL,
  `ssc_gpa` varchar(255) NOT NULL,
  `hsc_year` int(4) NOT NULL,
  `hsc_board` varchar(255) NOT NULL,
  `hsc_roll` varchar(255) NOT NULL,
  `hsc_grade` varchar(255) NOT NULL,
  `hsc_gpa` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `occuption_f` varchar(255) NOT NULL,
  `occuption_m` varchar(255) NOT NULL,
  `relation_g` varchar(255) NOT NULL,
  `mobile_g` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `institute_ssc` varchar(255) NOT NULL,
  `institute_hsc` varchar(255) NOT NULL,
  `present_house` varchar(255) NOT NULL,
  `present_road` varchar(255) NOT NULL,
  `present_area` varchar(255) NOT NULL,
  `present_city` varchar(255) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `dept_s` varchar(255) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `honours_application`
--
ALTER TABLE `honours_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_roll` (`admission_roll`);

--
-- Indexes for table `improvement_application`
--
ALTER TABLE `improvement_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_notice`
--
ALTER TABLE `private_notice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_roll` (`admission_roll`);

--
-- Indexes for table `public_notice`
--
ALTER TABLE `public_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_roll` (`admission_roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `honours_application`
--
ALTER TABLE `honours_application`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `improvement_application`
--
ALTER TABLE `improvement_application`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_notice`
--
ALTER TABLE `private_notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `public_notice`
--
ALTER TABLE `public_notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `honours_application`
--
ALTER TABLE `honours_application`
  ADD CONSTRAINT `honours_application_ibfk_1` FOREIGN KEY (`admission_roll`) REFERENCES `students` (`admission_roll`);

--
-- Constraints for table `private_notice`
--
ALTER TABLE `private_notice`
  ADD CONSTRAINT `private_notice_ibfk_1` FOREIGN KEY (`admission_roll`) REFERENCES `students` (`admission_roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
