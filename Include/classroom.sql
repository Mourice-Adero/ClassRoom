-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 04:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_pic`) VALUES
(0, 'Garey', 'Smith', 'gareysmith1@gmail.com', '$2y$10$UWeNONa2sI/2KAMqlokkwe5TMhCV.81q0MLn9KhdUzhSWiaPxJDja', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(15) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `course_introduction` text NOT NULL,
  `course_content` text NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `video_link` text NOT NULL,
  `instructor_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_title`, `course_description`, `course_introduction`, `course_content`, `file_path`, `image_path`, `course_image`, `video_link`, `instructor_id`) VALUES
(5, 'Wireless Mobile Computing', 'Wireless Mobile Computing', 'Wireless Mobile Computing', 'Wireless Mobile Computing', './../Course/uploads/pdfs/./../Course/uploads/pdfs/./../Course/uploads/pdfs/PDF-WirelessAndMobileComputing.pdf', './../Course/uploads/images/dm1.jpg', '', 'https://www.youtube.com/ewrwe', 1),
(6, 'Wireless Mobile Computing 2', 'Wireless Mobile Computing 2', 'Wireless Mobile Computing', 'Wireless Mobile Computing', './../Course/uploads/pdfs/./../Course/uploads/pdfs/PDF-WirelessAndMobileComputing.pdf', './../Course/uploads/images/dm1.jpg', '', 'https://www.youtube.com/ewrwe', 1),
(7, 'React Js', 'This is description', 'This is introduction', 'This is content', './../Course/uploads/pdfs/ReactJS-Guide.pdf', './../Course/uploads/images/react js.jpg', 'react js.jpg', 'https://www.youtube.com/watch?v=w7ejDZ8SWv8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_sections`
--

CREATE TABLE `course_sections` (
  `section_id` int(15) NOT NULL,
  `course_id` int(15) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Jane', 'Doe', 'janedoe@gmail.com', '$2y$10$1yvCFuEcMStOMvuzzaswhum297JGp1dCowOfkSCmKqbvG.Oa6D6JS'),
(2, 'Mark', 'Newman', 'marknewman@gmail.com', '$2y$10$StLPrLIbanb7UBfn8SgYm.mtmD9k7aU10ybyb.xPaOVjxJfU4mYDa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(4, 'John', 'Doe', 'johndoe@gmail.com', '$2y$10$E45TdKaeHyrjO1L7gr2GDu7S9N5wsspBEcoYZ0QoswRC3dCVnJ0u6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_sections`
--
ALTER TABLE `course_sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_sections`
--
ALTER TABLE `course_sections`
  MODIFY `section_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
