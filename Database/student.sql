-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 09:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `infoID` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `Pn` varchar(255) NOT NULL,
  `10_ev1_c1` int(11) NOT NULL,
  `20_c1` int(11) NOT NULL,
  `10_ev2_c1` int(11) NOT NULL,
  `60_c1` int(11) NOT NULL,
  `100_final_c1` int(11) NOT NULL,
  `10_ev1_c2` int(11) NOT NULL,
  `20_c2` int(11) NOT NULL,
  `10_ev2_c2` int(11) NOT NULL,
  `60_c2` int(11) NOT NULL,
  `100_final_c2` int(11) NOT NULL,
  `100_c1_c2_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `infoID`, `password`, `class`, `Pn`, `10_ev1_c1`, `20_c1`, `10_ev2_c1`, `60_c1`, `100_final_c1`, `10_ev1_c2`, `20_c2`, `10_ev2_c2`, `60_c2`, `100_final_c2`, `100_c1_c2_final`) VALUES
(1, 'Mohamad Kamaran Haider', '12312', '453534323', '7A', '', 10, 20, 10, 60, 100, 10, 20, 10, 60, 100, 100),
(2, 'Ahmed Kamaran Hiader', '13324886', '7646590534', '7B', '07501986754', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'hahahaha', '333', '4444', '7A', '90909090', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'sherko joma hasasn', '13128685', '4216799308', '7B', '07501987056', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'sazan nuradin hama', '26015173', '1769508525', '8a', '07501986754', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'hasan ali usama', '63681635', '5897138268', '8a', '07501229909', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
