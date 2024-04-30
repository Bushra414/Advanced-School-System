-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 11:26 AM
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
-- Database: `advanced-school-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `SID` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `phone_number` int(11) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `parents_phone_number` int(11) NOT NULL,
  `class` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`SID`, `fullname`, `date_of_birth`, `gender`, `phone_number`, `father_name`, `mother_name`, `parents_phone_number`, `class`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', '2000-01-01', 'male', 901234567, 'John Doe Sr.', 'Jane Doe', 929876543, 'A1', NULL, NULL),
(2, 'Jane Smith', '1999-05-15', 'female', 969876543, 'Tom Smith', 'Emily Smith', 121234567, 'A2', NULL, NULL),
(3, 'Michael Johnson', '2001-08-20', 'male', 965556667, 'David Johnson', 'Sarah Johnson', 123332221, 'A3', NULL, NULL),
(4, 'Emily Brown', '1998-12-05', 'female', 121112223, 'Chris Brown', 'Olivia Brown', 904445556, 'A1', NULL, NULL),
(5, 'William Lee', '2002-03-10', 'male', 967778889, 'James Lee', 'Lily Lee', 126667778, 'A2', NULL, NULL),
(6, 'Sophia Garcia', '2003-07-25', 'female', 969998887, 'Daniel Garcia', 'Maria Garcia', 122223334, 'A1', NULL, NULL),
(7, 'Alexander Martinez', '1997-09-30', 'male', 123334445, 'Jose Martinez', 'Isabella Martinez', 908889990, 'A2', NULL, NULL),
(8, 'Olivia Nguyen', '2004-02-14', 'female', 126665554, 'Michael Nguyen', 'Sophie Nguyen', 901110002, 'A3', NULL, NULL),
(9, 'Ethan Kim', '2000-06-18', 'male', 122223334, 'David Kim', 'Grace Kim', 905556667, 'A1', NULL, NULL),
(10, 'Ava Patel', '1999-11-22', 'female', 908889990, 'Aiden Patel', 'Zoe Patel', 124443332, 'A2', NULL, NULL),
(11, 'Mason Brown', '2001-04-30', 'male', 124443332, 'Ryan Brown', 'Emma Brown', 909990001, 'A3', NULL, NULL),
(12, 'Sofia Rodriguez', '2002-08-15', 'female', 126667778, 'Carlos Rodriguez', 'Laura Rodriguez', 902221110, 'A1', NULL, NULL),
(13, 'Logan Wilson', '1998-10-12', 'male', 125554443, 'Kevin Wilson', 'Megan Wilson', 907778889, 'A2', NULL, NULL),
(14, 'Chloe Garcia', '2003-01-05', 'female', 122221110, 'Juan Garcia', 'Elena Garcia', 908887776, 'A1', NULL, NULL),
(15, 'Lucas Smith', '1999-05-20', 'male', 909990001, 'Matthew Smith', 'Natalie Smith', 123332221, 'A2', NULL, NULL),
(16, 'Lily Nguyen', '2000-07-28', 'female', 124445556, 'Andrew Nguyen', 'Jessica Nguyen', 906667778, 'A1', NULL, NULL),
(17, 'Henry Kim', '1997-11-15', 'male', 908887776, 'Peter Kim', 'Hannah Kim', 121112223, 'A2', NULL, NULL),
(18, 'Zoe Patel', '2004-03-01', 'female', 123332221, 'Alex Patel', 'Sophia Patel', 907778889, 'A3', NULL, NULL),
(19, 'Elijah Martinez', '2000-06-25', 'male', 126667778, 'Victor Martinez', 'Gabriella Martinez', 902223334, 'A1', NULL, NULL),
(20, 'Mia Brown', '1999-12-02', 'female', 121110002, 'Dylan Brown', 'Avery Brown', 905556667, 'A2', NULL, NULL),
(21, 'Aiden Lee', '2001-05-01', 'male', 908889990, 'Benjamin Lee', 'Victoria Lee', 124443332, 'A3', NULL, NULL),
(22, 'Nora Garcia', '2002-08-20', 'female', 124443332, 'Antonio Garcia', 'Carmen Garcia', 909990001, 'A1', NULL, NULL),
(23, 'Eli Wilson', '1998-10-18', 'male', 909998887, 'Timothy Wilson', 'Rebecca Wilson', 122221110, 'A2', NULL, NULL),
(24, 'Grace Smith', '2003-01-10', 'female', 125556667, 'Nicholas Smith', 'Madeline Smith', 908887776, 'A1', NULL, NULL),
(25, 'Owen Nguyen', '1999-05-25', 'male', 967778889, 'Jonathan Nguyen', 'Alexis Nguyen', 123332221, 'A2', NULL, NULL),
(26, 'Hannah Kim', '2000-08-28', 'female', 121112223, 'Christopher Kim', 'Bella Kim', 906667778, 'A1', NULL, NULL),
(27, 'David Patel', '1997-11-15', 'male', 907776665, 'Samuel Patel', 'Luna Patel', 121112223, 'A2', NULL, NULL),
(28, 'Sophie Martinez', '2004-03-01', 'female', 123334445, 'Hector Martinez', 'Eva Martinez', 907778889, 'A3', NULL, NULL),
(29, 'Evan Brown', '2000-06-25', 'male', 126665554, 'Patrick Brown', 'Samantha Brown', 902223334, 'A1', NULL, NULL),
(30, 'Natalie Lee', '1999-12-02', 'female', 908889990, 'Jeremy Lee', 'Diana Lee', 124443332, 'A2', NULL, NULL),
(31, 'Leo Garcia', '2001-05-01', 'male', 125556667, 'Albert Garcia', 'Rosa Garcia', 909990001, 'A3', NULL, NULL),
(32, 'Maya Wilson', '2002-08-20', 'female', 122223334, 'Victor Wilson', 'Catherine Wilson', 902221110, 'A1', NULL, NULL),
(33, 'Eliot Smith', '1998-10-18', 'male', 908887776, 'George Smith', 'Caroline Smith', 127778889, 'A2', NULL, NULL),
(34, 'Aria Nguyen', '2003-01-10', 'female', 126667778, 'Vincent Nguyen', 'Julia Nguyen', 908887776, 'A1', NULL, NULL),
(35, 'Ethan Kim', '1999-05-25', 'male', 121110002, 'Daniel Kim', 'Lillian Kim', 905556667, 'A2', NULL, NULL),
(36, 'Ava Patel', '2000-08-28', 'female', 909998887, 'Edward Patel', 'Molly Patel', 126667778, 'A1', NULL, NULL),
(37, 'Mason Brown', '1997-11-15', 'male', 124445556, 'Robert Brown', 'Grace Brown', 901112223, 'A2', NULL, NULL),
(38, 'Sofia Martinez', '2004-03-01', 'female', 907776665, 'Javier Martinez', 'Clara Martinez', 127778889, 'A3', NULL, NULL),
(39, 'Logan Lee', '2000-06-25', 'male', 126665554, 'Derek Lee', 'Tiffany Lee', 902223334, 'A1', NULL, NULL),
(40, 'Chloe Garcia', '1999-12-02', 'female', 908889990, 'Oscar Garcia', 'Angela Garcia', 124443332, 'A2', NULL, NULL),
(41, 'Lucas Smith', '2001-05-01', 'male', 124443332, 'Philip Smith', 'Sara Smith', 909990001, 'A3', NULL, NULL),
(42, 'Lily Nguyen', '2002-08-20', 'female', 126667778, 'Ethan Nguyen', 'Hannah Nguyen', 902221110, 'A1', NULL, NULL),
(43, 'Henry Kim', '1998-10-18', 'male', 909998887, 'Frank Kim', 'Violet Kim', 127778889, 'A2', NULL, NULL),
(44, 'Zoe Patel', '2003-01-10', 'female', 125556667, 'Walter Patel', 'Eleanor Patel', 908887776, 'A1', NULL, NULL),
(45, 'Elijah Martinez', '1999-05-25', 'male', 907778889, 'Gavin Martinez', 'Nora Martinez', 123332221, 'A2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `SID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
