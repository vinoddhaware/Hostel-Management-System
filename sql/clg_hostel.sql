-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2021 at 06:43 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clg_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission`
--

CREATE TABLE IF NOT EXISTS `tbl_admission` (
  `admission_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tdate` varchar(22) NOT NULL,
  `name` varchar(55) NOT NULL,
  `dob` varchar(22) NOT NULL,
  `blood` varchar(12) NOT NULL,
  `caste` varchar(22) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `program` varchar(22) NOT NULL,
  `enrollment` varchar(22) NOT NULL,
  `year` varchar(22) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `exam` varchar(22) NOT NULL,
  `percentage` varchar(22) NOT NULL,
  `gname` varchar(55) NOT NULL,
  `occupation` varchar(22) NOT NULL,
  `gcontact` varchar(12) NOT NULL,
  `gaddress` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`admission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `tbl_admission`
--

INSERT INTO `tbl_admission` (`admission_id`, `reg_id`, `file`, `tdate`, `name`, `dob`, `blood`, `caste`, `address`, `contact`, `program`, `enrollment`, `year`, `branch`, `exam`, `percentage`, `gname`, `occupation`, `gcontact`, `gaddress`, `password`) VALUES
(120, 5, 'eDesert.jpg', '2019-02-06', 'ghghghg', '2017-09-28', 'B+', 'OBC', 'hjhjh', '8787878787', 'ytyty', 'ytytyty', 'First', '', 'yuyuyu', '90', 'hghghg', 'ghghgh', '78787878', 'hghghghg', '8787878787'),
(123, 12, 'ebeautiful-parrot-photos-for-background-desktop.jpg', '2019-04-03', 'Ravindra C. Bisen', '1999-05-15', 'AB+', 'OBC', 'gfdsfg,fghsd,ffg', '1707801', 'Information Technology', '0001', 'First', '', '10', '85', 'qwertw', 'business', '15421', 'rfgarf,rthyrtyh', '1707801'),
(140, 13, 'ebeautiful-parrot-photos-for-background-desktop.jpg', '2019-04-18', 'Ashwin D. Karwade', '1999-04-16', 'AB-', 'SC', 'sHZFhsdnfsdfg', '1707803', 'Information Technology', '5584', 'Third', '', '12th', '82', 'sdfvsd fsdfg', 'fgdsgw', '7245622', 'xfsgf sdhgrtheytfg', '1707803'),
(143, 14, 'elandscape-nature-tree-forest-woods-autumn-wallpaper-2.jpg', '2019-04-18', 'Rajat M. Thakare', '1999-05-04', 'A+', 'Open', 'rfgsrgwsergs', '1707808', 'Information Technology', '48415', 'Third', '', '12th', '80', 'tgtgerseth', 'rgwergew', '4848454', 'rtgewrtgert', '1707808'),
(156, 15, 'elandscape-nature-tree-forest-woods-autumn-wallpaper-2.jpg', '2019-04-18', 'dipak ambule', '2000-03-23', 'A-', 'SC', 'nagkgkukjbi9u', '987', 'Information Technology', '215346', 'First', 'IT', '10th', '62', 'asdih', 'jvyufyu', '16484', 'fdvdfvfsgbnhvfgbmhjhg ,n nh gmmgnfgbgfhnfvdv bghnhn', '987'),
(157, 16, 'ebeautiful-parrot-photos-for-background-desktop.jpg', '2019-04-19', 'mohammad s sayed', '2000-05-02', 'A+', 'OBC', 'higygygu', '100', 'Information Technology', '1516', 'First', 'CS', '10th', '72', 'hghgh', 'hgdds', '5484', 'hgcffdxr', '100'),
(158, 17, 'ebeautiful-parrot-photos-for-background-desktop.jpg', '2021-02-09', 'harsh v. ramtek', '2001-01-09', 'B+', 'Open', 'At. Sonartola, Ta. Deori, Dist. Gondia', '914632', 'IT', '121212', 'First', 'IT', '12th', '89', 'vishal c ramtek', 'doctor', '654321', 'At. Sonartola, Ta. Deori, Dist. Gondia', '9146');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) NOT NULL,
  `adate` varchar(22) NOT NULL,
  `presenty` varchar(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `year` varchar(22) NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attendance_id`, `reg_id`, `adate`, `presenty`, `name`, `contact`, `year`) VALUES
(43, 4, '2019-02-28', 'Present', 'jhjh', '76767676', 'Second'),
(44, 6, '2019-02-28', 'Absent', 'Ravi bansod', '32323354', 'Third'),
(45, 5, '2019-03-02', 'Present', 'ghghghg', '8787878787', 'First'),
(46, 7, '2019-03-02', 'Absent', 'Malik Sheikh', '98989898', 'First'),
(56, 5, '2019-03-15', 'Absent', 'ghghghg', '8787878787', 'First'),
(57, 7, '2019-03-15', 'Present', 'Malik Sheikh 11', '98989898', 'First'),
(58, 10, '2019-03-15', 'Absent', 'Suraj Pandit', '77665544', 'Second'),
(59, 5, '2019-03-19', 'Absent', 'ghghghg', '8787878787', 'First'),
(60, 7, '2019-03-19', 'Present', 'Malik Sheikh 11', '98989898', 'First'),
(61, 10, '2019-03-19', 'Absent', 'Suraj Pandit', '77665544', 'Second'),
(62, 5, '2019-04-03', 'Absent', 'ghghghg', '8787878787', 'First'),
(63, 7, '2019-04-03', 'Present', 'Malik Sheikh 11', '98989898', 'First'),
(64, 10, '2019-04-03', 'Present', 'Suraj Pandit', '77665544', 'Second'),
(65, 12, '2019-04-03', 'Present', 'Ravindra C. Bisen', '1707801', 'First'),
(66, 5, '2019-04-15', 'Present', 'ghghghg', '8787878787', 'First'),
(67, 7, '2019-04-15', 'Present', 'Malik Sheikh 11', '98989898', 'First'),
(68, 10, '2019-04-15', 'Present', 'Suraj Pandit', '77665544', 'Second'),
(69, 12, '2019-04-15', 'Present', 'Ravindra C. Bisen', '1707801', 'First'),
(70, 5, '2019-04-16', 'Present', 'ghghghg', '8787878787', 'First'),
(71, 7, '2019-04-16', 'Present', 'Malik Sheikh 11', '98989898', 'First'),
(72, 10, '2019-04-16', 'Present', 'Suraj Pandit', '77665544', 'Second'),
(73, 12, '2019-04-16', 'Present', 'Ravindra C. Bisen', '1707801', 'First'),
(74, 5, '2019-04-17', 'Present', 'ghghghg', '8787878787', 'First'),
(75, 7, '2019-04-17', 'Absent', 'Malik Sheikh 11', '98989898', 'First'),
(76, 10, '2019-04-17', 'Present', 'Suraj Pandit', '77665544', 'Second'),
(77, 12, '2019-04-17', 'Present', 'Ravindra C. Bisen', '1707801', 'First'),
(78, 9, '2019-04-17', 'Present', 'vinod dhaware', '1234556777', 'First'),
(79, 5, '2019-04-18', 'Present', 'ghghghg', '8787878787', 'First'),
(80, 10, '2019-04-18', 'Present', 'Suraj Pandit', '77665544', 'Second'),
(81, 12, '2019-04-18', 'Absent', 'Ravindra C. Bisen', '1707801', 'First'),
(82, 13, '2019-04-18', 'Present', 'Ashwin D. Karwade', '1707803', 'Third'),
(83, 14, '2019-04-18', 'Absent', 'Rajat M. Thakare', '1707808', 'Third'),
(84, 5, '2019-04-19', 'Present', 'ghghghg', '8787878787', 'First'),
(85, 10, '2019-04-19', 'Present', 'Suraj Pandit', '77665544', 'Second'),
(86, 12, '2019-04-19', 'Present', 'Ravindra C. Bisen', '1707801', 'First'),
(87, 13, '2019-04-19', 'Present', 'Ashwin D. Karwade', '1707803', 'Third'),
(88, 14, '2019-04-19', 'Present', 'Rajat M. Thakare', '1707808', 'Third'),
(89, 15, '2019-04-19', 'Present', 'dipak ambule', '987', 'First'),
(90, 5, '2019-04-22', 'Present', 'ghghghg', '8787878787', 'First'),
(91, 12, '2019-04-22', 'Absent', 'Ravindra C. Bisen', '1707801', 'First'),
(92, 13, '2019-04-22', 'Absent', 'Ashwin D. Karwade', '1707803', 'Third'),
(93, 14, '2019-04-22', 'Present', 'Rajat M. Thakare', '1707808', 'Third'),
(94, 15, '2019-04-22', 'Present', 'dipak ambule', '987', 'First'),
(95, 5, '2019-06-09', 'Present', 'ghghghg', '8787878787', 'First'),
(96, 12, '2019-06-09', 'Absent', 'Ravindra C. Bisen', '1707801', 'First'),
(97, 13, '2019-06-09', 'Present', 'Ashwin D. Karwade', '1707803', 'Third'),
(98, 14, '2019-06-09', 'Present', 'Rajat M. Thakare', '1707808', 'Third'),
(99, 15, '2019-06-09', 'Present', 'dipak ambule', '987', 'First'),
(100, 16, '2019-06-09', 'Present', 'mohammad s sayed', '100', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE IF NOT EXISTS `tbl_leave` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `ldate` varchar(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `year` varchar(12) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `matter` varchar(200) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`leave_id`, `ldate`, `reg_id`, `name`, `year`, `subject`, `matter`, `status`) VALUES
(4, '2019-03-01', 6, 'Ravi bansod', 'Third', 'illness', 'very high fever', 'Approved'),
(6, '2019-03-13', 7, 'Malik Sheikh 11', 'First', 'cant come tomorrow', 'I am not able to come tomorrow !,,', 'Approved'),
(7, '2019-04-17', 12, 'Ravindra C. Bisen', 'First', 'sister wedding', 'tomorrow is the wedding of my sister, so i want to leave for the three days.', 'Approved'),
(8, '2019-04-17', 12, 'Ravindra C. Bisen', 'First', 'dsfdssfd', 'sggfbsdffvdfgbfg', 'Approved'),
(9, '2019-04-18', 5, 'ghghghg', 'First', 'to going village', 'sfdivsidfv idfnvidsfiv', 'Pending'),
(10, '2019-04-18', 12, 'Ravindra C. Bisen', 'First', 'CVX', 'SISTER WEDDING', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_reg` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `tdate` varchar(12) NOT NULL,
  `name` varchar(77) NOT NULL,
  `dob` varchar(22) NOT NULL,
  `blood` varchar(12) NOT NULL,
  `caste` varchar(22) NOT NULL,
  `file` varchar(200) NOT NULL,
  `file1` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `program` varchar(55) NOT NULL,
  `enrollment` varchar(22) NOT NULL,
  `year` varchar(22) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `exam` varchar(33) NOT NULL,
  `percentage` varchar(22) NOT NULL,
  `gname` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `gcontact` varchar(12) NOT NULL,
  `gaddress` varchar(200) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`reg_id`, `tdate`, `name`, `dob`, `blood`, `caste`, `file`, `file1`, `address`, `contact`, `program`, `enrollment`, `year`, `branch`, `exam`, `percentage`, `gname`, `occupation`, `gcontact`, `gaddress`) VALUES
