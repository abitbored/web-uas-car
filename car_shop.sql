-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 04:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `password`) VALUES
(1, 'abitbored', 'Abimanyu Wahyu Palagan', 'abigilabro');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `kilometer` varchar(50) NOT NULL,
  `description` varchar(4096) NOT NULL,
  `imgName` varchar(50) NOT NULL,
  `dateUploaded` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand`, `year`, `kilometer`, `description`, `imgName`, `dateUploaded`) VALUES
(11, 'Porsche 911', '2022', 'NEW', 'The best car in the world right now', '1671973366193855683963a849f6628cb.webp', '25/12/2022'),
(12, 'Kijang Innova Zenix', '2022', 'NEW', '- HEV 5th Gen & Battery Warranty\r\n- New EV Mode + ECO & Power Mode (All HV Type)\r\n- New TNGA Platform\r\n- New Gasoline Engine\r\n- Pre-Collision System (PCS)\r\n- Lane Departure Alert (LDA) & Lane Tracing Assist (LTA)\r\n- Dynamic Radar Cruise Control (DRCC)\r\n- Automatic High Beam (AHB)\r\n- 6 SRS Airbags (All Q HV Type)\r\n- Vehicle Stability Control (All Type)', '16719779705647533863a85bf23797f.jpg', '25/12/2022'),
(13, 'The New Range Rover', '2022', 'NEW', 'rich men car', '1671980207207946795363a864af75b08.webp', '25/12/2022'),
(14, 'Toyota Avanza', '2012', '70.000', '1500cc\r\nNew Distinctive & Progressive Front & Rear Look\r\nToyota Safety Sense & Advance Safety Features\r\nNew 17\" Dashing Two Tone Alloy Wheel Design\r\nNew Leather Tilt and Telescopic Steering With Audio & Drive Mode Switch', '16719804377402821663a865958a824.webp', '25/12/2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
