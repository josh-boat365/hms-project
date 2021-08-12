-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 08:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `id` int(11) NOT NULL,
  `profile_photo` longblob NOT NULL,
  `specialty` text NOT NULL,
  `salary` decimal(65,0) NOT NULL,
  `experience` text NOT NULL,
  `approvals` text NOT NULL,
  `approval_time` date NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `profile_photo` longblob NOT NULL,
  `admin_name` text NOT NULL,
  `admin_id` varchar(18) NOT NULL,
  `admin_pass` varchar(225) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `account_id` varchar(18) NOT NULL,
  `doctor_type` varchar(18) NOT NULL,
  `issue` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `profile_photo` longblob NOT NULL,
  `specialty` text NOT NULL,
  `qualification` int(225) NOT NULL,
  `salary` int(225) NOT NULL,
  `department` text NOT NULL,
  `experience` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lab_technician`
--

CREATE TABLE `lab_technician` (
  `id` int(11) NOT NULL,
  `profile_photo` longblob NOT NULL,
  `specialty` text NOT NULL,
  `qualification` text NOT NULL,
  `experience` text NOT NULL,
  `salary` decimal(65,0) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nusre`
--

CREATE TABLE `nusre` (
  `id` int(11) NOT NULL,
  `profile_photo` longblob NOT NULL,
  `specialty` text NOT NULL,
  `qualification` text NOT NULL,
  `experience` text NOT NULL,
  `assigned_doctor` text NOT NULL,
  `status` text NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `profile_photo` longblob NOT NULL,
  `appointment_time` date NOT NULL DEFAULT current_timestamp(),
  `assigned_doctor` text NOT NULL,
  `diagnosis` text NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `prescription` text NOT NULL,
  `allergies` text NOT NULL,
  `blood_group` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL,
  `profile_photo` longblob NOT NULL,
  `specialty` text NOT NULL,
  `qualification` text NOT NULL,
  `experience` text NOT NULL,
  `department` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `age` int(4) NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `account_id` varchar(18) NOT NULL,
  `password` varchar(225) NOT NULL,
  `code` int(25) NOT NULL,
  `contact` text NOT NULL,
  `address` text DEFAULT NULL,
  `userType_id` int(3) DEFAULT NULL,
  `regDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updation_date` datetime DEFAULT current_timestamp(),
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `age`, `gender`, `email`, `account_id`, `password`, `code`, `contact`, `address`, `userType_id`, `regDate`, `updation_date`, `status`) VALUES
(1, 'Joshua Nyarko Boateng', 21, 'Male', 'joshua.boat19@gmail.com', 'PA135968422', 'patient@Test14', 0, '0550746180', 'Amasaman - Accra', 1, '2021-08-02 18:39:04', NULL, ''),
(4, 'Emmanuel Larbi', 22, 'Male', 'ekwabena57@gmail.com', '536', '$2y$10$geXGP7p1Sc0mq5607Im4ReSpDbLBNWR1nZ1ah8Lp9bv3GuqweYVdy', 0, '222', 'Gk-0678-0863', 1, '2021-08-12 17:14:01', '2021-08-12 17:14:01', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `userType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `userType`) VALUES
(1, 'Patient'),
(2, 'Doctor'),
(3, 'Nurse'),
(4, 'Receptionist'),
(5, 'Accountant'),
(6, 'Lab Technician');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_technician`
--
ALTER TABLE `lab_technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nusre`
--
ALTER TABLE `nusre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userType_id` (`userType_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_technician`
--
ALTER TABLE `lab_technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nusre`
--
ALTER TABLE `nusre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`userType_id`) REFERENCES `usertype` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
