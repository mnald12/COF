-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 03:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cof`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `category`) VALUES
(1, 'Objectives are specific, attainable, measurable, and relevant to development needs.\r\n', 'Teaching Competence'),
(2, 'Demonstrates progressive knowledge of contents of lesson materials.', 'Teaching Competence'),
(3, 'Organizes instructions, taking into accounts the differences among learners in their capabilities, learning style and rates of learning', 'Teaching Competence'),
(4, 'Plans and uses varied techniques and student centered activities to present the lesson.', 'Teaching Competence'),
(5, 'Presents the lesson in a logical, organized and meaningful sequence.', 'Teaching Competence'),
(6, 'Student involvement and constructive interaction are apparent throughout the period.', 'Teaching Competence'),
(7, 'Uses assessment techniques to monitor student progress on a continuing basis.', 'Teaching Competence'),
(8, 'Manages time effectively.', 'Teaching Competence'),
(9, 'Uses teaching aids effectively to supplement explanations to maintain students interest and participation.', 'Teaching Competence'),
(10, 'Uses humor to promote a relaxed atmosphere.', 'Teaching Competence'),
(11, 'Makes the student develop skills and conceptualize ideas through skilled questioning and by giving clear, concise, direct and intelligent questions.', 'Teaching Competence'),
(12, 'Provides encouragement and proper motivation.', 'Teaching Competence'),
(13, 'Gives due credit and recognition to students merit', 'Teaching Competence'),
(14, 'Projects genuine concern for and interest in each students feelings and needs.', 'Personality'),
(15, 'Displays humility and maturity in dealing with ones shortcomings.', 'Personality'),
(16, 'Shows fairness and impartiality in dealing with students.', 'Personality'),
(17, 'Dresses neatly and appropriately.', 'Personality'),
(18, 'Develops rapport with students.', 'Personality'),
(19, 'Projects self-confidence in acting as a catalyst during critical classroom situations.', 'Personality'),
(20, 'Controls mannerisms, which can distract the class.', 'Personality');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(255) NOT NULL,
  `instructor` text NOT NULL,
  `subject` text NOT NULL,
  `date` text NOT NULL,
  `department` text NOT NULL,
  `comprate` longtext NOT NULL,
  `perrate` longtext NOT NULL,
  `comment` text NOT NULL,
  `total` int(255) NOT NULL,
  `score` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `instructor`, `subject`, `date`, `department`, `comprate`, `perrate`, `comment`, `total`, `score`) VALUES
(4, 'Noime domingo', 'math', '2024-10-14', 'IT', 'Objectives are specific, attainable, measurable, and relevant to development needs.\n~2|Demonstrates progressive knowledge of contents of lesson materials.~4|Organizes instructions, taking into accounts the differences among learners in their capabilities, learning style and rates of learning~3|Plans and uses varied techniques and student centered activities to present the lesson.~1|Presents the lesson in a logical, organized and meaningful sequence.~4|Student involvement and constructive interaction are apparent throughout the period.~2|Uses assessment techniques to monitor student progress on a continuing basis.~5|Manages time effectively.~3|Uses teaching aids effectively to supplement explanations to maintain students interest and participation.~2|Uses humor to promote a relaxed atmosphere.~5|Makes the student develop skills and conceptualize ideas through skilled questioning and by giving clear, concise, direct and intelligent questions.~2|Provides encouragement and proper motivation.~4|Gives due credit and recognition to students merit~3', 'Projects genuine concern for and interest in each students feelings and needs.~2|Displays humility and maturity in dealing with ones shortcomings.~4|Shows fairness and impartiality in dealing with students.~3|Dresses neatly and appropriately.~1|Develops rapport with students.~4|Projects self-confidence in acting as a catalyst during critical classroom situations.~5|Controls mannerisms, which can distract the class.~2', 'Kabuot buot na linintian', 61, 1),
(5, 'Edwardo Reyes', 'Programming', '2024-10-14', 'IT', 'Objectives are specific, attainable, measurable, and relevant to development needs.\r\n~5|Demonstrates progressive knowledge of contents of lesson materials.~5|Organizes instructions, taking into accounts the differences among learners in their capabilities, learning style and rates of learning~4|Plans and uses varied techniques and student centered activities to present the lesson.~3|Presents the lesson in a logical, organized and meaningful sequence.~4|Student involvement and constructive interaction are apparent throughout the period.~2|Uses assessment techniques to monitor student progress on a continuing basis.~4|Manages time effectively.~1|Uses teaching aids effectively to supplement explanations to maintain students interest and participation.~3|Uses humor to promote a relaxed atmosphere.~5|Makes the student develop skills and conceptualize ideas through skilled questioning and by giving clear, concise, direct and intelligent questions.~5|Provides encouragement and proper motivation.~5|Gives due credit and recognition to students merit~4', 'Projects genuine concern for and interest in each students feelings and needs.~3|Displays humility and maturity in dealing with ones shortcomings.~4|Shows fairness and impartiality in dealing with students.~4|Dresses neatly and appropriately.~5|Develops rapport with students.~5|Projects self-confidence in acting as a catalyst during critical classroom situations.~4|Controls mannerisms, which can distract the class.~5', 'qweqwr rqwerq wrqw rqwer qwr qreqw r qwe qwe qwr qwer qwe qwerqw rqwr ', 80, 1),
(6, 'Mariano garapon', 'recess', '2024-10-14', 'bayawasan', 'Objectives are specific, attainable, measurable, and relevant to development needs.\r\n~3|Demonstrates progressive knowledge of contents of lesson materials.~4|Organizes instructions, taking into accounts the differences among learners in their capabilities, learning style and rates of learning~2|Plans and uses varied techniques and student centered activities to present the lesson.~5|Presents the lesson in a logical, organized and meaningful sequence.~5|Student involvement and constructive interaction are apparent throughout the period.~4|Uses assessment techniques to monitor student progress on a continuing basis.~3|Manages time effectively.~4|Uses teaching aids effectively to supplement explanations to maintain students interest and participation.~3|Uses humor to promote a relaxed atmosphere.~1|Makes the student develop skills and conceptualize ideas through skilled questioning and by giving clear, concise, direct and intelligent questions.~4|Provides encouragement and proper motivation.~3|Gives due credit and recognition to students merit~5', 'Projects genuine concern for and interest in each students feelings and needs.~5|Displays humility and maturity in dealing with ones shortcomings.~4|Shows fairness and impartiality in dealing with students.~4|Dresses neatly and appropriately.~5|Develops rapport with students.~3|Projects self-confidence in acting as a catalyst during critical classroom situations.~4|Controls mannerisms, which can distract the class.~5', 'asdsad zsdfasd asdfasfa asdfasdas', 76, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
