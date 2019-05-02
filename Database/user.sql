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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `infoID` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `fn` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ln` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pn` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `infoID`, `password`, `role`, `fn`, `ln`, `Pn`, `class`) VALUES
(1, '1111', '1111', 0, 'Mohamad', 'Kamaran', '07501987094', '0'),
(3, '4', '123749238472', 1, 'karzan ', 'hama', '07501986754', '0'),
(4, '4', '5884776969', 1, 'karwan ', 'hamadamin', '07501786312`', '0'),
(16, '8', '123749238472', 1, 'raman ', 'hama', '07501986754', '0'),
(12, '9', '123749238472', 1, 'karzan  ', 'hama', '07501986754', '0'),
(13, '3', '123749238472', 1, 'karzan  ', 'hama', '07501986754', '0'),
(14, '4', '123749238472', 1, 'karzan  ', 'hama', '07501986754', '0'),
(15, '777', '123749238472', 1, 'ee', 'ee', '07501986754', '0'),
(17, '3999', '5884776969', 1, 'Mohamad', 'Xaylany', '07501229909', '0'),
(18, '4', '123749238472', 1, 'raman ', 'hama', '07501986754', '0'),
(19, '9', '123749238472', 1, 'raman ', 'hama', '07501986754', '0'),
(20, '9', '123749238472', 1, 'karzan   ', 'hama', '07501986754', '0'),
(21, '11531887', '3206994800', 1, 'haider', 'karar', '07501986754', '0'),
(22, '45615371', '2565572988', 1, 'koko', 'kaka', '07501229909', '0'),
(23, '45615371', '2565572988', 1, 'koko', 'kaka', '07501229909', '0'),
(24, '8', '1462634359', 1, 'rebwar', 'Xaylany', '07501229909', '8A'),
(25, '60537383', '8932728041', 1, 'tara', 'tara', '234234234', '9B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
