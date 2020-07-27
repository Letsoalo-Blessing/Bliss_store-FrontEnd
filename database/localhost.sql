-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2020 at 03:24 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--
DROP DATABASE `projectdb`;
CREATE DATABASE `projectdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projectdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`userid`, `username`, `email`, `password`) VALUES
(1, 'Blessing', 'Letsoalo@gmail.com', 574);

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE IF NOT EXISTS `tblcart` (
  `prod_id` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `Qty` int(11) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`prod_id`, `ip_add`, `Qty`) VALUES
('ps001', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE IF NOT EXISTS `tblorder` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `prodID` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `Qty` int(11) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`orderID`, `prodID`, `userid`, `Qty`) VALUES
(6, 'cam002', '5', 1),
(5, 'iphone002', '5', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE IF NOT EXISTS `tblpayment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `userid` varchar(255) NOT NULL,
  `prodID` varchar(255) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`paymentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`paymentID`, `amount`, `userid`, `prodID`, `payment_date`) VALUES
(7, 4000, '5', 'ps001', '2020-07-24 11:06:06'),
(6, 5999, '5', 'cam002', '2020-07-24 11:06:06'),
(5, 6999, '5', 'iphone002', '2020-07-24 11:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prodID` varchar(200) NOT NULL,
  `Descr` varchar(250) NOT NULL,
  `Qty` int(11) NOT NULL,
  `unitPrice` double NOT NULL,
  `image` text NOT NULL,
  `category` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `prodID`, `Descr`, `Qty`, `unitPrice`, `image`, `category`) VALUES
(3, 'iphone001', 'Iphone6 plus 64GB 2GB ram', 50, 7999, 'product-images/iphone6+.jpg', 'phones'),
(2, 'iphone002', 'Iphone6 pro 128GB 4GB ram', 50, 6999, 'product-images/iphone6.jpg', 'phones'),
(7, 'ps001', 'Sony PlayStation 4', 50, 4000, 'product-images/sony_ps4.jpg', 'tvGames'),
(10, 'cam001', 'Red nikon 50 mega px', 50, 6500, 'product-images/nikon.jpg', 'cameras'),
(11, 'cam002', 'Black canon 100 mega px', 20, 5999, 'product-images/Canon.jpg', 'Camera'),
(13, 'cloth0002', 'Brown Wallet', 50, 99, 'product-images/Wallet.jpg', 'clothing');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userid`, `username`, `email`, `password`, `province`, `city`, `address`) VALUES
(1, 'Blessing', 'Letsoalo@gmail.com', '574d25eeb366091f4e1d913c9176f628', '', '', ''),
(2, 'Godfrey', 'Letsoalo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', ''),
(3, 'Blessing', 'Letsoalo@gmail.com', '12345', '', '', ''),
(4, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', ''),
(5, 'Skinny', 'Skinny@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Mpumalanga', 'Matsulu', 'Stand no 700');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
