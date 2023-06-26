-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2023 at 08:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discSpSite`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `ID` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Balance` int(11) DEFAULT NULL,
  `PremiumCount` int(11) DEFAULT NULL,
  `RegistrationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Account`
--

INSERT INTO `Account` (`ID`, `username`, `email`, `password`, `Balance`, `PremiumCount`, `RegistrationDate`) VALUES
(1, 'admin', 'admin@gamedonati.com', '', 0, 365, '0000-00-00'),
(2, 'user1', 'user1@gamedonati.com', '', 100, 30, '0000-00-00'),
(3, 'user2', 'user2@gamedonati.com', '', 0, 1, '0000-00-00'),
(4, 'user3', 'user3@gamedonati.com', '', 0, 90, '0000-00-00'),
(5, 'user4', 'user4@gamedonati.com', '', 13333, 90, '0000-00-00'),
(6, 'user5', 'user5@gamedonati.com', '', 0, 0, '0000-00-00'),
(8, 'user7', 'user7@gamedonati.com', '', 0, 0, '0000-00-00'),
(9, 'user8', 'user8@gamedonati.com', '', 0, 30, '0000-00-00'),
(10, 'user9', 'user9@gamedonati.com', '', 0, 0, '0000-00-00'),
(17, '123', '123', '202cb962ac59075b964b07152d234b70', 75100, 0, '0000-00-00'),
(22, 'qwerty', 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', 21500, 506, '0000-00-00'),
(23, 'admin2', 'admin2@mail.su', '12345', 200, 30, '0000-00-00'),
(24, 'admin3', 'admin3@mail.su', '123456', 0, 0, '0000-00-00'),
(26, '123456', '123456', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `ID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `GoodID` int(255) NOT NULL,
  `Date` datetime NOT NULL,
  `cost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`ID`, `AccountID`, `GoodID`, `Date`, `cost`) VALUES
(39, 22, 6, '2023-05-09 10:05:19', 20),
(40, 22, 2, '2023-05-09 10:05:22', 50),
(41, 22, 11, '2023-05-09 10:05:25', 20),
(68, 17, 5, '2023-05-17 14:05:38', 90),
(69, 17, 6, '2023-05-17 14:05:39', 20);

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Discount_price` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Amount_coins` int(11) NOT NULL,
  `Amount_time` int(11) NOT NULL,
  `New` tinyint(1) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`ID`, `Name`, `Description`, `Price`, `Discount_price`, `Rating`, `Section`, `Amount_coins`, `Amount_time`, `New`, `img`) VALUES
(1, 'Gold Dragon (AWP)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. WEry powerfool and coolooked rifle skin is awaiting your possession.', 300, 0, 3, 'Skin', 0, 0, 1, 'img/slon.png'),
(2, 'Akihabara (AUG)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Anime fashion skin for your promlg imagination.', 100, 50, 2, 'Skin', 0, 0, 0, 'img/AUG.png'),
(3, 'Terminator-999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Already destroyed battlefield lies before it steps.', 300, 200, 3, 'Skin', 0, 0, 0, 'img/chel-wings.png'),
(4, 'Future Ninja', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hide and seek your enemies weAkSSpot in totally shadow.', 120, 0, 2, 'Skin', 0, 0, 1, 'img/chel-skin.png'),
(5, '10000 D-coins', '10000 D-coins on your balance.', 150, 90, 1, 'Coins', 10000, 0, 0, 'img/gold-large.png'),
(6, '2000 D-coins', '2000 D-coins on your balance.', 20, 0, 2, 'Coins', 2000, 0, 1, 'img/medium-gold.png'),
(7, '500 D-coins', '500 D-coins on your balance.', 8, 0, 1, 'Coins', 500, 0, 0, 'img/small-gold.png'),
(8, 'Dark Batman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Old but dark lord of flying rats.', 70, 0, 1, 'Skin', 0, 0, 0, 'img/batman-costume.png'),
(9, 'Premium 365', '365 days Premium status on your account.', 150, 0, 2, 'Premium', 0, 365, 0, 'img/365.png'),
(10, 'Premium 90', '90 days Premium status on your account.', 50, 0, 3, 'Premium', 0, 90, 0, 'img/90.png'),
(11, 'Premium 30', '30 days Premium status on your account.', 20, 0, 1, 'Premium', 0, 30, 0, 'img/30.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `orderproducts_ibfk_1` (`AccountID`),
  ADD KEY `ProductID` (`GoodID`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Account`
--
ALTER TABLE `Account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `Account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`GoodID`) REFERENCES `goods` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
