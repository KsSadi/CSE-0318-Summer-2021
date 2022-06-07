-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 12:31 PM
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
-- Database: `sub`
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

--
-- Dumping data for table `honours_application`
--

INSERT INTO `honours_application` (`id`, `admission_roll`, `year_date`, `year_th`, `semester_th`, `semester_month`, `courses`, `date`, `status`) VALUES
(37, 'UG02-47-18-020', '2021', '', '11 th', 'Summer', '[[\"CSE 0318	\",\"Software Engineering Lab	\",\"0.75\"],[\"CSE 0406	\",\"Computer Peripherals and Interfacing Lab	\",\"0.75\"],[\"CSE 0407	\",\"Artificial Intelligence	\",\"3.0\"],[\"CSE 0408	\",\"Artificial Intelligence Lab	\",\"0.75\"],[\"CSE 0409	\",\"Parallel Processing and Distributed System	\",\"3.0\"],[\"CSE 0419	\",\"Machine Learning	\",\"3.0\"],[\"CSE 0402	\",\"E-Commerce and Web Engineering Lab	\",\"0.75\"]]', 1632249135, 1),
(38, 'UG02-47-18-020', '2021', '', '11 th', 'Summer', '[[\"CS 123\",\"Computer Science\",\"3\"]]', 1632288961, 0),
(39, 'UG02-47-18-020', '2021', '', '11 th', 'Summer', '[[\"CS 123\",\"Computer Science\",\"4\"]]', 1632289058, 0),
(40, 'UG02-47-18-020', '2021', '', '11 th', 'Fall', '[[\"CSE- 401\",\"CSE\",\"3.0\"],[\"CSE-402\",\"CSE 2 \",\"0.75\"]]', 1632304599, 0);

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

--
-- Dumping data for table `public_notice`
--

INSERT INTO `public_notice` (`id`, `title`, `message`, `files`, `date`, `is_published`) VALUES
(7, 'Summer 2021 Final Exam Routine ', '&lt;p&gt;Summer 2021 Final Exam Routine&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Summer 2021 Final Exam Routine&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Summer 2021 Final Exam Routine&amp;nbsp;&lt;/p&gt;\r\n', '[]', 1631723865, 0),
(8, 'Spring 2021 Class Routine', '&lt;p&gt;Spring 2021 Class Routine&lt;/p&gt;\r\n\r\n&lt;p&gt;Spring 2021 Class Routine&lt;/p&gt;\r\n\r\n&lt;p&gt;Spring 2021 Class Routine&lt;/p&gt;\r\n\r\n&lt;p&gt;Spring 2021 Class Routine&lt;/p&gt;\r\n', '[]', 1631723906, 0);

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
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_roll`, `admission_year`, `name_en`, `name_f`, `name_m`, `name_g`, `mobile_no`, `birthdate`, `address_village`, `address_postoffice`, `address_upazilla`, `address_district`, `nationality`, `religion`, `ssc_year`, `ssc_board`, `ssc_roll`, `ssc_grade`, `ssc_gpa`, `hsc_year`, `hsc_board`, `hsc_roll`, `hsc_grade`, `hsc_gpa`, `password`, `picture`, `gender`, `blood`, `mail`, `occuption_f`, `occuption_m`, `relation_g`, `mobile_g`, `country`, `institute_ssc`, `institute_hsc`, `present_house`, `present_road`, `present_area`, `present_city`, `batch`, `dept_s`, `fb`, `github`, `linkedIn`) VALUES
(2, 'UG02-47-18-020', 2018, 'Khaled Saifullah Sadi', 'A. Hamid', 'Hasina Morshid', 'Abdul Hamid', '01741022832', 1546902000, 'Darirampur', 'Trishal', 'Trishal', 'Mymensingh', 'Bangladeshi', 'Islam', 2014, 'Dhaka', '151416', 'A+', '5.00', 2016, 'Dhaka', '121236', 'A+', '5.00', '1d0a89a06cbb1b4a968290d29f6e3041', 'assets/uploads/1632249873_DSC_0171.jpg', 'Male', 'A+', 'mdsadi4@gmail.com', 'Retired', 'House Wife', 'Father', 1731770772, 'BD', 'NAMHS', 'NDCM', '20', '03', 'Shukrabad', 'Dhaka', '47', 'CSE', 'facebook.com/mdsadi100', 'github.com/KsSadi', 'linkedin.com/KsSadi');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
