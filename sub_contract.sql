-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 10:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sub_contract`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_of_work`
--

CREATE TABLE `area_of_work` (
  `id` int(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `category_id` int(10) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `date_and_time` varchar(50) DEFAULT NULL,
  `remarks` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_of_work`
--

INSERT INTO `area_of_work` (`id`, `user_id`, `category_id`, `created_by`, `date_and_time`, `remarks`) VALUES
(1, 53, 1, 'user011', '07-06-2021, 11:09 am', 'Add'),
(2, 53, 2, 'user011', '07-06-2021, 11:09 am', 'Add'),
(3, 53, 4, 'user011', '07-06-2021, 11:09 am', 'Add'),
(4, 53, 5, 'user011', '07-06-2021, 11:09 am', 'Add'),
(5, 53, 6, 'user011', '07-06-2021, 11:09 am', 'Add'),
(6, 53, 7, 'user011', '07-06-2021, 11:09 am', 'Add'),
(7, 53, 8, 'user011', '07-06-2021, 11:09 am', 'Add'),
(8, 53, 9, 'user011', '07-06-2021, 11:09 am', 'Add'),
(9, 53, 10, 'user011', '07-06-2021, 11:09 am', 'Add'),
(10, 53, 11, 'user011', '07-06-2021, 11:09 am', 'Add'),
(11, 22, 36, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(12, 22, 2, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(13, 22, 4, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(14, 22, 5, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(15, 22, 6, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(16, 22, 7, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(17, 22, 8, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(19, 22, 10, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(20, 22, 11, 'shakibul1997', '07-06-2021, 11:11 am', 'Add'),
(21, 34, 1, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(22, 34, 2, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(23, 34, 4, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(24, 34, 6, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(25, 34, 11, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(26, 34, 20, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(27, 34, 22, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(28, 34, 28, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(29, 34, 29, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(30, 34, 33, 'S.M Shuvo', '07-06-2021, 1:08 pm', 'Add'),
(31, 33, 1, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(32, 33, 2, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(33, 33, 4, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(34, 33, 5, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(35, 33, 6, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(36, 33, 7, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(37, 33, 8, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(38, 33, 9, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(39, 33, 10, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(40, 33, 11, 'mannan', '08-06-2021, 5:17 pm', 'Add'),
(41, 52, 1, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(42, 52, 4, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(43, 52, 7, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(44, 52, 9, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(45, 52, 11, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(46, 52, 13, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(47, 52, 16, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(48, 52, 17, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(49, 52, 34, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(50, 52, 36, 'Webase', '08-06-2021, 5:51 pm', 'Add'),
(51, 55, 1, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(52, 55, 2, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(53, 55, 4, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(54, 55, 5, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(55, 55, 6, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(56, 55, 7, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(57, 55, 8, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(58, 55, 9, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(59, 55, 35, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(60, 55, 36, 'rana', '08-06-2021, 6:08 pm', 'Add'),
(61, 56, 1, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(62, 56, 2, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(63, 56, 4, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(64, 56, 6, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(65, 56, 7, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(66, 56, 8, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(67, 56, 9, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(68, 56, 10, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(69, 56, 11, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(70, 56, 36, 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(78, 58, 1, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(79, 58, 2, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(80, 58, 4, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(81, 58, 5, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(82, 58, 15, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(83, 58, 16, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(84, 58, 24, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(85, 58, 33, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(86, 58, 35, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(87, 58, 36, 'Rabiya2020', '13-06-2021, 12:34 pm', 'Add'),
(88, 59, 1, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(89, 59, 2, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(90, 59, 4, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(91, 59, 5, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(92, 59, 6, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(93, 59, 7, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(94, 59, 8, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(95, 59, 9, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(96, 59, 10, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(97, 59, 11, 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(98, 57, 1, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(99, 57, 2, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(100, 57, 4, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(101, 57, 5, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(102, 57, 6, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(103, 57, 7, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(104, 57, 8, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(105, 57, 9, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(106, 57, 10, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(107, 57, 11, 'Mannan2021', '13-06-2021, 6:34 pm', 'Add'),
(108, 62, 1, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(109, 62, 2, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(110, 62, 4, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(111, 62, 5, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(112, 62, 6, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(113, 62, 7, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(114, 62, 8, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(115, 62, 9, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(116, 62, 10, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(117, 62, 11, 'rezu_vai', '17-06-2021, 11:26 am', 'Add'),
(118, 22, 9, NULL, NULL, NULL),
(119, 79, 1, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(120, 79, 2, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(121, 79, 5, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(122, 79, 7, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(123, 79, 8, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(124, 79, 9, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(125, 79, 11, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(126, 79, 33, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(127, 79, 35, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(128, 79, 36, 'Datasoft', '26-06-2021, 4:32 pm', 'Add'),
(129, 82, 4, 'web', '26-06-2021, 7:19 pm', 'Add'),
(130, 82, 5, 'web', '26-06-2021, 7:19 pm', 'Add'),
(131, 82, 6, 'web', '26-06-2021, 7:19 pm', 'Add'),
(132, 82, 7, 'web', '26-06-2021, 7:19 pm', 'Add'),
(133, 82, 9, 'web', '26-06-2021, 7:19 pm', 'Add'),
(134, 82, 10, 'web', '26-06-2021, 7:19 pm', 'Add'),
(135, 82, 11, 'web', '26-06-2021, 7:19 pm', 'Add'),
(136, 82, 34, 'web', '26-06-2021, 7:19 pm', 'Add'),
(137, 82, 35, 'web', '26-06-2021, 7:19 pm', 'Add'),
(138, 82, 36, 'web', '26-06-2021, 7:19 pm', 'Add'),
(139, 84, 1, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(140, 84, 2, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(141, 84, 4, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(142, 84, 5, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(143, 84, 6, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(144, 84, 32, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(145, 84, 33, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(146, 84, 34, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(147, 84, 35, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(148, 84, 36, 'Shakibul Trade', '27-06-2021, 1:15 pm', 'Add'),
(149, 108, 1, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(150, 108, 2, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(151, 108, 4, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(152, 108, 5, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(153, 108, 9, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(154, 108, 10, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(155, 108, 11, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(156, 108, 29, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(157, 108, 30, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(158, 108, 31, 'Veracious SLTD', '28-06-2021, 1:41 pm', 'Add'),
(159, 118, 1, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(160, 118, 2, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(161, 118, 4, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(162, 118, 5, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(163, 118, 6, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(164, 118, 7, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(165, 118, 8, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(166, 118, 34, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(167, 118, 35, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(168, 118, 36, 'GM Group', '28-06-2021, 3:08 pm', 'Add'),
(169, 119, 1, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(170, 119, 2, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(171, 119, 4, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(172, 119, 5, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(173, 119, 6, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(174, 119, 7, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(175, 119, 8, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(176, 119, 9, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(177, 119, 10, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(178, 119, 11, 'Illu Host ', '28-06-2021, 3:51 pm', 'Add'),
(179, 127, 1, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(180, 127, 2, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(181, 127, 4, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(182, 127, 5, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(183, 127, 6, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(184, 127, 7, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(185, 127, 8, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(186, 127, 9, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(187, 127, 10, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(188, 127, 36, 'SMG', '29-06-2021, 11:44 am', 'Add'),
(189, 128, 1, 'Veracious SLTD', '29-06-2021, 7:28 pm', 'Add'),
(190, 128, 2, 'Veracious SLTD', '29-06-2021, 7:28 pm', 'Add'),
(191, 128, 4, 'Veracious SLTD', '29-06-2021, 7:28 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `award_certification`
--

CREATE TABLE `award_certification` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `award_name` varchar(60) NOT NULL,
  `categories_name` varchar(60) NOT NULL,
  `authorized_by` varchar(70) NOT NULL,
  `image` varchar(70) NOT NULL,
  `description` varchar(50) NOT NULL,
  `terms_condition` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `award_certification`
--

INSERT INTO `award_certification` (`id`, `user_id`, `award_name`, `categories_name`, `authorized_by`, `image`, `description`, `terms_condition`, `created_by`, `date_and_time`, `remarks`) VALUES
(1, 22, 'Kazi Nurzul Too', 'good poet', 'Bangla Acadame', '07-06-2021_1623059496.jpg', 'Well Done', '1', '14', '09-05-2021, 1:17 pm', 'Add'),
(5, 22, 'Ekushy Award', 'good hacker', 'Webase solution', '07-06-2021_1623059541.png', 'Good Job Test', '1', '17', '09-05-2021, 2:52 pm', 'Add'),
(6, 22, 'Bonggobondhu', 'Software Competion', 'Webase', '07-06-2021_1623059557.jpg', 'This is very nice', '1', '21', '11-05-2021, 4:36 pm', 'Add'),
(9, 28, 'gdfgfd', 'dfgfg', 'gfgf', '24-05-2021_1621836436.jpg', 'fgfdgdf', '1', 'user11', '24-05-2021, 12:07 pm', 'Add'),
(10, 33, 'sfsfs', 'fdfew', 'rewrwq', '31-05-2021_1622463725.pdf', 'rwerwq', '1', 'mannan', '31-05-2021, 6:22 pm', 'Add'),
(11, 34, 'N.A', 'IT', 'High Table', '31-05-2021_1622464635.png', 'erp system erp system erp system erp system erp sy', '1', 'S.M Shuvo', '31-05-2021, 6:37 pm', 'Add'),
(12, 52, 'National Award', 'Apps Development', 'Dip@gmail.com', '28-06-2021_1624856437.png', 'Successfully', '1', 'Webase', '06-06-2021, 5:30 pm', 'Add'),
(13, 55, '2ftqf', 'sqsss', 'sqqqq', '09-06-2021_1623214250.pdf', 'qwq', '1', 'rana', '09-06-2021, 10:50 am', 'Add'),
(14, 56, 'Hacker Competetion', 'Security', 'Webase', '11-06-2021_1623396019.jpg', 'Good', '1', 'shoriful1234', '11-06-2021, 1:20 pm', 'Add'),
(15, 58, 'App Contest', 'App Develoment', 'Webase', '13-06-2021_1623566684.jpg', 'BNC audit lends credibility to client’s financial ', '1', 'Rabiya2020', '13-06-2021, 12:44 pm', 'Add'),
(16, 59, 'xyz', 'road ', 'robi', '13-06-2021_1623577129.png', 'sdgrdshuyj', '1', 'tushar', '13-06-2021, 3:38 pm', 'Add'),
(17, 79, 'national ', 'service', 'mannan', '26-06-2021_1624707393.jpg', 'fggkdjgdg', '1', 'Datasoft', '26-06-2021, 4:55 pm', 'Add'),
(18, 82, 'App', 'App contest', 'Webase', '26-06-2021_1624714222.png', 'good', '1', 'web', '26-06-2021, 7:27 pm', 'Add'),
(19, 84, 'Sanitation Hackathon ', 'Sanitation', 'World Bank', '27-06-2021_1624779529.png', 'মেইল ১০০% ভ্যালিডেটে হয় নাই রেজিস্টার করার পর ইউসা', '1', 'Shakibul Trade', '27-06-2021, 1:37 pm', 'Add'),
(21, 118, 'National', 'web service', 'mannan@gmail.com', '', 'Develop succwssfully dsds', '1', 'GM Group', '29-06-2021, 10:44 am', 'Add'),
(22, 127, 'National Award', 'development', 'mannan', '29-06-2021_1624965234.png', 'dgsdhshd', '1', 'SMG', '29-06-2021, 5:12 pm', 'Add'),
(23, 128, 'National Award', 'development', 'mannan', '29-06-2021_1624973610.png', 'sacasdass', '1', 'Veracious SLTD', '29-06-2021, 7:33 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `organization_name` varchar(500) NOT NULL,
  `office_address` varchar(500) NOT NULL,
  `web_address` varchar(100) NOT NULL,
  `official_contact` varchar(500) NOT NULL,
  `nid_card` varchar(100) NOT NULL,
  `tin` varchar(400) NOT NULL,
  `bin` varchar(300) NOT NULL,
  `established` varchar(20) NOT NULL,
  `number_of_employees` varchar(100) NOT NULL,
  `years_of_experiences` varchar(100) NOT NULL,
  `publisher` varchar(10) DEFAULT NULL,
  `investor` varchar(10) DEFAULT NULL,
  `bidder` varchar(10) DEFAULT NULL,
  `business_type` int(10) NOT NULL COMMENT '1=Govt,2=Private/Ltd/Group of Company,3=NGO/NPO,4=Individual',
  `company_logo` varchar(30) NOT NULL,
  `created_by` int(20) NOT NULL,
  `date_and_time` varchar(100) NOT NULL,
  `remarks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id`, `user_id`, `organization_name`, `office_address`, `web_address`, `official_contact`, `nid_card`, `tin`, `bin`, `established`, `number_of_employees`, `years_of_experiences`, `publisher`, `investor`, `bidder`, `business_type`, `company_logo`, `created_by`, `date_and_time`, `remarks`) VALUES
(10, 52, 'webase solutions', '27/C, Block E, Asad Avenue, Mohammadpur, Dhaka-1207', 'https://webase.com.bd', '1315565036', '5325525462', '532552546278', '53255254629', '2019-06-12', '5-10', '2', '1', '2', '3', 2, '09-06-2021_1623232065.jpg', 0, '06-06-2021, 5:06 pm', 'Add'),
(11, 24, 'Webase Soluations', 'Dhanmondi', 'https://webase.com.bd/', '01569863548', '', '', '', '2021-06-17', '5-10', '1-5', '1', '2', '3', 1, '', 0, '06-06-2021, 6:00 pm', 'Add'),
(13, 53, 'Bangladesh Bank', 'Dhanmondi', 'https://webase.com.bd/', '01569863548', '', '', '', '2021-06-17', '5-10', '1-5', '1', '2', '3', 1, '07-06-2021_1623036824.jpg', 0, '07-06-2021, 9:33 am', 'Add'),
(15, 54, 'Bangladesh Bank LTD', 'Mirpur', 'https://webase.com.bd/', '01869121524', '', '', '', '2021-06-24', '5-10', '1-5', '1', '2', '3', 3, '07-06-2021_1623056979.png', 0, '07-06-2021, 3:09 pm', 'Add'),
(16, 33, 'fdghfh', 'gfhfghgf', 'https://www.facebook.com/', '01256358967', '', '', '', '2021-06-17', '5-10', '1-5', '1', '2', '3', 2, '08-06-2021_1623151016.jpg', 0, '08-06-2021, 5:16 pm', 'Add'),
(17, 55, 'webase', 'House-296,Road 1, Adabor, ', 'https://webase.com.bd/', '01315565037', '', '', '', '2021-06-09', '5-10', '1-5', '1', '2', '3', 3, '09-06-2021_1623229515.png', 0, '08-06-2021, 6:06 pm', 'Add'),
(18, 56, 'Future IT', 'Shymoli', 'https://www.google.com/', '01717364403', '13124324', '123213324', '123123123', '2021-06-25', '5-10', '1-5', '1', '2', '3', 1, '11-06-2021_1623395710.png', 0, '11-06-2021, 1:15 pm', 'Add'),
(20, 22, 'IT Soluations', 'Mohammadpur', 'https://www.facebook.com/', '01869121528', '6454983666', '123456789097', '12345678977', '2021-06-25', '5-10', '1-5', '1', '2', '3', 1, '22-06-2021_1624352275.jpg', 0, '12-06-2021, 6:42 pm', 'Add'),
(23, 58, 'IT Soluations', 'Mohammadpur', 'https://www.facebook.com/', '01869125485', '', '', '', '2021-06-24', '5-10', '1-5', '1', '2', '3', 2, '13-06-2021_1623565911.jpg', 0, '13-06-2021, 12:31 pm', 'Add'),
(24, 59, 'Abc', 'abc', 'https://abc.com', '01256987456', '', '', '', '2021-06-03', '5-10', '1-5', '1', '2', '3', 1, '14-06-2021_1623667175.png', 0, '13-06-2021, 3:28 pm', 'Add'),
(29, 60, 'IT Soluations', 'Mohammadpur', 'https://www.facebook.com/', '01869121524', '1236547896', '346345634563', '25874558566', '2021-06-24', '5-10', '1-5', '1', '2', '3', 4, '14-06-2021_1623653087.jpg', 0, '14-06-2021, 12:44 pm', 'Add'),
(31, 75, 'Future IT Soluation', 'Mohammadpur', 'https://www.facebook.com/', '01568989856', '1234567896', '123456789654', '12345678965', '2021-06-23', '5-10', '1-5', '1', '2', '3', 2, '19-06-2021_1624082972.jpg', 0, '19-06-2021, 12:09 pm', 'Add'),
(32, 77, 'Future IT Soluation3243', 'Mohammadpur', 'https://www.facebook.com/', '01569866358', '4545454444', '434344444434', '3345345345344', '2021-06-22', '5-10', '1-5', '1', '2', '3', 2, '20-06-2021_1624175095.jpg', 0, '20-06-2021, 1:44 pm', 'Add'),
(33, 79, 'Datasoft', 'House-296,Road 1, Adabor, Dhaka 1207', 'https://datasoft.com.bd/', '01315565037', '1315565037', '131556503721', '1315565037211', '2017-06-13', '1', '1', '1', '2', '3', 2, '26-06-2021_1624702537.png', 0, '26-06-2021, 4:15 pm', 'Add'),
(34, 78, 'Craftic Arts', 'hgfhg', 'https://www.facebook.com/', '01253698589', '1236548965', '123568652456', '123655896', '2021-06-30', '5-10', '1-5', '1', '2', '3', 1, '26-06-2021_1624703968.jpg', 0, '26-06-2021, 4:39 pm', 'Add'),
(35, 82, 'web', 'House-296,Road 1, Adabor, Dhaka 1207', 'https://webase.com.bd/', '01315565037', '0131556503', '013155650372', '01315565037', '2021-06-25', '2', '1', '1', '2', '3', 2, '26-06-2021_1624713224.png', 0, '26-06-2021, 7:13 pm', 'Add'),
(36, 84, 'Shakibul Trade', 'Dhaka', 'https://enlistwork.com/frontend', '01234567891', '0123456789149', '012345678912', '0123456789111', '2019-01-27', '5-10', '1-5', '1', '2', '3', 2, '27-06-2021_1624777596.png', 0, '27-06-2021, 1:06 pm', 'Add'),
(38, 118, 'GM Group', 'dhanmondi 32', 'https://webase.com.bd', '01315565039', '0987654325', '999877665544', '9998776655442', '2017-06-28', '5-10', '1', '1', '2', '3', 2, '28-06-2021_1624870944.png', 0, '28-06-2021, 3:02 pm', 'Add'),
(44, 127, 'SMG', '27/C, Block E, Asad Avenue, Mohammadpur, Dhaka-1207', 'https://webase.com.bd', '01315565037', '7878787987', '787878798722', '7878787987221', '2021-06-08', '1', '1-5', '1', '2', '3', 4, '29-06-2021_1624945148.png', 0, '29-06-2021, 11:39 am', 'Add'),
(45, 134, 'Veracious SLTD', 'H-78,R-11, Sukrabad, Dhanmondi-32', 'https://enlistwork.com/Frontend', '01879186653', '1234567890', '123456789098', '1234567890098', '2021-07-02', '5-10', '1-5', '1', '2', '3', 2, '03-07-2021_1625288766.png', 0, '03-07-2021, 11:06 am', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `company_agreements`
--

CREATE TABLE `company_agreements` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `aggrement_file` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_agreements`
--

INSERT INTO `company_agreements` (`id`, `title`, `short_description`, `aggrement_file`, `date`, `status`) VALUES
(2, 'dgfdgd', 'dfgdg', '31-05-2021_16224407351.jpg', '0000-00-00', 1),
(3, 'hello', 'AIDFIOJFJRW90IJKFV', '31-05-2021_16224407351.jpg', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `project_type` varchar(60) NOT NULL,
  `completion` longtext NOT NULL,
  `certificate` varchar(70) NOT NULL,
  `completion_letter` varchar(70) NOT NULL,
  `terms_condition` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `user_id`, `client_name`, `project_type`, `completion`, `certificate`, `completion_letter`, `terms_condition`, `created_by`, `date_and_time`, `remarks`) VALUES
(1, 14, 'sdfgd', '1', 'dfsg', '08-05-2021_1620467750.png', '08-05-2021_16204677501.png', '1', '14', '08-05-2021, 3:55 pm', 'Add'),
(2, 14, 'sdfgd', '2', 'dfsg', '08-05-2021_1620468769.png', '08-05-2021_16204687691.png', '1', '14', '08-05-2021, 4:12 pm', 'Add'),
(3, 14, 'rtgvgcx', '2', 'dfsg', '09-05-2021_1620549029.png', '09-05-2021_16205490291.png', '1', '14', '09-05-2021, 2:30 pm', 'Add'),
(4, 15, 'dsfdsf', '1', 'dsfds', '09-05-2021_1620549834.png', '09-05-2021_16205498341.png', '1', '15', '09-05-2021, 2:43 pm', 'Add'),
(5, 17, 'retert', '1', 'retret', '09-05-2021_1620550213.png', '09-05-2021_16205502131.png', '1', '17', '09-05-2021, 2:50 pm', 'Add'),
(11, 21, 'fdgf', '1', 'fdgf', '', '', '1', '21', '11-05-2021, 4:24 pm', 'Add'),
(12, 21, 'The Limit Agro', '1', 'many works', '18-05-2021_1621339877.jpg', '18-05-2021_16213398771.jpg', '1', 'user5', '18-05-2021, 6:11 pm', 'Add'),
(13, 21, 'The Limit Agro', '1', 'many works', '18-05-2021_1621340013.jpg', '18-05-2021_16213400131.jpg', '1', 'user5', '18-05-2021, 6:13 pm', 'Add'),
(14, 21, 'The Limit Agro', '1', 'many works', '18-05-2021_1621340058.jpg', '18-05-2021_16213400581.jpg', '1', 'user5', '18-05-2021, 6:14 pm', 'Add'),
(15, 22, 'Shoriful Islam Sobuj', 'Medical Instruments', 'DevTools failed to load SourceMap: Could not load content for http://1', '07-06-2021_1623049257.png', '07-06-2021_16230492571.png', '1', 'shakibul1997', '19-05-2021, 10:17 am', 'Add'),
(16, 28, 'sdfdf', '2', 'dsfd', '24-05-2021_1621835946.jpg', '24-05-2021_16218359461.jpg', '1', 'user11', '24-05-2021, 11:59 am', 'Add'),
(17, 33, 'dfddg', '2', 'etrretr', '31-05-2021_1622459891.png', '31-05-2021_16224598911.png', '1', 'mannan', '31-05-2021, 5:18 pm', 'Add'),
(18, 34, 'Vigo', '3', 'MD', '31-05-2021_1622464269.png', '31-05-2021_16224642691.png', '1', 'S.M Shuvo', '31-05-2021, 6:31 pm', 'Add'),
(19, 36, 'fgfdgfd', '2', 'gdfgdfg', '31-05-2021_1622466485.PNG', '31-05-2021_16224664851.PNG', '1', 'enlist12345', '31-05-2021, 7:08 pm', 'Add'),
(20, 45, 'dip', '2', 'BA', '03-06-2021_1622703150.docx', '03-06-2021_16227031501.docx', '1', 'mannan1', '03-06-2021, 12:52 pm', 'Add'),
(21, 47, 'S.M Shuvo', '4', 'knjibyhgbf8uywgfuihwiuoer', '05-06-2021_1622892158.png', '05-06-2021_16228921581.png', '1', 'John Wick', '05-06-2021, 5:22 pm', 'Add'),
(22, 52, 'Shakibul', 'Medical Instruments', 'Successfullysas', '06-06-2021_1622977903.pdf', '06-06-2021_1622977903.docx', '1', 'Webase', '06-06-2021, 5:11 pm', 'Add'),
(23, 24, 'fdsgfdg', '2', 'fdgfdg', '06-06-2021_1622982956.jpg', '06-06-2021_16229829561.jpg', '1', 'shakib123', '06-06-2021, 6:35 pm', 'Add'),
(24, 52, 'dip', '19', 'successfully', '08-06-2021_1623153139.pdf', '08-06-2021_16231531391.pdf', '1', 'Webase', '08-06-2021, 5:52 pm', 'Add'),
(25, 55, 'Mannan', '2', 'successfully', '08-06-2021_1623154099.pdf', '09-06-2021_1623223606.docx', '1', 'rana', '08-06-2021, 6:08 pm', 'Add'),
(26, 55, 'dip', '3', 'successfully', '09-06-2021_1623229885.pdf', '09-06-2021_16232298851.pdf', '1', 'rana', '09-06-2021, 3:11 pm', 'Add'),
(27, 56, 'Rana ', '2', 'Teacher', '11-06-2021_1623395801.pdf', '11-06-2021_16233958011.pdf', '1', 'shoriful1234', '11-06-2021, 1:16 pm', 'Add'),
(28, 58, 'Rana Islam', '35', 'dsfgdsgfdbvcbfhg', '13-06-2021_1623566145.png', '13-06-2021_16235661451.png', '1', 'Rabiya2020', '13-06-2021, 12:35 pm', 'Add'),
(29, 59, 'cba', '2', '12-05-2019', '13-06-2021_1623576782.pdf', '13-06-2021_16235767821.pdf', '1', 'tushar', '13-06-2021, 3:33 pm', 'Add'),
(30, 48, 'John Wick', '1', '2021-06-01', '15-06-2021_1623758970.png', '15-06-2021_16237589701.png', '1', 'John', '15-06-2021, 6:09 pm', 'Add'),
(31, 79, 'dip', '19', '2021-06-25', '26-06-2021_1624703717.pdf', '26-06-2021_16247037171.pdf', '1', 'Datasoft', '26-06-2021, 4:35 pm', 'Add'),
(32, 82, 'dip', '19', '2021-07-03', '26-06-2021_1624713592.pdf', '', '1', 'web', '26-06-2021, 7:19 pm', 'Add'),
(33, 84, 'Manna D costa', '1', '2021-02-27', '27-06-2021_1624778871.pdf', '27-06-2021_16247788711.pdf', '1', 'Shakibul Trade', '27-06-2021, 1:27 pm', 'Add'),
(34, 22, 'John Wick', 'Medical Instruments', 'Test2', '27-06-2021_1624790746.jpg', '27-06-2021_16247907461.jpg', '1', 'shakibul1997', '27-06-2021, 4:45 pm', 'Add'),
(35, 52, 'Mannan', '2', 'l,l,mlkmkimk', '27-06-2021_1624790891.png', '27-06-2021_16247908911.png', '1', 'Webase', '27-06-2021, 4:48 pm', 'Add'),
(36, 108, 'John Wick', '4', '2021-01-31', '', '', '1', 'Veracious SLTD', '28-06-2021, 1:44 pm', 'Add'),
(37, 118, 'dip', '15', '2021-05-31', '28-06-2021_1624871348.pdf', '28-06-2021_1624871348.png', '1', 'GM Group', '28-06-2021, 3:09 pm', 'Add'),
(38, 119, 'Mannan D Costa', '16', '2020-10-05', '', '', '1', 'Illu Host ', '28-06-2021, 3:52 pm', 'Add'),
(39, 85, 'John Wick', '4', '2021-07-01', '', '', '1', 'SSSS', '28-06-2021, 6:32 pm', 'Add'),
(40, 85, 'John Wick', '3', 'dtgkuk', '28-06-2021_1624883829.png', '28-06-2021_1624883829.pdf', '1', 'SSSS', '28-06-2021, 6:37 pm', 'Add'),
(41, 127, 'dip', '3', '2021-06-15', '29-06-2021_1624945504.png', '', '1', 'SMG', '29-06-2021, 11:45 am', 'Add'),
(42, 128, 'John Wick', '2', '2021-06-09', '', '', '1', 'Veracious SLTD', '29-06-2021, 2:42 pm', 'Add'),
(43, 22, 'tst', '3', 'cxvbnb', '29-06-2021_1624956376.png', '', '1', 'shakibul1997', '29-06-2021, 2:46 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `financial_statement` varchar(50) NOT NULL,
  `bank_solvency` varchar(60) NOT NULL,
  `credit` varchar(60) NOT NULL,
  `bank_statement` varchar(70) NOT NULL,
  `liquid_money` varchar(70) NOT NULL,
  `terms_condition` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`id`, `user_id`, `financial_statement`, `bank_solvency`, `credit`, `bank_statement`, `liquid_money`, `terms_condition`, `created_by`, `date_and_time`, `remarks`) VALUES
(1, 15, '', '', '', '', '', '', '15', '09-05-2021, 2:44 pm', 'Add'),
(3, 22, '09-06-2021_1623235450.pdf', '27-06-2021_1624791091.png', '07-06-2021_16230503482.jpg', '07-06-2021_16230503483.jpg', '09-06-2021_1623235744.pdf', '1', 'user5', '18-05-2021, 6:51 pm', 'Add'),
(4, 28, '24-05-2021_1621836163.jpg', '24-05-2021_16218361631.jpg', '24-05-2021_16218361632.jpg', '24-05-2021_16218361633.jpg', '24-05-2021_16218361634.jpg', '1', 'user11', '24-05-2021, 12:02 pm', 'Add'),
(5, 33, '31-05-2021_1622463469.PNG', '31-05-2021_16224634691.PNG', '31-05-2021_16224634692.PNG', '31-05-2021_16224634693.PNG', '31-05-2021_16224634694.PNG', '1', 'mannan', '31-05-2021, 6:17 pm', 'Add'),
(6, 34, '15-06-2021_16237593601.png', '31-05-2021_1622464380.png', '31-05-2021_16224643801.png', '31-05-2021_16224634693.PNG', '31-05-2021_16224643802.png', '1', 'S.M Shuvo', '31-05-2021, 6:33 pm', 'Add'),
(7, 52, '28-06-2021_16248563341.png', '06-06-2021_16229786881.docx', '06-06-2021_16229786882.docx', '06-06-2021_16229786883.docx', '06-06-2021_16229786884.docx', '1', 'Webase', '06-06-2021, 5:24 pm', 'Add'),
(8, 55, '08-06-2021_1623154160.pdf', '08-06-2021_16231541601.pdf', '08-06-2021_16231541602.pdf', '08-06-2021_16231541603.pdf', '08-06-2021_16231541604.pdf', '1', 'rana', '08-06-2021, 6:09 pm', 'Add'),
(9, 56, '11-06-2021_1623395850.pdf', '11-06-2021_16233958501.pdf', '11-06-2021_16233958502.pdf', '11-06-2021_16233958503.pdf', '11-06-2021_16233958504.pdf', '1', 'shoriful1234', '11-06-2021, 1:17 pm', 'Add'),
(10, 58, '13-06-2021_1623566357.pdf', '13-06-2021_16235663571.pdf', '13-06-2021_16235663572.pdf', '13-06-2021_16235663573.pdf', '13-06-2021_16235663574.pdf', '1', 'Rabiya2020', '13-06-2021, 12:39 pm', 'Add'),
(11, 59, '13-06-2021_1623576941.png', '13-06-2021_16235769411.png', '13-06-2021_16235769412.png', '13-06-2021_16235769413.png', '13-06-2021_16235769414.png', '1', 'tushar', '13-06-2021, 3:35 pm', 'Add'),
(15, 57, '14-06-2021_1623645324.pdf', '14-06-2021_16236453241.pdf', '14-06-2021_16236453242.pdf', '14-06-2021_16236453243.pdf', '14-06-2021_16236453244.pdf', '1', 'Mannan2021', '14-06-2021, 10:35 am', 'Add'),
(16, 79, '', '26-06-2021_1624703912.pdf', '26-06-2021_16247039121.pdf', '26-06-2021_16247039122.pdf', '26-06-2021_16247039123.pdf', '1', 'Datasoft', '26-06-2021, 4:38 pm', 'Add'),
(17, 82, '26-06-2021_1624713640.pdf', '26-06-2021_16247136401.pdf', '26-06-2021_16247136402.pdf', '', '26-06-2021_16247136403.pdf', '1', 'web', '26-06-2021, 7:20 pm', 'Add'),
(18, 84, '27-06-2021_1624778950.pdf', '27-06-2021_16247789501.pdf', '27-06-2021_16247789502.pdf', '27-06-2021_16247789503.pdf', '27-06-2021_16247789504.pdf', '1', 'Shakibul Trade', '27-06-2021, 1:29 pm', 'Add'),
(21, 127, '', '29-06-2021_1624957140.pdf', '29-06-2021_16249571401.pdf', '29-06-2021_16249571402.pdf', '29-06-2021_16249571403.pdf', '1', 'SMG', '29-06-2021, 2:59 pm', 'Add'),
(22, 128, '29-06-2021_1624973399.pdf', '29-06-2021_16249733991.pdf', '', '', '', '1', 'Veracious SLTD', '29-06-2021, 7:29 pm', 'Add'),
(23, 134, '03-07-2021_1625292478.pdf', '03-07-2021_16252924781.pdf', '03-07-2021_16252924782.pdf', '03-07-2021_16252924783.pdf', '03-07-2021_16252924784.pdf', '1', 'Veracious SLTD', '03-07-2021, 12:07 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `forget_password`
--

CREATE TABLE `forget_password` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `random_number` int(100) NOT NULL,
  `url` varchar(191) NOT NULL,
  `created_add` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forget_password`
--

INSERT INTO `forget_password` (`id`, `email`, `random_number`, `url`, `created_add`) VALUES
(1, 'smshuvo1612@gmail.com', 68705, 'https://enlistwork.com/welcome/forget_password/68705', '2021-06-24 13:36:16'),
(2, 'smshuvo1612@gmail.com', 23424, '', '2021-06-24 13:41:22'),
(3, 'smshuvo1612@gmail.com', 55557, '', '2021-06-24 13:42:25'),
(4, 'crafticarts@gmail.com', 47544, '', '2021-06-26 08:07:01'),
(5, '', 7899, '', '2021-06-28 11:09:53'),
(6, '', 77855, '', '2021-06-29 20:21:00'),
(7, '', 42303, '', '2021-06-29 20:31:19'),
(8, '', 10158, '', '2021-06-29 20:31:21'),
(9, '', 1638, '', '2021-06-29 20:31:22'),
(10, 'ferdousjannat1212@gmail.com', 54540, '', '2021-06-29 20:31:29'),
(11, 'ferdousjannat1212@gmail.com', 65899, '', '2021-06-29 20:31:31'),
(12, 'ferdousjannat1212@gmail.com', 16600, '', '2021-06-29 20:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `job_type` int(10) NOT NULL,
  `cover_letter` varchar(2000) NOT NULL,
  `specification` varchar(2000) DEFAULT NULL,
  `work_process` varchar(2000) DEFAULT NULL,
  `budget` varchar(2000) DEFAULT NULL,
  `manpower` varchar(2000) DEFAULT NULL,
  `catalog` varchar(100) DEFAULT NULL,
  `similar_work_experience` varchar(100) NOT NULL,
  `quotation_price_for_bidder` int(100) DEFAULT NULL,
  `interested_investment` int(30) NOT NULL,
  `cover_letter_file` varchar(200) NOT NULL,
  `specification_file` varchar(200) NOT NULL,
  `work_process_file` varchar(200) NOT NULL,
  `budget_file` varchar(200) NOT NULL,
  `manpower_file` varchar(200) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `remarks` varchar(10) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `date_and_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `user_id`, `post_id`, `category_id`, `job_type`, `cover_letter`, `specification`, `work_process`, `budget`, `manpower`, `catalog`, `similar_work_experience`, `quotation_price_for_bidder`, `interested_investment`, `cover_letter_file`, `specification_file`, `work_process_file`, `budget_file`, `manpower_file`, `status`, `remarks`, `created_by`, `date_and_time`) VALUES
(100, 22, 21, 8, 1, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', NULL, '21-06-2021_16242588035.pdf', 600000, 300000, '21-06-2021_1624258803.pdf', '21-06-2021_16242588031.pdf', '21-06-2021_16242588032.pdf', '21-06-2021_16242588033.pdf', '21-06-2021_16242588034.pdf', 6, 'Add', 'shakibul1997', '21-06-2021, 1:00 pm'),
(101, 22, 14, 8, 2, '<p><strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></strong></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 400000, '', '', '', '', '', 11, 'Add', 'shakibul1997', '21-06-2021, 6:12 pm'),
(102, 22, 20, 2, 1, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, '22-06-2021_16243363925.pdf', 700000, 0, '22-06-2021_1624336392.pdf', '22-06-2021_16243363921.pdf', '22-06-2021_16243363922.pdf', '22-06-2021_16243363923.pdf', '22-06-2021_16243363924.pdf', 4, 'Add', 'shakibul1997', '22-06-2021, 10:33 am'),
(103, 59, 15, 0, 2, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 50000, '', '', '', '', '', 6, 'Add', 'tushar', '22-06-2021, 12:25 pm'),
(104, 52, 15, 0, 2, '<p>cxzvcxc</p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 23300, '', '', '', '', '', 0, 'Add', 'Webase', '22-06-2021, 1:12 pm'),
(105, 52, 18, 7, 1, '<p>vdvdxv</p>', '<p>cvbcvbcv</p>', '<p>ccvcbcbv</p>', '<p>cvbccc</p>', '<p>xcbxcbccc</p>', NULL, '22-06-2021_16243469504.pdf', 0, 0, '22-06-2021_1624346950.pdf', '22-06-2021_16243469501.pdf', '', '22-06-2021_16243469502.pdf', '22-06-2021_16243469503.pdf', 6, 'Add', 'Webase', '22-06-2021, 1:29 pm'),
(106, 22, 23, 0, 2, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 4000000, '', '', '', '', '', 5, 'Add', 'shakibul1997', '22-06-2021, 2:58 pm'),
(107, 22, 22, 36, 1, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, '22-06-2021_16243600425.pdf', 300000, 0, '22-06-2021_1624360042.pdf', '22-06-2021_16243600421.pdf', '22-06-2021_16243600422.pdf', '22-06-2021_16243600423.pdf', '22-06-2021_16243600424.pdf', 6, 'Add', 'shakibul1997', '22-06-2021, 5:07 pm'),
(108, 22, 25, 36, 1, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, '22-06-2021_16243653415.pdf', 550000, 0, '22-06-2021_1624365341.pdf', '22-06-2021_16243653411.pdf', '22-06-2021_16243653412.pdf', '22-06-2021_16243653413.pdf', '22-06-2021_16243653414.pdf', 6, 'Add', 'shakibul1997', '22-06-2021, 6:35 pm'),
(109, 22, 24, 0, 2, '<p><span style=\"background-color: #ffffff; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 200000, '', '', '', '', '', 3, 'Add', 'shakibul1997', '22-06-2021, 7:14 pm'),
(110, 79, 26, 2, 1, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', NULL, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', NULL, '26-06-2021_16247082233.pdf', 20000000, 0, '26-06-2021_1624708223.pdf', '', '26-06-2021_16247082231.pdf', '26-06-2021_16247082232.pdf', '', 3, 'Add', 'Datasoft', '26-06-2021, 5:50 pm'),
(111, 79, 23, 2, 2, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 40000, '', '', '', '', '', 5, 'Add', 'Datasoft', '26-06-2021, 5:57 pm'),
(112, 22, 29, 0, 2, '<p><span style=\"color: #98a4b1; font-family: Sora, sans-serif; font-size: 16px; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 10000, '', '', '', '', '', 5, 'Add', 'shakibul1997', '26-06-2021, 6:54 pm'),
(113, 79, 29, 0, 2, '<p><span style=\"color: #98a4b1; font-family: Sora, sans-serif; font-size: 16px; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 2000, '', '', '', '', '', 3, 'Add', 'Datasoft', '26-06-2021, 6:59 pm'),
(114, 56, 29, 0, 2, '<p><span style=\"color: #98a4b1; font-family: Sora, sans-serif; font-size: 16px; background-color: #ffffff;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 3000, '', '', '', '', '', 11, 'Add', 'shoriful1234', '26-06-2021, 7:01 pm'),
(115, 52, 30, 36, 1, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', NULL, '27-06-2021_16247726225.pdf', 70000, 0, '27-06-2021_1624772622.pdf', '27-06-2021_16247726221.pdf', '27-06-2021_16247726222.pdf', '27-06-2021_16247726223.pdf', '27-06-2021_16247726224.pdf', 4, 'Add', 'Webase', '27-06-2021, 11:43 am'),
(116, 127, 31, 0, 2, '<p>dtydrthsfxfgxfc</p>', NULL, NULL, NULL, NULL, NULL, '', NULL, 0, '', '', '', '', '', 0, 'Add', 'SMG', '29-06-2021, 3:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply_catalog`
--

CREATE TABLE `job_apply_catalog` (
  `id` int(10) NOT NULL,
  `job_apply_id` int(10) NOT NULL,
  `catalog` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_apply_catalog`
--

INSERT INTO `job_apply_catalog` (`id`, `job_apply_id`, `catalog`) VALUES
(9, 100, '21-06-2021_16242588036.pdf'),
(10, 100, '21-06-2021_16242588036.pdf'),
(11, 100, '21-06-2021_16242588036.pdf'),
(12, 102, '22-06-2021_16243363926.pdf'),
(13, 102, '22-06-2021_16243363927.pdf'),
(14, 105, '22-06-2021_16243469505.pdf'),
(15, 107, '22-06-2021_16243600426.pdf'),
(16, 107, '22-06-2021_16243600427.pdf'),
(17, 108, '22-06-2021_16243653416.pdf'),
(18, 108, '21-06-2021_16242588036.pdf'),
(19, 110, '26-06-2021_16247082234.pdf'),
(20, 115, '27-06-2021_16247726226.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply_time`
--

CREATE TABLE `job_apply_time` (
  `id` int(10) NOT NULL,
  `apply_id` int(10) NOT NULL,
  `work_description` varchar(1000) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_apply_time`
--

INSERT INTO `job_apply_time` (`id`, `apply_id`, `work_description`, `time`) VALUES
(8, 100, 'Design', '4'),
(9, 100, 'Development', '45'),
(10, 102, 'Design', '4'),
(11, 105, 'fwetete', '4'),
(12, 107, 'Design', '4'),
(13, 108, 'Design', '4'),
(14, 108, 'Development', '23'),
(15, 115, 'find source', '4'),
(16, 115, 'sale', '10');

-- --------------------------------------------------------

--
-- Table structure for table `job_boost_payment`
--

CREATE TABLE `job_boost_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `txn_id` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_boost_payment`
--

INSERT INTO `job_boost_payment` (`id`, `user_id`, `post_id`, `account_no`, `txn_id`, `amount`, `status`, `created_at`) VALUES
(1, 22, 26, '01879186653', '7DFT6487JDW', '50', 1, '2021-06-14 12:33:17'),
(2, 22, 12, '0187186653', '4536853686', '50', 1, '2021-06-15 09:05:42'),
(4, 22, 14, '0187186653', '4536853686', '50', 1, '2021-06-28 06:58:31'),
(5, 119, 83, '01723584950', 'tx12434873223879', '50', 0, '2021-06-28 10:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `job_title` varchar(500) NOT NULL,
  `work_authority` varchar(191) NOT NULL,
  `work_category_id` varchar(191) NOT NULL,
  `sub_category_id` varchar(191) NOT NULL,
  `approximate_budget` varchar(100) DEFAULT NULL,
  `signup_date` varchar(191) NOT NULL,
  `work_completion_date` varchar(191) NOT NULL,
  `work_description` varchar(2000) NOT NULL,
  `qualifications` varchar(2000) NOT NULL,
  `terms_condition` varchar(2000) NOT NULL,
  `publish_date` varchar(191) NOT NULL,
  `submit_date` varchar(191) NOT NULL,
  `priority_of_works` varchar(191) NOT NULL,
  `need_bidder` varchar(100) DEFAULT NULL,
  `work_type_bidder` varchar(100) DEFAULT NULL,
  `spec` varchar(100) DEFAULT NULL,
  `catalog` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `workprocess` varchar(100) DEFAULT NULL,
  `manpower` varchar(100) DEFAULT NULL,
  `quotation` varchar(100) DEFAULT NULL,
  `tin_bidder` varchar(100) DEFAULT NULL,
  `bin_bidder` varchar(100) DEFAULT NULL,
  `nid_bidder` varchar(100) DEFAULT NULL,
  `taxreturn_bidder` varchar(100) DEFAULT NULL,
  `trade_licence_bidder` varchar(255) DEFAULT NULL,
  `audit_report_bidder` varchar(100) DEFAULT NULL,
  `audit_year_bidder` int(100) DEFAULT NULL,
  `similar_work_bidder` varchar(100) DEFAULT NULL,
  `similar_work_years_bidder` varchar(250) DEFAULT NULL,
  `similar_work_amount_bidder` varchar(250) DEFAULT NULL,
  `similar_work_exp_type_bidder` varchar(250) DEFAULT NULL,
  `work_order` varchar(191) DEFAULT NULL,
  `general_work_bidder` varchar(100) DEFAULT NULL,
  `security_bidder` varchar(100) DEFAULT NULL,
  `need_investor` varchar(100) DEFAULT NULL,
  `work_type_investor` varchar(100) DEFAULT NULL,
  `tin_investor` varchar(100) DEFAULT NULL,
  `bin_investor` varchar(100) DEFAULT NULL,
  `nid_investor` varchar(100) DEFAULT NULL,
  `taxreturn_investor` varchar(100) DEFAULT NULL,
  `trade_licence_investor` varchar(191) DEFAULT NULL,
  `audit_report_investor` varchar(100) DEFAULT NULL,
  `audit_year_investor` int(100) DEFAULT NULL,
  `similar_work_investor` varchar(100) DEFAULT NULL,
  `similar_work_years_investor` varchar(50) DEFAULT NULL,
  `similar_work_amount_investor` varchar(50) DEFAULT NULL,
  `similar_work_exp_type_investor` varchar(50) DEFAULT NULL,
  `general_work_investor` varchar(100) DEFAULT NULL,
  `investor_required` varchar(100) DEFAULT NULL,
  `investment_amount` varchar(100) DEFAULT NULL,
  `profit_share` varchar(100) DEFAULT NULL,
  `security_investor` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `date_and_time` varchar(100) NOT NULL,
  `work_description_file` varchar(200) DEFAULT NULL,
  `qualifications_file` varchar(200) DEFAULT NULL,
  `terms_and_conditions_file` varchar(100) DEFAULT NULL,
  `remarks` varchar(10) NOT NULL,
  `boosted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `user_id`, `job_title`, `work_authority`, `work_category_id`, `sub_category_id`, `approximate_budget`, `signup_date`, `work_completion_date`, `work_description`, `qualifications`, `terms_condition`, `publish_date`, `submit_date`, `priority_of_works`, `need_bidder`, `work_type_bidder`, `spec`, `catalog`, `time`, `workprocess`, `manpower`, `quotation`, `tin_bidder`, `bin_bidder`, `nid_bidder`, `taxreturn_bidder`, `trade_licence_bidder`, `audit_report_bidder`, `audit_year_bidder`, `similar_work_bidder`, `similar_work_years_bidder`, `similar_work_amount_bidder`, `similar_work_exp_type_bidder`, `work_order`, `general_work_bidder`, `security_bidder`, `need_investor`, `work_type_investor`, `tin_investor`, `bin_investor`, `nid_investor`, `taxreturn_investor`, `trade_licence_investor`, `audit_report_investor`, `audit_year_investor`, `similar_work_investor`, `similar_work_years_investor`, `similar_work_amount_investor`, `similar_work_exp_type_investor`, `general_work_investor`, `investor_required`, `investment_amount`, `profit_share`, `security_investor`, `status`, `date_and_time`, `work_description_file`, `qualifications_file`, `terms_and_conditions_file`, `remarks`, `boosted`) VALUES
(14, 59, 'Tushar', '2', '9', '518', '500000', '2021-06-30', '2021-08-30', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '17-06-2021 ', '2021-06-24', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '02', '400000', '40%', '10%', 2, '17-06-2021, 2:51 pm', '17-06-2021_1623919878.pdf', '17-06-2021_16239198781.pdf', '17-06-2021_16239198782.pdf', 'Add', 0),
(15, 22, 'Software Engineer', '2', '9', '517', '300000', '2021-06-24', '2021-07-09', '<p>rtytryrtyrtfgyhh</p>', '<p>fdhgfhgfhfghgf</p>', '<p>dfhgfhgdfbvgfdgf</p>', '19-06-2021 ', '2021-06-25', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', NULL, 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '2', '60000', '40%', '10%', 2, '19-06-2021, 3:26 pm', '19-06-2021_1624094795.pdf', '19-06-2021_16240947951.pdf', '19-06-2021_16240947952.pdf', 'Add', 0),
(16, 22, 'Software Development', '2', '10', '514', '500000', '2021-06-30', '2021-07-07', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '21-06-2021 ', '2021-06-23', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '2', '50000', '40%', '10%', 2, '21-06-2021, 12:14 pm', '21-06-2021_1624256054.pdf', '21-06-2021_16242560541.pdf', '21-06-2021_16242560542.pdf', 'Add', 0),
(17, 22, 'Mobile App Development', '1', '36', '705', '600000', '2021-06-24', '2021-07-02', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '21-06-2021 ', '2021-06-23', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '21-06-2021, 12:17 pm', '21-06-2021_1624256272.pdf', '21-06-2021_16242562721.pdf', '21-06-2021_16242562722.pdf', 'Add', 0),
(18, 59, 'Appartment Construction', '2', '7', '549', '700000', '2021-06-24', '2021-07-08', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '21-06-2021 ', '2021-06-30', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '21-06-2021, 12:21 pm', '21-06-2021_1624256510.pdf', '21-06-2021_16242565101.pdf', '21-06-2021_16242565102.pdf', 'Add', 0),
(19, 59, 'Web Design/UI/UX', '2', '2', '4', '800000', '2021-06-29', '2021-07-09', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '21-06-2021 ', '2021-06-30', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '21-06-2021, 12:36 pm', '21-06-2021_1624257383.pdf', '21-06-2021_16242573831.pdf', '21-06-2021_16242573832.pdf', 'Add', 0),
(20, 56, 'Software Tester', '1', '2', '4', '900000', '2021-06-24', '2021-06-30', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '21-06-2021 ', '2021-06-29', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '21-06-2021, 12:41 pm', '21-06-2021_1624257666.pdf', '21-06-2021_16242576661.pdf', '21-06-2021_16242576662.pdf', 'Add', 0),
(21, 56, 'Phython Developer', '1', '8', '4', '1000000', '2021-06-24', '2021-06-29', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>', '21-06-2021 ', '2021-06-24', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '21-06-2021, 12:44 pm', '21-06-2021_1624257851.pdf', '21-06-2021_16242578511.pdf', NULL, 'Add', 0),
(22, 52, 'Website Development for bidder', '1', '36', '693', '400000', '2021-06-26', '2021-07-10', '<p>544646</p>', '<p>464645</p>', '<p>45645645ggfjfgj</p>', '22-06-2021 ', '2021-06-24', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', NULL, NULL, '', '1', NULL, '1', '', '', '', '', NULL, '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 6, '22-06-2021, 2:23 pm', '22-06-2021_1624350223.pdf', '22-06-2021_16243502231.pdf', '22-06-2021_16243502232.pdf', 'Add', 0),
(23, 52, 'Website Development for investor', '2', '36', '693', '3000000', '2021-06-24', '2021-06-26', '<p>gngdgfdghdfg</p>', '<p>gfdgtd</p>', '<p>hghfhgf</p>', '22-06-2021 ', '2021-06-23', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NID', NULL, '', NULL, NULL, NULL, '', '', '', '', NULL, '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '1', '200000', '40%', '10%', 6, '22-06-2021, 2:29 pm', '22-06-2021_1624350552.pdf', '22-06-2021_16243505521.pdf', '22-06-2021_16243505522.pdf', 'Add', 0),
(24, 52, 'Software Development for investor', '2', '36', '692', '5000000', '2021-06-23', '2021-07-10', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '22-06-2021 ', '2021-06-23', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', '', NULL, '10%', '1', '4', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '2', '400000', '40%', '10%', 6, '22-06-2021, 6:01 pm', '22-06-2021_1624363285.pdf', '22-06-2021_16243632851.pdf', '22-06-2021_16243632852.pdf', 'Add', 0),
(25, 52, 'Website Development', '2', '36', '692', '600000', '2021-06-25', '2021-07-10', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '22-06-2021 ', '2021-06-25', '3', '1', '2', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '5', '5000000', 'Govt', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '22-06-2021, 6:32 pm', '22-06-2021_1624365158.pdf', '22-06-2021_16243651581.pdf', '22-06-2021_16243651582.pdf', 'Add', 0),
(26, 22, 'COVID Alarm', '2', '2', '5', '30000000', '2021-06-17', '2021-10-30', '<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\">Artificial intelligence (AI) is the simulation of human intelligence processes by machines, especially computer systems. Specific applications of AI include&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchenterpriseai.techtarget.com/definition/expert-system\">expert systems</a>, natural language processing (<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchbusinessanalytics.techtarget.com/definition/natural-language-processing-NLP\">NLP</a>), speech recognition and&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchenterpriseai.techtarget.com/definition/machine-vision-computer-vision\">machine vision</a>.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\">AI programming focuses on three cognitive skills: learning, reasoning and self-correction.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\"><span style=\"font-weight: bold;\">Learning processes.</span>&nbsp;This aspect of AI programming focuses on acquiring data and creating rules for how to turn the data into actionable information. The rules, which are called&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://whatis.techtarget.com/definition/algorithm\">algorithms</a>, provide computing devices with step-by-step instructions for how to complete a specific task.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\"><span style=\"font-weight: bold;\">Reasoning processes.</span>&nbsp;This aspect of AI programming focuses on choosing the right algorithm to reach a desired outco', '<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\">Artificial intelligence (AI) is the simulation of human intelligence processes by machines, especially computer systems. Specific applications of AI include&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchenterpriseai.techtarget.com/definition/expert-system\">expert systems</a>, natural language processing (<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchbusinessanalytics.techtarget.com/definition/natural-language-processing-NLP\">NLP</a>), speech recognition and&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchenterpriseai.techtarget.com/definition/machine-vision-computer-vision\">machine vision</a>.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\">AI programming focuses on three cognitive skills: learning, reasoning and self-correction.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\"><span style=\"font-weight: bold;\">Learning processes.</span>&nbsp;This aspect of AI programming focuses on acquiring data and creating rules for how to turn the data into actionable information. The rules, which are called&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://whatis.techtarget.com/definition/algorithm\">algorithms</a>, provide computing devices with step-by-step instructions for how to complete a specific task.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\"><span style=\"font-weight: bold;\">Reasoning processes.</span>&nbsp;This aspect of AI programming focuses on choosing the right algorithm to reach a desired outco', '<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\">Artificial intelligence (AI) is the simulation of human intelligence processes by machines, especially computer systems. Specific applications of AI include&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchenterpriseai.techtarget.com/definition/expert-system\">expert systems</a>, natural language processing (<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchbusinessanalytics.techtarget.com/definition/natural-language-processing-NLP\">NLP</a>), speech recognition and&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://searchenterpriseai.techtarget.com/definition/machine-vision-computer-vision\">machine vision</a>.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\">AI programming focuses on three cognitive skills: learning, reasoning and self-correction.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\"><span style=\"font-weight: bold;\">Learning processes.</span>&nbsp;This aspect of AI programming focuses on acquiring data and creating rules for how to turn the data into actionable information. The rules, which are called&nbsp;<a style=\"color: #00b3ac; transition: color 0.2s ease 0s;\" href=\"https://whatis.techtarget.com/definition/algorithm\">algorithms</a>, provide computing devices with step-by-step instructions for how to complete a specific task.</p>\r\n<p style=\"margin: 1.5em 0px; font-size: 18px; line-height: 1.67em; color: #6c6c6c; font-family: Arial, sans-serif; background-color: #ffffff;\"><span style=\"font-weight: bold;\">Reasoning processes.</span>&nbsp;This aspect of AI programming focuses on choosing the right algorithm to reach a desired outco', '24-06-2021 ', '2021-10-15', '1', '1', '1', NULL, 'catalog', NULL, 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', '1', '4', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '9', '10000000', '40%', '10%', 6, '24-06-2021, 5:01 pm', '24-06-2021_1624532463.pdf', '24-06-2021_16245324631.pdf', '24-06-2021_16245324632.pdf', 'Add', 0),
(27, 52, 'Potato Project investor', '2', '36', '', '60000', '2021-06-25', '2021-07-10', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '26-06-2021 ', '2021-07-10', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', '', NULL, '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '1', '60000', '40%', '10%', 2, '26-06-2021, 6:45 pm', '26-06-2021_1624711553.pdf', NULL, '26-06-2021_16247115531.pdf', 'Add', 0),
(28, 52, 'Potato Project investor', '2', '17', '411', '60000', '2021-06-25', '2021-07-10', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '26-06-2021 ', '2021-07-10', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2', NULL, '2', '', '', '', '', '2', '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '1', '60000', '40%', '10%', 2, '26-06-2021, 6:47 pm', '26-06-2021_1624711679.pdf', NULL, '26-06-2021_16247116791.pdf', 'Add', 0),
(29, 52, 'Rice Project investor', '2', '36', '692', '40000', '2021-06-27', '2021-07-10', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span></p>', '26-06-2021 ', '2021-07-04', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', '', NULL, '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '1', '1', '40000', '40%', '10%', 2, '26-06-2021, 6:52 pm', NULL, NULL, '26-06-2021_1624711964.pdf', 'Add', 0),
(30, 82, 'Computer Sales for Bidder', '1', '36', '694', '80000', '2021-06-27', '2021-07-10', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</span></p>', '27-06-2021 ', '2021-06-30', '3', '1', '1', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '27-06-2021, 11:29 am', '27-06-2021_1624771765.pdf', '27-06-2021_16247717651.pdf', '27-06-2021_16247717652.pdf', 'Add', 0),
(31, 82, 'Motor Parts Sales', '2', '36', '709', '90000', '2021-06-27', '2021-07-10', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularis</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularis</span></p>', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularis</span></p>', '27-06-2021 ', '2021-07-10', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', '', NULL, '10%', '1', '1', 'TIN', 'BIN', 'NID', NULL, NULL, '1', NULL, '1', '', '', '', '2', '1', '90000', '40%', '10%', 2, '27-06-2021, 5:08 pm', NULL, '27-06-2021_1624792125.pdf', NULL, 'Add', 0);
INSERT INTO `job_post` (`id`, `user_id`, `job_title`, `work_authority`, `work_category_id`, `sub_category_id`, `approximate_budget`, `signup_date`, `work_completion_date`, `work_description`, `qualifications`, `terms_condition`, `publish_date`, `submit_date`, `priority_of_works`, `need_bidder`, `work_type_bidder`, `spec`, `catalog`, `time`, `workprocess`, `manpower`, `quotation`, `tin_bidder`, `bin_bidder`, `nid_bidder`, `taxreturn_bidder`, `trade_licence_bidder`, `audit_report_bidder`, `audit_year_bidder`, `similar_work_bidder`, `similar_work_years_bidder`, `similar_work_amount_bidder`, `similar_work_exp_type_bidder`, `work_order`, `general_work_bidder`, `security_bidder`, `need_investor`, `work_type_investor`, `tin_investor`, `bin_investor`, `nid_investor`, `taxreturn_investor`, `trade_licence_investor`, `audit_report_investor`, `audit_year_investor`, `similar_work_investor`, `similar_work_years_investor`, `similar_work_amount_investor`, `similar_work_exp_type_investor`, `general_work_investor`, `investor_required`, `investment_amount`, `profit_share`, `security_investor`, `status`, `date_and_time`, `work_description_file`, `qualifications_file`, `terms_and_conditions_file`, `remarks`, `boosted`) VALUES
(32, 22, 'SFT', '2', '2', '5', '1000000', '2021-07-01', '2021-07-30', '<p>osmaxoimsdioxcmdomc</p>', '<p>idmcoiemcd</p>', '<p>kmsdcdio</p>', '01-07-2021 ', '2021-07-30', '2', '1', '2', 'spec', NULL, 'time', NULL, 'manpower', 'quotation', 'TIN', 'BIN', 'NID', NULL, '', '1', NULL, '1', '', '', '', '', '1', '10%', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 2, '01-07-2021, 3:34 pm', '01-07-2021_1625132097.pdf', '01-07-2021_16251320971.pdf', '01-07-2021_16251320972.pdf', 'Add', 0),
(33, 22, 'SAW', '2', '9', '518', '900000', '2021-07-03', '2021-07-08', '<p>test</p>', '', '<p>test</p>', '02-07-2021 ', '2021-07-08', '3', '1', '1', NULL, 'catalog', NULL, 'workprocess', 'manpower', NULL, NULL, 'BIN', NULL, 'Tax Return', '', '1', NULL, '1', '', '', '', '', '1', '10%', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, '', '', '40%', '10%', 1, '02-07-2021, 5:17 pm', '02-07-2021_1625224630.pdf', '02-07-2021_16252246301.pdf', '02-07-2021_16252246302.pdf', 'Add', 0),
(34, 22, 'Data Analysis', '2', '2', '4', '900000', '2021-07-04', '2021-07-06', '<p>test</p>', '<p>test</p>', '<p>test</p>', '03-07-2021 ', '2021-07-03', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', '', NULL, NULL, NULL, '10%', '1', '1', NULL, 'BIN', NULL, 'Tax Return', 'Trade Licence', '1', NULL, '1', '7', '10000', 'Govt', '1', '1', '100000000', '40%', '10%', 1, '03-07-2021, 4:02 pm', '03-07-2021_1625306526.pdf', '03-07-2021_16253065261.pdf', '03-07-2021_16253065262.pdf', 'Add', 0),
(35, 22, 'Yes', '2', '2', '4', '1000000', '2021-07-04', '2021-07-06', '<p>test</p>', '<p>test</p>', '<p>test</p>', '03-07-2021 ', '2021-07-01', '3', '1', '2', 'spec', 'catalog', 'time', 'workprocess', 'manpower', 'quotation', 'TIN', 'BIN', 'NID', 'Tax Return', 'Trade Licence', '1', 3, '1', '3', '100000', 'Govt', '1', '1', '10%', '1', '1', 'TIN', 'BIN', 'NID', 'Tax Return', 'Trade Licence', '1', NULL, '1', '4', '10000000', 'Govt', '1', '3', '10000000000', '40%', '10%', 1, '03-07-2021, 4:17 pm', '03-07-2021_1625307475.pdf', '03-07-2021_16253074751.pdf', '03-07-2021_16253074752.pdf', 'Add', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_post_message`
--

CREATE TABLE `job_post_message` (
  `id` int(10) NOT NULL,
  `job_id` int(100) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_post_message`
--

INSERT INTO `job_post_message` (`id`, `job_id`, `reason`) VALUES
(1, 3, 'sadsd'),
(2, 2, 'dsfds'),
(3, 3, 'fgf'),
(4, 3, 'fdgf'),
(5, 3, 'sdsa'),
(6, 3, 'Wrong Information'),
(7, 4, 'wrong'),
(8, 6, 'apnar post ti valo na'),
(9, 1, 'gfdgd'),
(10, 3, ''),
(11, 11, 'egeg');

-- --------------------------------------------------------

--
-- Table structure for table `legal`
--

CREATE TABLE `legal` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `audit_report` varchar(500) NOT NULL,
  `trade_license` varchar(60) NOT NULL,
  `tin` varchar(60) NOT NULL,
  `bin` varchar(70) NOT NULL,
  `income_tax` varchar(70) NOT NULL,
  `brochure` varchar(50) NOT NULL,
  `joint_venture` varchar(50) NOT NULL,
  `board_of_resolution` varchar(50) NOT NULL,
  `completion_letter` varchar(50) NOT NULL,
  `work_orders` varchar(50) NOT NULL,
  `terms_condition` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `legal`
--

INSERT INTO `legal` (`id`, `user_id`, `audit_report`, `trade_license`, `tin`, `bin`, `income_tax`, `brochure`, `joint_venture`, `board_of_resolution`, `completion_letter`, `work_orders`, `terms_condition`, `created_by`, `date_and_time`, `remarks`) VALUES
(3, 14, '', '09-05-2021_16205489211.png', '09-05-2021_16205489212.png', '09-05-2021_16205489213.png', '', '', '', '', '', '', '1', '14', '09-05-2021, 2:28 pm', 'Add'),
(4, 17, '09-05-2021_1620550274.png', '09-05-2021_16205502741.png', '09-05-2021_16205502742.png', '09-05-2021_16205502743.png', '', '', '', '', '', '', '1', '17', '09-05-2021, 2:51 pm', 'Add'),
(10, 22, '22-06-2021_1624349057.docx', '18-05-2021_16213416261.jpg', '18-05-2021_16213416262.jpg', '18-05-2021_16213416262.jpg', '18-05-2021_16213416262.jpg', '18-05-2021_16213416265.jpg', '18-05-2021_16213416265.jpg', '18-05-2021_16213416266.jpg', '18-05-2021_16213416267.jpg', '10-06-2021_1623307002.pdf', '1', 'user5', '18-05-2021, 6:40 pm', 'Add'),
(13, 28, '24-05-2021_1621836198.jpg', '24-05-2021_16218361981.jpg', '24-05-2021_16218361982.jpg', '24-05-2021_162183619810.jpg', '24-05-2021_16218361984.jpg', '24-05-2021_16218361985.jpg', '24-05-2021_16218361986.jpg', '24-05-2021_16218361987.jpg', '24-05-2021_16218361988.jpg', '24-05-2021_16218361989.jpg', '1', 'user11', '24-05-2021, 12:03 pm', 'Add'),
(14, 33, '31-05-2021_1622463522.PNG', '31-05-2021_16224635221.PNG', '31-05-2021_16224635222.PNG', '31-05-2021_162246352210.PNG', '31-05-2021_16224635224.PNG', '31-05-2021_16224635225.PNG', '31-05-2021_16224635226.PNG', '31-05-2021_16224635227.PNG', '31-05-2021_16224635228.PNG', '31-05-2021_16224635229.PNG', '1', 'mannan', '31-05-2021, 6:18 pm', 'Add'),
(15, 34, '15-06-2021_1623758691.png', '31-05-2021_1622464481.png', '31-05-2021_16224644811.png', '31-05-2021_16224644815.jpg', '31-05-2021_16224644813.png', '31-05-2021_16224644814.png', '15-06-2021_16237586911.png', '31-05-2021_16224644812.jpg', '31-05-2021_16224644813.jpg', '15-06-2021_16237586912.png', '1', 'S.M Shuvo', '31-05-2021, 6:34 pm', 'Add'),
(16, 52, '28-06-2021_1624856273.png', '06-06-2021_1622978832.pdf', '06-06-2021_16229788321.pdf', '06-06-2021_16229788322.pdf', '06-06-2021_16229788322.docx', '06-06-2021_16229788323.docx', '06-06-2021_16229788324.docx', '06-06-2021_16229788325.docx', '06-06-2021_16229788326.docx', '06-06-2021_16229788327.docx', '1', 'Webase', '06-06-2021, 5:27 pm', 'Add'),
(17, 55, '08-06-2021_1623154313.pdf', '08-06-2021_16231543131.pdf', '08-06-2021_16231543132.pdf', '08-06-2021_162315431310.pdf', '08-06-2021_16231543134.pdf', '08-06-2021_16231543135.pdf', '08-06-2021_16231543136.pdf', '08-06-2021_16231543137.pdf', '08-06-2021_16231543138.pdf', '08-06-2021_16231543139.pdf', '1', 'rana', '08-06-2021, 6:11 pm', 'Add'),
(22, 56, '11-06-2021_1623395901.jpg', '11-06-2021_16233959011.jpg', '11-06-2021_16233959012.jpg', '11-06-2021_16233959019.jpg', '11-06-2021_1623395901.png', '11-06-2021_16233959014.jpg', '11-06-2021_16233959015.jpg', '11-06-2021_16233959016.jpg', '11-06-2021_16233959017.jpg', '11-06-2021_16233959018.jpg', '1', 'shoriful1234', '11-06-2021, 1:18 pm', 'Add'),
(23, 58, '13-06-2021_1623566412.jpg', '13-06-2021_16235664121.jpg', '13-06-2021_16235664122.jpg', '13-06-2021_162356641210.jpg', '13-06-2021_16235664124.jpg', '13-06-2021_16235664125.jpg', '13-06-2021_16235664126.jpg', '13-06-2021_16235664127.jpg', '13-06-2021_16235664128.jpg', '13-06-2021_16235664129.jpg', '1', 'Rabiya2020', '13-06-2021, 12:40 pm', 'Add'),
(24, 59, '13-06-2021_1623576993.png', '13-06-2021_1623576993.png', '13-06-2021_16235769931.png', '13-06-2021_16235769939.png', '13-06-2021_16235769933.png', '13-06-2021_16235769934.png', '13-06-2021_16235769935.png', '13-06-2021_16235769936.png', '13-06-2021_16235769937.png', '13-06-2021_16235769938.png', '1', 'tushar', '13-06-2021, 3:36 pm', 'Add'),
(25, 79, '26-06-2021_1624706630.pdf', '26-06-2021_16247066301.pdf', '26-06-2021_16247066302.pdf', '26-06-2021_162470663010.pdf', '26-06-2021_16247066304.pdf', '26-06-2021_16247066305.pdf', '26-06-2021_16247066306.pdf', '26-06-2021_16247066307.pdf', '26-06-2021_16247066308.pdf', '26-06-2021_16247066309.pdf', '1', 'Datasoft', '26-06-2021, 5:23 pm', 'Add'),
(26, 82, '26-06-2021_1624713844.pdf', '26-06-2021_16247138441.pdf', '26-06-2021_16247138442.pdf', '26-06-2021_162471384410.pdf', '26-06-2021_16247138444.pdf', '26-06-2021_16247138445.pdf', '26-06-2021_16247138446.pdf', '26-06-2021_16247138447.pdf', '26-06-2021_16247138448.pdf', '26-06-2021_16247138449.pdf', '1', 'web', '26-06-2021, 7:24 pm', 'Add'),
(27, 84, '27-06-2021_1624779173.pdf', '27-06-2021_16247791731.pdf', '27-06-2021_16247791732.pdf', '27-06-2021_162477917310.pdf', '27-06-2021_16247791734.pdf', '27-06-2021_16247791735.pdf', '27-06-2021_16247791736.pdf', '27-06-2021_16247791737.pdf', '27-06-2021_16247791738.pdf', '27-06-2021_16247791739.pdf', '1', 'Shakibul Trade', '27-06-2021, 1:32 pm', 'Add'),
(28, 118, '28-06-2021_1624872731.pdf', '28-06-2021_16248727311.pdf', '28-06-2021_16248727312.pdf', '28-06-2021_16248727318.pdf', '28-06-2021_16248727313.pdf', '', '28-06-2021_16248727314.pdf', '28-06-2021_16248727315.pdf', '28-06-2021_16248727316.pdf', '28-06-2021_16248727317.pdf', '1', 'GM Group', '28-06-2021, 3:32 pm', 'Add'),
(29, 128, '', '', '', '', '', '', '', '', '', '', '1', 'Veracious SLTD', '29-06-2021, 7:30 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `management_team`
--

CREATE TABLE `management_team` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `nid` varchar(60) NOT NULL,
  `tin` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `profile_picture` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management_team`
--

INSERT INTO `management_team` (`id`, `user_id`, `name`, `designation`, `nid`, `tin`, `email`, `phone`, `profile_picture`, `created_by`, `date_and_time`, `remarks`) VALUES
(13, 2, 'Shakibul Islam', 'webdeveloper', '435646567767', '3465467765765', 'amhackeri575@gmail.com', '01869121524', '17-05-2021_1621245612.PNG', 'user1', '17-05-2021, 4:00 pm', 'Add'),
(14, 21, 'Shoriful Islam Sobuj', 'sr. programmer', '123456789', '159753', 'shoriful@gmail.com', '01554212110', '18-05-2021_1621333299.jpg', 'user5', '18-05-2021, 5:15 pm', 'Update'),
(15, 21, 'Kamrul Islam', 'sr. programmer', '147258369', '147258369', 'kamrul@gmail.com', '01554212112', '18-05-2021_1621335629.jpg', 'user5', '18-05-2021, 5:15 pm', 'Update'),
(16, 21, 'Mrs. Kamal uddin', 'Programmer', '121212', '121212', 'kamal@gmail.com', '01554212115', '18-05-2021_1621335763.jpg', 'user5', '18-05-2021, 5:13 pm', 'Update'),
(17, 21, 'Mannan Ali', 'Manager', '123456', '123456+', 'mannan@gmail.com', '01554212118', '18-05-2021_1621336589.jpg', 'user5', '18-05-2021, 5:16 pm', 'Add'),
(21, 27, 'fdsfdsf', 'dsfsdf', 'fdsgsdfgds', 'sdfgdsfgdsf', 'sadfgfdg@gmail.com', '01555555555555', '24-05-2021_1621830324.jpg', 'user10', '24-05-2021, 10:25 am', 'Add'),
(22, 28, 'fdsfd', 'dsfdsf', '354325435', '342133424', 'user112@gmail.com', '0183454654', '24-05-2021_1621835176.jpg', 'user11', '24-05-2021, 11:46 am', 'Add'),
(23, 30, 'Tusar', 'designer', 'dsfdsf345435', '2343544356', 'reedwanultpi@gmail.com', '43564345675', '30-05-2021_1622372537.PNG', 'user112', '30-05-2021, 5:02 pm', 'Add'),
(24, 33, 'Mizanur Rahman', 'dfdsf', '342435', '3424', 'applesoftit7@gmail.com', '01717022024', '31-05-2021_1622459776.png', 'mannan', '31-05-2021, 5:16 pm', 'Add'),
(25, 34, 'John Wick', 'COO', '23165987/875', '987553454', 'john@erpstagi.xyz', '0164349879', '31-05-2021_1622464178.png', 'S.M Shuvo', '31-05-2021, 6:29 pm', 'Add'),
(26, 36, 'dfsgfdg', 'dsgfdg', '46346456', '23463465', 'shakibuli085@gmail.com', '124564645654', '31-05-2021_1622466452.PNG', 'enlist12345', '31-05-2021, 7:07 pm', 'Add'),
(27, 45, 'Md Abdul Mannan', 'BA', '12232434', '33232', 'admin@gmail.com', '013155650', '03-06-2021_1622699841.docx', 'mannan1', '03-06-2021, 11:57 am', 'Update'),
(28, 24, 'Shuvo ', 'Software Engineering', '256487546564', '354645677567', 'shuvo@gmail.com', '01589632563', '06-06-2021_1622977900.jpg', 'shakib123', '06-06-2021, 5:11 pm', 'Update'),
(29, 34, 'S.M Shuvo', 'Software Engineer', '3216549870123456789', '0258371946', 'smshuvo1612@gmail.com', '01879186653', '06-06-2021_1622967247.jpg', 'S.M Shuvo', '06-06-2021, 2:14 pm', 'Add'),
(30, 52, 'Md Abdul Mannan', 'Business Analyst nn', '45454545', '5325525462', 'mannanswe608@gmail.com', '01315565037', '08-06-2021_1623153208.jpg', 'Webase', '06-06-2021, 5:08 pm', 'Add'),
(31, 55, 'Rahman', 'BA', '11111', '11110', 'rana@gmail.com', '01795075226', '08-06-2021_1623154800.jpg', 'rana', '08-06-2021, 6:07 pm', 'Add'),
(33, 56, 'Shakibul Islam', 'teacher', '123456987', '369852', 'dipduniya@gmail.com', '01869121567', '11-06-2021_1623395746.jpg', 'shoriful1234', '11-06-2021, 1:15 pm', 'Add'),
(37, 58, 'Shakibul Islam', 'Web Developer', '5896532598', '568965478965', 'shakibul19@gmail.com', '01258965325', '13-06-2021_1623565970.jpg', 'Rabiya2020', '13-06-2021, 12:32 pm', 'Add'),
(38, 59, 'tushar', 'abc', '0123456789123456', '123456789012', 'tushar@gmail.com', '01234567891', '13-06-2021_1623576661.jpg', 'tushar', '13-06-2021, 3:31 pm', 'Add'),
(39, 57, 'Shakib', 'Web Development', '2323434564', '234234345343', 'df@gmail.com', '01569869865', '19-06-2021_1624082462.jpg', 'Mannan2021', '19-06-2021, 12:01 pm', 'Add'),
(42, 75, 'Shakib', 'Web Development', '1454554545', '454545454545', 'df1@gmail.com', '01589656985', '19-06-2021_1624083352.jpg', 'bongla', '19-06-2021, 12:15 pm', 'Add'),
(43, 78, 'ShuvoIslam', 'jhiojlk', '7867876877777', '785678567567', 'smshuvo112@gmail.com', '01869121520', '26-06-2021_1624704519.jpg', 'Craftic Arts', '26-06-2021, 4:48 pm', 'Add'),
(50, 78, 'Shuvo Islam', 'jhiojlk', '4356436456455', '546456456456', 'shj@gmail.com', '01869123524', '26-06-2021_1624705201.jpg', 'Craftic Arts', '26-06-2021, 5:00 pm', 'Add'),
(67, 84, 'Shuvo', 'Dev', '1122334455667', '112233445566', 'ssj@email.com', '01122334455', '27-06-2021_1624777986.png', 'Shakibul Trade', '27-06-2021, 1:13 pm', 'Add'),
(88, 22, 'Shakibul Islam', 'Business man', '19882692618000067', '675756756767', 'shakibuli08@gmail.com', '01869121527', '28-06-2021_1624873517.jpg', 'shakibul1997', '28-06-2021, 3:45 pm', 'Add'),
(89, 119, 'S M Shuvo', 'Web Developer ', '8794563257', '965842358134', 'smshuvo1612@gmail.com', '01789654562', '28-06-2021_1624873800.png', 'Illu Host ', '28-06-2021, 3:50 pm', 'Add'),
(90, 127, 'Mannan', 'Business Analyst', '7878787987', '787878798722', 'admin@gmail.com', '01316565037', '29-06-2021_1624945240.jpg', 'SMG', '29-06-2021, 11:40 am', 'Add'),
(94, 22, 'Reju', 'Web developer', '1111111111', '111111111111', 'reedwanultpi@gmail.com', '01111111111', '29-06-2021_1624961682.jpg', 'shakibul1997', '29-06-2021, 4:14 pm', 'Add'),
(99, 128, 'S.M Shuvo', 'Software Engineer', '32165498701234584', '346345634563455', 'admin11@gmail.com', '01871866782', '29-06-2021_1624972559.png', 'Veracious SLTD', '29-06-2021, 7:15 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `master_bank`
--

CREATE TABLE `master_bank` (
  `id` int(10) NOT NULL,
  `bank_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bank`
--

INSERT INTO `master_bank` (`id`, `bank_name`) VALUES
(1, 'AB Bank'),
(2, 'Islami Bank'),
(3, 'BRAC BANK'),
(4, 'EBL Bank'),
(6, 'DBBL'),
(8, 'EXIM Bank Limited');

-- --------------------------------------------------------

--
-- Table structure for table `master_bank_branch`
--

CREATE TABLE `master_bank_branch` (
  `id` int(10) NOT NULL,
  `bank_id` int(10) NOT NULL,
  `bank_branch_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bank_branch`
--

INSERT INTO `master_bank_branch` (`id`, `bank_id`, `bank_branch_name`) VALUES
(3, 2, 'Mirpur'),
(4, 3, 'Bosundhara'),
(5, 4, 'Mirpur'),
(6, 4, 'Shymoli');

-- --------------------------------------------------------

--
-- Table structure for table `master_blood_group`
--

CREATE TABLE `master_blood_group` (
  `id` int(10) NOT NULL,
  `blood_group_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_blood_group`
--

INSERT INTO `master_blood_group` (`id`, `blood_group_name`) VALUES
(1, 'O+'),
(2, 'O-'),
(3, 'A+'),
(4, 'A-'),
(5, 'B+'),
(6, 'B-'),
(7, 'AB+'),
(8, 'AB-'),
(9, 'Unknown');

-- --------------------------------------------------------

--
-- Table structure for table `master_branch`
--

CREATE TABLE `master_branch` (
  `id` int(10) NOT NULL,
  `branch_name` varchar(500) NOT NULL,
  `branch_code` varchar(500) NOT NULL,
  `branch_limit` varchar(100) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `remarks` varchar(10) NOT NULL,
  `date_and_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_branch`
--

INSERT INTO `master_branch` (`id`, `branch_name`, `branch_code`, `branch_limit`, `created_by`, `remarks`, `date_and_time`) VALUES
(1, 'Farmgate', '1000', '100', 'admin', 'Update', '02-01-2021, 9:13 am');

-- --------------------------------------------------------

--
-- Table structure for table `master_building`
--

CREATE TABLE `master_building` (
  `id` int(10) NOT NULL,
  `building_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_building`
--

INSERT INTO `master_building` (`id`, `building_name`) VALUES
(1, 'West150');

-- --------------------------------------------------------

--
-- Table structure for table `master_category`
--

CREATE TABLE `master_category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(60) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_category`
--

INSERT INTO `master_category` (`id`, `category_name`, `status`) VALUES
(1, 'App Development', 1),
(2, 'Web Develpoment', 1),
(4, 'Software Development', 1),
(5, 'Books & Stationery/ Office Supplies/Printing', 1),
(6, 'Chemicals and Minerals', 1),
(7, 'Construction/Repair Works', 1),
(8, 'Electrical Systems/ Goods/ Services', 1),
(9, 'Fire Arms', 1),
(10, 'Fishery/ Poultry & Livestock', 1),
(11, 'Food & Beverage', 1),
(12, 'Fuels & Lubricants', 1),
(13, 'Furniture/ Decoration/ Design/ Drawing', 1),
(14, 'Hiring/Leasing/Renting', 1),
(15, 'Household/ Consumer Goods & Items', 1),
(16, 'Miscellaneous Items', 1),
(17, 'Plastic/Rubber Items', 1),
(18, 'Security Items/Systems', 1),
(19, 'Spare Parts/Loose Tools', 1),
(20, 'Sports Item', 1),
(21, 'Transport Items', 1),
(22, 'Telecom/Communication', 1),
(23, 'Metals/Raw Materials', 1),
(24, 'Medical Equipment/Instruments & Goods', 1),
(25, 'Hardware (General)', 1),
(26, 'Garment Items/Jute Goods/ Leather Goods', 1),
(27, 'Electronics Goods/Services', 1),
(28, 'Construction/Building Materials', 1),
(29, 'Computer/ Peripherals/ Networking/ Software/ ITES', 1),
(30, 'Civil Works (Repair & Maintenance)', 1),
(31, 'Civil Works (Construction)', 1),
(32, 'Books & Stationery/ Office Supplies/ Printing', 1),
(33, 'Agricultural/ Forestry/ Nursery Items', 1),
(34, 'Equipment/ Machinery/ Instruments', 1),
(35, 'Art/ Craft/ Entertainment/ Fashion/ Painting', 1),
(36, 'Professional Service', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_department`
--

CREATE TABLE `master_department` (
  `id` int(10) NOT NULL,
  `department_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_department`
--

INSERT INTO `master_department` (`id`, `department_name`) VALUES
(1, 'Audit'),
(2, 'Chief Engineer'),
(3, 'HR'),
(4, 'Accounting'),
(5, 'ICT'),
(6, 'English'),
(7, 'Bangla'),
(8, 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `master_designation`
--

CREATE TABLE `master_designation` (
  `id` int(10) NOT NULL,
  `designation_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_designation`
--

INSERT INTO `master_designation` (`id`, `designation_name`) VALUES
(1, 'Accounts officer'),
(2, 'System Analyst'),
(3, 'Managing Director'),
(4, 'senior Lecturer'),
(6, 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `master_district`
--

CREATE TABLE `master_district` (
  `id` int(10) NOT NULL,
  `division_id` int(10) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_district`
--

INSERT INTO `master_district` (`id`, `division_id`, `district_name`) VALUES
(29, 8, 'Sherpur'),
(30, 8, 'Jamalpur'),
(31, 8, 'Netrokona'),
(32, 7, 'Panchagarh'),
(33, 7, 'Dinajpur'),
(34, 7, 'Lalmonirhat'),
(35, 7, 'Nilphamari'),
(36, 7, 'Gaibandha'),
(37, 7, 'Thakurgaon'),
(38, 7, 'Rangpur'),
(39, 7, 'Kurigram'),
(40, 6, 'Chattogram'),
(41, 6, 'Cumilla'),
(42, 6, 'Feni'),
(43, 6, 'Brahmanbaria'),
(44, 6, 'Noakhali'),
(45, 6, 'Chandpur'),
(46, 6, 'Lakshmipur'),
(47, 6, 'Coxsbazar'),
(48, 6, 'Khagrachari'),
(49, 6, 'Bandarban'),
(50, 5, 'Barishal'),
(51, 5, 'Jhalakathi'),
(52, 5, 'Patuakhali'),
(53, 5, 'Pirojpur'),
(54, 5, 'Bhola'),
(55, 5, 'Barguna'),
(56, 4, 'Sylhet'),
(57, 4, 'Moulvibazar'),
(58, 4, 'Habiganj'),
(59, 4, 'Sunamganj'),
(60, 3, 'Dhaka'),
(61, 3, 'Kishoreganj'),
(62, 3, 'Narsingdi'),
(63, 3, 'Gazipur'),
(64, 3, 'Shariatpur'),
(65, 3, 'Narayanganj'),
(66, 3, 'Tangail'),
(67, 3, 'Manikganj'),
(68, 3, 'Munshiganj'),
(69, 3, 'Rajbari'),
(70, 3, 'Faridpur'),
(71, 3, 'Madaripur'),
(72, 3, 'Gopalganj'),
(73, 2, 'Khulna'),
(74, 2, 'Satkhira'),
(75, 2, 'Meherpur'),
(76, 2, 'Narail'),
(77, 2, 'Chuadanga'),
(78, 2, 'Kushtia'),
(79, 2, 'Magura'),
(80, 2, 'Bagerhat'),
(81, 2, 'Jhenaidah'),
(82, 2, 'Jashore'),
(83, 1, 'Rajshahi'),
(84, 1, 'Sirajganj'),
(85, 1, 'Pabna'),
(86, 1, 'Bogura'),
(87, 1, 'Natore'),
(88, 1, 'Joypurhat'),
(89, 1, 'Chapainawabganj'),
(90, 1, 'Naogaon'),
(95, 2, 'khulna'),
(96, 1, 'sirajgong'),
(98, 8, 'Jamalpur'),
(100, 8, 'Sher pur');

-- --------------------------------------------------------

--
-- Table structure for table `master_division`
--

CREATE TABLE `master_division` (
  `id` int(10) NOT NULL,
  `division_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_division`
--

INSERT INTO `master_division` (`id`, `division_name`) VALUES
(1, 'Rajshahi '),
(2, 'Khulna'),
(3, 'Dhaka'),
(4, 'Sylhet'),
(5, 'Barishal '),
(6, 'Chattogram'),
(7, 'Rangpur '),
(8, 'Mymensingh');

-- --------------------------------------------------------

--
-- Table structure for table `master_floor`
--

CREATE TABLE `master_floor` (
  `id` int(10) NOT NULL,
  `building_id` int(10) NOT NULL,
  `floor_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_floor`
--

INSERT INTO `master_floor` (`id`, `building_id`, `floor_name`) VALUES
(1, 1, '01'),
(3, 1, '02'),
(4, 1, '03'),
(5, 1, '04'),
(7, 1, 'south 40');

-- --------------------------------------------------------

--
-- Table structure for table `master_gender`
--

CREATE TABLE `master_gender` (
  `id` int(10) NOT NULL,
  `gender_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_gender`
--

INSERT INTO `master_gender` (`id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `master_marital_status`
--

CREATE TABLE `master_marital_status` (
  `id` int(10) NOT NULL,
  `marital_status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_marital_status`
--

INSERT INTO `master_marital_status` (`id`, `marital_status_name`) VALUES
(1, 'Married'),
(2, 'Unmarried'),
(3, 'Separated'),
(4, 'Single'),
(5, 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `master_menu`
--

CREATE TABLE `master_menu` (
  `id` int(10) NOT NULL,
  `module_id` int(10) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `menu_icon` varchar(100) NOT NULL,
  `menu_sort` int(3) NOT NULL,
  `status` int(2) NOT NULL,
  `show_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_menu`
--

INSERT INTO `master_menu` (`id`, `module_id`, `menu_name`, `menu_url`, `menu_icon`, `menu_sort`, `status`, `show_status`) VALUES
(1, 1, 'User Configuration', 'javascript:;', 'fa fa-share', 1, 1, 0),
(2, 1, 'Master Configuration', 'javascript:;', 'fa fa-share', 2, 1, 0),
(21, 6, 'Student Account', 'javascript:;', 'fa fa-share', 1, 1, 0),
(27, 6, 'Account Entry', 'javascript:;', 'fa fa-share', 2, 1, 0),
(28, 6, 'Account Report', 'javascript:;', 'fa fa-share', 3, 1, 0),
(42, 13, 'Register User', 'register_user/all_register_user', 'Webas', 3, 1, 0),
(45, 13, 'Job', 'job/all_job', 'job', 4, 1, 0),
(46, 13, 'Configuration', 'configuration/all_configuration', 'Configuration', 1, 1, 0),
(47, 22, 'Add Product', 'product/all_product', 'product', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_module`
--

CREATE TABLE `master_module` (
  `id` int(10) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `module_url` varchar(100) NOT NULL,
  `module_icon` varchar(100) NOT NULL,
  `sort` int(3) NOT NULL,
  `status` int(2) NOT NULL,
  `menu_check` int(10) NOT NULL,
  `menu_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_module`
--

INSERT INTO `master_module` (`id`, `module_name`, `module_url`, `module_icon`, `sort`, `status`, `menu_check`, `menu_level`) VALUES
(1, 'Configuration', 'javacsript', 'fa fa-fw fa-sitemap', 1, 1, 1, 3),
(13, 'Frontend', 'javascript', 'fa fa-fw fa-sitemap', 3, 1, 1, 3),
(21, 'Job Management', 'job/all_job', 'Job', 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_power`
--

CREATE TABLE `master_power` (
  `id` int(10) NOT NULL,
  `show_password` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_power`
--

INSERT INTO `master_power` (`id`, `show_password`, `password`) VALUES
(2, '%01557268139%', '425ec76a04a46c3867bf61c5f64083cd');

-- --------------------------------------------------------

--
-- Table structure for table `master_role`
--

CREATE TABLE `master_role` (
  `id` int(10) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `leave_status` int(2) NOT NULL,
  `loan_status` int(2) NOT NULL,
  `swap_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_role`
--

INSERT INTO `master_role` (`id`, `role_name`, `status`, `leave_status`, `loan_status`, `swap_status`) VALUES
(1, 'Admin', 0, 0, 0, 0),
(2, 'Bidder', 1, 0, 0, 0),
(4, 'Office Staff', 1, 0, 0, 0),
(5, 'Student', 1, 0, 0, 0),
(6, 'Faculty', 1, 1, 0, 0),
(7, 'Alumni', 1, 0, 0, 0),
(12, 'Superadmin', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_section`
--

CREATE TABLE `master_section` (
  `id` int(10) NOT NULL,
  `shift_id` int(10) NOT NULL,
  `section_name` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_section`
--

INSERT INTO `master_section` (`id`, `shift_id`, `section_name`) VALUES
(1, 1, 'A'),
(2, 1, 'B'),
(3, 1, 'C'),
(4, 1, 'D'),
(5, 2, 'A'),
(6, 2, 'B'),
(7, 1, 'G');

-- --------------------------------------------------------

--
-- Table structure for table `master_shift`
--

CREATE TABLE `master_shift` (
  `id` int(10) NOT NULL,
  `shift_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_shift`
--

INSERT INTO `master_shift` (`id`, `shift_name`) VALUES
(1, 'Day'),
(2, 'Morning');

-- --------------------------------------------------------

--
-- Table structure for table `master_slot`
--

CREATE TABLE `master_slot` (
  `id` int(10) NOT NULL,
  `slot_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_slot`
--

INSERT INTO `master_slot` (`id`, `slot_name`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th'),
(5, '5th'),
(6, '6th'),
(7, '7th'),
(8, '8th'),
(9, '9th'),
(10, '10th');

-- --------------------------------------------------------

--
-- Table structure for table `master_sub_category`
--

CREATE TABLE `master_sub_category` (
  `id` int(10) NOT NULL,
  `category_id` int(60) NOT NULL,
  `sub_category_name` varchar(60) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_sub_category`
--

INSERT INTO `master_sub_category` (`id`, `category_id`, `sub_category_name`, `status`) VALUES
(3, 2, 'dsfgdfsg', 1),
(4, 2, 'new data', 1),
(5, 2, 'another data', 1),
(6, 1, 'adsad', 1),
(7, 36, 'Actuarial Firm', 1),
(8, 36, 'Advertising Firm', 1),
(9, 36, 'Adviser', 1),
(10, 36, 'Agency/Broker', 1),
(11, 36, 'Appointment/Enlistment', 1),
(12, 36, 'Architectural/Engineering/Decoration Firm', 1),
(13, 36, 'Associates/Partner', 1),
(14, 36, 'Auctioneer', 1),
(15, 36, 'Audio Video Program', 1),
(16, 36, 'Auditor/Audit Firm/CA Firm', 1),
(17, 36, 'Bagging', 1),
(18, 36, 'Bill Collection & Related', 1),
(19, 35, 'Advertisement & Related', 1),
(20, 35, 'Band/Musical Instrument', 1),
(21, 35, 'Bill Board/Sign Board', 1),
(22, 35, 'Equipment', 1),
(23, 35, 'Hanging/Rank/Shoulder Badge etc.', 1),
(24, 35, 'Paintings (Calligraphy/Carving)', 1),
(25, 35, 'Prize/Crest/Trophy', 1),
(26, 35, 'Promotional & Gift Items', 1),
(27, 35, 'Show Piece', 1),
(28, 34, 'Air Conditioner & Related', 1),
(29, 34, 'Air Heater', 1),
(30, 34, 'Air Pre-Heater', 1),
(31, 34, 'Air force Equipment', 1),
(32, 34, 'Annunciation System', 1),
(33, 34, 'Army Equipment', 1),
(34, 34, 'Automated Teller Machine (ATM)', 1),
(35, 34, 'Bio-Gas Plant', 1),
(36, 34, 'Boiler', 1),
(37, 34, 'Cartography', 1),
(38, 34, 'Cleaning Equipment', 1),
(39, 34, 'CNC Machine', 1),
(40, 34, 'Cold Storage', 1),
(41, 34, 'Compressor', 1),
(42, 34, 'Construction Equipment’s', 1),
(43, 34, 'Cooling Tower/HVAC', 1),
(44, 34, 'Dehumidifier', 1),
(45, 34, 'Diving Equipment', 1),
(46, 34, 'Drawing Equipment', 1),
(47, 34, 'Effluent Treatment Plant (ETP)', 1),
(48, 34, 'Engineering Equipment', 1),
(49, 34, 'Fake Note Detecting Machine', 1),
(50, 34, 'Filter', 1),
(51, 34, 'Fire Fighting & Related', 1),
(52, 34, 'Fogger Machine	', 1),
(53, 34, 'Food Processing Machine', 1),
(54, 34, 'Franking Machine', 1),
(55, 34, 'Garments/Knitting', 1),
(56, 34, 'Gas Plant', 1),
(57, 34, 'Gas Related/Gas Well', 1),
(58, 34, 'GPS Systems', 1),
(59, 34, 'Hand Tools/Power Tools', 1),
(60, 34, 'Handling Equipment’s', 1),
(61, 34, 'Incinerator Machine', 1),
(62, 34, 'Industrial', 1),
(63, 34, 'Industrial Recorder', 1),
(64, 34, 'Lab Equipment', 1),
(65, 34, 'Lathe Machine', 1),
(66, 34, 'Lift/Escalator', 1),
(67, 34, 'Measuring Equipment', 1),
(68, 34, 'Measuring Equipment', 1),
(69, 34, 'Meteorological Equipment', 1),
(70, 34, 'Mining Equipment', 1),
(71, 34, 'Naval Equipment’s', 1),
(72, 34, 'Note Binding Machine', 1),
(73, 34, 'Note Counting Machine', 1),
(74, 34, 'Note Sorting Machine', 1),
(75, 34, 'Office Equipment', 1),
(76, 34, 'Packing Machine', 1),
(77, 34, 'Pharmaceutical Machine', 1),
(78, 34, 'Photocopy/Duplicating Machine', 1),
(79, 34, 'Photography/Studio', 1),
(80, 34, 'Point of Sale (POS) System', 1),
(81, 34, 'Printing/Press', 1),
(82, 34, 'Repair & Maintenance', 1),
(83, 34, 'Rescue Equipment', 1),
(84, 34, 'Research Equipment’s', 1),
(85, 34, 'Road Safety Equipment', 1),
(86, 34, 'Scientific Equipment/Instrument', 1),
(87, 34, 'Security Equipment’s', 1),
(88, 34, 'Sewage Treatment Plant (STP)', 1),
(89, 34, 'Simulator', 1),
(90, 34, 'Survey Equipment', 1),
(91, 34, 'Tea Related', 1),
(92, 34, 'Testing Equipment', 1),
(93, 34, 'Textile', 1),
(94, 34, 'Toll Equipment', 1),
(95, 34, 'Training/ Educational Equipment', 1),
(96, 34, 'Tube well & related', 1),
(97, 34, 'Vacuum Plant', 1),
(98, 34, 'Valve', 1),
(99, 34, 'Washing Plant', 1),
(100, 34, 'Water Chiller', 1),
(101, 34, 'Water Cooler', 1),
(102, 34, 'Water Dispenser', 1),
(103, 34, 'Water Heater', 1),
(104, 34, 'Water Meter', 1),
(105, 34, 'Water Purifier Machine (WPM)', 1),
(106, 34, 'Water Related', 1),
(107, 34, 'Water Treatment Plant (WTP)', 1),
(108, 34, 'Weighing Machine', 1),
(109, 34, 'Welding Machine', 1),
(110, 34, 'Well Related', 1),
(111, 34, 'Wind Mapping Equipment', 1),
(112, 34, 'Workshop Machinery', 1),
(113, 33, 'Agricultural Machinery & Equipment', 1),
(114, 33, 'Agricultural Products', 1),
(115, 33, 'Bamboo', 1),
(116, 33, 'Fertilizer', 1),
(117, 33, 'Forest Goods', 1),
(118, 33, 'Nursery Items', 1),
(119, 33, 'Pesticide/Insecticide', 1),
(120, 33, 'Plantation', 1),
(121, 33, 'Plants', 1),
(122, 33, 'Power Tiller', 1),
(123, 33, 'Rubber', 1),
(124, 33, 'Seed', 1),
(125, 33, 'Timber/Wood', 1),
(126, 33, 'Tractor', 1),
(127, 33, 'Tree', 1),
(128, 32, 'Binding', 1),
(129, 32, 'Books', 1),
(130, 32, 'Brochure or Pamphlet', 1),
(131, 32, 'Calculator', 1),
(132, 32, 'Calendar/Diary', 1),
(133, 32, 'Certificate/Registration Card', 1),
(134, 32, 'Credit Card/Security Card', 1),
(135, 32, 'Festoon', 1),
(136, 32, 'Form', 1),
(137, 32, 'Greetings Card', 1),
(138, 32, 'ID Card.', 1),
(139, 32, 'Magazine/Periodicals/Journal', 1),
(140, 32, 'Map', 1),
(141, 32, 'Miscellaneous', 1),
(142, 32, 'Others Printing Works', 1),
(143, 32, 'Packing Materials', 1),
(144, 32, 'Paper', 1),
(145, 32, 'Photo Album', 1),
(146, 32, 'Poster', 1),
(147, 32, 'Printed Certificate', 1),
(148, 32, 'Printing Items', 1),
(149, 32, 'Report', 1),
(150, 32, 'Scratch Card', 1),
(151, 32, 'Stationery', 1),
(152, 32, 'Tabulation', 1),
(153, 32, 'Training Materials', 1),
(154, 32, 'Voter List', 1),
(155, 31, 'Aluminum Works', 1),
(156, 31, 'Bazaar, Market, Shop', 1),
(157, 31, 'Beautification related works', 1),
(158, 31, 'Bicycle/Motorcycle Stand', 1),
(159, 31, 'Bridge (Large)', 1),
(160, 31, 'Bridge/Culvert (Medium & Small)', 1),
(161, 31, 'Building (Medium & Small)', 1),
(162, 31, 'Building (Large)	', 1),
(163, 31, 'Bus Terminal', 1),
(164, 31, 'Cattle/Zebra Crossing', 1),
(165, 31, 'Cattle/Zebra Crossing', 1),
(166, 31, 'Civil Works (Medium & Small)', 1),
(167, 31, 'Civil Works (Large)', 1),
(168, 31, 'Dam, Barrage Related', 1),
(169, 31, 'Drain Slabs', 1),
(170, 31, 'Drain, Canal', 1),
(171, 31, 'Dredging work', 1),
(172, 31, 'Fencing/Netting', 1),
(173, 31, 'Ferry Ghats/Jetty/Pontoon/Launch Terminal', 1),
(174, 31, 'Fly Over', 1),
(175, 31, 'Foot Over Bridge', 1),
(176, 31, 'Footpath, Pavement, Walkway', 1),
(177, 31, 'Fountains', 1),
(178, 31, 'Gas Line & Related (Large)', 1),
(179, 31, 'Gas Line & Related (Medium & Small)', 1),
(180, 31, 'Gate, Collapsible Gate/Shutter', 1),
(181, 31, 'Grills/ Still Structure', 1),
(182, 31, 'Hatchery, Fishery, Cattle Yard', 1),
(183, 31, 'Kilometer Post (K.M.)', 1),
(184, 31, 'Lagoon, Waterway', 1),
(185, 31, 'Land Development, Earth Filling', 1),
(186, 31, 'Memorial/Monument/Statue', 1),
(187, 31, 'Oil Line & Related (Large)', 1),
(188, 31, 'Oil Line & Related (Medium & Small)', 1),
(189, 31, 'Other Construction', 1),
(190, 31, 'Other Large Construction', 1),
(191, 31, 'Painting Works for Building, Pole, Road and related', 1),
(192, 31, 'Park, Suffery Park, Picnic Spot and related', 1),
(193, 31, 'Piling Works', 1),
(194, 31, 'Pipe/Pipeline (Large)', 1),
(195, 31, 'Pipe/Pipeline (Medium & Small)', 1),
(196, 31, 'Railway & Related (Large)', 1),
(197, 31, 'Railway & Related (Medium & Small)', 1),
(198, 31, 'Road (Large)', 1),
(199, 31, 'Road (Medium & Small)	', 1),
(200, 31, 'Runway/Taxiway', 1),
(201, 31, 'Sanitary/Sewerage Line & Related (Medium & Small)', 1),
(202, 31, 'Sanitary/Sewerage Line & Related(Large)', 1),
(203, 31, 'Sheds', 1),
(204, 31, 'Shore Piling work', 1),
(205, 31, 'Sluice Gate/Regulator and related', 1),
(206, 31, 'Stadium/Gallery/Play Ground/Field', 1),
(207, 31, 'Steel Building/Structure and related', 1),
(208, 31, 'Swimming Pool related', 1),
(209, 31, 'Tank, Reservoir, Soak Well etc.', 1),
(210, 31, 'Taxiway/Walkway', 1),
(211, 31, 'Toilet, Latrine, etc.', 1),
(212, 31, 'Traffic Signal System', 1),
(213, 31, 'Vehicle Garage', 1),
(214, 31, 'Wall, Boundary Wall', 1),
(215, 31, 'Water Supply Line & Related (Large)', 1),
(216, 31, 'Water Supply Line & Related (Medium & Small)	', 1),
(217, 30, 'Aluminum Work', 1),
(218, 30, 'Bazaar, Market, Shop etc.', 1),
(219, 30, 'Bicycle, Motorcycle Stand', 1),
(220, 30, 'Bridge & Culvert', 1),
(221, 30, 'Buildings', 1),
(222, 30, 'Bus and Launch Terminal', 1),
(223, 30, 'Cattle or Zebra Crossing', 1),
(224, 31, 'Civil Work related', 1),
(225, 30, 'Dam, Barrage', 1),
(226, 30, 'Drain/Canal Related', 1),
(227, 30, 'Fencing, Netting', 1),
(228, 30, 'Ferry Ghats, Jetty, Pontoon', 1),
(229, 30, 'Fly Over, Bridge', 1),
(230, 30, 'Foot Over Bridge.', 1),
(231, 30, 'Footpath, Pavement, Walkway etc.', 1),
(232, 30, 'Gas Line Related', 1),
(233, 30, 'Gate, Collapsible Gate, Shutter', 1),
(234, 30, 'Grill, Still Structure', 1),
(235, 30, 'Hatchery/ Fishery/Cattle Yard', 1),
(236, 30, 'Kilometer Post', 1),
(237, 30, 'Lagoon, Waterway and related', 1),
(238, 30, 'Land Development / Earth Filling', 1),
(239, 30, 'Monument, Memorial and related', 1),
(240, 30, 'Oil Line & Related', 1),
(241, 30, 'Park/Picnic Spot and related', 1),
(242, 30, 'Pipe & Pipeline', 1),
(243, 30, 'Railway Related Work', 1),
(244, 30, 'Roads', 1),
(245, 30, 'Runway & Taxiway', 1),
(246, 30, 'Tank/Reservoir/ Soak Well', 1),
(247, 30, 'Wall/Boundary Wall', 1),
(248, 29, 'Computer Lab/Data Centre', 1),
(249, 29, 'Computer Rack/Cabinet', 1),
(250, 29, 'Computer/Laptop', 1),
(251, 29, 'Data Entry/Other ICT Service', 1),
(252, 29, 'Domain Registration/Hosting', 1),
(253, 29, 'Hardware/Accessories', 1),
(254, 29, 'Hardware/Network Maintenance Service', 1),
(255, 29, 'ICT Support/Consultancy', 1),
(256, 29, 'Internet Cable', 1),
(257, 29, 'ISP Service', 1),
(258, 29, 'Networking', 1),
(259, 29, 'Printer', 1),
(260, 29, 'Projector/Multimedia Projector', 1),
(261, 29, 'Scanner', 1),
(262, 29, 'Server', 1),
(263, 29, 'Software Development', 1),
(264, 29, 'Software Operation/Maintenance Service', 1),
(265, 29, 'Software Supply', 1),
(266, 29, 'Toner Cartridge/Ink Cartridge', 1),
(267, 29, 'Training', 1),
(268, 29, 'UPS/IPS/Stabilizer/Converter', 1),
(269, 29, 'Website Development', 1),
(270, 28, 'Aluminums Items', 1),
(271, 28, 'Ballast/Stone', 1),
(272, 28, 'Bricks/Brickbats', 1),
(273, 28, 'Cement', 1),
(274, 28, 'CI Sheet/Tin', 1),
(275, 28, 'Constructional Machinery/Equipment', 1),
(276, 28, 'Constructional Materials', 1),
(277, 28, 'Glass Door/Fitting', 1),
(278, 28, 'Insulation/Insulating Materials', 1),
(279, 28, 'Manholes Cover', 1),
(280, 28, 'Others Materials', 1),
(281, 28, 'Plumbing Materials', 1),
(282, 28, 'Rod', 1),
(283, 28, 'Sand', 1),
(284, 28, 'Sanitary Materials', 1),
(285, 28, 'Sewerage Materials', 1),
(286, 28, 'Soil', 1),
(287, 28, 'Tiles/Marble/Mosaic/Terracotta', 1),
(288, 28, 'Tube well Materials', 1),
(289, 27, 'Audio/Video Equipment', 1),
(290, 27, 'Calling Bell', 1),
(291, 27, 'Camera', 1),
(292, 27, 'CC TV', 1),
(293, 27, 'Clock', 1),
(294, 27, 'Electronic Equipment’s', 1),
(295, 27, 'PA System/Conference System', 1),
(296, 27, 'Printed Circuit Board (PCB)', 1),
(297, 27, 'Radio', 1),
(298, 27, 'Sound System', 1),
(299, 27, 'Television', 1),
(300, 27, 'Thermovision Camera', 1),
(301, 26, 'Bag', 1),
(302, 26, 'Blanket or Rug', 1),
(303, 26, 'Cadis', 1),
(304, 26, 'Carpet', 1),
(305, 26, 'Cloths', 1),
(306, 26, 'Handicrafts', 1),
(307, 26, 'Jute Bag/Sack', 1),
(308, 26, 'Jute Twine', 1),
(309, 26, 'Other Jute Goods', 1),
(310, 26, 'Other Leather Goods', 1),
(311, 26, 'Others Item', 1),
(312, 26, 'Sewing/Knitting', 1),
(313, 26, 'Shoe/Sandal', 1),
(314, 26, 'Threads/Cotton', 1),
(315, 26, 'Uniform/Dress', 1),
(316, 25, 'GI Wire', 1),
(317, 25, 'Hardware Goods', 1),
(318, 25, 'Ladder', 1),
(319, 25, 'Lock', 1),
(320, 25, 'Mechanical Items', 1),
(321, 25, 'Paint', 1),
(322, 25, 'Pipe', 1),
(323, 25, 'PVC Pipe/Materials', 1),
(324, 25, 'Tank', 1),
(325, 25, 'Tarpaulin', 1),
(326, 25, 'Wire/Rope', 1),
(327, 24, 'Cemetery Burner', 1),
(328, 24, 'Diet for Patients', 1),
(329, 24, 'Hospital Equipment', 1),
(330, 24, 'Incubator', 1),
(331, 24, 'M.S.R Goods', 1),
(332, 24, 'Medical Equipment/Accessories', 1),
(333, 24, 'Medical Furniture', 1),
(334, 24, 'Medical Gas/Gas Systems', 1),
(335, 24, 'Medicine', 1),
(336, 24, 'Repair/Maintenance Work', 1),
(337, 24, 'Spectacles', 1),
(338, 23, 'Cement Mills', 1),
(339, 23, 'Educational/Institutional', 1),
(340, 23, 'Industrial Raw Materials', 1),
(341, 23, 'Jute Mills', 1),
(342, 23, 'Natural Raw Materials', 1),
(343, 23, 'Other Metal', 1),
(344, 23, 'Paper Mills', 1),
(345, 23, 'Pharmaceuticals', 1),
(346, 23, 'Printing/Press Related', 1),
(347, 23, 'Steel Sheet/Metal Sheet/Metal Drum', 1),
(348, 22, 'Bandwidth', 1),
(349, 22, 'Broadcasting/Telecasting Equipment', 1),
(350, 22, 'Cellular Terminal', 1),
(351, 22, 'Cellular Component', 1),
(352, 22, 'Equipment/Spares', 1),
(353, 22, 'Fax/Telex', 1),
(354, 22, 'HF Radio/Radio Set', 1),
(355, 22, 'Intercom/PABX	', 1),
(356, 22, 'Optical Fiber Supply/Installation	', 1),
(357, 22, 'Radio/Transmission Link', 1),
(358, 22, 'Repair/Maintenance Works', 1),
(359, 22, 'Telecom Service', 1),
(360, 22, 'Telephone Cable', 1),
(361, 22, 'Telephone/Mobile/Walkie-Talkie', 1),
(362, 22, 'Tower Supply/Installation', 1),
(363, 21, 'Airports & Aviation', 1),
(364, 21, 'Battery', 1),
(365, 21, 'Bi-Cycle', 1),
(366, 21, 'CNG Conversion', 1),
(367, 20, 'Playthings', 1),
(368, 20, 'Sports Equipment', 1),
(369, 20, 'Sports Items', 1),
(370, 20, 'Toy', 1),
(371, 19, 'Air Biman Spares', 1),
(372, 19, 'Air Condition Equipment', 1),
(373, 19, 'Bearing', 1),
(374, 19, 'Belt or Conveyor Belt', 1),
(375, 19, 'Cement Mills Related', 1),
(376, 19, 'Construction Equipment’s Spare Parts', 1),
(377, 19, 'Fertilizer Mills Related', 1),
(378, 19, 'Film Related Machine', 1),
(379, 19, 'Fire Fighting Equipment', 1),
(380, 19, 'Gas Related Item', 1),
(381, 19, 'Handling Equipment Spare Parts', 1),
(382, 19, 'Jute Mills Related', 1),
(383, 19, 'Lift/Escalator', 1),
(384, 19, 'Machineries Item', 1),
(385, 19, 'Naval Related Spares', 1),
(386, 19, 'Paper Mills Related', 1),
(387, 19, 'Printing or Press Related', 1),
(388, 19, 'Railway Related Spares', 1),
(389, 19, 'Shipping Related Spares', 1),
(390, 19, 'Sugar Mills Related', 1),
(391, 19, 'Textile Related', 1),
(392, 19, 'Training/Institutional', 1),
(393, 19, 'Tube well Related', 1),
(394, 19, 'Vehicle Spare Parts', 1),
(395, 19, 'Water Vessel Spare Parts', 1),
(396, 18, 'Access Control Systems', 1),
(397, 18, 'Archway Machine', 1),
(398, 18, 'Bag Scanner', 1),
(399, 18, 'CCTV System', 1),
(400, 18, 'Floating Tube', 1),
(401, 18, 'Helmet', 1),
(402, 18, 'Life Jacket', 1),
(403, 18, 'Metal Detector', 1),
(404, 18, 'Security Camera', 1),
(405, 18, 'Security Components', 1),
(406, 18, 'Security Equipment', 1),
(407, 18, 'Security Vehicle', 1),
(408, 18, 'Time Attendance System', 1),
(409, 17, 'Container/Bottle', 1),
(410, 17, 'Plastic Bag', 1),
(411, 17, 'Plastic Tank', 1),
(412, 17, 'Plastic/Rubber Goods', 1),
(413, 16, 'Currency/Coin', 1),
(414, 16, 'Flat/ Building	', 1),
(415, 16, 'Land Property', 1),
(416, 16, 'Land Property', 1),
(417, 16, 'Mosquito Control	', 1),
(418, 16, 'Security Paper/Currency Paper/Ink', 1),
(419, 16, 'Tent', 1),
(420, 16, 'Umbrella', 1),
(421, 15, 'Bedding', 1),
(422, 15, 'Consumables', 1),
(423, 15, 'Cosmetics', 1),
(424, 15, 'Crockeries	', 1),
(425, 15, 'Departmental Store Goods', 1),
(426, 15, 'Fridge', 1),
(427, 15, 'Glassware', 1),
(428, 15, 'Households', 1),
(429, 15, 'Kitchen Equipment’s', 1),
(430, 15, 'Oven/Cooker/Burner', 1),
(431, 15, 'Soap/Detergent', 1),
(432, 15, 'Toiletries', 1),
(433, 15, 'Washing Machine', 1),
(434, 15, 'Water Purifier', 1),
(435, 14, 'Air/Biman Related', 1),
(436, 14, 'Bridge', 1),
(437, 14, 'Bus Stand/Cycle Stand/Garage', 1),
(438, 14, 'Canteen', 1),
(439, 14, 'Car Parking Area', 1),
(440, 14, 'Cold Storage', 1),
(441, 14, 'Computer', 1),
(442, 14, 'Electricity', 1),
(443, 14, 'Fair', 1),
(444, 14, 'Ferry Ghats/Pontoon/Jetty.', 1),
(445, 14, 'Forest Item', 1),
(446, 14, 'Gallery', 1),
(447, 14, 'Handling Equipment', 1),
(448, 14, 'Hotel/Motel/Guest House', 1),
(449, 14, 'Land/Building/Properties', 1),
(450, 14, 'Machinery/Equipment', 1),
(451, 14, 'Park', 1),
(452, 14, 'Sand/Stone Area', 1),
(453, 14, 'Satellite Transponder', 1),
(454, 14, 'Say rat or Jal Mahal', 1),
(455, 14, 'Shop/Market', 1),
(456, 14, 'Stadium', 1),
(457, 14, 'Toilet', 1),
(458, 14, 'Vehicles', 1),
(459, 14, 'Water Area', 1),
(460, 14, 'Water Vessels', 1),
(461, 13, 'Acoustic Work', 1),
(462, 13, 'Architectural Design/Plan', 1),
(463, 13, 'Auditorium', 1),
(464, 13, 'Building/ Room', 1),
(465, 13, 'Calligraphy', 1),
(466, 13, 'Diorama', 1),
(467, 13, 'Fabrication Work', 1),
(468, 13, 'Furniture', 1),
(469, 13, 'Interior Design or Decoration', 1),
(470, 13, 'Logo', 1),
(471, 13, 'Product Design', 1),
(472, 13, 'Repair/Maintenance', 1),
(473, 13, 'Sculptor/Mural', 1),
(474, 13, 'Steel Furniture', 1),
(475, 13, 'Venetian Blind/Curtain', 1),
(476, 12, 'Fuel Oil', 1),
(477, 12, 'Furnace Oil', 1),
(478, 12, 'Gas', 1),
(479, 12, 'Gas Cylinder', 1),
(480, 12, 'Lubricant', 1),
(481, 12, 'Mineral Oil', 1),
(482, 12, 'Petroleum Products', 1),
(483, 12, 'Product Delivery Meter', 1),
(484, 11, 'Crushing or Grinding', 1),
(485, 11, 'Drinks', 1),
(486, 11, 'Edible Oil/Soybean/Dalda', 1),
(487, 11, 'Egg	', 1),
(488, 11, 'Fast Food/Snacks', 1),
(489, 11, 'Fish', 1),
(490, 11, 'Food', 1),
(491, 11, 'Fruits', 1),
(492, 11, 'Grocery', 1),
(493, 11, 'Ice-cream/Accessories', 1),
(494, 11, 'Lentil/Dal', 1),
(495, 11, 'Meat', 1),
(496, 11, 'Milk', 1),
(497, 11, 'Others', 1),
(498, 11, 'Packet Lunch', 1),
(499, 11, 'Ration', 1),
(500, 11, 'Rice', 1),
(501, 11, 'Salt', 1),
(502, 11, 'Spices', 1),
(503, 11, 'Sugar', 1),
(504, 11, 'Tea/Coffee', 1),
(505, 11, 'Vegetable', 1),
(506, 11, 'Water', 1),
(507, 11, 'Wheat/Flour/Atta', 1),
(508, 10, 'Animal & Related', 1),
(509, 10, 'Animal Feed', 1),
(510, 10, 'Dairy Firm Related', 1),
(511, 10, 'Fish Feed	', 1),
(512, 10, 'Fisheries & Related', 1),
(513, 10, 'Hatchery Equipment', 1),
(514, 10, 'Poultry & Related', 1),
(515, 10, 'Poultry Feed', 1),
(516, 9, 'Bullet Proof Jacket', 1),
(517, 9, 'Fire Arms & Ammunition', 1),
(518, 9, 'Fire Arms Spare Parts/Loose Tools', 1),
(519, 8, 'Bulbs or Light', 1),
(520, 8, 'Cable/Wire', 1),
(521, 8, 'Circuit Breaker', 1),
(522, 8, 'Conductor', 1),
(523, 8, 'Earthling/Lightning Conductor/Grounding Rod', 1),
(524, 8, 'Electric Pole', 1),
(525, 8, 'Electrical Item/Tools/Equipment', 1),
(526, 8, 'Fan	', 1),
(527, 8, 'Generator', 1),
(528, 8, 'Grid', 1),
(529, 8, 'Installation/Fixtures & Fittings', 1),
(530, 8, 'Insulator', 1),
(531, 8, 'Isolator', 1),
(532, 8, 'Lamp Post', 1),
(533, 8, 'Lighting System', 1),
(534, 8, 'Maintenance/Repair', 1),
(535, 8, 'Meter Reading Card', 1),
(536, 8, 'Meter/Meter Board', 1),
(537, 8, 'Motor/Pump', 1),
(538, 8, 'Pool Heater', 1),
(539, 8, 'Power Plant', 1),
(540, 8, 'Regulator', 1),
(541, 8, 'Solar Power System', 1),
(542, 8, 'Sub-Station Equipment', 1),
(543, 8, 'Switch/Switch Gear', 1),
(544, 8, 'Transformer', 1),
(545, 8, 'Transmission/Electrical Line', 1),
(546, 8, 'Transmitter', 1),
(547, 7, 'Aluminum Works', 1),
(548, 7, 'Bazar/Market/Shop', 1),
(549, 7, 'Beautification', 1),
(550, 7, 'Boundary Wall', 1),
(551, 7, 'Bridge/Culvert', 1),
(552, 7, 'Building', 1),
(553, 7, 'Bus/Launch Terminal', 1),
(554, 7, 'Civil Works', 1),
(555, 7, 'Collapsible Gate', 1),
(556, 7, 'Crossing/Cattle/Zebra', 1),
(557, 7, 'Cycle Stand', 1),
(558, 7, 'Dam/Barrage', 1),
(559, 7, 'Drain Slab', 1),
(560, 7, 'Drain/Canal', 1),
(561, 7, 'Dredging', 1),
(562, 7, 'Fence/Net', 1),
(563, 7, 'Ferry Ghats/Pontoon/Jetty', 1),
(564, 7, 'Flyover/Over Bridge', 1),
(565, 7, 'Footpath/Pavement', 1),
(566, 7, 'Fountain', 1),
(567, 7, 'Garage', 1),
(568, 7, 'Gas Line & Related', 1),
(569, 7, 'Ghats', 1),
(570, 7, 'Grill', 1),
(571, 7, 'Hatchery', 1),
(572, 7, 'Kilometer Post (K.M.)', 1),
(573, 7, 'Lagoon', 1),
(574, 7, 'Land Development/Earth Filling', 1),
(575, 7, 'Monument/Memorial', 1),
(576, 7, 'Oil Line/Related', 1),
(577, 7, 'Painting Works (Building, Pole, Road etc.)', 1),
(578, 7, 'Park/Picnic Spot', 1),
(579, 7, 'Piling', 1),
(580, 7, 'Pipe/Pipeline', 1),
(581, 7, 'Railway & Related', 1),
(582, 7, 'Road	', 1),
(583, 7, 'Runway, Taxiway', 1),
(584, 7, 'Sanitary/Sewrage Line & Related', 1),
(585, 7, 'Shed', 1),
(586, 7, 'Shore Piles', 1),
(587, 7, 'Sluice Gate/Regulator', 1),
(588, 7, 'Stadium/Gallery/Field/Play Ground', 1),
(589, 7, 'Steel Building/Structure', 1),
(590, 7, 'Swimming Pool', 1),
(591, 7, 'Tank/Reservoir/Soak Well', 1),
(592, 7, 'Toilet/Latrine', 1),
(593, 7, 'Traffic Signal', 1),
(594, 7, 'Water Supply Line & Related', 1),
(595, 6, 'Acid', 1),
(596, 6, 'China Clay or Ceramics', 1),
(597, 6, 'Coal', 1),
(598, 6, 'Dyeing', 1),
(599, 6, 'Industrial Chemicals', 1),
(600, 6, 'Laboratory Chemicals', 1),
(601, 6, 'Lime/Lime Stone', 1),
(602, 6, 'Minerals', 1),
(603, 6, 'Other Chemicals', 1),
(604, 6, 'Painting Chemicals', 1),
(605, 6, 'Printing Chemicals', 1),
(606, 6, 'Silica Gel', 1),
(607, 6, 'Soda/Caustic Soda', 1),
(608, 5, 'Binding', 1),
(609, 5, 'Books', 1),
(610, 5, 'Brochure or Pamphlet', 1),
(611, 5, 'Calculator', 1),
(612, 5, 'Calendar/Diary', 1),
(613, 5, 'Certificate/Registration Card', 1),
(614, 5, 'Credit Card/Security Card', 1),
(615, 5, 'Festoon', 1),
(616, 5, 'Form', 1),
(617, 5, 'Greetings Card', 1),
(618, 5, 'ID card', 1),
(619, 5, 'Magazine/Periodicals/Journal', 1),
(620, 5, 'Map', 1),
(621, 5, 'Miscellaneous', 1),
(622, 5, 'Others Printing Works', 1),
(623, 5, 'Packing Materials', 1),
(624, 5, 'Paper', 1),
(625, 5, 'Photo Album', 1),
(626, 5, 'Poster', 1),
(627, 5, 'Printed Certificate', 1),
(628, 5, 'Printing Items', 1),
(629, 5, 'Report', 1),
(630, 5, 'Scratch Card', 1),
(631, 5, 'Stationery', 1),
(632, 5, 'Tabulation', 1),
(633, 5, 'Training Materials', 1),
(634, 5, 'Voter List', 1),
(635, 36, 'Broadcasting', 1),
(636, 36, 'C&F Agent', 1),
(637, 36, 'Catarer', 1),
(638, 36, 'Charter', 1),
(639, 36, 'CIP', 1),
(640, 36, 'Cleaner', 1),
(641, 36, 'CNG Operator', 1),
(642, 36, 'Communication/Telecommunication', 1),
(643, 36, 'Computer Firm/ICT Firm', 1),
(644, 36, 'Construction Works', 1),
(645, 36, 'Consultancy - Education', 1),
(646, 36, 'Consultancy - Law', 1),
(647, 36, 'Consultant/Firm', 1),
(648, 36, 'Consulting', 1),
(649, 36, 'Consulting water related', 1),
(650, 36, 'Contractor', 1),
(651, 36, 'Courier Service', 1),
(652, 36, 'Daycare Centers', 1),
(653, 36, 'Developer', 1),
(654, 36, 'Distributor', 1),
(655, 36, 'Dredging Firm', 1),
(656, 36, 'Environment Firm', 1),
(657, 36, 'Evaluation Firm', 1),
(658, 36, 'Event Management', 1),
(659, 36, 'Exam/Test	', 1),
(660, 36, 'Financial Consultant', 1),
(661, 36, 'Fund/Donation', 1),
(662, 36, 'Garbage/Waste Management', 1),
(663, 36, 'Hair Cutting', 1),
(664, 36, 'Hardware/Vendor Software', 1),
(665, 36, 'Hedging/Tree Cutting', 1),
(666, 36, 'Hospitalization Facility', 1),
(667, 36, 'Insect Killing/Pest Control', 1),
(668, 36, 'Insurance', 1),
(669, 36, 'Investor', 1),
(670, 36, 'ISO Certificate', 1),
(671, 36, 'Lawyer/Law Firm', 1),
(672, 36, 'Leaseholder', 1),
(673, 36, 'Loading/Unloading', 1),
(674, 36, 'Management Operator', 1),
(675, 36, 'Manpower', 1),
(676, 36, 'Media Firm', 1),
(677, 36, 'Medical Centre/Medical Item', 1),
(678, 36, 'NGO', 1),
(679, 36, 'Oil, Gas Exploration', 1),
(680, 36, 'Parcel', 1),
(681, 36, 'Port Related', 1),
(682, 36, 'Printing Firm', 1),
(683, 36, 'Professional Training', 1),
(684, 36, 'PSI Agent', 1),
(685, 36, 'Publishers/Books/Magazine/Periodicals Suppliers', 1),
(686, 36, 'Research Firm', 1),
(687, 36, 'Salvage Work', 1),
(688, 36, 'Satellite Channel', 1),
(689, 36, 'Security Guard/Security Service', 1),
(690, 36, 'Service', 1),
(691, 36, 'Service Charge Party', 1),
(692, 36, 'Service Provider', 1),
(693, 36, 'Skilled Profession', 1),
(694, 36, 'Soil Test', 1),
(695, 36, 'Sponsorship Right', 1),
(696, 36, 'Stevedoring Firm', 1),
(697, 36, 'Studio/Photography', 1),
(698, 36, 'Supplier', 1),
(699, 36, 'Survey', 1),
(700, 36, 'Surveyor', 1),
(701, 36, 'Testing Company', 1),
(702, 36, 'Toll Collection', 1),
(703, 36, 'Translation', 1),
(704, 36, 'Transportation', 1),
(705, 36, 'Travel Agent', 1),
(706, 36, 'Valuation Firm/Value', 1),
(707, 36, 'Washing/Cleaning', 1),
(708, 36, 'Water Test	', 1),
(709, 36, 'Workshop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_sub_menu`
--

CREATE TABLE `master_sub_menu` (
  `id` int(10) NOT NULL,
  `module_id` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `sub_menu_name` varchar(100) NOT NULL,
  `sub_menu_url` varchar(100) NOT NULL,
  `sub_menu_icon` varchar(100) NOT NULL,
  `sub_menu_sort` int(3) NOT NULL,
  `status` int(2) NOT NULL,
  `show_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_sub_menu`
--

INSERT INTO `master_sub_menu` (`id`, `module_id`, `menu_id`, `sub_menu_name`, `sub_menu_url`, `sub_menu_icon`, `sub_menu_sort`, `status`, `show_status`) VALUES
(4, 1, 1, 'User Role', 'user/all_role', 'fa fa-files-o', 1, 1, 0),
(5, 1, 1, 'Create user', 'user/all_user', 'fa fa-files-o', 2, 1, 0),
(6, 1, 1, 'User Privilege', 'user/all_privilege', 'fa fa-files-o', 3, 1, 0),
(19, 2, 3, 'Basic', 'hr/basic/all_basic', 'fa fa-files-o', 3, 0, 0),
(20, 2, 4, 'Monthly Job Card', 'hr/attendance_report/all_attendance_report', ' fa fa-files-o', 2, 0, 0),
(21, 2, 3, 'Family', 'hr/family/all_family', 'fa fa-files-o', 4, 0, 0),
(22, 2, 3, 'Job', 'hr/job/all_job', 'fa fa-files-o', 1, 0, 0),
(23, 2, 3, 'Job Posting', 'hr/job_posting/all_job_posting', 'fa fa-files-o', 2, 0, 0),
(24, 2, 3, 'Child', 'hr/child/all_child', 'fa fa-files-o', 5, 1, 0),
(25, 2, 3, 'Academic', 'hr/academic/all_academic', 'fa fa-files-o', 6, 1, 0),
(26, 2, 4, 'Attendance', 'hr/attendance/all_attendance', 'fa fa-files-o', 1, 1, 0),
(27, 2, 5, 'Leave Application', 'hr/leave/all_leave', 'fa fa-files-o', 1, 1, 0),
(28, 2, 3, 'Assigning Dept Head', 'hr/department_head/all_department_head', 'fa fa-files-o', 7, 1, 0),
(32, 2, 3, 'Ward and Honour', 'hr/ward_and_honours/all_ward_and_honours', 'fa fa-files-o', 8, 1, 0),
(33, 2, 3, 'Contact', 'hr/contact/all_contact', 'fa fa-files-o', 9, 1, 0),
(34, 2, 3, 'Co-curricular activities', 'hr/co_curricular_activities/all_co_curricular_activities', 'fa fa-files-o', 10, 1, 0),
(35, 2, 3, 'Experience', 'hr/experience/all_experience', 'fa fa-files-o', 11, 1, 0),
(36, 2, 3, 'Nominee', 'hr/nominee/all_nominee', 'fa fa-files-o', 12, 1, 0),
(37, 2, 3, 'Previous Job History', 'hr/previous_job_history/all_previous_job_history', 'fa fa-files-o', 13, 1, 0),
(38, 2, 3, 'Reference', 'hr/reference/all_reference', 'fa fa-files-o', 14, 1, 0),
(39, 2, 3, 'Research and Publication', 'hr/research_and_publication/all_research_and_publication', 'fa fa-files-o', 15, 1, 0),
(40, 2, 3, 'Training', 'hr/training/all_training', 'fa fa-files-o', 16, 1, 0),
(41, 2, 3, 'Resume', 'hr/resume/all_resume', 'fa fa-files-o', 17, 1, 0),
(42, 2, 3, 'My Resume', 'hr/my_resume/all_my_resume', 'fa fa-files-o', 18, 1, 0),
(43, 2, 7, 'Add Loan', 'hr/loan/all_loan', 'fa fa-files-o', 1, 1, 0),
(44, 2, 8, 'Additional&Deduction', 'hr/additional_and_deduction/all_additional_and_deduction', 'fa fa-files-o', 1, 1, 0),
(45, 2, 9, 'Add Bonus', 'hr/bonus/all_bonus', 'fa fa-files-o', 1, 1, 0),
(46, 2, 8, 'Salary Entry', 'hr/salary_entry/all_salary_entry', 'fa fa-files-o', 2, 1, 0),
(47, 2, 8, 'Create Salary', 'hr/create_salary/all_create_salary', 'fa fa-files-o', 3, 1, 0),
(50, 3, 11, 'All Report', 'admission/admission_report/all_admission_report', 'fa fa-files-o', 1, 1, 0),
(51, 3, 10, 'Student List', 'admission/student_info/all_student', 'fa fa-files-o', 1, 1, 0),
(52, 4, 13, 'All Teacher', 'academic/teacher/all_teacher', 'fa fa-files-o', 1, 1, 0),
(54, 4, 15, 'Class Routuine', 'academic/routine/all_routine', 'fa fa-files-o', 1, 1, 0),
(55, 4, 16, 'Combined Report', 'academic/report/all_report', 'fa fa-files-o', 1, 1, 0),
(56, 5, 17, 'Exam Marks Entry', 'exam/result/all_result', 'fa fa-files-o', 1, 1, 0),
(57, 5, 18, 'Exam Routine', 'exam/routine/all_routine', 'fa fa-files-o', 2, 1, 0),
(58, 5, 19, 'Create Sheet Plan', 'exam/seat_plan/all_seat_plan', 'fa fa-files-o', 1, 1, 0),
(59, 5, 20, 'Create Admit Card', 'exam/admit_card/all_admit_card', 'fa fa-files-o', 1, 1, 0),
(60, 6, 21, 'Payment Receipt', 'account/admission_fee/all_admission_fee', 'fa fa-files-o', 1, 1, 0),
(62, 4, 14, 'Enroll Class', 'academic/enroll_class/all_enroll_class', 'fa fa-files-o', 1, 1, 0),
(64, 4, 14, 'Fourth Subject', 'academic/fourth_subject/all_fourth_subject', 'fa fa-files-o', 2, 1, 0),
(67, 7, 22, 'All product', 'inventory/product/all_product', 'fa fa-files-o', 1, 1, 0),
(68, 7, 22, 'All product return', 'inventory/product_return/all_product_return', 'fa fa-files-o', 2, 1, 0),
(69, 7, 23, 'All Stock In', 'inventory/stock_in/all_stock_in', 'fa fa-files-o', 1, 1, 0),
(70, 7, 23, 'All Stock Out', 'inventory/stock_out/all_stock_out', 'fa fa-files-o', 2, 1, 0),
(71, 7, 24, 'All Requisation', 'inventory/requisation/all_requisation', 'fa fa-files-o', 1, 1, 0),
(72, 7, 25, 'All Supplier', 'inventory/supplier/all_supplier', 'fa fa-files-o', 1, 1, 0),
(73, 7, 26, 'Category', 'inventory/category/all_category', 'fa fa-files-o', 1, 1, 0),
(74, 7, 26, 'Sub Category', 'inventory/sub_category/all_sub_category', 'fa fa-files-o', 2, 1, 0),
(75, 7, 26, 'Measurement Unit', 'inventory/measurement_unit/all_measurement_unit', 'fa fa-files-o', 3, 1, 0),
(76, 7, 22, 'Purchase', 'inventory/purchase/all_purchase', 'fa fa-files-o', 3, 1, 0),
(77, 7, 24, 'My Requisation', 'inventory/my_requisation/all_my_requisation', 'fa fa-files-o', 2, 1, 0),
(78, 7, 24, 'Approve Requisation', 'inventory/approve_requisation/all_approve_requisation', 'fa fa-files-o', 3, 1, 0),
(79, 6, 27, 'Chart of Accounts', 'account/head/all_head', 'fa fa-files-o', 1, 1, 0),
(80, 6, 27, 'Credit Voucher', 'account/credit_voucher/all_credit_voucher', 'fa fa-files-o', 2, 1, 0),
(81, 6, 27, 'Journal Voucher', 'account/journal/all_journal', 'fa fa-files-o', 5, 1, 0),
(82, 6, 27, 'Enroll Hear', 'account/enroll_head/all_enroll_head', 'fa fa-files-o', 6, 1, 0),
(83, 6, 28, 'Ledger', 'account/ledger/all_ledger', 'fa fa-files-o', 1, 1, 0),
(84, 6, 28, 'Trial Balance', 'account/trial_balance/all_trial_balance', 'fa fa-files-o', 7, 1, 0),
(85, 6, 28, 'Income Statement', 'account/income_statement/all_income_statement', 'fa fa-files-o', 8, 1, 0),
(86, 6, 28, 'Balance Sheet', 'account/balance_sheet/all_balance_sheet', 'fa fa-files-o', 9, 1, 0),
(87, 6, 27, 'Depreciation Head', 'account/depreciation_head/all_depreciation_head', 'fa fa-files-o', 7, 1, 0),
(88, 6, 28, 'Work Sheet', 'account/work_sheet/all_work_sheet', 'fa fa-files-o', 10, 1, 0),
(104, 6, 27, 'Account Name', 'account/account_name/all_account_name', 'fa fa-files-o', 8, 1, 0),
(105, 6, 27, 'Transaction', 'account/transaction/all_transaction', 'fa fa-files-o', 9, 1, 0),
(106, 6, 27, 'Debit Voucher', 'account/debit_voucher/all_debit_voucher', 'fa fa-files-o', 3, 1, 0),
(107, 6, 27, 'Contra Voucher', 'account/contra_voucher/all_contra_voucher', 'fa fa-files-o', 4, 1, 0),
(108, 6, 28, 'Day Book', 'account/day_book/all_day_book', 'fa fa-files-o', 2, 1, 0),
(109, 6, 28, 'Cash Book', 'account/cash_book/all_cash_book', 'fa fa-files-o', 3, 1, 0),
(110, 6, 28, 'Bank Book', 'account/bank_book/all_bank_book', 'fa fa-files-o', 4, 1, 0),
(111, 6, 28, 'Received Account', 'account/received_account/all_received_account', 'fa fa-files-o', 5, 1, 0),
(112, 6, 28, 'Payment Account', 'account/payment_account/all_payment_account', 'fa fa-files-o', 6, 1, 0),
(133, 13, 42, 'All User', 'bidder/all_user', 'fgjh', 1, 1, 0),
(135, 13, 42, 'Publisher', 'publisher/all_publisher', 'Publisher', 2, 0, 0),
(136, 13, 42, 'Investor', 'investor/all_investor', 'Investor', 3, 0, 0),
(137, 13, 45, 'Job Approve', 'job_approve/all_job_approve', 'job_approve', 1, 1, 0),
(139, 13, 46, 'Work Authority', 'work_authority/all_work_authority', 'Work Authority', 3, 1, 0),
(140, 13, 46, 'Job Sub-Category', 'job_sub_category/all_sub_category', 'Job Sub-Category', 3, 1, 0),
(141, 13, 46, 'Job Category', 'job_category/all_job_category', 'Job Category', 1, 1, 0),
(143, 13, 45, 'Agreements', 'agreement_form/all_agreement_form', 'job', 2, 1, 0),
(144, 13, 42, 'Subscription', 'subscription_view/subscription_list', 'Subscription', 1, 1, 0),
(145, 13, 45, 'Job Boost', 'boost/all_boost_list', 'job', 3, 1, 0),
(146, 13, 46, 'Agreement Forms', 'agreements/all_agreements_list', 'job', 5, 1, 0),
(147, 22, 47, 'Insert Product', 'product/create_product', 'Product', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_thana`
--

CREATE TABLE `master_thana` (
  `id` int(10) NOT NULL,
  `division_id` int(10) NOT NULL,
  `district_id` int(10) NOT NULL,
  `thana_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_thana`
--

INSERT INTO `master_thana` (`id`, `division_id`, `district_id`, `thana_name`) VALUES
(3, 3, 2, 'Dhamrai'),
(8, 8, 31, 'Barhatta'),
(9, 8, 31, 'Durgapur'),
(10, 8, 31, 'Kendua'),
(11, 8, 31, 'Atpara'),
(12, 8, 31, 'Madan'),
(13, 8, 31, 'Khaliajuri'),
(14, 8, 31, 'Kalmakanda'),
(15, 8, 31, 'Mohongonj'),
(16, 8, 31, 'Purbadhala'),
(17, 8, 31, 'Netrokona Sadar'),
(18, 5, 55, 'Amtali'),
(19, 5, 55, 'Bamna'),
(20, 5, 55, 'Barguna Sadar'),
(21, 5, 55, 'Betagi'),
(22, 5, 55, 'Patharghata'),
(23, 5, 55, 'Taltali'),
(24, 5, 50, 'Agailjhara'),
(25, 5, 50, 'Babuganj'),
(26, 5, 50, 'Bakerganj'),
(27, 5, 50, 'Banaripara'),
(28, 5, 50, 'Barishal Sadar'),
(29, 5, 50, 'Gouranadi'),
(30, 5, 50, 'Hizla'),
(31, 5, 50, 'Mehendiganj'),
(32, 5, 50, 'Muladi'),
(33, 5, 50, 'Uzirpur'),
(34, 5, 54, 'Bhola Sadar'),
(35, 5, 54, 'Borhanuddin'),
(36, 5, 54, 'Charfassion'),
(37, 5, 54, 'Daulatkhan'),
(38, 5, 54, 'Lalmohan'),
(39, 5, 54, 'Monpura'),
(40, 5, 54, 'Tazumuddin'),
(41, 5, 51, 'Jhalokathi Sadar'),
(42, 5, 51, 'Kathalia'),
(43, 5, 51, 'Nalchity'),
(44, 5, 51, 'Rajapur'),
(45, 5, 52, 'Bauphal'),
(46, 5, 52, 'Dashmina'),
(47, 5, 52, 'Dumki'),
(48, 5, 52, 'Galachipa'),
(49, 5, 52, 'Kalapara'),
(50, 5, 52, 'Mirjaganj'),
(51, 5, 52, 'Patuakhali Sadar'),
(52, 5, 52, 'Rangabali'),
(53, 5, 53, 'Bhandaria'),
(54, 5, 53, 'Kawkhali'),
(55, 5, 53, 'Mothbaria'),
(56, 5, 53, 'Nazirpur'),
(57, 5, 53, 'Nesarabad'),
(58, 5, 53, 'Pirojpur Sadar'),
(59, 5, 53, 'Zianagar'),
(60, 6, 43, 'Brahmanbaria Sadar'),
(61, 6, 43, 'Akhaura'),
(62, 6, 43, 'Ashuganj'),
(63, 6, 43, 'Bancharampur'),
(64, 6, 43, 'Bijoynagar'),
(65, 6, 43, 'Kasba'),
(66, 6, 43, 'Nabinagar'),
(67, 6, 43, 'Nasirnagar'),
(68, 6, 43, 'Sarail'),
(69, 6, 49, 'Alikadam'),
(70, 6, 49, 'Bandarban Sadar'),
(71, 6, 49, 'Lama'),
(72, 6, 49, 'Naikhyongchari'),
(73, 6, 40, 'Rowangchari'),
(74, 6, 49, 'Ruma'),
(75, 6, 49, 'Thanchi'),
(76, 6, 45, 'Chandpur Sadar'),
(77, 6, 45, 'Faridganj'),
(78, 6, 45, 'Haimchar'),
(79, 6, 45, 'Haziganj'),
(80, 6, 45, 'Kachua'),
(81, 6, 45, 'Matlab (Dakshin)'),
(82, 6, 45, 'Matlab (Uttar)'),
(83, 6, 45, 'Shahrasti'),
(84, 6, 40, 'Anwara'),
(85, 6, 40, 'Banskhali'),
(86, 6, 40, 'Boalkhali'),
(87, 6, 40, 'Chandanish'),
(88, 6, 40, 'Fatikchari'),
(89, 6, 40, 'Hathazari'),
(90, 6, 40, 'Karnaphuli'),
(91, 6, 40, 'Lohagara'),
(92, 6, 40, 'Mirsharai'),
(93, 6, 40, 'Patiya'),
(94, 6, 40, 'Rangunia'),
(95, 6, 40, 'Raojan'),
(96, 6, 40, 'Sandwip'),
(97, 6, 40, 'Satkania'),
(98, 6, 40, 'Sitakunda'),
(99, 6, 47, 'Coxsbazar Sadar'),
(100, 6, 47, 'Chakoria'),
(101, 6, 47, 'Kutubdia'),
(102, 6, 47, 'Moheskhali'),
(103, 6, 47, 'Pekua'),
(104, 6, 47, 'Ramu'),
(105, 6, 47, 'Teknaf'),
(106, 6, 47, 'Ukhiya'),
(107, 6, 41, 'Barura'),
(108, 6, 41, 'Brahmanpara'),
(109, 6, 41, 'Burichong'),
(110, 6, 41, 'Chandina'),
(111, 6, 41, 'Chouddagram'),
(112, 6, 41, 'Cumilla Sadar'),
(113, 6, 41, 'Cumilla Sadar Dakshin'),
(114, 6, 41, 'Daudkandi'),
(115, 6, 41, 'Debidwar'),
(116, 6, 41, 'Homna'),
(117, 6, 41, 'Laksham'),
(118, 6, 41, 'Lalmai'),
(119, 6, 41, 'Meghna'),
(120, 6, 41, 'Monohorganj'),
(121, 6, 41, 'Muradnagar'),
(122, 6, 41, 'Nangalkot'),
(123, 6, 41, 'Titas'),
(124, 6, 42, 'Chhagalniya'),
(125, 6, 42, 'Daganbhuiyan'),
(126, 6, 42, 'Feni Sadar'),
(127, 6, 42, 'Fulgazi'),
(128, 6, 41, 'Porshuram'),
(129, 6, 41, 'Sonagazi'),
(130, 6, 48, 'Khagrachari Sadar'),
(131, 6, 48, 'Dighinala'),
(132, 6, 48, 'Guimara'),
(133, 6, 48, 'Laxmichari'),
(134, 6, 48, 'Mahalchari'),
(135, 6, 48, 'Manikchari'),
(136, 6, 48, 'Matiranga'),
(137, 6, 48, 'Panchari'),
(138, 6, 48, 'Ramgarh'),
(139, 6, 46, 'Komol Nagar'),
(140, 6, 46, 'Lakshmipur Sadar'),
(141, 6, 46, 'Raipur'),
(142, 6, 46, 'Ramganj'),
(143, 6, 46, 'Ramgati'),
(145, 6, 44, 'Noakhali Sadar'),
(146, 6, 44, 'Begumganj'),
(147, 6, 44, 'Chatkhil'),
(148, 6, 44, 'Companiganj'),
(149, 6, 44, 'Hatiya'),
(150, 6, 44, 'Kabir Hat'),
(151, 6, 44, 'Senbag'),
(152, 6, 44, 'Sonaimuri'),
(153, 6, 44, 'Subarna Char'),
(154, 6, 91, 'Baghaichari'),
(155, 6, 91, 'Barkal'),
(156, 6, 91, 'Belaichari'),
(157, 6, 91, 'Juraichari'),
(158, 6, 91, 'Kaptia'),
(159, 6, 91, 'Kaukhali'),
(160, 6, 91, 'Langadu'),
(161, 6, 91, 'Nanniarchar'),
(162, 6, 91, 'Rajosthali'),
(163, 6, 91, 'Rangamati Sadar'),
(164, 3, 60, 'Dhamrai'),
(165, 3, 60, 'Dohar'),
(166, 3, 60, 'Keraniganj'),
(167, 3, 60, 'Nawabganj'),
(168, 3, 60, 'Savar'),
(169, 3, 70, 'Alfadanga'),
(170, 3, 70, 'Bhanga'),
(171, 3, 70, 'Boalmari'),
(172, 3, 70, 'Charbhadrasan'),
(173, 3, 70, 'Faridpur Sadar'),
(174, 3, 70, 'Madhukhali'),
(175, 3, 70, 'Nagarkanda'),
(176, 3, 70, 'Sadarpur'),
(177, 3, 70, 'Saltha'),
(178, 3, 63, 'Gazipur Sadar'),
(179, 3, 63, 'Kaliakoir'),
(180, 3, 63, 'Kaliganj'),
(181, 3, 63, 'Kapasia'),
(182, 3, 63, 'Sreepur'),
(183, 3, 72, 'Gopalganj Sadar'),
(184, 3, 72, 'Kasiani'),
(185, 3, 72, 'Kotwalipara'),
(186, 3, 72, 'Muksudpur'),
(187, 3, 72, 'Tungipara'),
(188, 3, 61, 'Kishoreganj Sadar'),
(189, 3, 61, 'Austagram'),
(190, 3, 61, 'Bajitpur'),
(191, 3, 61, 'Bhairab'),
(192, 3, 61, 'Hossainpur'),
(193, 3, 61, 'Itna'),
(194, 3, 61, 'Karimganj'),
(195, 3, 61, 'Katiadi'),
(196, 3, 61, 'Kuliarchar'),
(197, 3, 61, 'Mithamoin'),
(198, 3, 61, 'Nikli'),
(199, 3, 61, 'Pakundia'),
(200, 3, 61, 'Tarail'),
(201, 3, 71, 'Kalkini'),
(202, 3, 71, 'Madaripur Sadar'),
(203, 3, 71, 'Rajoir'),
(204, 3, 71, 'Shibchar'),
(205, 3, 67, 'Daulatpur'),
(206, 3, 67, 'Ghior'),
(207, 3, 67, 'Harirampur'),
(208, 3, 67, 'Manikganj Sadar'),
(209, 3, 67, 'Saturia'),
(210, 3, 67, 'Shivalaya'),
(211, 3, 67, 'Singair'),
(212, 3, 68, 'Gazaria'),
(213, 3, 68, 'Lauhajong'),
(214, 3, 68, 'Munshiganj Sadar'),
(215, 3, 68, 'Sirajdikhan'),
(216, 3, 68, 'Sreenagar'),
(217, 3, 68, 'Tongibari'),
(218, 3, 65, 'Araihazar'),
(219, 3, 65, 'Bandar '),
(220, 3, 65, 'Narayanganj Sadar'),
(221, 3, 65, 'Rupganj'),
(222, 3, 65, 'Sonargaon'),
(223, 3, 62, 'Belabo'),
(224, 3, 62, 'Monohardi'),
(225, 3, 62, 'Palash'),
(226, 3, 62, 'Narsingdi Sadar'),
(227, 3, 62, 'Raipura'),
(228, 3, 62, 'Shibpur'),
(229, 3, 69, 'Baliakandi'),
(230, 3, 69, 'Goalanda'),
(231, 3, 69, 'Kalukhali'),
(232, 3, 69, 'Pangsha'),
(233, 3, 69, 'Rajbari Sadar'),
(234, 3, 64, 'Bhedarganj'),
(235, 3, 64, 'Damuddya'),
(236, 3, 64, 'Goshairhat'),
(237, 3, 64, 'Janjira'),
(238, 3, 64, 'Naria'),
(239, 3, 64, 'Shariatpur Sadar'),
(240, 3, 66, 'Basail'),
(241, 3, 66, 'Bhuapur'),
(242, 3, 66, 'Delduar'),
(243, 3, 66, 'Dhanbari'),
(244, 3, 66, 'Ghatail'),
(245, 3, 66, 'Gopalpur'),
(246, 3, 66, 'Kalihati'),
(247, 3, 66, 'Madhupur'),
(248, 3, 66, 'Mirzapur'),
(249, 3, 66, 'Nagarpur'),
(250, 3, 66, 'Shakhipur'),
(251, 3, 66, 'Tangail Sadar'),
(252, 2, 80, 'Bagerhat Sadar'),
(253, 2, 80, 'Chitalmari'),
(254, 2, 80, 'Fakirhat'),
(255, 2, 80, 'Kachoa'),
(256, 2, 80, 'Mollahat'),
(257, 2, 80, 'Mongla'),
(258, 2, 80, 'Morrelganj'),
(259, 2, 80, 'Rampal'),
(260, 2, 80, 'Sharankhola'),
(261, 2, 77, 'Alamdanga'),
(262, 2, 77, 'Chuadanga Sadar'),
(263, 2, 77, 'Damurhuda'),
(264, 2, 77, 'Jibannagar'),
(265, 2, 82, 'Abhoynagar'),
(266, 2, 82, 'Bagherpara'),
(267, 2, 82, 'Chowgacha'),
(268, 2, 82, 'Jashore Sadar'),
(269, 2, 82, 'Jhikargacha'),
(270, 2, 82, 'Keshabpur'),
(271, 2, 82, 'Monirampur'),
(272, 2, 82, 'Sarsha'),
(273, 2, 81, 'Harinakunda'),
(274, 2, 81, 'Jhenaidah Sadar'),
(275, 2, 81, 'Kaligonj'),
(276, 2, 81, 'Kotchandpur'),
(277, 2, 81, 'Moheshpur'),
(278, 2, 81, 'Shailkupa'),
(279, 2, 73, 'Batiaghata'),
(280, 2, 73, 'Dacope'),
(281, 2, 73, 'Dighalia'),
(282, 2, 73, 'Dumuria'),
(283, 2, 73, 'Koira'),
(284, 2, 73, 'Paikgacha'),
(285, 2, 73, 'Phultala'),
(286, 2, 73, 'Rupsa'),
(287, 2, 73, 'Terokhada'),
(288, 2, 78, 'Kushtia'),
(289, 2, 78, 'Bheramara'),
(290, 2, 78, 'Daulatpur'),
(291, 2, 78, 'Khoksha'),
(292, 2, 78, 'Kumarkhali'),
(293, 2, 78, 'Kushtia Sadar'),
(294, 2, 78, 'Mirpur'),
(295, 2, 79, 'Magura Sadar'),
(296, 2, 79, 'Mohammadpur'),
(297, 2, 79, 'Salikha'),
(298, 2, 79, 'Sreepur'),
(299, 2, 75, 'Gangni'),
(300, 2, 75, 'Meherpur Sadar'),
(301, 2, 75, 'Mujib Nagar'),
(302, 2, 76, 'Kalia'),
(303, 2, 76, 'Luhagara'),
(304, 2, 76, 'Narail Sadar'),
(305, 2, 74, 'Assasuni'),
(306, 2, 74, 'Debhata'),
(307, 2, 74, 'Kalaroa'),
(308, 2, 74, 'Kaliganj'),
(309, 2, 74, 'Satkhira Sadar'),
(310, 2, 74, 'Shyamnagar'),
(311, 2, 74, 'tala'),
(312, 8, 30, 'Bakshiganj'),
(313, 8, 30, 'Dewanganj'),
(314, 8, 30, 'Islampur'),
(315, 8, 30, 'Jamalpur Sadar'),
(316, 8, 30, 'Madarganj'),
(317, 8, 30, 'Melendah'),
(318, 8, 30, 'Sarishabari'),
(319, 8, 94, 'Bhaluka'),
(320, 8, 94, 'Dhobaura'),
(321, 8, 94, 'Fulbaria'),
(322, 8, 94, 'Gaffargaon'),
(323, 8, 94, 'Gouripur'),
(324, 8, 94, 'Haluaghat'),
(325, 8, 94, 'Ishwarganj'),
(326, 8, 94, 'Muktagacha'),
(327, 8, 94, 'Mymensingh Sadar'),
(328, 8, 94, 'Nandail'),
(329, 8, 94, 'Phulpur'),
(330, 8, 94, 'Tarakanda'),
(331, 8, 94, 'Trishal'),
(332, 8, 29, 'Nalitabari'),
(333, 8, 29, 'Sherpur Sadar'),
(334, 8, 29, 'Sreebordi'),
(335, 1, 86, 'Adamdighi'),
(336, 1, 86, 'Bogura Sadar'),
(337, 1, 86, 'Dhunot'),
(338, 1, 86, 'Dhupchancia'),
(339, 1, 86, 'Gabtali'),
(340, 1, 86, 'Khalaoo'),
(341, 1, 86, 'Nandigram'),
(342, 1, 86, 'Sariakandi'),
(343, 1, 86, 'Shajahanpur'),
(344, 1, 86, 'Sherpor'),
(345, 1, 86, 'Shibganj'),
(346, 1, 86, 'Sonatala'),
(347, 1, 89, 'Bholahat'),
(349, 1, 89, 'Gomostapur'),
(350, 1, 89, 'Nachol'),
(351, 1, 89, 'Nawabganj Sadar'),
(352, 1, 89, 'Shibganj'),
(353, 1, 88, 'Akkelpur'),
(354, 1, 88, 'Joypurhat Sadar'),
(355, 1, 88, 'Kalai'),
(356, 1, 88, 'Khetlal'),
(357, 1, 88, 'Panchbibi'),
(358, 1, 90, 'Atrai'),
(359, 1, 90, 'Badalgachi'),
(360, 1, 90, 'Dhamoirhat'),
(361, 1, 90, 'Manda'),
(362, 1, 90, 'Mohadevpur'),
(363, 1, 90, 'Naogaon Sadar'),
(364, 1, 90, 'Niamatpur'),
(365, 1, 90, 'Patnitala'),
(366, 1, 90, 'Porsha'),
(367, 1, 90, 'Raninagar'),
(368, 1, 90, 'Shapahar'),
(369, 1, 87, 'Bagatipara'),
(370, 1, 87, 'Baraigram'),
(371, 1, 87, 'Gurudaspur'),
(372, 1, 87, 'Lalpur'),
(373, 1, 87, 'Naldanga'),
(374, 1, 87, 'Natore Sadar'),
(375, 1, 87, 'Singra'),
(376, 1, 85, 'Atghoria'),
(377, 1, 85, 'Bera'),
(378, 1, 85, 'Bhangura'),
(379, 1, 85, 'Chatmohar'),
(380, 1, 85, 'Faridpur'),
(381, 1, 85, 'Ishwardi'),
(382, 1, 85, 'Pabna Sadar'),
(383, 1, 85, 'Santhia'),
(384, 1, 85, 'Sujanagar'),
(385, 1, 83, 'Bagha '),
(386, 1, 83, 'Bagmara'),
(387, 1, 83, 'Charghat'),
(388, 1, 83, 'Dorgapur'),
(389, 1, 83, 'Godagari'),
(390, 1, 83, 'Mohanpur'),
(391, 1, 83, 'Paba'),
(392, 1, 83, 'Puthia'),
(393, 1, 83, 'Tanore'),
(394, 1, 84, 'Belkuchi'),
(395, 1, 84, 'Chowhali'),
(396, 1, 84, 'Kamarkhand'),
(397, 1, 84, 'Kazipur'),
(398, 1, 85, 'Raiganj'),
(399, 1, 84, 'Shahzadpur'),
(400, 1, 84, 'Sirajganj Sadar'),
(401, 1, 84, 'Tarash'),
(402, 1, 84, 'Ullapara'),
(403, 7, 33, 'Birampur'),
(404, 7, 33, 'Birganj'),
(405, 7, 33, 'Birol'),
(406, 7, 33, 'Bochaganj'),
(407, 7, 33, 'Chirirbandar'),
(408, 7, 33, 'Dinajpur Sadar'),
(409, 7, 33, 'Fulbari '),
(410, 7, 33, 'Ghoraghat'),
(411, 7, 33, 'Hakimpur'),
(412, 7, 33, 'Kaharol'),
(413, 7, 33, 'Khanshama'),
(414, 7, 33, 'Nawabgonj'),
(415, 7, 33, 'Parbatipur'),
(416, 7, 36, 'Fulchari'),
(417, 7, 36, 'Gaibandha Sadar'),
(418, 7, 36, 'Gobindaganj'),
(419, 7, 36, 'Palashbari'),
(420, 7, 36, 'Sadullapur'),
(421, 7, 36, 'Saghata'),
(422, 7, 36, 'Sundarganj'),
(423, 7, 39, 'Bhurungamari'),
(424, 7, 39, 'Chilmari'),
(425, 7, 39, 'Folbari'),
(426, 7, 39, 'Kurigram Sadar'),
(427, 7, 39, 'Nageswari'),
(428, 7, 38, 'Rajarhat'),
(429, 7, 39, 'Rajibpur'),
(430, 7, 39, 'Rowmari'),
(431, 7, 39, 'Ulipur'),
(432, 7, 34, 'Aditmari'),
(433, 7, 34, 'Hatibandha'),
(435, 7, 34, 'Kaligonj'),
(436, 7, 34, 'Lalmonirhat Sadar'),
(437, 7, 34, 'Patgram'),
(438, 7, 35, 'Dimla'),
(439, 7, 35, 'Domar'),
(440, 7, 35, 'Jaldhaka'),
(441, 7, 35, 'Kishoreganj '),
(442, 7, 35, 'Nilphamari Sadar'),
(443, 7, 35, 'Sayedpur'),
(444, 7, 32, 'Atwari'),
(445, 7, 32, 'Boda'),
(446, 7, 32, 'Debiganj'),
(447, 7, 32, 'Panchagarh Sadar'),
(448, 7, 32, 'Tetulia'),
(449, 7, 38, 'Badarganj'),
(450, 7, 38, 'Gangachara'),
(451, 7, 38, 'Kaunia'),
(452, 7, 38, 'Mithapukur'),
(453, 7, 38, 'Pirgacha'),
(454, 7, 38, 'Pirganj'),
(455, 7, 38, 'Rangpur Sadar'),
(456, 7, 38, 'Taraganj'),
(457, 7, 37, 'Baliadangi'),
(458, 7, 37, 'Haripur'),
(459, 7, 37, 'Pirganj'),
(460, 7, 37, 'Ranisankail'),
(461, 7, 37, 'Thakurgaon Sadar'),
(462, 4, 58, 'Azmiriganj'),
(463, 4, 58, 'Bahubal'),
(464, 4, 58, 'Baniachong'),
(465, 4, 58, 'Chunarughat'),
(466, 4, 58, 'Habiganj Sadar'),
(467, 4, 58, 'Lakhai'),
(468, 4, 58, 'Madhabpur'),
(469, 4, 58, 'Nabiganj'),
(470, 4, 58, 'Sayestaganj'),
(471, 4, 57, 'Barlekha'),
(472, 4, 57, 'Juri'),
(473, 4, 57, 'Kamalganj'),
(474, 4, 57, 'Kulaura'),
(475, 4, 57, 'Moulvibazar Sadar'),
(476, 4, 57, 'Rajnagar'),
(477, 4, 57, 'Sreemangal'),
(478, 4, 59, 'Biswamvarpur'),
(479, 4, 59, 'Chatak'),
(480, 4, 59, 'Dakhin Sunamganj'),
(481, 4, 59, 'Derai'),
(482, 4, 59, 'Dharmapasha'),
(483, 4, 59, 'Doarabazar'),
(484, 4, 59, 'Jagannathpur'),
(485, 4, 59, 'Jamalganj'),
(486, 4, 59, 'Sulla'),
(487, 4, 59, 'Sunamganj Sadar'),
(488, 4, 59, 'Tahirpur'),
(489, 4, 56, 'Balaganj'),
(490, 4, 56, 'Beanibazar'),
(491, 4, 56, 'Biswanath'),
(492, 4, 56, 'Companigonj'),
(493, 4, 56, 'Dakshin Surma'),
(494, 4, 56, 'Fenchuganj'),
(495, 4, 56, 'Golapganj'),
(496, 4, 56, 'Gowainghat'),
(497, 4, 56, 'Jointiapur'),
(498, 4, 56, 'Kanaighat'),
(499, 4, 56, 'Osmaninagar'),
(500, 4, 56, 'Sylhet Sadar'),
(502, 7, 38, 'lk\';\'l;\'lkfdgf'),
(503, 7, 37, 'kulfi danga');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE `master_user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `profile_name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `terms_condition` varchar(60) NOT NULL,
  `role_id` int(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `random_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`id`, `user_name`, `profile_name`, `password`, `phone`, `email`, `company_logo`, `terms_condition`, `role_id`, `status`, `random_number`) VALUES
(1, 'admin', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', '01869121524', 'shakibuli08@gmail.com', '', '', 1, 1, ''),
(22, 'shakibul1997', 'Shakibul', 'e10adc3949ba59abbe56e057f20f883e', '0186912124', 'user37@gmail.com', '', '', 2, 1, ''),
(32, 'mananavai2000', '', 'e10adc3949ba59abbe56e057f20f883e', '01315565037', 'mananavai2000@gmail.com', '', '', 2, 1, ''),
(39, 'Jannat', '', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', 4, 1, ''),
(41, 'jannat123', '', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', 1, 1, ''),
(42, 'jannat1', '', 'e10adc3949ba59abbe56e057f20f883e', '01735370869', 'ferdousjannat1212@gmail.com', '', '', 2, 1, ''),
(58, 'Rabiya2020', '', 'e10adc3949ba59abbe56e057f20f883e', '01856523654', 'Rabiya2020@gmail.com', '', '', 2, 1, ''),
(61, 'dipduniya', '', '8bfd5ff4747cc09726e5c4fd65fb18fb', '01723584950', 'dipduniya@gmail.com', '', '', 2, 1, ''),
(78, 'Craftic Arts', '', 'e10adc3949ba59abbe56e057f20f883e', '01973584950', 'crafticarts@gmail.com', '', '', 2, 1, ''),
(79, 'Datasoft', '', 'e10adc3949ba59abbe56e057f20f883e', '01926248496', 'mannanswe608@gmail.comc', '', '', 2, 0, ''),
(81, 'Craftic', '', 'e10adc3949ba59abbe56e057f20f883e', '01869121528', 'smshuvo112@gmail.com', '', '', 2, 1, ''),
(84, 'Shakibul Trade', '', 'e10adc3949ba59abbe56e057f20f883e', '01717110060', 'ron@webase.com.bd', '', '', 2, 1, ''),
(119, 'Illu Host ', '', '25f9e794323b453885f5181f1b624d0b', '01812442234', 'illuhost@gmail.com', '', '', 2, 1, '2344'),
(127, 'SMG', '', 'e10adc3949ba59abbe56e057f20f883e', '01717022024', 'mannanswe608@gmail.com', '', '', 2, 1, '24614'),
(129, 'jannathi.digital', '', '', '1735370862', 'jannathi.digital@gmail.com', '', '', 2, 1, '12527'),
(130, 'Applesoft', '', 'e10adc3949ba59abbe56e057f20f883e', '01763022366', 'hellowebase@gmail.com', '', '', 2, 1, '77587'),
(134, 'Veracious SLTD', '', 'e10adc3949ba59abbe56e057f20f883e', '01879186653', 'smshuvo1612@gmail.com', '', '', 2, 1, '30841');

-- --------------------------------------------------------

--
-- Table structure for table `master_work_authority`
--

CREATE TABLE `master_work_authority` (
  `id` int(10) NOT NULL,
  `work_authority_name` varchar(60) NOT NULL,
  `status` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_work_authority`
--

INSERT INTO `master_work_authority` (`id`, `work_authority_name`, `status`) VALUES
(1, 'Sports Ministry', 1),
(2, 'ICT Ministry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_year`
--

CREATE TABLE `master_year` (
  `id` int(10) NOT NULL,
  `year_name` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_year`
--

INSERT INTO `master_year` (`id`, `year_name`) VALUES
(1, '2017'),
(2, '2018'),
(3, '2019'),
(4, '2020'),
(5, '2021'),
(6, '2022');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `id` int(191) NOT NULL,
  `user_id` int(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `nid` varchar(70) NOT NULL,
  `tin` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `terms_condition` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`id`, `user_id`, `name`, `designation`, `nid`, `tin`, `email`, `phone`, `image`, `terms_condition`, `created_by`, `date_and_time`, `remarks`) VALUES
(1, 17, 'Shakibul Islamgf', 'dgfg', '454356546', '54654656', 'shakibuli08@gmail.com', '8768768678', '', '1', '17', '09-05-2021, 2:52 pm', 'Add'),
(2, 22, 'Shakibul ', 'Managing ', '25648754654', '15954767', 'user3@gmail.com', '01554212456', '09-06-2021_1623217484.jpg', '', 'user5', '18-05-2021, 7:19 pm', 'Add'),
(3, 28, 'fdgfdgfd', 'fdgfdgfd', '345435435', '34535435', '324534534', '435345345', '24-05-2021_1621836706.jpg', '1', 'user11', '24-05-2021, 12:11 pm', 'Add'),
(4, 33, 'rwrwq', 'rwqrq', 'q3535', '5322', 'applesoftit7@gmail.com', '01795075226', '31-05-2021_1622463746.pdf', '1', 'mannan', '31-05-2021, 6:22 pm', 'Add'),
(5, 34, 'Wick', 'K', '1367868368689', '745387968796', 'Wick@erpstagi.xyz', '015497889864', '31-05-2021_1622464970.png', '1', 'S.M Shuvo', '31-05-2021, 6:42 pm', 'Add'),
(6, 52, 'Md Rana', 'Product Manager', '2222', '3333', 'rana@gmail.com', '01926248496', '06-06-2021_1622979838.pdf', '1', 'Webase', '06-06-2021, 5:43 pm', 'Add'),
(7, 55, 'Mizanur Rahman', 'qwq', '2131', '231', 'mannan@gmail.com', '01717022024', '09-06-2021_1623214300.jpg', '1', 'rana', '09-06-2021, 10:51 am', 'Add'),
(8, 56, 'Sohag', 'Marketing', '2365214', '693258', 'sohag@gmail.com', '01741663514', '11-06-2021_1623396066.jpg', '1', 'shoriful1234', '11-06-2021, 1:21 pm', 'Add'),
(9, 58, 'Shakibul Islam', 'Business man', '56896522', '654553465', 'webase@gmail.com', '01589658963', '13-06-2021_1623566990.jpg', '1', 'Rabiya2020', '13-06-2021, 12:49 pm', 'Add'),
(10, 59, 'tushar', 'abc', '0123456789123456', '123456789102', 'tushar@gmail.com', '01234567891', '13-06-2021_1623577185.png', '1', 'tushar', '13-06-2021, 3:39 pm', 'Add'),
(12, 57, 'Shakibul Islam', 'Web Developer', '4365656709', '346345634563', 'webase34@gmail.com', '01564587569', '14-06-2021_1623647563.png', '1', 'Mannan2021', '14-06-2021, 11:12 am', 'Add'),
(13, 79, 'Faisal Karim Masud', 'BA', '2131878767679', '213187876762', 'applesoftit7@gmail.com', '01795075226', '26-06-2021_1624707868.jpg', '1', 'Datasoft', '26-06-2021, 4:46 pm', 'Add'),
(14, 82, 'Mannan Khan', 'Business man', '2345345346', '325432534555', 'shakibul19974@gtmail.com', '01869121545', '26-06-2021_1624714136.jpg', '1', 'web', '26-06-2021, 7:28 pm', 'Add'),
(15, 84, 'Rezu', 'Dev', '1234098651', '845967532678', 'rezu@webase.com.bd', '01254893756', '', '1', 'Shakibul Trade', '27-06-2021, 1:43 pm', 'Add'),
(16, 118, 'Rana', 'Business Analyst', '1223243434', '999877665544', 'ranarobiulhassan@gmail.com', '01316565037', '28-06-2021_1624871903.jpg', '1', 'GM Group', '28-06-2021, 3:18 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `official_contract`
--

CREATE TABLE `official_contract` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `nid` varchar(60) NOT NULL,
  `tin` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `terms_condition` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `official_contract`
--

INSERT INTO `official_contract` (`id`, `user_id`, `name`, `designation`, `nid`, `tin`, `email`, `phone`, `terms_condition`, `created_by`, `date_and_time`, `remarks`) VALUES
(1, 14, 'Shakibul Islam', 'webdeveloper', '435646567767', '3465467765765', 'admin@gmail.com', '01557268139', '1', '14', '09-05-2021, 1:50 pm', 'Add'),
(2, 14, 'Shakibul Islam', 'webdeveloper', '435646567767', '5467gfhg', 'admin@gmail.com', '01843577603', '1', '14', '09-05-2021, 2:17 pm', 'Add'),
(3, 17, 'ytrtytuh', 'hgfdfgh', 'hfgh', 'hgfh', 'amhackeri575@gmail.com', '01869121512', '1', '17', '09-05-2021, 2:53 pm', 'Add'),
(4, 21, 'Shakibul Islam', 'fdgfdgdf', '5465465655465', '32543566546', 'user20@gmail.com', '01869121567', '1', '21', '11-05-2021, 4:39 pm', 'Add'),
(5, 0, 'dfhfg', 'dfghfg', 'dfghfg', 'dfghdfg', 'dfghfg', 'dfghdfgh', '1', 'user5', '18-05-2021, 7:21 pm', 'Add'),
(6, 21, 'dfhdfgh', 'dfghdf', 'dfghdf', 'ghdfgh', 'user4@gmail.com', '01554212110', '1', 'user5', '18-05-2021, 7:22 pm', 'Add'),
(7, 21, 'fhdg', 'hfghfg', 'fdh', 'dfhfd', 'dfghfg', 'hgf', '1', 'user5', '18-05-2021, 7:23 pm', 'Add'),
(8, 22, 'Samiul Islam', 'App Development', '434123432577', '6565434543', 'sadre@gmail.com', '01589632563', '1', 'shakibul1997', '19-05-2021, 10:52 am', 'Add'),
(12, 28, 'xcvvxcv', 'xcvcxv', '53436546', '345345345', 'user112@gmail.com', '4656547657', '1', 'user11', '24-05-2021, 12:12 pm', 'Add'),
(13, 33, 'fgdfgdf', 'fdhdfhf', '4534', '535', 'applesoftit7@gmail.com', '01795075226', '1', 'mannan', '31-05-2021, 6:22 pm', 'Add'),
(14, 34, 'eddde', 'edhatrh', '3154894', '94984', '64854@gmail.com', '01887899865', '1', 'S.M Shuvo', '31-05-2021, 6:43 pm', 'Add'),
(15, 52, 'Md Rion', 'Product manager', '1111', '2222', 'rion@gmail.com', '01765022366', '1', 'Webase', '06-06-2021, 5:44 pm', 'Add'),
(16, 55, 'Mizanur Rahman', 'BA', '33', '31', 'applesoftit7@gmail.com', '01717022024', '1', 'rana', '09-06-2021, 10:51 am', 'Add'),
(17, 56, 'Faisal', 'Student', '5893695', '1236548', 'faisal@gmail.com', '01869121567', '1', 'shoriful1234', '11-06-2021, 1:21 pm', 'Add'),
(18, 58, 'Direct Tax ', 'Web Developer', '54636854', '56746534524', 'webase2@gmail.com', '01564587569', '1', 'Rabiya2020', '13-06-2021, 12:50 pm', 'Add'),
(19, 59, 'tushar', 'abc', '12345678912', '123456789102', 'tushar@gmail.com', '01234567891', '1', 'tushar', '13-06-2021, 3:42 pm', 'Add'),
(20, 57, 'Shakibul Islam', 'web Developer', '4365656790', '346345634563', 'webase90@gmail.com', '01564587567', '1', 'Mannan2021', '14-06-2021, 11:31 am', 'Add'),
(21, 79, 'Faisal Karim Masud', 'BA', '2131878767679', '213187876767', 'applesoftit7@gmail.com', '01795075226', '1', 'Datasoft', '26-06-2021, 4:46 pm', 'Add'),
(22, 82, 'Shuvo Islam', 'Business man', '3453454343', '345435434434', 'smshuvo12@gmail.com', '01869121590', '1', 'web', '26-06-2021, 7:29 pm', 'Add'),
(23, 84, 'Mannan', 'Executive', '7894563214567', '654789321896', 'mannan@webase.com.bd', '01258743694', '1', 'Shakibul Trade', '27-06-2021, 1:44 pm', 'Add'),
(24, 118, 'dip', 'CEO owner', '1223243444', '999877665544', 'crafticarts@gmail.com', '01926248496', '1', 'GM Group', '28-06-2021, 3:18 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_link`
--

CREATE TABLE `portfolio_link` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_type` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `project_value` varchar(70) NOT NULL,
  `client_name` varchar(70) NOT NULL,
  `link` varchar(50) DEFAULT NULL,
  `board_of_resolution` varchar(50) DEFAULT NULL,
  `terms_condition` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_link`
--

INSERT INTO `portfolio_link` (`id`, `user_id`, `project_name`, `project_type`, `description`, `project_value`, `client_name`, `link`, `board_of_resolution`, `terms_condition`, `created_by`, `date_and_time`, `remarks`) VALUES
(1, 22, 'Sumona hospital', 'pharmacy', 'This is very Hard Project dfgfdg', '1000000', 'Sumona Hospital', 'https://www.facebook.com/', '07-06-2021_1623059261.jpg', '1', '14', '09-05-2021, 1:03 pm', 'Add'),
(2, 22, 'glomart.com.bd', 'Web Application', 'good project 1', '32543', 'ontu', 'https://www.facebook.com/', '07-06-2021_1623059309.jpg', '1', '14', '09-05-2021, 2:21 pm', 'Add'),
(3, 22, 'Hambahat', 'Web Application', 'Good Application', '4000000', 'Rajib Ahmed', 'https://www.facebook.com/', '07-06-2021_1623059481.png', '1', '17', '09-05-2021, 2:51 pm', 'Add'),
(4, 22, 'Enlist Work', 'Web Development', 'This is Big Budget Project', '100000', 'Faisal Ahmed', 'https://www.facebook.com/', '07-06-2021_1623059371.png', '1', 'user5', '18-05-2021, 6:56 pm', 'Add'),
(5, 28, 'dvcxv', 'xzcvcx', 'xcvxcv', '43545', 'fghfgh', 'fdhgfhh', '24-05-2021_1621836422.jpg', '1', 'user11', '24-05-2021, 12:07 pm', 'Add'),
(6, 33, 'ddhd', 'fdff', 'fsdfsf', 'fsfsf', 'dfsafa', 'https://dribbble.com/shots/9919783-News-App-UI', '31-05-2021_1622463707.docx', '1', 'mannan', '31-05-2021, 6:21 pm', 'Add'),
(7, 34, 'erpstagi.xyz', 'erp system', 'erp system erp system erp system erp system erp system erp s', '50000000000000', 'vigo', 'erpstagi.xyz', '31-05-2021_1622464559.jpg', '1', 'S.M Shuvo', '31-05-2021, 6:35 pm', 'Add'),
(8, 52, 'App development', 'Mobile Apps', 'Develop succwssfully dsds', '500000', 'MM DIP', 'https://webase.com.bd', '06-06-2021_1622978928.docx', '1', 'Webase', '06-06-2021, 5:28 pm', 'Add'),
(9, 55, 'soft', 'mobile', 'fggkdjgdg', '567586586', 'dip', 'https://www.aliexpress.com/item/4000337936472.html', '08-06-2021_1623154356.pdf', '1', 'rana', '08-06-2021, 6:12 pm', 'Add'),
(10, 55, 'soft', 'mobile', 'fggkdjgdg', '298987987', 'dip', 'https://www.aliexpress.com/item/4000337936472.html', '09-06-2021_1623214224.pdf', '1', 'rana', '09-06-2021, 10:50 am', 'Add'),
(11, 56, 'Hambahat', 'Web Application', 'Meat Sale', '300000', 'Rajib', 'https://hambahat.com/', '11-06-2021_1623395977.png', '1', 'shoriful1234', '11-06-2021, 1:19 pm', 'Add'),
(12, 58, 'Hambahat', 'Web base', 'BNC audit lends credibility to client’s financial statements', '300000', 'Rana Islam', '', '13-06-2021_1623566632.jpg', '1', 'Rabiya2020', '13-06-2021, 12:43 pm', 'Add'),
(13, 59, 'bca', 'gove', 'sdgrdshuyj', '100000', 'cba', '', '13-06-2021_1623577049.png', '1', 'tushar', '13-06-2021, 3:37 pm', 'Add'),
(14, 57, 'Hambahat', 'Web base', 'BNC audit lends credibility to client’s financial statements', '300000', 'Rana Islam', '', '14-06-2021_1623645722.pdf', '1', 'Mannan2021', '14-06-2021, 10:42 am', 'Add'),
(15, 79, 'soft', 'mobile', 'fggkdjgdg', '200000', 'Mannan', 'https://www.aliexpress.com/item/4000337936472.html', '26-06-2021_1624707423.jpg', '1', 'Datasoft', '26-06-2021, 4:49 pm', 'Add'),
(16, 82, 'hambahat', 'Web Application', 'good', '20000', 'RAjib', '', '26-06-2021_1624714200.jpg', '1', 'web', '26-06-2021, 7:27 pm', 'Add'),
(17, 84, 'New Project', 'Govt', 'New', '120000', 'ICT Divition', 'https://enlistwork.com/frontend/portfolio_award', '27-06-2021_1624779557.png', '1', 'Shakibul Trade', '27-06-2021, 1:36 pm', 'Add'),
(18, 52, 'soft', 'mobile', 'Develop succwssfully dsds', '5353454', 'Mannan', 'https://www.aliexpress.com/item/4000337936472.html', NULL, '1', 'Webase', '28-06-2021, 11:03 am', 'Add'),
(19, 118, 'soft', 'software development', 'Develop succwssfully', '500000', 'Shakibul', '', NULL, '1', 'GM Group', '28-06-2021, 3:17 pm', 'Add'),
(20, 127, 'adafg', 'adagd', 'afdaegvfsbfzsd', '5000', 'sdfvgsdfvgzfdx', 'https://web.whatsapp.com/', '29-06-2021_1624962679.png', '1', 'SMG', '29-06-2021, 4:05 pm', 'Add'),
(22, 128, 'soft', 'software development', 'sacasdass', '500000', 'dip', '', '29-06-2021_1624976397.pdf', '1', 'Veracious SLTD', '29-06-2021, 7:31 pm', 'Add'),
(23, 128, 'Hambahat ', 'fyuilh', 'hfvbjl.ugob;o', '88888', 'John Wick', 'https://enlistwork.com/frontend/profile_all_detail', '29-06-2021_1624976379.png', '1', 'Veracious SLTD', '29-06-2021, 8:19 pm', 'Add');

-- --------------------------------------------------------

--
-- Table structure for table `post_installment_type`
--

CREATE TABLE `post_installment_type` (
  `id` int(11) NOT NULL,
  `bidder_installment_type` varchar(100) NOT NULL,
  `payment_term` varchar(100) NOT NULL,
  `payment_sl` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `job_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_installment_type`
--

INSERT INTO `post_installment_type` (`id`, `bidder_installment_type`, `payment_term`, `payment_sl`, `user_id`, `type`, `job_id`) VALUES
(157, '40', '3', 0, 59, 1, 14),
(158, '30', '3', 1, 59, 1, 14),
(159, '30', '3', 2, 59, 1, 14),
(160, '40', '3', 0, 59, 2, 14),
(161, '30', '3', 1, 59, 2, 14),
(162, '30', '3', 2, 59, 2, 14),
(163, '50', '2', 0, 22, 1, 15),
(164, '50', '2', 1, 22, 1, 15),
(165, '50', '2', 0, 22, 2, 15),
(166, '50', '2', 1, 22, 2, 15),
(167, '33', '3', 0, 22, 1, 16),
(168, '34', '3', 1, 22, 1, 16),
(169, '33', '3', 2, 22, 1, 16),
(170, '33', '3', 0, 22, 2, 16),
(171, '33', '3', 1, 22, 2, 16),
(172, '34', '3', 2, 22, 2, 16),
(173, '45', '3', 0, 22, 1, 17),
(174, '10', '3', 1, 22, 1, 17),
(175, '45', '3', 2, 22, 1, 17),
(176, '33', '3', 0, 59, 1, 18),
(177, '45', '3', 1, 59, 1, 18),
(178, '22', '3', 2, 59, 1, 18),
(179, '50', '3', 0, 59, 1, 19),
(180, '25', '3', 1, 59, 1, 19),
(181, '25', '3', 2, 59, 1, 19),
(182, '60', '3', 0, 56, 1, 20),
(183, '20', '3', 1, 56, 1, 20),
(184, '20', '3', 2, 56, 1, 20),
(185, '33', '4', 0, 56, 1, 21),
(186, '33', '4', 1, 56, 1, 21),
(187, '14', '4', 2, 56, 1, 21),
(188, '20', '4', 3, 56, 1, 21),
(189, '50', '2', 0, 52, 1, 22),
(190, '50', '2', 1, 52, 1, 22),
(191, '50', '2', 0, 52, 2, 23),
(192, '50', '2', 1, 52, 2, 23),
(193, '50', '2', 0, 52, 2, 24),
(194, '50', '2', 1, 52, 2, 24),
(195, '50', '2', 0, 52, 1, 25),
(196, '50', '2', 1, 52, 1, 25),
(197, '50', '2', 0, 22, 1, 26),
(198, '50', '2', 1, 22, 1, 26),
(199, '60', '2', 0, 22, 2, 26),
(200, '40', '2', 1, 22, 2, 26),
(201, '50', '2', 0, 52, 2, 27),
(202, '50', '2', 1, 52, 2, 27),
(203, '50', '2', 0, 52, 2, 28),
(204, '50', '2', 1, 52, 2, 28),
(205, '50', '2', 0, 52, 2, 29),
(206, '50', '2', 1, 52, 2, 29),
(207, '50', '2', 0, 82, 1, 30),
(208, '50', '2', 1, 82, 1, 30),
(209, '50', '2', 0, 82, 2, 31),
(210, '50', '2', 1, 82, 2, 31),
(211, '50', '2', 0, 22, 1, 32),
(212, '50', '2', 1, 22, 1, 32),
(213, '100', '1', 0, 22, 1, 33),
(214, '70', '2', 0, 22, 2, 34),
(215, '30', '2', 1, 22, 2, 34),
(216, '30', '2', 0, 22, 1, 35),
(217, '70', '2', 1, 22, 1, 35),
(218, '50', '2', 0, 22, 2, 35),
(219, '50', '2', 1, 22, 2, 35);

-- --------------------------------------------------------

--
-- Table structure for table `publisher_agreement`
--

CREATE TABLE `publisher_agreement` (
  `id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `notification_status` int(10) NOT NULL DEFAULT 1,
  `description` varchar(400) DEFAULT NULL,
  `time` varchar(300) NOT NULL,
  `budget` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher_agreement`
--

INSERT INTO `publisher_agreement` (`id`, `user_id`, `post_id`, `notification_status`, `description`, `time`, `budget`) VALUES
(57, 22, 21, 0, 'Good', '4 month', '600000'),
(58, 22, 20, 0, 'good', '4 month', '600000'),
(59, 22, 22, 0, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default mod', '2', '40000'),
(60, 22, 25, 0, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default mod', '2', '500000'),
(61, 52, 30, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic', 'delivery', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `publisher_agreement_payment`
--

CREATE TABLE `publisher_agreement_payment` (
  `id` int(20) NOT NULL,
  `agreement_id` int(40) NOT NULL,
  `work_description` varchar(300) NOT NULL,
  `amount` text NOT NULL,
  `work_process` varchar(100) NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `payment_date` varchar(20) NOT NULL,
  `request_money` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher_agreement_payment`
--

INSERT INTO `publisher_agreement_payment` (`id`, `agreement_id`, `work_description`, `amount`, `work_process`, `attachment`, `payment_date`, `request_money`, `status`) VALUES
(53, 57, '1st time', '200000', '33%', '21-06-2021_1624271291.pdf', '2021-06-21', '200000', 2),
(54, 57, '2nd Time', '200000', '33%', '21-06-2021_1624271362.pdf', '2021-06-21', '200000', 4),
(55, 57, '3rd Time', '200000', '34%', '21-06-2021_1624272044.pdf', '2021-06-21', '200000', 3),
(56, 58, '1st Time ', '200000', '33%', '22-06-2021_1624342829.pdf', '2021-06-22', '200000', 4),
(57, 58, '2nd time', '400000', '', '', '', '', 1),
(58, 59, '1st Installment', '20000', '40%', '22-06-2021_1624362059.pdf', '2021-06-22', '20000', 3),
(59, 59, '2nd installment', '20000', '60%', '22-06-2021_1624362269.pdf', '2021-06-22', '15000', 4),
(60, 60, '1st Installment', '300000', '40%', '22-06-2021_1624365519.pdf', '2021-06-22', '300000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `publisher_investor_agreement`
--

CREATE TABLE `publisher_investor_agreement` (
  `id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `notification_status` int(10) NOT NULL DEFAULT 1,
  `description` varchar(400) NOT NULL,
  `time` varchar(300) NOT NULL,
  `budget` varchar(300) NOT NULL,
  `invest_amount` varchar(300) NOT NULL,
  `profit_share` varchar(20) NOT NULL,
  `total_benifit_amount` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher_investor_agreement`
--

INSERT INTO `publisher_investor_agreement` (`id`, `user_id`, `post_id`, `notification_status`, `description`, `time`, `budget`, `invest_amount`, `profit_share`, `total_benifit_amount`) VALUES
(51, 22, 14, 0, '                            \r\n                        Good ', '4 month', '500000', '400000', '40%', '560000'),
(52, 22, 23, 0, '                            \r\n                        gffdgfhfdghdfjdfgjgkdgk', '2', '40000', '33333', '40%', '46666.2'),
(53, 79, 23, 0, ' long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text', '5', '500000', '40000', '40%', '56000'),
(57, 56, 29, 0, 'long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,', '5', '30000', '20000', '40%', '28000');

-- --------------------------------------------------------

--
-- Table structure for table `publisher_investor_agreement_payment`
--

CREATE TABLE `publisher_investor_agreement_payment` (
  `id` int(20) NOT NULL,
  `agreement_id` int(40) NOT NULL,
  `work_description` varchar(300) NOT NULL,
  `amount` text NOT NULL,
  `work_process` varchar(100) NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `payment_date` varchar(20) NOT NULL,
  `request_money` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher_investor_agreement_payment`
--

INSERT INTO `publisher_investor_agreement_payment` (`id`, `agreement_id`, `work_description`, `amount`, `work_process`, `attachment`, `payment_date`, `request_money`, `status`) VALUES
(43, 51, '1st Time ', '100000', '', '', '', '', 3),
(44, 51, '2nd Time ', '100000', '', '', '', '', 5),
(45, 51, '3rd Time', '200000', '', '', '', '', 5),
(46, 52, 'fwetete', '16667', '', '', '', '', 5),
(47, 52, 'wrwete', '16666', '', '', '', '', 5),
(48, 53, '1st installment', '30000', '', '', '', '', 1),
(49, 53, '2nd', '10000', '', '', '', '', 1),
(50, 57, '1st installment', '10000', '', '', '', '', 1),
(51, 57, '2nd', '10000', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription_payment`
--

CREATE TABLE `subscription_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription_payment`
--

INSERT INTO `subscription_payment` (`id`, `user_id`, `account_no`, `txn_id`, `amount`, `status`, `created_at`) VALUES
(1, 22, '187186653', '4536853686', '50', 1, '2021-06-14 09:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_permission`
--

CREATE TABLE `user_role_permission` (
  `id` int(10) NOT NULL,
  `module_id` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `sub_menu_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role_permission`
--

INSERT INTO `user_role_permission` (`id`, `module_id`, `menu_id`, `sub_menu_id`, `user_id`, `status`) VALUES
(981, 2, 3, 42, 7, 1),
(982, 2, 5, 27, 7, 1),
(2521, 7, 24, 77, 3, 1),
(2522, 7, 24, 78, 3, 1),
(2523, 2, 3, 42, 3, 1),
(2524, 2, 4, 20, 3, 1),
(2525, 2, 5, 27, 3, 1),
(2526, 7, 22, 67, 11, 1),
(2527, 7, 22, 68, 11, 1),
(2528, 7, 22, 76, 11, 1),
(2529, 7, 23, 69, 11, 1),
(2530, 7, 23, 70, 11, 1),
(2531, 7, 24, 71, 11, 1),
(2532, 7, 24, 77, 11, 1),
(2533, 7, 24, 78, 11, 1),
(2534, 7, 25, 72, 11, 1),
(2535, 7, 26, 73, 11, 1),
(2536, 7, 26, 74, 11, 1),
(2537, 7, 26, 75, 11, 1),
(2538, 2, 3, 42, 11, 1),
(2539, 2, 4, 20, 11, 1),
(2540, 2, 4, 26, 11, 1),
(2541, 2, 5, 27, 11, 1),
(2542, 2, 7, 43, 11, 1),
(4349, 7, 24, 77, 9, 1),
(4350, 5, 17, 56, 9, 1),
(4351, 5, 18, 57, 9, 1),
(4352, 5, 19, 58, 9, 1),
(4353, 4, 15, 54, 9, 1),
(4354, 2, 3, 42, 9, 1),
(4355, 2, 4, 20, 9, 1),
(4356, 2, 4, 26, 9, 1),
(4357, 2, 5, 27, 9, 1),
(4358, 2, 7, 43, 9, 1),
(4377, 7, 24, 77, 10, 1),
(4378, 7, 24, 78, 10, 1),
(4379, 5, 17, 56, 10, 1),
(4380, 5, 17, 101, 10, 1),
(4381, 5, 17, 102, 10, 1),
(4382, 5, 18, 57, 10, 1),
(4383, 5, 19, 58, 10, 1),
(4384, 4, 15, 54, 10, 1),
(4385, 2, 3, 42, 10, 1),
(4386, 2, 4, 20, 10, 1),
(5199, 3, 10, 51, 8, 1),
(5710, 5, 33, 121, 6, 1),
(5711, 5, 34, 122, 6, 1),
(5712, 5, 38, 129, 6, 1),
(5713, 5, 39, 130, 6, 1),
(5714, 5, 35, 123, 5, 1),
(5715, 3, 29, 115, 5, 1),
(5716, 3, 30, 116, 5, 1),
(5717, 3, 31, 117, 5, 1),
(5737, 7, 22, 68, 12, 1),
(5738, 7, 23, 69, 12, 1),
(5739, 7, 24, 78, 12, 1),
(5740, 7, 25, 72, 12, 1),
(5741, 7, 26, 74, 12, 1),
(5742, 6, 27, 82, 12, 1),
(5743, 6, 28, 112, 12, 1),
(5744, 5, 17, 101, 12, 1),
(5745, 5, 20, 59, 12, 1),
(5746, 5, 33, 121, 12, 1),
(5747, 5, 34, 122, 12, 1),
(5748, 5, 35, 123, 12, 1),
(5749, 5, 36, 127, 12, 1),
(5750, 5, 37, 128, 12, 1),
(5751, 4, 13, 52, 12, 1),
(5752, 4, 14, 62, 12, 1),
(5753, 2, 5, 27, 12, 1),
(5754, 2, 6, 31, 12, 1),
(5755, 2, 7, 43, 12, 1),
(8547, 13, 42, 133, 1, 1),
(8548, 13, 42, 135, 1, 1),
(8549, 13, 42, 136, 1, 1),
(8550, 13, 42, 144, 1, 1),
(8551, 13, 45, 137, 1, 1),
(8552, 13, 45, 143, 1, 1),
(8553, 13, 45, 145, 1, 1),
(8554, 13, 46, 139, 1, 1),
(8555, 13, 46, 140, 1, 1),
(8556, 13, 46, 141, 1, 1),
(8557, 13, 46, 146, 1, 1),
(8558, 1, 1, 4, 1, 1),
(8559, 1, 1, 5, 1, 1),
(8560, 1, 1, 6, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_of_work`
--
ALTER TABLE `area_of_work`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`category_id`);

--
-- Indexes for table `award_certification`
--
ALTER TABLE `award_certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `company_agreements`
--
ALTER TABLE `company_agreements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forget_password`
--
ALTER TABLE `forget_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`);

--
-- Indexes for table `job_apply_catalog`
--
ALTER TABLE `job_apply_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply_time`
--
ALTER TABLE `job_apply_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apply_id` (`apply_id`);

--
-- Indexes for table `job_boost_payment`
--
ALTER TABLE `job_boost_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post_message`
--
ALTER TABLE `job_post_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal`
--
ALTER TABLE `legal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `management_team`
--
ALTER TABLE `management_team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nid` (`nid`),
  ADD UNIQUE KEY `tin` (`tin`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `master_bank`
--
ALTER TABLE `master_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_bank_branch`
--
ALTER TABLE `master_bank_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_blood_group`
--
ALTER TABLE `master_blood_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_branch`
--
ALTER TABLE `master_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_building`
--
ALTER TABLE `master_building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_department`
--
ALTER TABLE `master_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_designation`
--
ALTER TABLE `master_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_district`
--
ALTER TABLE `master_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_division`
--
ALTER TABLE `master_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_floor`
--
ALTER TABLE `master_floor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `master_gender`
--
ALTER TABLE `master_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_marital_status`
--
ALTER TABLE `master_marital_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_menu`
--
ALTER TABLE `master_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_module`
--
ALTER TABLE `master_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_power`
--
ALTER TABLE `master_power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_role`
--
ALTER TABLE `master_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_section`
--
ALTER TABLE `master_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_shift`
--
ALTER TABLE `master_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_slot`
--
ALTER TABLE `master_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_sub_category`
--
ALTER TABLE `master_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_sub_menu`
--
ALTER TABLE `master_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_thana`
--
ALTER TABLE `master_thana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `master_work_authority`
--
ALTER TABLE `master_work_authority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_year`
--
ALTER TABLE `master_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official_contract`
--
ALTER TABLE `official_contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_link`
--
ALTER TABLE `portfolio_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_installment_type`
--
ALTER TABLE `post_installment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher_agreement`
--
ALTER TABLE `publisher_agreement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`);

--
-- Indexes for table `publisher_agreement_payment`
--
ALTER TABLE `publisher_agreement_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher_investor_agreement`
--
ALTER TABLE `publisher_investor_agreement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`);

--
-- Indexes for table `publisher_investor_agreement_payment`
--
ALTER TABLE `publisher_investor_agreement_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_payment`
--
ALTER TABLE `subscription_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role_permission`
--
ALTER TABLE `user_role_permission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_of_work`
--
ALTER TABLE `area_of_work`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `award_certification`
--
ALTER TABLE `award_certification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `company_agreements`
--
ALTER TABLE `company_agreements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `forget_password`
--
ALTER TABLE `forget_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `job_apply_catalog`
--
ALTER TABLE `job_apply_catalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job_apply_time`
--
ALTER TABLE `job_apply_time`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job_boost_payment`
--
ALTER TABLE `job_boost_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `job_post_message`
--
ALTER TABLE `job_post_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `legal`
--
ALTER TABLE `legal`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `management_team`
--
ALTER TABLE `management_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `master_bank`
--
ALTER TABLE `master_bank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_bank_branch`
--
ALTER TABLE `master_bank_branch`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_blood_group`
--
ALTER TABLE `master_blood_group`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_branch`
--
ALTER TABLE `master_branch`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_building`
--
ALTER TABLE `master_building`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_category`
--
ALTER TABLE `master_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `master_department`
--
ALTER TABLE `master_department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_designation`
--
ALTER TABLE `master_designation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_district`
--
ALTER TABLE `master_district`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `master_division`
--
ALTER TABLE `master_division`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_floor`
--
ALTER TABLE `master_floor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_gender`
--
ALTER TABLE `master_gender`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_marital_status`
--
ALTER TABLE `master_marital_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_menu`
--
ALTER TABLE `master_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `master_module`
--
ALTER TABLE `master_module`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `master_power`
--
ALTER TABLE `master_power`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_role`
--
ALTER TABLE `master_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `master_section`
--
ALTER TABLE `master_section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_shift`
--
ALTER TABLE `master_shift`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_slot`
--
ALTER TABLE `master_slot`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_sub_category`
--
ALTER TABLE `master_sub_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=710;

--
-- AUTO_INCREMENT for table `master_sub_menu`
--
ALTER TABLE `master_sub_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `master_thana`
--
ALTER TABLE `master_thana`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `master_work_authority`
--
ALTER TABLE `master_work_authority`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_year`
--
ALTER TABLE `master_year`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nominee`
--
ALTER TABLE `nominee`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `official_contract`
--
ALTER TABLE `official_contract`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `portfolio_link`
--
ALTER TABLE `portfolio_link`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post_installment_type`
--
ALTER TABLE `post_installment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `publisher_agreement`
--
ALTER TABLE `publisher_agreement`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `publisher_agreement_payment`
--
ALTER TABLE `publisher_agreement_payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `publisher_investor_agreement`
--
ALTER TABLE `publisher_investor_agreement`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `publisher_investor_agreement_payment`
--
ALTER TABLE `publisher_investor_agreement_payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `subscription_payment`
--
ALTER TABLE `subscription_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role_permission`
--
ALTER TABLE `user_role_permission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8561;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_apply_time`
--
ALTER TABLE `job_apply_time`
  ADD CONSTRAINT `job_apply_time_ibfk_1` FOREIGN KEY (`apply_id`) REFERENCES `job_apply` (`id`);

--
-- Constraints for table `master_floor`
--
ALTER TABLE `master_floor`
  ADD CONSTRAINT `master_floor_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `master_building` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
