-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 11:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bharosha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `com_aginst` varchar(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `policy_type` varchar(50) NOT NULL,
  `complaint_type` varchar(50) NOT NULL,
  `complaint_descr` varchar(50) NOT NULL,
  `identifier_type` varchar(50) NOT NULL,
  `long_field` varchar(50) NOT NULL,
  `text_area` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`sno`, `name`, `mobile_number`, `email`, `code`, `district`, `state`, `com_aginst`, `company_name`, `policy_type`, `complaint_type`, `complaint_descr`, `identifier_type`, `long_field`, `text_area`, `filename`) VALUES
(30, 'Md. Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '5678', 'jgfhgd', 'Dhaka', '1', '', '2', '1', '3', '', 'hjdfgdhhj', 'jkfgdffy', '01.04.PNG'),
(33, 'abc', '222', '1@gmail.com', '', '', '', 'Select', '', 'Select', 'Select', 'Select', '', '', '', ''),
(34, 'abc', '222', '1@gmail.com', '', '', '', 'Select', '', 'Select', 'Select', 'Select', '', '', '', ''),
(36, 'ddfjdjf', '12345', 'a@gmail.com', '1233', '342fsdkfds', 'ass', 'Select', '', 'Select', 'Select', 'Select', '', '', '', ''),
(37, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.02.PNG'),
(38, 'sddsfdf', '1234', 'mmottaleb171246@bscse.uiu.ac.bd', '1234', 'fdfdgf12', 'Dhaka123', '1', '', '1', '1', '1', '', 'dgfdgfg', 'fgfgfg', '01.02.PNG'),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.PNG'),
(40, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4', '342fsdkfds', 'Dhaka', '2', '', '2', '2', '2', 'Policy Number', 'dkfkdfd', 'dfdfdfd', '01.PNG'),
(41, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1.12.PNG'),
(42, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '56', '56777889fdd', 'Dhaka', '2', '', '2', '1', '2', 'Certificate Number', '6766', 'ytyyy', '1.12.PNG'),
(45, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4444', '342fsdkfds', 'Dhaka454', '2', '', '1', '1', '2', 'Proposal Number', 'dksfdkfd', 'dfkdfd;fhdfkdfehdkfdkfkd', '01.PNG'),
(46, 'jdjf', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4434', '342fsdkfds', '23', 'Select', '', '2', '2', '3', 'Proposal Number', 'dfdkfjd', 'kdsfdshfhlkdf', ''),
(48, 'dfdfd', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '3457', '3454dddf', 'Dhaka3434', '1', '', '1', '1', '2', 'Proposal Number', '5644545', 'dsfkdfkd', '1.12.PNG'),
(49, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '2345', 'jgfhgd', 'Dhaka', 'Select', '', '1', '3', '2', '', '', 'eretrt', ''),
(50, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.02.PNG'),
(51, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '1112', 'jgfhgd', 'Dhaka', '1', '', '2', '3', '1', 'Proposal Number', '45456', '4545', '01.02.PNG'),
(52, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.04.PNG'),
(53, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '1233', '342fsdkfds', 'Dhaka', '1', '', '2', '3', '2', 'Policy Number', '345', 'rrtry', '01.04.PNG'),
(54, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '5677', 'jgfhgd', 'Dhaka', 'Select', '', '1', '3', '2', 'Policy Number', '678', '', ''),
(55, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1.12.PNG'),
(56, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '2346', 'jgfhgd', 'Dhaka', '1', '', '2', '2', '2', 'Proposal Number', '566', '677', '1.12.PNG'),
(57, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4567', '342fsdkfds', 'Dhaka', '1', '', '2', '2', '2', 'Proposal Number', '676', '67hjdfs', ''),
(58, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01..6.PNG'),
(59, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4566', 'jgfhgd', 'Dhaka', '1', '', '2', '3', '2', 'Proposal Number', '67676', '565767dgfgfh', '01..6.PNG'),
(60, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4566', '56777889fdd', 'Dhaka', '2', '', '2', '2', '2', 'Proposal Number', '354656', '54666', ''),
(61, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.02.PNG'),
(62, 'dfdfdfd', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '34355', 'jgfhgd', 'Dhaka', '2', '', '1', '3', '3', 'Proposal Number', '', '', '01.02.PNG'),
(63, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.04.PNG'),
(64, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4567', '342fsdkfds', 'Dhaka', '2', '', '2', '2', '3', 'Proposal Number', '78778', 'sdjghkjffgfgghgh', '01.04.PNG'),
(65, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1.7777.PNG'),
(66, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4567', '342fsdkfds', 'Dhaka', '2', '2', '1', '1', '2', 'Proposal Number', '6789', 'dfdgfdh', '1.7777.PNG'),
(67, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.1.PNG'),
(68, 'Md Mottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '5679', '342fsdkfds', 'Dhaka', 'Select', '1', '2', '1', '3', 'Proposal Number', '4567', '87766', '01.1.PNG'),
(69, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.04.PNG'),
(70, 'MdMottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '4567', '56777889fdd', 'Dhaka', '2', '1', '1', '2', '3', 'Proposal Number', '89087', 'hgfgdsgfgfhhf', '01.04.PNG'),
(71, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01.PNG'),
(72, 'MdMottaleb Jeabon', '01705327940', 'mmottaleb171246@bscse.uiu.ac.bd', '1234', 'tyrehggfg', 'Dhaka', '3', '2', '2', '1', '2', 'Policy Number', '4567', 'aettyyuidhgdd', '01.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `password`) VALUES
(3, '<br />\r\n<b>Notice</b>:  Undefined variable: row in <b>C:xampphtdocsBharoshaUser\register.php</b> on line <b>70</b><br />\r\n<br />\r\n<b>Notice</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsBharoshaUser\register.php</b> on line <b', '', ''),
(6, 'name', 'email', 'password'),
(7, 'dsfdfg', 'dfdfd@gmail.com', 'dfdfdfdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
