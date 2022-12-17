-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 02:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `geting_touch_tbl`
--

CREATE TABLE `geting_touch_tbl` (
  `id` int(10) NOT NULL,
  `g_email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geting_touch_tbl`
--

INSERT INTO `geting_touch_tbl` (`id`, `g_email`, `msg`, `date_time`) VALUES
(1, 'ss@ss.com', '', '2022-11-28 05:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset_tbl`
--

CREATE TABLE `pass_reset_tbl` (
  `id` int(10) NOT NULL,
  `pass_username` varchar(255) NOT NULL,
  `pass_email` varchar(255) NOT NULL,
  `otp_no` varchar(5) NOT NULL,
  `change_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_reset_tbl`
--

INSERT INTO `pass_reset_tbl` (`id`, `pass_username`, `pass_email`, `otp_no`, `change_date`) VALUES
(0, 'Jehan', 'jehankandysl@gmail.com', '28000', '2022-12-02 17:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `plan_tbl`
--

CREATE TABLE `plan_tbl` (
  `id` int(10) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `20p` varchar(255) NOT NULL,
  `40p` varchar(255) NOT NULL,
  `60p` varchar(255) NOT NULL,
  `80p` varchar(255) NOT NULL,
  `100p` varchar(255) NOT NULL,
  `plan_status` int(1) NOT NULL,
  `add_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_tbl`
--

INSERT INTO `plan_tbl` (`id`, `plan_name`, `20p`, `40p`, `60p`, `80p`, `100p`, `plan_status`, `add_date`) VALUES
(1, 'BIgneer 1', '10 pushups', '15 pushups', '20 pushups', '25 pushups', '30 pushups', 1, '2022-12-16 11:29:23'),
(2, 'BIgneer 2', '20 pushups', '40 pushups', '60 pushups', '80 pushups', '100 pushups', 1, '2022-12-16 13:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(10) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` double(10,2) NOT NULL,
  `qty` int(10) NOT NULL,
  `is_stock` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `img_status` int(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `product_img`, `p_name`, `p_price`, `qty`, `is_stock`, `status`, `img_status`, `date`) VALUES
(1, 'shopping2.jpg', 'supliment1', 10000.00, 1, 15, 1, 1, '2022-12-13 06:35:41'),
(2, 'body5.jpg', 'supliment2', 15000.00, 1, 10, 1, 1, '2022-12-13 06:35:53'),
(3, 'sup7.png', 'supliment3', 8000.00, 1, 10, 1, 1, '2022-12-13 06:36:07'),
(4, 'sup6.png', 'supliment4', 10000.00, 1, 15, 1, 1, '2022-12-13 06:37:36'),
(5, 'body-about.jpg', 'supliment5', 10000.00, 1, 15, 1, 1, '2022-12-13 06:49:55');

--
-- Triggers `shop`
--
DELIMITER $$
CREATE TRIGGER `update_product_data` BEFORE UPDATE ON `shop` FOR EACH ROW INSERT INTO update_data_shop_tbl SET id = OLD.id, p_name = OLD.p_name, p_price = OLD.p_price, qty = OLD.qty, is_stock = OLD.is_stock, date_update = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `update_data_shop_tbl`
--

CREATE TABLE `update_data_shop_tbl` (
  `id` int(10) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `qty` int(10) NOT NULL,
  `is_stock` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_data_shop_tbl`
--

INSERT INTO `update_data_shop_tbl` (`id`, `p_name`, `p_price`, `qty`, `is_stock`, `status`, `date_update`) VALUES
(1, 'supliment1', '10000.00', 1, 15, 0, '2022-12-13 06:37:43'),
(2, 'supliment2', '15000.00', 1, 10, 0, '2022-12-13 06:37:51'),
(3, 'supliment3', '8000.00', 1, 10, 0, '2022-12-13 06:37:58'),
(4, 'supliment4', '10000.00', 1, 15, 0, '2022-12-13 06:38:13'),
(5, 'supliment5', '10000.00', 1, 15, 0, '2022-12-13 06:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `update_user_tbl`
--

CREATE TABLE `update_user_tbl` (
  `profile_img` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(15) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `change_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_user_tbl`
--

INSERT INTO `update_user_tbl` (`profile_img`, `fname`, `lname`, `u_username`, `user_pass`, `user_email`, `user_address`, `dob`, `nic`, `mobile_no`, `change_date`) VALUES
('', 'Jehan', 'Kandy', 'jehan', '68053af2923e00204c3ca7c6a3150cf7', 'jehankandysl@gmail.com\r\n', '29/3/A, Megodagama, Menikhinna', '2013-12-04', '200105101033', '+94 711758851', '2022-12-16 10:10:52'),
('', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:13:24'),
('', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:13:27'),
('', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:34:13'),
('33.jpg', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:34:17'),
('33.jpg', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:35:25'),
('33.jpg', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:35:43'),
('IMG20210720055935_00.jpg', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:37:07'),
('22.jpg', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:37:13'),
('22.jpg', '', '', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '', '0000-00-00', '', '', '2022-12-16 10:38:07'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-16 12:42:56'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-16 12:45:06'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-16 12:45:09'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-16 12:45:11'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-16 12:56:59'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-16 12:57:03'),
('', '', '', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '', '0000-00-00', '', '', '2022-12-16 12:58:52'),
('', '', '', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '', '0000-00-00', '', '', '2022-12-16 12:58:54'),
('', '', '', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '', '0000-00-00', '', '', '2022-12-16 12:59:17'),
('IMG20210720064048_00.jpg', '', '', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '', '0000-00-00', '', '', '2022-12-16 13:00:06'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-16 13:00:16'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-16 13:03:25'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-16 13:03:31'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-16 13:03:35'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-16 13:03:38'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-16 13:03:46'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-17 17:30:17'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 17:30:37'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-17 17:32:19'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 17:32:21'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-17 17:32:27'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 18:08:42'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 18:51:30'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 18:51:34'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 18:51:38'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 18:51:43'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 18:52:14'),
('1.jpeg', 'Jehan', 'Kandy', 'jehan', '68053af2923e00204c3ca7c6a3150cf7', 'jehankandysl@gmail.com\r\n', '29/3/A, Megodagama, Menikhinna', '2013-12-04', '200105101033', '+94 711758851', '2022-12-17 19:00:38'),
('22.jpg', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', '2022-12-17 19:00:41'),
('IMG20210720064048_00.jpg', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', '2022-12-17 19:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_plan_tbl`
--

CREATE TABLE `user_plan_tbl` (
  `id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `20p` int(1) NOT NULL,
  `40p` int(1) NOT NULL,
  `60p` int(1) NOT NULL,
  `80p` int(1) NOT NULL,
  `100p` int(1) NOT NULL,
  `active_date` datetime NOT NULL,
  `last_update_date` datetime NOT NULL,
  `is_completed` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_plan_tbl`
--

INSERT INTO `user_plan_tbl` (`id`, `user_email`, `plan_name`, `20p`, `40p`, `60p`, `80p`, `100p`, `active_date`, `last_update_date`, `is_completed`) VALUES
(1, 'mkmegodagama@gmail.com', 'BIgneer 1', 1, 1, 1, 1, 1, '2022-12-17 17:32:27', '2022-12-17 17:32:27', 0);

--
-- Triggers `user_plan_tbl`
--
DELIMITER $$
CREATE TRIGGER `updatePlanuser` BEFORE UPDATE ON `user_plan_tbl` FOR EACH ROW INSERT INTO user_plan_tbl_update SET user_email = OLD.user_email, plan_name = OLD.plan_name, finish_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_plan_tbl_update`
--

CREATE TABLE `user_plan_tbl_update` (
  `user_email` varchar(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `finish_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_plan_tbl_update`
--

INSERT INTO `user_plan_tbl_update` (`user_email`, `plan_name`, `finish_date`) VALUES
('learnkandy123@gmail.com', 'BIgneer 1', '2022-12-17 17:21:14'),
('learnkandy123@gmail.com', 'BIgneer 1', '2022-12-17 17:21:31'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:34:32'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:34:48'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:37:42'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:37:44'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:41:39'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:41:49'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:41:53'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:41:58'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:42:18'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:43:36'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:43:53'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:44:29'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:44:32'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:44:33'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:44:35'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:44:37'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:49:35'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:50:42'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:52:48'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:53:48'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 17:57:28'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 18:00:12'),
('mkmegodagama@gmail.com', 'BIgneer 1', '2022-12-17 18:01:20'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:20:46'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:21:22'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:21:24'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:21:54'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:21:56'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:22:25'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:22:30'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:22:34'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:22:36'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:23:52'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:23:53'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:24:51'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:24:54'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:25:03'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:25:05'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:25:49'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:26:05'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:26:11'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:26:14'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:26:16'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:26:19'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:26:24'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:26:37'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:28:33'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:28:37'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:31:14'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:31:18'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:31:25'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:31:35'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:31:41'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:31:45'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:31:49'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:32:03'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:32:08'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:32:12'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:32:16'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:32:20'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:32:24'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:33:16'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:33:20'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:33:22'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:33:27'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:33:27'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:33:28'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:52:05'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:52:06'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:52:06'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:52:07'),
('learnkandy123@gmail.com', 'BIgneer 2', '2022-12-17 18:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(10) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(15) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `any_plan` int(1) NOT NULL,
  `join_date` datetime NOT NULL,
  `user_status` int(1) NOT NULL,
  `is_pending` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `profile_img`, `fname`, `lname`, `u_username`, `user_pass`, `user_email`, `user_address`, `dob`, `nic`, `mobile_no`, `user_type`, `plan_name`, `any_plan`, `join_date`, `user_status`, `is_pending`) VALUES
(1, '', 'Jehan', 'Kandy', 'jehan', '68053af2923e00204c3ca7c6a3150cf7', 'jehankandysl@gmail.com\r\n', '29/3/A, Megodagama, Menikhinna', '2013-12-04', '200105101033', '+94 711758851', 'admin', '', 0, '2022-12-16 10:08:32', 1, 0),
(2, '', 'Kamal', 'Perera', 'kamal', '250cf8b51c773f3f8dc8b4be867a9a02', 'learnkandy123@gmail.com', '29/D, Megodagama, Menihinna', '2001-02-15', '200105101034', '+94 714881276', 'user', '', 0, '2022-12-16 10:11:46', 1, 0),
(3, '', 'Nimal', 'Perera', 'nimal', '202cb962ac59075b964b07152d234b70', 'mkmegodagama@gmail.com', '22, ABC street, Kandy', '2001-06-22', '200105101039', '+94 711758854', 'user', 'BIgneer 1', 1, '2022-12-16 12:58:19', 1, 0);

--
-- Triggers `user_tbl`
--
DELIMITER $$
CREATE TRIGGER `updateUser` BEFORE UPDATE ON `user_tbl` FOR EACH ROW INSERT INTO update_user_tbl SET profile_img = OLD.profile_img, fname = OLD.fname, lname = OLD.lname, u_username  = OLD.u_username, user_pass = OLD.user_pass, user_email  = OLD.user_email,  user_address  = OLD.user_address, dob = OLD.dob,  nic = OLD.nic,   mobile_no = OLD.mobile_no, change_date = NOW()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geting_touch_tbl`
--
ALTER TABLE `geting_touch_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass_reset_tbl`
--
ALTER TABLE `pass_reset_tbl`
  ADD PRIMARY KEY (`pass_username`,`pass_email`,`otp_no`);

--
-- Indexes for table `plan_tbl`
--
ALTER TABLE `plan_tbl`
  ADD PRIMARY KEY (`id`,`plan_name`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_plan_tbl`
--
ALTER TABLE `user_plan_tbl`
  ADD PRIMARY KEY (`id`,`user_email`,`plan_name`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`,`u_username`,`user_email`,`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geting_touch_tbl`
--
ALTER TABLE `geting_touch_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_tbl`
--
ALTER TABLE `plan_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_plan_tbl`
--
ALTER TABLE `user_plan_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
