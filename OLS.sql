-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 03:40 PM
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
(5, 'Wireless Mobile Computing', 'Wireless Mobile Computing', 'Wireless Mobile Computing', 'Wireless Mobile Computing', './../Course/uploads/pdfs/PDF-WirelessAndMobileComputing.pdf', './../Course/uploads/images/dm1.jpg', '', 'https://www.youtube.com/ewrwe', 1),
(6, 'Wireless Mobile Computing 2', 'Wireless Mobile Computing 2', 'Wireless Mobile Computing', 'Wireless Mobile Computing', './../Course/uploads/pdfs/PDF-WirelessAndMobileComputing.pdf', './../Course/uploads/images/dm1.jpg', '', 'https://www.youtube.com/ewrwe', 1),
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
-- Table structure for table `enroll_students`
--

CREATE TABLE `enroll_students` (
  `id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `course_id` int(15) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `instructor_name` varchar(255) NOT NULL,
  `instructor_id` int(15) NOT NULL,
  `completed` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enroll_students`
--

INSERT INTO `enroll_students` (`id`, `student_id`, `course_id`, `course_name`, `instructor_name`, `instructor_id`, `completed`) VALUES
(21, 4, 5, 'Wireless Mobile Computing', 'Jane Doe', 0, 'No'),
(22, 4, 6, 'Wireless Mobile Computing 2', 'Jane Doe', 1, 'No'),
(23, 4, 7, 'React Js', 'Jane Doe', 1, 'Yes');

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
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(11) NOT NULL,
  `course_id` int(15) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `course_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 0, 'What is AI', '1', '2', '3', '4', '4'),
(2, 0, 'KNLN', 'WEQW1', '12', 'E12', 'dqw', '3'),
(3, 0, 'casa', 'dqq', 'dwq', 'kn', 'lnlk', '2'),
(4, 0, 'dqw', ';d;', 'nk', 'knn', 'ss', '2'),
(5, 0, 'dqw', ';d;', 'nk', 'knn', 'ss', '2'),
(6, 0, 'dq', 'dq', 'dd', 'dq', 'dwq', '3'),
(7, 0, 'DdD', 'Dda', 'SS', 'FEF', 'kooo', '3'),
(8, 0, 'DdD', 'Dda', 'SS', 'FEF', 'kooo', '3'),
(9, 0, 'oweofwh', 'oo', 'oojoo', 'oji', 'njnjnj', '2'),
(10, 0, 'oweofwh', 'oo', 'oojoo', 'oji', 'njnjnj', '2'),
(11, 0, 'oono', 'kk', 'nkn', 'kknk', 'knknk', '1'),
(12, 0, 'oono', 'kk', 'nkn', 'kknk', 'knknk', '1'),
(13, 0, 'oono', 'kk', 'nkn', 'kknk', 'knknk', '1'),
(14, 0, 'ojolll', ';;;;m', 'knkk', 'knk', '124edqw', '4'),
(15, 5, 'New question', ';;;;m', 'knkk', 'None of the above', '124edqw', '4'),
(16, 0, 'DdD', 'Dda', 'SS', 'FEF', 'kooo', '3'),
(17, 0, 'DdD', 'Dda', 'SS', 'FEF', 'kooo', '3'),
(18, 0, 'DdD', 'Dda', 'SS', 'FEF', 'kooo', '3'),
(20, 5, 'llm', 'pppp', '[oppom', 'kiooi', 'oioo', '2'),
(21, 5, 'llm', 'pppp', '[oppom', 'kiooi', 'oioo', '2'),
(22, 5, 'kmkmk', 'dasda', 'liiojoijo', 'kjnnk', 'jnjas', '2'),
(23, 0, 'java', 'jja', 'ldl', 'jioj', 'ljl', '3'),
(24, 5, 'React', 'react', 'no', 'tykk', 'njn', '1'),
(25, 5, 'What is wireless mobile Coo=mputing', 'Is a mobile service', 'Is wireless mobile communication', 'None', 'All', '2'),
(27, 6, 'Mobile 2', 'yes', 'no', 'none ', 'all', '1'),
(28, 6, 'What is wired BTS', 'BTS', 'Base Transceiver Station', 'bst', 'All', '4');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_results`
--

CREATE TABLE `quiz_results` (
  `quiz_id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `course_id` int(15) NOT NULL,
  `score` int(15) NOT NULL,
  `date` datetime(6) DEFAULT NULL,
  `percent_correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_results`
--

INSERT INTO `quiz_results` (`quiz_id`, `student_id`, `course_id`, `score`, `date`, `percent_correct`) VALUES
(1, 4, 5, 0, NULL, ''),
(2, 4, 5, 0, '2023-03-17 02:09:38.000000', ''),
(4, 4, 5, 0, '2023-03-17 02:10:37.000000', ''),
(5, 4, 5, 0, '2023-03-17 02:11:23.000000', '0'),
(6, 4, 5, 0, '2023-03-17 02:16:49.000000', '0'),
(7, 4, 5, 0, '2023-03-17 02:21:25.000000', '0'),
(8, 4, 5, 0, '2023-03-17 15:28:12.000000', '0'),
(9, 4, 5, 0, '2023-03-17 15:28:25.000000', '0'),
(10, 4, 5, 0, '2023-03-17 15:30:35.000000', '0'),
(11, 4, 5, 0, '2023-03-17 15:36:40.000000', '0');

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
(4, 'John', 'Doe', 'johndoe@gmail.com', '$2y$10$E45TdKaeHyrjO1L7gr2GDu7S9N5wsspBEcoYZ0QoswRC3dCVnJ0u6'),
(5, 'faith', 'matara', 'matara@gmail.com', '$2y$10$W.s1UZ4ScG6H6I.MJfzkReHW9lNUVwIxrBiAuLqt5wFXAtdo24tHG'),
(6, '!£$%', 'fddf', 'ma@gmail.com', '$2y$10$Ts8VcOJidOnOAx9VBO49AOk75k1.u8cm/IYW.P9zZQiaOigTxUzqq'),
(7, 'john', 'doe', 'mata@gmail.com', '$2y$10$Z6Tj4Zl0whappSfgH4WV0uL9s7ZvkzujwApFO7l6Derh5w6E1wmg6');

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
-- Indexes for table `enroll_students`
--
ALTER TABLE `enroll_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_results`
--
ALTER TABLE `quiz_results`
  ADD PRIMARY KEY (`quiz_id`);

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
-- AUTO_INCREMENT for table `enroll_students`
--
ALTER TABLE `enroll_students`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `quiz_results`
--
ALTER TABLE `quiz_results`
  MODIFY `quiz_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