(4, '2019-02-06', 'jhjh', '2018-11-29', 'B+', 'SC', 'eDesert.jpg', '', 'jhjhj', '76767676', 'jhj', 'hjhjh', 'Second', '', 'gfgfgfg', '67', 'hbhgh', 'hghgh', '56565', 'bvvbvb'),
(5, '2019-02-06', 'ghghghg', '2017-09-28', 'B+', 'OBC', 'eDesert.jpg', '', 'hjhjh', '8787878787', 'ytyty', 'ytytyty', 'First', '', 'yuyuyu', '90', 'hghghg', 'ghghgh', '78787878', 'hghghghg'),
(6, '2019-02-17', 'Ravi bansod', '1979-10-29', 'B+', 'OBC', 'eIntechzia Logo.jpg', '', 'eshimbagh', '32323354', 'btech', '767trtrt', 'Third', '', 'ssc', '78', 'bala rathod', 'business', '54323121', 'rambagh'),
(7, '2019-02-18', 'Malik Sheikh', '2017-09-28', 'A-', 'SC', 'ecut2.PNG', '', 'jhjhjh', '98989898', 'yuyuy', '565trt', 'First', '', 'ytyty', '87', 'hghgh', 'ghghghg', '7676767', 'bvbvbvb'),
(8, '2019-02-18', 'Rucha Rao', '2013-08-28', 'A+', 'OBC', 'eIntechzia Logo.png', '', 'gfff', '8787878', 'ttrt', '8hgh', 'Second', '', 'yuyuy', '77', 'hgh', 'ghghgh', '56565', 'hghg'),
(9, '2019-03-02', 'vinod dhaware', '1999-08-01', 'AB+', 'NT', 'e', '', 'sadar,nagpur', '1234556777', 'IT', '19382', 'First', '', '12th', '54', 'raghunath c dhaware', 'driver', '45335464565', 'nagpur'),
(10, '2019-03-06', 'Suraj Pandit', '1991-10-28', 'A+', 'Open', 'eback.jpg', '', 'ram nagar', '77665544', 'abc', 'abc123', 'Second', 'CS', 'ITI', '88', 'Suraj Pandit', 'Private Job', '78675645', 'Same above'),
(11, '2019-03-12', 'Naman', '1992-11-29', 'A-', 'Open', 'eTulips.jpg', 'eHydrangeas.jpg', 'jhjh', '76767676', 'bnbn', 'tytyty', 'First', 'cs', 'bnbnb', '77', 'jhhjh', ' hjhjh', '878787', 'kjkjkjkj'),
(12, '2019-04-03', 'Ravindra C. Bisen', '1999-05-15', 'AB+', 'OBC', 'ebeautiful-parrot-photos-for-background-desktop.jpg', 'elandscape-nature-tree-forest-woods-autumn-wallpaper-2.jpg', 'gfdsfg,fghsd,ffg', '1707801', 'Information Technology', '0001', 'First', 'IT', '10', '85', 'qwertw', 'business', '15421', 'rfgarf,rthyrtyh'),
(13, '2019-04-18', 'Ashwin D. Karwade', '1999-04-16', 'AB-', 'SC', 'ebeautiful-parrot-photos-for-background-desktop.jpg', 'elandscape-nature-tree-forest-woods-autumn-wallpaper-2.jpg', 'sHZFhsdnfsdfg', '1707803', 'Information Technology', '5584', 'Third', 'IT', '12th', '82', 'sdfvsd fsdfg', 'fgdsgw', '7245622', 'xfsgf sdhgrtheytfg'),
(14, '2019-04-18', 'Rajat M. Thakare', '1999-05-04', 'A+', 'Open', 'elandscape-nature-tree-forest-woods-autumn-wallpaper-2.jpg', 'ebeautiful-parrot-photos-for-background-desktop.jpg', 'rfgsrgwsergs', '1707808', 'Information Technology', '48415', 'Third', 'IT', '12th', '80', 'tgtgerseth', 'rgwergew', '4848454', 'rtgewrtgert'),
(15, '2019-04-18', 'dipak ambule', '2000-03-23', 'A-', 'SC', 'elandscape-nature-tree-forest-woods-autumn-wallpaper-2.jpg', 'ebeautiful-parrot-photos-for-background-desktop.jpg', 'nagkgkukjbi9u', '987', 'Information Technology', '215346', 'First', 'IT', '10th', '62', 'asdih', 'jvyufyu', '16484', 'fdvdfvfsgbnhvfgbmhjhg ,n nh gmmgnfgbgfhnfvdv bghnhn'),
(16, '2019-04-19', 'mohammad s sayed', '2000-05-02', 'A+', 'OBC', 'ebeautiful-parrot-photos-for-background-desktop.jpg', 'eassignment1.pdf', 'higygygu', '100', 'Information Technology', '1516', 'First', 'CS', '10th', '72', 'hghgh', 'hgdds', '5484', 'hgcffdxr'),
(17, '2021-02-09', 'harsh v. ramtek', '2001-01-09', 'B+', 'Open', 'ebeautiful-parrot-photos-for-background-desktop.jpg', 'eallotement_1.jpg', 'At. Sonartola, Ta. Deori, Dist. Gondia', '914632', 'IT', '121212', 'First', 'IT', '12th', '89', 'vishal c ramtek', 'doctor', '654321', 'At. Sonartola, Ta. Deori, Dist. Gondia'),
(18, '2021-04-10', 'vinod dhaware', '2021-04-08', 'A-', 'NT', 'e', 'e', 'sdawsdq', '12345', 'it', '123123', 'First', 'asdqa', 'asda', '68', 'dasdq', 'asda', '12369', 'dqawd');
