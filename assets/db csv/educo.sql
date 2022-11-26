-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2022 at 04:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educo`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `name`, `email`, `password`, `mobile`, `location`, `role`) VALUES
(1, 'Chinmaya', 'ckpatel@abc.co', '12345', '9988776655', 'Hyderabad', 'Admin'),
(2, 'Pawan', 'psaroj@ntpc.co', '12345', '9988776655', 'hyderabad', 'Admin'),
(3, 'Kumar', 'kpatel@ntpc.co', '12345', '9988776655', 'Hyderabaad', 'Employee'),
(4, 'Rudr', 'rpawan@ntpc.co', '12345', '9988776655', 'Hyderabad', 'Employee'),
(5, 'Patel', 'patel@ntpc.co', '12345', '9988776655', 'Hyderabad', 'Employee'),
(6, 'Saroj', 'saroj@ntpc.co', '12345', '9988776655', 'hyderabad', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `course` varchar(30) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `course`, `course_name`, `link`, `details`, `thumbnail`) VALUES
(1, 'Router Configuration ', 'Basics of Cisco Packet Tracer', 'https://www.youtube.com/embed/frUQMHXhnvs', 'Youtube embedded video of Cisco Packet Tracer.', 'images/video1.png'),
(2, 'Network Configuration', 'CCNA', 'https://www.youtube.com/embed/xAgVo-fiBHI', 'Youtube embedded video of CCNA', 'images/video2.png'),
(3, 'Windows Server Administration', 'WIN 2019 SERVER Configuration', 'https://www.youtube.com/embed/1nxYJSV7-u8', 'Youtube embedded video of Windows Server Administration', 'images/video3.png'),
(4, 'Linux Server Administration', 'Linux Server Configuration', 'https://www.youtube.com/embed/WMy3OzvBWc0', 'Youtube embedded video of Linux Server Administration', 'images/video4.png'),
(5, 'AWS Cloud Computing', 'AWS Cloud Computing', 'https://www.youtube.com/embed/r4YIdn2eTm4', 'Youtube embedded video of AWS Cloud Computing', 'images/video5.png'),
(6, 'JAVA', 'Java Programming', 'https://www.youtube.com/embed/RRubcjpTkks', 'Youtube embedded video of Java Tutorial', 'images/video6.png'),
(7, 'MySQL', 'MySQL', 'https://www.youtube.com/embed/FAXhXI2Gxdc', 'Youtube embedded video of MySQL Tutorial', 'images/video7.png'),
(8, 'Python', 'Python Programming', 'https://www.youtube.com/embed/kqtD5dpn9C8', 'Youtube embedded video of Python Programming', 'images/video8.png'),
(9, 'Asp .NET', 'ASP .NET Programming', 'https://www.youtube.com/embed/fkdMdZmdBs4', 'Youtube embedded video of ASP .NET', 'images/video9.png'),
(10, 'Javascript', 'Javascript Programming', 'https://www.youtube.com/embed/W6NZfCO5SIk', 'Youtube embedded video of Javascript Programming', 'images/video10.png'),
(11, 'UI', 'HTML5, CSS3, Styling packages', 'https://www.youtube.com/embed/PlxWf493en4', 'Youtube embedded video of Web UI Development', 'images/video11.png'),
(12, 'PHP', 'PHP Programming', 'https://www.youtube.com/watch?v=ZdP0KM49IVk', 'Youtube embedded video of PHP Programming', 'images/video12.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
