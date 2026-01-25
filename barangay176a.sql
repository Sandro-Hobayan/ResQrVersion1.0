-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2026 at 02:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay176a`
--

-- --------------------------------------------------------

--
-- Table structure for table `guidelines`
--

CREATE TABLE `guidelines` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `icon_class` varchar(50) DEFAULT 'fas fa-info-circle',
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guidelines`
--

INSERT INTO `guidelines` (`id`, `title`, `description`, `icon_class`, `slug`) VALUES
(1, 'Earthquake Safety', 'What to do before, during, and after an earthquake.', 'fas fa-house-damage', 'earthquake'),
(2, 'Fire Emergency', 'Steps to take in case of a fire.', 'fas fa-fire-extinguisher', 'fire'),
(3, 'Medical Emergencies', 'How to respond to common medical situations.', 'fas fa-first-aid', 'medical');

-- --------------------------------------------------------

--
-- Table structure for table `hotlines`
--

CREATE TABLE `hotlines` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `icon_class` varchar(50) DEFAULT 'fas fa-phone',
  `color` varchar(20) DEFAULT 'red'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotlines`
--

INSERT INTO `hotlines` (`id`, `name`, `number`, `icon_class`, `color`) VALUES
(1, 'Baranagay Hotline', '123-4567', 'fas fa-phone-volume', 'red'),
(2, 'Police Station', '911', 'fas fa-shield-alt', 'blue'),
(3, 'Fire Department', '123-7890', 'fas fa-fire', 'orange'),
(4, 'Medical Assistance', '987-6543', 'fas fa-ambulance', 'green'),
(5, 'DRRMO / NDRRMC', '112-2233', 'fas fa-exclamation-triangle', 'purple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guidelines`
--
ALTER TABLE `guidelines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `hotlines`
--
ALTER TABLE `hotlines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guidelines`
--
ALTER TABLE `guidelines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotlines`
--
ALTER TABLE `hotlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
