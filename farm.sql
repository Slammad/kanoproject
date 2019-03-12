-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2018 at 12:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about` text NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about`, `id`) VALUES
('<h1><strong>TUHERBISCUSS</strong></h1>\r\n\r\n<p><strong>Our aim is to support our various clients in meeting not only there demand for our products, but also getting through the rigors of financing their purchase with our support.</strong></p>\r\n\r\n<p><strong>We are well known in the world market for the supplies of spices, seeds, nuts, shells, flowers, gums etc., Such as Natural Sesame seeds, Dried split ginger, Dried hibiscus flower, fine cuts and siftings, hard wood charcoal, raw cashew nuts, cocoa beans, cocoa bean shell (husk), gum arabic, tiger nuts, kola nuts, Bitter Cola (GARCINIA Cola) etc. You will know more about these products in the course of being on our website by visiting our products.</strong></p>\r\n\r\n<p><strong>Over time we have availed ourselves with the requirement of various request for various products, hence we do not compromise product quality by making sure that top quality products (well cleaned, preserved, packed and loaded )are shipped out from us with the certified inspection by SGS INSPECTION AGENCY or BUREAU VERITAS before every shipment, where required by the clients. We also make sure that products are delivered as and when due (prompt).</strong></p>\r\n\r\n<p><strong>Our dedication to quality export and service, rates us as a leading export trading company in commodities both in Nigeria and Africa.</strong></p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass_word`) VALUES
(1, 'admin', '7a9d6e73d16d69e2d7838638138a8bcb');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tell1` varchar(50) NOT NULL,
  `tell2` varchar(50) NOT NULL,
  `wlctxt` text NOT NULL,
  `txtslide` text NOT NULL,
  `service1` text NOT NULL,
  `service2` text NOT NULL,
  `service3` text NOT NULL,
  `address` text NOT NULL,
  `rcc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `tell1`, `tell2`, `wlctxt`, `txtslide`, `service1`, `service2`, `service3`, `address`, `rcc`) VALUES
(1, 'info@tuherbiscuss.com', '', '67584', 'Welcome to <b>TUHERBISCUS CONSOLIDATED COMPANY LIMITED</b>, our experience over the years in the Export of top quality products has endeared us into the heart of the agro -allied industry. Our support to both old and new members of the industry is unflinching', 'GIVING YOU THE BEST QUALITY PRODUCTS', 'We Guarantee Quality Service And Representation<br>\r\n\r\n\r\nOur services are offered to exporters, importers and manufacturers in order to help you to maximize your overseas potential and minimizing risks associated to foreign trade in the Nigerian market.<br>\r\n\r\nDo not hesitate to contact us for details of all your needs.\r\n<br>\r\nWe also represent prospective buyers of other forms of commodities in Nigeria by way of sourcing and negotiating on behalf of the buyers from all over the world.', 'A buyers agent will guarantee loyalty, confidentiality, communication and will use his best endeavors to safeguard your interests.<br>\r\nAs your buyer agent we research properties, using our extensive geographic knowledge and contacts, that are unlisted, listed and properties listed for sale by other companies. ', 'A NIGERIAN multiple listing service is not available and TUHERBISCUSS CONSOLIDATED COMPANY LIMITED real estate system allows you as a buyer to have access to specialist properties that with other agents and companies you may never have the opportunity to consider.....\r\n\r\n\r\n', 'kano', 'rccas');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
