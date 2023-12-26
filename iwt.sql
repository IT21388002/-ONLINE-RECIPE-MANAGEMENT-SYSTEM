-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 12:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `C_ID` int(11) NOT NULL,
  `C_NAME` varchar(255) NOT NULL,
  `C_IMAGE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`C_ID`, `C_NAME`, `C_IMAGE`) VALUES
(1, 'Dinner', '1.jpg'),
(2, 'Lunch', '2.jpg'),
(3, 'Breakfast', '3.jpg'),
(4, 'Salad', '4.jpg'),
(5, 'Dessert', '5.jpg'),
(6, 'Snack', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `D_ID` int(11) NOT NULL,
  `D_USER` int(11) NOT NULL,
  `D_R_ID` int(11) NOT NULL,
  `D_PRICE` int(11) NOT NULL,
  `D_DATE` date NOT NULL,
  `D_TIME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`D_ID`, `D_USER`, `D_R_ID`, `D_PRICE`, `D_DATE`, `D_TIME`) VALUES
(1, 2, 4, 1500, '2022-05-21', '10:33:05pm');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `R_ID` int(11) NOT NULL,
  `R_U_ID` int(11) NOT NULL,
  `R_NAME` text NOT NULL,
  `R_TYPE` text NOT NULL,
  `R_PHOTO` varchar(255) NOT NULL,
  `R_INGREDIENTS` mediumtext NOT NULL,
  `R_MAKE` mediumtext NOT NULL,
  `R_PRICE` int(11) NOT NULL,
  `R_DATE` date NOT NULL,
  `R_CATEGORY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`R_ID`, `R_U_ID`, `R_NAME`, `R_TYPE`, `R_PHOTO`, `R_INGREDIENTS`, `R_MAKE`, `R_PRICE`, `R_DATE`, `R_CATEGORY`) VALUES
(6, 4, 'Chicken Biryani', 'Pro', '1.jpg', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 2500, '2022-05-21', 2),
(7, 4, 'Mutton Biriyani', 'Pro', '1.jpg', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 2400, '2022-05-21', 1),
(8, 4, 'Cake', 'Pro', '5.jpg', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 1000, '2022-05-21', 5),
(9, 4, 'Rice and Curry', 'Pro', '2.jpg', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 700, '2022-05-21', 1),
(10, 4, 'Vegitable Salad', 'Pro', '4.jpg', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the regionBiryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and usually some type of meat, and sometimes, in addition, eggs and potatoes. Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region', 500, '2022-05-21', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(11) NOT NULL,
  `U_NAME` text NOT NULL,
  `U_CONTACT` int(10) NOT NULL,
  `U_DOB` date NOT NULL,
  `U_EMAIL` varchar(500) NOT NULL,
  `U_ADDRESS` text NOT NULL,
  `U_PASSWORD` varchar(255) NOT NULL,
  `U_TYPE` text NOT NULL,
  `G_ACCOUNT` varchar(500) NOT NULL,
  `F_ACCOUNT` varchar(500) NOT NULL,
  `I_ACCOUNT` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `U_NAME`, `U_CONTACT`, `U_DOB`, `U_EMAIL`, `U_ADDRESS`, `U_PASSWORD`, `U_TYPE`, `G_ACCOUNT`, `F_ACCOUNT`, `I_ACCOUNT`) VALUES
(2, 'Muditha', 781528147, '1999-10-06', 'abc@abc.com', 'Kegalle', 'a9993e364706816aba3e25717850c26c9cd0d89d', 'PUBLISHER', 'zxc', '', ''),
(3, 'Muditha Mewan', 781528147, '1999-10-06', 'muditha@gmail.com', 'Kegalle', 'fb38c8c608161dcfaf22145a47302016a05efd13', 'PUBLISHER', '', '', ''),
(4, 'Lahiru', 745689789, '1999-10-15', 'lahiru@gmail.com', 'Kegalle', '69da57e37688862d78e5c6a1918f71240309b291', 'PUBLISHER', '', '', ''),
(5, 'Admin User', 0, '2000-01-01', 'admin@mail.com', 'Admin User', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ADMIN', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
