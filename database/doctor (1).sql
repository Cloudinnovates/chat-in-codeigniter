-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 07:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `online_status` int(4) NOT NULL,
  `reg_status` int(11) NOT NULL,
  `user_id` int(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `department`, `online_status`, `reg_status`, `user_id`) VALUES
(4, 'doctor', '123456', 'doctor', 0, 1, 3),
(6, 'patient', '123456', 'patient', 0, 0, 2223),
(7, 'admin', '123456', 'admin', 0, 0, 6),
(11, 'masud1@gmail.com', 'masud1', 'doctor', 1, 1, 2),
(12, 'doctor@gmail.com', '1212121212', 'doctor', 0, 1, 3),
(13, 'patient@gamil.com', '111111', 'doctor', 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
`doctor_id` int(5) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `regNumber` varchar(15) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `passYear` varchar(10) NOT NULL,
  `chamAddress` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `photo` varchar(333) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `firstName`, `lastName`, `regNumber`, `degree`, `email`, `password`, `passYear`, `chamAddress`, `address`, `photo`, `phone`, `date`) VALUES
(1, 'masud', 'Rana', '23456789', 'MBBS', 'masud@gmail.com', 'masud', '2018', 'dhaka', 'dhaka too', 'http://localhost/Doctor/img/mega-img1.jpg', '104567893', '2018-11-21 17:03:06'),
(2, 'masud', 'Rana', '23456789', 'MBBS', 'masud1@gmail.com', 'masud1', '2018', 'dhaka', 'dhaka too', 'http://localhost/Doctor/img/mega-img1.jpg', '104567893', '2018-11-21 17:03:11'),
(3, 'test', 'name', '23456789', 'MRC', 'doctor@gmail.com', '1212121212', '2018', 'dhaka', 'Dhaka', 'http://localhost/Doctor/img/25642e4ac2ee5f264e14ca1024f73838.jpg', '121111111111111', '2018-12-02 14:43:44'),
(4, 'roman', 'khan', '23456789', 'MRC', 'patient@gamil.com', '111111', '2018', 'dhaka', 'Dhaka', 'http://localhost/Doctor/img/57dc767a57b808403493035a05bb2990.jpg', '1234567', '2018-12-02 14:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`message_id` int(12) NOT NULL,
  `senderID` varchar(12) NOT NULL,
  `recieverID` varchar(12) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `senderID`, `recieverID`, `message`, `time`) VALUES
(1, '2222', '4', 'hello', '2018-11-30 16:28:41'),
(2, '2222', '4', 'hi', '2018-11-30 16:32:45'),
(3, '2222', '4', 'how are you?', '2018-12-01 19:31:35'),
(4, '2223', '3', 'hello\r\n', '2018-11-30 16:44:34'),
(9, '2223', '2', 'hi', '2018-11-30 17:01:22'),
(13, '2223', '4', 'fsdfdsdadasdfasfasfasdfas', '2018-12-01 19:42:43'),
(18, '2223', '2', 'fdsfffffffffffffffffffffffffffffffffffffffffff', '2018-11-30 17:13:22'),
(20, '2223', '2', '2222222222222222', '2018-11-30 18:09:04'),
(21, '2', '2223', '0', '2018-10-11 18:12:10'),
(22, '2', '2223', 'ffsssssssssssss', '2018-11-30 19:11:22'),
(23, '2223', '2', 'today?', '2018-12-01 19:21:15'),
(24, '2223', '2', 'yes', '2018-12-01 19:21:40'),
(25, '0', '0', '0', '2018-12-01 19:22:51'),
(26, '2223', '2', 'no\r\n', '2018-12-01 19:23:04'),
(27, '2', '2223', 'why you send no message', '2018-12-01 19:31:52'),
(28, '4', '2223', 'hello roman', '2018-12-01 19:43:19'),
(29, '2223', '4', 'hello', '2018-12-02 15:16:03'),
(30, '2223', '4', 'how are you?', '2018-12-02 15:16:23'),
(31, '2', '2223', 'Hello mr.', '2018-12-02 17:53:20'),
(32, '2', '2223', 'How are You??', '2018-12-02 17:55:27'),
(33, '2', '2223', 'testing', '2018-12-02 17:58:44'),
(34, '2', '2223', 'done', '2018-12-02 17:59:20'),
(35, '2223', '2', 'Yes, The system is ready to perfom.', '2018-12-02 17:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
`patient_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(33) NOT NULL,
  `address` varchar(155) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2224 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `name`, `age`, `weight`, `gender`, `email`, `password`, `address`, `phone`, `photo`, `date`) VALUES
(2223, 'sovon', '25', '0', 'male', 'sovon@gmail.com', 'sovon', 'Dhaka', '017000000000000', 'http://localhost/Doctor/img/patient1.jpg', '2018-11-21 17:37:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `doctor_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `message_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2224;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
