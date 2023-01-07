-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 07:10 PM
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
-- Database: `scdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocates`
--

CREATE TABLE `advocates` (
  `slno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` int(50) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `acheivments` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advocates`
--

INSERT INTO `advocates` (`slno`, `name`, `code`, `mobile_no`, `email_id`, `address`, `charge`, `acheivments`, `timestamp`) VALUES
(7, 'Nikhil Raj', 656, 2147483647, 'nikhilraj2061@gmail.com', 'Sharma kiran near muktinath temple', 'hghjh', 'y8y 87yboi87', '2022-01-12 20:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `casec`
--

CREATE TABLE `casec` (
  `ccode` int(15) NOT NULL,
  `category` varchar(100) NOT NULL,
  `scategory` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casec`
--

INSERT INTO `casec` (`ccode`, `category`, `scategory`, `timestamp`) VALUES
(50, 'bb', '  m b', '2022-01-13 11:15:44'),
(20, 'hbvhjb', 'bhjvh\r\n', '2022-01-13 11:13:14'),
(6565, 'fsdjhjsfdb', 'vxcznbcbx', '2022-01-12 17:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `caveat`
--

CREATE TABLE `caveat` (
  `cavno` int(100) NOT NULL,
  `slci` varchar(100) DEFAULT NULL,
  `diaryno` int(15) DEFAULT NULL,
  `cause` varchar(100) DEFAULT NULL,
  `padvo` varchar(100) DEFAULT NULL,
  `radvo` varchar(100) DEFAULT NULL,
  `cfees` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caveat`
--

INSERT INTO `caveat` (`cavno`, `slci`, `diaryno`, `cause`, `padvo`, `radvo`, `cfees`, `timestamp`) VALUES
(0, '', 0, '', '', '', '', '2022-01-12 22:15:44'),
(55, 'GFHBDFG', 0, 'sa', 'DFGBGDF', 'FGD', '435', '2022-01-13 07:58:13'),
(5465, 'vvgvj', 5, 'ftufy', ' bn n ', 'bhbjh', '5000', '2022-01-12 18:14:14'),
(54654, 'vvgvj', 5, 'ftufy', ' bn n jh', 'bhbjh', '5000', '2022-01-13 07:46:26'),
(54655, 'vvgvj', 5, 'ftufy', ' bn n jh', 'asdasdsa', '5000', '2022-01-13 07:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `courtfees`
--

CREATE TABLE `courtfees` (
  `casetype` varchar(100) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `scategory` varchar(100) NOT NULL,
  `fees` int(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courtfees`
--

INSERT INTO `courtfees` (`casetype`, `category`, `scategory`, `fees`, `timestamp`) VALUES
('50', 'bb', '  m b', 0, '2022-01-13 11:11:30'),
('jbjh', 'bb', '  m b', 500, '2022-01-13 08:06:21'),
('jbjh', 'bb', '  m b', 50000, '2022-01-12 18:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `cno` int(255) NOT NULL,
  `diaryno` int(255) DEFAULT NULL,
  `ctype` varchar(100) DEFAULT NULL,
  `cyear` varchar(100) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `rname` varchar(100) DEFAULT NULL,
  `radvocates` varchar(100) DEFAULT NULL,
  `padvocates` varchar(100) DEFAULT NULL,
  `judges` varchar(100) DEFAULT NULL,
  `nh` varchar(100) DEFAULT NULL,
  `jd` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`cno`, `diaryno`, `ctype`, `cyear`, `pname`, `rname`, `radvocates`, `padvocates`, `judges`, `nh`, `jd`, `description`, `timestamp`) VALUES
(5465, 5, 'nb bv', '6565-54-56', ' bn n ', 'bhbjh', 'bjhbhbj', 'nmmml', 'opkiopkop', '6546-45-21', '6546-45-21', 'vukugh', '2022-01-12 18:12:18'),
(54654, 4, 'nb bv4', '2000-54-56', ' bn n jh', 'asdasdsa', 'dasDSDFDW', 'REWGER', 'RFWRE', '2001-45-21', '', 'EWREQW', '2022-01-12 22:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `efile`
--

CREATE TABLE `efile` (
  `id` int(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `aadharno` int(15) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `csubject` varchar(100) DEFAULT NULL,
  `cfdetail` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `efile`
--

INSERT INTO `efile` (`id`, `name`, `dob`, `address`, `state`, `district`, `pincode`, `gender`, `aadharno`, `phone`, `email`, `csubject`, `cfdetail`, `timestamp`) VALUES
(0, 'Nikhil Raj', '30-01-2001', 'Sharma kiran near muktinath temple', 'Bihar', 'muzaffarpur', 842002, 'male', 2147483647, 2147483647, 'nikhilraj2061@gmail.com', 'b b b n m', 'frdkytfgfg', '2022-01-12 18:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `judgement`
--

CREATE TABLE `judgement` (
  `caseno` int(15) NOT NULL,
  `jd` varchar(600) NOT NULL,
  `description` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `judgement`
--

INSERT INTO `judgement` (`caseno`, `jd`, `description`) VALUES
(4, '2565-44-26', 'bvhkgvcgyuu'),
(5, 'CDSF', 'GNBHTREMJYMNHGFsgf'),
(21, '2565-44-26', 'vukugh');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `slno` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `doa` varchar(100) NOT NULL,
  `dor` varchar(100) NOT NULL,
  `nj` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`slno`, `id`, `name`, `designation`, `dob`, `doa`, `dor`, `nj`, `about`, `timestamp`) VALUES
(4, '1665', 'Nikhil Raj', 'sdds', '1990-07-06', '2005-07-18', '2016-07-18', 'mnXjzN', 'dsc ndsmmcnds', '2022-01-12 21:28:04'),
(5, '1665', 'Nikhil Raj', 'sdds', '1990-07-06', '2005-07-18', '2016-07-18', 'mnXjzN', 'dsc ndsmmcnds', '2022-01-12 22:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `timestamp`) VALUES
('Nikhil', '1234', '2022-01-12 17:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `title` varchar(100) DEFAULT NULL,
  `notice` varchar(700) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`title`, `notice`, `timestamp`) VALUES
('toddy', 'hii', '2022-01-12 17:53:18'),
('', 'jhjhk', '2022-01-12 18:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `triggerjudgement`
--

CREATE TABLE `triggerjudgement` (
  `cno` int(100) NOT NULL,
  `diaryno` varchar(100) DEFAULT NULL,
  `ctype` varchar(100) DEFAULT NULL,
  `cyear` varchar(100) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `rname` varchar(100) DEFAULT NULL,
  `radvocates` varchar(100) DEFAULT NULL,
  `padvocates` varchar(100) DEFAULT NULL,
  `judges` varchar(100) DEFAULT NULL,
  `nh` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `triggerjudgement`
--

INSERT INTO `triggerjudgement` (`cno`, `diaryno`, `ctype`, `cyear`, `pname`, `rname`, `radvocates`, `padvocates`, `judges`, `nh`, `description`, `timestamp`) VALUES
(5, '656', 'cdwqc', '2001-12-30', 'ewce', 'efewr', 'rewfer', 'ferwfrwe', 'rewwrerf', 'rr43f4rer', 'fevergr', '2022-01-13 18:52:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocates`
--
ALTER TABLE `advocates`
  ADD PRIMARY KEY (`slno`,`name`,`code`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `casec`
--
ALTER TABLE `casec`
  ADD PRIMARY KEY (`scategory`,`category`);

--
-- Indexes for table `caveat`
--
ALTER TABLE `caveat`
  ADD PRIMARY KEY (`cavno`);

--
-- Indexes for table `courtfees`
--
ALTER TABLE `courtfees`
  ADD PRIMARY KEY (`fees`);

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `efile`
--
ALTER TABLE `efile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judgement`
--
ALTER TABLE `judgement`
  ADD PRIMARY KEY (`caseno`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`slno`,`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice`);

--
-- Indexes for table `triggerjudgement`
--
ALTER TABLE `triggerjudgement`
  ADD PRIMARY KEY (`cno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocates`
--
ALTER TABLE `advocates`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
