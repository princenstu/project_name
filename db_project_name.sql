-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2011 at 11:52 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_project_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `contact_name` varchar(40) NOT NULL,
  `contact_org` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_fid` varchar(35) NOT NULL,
  `contact_phone` varchar(25) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `user_id`, `contact_name`, `contact_org`, `contact_email`, `contact_fid`, `contact_phone`) VALUES
(1, 15, 'Onik', 'ORG', 'onik@yahoo.com', 'onik@hoatmail.com', '01817654321'),
(2, 15, 'Ried', 'TRMP', 'Ried@yahoo.com', 'ried@alo.com', '01914567687'),
(3, 14, 'Mehadi Hassan', 'TTC', 'mehadi@talhatraining.com', 'mehadi@gmail.com', '01811765432'),
(6, 16, 'Md. Shuvo Hasan', 'mil', 'shuvo_007@gmail.com', 'shuvo_uy', '01710629759'),
(5, 16, 'Mahedi', 'mil', 'shapon.jms@gmail.com', 'mahedi', '01710629753'),
(7, 16, 'saki', 'CSE', 'saki@gmail.com', 'saki@gmail.com', '01556601233'),
(8, 17, 'p', 'nstu', 'p@yahoo.com', 'p', '01717'),
(9, 17, 'r', 'nstu', 'p2@yahoo.com', 'r', '01717433829'),
(10, 0, 'hghj', 'gjgj', 'hjj@df.bv', 'gdghgh', '454545454'),
(11, 0, 'hghj', 'gjgj', 'hjj@df.bv', 'gdghgh', '454545454');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user1`
--

CREATE TABLE IF NOT EXISTS `tbl_user1` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mob_number` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_user1`
--

INSERT INTO `tbl_user1` (`user_id`, `first_name`, `last_name`, `email_address`, `password`, `address`, `mob_number`, `city`, `country`, `zip_code`, `profile_picture`) VALUES
(14, 'shafiul', 'alam', 'topu1826@talhatraining.com', '96e79218965eb72c92a549dd5a330112', 'dhaka', '01914872766', 'dhaka', 'BD', '1207', ''),
(15, 'Saahil', 'Alam', 'saahil2108@gmail.com', 'e3ceb5881a0a1fdaad01296d7554868d', 'dhaka', '01712741722', 'dhaka', 'AL', '1207', ''),
(16, 'Mahedi', 'Hasan', 'shapon.jms@gmail.com', '297ce0b3c836ae307023d7c2c3a7b1ec', '252- Elephant road', '01710629753', 'Dhaka', 'BD', '1205', ''),
(17, 'prince', 'ahmed', 'prince@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'rp', '+8801717433829', 'rp', 'BD', '5200', 'images/Profile_image/logo.jpg'),
(18, 'prince2', 'ahmed', 'prince2@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'rp', '+88001717433829', 'rp', 'BD', '5200', '');
