-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: Nov 23, 2021 at 04:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ie104.m12`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Blog_Id` int(11) NOT NULL,
  `Title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Name_Blog` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Write_Time` date NOT NULL,
  `Description_Blog` text COLLATE utf8_unicode_ci NOT NULL,
  `View` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `Booking_Form_Id` int(11) NOT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `CT_Tour_Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contect_Id` int(11) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Topic` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_blog`
--

CREATE TABLE `ct_blog` (
  `CT_Blog_Id` int(11) NOT NULL,
  `Blog_Id` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_hotel`
--

CREATE TABLE `ct_hotel` (
  `CT_Hotel_Id` int(11) NOT NULL,
  `Hotel_Id` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Conten_CS` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_tour`
--

CREATE TABLE `ct_tour` (
  `CT_Tour_id` int(11) NOT NULL,
  `Tour_Id` int(11) NOT NULL,
  `Tour_Highlight` text COLLATE utf8_unicode_ci NOT NULL,
  `Content_CS` text COLLATE utf8_unicode_ci NOT NULL,
  `Content_CT` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluate`
--

CREATE TABLE `evaluate` (
  `Evaluate_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `CT_Tour_Id` int(11) NOT NULL,
  `CT_Hotel_Id` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_Id` int(11) NOT NULL,
  `Name_Hotel` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Description_Hotel` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Description_Hotel`)),
  `img_hotel` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `Phong_Id` int(11) NOT NULL,
  `CT_Hotel_Id` int(11) NOT NULL,
  `Name_Phong` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Area` int(11) NOT NULL,
  `Facing` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `Tour_Id` int(11) NOT NULL,
  `Tour_Name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Departure` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Destination` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Tour_Time` date NOT NULL,
  `Description_Tour` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Img_Source` blob NOT NULL,
  `Tour_Start` date NOT NULL,
  `Tour_Finish` date NOT NULL,
  `Transport` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(11) NOT NULL,
  `Last_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `First_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_Id`);

--
-- Indexes for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`Booking_Form_Id`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `CT_Tour_Id` (`CT_Tour_Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contect_Id`);

--
-- Indexes for table `ct_blog`
--
ALTER TABLE `ct_blog`
  ADD PRIMARY KEY (`CT_Blog_Id`),
  ADD KEY `Blog_Id` (`Blog_Id`);

--
-- Indexes for table `ct_hotel`
--
ALTER TABLE `ct_hotel`
  ADD PRIMARY KEY (`CT_Hotel_Id`),
  ADD KEY `Hotel_Id` (`Hotel_Id`);

--
-- Indexes for table `ct_tour`
--
ALTER TABLE `ct_tour`
  ADD PRIMARY KEY (`CT_Tour_id`),
  ADD KEY `FK_CTTour_Tour` (`Tour_Id`);

--
-- Indexes for table `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`Evaluate_Id`),
  ADD KEY `CT_Tour_Id` (`CT_Tour_Id`),
  ADD KEY `CT_Hotel_Id` (`CT_Hotel_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_Id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`Phong_Id`),
  ADD KEY `CT_Hotel_Id` (`CT_Hotel_Id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`Tour_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `Booking_Form_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contect_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_blog`
--
ALTER TABLE `ct_blog`
  MODIFY `CT_Blog_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_hotel`
--
ALTER TABLE `ct_hotel`
  MODIFY `CT_Hotel_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_tour`
--
ALTER TABLE `ct_tour`
  MODIFY `CT_Tour_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluate`
--
ALTER TABLE `evaluate`
  MODIFY `Evaluate_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hotel_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `Phong_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `Tour_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD CONSTRAINT `booking_form_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`),
  ADD CONSTRAINT `booking_form_ibfk_2` FOREIGN KEY (`CT_Tour_Id`) REFERENCES `ct_tour` (`CT_Tour_id`);

--
-- Constraints for table `ct_blog`
--
ALTER TABLE `ct_blog`
  ADD CONSTRAINT `ct_blog_ibfk_1` FOREIGN KEY (`Blog_Id`) REFERENCES `blog` (`Blog_Id`);

--
-- Constraints for table `ct_hotel`
--
ALTER TABLE `ct_hotel`
  ADD CONSTRAINT `ct_hotel_ibfk_1` FOREIGN KEY (`Hotel_Id`) REFERENCES `hotel` (`Hotel_Id`);

--
-- Constraints for table `ct_tour`
--
ALTER TABLE `ct_tour`
  ADD CONSTRAINT `FK_CTTour_Tour` FOREIGN KEY (`Tour_Id`) REFERENCES `tour` (`Tour_Id`);

--
-- Constraints for table `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`CT_Tour_Id`) REFERENCES `ct_tour` (`CT_Tour_id`),
  ADD CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`CT_Hotel_Id`) REFERENCES `ct_hotel` (`CT_Hotel_Id`),
  ADD CONSTRAINT `evaluate_ibfk_3` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`CT_Hotel_Id`) REFERENCES `ct_hotel` (`CT_Hotel_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
